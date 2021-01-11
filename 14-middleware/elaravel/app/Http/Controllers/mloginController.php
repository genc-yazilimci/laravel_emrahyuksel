<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class mloginController extends Controller
{
    public function index(Request $request)
    {
        return view('mlogin');

    }

    public function authenticate(Request $request)
    {
//        $credentials=$request->only('email','password');
//
//        if (Auth::attempt($credentials))
//        {
//           return redirect()->intended('home');
//        } else {
//
//            echo "böyle bir kayıt yok";
//        }


        $remember=$request->has('remember') ? true : false;
        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
            'id' => 1
        ],$remember))
        {
            return redirect()->intended('home');
        } else {
            echo "böyle bir kayıt yok";
        }

    }

    public function mlogout()
    {
        Auth::logout();
        return redirect('mlogin');
    }
}
