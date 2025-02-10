<?php 
  
  include('../koneksi.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM supplier WHERE id = $id LIMIT 1";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Supplier</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT SUPPLIER
            </div>
            <div class="card-body">
              <form action="update_supplier.php" method="POST">
                
                <div class="form-group">
                  <label>Nama Supplier</label>
                  <input type="text" name="nama_suplier" value="<?php echo $row['nama_suplier'] ?>" placeholder="Masukkan Nama Supplier" class="form-control">
                  <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                </div>
                
                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat Supplier" rows="4"><?php echo $row['alamat'] ?></textarea>
                </div>

                <div class="form-group">
                  <label>Telepon</label>
                  <input type="number" name="telepon" value="<?php echo $row['telepon'] ?>" placeholder="Masukkan Telepon Supplier" class="form-control">
                </div>

                
                
                <button type="submit" class="btn btn-success">UPDATE</button>
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