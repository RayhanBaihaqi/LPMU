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
	<link href="http://localhost:8080/css/dataTables.bootstrap4.min.css" rel="stylesheet">


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
	<div class="container-fluid">
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
									<a class="dropdown-item" href="/auth/logout"><i class="fas fa-sign-out-alt"></i> Log
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
		<!-- Responsive tables Start -->
		<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Data Rencana Kegiatan dan Anggaran Tahunan (RKAT) 
						<?php 
							$nama_prodi = session('nama_prodi');
							echo "$nama_prodi"
                    	?>
						</h4>
                  <div class="table-responsive">
                  <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                  	<thead>
										<tr>
											<th>No</th>
											<th>Nama Kegiatan</th>
											<th>Jenis Biaya</th>
											<th>Anggaran</th>
											<th>Keterangan</th>
                                            <th>Jenis KPI</th>
											<th>Butir</th>
											<th>Jenis Anggaran</th>
											<th>Actions</th>
										</tr>
									</thead>
                                    <tbody>
									<?php $i = 1;?>
                                        <?php foreach ($detail_rkat as $key => $value) : ?>
										<tr>
											<td scope="row"><?= $i++; ?></td>
											<td><?= $value['nama_kegiatan']; ?></td>
											<td><?= $value['semester']; ?></td>
											<td><?= $value['anggaran']; ?></td>
											<td><?= $value['keterangan']; ?></td>
                                            <td><?= $value['jenis_kpi']; ?></td>
											<td><?= $value['butir']; ?></td>
											<td><?= $value['jenis_anggaran']; ?></td>
											<td>
												<a href="<?= base_url('rkat/editbyuser/'.$value['id']); ?>"
													class="button button2"><i class="fas fa-edit"></i></a>
												<a href="<?= base_url('rkat/deletebyuser/'.$value['id']); ?>"
													class="button button2"><i class="fas fa-trash-alt"></i></a>
											</td>
										</tr>
										<?php endforeach; ?>
									</tbody>
                  </table>
                </div>
                </div>
              </div>
            </div>
		<!-- Responsive tables End -->

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

		<!-- Bootstrap core JavaScript-->
		<script src="http://localhost:8080/js/jquery.min.js"></script>
		<script src="http://localhost:8080/js/bootstrap.bundle.min.js"></script>

		<!-- Page level plugins -->
		<script src="http://localhost:8080/js/jquery.dataTables.min.js"></script>
		<script src="http://localhost:8080/js/dataTables.bootstrap4.min.js"></script>

		<!-- Page level custom scripts -->
		<script src="http://localhost:8080/js/datatables-demo.js"></script>

	<script>
		$(window).load(function () {
			$(".pre-loader").fadeOut("slow");
		});

	</script>
</body>

</html>
