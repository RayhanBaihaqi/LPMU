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
    <div>
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
    </div>


    <!-- Top Bar End -->
    <div class="container-fluid">
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
                        <a href="/kpi" class="nav-item nav-link">Home</a>
                        <a href="inputkpi" class="nav-item nav-link active">Input Rencana</a>
                        <a href="/kpi/inputcapaian" class="nav-item nav-link">Input Capaian</a>
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
                                    <a class="dropdown-item" href="/auth/logout"><i class="fas fa-sign-out-alt"></i> Log Out</a>
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

    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $("#prodi_unit").change(function() {
            if ($(this).val() == "Prodi") {
                $('#nama_prodiDiv').show();
                $('#nama_prodi').attr('required', '');
                $('#nama_prodi').attr('data-error', 'This field is required.');
                $('#nama_unitDiv').hide();
                $('#nama_unit').removeAttr('required');
                $('#nama_unit').removeAttr('data-error');
                $('#kriteriaDiv').show();
                $('#kriteria').attr('required', '');
                $('#kriteria').attr('data-error', 'This field is required.');
                $('#pic_prodiDiv').show();
                $('#pic_prodi').attr('required', '');
                $('#pic_prodi').attr('data-error', 'This field is required.');
                $('#pic_unitDiv').hide();
                $('#pic_unit').removeAttr('required');
                $('#pic_unit').removeAttr('data-error');
                $('#standar1Div').hide();
                $('#standar1').removeAttr('required');
                $('#standar1').removeAttr('data-error');
                $('#standar2Div').hide();
                $('#standar2').removeAttr('required');
                $('#standar2').removeAttr('data-error');
                $('#standar3Div').hide();
                $('#standar3').removeAttr('required');
                $('#standar3').removeAttr('data-error');
                $('#standar4Div').hide();
                $('#standar4').removeAttr('required');
                $('#standar4').removeAttr('data-error');
                $('#standar5Div').hide();
                $('#standar5').removeAttr('required');
                $('#standar5').removeAttr('data-error');
                $('#standar6Div').hide();
                $('#standar6').removeAttr('required');
                $('#standar6').removeAttr('data-error');
                $('#standar7Div').hide();
                $('#standar7').removeAttr('required');
                $('#standar7').removeAttr('data-error');
                $('#standar8Div').hide();
                $('#standar8').removeAttr('required');
                $('#standar8').removeAttr('data-error');
                $('#standar9Div').hide();
                $('#standar9').removeAttr('required');
                $('#standar9').removeAttr('data-error');
                $('#nama_picDiv').hide();
                $('#nama_pic').removeAttr('required');
                $('#nama_pic').removeAttr('data-error');
                $('#rencana_realisasiDiv').hide();
                $('#rencana_realisasi').removeAttr('required');
                $('#rencana_realisasi').removeAttr('data-error');
                $('#ketercapaianDiv').hide();
                $('#ketercapaian').removeAttr('required');
                $('#ketercapaian').removeAttr('data-error');
                $('#skorDiv').hide();
                $('#skor').removeAttr('required');
                $('#skor').removeAttr('data-error');
                $('#buktiDiv').hide();
                $('#bukti').removeAttr('required');
                $('#bukti').removeAttr('data-error');
                $('#standarDiv').hide();
                $('#standar').removeAttr('required');
                $('#standar').removeAttr('data-error');
            } else if ($(this).val() == "Unit") {
                $('#nama_prodiDiv').hide();
                $('#nama_prodi').removeAttr('required');
                $('#nama_prodi').removeAttr('data-error');
                $('#nama_unitDiv').show();
                $('#nama_unit').attr('required', '');
                $('#nama_unit').attr('data-error', 'This field is required.');
                $('#kriteriaDiv').show();
                $('#kriteria').attr('required', '');
                $('#kriteria').attr('data-error', 'This field is required.');
                $('#pic_prodiDiv').hide();
                $('#pic_prodi').removeAttr('required');
                $('#pic_prodi').removeAttr('data-error');
                $('#pic_unitDiv').show();
                $('#pic_unit').attr('required', '');
                $('#pic_unit').attr('data-error', 'This field is required.');
                $('#standar1Div').hide();
                $('#standar1').removeAttr('required');
                $('#standar1').removeAttr('data-error');
                $('#standar2Div').hide();
                $('#standar2').removeAttr('required');
                $('#standar2').removeAttr('data-error');
                $('#standar3Div').hide();
                $('#standar3').removeAttr('required');
                $('#standar3').removeAttr('data-error');
                $('#standar4Div').hide();
                $('#standar4').removeAttr('required');
                $('#standar4').removeAttr('data-error');
                $('#standar5Div').hide();
                $('#standar5').removeAttr('required');
                $('#standar5').removeAttr('data-error');
                $('#standar6Div').hide();
                $('#standar6').removeAttr('required');
                $('#standar6').removeAttr('data-error');
                $('#standar7Div').hide();
                $('#standar7').removeAttr('required');
                $('#standar7').removeAttr('data-error');
                $('#standar8Div').hide();
                $('#standar8').removeAttr('required');
                $('#standar8').removeAttr('data-error');
                $('#standar9Div').hide();
                $('#standar9').removeAttr('required');
                $('#standar9').removeAttr('data-error');
                $('#nama_picDiv').hide();
                $('#nama_pic').removeAttr('required');
                $('#nama_pic').removeAttr('data-error');
                $('#rencana_realisasiDiv').hide();
                $('#rencana_realisasi').removeAttr('required');
                $('#rencana_realisasi').removeAttr('data-error');
                $('#ketercapaianDiv').hide();
                $('#ketercapaian').removeAttr('required');
                $('#ketercapaian').removeAttr('data-error');
                $('#skorDiv').hide();
                $('#skor').removeAttr('required');
                $('#skor').removeAttr('data-error');
                $('#buktiDiv').hide();
                $('#bukti').removeAttr('required');
                $('#bukti').removeAttr('data-error');
                $('#standarDiv').hide();
                $('#standar').removeAttr('required');
                $('#standar').removeAttr('data-error');
            } else {
                $('#nama_prodiDiv').hide();
                $('#nama_prodi').removeAttr('required');
                $('#nama_prodi').removeAttr('data-error');
                $('#nama_unitDiv').hide();
                $('#nama_unit').removeAttr('required');
                $('#nama_unit').removeAttr('data-error');
                $('#kriteriaDiv').hide();
                $('#kriteria').removeAttr('required');
                $('#kriteria').removeAttr('data-error');
                $('#pic_prodiDiv').hide();
                $('#pic_prodi').removeAttr('required');
                $('#pic_prodi').removeAttr('data-error');
                $('#pic_unitDiv').hide();
                $('#pic_unit').removeAttr('required');
                $('#pic_unit').removeAttr('data-error');
                $('#standar1Div').hide();
                $('#standar1').removeAttr('required');
                $('#standar1').removeAttr('data-error');
                $('#standar2Div').hide();
                $('#standar2').removeAttr('required');
                $('#standar2').removeAttr('data-error');
                $('#standar3Div').hide();
                $('#standar3').removeAttr('required');
                $('#standar3').removeAttr('data-error');
                $('#standar4Div').hide();
                $('#standar4').removeAttr('required');
                $('#standar4').removeAttr('data-error');
                $('#standar5Div').hide();
                $('#standar5').removeAttr('required');
                $('#standar5').removeAttr('data-error');
                $('#standar6Div').hide();
                $('#standar6').removeAttr('required');
                $('#standar6').removeAttr('data-error');
                $('#standar7Div').hide();
                $('#standar7').removeAttr('required');
                $('#standar7').removeAttr('data-error');
                $('#standar8Div').hide();
                $('#standar8').removeAttr('required');
                $('#standar8').removeAttr('data-error');
                $('#standar9Div').hide();
                $('#standar9').removeAttr('required');
                $('#standar9').removeAttr('data-error');
                $('#nama_picDiv').hide();
                $('#nama_pic').removeAttr('required');
                $('#nama_pic').removeAttr('data-error');
                $('#rencana_realisasiDiv').hide();
                $('#rencana_realisasi').removeAttr('required');
                $('#rencana_realisasi').removeAttr('data-error');
                $('#ketercapaianDiv').hide();
                $('#ketercapaian').removeAttr('required');
                $('#ketercapaian').removeAttr('data-error');
                $('#skorDiv').hide();
                $('#skor').removeAttr('required');
                $('#skor').removeAttr('data-error');
                $('#buktiDiv').hide();
                $('#bukti').removeAttr('required');
                $('#bukti').removeAttr('data-error');
                $('#standarDiv').hide();
                $('#standar').removeAttr('required');
                $('#standar').removeAttr('data-error');
            }

        });
        $("#prodi_unit").trigger("change");

        $("#kriteria").change(function() {
            if ($(this).val() == "1") {
                $('#standar1Div').show();
                $('#standar1').attr('required', '');
                $('#standar1').attr('data-error', 'This field is required.');
                $('#standar2Div').hide();
                $('#standar2').removeAttr('required');
                $('#standar2').removeAttr('data-error');
                $('#standar3Div').hide();
                $('#standar3').removeAttr('required');
                $('#standar3').removeAttr('data-error');
                $('#standar4Div').hide();
                $('#standar4').removeAttr('required');
                $('#standar4').removeAttr('data-error');
                $('#standar5Div').hide();
                $('#standar5').removeAttr('required');
                $('#standar5').removeAttr('data-error');
                $('#standar6Div').hide();
                $('#standar6').removeAttr('required');
                $('#standar6').removeAttr('data-error');
                $('#standar7Div').hide();
                $('#standar7').removeAttr('required');
                $('#standar7').removeAttr('data-error');
                $('#standar8Div').hide();
                $('#standar8').removeAttr('required');
                $('#standar8').removeAttr('data-error');
                $('#standar9Div').hide();
                $('#standar9').removeAttr('required');
                $('#standar9').removeAttr('data-error');
                $('#nama_picDiv').show();
                $('#nama_pic').attr('required', '');
                $('#nama_pic').attr('data-error', 'This field is required.');
                $('#rencana_realisasiDiv').show();
                $('#rencana_realisasi').attr('required', '');
                $('#rencana_realisasi').attr('data-error', 'This field is required.');
                $('#ketercapaianDiv').show();
                $('#ketercapaian').attr('required', '');
                $('#ketercapaian').attr('data-error', 'This field is required.');
                $('#skorDiv').show();
                $('#skor').attr('required', '');
                $('#skor').attr('data-error', 'This field is required.');
                $('#buktiDiv').show();
                $('#bukti').attr('required', '');
                $('#bukti').attr('data-error', 'This field is required.');
                $('#standarDiv').hide();
                $('#standar').removeAttr('required');
                $('#standar').removeAttr('data-error');
            } else if ($(this).val() == "2") {
                $('#standar1Div').hide();
                $('#standar1').removeAttr('required');
                $('#standar1').removeAttr('data-error');
                $('#standar2Div').show();
                $('#standar2').attr('required', '');
                $('#standar2').attr('data-error', 'This field is required.');
                $('#standar3Div').hide();
                $('#standar3').removeAttr('required');
                $('#standar3').removeAttr('data-error');
                $('#standar4Div').hide();
                $('#standar4').removeAttr('required');
                $('#standar4').removeAttr('data-error');
                $('#standar5Div').hide();
                $('#standar5').removeAttr('required');
                $('#standar5').removeAttr('data-error');
                $('#standar6Div').hide();
                $('#standar6').removeAttr('required');
                $('#standar6').removeAttr('data-error');
                $('#standar7Div').hide();
                $('#standar7').removeAttr('required');
                $('#standar7').removeAttr('data-error');
                $('#standar8Div').hide();
                $('#standar8').removeAttr('required');
                $('#standar8').removeAttr('data-error');
                $('#standar9Div').hide();
                $('#standar9').removeAttr('required');
                $('#standar9').removeAttr('data-error');
                $('#nama_picDiv').show();
                $('#nama_pic').attr('required', '');
                $('#nama_pic').attr('data-error', 'This field is required.');
                $('#rencana_realisasiDiv').show();
                $('#rencana_realisasi').attr('required', '');
                $('#rencana_realisasi').attr('data-error', 'This field is required.');
                $('#ketercapaianDiv').show();
                $('#ketercapaian').attr('required', '');
                $('#ketercapaian').attr('data-error', 'This field is required.');
                $('#skorDiv').show();
                $('#skor').attr('required', '');
                $('#skor').attr('data-error', 'This field is required.');
                $('#buktiDiv').show();
                $('#bukti').attr('required', '');
                $('#bukti').attr('data-error', 'This field is required.');
                $('#standarDiv').hide();
                $('#standar').removeAttr('required');
                $('#standar').removeAttr('data-error');
            } else if ($(this).val() == "3") {
                $('#standar1Div').hide();
                $('#standar1').removeAttr('required');
                $('#standar1').removeAttr('data-error');
                $('#standar2Div').hide();
                $('#standar2').removeAttr('required');
                $('#standar2').removeAttr('data-error');
                $('#standar3Div').show();
                $('#standar3').attr('required', '');
                $('#standar3').attr('data-error', 'This field is required.');
                $('#standar4Div').hide();
                $('#standar4').removeAttr('required');
                $('#standar4').removeAttr('data-error');
                $('#standar5Div').hide();
                $('#standar5').removeAttr('required');
                $('#standar5').removeAttr('data-error');
                $('#standar6Div').hide();
                $('#standar6').removeAttr('required');
                $('#standar6').removeAttr('data-error');
                $('#standar7Div').hide();
                $('#standar7').removeAttr('required');
                $('#standar7').removeAttr('data-error');
                $('#standar8Div').hide();
                $('#standar8').removeAttr('required');
                $('#standar8').removeAttr('data-error');
                $('#standar9Div').hide();
                $('#standar9').removeAttr('required');
                $('#standar9').removeAttr('data-error');
                $('#nama_picDiv').show();
                $('#nama_pic').attr('required', '');
                $('#nama_pic').attr('data-error', 'This field is required.');
                $('#rencana_realisasiDiv').show();
                $('#rencana_realisasi').attr('required', '');
                $('#rencana_realisasi').attr('data-error', 'This field is required.');
                $('#ketercapaianDiv').show();
                $('#ketercapaian').attr('required', '');
                $('#ketercapaian').attr('data-error', 'This field is required.');
                $('#skorDiv').show();
                $('#skor').attr('required', '');
                $('#skor').attr('data-error', 'This field is required.');
                $('#buktiDiv').show();
                $('#bukti').attr('required', '');
                $('#bukti').attr('data-error', 'This field is required.');
                $('#standarDiv').hide();
                $('#standar').removeAttr('required');
                $('#standar').removeAttr('data-error');
            } else if ($(this).val() == "4") {
                $('#standar1Div').hide();
                $('#standar1').removeAttr('required');
                $('#standar1').removeAttr('data-error');
                $('#standar2Div').hide();
                $('#standar2').removeAttr('required');
                $('#standar2').removeAttr('data-error');
                $('#standar3Div').hide();
                $('#standar3').removeAttr('required');
                $('#standar3').removeAttr('data-error');
                $('#standar4Div').show();
                $('#standar4').attr('required', '');
                $('#standar4').attr('data-error', 'This field is required.');
                $('#standar5Div').hide();
                $('#standar5').removeAttr('required');
                $('#standar5').removeAttr('data-error');
                $('#standar6Div').hide();
                $('#standar6').removeAttr('required');
                $('#standar6').removeAttr('data-error');
                $('#standar7Div').hide();
                $('#standar7').removeAttr('required');
                $('#standar7').removeAttr('data-error');
                $('#standar8Div').hide();
                $('#standar8').removeAttr('required');
                $('#standar8').removeAttr('data-error');
                $('#standar9Div').hide();
                $('#standar9').removeAttr('required');
                $('#standar9').removeAttr('data-error');
                $('#nama_picDiv').show();
                $('#nama_pic').attr('required', '');
                $('#nama_pic').attr('data-error', 'This field is required.');
                $('#rencana_realisasiDiv').show();
                $('#rencana_realisasi').attr('required', '');
                $('#rencana_realisasi').attr('data-error', 'This field is required.');
                $('#ketercapaianDiv').show();
                $('#ketercapaian').attr('required', '');
                $('#ketercapaian').attr('data-error', 'This field is required.');
                $('#skorDiv').show();
                $('#skor').attr('required', '');
                $('#skor').attr('data-error', 'This field is required.');
                $('#buktiDiv').show();
                $('#bukti').attr('required', '');
                $('#bukti').attr('data-error', 'This field is required.');
                $('#standarDiv').hide();
                $('#standar').removeAttr('required');
                $('#standar').removeAttr('data-error');
            } else if ($(this).val() == "5") {
                $('#standar1Div').hide();
                $('#standar1').removeAttr('required');
                $('#standar1').removeAttr('data-error');
                $('#standar2Div').hide();
                $('#standar2').removeAttr('required');
                $('#standar2').removeAttr('data-error');
                $('#standar3Div').hide();
                $('#standar3').removeAttr('required');
                $('#standar3').removeAttr('data-error');
                $('#standar4Div').hide();
                $('#standar4').removeAttr('required');
                $('#standar4').removeAttr('data-error');
                $('#standar5Div').show();
                $('#standar5').attr('required', '');
                $('#standar5').attr('data-error', 'This field is required.');
                $('#standar6Div').hide();
                $('#standar6').removeAttr('required');
                $('#standar6').removeAttr('data-error');
                $('#standar7Div').hide();
                $('#standar7').removeAttr('required');
                $('#standar7').removeAttr('data-error');
                $('#standar8Div').hide();
                $('#standar8').removeAttr('required');
                $('#standar8').removeAttr('data-error');
                $('#standar9Div').hide();
                $('#standar9').removeAttr('required');
                $('#standar9').removeAttr('data-error');
                $('#nama_picDiv').show();
                $('#nama_pic').attr('required', '');
                $('#nama_pic').attr('data-error', 'This field is required.');
                $('#rencana_realisasiDiv').show();
                $('#rencana_realisasi').attr('required', '');
                $('#rencana_realisasi').attr('data-error', 'This field is required.');
                $('#ketercapaianDiv').show();
                $('#ketercapaian').attr('required', '');
                $('#ketercapaian').attr('data-error', 'This field is required.');
                $('#skorDiv').show();
                $('#skor').attr('required', '');
                $('#skor').attr('data-error', 'This field is required.');
                $('#buktiDiv').show();
                $('#bukti').attr('required', '');
                $('#bukti').attr('data-error', 'This field is required.');
                $('#standarDiv').hide();
                $('#standar').removeAttr('required');
                $('#standar').removeAttr('data-error');
            } else if ($(this).val() == "6") {
                $('#standar1Div').hide();
                $('#standar1').removeAttr('required');
                $('#standar1').removeAttr('data-error');
                $('#standar2Div').hide();
                $('#standar2').removeAttr('required');
                $('#standar2').removeAttr('data-error');
                $('#standar3Div').hide();
                $('#standar3').removeAttr('required');
                $('#standar3').removeAttr('data-error');
                $('#standar4Div').hide();
                $('#standar4').removeAttr('required');
                $('#standar4').removeAttr('data-error');
                $('#standar5Div').hide();
                $('#standar5').removeAttr('required');
                $('#standar5').removeAttr('data-error');
                $('#standar6Div').show();
                $('#standar6').attr('required', '');
                $('#standar6').attr('data-error', 'This field is required.');
                $('#standar7Div').hide();
                $('#standar7').removeAttr('required');
                $('#standar7').removeAttr('data-error');
                $('#standar8Div').hide();
                $('#standar8').removeAttr('required');
                $('#standar8').removeAttr('data-error');
                $('#standar9Div').hide();
                $('#standar9').removeAttr('required');
                $('#standar9').removeAttr('data-error');
                $('#nama_picDiv').show();
                $('#nama_pic').attr('required', '');
                $('#nama_pic').attr('data-error', 'This field is required.');
                $('#rencana_realisasiDiv').show();
                $('#rencana_realisasi').attr('required', '');
                $('#rencana_realisasi').attr('data-error', 'This field is required.');
                $('#ketercapaianDiv').show();
                $('#ketercapaian').attr('required', '');
                $('#ketercapaian').attr('data-error', 'This field is required.');
                $('#skorDiv').show();
                $('#skor').attr('required', '');
                $('#skor').attr('data-error', 'This field is required.');
                $('#buktiDiv').show();
                $('#bukti').attr('required', '');
                $('#bukti').attr('data-error', 'This field is required.');
                $('#standarDiv').hide();
                $('#standar').removeAttr('required');
                $('#standar').removeAttr('data-error');
            } else if ($(this).val() == "7") {
                $('#standar1Div').hide();
                $('#standar1').removeAttr('required');
                $('#standar1').removeAttr('data-error');
                $('#standar2Div').hide();
                $('#standar2').removeAttr('required');
                $('#standar2').removeAttr('data-error');
                $('#standar3Div').hide();
                $('#standar3').removeAttr('required');
                $('#standar3').removeAttr('data-error');
                $('#standar4Div').hide();
                $('#standar4').removeAttr('required');
                $('#standar4').removeAttr('data-error');
                $('#standar5Div').hide();
                $('#standar5').removeAttr('required');
                $('#standar5').removeAttr('data-error');
                $('#standar6Div').hide();
                $('#standar6').removeAttr('required');
                $('#standar6').removeAttr('data-error');
                $('#standar7Div').show();
                $('#standar7').attr('required', '');
                $('#standar7').attr('data-error', 'This field is required.');
                $('#standar8Div').hide();
                $('#standar8').removeAttr('required');
                $('#standar8').removeAttr('data-error');
                $('#standar9Div').hide();
                $('#standar9').removeAttr('required');
                $('#standar9').removeAttr('data-error');
                $('#nama_picDiv').show();
                $('#nama_pic').attr('required', '');
                $('#nama_pic').attr('data-error', 'This field is required.');
                $('#rencana_realisasiDiv').show();
                $('#rencana_realisasi').attr('required', '');
                $('#rencana_realisasi').attr('data-error', 'This field is required.');
                $('#ketercapaianDiv').show();
                $('#ketercapaian').attr('required', '');
                $('#ketercapaian').attr('data-error', 'This field is required.');
                $('#skorDiv').show();
                $('#skor').attr('required', '');
                $('#skor').attr('data-error', 'This field is required.');
                $('#buktiDiv').show();
                $('#bukti').attr('required', '');
                $('#bukti').attr('data-error', 'This field is required.');
                $('#standarDiv').hide();
                $('#standar').removeAttr('required');
                $('#standar').removeAttr('data-error');
            } else if ($(this).val() == "8") {
                $('#standar1Div').hide();
                $('#standar1').removeAttr('required');
                $('#standar1').removeAttr('data-error');
                $('#standar2Div').hide();
                $('#standar2').removeAttr('required');
                $('#standar2').removeAttr('data-error');
                $('#standar3Div').hide();
                $('#standar3').removeAttr('required');
                $('#standar3').removeAttr('data-error');
                $('#standar4Div').hide();
                $('#standar4').removeAttr('required');
                $('#standar4').removeAttr('data-error');
                $('#standar5Div').hide();
                $('#standar5').removeAttr('required');
                $('#standar5').removeAttr('data-error');
                $('#standar6Div').hide();
                $('#standar6').removeAttr('required');
                $('#standar6').removeAttr('data-error');
                $('#standar7Div').hide();
                $('#standar7').removeAttr('required');
                $('#standar7').removeAttr('data-error');
                $('#standar8Div').show();
                $('#standar8').attr('required', '');
                $('#standar8').attr('data-error', 'This field is required.');
                $('#standar9Div').hide();
                $('#standar9').removeAttr('required');
                $('#standar9').removeAttr('data-error');
                $('#nama_picDiv').show();
                $('#nama_pic').attr('required', '');
                $('#nama_pic').attr('data-error', 'This field is required.');
                $('#rencana_realisasiDiv').show();
                $('#rencana_realisasi').attr('required', '');
                $('#rencana_realisasi').attr('data-error', 'This field is required.');
                $('#ketercapaianDiv').show();
                $('#ketercapaian').attr('required', '');
                $('#ketercapaian').attr('data-error', 'This field is required.');
                $('#skorDiv').show();
                $('#skor').attr('required', '');
                $('#skor').attr('data-error', 'This field is required.');
                $('#buktiDiv').show();
                $('#bukti').attr('required', '');
                $('#bukti').attr('data-error', 'This field is required.');
                $('#standarDiv').hide();
                $('#standar').removeAttr('required');
                $('#standar').removeAttr('data-error');
            } else if ($(this).val() == "9") {
                $('#standar1Div').hide();
                $('#standar1').removeAttr('required');
                $('#standar1').removeAttr('data-error');
                $('#standar2Div').hide();
                $('#standar2').removeAttr('required');
                $('#standar2').removeAttr('data-error');
                $('#standar3Div').hide();
                $('#standar3').removeAttr('required');
                $('#standar3').removeAttr('data-error');
                $('#standar4Div').hide();
                $('#standar4').removeAttr('required');
                $('#standar4').removeAttr('data-error');
                $('#standar5Div').hide();
                $('#standar5').removeAttr('required');
                $('#standar5').removeAttr('data-error');
                $('#standar6Div').hide();
                $('#standar6').removeAttr('required');
                $('#standar6').removeAttr('data-error');
                $('#standar7Div').hide();
                $('#standar7').removeAttr('required');
                $('#standar7').removeAttr('data-error');
                $('#standar8Div').hide();
                $('#standar8').removeAttr('required');
                $('#standar8').removeAttr('data-error');
                $('#standar9Div').show();
                $('#standar9').attr('required', '');
                $('#standar9').attr('data-error', 'This field is required.');
                $('#nama_picDiv').show();
                $('#nama_pic').attr('required', '');
                $('#nama_pic').attr('data-error', 'This field is required.');
                $('#rencana_realisasiDiv').show();
                $('#rencana_realisasi').attr('required', '');
                $('#rencana_realisasi').attr('data-error', 'This field is required.');
                $('#ketercapaianDiv').show();
                $('#ketercapaian').attr('required', '');
                $('#ketercapaian').attr('data-error', 'This field is required.');
                $('#skorDiv').show();
                $('#skor').attr('required', '');
                $('#skor').attr('data-error', 'This field is required.');
                $('#buktiDiv').show();
                $('#bukti').attr('required', '');
                $('#bukti').attr('data-error', 'This field is required.');
                $('#standarDiv').hide();
                $('#standar').removeAttr('required');
                $('#standar').removeAttr('data-error');
            } else {

            }
        });
        $("kriteria").trigger("change");

    });
</script>

</html>