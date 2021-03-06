@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
<div class="col md-12">
<div class="panel panel-info">
	<div class="panel-heading">Data Kelas
		<div class="panel-title pull-right"><a href="{{route('kelas.create')}}">Tambah</a></div></div>
	<div class="panel-body">
		<div class="table-responsive">
			<table class="table">
				<thead>
				<tr>
				<th>No</th>
				<th>Nama_kelas</th>
				<th>Wali_kelas</th>
				<th colspan="3">Action</th>
				</tr>
			</thead>
			<tbody>
				@php $no = 1; @endphp
				@foreach($kelas as $data)
              <tr>
              	<td>{{ $no++ }}</td>
              	<td>{{ $data ->nama_kelas }}</td>
              	<td>{{ $data ->wali_kelas }}</td>
              	 <td>
              	<a class="btn btn-warning" href="{{route('kelas.edit',$data->id)}}">Edit</a>
              </td>
              <td>
              <form method="post" action="{{ route('kelas.destroy',$data->id) }}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="DELETE">
								<button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')">Delete</button>
							</form>
						</td>
              </td>
          <td><a class="btn btn-info" href="{{route('kelas.show',$data->id)}}">Show</a>
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