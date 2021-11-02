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
		<?php
			if(isset($_POST['jumlah'])){
		?>
		<form action="<?= base_url('rkat/save'); ?>" method="POST" enctype="multipart/form-data">	
			<div class="card">
					<div class="card-header">Tambah Data</div>
				<?php
					$jumlah = $_POST['jumlah'];
					for($a=1;$a<=$jumlah;$a++)
					{
				?>
				
					<div class="card-body">
					<?php foreach ($set_rkat as $key => $value) : $id_set = $value['id_setrkat'];?>
						<input type="hidden" class="form-control" id="id_set" value="<?= $id_set ?>" name="id_set[]" required>	
					<?php endforeach; ?>
						<h6 class="bg-dark text-white">Kegiatan <?= $a ?></h6><br>
						<!-- Akan Dilooping -->
						<div class="form-row">
							<div class="col-sm-2">
								<input type="hidden" name="jumlah" value="<?= $jumlah ?>">
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
								<input type="text" class="form-control mb-2 mr-sm-2" rows="5" id="keterangan<?= $a ?>" placeholder="Masukan Keterangan Kegiatan" name="keterangan[]" required></textarea>
							</div>
						</div>
					</div>
				<?php } ?>
				<?php
					} else { $jumlah = 0; }
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
	</script>
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