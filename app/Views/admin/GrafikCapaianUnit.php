<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Grafik Capaian KPI Unit</title>

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
						<a class="collapse-item" href="<?= base_url('pagurkat/index') ?>">List Data Pagu</a>
						<a class="collapse-item" href="<?= base_url('tahunakademik/indextahun') ?>">Tahun Akademik</a>
						<a class="collapse-item" href="<?= base_url('admin/grafikSerapProdi') ?>">Grafik Capaian Prodi</a>
                        <a class="collapse-item" href="<?= base_url('admin/grafikSerapUnit') ?>">Grafik Capaian Unit</a>
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
                            <option value="grafikunit/" disabled selected>Unit</option>
                            <option value="grafikprodi/">Prodi</option>


                        </select>
                    </div>
                    <?php foreach ($totalkpi19_bp as $key => $value) : $tot_19_bp = $value['tot_19_unit'];
                    endforeach; ?>
                    <?php foreach ($totalkpi20_bp as $key => $value) : $tot_20_bp = $value['tot_20_unit'];
                    endforeach; ?>
                    <?php foreach ($totalkpi21_bp as $key => $value) : $tot_21_bp = $value['tot_21_unit'];
                    endforeach; ?>

                    <?php foreach ($totalkpi19_jcal as $key => $value) : $tot_19_jcal = $value['tot_19_unit'];
                    endforeach; ?>
                    <?php foreach ($totalkpi20_jcal as $key => $value) : $tot_20_jcal = $value['tot_20_unit'];
                    endforeach; ?>
                    <?php foreach ($totalkpi21_jcal as $key => $value) : $tot_21_jcal = $value['tot_21_unit'];
                    endforeach; ?>

                    <?php foreach ($totalkpi19_bkal as $key => $value) : $tot_19_bkal = $value['tot_19_unit'];
                    endforeach; ?>
                    <?php foreach ($totalkpi20_bkal as $key => $value) : $tot_20_bkal = $value['tot_20_unit'];
                    endforeach; ?>
                    <?php foreach ($totalkpi21_bkal as $key => $value) : $tot_21_bkal = $value['tot_21_unit'];
                    endforeach; ?>

                    <?php foreach ($totalkpi19_keuangan as $key => $value) : $tot_19_keuangan = $value['tot_19_unit'];
                    endforeach; ?>
                    <?php foreach ($totalkpi20_keuangan as $key => $value) : $tot_20_keuangan = $value['tot_20_unit'];
                    endforeach; ?>
                    <?php foreach ($totalkpi21_keuangan as $key => $value) : $tot_21_keuangan = $value['tot_21_unit'];
                    endforeach; ?>

                    <?php foreach ($totalkpi19_khi as $key => $value) : $tot_19_khi = $value['tot_19_unit'];
                    endforeach; ?>
                    <?php foreach ($totalkpi20_khi as $key => $value) : $tot_20_khi = $value['tot_20_unit'];
                    endforeach; ?>
                    <?php foreach ($totalkpi21_khi as $key => $value) : $tot_21_khi = $value['tot_21_unit'];
                    endforeach; ?>

                    <?php foreach ($totalkpi19_perpustakaan as $key => $value) : $tot_19_perpustakaan = $value['tot_19_unit'];
                    endforeach; ?>
                    <?php foreach ($totalkpi20_perpustakaan as $key => $value) : $tot_20_perpustakaan = $value['tot_20_unit'];
                    endforeach; ?>
                    <?php foreach ($totalkpi21_perpustakaan as $key => $value) : $tot_21_perpustakaan = $value['tot_21_unit'];
                    endforeach; ?>

                    <?php foreach ($totalkpi19_pha as $key => $value) : $tot_19_pha = $value['tot_19_unit'];
                    endforeach; ?>
                    <?php foreach ($totalkpi20_pha as $key => $value) : $tot_20_pha = $value['tot_20_unit'];
                    endforeach; ?>
                    <?php foreach ($totalkpi21_pha as $key => $value) : $tot_21_pha = $value['tot_21_unit'];
                    endforeach; ?>

                    <?php foreach ($totalkpi19_lpmu as $key => $value) : $tot_19_lpmu = $value['tot_19_unit'];
                    endforeach; ?>
                    <?php foreach ($totalkpi20_lpmu as $key => $value) : $tot_20_lpmu = $value['tot_20_unit'];
                    endforeach; ?>
                    <?php foreach ($totalkpi21_lpmu as $key => $value) : $tot_21_lpmu = $value['tot_21_unit'];
                    endforeach; ?>

                    <?php foreach ($totalkpi19_jlp as $key => $value) : $tot_19_jlp = $value['tot_19_unit'];
                    endforeach; ?>
                    <?php foreach ($totalkpi20_jlp as $key => $value) : $tot_20_jlp = $value['tot_20_unit'];
                    endforeach; ?>
                    <?php foreach ($totalkpi21_jlp as $key => $value) : $tot_21_jlp = $value['tot_21_unit'];
                    endforeach; ?>

                    <?php foreach ($totalkpi19_jsdp as $key => $value) : $tot_19_jsdp = $value['tot_19_unit'];
                    endforeach; ?>
                    <?php foreach ($totalkpi20_jsdp as $key => $value) : $tot_20_jsdp = $value['tot_20_unit'];
                    endforeach; ?>
                    <?php foreach ($totalkpi21_jsdp as $key => $value) : $tot_21_jsdp = $value['tot_21_unit'];
                    endforeach; ?>

                    <?php foreach ($totalkpi19_lse as $key => $value) : $tot_19_lse = $value['tot_19_unit'];
                    endforeach; ?>
                    <?php foreach ($totalkpi20_lse as $key => $value) : $tot_20_lse = $value['tot_20_unit'];
                    endforeach; ?>
                    <?php foreach ($totalkpi21_lse as $key => $value) : $tot_21_lse = $value['tot_21_unit'];
                    endforeach; ?>

                    <?php foreach ($totalkpi19_tik as $key => $value) : $tot_19_tik = $value['tot_19_unit'];
                    endforeach; ?>
                    <?php foreach ($totalkpi20_tik as $key => $value) : $tot_20_tik = $value['tot_20_unit'];
                    endforeach; ?>
                    <?php foreach ($totalkpi21_tik as $key => $value) : $tot_21_tik = $value['tot_21_unit'];
                    endforeach; ?>

                    <?php foreach ($totalkpi19_umum as $key => $value) : $tot_19_umum = $value['tot_19_unit'];
                    endforeach; ?>
                    <?php foreach ($totalkpi20_umum as $key => $value) : $tot_20_umum = $value['tot_20_unit'];
                    endforeach; ?>
                    <?php foreach ($totalkpi21_umum as $key => $value) : $tot_21_umum = $value['tot_21_unit'];
                    endforeach; ?>

                    <?php foreach ($totalkpi19_bpsdm as $key => $value) : $tot_19_bpsdm = $value['tot_19_unit'];
                    endforeach; ?>
                    <?php foreach ($totalkpi20_bpsdm as $key => $value) : $tot_20_bpsdm = $value['tot_20_unit'];
                    endforeach; ?>
                    <?php foreach ($totalkpi21_bpsdm as $key => $value) : $tot_21_bpsdm = $value['tot_21_unit'];
                    endforeach; ?>

                    <?php foreach ($totalkpi19_lp2m as $key => $value) : $tot_19_lp2m = $value['tot_19_unit'];
                    endforeach; ?>
                    <?php foreach ($totalkpi20_lp2m as $key => $value) : $tot_20_lp2m = $value['tot_20_unit'];
                    endforeach; ?>
                    <?php foreach ($totalkpi21_lp2m as $key => $value) : $tot_21_lp2m = $value['tot_21_unit'];
                    endforeach; ?>

                    <div class="container col-lg-12">
                        <section class="content">

                            <div class="card card-success">
                                <div class="card-header">
                                    <h3 class="card-title">Grafik Capaian Unit</h3>
                                </div>
                                <div class="card-body">
                                    <div class="chart">
                                        <canvas id="ChartUnit" height="100"></canvas>
                                    </div>
                                </div>
                            </div>
                        </section>
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
    const ctx = document.getElementById('ChartUnit');
    const ChartUnit = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['BP', 'JCAL', 'BKAL', 'Keuangan', 'KHI', 'Perpustakaan', 'PHA', 'LPMU', 'JLP', 'JSDP', 'LSE', 'TIK', 'Umum', 'BPSDM', 'LP2M'],
            datasets: [

                {
                    label: '2019/2020',
                    backgroundColor: 'rgba(255, 165, 0, 1)',
                    borderColor: 'rgba(255, 165, 0, 1)',
                    pointRadius: false,
                    pointColor: '#3b8bba',
                    pointStrokeColor: 'rgba(60,141,188,1)',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    data: [<?php echo json_encode($tot_19_bp) ?>, <?php echo json_encode($tot_19_jcal) ?>, <?php echo json_encode($tot_19_bkal) ?>, <?php echo json_encode($tot_19_keuangan) ?>, <?php echo json_encode($tot_19_khi) ?>, <?php echo json_encode($tot_19_perpustakaan) ?>, <?php echo json_encode($tot_19_pha) ?>, <?php echo json_encode($tot_19_lpmu) ?>, <?php echo json_encode($tot_19_jlp) ?>, <?php echo json_encode($tot_19_jsdp) ?>, <?php echo json_encode($tot_19_lse) ?>, <?php echo json_encode($tot_19_tik) ?>, <?php echo json_encode($tot_19_umum) ?>, <?php echo json_encode($tot_19_bpsdm) ?>, <?php echo json_encode($tot_19_lp2m) ?>]


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
                    data: [<?php echo json_encode($tot_20_bp) ?>, <?php echo json_encode($tot_20_jcal) ?>, <?php echo json_encode($tot_20_bkal) ?>, <?php echo json_encode($tot_20_keuangan) ?>, <?php echo json_encode($tot_20_khi) ?>, <?php echo json_encode($tot_20_perpustakaan) ?>, <?php echo json_encode($tot_20_pha) ?>, <?php echo json_encode($tot_20_lpmu) ?>, <?php echo json_encode($tot_20_jlp) ?>, <?php echo json_encode($tot_20_jsdp) ?>, <?php echo json_encode($tot_20_lse) ?>, <?php echo json_encode($tot_20_tik) ?>, <?php echo json_encode($tot_20_umum) ?>, <?php echo json_encode($tot_20_bpsdm) ?>, <?php echo json_encode($tot_20_lp2m) ?>]

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
                    data: [<?php echo json_encode($tot_21_bp) ?>, <?php echo json_encode($tot_21_jcal) ?>, <?php echo json_encode($tot_21_bkal) ?>, <?php echo json_encode($tot_21_keuangan) ?>, <?php echo json_encode($tot_21_khi) ?>, <?php echo json_encode($tot_21_perpustakaan) ?>, <?php echo json_encode($tot_21_pha) ?>, <?php echo json_encode($tot_21_lpmu) ?>, <?php echo json_encode($tot_21_jlp) ?>, <?php echo json_encode($tot_21_jsdp) ?>, <?php echo json_encode($tot_21_lse) ?>, <?php echo json_encode($tot_21_tik) ?>, <?php echo json_encode($tot_21_umum) ?>, <?php echo json_encode($tot_21_bpsdm) ?>, <?php echo json_encode($tot_21_lp2m) ?>]

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