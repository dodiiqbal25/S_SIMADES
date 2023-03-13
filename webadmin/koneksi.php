<?php


$host = "localhost";
$user = "root";
$password = "";
$db_name = "portal_sinpada";


$mysqli = new mysqli($host, $user, $password, $db_name);

//Cek koneksi basis data
if(mysqli_connect_errno()) {
	echo "Error: Tidak terhubung ke database";
	exit;
	}
?>