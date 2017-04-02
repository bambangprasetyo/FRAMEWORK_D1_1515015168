<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Mahasiswa;

class MahasiswaController extends Controller
{
    public function awal()
   {
         return view('mahasiswa.awal',['data'=>Mahasiswa::all()]);
   }
      public function tambah()
   {
         return view('mahasiswa.tambah');
   }
      public function simpan(Requests $input)
   {
         $mahasiswa = new Mahasiswa();
         $mahasiswa->id          = 'N0001';
         $mahasiswa->nama        = 'udang';
         $mahasiswa->nim         = 'K0001';
         $mahasiswa->alamat      = 'jalan lambung';
         $mahasiswa->pengguna_id = '001';
         $informasi = $mahasiswa->save() ? 'berhasil simpan data':'gagal simpan data';
         return redirect('mahasiswa')->with(['informasi'=>$informasi]);
   }
      public function edit($id)
   {
         $mahasiswa=Mahasiswa::find($id);
         return view('mahasiswa.edit')->with(array('mahasiswa' =>$mahasiswa));
   }
      public function lihat($id)
   {
         $mahasiswa=Mahasiswa::find($id);
         return view('mahasiswa.lihat')->with(array('mahasiswa' =>$mahasiswa));
   }
      public function update($id, Requests $input)
   {
         $mahasiswa=Mahasiswa::find($id);
         $mahasiswa->title = $input->title;
         $informasi = $mahasiswa->save() ? 'berhasil simpan data':'gagal simpan data';
         return redirect('mahasiswa')->with(['informasi'=>$informasi]);
   }
      public function hapus($id)
   {
         $mahasiswa=Mahasiswa::find($id);
         $informasi = $mahasiswa->delete() ? 'berhasil simpan data':'gagal simpan data';
         return redirect('mahasiswa')->with(['informasi'=>$informasi]);
   }
}
