<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id_baju        = $_POST['id_baju'];
$nama_baju      = $_POST['nama_baju'];
$model          = $_POST['model'];
$warna          = $_POST['warna'];
$harga          = $_POST['harga'];
$stok           = $_POST['stok'];
// menginput data ke database
mysqli_query($koneksi,"insert into fashion (nama_baju, model, warna, harga, stok) values ('$nama_baju', '$model', '$warna', '$harga', '$stok')");
 
// mengalihkan halaman kembali ke index.php
header("location:tampilan.php");
 
?>