@extends('layout.sidebar')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="mt-4">


                    <h5> Selamat Datang di Halaman Dashboard School Gallery SMKN 2 Banjarmasin</h5>

            </div>
            <h5 class="mt-5">Jumlah Data Produk</h5>
            <div class="card text-center mt-2" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-text">{{ $data }}</h5>
                    <h6 class="card-text">Produk</h6>
                </div>
            </div>
    </div>
</div>
@endsection