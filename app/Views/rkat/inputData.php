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
	<!-- <link href="?php echo base_url(); ?>/public/lib/animate/animate.min.css" rel="stylesheet">
	<link href="?php echo base_url(); ?>/public/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet"> -->


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
		
		<form id="satuan" name="formD" action="<?= base_url('rkat/save'); ?>" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="jumlah" id="jumlah">
		<?= session()->getFlashdata('status'); ?>	
			<div class="card">
					<div class="card-header">Tambah Rencana RKAT</div>
					<?php foreach ($set_rkat as $key => $value) : $id_set = $value['id_setrkat'];?>
						<input type="hidden" class="form-control" id="id_set" value="<?= $id_set ?>" name="id_set[]" 
						required>
					<br>
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
							<input type="text" class="form-control mb-2 mr-sm-2" id= "pagu" name="pagu" value="RP. <?= $value['pagu'] ?>" required disabled>
						</div>
						<?php endforeach; ?>
						<table class="table table-borded table-responsive table-striped">
							<thead class="table-dark">
								<tr>
									<th class="text-center" width="4"> Action </th>
									<th width="600px">Kategori - Kriteria - Butir</th>
									<th width="600px">No Kegiatan- Indikator </th>
									<th width="600px"> Target - Nama Kegiatan</th>
									<th width="600px">Anggaran Gasal</th>
									<th width="600px">Anggaran Genap</th>
									<th>Total</th>
								</tr>
							</thead>
							<tbody id="tbody2">
								<tr>
									<td><input name="chk_a[]" type="checkbox" class="checkall_a" value=""/></td>
									<td>
										<select class="form-control form-control-sm" id="kategori" name="kategori[]">
											<option value="" disabled selected>Kategori</option>
											<option value="PK">PK</option>
											<option value="OPS">OPS</option>
											<option value="INV">INV</option>
										</select>
										
										<select class="form-control form-control-sm" id="kpi" name="kpi[]">
											<option value="" disabled selected>Kriteria KPI</option>
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
										
										<select class="form-control form-control-sm" id="butir" name="butir[]">
											<option value="" disabled selected>Butir</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
										</select>
									</td>
									<td>
										<input type="text" class="form-control form-control-sm" id="no_kegiatan" placeholder="No Kegiatan" name="no_kegiatan[]" required>
									
										<input type="text" class="form-control form-control-sm" id="indikator" placeholder="Indikator" name="indikator[]" required>
									</td>
									<td>
										<input type="text" class="form-control form-control-sm" id="target" placeholder="Masukan Target" name="target[]" required>
									
										<input type="text" class="form-control form-control-sm" id="nama_kegiatan" placeholder="Nama Kegiatan" name="nama_kegiatan[]" required>
									</td>
									<td>
										<input type="text" class="form-control form-control-sm" id="anggaranGasal" placeholder="Rp. 0" name="anggaranGasal[]" onkeyup="totalAnggaran1();" required>
									</td>
									<td>
										<input type="text" class="form-control form-control-sm" id="anggaranGenap" placeholder="Rp. 0" name="anggaranGenap[]" onkeyup="totalAnggaran1();" required>
									</td>
									<td>
										<input type="text" class="form-control form-control-sm" id="total" name="total[]" placeholder="Rp. 0" readonly="readonly" required>
									</td>	
									<?php foreach ($set_rkat as $key => $value) : $id_set = $value['id_setrkat'];?>
										<input type="hidden" class="form-control" id="id_set" value="<?= $id_set ?>" name="id_set[]" required>	
									<?php endforeach; ?>
								</tr>

								
							</tbody>
							<tfoot>
								<td> <button type="button" class="btn btn-danger btn-sm" onclick="deleteRow('tbody2')"><i class="fa fa-minus"></i>Hapus Baris</button> </th>
								<td><button class="btn btn-success btn-sm" onclick="addRow('tbody2')" id="BarisBaru"><i class="fa fa-plus"></i> Baris Baru</button></td>
								<td></td>
<<<<<<< HEAD
								<td>Total Keseluruhan</td>
								<td><input type="text" class="form-control" style="width: 150px;" id="pagu1" name="pagu" value="RP. 0" required disabled></td>
								<td><input type="text" class="form-control" style="width: 150px;" id="pagu2" name="pagu" value="RP. 0" required disabled></td>
								<td><input type="text" class="form-control" style="width: 150px;" id="pagu3" name="pagu" value="RP. 0" required disabled></td>
							</tfoot>
						</table>
					</div>
					<div class="card-footer" align="center">
					<button type="submit" class="btn btn-primary" id="jumlah">Tambah Data</button>
					</div>
				</div>

=======
								<td colspan=2 align="right">Total Keseluruhan (Rp.)</td>
								<td><input type="text" class="form-control" style="width: 150px;" id="pagu1" name="pagu1" value="0" readonly="readonly"></td>
								<td><input type="text" class="form-control" style="width: 150px;" id="pagu2" name="pagu2" value="0" readonly="readonly"></td>
								<td><input type="text" class="form-control" style="width: 150px;" id="pagu3" name="pagu3" value="0" readonly="readonly"></td>
							</tr>
						</tbody>
  					</table>
				</div>
				<div class="card-footer">
					<button type="submit" class="btn btn-primary" id="tambah">Tambah Data</button>
				</div>
			</div>
>>>>>>> 5bf7bfcbafec92d781dabd8d341de27cd5dedc9f
		</form>

	<script>
		function totalAnggaran1() {
			var txtFirstNumberValue = document.getElementById('anggaranGasal').value;
			var txtSecondNumberValue = document.getElementById('anggaranGenap').value;
			var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
			if (!isNaN(result)) { document.getElementById('total').value = result; }
			
			var table = document.getElementById('tbody2');
			let pagu1 = txtFirstNumberValue;
			let pagu2 = txtSecondNumberValue;
			let pagu3 = result;
			document.getElementById('pagu1').value = pagu1;
			document.getElementById('pagu2').value = pagu2;
			document.getElementById('pagu3').value = pagu3;
			for (let index = 1; index <= table.rows.length; index++) {
				var txtFirstNumberValue = document.getElementById('anggaranGasal'+index).value;
				var txtSecondNumberValue = document.getElementById('anggaranGenap'+index).value;
				var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
				if (!isNaN(result)) { document.getElementById('total'+index).value = result; }
				pagu1 = parseInt(pagu1) + parseInt(document.getElementById('anggaranGasal'+index).value)
				document.getElementById('pagu1').value = pagu1;
				pagu2 = parseInt(pagu2) + parseInt(document.getElementById('anggaranGenap'+index).value)
				document.getElementById('pagu2').value = pagu2;
				pagu3 = parseInt(pagu3) + parseInt(document.getElementById('total'+index).value)
				document.getElementById('pagu3').value = pagu3;
			}			
		}
	</script>
	<script>

		// JavaScript Document
		function addRow(tableID) {
			var table = document.getElementById(tableID);
			// console.log(table);
			var rowCount = table.rows.length;
			// console.log(rowCount);
			var row = table.insertRow(rowCount);
			// console.log(row);
			document.getElementById('jumlah').value = rowCount;
			var colCount = table.rows[0].cells.length;
			// console.log(colCount);
			for(var i=0; i<colCount; i++) {
				var newcell = row.insertCell(i);
				newcell.innerHTML = table.rows[0].cells[i].innerHTML;
				var child = newcell.children;
				for(var i2=0; i2<child.length; i2++) {
					var test = newcell.children[i2].tagName;
					console.log(test)
					switch(test) {
						case "INPUT":
							if(newcell.children[i2].type=='checkbox'){
								newcell.children[i2].value = "";
								newcell.children[i2].checked = false;
							}else{
								if (i2==4) {
									newcell.children[i2].setAttribute("id","anggaranGasal1");
									newcell.children[i2].value = "";
								}
								else if (i2==5) {
									newcell.children[i2].setAttribute("id","anggaranGenap1");
									newcell.children[i2].value = "";
								}
								else {
									var ambilID = newcell.children[i2].getAttribute('id');
									newcell.children[i2].setAttribute("id",ambilID + rowCount);
									newcell.children[i2].value = "";
								}
							}
						break;
						case "SELECT":
							newcell.children[i2].value = "";
						break;
						default:
						break;
					}
				}
			}
		}
		function deleteRow(tableID){
			var table = document.getElementById(tableID);
			var rowCount = table.rows.length;
			for(var i=0; i<rowCount; i++){
				var row = table.rows[i];
				var chkbox = row.cells[0].childNodes[0];
				if (null != chkbox && true == chkbox.checked){
					if (rowCount <= 1){
						alert("Tidak dapat menghapus semua baris.");
						break;
					}
					table.deleteRow(i);
					rowCount--;
					i--;
				}
			}
		}
		
	</script>
	<!-- JavaScript Libraries -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
	<!-- <script src="?php echo base_url(); ?>/public/lib/easing/easing.min.js"></script>
	<script src="?php echo base_url(); ?>/public/lib/owlcarousel/owl.carousel.min.js"></script>
	<script src="?php echo base_url(); ?>/public/lib/isotope/isotope.pkgd.min.js"></script> -->
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

	<!-- <script src="?php echo base_url(); ?>/public/chart/apexcharts.min.js"></script> -->
	<!-- <script src="<?php echo base_url(); ?>/public/chart/dashboard.js"></script> -->
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