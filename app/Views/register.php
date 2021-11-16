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
		
		<form id="formD" name="formD" action="<?= base_url('rkat/save'); ?>" method="POST" enctype="multipart/form-data">
		<?= session()->getFlashdata('status'); ?>	
			<div class="card">
					<div class="card-header">Tambah Rencana RKAT</div>
					<?php foreach ($set_rkat as $key => $value) : $id_set = $value['id_setrkat'];?>
						<input type="hidden" class="form-control" id="id_set" value="<?= $id_set ?>" name="id_set[]" 
						required>
					<br>
					<div class="form-inline">
						<label class="mb-2 mr-sm-2" for="exampleFormControlSelect1" style="width: 150px;">Tahun Ajaran</label>
						<select class="form-control mb-2 mr-sm-2" id="exampleFormControlSelect1">
							<!-- <option value="<?= $value['tahun_akademik'] ?>" selected><?= $value['tahun_akademik'] ?> </option>-->
							<option value="" disabled selected>Pilih Tahun</option>
							<option value="2019/2020">2019/2020</option>
							<option value="2020/2021">2020/2021</option>
						</select>
					</div>
					<div class="form-inline">
						<label for="prodiunit" class="mb-2 mr-sm-2" style="width: 150px;">Program Studi/Unit</label>
						<input type="text" class="form-control mb-2 mr-sm-2" id="prodiunit" value="<?= $value['nama_prodi'] ?>" name="prodiunit"required disabled>
						<label for="pagu" class="mb-2 mr-sm-2">Jumlah Pagu</label>
						<input type="text" class="form-control mb-2 mr-sm-2" id="pagu" name="pagu" value="RP. <?= $value['pagu'] ?>" required disabled>
					</div>
					<?php endforeach; ?>
					<table class="table">
						<thead>
							<tr>
								<th>Kategori</th>
								<th>Kriteria</th>
								<th>Butir</th>
								<th>No Kegiatan</th>
								<th>Indikator</th>
								<th>Target</th>
								<th>Nama Kegiatan</th>
								<th>Anggaran Gasal</th>
								<th>Anggaran Genap</th>
								<th>Total</th>
							</tr>
						</thead>
						<tbody>
							<tr id="">
								<td>
									<select class="form-control" style="width: 80px;" id="kategori" name="kategori[]">
										<option value="" disabled selected>Pilih Kategori</option>
										<option value="PK">PK</option>
										<option value="OPS">OPS</option>
										<option value="INV">INV</option>
									</select>
								</td>
								<td>
									<select class="form-control" style="width: 80px;" id="kpi" name="kpi[]">
										<option value="" disabled selected>Pilih Kategori KPI</option>
										<option value="1">1 – Visi Misi Tujuan dan Strategi</option>
										<option value="2">2 - Tata Pamong, Tata Kelola, dan Kerjasama</option>
										<option value="3">3 - Mahasiswa</option>
										<option value="4">4 - Sumber Daya Manusia</option>
										<option value="5">5 - Keuangan, Sarana dan Prasarana</option>
										<option value="6">6 - Pendidikan</option>
										<option value="7">7 – Penelitian</option>
										<option value="8">8 - Pengabdian kepada Masyarakat (PkM)</option>
										<option value="9">9 - Luaran dan Capaian Tridharma</option>
									</select>
								</td>
								<td>
									<select class="form-control" style="width: 80px;" id="butir" name="butir[]">
										<option value="" disabled selected>Pilih butir</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
									</select>
								</td>
								<td>
									<input type="text" class="form-control" style="width: 90px;" id="no_kegiatan" placeholder="Masukan No Kegiatan" name="no_kegiatan[]" required>
								</td>
								<td>
									<input type="text" class="form-control" style="width: 120px;" id="indikator" placeholder="Masukan Indikator" name="indikator[]" required>
								</td>
								<td>
									<input type="text" class="form-control" style="width: 50px;" id="target" placeholder="Masukan Target" name="target[]" required>
								</td>
								<td>
									<input type="text" class="form-control" style="width: 120px;" id="nama_kegiatan" placeholder="Maksukan Nama Kegiatan" name="nama_kegiatan[]" required>
								</td>
								<td>
									<input type="text" class="form-control" style="width: 150px;" id="anggaranGasal" placeholder="Masukan Anggaran Gasal" name="anggaranGasal[]" onkeyup="OnChange(this.value)" onKeyPress="return isNumberKey(event)" required>
								</td>
								<td>
									<input type="text" class="form-control" style="width: 150px;" id="anggaranGenap" placeholder="Masukan Anggaran Genap" name="anggaranGenap[]" onkeyup="OnChange(this.value)" onKeyPress="return isNumberKey(event)" required>
								</td>
								<td>
									<input type="text" class="form-control" style="width: 150px;" id="total" name="total[]" placeholder="Total" readonly="readonly" required>
								</td>
								<?php foreach ($set_rkat as $key => $value) : $id_set = $value['id_setrkat'];?>
									<input type="hidden" class="form-control" id="id_set" value="<?= $id_set ?>" name="id_set[]" required>	
								<?php endforeach; ?>
							</tr>
							<tr>
								<td><button class="btn btn-success btn-block add-more" id="BarisBaru"><i class="fa fa-plus"></i> Baris Baru</button></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td>Total Keseluruhan</td>
								<td><input type="text" class="form-control" style="width: 150px;" id="pagu" name="pagu" value="RP. 100000000" required disabled></td>
								<td><input type="text" class="form-control" style="width: 150px;" id="pagu" name="pagu" value="RP. 100000000" required disabled></td>
								<td><input type="text" class="form-control" style="width: 150px;" id="pagu" name="pagu" value="RP. 100000000" required disabled></td>
							</tr>
						</tbody>
  					</table>
				
					<div class="card-footer">
					<button type="submit" class="btn btn-primary" >Tambah Data</button>
					</div>
				</div>

		</form>
		<!-- percobaan 
		<div class="copy hide">
			<tr>
								<td>
									<select class="form-control" style="width: 80px;" id="kategori" name="kategori[]">
										<option value="" disabled selected>Pilih Kategori</option>
										<option value="PK">PK</option>
										<option value="OPS">OPS</option>
										<option value="INV">INV</option>
									</select>
								</td>
								<td>
									<select class="form-control" style="width: 80px;" id="kpi" name="kpi[]">
										<option value="" disabled selected>Pilih Kategori KPI</option>
										<option value="1">1 – Visi Misi Tujuan dan Strategi</option>
										<option value="2">2 - Tata Pamong, Tata Kelola, dan Kerjasama</option>
										<option value="3">3 - Mahasiswa</option>
										<option value="4">4 - Sumber Daya Manusia</option>
										<option value="5">5 - Keuangan, Sarana dan Prasarana</option>
										<option value="6">6 - Pendidikan</option>
										<option value="7">7 – Penelitian</option>
										<option value="8">8 - Pengabdian kepada Masyarakat (PkM)</option>
										<option value="9">9 - Luaran dan Capaian Tridharma</option>
									</select>
								</td>
								<td>
									<select class="form-control" style="width: 80px;" id="butir" name="butir[]">
										<option value="" disabled selected>Pilih butir</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
									</select>
								</td>
								<td>
									<input type="text" class="form-control" style="width: 90px;" id="no_kegiatan" placeholder="Masukan No Kegiatan" name="no_kegiatan[]" required>
								</td>
								<td>
									<input type="text" class="form-control" style="width: 120px;" id="indikator" placeholder="Masukan Indikator" name="indikator[]" required>
								</td>
								<td>
									<input type="text" class="form-control" style="width: 50px;" id="target" placeholder="Masukan Target" name="target[]" required>
								</td>
								<td>
									<input type="text" class="form-control" style="width: 120px;" id="nama_kegiatan" placeholder="Maksukan Nama Kegiatan" name="nama_kegiatan[]" required>
								</td>
								<td>
									<input type="text" class="form-control" style="width: 150px;" id="anggaranGasal" placeholder="Masukan Anggaran Gasal" name="anggaranGasal[]" onkeyup="OnChange(this.value)" onKeyPress="return isNumberKey(event)" required>
								</td>
								<td>
									<input type="text" class="form-control" style="width: 150px;" id="anggaranGenap" placeholder="Masukan Anggaran Genap" name="anggaranGenap[]" onkeyup="OnChange(this.value)" onKeyPress="return isNumberKey(event)" required>
								</td>
								<td>
									<input type="text" class="form-control" style="width: 150px;" id="total" name="total[]" placeholder="Total" readonly="readonly" required>
								</td>
								<td>
								<button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
								</td>
								<?php foreach ($set_rkat as $key => $value) : $id_set = $value['id_setrkat'];?>
									<input type="hidden" class="form-control" id="id_set" value="<?= $id_set ?>" name="id_set[]" required>	
								<?php endforeach; ?>
							</tr>
		</div>
		-->
	<script>
		anggaranGasal = document.formD.anggaranGasal.value;
   		document.formD.total.value = anggaranGasal;
		anggaranGenap = document.formD.anggaranGenap.value;
   		document.formD.total.value = anggaranGenap;
		function OnChange(value){
			anggaranGasal = document.formD.anggaranGasal.value;
			anggaranGenap = document.formD.anggaranGenap.value;
			total = parseInt(anggaranGasal) + parseInt(anggaranGenap);
     		document.formD.total.value = total;
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
	<script>
		$(document).ready(function() {
		$(".add-more").click(function(){ 
			var html = $(".copy").html();
			$(".after-add-more").after(html);
		});

		// saat tombol remove dklik control group akan dihapus 
		$("body").on("click",".remove",function(){ 
			$(this).parents(".control-group").remove();
		});
		});
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