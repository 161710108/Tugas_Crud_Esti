@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
<div class="col md-12">
<div class="panel panel-danger">
	<div class="panel-heading">Tambah Data Siswa
		<div class="panel-title pull-right"><a href="{{ url()->previous()}}">Kembali</a></div></div>
	<div class="panel-body">
		<form action="{{route('walis.store')}}" method="post">
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
			<div class="form-group {{$errors->has('alamat') ? 'has->error' : ''}}">
				<label class="control-lable">Alamat</label>
				<input type="text" class="form-control" name="alamat" required>
				@if ($errors->has('alamat'))
				<span class="help-block">
					<strong>{{$errors->first('alamat')}}</strong>
				</span>
				@endif
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-danger">Tambah</button>
			</div>
		</form>
	</div>
	</div>
</div>
</div>
</div>
</div>
@endsection