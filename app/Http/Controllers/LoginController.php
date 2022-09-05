<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    Public function login(){
        return view('login');
    }

    Public function loginproses(Request $request){
        if(Auth::attempt($request->only('email', 'password'))){
            return redirect('/');
        }
        return redirect('/login');
    }

    Public function register(){
        return view('register');
    }

    Public function registeruser(Request $request){
        // dd($request->all());
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);
        return redirect('/login');
    }

    Public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
