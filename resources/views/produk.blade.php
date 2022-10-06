

@extends('utama.utama')

@section('container')
<h1>Halaman Produk  </h1>


@error('nama')

  <div class="alert alert-danger">{{ $message }}</div>
@enderror

@error('idsup')

<div class="alert alert-danger">{{ $message }}</div>
@enderror
<form action="/User/inputproduk" method="post">
    @csrf
  <input type="text" name="nama" placeholder="Nama" class="@error('nama') is-invalid @enderror" id="nama">


  <br>
  <input type="text" name="idsup" placeholder="ID Supplier" class="@error('idsup') is-invalid @enderror" id="idsup"> <br>


  <input type="text" name="kodeproduk" placeholder="Kode Produk"> <br>
  <input type="text" name="qty" placeholder="QTY"> <br>
  <input type="text" name="harga" placeholder="Harga"> <br>
  <input type="file" name="gambar" placeholder="Upload"> <br>

  <input type="submit"  value="GO" class="btn btn-primary"><br>

</form>



@endsection
