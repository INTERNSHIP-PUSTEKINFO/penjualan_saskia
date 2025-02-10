<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Data Supplier</title>
    <link rel="stylesheet" href="../style.css">
  </head>

  <body>
  <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">Supplier</a>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item"><a class="nav-link" href="../admin_page.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="../customer/show_data_cust.php">Customer</a></li>
                <li class="nav-item"><a class="nav-link" href="../product/show_data.php">Product</a></li>
                <li class="nav-item"><a class="nav-link" href="show_data_sup.php">Supplier</a></li>
                <li class="nav-item"><a class="nav-link" href="../transaksi/show_data_tran.php">Transaction</a></li>
            </ul>
        </div>
    </nav>
    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              DATA SUPPLIER
            </div>
            <div class="card-body">
              <a href="tambah_supplier.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">NO</th>
                    <th scope="col">Nama Supplier</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Telepon</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      include('../koneksi.php');
                      $no = 1;
                      $query = mysqli_query($connection,"SELECT * FROM supplier");
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['nama_suplier'] ?></td>
                      <td><?php echo $row['alamat'] ?></td>
                      <td><?php echo $row['telepon'] ?></td>
                      <td class="text-center d-flex justify-content-center">
                        <a href="../supplier/edit_supplier.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-primary mr-2">EDIT</a>
                        <a href="../supplier/hapus_supplier.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-danger mr-2">HAPUS</a>
                        <a href="../supplier/detail-supplier.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-info">DETAIL</a>
                      </td>
                  </tr>

                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>
  </body>
</html>