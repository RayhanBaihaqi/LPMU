<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Form Edit Butir KPI</title>

    <!-- Custom fonts for this template-->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="<?php echo base_url(); ?>/public/css/style_admin.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/public/css/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link " href="<?php echo site_url(); ?>admin">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>RKAT</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= base_url('rkat/createbyadmin') ?>">Tambah RKAT</a>
                        <a class="collapse-item" href="<?= base_url('rkat/indexbyadmin') ?>">Lihat Data</a>
                        <a class="collapse-item" href="<?= base_url('setrkat/create') ?>">Atur Semester dan Pagu</a>
                        <a class="collapse-item" href="<?= base_url('setrkat/index') ?>">Lihat Data Set Rkat</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>KPI</span></a>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= base_url('/admin/listkpi') ?>">Lihat KPI</a>
                        <a class="collapse-item" href="<?= base_url('/admin/listbutirkpi') ?>">Lihat Butir KPI</a>
                        <a class="collapse-item" href="<?= base_url('/admin/listcapaiankpi') ?>">Lihat Capaian</a>
                    </div>
                </div>
            </li>

            <!-- Heading -->
            <div class="sidebar-heading">
                User
            </div>
            <li class="nav-item ">
                <a class="nav-link " href="<?= base_url('auth/index') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Tabel User</span></a>
            </li>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    <?php
                                    $nama_prodi = session('nama_prodi');
                                    echo "$nama_prodi"
                                    ?>
                                </span>
                                <img class="img-profile rounded-circle" src="<?php echo base_url(); ?>/public/img/inf-logo.jpg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?= base_url('auth/logout') ?>">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <h2>Edit Butir KPI</h2>
                            <?= form_open('admin/updatebutirkpi') ?>
                            <div class="form-group">
                                <label for="idkpi">ID KPI</label>
                                <select required class="form-control" id="idkpi" name="idkpi">
                                    <option selected disabled>Pilih Kategori KPI</option>
                                    <option value="1">1. Visi, Misi, Tujuan dan Strategi</option>
                                    <option value="2">2. Tata Pamong, Tata Kelola dan Kerjasama</option>
                                    <option value="3">3. Mahasiswa</option>
                                    <option value="4">4. Sumber Daya Manusia </option>
                                    <option value="5">5. Keuangan, Sarana dan Prasarana</option>
                                    <option value="6">6. Pendidikan</option>
                                    <option value="7">7. Penelitian</option>
                                    <option value="8">8 Pengabdian Kepada Masyarakat</option>
                                    <option value="9">9. Luaran dan Capaian Tridharma</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="angka_butir">Angka butir</label>
                                <input type="text" class="form-control" id="angka_butir" name="angka_butir" placeholder="Masukkan angka butir KPI" value="<?= $angka_butir ?>" readonly>
                            </div>
                            <div class=" form-group">
                                <label for="nama_butir">Nama butir</label>
                                <input type="text" class="form-control" id="nama_butir" name="nama_butir" placeholder="Masukkan nama butir KPI" value="<?= $nama_butir ?>">
                            </div>
                            <div class="form-group">
                                <label for="unit_utama">Unit utama</label>
                                <input type="text" class="form-control" id="unit_utama" name="unit_utama" placeholder="Masukkan unit utama KPI" value="<?= $unit_utama ?>">
                            </div>
                            <div class="form-group">
                                <label for="unit_pendukung">Unit pendukung</label>
                                <input type="text" class="form-control" id="unit_pendukung" name="unit_pendukung" placeholder="Masukkan unit pendukung KPI" value="<?= $unit_pendukung ?>">
                            </div>
                            <div class="form-group">
                                <label for="target">Target</label>
                                <input type="text" class="form-control" id="target" name="target" placeholder="Masukkan target KPI" value="<?= $target ?>">
                            </div>
                            <div class="form-group">
                                <label for="kategori">Kategori</label>
                                <select required class="form-control" id="kategori" name="kategori" value="<?= $kategori ?>">
                                    <option selected disabled>Pilih Kategori KPI</option>
                                    <option value="OPS">OPS</option>
                                    <option value="PK">PK</option>
                                    <option value="INV">INV</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="kegiatan">Kegiatan</label>
                                <input type="text" class="form-control" id="kegiatan" name="kegiatan" placeholder="Masukkan kegiatan" value="<?= $kegiatan ?>">
                            </div>
                            <div class="form-group">
                                <label for="bobot">Bobot</label>
                                <input type="number" step=0.01 class="form-control" id="bobot" name="bobot" placeholder="Masukkan bobot" value="<?= $bobot ?>">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <?= form_close(); ?>

                        </div>

                    </div>
                </div>
            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Bootstrap core JavaScript-->
        <script src="<?php echo base_url(); ?>/public/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>/public/js/bootstrap.bundle.min.js"></script>

        <!-- Page level plugins -->
        <script src="<?php echo base_url(); ?>/public/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url(); ?>/public/js/dataTables.bootstrap4.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="<?php echo base_url(); ?>/public/js/datatables-demo.js"></script>

</body>

</html>