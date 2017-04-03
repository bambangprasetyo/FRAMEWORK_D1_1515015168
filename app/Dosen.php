<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = 'Dosen';
    protected $fillable = ['id','nama','nip','alamat','pengguna_id','created_at','updated_at'];

    public function pengguna()
    {
    	return $this->belongsTo(pengguna::class);
    }
    public function
    {
    	return $this->hasMany(Dosen_Matakuliyah::class);
    }
}
