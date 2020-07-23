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

$id = $_GET['id'];
$nama_armada = $_POST['nama_armada'];
$kota_asal = $_POST['kota_asal'];
$kota_tujuan = $_POST['kota_tujuan'];
$jam_berangkat = $_POST['jam_berangkat'];
$jam_datang = $_POST['jam_datang'];
$tarif = $_POST['tarif'];

$sql = mysqli_query($connect, 'update jadwal_berangkat set nama_armada="'.$nama_armada.'", kota_asal="'.$kota_asal.'", kota_tujuan="'.$kota_tujuan.'", jam_berangkat="'.$jam_berangkat.'", jam_datang="'.$jam_datang.'", tarif="'.$tarif.'" where id="'.$id.'" ');

if($sql) {
  echo "<script>
              Swal.fire({
                     icon: 'success',
                     title: 'Successful',
                     text: 'Data berhasil diupdate.'
              }).then(function() {
                     window.location.href='data_jadwal.php';
              });
              </script>";
} else {
    echo "<script>
              Swal.fire({
                     icon: 'error',
                     title: 'Oops...',
                     text: 'Maaf, data gagal diupdate.'
              }).then(function() {
                     window.location.href='data_jadwal.php';
              });
              </script>";  
}
?>
</body>
</html>
