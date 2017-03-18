<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\mahasiswa;

class mahasiswacontroler extends Controller
{
    public function awal()
	{
		return "Hello dari mahasiswaControler";
	}

	public function tambah()
	{
		return $this->simpan();
	}
	public function simpan()
	{
		$mahasiswa = new mahasiswa();
		$mahasiswa->nama = 'Bambang Prasetyo';
		$mahasiswa->nim = '1515015168';
		$mahasiswa->alamat = 'Samarinda Seberang';
		$mahasiswa->pengguna_id = '1';
		$mahasiswa->save();
		return "data dengan username {$mahasiswa->nama} telah disimpan";
	}
}
