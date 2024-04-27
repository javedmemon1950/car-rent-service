<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class AuthController extends Controller
{
    function login_form() {
        return view('auth.login');
    }

    function register_form() {
        return view('auth.register');
    }

    function register(Request $request) {
        $request->validate([
            'name' => 'required',
            'contact' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ]);

        $user = new User();

        $user->name = $request->name;
        $user->contact = $request->contact;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->isAdmin = 0;
        $user->save();

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/');
         }

        return redirect()->back()->withErrors('User already exist');
    }

    function login(Request $request) {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:6',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/');
         }

        return redirect()->back()->withErrors('Invalid credentials');
    }

    function logout() {
        Session::flush();
        Auth::logout();
        return redirect('/login');
    }
}
