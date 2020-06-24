<!DOCTYPE html>
<html>
<head>
	<title>Barang</title>
</head>
<body>
 
	
	<h3>Data Barang</h3>
 
	<a href="/data_barang"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/data_barang/store" method="post">
		{{ csrf_field() }}
		Nomor ID 	<input type ="number" name="id" required="required"> <br />
		Nama Barang <input type="text" name="nama" required="required"> <br/>
		Keterangan <input type="text" name="ket" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>