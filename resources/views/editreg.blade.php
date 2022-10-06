
@extends('utama.utama')

@section('container')
<h1>Register</h1>

@error('nama')

  <div class="alert alert-danger">{{ $message }}</div>
@enderror

@error('email')

<div class="alert alert-danger">{{ $message }}</div>
@enderror
<form action="/User/{{ $userreg->id }}" method="post">
    @csrf
    @method('put')
  <input type="text" name="nama" placeholder="Nama" class="@error('nama') is-invalid @enderror" id="nama"
  value="{{ $userreg->nama }}">


  <br>
  <input type="email" name="email" placeholder="Email" class="@error('email') is-invalid @enderror" id="email"
  value="{{ $userreg->email }}"> <br>


  <input type="text" name="username" placeholder="Username" value="{{ $userreg->username }}"> <br>
  <input type="text" name="password" placeholder="Password" value="{{ $userreg->password }}"> <br>
  <input type="submit"  value="GO" class="btn btn-primary"><br>

</form>


@endsection
