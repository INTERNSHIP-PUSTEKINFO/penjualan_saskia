<?php

//include koneksi database
include('../koneksi.php');

//get data dari form
$id     = $_POST['id'];
$kategori         = $_POST['kategori'];
$nama_produk = $_POST['nama_produk'];
$deskripsi       = $_POST['deskripsi'];
$stok       = $_POST['stok'];
$harga       = $_POST['harga'];
$berat      = $_POST['berat'];
$supplier       = $_POST['supplier'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE product SET kategori = '$kategori', nama_produk = '$nama_produk', deskripsi = '$deskripsi', stok = '$stok', harga = '$harga', berat = '$berat', id_supplier = '$supplier'  WHERE id = '$id'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: ../product/show_data.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupdated!";
}

?>