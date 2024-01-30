<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    //ACT 15
    public function index()     //sería index porque muestras una lista en una sola vista
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
