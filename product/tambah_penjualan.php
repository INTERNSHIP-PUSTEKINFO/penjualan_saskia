<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah Product</title>
  </head>

  <body>
  
    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              TAMBAH PRODUCT
            </div>
            <div class="card-body">
              <form action="../product/tambah-product.php" method="POST"> 

                <div class="form-group">
                    <label>Kategori</label>
                    <select name="kategori" class="form-control">
                        <option value="">Pilih Kategori</option>
                        <option value="Makanan">Makanan</option>
                        <option value="Minuman">Minuman</option>
                        <option value="Pakaian">Pakaian</option>
                        <option value="ATK">ATK</option>
                    </select>
                </div>

                <div class="form-group">
                  <label>Nama Produk</label>
                  <input type="text" name="nama_produk" placeholder="Masukkan Nama Produk" class="form-control">
                </div>

                <div class="form-group">
                  <label>Deskripsi</label>
                  <textarea class="form-control" name="deskripsi" placeholder="Masukkan deskripsi" rows="4"></textarea>
                </div>

                <div class="form-group">
                  <label>Stok</label>
                  <input type="number" name="stok" placeholder="Stok Produk" class="form-control">
                </div>

                <div class="form-group">
                  <label>Harga</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Rp</span>
                    </div>
                    <input type="text" name="harga" class="form-control" placeholder="Harga Produk" id="harga">
                  </div>
                </div>


                <div class="form-group">
                    <label>Berat</label>
                    <select name="berat" class="form-control">
                        <option value="">Pilih Berat</option>
                        <option value="200">200 gram</option>
                        <option value="500">500 gram</option>
                        <option value="700">700 gram</option>
                        <option value="1">1 kg</option>
                    </select>
                </div>
                
                <div class="form-group">
                  <label>Supplier</label>
                  <select name="supplier" class="form-control">
                  <option disable selected>Pilih Supplier</option>
                  <?php
                    include '../koneksi.php';
                    $result = mysqli_query($connection, "SELECT * FROM supplier");
                    // var_dump($result);
                    // die();
                    while ($row = mysqli_fetch_assoc($result)) {
                      echo "<option value='{$row['id']}'>{$row['nama_suplier']}</option>";
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