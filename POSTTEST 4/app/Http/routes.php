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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('hello-word', function () {
//     return ('hello-word');
// });
// //Route::get('pengguna/{pengguna}', function ($pengguna) {
// 	//return "hello-word dari pengguna $pengguna";
// //});
// Route::get('kelasd2/framework/{mhs?}', function ($mhs="Anonim") {
// 	return "Selamat Datang $mhs";
// });

Route::get('pengguna','PenggunaController@awal');
Route::get('pengguna/tambah','PenggunaController@tambah');
Route::get('pengguna/{pengguna}','PenggunaController@lihat');
Route::post('pengguna/simpan','PenggunaController@simpan');
Route::get('pengguna/edit/{pengguna}','PenggunaController@edit');
Route::post('pengguna/edit/{pengguna}','PenggunaController@update');
Route::get('pengguna/hapus/{pengguna}','PenggunaController@hapus');

Route::get('matakuliyah','MatakuliyahController@awal');
Route::get('matakuliyah/tambah','MatakuliyahController@tambah');
Route::get('matakuliyah/{matakuliyah}','MatakuliyahController@lihat');
Route::post('matakuliyah/simpan','MatakuliyahController@simpan');
Route::get('matakuliyah/edit/{matakuliyah}','MatakuliyahController@edit');
Route::post('matakuliyah/edit/{matakuliyah}','MatakuliyahController@update');
Route::get('matakuliyah/hapus/{matakuliyah}','MatakuliyahController@hapus');

Route::get('ruangan','RuanganController@awal');
Route::get('ruangan/tambah','RuanganController@tambah');
Route::get('ruangan/{ruangan}','RuanganController@lihat');
Route::post('ruangan/simpan','RuanganController@simpan');
Route::get('ruangan/edit/{ruangan}','RuanganController@edit');
Route::post('ruangan/edit/{ruangan}','RuanganController@update');
Route::get('ruangan/hapus/{ruangan}','RuanganController@hapus');

Route::get('dosen','DosenController@awal');
Route::get('dosen/tambah','DosenController@tambah');
Route::get('dosen/{dosen}','DosenController@lihat');
Route::post('dosen/simpan','DosenController@simpan');
Route::get('dosen/edit/{dosen}','DosenController@edit');
Route::post('dosen/edit/{dosen}','DosenController@update');
Route::get('dosen/hapus/{dosen}','DosenController@hapus');

Route::get('dosenmatakuliyah','Dosen_MatakuliyahController@awal');
Route::get('dosenmatakuliyah/tambah','Dosen_MatakuliyahController@tambah');
Route::get('dosenmatakuliyah/{dosenmatakuliyah}','Dosen_MatakuliyahController@lihat');
Route::get('dosenmatakuliyah/{dosenmatakuliyah}','Dosen_MatakuliyahController@simpan');
Route::get('dosenmatakuliyah/edit/{dosenmatakuliyah}','Dosen_MatakuliyahController@edit');
Route::get('dosenmatakuliyah/edit/{dosenmatakuliyah}','Dosen_MatakuliyahController@update');
Route::get('dosenmatakuliyah/hapus/{dosenmatakuliyah}','Dosen_MatakuliyahController@hapus');

Route::get('mahasiswa','MahasiswaController@awal');
Route::get('mahasiswa/tambah','MahasiswaController@tambah');
Route::get('mahasiswa/{mahasiswa}','MahasiswaController@lihat');
Route::get('mahasiswa/{mahasiswa}','MahasiswaController@simpan');
Route::get('mahasiswa/edit/{mahasiswa}','MahasiswaController@edit');
Route::get('mahasiswa/edit/{mahasiswa}','MahasiswaController@update');
Route::get('mahasiswa/hapus/{mahasiswa}','MahasiswaController@hapus');

Route::get('jadwal','Jadwal_MatakuliyahController@awal');
Route::get('jadwal/tambah','Jadwal_MatakuliyahController@tambah');
Route::get('jadwal/{jadwal}','Jadwal_MatakuliyahController@lihat');
Route::get('jadwal/{jadwal}','Jadwal_MatakuliyahController@simpan');
Route::get('jadwal/edit/{jadwal}','Jadwal_MatakuliyahController@edit');
Route::get('jadwal/edit/{jadwal}','Jadwal_MatakuliyahController@update');
Route::get('jadwal/hapus/{jadwal}','Jadwal_MatakuliyahController@hapus');


// Route::get('mahasiswa','MahasiswaController@awal');
// Route::get('mahasiswa/tambah','MahasiswaController@tambah');

// Route::get('dosen','DosenController@awal');
// Route::get('dosen/tambah','DosenController@tambah');

// Route::get('matakuliyah','MatakuliyahController@awal');
// Route::get('matakuliyah/tambah','MatakuliyahController@tambah');

// Route::get('dosenmatakuliyah','Dosen_MatakuliyahController@awal');
// Route::get('dosenmatakuliyah/tambah','Dosen_MatakuliyahController@tambah');

// Route::get('jadwal','Jadwal_MatakuliyahController@awal');
// Route::get('jadwal/tambah','Jadwal_MatakuliyahController@tambah');

// Route::get('ruangan','RuanganController@awal');
// Route::get('ruangan/tambah','RuanganController@tambah');