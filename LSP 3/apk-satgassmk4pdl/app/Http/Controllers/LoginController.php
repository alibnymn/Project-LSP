<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class LoginController extends Controller
{
    public function postlogin (Request $request){
     //dd($request->all());
     if(Auth::attempt($request->only('email','password'))){
         return redirect('home')->with('status', 'Login Berhasil');
     }
     return redirect('login')->with('status', 'Login Gagal email or password salah');
        return redirect('/');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}