<?php 

include 'database.php';
$nik = $_GET['nik'];
 
mysqli_query($connect,"delete from data where nik='$nik'");
 
header("location:index.php");
 
?>