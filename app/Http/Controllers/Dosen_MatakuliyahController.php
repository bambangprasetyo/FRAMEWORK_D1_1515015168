<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Dosen_Matakuliyah;

use App\dosen;

use App\matakuliyah;


class dosen_matakuliyahController extends Controller
{
    public function awal()
   {
         // return view('dosen_matakuliyah.awal',['data'=>Dosen_Matakuliyah::all()]);
      $semuaJadwalDosenMengajar = dosen_matakuliyah::all();
      return view('dosen_matakuliyah.awal', compact('semuaJadwalDosenMengajar'));
   }
      public function tambah()
   {
         $dosen = new dosen;
      $matakuliyah = new matakuliyah;
      return view('dosen_matakuliyah.tambah', compact('dosen','matakuliyah'));
   }
      public function simpan(Request $input)
   {
        $dosen_matakuliyah = new dosen_matakuliyah($input->only('dosen_id','matakuliyah_id'));
      if ($dosen_matakuliyah->save()) $this->informasi = "Jadwal Dosen Mengajar Berhasil Disimpan";
      return redirect('dosen_matakuliyah')->with(['informasi' => $this->informasi]);
   }
      public function edit($id)
   {
         $dosen_matakuliyah = dosen_matakuliyah::find($id);
      $dosen = new dosen;
      $matakuliyah = new matakuliyah;
      return view('dosen_matakuliyah.edit',compact('dosen','matakuliyah','dosen_matakuliyah'));
   }
      public function lihat($id)
   {
         $dosen_matakuliyah=Dosen_Matakuliyah::find($id);
         return view('dosen_matakuliyah.lihat')->with(array('dosen_matakuliyah' =>$dosen_matakuliyah));
   }
      public function update($id, Request $input)
   {
        $dosen_matakuliyah = dosen_matakuliyah::find($id);
      $dosen_matakuliyah->fill($input->only('dosen_id','matakuliyah_id'));
      if($dosen_matakuliyah->save()) $this->informasi = "Jadwal Dosen Mengajar berhasil diperbarui";
      return redirect('dosen_matakuliyah')->with(['informasi' => $this->informasi]);
   }
      public function hapus($id)
   {
         $dosen_matakuliyah = dosen_matakuliyah::find($id);
      if($dosen_matakuliyah->delete()) $this->informasi = "Jadwal Dosen Mengajar berhasil dihapus ";
      return redirect('dosen_matakuliyah')->with(['informasi' => $this->informasi]);
   }
}
