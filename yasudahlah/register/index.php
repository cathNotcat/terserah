<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Mulung</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="../img/favicon.ico" rel="icon">

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
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">

    <!-- buat date picker -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- <script src="sweetalert2.all.min.js"></script> -->

    <style>
        body {
            overflow: hidden;
            min-height: 80vh;
            background: linear-gradient(#A1D1E2, #E9EEF2);
        }

        .wrapper {
            background-color: #E9EEF2;
            width: 400px;
            padding: 20px;
            margin: auto;
            border-style: solid;
            border-radius: 20px;
            padding: -2px;
            margin-top: 10%;
            margin-bottom: 8px;
        }
    </style>
</head>
<script>
    //buat date picker booking form check in
    $(function () {
        $('#tglLahir').datepicker({
            format: "yyyy/mm/dd",
            language: "fr",
            changeMonth: true,
            changeYear: true
        });


        <?php if (isset($_GET['status']) && $_GET['status'] == 0): ?>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Email sudah terdaftar, silahkan gunakan email lain.',
                footer: ''
            })
        <?php endif ?>

        <?php if (isset($_GET['status2']) && $_GET['status2'] == 0): ?>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Tanggal lahir tidak valid',
                footer: ''
            })
        <?php endif ?>

        <?php if (isset($_GET['status3']) && $_GET['status3'] == 0): ?>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Tanggal lahir tidak valid',
                footer: ''
            })
        <?php endif ?>
    });

</script>

<body>
    <div class="wrapper">
        <a href="../" class="text-primary"><i><u> &#171; kembali </u> </i> </a>
        <h2 style='text-align: center;'>Sign Up</h2>
        <!-- <p>Please fill this form to create an account</p> -->
        <form action="registera.php" method="post">
            <div class="mb-3">
                <!-- <label class="form-label">Nama</label> -->
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" required>
            </div>

            <div class="mb-3">
                <!-- <label class="form-label">Tanggal Lahir</label> -->
                <div class="input-group date" id="tglLahir">
                    <input type="text" class="form-control" name="tanggal" id="tanggal" placeholder="Tanggal Lahir"
                        required>
                    <span class="input-group-append">
                        <span class="input-group-text bg-white d-block">
                            <i class="fa fa-calendar"></i>
                        </span>
                    </span>
                </div>

            </div>
            <div class="mb-3">
                <!-- <label class="form-label">Nomor Telepon</label> -->
                <input type="text" class="form-control" name="nomor" id="nomor" placeholder="Nomor Telepon" required>
            </div>
            <div class="mb-3">
                <!-- <label for="exampleInputEmail1">Email</label> -->
                <input type="email" class="form-control" name="email" id="email" required aria-describedby="emailHelp"
                    placeholder="Email">
            </div>
            <div class="mb-3">
                <!-- <label for="exampleInputPassword1" class="form-label">Password</label> -->
                <input type="password" class="form-control" name="password" id="password" placeholder="Kata sandi"
                    required>
            </div>
            <div class="container" style="display:flex; justify-content:center">
                <button type="submit" name="save" class="btn btn-secondary text-white px-4  mt-1">Register</button>
            </div>
            <p class="mt-3 text-center">Sudah ada akun? <a href="../login"><u>Login disini</u></a>.</p>
        </form>
    </div>

</body>

</html>