<!DOCTYPE html>
<html>
<head>
	<title>Database Barang</title>
</head>
<body>
 
	<h3>Edit Barang</h3>
 
	<a href="/data_barang"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($data_barang as $p)
	<form action="/data_barang/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->id_barang }}"> <br/>
		Nama Barang <input type="text" required="required" name="nama" value="{{ $p->nama_barang }}"> <br/>
		Keterangan <input type="text" required="required" name="ket" value="{{ $p->keterangan }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
 
</body>
</html>