@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menu</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                <form action="/data_barang/store" method="post">
		{{ csrf_field() }}
		<table>
		Usia Bayi :	 <input type ="number" name="id" class="text-center" required="required"> <br />
		Nama Bayi : <input type="text" name="nama" required="required"> <br/>
		Jenis Kelamin Bayi  :<input type="text" name="ket" required="required"> <br/>
		Nama Ibu : <input type="text" name="ket" required="required"> <br/>
		Nama Ayah : <input type="text" name="ket" required="required"> <br/>
		Alamat : <input type="text" name="ket" required="required"> <br/>
		Panjang Badan : <input type="float" name="ket" required="required"> <br/>
		Berat Badan  : <input type="float" name="ket" required="required"> <br/>
	</table>
		<input type="submit" value="Hitung Status Gizi">
	</form>
            </div>
        </div>
    </div>
</div>
@endsection