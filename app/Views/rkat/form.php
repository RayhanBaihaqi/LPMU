<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Dashboard RKAT</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="Law Firm Website Template" name="keywords">
	<meta content="Law Firm Website Template" name="description">

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/png" href="/favicon.ico" />

	<!-- Google Font -->
	<link
		href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,600;1,700;1,800&family=Roboto:wght@400;500&display=swap"
		rel="stylesheet">

	<!-- CSS Libraries -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
	<link href="lib/animate/animate.min.css" rel="stylesheet">
	<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


	<!-- Template Stylesheet -->
	<link rel="stylesheet" href="http://localhost:8080/css/header.css">
	<link rel="stylesheet" href="http://localhost:8080/css/style2.css">


</head>

<body onload="startTime()">
	<div class="pre-loader">
		<div class="spinner-border text-info"></div>
	</div>
	<div class="wrapper">
		<!-- Top Bar Start -->
		<div class="top-bar">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="logo">
							<a href="index.html">
								<img src="/img/logo-upj.png" alt="Logo">
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
							<a href=""><i class="fab fa-twitter"></i></a>
							<a href=""><i class="fab fa-facebook-f"></i></a>
							<a href=""><i class="fab fa-linkedin-in"></i></a>
							<a href=""><i class="fab fa-instagram"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Top Bar End -->
	<div class="container">
		<br>
		<!-- Nav Bar Start -->
		<div class="nav-bar">
			<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
				<a href="/backend/rkat"><i class="fas fa-long-arrow-alt-left"></i></a>
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
										<img src="/img/inf-logo.jpg" alt="">
									</span>
									<span class="user-name">
										<?php
                                                $nama_prodi = session('nama_prodi');
                                                echo "$nama_prodi"
                                                ?>
									</span>
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
									<a class="dropdown-item" href="profile.html"><i class="fas fa-user"></i> Profile</a>
									<a class="dropdown-item" href="profile.html"><i class="fas fa-cog"></i> Setting</a>
									<a class="dropdown-item" href="login.html"><i class="fas fa-sign-out-alt"></i> Log
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
		<h3>Tambah Data</h3>
		<br>
		<form action="<?= base_url('rkat/store'); ?>" method="POST" enctype="multipart/form-data">
			<div class="container">
				<div class="form-group">
					<label for="exampleFormControlSelect1">Tahun Ajaran</label>
					<select class="form-control" id="exampleFormControlSelect1" disabled>
						<option selected>Pilih Tahun Ajaran</option>
						<option value="1">2021/2022</option>
						<option value="2">2022/2023</option>
					</select>
				</div>
				<div class="form-group">
					<label for="uname">Jumlah Pagu</label>
					<input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname"
						required disabled>
				</div>
				<div class="form-group">
					<label for="exampleFormControlSelect1">Semester</label>
					<select class="form-control" id="exampleFormControlSelect1" disabled>
						<option selected>Pilih Semester</option>
						<option value="ganjil">Ganjil</option>
						<option value="genap">Genap</option>
					</select>
				</div>

				<!-- Akan Dilooping -->
				<div class="form-group">
					<label for="nama_kegiatan">Nama Kegiatan</label>
					<input type="text" class="form-control" id="nama_kegiatan" placeholder="Maksukan Nama Kegiatan"
						name="nama_kegiatan" required>
				</div>
				<div class="form-group">
					<label for="anggaran">Total Biaya Kegiatan</label>
					<input type="text" class="form-control" id="anggaran" placeholder="Masukan Total Biaya"
						name="anggaran" required>
				</div>
				<div class="form-group">
					<label for="jenis_biaya">Jenis Biaya Kegiatan</label>
					<input type="text" class="form-control" id="jenis_biaya" placeholder="Masukan Jenis Biaya"
						name="jenis_biaya" required>
				</div>
				<div class="form-group">
					<label for="keterangan">Keterangan Kegiatan</label>
					<input type="text" class="form-control" id="keterangan" placeholder="Masukan Keterangan Kegiatan"
						name="keterangan" required>
				</div>
				<div class="form-group">
					<label for="jenis_kpi">Standar KPI</label>
					<select class="form-control" id="jenis_kpi" name="jenis_kpi">
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
				<div class="form-group">
					<label for="jenis_anggaran">Jenis Anggaran</label>
					<select class="form-control" id="jenis_anggaran" name="jenis_anggaran">
						<option value="" disabled selected>Pilih Jenis Anggaran</option>
						<option value="Program Kerja">Program Kerja</option>
						<option value="Oprasional">Oprasional</option>
						<option value="Investasi">Investasi</option>
					</select>
				</div>
				<button type="submit" class="btn btn-primary" id="tambah">Tambah Data</button>
			</div>
		</form>
	</div>

	<!-- JavaScript Libraries -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
	<script src="lib/easing/easing.min.js"></script>
	<script src="lib/owlcarousel/owl.carousel.min.js"></script>
	<script src="lib/isotope/isotope.pkgd.min.js"></script>
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
	<script src="http://localhost:8080/chart/apexcharts.min.js"></script>
	<script src="http://localhost:8080/chart/dashboard.js"></script>
	<script src="http://localhost:8080/chart/jquery.knob.min.js"></script>
	<script src="http://localhost:8080/chart/knob-chart-setting.js"></script>
	<script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
	<script>
		$(window).load(function () {
			$(".pre-loader").fadeOut("slow");
		});

	</script>
</body>

</html>
