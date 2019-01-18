<?php 
// include 'config.php';
// $sql = mysqli_query($koneksi,"SELECT * FROM siswa");

// while ($data = mysqli_fetch_array($sql)) 
// {
// 	echo $data['nama'];
// }

// $array = array('geulis','feri','aya','aji');
$array2['Alpukat'] = 'feri';
$array2['Belimbing'] = 'geulis';
$array2['Codot'] = 'aya';
$array2['Delima'] = 'aji';

$keluarga[] = array(
			'ayah' => 'lilik',
			'ibu' => 'asih',
			'anak' => array(
					'anak_pertama' => 'aji',
					'anak_kedua' => 'elis',
					'anak_ketiga' => 'aya'
			)
);
$keluarga[] = array(
			'ayah' => 'bagio',
			'ibu' => 'nurul',
			'anak' => array(
					'anak_pertama' => 'edi',
					'anak_kedua' => 'ani',
					'anak_ketiga' => 'dul'
			)
);

print_r($keluarga[1]['anak']['anak_pertama']);
// print_r($array3);
// echo $array3['anak']['anak_kedua'];

// print_r($array2);

// echo $array2[0];

// foreach ($array2 as $key => $a) {
// 	echo $a."<br>";
// }
 ?>