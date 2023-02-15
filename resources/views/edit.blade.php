<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
</head>
<body>
<form action="/update/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                 @csrf
   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Judul Produk</label>
    <input type="text" name="judulProduk" value="{{$data->judulProduk}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Deskripsi Produk</label>
    <input type="text" name="deskripsi" value="{{ $data->deskripsi }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Harga Produk</label>
    <input type="number" name="harga" value="{{ $data->harga }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Gambar Produk</label>
    <input type="file" name="gambar" class="form-control" placeholder="Post Title">
                @error('gambar')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
               @enderror
            </div>
            <div class="form-group">
              <img src="{{ asset('foto/'.$data->gambar) }}" height="200" width="200" alt="" />
            </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>