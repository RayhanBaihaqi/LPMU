<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tabel Capaian KPI Unit</title>

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
            <li class="nav-item">
                <a class="nav-link " href="<?= base_url('/rektorat/rkat') ?>">
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
                        <a class="collapse-item" href="<?= base_url('admin/create') ?>">Tambah Rencana RKAT</a>
                        <a class="collapse-item" href="<?= base_url('admin/listRkatProdi') ?>">Lihat Data Prodi</a>
                        <a class="collapse-item" href="<?= base_url('admin/listRkatUnit') ?>">Lihat Data Unit</a>
                        <a class="collapse-item" href="<?= base_url('pagurkat/create') ?>">Buat Pagu</a>
                        <a class="collapse-item" href="<?= base_url('pagurkat/index') ?>">List Data Pagu</a>
                        <a class="collapse-item" href="<?= base_url('tahunakademik/indextahun') ?>">Tahun Akademik</a>
                        <a class="collapse-item" href="<?= base_url('admin/grafikSerap') ?>">Grafik Capaian Serap</a>
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
                        <a class="collapse-item" href="<?= base_url('/admin/listkpi') ?>">Lihat KPI</a>
                        <a class="collapse-item" href="<?= base_url('/admin/listbutirkpi') ?>">Lihat Butir KPI</a>
                        <a class="collapse-item" href="<?= base_url('/admin/listcapaiankpi') ?>">Lihat Capaian</a>
                        <a class="collapse-item" href="<?= base_url('/admin/tabelcapaiankpi') ?>">Lihat Data Tabel</a>
                        <a class="collapse-item" href="<?= base_url('/admin/grafikcapaian') ?>">Lihat Data Grafik</a>
                    </div>
                </div>
            </li>

            <div class="sidebar-heading">
                user
            </div>
            <li class="nav-item ">
                <a class="nav-link " href="<?= base_url('auth/index') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Tabel user</span></a>
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

                        <!-- Nav Item - user Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    <?php
                                    $nama_prodi = session('nama_prodi');
                                    echo "$nama_prodi"
                                    ?>
                                </span>
                            </a>
                            <!-- Dropdown - user Information -->
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
                    <h1 class="h3 mb-2 text-gray-800">Tabel Capaian KPI Unit</h1>
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
                                                    <th>BP (%)</th>
                                                    <th>JCAL (%)</th>
                                                    <th>BKAL (%)</th>
                                                    <th>Keuangan (%)</th>
                                                    <th>KHI (%)</th>
                                                    <th>Perpustakaan (%)</th>
                                                    <th>PHA (%)</th>
                                                    <th>LPMU (%)</th>
                                                    <th>JLP (%)</th>
                                                    <th>JSDP (%)</th>
                                                    <th>LSE (%)</th>
                                                    <th>TIK (%)</th>
                                                    <th>Umum (%)</th>
                                                    <th>BPSDM (%)</th>
                                                    <th>LP2M (%)</th>
                                                    <th style="color: red;">Terkecil (%)</th>
                                                    <th style="color: green;">Terbesar (%)</th>
                                                    <th style="color: blue;">Rata-rata (%)</th>
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
                                                        <td><?php echo $rows->avg_19_unit; ?></td>
                                                    <?php
                                                    endforeach;
                                                    ?>
                                                </tr>
                                                <tr>
                                                    <?php
                                                    foreach ($totalkpi20_bp as $rows) :
                                                    ?>
                                                        <th>2020/2021</th>
                                                        <td><?php echo $rows->tot_20_unit; ?></td>
                                                    <?php endforeach; ?>
                                                    <?php
                                                    foreach ($totalkpi20_jcal as $rows) :
                                                    ?>
                                                        <td><?php echo $rows->tot_20_unit; ?></td>
                                                    <?php endforeach; ?>
                                                    <?php
                                                    foreach ($totalkpi20_bkal as $rows) :
                                                    ?>
                                                        <td><?php echo $rows->tot_20_unit; ?></td>
                                                    <?php endforeach; ?>
                                                    <?php
                                                    foreach ($totalkpi20_keuangan as $rows) :
                                                    ?>
                                                        <td><?php echo $rows->tot_20_unit; ?></td>
                                                    <?php endforeach; ?>
                                                    <?php
                                                    foreach ($totalkpi20_khi as $rows) :
                                                    ?>
                                                        <td><?php echo $rows->tot_20_unit; ?></td>
                                                    <?php endforeach; ?>
                                                    <?php
                                                    foreach ($totalkpi20_perpustakaan as $rows) :
                                                    ?>
                                                        <td><?php echo $rows->tot_20_unit; ?></td>
                                                    <?php endforeach; ?>
                                                    <?php
                                                    foreach ($totalkpi20_pha as $rows) :
                                                    ?>
                                                        <td><?php echo $rows->tot_20_unit; ?></td>
                                                    <?php endforeach; ?>
                                                    <?php
                                                    foreach ($totalkpi20_lpmu as $rows) :
                                                    ?>
                                                        <td><?php echo $rows->tot_20_unit; ?></td>
                                                    <?php endforeach; ?>
                                                    <?php
                                                    foreach ($totalkpi20_jlp as $rows) :
                                                    ?>
                                                        <td><?php echo $rows->tot_20_unit; ?></td>
                                                    <?php endforeach; ?>
                                                    <?php
                                                    foreach ($totalkpi20_jsdp as $rows) :
                                                    ?>
                                                        <td><?php echo $rows->tot_20_unit; ?></td>
                                                    <?php endforeach; ?>
                                                    <?php
                                                    foreach ($totalkpi20_lse as $rows) :
                                                    ?>
                                                        <td><?php echo $rows->tot_20_unit; ?></td>
                                                    <?php endforeach; ?>
                                                    <?php
                                                    foreach ($totalkpi20_tik as $rows) :
                                                    ?>
                                                        <td><?php echo $rows->tot_20_unit; ?></td>
                                                    <?php endforeach; ?>
                                                    <?php
                                                    foreach ($totalkpi20_umum as $rows) :
                                                    ?>
                                                        <td><?php echo $rows->tot_20_unit; ?></td>
                                                    <?php endforeach; ?>
                                                    <?php
                                                    foreach ($totalkpi20_bpsdm as $rows) :
                                                    ?>
                                                        <td><?php echo $rows->tot_20_unit; ?></td>
                                                    <?php endforeach; ?>
                                                    <?php
                                                    foreach ($totalkpi20_lp2m as $rows) :
                                                    ?>
                                                        <td><?php echo $rows->tot_20_unit; ?></td>
                                                    <?php endforeach; ?>
                                                    <?php
                                                    foreach ($minimalkpi20_unit as $rows) :
                                                    ?>
                                                        <td><?php echo $rows->min_20_unit; ?></td>
                                                    <?php
                                                    endforeach;
                                                    ?>
                                                    <?php
                                                    foreach ($maximalkpi20_unit as $rows) :
                                                    ?>
                                                        <td><?php echo $rows->max_20_unit; ?></td>
                                                    <?php
                                                    endforeach;
                                                    ?>
                                                    <?php
                                                    foreach ($averagekpi20_unit as $rows) :
                                                    ?>
                                                        <td><?php echo $rows->avg_20_unit; ?></td>
                                                    <?php
                                                    endforeach;
                                                    ?>
                                                </tr>

                                                <tr>
                                                    <?php
                                                    foreach ($totalkpi21_bp as $rows) :
                                                    ?>
                                                        <th>2021/2022</th>
                                                        <td><?php echo $rows->tot_21_unit; ?></td>
                                                    <?php endforeach; ?>
                                                    <?php
                                                    foreach ($totalkpi21_jcal as $rows) :
                                                    ?>
                                                        <td><?php echo $rows->tot_21_unit; ?></td>
                                                    <?php endforeach; ?>
                                                    <?php
                                                    foreach ($totalkpi21_bkal as $rows) :
                                                    ?>
                                                        <td><?php echo $rows->tot_21_unit; ?></td>
                                                    <?php endforeach; ?>
                                                    <?php
                                                    foreach ($totalkpi21_keuangan as $rows) :
                                                    ?>
                                                        <td><?php echo $rows->tot_21_unit; ?></td>
                                                    <?php endforeach; ?>
                                                    <?php
                                                    foreach ($totalkpi21_khi as $rows) :
                                                    ?>
                                                        <td><?php echo $rows->tot_21_unit; ?></td>
                                                    <?php endforeach; ?>
                                                    <?php
                                                    foreach ($totalkpi21_perpustakaan as $rows) :
                                                    ?>
                                                        <td><?php echo $rows->tot_21_unit; ?></td>
                                                    <?php endforeach; ?>
                                                    <?php
                                                    foreach ($totalkpi21_pha as $rows) :
                                                    ?>
                                                        <td><?php echo $rows->tot_21_unit; ?></td>
                                                    <?php endforeach; ?>
                                                    <?php
                                                    foreach ($totalkpi21_lpmu as $rows) :
                                                    ?>
                                                        <td><?php echo $rows->tot_21_unit; ?></td>
                                                    <?php endforeach; ?>
                                                    <?php
                                                    foreach ($totalkpi21_jlp as $rows) :
                                                    ?>
                                                        <td><?php echo $rows->tot_21_unit; ?></td>
                                                    <?php endforeach; ?>
                                                    <?php
                                                    foreach ($totalkpi21_jsdp as $rows) :
                                                    ?>
                                                        <td><?php echo $rows->tot_21_unit; ?></td>
                                                    <?php endforeach; ?>
                                                    <?php
                                                    foreach ($totalkpi21_lse as $rows) :
                                                    ?>
                                                        <td><?php echo $rows->tot_21_unit; ?></td>
                                                    <?php endforeach; ?>
                                                    <?php
                                                    foreach ($totalkpi21_tik as $rows) :
                                                    ?>
                                                        <td><?php echo $rows->tot_21_unit; ?></td>
                                                    <?php endforeach; ?>
                                                    <?php
                                                    foreach ($totalkpi21_umum as $rows) :
                                                    ?>
                                                        <td><?php echo $rows->tot_21_unit; ?></td>
                                                    <?php endforeach; ?>
                                                    <?php
                                                    foreach ($totalkpi21_bpsdm as $rows) :
                                                    ?>
                                                        <td><?php echo $rows->tot_21_unit; ?></td>
                                                    <?php endforeach; ?>
                                                    <?php
                                                    foreach ($totalkpi21_lp2m as $rows) :
                                                    ?>
                                                        <td><?php echo $rows->tot_21_unit; ?></td>
                                                    <?php endforeach; ?>
                                                    <?php
                                                    foreach ($minimalkpi21_unit as $rows) :
                                                    ?>
                                                        <td><?php echo $rows->min_21_unit; ?></td>
                                                    <?php
                                                    endforeach;
                                                    ?>
                                                    <?php
                                                    foreach ($maximalkpi21_unit as $rows) :
                                                    ?>
                                                        <td><?php echo $rows->max_21_unit; ?></td>
                                                    <?php
                                                    endforeach;
                                                    ?>
                                                    <?php
                                                    foreach ($averagekpi21_unit as $rows) :
                                                    ?>
                                                        <td><?php echo $rows->avg_21_unit; ?></td>
                                                    <?php
                                                    endforeach;
                                                    ?>
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