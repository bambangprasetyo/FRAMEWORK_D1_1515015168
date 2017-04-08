<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    protected $table = 'Ruangan';
    protected $fillable = ['id','title'];

    public function Jadwal_Matakuliyah()
    {
    	return $this->hasOne(Jadwal_Matakuliyah::class);
    }

}
