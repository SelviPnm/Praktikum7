<!DOCTYPE html>
<html>
<head>
	<title>Data Penduduk</title>
</head>
<body>
	<h1>Data Penduduk</h1>
	<br/>
	<a href="index.php">Kembali</a>
	<br/>
	<h3>Tambah Data Penduduk</h3>
	<form method="post" action="create_aksi.php">
		<table>
			<tr>			
				<td>NIK</td>
				<td><input type="text" name="nik"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td><input type="date" name="tanggal" required></td>
            </tr>
            <tr>
				<td>Tempat Lahir</td>
				<td><input type="text" name="tempat"></td>
            </tr>
            <tr>
				<td>Upload Foto</td>
				<td><input type="file" name="foto" size="1500"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
        </table>
        
	</form>
</body>
</html>