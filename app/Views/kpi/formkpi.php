<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form KPI</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <meta charset="utf-8">
    <title>Dashboard KPI</title>
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

    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="http://localhost:8080/css/header.css">
    <link rel="stylesheet" href="http://localhost:8080/css/style2.css">
</head>

<body>

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
                            <h2>KPI</h2>
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

    <!-- Top Bar End -->
    <div class="container">
        <br>
        <!-- Nav Bar Start -->
        <div class="nav-bar">
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                <a href=""><i class="fas fa-long-arrow-alt-left"></i></a>
                <a href="#" class="navbar-brand">MENU</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between">
                    <div class="navbar-nav mr-auto">
                        <a href="kpi" class="nav-item nav-link">Home</a>
                        <a href="inputkpi" class="nav-item nav-link active">Tambah KPI</a>
                        <a href="index.html" class="nav-item nav-link">Update KPI</a>

                        <a href="contact.html" class="nav-item nav-link">Contact</a>
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
        <h3>Silahkan isi form dibawah ini</h3>
        <br>
        <form>
            <div class="container">

                <div class="form-group">
                    <label for="exampleInputEmail1">Nama kegiatan</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan nama kegiatan">

                </div>
                <select class="custom-select custom-select-sm">
                    <option selected>Kriteria</option>
                    <option value="1">C.1. Visi, Misi, Tujuan dan Strategi</option>
                    <option value="2">C.2. Tata Pamong, Tata Kelola dan Kerjasama
                    </option>
                    <option value="3">C.3. Mahasiswa
                    </option>
                    <option value="4">C.4. Sumber Daya Manusia
                    </option>
                    <option value="5">C.5. Keuangan, Sarana dan Prasarana
                    </option>
                    <option value="6">C.6. Pendidikan
                    </option>
                    <option value="7">C.7. Penelitian
                    </option>
                    <option value="8">C.8 Pengabdian Kepada Masyarakat
                    </option>
                    <option value="9">C.9. Luaran dan Capaian Tridharma
                    </option>
                    <option value="10">D. Analisis dan Penetapan Program Pengembangan
                    </option>
                </select>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>

            </div>

        </form>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>