<div class="form-group">
	<label class="col-sm-2 control-label" id="mahasiswa_id">Mahasiswa</label>
	<div class="col-sm-10">
		{!! Form::select('Mahasiswa_id',$mahasiswa->listMahasiswaDanNim(),null,['class'=>'form-control','id'=>'mahasiswa_id','placeholder'=>"Mahasiswa"]) !!}
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label" id="dosen_matakuliyah_id"> Matakuliah</label>
		<div class="col-sm-10">
			{!! Form::select('Dosen_Matakuliyah_id',$dosen_matakuliyah->listDosenDanMatakuliyah(),null,['class'=>'form-control','id'=>'Dosen_Matakuliyah_id','placeholder'=>"Matakuliyah"]) !!}
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label" id="ruangan_id"> Ruangan</label>
		<div class="col-sm-10">
			{!! Form::select('Ruangan_id',$ruangan->lists('title','id'),null,['class'=>'form-control','id'=>'Ruangan_id','placeholder'=>"Ruangan"]) !!}
		</div>
	</div>
	