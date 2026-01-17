<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\VideoModel;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    //
    public function index(){
        $videosdata = VideoModel::get();
        $categories = Category::orderBy('order', 'asc')->get();
        return view('frontend.index',compact('categories','videosdata'));
    }


    public function contact(){
        return view('frontend.contact');
    }

    public function about(){
        return view('frontend.about');
    }

    public function faq(){
        return view('frontend.faq');
    }

    public function privacy(){
        return view('frontend.privacy');
    }
    
    public function terms(){
        return view('frontend.terms');
    }

    public function videodetails($id){
        $video = VideoModel::findOrFail($id);
        $relatedVideos = VideoModel::where('category_id', $video->category_id)
            ->where('id', '!=', $video->id)
            ->latest()
            ->take(10)
            ->get();
        return view('frontend.video_details',compact('video','relatedVideos'));

    }

    public function register(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
            // 'gender'   => 'required|in:male,female,other',
        ]);

        User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
            'role'     => 'user',
        ]);

        return redirect()->back()
            ->with('success', 'Registration successful. Please login.');
    }
}
