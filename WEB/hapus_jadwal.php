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

$sql = mysqli_query($connect, 'delete from jadwal_berangkat where id="'.$id.'" ');

if($sql) {
  echo "<script>
              Swal.fire({
                     icon: 'success',
                     title: 'Successful',
                     text: 'Data berhasil dihapus.'
              }).then(function() {
                     window.location.href='data_jadwal.php';
              });
              </script>";
} else {
    echo "<script>
              Swal.fire({
                     icon: 'error',
                     title: 'Oops...',
                     text: 'Maaf, data gagal dihapus.'
              }).then(function() {
                     window.location.href='data_jadwal.php';
              });
              </script>";  
}
?>
</body>
</html>
