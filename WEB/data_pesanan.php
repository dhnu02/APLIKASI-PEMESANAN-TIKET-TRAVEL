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
          <h2>DATA PESANAN PELANGGAN</h2>
        </div>

        <table border="1" class="table text-center">
          <thead class="thead-dark">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Pemesan</th>
              <th scope="col">Kode Booking</th>
              <th scope="col">Jenis Armada</th>
              <th scope="col">Rute</th>
              <th scope="col">Jam Keberangkatan</th>
              <th scope="col">Jam Kedatangan</th>
              <th scope="col">Tanggal Keberangkatan</th>
              <th scope="col">Tarif</th>
              <th scope="col">Status</th>
            </tr>
          </thead>
          <?php 
          include 'koneksi.php';
          $no = 1;
          $data = mysqli_query($connect,"select * from pesanan_customer");
          while($d = mysqli_fetch_array($data)){
          ?>
          <tbody>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php
                  include "koneksi.php";
                  $squ = mysqli_query($connect, 'select * from user where id="'.$d['id_user'].'" ');
                  while($quu = mysqli_fetch_array($squ)) {
                  ?>
                  <b><?=$quu['nama'];?></b>
                <?php } ?>
            </td>
            <td><?php echo $d['kode_booking']; ?></td>
            <td><?php echo $d['armada']; ?></td>
            <td><?php echo $d['rute']; ?></td>
            <td><?php echo $d['jam_berangkat']; ?></td>
            <td><?php echo $d['jam_datang']; ?></td>
            <td><?php echo $d['tgl_berangkat']; ?></td>
            <td><?php echo "Rp. "; ?><?php echo $d['tarif']; ?></td>
            <td>
              <?php 
                if($d['status']=='Dalam Proses') {
              ?>
              <a href="proses_pesanan_pelanggan.php?id=<?=$d['id'];?>" onclick="return confirm('Ingin memproses pesanan?');"><button class="btn btn-dark"><?=$d['status'];?></button></a>
              <?php 
                } else {
                  echo $d['status'];
                }
              ?>
            </td>
          </tr>
          <?php } ?>
          </tbody>
        </table>
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
