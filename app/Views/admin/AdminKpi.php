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
				<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
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
								<label for="tahun_akademik">Tahun Akademik</label>
								<select class="form-control" id="tahun_akademik" name="tahun_akademik">
									<option selected>2021/2022</option>
								</select>
							</div>
							<div class="form-group">
								<label for="divisi">Divisi</label>
								<select class="form-control" id="divisi">
									<option value="" disabled selected>Pilih Divisi</option>
									<option value="Prodi">Prodi</option>
									<option value="Unit">Unit</option>
								</select>
							</div>
							<div class="form-group" id="prodiDiv">
								<label for="prodi">Prodi</label>
								<select class="form-control" id="prodi" name="nama_prodi">
									<option value="" disabled selected>Pilih Prodi</option>
									<option value="Akuntansi">Akuntansi</option>
									<option value="Manajemen">Manajemen</option>
									<option value="Psikologi">Psikologi</option>
									<option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
									<option value="Desain Produk">Desain Produk</option>
									<option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
									<option value="Informatika">Informatika</option>
									<option value="Sistem Informasi">Sistem Informasi</option>
									<option value="Teknik Sipil">Teknik Sipil</option>
									<option value="Arsitektur">Arsitektur</option>
								</select>
							</div>
							<div class="form-group" id="unitDiv">
								<label for="unit">Unit</label>
								<select class="form-control" id="unit" name="nama_prodi">
									<option value="" disabled selected>Pilih Unit</option>
									<option value="Rektorat">Rektorat</option>
									<option value="Fakultas Teknologi dan Desain">Fakultas Teknologi dan Desain</option>
									<option value="Fakultas Humaniora dan Bisnis">Fakultas Humaniora dan Bisnis</option>
									<option value="Center for Urban Studies">Center for Urban Studies</option>
									<option value="Jaya Center Advanced Learning">Jaya Center Advanced Learning</option>
									<option value="Jaya Softskills Development Program">Jaya Softskills Development Program</option>
									<option value="Jaya Launch Pad">Jaya Launch Pad</option>
									<option value="KOTA">KOTA</option>
									<option value="Sustainable Development">Sustainable Development</option>
									<option value="Lembaga Penelitian dan Pengabdian Masyarakat">Lembaga Penelitian dan Pengabdian Masyarakat</option>
									<option value="Lembaga Penjaminan Mutu Universitas">Lembaga Penjaminan Mutu Universitas</option>
									<option value="Keuangan">Keuangan</option>
									<option value="Biro Pengembangan Sumber Daya Manusia">Biro Pengembangan Sumber Daya Manusia</option>
									<option value="Publikasi Humas dan Admisi">Publikasi Humas dan Admisi</option>
									<option value="Biro Kemahasiswaan dan Alumni">Biro Kemahasiswaan dan Alumni</option>
									<option value="Biro Pendidikan">Biro Pendidikan</option>
									<option value="Perpustakaan">Perpustakaan</option>
									<option value="Sarana dan Prasarana">Sarana dan Prasarana</option>
								</select>
							</div>
							<div class="form-group" id="kriteriaProdiDiv">
								<label for="kriteriaProdi">Standar</label>
								<select class="form-control" id="standarProdi" name="kriteria">
									<option value="" disabled selected>Pilih Indikator standar</option>
									<option value="Visi Misi Tujuan dan Strategi">1 – Visi Misi Tujuan dan Strategi</option>
									<option value="Tata Pamong, Tata Kelola, dan Kerjasama">2 - Tata Pamong, Tata Kelola, dan Kerjasama</option>
									<option value="Mahasiswa">3 - Mahasiswa</option>
									<option value="Sumber Daya Manusia">4 - Sumber Daya Manusia</option>
									<option value="Keuangan, Sarana dan Prasarana">5 - Keuangan, Sarana dan Prasarana</option>
									<option value="Pendidikan">6 - Pendidikan</option>
									<option value="Penelitian">7 – Penelitian</option>
									<option value="Pengabdian kepada Masyarakat (PkM)">8 - Pengabdian kepada Masyarakat (PkM)</option>
									<option value="Luaran dan Capaian Tridharma">9 - Luaran dan Capaian Tridharma</option>
								</select>
							</div>
							<div class="form-group" id="kriteriaUnitDiv">
								<label for="kriteriaUnit">Standar</label>
								<select class="form-control" id="kriteriaUnit" name="kriteria">
									<option value="" disabled selected>Pilih Indikator standar</option>
									<option value="Visi Misi Tujuan dan Strategi">1 – Visi Misi Tujuan dan Strategi</option>
									<option value="Tata Pamong, Tata Kelola, dan Kerjasama">2 - Tata Pamong, Tata Kelola, dan Kerjasama</option>
									<option value="Mahasiswa">3 - Mahasiswa</option>
									<option value="Sumber Daya Manusia">4 - Sumber Daya Manusia</option>
									<option value="Keuangan, Sarana dan Prasarana">5 - Keuangan, Sarana dan Prasarana</option>
									<option value="Pendidikan">6 - Pendidikan</option>
									<option value="Penelitian">7 – Penelitian</option>
									<option value="Pengabdian kepada Masyarakat (PkM)">8 - Pengabdian kepada Masyarakat (PkM)</option>
									<option value="Luaran dan Capaian Tridharma">9 - Luaran dan Capaian Tridharma</option>
									<option value="Standar HRD">10 - Standar HRD</option>
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
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script>
			$(document).ready(function() {
				$("#divisi").change(function() {
					if ($(this).val() == "Prodi") {
						$('#prodiDiv').show();
						$('#prodi').attr('required', '');
						$('#prodi').attr('data-error', 'This field is required.');
						$('#unitDiv').hide();
						$('#unit').removeAttr('required');
						$('#unit').removeAttr('data-error');
						$('#kriteriaProdiDiv').show();
						$('#kriteriaProdi').attr('required', '');
						$('#kriteriaProdi').attr('data-error', 'This field is required.');
						$('#kriteriaUnitDiv').hide();
						$('#kriteriaUnit').removeAttr('required');
						$('#kriteriaUnit').removeAttr('data-error');

					} else if ($(this).val() == "Unit") {
						$('#prodiDiv').hide();
						$('#prodi').removeAttr('required');
						$('#prodi').removeAttr('data-error');
						$('#unitDiv').show();
						$('#unit').attr('required', '');
						$('#unit').attr('data-error', 'This field is required.');
						$('#kriteriaProdiDiv').hide();
						$('#kriteriaProdi').removeAttr('required');
						$('#kriteriaProdi').removeAttr('data-error');
						$('#kriteriaUnitDiv').show();
						$('#kriteriaUnit').attr('required', '');
						$('#kriteriaUnit').attr('data-error', 'This field is required.');
					} else {
						$('#prodiDiv').hide();
						$('#prodi').removeAttr('required');
						$('#prodi').removeAttr('data-error');
						$('#unitDiv').hide();
						$('#unit').removeAttr('required');
						$('#unit').removeAttr('data-error');
						$('#kriteriaUnitDiv').hide();
						$('#kriteriaUnit').removeAttr('required');
						$('#kriteriaUnit').removeAttr('data-error');
						$('#kriteriaProdiDiv').hide();
						$('#kriteriaProdi').removeAttr('required');
						$('#kriteriaProdi').removeAttr('data-error');

					}

				});
				$("#divisi").trigger("change");
			});
		</script>

</body>

</html>