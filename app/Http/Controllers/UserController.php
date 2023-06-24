<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session as FacadesSession;

class UserController extends Controller
{
    public function create()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('usersMenu')->with('correct', 'Logged in successfully!');
        } else {
            return redirect()->back()->with('incorrect', 'The email or password is incorrect.');
        }
    }

    public function logout()
    {
        FacadesSession::flush();
        Auth::logout();
        return redirect(route('index'))->with('logout', 'Signed out successfully!');
    }
}
