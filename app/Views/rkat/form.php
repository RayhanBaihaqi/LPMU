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
        <br>
            <!-- Nav Bar Start -->
            <div class="nav-bar">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                    <a href="/backend/rkat"><i class="fas fa-long-arrow-alt-left"></i></a>
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                        <div class="collapse navbar-collapse justify-content-between" >
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
                                            <a class="dropdown-item" href="profile.html"><i class="fas fa-user"></i> Profile</a>
                                            <a class="dropdown-item" href="profile.html"><i class="fas fa-cog"></i> Setting</a>
                                            <a class="dropdown-item" href="login.html"><i class="fas fa-sign-out-alt"></i> Log Out</a>
                                        </div>
				                    </div>
			                    </div>
                            </div>
                        </div>
                </nav>
            </div>
            <!-- Nav Bar End -->
            <br>
            
<form>
	<div class="form-group">
		<label>Text</label>
		<input class="form-control" type="text" placeholder="Johnny Brown">
	</div>
	<div class="form-group">
		<label>Email</label>
		<input class="form-control" value="bootstrap@example.com" type="email">
	</div>
	<div class="form-group">
		<label>URL</label>
		<input class="form-control" value="https://getbootstrap.com" type="url">
	</div>
	<div class="form-group">
		<label>Telephone</label>
		<input class="form-control" value="1-(111)-111-1111" type="tel">
	</div>
	<div class="form-group">
		<label>Password</label>
		<input class="form-control" value="password" type="password">
	</div>
	<div class="form-group">
		<label>Readonly input</label>
		<input class="form-control" type="text" placeholder="Readonly input here…" readonly="">
	</div>
	<div class="form-group">
		<label>Disabled input</label>
		<input type="text" class="form-control" placeholder="Disabled input" disabled="">
	</div>
	<div class="form-group">
		<div class="row">
			<div class="col-md-6 col-sm-12">
				<label class="weight-600">Custom Checkbox</label>
				<div class="custom-control custom-checkbox mb-5">
					<input type="checkbox" class="custom-control-input" id="customCheck1-1">
					<label class="custom-control-label" for="customCheck1-1">Check this custom checkbox</label>
				</div>
				<div class="custom-control custom-checkbox mb-5">
					<input type="checkbox" class="custom-control-input" id="customCheck2-1">
					<label class="custom-control-label" for="customCheck2-1">Check this custom checkbox</label>
				</div>
				<div class="custom-control custom-checkbox mb-5">
					<input type="checkbox" class="custom-control-input" id="customCheck3-1">
					<label class="custom-control-label" for="customCheck3-1">Check this custom checkbox</label>
				</div>
				<div class="custom-control custom-checkbox mb-5">
					<input type="checkbox" class="custom-control-input" id="customCheck4-1">
					<label class="custom-control-label" for="customCheck4-1">Check this custom checkbox</label>
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<label class="weight-600">Custom Radio</label>
				<div class="custom-control custom-radio mb-5">
					<input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
					<label class="custom-control-label" for="customRadio4">Toggle this custom radio</label>
				</div>
				<div class="custom-control custom-radio mb-5">
					<input type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
					<label class="custom-control-label" for="customRadio5">Or toggle this other custom radio</label>
				</div>
				<div class="custom-control custom-radio mb-5">
					<input type="radio" id="customRadio6" name="customRadio" class="custom-control-input">
					<label class="custom-control-label" for="customRadio6">Or toggle this other custom radio</label>
				</div>
			</div>
		</div>
	</div>
	<div class="form-group">
		<label>Disabled select menu</label>
		<select class="form-control" disabled="">
			<option>Disabled select</option>
		</select>
	</div>
	<div class="form-group">
		<label>input plaintext</label>
		<input type="text" readonly="" class="form-control-plaintext" value="email@example.com">
	</div>
	<div class="form-group">
		<label>Textarea</label>
		<textarea class="form-control"></textarea>
	</div>
	<div class="form-group">
		<label>Help text</label>
		<input type="text" class="form-control">
		<small class="form-text text-muted">
		  Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
		</small>
	</div>
	<div class="form-group">
		<label>Example file input</label>
		<input type="file" class="form-control-file form-control height-auto">
	</div>
	<div class="form-group">
		<label>Custom file input</label>
		<div class="custom-file">
			<input type="file" class="custom-file-input">
			<label class="custom-file-label">Choose file</label>
		</div>
	</div>
</form>

				
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
        <script src="http://localhost:8080/chart/apexcharts.min.js"></script>
        <script src="http://localhost:8080/chart/dashboard.js"></script>
        <script src="http://localhost:8080/chart/jquery.knob.min.js"></script>
	    <script src="http://localhost:8080/chart/knob-chart-setting.js"></script>
        <script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
        <script>
            $(window).load(function() {
                $(".pre-loader").fadeOut("slow");
            });
        </script>
    </body>
</html>
