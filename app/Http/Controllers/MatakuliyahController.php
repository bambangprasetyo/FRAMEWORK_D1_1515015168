<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\matakuliyah;

class MatakuliyahController extends Controller
{
    public function awal()
   {
         return view('matakuliyah.awal', ['data'=> matakuliyah::all()]);
   }
      public function tambah()
   {
         return view('matakuliyah.tambah');
   }
      public function simpan(Request $input)
   {
         $matakuliyah = new matakuliyah;
         $matakuliyah->title = $input->title;
         $matakuliyah->keterang = $input->keterang;
         $informasi = $matakuliyah->save() ? 'berhasil simpan data':'gagal simpan data';
         return redirect('matakuliyah')->with(['informasi'=>$informasi]);
   }
      public function edit($id)
   {
         $matakuliyah=matakuliyah::find($id);
         return view('matakuliyah.edit')->with(array('matakuliyah' =>$matakuliyah));
   }
      public function lihat($id)
   {
         $matakuliyah=matakuliyah::find($id);
         return view('matakuliyah.lihat')->with(array('matakuliyah' =>$matakuliyah));
   }
      public function update($id, Request $input)
   {
         $matakuliyah=matakuliyah::find($id);
         $matakuliyah->title = $input->title;
         $matakuliyah->keterang = $input->keterang;
         $informasi = $matakuliyah->save() ? 'berhasil update data':'gagal update data';
         return redirect('matakuliyah')->with(['informasi'=>$informasi]);
   }
      public function hapus($id)
   {
         $matakuliyah=matakuliyah::find($id);
         $informasi = $matakuliyah->delete() ? 'berhasil hapus data':'gagal hapus data';
         return redirect('matakuliyah')->with(['informasi'=>$informasi]);
   }      
}