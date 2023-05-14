<!DOCTYPE html>
<html lang="en">

<head>
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

    <script src="//code.jquery.com/jquery-latest.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jsbarcode@3.11.5/dist/JsBarcode.all.min.js"></script>

    <style>
        body {
            overflow: hidden;
            min-height: 70vh;
            background: linear-gradient(#A1D1E2, #E9EEF2);
        }

        .wrapper {
            background-color: #E9EEF2;
            width: 400px;
            padding: 20px;
            margin: 0 auto;
            border-style: solid;
            border-radius: 20px;
            padding: -2px;
            margin-top: 15%;
            margin-bottom: 8px;
        }
    </style>

    <script>
        $(function () {
            <?php if (isset($_GET['status3']) && $_GET['status3'] == 0): ?>
                Swal.fire({
                    icon: 'success',
                    title: 'Your account has been registered',
                    showConfirmButton: false,
                    timer: 1500
                })
            <?php endif ?>

            <?php if (isset($_GET['status5']) && $_GET['status5'] == 0): ?>
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Email/ Password tidak valid',
                    footer: ''
                })
            <?php endif ?>
        });
    </script>
</head>

<body>
    <div class="wrapper">
        <a href="../" class="text-primary"><i><u> &#171; kembali </u> </i> </a>
        <form action="loginprocess.php" method="post">
            <h2 class="mt-2 mb-5" style="text-align:center">Login</h2>
            <!-- <p class="hint-text">Enter Login Details</p> -->
            <div class="mb-3 mt-5">
                <!-- <label for="exampleInputEmail1">Email</label> -->
                <input type="email" class="form-control" name="email" id="email" required aria-describedby="emailHelp"
                    placeholder="Email">
                <!-- <div id="emailHelp" class="form-text"> We'll never share your email with anyone else. </div> -->
            </div>
            <div class="mb-3">
                <!-- <label for="exampleInputPassword1" class="form-label">Password</label> -->
                <input type="password" class="form-control" name="password" required placeholder="Kata sandi">
            </div>
            <div class="form-group" style="display:flex; justify-content:center">
                <button type="submit" name="save" class="btn btn-secondary text-white px-4  mt-1">
                    Login</button>
            </div>
            <p class="mt-3 text-center">Belum punya akun? <a class="text-primary" href="../register"><u>Register
                        disini</u></a>.
            </p>
        </form>
    </div>
</body>

</html>