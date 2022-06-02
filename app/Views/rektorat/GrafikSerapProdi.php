<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Grafik Serap</title>

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
                <div class="sidebar-brand-text mx-3">Rektorat</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
			<li class="nav-item">
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
						<a class="collapse-item" href="<?= base_url('/rektorat/grafikSerapProdi') ?>">Grafik Capaian Prodi</a>
						<a class="collapse-item" href="<?= base_url('/rektorat/grafikSerapUnit') ?>">Grafik Capaian Unit</a>
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
                        <a class="collapse-item" href="<?= base_url('/rektorat/listcapaiankpi') ?>">Lihat Capaian</a>
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
                    <h1 class="h3 mb-2 text-gray-800">Grafik Capaian Prodi</h1>
                    <br>

                    <div class="container col-lg-12">
                        <section class="content">
                            <div class="card card-success">
                                <div class="card-body">
                                    <div class="chart">
                                    <label>Data Capaian PK+OPS</label>
                                    <canvas id="ChartProdiPkOps" height="100"></canvas>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="container col-lg-12">
                        <section class="content">
                            <div class="card card-success">
                                <div class="card-body">
                                    <div class="chart">
                                    <label>Data Capaian INV</label>
                                    <canvas id="ChartProdiInv" height="100"></canvas>
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
        const ctx2 = document.getElementById('ChartProdiPkOps');
        const ChartProdi = new Chart(ctx2, {
            type: 'bar',
            data: {
                labels: ['Akuntansi', 'Manajemen', 'Psikologi', 'Ilmu Komunikasi', 'Desain Produk', 'Desain Komunikasi Visual', 'Informatika', 'Sistem Informasi', 'Teknik Sipil', 'Arsitektur'],
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
                        data: [
                            <?php foreach ($dataProdiAkt1920 as $key => $reading) : ?><?= $reading['persenPkOps'] ?><?php endforeach; ?>,
                            <?php foreach ($dataProdiMan1920 as $key => $reading) : ?><?= $reading['persenPkOps'] ?><?php endforeach; ?>, 
                            <?php foreach ($dataProdiPsi1920 as $key => $reading) : ?><?= $reading['persenPkOps'] ?><?php endforeach; ?>,
                            <?php foreach ($dataProdiKom1920 as $key => $reading) : ?><?= $reading['persenPkOps'] ?><?php endforeach; ?>, 
                            <?php foreach ($dataProdiDp1920 as $key => $reading) : ?><?= $reading['persenPkOps'] ?><?php endforeach; ?>,
                            <?php foreach ($dataProdiDkv1920 as $key => $reading) : ?><?= $reading['persenPkOps'] ?><?php endforeach; ?>, 
                            <?php foreach ($dataProdiInf1920 as $key => $reading) : ?><?= $reading['persenPkOps'] ?><?php endforeach; ?>, 
                            <?php foreach ($dataProdiSif1920 as $key => $reading) : ?><?= $reading['persenPkOps'] ?><?php endforeach; ?>, 
                            <?php foreach ($dataProdiTsp1920 as $key => $reading) : ?><?= $reading['persenPkOps'] ?><?php endforeach; ?>,
                            <?php foreach ($dataProdiArs1920 as $key => $reading) : ?><?= $reading['persenPkOps'] ?><?php endforeach; ?> 
                        ]


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
                        data: [
                            <?php foreach ($dataProdiAkt2021 as $key => $reading) : ?><?= $reading['persenPkOps'] ?><?php endforeach; ?>,
                            <?php foreach ($dataProdiMan2021 as $key => $reading) : ?><?= $reading['persenPkOps'] ?><?php endforeach; ?>, 
                            <?php foreach ($dataProdiPsi2021 as $key => $reading) : ?><?= $reading['persenPkOps'] ?><?php endforeach; ?>,
                            <?php foreach ($dataProdiKom2021 as $key => $reading) : ?><?= $reading['persenPkOps'] ?><?php endforeach; ?>, 
                            <?php foreach ($dataProdiDp2021 as $key => $reading) : ?><?= $reading['persenPkOps'] ?><?php endforeach; ?>,
                            <?php foreach ($dataProdiDkv2021 as $key => $reading) : ?><?= $reading['persenPkOps'] ?><?php endforeach; ?>, 
                            <?php foreach ($dataProdiInf2021 as $key => $reading) : ?><?= $reading['persenPkOps'] ?><?php endforeach; ?>, 
                            <?php foreach ($dataProdiSif2021 as $key => $reading) : ?><?= $reading['persenPkOps'] ?><?php endforeach; ?>, 
                            <?php foreach ($dataProdiTsp2021 as $key => $reading) : ?><?= $reading['persenPkOps'] ?><?php endforeach; ?>,
                            <?php foreach ($dataProdiArs2021 as $key => $reading) : ?><?= $reading['persenPkOps'] ?><?php endforeach; ?>  
                        ]

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
                        data: [
                            <?php foreach ($dataProdiAkt2122 as $key => $reading) : ?><?= $reading['persenPkOps'] ?><?php endforeach; ?>,
                            <?php foreach ($dataProdiMan2122 as $key => $reading) : ?><?= $reading['persenPkOps'] ?><?php endforeach; ?>, 
                            <?php foreach ($dataProdiPsi2122 as $key => $reading) : ?><?= $reading['persenPkOps'] ?><?php endforeach; ?>,
                            <?php foreach ($dataProdiKom2122 as $key => $reading) : ?><?= $reading['persenPkOps'] ?><?php endforeach; ?>, 
                            <?php foreach ($dataProdiDp2122 as $key => $reading) : ?><?= $reading['persenPkOps'] ?><?php endforeach; ?>,
                            <?php foreach ($dataProdiDkv2122 as $key => $reading) : ?><?= $reading['persenPkOps'] ?><?php endforeach; ?>, 
                            <?php foreach ($dataProdiInf2122 as $key => $reading) : ?><?= $reading['persenPkOps'] ?><?php endforeach; ?>, 
                            <?php foreach ($dataProdiSif2122 as $key => $reading) : ?><?= $reading['persenPkOps'] ?><?php endforeach; ?>, 
                            <?php foreach ($dataProdiTsp2122 as $key => $reading) : ?><?= $reading['persenPkOps'] ?><?php endforeach; ?>,
                            <?php foreach ($dataProdiArs2122 as $key => $reading) : ?><?= $reading['persenPkOps'] ?><?php endforeach; ?> 
                        ]
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
    <script>
        const ctx1 = document.getElementById('ChartProdiInv');
        const ChartProdiInv = new Chart(ctx1, {
            type: 'bar',
            data: {
                labels: ['Akuntansi', 'Manajemen', 'Psikologi', 'Ilmu Komunikasi', 'Desain Produk', 'Desain Komunikasi Visual', 'Informatika', 'Sistem Informasi', 'Teknik Sipil', 'Arsitektur'],
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
                        data: [
                            <?php foreach ($dataProdiAkt1920 as $key => $reading) : ?><?= $reading['persenInv'] ?><?php endforeach; ?>,
                            <?php foreach ($dataProdiMan1920 as $key => $reading) : ?><?= $reading['persenInv'] ?><?php endforeach; ?>, 
                            <?php foreach ($dataProdiPsi1920 as $key => $reading) : ?><?= $reading['persenInv'] ?><?php endforeach; ?>,
                            <?php foreach ($dataProdiKom1920 as $key => $reading) : ?><?= $reading['persenInv'] ?><?php endforeach; ?>, 
                            <?php foreach ($dataProdiDp1920 as $key => $reading) : ?><?= $reading['persenInv'] ?><?php endforeach; ?>,
                            <?php foreach ($dataProdiDkv1920 as $key => $reading) : ?><?= $reading['persenInv'] ?><?php endforeach; ?>, 
                            <?php foreach ($dataProdiInf1920 as $key => $reading) : ?><?= $reading['persenInv'] ?><?php endforeach; ?>, 
                            <?php foreach ($dataProdiSif1920 as $key => $reading) : ?><?= $reading['persenInv'] ?><?php endforeach; ?>, 
                            <?php foreach ($dataProdiTsp1920 as $key => $reading) : ?><?= $reading['persenInv'] ?><?php endforeach; ?>,
                            <?php foreach ($dataProdiArs1920 as $key => $reading) : ?><?= $reading['persenInv'] ?><?php endforeach; ?> 
                        ]


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
                        data: [
                            <?php foreach ($dataProdiAkt2021 as $key => $reading) : ?><?= $reading['persenInv'] ?><?php endforeach; ?>,
                            <?php foreach ($dataProdiMan2021 as $key => $reading) : ?><?= $reading['persenInv'] ?><?php endforeach; ?>, 
                            <?php foreach ($dataProdiPsi2021 as $key => $reading) : ?><?= $reading['persenInv'] ?><?php endforeach; ?>,
                            <?php foreach ($dataProdiKom2021 as $key => $reading) : ?><?= $reading['persenInv'] ?><?php endforeach; ?>, 
                            <?php foreach ($dataProdiDp2021 as $key => $reading) : ?><?= $reading['persenInv'] ?><?php endforeach; ?>,
                            <?php foreach ($dataProdiDkv2021 as $key => $reading) : ?><?= $reading['persenInv'] ?><?php endforeach; ?>, 
                            <?php foreach ($dataProdiInf2021 as $key => $reading) : ?><?= $reading['persenInv'] ?><?php endforeach; ?>, 
                            <?php foreach ($dataProdiSif2021 as $key => $reading) : ?><?= $reading['persenInv'] ?><?php endforeach; ?>, 
                            <?php foreach ($dataProdiTsp2021 as $key => $reading) : ?><?= $reading['persenInv'] ?><?php endforeach; ?>,
                            <?php foreach ($dataProdiArs2021 as $key => $reading) : ?><?= $reading['persenInv'] ?><?php endforeach; ?>  
                        ]

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
                        data: [
                            <?php foreach ($dataProdiAkt2122 as $key => $reading) : ?><?= $reading['persenOps'] ?><?php endforeach; ?>,
                            <?php foreach ($dataProdiMan2122 as $key => $reading) : ?><?= $reading['persenOps'] ?><?php endforeach; ?>, 
                            <?php foreach ($dataProdiPsi2122 as $key => $reading) : ?><?= $reading['persenOps'] ?><?php endforeach; ?>,
                            <?php foreach ($dataProdiKom2122 as $key => $reading) : ?><?= $reading['persenOps'] ?><?php endforeach; ?>, 
                            <?php foreach ($dataProdiDp2122 as $key => $reading) : ?><?= $reading['persenOps'] ?><?php endforeach; ?>,
                            <?php foreach ($dataProdiDkv2122 as $key => $reading) : ?><?= $reading['persenOps'] ?><?php endforeach; ?>, 
                            <?php foreach ($dataProdiInf2122 as $key => $reading) : ?><?= $reading['persenOps'] ?><?php endforeach; ?>, 
                            <?php foreach ($dataProdiSif2122 as $key => $reading) : ?><?= $reading['persenOps'] ?><?php endforeach; ?>, 
                            <?php foreach ($dataProdiTsp2122 as $key => $reading) : ?><?= $reading['persenOps'] ?><?php endforeach; ?>,
                            <?php foreach ($dataProdiArs2122 as $key => $reading) : ?><?= $reading['persenOps'] ?><?php endforeach; ?> 
                        ]
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