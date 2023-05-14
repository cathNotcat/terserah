<?php

session_start();
require 'connect.php';

if (isset($_POST['kritik'])) {
  $nama = $_POST['knama'];
  $email = $_POST['kemail'];
  $pesan = $_POST['kpesan'];

  $sql = "INSERT INTO `kritik_saran` SET nama = '$nama', email = '$email', msg = '$pesan'";
  $stmt = $con->prepare($sql);
  $stmt->execute();




}





?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>MULUNG - Daur Ulang Sampah Plastik</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="keywords" />
  <meta content="" name="description" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />

  <!-- Template Stylesheet -->
  <link href="css/style.css" rel="stylesheet" />

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon" />

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Open+Sans:wght@400;500;600;700&display=swap"
    rel="stylesheet" />

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- Libraries Stylesheet -->
  <link href="lib/animate/animate.min.css" rel="stylesheet" />
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

  <script src="//code.jquery.com/jquery-latest.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jsbarcode@3.11.5/dist/JsBarcode.all.min.js"></script>

  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
  <!-- <div class="container-xxl bg-white p-0">  -->
  <!-- Spinner Start -->
  <div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
  <!-- Spinner End -->

  <!-- Navbar & Hero Start -->
  <div class="container-fluid bg-primary hero-header py-5 px-lg-5">
    <?php include('navbar.php') ?>

    <!-- <div class="container-xxl py-5 bg-primary hero-header mb-5"> -->
    <div class="container my-5 py-5 px-lg-5">
      <div class="row g-5">
        <div class="col-lg-6 pt-5 text-center text-lg-start">
          <h1 class="display-4 text-white mb-4 animated slideInLeft">
            Kumpulkan Sampahmu
          </h1>
          <p class="text-white animated slideInLeft">
            Mari kita indahkan Indonesia dengan cara mengumpulkan sampah yang ada dan mengubahnya menjadi uang.
          </p>
          <!-- <h1 class="text-white mb-4 animated slideInLeft">
                <small class="align-top fw-normal" style="font-size: 15px; line-height: 25px">Starting:</small>
                <span>$2.49</span>
                <small class="align-bottom fw-normal" style="font-size: 15px; line-height: 33px">/ Mo</small>
              </h1> -->
          <a href="#info" class="btn btn-info py-sm-3 px-sm-5 me-3 mt-2 animated slideInLeft">Informasi lebih lanjut
            <span class="bi bi-box-arrow-up-right ms-2"></span> </a>
        </div>
        <div class="col-lg-6 text-center text-lg-start">
          <img class="img-fluid animated zoomIn" src="img/head.png" alt="" />
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- Navbar & Hero End -->

  <!-- Desc Start -->
  <div class="container-xxl py-5">
    <div class="container px-lg-5">
      <div class="row g-5 align-items-center">
        <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.1s">
          <div class="section-title position-relative mb-4 pb-4">
            <h1 class="mb-2">Penyebaran Sampah di Indonesia</h1>
          </div>
          <p class="mb-4">
            Di Indonesia, sampah merupakan salah satu masalah serius yang hampir terabaikan. Jumlah sampah yang
            dihasilkan oleh masyarakat sangat besar dan terus meningkat setiap tahunnya. Menurut beberapa sumber, pada
            tahun 2022
            jumlah sampah plastik di Indonesia mencapai 5,4 juta ton atau sekitar 18% dari keseluruhan total sampah
            yaitu 19,45 juta ton.
          </p>
          <div class="row g-3">
            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
              <div class="bg-light rounded text-center p-4">
                <i class="bi bi-trash text-primary mb-2" style="font-size:30px"></i>
                <h2 class="mb-1" data-toggle="counter-up">19.45</h2>
                <p class="mb-0">juta ton total penyebaran sampah</p>
              </div>
            </div>
            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.3s">
              <div class="bg-light rounded text-center p-4">
                <i class="bi bi-basket2 text-primary mb-2" style="font-size:30px"></i>
                <h2 class="mb-1" data-toggle="counter-up">7.9</h2>
                <p class="mb-0">juta ton sampah sisa makanan</p>
              </div>
            </div>
            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s">
              <div class="bg-light rounded text-center p-4">
                <i class="bi bi-cup-straw text-primary mb-2" style="font-size:30px"></i>
                <h2 class="mb-1" data-toggle="counter-up">3.5</h2>
                <p class="mb-0">juta ton sampah plastik</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="img/about.png" />
        </div>
      </div>
    </div>
  </div>
  <!-- Desc End -->

  <!-- About Start -->
  <div id="info" class="container-xxl py-5">
    <div class="container px-lg-5">
      <div class="section-title position-relative text-center mx-auto mb-5 pb-4 wow fadeInUp" data-wow-delay="0.1s"
        style="max-width: 600px">
        <h1 class="mb-3">Mengapa Menggunakan Mulung</h1>
        <p class="mb-1">
          Dengan adanya MULUNG, masyarakat bisa membuang sampah yang ada dan mendapatkan imbalan berupa poin yang bisa
          ditukarkan dengan uang. Sampah tersebut tidak hanya berakhir di tempat pembuangan akhir, melainkan dapat
          direcycle dengan cara menjualnya kepada perusahaan daur ulang atau kepada UMKM yang membutuhkan bahan
          plastik tersebut.
        </p>
      </div>
      <div class="row gy-5 gx-4">
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
          <div class="position-relative shadow rounded border-top border-5 border-primary">
            <div
              class="d-flex align-items-center justify-content-center position-absolute start-50 translate-middle bg-primary rounded-circle"
              style="width: 45px; height: 45px;">
              <h3>1</h3>
            </div>
            <div class="text-center border-bottom p-4 pt-5">
              <h4 class="fw-bold">Kumpul Sampah</h4>
              <p class="mb-0">
                Buanglah sampah pada tempat yang sudah disediakan pada mall, sekolah, hingga pantai.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
          <div class="position-relative shadow rounded border-top border-5 border-secondary">
            <div
              class="d-flex align-items-center justify-content-center position-absolute top-0 start-50 translate-middle bg-secondary rounded-circle"
              style="width: 45px; height: 45px; margin-top: -3px">
              <h3>2</h3>
            </div>
            <div class="text-center border-bottom p-4 pt-5">
              <h4 class="fw-bold">Tunjuk Barcode</h4>
              <p class="mb-0">
                Tunjukkan barcode pada ponsel dengan cara klik profile kemudian klik barcode.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
          <div class="position-relative shadow rounded border-top border-5 border-primary">
            <div
              class="d-flex align-items-center justify-content-center position-absolute top-0 start-50 translate-middle bg-primary rounded-circle"
              style="width: 45px; height: 45px; margin-top: -3px">
              <h3>3</h3>
            </div>
            <div class="text-center border-bottom p-4 pt-5">
              <h4 class="fw-bold">Dapatkan Poin</h4>
              <p class="mb-0">
                Setelah scan barcode, poin akan otomatis bertambah pada akun anda.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.8s">
          <div class="position-relative shadow rounded border-top border-5 border-secondary">
            <div
              class="d-flex align-items-center justify-content-center position-absolute top-0 start-50 translate-middle bg-secondary rounded-circle"
              style="width: 45px; height: 45px; margin-top: -3px">
              <h3>4</h3>
            </div>
            <div class="text-center border-bottom p-4 pt-5">
              <h4 class="fw-bold">Withdraw</h4>
              <p class="mb-0">
                Setelah mencapai minimal withdraw pada ketentuan, anda dapat menarik uang.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- About End -->

  <!-- Ajakan Start -->
  <div class="container-xxl py-5 mt-5">
    <div class="container px-lg-5">
      <div class="section-title position-relative text-center mx-auto mb-5 pb-4 wow fadeInUp" data-wow-delay="0.1s"
        style="max-width: 600px">
        <h1 class="mb-3">Daftar Sekarang!</h1>
        <a href="register" class="btn btn-lg btn-register my-4 py-2 px-4 ms-3">Register</a>
      </div>
    </div>
  </div>
  <!-- Ajakan End -->

  <!-- Footer Start -->
  <section id="contact">
    <div class="container-fluid bg-primary text-white footer mt-5 pt-5 fadeIn" data-wow-delay="0.1s">
      <div class="container py-5 px-lg-5">
        <div class="row gy-5 gx-4 pt-5">
          <div class="container-xxl py-5 mt-5">
            <div class="container px-lg-5">
              <div class=" position-relative text-center mx-auto" data-wow-delay="0.1s" style="max-width: 600px">
                <h1 class="mb-5 text-white">Kritik dan Saran</h1>
                <form method="post">
                  <div class="bg-light rounded" style="padding: 30px">
                    <input name="knama" type="text" class="form-control border-0 py-2 mb-2 mt-3" placeholder="Nama" />
                    <input name="kemail" type="email" class="form-control border-0 py-2 mb-2 mt-3"
                      placeholder="Email" />
                    <textarea name="kpesan" class="form-control border-0 mb-2 mt-3" rows="3"
                      placeholder="Kritik atau saran"></textarea>
                    <button class="btn btn-register w-100 py-2 mt-3" name="kritik">Kirim</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="row gy-5 gx-4 pt-5">
          <div class="col-md-4">
            <h5 class="fw-bold text-white mb-4">Tentang kita</h5>
            <p>Berdiri pada tahun 2023</p>
            <p>Dirintis oleh mahasiswa</p>
          </div>
          <div class="col-md-4">
            <h5 class="fw-bold text-white mb-4">Tujuan kita</h5>
            <p>Mengalirkan perekonomian Indonesia</p>
            <p>Membantu menjaga lingkungan</p>
          </div>
          <div class="col-md-4">
            <h5 class="fw-bold text-white mb-4">Informasi</h5>
            <p class="mb-2">
              <i class="fa fa-map-marker-alt me-3"></i>Surabaya
            </p>
            <p class="mb-2">
              <i class="fa fa-phone-alt me-3"></i>0812345678
            </p>
            <p class="mb-2">
              <i class="fa fa-envelope me-3"></i>info@mulung.com
            </p>
            <div class="d-flex pt-2">
              <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
              <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
              <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
              <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="container px-lg-5">
        <div class="copyright">
          <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
              &copy; 2023 Yasudahlah
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Footer End -->

  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
  <!-- </div> -->


</body>

</html>