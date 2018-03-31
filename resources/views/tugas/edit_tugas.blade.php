@extends('layout')

@section('judul')
Edit Tugas
@endsection

@section('konten')
<form action="{{ url('tugas/'.$data->id) }}" method="POST">
	<input type="hidden" name="_method" value="PUT">

	{{ csrf_field() }}

	<br>
	<label>Judul</label>
	<input type="text" name="judul" value="{{ $data->judul }}" class="form-control"><br>

	<label>Deskripsi</label>
	<input type="text" name="deskripsi" value="{{ $data->deskripsi }}" class="form-control"><br>

	<input type="submit" class="btn btn-success" value="Perbarui">
</form>
@endsection