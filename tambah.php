<!DOCTYPE html>
<html>
<head>
	<title>Tambah tambah</title>
</head>
<body>
	<form action="action_tambah.php" method="POST">
		<label>Nama Siswa</label><br>
		<input type="text" name="nama_siswa"><br>

		<label>Jenis Kelamin</label><br>
		<select name="jk">
			<option value="1">Laki-laki</option>
			<option value="2">Perempuan</option>
		</select>
		<br>

		<label>Nama Ayah</label><br>
		<input type="text" name="nama_ayah"><br>

		<label>Nama Ibu</label><br>
		<input type="text" name="nama_ibu"><br>

		<label>Alamat</label><br>
		<input type="text" name="alamat"><br><br>

		<input type="submit" value="tambah">
	</form>

</body>
</html>