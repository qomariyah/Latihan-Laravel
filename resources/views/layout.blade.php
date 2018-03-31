<!DOCTYPE html>
<html>
	<head>
		<title>@yield('judul')</title>

		<link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
	</head>

	<body>
		<nav class="navbar navbar-default">
		  	<div class="container-fluid">
		    	<div class="navbar-header">
		    		<p class="navbar-text">Kelompok 1 (Aplikasi CRUD sederhana Laravel 5.4)</p>
		    	</div>
		  	</div>
		</nav>

		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<a href="{{ url('/tugas/create')}}" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
				<a href="{{ url('/tugas')}}" class="btn btn-warning"><i class="glyphicon glyphicon-th-list"></i> Daftar Tugas</a>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				@yield('konten')			
			</div>
		</div>
	</body>
</html>