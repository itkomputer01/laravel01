
@extends('utama.utama')

@section('container')

<h1>Register</h1>

@error('nama')

  <div class="alert alert-danger">{{ $message }}</div>
@enderror

@error('email')

<div class="alert alert-danger">{{ $message }}</div>
@enderror
<form action="/User/postreg" method="post">
    @csrf
  <input type="text" name="nama" placeholder="Nama" class="@error('nama') is-invalid @enderror" id="nama">


  <br>
  <input type="email" name="email" placeholder="Email" class="@error('email') is-invalid @enderror" id="email"> <br>


  <input type="text" name="username" placeholder="Username"> <br>
  <input type="text" name="password" placeholder="Password"> <br>
  <input type="submit"  value="GO" class="btn btn-primary"><br>

</form>

<table class="table">
   <tr>
    <td>Nama</td>
    <td>Email</td>
    <td>Username</td>
    <td>Password</td>
    <td>Proses</td>
   </tr>

@foreach ($userreg as $w )

   <tr>
    <td> {{ $w->nama }} </td>
    <td> {{ $w->email }}</td>
    <td>{{ $w->username }}</td>
    <td>{{ $w->password }}</td>
    <td>
     <form action="/User/{{ $w->id }}" method="post">
     @csrf
     @method('delete')
     <input type="submit" value="Delete" class="btn btn-primary">
     <a href="/User/edit/{{ $w->id }}" class="btn btn-primary">Update</a>
     </form>


    </td>
   </tr>

   @endforeach
</table>


@endsection

