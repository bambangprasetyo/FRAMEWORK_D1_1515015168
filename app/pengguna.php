<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class pengguna extends Model implements AuthenticatableContract
{
    use Authenticatable;
    protected $table = 'pengguna';
    protected $guarded = ['id'];
    //protected $fillable = ['username','password'];

    public function Dosen()
    {
    	return $this->hasOne(Dosen::class);
    }
        public function Mahasiswa()
    {
    	return $this->hasOne(Mahasiswa::class);
    }
    // public function peran()
    //  {
    //  	return $this->belongToMany(peran::class);
    //  }
}
