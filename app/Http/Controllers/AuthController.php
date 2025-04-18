<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('pages.authLogIn');
    }

    public function login(Request $request)
    {

    }

    public function showRegisterForm()
    {
        return view('pages.authSignIn');
    }

    public function register(Request $request)
    {

    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login.view');
    }
}
