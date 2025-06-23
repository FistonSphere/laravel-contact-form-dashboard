<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate(
            [
                'email' => 'required|email|exists:users,email',
                'password' => 'required|min:6',
            ],
            [
                'email.required' => 'Email is required',
                'password.required' => 'Password is required',
                'email.exists' => 'Email does not exist in our records',
                'password.min' => 'Password must be at least 6 characters',
            ]
        );

        if (auth()->attempt($request->only('email', 'password'))) {
            return redirect()->route('dashboard')->with('success', 'Login successful');
        } else {
            return redirect()->back()->withErrors(['email' => 'Invalid credentials'])->withInput();
        }
    }
}
