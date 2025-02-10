<?php

// Include koneksi database
include('../koneksi.php');

//get data dari form
$kategori           = $_POST['kategori'];
$nama_produk = $_POST['nama_produk'];
$deskripsi       = $_POST['deskripsi'];
$stok       = $_POST['stok'];
$harga       = $_POST['harga'];
$berat       = preg_replace('/[^0-9]/', '', $_POST['berat']);
$supplier       = $_POST['supplier'];


// Query insert data ke dalam database
$input_data = "INSERT INTO product (kategori, nama_produk, deskripsi, stok, harga, berat, id_supplier) 
               VALUES ('$kategori', '$nama_produk', '$deskripsi', $stok, $harga, $berat, '$supplier')";

// Eksekusi query
if ($connection->query($input_data)) {
    header("location: ../product/show_data.php");
    exit; // Pastikan tidak ada kode lain dieksekusi setelah redirect
} else {
    echo "Data Gagal Disimpan: " . $connection->error;
}

?>
