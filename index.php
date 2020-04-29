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
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#masuk">MASUK</button>
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
                    <h3 class="section-subheading text-muted">1. Tentukan tanggal keberangkatan dan jenis armada yang akan anda pesan.<br><br>2. Kemudian, isi form untuk pengisian data customer atau pemesan.<br><br>3. Setelah data pemesan selesai diisikan, kemudian klik tombol "Pesan Tiket".<br><br>4. Lakukan konfirmasi pembayaran dan upload bukti pembayaran anda pada form yang tersedia.<br><br>5. Apabila telah melakukan pembayaran, maka tiket sudah dapat dicetak oleh pemesan.</h3>
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

        <!-- Pemesanan-->
        <section class="page-section" id="pemesanan">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Pemesanan Tiket</h2>
                    <h3 class="section-subheading text-muted">Silahkan isi data diri terlebih dahulu</h3>
                </div>
        <form method="post" action="simpan_tiket.php">
        <div class="form-group row">
            <label for="inputNIK3" class="col-sm-2 col-form-label">NIK</label>
            <div class="col-sm-10">
                <input type="text" name="nik" class="form-control" id="nik" placeholder="NIK Pemesan" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputNama3" class="col-sm-2 col-form-label">Nama Pemesan</label>
            <div class="col-sm-10">
                <input type="text" name="nama" class="form-control" id="inputNama3" placeholder="Nama Pemesan" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputAlamat3" class="col-sm-2 col-form-label">Alamat Pemesan</label>
            <div class="col-sm-10">
                <textarea name="alamat" class="form-control" placeholder="Alamat Pemesan" required></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal Berangkat</label>
            <div class="col-sm-10">
                <input type="text" name="tgl_berangkat" class="form-control" id="inputTgl3" placeholder="dd/mm/yyyy">
            </div>
        </div>
        <div class="form-group row  ">
            <label class="col-sm-2 col-form-label">Tujuan</label>
            <div class="col-sm-10">
                <select class="form-control" name="tujuan" id="tujuan">
                    <option>Pilih Tujuan</option>
                    <?php 
                    include 'koneksi.php';
                    $no = 1;
                    $data = mysqli_query($koneksi,"select * from jadwal_berangkat");
                    while($d = mysqli_fetch_array($data)){
                        ?>
                        <option value="<?php echo $d['id'] ?>"><?php echo $d["relasi"]?></option>
                        <?php 
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jumlah Penumpang</label>
            <div class="col-sm-10">
                <select class="form-control" id="penumpang" name="penumpang">
                    <option>Pilih Jumlah Penumpang</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Total Pembayaran</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" id="total" name="total" readonly>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Pesan Tiket</button>
            </div>
        </div>
        </form>
        </div>
        </section>

        <!-- Konfirmasi-Bayar-->
        <section class="page-section bg-light" id="konfirmasi-bayar">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Konfirmasi Pembayaran</h2>
                    <h3 class="section-subheading text-muted">Silahkan konfirmasi pembayaranmu di sini</h3>
                </div>
            <form method="post" action="simpan_tiket.php">
                <div class="form-group row">
                    <label for="inputNIK4" class="col-sm-2 col-form-label">NIK Pemesan</label>
                    <div class="custom-file">
                        <input type="nik4" class="form-control" id="inputNIK4" placeholder="Masukkan NIK Pemesan" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="bukti-bayar" class="col-sm-2 col-form-label">Bukti Pembayaran</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="custom-file">
                        <button type="submit" class="btn btn-primary">Pesan Tiket</button>
                    </div>
                </div>
            </form>
            </div><br><br><br><br><br>
        </section>

        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Tentang Kami</h2>
                    <h3 class="section-subheading text-muted">Berdiri pada tahun 2020, e-ticket CAPITALIST merupakan pionir online travel agent di Indonesia. Produk yang disediakan terkait dengan pemesanan travel. Misi kami adalah untuk mengakomodasi akses terbaik untuk pemesanan travel online melalui web.</h3>
                </div>
            </div>
        </section>

        <!-- Modal-->
        <div class="modal fade" id="masuk" tabindex="-1" role="dialog" aria-labelledby="masukLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="masukLabel">MASUK</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="username" class="col-form-label">Username</label>
                                <input type="text" class="form-control" id="username" required>
                            </div>
                            <div class="form-group">
                                <label for="pw" class="col-form-label">Password</label>
                                <input type="password" class="form-control" id="pw" required>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                        <button type="button" class="btn btn-primary">Masuk</button>
                    </div>
                </div>
            </div>
        </div>

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
        <script type="text/javascript">
            $( "#penumpang" ).change(function() {
              var id = $("#tujuan").val();
              var penumpang = $("#penumpang").val();
              console.log(penumpang);
              $.ajax({
                url: "./hitung_total.php?id=" + id + "&penumpang=" + penumpang,
                success: function(result){
                    console.log(result);
                  $("#total").val(result);
                }
              });
            });
        </script>
    </body>
</html>
