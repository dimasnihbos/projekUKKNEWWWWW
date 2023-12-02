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
<div class="container">
<h1>PRODUK</h1>

<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">Produk ID</th>
      <th scope="col">Nama Produk</th>
      <th scope="col">Harga</th>
      <th scope="col">Stok</th>
      <th scope="col">Opsi</th>
    </tr>
  </thead>
  @foreach($produk as $produk)
  <tbody>
    <tr>
      <th>{{$produk->ProdukID}}</th>
      <td>{{$produk->NamaProduk}}</td>
      <td>{{$produk->Harga}}</td>
      <td>{{$produk->Stok}}</td>
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

{{-- <table class="table table-dark table-striped-">
    <thead>
    
      <h1>{{ $produk }}</h1>

      <table class="center" border="1">
        <thead>
          <tr>
            <th scope="col">Produk ID</th>
            <th scope="col">Nama Produk</th>
            <th scope="col">Harga</th>
            <th scope="col">Stok</th>
          </tr>
        </thead>
      
        
        
        @foreach($produk as $produk)
        <tr>
          <td>{{$produk->ProdukID}}</td>
          <td>{{$produk->NamaProduk}}</td>
          <td>{{$produk->Harga}}</td>
          <td>{{$produk->Stok}}</td>
        </tr>
        <td>
          <a href="hapus-stok/{{$produk->status}}">Hapus</a>|
          <a href="update-stok/{{$produk->status}}">Update</a>
        </td>
      
        @endforeach
      </table> --}}