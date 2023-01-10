<?php
 require 'function.php';

 if(isset($_POST["submit"])) {

    if(tambah($_POST) > 0 ) {

        echo "
            <script>
                alert('data berhasil di tambahkan');
                document.location.href = 'index.php'
            </script>
        ";
     } else {
        echo "
            <script>
                alert('data gagal di tambahkan');
                document.location.href = 'index.php'
            </script>
        ";
     }

}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-md-10 offset-md-1 shadow p-5 rounded">

            <h2 class="text-center">Tambah Data Santri</h2>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-grup mb-2">
                        <label for="nama" class="mb-2">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="masukan nama">
                    </div>
                    <div class="form-grup mb-2">
                        <label for="alamat" class="mb-2">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control" placeholder="masukan alamat">
                    </div>
                    <div class="form-grup mb-2">
                        <label for="telpon" class="mb-2">No.Telpon</label>
                        <input type="text" name="telpon" id="telpon" class="form-control" placeholder="masukan no telpon">
                    </div>
                    <div class="form-grup mb-2">
                        <label for="ayah" class="mb-2">Nama Ayah</label>
                        <input type="text" name="ayah" id="ayah" class="form-control" placeholder="nama ayah">
                    </div>
                    <div class="form-grup mb-2">
                        <label for="ibu" class="mb-2">Nama Ibu</label>
                        <input type="text" name="ibu" id="ibu" class="form-control" placeholder="nama ibu">
                    </div>
                    <div class="form-grup mt-4 d-flex justify-content-end">
                        <button type="reset" class="btn btn-danger me-2">Reset</button>
                        <button type="submit" name="submit" class="btn btn-success">Tambah</button>
                    </div>
                    
                    <a href="index.php" class="btn btn-warning">Kembali</a>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>