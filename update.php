<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>Update</title>
</head>
<body>
	<div class="container" align="center">
	<?php
	include "koneksi.php";

	$id = $_POST['kode_hari'];
	$jdl = $_POST['jadwal'];
	$dosen = $_POST['dosen_pengajar'];
	$sks = $_POST['jumlah_sks'];

	$sql = "UPDATE tbl_016 SET jadwal = '$jdl', dosen_pengajar = '$dosen', jumlah_sks = '$sks' WHERE kode_hari ='$id'";
	$hasil = mysqli_query($koneksi, $sql);
	if (!$hasil){ ?>
		<h2>Eksekusi tidak berhasil</h2>
		<?php }
		else { ?>
			<h2 class="mt-3"> Data Berhasil DiUpdate<br></h2>
			<a href="data.php" button type="button" class="btn btn-succes mt-3">Lihat Daftar Jadwal</a>
			<?php }
			?>
	</div>
</body>
</html>
