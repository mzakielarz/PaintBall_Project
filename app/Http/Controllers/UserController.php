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
            // Logowanie udane
            return redirect()->route('usersMenu');
        } else {
            // Logowanie nieudane
            return redirect()->back()->withErrors(['email' => 'Nieprawidłowe dane logowania.'])->withInput();
        }
    }

    public function logout()
    {
        FacadesSession::flush();
        Auth::logout();
        return redirect(route('index'));
    }
}
