@extends('layout')

@section('judul')
Daftar Tugas
@endsection

@section('konten')
<table class="table table-hover">
	<thead>
		<tr>
			<th>Judul</th>
			<th>Deskripsi</th>
			<th>Dibuat Tanggal</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{ $data->judul }}</td>
			<td>{{ $data->deskripsi }}</td>
			<td>{{ $data->created_at }}</td>
		</tr>
	</tbody>
</table>
@endsection