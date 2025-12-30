<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;

class AdminConroller extends Controller
{
    //
    public function index(){
        $totalUsers = User::count();
        $totalCategory = Category::count();
        $totalStaff = Admin::Where('role_id','3')->count();
        return view('backend.dashboard',compact('totalUsers','totalCategory','totalStaff'));
    }
}
