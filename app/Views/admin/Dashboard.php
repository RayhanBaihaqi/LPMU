<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Grafik Capaian KPI</title>

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
			<li class="nav-item">
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

			<!-- Heading -->
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
						<div class="col">
							<div class="card border-left-primary shadow h-100 py-2">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="h3  font-weight-bold text-primary text-uppercase mb-1">
												SELAMAT DATANG</div>
											<br>
											<div class="mb-0  col mr-2 text-gray-800 text-justify">Saat ini anda login sebagai admin. Disini, admin bisa melihat data-data dari KPI dan RKAT yang telah dicapai oleh tiap unit dan program studi di Universitas Pembangunan Jaya. Selain itu, admin bisa juga menambah user, kategori KPI beserta butir KPI.</div>
										</div>

										<div class="col-auto">
											<img src="<?php echo base_url(); ?>/public/img/monev_logo.png" alt="Logo" style="width: 150px; height: 150px;">

										</div>
									</div>
								</div>
							</div>
						</div>
                    <div class="row" style="margin: 15px auto;">
						<div class="col-md-6">
							<div class="card-box pd-30 height-100-p">
								<div class="card ">
									<div class="card-header bg-info text-white">Rata-Rata Capaian PK+OPS PROGRAM STUDI</div>
									<div class="card-body">
                                        <canvas id="SerapProdiPkOps" height="100"></canvas>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="card-box pd-30 height-100-p">
								<div class="card ">
									<div class="card-header bg-info text-white">Rata-Rata Capaian INV PROGRAM STUDI</div>
									<div class="card-body">
                                    <canvas id="SerapProdiInv" height="100"></canvas>
									</div>
								</div>
							</div>
						</div>
					</div>
                    <div class="row" style="margin: 15px auto;">
						<div class="col-md-6">
							<div class="card-box pd-30 height-100-p">
								<div class="card ">
									<div class="card-header bg-info text-white">Rata-Rata Capaian PK+OPS UNIT KERJA</div>
									<div class="card-body">
                                        <canvas id="SerapUnitPkOps" height="100"></canvas>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="card-box pd-30 height-100-p">
								<div class="card ">
									<div class="card-header bg-info text-white">Rata-Rata Capaian INV UNIT KERJA</div>
									<div class="card-body">
                                    <canvas id="SerapUnitInv" height="100"></canvas>
									</div>
								</div>
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
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
			<!-- Grafik Persentase capaian -->
			<script type="text/javascript">
				google.charts.load('current', {
					'packages': ['bar']
				});
				google.charts.setOnLoadCallback(drawChart);

				function drawChart() {
					var data = google.visualization.arrayToDataTable([
						['Tahun', 'Persen PK & OPS(%)', 'Persen INV(%)'],
						<?php
						foreach ($tahun as $key => $reading) : ?>['<?= $reading['tahunAkademik'] ?>', <?= $reading['persenPkOps'] ?>, <?= $reading['persenInv'] ?>],
						<?php endforeach; ?>
					]);

					var options = {
						chart: {
							title: 'Data Prodi/Unit : <?php $nama_prodi = session('nama_prodi'); echo "$nama_prodi" ?>',
							subtitle: '',
						},
						bars: 'horizontal' // Required for Material Bar Charts.
					};

					var chart = new google.charts.Bar(document.getElementById('capaian_persen_pk'));

					chart.draw(data, google.charts.Bar.convertOptions(options));
				}
			</script>
			<script type="text/javascript">
				google.charts.load('current', {
					'packages': ['bar']
				});
				google.charts.setOnLoadCallback(drawChart);

				function drawChart() {
					var data = google.visualization.arrayToDataTable([
						['Tahun', 'Persen PK & OPS(%)', 'Persen INV(%)'],
						<?php
						foreach ($tahunAktif as $key => $reading) : ?>['<?= $reading['tahunAkademik'] ?>', <?= $reading['persenPkOps'] ?>, <?= $reading['persenInv'] ?>],
						<?php endforeach; ?>
					]);

					var options = {
						chart: {
							title: 'Periode Tahun : <?= $tahunAkademik['tahunAkademik'] ?>',
							subtitle: '',
						},
						bars: 'horizontal' // Required for Material Bar Charts.
					};

					var chart = new google.charts.Bar(document.getElementById('capaian_persen_ops'));

					chart.draw(data, google.charts.Bar.convertOptions(options));
				}
			</script>
			<script type="text/javascript">
				google.charts.load('current', {
					'packages': ['bar']
				});
				google.charts.setOnLoadCallback(drawChart);

				function drawChart() {
					var data = google.visualization.arrayToDataTable([
						['Prodi/Unit', 'Tahun', 'PK & OPS (%)', 'INV (%)'],
						<?php
						foreach ($seluruhDatauser as $key => $reading) : ?>['<?= $reading['nama_prodi'] ?>', '<?= $reading['tahunAkademik'] ?>', <?= $reading['persenPkOps'] ?>, <?= $reading['persenInv'] ?>],
						<?php endforeach; ?>
					]);

					var options = {
						chart: {
							title: 'Data Grafik Capaian RKAT',
							subtitle: 'PK+OPS & INV Pertahun',
						}
					};

					var chart = new google.charts.Bar(document.getElementById('GrafikCapaianRkat'));

					chart.draw(data, google.charts.Bar.convertOptions(options));
				}
			</script>
        <script>
            $(window).load(function() {
                $(".pre-loader").fadeOut("slow");
            });
        </script>
        <script>
            const ctx = document.getElementById('SerapProdiPkOps');
            const SerapProdiPkOps = new Chart(ctx, {
                type: 'horizontalBar',
                data: {
                    labels: ['2019/2020', '2020/2021', '2021/2022'],
                    datasets: [
                        // Data Batang Grafik Standar 1

                        {

                            label: 'Rata-Rata Capaian RKAT PK+OPS',
                            backgroundColor: ['rgba(255, 165, 0, 1)','rgba(255, 165, 0, 1)','rgba(255, 165, 0, 1)'],
                            borderColor: ['rgba(255, 165, 0, 1)','rgba(255, 165, 0, 1)','rgba(255, 165, 0, 1)'],
                            pointRadius: false,
                            pointColor: 'rgba(210, 214, 222, 1)',
                            pointStrokeColor: '#c1c7d1',
                            pointHighlightFill: '#fff',
                            pointHighlightStroke: 'rgba(220,220,220,1)',
                            data: [	<?php foreach ($avgPkOpsSeluruh1920 as $rows) : ?><?php echo $rows->avgPkOpsSeluruh1920?> <?php endforeach;?>, 
                                    <?php foreach ($avgPkOpsSeluruh2021 as $rows) : ?><?php echo $rows->avgPkOpsSeluruh2021?> <?php endforeach;?>,
                                    <?php foreach ($avgPkOpsSeluruh2122 as $rows) : ?><?php echo $rows->avgPkOpsSeluruh2122?> <?php endforeach;?>]
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
                            ticks: {
                                beginAtZero: true,
                                steps: 10,
                                stepValue: 5,

                            }
                        }],
                        yAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,

                            }
                        }]
                    },
                }
            });

            const ctx2 = document.getElementById('SerapProdiInv');
            const SerapProdiInv = new Chart(ctx2, {
                type: 'horizontalBar',
                data: {
                    labels: ['2019/2020', '2020/2021', '2021/2022'],
                    datasets: [
                        // Data Batang Grafik Standar 1

                        {

                            label: 'Rata-Rata Capaian RKAT INV',
                            backgroundColor: ['rgba(93, 78, 246,1)','rgba(93, 78, 246,1)','rgba(93, 78, 246,1)'],
                            borderColor: ['rgba(93, 78, 246,1)','rgba(93, 78, 246,1)','rgba(93, 78, 246,1)'],
                            pointRadius: false,
                            pointColor: 'rgba(210, 214, 222, 1)',
                            pointStrokeColor: '#c1c7d1',
                            pointHighlightFill: '#fff',
                            pointHighlightStroke: 'rgba(220,220,220,1)',
                            data: [	<?php foreach ($avgInvSeluruh1920 as $rows) : ?><?php echo $rows->avgInvSeluruh1920?> <?php endforeach;?>, 
                                    <?php foreach ($avgInvSeluruh2021 as $rows) : ?><?php echo $rows->avgInvSeluruh2021?> <?php endforeach;?>,
                                    <?php foreach ($avgInvSeluruh2122 as $rows) : ?><?php echo $rows->avgInvSeluruh2122?> <?php endforeach;?>]
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
                            ticks: {
                                beginAtZero: true,
                                steps: 10,
                                stepValue: 5,

                            }
                        }],
                        yAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,

                            }
                        }]
                    },
                }
            });
        </script>
        <script>
            const ctx3 = document.getElementById('SerapUnitPkOps');
            const SerapUnitPkOps = new Chart(ctx3, {
                type: 'horizontalBar',
                data: {
                    labels: ['2019/2020', '2020/2021', '2021/2022'],
                    datasets: [
                        // Data Batang Grafik Standar 1

                        {

                            label: 'Rata-Rata Capaian RKAT PK+OPS',
                            backgroundColor: ['rgba(255, 165, 0, 1)','rgba(255, 165, 0, 1)','rgba(255, 165, 0, 1)'],
                            borderColor: ['rgba(255, 165, 0, 1)','rgba(255, 165, 0, 1)','rgba(255, 165, 0, 1)'],
                            pointRadius: false,
                            pointColor: 'rgba(210, 214, 222, 1)',
                            pointStrokeColor: '#c1c7d1',
                            pointHighlightFill: '#fff',
                            pointHighlightStroke: 'rgba(220,220,220,1)',
                            data: [	<?php foreach ($avgPkOpsSeluruhUnit1920 as $rows) : ?><?php echo $rows->avgPkOpsSeluruhUnit1920?> <?php endforeach;?>, 
                                    <?php foreach ($avgPkOpsSeluruhUnit2021 as $rows) : ?><?php echo $rows->avgPkOpsSeluruhUnit2021?> <?php endforeach;?>,
                                    <?php foreach ($avgPkOpsSeluruhUnit2122 as $rows) : ?><?php echo $rows->avgPkOpsSeluruhUnit2122?> <?php endforeach;?>]
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
                            ticks: {
                                beginAtZero: true,
                                steps: 10,
                                stepValue: 5,

                            }
                        }],
                        yAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,

                            }
                        }]
                    },
                }
            });

            const ctx4 = document.getElementById('SerapUnitInv');
            const SerapUnitInv = new Chart(ctx4, {
                type: 'horizontalBar',
                data: {
                    labels: ['2019/2020', '2020/2021', '2021/2022'],
                    datasets: [
                        // Data Batang Grafik Standar 1

                        {

                            label: 'Rata-Rata Capaian RKAT INV',
                            backgroundColor: ['rgba(93, 78, 246,1)','rgba(93, 78, 246,1)','rgba(93, 78, 246,1)'],
                            borderColor: ['rgba(93, 78, 246,1)','rgba(93, 78, 246,1)','rgba(93, 78, 246,1)'],
                            pointRadius: false,
                            pointColor: 'rgba(210, 214, 222, 1)',
                            pointStrokeColor: '#c1c7d1',
                            pointHighlightFill: '#fff',
                            pointHighlightStroke: 'rgba(220,220,220,1)',
                            data: [	<?php foreach ($avgInvSeluruhUnit1920 as $rows) : ?><?php echo $rows->avgInvSeluruhUnit1920?> <?php endforeach;?>, 
                                    <?php foreach ($avgInvSeluruhUnit2021 as $rows) : ?><?php echo $rows->avgInvSeluruhUnit2021?> <?php endforeach;?>,
                                    <?php foreach ($avgInvSeluruhUnit2122 as $rows) : ?><?php echo $rows->avgInvSeluruhUnit2122?> <?php endforeach;?>]
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
                            ticks: {
                                beginAtZero: true,
                                steps: 10,
                                stepValue: 5,

                            }
                        }],
                        yAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,

                            }
                        }]
                    },
                }
            });
        </script>


</html>