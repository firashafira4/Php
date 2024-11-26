<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id_baju        = $_POST['id_baju'];
$nama_baju      = $_POST['nama_baju'];
$model          = $_POST['model'];
$warna          = $_POST['warna'];
$harga          = $_POST['harga'];
$stok           = $_POST['stok'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE fashion SET nama_baju = '$nama_baju', model = '$model', warna = '$warna', harga = '$harga', stok = '$stok' WHERE id_baju = '$id_baju'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($koneksi->query($query)) {
    //redirect ke halaman tampil.php 
    header("location: tampilan.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>