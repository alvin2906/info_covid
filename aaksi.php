<?php

require "kkoneksi.php";
/* lanjutan dari tombol simpann*/
if (isset($_POST['simpann'])) {
    
    $username=$_POST ["username"];
    $password=$_POST ["password"];
    $full_name=$_POST ["full_name"];
    $email=$_POST ["email"];
    $agama=$_POST ["agama"];
    $no_hp=$_POST ["no_hp"];

    mysqli_query($koneksi, "INSERT INTO user VALUES (null,'$username','$password','$full_name','$email','$agama','$no_hp')");
    header("location: login.php");
    return;

}
/* lanjutan dari tombol editt*/
if (isset($_POST['editt'])) {
    
    $id = $_POST['idd'];
    $username=$_POST ["username"];
    $password=$_POST ["password"];
    $full_name=$_POST ["full_name"];
    $email=$_POST ["email"];
    $agama=$_POST ["agama"];
    $no_hp=$_POST ["no_hp"];

    mysqli_query($koneksi, "UPDATE user SET  username = '$username', password = '$password', full_name = '$full_name', email = '$email', agama = '$agama', no_hp = '$no_hp' WHERE id_alat = $id");
    header("location: data_admin.php");
    return;

}

if (isset($_POST['login'])) {
    
    $username=$_POST ["username"];
    $password=$_POST ["password"];

    mysqli_query($koneksi, "INSERT INTO user VALUES (null,'$username','$password')");
    header("location: data_admin.php");
    return;
}

?>