<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    //
    public function index(){
        $categories = Category::orderBy('order', 'asc')->get();
        return view('frontend.index',compact('categories'));
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
