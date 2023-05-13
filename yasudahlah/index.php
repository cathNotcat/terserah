<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>GreenHost - Web Hosting HTML Template</title>
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
</head>

<body>
  <div class="container-xxl bg-white p-0">
    <!-- Spinner Start -->
    <div id="spinner"
      class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
      <div class="spinner-border text-primary" style="width: 3rem; height: 3rem" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar & Hero Start -->
    <div class="container-xxl position-relative p-0">
      <?php include('navbar.php') ?>

      <div class="container-xxl py-5 bg-primary hero-header mb-5">
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
              <a href="" class="btn btn-info py-sm-3 px-sm-5 me-3 animated slideInLeft">Informasi lebih lanjut <span
                  class="bi bi-box-arrow-up-right ms-2"></span> </a>
            </div>
            <div class="col-lg-6 text-center text-lg-start">
              <img class="img-fluid animated zoomIn" src="img/hero.png" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Navbar & Hero End -->

    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
      <div class="modal-dialog modal-fullscreen">
        <div class="modal-content" style="background: rgba(29, 40, 51, 0.8)">
          <div class="modal-header border-0">
            <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body d-flex align-items-center justify-content-center">
            <div class="input-group" style="max-width: 600px">
              <input type="text" class="form-control bg-transparent border-light p-3"
                placeholder="Type search keyword" />
              <button class="btn btn-light px-4">
                <i class="bi bi-search"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Full Screen Search End -->



    <!-- About Start -->
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
                  <i class="fa fa-users-cog fa-2x text-primary mb-2"></i>
                  <h2 class="mb-1" data-toggle="counter-up">19.45</h2>
                  <p class="mb-0">juta ton total penyebaran sampah</p>
                </div>
              </div>
              <div class="col-sm-4 wow fadeIn" data-wow-delay="0.3s">
                <div class="bg-light rounded text-center p-4">
                  <i class="fa fa-users fa-2x text-primary mb-2"></i>
                  <h2 class="mb-1" data-toggle="counter-up">7.9</h2>
                  <p class="mb-0">juta ton sampah sisa makanan</p>
                </div>
              </div>
              <div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s">
                <div class="bg-light rounded text-center p-4">
                  <i class="fa fa-check fa-2x text-primary mb-2"></i>
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
    <!-- About End -->

    <!-- Pricing Start -->
    <div class="container-xxl py-5">
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
                  Buanglah sampah pada tempat yang sudah disediakan yang berada pada ...
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
                  Tunjukkan barcode pada ponsel dengan cara klik profile dan show barcode.
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
    <!-- Pricing End -->
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
  </div>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Template Javascript -->
  <script src="js/main.js"></script>
</body>

</html>