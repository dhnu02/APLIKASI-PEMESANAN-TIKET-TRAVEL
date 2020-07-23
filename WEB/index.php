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

      <h1 class="logo mr-auto"><a href="index.php">BOOK NOW!</a></h1>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="#cara-pesan">Cara Pemesanan</a></li>
          <li><a href="#jadwal-perjalanan">Jadwal Perjalanan</a></li>
        </ul>
      </nav><!-- .nav-menu -->

      <a href="masuk.php" class="appointment-btn scrollto"><span class="d-none d-md-inline">MASUK</a>

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
            <a href="masuk.php" class="btn-get-started scrollto">PESAN TIKET SEKARANG</a>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= Cara Pesan Section ======= -->
    <section id="cara-pesan" class="page-section">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>CARA PEMESANAN</h2>
        </div>
        <div class="col s4 center" align="center">
          <h5>1. Lakukan pencarian tiket pada kotak yang tersedia.</h5>
          <h5>2. Setelah melakukan pencarian, silahkan isi form untuk pengisian data pemesanan.</h5>
          <h5>3. Setelah data pemesanan selesai diisikan, kemudian klik tombol "Pesan Tiket".</h5>
          <h5>4. Kemudian pesanan tiket anda akan langsung di proses oleh admin.</h5>
          <h5>5. Apabila telah melakukan pembayaran, maka tiket sudah dapat dicetak oleh pemesan.</h5>
      </div>
    </section><!-- End Cara Pesan Section -->

    <!-- ======= Jadwal Perjalanan Section ======= -->
    <section id="jadwal-perjalanan" class="page-section bg-light">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>JADWAL PERJALANAN</h2>
        </div>
        <table border="1" class="table text-center">
          <thead class="thead-dark">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Armada</th>
              <th scope="col">Kota Asal</th>
              <th scope="col">Kota Tujuan</th>
              <th scope="col">Jam Keberangkatan</th>
              <th scope="col">Jam Kedatangan</th>
              <th scope="col">Tarif</th>
            </tr>
          </thead>
          <?php 
          include 'koneksi.php';
          $no = 1;
          $data = mysqli_query($connect,"select * from jadwal_berangkat");
          while($d = mysqli_fetch_array($data)){
          ?>
          <tbody>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['nama_armada']; ?></td>
            <td><?php echo $d['kota_asal']; ?></td>
            <td><?php echo $d['kota_tujuan']; ?></td>
            <td><?php echo $d['jam_berangkat']; ?></td>
            <td><?php echo $d['jam_datang']; ?></td>
            <td><?php echo "Rp. "; ?><?php echo $d['tarif']; ?></td> 
            </tr>
          </tbody>
          <?php } ?>
        </table>
    </section><!-- End Jadwal Perjalanan Section -->

    <!-- ======= Alasan Section ======= -->
    <section id="alasan" class="page-section">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Mengapa memilih E-TICKET CAPITALIST?</h2>
        </div>
        <div class="col s4 center" align="center">
          <h5>1. Cepat, kami akan melayani pesanan anda cepat seperti kilat.</h5>
          <h5>2. Aman, keamanan adalah kunci utama dari transaksi tiket.</h5>
          <h5>3. Murah, tak perlu merogoh koceh lebih. Kami menyediakan tiket termurah untuk anda.</h5>
          <h5>4. Tiket langsung jadi, anda dapat mencetak tiket kapanpun dan dimanapun anda berada.</h5>
          <h5>5. Tepat waktu, alokasi waktu kami tepat sesuai jadwal.</h5>
        </div>
      </div>
    </section><!-- End Alasan Section -->
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
