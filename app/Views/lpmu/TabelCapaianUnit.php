<!DOCTYPE html>
<html lang="en">
<?php

// foreach ($tampilcapaiankpi as $key => $value) {
//     $nilai_bobot[] = $value['$nilai_bobot'];
//     $idkppi[] = $value['$idkpi'];
// }
?>

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

<body>

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
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                <a href="<?php echo site_url(); ?>lpmu"><i class="fas fa-long-arrow-alt-left"></i></a>
                <a href="#" class="navbar-brand">MENU</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between">
                    <div class="navbar-nav mr-auto">
                        <a href="<?php echo site_url(); ?>lpmu/homekpi" class="nav-item nav-link">Home</a>
                        <a href="<?php echo site_url(); ?>lpmu/rencana" class="nav-item nav-link">Rencana</a>
                        <!-- <a href="<?php echo site_url(); ?>lpmu/inputcapaian" class="nav-item nav-link ">Input Realisasi</a> -->
                        <a href="<?php echo site_url(); ?>lpmu/kesimpulan" class="nav-item nav-link">List Capaian KPI</a>
                        <a href="<?php echo site_url(); ?>lpmu/tabelcapaian" class="nav-item nav-link active">Tabel Capaian</a>
                        <a href="<?php echo site_url(); ?>lpmu/grafikcapaian" class="nav-item nav-link">Grafik Capaian </a>
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
                                    <a class="dropdown-item" href="<?= base_url('/lpmu/form_ubahpass') ?>"><i class="fas fa-cog"></i> Ubah Password</a>
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

        <div class="container col-lg-12">
            <h1 class="h3 mb-2 text-gray-800">Tabel Capaian KPI Unit</h1>
            <br>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Pilih Tingkatan</label>
                <select class="form-control" id="exampleFormControlSelect1" onchange="location = this.value;">
                    <option value="tabelunit/" disabled selected>Unit</option>
                    <option value="tabelprodi/">Prodi</option>

                </select>
            </div>
            <section class="content">
                <div class="card shadow mb-4">
                    <div class="card-header">

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable_rencana" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>BP (%)</th>
                                        <th>JCAL (%)</th>
                                        <th>BKAL (%)</th>
                                        <th>Keuangan (%)</th>
                                        <th>KHI (%)</th>
                                        <th>Perpustakaan (%)</th>
                                        <th>PHA (%)</th>
                                        <th>LPMU (%)</th>
                                        <th>JLP (%)</th>
                                        <th>JSDP (%)</th>
                                        <th>LSE (%)</th>
                                        <th>TIK (%)</th>
                                        <th>Umum (%)</th>
                                        <th>BPSDM (%)</th>
                                        <th>LP2M (%)</th>
                                        <th style="color: red;">Terkecil (%)</th>
                                        <th style="color: green;">Terbesar (%)</th>
                                        <th style="color: blue;">Rata-rata (%)</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <?php
                                        foreach ($totalkpi19_bp as $rows) :
                                        ?>
                                            <th>2019/2020</th>
                                            <td><?php echo $rows->tot_19_unit; ?></td>
                                        <?php endforeach; ?>
                                        <?php
                                        foreach ($totalkpi19_jcal as $rows) :
                                        ?>
                                            <td><?php echo $rows->tot_19_unit; ?></td>
                                        <?php endforeach; ?>
                                        <?php
                                        foreach ($totalkpi19_bkal as $rows) :
                                        ?>
                                            <td><?php echo $rows->tot_19_unit; ?></td>
                                        <?php endforeach; ?>
                                        <?php
                                        foreach ($totalkpi19_keuangan as $rows) :
                                        ?>
                                            <td><?php echo $rows->tot_19_unit; ?></td>
                                        <?php endforeach; ?>
                                        <?php
                                        foreach ($totalkpi19_khi as $rows) :
                                        ?>
                                            <td><?php echo $rows->tot_19_unit; ?></td>
                                        <?php endforeach; ?>
                                        <?php
                                        foreach ($totalkpi19_perpustakaan as $rows) :
                                        ?>
                                            <td><?php echo $rows->tot_19_unit; ?></td>
                                        <?php endforeach; ?>
                                        <?php
                                        foreach ($totalkpi19_pha as $rows) :
                                        ?>
                                            <td><?php echo $rows->tot_19_unit; ?></td>
                                        <?php endforeach; ?>
                                        <?php
                                        foreach ($totalkpi19_lpmu as $rows) :
                                        ?>
                                            <td><?php echo $rows->tot_19_unit; ?></td>
                                        <?php endforeach; ?>
                                        <?php
                                        foreach ($totalkpi19_jlp as $rows) :
                                        ?>
                                            <td><?php echo $rows->tot_19_unit; ?></td>
                                        <?php endforeach; ?>
                                        <?php
                                        foreach ($totalkpi19_jsdp as $rows) :
                                        ?>
                                            <td><?php echo $rows->tot_19_unit; ?></td>
                                        <?php endforeach; ?>
                                        <?php
                                        foreach ($totalkpi19_lse as $rows) :
                                        ?>
                                            <td><?php echo $rows->tot_19_unit; ?></td>
                                        <?php endforeach; ?>
                                        <?php
                                        foreach ($totalkpi19_tik as $rows) :
                                        ?>
                                            <td><?php echo $rows->tot_19_unit; ?></td>
                                        <?php endforeach; ?>
                                        <?php
                                        foreach ($totalkpi19_umum as $rows) :
                                        ?>
                                            <td><?php echo $rows->tot_19_unit; ?></td>
                                        <?php endforeach; ?>
                                        <?php
                                        foreach ($totalkpi19_bpsdm as $rows) :
                                        ?>
                                            <td><?php echo $rows->tot_19_unit; ?></td>
                                        <?php endforeach; ?>
                                        <?php
                                        foreach ($totalkpi19_lp2m as $rows) :
                                        ?>
                                            <td><?php echo $rows->tot_19_unit; ?></td>
                                        <?php endforeach; ?>
                                        <?php
                                        foreach ($minimalkpi19_unit as $rows) :
                                        ?>
                                            <td><?php echo $rows->min_19_unit; ?></td>
                                        <?php
                                        endforeach;
                                        ?>
                                        <?php
                                        foreach ($maximalkpi19_unit as $rows) :
                                        ?>
                                            <td><?php echo $rows->max_19_unit; ?></td>
                                        <?php
                                        endforeach;
                                        ?>
                                        <?php
                                        foreach ($averagekpi19_unit as $rows) :
                                        ?>
                                            <td><?php echo $rows->avg_19_unit; ?></td>
                                        <?php
                                        endforeach;
                                        ?>
                                    </tr>
                                    <tr>
                                        <?php
                                        foreach ($totalkpi20_bp as $rows) :
                                        ?>
                                            <th>2020/2021</th>
                                            <td><?php echo $rows->tot_20_unit; ?></td>
                                        <?php endforeach; ?>
                                        <?php
                                        foreach ($totalkpi20_jcal as $rows) :
                                        ?>
                                            <td><?php echo $rows->tot_20_unit; ?></td>
                                        <?php endforeach; ?>
                                        <?php
                                        foreach ($totalkpi20_bkal as $rows) :
                                        ?>
                                            <td><?php echo $rows->tot_20_unit; ?></td>
                                        <?php endforeach; ?>
                                        <?php
                                        foreach ($totalkpi20_keuangan as $rows) :
                                        ?>
                                            <td><?php echo $rows->tot_20_unit; ?></td>
                                        <?php endforeach; ?>
                                        <?php
                                        foreach ($totalkpi20_khi as $rows) :
                                        ?>
                                            <td><?php echo $rows->tot_20_unit; ?></td>
                                        <?php endforeach; ?>
                                        <?php
                                        foreach ($totalkpi20_perpustakaan as $rows) :
                                        ?>
                                            <td><?php echo $rows->tot_20_unit; ?></td>
                                        <?php endforeach; ?>
                                        <?php
                                        foreach ($totalkpi20_pha as $rows) :
                                        ?>
                                            <td><?php echo $rows->tot_20_unit; ?></td>
                                        <?php endforeach; ?>
                                        <?php
                                        foreach ($totalkpi20_lpmu as $rows) :
                                        ?>
                                            <td><?php echo $rows->tot_20_unit; ?></td>
                                        <?php endforeach; ?>
                                        <?php
                                        foreach ($totalkpi20_jlp as $rows) :
                                        ?>
                                            <td><?php echo $rows->tot_20_unit; ?></td>
                                        <?php endforeach; ?>
                                        <?php
                                        foreach ($totalkpi20_jsdp as $rows) :
                                        ?>
                                            <td><?php echo $rows->tot_20_unit; ?></td>
                                        <?php endforeach; ?>
                                        <?php
                                        foreach ($totalkpi20_lse as $rows) :
                                        ?>
                                            <td><?php echo $rows->tot_20_unit; ?></td>
                                        <?php endforeach; ?>
                                        <?php
                                        foreach ($totalkpi20_tik as $rows) :
                                        ?>
                                            <td><?php echo $rows->tot_20_unit; ?></td>
                                        <?php endforeach; ?>
                                        <?php
                                        foreach ($totalkpi20_umum as $rows) :
                                        ?>
                                            <td><?php echo $rows->tot_20_unit; ?></td>
                                        <?php endforeach; ?>
                                        <?php
                                        foreach ($totalkpi20_bpsdm as $rows) :
                                        ?>
                                            <td><?php echo $rows->tot_20_unit; ?></td>
                                        <?php endforeach; ?>
                                        <?php
                                        foreach ($totalkpi20_lp2m as $rows) :
                                        ?>
                                            <td><?php echo $rows->tot_20_unit; ?></td>
                                        <?php endforeach; ?>
                                        <?php
                                        foreach ($minimalkpi20_unit as $rows) :
                                        ?>
                                            <td><?php echo $rows->min_20_unit; ?></td>
                                        <?php
                                        endforeach;
                                        ?>
                                        <?php
                                        foreach ($maximalkpi20_unit as $rows) :
                                        ?>
                                            <td><?php echo $rows->max_20_unit; ?></td>
                                        <?php
                                        endforeach;
                                        ?>
                                        <?php
                                        foreach ($averagekpi20_unit as $rows) :
                                        ?>
                                            <td><?php echo $rows->avg_20_unit; ?></td>
                                        <?php
                                        endforeach;
                                        ?>
                                    </tr>

                                    <tr>
                                        <?php
                                        foreach ($totalkpi21_bp as $rows) :
                                        ?>
                                            <th>2021/2022</th>
                                            <td><?php echo $rows->tot_21_unit; ?></td>
                                        <?php endforeach; ?>
                                        <?php
                                        foreach ($totalkpi21_jcal as $rows) :
                                        ?>
                                            <td><?php echo $rows->tot_21_unit; ?></td>
                                        <?php endforeach; ?>
                                        <?php
                                        foreach ($totalkpi21_bkal as $rows) :
                                        ?>
                                            <td><?php echo $rows->tot_21_unit; ?></td>
                                        <?php endforeach; ?>
                                        <?php
                                        foreach ($totalkpi21_keuangan as $rows) :
                                        ?>
                                            <td><?php echo $rows->tot_21_unit; ?></td>
                                        <?php endforeach; ?>
                                        <?php
                                        foreach ($totalkpi21_khi as $rows) :
                                        ?>
                                            <td><?php echo $rows->tot_21_unit; ?></td>
                                        <?php endforeach; ?>
                                        <?php
                                        foreach ($totalkpi21_perpustakaan as $rows) :
                                        ?>
                                            <td><?php echo $rows->tot_21_unit; ?></td>
                                        <?php endforeach; ?>
                                        <?php
                                        foreach ($totalkpi21_pha as $rows) :
                                        ?>
                                            <td><?php echo $rows->tot_21_unit; ?></td>
                                        <?php endforeach; ?>
                                        <?php
                                        foreach ($totalkpi21_lpmu as $rows) :
                                        ?>
                                            <td><?php echo $rows->tot_21_unit; ?></td>
                                        <?php endforeach; ?>
                                        <?php
                                        foreach ($totalkpi21_jlp as $rows) :
                                        ?>
                                            <td><?php echo $rows->tot_21_unit; ?></td>
                                        <?php endforeach; ?>
                                        <?php
                                        foreach ($totalkpi21_jsdp as $rows) :
                                        ?>
                                            <td><?php echo $rows->tot_21_unit; ?></td>
                                        <?php endforeach; ?>
                                        <?php
                                        foreach ($totalkpi21_lse as $rows) :
                                        ?>
                                            <td><?php echo $rows->tot_21_unit; ?></td>
                                        <?php endforeach; ?>
                                        <?php
                                        foreach ($totalkpi21_tik as $rows) :
                                        ?>
                                            <td><?php echo $rows->tot_21_unit; ?></td>
                                        <?php endforeach; ?>
                                        <?php
                                        foreach ($totalkpi21_umum as $rows) :
                                        ?>
                                            <td><?php echo $rows->tot_21_unit; ?></td>
                                        <?php endforeach; ?>
                                        <?php
                                        foreach ($totalkpi21_bpsdm as $rows) :
                                        ?>
                                            <td><?php echo $rows->tot_21_unit; ?></td>
                                        <?php endforeach; ?>
                                        <?php
                                        foreach ($totalkpi21_lp2m as $rows) :
                                        ?>
                                            <td><?php echo $rows->tot_21_unit; ?></td>
                                        <?php endforeach; ?>
                                        <?php
                                        foreach ($minimalkpi21_unit as $rows) :
                                        ?>
                                            <td><?php echo $rows->min_21_unit; ?></td>
                                        <?php
                                        endforeach;
                                        ?>
                                        <?php
                                        foreach ($maximalkpi21_unit as $rows) :
                                        ?>
                                            <td><?php echo $rows->max_21_unit; ?></td>
                                        <?php
                                        endforeach;
                                        ?>
                                        <?php
                                        foreach ($averagekpi21_unit as $rows) :
                                        ?>
                                            <td><?php echo $rows->avg_21_unit; ?></td>
                                        <?php
                                        endforeach;
                                        ?>
                                    </tr>

                                </tbody>
                            </table>
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