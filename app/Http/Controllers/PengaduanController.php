<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PengaduanController extends Controller
{
    function index(){
        // echo "anjay";
           
           $pengaduan = DB::table('pengaduan')->get();
           return view('table', ['pengaduan' => $pengaduan]);
        }
    
    function isi_laporan(){
        // echo "maul";
        return view('isi_laporan');                                                                                                                                                                                                                    
    }    

    function home (){

        $judul = "Selamat Siang";

        return view('home', ['TextJudul' => $judul]);

        
    }
    function update_pengaduan(){
        // echo "maul";
        return view('update');   
    }
   
   


   

    
    

    function proses_tambah_pengaduan(Request $request){

        $request->validate([

            'isi_laporan' => 'required|min:5'
        ]);
        $nama_foto = $request->foto->getClientOriginalName();

        $isi_laporan = $request->isi_laporan;
        $request->validate([

            'isi_laporan' => 'required|min:5'
        ]);
        $request->foto->storeAs('public/image', $nama_foto);

        DB::table('pengaduan')->insert([
            'tgl_pengaduan' => date('Y-m-d'),
            'nik' => '123',
            'isi_laporan' => $isi_laporan,
            'foto' => $request->foto->getClientOriginalName(),
            'status' => '0'
        ]);

        return redirect('/table');
    }
    function proses_update_pengaduan(Request $request, $id){

        $request->validate([

            
        ]);

        $isi_laporan = $request->isi_laporan;
        
      

        DB::table('pengaduan')->where('id_pengaduan', $id)->update([
            'tgl_pengaduan' => date('Y-m-d'),
            'nik' => '33',
            'isi_laporan' => $isi_laporan,
            'foto' => '',
            'status' => '0'
        ]);

        return redirect('/table');
    }
    function hapus($id){
       DB::table('pengaduan')->where('id_pengaduan', '=', $id)->delete();

       return redirect()->back();
    }
    function detail($id){
        $pengaduan = DB::table('pengaduan')->where('id_pengaduan', '=', $id)->get();
        return view('/detail' ,['pengaduan' => $pengaduan]);
     }
     function update($id){
        $pengaduan = DB::table('pengaduan')->where('id_pengaduan', '=', $id)->first();
        return view('/update' ,['pengaduan' => $pengaduan]);
     }
   
      
     
    
}
