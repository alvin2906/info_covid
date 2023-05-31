<?php


/* KONEKSI MYSQL */


$koneksi=mysqli_connect("localhost","root","","info_covid");

if (isset($_POST["simpan"])) 
{
$nik=$_POST ["nik"];
$nama=$_POST ["nama"];
$tgl=$_POST ["tgl"];
$ket=$_POST ["ket"];

$query="INSERT INTO data_masuk VALUES ('$nik','$nama','$tgl','$ket')" ;
mysqli_query($koneksi,$query);
}
?>