<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
	<title>Dashboard RKAT</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
	<!-- item pembantu -->
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Law Firm Website Template" name="keywords">
    <meta content="Law Firm Website Template" name="description">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Law Firm Website Template" name="keywords">
    <meta content="Law Firm Website Template" name="description">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="/favicon.ico" />
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,600;1,700;1,800&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="http://localhost:8080/css/header.css">
    <link rel="stylesheet" href="http://localhost:8080/css/style2.css">


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
                            <a href="index.html">
                                <img src="/img/logo-upj.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="logo">
                            <h1 class="pertama">Lembaga</h1>
                            <h1 class="kedua">Penjaminan Mutu</h1>
                            <h1 class="ketiga">Universitas</h1>
                        </div>
                    </div>
                    <div class="col-sm-1">
                        <div class="top-bar-right">
                            <div class="text">
                                <h2>RKAT</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="top-bar-right">
                            <div class="text">
                                <h2>
                                    <div id="txt"></div>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="social">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Bar End -->
    <div class="container">
        <br>
        <!-- Nav Bar Start -->
		<div class="nav-bar">
			<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
				<a href="/backend"><i class="fas fa-long-arrow-alt-left"></i></a>
				<a href="#" class="navbar-brand">MENU</a>
				<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-between">
					<div class="navbar-nav mr-auto">
						<a href="/backend/rkat" class="nav-item nav-link active">Home</a>
						<a href="" class="nav-item nav-link">Tambah rkat</a>
					</div>
					<div class="ml-auto">
						<div class="user-info-dropdown">
							<div class="dropdown">
								<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									<span class="user-icon">
										<img src="/img/inf-logo.jpg" alt="">
									</span>
									<span class="user-name">
										<?php
                                            $nama_prodi = session('nama_prodi');
                                            echo "$nama_prodi"
                                        ?>
									</span>
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
									<a class="dropdown-item" href="<?= base_url('/backend/profil') ?>"><i class="fas fa-user"></i>
										Profile</a>
									<a class="dropdown-item" href="profile.html"><i class="fas fa-cog"></i> Setting</a>
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
            <p>Selamat Datang di halaman KPI </p>
            <!-- ====================================================================================================================== -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>150</h3>
                            <p>Dosen</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <a href="#" class="small-box-footer">Lihat detail <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>53<sup style="font-size: 20px">%</sup></h3>
                            <p>Tenaga Pendidik</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <a href="#" class="small-box-footer">Lihat detail <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>44</h3>
                            <p>Program Studi</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <a href="#" class="small-box-footer">Lihat detail <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>65</h3>
                            <p>Unit Universitas</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-university"></i>
                        </div>
                        <a href="#" class="small-box-footer">Lihat detail <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- ====================================================================================================================== -->
            <a href="<?= base_url('/setrkat/createbyuser') ?>" class="btn btn-info btn-sm"><i class="fa fa-home"></i> Isi formulir</a>
			<a href="<?= base_url('/rkat/indexbyuser') ?>" class="btn btn-info btn-sm"><i class="fa fa-home"></i> Lihat List Data</a>
			<a href="#" class="btn btn-info btn-sm"><i class="fa fa-home"></i> Link Button</a>
            <hr>
            <div class="row clearfix progress-box">
				<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
					<div class="card-box pd-30 height-100-p">
						<a href="/backend/detail_chart" class="small-box-footer text-blue">
							<div class="progress-box text-center">
								<div id="chart"></div>
								<h5 class="text-blue padding-top-10 h5">My Earnings</h5>
							</div>
							Lihat detail <i class="fas fa-arrow-circle-right"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
					<div class="card-box pd-30 height-100-p">
						<a href="/backend/detail_chart" class="small-box-footer text-blue">
							<div class="progress-box text-center">
								<div id="chart2"></div>
								<h5 class="text-blue padding-top-10 h5">My Earnings</h5>
							</div>
							Lihat detail <i class="fas fa-arrow-circle-right"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
					<div class="card-box pd-30 height-100-p">
						<a href="/backend/detail_chart" class="small-box-footer text-blue">
							<div class="progress-box text-center">
								<div id="chart3"></div>
								<h5 class="text-blue padding-top-10 h5">My Earnings</h5>
							</div>
							Lihat detail <i class="fas fa-arrow-circle-right"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
					<div class="card-box pd-30 height-100-p">
						<a href="/backend/detail_chart" class="small-box-footer text-blue">
							<div class="progress-box text-center">
								<div id="chart4"></div>
								<h5 class="text-blue padding-top-10 h5">My Earnings</h5>
							</div>
							Lihat detail <i class="fas fa-arrow-circle-right"></i>
						</a>
					</div>
				</div>
			</div>
            <!-- ====================================================================================================================== -->
            <div class="row clearfix progress-box">
				<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
					<div class="card-box pd-30 height-100-p">
						<a href="/backend/detail_chart" class="small-box-footer text-blue">
							<div class="progress-box text-center">
								<div id="chart5"></div>
								<h5 class="text-blue padding-top-10 h5">My Earnings</h5>
							</div>
							Lihat detail <i class="fas fa-arrow-circle-right"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
					<div class="card-box pd-30 height-100-p">
						<a href="/backend/detail_chart" class="small-box-footer text-blue">
							<div class="progress-box text-center">
								<div id="chart6"></div>
								<h5 class="text-blue padding-top-10 h5">My Earnings</h5>
							</div>
							Lihat detail <i class="fas fa-arrow-circle-right"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
					<div class="card-box pd-30 height-100-p">
						<a href="/backend/detail_chart" class="small-box-footer text-blue">
							<div class="progress-box text-center">
								<div id="chart7"></div>
								<h5 class="text-blue padding-top-10 h5">My Earnings</h5>
							</div>
							Lihat detail <i class="fas fa-arrow-circle-right"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
					<div class="card-box pd-30 height-100-p">
						<a href="/backend/detail_chart" class="small-box-footer text-blue">
							<div class="progress-box text-center">
								<div id="chart8"></div>
								<h5 class="text-blue padding-top-10 h5">My Earnings</h5>
							</div>
							Lihat detail <i class="fas fa-arrow-circle-right"></i>
						</a>
					</div>
				</div>
			</div>
            <!-- ====================================================================================================================== -->
            <div class="row clearfix progress-box">
				<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
					<div class="card-box pd-30 height-100-p">
						<a href="/backend/detail_chart" class="small-box-footer text-blue">
							<div class="progress-box text-center">
								<div id="chart9"></div>
								<h5 class="text-blue padding-top-10 h5">My Earnings</h5>
							</div>
							Lihat detail <i class="fas fa-arrow-circle-right"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
					<div class="card-box pd-30 height-100-p">
						<a href="/backend/detail_chart" class="small-box-footer text-blue">
							<div class="progress-box text-center">
								<div id="chart10"></div>
								<h5 class="text-blue padding-top-10 h5">My Earnings</h5>
							</div>
							Lihat detail <i class="fas fa-arrow-circle-right"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
					<div class="card-box pd-30 height-100-p">
						<a href="/backend/detail_chart" class="small-box-footer text-blue">
							<div class="progress-box text-center">
								<div id="chart11"></div>
								<h5 class="text-blue padding-top-10 h5">My Earnings</h5>
							</div>
							Lihat detail <i class="fas fa-arrow-circle-right"></i>
						</a>
					</div>
				</div>
			</div>
			<!-- ====================================================================================================================== -->
			<h3>GRAFIK PERBANDINGAN</h3>
			<hr>
			<div class="row clearfix progress-box">
				<div class="col-lg-6 col-md-6 col-sm-12 mb-30">
					<div class="card-box pd-30 height-100-p">
							<div class="progress-box text-center">
							<canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
								<h5 class="text-blue padding-top-10 h5">My Earnings</h5>
							</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 mb-30">
					<div class="card-box pd-30 height-100-p">
							<div class="progress-box text-center">
							<canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
								<h5 class="text-blue padding-top-10 h5">My Earnings</h5>
							</div>
					</div>
				</div>
			</div>
        <section class="content">
                <div class="row">
                    <div class="col-md-6">
                        

                    </div>
                    <!-- /.col (RIGHT) -->
                </div>
                <!-- /.row -->
        </section>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
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
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="../../plugins/chart.js/Chart.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <script src="http://localhost:8080/chart/apexcharts.min.js"></script>
    <script src="http://localhost:8080/chart/dashboard.js"></script>
    <script src="http://localhost:8080/chart/jquery.knob.min.js"></script>
    <script src="http://localhost:8080/chart/knob-chart-setting.js"></script>
	<script src="http://localhost:8080/chart/grafik.js"></script>
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