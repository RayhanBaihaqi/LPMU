<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>List data user</title>

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
			<li class="nav-item">
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
				<div class="container-fluid">

					<!-- Page Heading -->
					<h1 class="h3 mb-2 text-gray-800">Grafik Capaian RKAT</h1>
					<br>

<<<<<<< HEAD
                    <div class="container col-lg-12">
                        <section class="content">
                            <div class="card card-success">
                                <div class="card-body">
                                    <div class="chart">
                                        <div id="GrafikCapaianRkatProdi" style="width: 1080px; height: 500px;"></div>
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
                                        <div id="GrafikCapaianRkatUnit" style="width: 1080px; height: 500px;"></div>
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
                                        <div id="GrafikCapaianRkatRektorat" style="width: 1080px; height: 500px;"></div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
=======
					<div class="container col-lg-12">
						<section class="content">

							<div class="card card-success">
								<div class="card-body">
									<div class="chart">
										<div id="GrafikCapaianRkat" style="width: 1080px; height: 500px;"></div>
									</div>
								</div>
							</div>
						</section>
					</div>
				</div>
>>>>>>> 023b34fab8d642f9d37521eb9495cff1e265f908


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
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
		<script type="text/javascript">
<<<<<<< HEAD
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Prodi/Unit', 'Tahun', 'PK & OPS (%)', 'INV (%)'],
          <?php
		    foreach ($seluruhDataUserProdi as $key => $reading) : ?>
          ['<?= $reading['nama_prodi'] ?>','<?= $reading['tahunAkademik'] ?>', <?= $reading['persenPkOps'] ?>,<?= $reading['persenInv'] ?>],
          <?php endforeach; ?>
        ]);

        var options = {
          chart: {
            title: 'Data Grafik Capaian RKAT Prodi',
            subtitle: 'PK+OPS & INV Pertahun',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('GrafikCapaianRkatProdi'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Prodi/Unit', 'Tahun', 'PK & OPS (%)', 'INV (%)'],
          <?php
		    foreach ($seluruhDataUserUnit as $key => $reading) : ?>
          ['<?= $reading['nama_prodi'] ?>','<?= $reading['tahunAkademik'] ?>', <?= $reading['persenPkOps'] ?>,<?= $reading['persenInv'] ?>],
          <?php endforeach; ?>
        ]);

        var options = {
          chart: {
            title: 'Data Grafik Capaian RKAT Unit',
            subtitle: 'PK+OPS & INV Pertahun',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('GrafikCapaianRkatUnit'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Rektorat', 'Tahun', 'PK & OPS (%)', 'INV (%)'],
          <?php
		    foreach ($seluruhDataUserRektorat as $key => $reading) : ?>
          ['<?= $reading['nama_prodi'] ?>','<?= $reading['tahunAkademik'] ?>', <?= $reading['persenPkOps'] ?>,<?= $reading['persenInv'] ?>],
          <?php endforeach; ?>
        ]);

        var options = {
          chart: {
            title: 'Data Grafik Capaian RKAT Rektorat',
            subtitle: 'PK+OPS & INV Pertahun',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('GrafikCapaianRkatRektorat'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
=======
			google.charts.load('current', {
				'packages': ['bar']
			});
			google.charts.setOnLoadCallback(drawChart);

			function drawChart() {
				var data = google.visualization.arrayToDataTable([
					['Prodi/Unit', 'Tahun', 'PK & OPS (%)', 'INV (%)'],
					<?php
					foreach ($seluruhDataUser as $key => $reading) : ?>['<?= $reading['nama_prodi'] ?>', '<?= $reading['tahunAkademik'] ?>', <?= $reading['persenPkOps'] ?>, <?= $reading['persenInv'] ?>],
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
>>>>>>> 023b34fab8d642f9d37521eb9495cff1e265f908

</body>

</html>