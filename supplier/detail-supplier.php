<?php
include '../koneksi.php';

// Ambil ID supplier dari parameter URL
$id_supplier = $_GET['id'];

// Ambil data supplier berdasarkan ID
$query = "SELECT * FROM supplier WHERE id = '$id_supplier'";
$result = mysqli_query($connection, $query);

// Cek apakah query berhasil
if ($result) {
    $supplier = mysqli_fetch_assoc($result);
} else {
    die("Query failed: " . mysqli_error($connection));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Supplier</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="container" style="margin-top: 50px;">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">DETAIL SUPPLIER</div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Nama supplier</th>
                            <td><?php echo $supplier['nama_suplier']; ?></td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td><?php echo $supplier['alamat']; ?></td>
                        </tr>
                        <tr>
                            <th>Telepon</th>
                            <td><?php echo $supplier['telepon']; ?></td>
                        </tr>
                    </table>
                    <a href="show_data_sup.php" class="btn btn-primary">KEMBALI</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
