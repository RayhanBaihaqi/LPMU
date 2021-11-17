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
    <link rel="stylesheet" href="<?php echo base_url(); ?>/public/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/public/dist/css/adminlte.min.css">
    <meta charset="utf-8">
    <title>Dashboard KPI</title>
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

    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/public/css/header.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/public/css/style2.css">
</head>

<body>

    <!-- Top Bar Start -->
    <div>
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="logo">
                            <a href="<?php echo site_url(); ?>">
                                <img src="<?php echo base_url(); ?>/public/img/logo-upj.png" alt="Logo">
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
                            <a href="https://www.upj.ac.id/"><i class="fas fa-globe"></i></i></a>
                            <a href="https://twitter.com/upj_bintaro"><i class="fab fa-twitter"></i></a>
                            <a href="https://web.facebook.com/universitas.pembangunan.jaya?_rdc=1&_rdr"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/upj_bintaro/"><i class="fab fa-instagram"></i></a>
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
                <a href="<?php echo site_url(); ?>backend"><i class="fas fa-long-arrow-alt-left"></i></a>
                <a href="#" class="navbar-brand">MENU</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between">
                    <div class="navbar-nav mr-auto">
                        <a href="<?php echo site_url(); ?>kpi" class="nav-item nav-link">Home</a>
                        <a href="<?php echo site_url(); ?>kpi/rencana" class="nav-item nav-link">Rencana</a>
                        <a href="<?php echo site_url(); ?>inputcapaian" class="nav-item nav-link active">Input Realisasi</a>
                        <a href="<?php echo site_url(); ?>kpi/kesimpulan" class="nav-item nav-link">Kesimpulan</a>
                    </div>
                    <div class="ml-auto">
                        <div class="user-info-dropdown">
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                    <span class="user-icon">
                                        <img src="<?php echo base_url(); ?>/public/img/inf-logo.jpg" alt="">
                                    </span>
                                    <span class="user-name">
                                        <?php
                                        $nama_prodi = session('nama_prodi');
                                        echo "$nama_prodi"
                                        ?>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                    <a class="dropdown-item" href="profile.html"><i class="fas fa-cog"></i> Setting</a>
                                    <a class="dropdown-item" href="<?php echo site_url(); ?>auth/logout"><i class="fas fa-sign-out-alt"></i> Log Out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Nav Bar End -->
        <h3>Silahkan isi form capaian</h3>
        <br>
        <div class="form-group" id="kriteriaDiv">
            <select class="form-control" id="kriteria" name="kriteria">
                <option value="Pilih Kriteria" disabled selected>Pilih Kategori KPI</option>
                <option value="Visi Misi Tujuan dan Strategi">1 – Visi Misi Tujuan dan Strategi</option>
                <option value="Tata Pamong, Tata Kelola, dan Kerjasama">2 - Tata Pamong, Tata Kelola, dan Kerjasama</option>
                <option value="Mahasiswa">3 - Mahasiswa</option>
                <option value="Sumber Daya Manusia">4 - Sumber Daya Manusia</option>
                <option value="Keuangan, Sarana dan Prasarana">5 - Keuangan, Sarana dan Prasarana</option>
                <option value="Pendidikan">6 - Pendidikan</option>
                <option value="Penelitian">7 – Penelitian</option>
                <option value="Pengabdian kepada Masyarakat (PkM)">8 - Pengabdian kepada Masyarakat (PkM)</option>
                <option value="Luaran dan Capaian Tridharma">9 - Luaran dan Capaian Tridharma</option>
            </select>
        </div>
        <form>
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="form-group" id="kpi1Div">
                        <!-- Tabel Visi Misi !-->
                        <table class="table table-bordered table-hover" id="kpi1">
                            <thead>
                                <tr>
                                    <th class="text-center">No.KPI</th>
                                    <th class="text-center">Huruf butir</th>
                                    <th class="text-center">Butir</th>
                                    <th class="text-center">Rencana</th>
                                    <th class="text-center">Realisasi</th>
                                    <th class="text-center">Upload File</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr id='kpi11'>
                                    <td>Visi UPJ diturunkan ke dalam visi Fakultas/ Program Studi/Unit Kerja</td>
                                    <td>Visi UPJ diturunkan ke dalam visi Fakultas/ Program Studi/Unit Kerja</td>
                                    <td>
                                        <input type="number" name='mobile[]' placeholder='Iya=1, Tidak=0' class="form-control" />
                                    </td>
                                </tr>
                                <tr id='kpi12'>
                                    <td>Adanya keterlibatan pemangku kepentingan dalam penyusunan Visi Misi Universitas, Fakultas dan Program Studi</td>
                                    <td>mekanisme penyusunan VMTS yang terdokumentasi dan melibatkan stakeholder</td>
                                    <td>
                                        <input type="number" name='mobile[]' placeholder='Iya=1, Tidak=0' class="form-control" />
                                    </td>
                                </tr>

                                <tr id='kpi13'>
                                    <td>Sosialisasi Visi-misi dan Nilai-Nilai Jaya</td>
                                    <td>minimal 1x per TA</td>
                                    <td>
                                        <input type="number" name='mobile[]' placeholder='Sosialisasi >1x, masukkan angka 1' class="form-control" />
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="form-group" id="kpi2Div">
                        <!-- Tabel Visi Misi !-->
                        <table class="table table-bordered table-hover" id="kpi2">
                            <thead>
                                <tr>

                                    <th class="text-center">Butir</th>
                                    <th class="text-center">Rencana</th>
                                    <th class="text-center">Realisasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr id='kpi21'>
                                    <td>Adanya struktur organisasi universitas yang mengakomodasi struktur organisasi: Fakultas, Program Studi dan Unit dan memenuhi 5 pilar struktur tata pamong</td>
                                    <td>SK SO, Pejabat dan SK Pengangkatan Lengkap</td>
                                    <td>
                                        <input type="number" name='mobile[]' placeholder='Iya=1, Tidak=0' class="form-control" />
                                    </td>
                                </tr>
                                <tr id='kpi22'>
                                    <td>Adanya kegiatan-kegiatan yang dilakukan sebagai bentuk hasil kerjasama, yang memenuhi 3 aspek</td>
                                    <td>> 5 kegiatan, 1 kegiatan internasional dan memenuhi 3 aspek</td>
                                    <td>

                                        <input type="number" name='mobile[]' placeholder='Masukkan jumlah kegiatan' class="form-control" />
                                    </td>
                                </tr>
                                <tr id='kpi23'>
                                    <td>Adanya MoU kerjasama UPJ Bidang Tridharma</td>
                                    <td>> 2/tahun MoU baru</td>
                                    <td>
                                        <input type="number" name='mobile[]' placeholder='Masukkan jumlah maks 2' class="form-control" />
                                    </td>
                                </tr>
                                <tr id='kpi24'>
                                    <td>Adanya MoU kerjasama UPJ Tingkat internasional</td>
                                    <td>> 1/tahun MoU baru</td>
                                    <td>
                                        <input type="number" name='mobile[]' placeholder='Masukkan jumlah maks 1' class="form-control" />
                                    </td>
                                </tr>
                                <tr id='kpi25'>
                                    <td>Adanya MoU kerjasama UPJ Tingkat nasional</td>
                                    <td>> 2/tahun MoU baru</td>
                                    <td>
                                        <input type="number" name='mobile[]' placeholder='Masukkan jumlah maks 2' class="form-control" />
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

        </form>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $("#kriteria").change(function() {
            if ($(this).val() == "Visi Misi Tujuan dan Strategi") {
                $('#kpi1Div').show();
                $('#kpi1').attr('required', '');
                $('#kpi1').attr('data-error', 'This field is required.');
                $('#kpi2Div').hide();
                $('#kpi2').removeAttr('required');
                $('#kpi2').removeAttr('data-error');
            } else if ($(this).val() == "Tata Pamong, Tata Kelola, dan Kerjasama") {
                $('#kpi1Div').hide();
                $('#kpi1').removeAttr('required');
                $('#kpi1').removeAttr('data-error');
                $('#kpi2Div').show();
                $('#kpi2').attr('required', '');
                $('#kpi2').attr('data-error', 'This field is required.');

            } else {


            }
        });
        $("kriteria").trigger("change");
    })
</script>

</html>