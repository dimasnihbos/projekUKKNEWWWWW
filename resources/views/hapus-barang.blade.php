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
<div class="welcome">
<div class="container">
<h1>SELAMAT DATANG DI KASIR</h1>
<table class="table table-dark table-striped">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Produk</th>
        <th scope="col">Harga</th>
        <th scope="col">Stok</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>mie</td>
        <td>2.500</td>
        <td>3</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Minyak</td>
        <td>28.000</td>
        <td>1</td>
      </tr>
      <td>
        <a href="hapus-barang" class="btn btn-danger">Hapus</a>
      </td>
    </tbody>
  </table>
</div>
</div>
</body>
</html>