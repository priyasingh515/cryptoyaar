<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
 use App\Models\Faq;
 use App\Models\Category;
 use App\Models\PlanModel;
 use App\Models\VideoView;
 use App\Models\EventInterest;
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

    // public function storeWatchTime(Request $request)
    // {
    //     if ($request->watch_time < 30) {
    //         return response()->json(['status' => false]);
    //     }

    //     DB::table('video_views')->updateOrInsert(
    //         [
    //             'session_id' => $request->session_id
    //         ],
    //         [
    //             'user_id' => 3, // testing
    //             'video_id' => $request->video_id,
    //             'watch_time' => $request->watch_time,
    //             'is_valid' => 1,
    //             'updated_at' => now(),
    //             'created_at' => now()
    //         ]
    //     );

    //     return response()->json(['status' => true]);
    // }

    public function storeWatchTime(Request $request)
    {
        $userId = 3; // testing (baad me auth()->id())

        if ($request->watch_time < 30) {
            return response()->json(['status' => false]);
        }

        $existing = DB::table('video_views')
            ->where('user_id', $userId)
            ->where('video_id', $request->video_id)
            ->first();

        if ($existing) {

            // 🔥 sirf tab update jab new time bada ho
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

        $user = auth()->user();

        $user->categories()->sync($request->category_ids);

        return response()->json([
            'status' => true,
            'message' => 'Categories saved successfully'
        ]);
    }


    public function getCategories(Request $request)
    {
        $user = auth()->user();

        $favouriteIds = DB::table('user_favourite')
            ->where('user_id', $user->id)
            ->pluck('category_id')
            ->toArray();

        $categories = DB::table('categories')
            ->select('*')
            ->orderByRaw("FIELD(id, " . implode(',', $favouriteIds ?: [0]) . ") DESC")
            ->get();

        return response()->json([
            'status' => true,
            'data' => $categories
        ]);
    }

}
