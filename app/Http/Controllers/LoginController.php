<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }
    public function loginuser(Request $request){
        return redirect('/penduduk');
    }
    public function register(){
        return view('register');
    }
    public function registeruser(Request $request){
        return redirect('login');
    }
}
