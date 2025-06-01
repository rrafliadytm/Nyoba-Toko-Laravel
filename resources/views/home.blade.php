@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mb-5">
        </div>
        @foreach ($barang as $barang)
        <div class="col-md-4">
            <div class="card" style="width: 18rem; ">
                <img src="{{ url('assets') }}/{{ $barang->gambar }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $barang->nama_barang }}</h5>
                    <p class="card-text">{{$barang->keterangan}}</p>
                    <p class="card-text"><strong>Harga: </strong> Rp. {{number_format($barang->harga_barang)}}</p>
                    <p class="card-text"><strong>Stok: </strong> {{ $barang->stok_barang }}</p>
                    <a href="#" class="btn btn-primary">Checkout</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
