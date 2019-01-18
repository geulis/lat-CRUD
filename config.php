<?php 
$host		= "localhost";
$username	= "root";
$password	= "";
$database	= "banksiswa";

$koneksi = new mysqli($host, $username, $password, $database) or die(mysqli_error());
?>