<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>AdminLTE 3 | Top Navigation</title>

      <!-- Google Font: Source Sans Pro -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
      <!-- Font Awesome Icons -->
      <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/plugins/fontawesome-free/css/all.min.css">
      <!-- SweetAlert2 -->
      <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
      <!-- DataTables -->
      <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
      <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
      <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/dist/css/adminlte.min.css">

      <!-- REQUIRED SCRIPTS -->

      <!-- jQuery -->
      <script src="<?= base_url('AdminLTE') ?>/plugins/jquery/jquery.min.js"></script>
      <!-- Bootstrap 4 -->
      <script src="<?= base_url('AdminLTE') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- SweetAlert2 -->
      <script src="<?= base_url('AdminLTE') ?>/plugins/sweetalert2/sweetalert2.min.js"></script>
      <!-- DataTables & Plugins -->
      <script src="<?= base_url('AdminLTE') ?>/plugins/datatables/jquery.dataTables.min.js"></script>
      <script src="<?= base_url('AdminLTE') ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
      <script src="<?= base_url('AdminLTE') ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
      <script src="<?= base_url('AdminLTE') ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
      <script src="<?= base_url('AdminLTE') ?>/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
      <script src="<?= base_url('AdminLTE') ?>/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
      <script src="<?= base_url('AdminLTE') ?>/plugins/jszip/jszip.min.js"></script>
      <script src="<?= base_url('AdminLTE') ?>/plugins/pdfmake/pdfmake.min.js"></script>
      <script src="<?= base_url('AdminLTE') ?>/plugins/pdfmake/vfs_fonts.js"></script>
      <script src="<?= base_url('AdminLTE') ?>/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
      <script src="<?= base_url('AdminLTE') ?>/plugins/datatables-buttons/js/buttons.print.min.js"></script>
      <script src="<?= base_url('AdminLTE') ?>/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
      <!-- AdminLTE App -->
      <script src="<?= base_url('AdminLTE') ?>/dist/js/adminlte.min.js"></script>
      <!-- Auto Numeric -->
      <script src="<?= base_url('autoNumeric') ?>/src/AutoNumeric.js"></script>
      <!-- terbilang -->
      <script src="<?= base_url('terbilang') ?>/terbilang.js"></script>
</head>

<body class="hold-transition layout-top-nav">
      <div class="wrapper">

            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
                  <div class="container">
                        <a href="../../index3.html" class="navbar-brand">
                              <span class="brand-text font-weight-light"><i class="fas fa-shopping-cart text-primary"></i><b> Transaksi Penjualan</b></span>
                        </a>

                        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse order-3" id="navbarCollapse">

                        </div>

                        <!-- Right navbar links -->
                        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">

                              <li class="nav-item">
                                    <?php if (session()->get('level') == '1') { ?>
                                          <a class="nav-link" href="<?= base_url('Admin') ?>">
                                                <i class="fas fa-tachometer-alt"></i> Dashboard
                                          </a>
                                    <?php } else { ?>
                                          <a class="nav-link" href="<?= base_url('Home/Logout') ?>">
                                                <i class="fas fa-sign-in-alt"></i> Logout
                                          </a>
                                    <?php } ?>
                              </li>
                        </ul>
                  </div>
            </nav>
            <!-- /.navbar -->

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">

                  <!-- Main content -->
                  <div class="content">

                        <div class="row">
                              <!-- /.col-md-6 -->
                              <div class="col-lg-7">
                                    <div class="card card-primary card-outline">

                                          <div class="card-body">
                                                <div class="row">
                                                      <div class="col-3">
                                                            <div class="form-group">
                                                                  <label>No Faktur</label>
                                                                  <label class="form-control form-control-lg text-danger"><?= $no_faktur ?></label>
                                                            </div>
                                                      </div>

                                                      <div class="col-3">
                                                            <div class="form-group">
                                                                  <label>Tanggal</label>
                                                                  <label class="form-control form-control-lg"><?= date('d M Y') ?></label>
                                                            </div>
                                                      </div>

                                                      <div class="col-3">
                                                            <div class="form-group">
                                                                  <label>Jam</label>
                                                                  <label class="form-control form-control-lg" id="jam"></label>
                                                            </div>
                                                      </div>

                                                      <div class="col-3">
                                                            <div class="form-group">
                                                                  <label>Kasir</label>
                                                                  <label class="form-control form-control-lg text-primary"><?= session()->get('nama_user') ?></label>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>

                              <div class="col-lg-5">
                                    <div class="card card-primary card-outline">
                                          <div class="card-header">
                                                <h5 class="card-title m-0"></h5>
                                          </div>
                                          <div class="card-body bg-black color-palette text-right">
                                                <label class="display-4 text-green">Rp. <?= number_format($grand_total, 0) ?>.-</label>
                                          </div>
                                    </div>
                              </div>

                              <div class="col-lg-12">
                                    <div class="card card-primary card-outline">
                                          <div class="card-body">
                                                <div class="row">
                                                      <div class="col-12">
                                                            <?php echo form_open('Penjualan/InsertCart') ?>
                                                            <div class="row">
                                                                  <div class="col-2 input-group">
                                                                        <input name="kode_produk" id="kode_produk" class="form-control" placeholder="Barcode/Kode Produk" autocomplete="off">
                                                                        <span class="input-group-append">
                                                                              <a class="btn btn-primary btn-flat" data-toggle="modal" data-target="#cari-produk">
                                                                                    <i class="fas fa-search"></i>
                                                                              </a>
                                                                              <button type="reset" class="btn btn-danger btn-flat">
                                                                                    <i class="fas fa-times"></i>
                                                                              </button>
                                                                        </span>
                                                                  </div>
                                                                  <div class="col-3">
                                                                        <input name="nama_produk" class="form-control" placeholder="Nama Produk" readonly>
                                                                  </div>
                                                                  <div class="col-1">
                                                                        <input name="nama_kategori" class="form-control" placeholder="Kategori" readonly>
                                                                  </div>
                                                                  <div class="col-1">
                                                                        <input name="nama_satuan" class="form-control" placeholder="Satuan" readonly>
                                                                  </div>
                                                                  <div class="col-1">
                                                                        <input name="harga_jual" class="form-control" placeholder="Harga" readonly>
                                                                  </div>
                                                                  <div class="col-1">
                                                                        <input id="qty" type="number" min="1" value="1" name="qty" class="form-control text-center" placeholder="QTY">
                                                                  </div>
                                                                  <input name="harga_beli" type="hidden">
                                                                  <div class="col-3">
                                                                        <button type="submit" class="btn btn-flat btn-primary"><i class="fas fa-cart-plus"></i> Add</button>
                                                                        <a href="<?= base_url('Penjualan/ResetCart') ?>" class="btn btn-flat btn-warning"><i class="fas fa-sync"></i> Reset</a>
                                                                        <a class="btn btn-flat btn-success" data-toggle="modal" data-target="#pembayaran" onclick="Pembayaran()"><i class="fas fa-cash-register"></i> Pembayaran</a>
                                                                  </div>
                                                            </div>
                                                            <?php echo form_close() ?>
                                                      </div>
                                                </div>
                                                <hr>
                                                <div class="