<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Jadwal_Matakuliyah;

class Jadwal_MatakuliyahController extends Controller
{
    public function awal()
   {
         return view('jadwal_matakuliyah.awal',['data'=>Jadwal_Matakuliyah::all()]);
   }
      public function tambah()
   {
         return view('jadwal_matakuliyah.tambah');
   }
      public function simpan(Requests $input)
   {
         $jadwal_matakuliyah = new Jadwal_Matakuliyah();
         $jadwal_matakuliyah->id             = 'N0003';
         $jadwal_matakuliyah->mahasiswa_id      = '16';
         $jadwal_matakuliyah->ruangan_id        = '1';
         $jadwal_matakuliyah->dosen_matakuliyah_id = '23';
         $informasi = $jadwal_matakuliyah->save() ? 'berhasil simpan data':'gagal simpan data';
         return redirect('jadwal_matakuliyah')->with(['informasi'=>$informasi]);
   }
      public function edit($id)
   {
         $jadwal_matakuliyah=Jadwal_Matakuliyah::find($id);
         return view('jadwal_matakuliyah.edit')->with(array('jadwal_matakuliyah' =>$jadwal_matakuliyah));
   }
      public function lihat($id)
   {
         $jadwal_matakuliyah=Jadwal_Matakuliyah::find($id);
         return view('jadwal_matakuliyah.lihat')->with(array('jadwal_matakuliyah' =>$jadwal_matakuliyah));
   }
      public function update($id, Requests $input)
   {
         $jadwal_matakuliyah=Jadwal_Matakuliyah::find($id);
         $jadwal_matakuliyah->title = $input->title;
         $informasi = $jadwal_matakuliyah->save() ? 'berhasil simpan data':'gagal simpan data';
         return redirect('jadwal_matakuliyah')->with(['informasi'=>$informasi]);
   }
      public function hapus($id)
   {
         $jadwal_matakuliyah=Jadwal_Matakuliyah::find($id);
         $informasi = $jadwal_matakuliyah->delete() ? 'berhasil simpan data':'gagal simpan data';
         return redirect('jadwal_matakuliyah')->with(['informasi'=>$informasi]);
   }
}
