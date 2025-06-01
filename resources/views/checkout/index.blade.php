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
                        <div class="col-md-6">
                            <h2 class="card-title">{{ $barang->nama_barang }}</h2>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row"></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td scope="row"></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
