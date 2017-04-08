<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen_Matakuliyah extends Model
{
    protected $table = 'Dosen_Matakuliyah';
    protected $guarded = ['id'];

    public function dosen()
   {
    return $this->belongsTo(dosen::class,'Dosen_id');
   }

   public function jadwal_matakuliyah()
   {
    return $this->hasMany(jadwal_matakuliyah::class);
   }

   public function matakuliyah()
   {
    return $this->belongsTo(matakuliyah::class,'Matakuliyah_id');
   }
   public function listDosenDanMatakuliyah()
   {
      $out = [];
      foreach ($this->all() as $dsnMtk) {
         $out[$dsnMtk->id] = "{$dsnMtk->dosen->nama} (matakuliyah{$dsnMtk->matakuliyah->title})";
      }
      return $out;
   }
}