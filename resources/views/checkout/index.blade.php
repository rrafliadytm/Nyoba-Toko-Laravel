@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mb-4">
            <div class="card">
                <div class="card-header">
                    <h1>Checkout {{$barang->nama_barang}}</h1>
                </div>
                <div class="card-title">
                    <p class="mx-3 my-2 text-muted">Silahkan isi form berikut untuk menyelesaikan proses checkout.</p>
                </div>
                <br>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ url('assets') }}/{{ $barang->gambar }}" class="img-fluid" width="100%" alt="">
                        </div>
                        <div class="col-md-6 mt-5">
                            <h2 class="card-title">{{ $barang->nama_barang }}</h2>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td scope="row"></td>
                                        <td>Harga</td>
                                        <td>:</td>
                                        <td>Rp. {{number_format($barang->harga_barang)}}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row"></td>
                                        <td>Stok</td>
                                        <td>:</td>
                                        <td>{{$barang->stok_barang}}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row"></td>
                                        <td>Keterangan</td>
                                        <td>:</td>
                                        <td>{{$barang->keterangan}}</td>
                                    </tr>
                                    <form action="" method="post">
                                        @csrf
                                        <tr>
                                            <td scope="row"></td>
                                            <td>Jumlah Pesanan</td>
                                            <td>:</td>
                                            <td>
                                                <input type="number" name="jumlah" class="form-control" value="1" min="1" max="{{$barang->stok_barang}}" required>
                                                <input type="hidden" name="kode_barang" value="{{$barang->kode_barang}}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td colspan="3">
                                                <button type="submit" class="btn btn-primary">Checkout</button>                                            </td>
                                            </td>
                                        </tr>
                                    </form>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="{{ url('home') }}" class="btn btn-danger">← Kembali</a>
</div>
@endsection
