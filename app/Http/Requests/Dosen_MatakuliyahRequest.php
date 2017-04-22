<?php

namespace App\Http\Requests;
use App\Http\Requests\Request;


/**
* 
*/
class Dosen_MatakuliyahRequest extends Request
{
	
	public function authorize()
	{
		return true;
	}


	public function rules()
	{
		$validasi = [
		'dosen_id'=>'required',
		'matakuliyah_id'=>'required',
		//'dosen_matakuliyah'=>'required'
	//	'username'=>'required'
		];
		// if($this->is('jadwal_matakuliyah/tambah')){
		// 	$validasi['password'] = 'required';
		// }
		return $validasi;
	}
}