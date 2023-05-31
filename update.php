<?php

require "koneksi.php";
$id = $_GET['id_pasien'];
$crudQuery = mysqli_query($koneksi,"SELECT * FROM data_masuk WHERE id_pasien = $id");
$user = mysqli_fetch_array($crudQuery);

?>


<!DOCTYPE html>
<html lang="en">


  <!-- JUDUL HALAMAN -->


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>SIST.C-19</title>
</head>


  <!-- BACKGROUND DAN LOGO -->


<style>
    body {
      background-image: url('bg.info.covid.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: 100% 100%;
    }
    </style>
    <br></br>
    <br></br>
    <br></br>
    <p align="center">
      <img src="logo.satgas.png" width="100" height="100" alt="satgas"/>
      <img src="logo.jateng.png" width="100" height="100" alt="jateng"/>
      <img src="logo.smkn9.png" width="100" height="100" alt="smkn9"/>
    </p>


      <!-- JUDUL TABEL -->


<body>
    <div class="container fluid px-4">
        <h1 class="mt-4 text-center">DATA PASIEN</h1>
        <div class="row">
            <div class="card mb-2 mt-7 col-12">
                <form action="aksi.php" method="POST">
                    <div class="card-header">


                      <!-- TABEL -->


                        <span class="h5 my-2">UBAH DATA</span>
                    </div>
                    <div class="card-body">
                            <div class="mb-3">
                                <label for="nik" class="form-label">Nik</label>
                                <input type="number" class="form-control" id="nik" name="nik" value="<?= $user['nik'] ?>">
                                <input type="hidden" class="form-control" id="id" name="id" value="<?= $user['id_pasien'] ?>">
                              </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" value="<?= $user['nama'] ?>"> 
                            </div>
                            <div class="mb-3">
                                <label for="tgl" class="form-label">Tanggal</label>
                                <input type="date" class="form-control" id="tgl" name="tgl" value="<?= $user['waktu_diagnosa'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="ket" class="form-label">Keterangan</label>
                                <input type="text" class="form-control" id="ket" name="ket" value="<?= $user['keterangan'] ?>">
                                <td><input type="submit" name="ubah" value="Simpan"> </td>
                            </div>             
                    </div>
                </form>
            </div>
</body>
</html>