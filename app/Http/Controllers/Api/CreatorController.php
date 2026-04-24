<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CreatorRequest;
use App\Models\VideoModel;
use App\Models\VideoView;


class CreatorController extends Controller
{
    //

    public function submit(Request $request)
    {
        $request->validate([
            'youtube_link'    => 'required|url',
            'instagram_link'  => 'nullable|url',
            'top_video_link'  => 'required|url',
        ]);

        $user = auth()->user();

        
        if($user->role === 'creator'){
            return response()->json([
                'message' => 'You are already a creator'
            ], 409);
        }

        if($user->creatorRequest){
            return response()->json([
                'message' => 'Creator request already submitted',
                'status'  => $user->creatorRequest->status
            ], 409);
        }

        CreatorRequest::create([
            'user_id' => $user->id,
            'youtube_link' => $request->youtube_link,
            'instagram_link' => $request->instagram_link,
            'top_video_link' => $request->top_video_link,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Creator request submitted successfully'
        ]);
    }


    // check creator request active or not
    public function status()
    {
        return response()->json(
            auth()->user()->creatorRequest
        );
    }


    public function add_video(Request $request)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'keywords' => 'nullable|string|max:500',
            'video'       => 'required|mimes:mp4,mkv,avi,webm|max:512000',
            'thumbnail'   => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'is_free'     => 'required|boolean',
            'plan_id'     => 'required_if:is_free,0|nullable|exists:plans,id',
        ]);

       
        $keywords = $request->keywords;

        $cleanKeywords = null;

        if ($keywords) {
            $array = explode(',', $keywords);

            $array = array_map(function ($item) {
                return strtolower(trim($item)); 
            }, $array);

            $array = array_filter($array);

            $cleanKeywords = implode(',', $array);
        }

        
        $videoPath = $request->file('video')->store('videos', 'public');
        $thumbnailPath = $request->file('thumbnail')->store('thumbnails', 'public');

        $video = VideoModel::create([
            'title'       => $request->title,
            'description' => $request->description,
            'keywords'    => $cleanKeywords,
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'super_subcategory_id' => $request->super_subcategory_id,
            'plan_id'     => $request->is_free ? null : $request->plan_id,
            'thumbnail'   => $thumbnailPath,
            'video_path'  => $videoPath,
            'is_free'     => $request->is_free,
            'creator_id'  => auth()->id(),
            'uploaded_by' => 'creator',
            'status'      => '0',
            'views'       => 0,
        ]);

        return response()->json([
            'status'  => true,
            'message' => 'Video uploaded successfully, waiting for approval',
            'data'    => $video
        ]);
    }




    
}
