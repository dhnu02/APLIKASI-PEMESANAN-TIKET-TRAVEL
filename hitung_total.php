<?php
	include "koneksi.php";

	$id = $_GET["id"];
	$penumpang = $_GET["penumpang"];

	$query = "SELECT * FROM jadwal_berangkat WHERE id = '$id'";
	$sql = mysqli_query($koneksi,$query)or die(mysqli_error());
	$row = mysqli_fetch_array($sql);

	$total = $row["tarif"] * $penumpang;

	echo $total;
	
?>
