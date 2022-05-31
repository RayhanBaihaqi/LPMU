<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
	<title>Dashboard RKAT</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/public/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/public/dist/css/adminlte.min.css">
	<!-- item pembantu -->
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Law Firm Website Template" name="keywords">
    <meta content="Law Firm Website Template" name="description">
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
    <!-- <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet"> -->

    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/public/css/header.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/public/css/style2.css">


</head>

<body onload="startTime()">
    <div class="pre-loader">
        <div class="spinner-border text-info"></div>
    </div>
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
						<a href="<?php echo site_url(); ?>keuangan/home" class="nav-item nav-link active">Home</a>
						<a href="<?= base_url('/keuangan/createbyuser') ?>" class="nav-item nav-link">Rencana Anggaran</a>
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
            <div class="row" style="margin: 15px auto;">
				<div class="col-md-12">
					<div class="card-box pd-30 height-100-p">
                        <h5>Halaman Grafik Capaian RKAT </h5>
					</div>
				</div>
            </div>
            <!-- ====================================================================================================================== -->

            <section class="content">
                <div class="row" style="margin: 15px auto;">
                    <div class="col-md-12">
                        <div class="card-box pd-30 height-100-p">
                            <div class="card ">
                                <div class="card-header bg-info text-white">Persentase Serapan Prodi</div>
                                <div id="GrafikCapaianRkatProdi" style="width: 1080px; height: 500px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin: 15px auto;">
                    <div class="col-md-12">
                        <div class="card-box pd-30 height-100-p">
                            <div class="card ">
                                <div class="card-header bg-info text-white">Persentase Serapan Unit</div>
                                <div id="GrafikCapaianRkatUnit" style="width: 1080px; height: 500px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin: 15px auto;">
                    <div class="col-md-12">
                        <div class="card-box pd-30 height-100-p">
                            <div class="card ">
                                <div class="card-header bg-info text-white">Persentase Serapan Rektorat</div>
                                <div id="GrafikCapaianRkatRektorat" style="width: 1080px; height: 500px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script> -->
    <script>
        function checkTime(i) {
            if (i < 10) {
                i = "0" + i
            }; // add zero in front of numbers < 10
            return i;
        }
    </script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Prodi/Unit', 'Tahun', 'PK & OPS (%)', 'INV (%)'],
          <?php
		    foreach ($seluruhDataUserProdi as $key => $reading) : ?>
          ['<?= $reading['nama_prodi'] ?>','<?= $reading['tahunAkademik'] ?>', <?= $reading['persenPkOps'] ?>,<?= $reading['persenInv'] ?>],
          <?php endforeach; ?>
        ]);

        var options = {
          chart: {
            title: 'Data Grafik Capaian RKAT Prodi',
            subtitle: 'PK+OPS & INV Pertahun',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('GrafikCapaianRkatProdi'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Prodi/Unit', 'Tahun', 'PK & OPS (%)', 'INV (%)'],
          <?php
		    foreach ($seluruhDataUserUnit as $key => $reading) : ?>
          ['<?= $reading['nama_prodi'] ?>','<?= $reading['tahunAkademik'] ?>', <?= $reading['persenPkOps'] ?>,<?= $reading['persenInv'] ?>],
          <?php endforeach; ?>
        ]);

        var options = {
          chart: {
            title: 'Data Grafik Capaian RKAT Unit',
            subtitle: 'PK+OPS & INV Pertahun',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('GrafikCapaianRkatUnit'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Rektorat', 'Tahun', 'PK & OPS (%)', 'INV (%)'],
          <?php
		    foreach ($seluruhDataUserRektorat as $key => $reading) : ?>
          ['<?= $reading['nama_prodi'] ?>','<?= $reading['tahunAkademik'] ?>', <?= $reading['persenPkOps'] ?>,<?= $reading['persenInv'] ?>],
          <?php endforeach; ?>
        ]);

        var options = {
          chart: {
            title: 'Data Grafik Capaian RKAT Rektorat',
            subtitle: 'PK+OPS & INV Pertahun',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('GrafikCapaianRkatRektorat'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
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
    <!-- <script src="<?php echo base_url(); ?>/public/chart/jquery.knob.min.js"></script>
    <script src="<?php echo base_url(); ?>/public/chart/knob-chart-setting.js"></script>
	<script src="<?php echo base_url(); ?>/public/chart/grafik.js"></script> -->
    <script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
    <script>
        $(window).load(function() {
            $(".pre-loader").fadeOut("slow");
        });
    </script>
    <script>
        
    </script>
</body>

</html>