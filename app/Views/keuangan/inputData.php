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
                        <img src="<?php echo base_url(); ?>/public/img/monev_logo.png" alt="Logo" style="float: right;">
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
				<a href="#" class="navbar-brand">MENU</a>
				<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-between">
					<div class="navbar-nav mr-auto">
						<a href="<?php echo site_url(); ?>keuangan/home" class="nav-item nav-link">Home</a>
						<a href="<?= base_url('/keuangan/createbyuser') ?>" class="nav-item nav-link active">Rencana Anggaran</a>
                        <a href="<?= base_url('/CapaianRkat/createcapaianbykeuangan') ?>" class="nav-item nav-link">Realisasi Anggaran</a>
                        <a href="<?= base_url('/keuangan/indexbyuser') ?>" class="nav-item nav-link">Kesimpulan</a>
                        <a href="<?= base_url('/keuangan/grafikSerap') ?>" class="nav-item nav-link">Grafik Serap</a>
					</div>
					<div class="ml-auto">
						<div class="user-info-dropdown">
							<div class="dropdown">
								<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									<span class="user-name">
										<?php
                                            $nama_prodi = session('nama_prodi');
                                            echo "$nama_prodi"
                                        ?>
									</span>
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
									<a class="dropdown-item" href="<?= base_url('/keuangan/form_ubahpass') ?>"><i class="fas fa-cog"></i> Ubah Password</a>
                                    <a class="dropdown-item" href="<?php echo site_url(); ?>keuangan/index"><i class="fas fa-long-arrow-alt-left"></i> Kembali Halaman Awal</a>
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
		<input type="hidden" name="jumlah" id="jumlah" value="0">
		<?= session()->getFlashdata('status'); ?>	
			<div class="card">
					<div class="card-header">Tambah Rencana RKAT</div>
					
					<?php foreach ($pagu_rkat as $key => $value) : $id_pagu = $value['id_pagu'];?>
					<input type="hidden" class="form-control" id="id_pagu" value="<?= $id_pagu ?>" name="id_pagu" required>
					<input type="hidden" class="form-control" id="id_user" value="<?= $value['id_user'] ?>" name="id_user" required>
					<br>
					<div class="card-body">
						<input type="hidden" class="form-control" id="id_tahun" value="<?= $tahunAkademik['id_tahun'] ?>" name="id_tahun" required>
					<div class="form-inline">
						<label class="mb-2 mr-sm-2" for="exampleFormControlSelect1" style="width: 150px;">Tahun Akademik</label>
						<input type="text" class="form-control mb-2 mr-sm-2" name="tahunAkademik" id="tahunAkademik" value="<?= $tahunAkademik['tahunAkademik'] ?>" disabled>
												
					</div>
						<div class="form-inline" style="margin-bottom:20px;">
							<label for="prodiunit" class="mb-2 mr-sm-2" style="width: 150px;">Program Studi/Unit</label>
							<input type="text" class="form-control mb-2 mr-sm-2" id="prodiunit" value="<?= $value['nama_prodi'] ?>" name="prodiunit"required disabled>
							<label for="pagu" class="mb-2 mr-sm-2">Jumlah Pagu</label>
							<input type="text" class="form-control mb-2 mr-sm-2" id= "jumlah_pagu" name="jumlah_pagu" value="RP. <?= $value['jumlah_pagu'] ?>" required disabled>
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
										<select class="form-control form-control-sm" id="kategori" name="kategori[]" required>
											<option value="" disabled selected>Kategori</option>
											<option value="PK">PK</option>
											<option value="OPS">Oprasional</option>
											<option value="INV">Investasi</option>
										</select>
										<select class="form-control form-control-sm" id="kpi" name="kpi[]" required>
												<option value="" disabled selected>Pilih Prodi/Unit</option>
												<?php foreach ($kpi as $reading) : ?>
												<option value="<?= $reading['idkpi']; ?>"><?= $reading['nama_kpi']; ?></option>
												<?php endforeach; ?>
										</select>
										<input type="text" class="form-control form-control-sm" id="butir" placeholder="Butir" name="butir[]" required>
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
										<input type="text" class="form-control form-control-sm" id="anggaranGanjil" placeholder="Rp. 0" name="anggaranGanjil[]" onkeyup="totalAnggaran1();" required>
									</td>
									<td>
										<input type="text" class="form-control form-control-sm" id="anggaranGenap" placeholder="Rp. 0" name="anggaranGenap[]" onkeyup="totalAnggaran1();" required>
									</td>
									<td>
										<input type="text" class="form-control form-control-sm" id="total" name="total[]" placeholder="Rp. 0" readonly="readonly" required>
									</td>	
								</tr>								
							</tbody>
							<tfoot>
								<td><button type="button" class="btn btn-danger btn-sm" onclick="deleteRow('tbody2')"><i class="fa fa-minus"></i>Hapus Baris</button></th> 
								<td><button class="btn btn-success btn-sm" onclick="addRow('tbody2')" id="BarisBaru"><i class="fa fa-plus"></i> Baris Baru</button></td>
								<td></td>
								<td>Total Keseluruhan</td>
								<td><input type="text" class="form-control" style="width: 150px;" id="pagu1" name="pagu" value="RP. 0" required disabled></td>
								<td><input type="text" class="form-control" style="width: 150px;" id="pagu2" name="pagu" value="RP. 0" required disabled></td>
								<td><input type="text" class="form-control" style="width: 150px;" id="pagu3" name="pagu" value="RP. 0" required disabled></td>
							</tfoot>
						</table>
					</div>
					<div class="card-footer" align="center">
					<button type="submit" class="btn btn-primary" id="btnJumlah" value="Tambah Data">Tambah Data</button>
					<span id="textError"></span>
					</div>
				</div>

		</form>

	<script>
		function totalAnggaran1() {
			var txtFirstNumberValue = document.getElementById('anggaranGanjil').value;
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
			
			var buttonSend = document.getElementById('btnJumlah');
			if (pagu3 > <?= $value['jumlah_pagu'] ?>) {
				$('#pagu3').addClass('btn-danger');
				buttonSend.disabled = true;
				document.getElementById('textError').innerHTML = "Nilai Pagu yang anda masukkan melebihi Nilai Pagu yang anda miliki";
			} else {
				$('#pagu3').removeClass('btn-danger');
				buttonSend.disabled = false;
				document.getElementById('textError').innerHTML = "";
			}
			if (document.getElementById('anggaranGanjil1').value != null || document.getElementById('anggaranGenap1').value != null) {
				for (let index = 1; index <= table.rows.length; index++) {
				if (document.getElementById('anggaranGanjil'+index).value != null || document.getElementById('anggaranGenap'+index).value != null) {
					var txtFirstNumberValue = document.getElementById('anggaranGanjil'+index).value;
					var txtSecondNumberValue = document.getElementById('anggaranGenap'+index).value;
					var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
					if (!isNaN(result)) { document.getElementById('total'+index).value = result; }
					pagu1 = parseInt(pagu1) + parseInt(document.getElementById('anggaranGanjil'+index).value)
					document.getElementById('pagu1').value = pagu1;
					console.log(anggaranGanjil1);
					pagu2 = parseInt(pagu2) + parseInt(document.getElementById('anggaranGenap'+index).value)
					document.getElementById('pagu2').value = pagu2;
					pagu3 = parseInt(pagu3) + parseInt(document.getElementById('total'+index).value)
					document.getElementById('pagu3').value = pagu3;
				}
				var buttonSend = document.getElementById('btnJumlah');
				if (pagu3 > <?= $value['jumlah_pagu'] ?>) {
					$('#pagu3').addClass('btn-danger');
					buttonSend.disabled = true;
					document.getElementById('textError').innerHTML = "Nilai Pagu yang anda masukkan melebihi Nilai Pagu yang anda miliki";
				} else {
					$('#pagu3').removeClass('btn-danger');
					buttonSend.disabled = false;
					document.getElementById('textError').innerHTML = "";
				}
				}
			}
		}
	</script>
	<script>
		// JavaScript Document
		function addRow(tableID) {
			var table = document.getElementById(tableID);
			//  console.log(table);
			var rowCount = table.rows.length;
			 console.log(rowCount);
			var row = table.insertRow(rowCount);
			//  console.log(row);
			document.getElementById("jumlah").value = rowCount;
			var colCount = table.rows[0].cells.length;
			 //console.log(colCount);
			for(var i=0; i<colCount; i++) {
				var newcell = row.insertCell(i);
				newcell.innerHTML = table.rows[0].cells[i].innerHTML;
				var child = newcell.children;
				for(var i2=0; i2<child.length; i2++) {
					var test = newcell.children[i2].tagName;
					// console.log(test)
					switch(test) {
						case "INPUT":
							if(newcell.children[i2].type=='checkbox'){
								newcell.children[i2].value = "";
								newcell.children[i2].checked = false;
							}else{
								if (i2==4) {
									newcell.children[i2].setAttribute("required","required");
									newcell.children[i2].setAttribute("id","anggaranGanjil1");
									newcell.children[i2].value = "";
								}
								else if (i2==5) {
									newcell.children[i2].setAttribute("required","required");
									newcell.children[i2].setAttribute("id","anggaranGenap1");
									newcell.children[i2].value = "";
								}
								else {
									newcell.children[i2].setAttribute("required","required");
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
			console.log(rowCount);
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
			console.log(rowCount);
			document.getElementById("jumlah").value = rowCount;
		}
		
	</script>
	<!-- JavaScript Libraries -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
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