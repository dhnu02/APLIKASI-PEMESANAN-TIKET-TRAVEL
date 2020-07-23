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
    include "koneksi.php";
    $data = mysqli_query($connect, "SELECT * FROM user WHERE username='$_POST[username]'");
    $cek_user = mysqli_num_rows($data);
    if ($cek_user > 0) {
      echo "<script>
              Swal.fire({
                     icon: 'warning',
                     title: 'Oops...',
                     text: 'Maaf, username sudah terpakai.'
              }).then(function() {
                     window.location.href='daftar.php';
              });
              </script>";   
    }
    else {
        $password = $_POST['password'];
        mysqli_query($connect, "INSERT INTO user (nama, username, password)
        VALUES ('$_POST[nama]', '$_POST[username]', '$password')");
        
        echo "<script>
              Swal.fire({
                     icon: 'success',
                     title: 'Successful',
                     text: 'Selamat, registrasi berhasil.'
              }).then(function() {
                     window.location.href='masuk.php';
              });
              </script>";   
    }
?>
</body>
</html>
