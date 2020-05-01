<?php
  include "koneksi.php";
  $nik  = $_REQUEST['nik'];
  $nama  = $_REQUEST['nama'];
  $alamat  = $_REQUEST['alamat'];
  $tgl_berangkat  = $_REQUEST['tgl_berangkat'];
  $tujuan  = $_REQUEST['tujuan'];
  $penumpang  = $_REQUEST['penumpang'];
  $total  = $_REQUEST['total'];
  $mysqli  = "INSERT INTO pesanan_tiket (nik, nama, alamat, tgl_berangkat, tujuan, jumlah_penumpang, total_bayar) VALUES ('$nik', '$nama', '$alamat',  '$tgl_berangkat',  '$tujuan',  '$penumpang',  '$total')";
  $result  = mysqli_query($koneksi, $mysqli);
  if ($result) {
    echo "<script>alert('Selamat, tiket berhasil dipesan!');window.location='index.php'</script>";
  } else {
    echo "<script>alert('Mohon maaf, tiket gagal dipesan.');window.location='index.php'</script>";
  }
  mysqli_close($koneksi);
?>
