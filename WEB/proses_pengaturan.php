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
$ss = mysqli_query($connect, 'select * from user where  username="'.$_SESSION['user'].'" ');
$ds = mysqli_fetch_array($ss);

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$jk = $_POST['jk'];
$username = $ds['username'];
$password = $_POST['password'];

$sql = mysqli_query($connect, 'update customer set nik="'.$nik.'", nama="'.$nama.'", alamat="'.$alamat.'", telepon="'.$telepon.'", jk="'.$jk.'", password="'.$password.'" where username="'.$username.'"');
$sqll = mysqli_query($connect, 'update user set nama="'.$nama.'", password="'.$password.'" where username="'.$username.'"');

if($sql || $sqll) {
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
