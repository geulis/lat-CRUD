<?php 
include_once('config.php');
include_once('function.php');

$sql = mysqli_query($koneksi, "SELECT * FROM siswa");

?>

	<a href="<?=base_url.'tambah.php'?>">Tambah Data</a>
	<table border="1px">
		<tr>
			<th>ID siswa</th>
			<th>Nama Siswa</th>
			<th>Jenis Kelamin</th>
			<th>Nama Ayah</th>
			<th>Nama Ibu</th>
			<th>Alamat</th>
		</tr>
	<?php while ($data = mysqli_fetch_array($sql)): ?>
		<tr>
			<td><?= $data['id']; ?></td>
			<td><?= $data['nama']; ?></td>
			<td><?= (($data['jk'] == 1) ? 'Laki-laki' : 'Perempuan'); ?></td>
			<td><?= $data['nama_ayah']; ?></td>
			<td><?= $data['nama_ibu']; ?></td>
			<td><?= $data['alamat']; ?></td>
		</tr>
	<?php endwhile; ?>
	</table>