<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matakuliyah extends Model
{
    protected $table = 'matakuliyah';
    protected $fillable = ['id','title','keterang'];

    public function Dosen_Matakuliyah()
    {
    	return $this->hasOne(Dosen_Matakuliyah::class);
    }
}