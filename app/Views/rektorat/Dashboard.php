<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Rektorat</title>

	<!-- Custom fonts for this template-->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
	<!-- Custom styles for this template-->
	<link href="<?php echo base_url(); ?>/public/css/style_admin.css" rel="stylesheet">

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
			<li class="nav-item">
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
					<div class="row">
						<!-- Earnings (Monthly) Card Example -->
						<div class="col-lg-12">
							<div class="card border-left-primary shadow h-100 py-2">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="h3  font-weight-bold text-primary text-uppercase mb-1">
												SELAMAT DATANG</div>
											<br>
											<div class="mb-0  col mr-2 text-gray-800 text-justify">Saat ini anda login sebagai <?php
																																$nama_prodi = session('nama_prodi');
																																echo "$nama_prodi"
																																?>. Disini anda bisa melihat grafik capaian KPI.</div>
										</div>

										<div class="col-auto">
											<img src="<?php echo base_url(); ?>/public/img/monev_logo.png" alt="Logo" style="width: 150px; height: 150px;">

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4">
							<div class="card border-left-primary shadow h-100 py-2">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="inner">
											<h3>
												<?= $tahunAkademik['tahunAkademik'] ?>
											</h3>
											<p>Tahun Akademik</p>
										</div>
										<div class="icon">
											<i class="fas fa-solid fa-calendar"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="card border-left-primary shadow h-100 py-2">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="inner">
											<h3>
												<?php foreach ($pagu_rkat as $key => $value) : ?>
													RP. <?= $value['jumlah_pagu'] ?>
												<?php endforeach; ?>
											</h3>
											<p>Jumlah Pagu</p>
										</div>
										<div class="icon">
											<i class="fas fa-solid fa-money-bill"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="card border-left-primary shadow h-100 py-2">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="inner">
											<h3>
												<?php
												$nama_prodi = session('nama_prodi');
												echo "$nama_prodi"
												?>
											</h3>
											<p>Program Studi/Unit Universitas</p>
										</div>
										<div class="icon">
											<i class="fas fa-university"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row" style="margin: 15px auto;">
						<div class="col-md-6">
							<div class="card-box pd-30 height-100-p">
								<div class="card ">
									<div class="card-header bg-info text-white">Persentase Serapan Tahunan</div>
									<div class="card-body">
										<div id="capaian_persen_pk"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="card-box pd-30 height-100-p">
								<div class="card ">
									<div class="card-header bg-info text-white">Persentase Serap Tahun Aktif</div>
									<div class="card-body">
										<div id="capaian_persen_ops"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row" style="margin: 15px auto;">
						<div class="col-md-12">
							<div class="card-box pd-30 height-100-p">
								<div class="card ">
									<div class="card-header bg-info text-white">Persentase Serap Seluruh Prodi/Unit</div>
									<div class="card-body">
										<div id="GrafikCapaianRkat" style="width: 1080px; height: 400px;"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Footer -->
					<footer class="sticky-footer bg-white">
						<div class="container my-auto">
							<div class="copyright text-center my-auto">
								<span>Copyright &copy; Your Website 2020</span>
							</div>
						</div>
					</footer>
					<!-- End of Footer -->

				</div>
				<!-- End of Content Wrapper -->

			</div>
			<!-- End of Page Wrapper -->

			<!-- Scroll to Top Button-->
			<a class="scroll-to-top rounded" href="#page-top">
				<i class="fas fa-angle-up"></i>
			</a>
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

			<!-- Bootstrap core JavaScript-->
			<script src="<?php echo base_url(); ?>/public/js/jquery.min.js"></script>
			<script src="<?php echo base_url(); ?>/public/js/bootstrap.bundle.min.js"></script>

</body>

</html>