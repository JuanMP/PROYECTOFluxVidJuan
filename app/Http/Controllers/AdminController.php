<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //ACT 15
    public function show()
    {
        $users = User::all();
        return view('admin.profileAdmin', compact('users'));
    }

    public function destroy (User $user)
    {
        $user->delete();
        return redirect()->route('admin.profileAdmin');
    }
}
