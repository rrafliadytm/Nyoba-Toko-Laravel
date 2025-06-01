@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mb-4">
            <div class="card">
                <div class="card-header">
                    <h2>Checkout {{$barang->nama_barang}}</h2>
                </div>
                <div class="card-title">
                    <p class="mx-3 my-2 text-muted">Silahkan isi form berikut untuk menyelesaikan proses checkout.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
