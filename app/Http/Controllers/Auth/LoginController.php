<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Log;

class LoginController extends Controller
{
    public function show(){
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            Log::create([
                'level'   => 'info',
                'message' => 'User logged in',
                'context' => ['user_id' => Auth::id(), 'ip' => $request->ip()],
            ]);

            $request->session()->regenerate();

            return redirect()->intended('/home');
        }

        Log::create([
            'level'   => 'warning',
            'message' => 'Login failed',
            'context' => ['email' => $request->email, 'ip' => $request->ip()],
        ]);

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        Log::create([
            'level'   => 'info',
            'message' => 'User logged out',
            'context' => ['user_id' => Auth::id(), 'ip' => $request->ip()],
        ]);

        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
