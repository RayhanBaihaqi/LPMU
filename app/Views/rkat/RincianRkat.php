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
<style>
		@page{
			margin: 10px;
		}
	</style>
		<?php
			$pdf = false;
			if (strpos(current_url(), "pdfRincian")) {
				$pdf = true;
			}
			if($pdf == false){
		?>
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
				<a href="<?= base_url('/rkat/indexbyuser') ?>"><i class="fas fa-long-arrow-alt-left"></i></a>
				<a href="#" class="navbar-brand">MENU</a>
				<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-between">
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
        
        <input type="button" value="Download PDF" onclick="window.open('<?php echo base_url('pdf/pdfRincian') ?>','blank')">
        <?php } ?>
		<!-- Responsive tables Start -->
		<div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
				<div class="card-header">
					<h4 class="card-title">Rincian RKAT
					</h4>
				</div>
                     <!-- PK -->
                    <?php $totalPkGenap=0; foreach ($pk as $key => $value) : $totalPkGenap = $totalPkGenap+$value['anggaranGenap']; endforeach; ?>
                    <?php $totalPkGanjil=0; foreach ($pk as $key => $value) : $totalPkGanjil = $totalPkGanjil+$value['anggaranGanjil']; endforeach; ?>
                    <?php $totalAnggaranPk = $totalPkGanjil+$totalPkGenap; ?>

                    <?php $totalPkGenapSerap=0; foreach ($pk as $key => $value) : $totalPkGenapSerap = $totalPkGenapSerap+$value['serapGenap']; endforeach; ?>
                    <?php $totalPkGanjilSerap=0; foreach ($pk as $key => $value) : $totalPkGanjilSerap = $totalPkGanjilSerap+$value['serapGanjil']; endforeach; ?>
                    <?php $totalSerapPk = $totalPkGenapSerap+$totalPkGanjilSerap; ?>

                    <?php $persenPk = $totalSerapPk/$totalAnggaranPk*100; ?>
                    <!-- OPS -->
                    <?php $totalOpsGenap=0; foreach ($ops as $key => $value) : $totalOpsGenap = $totalOpsGenap+$value['anggaranGenap']; endforeach; ?>
                    <?php $totalOpsGanjil=0; foreach ($ops as $key => $value) : $totalOpsGanjil = $totalOpsGanjil+$value['anggaranGanjil']; endforeach; ?>
                    <?php $totalAnggaranOps = $totalOpsGanjil+$totalOpsGenap; ?>

                    <?php $totalOpsGanjilSerap=0; foreach ($ops as $key => $value) : $totalOpsGanjilSerap = $totalOpsGanjilSerap+$value['serapGanjil']; endforeach; ?>
                    <?php $totalOpsGenapSerap=0; foreach ($ops as $key => $value) : $totalOpsGenapSerap = $totalOpsGenapSerap+$value['serapGenap']; endforeach; ?>
                    <?php $totalSerapOps = $totalOpsGenapSerap+$totalOpsGanjilSerap; ?>

                    <?php $persenOps = $totalSerapOps/$totalAnggaranOps*100; ?>
                    <!-- INV -->
                    <?php $totalInvGenap=0; foreach ($inv as $key => $value) : $totalInvGenap = $totalInvGenap+$value['total']; endforeach; ?>
                    <?php $totalInvGanjil=0; foreach ($inv as $key => $value) : $totalInvGanjil = $totalInvGanjil+$value['anggaranGanjil']; endforeach; ?>
                    <?php $totalAnggaranInv = $totalInvGanjil+$totalInvGenap; ?>

                    <?php $totalInvGanjilSerap=0; foreach ($inv as $key => $value) : $totalInvGanjilSerap = $totalInvGanjilSerap+$value['serapGanjil']; endforeach; ?>
                    <?php $totalInvGenapSerap=0; foreach ($inv as $key => $value) : $totalInvGenapSerap = $totalInvGenapSerap+$value['serapGenap']; endforeach; ?>
                    <?php $totalSerapInv = $totalInvGenapSerap+$totalInvGanjilSerap; ?>

                    <?php $persenInv = $totalSerapInv/$totalAnggaranInv*100; ?>
      <form action="<?= base_url('rkat/updateRincian'); ?>" method="POST" enctype="multipart/form-data">
      <div class="card-body">
        <?php foreach ($set_rkat as $key => $reading) : ?>
        <input required type="hidden" name="id_user" value="<?= $reading['id_user']; ?>">
        <input type="hidden" class="form-control" id="id_tahun" value="<?=  $reading['id_tahun'] ?>" name="id_tahun" required>
        <table class="table table-hover">
          <tbody>
          <tr>
            <td><h5>PK</h5></td>
          </tr>
          <tr>
            <td>Total Anggaran</td>
            <td>:</td>
            <td id='totalAnggaranPk'name='totalAnggaranPk'>RP. <?=$totalAnggaranPk?></td>
          </tr>
          <tr>
            <td>Total Realisasi</td>
            <td>:</td>
            <td id='totalSerapPk'name='totalSerapPk'>RP. <?=$totalSerapPk?></td>
          </tr>
          <tr>
            <td>Persentase</td>
            <td>:</td>
            <td id='persenPk'name='persenPk'><?=$persenPk?>%</td>
          </tr>
          <tr>
            <td><h5>OPS</h5></td>
          </tr>
          <tr>
            <td>Total Anggaran</td>
            <td>:</td>
            <td id='totalAnggaranOps'name='totalAnggaranOps'>RP. <?=$totalAnggaranOps?></td>
          </tr>
          <tr>
            <td>Total Realisasi</td>
            <td>:</td>
            <td id='totalSerapOps'name='totalSerapOps'>RP. <?=$totalSerapOps?></td>
          </tr>
          <tr>
            <td>Persentase</td>
            <td>:</td>
            <td id='persenOps'name='persenOps'><?=$persenOps?>%</td>
          </tr>
          <tr>
            <td><h5>INV</h5></td>
          </tr>
          <tr>
            <td>Total Anggaran</td>
            <td>:</td>
            <td id='totalAnggaranInv'name='totalAnggaranInv'>RP. <?=$totalAnggaranInv?></td>
          </tr>
          <tr>
            <td>Total Realisasi</td>
            <td>:</td>
            <td id='totalSerapInv'name='totalSerapInv'>RP. <?=$totalSerapInv?></td>
          </tr>
          <tr>
            <td>Persentase</td>
            <td>:</td>
            <td id='persenInv'name='persenInv'><?=$persenInv?>%</td>
          </tr>
          </tbody>
        </table>
        <?php endforeach; ?>
      </div>
      <div class="card-footer" align="center">
					<button type="submit" class="btn btn-primary" id="btnJumlah" value="submit">Update Data</button>
						<span id="textError"></span>
			</div>
      </form>
      </div>
    </div>
        <div class="modal" id="myModal">
          <div class="modal-dialog">
            <div class="modal-content">
               <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Kesimpulan</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          Serapan Terendah Prodi <?php $nama_prodi = session('nama_prodi'); echo "$nama_prodi" ?> : <br>
          Serapan Tertinggi Prodi <?php $nama_prodi = session('nama_prodi'); echo "$nama_prodi" ?> : <br><hr>
          rata-rata serapan prodi <?php $nama_prodi = session('nama_prodi'); echo "$nama_prodi" ?> per TA <br> 
          - TA 20--     : <br>
          - TA 20--     : 
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      
  </div>
  <div id="columnchart_material"></div>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"> Kesimpulan </button>
      <div class="container">
        <h2>Toggleable Tabs</h2>
        <br>
        <div class="dropdown nav-tabs" >
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Dropdown button</button>
                        <div class="dropdown-menu" role="tablist">
                        <a class="nav-link active" data-toggle="tab" href="#home">ops</a>
                        <a class="nav-link" data-toggle="tab" href="#menu1">pk</a>
                        <a class="nav-link" data-toggle="tab" href="#menu2">Menu 2</a>
                        </div>
                    </div>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
  <li class="nav-item">
  <a class="nav-link disabled" href="#">Disabled</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home">ops</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1">pk</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu2">Menu 2</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
    <table class="table table-striped" id="dataTable1" width="100%" cellspacing="0">
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
									<th>Total Anggaran Rencana</th>
									<th>Total Anggaran Realisasi</th>
								</tr>
							</thead>
							<tbody>
								<?php $i = 1;?>
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
											<td><?= $value['anggaranGanjil']; ?></td>
											<td><?= $value['anggaranGenap']; ?></td>
											<td><?= $value['total']; ?></td>
											<td><?= $value['serapGenap']; ?></td>
										</tr>
									<?php endforeach; ?>
							</tbody>
						</table>
    </div>
    <div id="menu1" class="container tab-pane fade"><br>
    <table class="table table-striped" id="dataTable1" width="100%" cellspacing="0">
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
									<th>Total Anggaran Rencana</th>
									<th>Total Anggaran Realisasi</th>
								</tr>
							</thead>
							<tbody>
								<?php $i = 1;?>
								<?php foreach ($tahunAkademik as $key => $value) : ?>
										<tr>
											<td scope="row"><?= $i++; ?></td>
											<td><?= $value['kategori']; ?></td>
             
											<td><?= $value['no_kegiatan']; ?></td>
											<td><?= $value['target']; ?></td>
											<td><?= $value['indikator']; ?></td>
											<td><?= $value['nama_kegiatan']; ?></td>
											<td><?= $value['kpi']; ?></td>
											<td><?= $value['butir']; ?></td>
											<td><?= $value['anggaranGanjil']; ?></td>
											<td><?= $value['anggaranGenap']; ?></td>
											<td><?= $value['total']; ?></td>
											<td></td>
										</tr>
									<?php endforeach; ?>
							</tbody>
						</table>
    </div>
    <div id="menu2" class="container tab-pane fade"><br>
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
  </div>
</div>
                    </div>
                </div>
            </div>
		</div>
		<!-- Responsive tables End -->
        <!-- The Modal -->
	</div>

	 <!-- JavaScript Libraries -->
	 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script> -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Semester','Rencana (Rp.)', 'Realisasi(Rp.)'],
          ['Ganjil', <?= $totalPkGanjil ?>, <?= $totalPkGanjilSerap ?>],
          ['Genap', <?= $totalPkGenap ?>, <?= $totalPkGenapSerap ?>],
        ]);

        var options = {
          chart: {
            title: 'Company Performance',
            subtitle: 'Sales, Expenses, and Profit: 2014-2017',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>/public/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url(); ?>/public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="<?php echo base_url(); ?>/public/plugins/chart.js/Chart.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url(); ?>/public/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url(); ?>/public/dist/js/demo.js"></script>
    <!-- <script src="?php echo base_url(); ?>/public/chart/apexcharts.min.js"></script>
    <script src="?php echo base_url(); ?>/public/chart/dashboard.js"></script> -->
    <script src="<?php echo base_url(); ?>/public/chart/jquery.knob.min.js"></script>
    <script src="<?php echo base_url(); ?>/public/chart/knob-chart-setting.js"></script>
    <script src="<?php echo base_url(); ?>/public/chart/grafik.js"></script>
    <script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
    <script>
        $(window).load(function() {
            $(".pre-loader").fadeOut("slow");
        });
    </script>
</body>

</html>
