<?php

namespace App\Http\Requests;
use App\Http\Requests\Request;
//use App\Http\Requests\MahasiswaRequest;

/**
* 
*/
class Jadwal_MatakuliyahRequest extends Request
{
	
	public function authorize()
	{
		return true;
	}


	public function rules()
	{
		$validasi = [
		'mahasiswa'=>'required',
		'ruangan'=>'required|integer',
		'dosen_matakuliyah'=>'required'
	//	'username'=>'required'
		];
		// if($this->is('jadwal_matakuliyah/tambah')){
		// 	$validasi['password'] = 'required';
		// }
		return $validasi;
	}
}