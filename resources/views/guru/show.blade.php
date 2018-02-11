@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Guru 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Nama</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $gurus->nama }}"  readonly>
			  		</div>

			  		<div class="form-group {{ $errors->has('nik') ? ' has-error' : '' }}">
			  			<label class="control-label">Nik</label>	
			  			<input type="text" name="nik" class="form-control" value="{{ $gurus->nik }}"  readonly>
			  		</div>
			  		<div class="form-group {{ $errors->has('mapel') ? ' has-error' : '' }}">
			  			<label class="control-label">Mapel</label>	
			  			<input type="text" name="mapel" class="form-control" value="{{ $gurus->mapel }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection