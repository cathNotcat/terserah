<?php

require "connect.php";

$nama=$_POST['nama'];
$tanggal=$_POST['tanggal'];
$nomor=$_POST['nomor'];
$email=$_POST['email'];
$password=$_POST['password'];
$sql=mysqli_query($con,"SELECT * FROM member where email='$email'");
$hariIni = date('Y/m/d');
$diff = abs(strtotime($hariIni) - strtotime($tanggal));

$years = floor($diff / (365*60*60*24));

if($tanggal >= date($hariIni)){ 
    header('location: register.php?status2=0');
}
if($years < 17){
    header('location: register.php?status2=0');
}
else{


if(mysqli_num_rows($sql)>0)
{
    header('location: register.php?status=0');
}
else if (isset($_POST['save']))
{
    $sql2="insert into member values(null, '$nama', '$email', '$nomor', '$tanggal', '$password')";
    $query=mysqli_query($con,$sql2);
    header ("Location: login.php?status3=0");
}
}
?>

