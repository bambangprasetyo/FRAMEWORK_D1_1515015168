<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'Mahasiswa';
    protected $fillable = ['nama','nim','alamat','pengguna_id'];
    public function Pengguna()
    {
        return $this->belongsTo(Pengguna::class);
    }

    public function getUsernameAttribute(){
        return $this->pengguna->username;
    }

    public function listMahasiswaDanNim(){
        $out = [];
        foreach ($this->all() as $mhs) {
            $out[$mhs->id] = "{$mhs->nama} ({$mhs->nim})";
        }
        return $out;
    }
    public function Jadwal_matakuliyah()
    {
    	return $this->hasMany(Jadwal_matakuliyah::class);
    }
}
