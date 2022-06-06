<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Dashboard RKAT</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="Law Firm Website Template" name="keywords">
	<meta content="Law Firm Website Template" name="description">

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>/public//favicon.ico" />

	<!-- Google Font -->
	<link
		href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,600;1,700;1,800&family=Roboto:wght@400;500&display=swap"
		rel="stylesheet">

	<!-- CSS Libraries -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
	<!-- <link href="?php echo base_url(); ?>lib/animate/animate.min.css" rel="stylesheet">
	<link href="?php echo base_url(); ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet"> -->


	<!-- Template Stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/public/css/header.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/public/css/style2.css">
	<link href="<?php echo base_url(); ?>/public/css/dataTables.bootstrap4.min.css" rel="stylesheet">


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
						<a href="<?= base_url('/keuangan/createbyuser') ?>" class="nav-item nav-link">Rencana Anggaran</a>
                        <a href="<?= base_url('/CapaianRkat/createcapaianbykeuangan') ?>" class="nav-item nav-link">Realisasi Anggaran</a>
                        <a href="<?= base_url('/keuangan/indexbyuser') ?>" class="nav-item nav-link">Kesimpulan</a>
                        <a href="<?= base_url('/keuangan/ListRkatProdi') ?>" class="nav-item nav-link active">List Data Prodi</a>
                        <a href="<?= base_url('/keuangan/ListRkatUnit') ?>" class="nav-item nav-link">List Data Unit</a>
                        <a href="<?= base_url('/keuangan/grafikSerapProdi') ?>" class="nav-item nav-link">Grafik Serap Prodi</a>
                        <a href="<?= base_url('/keuangan/grafikSerapUnit') ?>" class="nav-item nav-link">Grafik Serap Unit</a>
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
		<!-- Responsive tables Start -->
		<div class="col-lg-12 grid-margin stretch-card">
		<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <span></span></a>
                        </div>

                        <div class="container-fluid">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Pilih Nama Prodi</label>
                                <select class="form-control filter-satuan" id="categoryFilter">
                                    <option value="" disabled selected>Pilih Nama Prodi</option>
                                    <?php foreach ($userprodi as $value) : ?>
                                        <option value="<?= $value['id']; ?>"><?= $value['nama_prodi']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>id</th>
                                            <th>Prodi/Unit</th>
                                            <th>Kategori</th>
                                            <th>No Kegiatan</th>
                                            <th>Target</th>
                                            <th>Indikator</th>
                                            <th>Nama Kegiatan</th>
                                            <th>KPI</th>
                                            <th>Butir</th>
                                            <th>Anggaran Gasal</th>
                                            <th>Anggaran Ganjil</th>
                                            <th>Serap Ganjil</th>
                                            <th>Serap Genap</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php if ($detail_rkat) : ?>
                                            <?php foreach ($detail_rkat as $value) : ?>
                                                <tr>
                                                    <td scope="row"><?= $i++; ?></td>
                                                    <td><?= $value['id']; ?></td>
                                                    <td><?= $value['nama_prodi']; ?></td>
                                                    <td><?= $value['kategori']; ?></td>
                                                    <td><?= $value['no_kegiatan']; ?></td>
                                                    <td><?= $value['target']; ?></td>
                                                    <td><?= $value['indikator']; ?></td>
                                                    <td><?= $value['nama_kegiatan']; ?></td>
                                                    <td><?= $value['kpi']; ?></td>
                                                    <td><?= $value['butir']; ?></td>
                                                    <td><?= $value['anggaranGanjil']; ?></td>
                                                    <td><?= $value['anggaranGenap']; ?></td>
                                                    <td><?= $value['serapGanjil']; ?></td>
                                                    <td><?= $value['serapGenap']; ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
		</div>
		<!-- Responsive tables End -->

	</div>

	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
	<script>
		// Add the following code if you want the name of the file appear on select
		$(".custom-file-input").on("change", function() {
			var fileName = $(this).val().split("\\").pop();
			$(this).siblings(".custom-file-label").addClass("selected").html(fileName);
		});
	</script>

	<script>
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
	<script src="<?php echo base_url(); ?>/public/chart/jquery.knob.min.js"></script>
	<script src="<?php echo base_url(); ?>/public/chart/knob-chart-setting.js"></script>
	<script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
	<script>
		$(window).load(function() {
			$(".pre-loader").fadeOut("slow");
		});
	</script>
	<!-- Page level custom scripts -->
	<script src="<?php echo base_url(); ?>/public/js/datatables-demo.js"></script>
	<!-- Page level plugins -->
	<script src="<?php echo base_url(); ?>/public/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url(); ?>/public/js/dataTables.bootstrap4.min.js"></script>
</body>

</html>
