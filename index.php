<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 
	<h2>Daftar Penduduk</h2>
	<br/>
	<a href="create.php">+ TAMBAH MAHASISWA</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>NIK</th>
			<th>Nama</th>
			<th>Tanggal Lahir</th>
            <th>Tempat Lahir</th>
            <th>Foto</th>
			<th>OPSI</th>
		</tr>
		<?php 
		include 'database.php';
		$data = mysqli_query($connect,"select * from data");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $d['nik']; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['tgl_lahir']; ?></td>
                <td><?php echo $d['tmpat_lahir']; ?></td>
                <td><?php echo $d['foto']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">Edit</a>
					<a href="hapuss.php?id=<?php echo $d['id']; ?>">Hapus</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>