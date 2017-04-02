<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Dosen_Matakuliyah;

class dosen_matakuliyah_MatakuliyahController extends Controller
{
    public function awal()
   {
         return view('dosen_matakuliyah.awal',['data'=>Dosen_Matakuliyah::all()]);
   }
      public function tambah()
   {
         return view('dosen_matakuliyah.tambah');
   }
      public function simpan(Requests $input)
   {
         $dosen_matakuliyah = new Dosen_Matakuliyah();
         $dosen_matakuliyah->id                       = 'N0001';
         $dosen_matakuliyah->dosen_matakuliyah_id     = '8';
         $dosen_matakuliyah->matakuliyah_id           = '2';
         $informasi = $dosen_matakuliyah->save() ? 'berhasil simpan data':'gagal simpan data';
         return redirect('dosen_matakuliyah')->with(['informasi'=>$informasi]);
   }
      public function edit($id)
   {
         $dosen_matakuliyah=Dosen_Matakuliyah::find($id);
         return view('dosen_matakuliyah.edit')->with(array('dosen_matakuliyah' =>$dosen_matakuliyah));
   }
      public function lihat($id)
   {
         $dosen_matakuliyah=Dosen_Matakuliyah::find($id);
         return view('dosen_matakuliyah.lihat')->with(array('dosen_matakuliyah' =>$dosen_matakuliyah));
   }
      public function update($id, Requests $input)
   {
         $dosen_matakuliyah=Dosen_Matakuliyah::find($id);
         $dosen_matakuliyah->title = $input->title;
         $informasi = $dosen_matakuliyah->save() ? 'berhasil simpan data':'gagal simpan data';
         return redirect('dosen_matakuliyah')->with(['informasi'=>$informasi]);
   }
      public function hapus($id)
   {
         $dosen_matakuliyah=Dosen_Matakuliyah::find($id);
         $informasi = $dosen_matakuliyah->delete() ? 'berhasil simpan data':'gagal simpan data';
         return redirect('dosen_matakuliyah')->with(['informasi'=>$informasi]);
   }
}
