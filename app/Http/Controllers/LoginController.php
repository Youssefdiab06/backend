<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
            'role' => ['required']
        ]);

        if (Auth::attempt(['email' => $credentials['email'], 'password' => $credentials['password']])) {
            $user = Auth::user();

            // Check if role matches
            if ($user->role === $credentials['role']) {
                return redirect()->route('admin.dashboard');
            } else {
                Auth::logout();
                return back()->withErrors(['role' => 'Incorrect role selected.']);
            }
        }

        return back()->withErrors(['email' => 'Invalid email or password.']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}