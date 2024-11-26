<!DOCTYPE html>
<html>
<head>
	<title>Ubah</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<section class="vh-100" style="background-color: #9A616D;">
<div class="container mt-4">
<div class="container d-flex justify-content-center align-items-center" style="height: 100%;">
<div class="text-center">
 
	<h2>Ubah Data</h2>
	<br/>
	<a href="tampilan.php">KEMBALI</a>
	
	<h3>Data Baju</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from fashion where id_baju='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<div class="mb-3">
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>Id Baju</td>
					<td>
						<input type="hidden" name="id_baju" class="form-control oval-input" value="<?php echo $d['id_baju']; ?>">
						<input type="text" name="id_baju" value="<?php echo $d['id_baju']; ?>">
                    </td>
				</tr>
				<tr>
					<td>Nama Baju</td>
					<td><input type="text" name="nama_baju" value="<?php echo $d['nama_baju']; ?>"></td>
				</tr>
				<tr>
					<td>Model</td>
					<td><input type="text" name="model" value="<?php echo $d['model']; ?>"></td>
				</tr>
				<tr>
					<td>Warna</td>
					<td><input type="text" name="warna" value="<?php echo $d['warna']; ?>"></td>
				</tr>
				<tr>
					<td>Harga</td>
					<td><input type="text" name="harga" value="<?php echo $d['harga']; ?>"></td>
				</tr>
				<tr>
					<td>Stok</td>
					<td><input type="text" name="stok" value="<?php echo $d['stok']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>