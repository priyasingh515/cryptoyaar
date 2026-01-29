<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CreatorRequest;

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

        // already creator?
        if($user->role === 'creator'){
            return response()->json([
                'message' => 'You are already a creator'
            ], 409);
        }

        // already requested?
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

    public function status()
    {
        return response()->json(
            auth()->user()->creatorRequest
        );
    }
}
