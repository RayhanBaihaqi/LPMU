<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Grafik Capaian KPI Prodi</title>

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
                <div class="sidebar-brand-text mx-3">ADMIN</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link " href="<?php echo site_url(); ?>bpsdm">
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
                    <h1 class="h3 mb-2 text-gray-800">Grafik Capaian KPI</h1>
                    <br>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Pilih Tingkatan</label>
                        <select class="form-control" id="exampleFormControlSelect1" onchange="location = this.value;">

                            <option value="grafikprodi/" disabled selected>Prodi</option>
                            <option value="grafikunit/">Unit</option>
                        </select>
                    </div>

                    <!-- foreach ambil hasil penjumlahan nilai bobot  -->
                    <?php foreach ($hasilrencanakpi_1 as $key => $value) : $jumlah_rencana1 = $value['jumlah_rencana1'];
                    endforeach; ?>
                    <?php foreach ($hasilrencanakpi_2 as $key => $value) : $jumlah_rencana2 = $value['jumlah_rencana2'];
                    endforeach; ?>
                    <?php foreach ($hasilrencanakpi_3 as $key => $value) : $jumlah_rencana3 = $value['jumlah_rencana3'];
                    endforeach; ?>
                    <?php foreach ($hasilrencanakpi_4 as $key => $value) : $jumlah_rencana4 = $value['jumlah_rencana4'];
                    endforeach; ?>
                    <?php foreach ($hasilrencanakpi_5 as $key => $value) : $jumlah_rencana5 = $value['jumlah_rencana5'];
                    endforeach; ?>
                    <?php foreach ($hasilrencanakpi_6 as $key => $value) : $jumlah_rencana6 = $value['jumlah_rencana6'];
                    endforeach; ?>
                    <?php foreach ($hasilrencanakpi_7 as $key => $value) : $jumlah_rencana7 = $value['jumlah_rencana7'];
                    endforeach; ?>
                    <?php foreach ($hasilrencanakpi_8 as $key => $value) : $jumlah_rencana8 = $value['jumlah_rencana8'];
                    endforeach; ?>
                    <?php foreach ($hasilrencanakpi_9 as $key => $value) : $jumlah_rencana9 = $value['jumlah_rencana9'];
                    endforeach; ?>

                    <!-- foreach ambil hasil penjumlahan nilai bobot KPI per TA tiap prodi -->

                    <!-- foreach ambil hasil penjumlahan nilai bobot  -->
                    <?php foreach ($hasilrencanakpi_1 as $key => $value) : $jumlah_rencana1 = $value['jumlah_rencana1'];
                    endforeach; ?>
                    <?php foreach ($hasilrencanakpi_2 as $key => $value) : $jumlah_rencana2 = $value['jumlah_rencana2'];
                    endforeach; ?>
                    <?php foreach ($hasilrencanakpi_3 as $key => $value) : $jumlah_rencana3 = $value['jumlah_rencana3'];
                    endforeach; ?>
                    <?php foreach ($hasilrencanakpi_4 as $key => $value) : $jumlah_rencana4 = $value['jumlah_rencana4'];
                    endforeach; ?>
                    <?php foreach ($hasilrencanakpi_5 as $key => $value) : $jumlah_rencana5 = $value['jumlah_rencana5'];
                    endforeach; ?>
                    <?php foreach ($hasilrencanakpi_6 as $key => $value) : $jumlah_rencana6 = $value['jumlah_rencana6'];
                    endforeach; ?>
                    <?php foreach ($hasilrencanakpi_7 as $key => $value) : $jumlah_rencana7 = $value['jumlah_rencana7'];
                    endforeach; ?>
                    <?php foreach ($hasilrencanakpi_8 as $key => $value) : $jumlah_rencana8 = $value['jumlah_rencana8'];
                    endforeach; ?>
                    <?php foreach ($hasilrencanakpi_9 as $key => $value) : $jumlah_rencana9 = $value['jumlah_rencana9'];
                    endforeach; ?>

                    <!-- foreach ambil hasil penjumlahan nilai bobot KPI per TA tiap prodi -->

                    <!-- foreach ambil hasil penjumlahan nilai bobot KPI per TA akuntansi -->
                    <?php foreach ($totalkpi19_akt as $key => $value) : $tot_19_akt = $value['tot_19_prodi'];
                    endforeach; ?>
                    <?php foreach ($totalkpi20_akt as $key => $value) : $tot_20_akt = $value['tot_20_prodi'];
                    endforeach; ?>
                    <?php foreach ($totalkpi21_akt as $key => $value) : $tot_21_akt = $value['tot_21_prodi'];
                    endforeach; ?>

                    <!-- foreach ambil hasil penjumlahan nilai bobot KPI per TA manajemen -->
                    <?php foreach ($totalkpi19_mnj as $key => $value) : $tot_19_mnj = $value['tot_19_prodi'];
                    endforeach; ?>
                    <?php foreach ($totalkpi20_mnj as $key => $value) : $tot_20_mnj = $value['tot_20_prodi'];
                    endforeach; ?>
                    <?php foreach ($totalkpi21_mnj as $key => $value) : $tot_21_mnj = $value['tot_21_prodi'];
                    endforeach; ?>

                    <!-- foreach ambil hasil penjumlahan nilai bobot KPI per TA psikologi -->
                    <?php foreach ($totalkpi19_psi as $key => $value) : $tot_19_psi = $value['tot_19_prodi'];
                    endforeach; ?>
                    <?php foreach ($totalkpi20_psi as $key => $value) : $tot_20_psi = $value['tot_20_prodi'];
                    endforeach; ?>
                    <?php foreach ($totalkpi21_psi as $key => $value) : $tot_21_psi = $value['tot_21_prodi'];
                    endforeach; ?>

                    <!-- foreach ambil hasil penjumlahan nilai bobot KPI per TA ilkom -->
                    <?php foreach ($totalkpi19_kom as $key => $value) : $tot_19_kom = $value['tot_19_prodi'];
                    endforeach; ?>
                    <?php foreach ($totalkpi20_kom as $key => $value) : $tot_20_kom = $value['tot_20_prodi'];
                    endforeach; ?>
                    <?php foreach ($totalkpi21_kom as $key => $value) : $tot_21_kom = $value['tot_21_prodi'];
                    endforeach; ?>

                    <!-- foreach ambil hasil penjumlahan nilai bobot KPI per TA desain produk -->
                    <?php foreach ($totalkpi19_dpi as $key => $value) : $tot_19_dpi = $value['tot_19_prodi'];
                    endforeach; ?>
                    <?php foreach ($totalkpi20_dpi as $key => $value) : $tot_20_dpi = $value['tot_20_prodi'];
                    endforeach; ?>
                    <?php foreach ($totalkpi21_dpi as $key => $value) : $tot_21_dpi = $value['tot_21_prodi'];
                    endforeach; ?>

                    <!-- foreach ambil hasil penjumlahan nilai bobot KPI per TA dkv -->
                    <?php foreach ($totalkpi19_dkv as $key => $value) : $tot_19_dkv = $value['tot_19_prodi'];
                    endforeach; ?>
                    <?php foreach ($totalkpi20_dkv as $key => $value) : $tot_20_dkv = $value['tot_20_prodi'];
                    endforeach; ?>
                    <?php foreach ($totalkpi21_dkv as $key => $value) : $tot_21_dkv = $value['tot_21_prodi'];
                    endforeach; ?>

                    <!-- foreach ambil hasil penjumlahan nilai bobot KPI per TA Informatika -->
                    <?php foreach ($totalkpi19_inf as $key => $value) : $tot_19_inf = $value['tot_19_prodi'];
                    endforeach; ?>
                    <?php foreach ($totalkpi20_inf as $key => $value) : $tot_20_inf = $value['tot_20_prodi'];
                    endforeach; ?>
                    <?php foreach ($totalkpi21_inf as $key => $value) : $tot_21_inf = $value['tot_21_prodi'];
                    endforeach; ?>

                    <!-- foreach ambil hasil penjumlahan nilai bobot KPI per TA Sistem Informasi -->
                    <?php foreach ($totalkpi19_sif as $key => $value) : $tot_19_sif = $value['tot_19_prodi'];
                    endforeach; ?>
                    <?php foreach ($totalkpi20_sif as $key => $value) : $tot_20_sif = $value['tot_20_prodi'];
                    endforeach; ?>
                    <?php foreach ($totalkpi21_sif as $key => $value) : $tot_21_sif = $value['tot_21_prodi'];
                    endforeach; ?>

                    <!-- foreach ambil hasil penjumlahan nilai bobot KPI per TA Teknik Sipil -->
                    <?php foreach ($totalkpi19_tsp as $key => $value) : $tot_19_tsp = $value['tot_19_prodi'];
                    endforeach; ?>
                    <?php foreach ($totalkpi20_tsp as $key => $value) : $tot_20_tsp = $value['tot_20_prodi'];
                    endforeach; ?>
                    <?php foreach ($totalkpi21_tsp as $key => $value) : $tot_21_tsp = $value['tot_21_prodi'];
                    endforeach; ?>

                    <!-- foreach ambil hasil penjumlahan nilai bobot KPI per TA Arsitektur -->
                    <?php foreach ($totalkpi19_ars as $key => $value) : $tot_19_ars = $value['tot_19_prodi'];
                    endforeach; ?>
                    <?php foreach ($totalkpi20_ars as $key => $value) : $tot_20_ars = $value['tot_20_prodi'];
                    endforeach; ?>
                    <?php foreach ($totalkpi21_ars as $key => $value) : $tot_21_ars = $value['tot_21_prodi'];
                    endforeach; ?>

                    <div class="container col-lg-12">
                        <section class="content">
                            <!-- BAR CHART -->
                            <!-- <div class="card card-success">
                                <div class="card-header">
                                    <h3 class="card-title">Grafik Rencana KPI</h3>
                                </div>
                                <div class="card-body">
                                    <div class="chart">
                                        <canvas id="myChart" height="100"></canvas>
                                    </div>
                                </div>
                            </div> -->
                            <br>
                            <!-- /.card-body -->
                            <div class="card card-success">
                                <div class="card-header">
                                    <h3 class="card-title">Grafik Capaian Prodi</h3>
                                </div>
                                <div class="card-body">
                                    <div class="chart">
                                        <canvas id="ChartProdi" height="100"></canvas>
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
<script>
    // const ctx = document.getElementById('myChart');
    // const myChart = new Chart(ctx, {
    //     type: 'bar',
    //     data: {
    //         labels: ['Standar 1', 'Standar 2', 'Standar 3', 'Standar 4', 'Standar 5', 'Standar 6', 'Standar 7', 'Standar 8', 'Standar 9'],
    //         datasets: [
    //             //Data Batang Grafik Standar 1
    //             {
    //                 label: 'Total bobot rencana',
    //                 backgroundColor: 'rgba(60,141,188,0.9)',
    //                 borderColor: 'rgba(60,141,188,0.8)',
    //                 pointRadius: false,
    //                 pointColor: '#3b8bba',
    //                 pointStrokeColor: 'rgba(60,141,188,1)',
    //                 pointHighlightFill: '#fff',
    //                 pointHighlightStroke: 'rgba(60,141,188,1)',
    //                 data: [<?php echo json_encode($jumlah_rencana1) ?>, <?php echo json_encode($jumlah_rencana2) ?>, <?php echo json_encode($jumlah_rencana3) ?>, <?php echo json_encode($jumlah_rencana4) ?>, <?php echo json_encode($jumlah_rencana5) ?>, <?php echo json_encode($jumlah_rencana6) ?>, <?php echo json_encode($jumlah_rencana7) ?>, <?php echo json_encode($jumlah_rencana8) ?>, <?php echo json_encode($jumlah_rencana9) ?>]

    //             },

    //         ]
    //     },
    //     options: {
    //         responsive: true,
    //         legend: {
    //             position: 'top',
    //         },
    //         hover: {
    //             mode: 'label'
    //         },
    //         scales: {
    //             xAxes: [{
    //                 display: true,
    //                 scaleLabel: {
    //                     display: true,

    //                 }
    //             }],
    //             yAxes: [{
    //                 display: true,
    //                 ticks: {
    //                     beginAtZero: true,
    //                     steps: 10,
    //                     stepValue: 5,

    //                 }
    //             }]
    //         },
    //     }
    // });

    const ctx2 = document.getElementById('ChartProdi');
    const ChartProdi = new Chart(ctx2, {
        type: 'bar',
        data: {
            labels: ['Akuntansi', 'Manajemen', 'Psikologi', 'Ilmu Komunikasi', 'Desain Produk', 'Desain Komunikasi Visual', 'Informatika', 'Sistem Informasi', 'Teknik Sipil', 'Arsitektur'],
            datasets: [
                //Data Batang Grafik Standar 1



                // },
                {
                    label: '2019/2020',
                    backgroundColor: 'rgba(255, 165, 0, 1)',
                    borderColor: 'rgba(255, 165, 0, 1)',
                    pointRadius: false,
                    pointColor: '#3b8bba',
                    pointStrokeColor: 'rgba(60,141,188,1)',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    data: [<?php echo json_encode($tot_19_akt) ?>, <?php echo json_encode($tot_19_mnj) ?>, <?php echo json_encode($tot_19_psi) ?>, <?php echo json_encode($tot_19_kom) ?>, <?php echo json_encode($tot_19_dpi) ?>, <?php echo json_encode($tot_19_dkv) ?>, <?php echo json_encode($tot_19_inf) ?>, <?php echo json_encode($tot_19_sif) ?>, <?php echo json_encode($tot_19_tsp) ?>, <?php echo json_encode($tot_19_ars) ?>]


                },
                {
                    label: '2020/2021',
                    backgroundColor: 'rgba(93, 255, 223,1)',
                    borderColor: 'rgba(93, 255, 223,1)',
                    pointRadius: false,
                    pointColor: '#3b8bba',
                    pointStrokeColor: 'rgba(60,141,188,1)',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    data: [<?php echo json_encode($tot_20_akt) ?>, <?php echo json_encode($tot_20_mnj) ?>, <?php echo json_encode($tot_20_psi) ?>, <?php echo json_encode($tot_20_kom) ?>, <?php echo json_encode($tot_20_dpi) ?>, <?php echo json_encode($tot_20_dkv) ?>, <?php echo json_encode($tot_20_inf) ?>, <?php echo json_encode($tot_20_sif) ?>, <?php echo json_encode($tot_20_tsp) ?>, <?php echo json_encode($tot_20_ars) ?>]

                },
                {
                    label: '2021/2022',
                    backgroundColor: 'rgba(93, 78, 246,1)',
                    borderColor: 'rgba(93, 78, 246,1)',
                    pointRadius: false,
                    pointColor: '#3b8bba',
                    pointStrokeColor: 'rgba(60,141,188,1)',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    data: [<?php echo json_encode($tot_21_akt) ?>, <?php echo json_encode($tot_21_mnj) ?>, <?php echo json_encode($tot_21_psi) ?>, <?php echo json_encode($tot_21_kom) ?>, <?php echo json_encode($tot_21_dpi) ?>, <?php echo json_encode($tot_21_dkv) ?>, <?php echo json_encode($tot_21_inf) ?>, <?php echo json_encode($tot_21_sif) ?>, <?php echo json_encode($tot_21_tsp) ?>, <?php echo json_encode($tot_21_ars) ?>]

                },


            ]
        },
        options: {
            responsive: true,
            legend: {
                position: 'top',
            },
            hover: {
                mode: 'label'
            },
            scales: {
                xAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,

                    }
                }],
                yAxes: [{
                    display: true,
                    ticks: {
                        beginAtZero: true,
                        steps: 10,
                        stepValue: 5,

                    }
                }]
            },
        }
    });
</script>

</html>