<!DOCTYPE html>
<html lang="en">
<head>
    <title>Paul's Healthy Honey</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link href="../admin/css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/ico" href="../webroot/favicon.ico">
</head>
<body class="sb-nav-fixed">
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand" href=<?=$this->Url->build(['controller'=> 'Customers','action' => 'home']) ?>>Paul's Healthy Honey</a>


    <!-- Navbar-->

</nav>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link" href=<?=$this->Url->build(['controller'=> 'Stocks','action' => 'inventory']) ?>>
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Inventory
                    </a>
                    <a class="nav-link" href=<?=$this->Url->build(['controller'=> 'Products','action' => 'add2']) ?>>
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Upload product
                    </a>
                    <div class="sb-sidenav-menu-heading">Interface</div>



                    <a class="nav-link" href=<?=$this->Url->build(['controller'=> 'Orders','action' => 'page']) ?>>
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        Orders
                    </a>
                    <a class="nav-link" href=<?=$this->Url->build(['controller'=> 'Customers','action' => 'check']) ?>>
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        Customers
                    </a>
                    <a class="nav-link" href=<?=$this->Url->build(['controller'=> 'Products','action' => 'check']) ?>>
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        Products
                    </a>
                   

            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                Admin
                <a class="nav-link" href=<?=$this->Url->build(['controller'=> 'Customers','action' => 'logout']) ?>> Logout</a>
            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">
        <?= $this->fetch('content');?>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Your Website 2021</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<script src="assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/datatables-demo.js"></script>
</body>
</html>
