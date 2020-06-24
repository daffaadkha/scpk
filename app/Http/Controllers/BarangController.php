<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
 
class BarangController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$data_barang = DB::table('data_barang')->get();
 
    	// mengirim data pegawai ke view index
    	return view('index',['data_barang' => $data_barang]);
 
    }

    public function tambah(){
    	return view('tambah');
    }

    public function store(Request $request)
{
	// insert data ke table pegawai
	DB::table('data_barang')-> insert([
		'id_barang' => $request -> id,
		'nama_barang' => $request -> nama,
		'keterangan' => $request -> ket
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/data_barang');
 
}

// method untuk edit data pegawai
	public function edit($id)
{
	// mengambil data pegawai berdasarkan id yang dipilih
	$data_barang = DB::table('data_barang')->where('id_barang',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('edit',['data_barang' => $data_barang]);
 
}

// update data pegawai
public function update(Request $request)
{
	// update data pegawai
	DB::table('data_barang')->where('id_barang',$request->id)->update([
		'id_barang' => $request->id,
		'nama_barang' => $request->nama,
		'keterangan' => $request->ket
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/data_barang');
}

// method untuk hapus data pegawai
public function hapus($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('data_barang')->where('id_barang',$id)->delete();
		
	// alihkan halaman ke halaman pegawai
	return redirect('/data_barang');
}
}
