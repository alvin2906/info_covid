<?php


/* MEMANGGIL KONEKSI */


require "koneksi.php";


/* LANJUTAN TOMBOL SIMPAN */


if (isset($_POST['simpan'])) {
    
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $tgl = $_POST['tgl'];
    $ket = $_POST['ket'];

    mysqli_query($koneksi, "INSERT INTO data_masuk VALUES (null,'$nik','$nama','$tgl','$ket')");
    header("location: data_pasien.php");
    return;

}


/* LANJUTAN TOMBOL EDIT */


if (isset($_POST['edit'])) {
    
    $id = $_POST['id'];
    $nik=$_POST ["nik"];
    $nama=$_POST ["nama"];
    $tgl=$_POST ["tgl"];
    $ket=$_POST ["ket"];
    mysqli_query($koneksi, "UPDATE data_masuk SET  nik = '$nik', nama = '$nama', tgl = '$tgl', ket = '$ket' WHERE id_pasien = $id");
    header("location: data_pasien.php");
    return;    


}


/* LANJUTAN TOMBOL UBAH */


if (isset($_POST['ubah'])) {
    
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $tgl = $_POST['tgl'];
    $ket = $_POST['ket'];
    mysqli_query($koneksi, "INSERT INTO data_masuk VALUES (null,'$nik','$nama','$tgl','$ket')");
    header("location: data_pasien.php");
    return;
}

?>
