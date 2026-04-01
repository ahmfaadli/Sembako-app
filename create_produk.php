<?php require_once 'db_koneksi.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Create Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/style-shop.css" rel="stylesheet" />
    <link rel="shortcut icon" href="images/new/logo website.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-success">
        <!-- Navbar Brand-->
        <img src="images/new/logo-produk.png" alt="" style="width: 180px;">
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."
                    aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i
                        class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="index.php">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark bg-success" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Menu</div>
                        <a class="nav-link" href="dashboard.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <a class="nav-link" href="list_produk.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-shopping-bag"></i></div>
                            Produk
                        </a>
                        <a class="nav-link" href="list_jenis.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Jenis
                        </a>
                        <a class="nav-link" href="list_pesanan.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-shopping-cart"></i></div>
                            Pesanan
                        </a>


            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container">
                    <form method="POST" action="proses_produk.php">
                        <div class="form-group row">
                            <label for="nama" class="col-4 col-form-label">Nama Produk</label>
                            <div class="col-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-user"></i>
                                        </div>
                                    </div>
                                    <input id="nama" name="nama" type="text" class="form-control" value="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="stok" class="col-4 col-form-label">stok</label>
                            <div class="col-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-shopping-cart"></i>
                                        </div>
                                    </div>
                                    <input id="stok" name="stok" type="number" class="form-control" value="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="harga" class="col-4 col-form-label">Harga</label>
                            <div class="col-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-dollar"></i>
                                        </div>
                                    </div>
                                    <input id="harga" name="harga" value="" type="number" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="berat" class="col-4 col-form-label">Berat</label>
                            <div class="col-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-balance-scale"></i>
                                        </div>
                                    </div>
                                    <input id="berat" name="berat" value="" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jenis_produk_id" class="col-4 col-form-label">Jenis produk</label>
                            <div class="col-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-box"></i>
                                        </div>
                                    </div>
                                    <?php 
                                    $sqljenis = "SELECT * FROM jenis_produk";
                                    $rsjenis = $dbh->query($sqljenis);
                                    ?>
                                    <select id="jenis_produk_id" name="jenis_produk_id" class="custom-select">
                                        <?php 
                                        if (isset($_GET["idedit"])) {
                                        $id_jenis = $row["jenis_produk_id"];
                                        $query2 = "SELECT * FROM jenis_produk WHERE id = '$id_jenis'";
                                        $sql2 = $dbh->query($query2);
                                        $row2 = $sql2->fetch();
                                        echo '<option value="'.$row2['id'].'">'.$row2['jenis_produk'].'</option>';
                                        }
                                            foreach($rsjenis as $rowjenis){
                                    ?>
                                        <option value="<?=$rowjenis['id']?>"><?=$rowjenis['jenis_produk']?></option>
                                        <?php
                                        }
                                    ?>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gambar" class="col-4 col-form-label">Link
                                Gambar</label>
                            <div class="col-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-link"></i>
                                        </div>
                                    </div>
                                    <input id="gambar" name="gambar" type="tex" class="form-control" value="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label>
                            <div class="col-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-info-circle"></i>
                                        </div>
                                    </div>
                                    <input id="deskripsi" name="deskripsi" value="" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-4 col-8">
                                <input type="submit" name="proses" type="submit" class="btn btn-primary"
                                    value="Simpan" />
                            </div>
                        </div>
                    </form>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Ahmad Fadli</div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>