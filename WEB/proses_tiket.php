<!DOCTYPE html>
<html>
<head>
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <script src="assets/sweet-alert2/sweetalert2.all.min.js"></script>
       <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
       <script src="assets/sweet-alert2/sweetalert2.min.js"></script>
       <link rel="stylesheet" href="assets/sweet-alert2/sweetalert2.min.css">
</head>
<body>
<?php
include 'koneksi.php';

$status = $_POST['status'];
$id_user = $_POST['id_user'];
$id_jadwal = $_POST['id_jadwal'];
$kode_booking = $_POST['kode_booking'];
$armada = $_POST['armada'];
$rute = $_POST['rute'];
$jam_berangkat = $_POST['jam_berangkat'];
$jam_datang = $_POST['jam_datang'];
$tgl_berangkat = $_POST['tgl_berangkat'];
$tarif = $_POST['tarif'];

$sql = mysqli_query($connect, 'INSERT INTO pesanan_customer (status, id_user, id_jadwal, kode_booking, armada, rute, jam_berangkat, jam_datang, tgl_berangkat, tarif) VALUES ("'.$status.'", "'.$id_user.'", "'.$id_jadwal.'", "'.$kode_booking.'", "'.$armada.'", "'.$rute.'", "'.$jam_berangkat.'", "'.$jam_datang.'", "'.$tgl_berangkat.'", "'.$tarif.'") ');
if($sql) {
    echo "<script>
              Swal.fire({
                     icon: 'info',
                     title: 'Attention',
                     text: 'Terima kasih, pesanan sedang dalam proses oleh admin.'
              }).then(function() {
                     window.location.href='riwayat_pesan.php';
              });
              </script>";  
} else {
    echo "<script>
              Swal.fire({
                     icon: 'error',
                     title: 'Oops...',
                     text: 'Maaf, pemesanan gagal.'
              }).then(function() {
                     window.location.href='halaman_user.php';
              });
              </script>";  
}
?>
</body>
</html>
