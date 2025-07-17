<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginAttempt(Request $request)
    {

        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'username' => 'Login failed. Please check your username and password.',
        ])->onlyInput('username');
    }

    public function login()
    {
        return Auth::check() ? redirect('/') : view('login');
    }

    public function register(Request $request)
    {
    }
}
