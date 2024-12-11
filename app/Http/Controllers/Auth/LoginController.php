<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();

            if ($user->role === 'super_admin') {
                return redirect()->route('superadmin.dashboard');
            } elseif ($user->role === 'admin') {
                return redirect()->route('admin.dashboard');
            } else {
                Auth::logout();
                return redirect()->route('login')->withErrors('Role tidak dikenali.');
            }
        }

        return back()->withErrors('Email atau password salah.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
