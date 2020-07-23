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

<?php include "koneksi.php";
session_start();
$ss = mysqli_query($connect,'select * from user where username="'.$_SESSION['user'].'" ');
$ds = mysqli_fetch_array($ss);
?>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="halaman_user.php">BOOK NOW!</a></h1>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="riwayat_pesan.php">Pesanan</a></li>
          <?php 
          $cs = mysqli_query($connect, 'select * from customer where username="'.$_SESSION['user'].'" ');
          $fu = mysqli_num_rows($cs);
          if($fu==0) { ?>
          <li><a href="pengaturann.php">Pengaturan</a></li>
          <?php } else { ?>
          <li><a href="pengaturan.php?username=<?=$ds['username'];?>">Pengaturan</a></li>
          <?php } ?>
        </ul>
      </nav><!-- .nav-menu -->

      <a href="keluar.php" class="appointment-btn scrollto"><span class="d-none d-md-inline">KELUAR</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <div class="carousel-inner" role="listbox">

        <div class="carousel-item active" style="background-image: url(assets/img/header-bg.jpg)">
          <div class="container">
            <h2><span>WELCOME TO E-TICKET CAPITALIST</span></h2>
            <p>Berdiri pada tahun 2020, e-ticket CAPITALIST merupakan aplikasi online pemesanan tiket travel agent di Indonesia. Produk yang disediakan terkait dengan pemesanan travel. Misi kami adalah untuk mengakomodasi akses terbaik untuk pemesanan travel online melalui web.</p>
            <a href="#cari_jadwal" class="btn-get-started scrollto">CARI JADWAL KEBERANGKATAN</a>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= Cari Jadwal Section ======= -->
    <section id="cari_jadwal" class="page-section">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>CARI JADWAL KEBERANGKATAN</h2>
        </div>
        <div class="col s4 center" align="center">
          <h5>Halo,
              <i style="text-transform: uppercase"><?=$ds['username'];?>.</i> Silahkan lakukan pencarian untuk pemesanan tiket.
          </h5>
        </div><br>
        <form method="post" action="cari_jadwal.php">
        <div class="form-group row">
            <label for="inputCari3" class="col-sm-2 col-form-label">Cari Tiket</label>
            <div class="col-sm-10">
                <input type="text" name="cari" class="form-control" id="cari" placeholder="Cari berdasarkan jenis armada, kota asal, kota tujuan" required>
            </div>
        </div>
        <button type="submit" class="btn btn-dark btn-lg btn-block">Cari</button>
        </form>
        <?php 
        $cs = mysqli_query($connect, 'select * from customer where username="'.$_SESSION['user'].'" ');
        $fu = mysqli_num_rows($cs);
        if($fu==0) { ?>
        <br><b>NB: </b>Sebelum mencari tiket, pastikan anda sudah melengkapi data diri anda. <a href="pengaturann.php">Klik disini!</a>
        <?php } else { ?>
        <br><b>NB: </b>Sebelum mencari tiket, pastikan anda sudah melengkapi data diri anda. <a href="pengaturan.php?username=<?=$ds['username'];?>">Klik disini!</a>
        <?php } ?>
      </div><br><br><br><br><br><br><br><br><br><br>
    </section><!-- End Cari Jadwal Section -->
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
