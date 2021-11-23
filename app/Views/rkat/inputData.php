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
		
		<form id="formD" name="formD" action="<?= base_url('rkat/save'); ?>" method="POST" enctype="multipart/form-data">
			<?= session()->getFlashdata('status'); ?>	
			<div class="card">
				<div class="card-header">Tambah Rencana RKAT</div>
					<?php foreach ($set_rkat as $key => $value) : $id_set = $value['id_setrkat'];?>
						<input type="hidden" class="form-control" id="id_set" value="<?= $id_set ?>" name="id_set[]" 
						required>
				<div class="card-body">
					<div class="form-inline">
						<label class="mb-2 mr-sm-2" for="exampleFormControlSelect1" style="width: 150px;">Tahun Ajaran</label>
						<select class="form-control mb-2 mr-sm-2" id="exampleFormControlSelect1">
							<!-- <option value="<?= $value['tahun_akademik'] ?>" selected><?= $value['tahun_akademik'] ?> </option>-->
							<option value="" disabled selected>Pilih Tahun</option>
							<option value="2019/2020">2019/2020</option>
							<option value="2020/2021">2020/2021</option>
						</select>
					</div>
					<div class="form-inline" style="margin-bottom:20px;">
						<label for="prodiunit" class="mb-2 mr-sm-2" style="width: 150px;">Program Studi/Unit</label>
						<input type="text" class="form-control mb-2 mr-sm-2" id="prodiunit" value="<?= $value['nama_prodi'] ?>" name="prodiunit"required disabled>
						<label for="pagu" class="mb-2 mr-sm-2">Jumlah Pagu</label>
						<input type="text" class="form-control mb-2 mr-sm-2" id=pagu" name="pagu" value="RP. <?= $value['pagu'] ?>" required disabled>
					</div>
					<?php endforeach; ?>
					<table class="table table-borded table-responsive table-striped">
						<thead class="table-dark">
							<tr>
								<th width="600px">Kategori - Kriteria - Butir</th>
								<th width="600px">No Kegiatan- Indikator </th>
								<th width="600px"> Target - Nama Kegiatan</th>
								<th width="600px">Anggaran Gasal (Rp.)</th>
								<th width="600px">Anggaran Genap (Rp.)</th>
								<th>Total</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<select class="form-control form-control-sm" id="kategori1" name="kategori1">
										<option value="" disabled selected>Pilih Kategori</option>
										<option value="PK">PK</option>
										<option value="OPS">OPS</option>
										<option value="INV">INV</option>
									</select>
									<select class="form-control form-control-sm" id="kpi1" name="kpi1">
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
									<select class="form-control form-control-sm" id="butir1" name="butir1">
										<option value="" disabled selected>Pilih butir</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
									</select>
								</td>
								<td>
									<input type="text" class="form-control form-control-sm" id="no_kegiatan1" placeholder="Masukan No Kegiatan" name="no_kegiatan1" required>
									<input type="text" class="form-control form-control-sm" id="indikator1" placeholder="Masukan Indikator" name="indikator1" required>
								</td>
								<td>
									<input type="text" class="form-control form-control-sm" id="target1" placeholder="Masukan Target" name="target1" required>
									<input type="text" class="form-control form-control-sm" id="nama_kegiatan1" placeholder="Maksukan Nama Kegiatan" name="nama_kegiatan1" required>
								</td>
								<td>
									<input type="number" class="form-control form-control-sm" id="anggaranGasal1" placeholder="Masukan Anggaran Gasal" name="anggaranGasal1" onkeyup="totalAnggaran1(); totalKeseluruhan();" value="0" required>
								</td>
								<td>
									<input type="number" class="form-control form-control-sm" id="anggaranGenap1" placeholder="Masukan Anggaran Genap" name="anggaranGenap1" onkeyup="totalAnggaran1(); totalKeseluruhan();" value="0" required>
								</td>
								<td>
									<input type="text" class="form-control form-control-sm" id="total1" name="total1" placeholder="Total" readonly="readonly" required>
								</td>
								<?php foreach ($set_rkat as $key => $value) : $id_set = $value['id_setrkat'];?>
									<input type="hidden" class="form-control" id="id_set1" value="<?= $id_set ?>" name="id_set1" required>	
								<?php endforeach; ?>
							</tr>
							<tr>
								<td>
									<select class="form-control form-control-sm" id="kategori2" name="kategori2">
										<option value="" disabled selected>Pilih Kategori</option>
										<option value="PK">PK</option>
										<option value="OPS">OPS</option>
										<option value="INV">INV</option>
									</select>
									<select class="form-control form-control-sm" id="kpi2" name="kpi2">
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
									<select class="form-control form-control-sm" id="butir2" name="butir2">
										<option value="" disabled selected>Pilih butir</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
									</select>
								</td>
								<td>
									<input type="text" class="form-control form-control-sm" id="no_kegiatan2" placeholder="Masukan No Kegiatan" name="no_kegiatan2">
									<input type="text" class="form-control form-control-sm" id="indikator2" placeholder="Masukan Indikator" name="indikator2">
								</td>
								<td>
									<input type="text" class="form-control form-control-sm" id="target2" placeholder="Masukan Target" name="target2">
									<input type="text" class="form-control form-control-sm" id="nama_kegiatan2" placeholder="Maksukan Nama Kegiatan" name="nama_kegiatan2">
								</td>
								<td>
									<input type="number" class="form-control form-control-sm" id="anggaranGasal2" placeholder="Masukan Anggaran Gasal" name="anggaranGasal2" onkeyup="totalAnggaran2(); totalKeseluruhan();" value="0">
								</td>
								<td>
									<input type="number" class="form-control form-control-sm" id="anggaranGenap2" placeholder="Masukan Anggaran Genap" name="anggaranGenap2" onkeyup="totalAnggaran2(); totalKeseluruhan();" value="0">
								</td>
								<td>
									<input type="text" class="form-control form-control-sm" id="total2" name="total2" placeholder="Total" readonly="readonly">
								</td>
								<?php foreach ($set_rkat as $key => $value) : $id_set = $value['id_setrkat'];?>
									<input type="hidden" class="form-control" id="id_set2" value="<?= $id_set ?>" name="id_set2">	
								<?php endforeach; ?>
							</tr>
							<tr>
								<td>
									<select class="form-control form-control-sm" id="kategori3" name="kategori3">
										<option value="" disabled selected>Pilih Kategori</option>
										<option value="PK">PK</option>
										<option value="OPS">OPS</option>
										<option value="INV">INV</option>
									</select>
									<select class="form-control form-control-sm" id="kpi3" name="kpi3">
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
									<select class="form-control form-control-sm" id="butir3" name="butir3">
										<option value="" disabled selected>Pilih butir</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
									</select>
								</td>
								<td>
									<input type="text" class="form-control form-control-sm" id="no_kegiatan3" placeholder="Masukan No Kegiatan" name="no_kegiatan3">
									<input type="text" class="form-control form-control-sm" id="indikator3" placeholder="Masukan Indikator" name="indikator3">
								</td>
								<td>
									<input type="text" class="form-control form-control-sm" id="target3" placeholder="Masukan Target" name="target3">
									<input type="text" class="form-control form-control-sm" id="nama_kegiatan3" placeholder="Maksukan Nama Kegiatan" name="nama_kegiatan3">
								</td>
								<td>
									<input type="number" class="form-control form-control-sm" id="anggaranGasal3" placeholder="Masukan Anggaran Gasal" name="anggaranGasal3" onkeyup="totalAnggaran3(); totalKeseluruhan();" value="0">
								</td>
								<td>
									<input type="number" class="form-control form-control-sm" id="anggaranGenap3" placeholder="Masukan Anggaran Genap" name="anggaranGenap3" onkeyup="totalAnggaran3(); totalKeseluruhan();" value="0">
								</td>
								<td>
									<input type="text" class="form-control form-control-sm" id="total3" name="total3" placeholder="Total" readonly="readonly">
								</td>
								<?php foreach ($set_rkat as $key => $value) : $id_set = $value['id_setrkat'];?>
									<input type="hidden" class="form-control" id="id_set3" value="<?= $id_set ?>" name="id_set3">	
								<?php endforeach; ?>
							</tr>
							<tr>
								<td>
									<select class="form-control form-control-sm" id="kategori4" name="kategori4">
										<option value="" disabled selected>Pilih Kategori</option>
										<option value="PK">PK</option>
										<option value="OPS">OPS</option>
										<option value="INV">INV</option>
									</select>
									<select class="form-control form-control-sm" id="kpi4" name="kpi4">
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
									<select class="form-control form-control-sm" id="butir4" name="butir4">
										<option value="" disabled selected>Pilih butir</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
									</select>
								</td>
								<td>
									<input type="text" class="form-control form-control-sm" id="no_kegiatan4" placeholder="Masukan No Kegiatan" name="no_kegiatan4">
									<input type="text" class="form-control form-control-sm" id="indikator4" placeholder="Masukan Indikator" name="indikator4">
								</td>
								<td>
									<input type="text" class="form-control form-control-sm" id="target4" placeholder="Masukan Target" name="target4">
									<input type="text" class="form-control form-control-sm" id="nama_kegiatan4" placeholder="Maksukan Nama Kegiatan" name="nama_kegiatan4">
								</td>
								<td>
									<input type="number" class="form-control form-control-sm" id="anggaranGasal4" placeholder="Masukan Anggaran Gasal" name="anggaranGasal4" onkeyup="totalAnggaran4();  totalKeseluruhan();" value="0">
								</td>
								<td>
									<input type="number" class="form-control form-control-sm" id="anggaranGenap4" placeholder="Masukan Anggaran Genap" name="anggaranGenap4" onkeyup="totalAnggaran4();  totalKeseluruhan();" value="0">
								</td>
								<td>
									<input type="text" class="form-control form-control-sm" id="total4" name="total4" placeholder="Total" readonly="readonly">
								</td>
								<?php foreach ($set_rkat as $key => $value) : $id_set = $value['id_setrkat'];?>
									<input type="hidden" class="form-control" id="id_set4" value="<?= $id_set ?>" name="id_set4">	
								<?php endforeach; ?>
							</tr>
							<tr>
								<td>
									<select class="form-control form-control-sm" id="kategori5" name="kategori5">
										<option value="" disabled selected>Pilih Kategori</option>
										<option value="PK">PK</option>
										<option value="OPS">OPS</option>
										<option value="INV">INV</option>
									</select>
									<select class="form-control form-control-sm" id="kpi5" name="kpi5">
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
									<select class="form-control form-control-sm" id="butir5" name="butir5">
										<option value="" disabled selected>Pilih butir</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
									</select>
								</td>
								<td>
									<input type="text" class="form-control form-control-sm" id="no_kegiatan5" placeholder="Masukan No Kegiatan" name="no_kegiatan5">
									<input type="text" class="form-control form-control-sm" id="indikator5" placeholder="Masukan Indikator" name="indikator5">
								</td>
								<td>
									<input type="text" class="form-control form-control-sm" id="target5" placeholder="Masukan Target" name="target5">
									<input type="text" class="form-control form-control-sm" id="nama_kegiatan5" placeholder="Maksukan Nama Kegiatan" name="nama_kegiatan5">
								</td>
								<td>
									<input type="number" class="form-control form-control-sm" id="anggaranGasal5" placeholder="Masukan Anggaran Gasal" name="anggaranGasal5" onkeyup="totalAnggaran5();  totalKeseluruhan();" value="0">
								</td>
								<td>
									<input type="number" class="form-control form-control-sm" id="anggaranGenap5" placeholder="Masukan Anggaran Genap" name="anggaranGenap5" onkeyup="totalAnggaran5();  totalKeseluruhan();" value="0">
								</td>
								<td>
									<input type="text" class="form-control form-control-sm" id="total5" name="total5" placeholder="Total" readonly="readonly">
								</td>
								<?php foreach ($set_rkat as $key => $value) : $id_set = $value['id_setrkat'];?>
									<input type="hidden" class="form-control" id="id_set5" value="<?= $id_set ?>" name="id_set5">	
								<?php endforeach; ?>
							</tr>
						</tbody>
						<tfoot>
							<td></td>
							<td colspan=2 align="right">Total Keseluruhan (Rp.)</td>
							<td><input type="text" class="form-control" style="width: 150px;" id="pagu1" name="pagu1" value="1" disabled></td>
							<td><input type="text" class="form-control" style="width: 150px;" id="pagu2" name="pagu2" value="1" disabled></td>
							<td><input type="text" class="form-control" style="width: 150px;" id="pagu3" name="pagu3" value="1" disabled></td>
						</tfoot>
  					</table>
				</div>
					<div class="card-footer">
						<button type="submit" class="btn btn-primary" id="tambah">Tambah Data</button>
					</div>
				</div>
		</form>
	</div>
	
	<!-- JavaScript Libraries -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
	<!-- <script src="lib/easing/easing.min.js"></script>
	<script src="lib/owlcarousel/owl.carousel.min.js"></script>
	<script src="lib/isotope/isotope.pkgd.min.js"></script> -->
	<script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
	<script>
		$(window).load(function () {
			$(".pre-loader").fadeOut("slow");
		});

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
	    // anggaranGasal = document.formD.anggaranGasal.value;
   		// document.formD.total.value = anggaranGasal;
		// anggaranGenap = document.formD.anggaranGenap.value;
   		// document.formD.total.value = anggaranGenap;
		// function OnChange(value){
		// 	anggaranGasal = document.formD.anggaranGasal.value;
		// 	anggaranGenap = document.formD.anggaranGenap.value;
		// 	total = parseInt(anggaranGasal) + parseInt(anggaranGenap);
     	// 	document.formD.total.value = total;
		// } 
		function totalAnggaran1() {
			var txtFirstNumberValue = document.getElementById('anggaranGasal1').value;
			var txtSecondNumberValue = document.getElementById('anggaranGenap1').value;
			var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
			if (!isNaN(result)) { document.getElementById('total1').value = result; }
		}
		function totalAnggaran2() {
			var txtFirstNumberValue = document.getElementById('anggaranGasal2').value;
			var txtSecondNumberValue = document.getElementById('anggaranGenap2').value;
			var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
			if (!isNaN(result)) { document.getElementById('total2').value = result; }
		}
		function totalAnggaran3() {
			var txtFirstNumberValue = document.getElementById('anggaranGasal3').value;
			var txtSecondNumberValue = document.getElementById('anggaranGenap3').value;
			var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
			if (!isNaN(result)) { document.getElementById('total3').value = result; }
		}
		function totalAnggaran4() {
			var txtFirstNumberValue = document.getElementById('anggaranGasal4').value;
			var txtSecondNumberValue = document.getElementById('anggaranGenap4').value;
			var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
			if (!isNaN(result)) { document.getElementById('total4').value = result; }
		}
		function totalAnggaran5() {
			var txtFirstNumberValue = document.getElementById('anggaranGasal5').value;
			var txtSecondNumberValue = document.getElementById('anggaranGenap5').value;
			var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
			if (!isNaN(result)) { document.getElementById('total5').value = result; }
		}

		function totalKeseluruhan() {
			var anggaranGasal1 = document.getElementById('anggaranGasal1').value;
			var anggaranGasal2 = document.getElementById('anggaranGasal2').value;
			var anggaranGasal3 = document.getElementById('anggaranGasal3').value;
			var anggaranGasal4 = document.getElementById('anggaranGasal4').value;
			var anggaranGasal5 = document.getElementById('anggaranGasal5').value;

			var anggaranGenap1 = document.getElementById('anggaranGenap1').value;
			var anggaranGenap2 = document.getElementById('anggaranGenap2').value;
			var anggaranGenap3 = document.getElementById('anggaranGenap3').value;
			var anggaranGenap4 = document.getElementById('anggaranGenap4').value;
			var anggaranGenap5 = document.getElementById('anggaranGenap5').value;

			var result1 = parseInt(anggaranGasal1) + parseInt(anggaranGasal2) + parseInt(anggaranGasal3) + parseInt(anggaranGasal4) + parseInt(anggaranGasal5);
			var result2 = parseInt(anggaranGenap1) + parseInt(anggaranGenap2) + parseInt(anggaranGenap3) + parseInt(anggaranGenap4) + parseInt(anggaranGenap5);
			var result3 = parseInt(result1) + parseInt(result2);
			
			document.getElementById('pagu1').value = result1;
			document.getElementById('pagu2').value = result2;
			document.getElementById('pagu3').value = result3;
			
		}

	</script>
	
</body>

</html>