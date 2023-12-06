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
<h1>Data Penjualan</h1>

<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">Tanggal</th>
      <th scope="col">Pelanggan</th>
      <th scope="col">Total</th>
    </tr>
  </thead>
  
  <tbody>
    <tr>
      <th>6-12-2023</th>
      <td>Dimas</td>
      <td>50.000</td>
    </tr>
  </tbody>
</table>

<table class="table table-dark table-striped">
    <thead>
      <tr>
        <th scope="col">Nama Produk</th>
        <th scope="col">Harga</th>
        <th scope="col">Total</th>
        <th scope="col">Subtotal</th>
    </tr>
    </thead>
    
    <tbody>
      <tr>
        <th>Indomie</th>
        <td>2.500</td>
        <td>10</td>
        <td>25.000</td>
      </tr>
    </tbody>

    <tbody>
        <tr>
          <th>Minyak</th>
          <td>25.000</td>
          <td>1</td>
          <td>25.000</td>
        </tr>
      </tbody>
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