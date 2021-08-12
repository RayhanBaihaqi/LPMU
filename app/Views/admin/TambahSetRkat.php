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
	<link href="http://localhost:8080/css/style_admin.css" rel="stylesheet">
	<link href="http://localhost:8080/css/dataTables.bootstrap4.min.css" rel="stylesheet">

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
				<a class="nav-link " href="/admin">
					<i class="fas fa-fw fa-tachometer-alt"></i>
					<span>Dashboard</span></a>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider">

			<!-- Heading -->
			<li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>RKAT</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
						<a class="collapse-item" href="<?= base_url('rkat/createbyadmin') ?>">Tambah RKAT</a>
                        <a class="collapse-item" href="<?= base_url('rkat/indexbyadmin') ?>">Lihat Data</a>
						<a class="collapse-item" href="<?= base_url('setrkat/create') ?>">Atur Semster dan Pagu</a>
						<a class="collapse-item" href="<?= base_url('setrkat/index') ?>">Lihat Data Set Rkat</a>
                    </div>
                </div>
            </li>

			<!-- Divider -->
			<hr class="sidebar-divider">

			<!-- Heading -->
			<div class="sidebar-heading">
				KPI
			</div>
			<li class="nav-item">
				<a class="nav-link " href="/admin/adminkpi">
					<i class="fas fa-fw fa-tachometer-alt"></i>
					<span>Dashboard</span></a>
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
							<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="mr-2 d-none d-lg-inline text-gray-600 small">
									<?php
									$nama_prodi = session('nama_prodi');
									echo "$nama_prodi"
									?>
								</span>
								<img class="img-profile rounded-circle" src="/img/inf-logo.jpg">
							</a>
							<!-- Dropdown - User Information -->
							<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
								aria-labelledby="userDropdown">
								<a class="dropdown-item" href="#">
									<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
									Profile
								</a>
								<a class="dropdown-item" href="#">
									<i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
									Settings
								</a>
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
					<h1 class="h3 mb-2 text-gray-800">Tambah User</h1>

					<!-- DataTales Example -->
					<div class="card shadow mb-4">
						<div class="card-body">
							<div class="table-responsive">
								<form action="<?= base_url('setrkat/store'); ?>" method="POST"
									enctype="multipart/form-data">
									<div class="container">
									<div class="form-group">
											<label for="tahun_akademik">Tahun Ajaran</label>
											<select class="form-control" id="tahun_akademik" name="tahun_akademik">
												<option selected>Pilih Tahun Ajaran</option>
												<option value="2021/2022">2021/2022</option>
												<option value="2022/2023">2022/2023</option>
											</select>
										</div>
										<div class="form-group">
											<label for="semester">Semester</label>
											<select class="form-control" id="semester" name="semester">
												<option selected>Pilih Semester</option>
												<option value="ganjil">Ganjil</option>
												<option value="genap">Genap</option>
											</select>
										</div>
										<div class="form-group">
											<label for="semester">Prodi/Unit</label>
											<select class="form-control" id="id_user" name="id_user">
												<option selected>Pilih Semester</option>
												<option value="1">Akuntansi</option>
												<option value="2">Desain Komunikasi Visual</option>
												<option value="3">Informatika</option>
												<option value="4">Ilmu Komunikasi</option>
											</select>
										</div>
										<div class="form-group">
											<label for="pagu">Jumlah Pagu (Rp)</label>
											<input type="text" class="form-control" id="pagu"
												placeholder="Masukan Nilai Pagu" name="pagu" required>
										</div>
										<button type="submit" class="btn btn-primary" id="tambah">Tambah Data</button>
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
		<script src="http://localhost:8080/js/jquery.min.js"></script>
		<script src="http://localhost:8080/js/bootstrap.bundle.min.js"></script>

		<!-- Page level plugins -->
		<script src="http://localhost:8080/js/jquery.dataTables.min.js"></script>
		<script src="http://localhost:8080/js/dataTables.bootstrap4.min.js"></script>

		<!-- Page level custom scripts -->
		<script src="http://localhost:8080/js/datatables-demo.js"></script>

</body>

</html>