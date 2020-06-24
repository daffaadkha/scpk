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
		Nomor ID 	<input type ="number" name="id" required="required"> <br />
		Nama Barang <input type="text" name="nama" required="required"> <br/>
		Keterangan <input type="text" name="ket" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
            </div>
        </div>
    </div>
</div>
@endsection