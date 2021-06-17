<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function halamanlogin(){
        return view('Login.Login-aplikasi');
    }
    public function postlogin(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/home');
        }
        return view('/');

    }
    public function registrasi(){
        return view('Login.registrasi');
    }
    public function simpanregistrasi(Request $request){
        User::create([
            'name' => $request->name,
            'level' => 'user',
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);
        return view('Login.Login-aplikasi');
    }
    public function logout(){
        Auth::logout();
        return redirect('/home');
    }
}
