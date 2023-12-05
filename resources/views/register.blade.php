<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>isi-masyarakat</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style1.css">
</head>
<body>
@include('layout.navbar') 
     <br>
     <br>
     <div style="color: aliceblue">
     <h3 style="text-align:center;">{{$regis}}</h3>
        <form action="regis" method="POST" enctype="multipart/form-data">
            <div class="container">
                @method("POST")
                @csrf
                
                <div class="container text-center">
                    <div class="row">
                      <div class="col">
                        
                      </div>
                      <div class="col">
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="col-form-label">Nama</label>
                            <input class="form-control" type="text" name="nama"  aria-label="default input example">
                       </div>
        
        
                        <div class="mb-3">
                             <label for="exampleFormControlTextarea1" class="col-form-label">Email</label>
                             <input class="form-control" type="text" name="email"  aria-label="default input example">
                        </div>
        
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="col-form-label">Password</label>
                            <input class="form-control" type="text"  name="password" aria-label="default input example">
                       </div>
        
                          <br>
                        <input class="btn btn-primary" type="submit" value="Daftar"> 
                      </div>
                      <div class="col">
                        
                      </div>
                    </div>
                  </div>
                </div>
                
        </form> 
</body>
</html>