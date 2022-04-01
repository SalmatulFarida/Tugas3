
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>Form Edit</title>
</head>
<body>
	<div class="w-50 mx-auto mt-5">
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$sql = "SELECT * FROM tbl_016 WHERE kode_hari='$id'";
	$hasil = mysqli_query($koneksi, $sql);
	?>

	<h1>Form Edit Data</h1>
	<?php
	while ($row = mysqli_fetch_array($hasil)) 
	{
		
	?>

		<form method="post" action="update.php" class=" border p-3 mt-3">
			<input type="hidden" name="kode_hari" value="<?php echo $row ['kode_hari'] ?>">
			<label>Jadwal</label>
			<input type="text" name="jadwal" value="<?php echo $row ['jadwal'] ?>" class="form-control"> <br>
			<label>Dosen Pengajar</label>
			<input type="text" name="dosen_pengajar" value="<?php echo $row ['dosen_pengajar'] ?>" class="form-control"> <br>
			<label>Jumlah SKS</label>
			<input type="text" name="jumlah_sks" value="<?php echo $row ['jumlah_sks'] ?>" class="form-control"> <br>
			<input type="submit" class="btn btn-succes value="Update">


		</form>
	<?php 
	} 

	?>
</body>
</html>