<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Check Super Admin
        if (Auth::guard('super_admin')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/superadmin/dashboard');
        }

        // Check Admin
        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/admin/dashboard');
        }

        // Check Tendik
        if (Auth::guard('tendik')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/tendik/dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        if (Auth::guard('super_admin')->check()) {
            Auth::guard('super_admin')->logout();
        } elseif (Auth::guard('admin')->check()) {
            Auth::guard('admin')->logout();
        } elseif (Auth::guard('tendik')->check()) {
            Auth::guard('tendik')->logout();
        }

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
