<?php

include('../koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM supplier WHERE id = '$id'";

if($connection->query($query)) {
    header("location: show_data_sup.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>