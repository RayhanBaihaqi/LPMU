<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Grafik Capaian KPI</title>

    <!-- Custom fonts for this template-->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="<?php echo base_url(); ?>/public/css/style_admin.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/public/css/dataTables.bootstrap4.min.css" rel="stylesheet">


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
                <img src="<?php echo base_url(); ?>/public/img/monev_logo_putih.png" alt="Logo" style="width: 70px; height: 70px;">
                <div class="sidebar-brand-text mx-3">BPSDM</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link " href="<?php echo site_url(); ?>bpsdm">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>RKAT</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= base_url('#') ?>">Tambah RKAT</a>
                        <a class="collapse-item" href="<?= base_url('#') ?>">Lihat Data</a>
                        <a class="collapse-item" href="<?= base_url('#') ?>">Buat Pagu</a>
                        <a class="collapse-item" href="<?= base_url('#') ?>">List Pagu</a>
                        <a class="collapse-item" href="<?= base_url('#') ?>">Tahun Akademik</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>KPI</span></a>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= base_url('/bpsdm/listkpi') ?>">Lihat KPI</a>
                        <a class="collapse-item" href="<?= base_url('/bpsdm/listbutirkpi') ?>">Lihat Butir KPI</a>
                        <a class="collapse-item" href="<?= base_url('/bpsdm/listcapaiankpi') ?>">Lihat Capaian</a>
                        <a class="collapse-item" href="<?= base_url('/bpsdm/tabelcapaiankpi') ?>">Lihat Data Tabel</a>
                        <a class="collapse-item" href="<?= base_url('/bpsdm/grafikcapaian') ?>">Lihat Data Grafik</a>
                    </div>
                </div>
            </li>



        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    <?php
                                    $nama_prodi = session('nama_prodi');
                                    echo "$nama_prodi"
                                    ?>
                                </span>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?= base_url('auth/logout') ?>">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Grafik Capaian KPI</h1>
                    <br>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Pilih Tingkatan</label>
                        <select class="form-control" id="exampleFormControlSelect1" onchange="location = this.value;">
                            <option disabled selected>--Pilih ingin bandingkan dengan prodi/unit--</option>
                            <option value="grafikprodi/">Prodi</option>
                            <option value="grafikunit/">Unit</option>
                        </select>
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
                            <!-- /.card-body -->
                        </section>
                    </div>

                    <br>



                </div>


            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Bootstrap core JavaScript-->
        <script src="<?php echo base_url(); ?>/public/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>/public/js/bootstrap.bundle.min.js"></script>

        <!-- Page level plugins -->
        <script src="<?php echo base_url(); ?>/public/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url(); ?>/public/js/dataTables.bootstrap4.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="<?php echo base_url(); ?>/public/js/datatables-demo.js"></script>

</body>
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

</html>