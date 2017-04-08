<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal_Matakuliyah extends Model
{
    protected $table = 'Jadwal_Matakuliyah';
    protected $guarded = ['id'];

    public function Mahasiswa()
    {
    	return $this->belongsTo(Mahasiswa::class,'Mahasiswa_id');
    }
    public function Dosen_Matakuliyah()
    {
    	return $this->belongsTo(Dosen_Matakuliyah::class,'Dosen_Matakuliyah_id');
    }
    public function Ruangan()
    {
    	return $this->belongsTo(Ruangan::class,'Ruangan_id');
    }
}