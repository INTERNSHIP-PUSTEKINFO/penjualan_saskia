<?php

//include koneksi database
include('../koneksi.php');

//get data dari form
$nama_suplier           = $_POST['nama_suplier'];
$alamat       = $_POST['alamat'];
$telepon = $_POST['telepon'];


//query insert data ke dalam database
$query = "INSERT INTO supplier (nama_suplier, alamat, telepon) VALUES ('$nama_suplier', '$alamat', '$telepon')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: show_data_sup.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>