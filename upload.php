<?php 

include 'database.php';
 
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$tgl_lahir = $_POST['tanggal'];
$tgl_lahir = date('Y-m-d', strtotime($tgl_lahir));
$tmpat_lahir = $_POST['tempat'];
$upload_foto = $_POST['foto'];

mysqli_query($connect,"insert into data values('','$nik','$nama','$tgl_lahir','$tmpat_lahir,'$foto')");

header("location:index.php");
 
?>