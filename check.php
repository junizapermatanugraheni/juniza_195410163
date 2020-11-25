<?php
session_start();

include "koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];
$sql_cek=mysqli_query($host, "SELECT * FROM tb_login where username='$username' and password='$password'");
$cek_admin=mysqli_num_rows($sql_cek);
if($cek_admin > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:admin.php");
}else{
	header("location:login.php?pesan=gagal");
}
?>