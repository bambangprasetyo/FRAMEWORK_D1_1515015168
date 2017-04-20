<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Pengguna;

class PenggunaController extends Controller
{
   public function awal()
   {
         return view('pengguna.awal',['data'=>Pengguna::paginate(5)]);//batasan kalau mau semua gunakan all
   }
      public function tambah()
   {
         return view('pengguna.tambah');
   }
      public function simpan(Request $input)
   {
         $this->validate($input,[
               'username'=>"required|unique:pengguna|max:30",
               'password'=>"required|min:5",
            ]);
         $pengguna = new Pengguna;
         $pengguna->Username = $input->username;
         $pengguna->password = $input->password;
         $informasi = $pengguna->save() ? 'berhasil simpan data':'gagal simpan data';
         return redirect('pengguna')->with(['informasi'=>$informasi]);
   }
      public function edit($id)
   {
         $pengguna= Pengguna::find($id);
         return view('pengguna.edit')->with(array('pengguna' =>$pengguna));
   }
      public function lihat($id)
   {
         $pengguna=Pengguna::find($id);
         return view('pengguna.lihat')->with(array('pengguna' =>$pengguna));
   }
      public function update($id, Request $input)
   {
         $pengguna = Pengguna::find($id);
         $pengguna->Username = $input->username;
         $pengguna->password = $input->password;
         $informasi = $pengguna->save() ? 'berhasil update data':'gagal update data';
         return redirect('pengguna')->with(['informasi'=>$informasi]);
   }
      public function hapus($id)
   {
         $pengguna= Pengguna::find($id);
         $informasi = $pengguna->delete() ? 'berhasil hapus data':'gagal hapus data';
         return redirect('pengguna')->with(['informasi'=>$informasi]);
   }
}