<div class="form-group">
	<label class="col-sm-2 control-label" id="dosen_id">Dosen</label>
	<div class="col-sm-10">
		{!! Form::select('dosen_id',$dosen->listDosenDanNip(),null,['class'=>'form-control','id'=>'dosen_id','placeholder'=>"Dosen"]) !!}
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label" id="matakuliyah_id"> Matakuliah</label>
		<div class="col-sm-10">
			{!! Form::select('matakuliyah_id',$matakuliyah->lists('title','id'),null,['class'=>'form-control','id'=>'Matakuliyah_id','placeholder'=>"matakuliyah"]) !!}
		</div>
	</div>
	