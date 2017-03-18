<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('pengguna','penggunacontroller@awal');
Route::get('dosen','dosencontroler@awal');
Route::get('matakuliah','matakuliahcontroler@awal');
Route::get('ruangan','ruangancontroler@awal');
Route::get('mahasiswa','mahasiswacontroler@awal');
Route::get('jadwal_matakuliah','jadwal_matakuliahcontroler@awal');
Route::get('dosen_matakuliah','dosen_matakuliahcontroler@awal');

Route::get('pengguna/tambah','penggunacontroller@tambah');
Route::get('dosen/tambah','dosencontroler@tambah');
Route::get('matakuliah/tambah','matakuliahcontroler@tambah');
Route::get('ruangan/tambah','ruangancontroler@tambah');
Route::get('mahasiswa/tambah','mahasiswacontroler@tambah');
Route::get('jadwal_matakuliah/tambah','jadwal_matakuliahcontroler@tambah');
Route::get('dosen_matakuliah/tambah','dosen_matakuliahcontroler@tambah');



Route::get('/', function () {
    return view('welcome');
});
