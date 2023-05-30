<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Logowanie udane
            return redirect()->route('usersMenu');
        } else {
            // Logowanie nieudane
            return redirect()->back()->withErrors(['email' => 'Nieprawidłowe dane logowania.'])->withInput();
        }
    }
}
