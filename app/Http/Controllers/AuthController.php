<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (auth()->attempt($credentials)) {
            return redirect()->intended('fm');
        }
        return redirect()->back()->with('error', 'Invalid credentials');
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }

    public function signup(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect('/fm');
    }
}
