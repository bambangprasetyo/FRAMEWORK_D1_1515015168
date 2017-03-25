<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal_Matakuliyah extends Model
{
    protected $table = 'Jadwal_Matakuliyah';
    protected $fillable = ['id','mahasiswa_id','ruangan_id','dosen_matakuliyah_id','created_at','updated_at'];
}
