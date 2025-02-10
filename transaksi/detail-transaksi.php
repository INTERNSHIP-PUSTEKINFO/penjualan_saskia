<?php
include('../koneksi.php');

// Ambil ID transaksi dari parameter URL
$id_transaksi = $_GET['id'];

// Ambil data transaksi berdasarkan ID dan JOIN dengan tabel customer dan product
$query = "
    SELECT transaksi.*, customer.nama_customer AS nama_customer, product.nama_produk 
    FROM transaksi
    JOIN customer ON transaksi.id_customer = customer.id
    JOIN product ON transaksi.id_product = product.id
    WHERE transaksi.id = '$id_transaksi'
";
$result = mysqli_query($connection, $query);
$transaksi = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Transaksi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="container" style="margin-top: 50px;">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">DETAIL TRANSAKSI</div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Customer</th>
                            <td><?php echo $transaksi['nama_customer']; ?></td> <!-- Menampilkan nama customer -->
                        </tr>
                        <tr>
                            <th>Product</th>
                            <td><?php echo $transaksi['nama_produk']; ?></td> <!-- Menampilkan nama produk -->
                        </tr>
                        <tr>
                            <th>Jumlah</th>
                            <td><?php echo $transaksi['jumlah']; ?></td>
                        </tr>
                        <tr>
                            <th>Tanggal Transaksi</th>
                            <td><?php echo $transaksi['tanggal_transaksi']; ?></td>
                        </tr>
                    </table>
                    <a href="show_data_tran.php" class="btn btn-primary">KEMBALI</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>