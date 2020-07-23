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

session_start();

$id = $_GET['id'];
$status = 'Selesai';

$sql = mysqli_query($connect, 'update pesanan_customer set status="'.$status.'"');

if($sql) {
  echo "<script>
              Swal.fire({
                     icon: 'success',
                     title: 'Successful',
                     text: 'Transaksi sukses.'
              }).then(function() {
                     window.location.href='data_pesanan.php';
              });
              </script>";
} else {
    echo "<script>
              Swal.fire({
                     icon: 'error',
                     title: 'Oops...',
                     text: 'Maaf, transaksi gagal.'
              }).then(function() {
                     window.location.href='data_pesanan.php';
              });
              </script>";  
}
?>
</body>
</html>
