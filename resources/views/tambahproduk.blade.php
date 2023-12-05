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
    @include ('layout.navbar')
    <br>
    <br>
    <div style="color: aliceblue">
    <h3 style="text-align:center;">{{$tambah}}</h3>
    <div class="container text-center">
        <div class="row">
          <div class="col">
            
          </div>
          <div class="col">
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="col-form-label">Nama Produk</label>
              <input class="form-control" type="text"  name="produk" aria-label="default input example">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="col-form-label">Harga</label>
                <input class="form-control" type="text"  name="harga" aria-label="default input example">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="col-form-label">Stok</label>
                <input class="form-control" type="text"  name="stok" aria-label="default input example">
            </div>
          <input class="btn btn-primary" type="submit" value="Tambah"> 
          </div>
          <div class="col">
            </div>
          </div>
        </div>
   </div>
</body>
</html>