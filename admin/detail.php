<?php
require '../function.php';
require '../cek.php';

// Dapetin ID barang yang dipassing di halaman sebelumnya
$idbarang = $_GET['id']; // get id barang
// get informasi barang berdasarkan database
$get = mysqli_query($conn, "SELECT * FROM stock WHERE idbarang='$idbarang'");
$fetch = mysqli_fetch_assoc($get);
//set variable
$namabarang = $fetch['namabarang'];
$kode = $fetch['kode_barang'];
$deskripsi = $fetch['deskripsi'];
$stock = $fetch['stock'];
$satuan = $fetch['satuan'];

?>

<!DOCTYPE php>
<php lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Detail Barang</title>

        <!-- Custom fonts for this template-->
        <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="../css/sb-admin-2.min.css" rel="stylesheet">

        <!-- Custom styles for this page -->
        <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    </head>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <?php include 'sidebar.php'; ?>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    <?php include 'header.php'; ?>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <h1 class="h3 mb-2 text-gray-800">Detail Barang</h1>

                        <!-- DataTales Example -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <h2><?=$namabarang;?></h2>
                            </div>
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-md-3"><strong>Kode Barang</strong></div>
                                    <div class="col-md-9"><strong>: <?=$kode;?></strong></div>
                                </div>

                                <div class="row">
                                    <div class="col-md-3">Stock</div>
                                    <div class="col-md-9">: <?=$stock;?></div>
                                </div>

                                <div class="row">
                                    <div class="col-md-3">Uom (Satuan ukuran)</div>
                                    <div class="col-md-9">: <?=$satuan;?></div>
                                </div>
                                
                                <br></br>

                                <h3>Barang Masuk</h3>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Tanggal</th>
                                                <th>Deskripsi</th>
                                                <th>Quantity</th>
                                                <th>Satuan Ukuran</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                         $ambildatamasuk = mysqli_query($conn, "select * from masuk where idbarang='$idbarang'");
                                         $i = 1;
                                         while($fetch=mysqli_fetch_array($ambildatamasuk)){
                                             $tanggal = $fetch['tanggal'];
                                             $keterangan = $fetch['keterangan'];
                                             $qty = $fetch['qty'];
         
                                        ?>

                                            <tr>
                                                <td><?=$i++;?></td>
                                                <td><?=$tanggal;?></a></td>
                                                <td><?=$keterangan;?></td>
                                                <td><?=$qty;?></td>
                                            </tr>

                                            <?php
                                        };
                                        ?>

                                        </tbody>
                                    </table>
                                </div>

                                <br></br>

                                <h3>Barang Keluar</h3>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Tanggal</th>
                                                <th>Deskripsi</th>
                                                <th>Quantity</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                         $ambildatamasuk = mysqli_query($conn, "select * from masuk where idbarang='$idbarang'");
                                         $i = 1;
                                         while($fetch=mysqli_fetch_array($ambildatamasuk)){
                                             $tanggal = $fetch['tanggal'];
                                             $keterangan = $fetch['keterangan'];
                                             $qty = $fetch['qty'];
         
                                        ?>

                                            <tr>
                                                <td><?=$i++;?></td>
                                                <td><?=$tanggal;?></a></td>
                                                <td><?=$keterangan;?></td>
                                                <td><?=$qty;?></td>
                                            </tr>

                                            <?php
                                        };
                                        ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <?php include 'footer.php'; ?>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="logout.php">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="../js/sb-admin-2.min.js"></script>

    </body>

</php>