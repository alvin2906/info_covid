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
<body>


  <!-- BACKGROUND DAM LOGO -->


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


    <div class="container fluid px-4">
        <h1 class="mt-4 text-center">DATA SELURUH PASIEN</h1>
        <div class="row">
        <div class="card mb-2 mt-2 col-13">
                <div class="card-header">
                    </div>
                    <div class="card-body">
    
                    
  <!-- TABEL -->


                    <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col"><center>Nik</center></th>
                                            <th scope="col"><center>Nama</center></th>
                                            <th scope="col"><center>Tanggal</center></th>
                                            <th scope="col"><center>keterangan</center></th>
                                            <th scope="col"><center>Aksi</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                      <!-- MEMANGGIL KONEKSI -->


                                        <?php
                                           require "koneksi.php";
                                            $queryUser  =   mysqli_query($koneksi, "SELECT * FROM data_masuk ORDER BY id_pasien ASC");
                                            while ($data = mysqli_fetch_array($queryUser)) { ?>
                                                
                                            
                                        
                                        <tr>
                                            <td align="center"><?= $data['nik'] ?></td>
                                            <td align="center"><?= $data['nama'] ?></td>
                                            <td align="center"><?= $data['waktu_diagnosa'] ?></td>
                                            <td align="center"><?= $data['keterangan'] ?></td>
                                            <td align="center">
                                                <a href="update.php?id_pasien=<?= $data['id_pasien'] ?>" class="btn btn-sm btn-warning" title="edit">Edit</a>
                                                <a href="hapus.php?id_pasien=<?= $data['id_pasien'] ?>" class="btn btn-sm btn-warning" title="hapus">Hapus</a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                        
                                    </tbody>
                                </table>
                                <a href="home.php" class="btn btn-sm btn-primary float-end"> HOME </a>

                    </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>