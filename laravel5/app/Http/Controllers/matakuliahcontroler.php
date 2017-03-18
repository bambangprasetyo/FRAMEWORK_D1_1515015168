<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\matakuliah;

class matakuliahcontroler extends Controller
{
   public function awal()
	{
		return "Hello dari matakuliahControler";
	}

	public function tambah()
	{
		return $this->simpan();
	}
	public function simpan()
	{
		$matakuliah = new matakuliah();
		$matakuliah->title = 'Agama Islam';
		$matakuliah->keterangan = 'Wajib';
		$matakuliah->save();
		return "data dengan username {$matakuliah->title} telah disimpan";
	}
}
