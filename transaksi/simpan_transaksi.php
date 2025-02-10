<?php
include('../koneksi.php');

// Ambil data dari form
$id_customer = $_POST['id_customer'];
$id_product = $_POST['id_product'];
$jumlah = $_POST['jumlah'];
$tanggal_transaksi = $_POST['tanggal_transaksi'];

// Query untuk menyimpan data transaksi
$query = "INSERT INTO transaksi (id_customer, id_product, jumlah, tanggal_transaksi) 
          VALUES ('$id_customer', '$id_product', '$jumlah', '$tanggal_transaksi')";

if (mysqli_query($connection, $query)) {
    echo "Transaksi berhasil disimpan.";
    header("Location: show_data_tran.php"); 
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($connection);
}
?>