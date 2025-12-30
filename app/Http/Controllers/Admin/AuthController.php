<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Gregwar\Captcha\CaptchaBuilder;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function loginForm(){
        return view('backend.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'captcha' => 'required|digits:4'
        ]);

        if ($request->captcha != Session::get('captcha')) {
            return back()->withErrors(['captcha' => 'Invalid captcha']);
        }

        if (Auth::guard('admin')->attempt([
            'email' => $request->email,
            'password' => $request->password,
            'is_active' => 1
        ])) {

            Session::forget('captcha'); // clear after success

            return redirect()->route('admin.dashboard');
        }

        return back()->with('error', 'Invalid credentials');
    }

   

    public function captchagenerate()
    {
        $captchaBuilder = new CaptchaBuilder;

        $captchaBuilder->setPhrase(mt_rand(1000, 9999)); 

        $captchaBuilder->build($width = 120, $height = 40, $font = null);
        
        $captchaBuilder->setMaxBehindLines(0);

        Session::put('captcha', $captchaBuilder->getPhrase());

        return response()->stream(function () use ($captchaBuilder) {
            return $captchaBuilder->output();
        }, 200, ['Content-Type' => 'image/jpeg']);
    }


    public function logout(Request $request)
    {
        Auth::guard('admin')->logout(); 

        $request->session()->invalidate(); 
        $request->session()->regenerateToken();

        return redirect()->route('admin.login')
            ->with('success', 'Logged out successfully');
    }

}
