<?php 
// koneksi database
include '../koneksi.php';
// Membuat objek Database
$db = new Database();
// Mendapatkan koneksi database
$koneksi = $db->getConnection();
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
// menghapus data dari database
mysqli_query($koneksi,"delete from customer where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:customer_view.php");
 
?>