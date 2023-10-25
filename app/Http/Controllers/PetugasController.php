<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PetugasController extends Controller
{
    function table(){
        // echo "anjay";
           
           $petugas = DB::table('petugas')->get();
           return view('table_petugas', ['petugas' => $petugas]);
        }


    function registrasi_petugas(request $request){

$id_petugas = $request->id_petugas;
        $nama_petugas = $request->nama_petugas;
        
        $username = $request->username;
        $password = $request->password;
        $telp = $request->telp;
        $level = $request->level;


       
        DB::table('petugas')->insert([
                                                                                                                                                                                                                           
            'nama_petugas' => $nama_petugas,
            'username' => $username,
            'password' => hash::make($password),
            'telp' => $telp,
            'level' => $level
        ]);

        return redirect('/login_petugas');
    }


     function buatakunpetugas(){
           return view('registrasipetugas');
        }
        function halaman(){
            return view('halaman_petugas');
         } 
        

    
}
