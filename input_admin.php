<!DOCTYPE html>
<html lang="en">
<head>


  <!-- JUDUL HALAMAN -->


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>SIST.C-19</title>
</head>
<body align="center">

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


  <!-- JUDUL FORM -->


    <div class="container fluid px-4">
        <h1 align="center">FORM INPUT DATA</h1>
        <h2 align="center">Selamat Datang Admin</h2>
        <div class="row">


  <!-- ISI FORM -->


        <p>
        <div class="card mb-2 mt-7 col-12">
                <form action="aaksi.php" method="POST">
                    <div class="card-header">
                        <span class="h5 my-2"> Tambahkan Data </span>
                    </div>
                    <div class="card-body">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                                <div class="mb-3">
                                <label for="full_name" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="full_name" name="full_name">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email">
                            </div>
                            <div class="mb-3">
                                <label for="agama" class="form-label">Agama</label>
                                <input type="text" class="form-control" id="agama" name="agama">
                            </div>
                            <div class="mb-3">
                                <label for="no_hp" class="form-label">Nomor Handphone</label>
                                <input type="number" class="form-control" id="no_hp" name="no_hp">
                                <button type="submit" name="simpann" class="btn btn-sm btn-primary float-end">SIMPAN</button>
                            </div>
                    </div>
                </form>
            </div>
</body>
</html>