<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if($request->isMethod('get'))
        {
            return view('auth.login');
        }
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect(route('home'))->with('login', 'You have been logged in');
        }
        return redirect()->back()->with('login', 'Invalid credentials');
    }

    public function register(Request $request)
    {
        if($request->isMethod('get'))
        {
            return view('auth.register');
        }
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed'
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        // $credentials = $request->only('name', 'email', 'password');
        // $credentials['password'] = bcrypt($credentials['password']);
        // $user = User::create($credentials);

        return redirect(route('login'))->with('register', 'You have been registered');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('login'))->with('logout', 'You have been logged out');
    }
}
