<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>e-ticket CAPITALIST</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.ico" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style-in.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
      <div class="d-flex align-items-center">
        <i class="icofont-envelope"></i>cs.capitalist@gmail.com
      </div>
      <div class="d-flex align-items-center">
        <i class="icofont-phone"></i> +62 856 7895 1234
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="halaman_admin.php">BOOK NOW!</a></h1>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="data_jadwal.php">DATA JADWAL</a></li>
          <li><a href="data_pelanggan.php">DATA PELANGGAN</a></li>
          <li><a href="data_pesanan.php">DATA PESANAN</a></li>
        </ul>
      </nav><!-- .nav-menu -->

      <a href="keluar.php" class="appointment-btn scrollto"><span class="d-none d-md-inline">KELUAR</a>
        
    </div>
  </header><!-- End Header -->
  
  <main id="main">
    <section id="masuk" class="masuk">
      <br><br><br><br><br><div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>TAMBAH JADWAL PERJALANAN</h2>
        </div>

        <form method="post" action="proses_tambah_jadwal.php">
        <div class="form-group row">
            <label for="inputArmada3" class="col-sm-2 col-form-label">Nama Armada</label>
            <div class="col-sm-10">
                <input type="text" name="nama_armada" class="form-control" id="nama_armada" placeholder="Masukkan nama armada" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputAsal3" class="col-sm-2 col-form-label">Kota Asal</label>
            <div class="col-sm-10">
                <input type="text" name="kota_asal" class="form-control" id="kota_asal" placeholder="Masukkan kota asal perjalanan" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputTujuan3" class="col-sm-2 col-form-label">Kota Tujuan</label>
            <div class="col-sm-10">
                <input type="text" name="kota_tujuan" class="form-control" id="kota_tujuan" placeholder="Masukkan kota tujuan perjalanan" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputBerangkat3" class="col-sm-2 col-form-label">Jam Keberangkatan</label>
            <div class="col-sm-10">
                <input type="text" name="jam_berangkat" class="form-control" id="jam_berangkat" placeholder="Masukkan jam keberangkatan perjalanan, cth format: 20:00" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputDatang3" class="col-sm-2 col-form-label">Jam Datang</label>
            <div class="col-sm-10">
                <input type="text" name="jam_datang" class="form-control" id="jam_datang" placeholder="Masukkan jam kedatangan perjalanan, cth format: 07:30" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputTarif3" class="col-sm-2 col-form-label">Tarif</label>
            <div class="col-sm-10">
                <input type="text" name="tarif" class="form-control" id="tarif" placeholder="Masukkan tarif perjalanan" required>
            </div>
        </div>
        <button type="submit" class="btn btn-dark btn-lg btn-block">TAMBAH DATA</button>
        </form>
      </div>
    </section><br><br><br><br><br>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>e-ticket CAPITALIST</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="#">CAPITALIST TEAM</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
