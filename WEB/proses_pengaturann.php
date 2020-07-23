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

$username = $_POST['username'];
$password = $_POST['password'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$jk = $_POST['jk'];

$sql = mysqli_query($connect, 'insert into customer (username, password, nik, nama, alamat, telepon, jk) values("'.$username.'", "'.$password.'", "'.$nik.'", "'.$nama.'", "'.$alamat.'", "'.$telepon.'", "'.$jk.'") ');

if($sql) {
  echo "<script>
              Swal.fire({
                     icon: 'success',
                     title: 'Successful',
                     text: 'Data berhasil diperbarui.'
              }).then(function() {
                     window.location.href='halaman_user.php';
              });
              </script>";
} else {
    echo "<script>
              Swal.fire({
                     icon: 'error',
                     title: 'Oops...',
                     text: 'Maaf, data gagal diperbarui.'
              }).then(function() {
                     window.location.href='halaman_user.php';
              });
              </script>";  
}
?>

</body>
</html>
