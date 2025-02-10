<?php

//include koneksi database
include('../koneksi.php');

//get data dari form
$id                     = $_POST['id'];
$nama_suplier           = $_POST['nama_suplier'];
$alamat                 = $_POST['alamat'];
$telepon                = $_POST['telepon'];


//query update data ke dalam database berdasarkan ID
$query = "UPDATE supplier SET nama_suplier = '$nama_suplier', alamat = '$alamat', telepon = '$telepon' WHERE id = '$id'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: show_data_sup.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>