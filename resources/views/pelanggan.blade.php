<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <title>Document</title>
</head>
<body>
@include('layout.navbar')
<div class="produk">
<div class="container" style="color: aliceblue">
<h1>PELANGGAN</h1>

<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nama </th>
      <th scope="col">Alamat</th>
      <th scope="col">No Telp</th>
      <th scope="col">Opsi</th>
    </tr>
  </thead>
  @foreach($pelanggan as $pelanggan)
  <tbody>
    <tr>
      <th>{{$pelanggan->PelangganID}}</th>
      <td>{{$pelanggan->NamaPelanggan}}</td>
      <td>{{$pelanggan->Alamat}}</td>
      <td>{{$pelanggan->NomorTelepon}}</td>
      <td>
        <button type="button" class="btn btn-danger">Hapus</button>
        <button type="button" class="btn btn-success">Update</button>
    </td>
    </tr>
    
  </tbody>
  @endforeach
</table>

</div>
</div>
</body>
</html>

