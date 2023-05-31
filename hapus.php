<?php
/* MEMANGGIL KONEKSI */
require "koneksi.php";
$id=$_GET['id_pasien'];

mysqli_query($koneksi,"DELETE FROM data_masuk  WHERE id_pasien='$id'");
        header("location: data_pasien.php");
        return;
?>