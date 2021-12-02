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
				<div class="sidebar-brand-icon rotate-n-15">
					<i class="fas fa-laugh-wink"></i>
				</div>
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
						<a class="collapse-item" href="<?= base_url('rkat/createbyadmin') ?>">Tambah RKAT</a>
						<a class="collapse-item" href="<?= base_url('rkat/indexbyadmin') ?>">Lihat Data</a>
						<a class="collapse-item" href="<?= base_url('setrkat/create') ?>">Atur Semester dan Pagu</a>
						<a class="collapse-item" href="<?= base_url('setrkat/index') ?>">Lihat Data Set Rkat</a>
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
					<h1 class="h3 mb-2 text-gray-800">Tambah Rencana RKAT</h1>

					<!-- DataTales Example -->
					<div class="card shadow mb-4">
						<div class="card-body">
							<div class="table-responsive">
								<?php
								if (isset($_POST['jumlah'])) {
								?>
									<form action="<?= base_url('rkat/savebyadmin'); ?>" method="POST" enctype="multipart/form-data">
										<div class="card">
											<div class="card-header">Tambah Data</div>
											<?php
											$jumlah = $_POST['jumlah'];
											for ($a = 1; $a <= $jumlah; $a++) {
											?>

												<div class="card-body">
													<h6 class="bg-dark text-white">Kegiatan <?= $a ?></h6><br>
													<!-- Akan Dilooping -->
													<div class="form-row">
														<div class="col-sm-2">
															<input type="hidden" name="jumlah" value="<?= $jumlah ?>">
															<label for="id_prodi">Prodi</label>
															<select class="form-control" id="id_prodi<?= $a ?>" name="id_prodi[]">
																<option disabled selected>Pilih Prodi/Unit</option>
																<option value="1">Akuntansi</option>
																<option value="2">Desain Komunikasi Visual</option>
																<option value="3">Informatika</option>
																<option value="4">Ilmu Komunikasi</option>
															</select>
														</div>
														<div class="col-sm-2">
															<label for="nama_kegiatan" class="mr-sm-2">Nama Kegiatan</label>
															<input type="text" class="form-control mb-2 mr-sm-2" id="nama_kegiatan<?= $a ?>" placeholder="Maksukan Nama Kegiatan" name="nama_kegiatan[]" required>
														</div>
														<div class="col-sm-2">
															<label for="jenis_anggaran">Jenis Anggaran</label>
															<select class="form-control" id="jenis_anggaran<?= $a ?>" name="jenis_anggaran[]">
																<option value="" disabled selected>Pilih Jenis Anggaran</option>
																<option value="Program Kerja">Program Kerja</option>
																<option value="Oprasional">Oprasional</option>
																<option value="Investasi">Investasi</option>
															</select>
														</div>
														<div class="col-sm-2">
															<label for="jenis_kpi">Standar KPI</label>
															<select class="form-control" id="jenis_kpi<?= $a ?>" name="jenis_kpi[]">
																<option value="" disabled selected>Pilih Indikator standar</option>
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
														<div class="col-sm-1">
															<label for="butir">Butir</label>
															<input type="text" class="form-control" id="butir<?= $a ?>" placeholder="Masukan Butir" name="butir[]" required>
														</div>
														<div class="col-sm-1">
															<label for="semester">Semester</label>
															<select class="form-control" id="semester<?= $a ?>" name="semester[]">
																<option value="" disabled selected>Pilih Semester</option>
																<option value="Gasal">Gasal</option>
																<option value="Genap">Genap</option>
																<option value="Gasal dan Genap">Gasal dan Genap</option>
															</select>
														</div>
														<div class="col-sm-2">
															<label for="anggaran" class="mr-sm-2">Anggaran Kegiatan</label>
															<input type="text" class="form-control mb-2 mr-sm-2" id="anggaran<?= $a ?>" placeholder="Masukan Total Biaya" name="anggaran[]" required>
														</div>
														<div class="col-sm-2">
															<label for="keterangan" class="mr-sm-2">Keterangan Kegiatan</label>
															<input type="text" class="form-control mb-2 mr-sm-2" id="keterangan<?= $a ?>" placeholder="Masukan Keterangan Kegiatan" name="keterangan[]" required>
														</div>
													</div>
												</div>
											<?php } ?>
										<?php
									} else {
										$jumlah = 0;
									}
										?>
										<div class="card-footer">
											<input type="button" onclick="cetak()" name="btn" value="Submit" id="submitBtn" data-toggle="modal" data-target="#confirm-submit" class="btn btn-primary" />
										</div>
										</div>
										<div class="modal fade" id="confirm-submit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
											<div class="modal-dialog modal-xl">
												<div class="modal-content">
													<div class="modal-header">
														Confirm Submit
													</div>
													<div class="modal-body">
														Are you sure you want to submit the following details?
														<table class="table">
															<thead>
																<tr>
																	<th>Data Ke</th>
																	<th>Nama Kegiatan</th>
																	<th>Jenis anggaran</th>
																	<th>Standart KPI</th>
																	<th>Butir</th>
																	<th>Semester</th>
																	<th>Anggaran Kegiatan</th>
																	<th>Keterangan Kegiatan</th>
																</tr>
															</thead>
															<?php for ($i = 1; $i <= $jumlah; $i++) : ?>
																<tbody>
																	<tr>
																		<td><?= $i ?></td>
																		<td id="jsnama_kegiatan<?= $i ?>"></td>
																		<td id="jsjenis_anggaran<?= $i ?>"></td>
																		<td id="jsjenis_kpi<?= $i ?>"></td>
																		<td id="jsbutir<?= $i ?>"></td>
																		<td id="jssemester<?= $i ?>"></td>
																		<td id="jsanggaran<?= $i ?>"></td>
																		<td id="jsketerangan<?= $i ?>"></td>
																	</tr>
																</tbody>
															<?php endfor; ?>
														</table>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
														<button type="submit" class="btn btn-primary" id="tambah">Tambah Data</button>
													</div>
												</div>
											</div>
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

		<script>
			function cetak() {
				<?php for ($i = 1; $i <= $jumlah; $i++) : ?>
					var nama_kegiatan<?= $i ?> = document.getElementById("nama_kegiatan<?= $i ?>").value;
					var anggaran<?= $i ?> = document.getElementById("anggaran<?= $i ?>").value;
					var semester<?= $i ?> = document.getElementById("semester<?= $i ?>").value;
					var keterangan<?= $i ?> = document.getElementById("keterangan<?= $i ?>").value;
					var jenis_kpi<?= $i ?> = document.getElementById("jenis_kpi<?= $i ?>").value;
					var butir<?= $i ?> = document.getElementById("butir<?= $i ?>").value;
					var jenis_anggaran<?= $i ?> = document.getElementById("jenis_anggaran<?= $i ?>").value;
					document.getElementById("jsnama_kegiatan<?= $i ?>").innerHTML = "<b>" + nama_kegiatan<?= $i ?> + "</b>";
					document.getElementById("jsanggaran<?= $i ?>").innerHTML = "<b>" + anggaran<?= $i ?> + "</b>";
					document.getElementById("jssemester<?= $i ?>").innerHTML = "<b>" + semester<?= $i ?> + "</b>";
					document.getElementById("jsketerangan<?= $i ?>").innerHTML = "<b>" + keterangan<?= $i ?> + "</b>";
					document.getElementById("jsjenis_kpi<?= $i ?>").innerHTML = "<b>" + jenis_kpi<?= $i ?> + "</b>";
					document.getElementById("jsbutir<?= $i ?>").innerHTML = "<b>" + butir<?= $i ?> + "</b>";
					document.getElementById("jsjenis_anggaran<?= $i ?>").innerHTML = "<b>" + jenis_anggaran<?= $i ?> + "</b>";
				<?php endfor; ?>
			}
		</script>
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