<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function login()
    {
        return view('auth.login');
    }

    public function register(Request $request)
    {
            
        return view('auth.register');
    }

    public function forgot()
    {
        return view('auth.forgot');
    }
}
