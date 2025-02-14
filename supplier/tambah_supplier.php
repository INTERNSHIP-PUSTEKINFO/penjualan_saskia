<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah Suplier</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              TAMBAH SUPPLIER
            </div>
            <div class="card-body">
              <form action="simpan_supplier.php" method="POST">
              

                <div class="form-group">
                  <label>Nama Supplier</label>
                  <input type="text" name="nama_suplier" placeholder="Masukkan Nama Supplier" class="form-control">
                </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <textarea type="text" name="alamat" placeholder="Masukkan Alamat Supplier" class="form-control"></textarea>
                </div>

                <div class="form-group">
                  <label>Telepon</label>
                  <input type="number" class="form-control" name="telepon" placeholder="Masukkan Telepon Supplier"></input>
                </div>
                
                <button type="submit" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-warning">RESET</button>
                <a href="show_data_sup.php" class="btn btn-secondary">Back</a>

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