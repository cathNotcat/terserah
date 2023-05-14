<?php

require "../connect.php";

$nama_pembeli = $_POST['nama_pembeli'];
// $tanggal_beli = $_POST['tan'];
$jumlah_dibeli = $_POST['jumlah_dibeli'];
$email_pembeli = $_POST['email_pembeli'];
$alamat_pembeli = $_POST['alamat_pembeli'];
//     echo("<script LANGUAGE = 'JavaScript'>
// window.alert(".$nama_pembeli.");
// window.alert(".$jumlah_dibeli.");
// window.alert(".$email_pembeli.");
// </script>");


$hariIni = date('Y/m/d');

    if (isset($_POST['order'])) {
        echo("asasf");
        // $sql3 = mysqli_query($con, "INSERT INTO penjualan (nama, jumlah, alamat, email, tanggal) VALUES ('$nama_pembeli', '$jumlah_dibeli', '$email_pembeli', '$alamat_pembeli', '$hariIni')");
        $sql3 = mysqli_query($con, "INSERT INTO penjualan VALUES (null, '$nama_pembeli', '$jumlah_dibeli', '$alamat_pembeli', '$email_pembeli', '$hariIni')");
    
        // $sql2 = "insert into member values(null, '$nama', '$email', '$nomor', '$tanggal', '$password')";
            $query = mysqli_query($con, $sql3);
            header("Location: index.php?status3=0");
        }
?>