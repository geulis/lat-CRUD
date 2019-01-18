<?php 
	include_once('config.php');
	include_once('function.php');

	$nama_siswa = $_POST['nama_siswa'];
	$jk = $_POST['jk'];
	$nama_ayah = $_POST['nama_ayah'];
	$nama_ibu = $_POST['nama_ibu'];
	$alamat = $_POST['alamat'];

	// echo $nama_siswa."<br>".$jk."<br>".$nama_ayah."<br>".$nama_ibu."<br>".$alamat;

	$query_tambah = mysqli_query($koneksi, "INSERT INTO siswa(nama,jk, nama_ayah, nama_ibu, alamat) VALUES ('".$nama_siswa."', '".$jk."', '".$nama_ayah."', '".$nama_ibu."', '".$alamat."')");
	// print_r('sukses');

	header("location: ".base_url);

 ?>