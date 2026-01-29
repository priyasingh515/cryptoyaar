<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use App\Models\CommentModel;
use App\Models\VideoModel;
use App\Models\CreatorRequest;

class AdminConroller extends Controller
{
    //
    public function index(){
        $totalUsers = User::count();
        $totalCategory = Category::count();
        $totalStaff = Admin::Where('role_id','3')->count();
        return view('backend.dashboard',compact('totalUsers','totalCategory','totalStaff'));
    }

    
    public function likeTest()
    {
        $videos = VideoModel::all();
        $comment = CommentModel::all();
        return view('backend.video.like-test', compact('videos'));
    }

    public function creatorReq(){
        $creators = CreatorRequest::with('user')->get();
        return view('backend.creator.index',compact('creators'));
    }
}
