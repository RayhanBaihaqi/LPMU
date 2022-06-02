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
                <img src="<?php echo base_url(); ?>/public/img/monev_logo_putih.png" alt="Logo" style="width: 70px; height: 70px;">
                <div class="sidebar-brand-text mx-3"><?php
                                                        $nama_prodi = session('nama_prodi');
                                                        echo "$nama_prodi"
                                                        ?></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link " href="<?= base_url('/rektorat') ?>">
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
                        <a class="collapse-item" href="<?= base_url('/rektorat/inputRencana') ?>">Input Rencana Anggaran</a>
                        <a class="collapse-item" href="<?= base_url('/rektorat/inputRealisasi') ?>">Input Realisasi Anggaran</a>
                        <a class="collapse-item" href="<?= base_url('/rektorat/listRkatRektorat') ?>">Daftar Data RKAT Rektorat</a>
                        <a class="collapse-item" href="<?= base_url('/rektorat/rincian') ?>">Rincian Rkat</a>
                        <a class="collapse-item" href="<?= base_url('/rektorat/listRkatProdi') ?>">Daftar Data RKAT Prodi</a>
                        <a class="collapse-item" href="<?= base_url('/rektorat/listRkatUnit') ?>">Daftar Data RKAT Unit</a>
                        <a class="collapse-item" href="<?= base_url('/rektorat/grafikSerap') ?>">Grafik Serapan</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>KPI</span></a>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">

                        <a class="collapse-item" href="<?= base_url('/rektorat/tabelcapaiankpi') ?>">Lihat Data Tabel</a>
                        <a class="collapse-item" href="<?= base_url('/rektorat/grafikcapaian') ?>">Lihat Data Grafik</a>
                    </div>
                </div>
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
                    <h1 class="h3 mb-2 text-gray-800">Grafik Capaian KPI</h1>
                    <br>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Pilih Tingkatan</label>
                        <select class="form-control" id="exampleFormControlSelect1" onchange="location = this.value;">

                            <option value="tabelunit/" disabled selected>Unit</option>
                            <option value="tabelprodi/">Prodi</option>
                        </select>
                    </div>


                    <div class="container col-lg-12">
                        <section class="content">
                            <div class="card shadow mb-4">
                                <div class="card-header">

                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable_rencana" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>BP</th>
                                                    <th>JCAL</th>
                                                    <th>BKAL</th>
                                                    <th>Keuangan</th>
                                                    <th>KHI</th>
                                                    <th>Perpustakaan</th>
                                                    <th>PHA</th>
                                                    <th>LPMU</th>
                                                    <th>JLP</th>
                                                    <th>JSDP</th>
                                                    <th>LSE</th>
                                                    <th>TIK</th>
                                                    <th>Umum</th>
                                                    <th>BPSDM</th>
                                                    <th>LP2M</th>
                                                    <th style="color: red;">Terkecil</th>
                                                    <th style="color: green;">Terbesar</th>
                                                    <th style="color: blue;">Rata-rata</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <?php
                                                    foreach ($totalkpi19_bp as $rows) :
                                                    ?>
                                                        <th>2019/2020</th>
                                                        <td><?php echo $rows->tot_19_unit; ?></td>
                                                    <?php endforeach; ?>
                                                    <?php
                                                    foreach ($totalkpi19_jcal as $rows) :
                                                    ?>
                                                        <td><?php echo $rows->tot_19_unit; ?></td>
                                                    <?php endforeach; ?>
                                                    <?php
                                                    foreach ($totalkpi19_bkal as $rows) :
                                                    ?>
                                                        <td><?php echo $rows->tot_19_unit; ?></td>
                                                    <?php endforeach; ?>
                                                    <?php
                                                    foreach ($totalkpi19_keuangan as $rows) :
                                                    ?>
                                                        <td><?php echo $rows->tot_19_unit; ?></td>
                                                    <?php endforeach; ?>
                                                    <?php
                                                    foreach ($totalkpi19_khi as $rows) :
                                                    ?>
                                                        <td><?php echo $rows->tot_19_unit; ?></td>
                                                    <?php endforeach; ?>
                                                    <?php
                                                    foreach ($totalkpi19_perpustakaan as $rows) :
                                                    ?>
                                                        <td><?php echo $rows->tot_19_unit; ?></td>
                                                    <?php endforeach; ?>
                                                    <?php
                                                    foreach ($totalkpi19_pha as $rows) :
                                                    ?>
                                                        <td><?php echo $rows->tot_19_unit; ?></td>
                                                    <?php endforeach; ?>
                                                    <?php
                                                    foreach ($totalkpi19_lpmu as $rows) :
                                                    ?>
                                                        <td><?php echo $rows->tot_19_unit; ?></td>
                                                    <?php endforeach; ?>
                                                    <?php
                                                    foreach ($totalkpi19_jlp as $rows) :
                                                    ?>
                                                        <td><?php echo $rows->tot_19_unit; ?></td>
                                                    <?php endforeach; ?>
                                                    <?php
                                                    foreach ($totalkpi19_jsdp as $rows) :
                                                    ?>
                                                        <td><?php echo $rows->tot_19_unit; ?></td>
                                                    <?php endforeach; ?>
                                                    <?php
                                                    foreach ($totalkpi19_lse as $rows) :
                                                    ?>
                                                        <td><?php echo $rows->tot_19_unit; ?></td>
                                                    <?php endforeach; ?>
                                                    <?php
                                                    foreach ($totalkpi19_tik as $rows) :
                                                    ?>
                                                        <td><?php echo $rows->tot_19_unit; ?></td>
                                                    <?php endforeach; ?>
                                                    <?php
                                                    foreach ($totalkpi19_umum as $rows) :
                                                    ?>
                                                        <td><?php echo $rows->tot_19_unit; ?></td>
                                                    <?php endforeach; ?>
                                                    <?php
                                                    foreach ($totalkpi19_bpsdm as $rows) :
                                                    ?>
                                                        <td><?php echo $rows->tot_19_unit; ?></td>
                                                    <?php endforeach; ?>
                                                    <?php
                                                    foreach ($totalkpi19_lp2m as $rows) :
                                                    ?>
                                                        <td><?php echo $rows->tot_19_unit; ?></td>
                                                    <?php endforeach; ?>
                                                    <?php
                                                    foreach ($minimalkpi19_unit as $rows) :
                                                    ?>
                                                        <td><?php echo $rows->min_19_unit; ?></td>
                                                    <?php
                                                    endforeach;
                                                    ?>
                                                    <?php
                                                    foreach ($maximalkpi19_unit as $rows) :
                                                    ?>
                                                        <td><?php echo $rows->max_19_unit; ?></td>
                                                    <?php
                                                    endforeach;
                                                    ?>
                                                    <?php
                                                    foreach ($averagekpi19_unit as $rows) :
                                                    ?>
                                                        <td><?php echo $rows->average_19_unit; ?></td>
                                                    <?php
                                                    endforeach;
                                                    ?>



                                                </tr>
                                                <tr>

                                                    <th>2020/2021</th>

                                                </tr>

                                                <tr>

                                                    <th>2021/2022</th>

                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </section>
                    </div>

                    <br>



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
<!-- jQuery -->
<script src="<?php echo base_url(); ?>/public/plugins/jquery/jquery.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url(); ?>/public/plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>/public/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->

<!-- Page level custom scripts -->
<script src="<?php echo base_url(); ?>/public/dist/js/demo.js"></script>
<script src="<?php echo base_url(); ?>/public/chart/apexcharts.min.js"></script>
<script src="<?php echo base_url(); ?>/public/chart/dashboard.js"></script>
<script src="<?php echo base_url(); ?>/public/chart/jquery.knob.min.js"></script>
<script src="<?php echo base_url(); ?>/public/chart/knob-chart-setting.js"></script>
<script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
<script>
    $(window).load(function() {
        $(".pre-loader").fadeOut("slow");
    });
</script>


</html>