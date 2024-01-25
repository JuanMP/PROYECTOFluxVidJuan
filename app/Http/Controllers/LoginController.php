<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //ACT 15
    public function signupForm()
    {
        return view('auth.signup');
    }

    public function signup(SignupRequest $request)
    {
        $user = new User();
        $user->username = $request->get('username');
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->birthdate = $request->get('password');
        $user->password = Hash::make($request->get('password'));
        $user->save();

        Auth::login($user);

        return redirect()->route('users.acount');
    }
}
