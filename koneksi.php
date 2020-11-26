<?php
//koneksi ke database
try{
	$myPDO = new PDO("pgsql:host=localhost,dbname=juniza","postgres","1234");
	echo "Connected to PostgreSQL with PDO";
}catch(PDOException $e){
	echo "Koneksi database gagal: " . $e->getMessage();
	die;
}
?>
