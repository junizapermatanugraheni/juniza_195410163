<?php
//koneksi ke database
$host = mysqli_connect("localhost","root","","juniza");

if (mysqli_connect_error()) {
	echo "Koneksi database gagal: " . mysqli_connect_error();
}
?>
