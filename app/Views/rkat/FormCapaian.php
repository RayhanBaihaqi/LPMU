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
	<link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,600;1,700;1,800&family=Roboto:wght@400;500&display=swap" rel="stylesheet">

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
                        <img src="<?php echo base_url(); ?>/public/img/logo-simonev.jpg" alt="Logo" style="float: right;">
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
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
				<a href="<?php echo site_url(); ?>backend"><i class="fas fa-long-arrow-alt-left"></i></a>
				<a href="#" class="navbar-brand">MENU</a>
				<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-between">
					<div class="navbar-nav mr-auto">
						<a href="<?php echo site_url(); ?>backend/rkat" class="nav-item nav-link ">Home</a>
						<a href="<?= base_url('/rkat/createbyuser') ?>" class="nav-item nav-link">Rencana Anggaran</a>
                        <a href="<?= base_url('/CapaianRkat/createcapaianbyuser') ?>" class="nav-item nav-link active">Realisasi Anggaran</a>
                        <a href="<?= base_url('/rkat/indexbyuser') ?>" class="nav-item nav-link">Kesimpulan</a>
					</div>
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
	</div>
	<div class="container-fluid">
		<div class="card">
			<div class="card-body">
				<h4 class="card-title">Formulir Target Capaian</h4>
			</div>
			<div class="card-body">
				<div class="form-group ">
					<label for="sel1">Kategori:</label>
					<select class="form-control kpi" id="sel1">
						<option>Pilih Kategori</option>
						<option>PK</option>
						<option>OPS</option>
						<option>INV</option>
					</select>
				</div>
				<form action="<?= base_url('rkat/updatebyuser'); ?>" method="POST" enctype="multipart/form-data">
				<table class="table table-borded table-responsive table-striped">
					<thead>
						<tr>
							<th>KPI - Butir</th>
							<th>No Kegiatan</th>
							<th>Indikator</th>
							<th>Target</th>
							<th>Nama Kegiatan</th>
							<th>Anggaran Gasal</th>
							<th>Serapan Gasal</th>
							<th>Anggaran Genap</th>
							<th>Serapan Genap</th>
							<th>Total Anggaran</th>
							<th>Total Serapan</th>
						</tr>
					</thead>
					<tbody id="nilai">
						<?php if ($detail_rkat) : ?>
							<?php foreach ($detail_rkat as $reading) : ?>
								<input required type="hidden" name="id" value="<?= $reading['id']; ?>">
								<input required type="hidden" name="id_set" value="<?= $reading['id_set']; ?>">
								<tr>
									<td>
										<?= $reading['kpi']; ?>.
										<?= $reading['butir']; ?>
									</td>
									<td><?= $reading['no_kegiatan']; ?></td>
									<td><?= $reading['indikator']; ?></td>
									<td><?= $reading['target']; ?></td>
									<td><?= $reading['nama_kegiatan']; ?></td>
									<td><?= $reading['anggaranGasal']; ?></td>
									<td><input type="text" class="form-control" style="width: 150px;" id="anggaranGasal" placeholder="Masukan Anggaran Gasal" name="anggaranGasal[]" onkeyup="OnChange(this.value)" onKeyPress="return isNumberKey(event)" required></td>
									<td><?= $reading['anggaranGenap']; ?></td>
									<td><input type="text" class="form-control" style="width: 150px;" id="anggaranGasal" placeholder="Masukan Anggaran Gasal" name="anggaranGasal[]" onkeyup="OnChange(this.value)" onKeyPress="return isNumberKey(event)" required></td>
									<td><?= $reading['total']; ?></td>
									<td><input type="text" class="form-control" style="width: 150px;" id="anggaranGasal" placeholder="Masukan Anggaran Gasal" name="anggaranGasal[]" onkeyup="OnChange(this.value)" onKeyPress="return isNumberKey(event)" required></td>
								</tr>
								<?php endforeach; ?>
						<?php endif; ?>
					</tbody>
						<tfoot>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td><span id="anggaranGanjil"></span></td>
									<td></td>
									<td><span id="anggaranGenap"></span></td>
									<td></td>
									<td><span id="total"></span></td>
									<td></td>
						</tfoot>
							
					
				</table>
				<button type="button" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
	<!-- JavaScript Libraries -->
	<script>
		var table = document.getElementById("nilai"), sumHsl = 0;
		for(var t = 1; t < table.rows.length; t++)
		{
			sumHsl = sumHsl + parseInt(table.rows[t].cells[5].innerHTML);
		}
		document.getElementById("anggaranGanjil").innerHTML = "Rp."+ sumHsl;
	</script>
	<script>
		var table = document.getElementById("nilai"), sumHsl = 0;
		for(var t = 1; t < table.rows.length; t++)
		{
			sumHsl = sumHsl + parseInt(table.rows[t].cells[7].innerHTML);
		}
		document.getElementById("anggaranGenap").innerHTML = "Rp."+ sumHsl;
	</script>
	<script>
		var table = document.getElementById("nilai"), sumHsl = 0;
		for(var t = 1; t < table.rows.length; t++)
		{
			sumHsl = sumHsl + parseInt(table.rows[t].cells[7].innerHTML);
		}
		document.getElementById("total").innerHTML = "Rp."+ sumHsl;
	</script>
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

			function filterData() {
				$('#tabelData').DataTable().search(
					$('.kpi').val()
				).draw();
			}
			$('.kpi').on('change', function() {
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
		$(window).load(function() {
			$(".pre-loader").fadeOut("slow");
		});
	</script>
</body>

</html>