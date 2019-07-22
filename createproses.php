<?php 
// koneksi database
include 'connect.php';
 
// menangkap data yang di kirim dari form
$id= $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$pekerjaan = $_POST['pekerjaan'];
 
// menginput data ke database,
mysqli_query($koneksi,"insert into user values('$id','$nama','$alamat','$pekerjaan')");
 
// mengalihkan halaman kembali ke index.php
header("location:create.php");
 
?>