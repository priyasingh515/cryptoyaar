<?php

namespace App\Http\Controllers;

use App\Models\LikeModel;
use App\Models\VideoModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function toggle(Request $request, $videoId)
    {
       $userId = Auth::guard('admin')->id();

        VideoModel::findOrFail($videoId);

        $like = LikeModel::where('user_id', $userId)
                         ->where('video_id', $videoId)
                         ->first();

        if ($like) {
            $like->delete();
            $liked = false;
        } else {
            LikeModel::create([
                'user_id'  => $userId,
                'video_id' => $videoId,
            ]);
            $liked = true;
        }

        $likesCount = LikeModel::where('video_id', $videoId)->count();

        return response()->json([
            'liked' => $liked,
            'likes_count' => $likesCount
        ]);
    }
}
