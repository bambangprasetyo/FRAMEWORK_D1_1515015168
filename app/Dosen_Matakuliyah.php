<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen_Matakuliyah extends Model
{
    protected $table = 'Dosen_Matakuliyah';
    protected $fillable = ['id','dosen_id','matakuliyah_id','created_at','updated_at'];

    public function Dosen()
    {
    	return $this->belongsToMany(Dosen::class);
    }
    public function Matakuliyah()
    {
    	return $this->belongsToMany(Matakuliyah::class);
    }
    public function Jadwal_Matakuliyah()
    {
    	return $this->hasMany(Jadwal_Matakuliyah::class);
    }
}