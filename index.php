<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>e-ticket CAPITALIST</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.12.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="assets/img/book.png" /></a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu<i class="fas fa-bars ml-1"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#cara-pesan">Cara Pemesanan</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#jadwal-berangkat">Jadwal Berangkat</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#pemesanan">Pemesanan</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#konfirmasi-bayar">Konfirmasi Bayar</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Tentang Kami</a></li>
                        <button><li class="nav-item"><a class="js-scroll-trigger" href="#masuk">MASUK</a></li></button>
                    </ul>
                </div>
            </div>
        </nav>
        
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Mau ke mana? Semua ada tiketnya!</div>
                <div class="masthead-heading text-uppercase">E-TICKET CAPITALIST TEMPATNYA</div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#cara-pesan">LIHAT SELENGKAPNYA</a>
            </div>
        </header>

        <!-- Cara-Pesan-->
        <section class="page-section" id="cara-pesan">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase"><br><br>Cara Pemesanan</h2>
                    <h3 class="section-subheading text-muted">1. Tentukan tanggal keberangkatan dan jenis armada yang akan anda pesan.<br><br>2. Kemudian, isi form untuk pengisian data customer atau pemesan.<br><br>3. Setelah data pemesan selesai diisikan, klik tombol Pesan Tiket, maka akan tampil data pemesan dan juga ada total pembayaran.<br><br>4. Lakukan konfirmasi pembayaran dan upload bukti pembayaran anda pada form yang tersedia.<br><br>5. Apabila telah melakukan pembayaran, maka tiket sudah dapat dicetak oleh pemesan.</h3>
                </div>
            </div><br>
        </section>

        <!-- Jadwal-Berangkat Grid-->
        <section class="page-section bg-light" id="jadwal-berangkat">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Jadwal Keberangkatan</h2>
                </div>
                <table class="table text-center">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Armada</th>
                        <th scope="col">Relasi</th>
                        <th scope="col">Jam Keberangkatan</th>
                        <th scope="col">Jam Kedatangan</th>
                        <th scope="col">Tarif</th>
                    </tr>
                    </thead>
                    <?php 
                    include 'koneksi.php';
                    $no = 1;
                    $data = mysqli_query($koneksi,"select * from jadwal_berangkat");
                    while($d = mysqli_fetch_array($data)){
                        ?>
                        <tbody>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $d['nama_armada']; ?></td>
                            <td><?php echo $d['relasi']; ?></td>
                            <td><?php echo $d['jam_berangkat']; ?></td>
                            <td><?php echo $d['jam_datang']; ?></td>
                            <td><?php echo "Rp. "; ?><?php echo $d['tarif']; ?></td> 
                        </tr>
                        </tbody>
                        <?php 
                    }
                    ?>
                </table>
            </div><br><br>
        </section>
        
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-left">Copyright &copy; 2020 by e-ticket CAPITALIST.</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a><a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a><a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-right"><a class="mr-3" href="#!">Privacy Policy</a><a href="#!">Terms of Use</a></div>
                </div>
            </div>
        </footer>
        
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
