<?php 

  
  include('../koneksi.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM product WHERE id = $id LIMIT 1";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Product</title>
  </head>

  <body>
  
    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT Produk
            </div>
            <div class="card-body">
              <form action="../product/update_data.php" method="POST">
              <div class="form-group">
                  <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                </div>

                <div class="form-group">
                    <label>Kategori</label>
                    <select name="kategori" class="form-control">
                        <option value="Makanan"<?php if($row['kategori'] == "Makanan") echo "selected"; ?>>Makanan</option>
                        <option value="Minuman"<?php if($row['kategori'] == "Minuman") echo "selected"; ?>>Minuman</option>
                        <option value="Pakaian"<?php if($row['kategori'] == "Pakaian") echo "selected"; ?>>Pakaian</option>
                        <option value="ATK"<?php if($row['kategori'] == "ATK") echo "selected"; ?>>ATK</option>
                    </select>
                </div>

                <div class="form-group">
                  <label>Nama Produk</label>
                  <textarea class="form-control" name="nama_produk" placeholder="Masukkan Nama Produk" rows="4"><?php echo $row['nama_produk'] ?></textarea>
                </div>

                <div class="form-group">
                  <label>Deskripsi</label>
                  <textarea class="form-control" name="deskripsi" placeholder="Masukkan Deskripsi" rows="4"><?php echo $row['deskripsi'] ?></textarea>
                </div>

                <div class="form-group">
                  <label>Stok</label>
                  <input type="number" class="form-control" name="stok" placeholder="Masukkan jumlah stok" value="<?php echo $row['stok']; ?>">
                </div>


                <div class="form-group">
                  <label>Harga</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Rp</span>
                    </div>
                    <input type="text" name="harga" class="form-control" placeholder="Harga Produk" id="harga" value="<?php echo $row['harga']; ?>">
                  </div>
                </div>

                <div class="form-group">
                    <label>Berat</label>
                    <select name="berat" class="form-control">
                        <option value="200"<?php if($row['berat'] == "200") echo "selected"; ?>>200 gram</option>
                        <option value="500"<?php if($row['berat'] == "500") echo "selected"; ?>>500 gram</option>
                        <option value="700"<?php if($row['berat'] == "700") echo "selected"; ?>>700 gram</option>
                        <option value="1"<?php if($row['berat'] == "1") echo "selected"; ?>>1 kg</option>
                    </select>
                </div>

                <div class="form-group">
                  <label>Supplier</label>
                  <select name="supplier" class="form-control">
                    <option value="" disabled selected>Pilih Supplier</option>
                    <?php
                      include '../koneksi.php';
                      
                      // Ambil id_supplier terakhir yang disimpan
                      $id_supplier_terakhir =  $row['id_supplier'];
                      
                      $result = mysqli_query($connection, "SELECT * FROM supplier");
                      while ($row = mysqli_fetch_assoc($result)) {
                        // Periksa apakah id_supplier ini sama dengan yang terakhir disimpan
                        $selected = ($row['id'] == $id_supplier_terakhir) ? 'selected' : '';
                        echo "<option value='{$row['id']}' {$selected}>{$row['nama_suplier']}</option>";
                      }
                    ?>
                  </select>
                </div>

                <button type="submit" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-warning">RESET</button>
                <a href="show_data.php" class="btn btn-secondary">Back</a>

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

