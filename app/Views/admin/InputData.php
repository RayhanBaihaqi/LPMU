<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Admin</title>

	<!-- Custom fonts for this template-->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
	<!-- Custom styles for this template-->
	<link href="<?php echo base_url(); ?>/public/css/style_admin.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>/public/css/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">

		<!-- Sidebar -->
		<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

			<!-- Sidebar - Brand -->
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
				<div class="sidebar-brand-icon rotate-n-15">
					<i class="fas fa-laugh-wink"></i>
				</div>
				<div class="sidebar-brand-text mx-3">Admin</div>
			</a>

			<!-- Divider -->
			<hr class="sidebar-divider my-0">

			<!-- Nav Item - Dashboard -->
			<li class="nav-item ">
				<a class="nav-link " href="<?php echo site_url(); ?>admin">
					<i class="fas fa-fw fa-tachometer-alt"></i>
					<span>Dashboard</span></a>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider">

			<!-- Heading -->
			<li class="nav-item active">
				<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
					<i class="fas fa-fw fa-cog"></i>
					<span>RKAT</span>
				</a>
				<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
					<div class="bg-white py-2 collapse-inner rounded">
						<a class="collapse-item" href="<?= base_url('rkat/createbyadmin') ?>">Tambah RKAT</a>
						<a class="collapse-item" href="<?= base_url('rkat/indexbyadmin') ?>">Lihat Data</a>
						<a class="collapse-item" href="<?= base_url('setrkat/create') ?>">Atur Semester dan Pagu</a>
						<a class="collapse-item" href="<?= base_url('setrkat/index') ?>">Lihat Data Set Rkat</a>
					</div>
				</div>
			</li>
			<!-- Divider -->
			<hr class="sidebar-divider">

			<!-- Heading -->
			<li class="nav-item">
				<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					<i class="fas fa-fw fa-tachometer-alt"></i>
					<span>KPI</span></a>
				<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
					<div class="bg-white py-2 collapse-inner rounded">

						<a class="collapse-item" href="<?= base_url('/admin/listkpi') ?>">Lihat KPI</a>
						<a class="collapse-item" href="<?= base_url('/admin/listbutirkpi') ?>">Lihat Butir KPI</a>
						<a class="collapse-item" href="<?= base_url('/admin/listcapaiankpi') ?>">Lihat Capaian</a>
					</div>
				</div>
			</li>

			<!-- Heading -->
			<div class="sidebar-heading">
				User
			</div>
			<li class="nav-item ">
				<a class="nav-link " href="<?= base_url('auth/index') ?>">
					<i class="fas fa-fw fa-tachometer-alt"></i>
					<span>Tabel User</span></a>
			</li>

		</ul>
		<!-- End of Sidebar -->

		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->
			<div id="content">

				<!-- Topbar -->
				<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

					<!-- Topbar Navbar -->
					<ul class="navbar-nav ml-auto">

						<div class="topbar-divider d-none d-sm-block"></div>

						<!-- Nav Item - User Information -->
						<li class="nav-item dropdown no-arrow">
							<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="mr-2 d-none d-lg-inline text-gray-600 small">
									<?php
									$nama_prodi = session('nama_prodi');
									echo "$nama_prodi"
									?>
								</span>
								<img class="img-profile rounded-circle" src="<?php echo base_url(); ?>/public/img/inf-logo.jpg">
							</a>
							<!-- Dropdown - User Information -->
							<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="<?= base_url('auth/logout') ?>">
									<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
									Logout
								</a>
							</div>
						</li>

					</ul>

				</nav>
				<!-- End of Topbar -->
				<!-- Begin Page Content -->
				<div class="container-fluid">

					<!-- Page Heading -->
					<h1 class="h3 mb-2 text-gray-800">Tambah Rencana RKAT</h1>

					<!-- DataTales Example -->
					<div class="card shadow mb-4">
						<div class="card-body">
							<div class="table-responsive">
								<form action="<?= base_url('rkat/savebyadmin'); ?>" method="POST" enctype="multipart/form-data">
									<input type="hidden" name="jumlah" id="jumlah" value="0">
									<?= session()->getFlashdata('status'); ?>	
									<div class="card">
									<div class="form-inline">
										<label class="mb-2 mr-sm-2" for="exampleFormControlSelect1" style="width: 150px;">Tahun Akademik</label>
										<select class="form-control mb-2 mr-sm-2" id="tahunAkademik" name="tahunAkademik" required>
											<option value="" disabled selected>Pilih Tahun</option>
											<option value="2019/2020">2019/2020</option>
											<option value="2020/2021">2020/2021</option>
										</select>
									</div>
										<table class="table table-borded table-responsive table-striped">
											<thead class="table-dark">
												<tr>
													<th width="600px"> Prodi/Unit </th>
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
													<td>
														<select class="form-control form-control-sm" id="id_set" name="id_set[]"  required>
															<option value="" disabled selected>Pilih Prodi/Unit</option>
															<option value="1">Akuntansi</option>
															<option value="2">Desain Komunikasi Visual</option>
															<option value="3">Informatika</option>
															<option value="4">Ilmu Komunikasi</option>
														</select>
													</td>
													<td>
														<select class="form-control form-control-sm" id="kategori" name="kategori[]" required>
															<option value="" disabled selected>Kategori</option>
															<option value="PK">PK</option>
															<option value="OPS">OPS</option>
															<option value="INV">INV</option>
														</select>
														<select class="form-control form-control-sm" id="kpi" name="kpi[]" required>
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
														<select class="form-control form-control-sm" id="butir" name="butir[]" required>
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
												</tr>								
											</tbody>
											<tfoot>
												<td> <!--<button type="button" class="btn btn-danger btn-sm" onclick="deleteRow('tbody2')"><i class="fa fa-minus"></i>Hapus Baris</button>--> </th> 
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
										<button type="submit" class="btn btn-primary" id="jumlah">Tambah Data</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End of Content Wrapper -->
		</div>
		<!-- End of Page Wrapper -->
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
			 console.log(table);
			var rowCount = table.rows.length;
			 console.log(rowCount);
			var row = table.insertRow(rowCount);
			 console.log(row);
			document.getElementById("jumlah").value = rowCount;
			var colCount = table.rows[0].cells.length;
			 //console.log(colCount);
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
									newcell.children[i2].setAttribute("required","required");
									newcell.children[i2].setAttribute("id","anggaranGasal1");
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

</body>

</html>