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
                        <a class="collapse-item" href="<?= base_url('rkat/indexbyadmin') ?>">Data RKAT</a>
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
				<a class="nav-link " href="auth/index">
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
								<img class="img-profile rounded-circle" src="/img/inf-logo.jpg">
							</a>
							<!-- Dropdown - User Information -->
							<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
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
				<div class="container">
					<h3>Lihat Tabel KPI</h3>
					<br>
					<form>
						<div class="container">
							<div class="form-group">
								<label for="exampleFormControlSelect1">Tahun Ajaran</label>
								<select class="form-control" id="exampleFormControlSelect1">
									<option selected>2021/2022</option>
								</select>
							</div>
							<div class="form-group">
								<label for="exampleFormControlSelect1">Divisi</label>
								<select class="form-control" id="exampleFormControlSelect1">
									<option value="" disabled selected>Pilih Divisi</option>
									<option value="1">Prodi</option>
									<option value="2">Unit</option>
								</select>
							</div>
							<div class="form-group">
								<label for="exampleFormControlSelect1">Prodi</label>
								<select class="form-control" id="exampleFormControlSelect1">
									<option value="" disabled selected>Pilih Prodi</option>
									<option value="1">Akuntansi</option>
									<option value="2">Manajemen</option>
									<option value="3">Psikologi</option>
									<option value="4">Ilmu Komunikasi</option>
									<option value="5">Desain Produk</option>
									<option value="6">Desain Komunikasi Visual</option>
									<option value="7">Informatika</option>
									<option value="8">Sistem Informasi</option>
									<option value="9">Teknik Sipil</option>
									<option value="10">Arsitektur</option>
								</select>
							</div>
							<div class="form-group">
								<label for="exampleFormControlSelect1">Unit</label>
								<select class="form-control" id="exampleFormControlSelect1">
									<option value="" disabled selected>Pilih Unit</option>
									<option value="1">Rektorat</option>
									<option value="2">Fakultas Teknologi dan Desain</option>
									<option value="3">Fakultas Humaniora dan Bisnis</option>
									<option value="4">Center for Urban Studies</option>
									<option value="5">Jaya Center Advanced Learning</option>
									<option value="6">Jaya Softskills Development Program</option>
									<option value="7">Jaya Launch Pad</option>
									<option value="8">KOTA</option>
									<option value="9">Sustainable Development</option>
									<option value="10">Lembaga Penelitian dan Pengabdian Masyarakat</option>
									<option value="11">Lembaga Penjaminan Mutu Universitas</option>
									<option value="12">Keuangan</option>
									<option value="13">Biro Pengembangan Sumber Daya Manusia</option>
									<option value="14">Publikasi Humas dan Admisi</option>
									<option value="15">Biro Kemahasiswaan dan Alumni</option>
									<option value="16">Biro Pendidikan</option>
									<option value="17">Perpustakaan</option>
									<option value="18">Sarana dan Prasarana</option>
								</select>
							</div>
							<div class="form-group">
								<label for="exampleFormControlSelect1">Standar</label>
								<select class="form-control" id="exampleFormControlSelect1" name="kriteria">
									<option value="" disabled selected>Pilih Indikator standar</option>
									<option value="visimisi">1 – Visi Misi Tujuan dan Strategi</option>
									<option value="tatakelola">2 - Tata Pamong, Tata Kelola, dan Kerjasama</option>
									<option value="mahasiswa">3 - Mahasiswa</option>
									<option value="sdm">4 - Sumber Daya Manusia</option>
									<option value="keuangan">5 - Keuangan, Sarana dan Prasarana</option>
									<option value="pendidikan">6 - Pendidikan</option>
									<option value="penelitian">7 – Penelitian</option>
									<option value="pengmas">8 - Pengabdian kepada Masyarakat (PkM)</option>
									<option value="luarantridharma">9 - Luaran dan Capaian Tridharma</option>
								</select>
							</div>
							<div class="form-group">
								<label for="exampleFormControlSelect1">Standar</label>
								<select class="form-control" id="exampleFormControlSelect1" name="kriteria">
									<option value="" disabled selected>Pilih Indikator standar</option>
									<option value="visimisi">1 – Visi Misi Tujuan dan Strategi</option>
									<option value="tatakelola">2 - Tata Pamong, Tata Kelola, dan Kerjasama</option>
									<option value="mahasiswa">3 - Mahasiswa</option>
									<option value="sdm">4 - Sumber Daya Manusia</option>
									<option value="keuangan">5 - Keuangan, Sarana dan Prasarana</option>
									<option value="pendidikan">6 - Pendidikan</option>
									<option value="penelitian">7 – Penelitian</option>
									<option value="pengmas">8 - Pengabdian kepada Masyarakat (PkM)</option>
									<option value="luarantridharma">9 - Luaran dan Capaian Tridharma</option>
									<option value="hrd">10 - Standar HRD</option>
								</select>
							</div>


							<button type="submit" class="btn btn-primary">Cek Tabel</button>

						</div>

					</form>


				</div>
				<!-- End of Main Content -->

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

		<!-- Bootstrap core JavaScript-->
		<script src="http://localhost:8080/js/jquery.min.js"></script>
		<script src="http://localhost:8080/js/bootstrap.bundle.min.js"></script>

</body>

</html>