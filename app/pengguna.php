<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
    protected $table = 'pengguna';
    protected $fillable = ['Username','password'];
    public function Mahasiswa()
    {
    	return $this->hasOne(Mahasiswa::class);
    }
    public function dosen()
    {
    	return $this->hasOne(dosen::class);
    }
    public function peran()
    {
    	return $this->belongsToMany(peran::class);
    }
}
