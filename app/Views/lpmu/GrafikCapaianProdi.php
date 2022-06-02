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
                        <a href="<?php echo site_url(); ?>lpmu/tabelcapaian" class="nav-item nav-link">Tabel Capaian</a>
                        <a href="<?php echo site_url(); ?>lpmu/grafikcapaian" class="nav-item nav-link active">Grafik Capaian </a>
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
            <h1 class="h3 mb-2 text-gray-800">Grafik Capaian KPI</h1>
            <br>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Pilih Tingkatan</label>
                <select class="form-control" id="exampleFormControlSelect1" onchange="location = this.value;">
                    <option value="grafikprodi/" disabled selected>Prodi</option>
                    <option value="grafikunit/">Unit</option>
                </select>
            </div>
            <?php foreach ($hasilrencanakpi_1 as $key => $value) : $jumlah_rencana1 = $value['jumlah_rencana1'];
            endforeach; ?>
            <?php foreach ($hasilrencanakpi_2 as $key => $value) : $jumlah_rencana2 = $value['jumlah_rencana2'];
            endforeach; ?>
            <?php foreach ($hasilrencanakpi_3 as $key => $value) : $jumlah_rencana3 = $value['jumlah_rencana3'];
            endforeach; ?>
            <?php foreach ($hasilrencanakpi_4 as $key => $value) : $jumlah_rencana4 = $value['jumlah_rencana4'];
            endforeach; ?>
            <?php foreach ($hasilrencanakpi_5 as $key => $value) : $jumlah_rencana5 = $value['jumlah_rencana5'];
            endforeach; ?>
            <?php foreach ($hasilrencanakpi_6 as $key => $value) : $jumlah_rencana6 = $value['jumlah_rencana6'];
            endforeach; ?>
            <?php foreach ($hasilrencanakpi_7 as $key => $value) : $jumlah_rencana7 = $value['jumlah_rencana7'];
            endforeach; ?>
            <?php foreach ($hasilrencanakpi_8 as $key => $value) : $jumlah_rencana8 = $value['jumlah_rencana8'];
            endforeach; ?>
            <?php foreach ($hasilrencanakpi_9 as $key => $value) : $jumlah_rencana9 = $value['jumlah_rencana9'];
            endforeach; ?>

            <!-- foreach ambil hasil penjumlahan nilai bobot KPI per TA tiap prodi -->

            <!-- foreach ambil hasil penjumlahan nilai bobot KPI per TA akuntansi -->
            <?php foreach ($totalkpi19_akt as $key => $value) : $tot_19_akt = $value['tot_19_prodi'];
            endforeach; ?>
            <?php foreach ($totalkpi20_akt as $key => $value) : $tot_20_akt = $value['tot_20_prodi'];
            endforeach; ?>
            <?php foreach ($totalkpi21_akt as $key => $value) : $tot_21_akt = $value['tot_21_prodi'];
            endforeach; ?>

            <!-- foreach ambil hasil penjumlahan nilai bobot KPI per TA manajemen -->
            <?php foreach ($totalkpi19_mnj as $key => $value) : $tot_19_mnj = $value['tot_19_prodi'];
            endforeach; ?>
            <?php foreach ($totalkpi20_mnj as $key => $value) : $tot_20_mnj = $value['tot_20_prodi'];
            endforeach; ?>
            <?php foreach ($totalkpi21_mnj as $key => $value) : $tot_21_mnj = $value['tot_21_prodi'];
            endforeach; ?>

            <!-- foreach ambil hasil penjumlahan nilai bobot KPI per TA psikologi -->
            <?php foreach ($totalkpi19_psi as $key => $value) : $tot_19_psi = $value['tot_19_prodi'];
            endforeach; ?>
            <?php foreach ($totalkpi20_psi as $key => $value) : $tot_20_psi = $value['tot_20_prodi'];
            endforeach; ?>
            <?php foreach ($totalkpi21_psi as $key => $value) : $tot_21_psi = $value['tot_21_prodi'];
            endforeach; ?>

            <!-- foreach ambil hasil penjumlahan nilai bobot KPI per TA ilkom -->
            <?php foreach ($totalkpi19_kom as $key => $value) : $tot_19_kom = $value['tot_19_prodi'];
            endforeach; ?>
            <?php foreach ($totalkpi20_kom as $key => $value) : $tot_20_kom = $value['tot_20_prodi'];
            endforeach; ?>
            <?php foreach ($totalkpi21_kom as $key => $value) : $tot_21_kom = $value['tot_21_prodi'];
            endforeach; ?>

            <!-- foreach ambil hasil penjumlahan nilai bobot KPI per TA desain produk -->
            <?php foreach ($totalkpi19_dpi as $key => $value) : $tot_19_dpi = $value['tot_19_prodi'];
            endforeach; ?>
            <?php foreach ($totalkpi20_dpi as $key => $value) : $tot_20_dpi = $value['tot_20_prodi'];
            endforeach; ?>
            <?php foreach ($totalkpi21_dpi as $key => $value) : $tot_21_dpi = $value['tot_21_prodi'];
            endforeach; ?>

            <!-- foreach ambil hasil penjumlahan nilai bobot KPI per TA dkv -->
            <?php foreach ($totalkpi19_dkv as $key => $value) : $tot_19_dkv = $value['tot_19_prodi'];
            endforeach; ?>
            <?php foreach ($totalkpi20_dkv as $key => $value) : $tot_20_dkv = $value['tot_20_prodi'];
            endforeach; ?>
            <?php foreach ($totalkpi21_dkv as $key => $value) : $tot_21_dkv = $value['tot_21_prodi'];
            endforeach; ?>

            <!-- foreach ambil hasil penjumlahan nilai bobot KPI per TA Informatika -->
            <?php foreach ($totalkpi19_inf as $key => $value) : $tot_19_inf = $value['tot_19_prodi'];
            endforeach; ?>
            <?php foreach ($totalkpi20_inf as $key => $value) : $tot_20_inf = $value['tot_20_prodi'];
            endforeach; ?>
            <?php foreach ($totalkpi21_inf as $key => $value) : $tot_21_inf = $value['tot_21_prodi'];
            endforeach; ?>

            <!-- foreach ambil hasil penjumlahan nilai bobot KPI per TA Sistem Informasi -->
            <?php foreach ($totalkpi19_sif as $key => $value) : $tot_19_sif = $value['tot_19_prodi'];
            endforeach; ?>
            <?php foreach ($totalkpi20_sif as $key => $value) : $tot_20_sif = $value['tot_20_prodi'];
            endforeach; ?>
            <?php foreach ($totalkpi21_sif as $key => $value) : $tot_21_sif = $value['tot_21_prodi'];
            endforeach; ?>

            <!-- foreach ambil hasil penjumlahan nilai bobot KPI per TA Teknik Sipil -->
            <?php foreach ($totalkpi19_tsp as $key => $value) : $tot_19_tsp = $value['tot_19_prodi'];
            endforeach; ?>
            <?php foreach ($totalkpi20_tsp as $key => $value) : $tot_20_tsp = $value['tot_20_prodi'];
            endforeach; ?>
            <?php foreach ($totalkpi21_tsp as $key => $value) : $tot_21_tsp = $value['tot_21_prodi'];
            endforeach; ?>

            <!-- foreach ambil hasil penjumlahan nilai bobot KPI per TA Arsitektur -->
            <?php foreach ($totalkpi19_ars as $key => $value) : $tot_19_ars = $value['tot_19_prodi'];
            endforeach; ?>
            <?php foreach ($totalkpi20_ars as $key => $value) : $tot_20_ars = $value['tot_20_prodi'];
            endforeach; ?>
            <?php foreach ($totalkpi21_ars as $key => $value) : $tot_21_ars = $value['tot_21_prodi'];
            endforeach; ?>
            <div class="container col-lg-12">
                <section class="content">
                    <!-- BAR CHART -->
                    <!-- <div class="card card-success">
                                <div class="card-header">
                                    <h3 class="card-title">Grafik Rencana KPI</h3>
                                </div>
                                <div class="card-body">
                                    <div class="chart">
                                        <canvas id="myChart" height="100"></canvas>
                                    </div>
                                </div>
                            </div> -->
                    <br>
                    <!-- /.card-body -->
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Grafik Capaian Prodi</h3>
                        </div>
                        <div class="card-body">
                            <div class="chart">
                                <canvas id="ChartProdi" height="100"></canvas>
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
<script>
    // const ctx = document.getElementById('myChart');
    // const myChart = new Chart(ctx, {
    //     type: 'bar',
    //     data: {
    //         labels: ['Standar 1', 'Standar 2', 'Standar 3', 'Standar 4', 'Standar 5', 'Standar 6', 'Standar 7', 'Standar 8', 'Standar 9'],
    //         datasets: [
    //             //Data Batang Grafik Standar 1
    //             {
    //                 label: 'Total bobot rencana',
    //                 backgroundColor: 'rgba(60,141,188,0.9)',
    //                 borderColor: 'rgba(60,141,188,0.8)',
    //                 pointRadius: false,
    //                 pointColor: '#3b8bba',
    //                 pointStrokeColor: 'rgba(60,141,188,1)',
    //                 pointHighlightFill: '#fff',
    //                 pointHighlightStroke: 'rgba(60,141,188,1)',
    //                 data: [<?php echo json_encode($jumlah_rencana1) ?>, <?php echo json_encode($jumlah_rencana2) ?>, <?php echo json_encode($jumlah_rencana3) ?>, <?php echo json_encode($jumlah_rencana4) ?>, <?php echo json_encode($jumlah_rencana5) ?>, <?php echo json_encode($jumlah_rencana6) ?>, <?php echo json_encode($jumlah_rencana7) ?>, <?php echo json_encode($jumlah_rencana8) ?>, <?php echo json_encode($jumlah_rencana9) ?>]

    //             },

    //         ]
    //     },
    //     options: {
    //         responsive: true,
    //         legend: {
    //             position: 'top',
    //         },
    //         hover: {
    //             mode: 'label'
    //         },
    //         scales: {
    //             xAxes: [{
    //                 display: true,
    //                 scaleLabel: {
    //                     display: true,

    //                 }
    //             }],
    //             yAxes: [{
    //                 display: true,
    //                 ticks: {
    //                     beginAtZero: true,
    //                     steps: 10,
    //                     stepValue: 5,

    //                 }
    //             }]
    //         },
    //     }
    // });

    const ctx2 = document.getElementById('ChartProdi');
    const ChartProdi = new Chart(ctx2, {
        type: 'bar',
        data: {
            labels: ['Akuntansi', 'Manajemen', 'Psikologi', 'Ilmu Komunikasi', 'Desain Produk', 'Desain Komunikasi Visual', 'Informatika', 'Sistem Informasi', 'Teknik Sipil', 'Arsitektur'],
            datasets: [
                //Data Batang Grafik Standar 1
                // {
                //     label: '2018/2019',
                //     backgroundColor: 'rgba(60,141,188,0.9)',
                //     borderColor: 'rgba(60,141,188,0.8)',
                //     pointRadius: false,
                //     pointColor: '#3b8bba',
                //     pointStrokeColor: 'rgba(60,141,188,1)',
                //     pointHighlightFill: '#fff',
                //     pointHighlightStroke: 'rgba(60,141,188,1)',
                //     data: []


                // },
                {
                    label: '2019/2020',
                    backgroundColor: 'rgba(255, 165, 0, 1)',
                    borderColor: 'rgba(255, 165, 0, 1)',
                    pointRadius: false,
                    pointColor: '#3b8bba',
                    pointStrokeColor: 'rgba(60,141,188,1)',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    data: [<?php echo json_encode($tot_19_akt) ?>, <?php echo json_encode($tot_19_mnj) ?>, <?php echo json_encode($tot_19_psi) ?>, <?php echo json_encode($tot_19_kom) ?>, <?php echo json_encode($tot_19_dpi) ?>, <?php echo json_encode($tot_19_dkv) ?>, <?php echo json_encode($tot_19_inf) ?>, <?php echo json_encode($tot_19_sif) ?>, <?php echo json_encode($tot_19_tsp) ?>, <?php echo json_encode($tot_19_ars) ?>]


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
                    data: [<?php echo json_encode($tot_20_akt) ?>, <?php echo json_encode($tot_20_mnj) ?>, <?php echo json_encode($tot_20_psi) ?>, <?php echo json_encode($tot_20_kom) ?>, <?php echo json_encode($tot_20_dpi) ?>, <?php echo json_encode($tot_20_dkv) ?>, <?php echo json_encode($tot_20_inf) ?>, <?php echo json_encode($tot_20_sif) ?>, <?php echo json_encode($tot_20_tsp) ?>, <?php echo json_encode($tot_20_ars) ?>]

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
                    data: [<?php echo json_encode($tot_21_akt) ?>, <?php echo json_encode($tot_21_mnj) ?>, <?php echo json_encode($tot_21_psi) ?>, <?php echo json_encode($tot_21_kom) ?>, <?php echo json_encode($tot_21_dpi) ?>, <?php echo json_encode($tot_21_dkv) ?>, <?php echo json_encode($tot_21_inf) ?>, <?php echo json_encode($tot_21_sif) ?>, <?php echo json_encode($tot_21_tsp) ?>, <?php echo json_encode($tot_21_ars) ?>]

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

</html>