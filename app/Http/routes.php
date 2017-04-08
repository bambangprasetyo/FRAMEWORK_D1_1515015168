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
Route::get('pengguna','PenggunaController@awal');
Route::get('ruangan','RuanganController@awal');
Route::get('Matakuliyah','MatakuliyahController@awal');
Route::get('mahasiswa','MahasiswaController@awal');
Route::get('dosen','DosenController@awal');
Route::get('dosen_Matakuliyah','Dosen_MatakuliyahController@awal');
Route::get('jadwal_Matakuliyah','Jadwal_MatakuliyahController@awal');


Route::get('pengguna/tambah','PenggunaController@tambah');
Route::get('ruangan/tambah','RuanganController@tambah');
Route::get('Matakuliyah/tambah','MatakuliyahController@tambah');
Route::get('mahasiswa/tambah','MahasiswaController@tambah');
Route::get('dosen/tambah','DosenController@tambah');
Route::get('dosen_Matakuliyah/tambah','Dosen_MatakuliyahController@tambah');
Route::get('jadwal_Matakuliyah/tambah','Jadwal_MatakuliyahController@tambah');


Route::get('pengguna/{pengguna}','PenggunaController@lihat');
Route::get('ruangan/{ruangan}','RuanganController@lihat');
Route::get('Matakuliyah/{Matakuliyah}','MatakuliyahController@lihat');
Route::get('mahasiswa/{mahasiswa}','MahasiswaController@lihat');
Route::get('dosen/{dosen}','DosenController@lihat');
Route::get('dosen_Matakuliyah/{dosen_Matakuliyah}','Dosen_MatakuliyahController@lihat');
Route::get('jadwal_Matakuliyah/{jadwal_Matakuliyah}','Jadwal_MatakuliyahController@lihat');


Route::post('pengguna/simpan','PenggunaController@simpan');
Route::get('pengguna/edit/{pengguna}','PenggunaController@edit');
Route::post('pengguna/edit/{pengguna}','PenggunaController@update');
Route::get('pengguna/hapus/{pengguna}','PenggunaController@hapus');
Route::get('pengguna/lihat/{Pengguna}','PenggunaController@lihat');


Route::post('ruangan/simpan','RuanganController@simpan');
Route::get('ruangan/edit/{ruangan}','RuanganController@edit');
Route::post('ruangan/edit/{ruangan}','RuanganController@update');
Route::get('ruangan/hapus/{ruangan}','RuanganController@hapus');
Route::get('ruangan/lihat/{ruangan}','RuanganController@lihat');


Route::post('Matakuliyah/simpan','MatakuliyahController@simpan');
Route::get('Matakuliyah/edit/{Matakuliyah}','MatakuliyahController@edit');
Route::post('Matakuliyah/edit/{Matakuliyah}','MatakuliyahController@update');
Route::get('Matakuliyah/hapus/{Matakuliyah}','MatakuliyahController@hapus');
Route::get('Matakuliyah/lihat/{Matakuliyah}','MatakuliyahController@lihat');


Route::post('mahasiswa/simpan','MahasiswaController@simpan');
Route::get('mahasiswa/edit/{mahasiswa}','MahasiswaController@edit');
Route::post('mahasiswa/edit/{mahasiswa}','MahasiswaController@update');
Route::get('mahasiswa/hapus/{mahasiswa}','MahasiswaController@hapus');
Route::get('mahasiswa/lihat/{mahasiswa}','MahasiswaController@lihat');


Route::post('dosen/simpan','DosenController@simpan');
Route::get('dosen/edit/{dosen}','DosenController@edit');
Route::post('dosen/edit/{dosen}','DosenController@update');
Route::get('dosen/hapus/{dosen}','DosenController@hapus');
Route::get('dosen/lihat/{dosen}','DosenController@lihat');


Route::post('dosen_Matakuliyah/simpan','Dosen_MatakuliyahController@simpan');
Route::get('dosen_Matakuliyah/edit/{dosen_Matakuliyah}','Dosen_MatakuliyahController@edit');
Route::post('dosen_Matakuliyah/edit/{dosen_Matakuliyah}','Dosen_MatakuliyahController@update');
Route::get('dosen_Matakuliyah/hapus/{dosen_Matakuliyah}','Dosen_MatakuliyahController@hapus');
Route::get('dosen_Matakuliyah/lihat/{dosen_Matakuliyah}','Dosen_MatakuliyahController@lihat');


Route::post('jadwal_Matakuliyah/simpan','Jadwal_MatakuliyahController@simpan');
Route::get('jadwal_Matakuliyah/edit/{jadwal_Matakuliyah}','Jadwal_MatakuliyahController@edit');
Route::post('jadwal_Matakuliyah/edit/{jadwal_Matakuliyah}','Jadwal_MatakuliyahController@update');
Route::get('jadwal_Matakuliyah/hapus/{jadwal_Matakuliyah}','Jadwal_MatakuliyahController@hapus');
Route::get('jadwal_Matakuliyah/lihat/{jadwal_Matakuliyah}','Jadwal_MatakuliyahController@lihat');


Route::get('/', function () {
    return view('welcome');

   /* Route::get('hello-world', function () {
    return 'Hello-World';
*/
    /*Route::get('pengguna/{pengguna}'),function($pengguna)
    {
    	return "Hallo world dari pengguna $pengguna";
    */
    });
