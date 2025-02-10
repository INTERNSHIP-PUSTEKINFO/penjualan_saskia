<?php
include('../koneksi.php');

// Ambil data customer dan produk untuk dropdown
$query_customer = "SELECT * FROM customer";
$result_customer = mysqli_query($connection, $query_customer);

$query_product = "SELECT * FROM product";
$result_product = mysqli_query($connection, $query_product);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
    <title>Tambah Transaksi</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              TAMBAH TRANSAKSI
            </div>
            <div class="card-body">
              <form action="simpan_transaksi.php" method="POST">

                <div class="form-group">
                  <label>Nama Customer</label>
                  <select class="form-control" name="id_customer">
                    <option value="">Pilih Customer</option>
                    <?php while ($customer = mysqli_fetch_assoc($result_customer)) { ?>
                      <option value="<?php echo $customer['id']; ?>"><?php echo $customer['nama_customer']; ?></option>
                    <?php } ?>
                  </select>
                </div>

                <div class="form-group">
                  <label>Nama Product</label>
                  <select class="form-control" name="id_product">
                    <option value="">Pilih Product</option>
                    <?php while ($product = mysqli_fetch_assoc($result_product)) { ?>
                      <option value="<?php echo $product['id']; ?>"><?php echo $product['nama_produk']; ?></option>
                    <?php } ?>
                  </select>
                </div>

                <div class="form-group">
                  <label>Jumlah</label>
                  <input type="number" id="jumlah" name="jumlah" min="1" step="1" class="form-control">
                </div>

                <div class="form-group">
                   <label for="tanggal_transaksi">Tanggal Transaksi</label>
                   <input type="date" class="form-control" id="tanggal_transaksi" name="tanggal_transaksi" placeholder="Masukkan Tanggal Transaksi">
                </div>

                <button type="submit" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-warning">RESET</button>
                <a href="show_data_tran.php" class="btn btn-secondary">BACK</a>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>