<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\Category;
use App\Models\PlanModel;
use App\Models\Event;
use App\Models\VideoView;
use App\Models\EventInterest;
use App\Models\SupCategory;
use App\Models\supSubcategory;
use App\Models\VideoModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{


    public function expertCategories()
    {
        $categories = Category::where('is_expert_category',1)
                        ->select('id','name','category_image')
                        ->get();

        return response()->json([
            'status' => true,
            'message' => 'Expert Category List',
            'data' => $categories
        ]);
    }
    
    public function faqList()
    {
        $faqs = Faq::select('id','question','answer')->get();

        return response()->json([
            'status' => true,
            'message' => 'FAQ List',
            'data' => $faqs
        ]);
    }

    public function event()
    {
        $events = Event::all();

        return response()->json([
            'status' => true,
            'message' => 'Events list',
            'data' => $events
        ]);
    }

    public function Videos()
    {
        $videos = VideoModel::all();

        return response()->json([
            'status' => true,
            'message' => 'Video List',
            'data' => $videos
        ]);
    }

     public function eventInterested(Request $request)
    {
        $request->validate([
            'event_id' => 'required',
            'user_id' => 'required'
        ]);

        $check = EventInterest::where('event_id',$request->event_id)
                    ->where('user_id',$request->user_id)
                    ->first();

        if($check){
            return response()->json([
                'status'=>false,
                'message'=>'Already Interested'
            ]);
        }

        EventInterest::create([
            'event_id'=>$request->event_id,
            'user_id'=>$request->user_id
        ]);

        return response()->json([
            'status'=>true,
            'message'=>'Interest Added Successfully'
        ]);
    }

    public function planfetch()
    {
        $plans = PlanModel::where('status', 1)->get();

        return response()->json([
            'data' => $plans
        ]);
    }

    

    public function storeWatchTime(Request $request)
    {
        $userId = auth()->user();; 

        if ($request->watch_time < 30) {
            return response()->json(['status' => false]);
        }

        $existing = DB::table('video_views')
            ->where('user_id', $userId)
            ->where('video_id', $request->video_id)
            ->first();

        if ($existing) {

            if ($request->watch_time > $existing->watch_time) {

                DB::table('video_views')
                    ->where('id', $existing->id)
                    ->update([
                        'watch_time' => $request->watch_time,
                        'updated_at' => now()
                    ]);
            }

        } else {

            DB::table('video_views')->insert([
                'user_id' => $userId,
                'video_id' => $request->video_id,
                'watch_time' => $request->watch_time,
                'is_valid' => 1,
                'created_at' => now()
            ]);
        }

        return response()->json(['status' => true]);
    }


    public function saveUserFavourite(Request $request)
    {
        $request->validate([
            'category_ids' => 'required|array',
            'category_ids.*' => 'exists:categories,id'
        ]);

        /** @var \App\Models\User $user */
        $user = auth()->user();

        $user->categories()->sync($request->category_ids);

        $user->is_profile_completed = true;
        $user->save();

        return response()->json([
            'status' => true,
            'message' => 'Categories saved successfully'
        ]);
    }

    public function skipCategory()
    {
        /** @var \App\Models\User $user */
        $user = auth()->user();

        $user->is_profile_completed = false; 
        $user->save();

        return response()->json([
            'status' => true,
            'message' => 'Skipped'
        ]);
    }


    public function getCategories(Request $request)
    {
        $user = auth()->user();

        $favouriteIds = DB::table('user_favourite')
            ->where('user_id', $user->id)
            ->pluck('category_id')
            ->toArray();

        $categories = Category::select('*')
            ->orderByRaw("FIELD(id, " . implode(',', $favouriteIds ?: [0]) . ") DESC")
            ->get();

        return response()->json([
            'status' => true,
            'data' => $categories
        ]);
    }

    public function subcategories($category_id)
    {
        $subcategories = Supcategory::where('category_id', $category_id)->get();

        if ($subcategories->isEmpty()) {
            return response()->json([
                'status' => false,
                'message' => 'No subcategories found',
                'data' => []
            ]);
        }

        return response()->json([
            'status' => true,
            'message' => 'Subcategories list',
            'data' => $subcategories
        ]);
    }

    public function Supsubcategories($category_id)
    {
        $supsubcategories = supSubcategory::where('sub_category_id', $category_id)->get();

        if ($supsubcategories->isEmpty()) {
            return response()->json([
                'status' => false,
                'message' => 'No Sup subcategories found',
                'data' => []
            ]);
        }

        return response()->json([
            'status' => true,
            'message' => ' Sup Subcategories list',
            'data' => $supsubcategories
        ]);
    }

    public function search(Request $request)
    {
        $search = trim($request->search);

        $videos = VideoView::where(function ($query) use ($search) {
                $query->where('title', 'LIKE', "%$search%")
                    ->orWhere('keywords', 'LIKE', "%$search%")
                    ->orWhere('description', 'LIKE', "%$search%");
            })
            ->get();

        return response()->json([
            'status' => true,
            'data' => $videos
        ]);
    }



}
