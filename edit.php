<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 
	<h1>Data Penduduk</h1>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>Edit Data Penduduk</h3>
 
	<?php
	include 'database.php';
	$id = $_GET['id'];
	$data = mysqli_query($connect,"select * from data where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>Nik</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="nik" value="<?php echo $d['nik']; ?>">
					</td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="nama" value="<?php echo $d['nim']; ?>"></td>
				</tr>
				<tr>
					<td>Tanggal Lahir</td>
					<td><input type="date" name="tanggal" value="<?php echo $d['tgl_lahir']; ?>"></td>
				</tr>
                <td>Tempat Lahir</td>
					<td><input type="text" name="tempat" value="<?php echo $d['tmpat_lahir']; ?>"></td>
				</tr>
				<tr>
					<td>Upload Foto</td>
					<td><input type="file" name="foto" value="<?php echo $d['foto']; ?>"></td>
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