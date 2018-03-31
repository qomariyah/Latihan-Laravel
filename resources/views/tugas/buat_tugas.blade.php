@extends('layout')

@section('judul')
Buat Tugas
@endsection

@section('konten')
<form action="{{ url('tugas') }}" method="POST">

	{{ csrf_field() }}

	<br>
	<label>Judul</label>
	<input type="text" name="judul" class="form-control"><br>

	<label>Deskripsi</label>
	<input type="text" name="deskripsi" class="form-control"><br>
	
	<input type="submit" class="btn btn-success" value="Simpan">
</form>
@endsection