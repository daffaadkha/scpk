<html>
<head>
	<title>Database Barang</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>
 

	<div class="container">
		<div class="card">
			<div class="card-body">

	<h2 class="text-center">Spider-WEB</h2>
	<h3>Data Barang</h3>
 
	<a href="/data_barang/tambah"> + Tambah Barang Baru</a>
	 
				<div class="form-group">

						</div>
	<br/>
	<br/>
 
	<table class="table table-bordered">
		<tr>
			<th>No ID</th>
			<th>Nama Barang</th>
			<th>Keterangan</th>
			<th>Opsi</th>
		</tr>
		@foreach($data_barang as $p)
		<tr>
			<td>{{ $p->id_barang }}</td>
			<td>{{ $p->nama_barang }}</td>
			<td>{{ $p->keterangan }}</td>
			<td>
				<a class="btn btn-warning btn-sm" href="/data_barang/edit/{{ $p->id_barang }}">Edit</a>
				|
				<a class="btn btn-danger btn-sm" href="/data_barang/hapus/{{ $p->id_barang }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 </div>
		</div>
	</div>

</body>
</html>