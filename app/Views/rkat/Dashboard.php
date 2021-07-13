<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Dashboard RKAT</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Law Firm Website Template" name="keywords">
        <meta content="Law Firm Website Template" name="description">

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>

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
    </head>

    <body onload="startTime()">
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
                                    <h2><div id="txt"></div></h2>
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
            <!-- Nav Bar Start -->
            <div class="nav-bar">
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                        <a href=""><i class="fas fa-long-arrow-alt-left"></i></a>
                        <a href="#" class="navbar-brand">MENU</a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto">
                                <a href="index.html" class="nav-item nav-link active">Home</a>
                                <a href="about.html" class="nav-item nav-link">About</a>
                                <a href="service.html" class="nav-item nav-link">Practice</a>
                                <a href="team.html" class="nav-item nav-link">Attorneys</a>
                                <a href="portfolio.html" class="nav-item nav-link">Case Studies</a>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                                    <div class="dropdown-menu">
                                        <a href="blog.html" class="dropdown-item">Blog Page</a>
                                        <a href="single.html" class="dropdown-item">Single Page</a>
                                    </div>
                                </div>
                                <a href="contact.html" class="nav-item nav-link">Contact</a>
                            </div>
                            <div class="ml-auto">
                                <a href="#" class="btn">LOGOUT</a>
                            </div>
                        </div>
                    </nav>
            </div>
                <br>
            <!-- Nav Bar End -->
            <div class="container-fluid">
            <p>Selamat Datang di halaman RKAT </p>
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
                                <i class="fas fa-user"></i>
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
                            <i class="fas fa-user"></i>
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
            </div>  
            <!-- ====================================================================================================================== --> 
            
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
			  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
			  return i;
			}
		</script>
    </body>
</html>
