@extends('layouts.app')

@section('content')
<div class="container">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="/assets/celana.jpeg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/assets/baju.jpeg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/assets/sepatu.jpg" alt="Third slide">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-12 mb-4">
            <h1 class="text-center">Mau Belanja Apa Hari Ini?</h1>
        </div>
        @foreach ($barang as $barang)
        <div class="col-md-3 mb-4">
            <div class="card" style="width: 18rem;">
                <img src="{{ url('assets') }}/{{ $barang->gambar }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $barang->nama_barang }}</h5>
                    <p class="card-text"><strong>Deskripsi: </strong>{{$barang->keterangan}}</p>
                    <hr>
                    <p class="card-text mb-3"><strong>Harga: </strong> Rp. {{number_format($barang->harga_barang)}}</p>
                    <p class="card-text"><strong>Stok: </strong> {{ $barang->stok_barang }}</p>
                    <a href="{{ url('checkout') }}/{{ $barang->kode_barang }}" class="btn btn-primary hover-zoom">Checkout</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
