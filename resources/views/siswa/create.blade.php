@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
<div class="col md-12">
<div class="panel panel-warning">
	<div class="panel-heading">Tambah Data Siswa
		<div class="panel-title pull-right"><a href="{{ url()->previous()}}">Kembali</a></div></div>
	<div class="panel-body">
		<form action="{{route('siswas.store')}}" method="post">
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
			<div class="form-group {{$errors->has('nis') ? 'has->error' : ''}}">
				<label class="control-lable">Nis</label>
				<input type="text" class="form-control" name="nis" required>
				@if ($errors->has('nis'))
				<span class="help-block">
					<strong>{{$errors->first('nis')}}</strong>
				</span>
				@endif
			</div>
			<div class="form-group {{$errors->has('kelas') ? 'has->error' : ''}}">
				<label class="control-lable">Kelas</label>
				<input type="text" class="form-control" name="kelas" required>
				@if ($errors->has('kelas'))
				<span class="help-block">
					<strong>{{$errors->first('kelas')}}</strong>
				</span>
				@endif
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-warning">Tambah</button>
			</div>
		</form>
	</div>
	</div>
</div>
</div>
</div>
</div>
@endsection