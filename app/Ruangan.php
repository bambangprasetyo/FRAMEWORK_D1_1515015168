<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    protected $table = 'Ruangan';
    protected $fillable = ['id','title','created_at','updated_at'];
    public function Jadwal_Matakuliah()
    {
    	return $this->hasMany(Jadwal_Matakuliah::class);
    }
}
