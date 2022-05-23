<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Admin</title>

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
						<a class="collapse-item" href="<?= base_url('rkat/createbyadmin') ?>">Tambah RKAT</a>
						<a class="collapse-item" href="<?= base_url('rkat/indexbyadmin') ?>">Lihat Data</a>
						<a class="collapse-item" href="<?= base_url('pagurkat/create') ?>">Buat Pagu</a>
						<a class="collapse-item" href="<?= base_url('pagurkat/index') ?>">List Pagu</a>
						<a class="collapse-item" href="<?= base_url('tahunakademik/indextahun') ?>">Tahun Akademik</a>
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
					<h1 class="h3 mb-2 text-gray-800">Edit Rencana RKAT</h1>

					<!-- DataTales Example -->
					<div class="card shadow mb-4">
						<div class="card-body">
							<div class="table-responsive">
								<form action="<?= base_url('rkat/updatebyadmin'); ?>" method="POST" enctype="multipart/form-data">
									<input required type="hidden" name="id" value="<?= $detail_rkat2['id_rkat']; ?>">
									<input required type="hidden" name="id_set" value="<?= $detail_rkat2['id_user']; ?>">
									<div class="form-group">
										<label for="kategori">Kategori</label>
										<select class="form-control" id="kategori" name="kategori">
											<option value="?= $detail_rkat2['kategori']; ?>" disabled selected>
												<?= $detail_rkat2['kategori']; ?></option>
											<option value="PK">Program Kerja</option>
											<option value="OPS">Oprasional</option>
											<option value="INV">Investasi</option>
										</select>
									</div>
									<div class="form-group">
										<label for="kpi">Standar KPI</label>
										<select class="form-control" id="kpi" name="kpi">
											<option value="?= $detail_rkat2['kpi']; ?>" disabled selected>
												<?= $detail_rkat2['kpi']; ?></option>
											<option value="1">Standar 1 – Visi Misi Tujuan dan Strategi</option>
											<option value="2">Standar 2 - Tata Pamong, Tata Kelola, dan Kerjasama</option>
											<option value="3">Standar 3 - Mahasiswa</option>
											<option value="4">Standar 4 - Sumber Daya Manusia</option>
											<option value="5">Standar 5 - Keuangan, Sarana dan Prasarana</option>
											<option value="6">Standar 6 - Pendidikan</option>
											<option value="7">Standar 7 – Penelitian</option>
											<option value="8">Standar 8 - Pengabdian kepada Masyarakat (PkM)</option>
											<option value="9">Standar 9 - Luaran dan Capaian Tridharma</option>
										</select>
									</div>
									<div class="form-group">
										<label for="butir">Butir</label>
										<input type="text" class="form-control" id="butir" placeholder="Masukan Butir Ke-" name="butir" required value="<?= $detail_rkat2['butir']; ?>">
									</div>
									<div class="form-group">
										<label for="no_kegiatan">NO Kegiatan</label>
										<input type="text" class="form-control" id="no_kegiatan" placeholder="Maksukan Nama Kegiatan" name="no_kegiatan" required value="<?= $detail_rkat2['no_kegiatan']; ?>">
									</div>
									<div class="form-group">
										<label for="indikator">Indikator</label>
										<input type="text" class="form-control" id="indikator" placeholder="Maksukan Nama Kegiatan" name="indikator" required value="<?= $detail_rkat2['indikator']; ?>">
									</div>
									<div class="form-group">
										<label for="target">Target</label>
										<input type="text" class="form-control" id="target" placeholder="Maksukan Nama Kegiatan" name="target" required value="<?= $detail_rkat2['target']; ?>">
									</div>
									<div class="form-group">
										<label for="nama_kegiatan">NamaKegiatan</label>
										<input type="text" class="form-control" id="nama_kegiatan" placeholder="Maksukan Nama Kegiatan" name="nama_kegiatan" required value="<?= $detail_rkat2['nama_kegiatan']; ?>">
									</div>
									<div class="form-group">
										<label for="anggaranGanjil">Anggaran Ganjil</label>
										<input type="text" class="form-control" id="anggaranGanjil" placeholder="Masukan Total Anggaran" name="anggaranGanjil" required value="<?= $detail_rkat2['anggaranGanjil']; ?>">
										
									</div>
									<div class="form-group">
										<label for="anggaranGenap">Anggaran Genap</label>
										<input type="text" class="form-control" id="anggaranGenap" placeholder="Masukan Total Anggaran" name="anggaranGenap" required value="<?= $detail_rkat2['anggaranGenap']; ?>">
										
									</div>
									<div class="form-group">
										<label for="total">Total Kegiatan</label>
										<input class="form-control" rows="5" id="total" placeholder="Masukan Total Biaya" name="total" required value="<?= $detail_rkat2['total']; ?>">
									</div>
									<div class="form-group">
										<label for="id_tahun">Tahun Akademik</label>
										<select class="form-control" id="id_tahun" name="id_tahun">
											<option value="?= $detail_rkat2['id_tahun']; ?>" disabled selected>
												<?= $detail_rkat2['id_tahun']; ?></option>
										</select>
									</div>
									<div class="form-group">
										<button type="submit" id="edit" class="btn btn-success">edit</button>
									</div>
								</form>
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