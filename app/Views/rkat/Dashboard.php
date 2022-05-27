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
				<a href="<?php echo site_url(); ?>backend"><i class="fas fa-long-arrow-alt-left"></i></a>
				<a href="#" class="navbar-brand">MENU</a>
				<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-between">
					<div class="navbar-nav mr-auto">
						<a href="<?php echo site_url(); ?>backend/rkat" class="nav-item nav-link active">Home</a>
						<a href="<?= base_url('/rkat/createbyuser') ?>" class="nav-item nav-link">Rencana Anggaran</a>
                        <a href="<?= base_url('/CapaianRkat/createcapaianbyuser') ?>" class="nav-item nav-link">Realisasi Anggaran</a>
                        <a href="<?= base_url('/rkat/indexbyuser') ?>" class="nav-item nav-link">Kesimpulan</a>
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
            <div class="row" style="margin: 15px auto;">
				<div class="col-md-12">
					<div class="card-box pd-30 height-100-p">
                        <h5>Selamat Datang di halaman RKAT </h5>
					</div>
				</div>
            </div>
            <!-- ====================================================================================================================== -->
            <div class="row" style="margin: 15px auto;">
                <!-- ./col -->
                <div class="col-lg-4 col-4">
                    <!-- small box -->
                    <div class="small-box bg-danger text-white">
                        <div class="inner">
                            <h3>
                                <?= $tahunAkademik['tahunAkademik'] ?>
                            </h3>
                            <p>Tahun Akademik</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-solid fa-calendar"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-4">
                    <!-- small box -->
                    <div class="small-box bg-warning text-white">
                        <div class="inner">
                            <h3>
                                <?php foreach ($pagu_rkat as $key => $value) :?>
							        RP. <?= $value['jumlah_pagu'] ?>
						        <?php endforeach; ?>
                            </h3>
                            <p>Jumlah Pagu</p>
                        </div>
                        <div class="icon">
                        <i class="fas fa-solid fa-money-bill"></i>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-4">
                    <!-- small box -->
                    <div class="small-box bg-success text-white">
                        <div class="inner">
                            <h3>
                                <?php
                                    $nama_prodi = session('nama_prodi');
                                    echo "$nama_prodi"
                                ?>
                            </h3>
                            <p>Program Studi/Unit Universitas</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-university"></i>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- ====================================================================================================================== -->
                    <!-- PK -->
                    <?php $totalPkGenap=0; foreach ($pk as $key => $value) : $totalPkGenap = $totalPkGenap+$value['anggaranGenap']; endforeach; ?>
                    <?php $totalPkGenapSerap=0; foreach ($pk as $key => $value) : $totalPkGenapSerap = $totalPkGenapSerap+$value['serapGenap']; endforeach; ?>
                    <?php $persenPkGenap = $totalPkGenapSerap/$totalPkGenap*100; ?>

                    <?php $totalPkGanjil=0; foreach ($pk as $key => $value) : $totalPkGanjil = $totalPkGanjil+$value['anggaranGanjil']; endforeach; ?>
                    <?php $totalPkGanjilSerap=0; foreach ($pk as $key => $value) : $totalPkGanjilSerap = $totalPkGanjilSerap+$value['serapGanjil']; endforeach; ?>
                    <?php $persenPkGanjil = $totalPkGanjilSerap/$totalPkGanjil*100; ?>
                    <!-- OPS -->
                    <?php $totalOpsGenap=0; foreach ($ops as $key => $value) : $totalOpsGenap = $totalOpsGenap+$value['anggaranGenap']; endforeach; ?>
                    <?php $totalOpsGenapSerap=0; foreach ($ops as $key => $value) : $totalOpsGenapSerap = $totalOpsGenapSerap+$value['serapGenap']; endforeach; ?>
                    <?php $persenOpsGenap = $totalOpsGenapSerap/$totalOpsGenap*100; ?>

                    <?php $totalOpsGanjil=0; foreach ($ops as $key => $value) : $totalOpsGanjil = $totalOpsGanjil+$value['anggaranGanjil']; endforeach; ?>
                    <?php $totalOpsGanjilSerap=0; foreach ($ops as $key => $value) : $totalOpsGanjilSerap = $totalOpsGanjilSerap+$value['serapGanjil']; endforeach; ?>
                    <?php $persenOpsGanjil = $totalOpsGanjilSerap/$totalOpsGanjil*100; ?>
                    <!-- INV -->
                    <?php $totalInvGenap=0; foreach ($inv as $key => $value) : $totalInvGenap = $totalInvGenap+$value['total']; endforeach; ?>
                    <?php $totalInvGenapSerap=0; foreach ($inv as $key => $value) : $totalInvGenapSerap = $totalInvGenapSerap+$value['serapGenap']; endforeach; ?>
                    <?php $persenInvGenap = $totalInvGenapSerap/$totalInvGenap*100; ?>

                    <?php $totalInvGanjil=0; foreach ($inv as $key => $value) : $totalInvGanjil = $totalInvGanjil+$value['anggaranGanjil']; endforeach; ?>
                    <?php $totalInvGanjilSerap=0; foreach ($inv as $key => $value) : $totalInvGanjilSerap = $totalInvGanjilSerap+$value['serapGanjil']; endforeach; ?>
                    <?php $persenInvGanjil = $totalInvGanjilSerap/$totalInvGanjil*100; ?>

            <section class="content">
                <div class="row" style="margin: 15px auto;">
                    <div class="col-md-6">
                        <div class="card-box pd-30 height-100-p">
                            <div class="card ">
                                <div class="card-header bg-info text-white">Capain PK</div>
                                <div class="card-body"><div id="capaian_pk"></div></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-box pd-30 height-100-p">
                            <div class="card ">
                                <div class="card-header bg-info text-white">Capain OPS</div>
                                <div class="card-body"><div id="capaian_ops"></div></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin: 15px auto;">
                    <div class="col-md-12">
                        <div class="card-box pd-30 height-100-p">
                            <div class="card ">
                                <div class="card-header bg-info text-white">Capain INV</div>
                                <div class="card-body"><div id="capaian_inv"></div></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin: 15px auto;">
                    <div class="col-md-6">
                        <div class="card-box pd-30 height-100-p">
                            <div class="card ">
                                <div class="card-header bg-info text-white">Persentase Capain PK</div>
                                <div class="card-body"><div id="capaian_persen_pk"></div></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-box pd-30 height-100-p">
                            <div class="card ">
                                <div class="card-header bg-info text-white">Persentase Capain OPS</div>
                                <div class="card-body"><div id="capaian_persen_ops"></div></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin: 15px auto;">
                    <div class="col-md-12">
                        <div class="card-box pd-30 height-100-p">
                            <div class="card ">
                                <div class="card-header bg-info text-white">Persentase Capain INV</div>
                                <div class="card-body"><div id="capaian_persen_inv"></div></div>
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
    <!-- Grafik Capaian -->
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
            title: '',
            subtitle: 'Periode Tahun : <?= $tahunAkademik['tahunAkademik'] ?>',
          },
          bars: 'horizontal', // Required for Material Bar Charts.
          hAxis: {format: 'decimal'},
          height: 400,
          colors: ['#1b9e77', '#d95f02', '#7570b3']
        };

        var chart = new google.charts.Bar(document.getElementById('capaian_pk'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Semester','Rencana (Rp.)', 'Realisasi(Rp.)'],
          ['Ganjil', <?= $totalOpsGanjil ?>, <?= $totalOpsGanjilSerap ?>],
          ['Genap', <?= $totalOpsGenap ?>, <?= $totalOpsGenapSerap ?>],
        ]);

        var options = {
          chart: {
            title: '',
            subtitle: 'Periode Tahun : <?= $tahunAkademik['tahunAkademik'] ?>',
          },
          bars: 'horizontal', // Required for Material Bar Charts.
          hAxis: {format: 'decimal'},
          height: 400,
          colors: ['#1b9e77', '#d95f02', '#7570b3']
        };

        var chart = new google.charts.Bar(document.getElementById('capaian_ops'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Semester','Rencana (Rp.)', 'Realisasi(Rp.)'],
          ['Ganjil', <?= $totalInvGanjil ?>, <?= $totalInvGanjilSerap ?>],
          ['Genap', <?= $totalInvGenap ?>, <?= $totalInvGenapSerap ?>],
        ]);

        var options = {
          chart: {
            title: '',
            subtitle: 'Periode Tahun : <?= $tahunAkademik['tahunAkademik'] ?>',
          },
          bars: 'horizontal', // Required for Material Bar Charts.
          hAxis: {format: 'decimal'},
          height: 400,
          colors: ['#1b9e77', '#d95f02']
        };

        var chart = new google.charts.Bar(document.getElementById('capaian_inv'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
    <!-- Grafik Persentase capaian -->
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Semester', 'Persen(%)'],
          ['Ganjil', <?=$persenPkGenap ?>],
          ['Genap', <?=$persenPkGanjil ?>],
        ]);

        var options = {
          chart: {
            title: '',
            subtitle: 'Periode Tahun : <?= $tahunAkademik['tahunAkademik'] ?>',
          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('capaian_persen_pk'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Semester', 'Persen(%)'],
          ['Ganjil', <?=$persenOpsGenap ?>],
          ['Genap', <?=$persenOpsGanjil ?>],
        ]);

        var options = {
          chart: {
            title: '',
            subtitle: 'Periode Tahun : <?= $tahunAkademik['tahunAkademik'] ?>',
          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('capaian_persen_ops'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Semester', 'Persen(%)'],
          ['Ganjil', <?=$persenInvGenap ?>],
          ['Genap', <?=$persenInvGanjil ?>],
        ]);

        var options = {
          chart: {
            title: '',
            subtitle: 'Periode Tahun : <?= $tahunAkademik['tahunAkademik'] ?>',
          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('capaian_persen_inv'));

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