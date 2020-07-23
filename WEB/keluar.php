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
	session_start();
	session_destroy();

	echo "<script>
              Swal.fire({
                     icon: 'success',
                     title: 'Successful',
                     text: 'Terimakasih atas kerjasamanya.'
              }).then(function() {
                     window.location.href='index.php';
              });
              </script>";   
 ?>
</body>
</html>
