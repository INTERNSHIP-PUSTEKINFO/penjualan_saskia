<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">Admin Dashboard</a>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="admin_page.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="customer/show_data_cust.php">Customer</a></li>
                <li class="nav-item"><a class="nav-link" href="product/show_data.php">Product</a></li>
                <li class="nav-item"><a class="nav-link" href="supplier/show_data_sup.php">Supplier</a></li>
                <li class="nav-item"><a class="nav-link" href="transaksi/show_data_tran.php">Transaction</a></li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <h1 class="tittle">Admin Dashboard</h1>
        <div class="row-card">
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Customer</h5>
                        <p class="card-text">Manage customer.</p>
                        <a href="customer/show_data_cust.php" class="btn btn-primary">Go to Customer</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Product</h5>
                        <p class="card-text">Manage product data.</p>
                        <a href="product/show_data.php" class="btn btn-primary">Go to Product</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Supplier</h5>
                        <p class="card-text">Manage supplier data.</p>
                        <a href="supplier/show_data_sup.php" class="btn btn-primary">Go to Supplier</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Transaction</h5>
                        <p class="card-text">Manage transaction.</p>
                        <a href="transaksi/show_data_tran.php" class="btn btn-primary">Go to Transaction</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>