<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen;

class dosencontroler extends Controller
{
   public function awal()
	{
		return "Hello dari DosenControler";
	}

	public function tambah()
	{
		return $this->simpan();
	}
	public function simpan()
	{
		$dosen = new dosen();
		$dosen->nama = 'sueb';
		$dosen->nip = '19212812';
		$dosen->alamat = 'Jalan. Bung Tomo';
		$dosen->pengguna_id = '1';
		$dosen->save();
		return "data dengan username {$dosen->nama} telah disimpan";
	}
}
