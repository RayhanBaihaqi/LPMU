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
						<a href="<?php echo site_url(); ?>keuangan/home" class="nav-item nav-link">Home</a>
						<a href="<?= base_url('/keuangan/createbyuser') ?>" class="nav-item nav-link">Rencana Anggaran</a>
                        <a href="<?= base_url('/CapaianRkat/createcapaianbykeuangan') ?>" class="nav-item nav-link">Realisasi Anggaran</a>
                        <a href="<?= base_url('/keuangan/indexbyuser') ?>" class="nav-item nav-link">Kesimpulan</a>
                        <a href="<?= base_url('/keuangan/grafikSerapProdi') ?>" class="nav-item nav-link active">Grafik Serap Prodi</a>
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
            <div class="row" style="margin: 15px auto;">
				<div class="col-md-12">
					<div class="card-box pd-30 height-100-p">
                        <h5>Halaman Grafik Capaian PRODI </h5>
					</div>
				</div>
            </div>
            <section class="content">
                <div class="row" style="margin: 15px auto;">
                    <div class="col-md-12">
                        <div class="card-box pd-30 height-100-p">
                            <div class="card ">
                                <label>Data Capaian PK+OPS</label>
                                <canvas id="ChartProdiPkOps"style="width: 1080px; height: 500px;"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin: 15px auto;">
                    <div class="col-md-12">
                        <div class="card-box pd-30 height-100-p">
                            <div class="card ">
                                <label>Data Capaian INV</label>
                                <canvas id="ChartProdiInv2"style="width: 1080px; height: 500px;"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
        </section>


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
    <script>
        const ctx = document.getElementById('ChartProdiPkOps');
        const ChartProdiPkOps = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Akuntansi', 'Manajemen', 'Psikologi', 'Ilmu Komunikasi', 'Desain Produk', 'Desain Komunikasi Visual', 'Informatika', 'Sistem Informasi', 'Teknik Sipil', 'Arsitektur'],
                datasets: [

                    {
                        label: '2019/2020',
                        backgroundColor: 'rgba(255, 165, 0, 1)',
                        borderColor: 'rgba(255, 165, 0, 1)',
                        pointRadius: false,
                        pointColor: '#3b8bba',
                        pointStrokeColor: 'rgba(60,141,188,1)',
                        pointHighlightFill: '#fff',
                        pointHighlightStroke: 'rgba(60,141,188,1)',
                        data: [
                            <?php foreach ($dataProdiAkt1920 as $key => $reading) : ?><?= $reading['persenPkOps'] ?><?php endforeach; ?>,
                            <?php foreach ($dataProdiMan1920 as $key => $reading) : ?><?= $reading['persenPkOps'] ?><?php endforeach; ?>, 
                            <?php foreach ($dataProdiPsi1920 as $key => $reading) : ?><?= $reading['persenPkOps'] ?><?php endforeach; ?>,
                            <?php foreach ($dataProdiKom1920 as $key => $reading) : ?><?= $reading['persenPkOps'] ?><?php endforeach; ?>, 
                            <?php foreach ($dataProdiDp1920 as $key => $reading) : ?><?= $reading['persenPkOps'] ?><?php endforeach; ?>,
                            <?php foreach ($dataProdiDkv1920 as $key => $reading) : ?><?= $reading['persenPkOps'] ?><?php endforeach; ?>, 
                            <?php foreach ($dataProdiInf1920 as $key => $reading) : ?><?= $reading['persenPkOps'] ?><?php endforeach; ?>, 
                            <?php foreach ($dataProdiSif1920 as $key => $reading) : ?><?= $reading['persenPkOps'] ?><?php endforeach; ?>, 
                            <?php foreach ($dataProdiTsp1920 as $key => $reading) : ?><?= $reading['persenPkOps'] ?><?php endforeach; ?>,
                            <?php foreach ($dataProdiArs1920 as $key => $reading) : ?><?= $reading['persenPkOps'] ?><?php endforeach; ?> 
                        ]


                    },
                    {
                        label: '2020/2021',
                        backgroundColor: 'rgba(93, 255, 223,1)',
                        borderColor: 'rgba(93, 255, 223,1)',
                        pointRadius: false,
                        pointColor: '#3b8bba',
                        pointStrokeColor: 'rgba(60,141,188,1)',
                        pointHighlightFill: '#fff',
                        pointHighlightStroke: 'rgba(60,141,188,1)',
                        data: [
                            <?php foreach ($dataProdiAkt2021 as $key => $reading) : ?><?= $reading['persenPkOps'] ?><?php endforeach; ?>,
                            <?php foreach ($dataProdiMan2021 as $key => $reading) : ?><?= $reading['persenPkOps'] ?><?php endforeach; ?>, 
                            <?php foreach ($dataProdiPsi2021 as $key => $reading) : ?><?= $reading['persenPkOps'] ?><?php endforeach; ?>,
                            <?php foreach ($dataProdiKom2021 as $key => $reading) : ?><?= $reading['persenPkOps'] ?><?php endforeach; ?>, 
                            <?php foreach ($dataProdiDp2021 as $key => $reading) : ?><?= $reading['persenPkOps'] ?><?php endforeach; ?>,
                            <?php foreach ($dataProdiDkv2021 as $key => $reading) : ?><?= $reading['persenPkOps'] ?><?php endforeach; ?>, 
                            <?php foreach ($dataProdiInf2021 as $key => $reading) : ?><?= $reading['persenPkOps'] ?><?php endforeach; ?>, 
                            <?php foreach ($dataProdiSif2021 as $key => $reading) : ?><?= $reading['persenPkOps'] ?><?php endforeach; ?>, 
                            <?php foreach ($dataProdiTsp2021 as $key => $reading) : ?><?= $reading['persenPkOps'] ?><?php endforeach; ?>,
                            <?php foreach ($dataProdiArs2021 as $key => $reading) : ?><?= $reading['persenPkOps'] ?><?php endforeach; ?>  
                        ]

                    },
                    {
                        label: '2021/2022',
                        backgroundColor: 'rgba(93, 78, 246,1)',
                        borderColor: 'rgba(93, 78, 246,1)',
                        pointRadius: false,
                        pointColor: '#3b8bba',
                        pointStrokeColor: 'rgba(60,141,188,1)',
                        pointHighlightFill: '#fff',
                        pointHighlightStroke: 'rgba(60,141,188,1)',
                        data: [
                            <?php foreach ($dataProdiAkt2122 as $key => $reading) : ?><?= $reading['persenPkOps'] ?><?php endforeach; ?>,
                            <?php foreach ($dataProdiMan2122 as $key => $reading) : ?><?= $reading['persenPkOps'] ?><?php endforeach; ?>, 
                            <?php foreach ($dataProdiPsi2122 as $key => $reading) : ?><?= $reading['persenPkOps'] ?><?php endforeach; ?>,
                            <?php foreach ($dataProdiKom2122 as $key => $reading) : ?><?= $reading['persenPkOps'] ?><?php endforeach; ?>, 
                            <?php foreach ($dataProdiDp2122 as $key => $reading) : ?><?= $reading['persenPkOps'] ?><?php endforeach; ?>,
                            <?php foreach ($dataProdiDkv2122 as $key => $reading) : ?><?= $reading['persenPkOps'] ?><?php endforeach; ?>, 
                            <?php foreach ($dataProdiInf2122 as $key => $reading) : ?><?= $reading['persenPkOps'] ?><?php endforeach; ?>, 
                            <?php foreach ($dataProdiSif2122 as $key => $reading) : ?><?= $reading['persenPkOps'] ?><?php endforeach; ?>, 
                            <?php foreach ($dataProdiTsp2122 as $key => $reading) : ?><?= $reading['persenPkOps'] ?><?php endforeach; ?>,
                            <?php foreach ($dataProdiArs2122 as $key => $reading) : ?><?= $reading['persenPkOps'] ?><?php endforeach; ?> 
                        ]
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
                        scaleLabel: {
                            display: true,

                        }
                    }],
                    yAxes: [{
                        display: true,
                        ticks: {
                            beginAtZero: true,
                            steps: 10,
                            stepValue: 5,

                        }
                    }]
                },
            }
        });
    </script>
<script>
        const ctx4 = document.getElementById('ChartProdiInv2');
        const ChartProdiInv2 = new Chart(ctx4, {
            type: 'bar',
            data: {
                labels: ['Akuntansi', 'Manajemen', 'Psikologi', 'Ilmu Komunikasi', 'Desain Produk', 'Desain Komunikasi Visual', 'Informatika', 'Sistem Informasi', 'Teknik Sipil', 'Arsitektur'],
                datasets: [

                    {
                        label: '2019/2020',
                        backgroundColor: 'rgba(255, 165, 0, 1)',
                        borderColor: 'rgba(255, 165, 0, 1)',
                        pointRadius: false,
                        pointColor: '#3b8bba',
                        pointStrokeColor: 'rgba(60,141,188,1)',
                        pointHighlightFill: '#fff',
                        pointHighlightStroke: 'rgba(60,141,188,1)',
                        data: [
                            <?php foreach ($dataProdiAkt1920 as $key => $reading) : ?><?= $reading['persenInv'] ?><?php endforeach; ?>,
                            <?php foreach ($dataProdiMan1920 as $key => $reading) : ?><?= $reading['persenInv'] ?><?php endforeach; ?>, 
                            <?php foreach ($dataProdiPsi1920 as $key => $reading) : ?><?= $reading['persenInv'] ?><?php endforeach; ?>,
                            <?php foreach ($dataProdiKom1920 as $key => $reading) : ?><?= $reading['persenInv'] ?><?php endforeach; ?>, 
                            <?php foreach ($dataProdiDp1920 as $key => $reading) : ?><?= $reading['persenInv'] ?><?php endforeach; ?>,
                            <?php foreach ($dataProdiDkv1920 as $key => $reading) : ?><?= $reading['persenInv'] ?><?php endforeach; ?>, 
                            <?php foreach ($dataProdiInf1920 as $key => $reading) : ?><?= $reading['persenInv'] ?><?php endforeach; ?>, 
                            <?php foreach ($dataProdiSif1920 as $key => $reading) : ?><?= $reading['persenInv'] ?><?php endforeach; ?>, 
                            <?php foreach ($dataProdiTsp1920 as $key => $reading) : ?><?= $reading['persenInv'] ?><?php endforeach; ?>,
                            <?php foreach ($dataProdiArs1920 as $key => $reading) : ?><?= $reading['persenInv'] ?><?php endforeach; ?> 
                        ]


                    },
                    {
                        label: '2020/2021',
                        backgroundColor: 'rgba(93, 255, 223,1)',
                        borderColor: 'rgba(93, 255, 223,1)',
                        pointRadius: false,
                        pointColor: '#3b8bba',
                        pointStrokeColor: 'rgba(60,141,188,1)',
                        pointHighlightFill: '#fff',
                        pointHighlightStroke: 'rgba(60,141,188,1)',
                        data: [
                            <?php foreach ($dataProdiAkt2021 as $key => $reading) : ?><?= $reading['persenInv'] ?><?php endforeach; ?>,
                            <?php foreach ($dataProdiMan2021 as $key => $reading) : ?><?= $reading['persenInv'] ?><?php endforeach; ?>, 
                            <?php foreach ($dataProdiPsi2021 as $key => $reading) : ?><?= $reading['persenInv'] ?><?php endforeach; ?>,
                            <?php foreach ($dataProdiKom2021 as $key => $reading) : ?><?= $reading['persenInv'] ?><?php endforeach; ?>, 
                            <?php foreach ($dataProdiDp2021 as $key => $reading) : ?><?= $reading['persenInv'] ?><?php endforeach; ?>,
                            <?php foreach ($dataProdiDkv2021 as $key => $reading) : ?><?= $reading['persenInv'] ?><?php endforeach; ?>, 
                            <?php foreach ($dataProdiInf2021 as $key => $reading) : ?><?= $reading['persenInv'] ?><?php endforeach; ?>, 
                            <?php foreach ($dataProdiSif2021 as $key => $reading) : ?><?= $reading['persenInv'] ?><?php endforeach; ?>, 
                            <?php foreach ($dataProdiTsp2021 as $key => $reading) : ?><?= $reading['persenInv'] ?><?php endforeach; ?>,
                            <?php foreach ($dataProdiArs2021 as $key => $reading) : ?><?= $reading['persenInv'] ?><?php endforeach; ?>  
                        ]

                    },
                    {
                        label: '2021/2022',
                        backgroundColor: 'rgba(93, 78, 246,1)',
                        borderColor: 'rgba(93, 78, 246,1)',
                        pointRadius: false,
                        pointColor: '#3b8bba',
                        pointStrokeColor: 'rgba(60,141,188,1)',
                        pointHighlightFill: '#fff',
                        pointHighlightStroke: 'rgba(60,141,188,1)',
                        data: [
                            <?php foreach ($dataProdiAkt2122 as $key => $reading) : ?><?= $reading['persenInv'] ?><?php endforeach; ?>,
                            <?php foreach ($dataProdiMan2122 as $key => $reading) : ?><?= $reading['persenInv'] ?><?php endforeach; ?>, 
                            <?php foreach ($dataProdiPsi2122 as $key => $reading) : ?><?= $reading['persenInv'] ?><?php endforeach; ?>,
                            <?php foreach ($dataProdiKom2122 as $key => $reading) : ?><?= $reading['persenInv'] ?><?php endforeach; ?>, 
                            <?php foreach ($dataProdiDp2122 as $key => $reading) : ?><?= $reading['persenInv'] ?><?php endforeach; ?>,
                            <?php foreach ($dataProdiDkv2122 as $key => $reading) : ?><?= $reading['persenInv'] ?><?php endforeach; ?>, 
                            <?php foreach ($dataProdiInf2122 as $key => $reading) : ?><?= $reading['persenInv'] ?><?php endforeach; ?>, 
                            <?php foreach ($dataProdiSif2122 as $key => $reading) : ?><?= $reading['persenInv'] ?><?php endforeach; ?>, 
                            <?php foreach ($dataProdiTsp2122 as $key => $reading) : ?><?= $reading['persenInv'] ?><?php endforeach; ?>,
                            <?php foreach ($dataProdiArs2122 as $key => $reading) : ?><?= $reading['persenInv'] ?><?php endforeach; ?> 
                        ]
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
                        scaleLabel: {
                            display: true,

                        }
                    }],
                    yAxes: [{
                        display: true,
                        ticks: {
                            beginAtZero: true,
                            steps: 10,
                            stepValue: 5,

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