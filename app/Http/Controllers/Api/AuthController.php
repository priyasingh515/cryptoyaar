<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Otp;

class AuthController extends Controller
{
    //
    public function sendOtp(Request $request)
    {
        $request->validate([
            'phone' => 'required|digits:10'
        ]);

        $otp = rand(100000,999999);

        Otp::updateOrCreate(
            ['phone' => $request->phone],
            [
            'otp' => $otp,
            'expires_at' => now()->addMinutes(5)
            ]
        );

        // SMS gateway yahan lagega
        return response()->json([
            'status' => true,
            'otp' => $otp // testing ke liye
        ]);
    }

    public function verifyOtp(Request $request)
    {
        $request->validate([
            'phone' => 'required',
            'otp' => 'required'
        ]);

        $otpData = Otp::where('phone',$request->phone)
            ->where('otp',$request->otp)
            ->where('expires_at','>=',now())
            ->first();

        if(!$otpData){
            return response()->json(['error'=>'Invalid OTP'],401);
        }

        $user = User::firstOrCreate(
            ['phone'=>$request->phone],
            ['role'=>'user']
        );

        $token = $user->createToken('api-token')->plainTextToken;

        return response()->json([
            'token' => $token,
            'user' => $user
        ]);
    }


}
