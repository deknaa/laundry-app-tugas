<?php 
// koneksi database
include '../koneksi.php';
// Membuat objek Database
$db = new \Connection\Database();
// Mendapatkan koneksi database
$koneksi = $db->getConnection();
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$username = $_POST['username'];
$password = $_POST['password'];
 
// update data ke database
mysqli_query($koneksi,"update customer set nama='$nama', alamat='$alamat', username='$username', password='$password' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:customer_view.php");
 
?>