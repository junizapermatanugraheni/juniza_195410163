<!DOCTYPE html>
<html>
<head>
	<title>PENGISIAN DATA</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
 	<ul>
  		<li><a class="active" href="admin.php">Home</a></li>
  		<li><a href="formdata.php">Tambah Data</a></li>
  		<li><a href="login.php">Log Out</a></li>
	</ul>
	<div style="margin-left:25%;padding:1px 16px;height:1000px;">
  		<h1>FORM PENGISIAN DATA</h1>
	<div class="form">
        <form method="post" action="check_data.php">
	        <table style="margin-left: 25%;">
	        	<tr>
		            <td><label>Nim</label></td>
		            <td>:</td>
		            <td><input type="text" name="nim" /></td>
	        	</tr>
	       		<tr>
		            <td><label>Nama</label></td>
		            <td>:</td>
		            <td><input type="text" name="nama" /></td>
	        	</tr>
	        	<tr>
	        		<td><label>Email</label></td>
		            <td>:</td>
		            <td><input type="email" name="email" /></td>
	        	</tr>
	        	<tr>
	        		<td><label>No Hp</label></td>
		            <td>:</td>
		            <td><input type="text" name="hp"/></td>
	        	</tr>
	        	<tr>
	        		<td><label>Prodi</label></td>
		            <td>:</td>
		            <td>
		            	<select name="prodi">
		            		<option value="TI">Teknik Informatika</option>
		            		<option value="SI">Sistem Informasi</option>
		            		<option value="MI">Manajemen Informatika</option>
		            		<option value="TK">Teknik Komputer</option>
		            		<option value="KA">Komputerisasi Akuntansi</option>
		            	</select>
		        	</td>
	        	</tr>
	        	<tr>
	        		<td><input type="submit" value="Simpan"></td>
	        	</tr>
	        </table>
    	</form>
    </div>
    </div>
</body>
</html>