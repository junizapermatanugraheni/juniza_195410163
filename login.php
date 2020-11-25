<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 <?php
 if(isset($_GET['pesan'])){
 	if($_GET['pesan']=="gagal"){
 		echo "<script>alert('Login gagal! username dan password salah!');</script>";
 	}else if($_GET['pesan'] =="belum_login"){
 		echo "<script>alert('Anda harus login untuk mengakses halaman');</script>";
 	}
 }
 ?>
 
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
 
		<form method="POST" action="check.php">
			<p>
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username ..">
			</p>

 			<p>
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password ..">
 			</p>
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
		</form>
	</div>
</body>
</html>
