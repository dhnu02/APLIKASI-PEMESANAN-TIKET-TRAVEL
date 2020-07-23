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

$user = $_POST['username'];
$pass = $_POST['password'];

$u = mysqli_real_escape_string($connect,$user);
$p = mysqli_real_escape_string($connect,$pass);

$sql = mysqli_query($connect,'select * from user where username="'.$u.'" and password="'.$p.'" ');
$al = mysqli_num_rows($sql);

if($al > 0) {
    session_start();
    $_SESSION['user']=$user;
    $dt = mysqli_fetch_assoc($sql);
    if ($dt['username'] == "admin") {
      echo "<script>
              Swal.fire({
                     icon: 'success',
                     title: 'Successful',
                     text: 'Selamat, login berhasil.'
              }).then(function() {
                     window.location.href='halaman_admin.php';
              });
              </script>";  

    } else {
         echo "<script>
              Swal.fire({
                     icon: 'success',
                     title: 'Successful',
                     text: 'Selamat, login berhasil.'
              }).then(function() {
                     window.location.href='halaman_user.php';
              });
              </script>";
    }
} else {
    echo "<script>
              Swal.fire({
                     icon: 'error',
                     title: 'Oops...',
                     text: 'Maaf, username atau password yang anda masukkan salah.'
              }).then(function() {
                     window.location.href='masuk.php';
              });
              </script>";  
}
?>
</body>
</html>
