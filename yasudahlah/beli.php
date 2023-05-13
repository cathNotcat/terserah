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


    <!-- Footer Start -->
    <section id="contact">
      <div class="container-fluid bg-primary text-white footer mt-5 pt-5 fadeIn" data-wow-delay="0.1s">
        <!-- <div class="container py-5 px-lg-5"> -->
        <!-- <div class="row gy-5 gx-4 pt-5"> -->
        <!-- <div class="container-xxl py-5 mt-5"> -->
        <div class="container px-lg-5">
          <div class=" position-relative text-center mx-auto" data-wow-delay="0.1s" style="max-width: 600px">
            <h1 class="mb-5 text-white">Pesan Disini!</h1>
            <div class="bg-light rounded" style="padding: 30px">
              <input type="text" class="form-control border-0 py-2 mb-2 mt-3" placeholder="Nama" />
              <input type="email" class="form-control border-0 py-2 mb-2 mt-3" placeholder="Email" />
              <textarea class="form-control border-0 mb-2 mt-3" rows="3" placeholder="Alamat"></textarea>

              <input min="1" max="100" type="number" id="typeNumber" class="form-control"
                placeholder="Masukan berat per-gram" />
              <label class="form-label" for="typeNumber"></label>
              <span>Metode pembayaran</span>
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
              <label class="form-check-label" for="flexRadioDefault1">e-Payment</label>
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
              <label class="form-check-label" for="flexRadioDefault1">COD</label>



              <button class="btn btn-register w-100 py-2 mt-3">Pesan</button>
            </div>
            <!-- </div> -->
            <!-- </div> -->
            <!-- </div> -->
          </div>

          <div class="row gy-5 gx-4 pt-5">
            <div class="col-md-4">
              <h5 class="fw-bold text-white mb-4">Tentang kita</h5>
              <a class="btn btn-link" href="">About Us</a>
              <a class="btn btn-link" href="">Contact Us</a>
              <a class="btn btn-link" href="">Privacy Policy</a>
              <a class="btn btn-link" href="">Terms & Condition</a>
              <a class="btn btn-link" href="">Support</a>
            </div>
            <div class="col-md-4">
              <h5 class="fw-bold text-white mb-4">Our Services</h5>
              <a class="btn btn-link" href="">Domain Register</a>
              <a class="btn btn-link" href="">Shared Hosting</a>
              <a class="btn btn-link" href="">VPS Hosting</a>
              <a class="btn btn-link" href="">Dedicated Hosting</a>
              <a class="btn btn-link" href="">Reseller Hosting</a>
            </div>
            <div class="col-md-4">
              <h5 class="fw-bold text-white mb-4">Get In Touch</h5>
              <p class="mb-2">
                <i class="fa fa-map-marker-alt me-3"></i>123 Street, New York,
                USA
              </p>
              <p class="mb-2">
                <i class="fa fa-phone-alt me-3"></i>+012 345 67890
              </p>
              <p class="mb-2">
                <i class="fa fa-envelope me-3"></i>info@example.com
              </p>
              <div class="d-flex pt-2">
                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
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