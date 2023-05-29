<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register()
    {
        $data['title'] = 'Register';
        return view('register.index', $data);
    }

    public function registerAction(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ]);
        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        $user->save();
        return redirect()->route('user.login')->with('success', 'Registration is Successful, Please Login!');
    }

    public function login()
    {
        $data['title'] = 'Login';
        return view('login.index', $data);
    }

    public function loginAction(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' =>'required',
        ]);

        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }
        return back()->withErrors('password', 'Wrong email or password!');
    }
}