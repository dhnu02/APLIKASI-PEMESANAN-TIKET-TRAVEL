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

  <main id="main">
    <!-- ======= Hasil Pencarian Section ======= -->
    <section id="hasil" class="page-section bg-light">
      <br><br><br><br><br><div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>HASIL PENCARIAN TIKET</h2>
        </div>
        <table border="1" class="table text-center">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Nama Armada</th>
                <th scope="col">Kota Asal</th>
                <th scope="col">Kota Tujuan</th>
                <th scope="col">Jam Keberangkatan</th>
                <th scope="col">Jam Kedatangan</th>
                <th scope="col">Tarif</th>
                <th scope="col">Opsi</th>
              </tr>
            </thead>
            <?php
            include "koneksi.php";
            $cari = $_POST['cari'];                           
            $sql = "SELECT * FROM jadwal_berangkat WHERE nama_armada like '%$cari%' OR kota_asal like '%$cari%' OR kota_tujuan like '%$cari%'";
            $query = mysqli_query($connect, $sql);
            $row = mysqli_num_rows($query);
            if($row==0) {
              echo "<center><h5>Pencarian tidak ditemukan, silahkan lakukan pencarian lagi!</h5></center>";
            } else {
              while($data = mysqli_fetch_array($query)) {
            ?>
            <tbody>
            <tr>
              <td>
                <?=$data['nama_armada'];?>
              </td>
              <td>
                <?=$data['kota_asal'];?>
              </td>
              <td>
                <?=$data['kota_tujuan'];?>
              </td>
              <td>
                <?=$data['jam_berangkat'];?>
              </td>
              <td>
                <?=$data['jam_datang'];?>
              </td>
              <td>
                <?php echo "Rp. "; ?><?=$data['tarif'];?>
              </td>
              <?php 
              $cs = mysqli_query($connect, 'select * from customer where username="'.$_SESSION['user'].'" ');
              $fu = mysqli_num_rows($cs);
              if($fu==0) { ?>
              <td><a href="pengaturann.php" onclick="return confirm('Mohon maaf, silahkan lengkapi data terlebih dahulu');"><button class="btn btn-dark">PESAN</button></a></td>
              <?php } else { ?>
              <td><a href="pesan_tiket.php?id=<?=$data['id'];?>"><button class="btn btn-dark">PESAN</button></a></td>
              <?php } ?>
            </tr>
            </tbody>
            <?php  } } ?>
          </table>
      <br><center><a href="halaman_user.php#cari_jadwal"><button class="btn btn-dark btn-lg btn-block">CARI LAGI</button></a></center>
      </div><br><br><br><br><br><br><br><br><br><br><br>
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
