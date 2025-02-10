<?php 
  
  include('../koneksi.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM customer WHERE id = $id LIMIT 1";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Customer</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              Edit Customer
            </div>
            <div class="card-body">
              <form action="update_data_cust.php" method="POST">
                
                <div class="form-group">
                  <label>Nama Customer</label>
                  <input type="text" name="nama_customer" value="<?php echo $row['nama_customer'] ?>" placeholder="Masukkan Nama Customer" class="form-control">
                  <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                </div>
                
                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat Customer" rows="4"><?php echo $row['alamat'] ?></textarea>
                </div>

                <div class="form-group">
                  <label>Telepon</label>
                  <input type="text" name="telepon" value="<?php echo $row['telepon'] ?>" placeholder="Masukkan Telepon Customer" class="form-control">
                </div>


                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select class="form-control" name="jenis_kelamin">
                        <option value="Laki-laki" <?php if($row['jenis_kelamin'] == "Laki-laki") echo "selected"; ?>>Laki-laki</option>
                        <option value="Perempuan" <?php if($row['jenis_kelamin'] == "Perempuan") echo "selected"; ?>>Perempuan</option>
                    </select>
                </div>

                
                
                <button type="submit" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-warning">RESET</button>
                <a href="show_data_cust.php" class="btn btn-secondary">Back</a>

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