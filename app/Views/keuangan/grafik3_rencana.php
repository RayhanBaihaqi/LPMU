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
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                <a href="<?php echo site_url(); ?>keuangan"><i class="fas fa-long-arrow-alt-left"></i></a>
                <a href="#" class="navbar-brand">MENU</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between">
                    <div class="navbar-nav mr-auto">
                        <a href="<?php echo site_url(); ?>keuangan/homekpi" class="nav-item nav-link">Home</a>
                        <a href="<?php echo site_url(); ?>keuangan/rencana" class="nav-item nav-link">Rencana</a>
                        <a href="<?php echo site_url(); ?>keuangan/inputcapaian" class="nav-item nav-link">Input Realisasi</a>
                        <a href="<?php echo site_url(); ?>keuangan/kesimpulan" class="nav-item nav-link active">Kesimpulan</a>
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
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <br>
                        <a href="<?= base_url('keuangan/kesimpulan') ?>" class="btn btn-primary btn-block">Daftar Capaian</a>
                        <br>
                    </div>
                    <div class="col-sm">
                        <br>
                        <a href="<?= base_url('keuangan/kesimpulan_tabel') ?>" class="btn btn-primary btn-block">Data Tabel</a>
                        <br>
                    </div>
                    <div class="col-sm">
                        <br>
                        <a href="<?= base_url('keuangan/grafik_rencana') ?>" class="btn btn-primary btn-block">Data Grafik Rencana</a>
                        <br>
                    </div>
                    <div class="col-sm">
                        <br>
                        <a href="<?= base_url('keuangan/kesimpulan_grafik') ?>" class="btn btn-primary btn-block">Data Grafik Realisasi</a>
                        <br>
                    </div>
                </div>
            </div>


        </div>

        <!-- foreach ambil hasil penjumlahan nilai bobot KPI TA 2018 -->
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



        <div class="container col-lg-12">
            <section class="content">
                <!-- BAR CHART -->
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Grafik Rencana KPI</h3>
                    </div>
                    <div class="card-body">
                        <div class="chart">
                            <canvas id="myChart" height="100"></canvas>

                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </section>
        </div> -->

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
        const ctx = document.getElementById('myChart');
        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Standar 1', 'Standar 2', 'Standar 3', 'Standar 4', 'Standar 5', 'Standar 6', 'Standar 7', 'Standar 8', 'Standar 9'],
                datasets: [
                    //Data Batang Grafik Standar 1
                    {
                        label: 'Total bobot rencana',
                        backgroundColor: 'rgba(60,141,188,0.9)',
                        borderColor: 'rgba(60,141,188,0.8)',
                        pointRadius: false,
                        pointColor: '#3b8bba',
                        pointStrokeColor: 'rgba(60,141,188,1)',
                        pointHighlightFill: '#fff',
                        pointHighlightStroke: 'rgba(60,141,188,1)',
                        data: [<?php echo json_encode($jumlah_rencana1) ?>, <?php echo json_encode($jumlah_rencana2) ?>, <?php echo json_encode($jumlah_rencana3) ?>, <?php echo json_encode($jumlah_rencana4) ?>, <?php echo json_encode($jumlah_rencana5) ?>, <?php echo json_encode($jumlah_rencana6) ?>, <?php echo json_encode($jumlah_rencana7) ?>, <?php echo json_encode($jumlah_rencana8) ?>, <?php echo json_encode($jumlah_rencana9) ?>]

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
    <!-- <script>
            $(function() {
                /* ChartJS
                 * -------
                 * Here we will create a few charts using ChartJS
                 */

                //--------------
                //- AREA CHART -
                //--------------
                // Get context with jQuery - using jQuery's .get() method.
                var areaChartCanvas = $('#barChart').get(0).getContext('2d')

                var areaChartData = {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                    datasets: [{
                            label: 'Digital Goods',
                            backgroundColor: 'rgba(60,141,188,0.9)',
                            borderColor: 'rgba(60,141,188,0.8)',
                            pointRadius: false,
                            pointColor: '#3b8bba',
                            pointStrokeColor: 'rgba(60,141,188,1)',
                            pointHighlightFill: '#fff',
                            pointHighlightStroke: 'rgba(60,141,188,1)',
                            data: [28, 48, 40, 19, 86, 27, 90]
                        },
                        {
                            label: 'Electronics',
                            backgroundColor: 'rgba(210, 214, 222, 1)',
                            borderColor: 'rgba(210, 214, 222, 1)',
                            pointRadius: false,
                            pointColor: 'rgba(210, 214, 222, 1)',
                            pointStrokeColor: '#c1c7d1',
                            pointHighlightFill: '#fff',
                            pointHighlightStroke: 'rgba(220,220,220,1)',
                            data: [65, 59, 80, 81, 56, 55, 40]
                        },
                    ]
                }

                var areaChartOptions = {
                    maintainAspectRatio: false,
                    responsive: true,
                    legend: {
                        display: false
                    },
                    scales: {
                        xAxes: [{
                            gridLines: {
                                display: false,
                            }
                        }],
                        yAxes: [{
                            gridLines: {
                                display: false,
                            }
                        }]
                    }
                }

                // This will get the first returned node in the jQuery collection.
                new Chart(areaChartCanvas, {
                    type: 'line',
                    data: areaChartData,
                    options: areaChartOptions
                })

                //- BAR CHART -
                //-------------
                var barChartCanvas = $('#barChart').get(0).getContext('2d')
                var barChartData = $.extend(true, {}, areaChartData)
                var temp0 = areaChartData.datasets[0]
                var temp1 = areaChartData.datasets[1]
                barChartData.datasets[0] = temp1
                barChartData.datasets[1] = temp0

                var barChartOptions = {
                    responsive: true,
                    maintainAspectRatio: false,
                    datasetFill: false
                }

                new Chart(barChartCanvas, {
                    type: 'bar',
                    data: barChartData,
                    options: barChartOptions
                })

            })
        </script> -->
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