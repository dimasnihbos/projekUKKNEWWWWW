<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Kasir</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logkasir">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register">Logout</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register">Registrasi</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Produk
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="produk">Data Produk</a></li>
              <li><a class="dropdown-item" href="tambahstok">Tambah Stok</a></li>
              <li><a class="dropdown-item" href="#">Penjualan</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Pelanggan
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="datapelanggan">Data Pelanggan</a></li>
              <li><a class="dropdown-item" href="/tambahpelanggan">Tambah Pelanggan</a></li>
              <li><a class="dropdown-item" href="#"></a></li>
            </ul>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Penjualan
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Penjualan</a></li>
                <li><a class="dropdown-item" href="penjualan">Data Penjualan</a></li>
                <li><a class="dropdown-item" href="detail">Detail Penjualan</a></li>
              </ul>
            </li>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js
"></script>
</body>
</html>