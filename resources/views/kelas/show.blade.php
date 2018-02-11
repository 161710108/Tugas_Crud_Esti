@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Kelas 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Nama</label>	
			  			<input type="text" name="nama_kelas" class="form-control" value="{{ $kelas->nama_kelas }}"  readonly>
			  		</div>

			  		<div class="form-group {{ $errors->has('wali_kelas') ? ' has-error' : '' }}">
			  			<label class="control-label">Wali_kelas</label>	
			  			<input type="text" name="wali_kelas" class="form-control" value="{{ $kelas->wali_kelas }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection