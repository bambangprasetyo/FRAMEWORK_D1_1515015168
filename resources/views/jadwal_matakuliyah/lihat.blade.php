@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('jadwal_matakuliyah') }}"><i style="color:#8a6d3b" class=" fa text-default fa-chevron-left"></i></a> Detail Data jadwal Mahasiswa</strong>
			</div>
			<table class="table">
				<tr>
						<td>Nama Mahasiswa</td>
						<td>:</td>
						<td>{{ $jadwal_matakuliyah->mahasiswa->nama }}</td>
				</tr>
				<tr>
						<td>Nim Mahasiswa</td>
						<td>:</td>
						<td>{{ $jadwal_matakuliyah->mahasiswa->nim }}</td>
				</tr>
				<tr>
						<td>Nama Dosen</td>
						<td>:</td>
						<td>{{ $jadwal_matakuliyah->dosen_matakuliyah->dosen->nama }}</td>
				</tr>
				<tr>
						<td>Nip Dosen</td>
						<td>:</td>
						<td>{{ $jadwal_matakuliyah->dosen_matakuliyah->dosen->nip }}</td>
				</tr>
				<tr>
						<td>Nama matakuliyah</td>
						<td>:</td>
						<td>{{ $jadwal_matakuliyah->dosen_matakuliyah->matakuliyah->title }}</td>
				</tr>
				<tr>
						<td>Jenis matakuliyah</td>
						<td>:</td>
						<td>{{ $jadwal_matakuliyah->dosen_matakuliyah->matakuliyah->keterangan }}</td>
				</tr>
				<tr>
						<td class="col-xs-4">Dibuat tanggal</td>
						<td class="col-xs-1">:</td>
						<td>{{$jadwal_matakuliyah->created_at}}</td>
				</tr>
				<tr>
						<td class="col-xs-4">Diperbarui Tanggal</td>
						<td class="col-xs-1">:</td>
						<td>{{$jadwal_matakuliyah->updated_at}}</td>
				</tr>
		</table>
</div>
@stop