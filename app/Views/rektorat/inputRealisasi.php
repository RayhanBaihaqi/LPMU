<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>List Rkat</title>

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
                <img src="<?php echo base_url(); ?>/public/img/monev_logo_putih.png" alt="Logo" style="width: 70px; height: 70px;">
                <div class="sidebar-brand-text mx-3">Rektorat</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
			<li class="nav-item active">
				<a class="nav-link " href="<?= base_url('/rektorat') ?>">
					<i class="fas fa-fw fa-tachometer-alt"></i>
					<span>Dashboard</span></a>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider">

			<!-- Heading -->
			<li class="nav-item">
				<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
					<i class="fas fa-fw fa-cog"></i>
					<span>RKAT</span>
				</a>
				<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
					<div class="bg-white py-2 collapse-inner rounded">
						<a class="collapse-item" href="<?= base_url('/rektorat/inputRencana') ?>">Input Rencana Anggaran</a>
						<a class="collapse-item" href="<?= base_url('/rektorat/inputRealisasi') ?>">Input Realisasi Anggaran</a>
						<a class="collapse-item" href="<?= base_url('/rektorat/listRkatRektorat') ?>">Daftar Data RKAT Rektorat</a>
						<a class="collapse-item" href="<?= base_url('/rektorat/rincian') ?>">Rincian Rkat</a>
						<a class="collapse-item" href="<?= base_url('/rektorat/listRkatProdi') ?>">Daftar Data RKAT Prodi</a>
						<a class="collapse-item" href="<?= base_url('/rektorat/listRkatUnit') ?>">Daftar Data RKAT Unit</a>
						<a class="collapse-item" href="<?= base_url('/rektorat/grafikSerap') ?>">Grafik Serapan</a>
					</div>
				</div>
			</li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>KPI</span></a>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= base_url('/rektorat/listcapaiankpi') ?>">Lihat Capaian</a>
                        <a class="collapse-item" href="<?= base_url('/rektorat/tabelcapaiankpi') ?>">Lihat Data Tabel</a>
                        <a class="collapse-item" href="<?= base_url('/rektorat/grafikcapaian') ?>">Lihat Data Grafik</a>
                    </div>
                </div>
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

                        <!-- Nav Item - user Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    <?php
                                    $nama_prodi = session('nama_prodi');
                                    echo "$nama_prodi"
                                    ?>
                                </span>
                            </a>
                            <!-- Dropdown - user Information -->
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
                    <h1 class="h3 mb-2 text-gray-800">Formulir Realisasi RKAT</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                    <div class="card-body">
				<form action="<?= base_url('rektorat/update'); ?>" method="POST" enctype="multipart/form-data">
				<div class="form-inline">
					<label class="mb-2 mr-sm-2" for="exampleFormControlSelect1" style="width: 150px;">Tahun Akademik</label>
					<input type="text" class="form-control mb-2 mr-sm-2" name="tahunAkademik" id="tahunAkademik" value="<?= $tahunAkademik['tahunAkademik'] ?>" disabled>
				</div>
					<div class="">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<thead>
								<tr>
									<th >No Kegiatan</th>
									<th >KPI-Butir</th>
									<th >Kategori</th>
									<th width="600px">Indikator - Nama Kegiatan</th>
									<th >Target</th>
									<th >Anggaran Ganjil</th>
									<th width="600px">Serapan Ganjil</th>
									<th >peren Ganjil</th>
									<th >Anggaran Genap</th>
									<th width="600px">Serapan Genap</th>
									<th >peren Genap</th>
								</tr>
							</thead>
							<tbody id="nilai">
								
									<?php
									$no = 1;
									foreach ($tahunAkademik2 as $key => $reading) : ?>
										<input required type="hidden" name="id_user" value="<?= $reading['id_user']; ?>">
										<tr>
											<td><?= $no; ?></td>
											<td><?= $reading['kpi']; ?> . <?= $reading['butir']; ?></td>
											<td><?= $reading['kategori']; ?></td>
											<td>
											<input type="hidden" class="form-control" id="id_tahun" value="<?= $tahunAkademik['id_tahun'] ?>" name="id_tahun" required>
												<ul class="list-group list-group-flush">
													<li class="list-group-item" width="600px"><?= $reading['indikator']; ?></li>
													<li class="list-group-item"><?= $reading['nama_kegiatan']; ?></li>
												</ul>
											</td>
											<td><?= $reading['target']; ?></td>
											<td><input type="text" class="form-control form-control-sm" id="aGanjil<?= $no; ?>" value="<?= $reading['anggaranGanjil']; ?>" disabled /></td>
											<td>
												<input style="display: none;" required type="text" name="id[]" id="id" value="<?= $reading['id_rkat']; ?>">
												<input type="text" class="form-control form-control-sm serapGanjil" id="serapGanjil<?= $no; ?>" placeholder="Rp. 0" name="serapGanjil[]" onkeyup="AddInputs(this.id);" required <?= ($reading['serapGanjil'] != "") ? "value='".$reading['serapGanjil']."' disabled" : "" ?>>
											</td>
											<td></td>
											<td><input type="text" class="form-control form-control-sm" id="aGenap<?= $no; ?>" value="<?= $reading['anggaranGenap']; ?>" disabled /></td>
											<td>
											<input type="text" class="form-control form-control-sm serapGenap" id="serapGenap<?= $no; ?>" placeholder="Rp. 0" name="serapGenap[]" onkeyup="AddInputs2(this.id);" required <?= ($reading['serapGenap'] != "") ? "value='".$reading['serapGanjil']."' disabled" : "" ?>>
											</td>
											<td></td>
										</tr>
									<?php $no++;
									endforeach; ?>
							</tbody>
							<tfoot>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td><span id="totalanggaranganjil"></span></td>
								<td><span id="tampilTotalGanjil"></span></td>
								<td><p>Persentase Serap: <input type="text" class="form-control form-control-sm " id="persenSerapGanjil" placeholder="0%" name="persenSerapGanjil"disabled></p></td>
								<td><span id="totalanggarangenap"></span></td>
								<td><span id="tampilTotalGenap"></span></td>
								<td><p>Persentase Serap: <input type="text" class="form-control form-control-sm" name="persenSerapGenap" id="persenSerapGenap"  /></p></td>

							</tfoot>


						</table>
						<div class="card-footer" align="center">
							<button type="submit" class="btn btn-primary" id="btnJumlah" value="submit">Simpan Data</button>
							<span id="textError"></span>
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

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
    <!-- JavaScript Libraries -->
	<script>
		var table = document.getElementById("nilai"),
			sumHsl = 0;
		for (var t = 0; t < table.rows.length; t++) {
			sumHsl = sumHsl + parseInt(table.rows[t].cells[5].getElementsByTagName('input')[0].value);
		}
		document.getElementById("totalanggaranganjil").innerHTML = sumHsl;
	</script>
	<script>
		var table = document.getElementById("nilai"),
			sumHsl = 0;
		for (var t = 0; t < table.rows.length; t++) {
			sumHsl = sumHsl + parseInt(table.rows[t].cells[8].getElementsByTagName('input')[0].value);
		}
		document.getElementById("totalanggarangenap").innerHTML = sumHsl;
	</script>
	<script>
		var table = document.getElementById("nilai"),
			sumHsl = 0;
		for (var t = 0; t < table.rows.length; t++) {
			sumHsl = sumHsl + parseInt(table.rows[t].cells[9].getElementsByTagName('input')[0].value);
		}
		document.getElementById("total").innerHTML = "Rp." + sumHsl;
	</script>
	<script>
		function AddInputs(clicked_id)
		{
			var totalGanjil = 0;
			var aGanjil = document.getElementById('totalanggaranganjil').innerHTML;
			
			var panjangDataSerapGanjil = document.querySelectorAll (".serapGanjil")
			// console.log(panjangDataSerapGanjil.length)
			for (let index = 1; index <= panjangDataSerapGanjil.length; index++) {
				var nilaiKolomGanjil = document.getElementById("serapGanjil"+index).value;
				totalGanjil += parseInt(nilaiKolomGanjil);
			}
			if (isNaN(totalGanjil)) {
				// console.log("Silahkan Isi Seluruh Kolom Data");
				var tampilTotalGanjil = document.getElementById("tampilTotalGanjil").innerHTML = "Silahkan Isi Seluruh Kolom Data";
			} else {
				console.log(totalGanjil);
				var tampilTotalGanjil = document.getElementById("tampilTotalGanjil").innerHTML = totalGanjil;
				
			}

			hitungGanjil = parseInt(totalGanjil) / parseInt(aGanjil) * 100;
			document.getElementById('persenSerapGanjil').value = hitungGanjil + "%";
			console.log(persenSerapGanjil);
		}
		function AddInputs2(clicked_id)
		{
			var totalGenap = 0;
			var aGenap = document.getElementById('totalanggarangenap').innerHTML;
			var panjangDataSerapGenap = document.querySelectorAll (".serapGenap")
			console.log(panjangDataSerapGenap.length)
			for (let index = 1; index <= panjangDataSerapGenap.length; index++) {
				var nilaiKolomGenap = document.getElementById("serapGenap"+index).value;
				totalGenap += parseInt(nilaiKolomGenap);
			}
			if (isNaN(totalGenap)) {
				console.log("Silahkan Isi Seluruh Kolom Data");
				var tampilTotalGenap = document.getElementById("tampilTotalGenap").innerHTML = "Silahkan Isi Seluruh Kolom Data";
			} else {
				console.log(totalGenap);
				var tampilTotalGenap = document.getElementById("tampilTotalGenap").innerHTML = totalGenap;
			}

			hitungGenap = parseInt(totalGenap) / parseInt(aGenap) * 100;
			document.getElementById('persenSerapGenap').value = hitungGenap + "%";
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