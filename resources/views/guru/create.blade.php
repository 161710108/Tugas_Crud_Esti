@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
<div class="col md-12">
<div class="panel panel-success">
	<div class="panel-heading">Tambah Data Guru
		<div class="panel-title pull-right"><a href="{{ url()->previous()}}">Kembali</a></div></div>
	<div class="panel-body">
		<form action="{{route('gurus.store')}}" method="post">
			{{csrf_field()}}
			<div class="form-group {{$errors->has('nama') ? 'has-error' : ''}}">
				<label class="control-lable">Nama</label>
				<input type="text" class="form-control" name="nama" required>
				@if ($errors->has('nama'))
				<span class="help-block">
					<strong>{{$errors->first('nama')}}</strong>
				</span>
				@endif
			</div>
			<div class="form-group {{$errors->has('nik') ? 'has->error' : ''}}">
				<label class="control-lable">Nik</label>
				<input type="text" class="form-control" name="nik" required>
				@if ($errors->has('nik'))
				<span class="help-block">
					<strong>{{$errors->first('nik')}}</strong>
				</span>
				@endif
			</div>
			<div class="form-group {{$errors->has('mapel') ? 'has->error' : ''}}">
				<label class="control-lable">Mapel</label>
				<input type="text" class="form-control" name="mapel" required>
				@if ($errors->has('mapel'))
				<span class="help-block">
					<strong>{{$errors->first('mapel')}}</strong>
				</span>
				@endif
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-success">Tambah</button>
			</div>
		</form>
	</div>
	</div>
</div>
</div>
</div>
</div>
@endsection