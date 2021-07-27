<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Dashboard RKAT</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="Law Firm Website Template" name="keywords">
	<meta content="Law Firm Website Template" name="description">

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/png" href="/favicon.ico" />

	<!-- Google Font -->
	<link
		href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,600;1,700;1,800&family=Roboto:wght@400;500&display=swap"
		rel="stylesheet">

	<!-- CSS Libraries -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
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
				<a href="/backend/rkat"><i class="fas fa-long-arrow-alt-left"></i></a>
				<a href="#" class="navbar-brand">MENU</a>
				<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-between">

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
									<a class="dropdown-item" href="/auth/logout"><i class="fas fa-sign-out-alt"></i> Log
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
		<div class="media align-items-center py-3 mb-3">
              <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="d-block ui-w-100 rounded-circle">
              <div class="media-body ml-4">
                <h4 class="font-weight-bold mb-0">John Doe <span class="text-muted font-weight-normal">@johndoe</span></h4>
                <div class="text-muted mb-2">ID: 3425433</div>
                <a href="javascript:void(0)" class="btn btn-primary btn-sm">Edit</a>&nbsp;
                <a href="javascript:void(0)" class="btn btn-default btn-sm">Profile</a>&nbsp;
                <a href="javascript:void(0)" class="btn btn-default btn-sm icon-btn"><i class="fa fa-mail"></i></a>
              </div>
            </div>

            <div class="card mb-4">
              <div class="card-body">
                <table class="table user-view-table m-0">
                  <tbody>
                    <tr>
                      <td>Registered:</td>
                      <td>01/23/2017</td>
                    </tr>
                    <tr>
                      <td>Latest activity:</td>
                      <td>01/23/2018 (14 days ago)</td>
                    </tr>
                    <tr>
                      <td>Verified:</td>
                      <td><span class="fa fa-check text-primary"></span>&nbsp; Yes</td>
                    </tr>
                    <tr>
                      <td>Role:</td>
                      <td>User</td>
                    </tr>
                    <tr>
                      <td>Status:</td>
                      <td><span class="badge badge-outline-success">Active</span></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <hr class="border-light m-0">
              <div class="table-responsive">
                <table class="table card-table m-0">
                  <tbody>
                    <tr>
                      <th>Module Permission</th>
                      <th>Read</th>
                      <th>Write</th>
                      <th>Create</th>
                      <th>Delete</th>
                    </tr>
                    <tr>
                      <td>Users</td>
                      <td><span class="fa fa-check text-primary"></span></td>
                      <td><span class="fa fa-times text-light"></span></td>
                      <td><span class="fa fa-times text-light"></span></td>
                      <td><span class="fa fa-times text-light"></span></td>
                    </tr>
                    <tr>
                      <td>Articles</td>
                      <td><span class="fa fa-check text-primary"></span></td>
                      <td><span class="fa fa-check text-primary"></span></td>
                      <td><span class="fa fa-check text-primary"></span></td>
                      <td><span class="fa fa-times text-light"></span></td>
                    </tr>
                    <tr>
                      <td>Staff</td>
                      <td><span class="fa fa-times text-light"></span></td>
                      <td><span class="fa fa-times text-light"></span></td>
                      <td><span class="fa fa-times text-light"></span></td>
                      <td><span class="fa fa-times text-light"></span></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <div class="card">
              <div class="row no-gutters row-bordered">
                <div class="d-flex col-md align-items-center">
                  <a href="javascript:void(0)" class="card-body d-block text-body">
                    <div class="text-muted small line-height-1">Posts</div>
                    <div class="text-xlarge">125</div>
                  </a>
                </div>
                <div class="d-flex col-md align-items-center">
                  <a href="javascript:void(0)" class="card-body d-block text-body">
                    <div class="text-muted small line-height-1">Followers</div>
                    <div class="text-xlarge">534</div>
                  </a>
                </div>
                <div class="d-flex col-md align-items-center">
                  <a href="javascript:void(0)" class="card-body d-block text-body">
                    <div class="text-muted small line-height-1">Following</div>
                    <div class="text-xlarge">236</div>
                  </a>
                </div>
              </div>
              <hr class="border-light m-0">
              <div class="card-body">

                <table class="table user-view-table m-0">
                  <tbody>
                    <tr>
                      <td>Username:</td>
                      <td>nmaxwell</td>
                    </tr>
                    <tr>
                      <td>Name:</td>
                      <td>Nelle Maxwell</td>
                    </tr>
                    <tr>
                      <td>E-mail:</td>
                      <td>nmaxwell@mail.com</td>
                    </tr>
                    <tr>
                      <td>Company:</td>
                      <td>Company Ltd.</td>
                    </tr>
                  </tbody>
                </table>

                <h6 class="mt-4 mb-3">Social links</h6>

                <table class="table user-view-table m-0">
                  <tbody>
                    <tr>
                      <td>Twitter:</td>
                      <td><a href="javascript:void(0)">https://twitter.com/user</a></td>
                    </tr>
                    <tr>
                      <td>Facebook:</td>
                      <td><a href="javascript:void(0)">https://www.facebook.com/user</a></td>
                    </tr>
                    <tr>
                      <td>Instagram:</td>
                      <td><a href="javascript:void(0)">https://www.instagram.com/user</a></td>
                    </tr>
                  </tbody>
                </table>

                <h6 class="mt-4 mb-3">Personal info</h6>

                <table class="table user-view-table m-0">
                  <tbody>
                    <tr>
                      <td>Birthday:</td>
                      <td>May 3, 1995</td>
                    </tr>
                    <tr>
                      <td>Country:</td>
                      <td>Canada</td>
                    </tr>
                    <tr>
                      <td>Languages:</td>
                      <td>English</td>
                    </tr>
                  </tbody>
                </table>

                <h6 class="mt-4 mb-3">Contacts</h6>

                <table class="table user-view-table m-0">
                  <tbody>
                    <tr>
                      <td>Phone:</td>
                      <td>+0 (123) 456 7891</td>
                    </tr>
                  </tbody>
                </table>

                <h6 class="mt-4 mb-3">Interests</h6>

                <table class="table user-view-table m-0">
                  <tbody>
                    <tr>
                      <td>Favorite music:</td>
                      <td>
                        Rock,
                        Alternative,
                        Electro,
                        Drum &amp; Bass,
                        Dance
                      </td>
                    </tr>
                    <tr>
                      <td>Favorite movies:</td>
                      <td>
                        The Green Mile,
                        Pulp Fiction,
                        Back to the Future,
                        WALL·E,
                        Django Unchained,
                        The Truman Show,
                        Home Alone,
                        Seven Pounds
                      </td>
                    </tr>
                  </tbody>
                </table>

              </div>
            </div>
		<!-- Responsive tables End -->

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
	<script src="http://localhost:8080/chart/apexcharts.min.js"></script>
	<script src="http://localhost:8080/chart/dashboard.js"></script>
	<script src="http://localhost:8080/chart/jquery.knob.min.js"></script>
	<script src="http://localhost:8080/chart/knob-chart-setting.js"></script>
	<script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
	<script>
		$(window).load(function () {
			$(".pre-loader").fadeOut("slow");
		});

	</script>
</body>

</html>
