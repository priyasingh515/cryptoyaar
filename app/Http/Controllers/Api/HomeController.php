<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
 use App\Models\Faq;
 use App\Models\Category;
 use App\Models\EventInterest;
use Illuminate\Http\Request;

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

}
