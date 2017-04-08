<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Jadwal_Matakuliyah;

use App\Mahasiswa;

use App\Dosen_Matakuliyah;

use App\Ruangan;

class Jadwal_MatakuliyahController extends Controller
{
    public function awal()
   {

         // return view('mahasiswa.awal', ['data'=>Mahasiswa::all()]);
    $semuaJadwalMatakuliyah = jadwal_matakuliyah::all();
    return view('jadwal_matakuliyah.awal', compact('semuaJadwalMatakuliyah'));
   }
      public function tambah()
   {
        $mahasiswa = new Mahasiswa;
        $ruangan = new Ruangan;
        $dosen_matakuliyah = new Dosen_Matakuliyah;
        return view('jadwal_matakuliyah.tambah',compact('mahasiswa','ruangan','dosen_matakuliyah'));
      // return $this->simpan();
    }
      public function simpan(Request $input)
      {
        // dd($input->Mahasiswa_id);
        $jadwal_matakuliyah = new Jadwal_matakuliyah($input->only('Mahasiswa_id','Ruangan_id','Dosen_Matakuliyah_id'));
            if($jadwal_matakuliyah->save()) $this->informasi = "Jadwal Mahasiswa berhasil disimpan";
            return redirect('jadwal_matakuliyah')->with(['informasi'=>$this->informasi]);
      }

      public function lihat($id)
   {
         $jadwal_matakuliyah=Jadwal_Matakuliyah::find($id);
         return view('jadwal_matakuliyah.lihat')->with(array('jadwal_matakuliyah' =>$jadwal_matakuliyah));
   }
      public function edit($id)
   {
        $jadwal_matakuliyah = Jadwal_matakuliyah::find($id);
        $mahasiswa = new Mahasiswa;
        $ruangan = new Ruangan;
        $dosen_matakuliyah = new Dosen_matakuliyah;
        return view('jadwal_matakuliyah.edit',compact('mahasiswa','ruangan','dosen_matakuliyah','jadwal_matakuliyah'));
   }
      public function update($id, Request $input)
   {
         $jadwal_matakuliyah = Jadwal_matakuliyah::find($id);
        $jadwal_matakuliyah->fill($input->only('Ruangan_id','Dosen_Matakuliyah_id','Mahasiswa_id'));
        if($jadwal_matakuliyah->save()) $this->informasi = "Jadwal Mahasiswa berhasil diperbarui";
        return redirect('jadwal_matakuliyah')->with(['informasi'=>$this->informasi]);
    }
      public function hapus($id)
   {
         $jadwal_matakuliyah = Jadwal_matakuliyah::find($id);
        if($jadwal_matakuliyah->delete()) $this->informasi = "Jadwal Mahasiswa berhasil dihapus";
        // $informasi = $mahasiswa->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
        return redirect('jadwal_matakuliyah')-> with(['informasi'=>$this->informasi]);
    }
}
