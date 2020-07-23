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
    <section id="masuk" class="masuk">
      <br><br><br><br><br><div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>DATA PEMESANAN</h2>
        </div>
        <center><i><h5>Silahkan lengkapi data berikut ini</h5></i></center><br>

        <form method="post" action="proses_tiket.php">
        <?php
        include "koneksi.php";
        $id = $_GET['id'];
        $sqr = mysqli_query($connect, 'select * from jadwal_berangkat where id="'.$id.'" ');
        $qur = mysqli_fetch_array($sqr);
        ?>
        <div class="form-group row">
            <label for="inputStatus3" class="col-sm-2 col-form-label">Status</label>
            <div class="col-sm-10">
                <input type="text" name="status" class="form-control" readonly id="status" value="Dalam Proses" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputIDUser3" class="col-sm-2 col-form-label">ID User</label>
            <div class="col-sm-10">
                <input type="text" name="id_user" class="form-control" readonly id="id_user" value="<?=$ds['id'];?>" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputIDJadwal3" class="col-sm-2 col-form-label">ID Jadwal</label>
            <div class="col-sm-10">
                <input type="text" name="id_jadwal" class="form-control" readonly id="id_jadwal" value="<?=$qur['id'];?>" required>
            </div>
        </div>
        <div class="form-group row">
            <?php
              include "koneksi.php";
              $rang = range(1, 6);
              shuffle($rang);
              $c = implode($rang);
              $kode_booking = $c;
            ?>
            <label for="inputKodeBooking3" class="col-sm-2 col-form-label">Kode Booking</label>
            <div class="col-sm-10">
                <input type="text" name="kode_booking" class="form-control" readonly id="kode_booking" value="<?=$kode_booking;?>" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputArmada3" class="col-sm-2 col-form-label">Jenis Armada</label>
            <div class="col-sm-10">
                <input type="text" name="armada" class="form-control" id="armada" readonly value="<?=$qur['nama_armada'];?>" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputNama3" class="col-sm-2 col-form-label">Nama Lengkap</label>
            <div class="col-sm-10">
                <input type="text" name="nama" class="form-control" id="nama" value="<?=$ds['nama'];?>" required>
            </div>
        </div>
        <?php
        include "koneksi.php";
        $sa = mysqli_query($connect, 'select * from customer where  username="'.$_SESSION['user'].'" ');
        $da = mysqli_fetch_array($sa);
        ?>
        <div class="form-group row">
            <label for="inputNIK3" class="col-sm-2 col-form-label">NIK</label>
            <div class="col-sm-10">
                <input type="text" name="nik" class="form-control" id="nik" value="<?=$da['nik'];?>" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputAlamat3" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <input type="text" name="alamat" class="form-control" id="alamat" value="<?=$da['alamat'];?>" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputTelepon3" class="col-sm-2 col-form-label">No. Telepon</label>
            <div class="col-sm-10">
                <input type="text" name="telepon" class="form-control" id="telepon" value="<?=$da['telepon'];?>" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputRute3" class="col-sm-2 col-form-label">Rute Perjalanan</label>
            <div class="col-sm-10">
                <input type="text" name="rute" class="form-control" readonly id="rute" value="<?=$qur['kota_asal'];?><?php echo " - ";?><?=$qur['kota_tujuan'];?>" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputBerangkat3" class="col-sm-2 col-form-label">Jam Keberangkatan</label>
            <div class="col-sm-10">
                <input type="text" name="jam_berangkat" class="form-control" readonly id="jam_berangkat" value="<?=$qur['jam_berangkat'];?>" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputDatang3" class="col-sm-2 col-form-label">Jam Kedatangan</label>
            <div class="col-sm-10">
                <input type="text" name="jam_datang" class="form-control" id="jam_datang" readonly value="<?=$qur['jam_datang'];?>" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputBerangkat3" class="col-sm-2 col-form-label">Tanggal Berangkat</label>
            <div class="col-sm-10">
                <input type="date" name="tgl_berangkat" class="form-control" id="tgl_berangkat" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputTarif3" class="col-sm-2 col-form-label">Total Pembayaran</label>
            <div class="col-sm-10">
                <input type="text" name="tarif" class="form-control" readonly id="tarif" value="<?=$qur['tarif'];?>" required>
            </div>
        </div>
        <button type="submit" class="btn btn-dark btn-lg btn-block">Pesan Tiket</button>
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
