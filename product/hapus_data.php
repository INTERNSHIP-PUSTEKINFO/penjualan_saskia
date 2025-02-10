<?php

include('../koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM product WHERE id = '$id'";

if($connection->query($query)) {
    header("location: ../product/show_data.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>