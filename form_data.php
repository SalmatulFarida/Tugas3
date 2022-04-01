<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>Form Tambah Data</title>
</head>
<body>
	<div class="w-50 mx-auto mt-5">
	<h1> Form Tambah Data</h1>
		<form  action="action.php" method="post" class="border p-3 m-3">
			<label>Jadwal :</label>
			<input type="text" name="jadwal" class="form-control"> <br>
			<label>Dosen Pengajar :</label>
			<input type="text" name="dosen_pengajar" class="form-control"> <br>
			<label>Jumlah SKS :</label>
			<input type="text" name="jumlah_sks" class="form-control"> <br>
			<input type="submit" class="btn btn-success" value="Tambah Data">
		</form>
	</div>
</body>
</html>