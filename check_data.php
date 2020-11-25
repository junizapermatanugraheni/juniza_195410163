<?php

include "koneksi.php";
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$hp = $_POST['hp'];
$prodi = $_POST['prodi'];

$simpan= "INSERT INTO tb_data SET nim='$nim',nama='$nama',email='$email',hp='$hp',prodi='$prodi'";
mysqli_query($host,$simpan);

if($simpan){
	echo "<script>alert('Berhasil!');</script>";
	echo "DATA ANDA TERSIMPAN <a href=formdata.php>Klik disini untuk kembali</a>";
}else{
	echo "<script>alert('Gagal!');</script>";
	echo "DATA ANDA TIDAK TERSIMPAN";
}
?>