@extends('layout.sidebar')
@section('content')
<div class="container py-3 h-100">
  <div class="row d-flex justify-content-center align-items-center h-100">
  <div class="col-12 col-md-8 col-lg-6 col-xl-5">
    <h3>Halaman Tambah Produk</h3>
    <div class="card shadow-2-strong mt-4 w-100 bg-secondary"   style="border-radius: 1rem;">
    <div class="card-body p-5 ">
                    <form action="/proses" method="POST" enctype="multipart/form-data">
                     @csrf
         <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">ID Produk</label>
        <input type="number" name="idProduk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
       <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Judul Produk</label>
        <input type="text" name="judulProduk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
    
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Deskripsi Produk</label>
        <input type="text" name="deskripsi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Harga Produk</label>
        <input type="number" name="harga" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Gambar Produk</label>
        <input type="file" name="gambar" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <button type="submit" class="btn btn-light mt-4 w-25">Submit</button>
    </form>
                
              </div>
            </div>
          </div>
        </div>
      </div>
      </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
@endsection