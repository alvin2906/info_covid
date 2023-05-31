
<?php


/*KONEKSI MYSQL */


$koneksi=mysqli_connect("localhost","root","","info_covid");
if (isset($_POST["simpann"])) 
{
$username=$_POST ["username"];
$password=$_POST ["password"];
$full_name=$_POST ["full_name"];
$email=$_POST ["email"];
$agama=$_POST ["agama"];
$no_hp=$_POST ["no_hp"];
$query="INSERT INTO user VALUES ('$username','$password','$full_name','$email','$agama','$no_hp')" ;
mysqli_query($koneksi,$query);
}
?>


<?php


