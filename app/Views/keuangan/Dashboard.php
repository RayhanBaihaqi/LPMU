<!DOCTYPE html>
<html lang="en">




<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/public/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/public/dist/css/adminlte.min.css">
    <meta charset="utf-8">
    <title>Kesimpulan</title>
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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
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
        <div class="container-fluid">
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

            <section class="content">
                <div class="row" style="margin: 15px auto;">
                    <div class="col-md-6">
                        <div class="card-box pd-30 height-100-p">
                            <div class="card ">
                                <div class="card-header bg-info text-white">Persentase Serapan Tahunan</div>
                                <div class="card-body"><div id="capaian_persen_pk"></div></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-box pd-30 height-100-p">
                            <div class="card ">
                                <div class="card-header bg-info text-white">Persentase Serap Tahun Aktif</div>
                                <div class="card-body"><div id="capaian_persen_ops"></div></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin: 15px auto;">
						<div class="col-md-6">
							<div class="card-box pd-30 height-100-p">
								<div class="card ">
									<div class="card-header bg-info text-white">Rata-Rata Capaian PK+OPS PROGRAM STUDI</div>
									<div class="card-body">
                                        <canvas id="SerapProdiPkOps" height="100"></canvas>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="card-box pd-30 height-100-p">
								<div class="card ">
									<div class="card-header bg-info text-white">Rata-Rata Capaian INV PROGRAM STUDI</div>
									<div class="card-body">
                                    <canvas id="SerapProdiInv" height="100"></canvas>
									</div>
								</div>
							</div>
						</div>
					</div>
                    <div class="row" style="margin: 15px auto;">
						<div class="col-md-6">
							<div class="card-box pd-30 height-100-p">
								<div class="card ">
									<div class="card-header bg-info text-white">Rata-Rata Capaian PK+OPS UNIT KERJA</div>
									<div class="card-body">
                                        <canvas id="SerapUnitPkOps" height="100"></canvas>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="card-box pd-30 height-100-p">
								<div class="card ">
									<div class="card-header bg-info text-white">Rata-Rata Capaian INV UNIT KERJA</div>
									<div class="card-body">
                                    <canvas id="SerapUnitInv" height="100"></canvas>
									</div>
								</div>
							</div>
						</div>
					</div>
        </section>
    </div>


    </div>

    <!-- JavaScript Libraries -->

    <!-- <script src="lib/easing/easing.min.js"></script>
            <script src="lib/owlcarousel/owl.carousel.min.js"></script>
            <script src="lib/isotope/isotope.pkgd.min.js"></script> -->
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

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>/public/plugins/jquery/jquery.min.js"></script>
    <!-- ChartJS -->
    <script src="<?php echo base_url(); ?>/public/plugins/chart.js/Chart.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url(); ?>/public/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url(); ?>/public/dist/js/demo.js"></script>
    <script src="<?php echo base_url(); ?>/public/chart/apexcharts.min.js"></script>
    <script src="<?php echo base_url(); ?>/public/chart/dashboard.js"></script>
    <script src="<?php echo base_url(); ?>/public/chart/jquery.knob.min.js"></script>
    <script src="<?php echo base_url(); ?>/public/chart/knob-chart-setting.js"></script>
    <script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
    <script>
        $(window).load(function() {
            $(".pre-loader").fadeOut("slow");
        });
    </script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <!-- Grafik Persentase capaian -->
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Tahun', 'Persen PK & OPS(%)', 'Persen INV(%)'],
          <?php
		    foreach ($tahun as $key => $reading) : ?>
          ['<?= $reading['tahunAkademik'] ?>', <?= $reading['persenPkOps'] ?>,<?= $reading['persenInv'] ?>],
          <?php endforeach; ?>
        ]);

        var options = {
          chart: {
            title: 'Data Prodi/Unit : <?php $nama_prodi = session('nama_prodi'); echo "$nama_prodi"?>',
            subtitle: '',
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
            ['Tahun', 'Persen PK & OPS(%)', 'Persen INV(%)'],
          <?php
		    foreach ($tahunAktif as $key => $reading) : ?>
          ['<?= $reading['tahunAkademik'] ?>', <?= $reading['persenPkOps'] ?>,<?= $reading['persenInv'] ?>],
          <?php endforeach; ?>
        ]);

        var options = {
          chart: {
            title: 'Periode Tahun : <?= $tahunAkademik['tahunAkademik'] ?>',
            subtitle: '',
          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('capaian_persen_ops'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
    <script>
            const ctx3 = document.getElementById('SerapUnitPkOps');
            const SerapUnitPkOps = new Chart(ctx3, {
                type: 'horizontalBar',
                data: {
                    labels: ['2019/2020', '2020/2021', '2021/2022'],
                    datasets: [
                        // Data Batang Grafik Standar 1

                        {

                            label: 'Rata-Rata Capaian RKAT PK+OPS',
                            backgroundColor: ['rgba(255, 165, 0, 1)','rgba(255, 165, 0, 1)','rgba(255, 165, 0, 1)'],
                            borderColor: ['rgba(255, 165, 0, 1)','rgba(255, 165, 0, 1)','rgba(255, 165, 0, 1)'],
                            pointRadius: false,
                            pointColor: 'rgba(210, 214, 222, 1)',
                            pointStrokeColor: '#c1c7d1',
                            pointHighlightFill: '#fff',
                            pointHighlightStroke: 'rgba(220,220,220,1)',
                            data: [	<?php foreach ($avgPkOpsSeluruhUnit1920 as $rows) : ?><?php echo $rows->avgPkOpsSeluruhUnit1920?> <?php endforeach;?>, 
                                    <?php foreach ($avgPkOpsSeluruhUnit2021 as $rows) : ?><?php echo $rows->avgPkOpsSeluruhUnit2021?> <?php endforeach;?>,
                                    <?php foreach ($avgPkOpsSeluruhUnit2122 as $rows) : ?><?php echo $rows->avgPkOpsSeluruhUnit2122?> <?php endforeach;?>]
                        },


                    ]
                },
                options: {
                    responsive: true,
                    legend: {
                        position: 'top',
                    },
                    hover: {
                        mode: 'label'
                    },
                    scales: {
                        xAxes: [{

                            display: true,
                            ticks: {
                                beginAtZero: true,
                                steps: 10,
                                stepValue: 5,

                            }
                        }],
                        yAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,

                            }
                        }]
                    },
                }
            });

            const ctx4 = document.getElementById('SerapUnitInv');
            const SerapUnitInv = new Chart(ctx4, {
                type: 'horizontalBar',
                data: {
                    labels: ['2019/2020', '2020/2021', '2021/2022'],
                    datasets: [
                        // Data Batang Grafik Standar 1

                        {

                            label: 'Rata-Rata Capaian RKAT INV',
                            backgroundColor: ['rgba(93, 78, 246,1)','rgba(93, 78, 246,1)','rgba(93, 78, 246,1)'],
                            borderColor: ['rgba(93, 78, 246,1)','rgba(93, 78, 246,1)','rgba(93, 78, 246,1)'],
                            pointRadius: false,
                            pointColor: 'rgba(210, 214, 222, 1)',
                            pointStrokeColor: '#c1c7d1',
                            pointHighlightFill: '#fff',
                            pointHighlightStroke: 'rgba(220,220,220,1)',
                            data: [	<?php foreach ($avgInvSeluruhUnit1920 as $rows) : ?><?php echo $rows->avgInvSeluruhUnit1920?> <?php endforeach;?>, 
                                    <?php foreach ($avgInvSeluruhUnit2021 as $rows) : ?><?php echo $rows->avgInvSeluruhUnit2021?> <?php endforeach;?>,
                                    <?php foreach ($avgInvSeluruhUnit2122 as $rows) : ?><?php echo $rows->avgInvSeluruhUnit2122?> <?php endforeach;?>]
                        },


                    ]
                },
                options: {
                    responsive: true,
                    legend: {
                        position: 'top',
                    },
                    hover: {
                        mode: 'label'
                    },
                    scales: {
                        xAxes: [{

                            display: true,
                            ticks: {
                                beginAtZero: true,
                                steps: 10,
                                stepValue: 5,

                            }
                        }],
                        yAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,

                            }
                        }]
                    },
                }
            });
    </script>
            <script>
            const ctx = document.getElementById('SerapProdiPkOps');
            const SerapProdiPkOps = new Chart(ctx, {
                type: 'horizontalBar',
                data: {
                    labels: ['2019/2020', '2020/2021', '2021/2022'],
                    datasets: [
                        // Data Batang Grafik Standar 1

                        {

                            label: 'Rata-Rata Capaian RKAT PK+OPS',
                            backgroundColor: ['rgba(255, 165, 0, 1)','rgba(255, 165, 0, 1)','rgba(255, 165, 0, 1)'],
                            borderColor: ['rgba(255, 165, 0, 1)','rgba(255, 165, 0, 1)','rgba(255, 165, 0, 1)'],
                            pointRadius: false,
                            pointColor: 'rgba(210, 214, 222, 1)',
                            pointStrokeColor: '#c1c7d1',
                            pointHighlightFill: '#fff',
                            pointHighlightStroke: 'rgba(220,220,220,1)',
                            data: [	<?php foreach ($avgPkOpsSeluruh1920 as $rows) : ?><?php echo $rows->avgPkOpsSeluruh1920?> <?php endforeach;?>, 
                                    <?php foreach ($avgPkOpsSeluruh2021 as $rows) : ?><?php echo $rows->avgPkOpsSeluruh2021?> <?php endforeach;?>,
                                    <?php foreach ($avgPkOpsSeluruh2122 as $rows) : ?><?php echo $rows->avgPkOpsSeluruh2122?> <?php endforeach;?>]
                        },


                    ]
                },
                options: {
                    responsive: true,
                    legend: {
                        position: 'top',
                    },
                    hover: {
                        mode: 'label'
                    },
                    scales: {
                        xAxes: [{

                            display: true,
                            ticks: {
                                beginAtZero: true,
                                steps: 10,
                                stepValue: 5,

                            }
                        }],
                        yAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,

                            }
                        }]
                    },
                }
            });

            const ctx2 = document.getElementById('SerapProdiInv');
            const SerapProdiInv = new Chart(ctx2, {
                type: 'horizontalBar',
                data: {
                    labels: ['2019/2020', '2020/2021', '2021/2022'],
                    datasets: [
                        // Data Batang Grafik Standar 1

                        {

                            label: 'Rata-Rata Capaian RKAT INV',
                            backgroundColor: ['rgba(93, 78, 246,1)','rgba(93, 78, 246,1)','rgba(93, 78, 246,1)'],
                            borderColor: ['rgba(93, 78, 246,1)','rgba(93, 78, 246,1)','rgba(93, 78, 246,1)'],
                            pointRadius: false,
                            pointColor: 'rgba(210, 214, 222, 1)',
                            pointStrokeColor: '#c1c7d1',
                            pointHighlightFill: '#fff',
                            pointHighlightStroke: 'rgba(220,220,220,1)',
                            data: [	<?php foreach ($avgInvSeluruh1920 as $rows) : ?><?php echo $rows->avgInvSeluruh1920?> <?php endforeach;?>, 
                                    <?php foreach ($avgInvSeluruh2021 as $rows) : ?><?php echo $rows->avgInvSeluruh2021?> <?php endforeach;?>,
                                    <?php foreach ($avgInvSeluruh2122 as $rows) : ?><?php echo $rows->avgInvSeluruh2122?> <?php endforeach;?>]
                        },


                    ]
                },
                options: {
                    responsive: true,
                    legend: {
                        position: 'top',
                    },
                    hover: {
                        mode: 'label'
                    },
                    scales: {
                        xAxes: [{

                            display: true,
                            ticks: {
                                beginAtZero: true,
                                steps: 10,
                                stepValue: 5,

                            }
                        }],
                        yAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,

                            }
                        }]
                    },
                }
            });
        </script>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Page level plugins -->
<script src="<?php echo base_url(); ?>/public/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>/public/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?php echo base_url(); ?>/public/js/datatables-demo.js"></script>

</html>