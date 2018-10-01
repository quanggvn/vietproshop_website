<?php
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "vietproshop";
	// ket noi toi csdl
$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
	// Kiem tra ket noi
if ($conn) {
	$setLang = mysqli_query($conn, "SET NAME 'utf8' ");
}else{
	die("Kết nối thất bại!".mysqli_connect_error());
}
?>