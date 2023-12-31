<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(){
        return view('auth.register');

    }
    public function store(){
        $validate = request()->validate([
                'name' =>'required|min:3|max:40',
                'email'=>'required|email|unique:users,email',
                'password'=>'required|confirmed'
            ]);
        $user = User::create([
            'name' => $validate['name'],
            'email' => $validate['email'],
            'password' => Hash::make($validate['password'])
        ]);
        return redirect()->route('dashboard')->with('success','Account created Successfully');
    }
}
