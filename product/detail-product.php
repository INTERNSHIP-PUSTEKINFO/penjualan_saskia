<?php
include '../koneksi.php';

// Ambil ID produk dari parameter URL
$id_product = $_GET['id'];

// Ambil data produk berdasarkan ID
$query = "SELECT * FROM product WHERE id = '$id_product'";
$result = mysqli_query($connection, $query);
$product = mysqli_fetch_assoc($result);

// Ambil nama supplier
$supplier_query = "SELECT nama_suplier FROM supplier WHERE id = '{$product['id_supplier']}'";
$supplier_result = mysqli_query($connection, $supplier_query);
$supplier = mysqli_fetch_assoc($supplier_result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Produk</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="container" style="margin-top: 50px;">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">DETAIL PRODUK</div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Nama Produk</th>
                            <td><?php echo $product['nama_produk']; ?></td>
                        </tr>
                        <tr>
                            <th>Kategori</th>
                            <td><?php echo $product['kategori']; ?></td>
                        </tr>
                        <tr>
                            <th>Deskripsi</th>
                            <td><?php echo $product['deskripsi']; ?></td>
                        </tr>
                        <tr>
                            <th>Stock</th>
                            <td><?php echo $product['stok']; ?></td>
                        </tr>
                        <tr>
                            <th>Harga</th>
                            <td><?php echo $product['harga']; ?></td>
                        </tr>
                        <tr>
                            <th>Berat</th>
                            <td><?php echo $product['berat']; ?></td>
                        </tr>
                        <tr>
                            <th>Supplier</th>
                            <td><?php echo $supplier['nama_suplier']; ?></td>
                        </tr>
                    </table>
                    <a href="show_data.php" class="btn btn-primary">KEMBALI</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>