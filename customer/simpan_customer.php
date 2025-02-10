<?php

//include koneksi database
include('../koneksi.php');

//get data dari form
$nama_customer = $_POST['nama_customer'];
$alamat       = $_POST['alamat'];
$telepon       = $_POST['telepon'];
$jenis_kelamin       = $_POST['jenis_kelamin'];

//query insert data ke dalam database
$query = "INSERT INTO customer (nama_customer, alamat, telepon, jenis_kelamin) VALUES ( '$nama_customer', '$alamat', '$telepon', '$jenis_kelamin')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: show_data_cust.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>