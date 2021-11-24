<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Dashboard RKAT</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="Law Firm Website Template" name="keywords">
	<meta content="Law Firm Website Template" name="description">

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>/public/favicon.ico" />

	<!-- Google Font -->
	<link
		href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,600;1,700;1,800&family=Roboto:wght@400;500&display=swap"
		rel="stylesheet">

	<!-- CSS Libraries -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
	<!-- <link href="lib/animate/animate.min.css" rel="stylesheet">
	<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet"> -->


	<!-- Template Stylesheet -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>/public/css/header.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/public/css/style2.css">


</head>

<body onload="startTime()">
	<div class="wrapper">
		<!-- Top Bar Start -->
		<div class="top-bar">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="logo">
							<a href="<?php echo site_url(); ?>">
								<img src="<?php echo base_url(); ?>/public/img/logo-upj.png" alt="Logo">
							</a>
						</div>
					</div>
					<div class="col-sm-5">
						<div class="logo">
							<h1 class="pertama">Lembaga</h1>
							<h1 class="kedua">Penjaminan Mutu</h1>
							<h1 class="ketiga">Universitas</h1>
						</div>
					</div>
					<div class="col-sm-1">
						<div class="top-bar-right">
							<div class="text">
								<h2>RKAT</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="top-bar-right">
							<div class="text">
								<h2>
									<div id="txt"></div>
								</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-2">
                        <div class="social">
                            <a href="https://www.upj.ac.id/"><i class="fas fa-globe"></i></i></a>
                            <a href="https://twitter.com/upj_bintaro"><i class="fab fa-twitter"></i></a>
                            <a href="https://web.facebook.com/universitas.pembangunan.jaya?_rdc=1&_rdr"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/upj_bintaro/"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- Top Bar End -->
	<div class="container-fluid">
		<br>
		<!-- Nav Bar Start -->
		<div class="nav-bar">
			<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
				<a href="<?php echo site_url(); ?>backend/rkat"><i class="fas fa-long-arrow-alt-left"></i></a>
				<a href="#" class="navbar-brand">MENU</a>
				<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-between">
					<div class="ml-auto">
						<div class="user-info-dropdown">
							<div class="dropdown">
								<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									<span class="user-icon">
										<img src="<?php echo base_url(); ?>/public/img/inf-logo.jpg" alt="">
									</span>
									<span class="user-name">
										<?php
                                                $nama_prodi = session('nama_prodi');
                                                echo "$nama_prodi"
                                                ?>
									</span>
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
									<a class="dropdown-item" href="profile.html"><i class="fas fa-cog"></i> Ubah Password</a>
									<a class="dropdown-item" href="<?= base_url('/auth/logout') ?>"><i class="fas fa-sign-out-alt"></i> Log
										Out</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</nav>
		</div>
		<!-- Nav Bar End -->
		<br>
    </div>
    <div class="container-fluid">
		<div class="card">
			<div class="card-body">
				<h4 class="card-title">Formulir Target Capaian</h4>
				<div class="form-group ">
					<label for="sel1">Standar KPI:</label>
					<select class="form-control kpi" id="sel1">
						<option>A</option>
						<option>B</option>
						<option>C</option>
						<option></option>
					</select>
					<label for="sel1">Kategori:</label>
					<select class="form-control kpi" id="sel1">
						<option>A</option>
						<option>B</option>
						<option>C</option>
						<option></option>
					</select>
				</div>
				<table  class="table table-borded table-responsive table-striped">
					<thead>
					<tr>
						<th>No Kegiatan</th>
						<th>Indikator</th>
						<th>Butir</th>
						<th>Target</th>
						<th>Nama Kegiatan</th>
						<th>Anggaran Gasal</th>
						<th>Serapan Gasal</th>
						<th>Anggaran Genap</th>
						<th>Serapan Genap</th>
						<th>Total Anggaran</th>
						<th>Total Serapan</th>
						<th>Aksi</th>
					</tr>
					</thead>
					<tbody id="tabelData">
						<?php if ($detail_rkat) : ?>
							<?php foreach ($detail_rkat as $reading) : ?>
							<tr>
								<td><?= $reading['no_kegiatan']; ?></td>
								<td><?= $reading['indikator']; ?></td>
								<td><?= $reading['butir']; ?></td>
								<td><?= $reading['target']; ?></td>
								<td><?= $reading['nama_kegiatan']; ?></td>
								<td><?= $reading['anggaranGasal']; ?></td>
								<td><input type="text" class="form-control" style="width: 150px;" id="anggaranGasal" placeholder="Masukan Anggaran Gasal" name="anggaranGasal[]" onkeyup="OnChange(this.value)" onKeyPress="return isNumberKey(event)" required></td>
								<td><?= $reading['anggaranGenap']; ?></td>
								<td><input type="text" class="form-control" style="width: 150px;" id="anggaranGasal" placeholder="Masukan Anggaran Gasal" name="anggaranGasal[]" onkeyup="OnChange(this.value)" onKeyPress="return isNumberKey(event)" required></td>
								<td><?= $reading['total']; ?></td>
								<td><input type="text" class="form-control" style="width: 150px;" id="anggaranGasal" placeholder="Masukan Anggaran Gasal" name="anggaranGasal[]" onkeyup="OnChange(this.value)" onKeyPress="return isNumberKey(event)" required></td>
								<td><a href="<?= base_url('rkat/editbyadmin/'); ?>/<?= $reading['id']; ?>" class="button button2"><i class="fas fa-edit"></i></a></td>
							</tr>
							<?php endforeach; ?>
						<?php endif; ?>
					</tbody>
				</table>
				<button type="button" class="btn btn-primary">Submit</button>
			</div>
		</div>
    </div>
	<!-- JavaScript Libraries -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
	<!-- <script src="lib/easing/easing.min.js"></script>
	<script src="lib/owlcarousel/owl.carousel.min.js"></script>
	<script src="lib/isotope/isotope.pkgd.min.js"></script> -->
	<script>
		// Add the following code if you want the name of the file appear on select
		$(".custom-file-input").on("change", function() {
		var fileName = $(this).val().split("\\").pop();
		$(this).siblings(".custom-file-label").addClass("selected").html(fileName);
		});
	</script>
	<script>
		function startTime() {
			var today = new Date();
			var h = today.getHours();
			var m = today.getMinutes();
			var s = today.getSeconds();
			m = checkTime(m);
			s = checkTime(s);
			document.getElementById('txt').innerHTML =
				h + ":" + m + ":" + s;
			var t = setTimeout(startTime, 500);
		}

		function checkTime(i) {
			if (i < 10) {
				i = "0" + i
			}; // add zero in front of numbers < 10
			return i;
		}

	</script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#tabelData').DataTable();
			function filterData () {
				$('#tabelData').DataTable().search(
					$('.kpi').val()
					).draw();
			}
			$('.kpi').on('change', function () {
				filterData();
			});
		});
	</script>
	<!-- <script src="http://localhost:8080/chart/apexcharts.min.js"></script>
	<script src="http://localhost:8080/chart/dashboard.js"></script> -->
	<script src="<?php echo base_url(); ?>/public/chart/jquery.knob.min.js"></script>
	<script src="<?php echo base_url(); ?>/public/chart/knob-chart-setting.js"></script>
	<script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
	<script>
		$(window).load(function () {
			$(".pre-loader").fadeOut("slow");
		});

	</script>
</body>

</html>