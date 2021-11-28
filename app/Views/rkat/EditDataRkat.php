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
	<link href="<?php echo base_url(); ?>/public/css/dataTables.bootstrap4.min.css" rel="stylesheet">


</head>

<body onload="startTime()">
	<div class="wrapper">
		<!-- Top Bar Start -->
		<div class="top-bar">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="logo">
							<a href="index.html">
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
	<div class="container">
		<br>
		<!-- Nav Bar Start -->
		<div class="nav-bar">
			<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
				<a href="<?= base_url('/backend/rkat') ?>"><i class="fas fa-long-arrow-alt-left"></i></a>
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
									<a class="dropdown-item" href="<?= base_url('/rkat/form_ubahpass') ?>"><i class="fas fa-cog"></i> Ubah Password</a>
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
        <form action="<?= base_url('rkat/updatebyuser'); ?>" method="POST" enctype="multipart/form-data">
	
                <input required type="hidden" name="id" value="<?= $detail_rkat['id']; ?>">
				<input required type="hidden" name="id_set" value="<?= $detail_rkat['id_set']; ?>">
				<div class="form-group">
					<label for="nama_kegiatan">Nama Kegiatan</label>
					<input type="text" class="form-control" id="nama_kegiatan" placeholder="Maksukan Nama Kegiatan" 
					name="nama_kegiatan" required value="<?= $detail_rkat['nama_kegiatan']; ?>">
				</div>
                <div class="form-group">
                    <label for="jenis_anggaran">Jenis Anggaran</label>
                    <select class="form-control" id="jenis_anggaran" name="jenis_anggaran">
                        <option value="<?= $detail_rkat['jenis_anggaran']; ?>" disabled selected>
							<?= $detail_rkat['jenis_anggaran']; ?></option>
						<option value="Program Kerja">Program Kerja</option>
						<option value="Oprasional">Oprasional</option>
						<option value="Investasi">Investasi</option>
					</select>
                </div>
                <div class="form-group">
                    <label for="jenis_kpi">Standar KPI</label>
					<select class="form-control" id="jenis_kpi" name="jenis_kpi">
                        <option value="<?= $detail_rkat['jenis_kpi']; ?>" disabled selected>
							<?= $detail_rkat['jenis_kpi']; ?></option>
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
					<input type="text" class="form-control" id="butir" placeholder="Masukan Butir Ke-" name="butir" 
					required value="<?= $detail_rkat['butir']; ?>">
				</div>
                <div class="form-group">
                    <label for="semester">Semester</label>
                    <select class="form-control" id="semester" name="semester">
                        <option value="<?= $detail_rkat['semester']; ?>" disabled selected>
							<?= $detail_rkat['semester']; ?></option>
                        <option value="Gasal">Gasal</option>
						<option value="Genap">Genap</option>
						<option value="Gasal dan Genap">Gasal dan Genap</option>
					</select>
                </div>
                <div class="form-group">
					<label for="anggaran">Anggaran Kegiatan</label>
					<input type="text" class="form-control" id="anggaran" placeholder="Masukan Total Anggaran" 
					name="anggaran" required value="<?= $detail_rkat['anggaran']; ?>">
				</div>
				<div class="form-group">
					<label for="keterangan">Keterangan Kegiatan</label>
					<textarea class="form-control" rows="5" id="keterangan" placeholder="Masukan Total Biaya" 
					name="keterangan" required ><?= $detail_rkat['keterangan']; ?></textarea>
				</div>
                <div class="form-group">
					<button type="submit" id="edit" class="btn btn-success">edit</button>
				</div>
			</form>

	</div>

	<!-- JavaScript Libraries -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
	<!-- <script src="lib/easing/easing.min.js"></script>
	<script src="lib/owlcarousel/owl.carousel.min.js"></script>
	<script src="lib/isotope/isotope.pkgd.min.js"></script> -->
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

		<!-- Bootstrap core JavaScript-->
		<script src="<?php echo base_url(); ?>/public/js/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>/public/js/bootstrap.bundle.min.js"></script>

		<!-- Page level plugins -->
		<script src="<?php echo base_url(); ?>/public/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url(); ?>/public/js/dataTables.bootstrap4.min.js"></script>

		<!-- Page level custom scripts -->
		<script src="<?php echo base_url(); ?>/public/js/datatables-demo.js"></script>

	<script>
		$(window).load(function () {
			$(".pre-loader").fadeOut("slow");
		});

	</script>
</body>

</html>
