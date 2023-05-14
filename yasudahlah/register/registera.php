<?php

require "../connect.php";
if (isset($_POST['save'])) {
    $nama = $_POST['nama'];
    $tanggal = $_POST['tanggal'];
    $nomor = $_POST['nomor'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // $firstPart = mt_rand(1000, 9999);
// $secondPart = mt_rand(1000, 9999);
// $thirdPart = mt_rand(1000, 9999);
// $barcodeNum = $firstPart . $secondPart . $thirdPart;
// echo $barcodeNum;
    $barcodeNum = $_POST['barcode'];
    $sql = mysqli_query($con, "SELECT * FROM member where email='$email'");
    $hariIni = date('Y/m/d');
    $diff = abs(strtotime($hariIni) - strtotime($tanggal));

    $years = floor($diff / (365 * 60 * 60 * 24));

    //     echo ("<script LANGUAGE = 'JavaScript'>
// window.alert(yaya);
// </script>");

    // Use the current timestamp as the seed
// Get the current timestamp in microseconds
// $microtime = microtime(true) * 1000000;

    // // Use the timestamp as the seed for the random number generator
// srand($microtime);

    // // Generate three random numbers and concatenate them together
// $firstPart = mt_rand(1000, 9999);
// $secondPart = mt_rand(1000, 9999);
// $thirdPart = mt_rand(1000, 9999);
// $barcodeNum = $firstPart . $secondPart . $thirdPart;

    // $barcodeNum = rand();


    if ($tanggal >= date($hariIni)) {
        header('location: register.php?status2=0');
    }
    if ($years < 17) {
        header('location: register.php?status2=0');
    } else {


        if (mysqli_num_rows($sql) > 0) {
            header('location: register.php?status=0');
        } else {
            //             echo ("<script LANGUAGE = 'JavaScript'>
// window.alert(" . $barcodeNum . ");
// </script>");
            $sql2 = "insert into member values(null, '$nama', '$email', '$nomor', '$tanggal', '$password', $barcodeNum)";
            $query = mysqli_query($con, $sql2);
            // $sql3="update member set barcodeNumber = '$barcodeNum' where email='$email'";
            // $query=mysqli_query($con,$sql3);
            header("Location: ../login/index.php?status3=0");
        }
    }
}

?>