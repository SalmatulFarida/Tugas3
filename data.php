<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title> Data Jadwal</title>
</head>
<body>
	<div class="container">
		<h1 style="text-align: center;">Data Jadwal</h1>
		<a href="form_data.php" button type="button" class="btn btn-dark"> + Tambah Data</a>
		<table class="table table-striped table-hover mt-3">
			<thead>
				<tr style="text-align : center;">
					<td>Kode Hari</td>
					<td>Jadwal</td>
					<td>Dosen Pengajar</td>
					<td>Jumlah SKS</td>
					<td>Action</td>
				</tr>
			</thead>
				<?php
				include 'koneksi.php';
				$sql = "SELECT * FROM tbl_016";
				$hasil = mysqli_query($koneksi, $sql);
				while ($row = mysqli_fetch_array($hasil)) {
				?>
				<tr style="text-align: center;">
					<td><?=$row['kode_hari'];?></td>
					<td><?=$row['jadwal'];?></td>
					<td><?=$row['dosen_pengajar'];?></td>
					<td><?=$row['jumlah_sks'];?></td>
					<td>
						<div class="row">
							<div class="col d-flex justify-content-center">
								 <a href="form_edit.php?id=<?=$row['kode_hari'] ?>" button type="button" class="btn btn-outline-primary"> Edit </a>
							</div>
							<div class="col d-flex justify-content-center">
								 <a href="delete.php?id=<?=$row['kode_hari'] ?>" button type="button" class="btn btn-outline-danger"> Delete </a>
							</div>
						</div>
					</td>
				</tr>
				<?php }
				?>

			</table>
		</div>
	</body>
</html>