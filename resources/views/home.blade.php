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
                <div >
            <button onclick="location.href='statusgizi'" class="btn btn-block btn-primary">
                <i class="fa fa-plus"></i>Status Gizi Balita</button>
                </div>
                 <div >
            <button onclick="location.href='index.html'" class="btn btn-block btn-primary">
                <i class="fa fa-plus"></i>Kelola Data Balita</button>
                </div>
                <button onclick="location.href='index.html'" type="submit" class="btn btn-block btn-primary">
                <i class="fa fa-plus"></i> Kelola Data Kader</button>
            </div>
        </div>
    </div>
</div>
@endsection
