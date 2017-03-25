<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = 'Dosen';
    protected $fillable = ['id','nama','nip','alamat','pengguna_id','created_at','updated_at'];
}
