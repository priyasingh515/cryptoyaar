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
            'name','email','city','occupation','pan_no'
        ]));

        return response()->json([
            'status'=>true,
            'message'=>'Profile updated'
        ]);
    }

    public function whatsappUpdates(Request $request)
    {
        $user = auth()->user();

        $user->whatsapp_updates = $request->whatsapp_updates;
        $user->save();

        return response()->json([
            'status' => true,
            'message' => 'Preference Updated',
            'data' => $user->whatsapp_updates
        ]);
    }

}
