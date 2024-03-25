<?php 
// koneksi database
include '../koneksi.php';
// Membuat objek Database
$db = new Database();
// Mendapatkan koneksi database
$koneksi = $db->getConnection();
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$username = $_POST['username'];
$password = $_POST['password'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into customer values('','$nama','$alamat','$username', '$password')");
 
// mengalihkan halaman kembali ke index.php
header("location:customer_view.php");
 
?>