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

<body onload="window.print()">
    <div class="container">
        <div class="row">
            <div class="col s7">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="center">
                              <img src="assets/img/favicon.ico" class="center" style="width: 75px; height: 75px; margin-left: 100px;">&nbsp;&nbsp;&nbsp;
                            </div>
                            <div class="center">
                                <form>
                                    <div class="input-field">
                                        <h1><b>CAPITALIST</b></h1>
                                        <i><h5>Booking Ticket Apps</h5></i>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div><br>
                    <div class="card-content">
                        <div class="center"><center><h4><u>DATA PERJALANAN</u></h4></center></div><br>
                        <div class="row">
                            <div class="col s6">
                            <?php
                            include "koneksi.php";
                            
                            session_start();
                            $id = $_GET['id'];
                            $sr = mysqli_query($connect, 'select * from pesanan_customer where id="'.$id.'" ');
                            $fr = mysqli_fetch_array($sr);
                            ?>
                                    <form>
                                    <?php
                                    include "koneksi.php";
                                    $sfrom = mysqli_query($connect, 'select * from jadwal_berangkat where id="'.$fr['id_jadwal'].'" ');
                                    $ffrom = mysqli_fetch_array($sfrom);
                                    ?>
                                            <div class="input-field">
                                                <h6>&nbsp;&nbsp;&nbsp;Jenis Armada</h6>
                                                &nbsp;&nbsp;&nbsp;<input type="text" id="armada" value="<?=$fr['armada'];?>">
                                            </div><br>
                                            <div class="input-field">
                                                <h6>&nbsp;&nbsp;&nbsp;Kota Asal</h6>
                                                &nbsp;&nbsp;&nbsp;<input type="text" id="kota_asal" value="<?=$ffrom['kota_asal'];?>">
                                            </div><br>
                                            <div class="input-field">
                                                <h6>&nbsp;&nbsp;&nbsp;Kota Tujuan</h6>
                                                &nbsp;&nbsp;&nbsp;<input type="text" id="kota_tujuan" value="<?=$ffrom['kota_tujuan'];?>">
                                            </div>
                                    </form>
                            </div>
                            <div class="col s6">
                                <div class="input-field">
                                    <h6>Tanggal Keberangkatan</h6>
                                    <input type="date" id="tgl_berangkat" value="<?=$fr['tgl_berangkat'];?>">
                                </div><br>
                                <div class="input-field">
                                    <h6>Jam Keberangkatan</h6>
                                    <input type="text" id="jam_berangkat" value="<?=$fr['jam_berangkat'];?>">
                                </div><br>
                                <div class="input-field">
                                    <h6>Jam Kedatangan</h6>
                                    <input type="text" id="jam_datang" value="<?=$fr['jam_datang'];?>">
                                </div><br>
                                <div class="input-field">
                                    <h6>Tarif</h6>
                                    <input type="text" id="tarif" value="Rp. <?=$fr['tarif'];?>">
                                </div>
                            </div>
                        </div>
                    </div><br><br>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col s6">
                                <form>
                                    <div class="input-field">
                                        <h5 align="right">Kode Booking : <?=$fr['kode_booking'];?></h5>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col s5">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="center">
                              <img src="assets/img/favicon.ico" class="center" style="width: 75px; height: 75px; margin-left: 100px;">&nbsp;&nbsp;&nbsp;
                            </div>
                            <div class="center">
                                <form>
                                    <div class="input-field">
                                        <h1><b>CAPITALIST</b></h1>
                                        <i><h5>Booking Ticket Apps</h5></i>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div><br>
                    <div class="card-content">
                        <div class="center"><center><h4><u>DATA PEMESAN</u></h4></center></div><br>
                        <div class="row">
                            <div class="col s6">
                    <?php
                    include "koneksi.php";
                    $sc = mysqli_query($connect, 'select * from customer where username="'.$_SESSION['user'].'" ');
                    $qc = mysqli_fetch_array($sc);
                    $scus = mysqli_query($connect, 'select * from customer where id="'.$qc['id'].'" ');
                    $fcus = mysqli_fetch_array($scus);
                    ?>
                            <form>
                                <div class="input-field">
                                    <h6>&nbsp;&nbsp;&nbsp;NIK</h6>
                                    &nbsp;&nbsp;&nbsp;<input type="text" id="nik" value="<?=$fcus['nik'];?>">
                                </div><br>
                                <div class="input-field">
                                    <h6>&nbsp;&nbsp;&nbsp;Nama Lengkap</h6>
                                    &nbsp;&nbsp;&nbsp;<input type="text" id="nama" value="<?=$fcus['nama'];?>">
                                </div>
                            </form>
                            </div>
                            <div class="col s6">
                                <div class="input-field">
                                    <h6>Alamat</h6>
                                    <input type="text" id="alamat" value="<?=$fcus['alamat'];?>">
                                </div><br>
                                <div class="input-field">
                                    <h6>No. Telepon</h6>
                                    <input type="text" id="telepon" value="<?=$fcus['telepon'];?>">
                                </div><br>
                                <div class="input-field">
                                    <h6>Jenis Kelamin</h6>
                                    <input type="text" id="jk" value="<?=$fcus['jk'];?>">
                                </div>
                            </div>
                        </div>
                    </div><br><br><br><br><br>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col s6">
                                <form>
                                    <div class="input-field">
                                        <h5 align="right">Kode Booking : <?=$fr['kode_booking'];?></h5>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
