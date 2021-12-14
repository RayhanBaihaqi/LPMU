<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>List Capaian KPI</title>

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
						<a class="collapse-item" href="<?= base_url('setrkat/createbyadmin') ?>">Tambah RKAT</a>
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

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">List Capaian KPI</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <span></span></a>
                        </div>
                        <div class="container-fluid">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Pilih Nama KPI</label>
                                <select class="form-control filter-satuan" id="categoryFilter">
                                    <option selected disabled>-Daftar Kategori KPI-</option>
                                    <option value="Visi, Misi, Tujuan dan Strategi">Visi, Misi, Tujuan dan Strategi</option>
                                    <option value="Tata Pamong, Tata Kelola dan Kerjasama">Tata Pamong, Tata Kelola dan Kerjasama</option>
                                    <option value="Mahasiswa">Mahasiswa</option>
                                    <option value="Sumber Daya Manusia">Sumber Daya Manusia</option>
                                    <option value="Keuangan, Sarana dan Prasarana">Keuangan, Sarana dan Prasarana</option>
                                    <option value="Pendidikan">Pendidikan</option>
                                    <option value="Penelitian">Penelitian</option>
                                    <option value="Pengabdian Kepada Masyarakat">Pengabdian Kepada Masyarakat</option>
                                    <option value="Luaran dan Capaian Tridharma">Luaran dan Capaian Tridharma</option>
                                </select>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Prodi</th>
                                            <th>Tahun Ajaran</th>
                                            <th>Level</th>
                                            <th>Nama KPI</th>
                                            <th>Angka Butir</th>
                                            <th>Nama Butir</th>
                                            <th>Bobot</th>
                                            <th>Target</th>
                                            <th>Realisasi</th>
                                            <th>Nilai Bobot</th>
                                            <th>File</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $nomor = 0;
                                        foreach ($tampilcapaiankpi as $row) :
                                            $nomor++;
                                        ?>
                                            <tr>
                                                <th><?= $nomor; ?></th>
                                                <td><?= $row->nama_prodi ?></td>
                                                <td><?= $row->tahun_ajaran ?></td>
                                                <td><?= $row->level ?></td>
                                                <td><?= $row->nama_kpi ?></td>
                                                <td><?= $row->idkpi . '.' . $row->angka_butir ?></td>
                                                <td><?= $row->nama_butir ?></td>
                                                <td><?= $row->bobot ?></td>
                                                <td><?= $row->target ?></td>
                                                <td><?= $row->realisasi ?></td>
                                                <td><?= $row->nilai_bobot ?></td>
                                                <td><?= $row->upload_file ?></td>
                                                <td></td>
                                            <?php
                                        endforeach;
                                            ?>
                                            </tr>
                                    </tbody>
                                </table>
                            </div>
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