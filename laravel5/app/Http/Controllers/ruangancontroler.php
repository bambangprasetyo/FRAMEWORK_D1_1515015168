<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ruangan;

class ruangancontroler extends Controller
{
   public function awal()
	{
		return "Hello dari ruanganControler";
	}

	public function tambah()
	{
		return $this->simpan();
	}
	public function simpan()
	{
		$ruangan = new ruangan();
		$ruangan->title = 'B12';
		$ruangan->save();
		return "data dengan username {$ruangan->title} telah disimpan";
	}
}
