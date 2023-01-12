<?php

require 'function.php';

$santri = query("SELECT * FROM tb_santri");

if(isset($_POST["cari"])) {
  $santri = cari($_POST["keyword"]);
}

$n = 1;

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  </head>
  <body>
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-md-10 offset-md-1 shadow p-3 rounded">

            <h2 class="text-center mb-5">Data Santi PONPES Pekalongan Tahun 2022-2024</h2>

            <form action="" method="post" class="form-grup d-flex">
              <input type="search" name="keyword" class="form-control me-3" placeholder="search" autofocus autocomplete="off"> 
              <button type="submit" name="cari" class="btn btn-success">search</button>
            </form>

            <a href="tambah.php" class="btn btn-warning mt-3 mb-3">Tambah</a>

                <form action="">
                    <table class="table table-bordered">
                        <tr class="text-center bg-dark text-white">
                          <th>No</th>
                          <th>Nama Santri</th>
                          <th>Alamat</th>
                          <th>No.Telpon</th>
                          <th>Nama Ayah</th>
                          <th>Nama Ibu</th>
                          <th>Pilih</th>
                        </tr>

                        <?php foreach($santri as $row) : ?>
                        <tr>
                          <th class="text-center"><?= $n++ ?></th>
                          <td><?= $row["nama"] ?></td>
                          <td><?= $row["alamat"]?></td>
                          <td><?= $row["telpon"]?></td>
                          <td><?= $row["ayah"]?></td>
                          <td><?= $row["ibu"]?></td>
                          <td class="text-center">
                            <a href="edit.php?id=<?= $row["id"];?>" class="text-success"><i class="bi bi-pencil-square"></i></a>
                            <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin kau deck!!!');" class="text-danger"><i class="bi bi-trash-fill"></i></a>
                          </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </form>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>