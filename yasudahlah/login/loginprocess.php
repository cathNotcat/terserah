<?php
session_start();
require '../connect.php';
if (isset($_POST['save'])) {
    $id = $_POST['email'];
    $password = $_POST['password'];
    $sql = mysqli_query($con, "SELECT * FROM member where email = '$id' and password = '$password'");
    $row = mysqli_fetch_array($sql);
    if (is_array($row)) {
        $_SESSION["id"] = $row['email'];
        // $_SESSION["username"] = $row['username'];
        $_SESSION["password"] = $row['password'];
        // $_SESSION["login"] = true;
        header("location: ../index.php");
        exit;
    } else {
        header('location: login.php?status5=0');
    }

}
?>