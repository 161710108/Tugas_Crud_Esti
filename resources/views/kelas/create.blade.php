@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
<div class="col md-12">
<div class="panel panel-info">
	<div class="panel-heading">Tambah Data Kelas
		<div class="panel-title pull-right"><a href="{{ url()->previous()}}">Kembali</a></div></div>
	<div class="panel-body">
		<form action="{{route('kelas.store')}}" method="post">
			{{csrf_field()}}
			<div class="form-group {{$errors->has('nama_kelas') ? 'has-error' : ''}}">
				<label class="control-lable">Nama_kelas</label>
				<input type="text" class="form-control" name="nama_kelas" required>
				@if ($errors->has('nama_kelas'))
				<span class="help-block">
					<strong>{{$errors->first('nama_kelas')}}</strong>
				</span>
				@endif
			</div>
			<div class="form-group {{$errors->has('wali_kelas') ? 'has->error' : ''}}">
				<label class="control-lable">Wali_kelas</label>
				<input type="text" class="form-control" name="wali_kelas" required>
				@if ($errors->has('wali_kelas'))
				<span class="help-block">
					<strong>{{$errors->first('wali_kelas')}}</strong>
				</span>
				@endif
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-info">Tambah</button>
			</div>
		</form>
	</div>
	</div>
</div>
</div>
</div>
</div>
@endsection