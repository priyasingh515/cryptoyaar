<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function show()
    {
        return response()->json(auth()->user());
    }

    public function update(Request $request)
    {
        auth()->user()->update($request->only([
            'name','email','occupation','pan_no'
        ]));

        return response()->json([
            'status'=>true,
            'message'=>'Profile updated'
        ]);
    }

}
