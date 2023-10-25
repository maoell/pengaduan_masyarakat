<?php

namespace App\Http\Controllers;
use illuminate\Support\Facades\Auth;
use illuminate\Support\Facades\Hash;
use illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    function index(){
        return view("login");
    }
    function login(Request $_request){
        $datalogin = $_request->only("username", "password");
       if (Auth::attempt($datalogin)){
          return redirect('/table');
        }else{
          return redirect("login")->with("error","username atau password salah");
        }
    }

    function logout(){
        Auth::logout();

        return redirect('/home');
    }
}
