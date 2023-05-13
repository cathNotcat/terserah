<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Mulung</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Open+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!-- buat date picker -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- <script src="sweetalert2.all.min.js"></script> -->
    <script src="//code.jquery.com/jquery-latest.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jsbarcode@3.11.5/dist/JsBarcode.all.min.js"></script>
    <style>
        .wrapper {
            width: 360px;
            padding: 20px;
            margin: 0 auto;
            border-style: solid;
            padding: -2px;
            margin-top: 65px;
            margin-bottom: 8px;
            border-radius: 20px;
        }
    </style>
</head>
<script>
    //buat date picker booking form check in
    function generateBarcode(value) {
        // Generate a random 6-digit number
        JsBarcode('#barcode', value, {
            format: 'code128',
            displayValue: true,
        });
    }

</script>
<?php
session_start();
require 'connect.php';
?>

<body>
    <?php
    $sql = "SELECT * FROM member WHERE email = '{$_SESSION['id']}'";

    // $res=mysqli_query($con,$sql);
    $res1 = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($res1);
    ?>
    <div class="wrapper">
        <h2 style="text-align: center;">Profile</h2>
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" readonly class="form-control" name="nama" id="nama"
                placeholder="<?php echo $row['nama']; ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Tanggal Lahir</label>
            <div class="input-group date" id="tglLahir">
                <input type="text" class="form-control" name="tanggal" id="tanggal"
                    placeholder="<?php echo $row['tanggal_lahir']; ?>" required readonly>
            </div>

        </div>
        <div class="mb-3">
            <label class="form-label">Nomor Telepon</label>
            <input type="text" class="form-control" name="nomor" id="nomor" placeholder="<?php echo $row['no_telp']; ?>"
                required readonly>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" name="email" id="email" required aria-describedby="emailHelp"
                placeholder="<?php echo $row['email']; ?>" readonly>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password"
                value="<?php echo $row['password']; ?>" required readonly>
        </div>
        <div class="mb-3">
            <label class="form-label">Barcode</label>

            <br>
            <svg id="barcode"></svg>
            <script>
                generateBarcode(<?php echo $row['barcodeNumber']; ?>);
                // generateBarcode('2147483647');
            </script>

        </div>
        <div>
            <!-- <svg id = "barcode"></svg> -->

        </div>
    </div>

    </div>



</body>

</html>