<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Show Login View
     */
    public function index()
    {
        $data = [
            'title' => 'Login',
        ];

        return view('auth/login')->with($data);
    }

    /**
     * Log the user in
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['email', 'required'],
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('home');
        }

        return redirect()->back()->with('error', 'The provided credentials did not match our records.');
    }
}
