@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
<div class="col md-12">
<div class="panel panel-success">
	<div class="panel-heading">Data Guru
		<div class="panel-title pull-right"><a href="{{route('gurus.create')}}">Tambah</a></div></div>
	<div class="panel-body">
		<div class="table-responsive">
			<table class="table">
				<thead>
				<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Nik</th>
				<th>Mapel</th>
				<th colspan="3">Action</th>
				</tr>
			</thead>
			<tbody>
				@php $no = 1; @endphp
				@foreach($gurus as $data)
              <tr>
              	<td>{{ $no++ }}</td>
              	<td>{{ $data ->nama }}</td>
              	<td>{{ $data ->nik }}</td>
              	<td>{{ $data ->kelas }}</td>
              	 <td>
              	<a class="btn btn-warning" href="{{route('gurus.edit',$data->id)}}">Edit</a>
              </td>
              <td>
              <form method="post" action="{{ route('gurus.destroy',$data->id) }}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="DELETE">
								<button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')">Delete</button>
							</form>
						</td>
          <td><a class="btn btn-success" href="{{route('gurus.show',$data->id)}}">Show</a>
              </td>
              </tr>
              @endforeach
			</tbody>
			</table>
		</div>
	</div>
</div>
</div>
</div>
</div>
@endsection