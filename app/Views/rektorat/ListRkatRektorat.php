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
<style>
		@page{
			margin: 10px;
		}
		.h4{
				font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
			}
		.table {
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            .table td, .table th {
                border: 1px solid #ddd;
                padding: 8px;
            }

            .table th {
                padding-top: 10px;
                padding-bottom: 10px;
                text-align: left;
                background-color:Gray;
                color: white;
            }
	</style>
		<?php
			$pdf = false;
			if (strpos(current_url(), "pdfListData")) {
				$pdf = true;
			}
			if($pdf == false){
		?>

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

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    <?php
                                    $nama_prodi = session('nama_prodi');
                                    echo "$nama_prodi"
                                    ?>
                                </span>
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
                    <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body"><input type="button" class="btn btn-outline-secondary" style="float: right;" value="Download PDF" onclick="window.open('<?php echo base_url('pdf/pdfListData') ?>','blank')"></div>
                                </div>
                            </div>
                        
                    <?php } ?>
                    <div class="col-lg-12 grid-margin stretch-card">
			
            <div class="card">
                <div class="card-body">
					<h4 >Data Rencana Kegiatan dan Anggaran Tahunan (RKAT) </h4><hr>
						<p>Tahun Akademik : <?= $tahunAkademik['tahunAkademik'] ?></p>	
						<p>Prodi/Unit : <?php $nama_prodi = session('nama_prodi');
							echo "$nama_prodi"
                    	?></p>					
						<table class="table" id="dataTable" width="100%" cellspacing="0">
							<thead>
								<tr>
									<th>No</th>
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
								<?php $i = 1;?>
								<?php if ($detail_rkat2) : ?>
									<?php foreach ($detail_rkat2 as $value) : ?>
										<tr>
											<td scope="row"><?= $i++; ?></td>
											<td><?= $value['kategori']; ?></td>
											<td><?= $value['no_kegiatan']; ?></td>
											<td><?= $value['target']; ?></td>
											<td><?= $value['indikator']; ?></td>
											<td><?= $value['nama_kegiatan']; ?></td>
											<td><?= $value['kpi']; ?></td>
											<td><?= $value['butir']; ?></td>
											<td>Rp.<?= $value['anggaranGanjil']; ?></td>
											<td>Rp.<?= $value['anggaranGenap']; ?></td>
											<td>Rp.<?= $value['serapGanjil']; ?></td>
											<td>Rp.<?= $value['serapGenap']; ?></td>
										</tr>
									<?php endforeach; ?>
								<?php endif; ?>
							</tbody>
						</table>
					<h4 >Kesimpulan
						<?php 
							$nama_prodi = session('nama_prodi');
							echo "$nama_prodi"
                    	?>
					</h4>
					
					<div class="row">
						<div class="col-sm-6">
							<p>Total Rencana:</p>
							<table class="table" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Kategori</th>
										<th>Ganjil</th>
										<th>Genap</th>
										<th>total</th>
									</tr>
								</thead>
								<tbody>
											<tr>
												<td >PK</td>
												<td>
												<?php foreach ($totalGanjilPk as $rows) : ?>
													Rp. <?php echo $rows->totalGanjilPk?> 
												<?php endforeach;?>
												</td>
												<td>
												<?php foreach ($totalGenapPk as $rows) : ?>
													Rp. <?php echo $rows->totalGenapPk?> 
												<?php endforeach;?>
												</td>
												<td>
												<?php foreach ($totalPk as $rows) : ?>
													Rp. <?php echo $rows->totalPk?> 
												<?php endforeach;?>
												</td>
											</tr>
											<tr>
												<td >Ops</td>
												<td>
												<?php foreach ($totalGanjilOps as $rows) : ?>
													Rp. <?php echo $rows->totalGanjilOps?> 
												<?php endforeach;?>
												</td>
												<td>
												<?php foreach ($totalGenapOps as $rows) : ?>
													Rp. <?php echo $rows->totalGenapOps?> 
												<?php endforeach;?>
												</td>
												<td>
												<?php foreach ($totalOps as $rows) : ?>
													Rp. <?php echo $rows->totalOps?> 
												<?php endforeach;?>
												</td>
											</tr>
											<tr>
												<td >Inv</td>
												<td>
												<?php foreach ($totalGanjilInv as $rows) : ?>
													Rp. <?php echo $rows->totalGanjilInv?> 
												<?php endforeach;?>
												</td>
												<td>
												<?php foreach ($totalGenapInv as $rows) : ?>
													Rp. <?php echo $rows->totalGenapInv?> 
												<?php endforeach;?>
												</td>
												<td>
												<?php foreach ($totalInv as $rows) : ?>
													Rp. <?php echo $rows->totalInv?> 
												<?php endforeach;?>
												</td>
											</tr>
								</tbody>
							</table>
						</div>
						<div class="col-sm-6">
							<p>Persen Serap:</p>
							<table class="table" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Tahun</th>
										<th>PK</th>
										<th>OPS</th>
										<th>PK & OPS</th>
										<th>INV</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($tahunAktif as $key => $reading) : ?>
											<tr>
												<td ><?= $reading['tahunAkademik'] ?></td>
												<td><?= $reading['persenPk'] ?>%</td>
												<td><?= $reading['persenOps'] ?>%</td>
												<td><?= $reading['persenPkOps'] ?>%</td>
												<td><?= $reading['persenInv'] ?>%</td>
											</tr>
									<?php endforeach;?>
								</tbody>
							</table>
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