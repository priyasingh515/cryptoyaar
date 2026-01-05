<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\CommentModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'video_id'  => 'required|exists:videos,id',
            'comment'   => 'required|string|max:2000',
            'parent_id' => 'nullable|exists:comments,id',
        ]);

        // for testing 
        $userId = Auth::guard('admin')->id() ?? Auth::id();

        if (!$userId) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $comment = CommentModel::create([
            'video_id'  => $request->video_id,
            'user_id'   => $userId,
            'comment'   => $request->comment,
            'parent_id' => $request->parent_id,
        ]);

        return response()->json([
            'success' => true,
            'comment' => $comment->load('user')
        ]);
    }

    public function index($videoId)
    {
        $comments = CommentModel::with(['user', 'replies.user'])
            ->where('video_id', $videoId)
            ->whereNull('parent_id')
            ->latest()
            ->get();

        return response()->json($comments);
    }
}
