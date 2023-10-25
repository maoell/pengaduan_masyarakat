<?php

use App\Http\Controllers\PengaduanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LoginPetugasController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view ('home');
});

Route::get('/about', function () {
    return view ('about');
   
});
Route::get  ('/login', function () {
    return view ('login');
   
});
Route::post  ('/login', function () {
    return view ('login');
   
});

   

Route::get('/registrasi', [MasyarakatController::class, 'buatakun']) ;
Route::get('/registrasi_petugas', [PetugasController::class, 'buatakunpetugas']) ;

Route::get('/table_masyarakat', [MasyarakatController::class, 'table_masyarakat']) ;
Route::get('/table_petugas', [PetugasController::class, 'table']) ;

Route::get('/logout', [LoginController::class, 'logout']) ;


Route::get('/home', [PengaduanController::class, 'home']) ;

Route::get('/isi_laporan', [PengaduanController::class, 'isi_laporan']) ;


Route::get('/app', function(){
     return view('layouts.app');
});
Route::get('/login', [LoginController::class, 'index'])->name("login") ;
Route::post('/login', [LoginController::class, 'login']) ;
Route::post('/isi_laporan', [PengaduanController::class, 'proses_tambah_pengaduan']) ;
Route::post('/registrasi', [MasyarakatController::class, 'registrasi']) ;
Route::post('/registrasipetugas', [PetugasController::class, 'registrasi_petugas']) ;

Route::middleware(['Auth'])->group(function () {
    Route::get('/hapus_pengaduan/{id}', [PengaduanController::class, 'hapus']) ;
    Route::get('/detail_pengaduan/{id}', [PengaduanController::class, 'detail']) ;
    Route::get('/update_pengaduan/{id}  ', [PengaduanController::class, 'update']) ;
    Route::post('/update_pengaduan/{id}', [PengaduanController::class, 'proses_update_pengaduan']) ;
    Route::get('/home', [PengaduanController::class, 'home']) ;
    Route::get('/isi_laporan', [PengaduanController::class, 'isi_laporan']) ;
    Route::post('/isi_laporan', [PengaduanController::class, 'proses_tambah_pengaduan']) ;
    Route::get('/detail_pengaduan/{id}', [PengaduanController::class, 'detail']) ;
    Route::get('/update_pengaduan/{id}  ', [PengaduanController::class, 'update']) ;
    Route::post('/update_pengaduan/{id}', [PengaduanController::class, 'proses_update_pengaduan']) ;
    Route::get('/table', [PengaduanController::class, 'index']) ;
    });

    Route::post('/login_petugas', [LoginPetugasController::class, 'proses_login_petugas']) ;
    Route::get('/login_petugas', [LoginPetugasController::class, 'login_petugas']) ;


Route::middleware(['cekPetugas'])->group(function () {
    
   
    Route::get('/halaman_petugas', [PetugasController::class, 'halaman']) ;
    Route::get('/halaman_petugas/logout', [LoginPetugasController::class, 'logout_petugas']) ;

});
   







