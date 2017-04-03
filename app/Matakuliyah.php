<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matakuliyah extends Model
{
    protected $table = 'matakuliyah';
    protected $fillable = ['id','title','keterang','created_at','updated_at'];
    public function Dosen_Matakuliyah()
    {
    	return $this->hasMany(Dosen_Matakuliyah::class);
    }
}
