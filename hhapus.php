<?php


/* KONEKSI TOMBOL HHAPUS */


require "kkoneksi.php";
$id=$_GET['id_alat'];

mysqli_query($koneksi,"DELETE FROM user  WHERE id_alat='$id'");
        header("location:data_admin.php");
        return;
?>