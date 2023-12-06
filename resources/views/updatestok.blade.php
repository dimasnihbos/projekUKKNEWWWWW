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
  <form action="" enctype="multipart/form-data" method="POST">
    @method("put")
    @csrf
    @include ('layout.navbar')
    <br>
    <br>
    <div style="color: aliceblue">
    <h3 style="text-align:center;">Update Stok Barang</h3>
    <div class="container text-center">
        <div class="row">
          <div class="col">
            <div>
            <div class="mb-3">
              <div class="container">
                <label for="exampleFormControlTextarea1" class="col-form-label">Stok</label>
                <input class="form-control" type="number"  name="Stok" aria-label="default input example">
            </div>
          <input class="btn btn-success" type="submit" value="Update"> 
          </div>
        </div>
          <div class="col">
            </div>
          </div>
        </div>
   </div>
  </div>
  </form>
</body>
</html>