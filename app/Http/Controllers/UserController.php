<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //ACT 15
    public function show()
    {
        $user = auth()->user(); //obtenemos usuario
        return view('users.profile', compact('user'));
    }
}
