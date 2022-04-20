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
                            <img src="<?php echo base_url(); ?>/public/img/logo-upj.png" alt="Logo">
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="logo">
                            <H5 style="text-align: center;">SISTEM INFORMASI MONITORING DAN EVALUASI</H5>
                            <p style="text-align: center;">UNIVERSITAS PEMBANGUNAN JAYA</p>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="logo">
                        <img src="<?php echo base_url(); ?>/public/img/monev_logo.png" alt="Logo" style="float: right;">
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
		<form action="<?= base_url('rkat/save'); ?>" method="POST" enctype="multipart/form-data">	
			<div class="card">
					<div class="card-header">Tambah Data</div>
				
					<div class="card-body">
						<h6 class="bg-dark text-white">Kegiatan <?= $a ?></h6><br>
						<!-- Akan Dilooping -->
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
												<th>Aksi</th>
											</tr>
										</thead>
										<?php for ($i=1; $i <= $jumlah; $i++) : ?>
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
												<td>
												<a href=""
													class="button button2"><i class="fas fa-edit"></i></a>
												<a href="<?= base_url('rkat/deletebyadmin/'.$i); ?>"
													class="button button2"><i class="fas fa-trash-alt"></i></a>
											</td>
											</tr>
										</tbody>
									<?php endfor; ?>
                				</table>
					</div>
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
                				
            				</div>
            				<div class="modal-footer">
                				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                				<button type="submit" class="btn btn-primary" id="tambah">Tambah Data</button>
            				</div>
        				</div>
    				</div>
				</div>
		</form>
	<script>
		function cetak(){
			<?php for ($i=1; $i <= $jumlah; $i++) : ?>
			var nama_kegiatan<?= $i ?> = document.getElementById("nama_kegiatan<?= $i ?>").value ;
			var anggaran<?= $i ?> = document.getElementById("anggaran<?= $i ?>").value ;
			var semester<?= $i ?> = document.getElementById("semester<?= $i ?>").value ;
			var keterangan<?= $i ?> = document.getElementById("keterangan<?= $i ?>").value ;
			var jenis_kpi<?= $i ?> = document.getElementById("jenis_kpi<?= $i ?>").value ;
			var butir<?= $i ?> = document.getElementById("butir<?= $i ?>").value ;
			var jenis_anggaran<?= $i ?> = document.getElementById("jenis_anggaran<?= $i ?>").value ;
			document.getElementById("jsnama_kegiatan<?= $i ?>").innerHTML = "<b>" + nama_kegiatan<?= $i ?> +"</b>";
			document.getElementById("jsanggaran<?= $i ?>").innerHTML = "<b>" + anggaran<?= $i ?> +"</b>";
			document.getElementById("jssemester<?= $i ?>").innerHTML = "<b>" + semester<?= $i ?> +"</b>";
			document.getElementById("jsketerangan<?= $i ?>").innerHTML = "<b>" + keterangan<?= $i ?> +"</b>";
			document.getElementById("jsjenis_kpi<?= $i ?>").innerHTML = "<b>" + jenis_kpi<?= $i ?> +"</b>";
			document.getElementById("jsbutir<?= $i ?>").innerHTML = "<b>" + butir<?= $i ?> +"</b>";
			document.getElementById("jsjenis_anggaran<?= $i ?>").innerHTML = "<b>" + jenis_anggaran<?= $i ?> +"</b>";
			<?php endfor; ?>
		}
		function hapus(){
			
		}
	</script>
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

	<!-- <script src="?php echo base_url(); ?>/public/chart/apexcharts.min.js"></script>
	<script src="?php echo base_url(); ?>/public/chart/dashboard.js"></script> -->
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