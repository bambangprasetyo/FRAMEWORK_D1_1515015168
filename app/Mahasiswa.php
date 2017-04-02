<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'Mahasiswa';
    protected $fillable = ['id','nama','nim','alamat','pengguna_id','created_at','updated_at'];
}
