<?php
session_start();
require 'connect.php';


?>
<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
    <a href="" class="navbar-brand p-0">
        <img src="img/logo_white.png" alt="Logo" style="width:200%">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="index.php" id="home" class="nav-item nav-link active nv">Home</a>
            <a href="" id="contact" type="button" data-bs-toggle="modal" data-bs-target="#beliModal"
                class="nav-item nav-link nv">Shop</a>
            <a href="" id="contact" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                class="nav-item nav-link nv">Contact</a>
        </div>

        <?php
        if (isset($_SESSION["id"])) {
            $sql = "SELECT * FROM member WHERE email = '{$_SESSION['id']}'";

            $res1 = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($res1);
            ?>
            <div class="dropdown">
                <span class="bi bi-person-circle ms-4 text-secondary dropdown-toggle" style="font-size:30px">
                    <span class="" style="font-size:20px;">
                        <?php echo $row['nama']; ?>
                    </span>
                </span>

                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#profile"
                            href="">Profile</a></li>
                    <li><a class="dropdown-item" href="#">Barcode</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                </ul>
            </div>


            <?php
        } else {
            echo '<a href="./login" id="login" class="btn btn-login py-2 px-4 ms-3" style="border-color: #e65c4f">Login</a>';
            echo '<a href="./register" class="btn btn-register py-2 px-4 ms-3">Register</a>';
        }
        ?>
    </div>
</nav>

<!-- Button trigger modal -->


<!-- Modal kontak START-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="bg-light modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Kontak kami</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post">
                    <div class="rounded" style="padding: 30px">
                        <input type="text" class="form-control border-0 py-2 mb-2 mt-3" placeholder="Nama" />
                        <input type="email" class="form-control border-0 py-2 mb-2 mt-3" placeholder="Email" />
                        <textarea class="form-control border-0 mb-2 mt-3" rows="3" placeholder="Pesan"></textarea>
                        <button class="btn btn-register w-100 py-2 mt-3">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- MODAL KONTAK END -->

<!-- MODAL BELI START -->
<div class="modal fade" id="beliModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="bg-light modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Beli Disini!</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post">
                    <div class="rounded" style="padding: 30px">
                        <input type="text" class="form-control border-0 py-2 mb-2 mt-3" placeholder="Nama" />
                        <input type="email" class="form-control border-0 py-2 mb-2 mt-3" placeholder="Email" />
                        <textarea class="form-control border-0 mb-2 mt-3" rows="3" placeholder="Alamat"></textarea>

                        <input min="1" max="100" type="number" id="typeNumber"
                            class="form-control border-0 py-2 mb-2 mt-3" placeholder="Masukan berat per-gram" />
                        <!-- <label class="form-control border-0 py-2 mb-2 mt-3" for="typeNumber"></label> -->
                        <div class="form ml-3 mt-3">Metode pembayaran
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">e-Payment</label>
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">COD</label>

                        </div>
                        <button class="btn btn-register w-100 py-2 mt-3">Pesan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- MODAL BELI END -->

<!-- MODAL PROFILE START -->
<div class="modal fade" id="profile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="bg-light modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Beli Disini!</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
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
                    <input type="text" class="form-control" name="nomor" id="nomor"
                        placeholder="<?php echo $row['no_telp']; ?>" required readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" name="email" id="email" required
                        aria-describedby="emailHelp" placeholder="<?php echo $row['email']; ?>" readonly>
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
            </div>
        </div>
    </div>
</div>
<!-- MODAL PROFILE END -->


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

<!-- <script>
    let nv = document.getElementById('home');

    let i;
    function unselectAll() {
        for (i = 0; i < nv.length; i++) {
            nv[i].style.backgroundColor = "";
        }
    }

    // loop through the options and add the event listener to each element
    nv.forEach(option => {
        nv.addEventListener('click', function () {
            unselectAll();
            this.style.backgroundColor = "#333";
        });
    });

</script> -->