<?php 
// koneksi database
include 'koneksi1.php';
 
// menangkap data yang di kirim dari form
$no= $_POST['no'];
$nama_merk = $_POST['nama_merk'];
$warna = $_POST['warna'];
$jumlah = $_POST['jumlah'];
 
// menginput data ke database,
mysqli_query($koneksi,"insert into printer values('$no','$nama_merk','$warna','$jumlah')");
 
header("location:data.php");
 
?>