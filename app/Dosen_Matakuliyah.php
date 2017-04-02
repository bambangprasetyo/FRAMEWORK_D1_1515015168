<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen_Matakuliyah extends Model
{
    protected $table = 'Dosen_Matakuliyah';
    protected $fillable = ['id','dosen_id','matakuliyah_id','created_at','updated_at'];
}