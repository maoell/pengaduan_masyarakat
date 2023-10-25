<?php

namespace App\Http\Controllers;
use illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class loginPetugasController extends Controller
{
    public function login_petugas(){

        return view('login_petugas');
    }               
    function proses_login_petugas(request $request){           
    $data = $request->only('username','password');    
    if(Auth::guard("petugas")->attempt($data)){
        return redirect('halaman_petugas');
    }else{
        return redirect("login_petugas")->with("error","username atau password salah");
    }
    }                                                                                                   
    public function home(){
        return "ini homee";     
    }
    function logout_petugas(){
        Auth::guard("petugas")->logout();

        return redirect('/login_petugas');
    }

 }
  