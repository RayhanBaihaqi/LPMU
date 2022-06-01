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
    <!-- Page level custom scripts -->

    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


    <!-- <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet"> -->


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
                        <a href="<?php echo site_url(); ?>keuangan/inputcapaian" class="nav-item nav-link active">Input Realisasi</a>
                        <a href="<?php echo site_url(); ?>keuangan/kesimpulan" class="nav-item nav-link">Kesimpulan</a>
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

        <br>
        <?= session()->getFlashdata('pesan'); ?>
        <div class="card shadow mb-4">
            <div class="card-header">
                <h3>Silahkan isi form capaian</h3>
            </div>
            <div class="card-body">
                <div class="form-inline" id="kriteriaDiv">
                    <label class="mb-2 mr-sm-1" for="exampleFormControlSelect1" style="width: 150px;">Kategori KPI</label>
                    <form method="POST" action="">
                        <select class="form-control mb-2 mr-sm-2" id="kriteria" name="kriteria" onChange="document.location.href=this.options[this.selectedIndex].value;">
                            <!-- <select name="forma" onchange="location = this.value;"> -->
                            <option value="<?php echo site_url(); ?>keuangan/inputcapaian/6" disabled selected>6 - Pendidikan</option>
                            <option value="<?php echo site_url(); ?>keuangan/inputcapaian/1">1 - Visi Misi Tujuan dan Strategi</option>
                            <option value="<?php echo site_url(); ?>keuangan/inputcapaian/2">2 - Tata Pamong, Tata Kelola, dan Kerjasama</option>
                            <option value="<?php echo site_url(); ?>keuangan/inputcapaian/3">3 - Mahasiswa</option>
                            <option value="<?php echo site_url(); ?>keuangan/inputcapaian/4">4 - Sumber Daya Manusia</option>
                            <option value="<?php echo site_url(); ?>keuangan/inputcapaian/5">5 - Keuangan, Sarana dan Prasarana</option>
                            <option value="<?php echo site_url(); ?>keuangan/inputcapaian/7">7 - Penelitian</option>
                            <option value="<?php echo site_url(); ?>keuangan/inputcapaian/8">8 - Pengabdian kepada Masyarakat (PkM)</option>
                            <option value="<?php echo site_url(); ?>keuangan/inputcapaian/9">9 - Luaran dan Capaian Tridharma</option>
                        </select>
                    </form>
                </div>
                <form id="formA" name="formA" action="<?= base_url('keuangan/savecapaian6'); ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-inline">
                        <label class="mb-2 mr-sm-1" for="exampleFormControlSelect1" style="width: 150px;">Tahun Ajaran</label>
                        <select class="form-control mb-2 mr-sm-2" id="exampleFormControlSelect1" name="tahun_ajaran" required>
                            <option value="" disabled selected>Pilih Tahun</option>
                            <!-- <option value="2018/2019">2018/2019</option> -->
                            <option value="2019/2020">2019/2020</option>
                            <option value="2020/2021">2020/2021</option>
                            <option value="2021/2022">2021/2022</option>
                        </select>
                    </div>
                    <div class="form-inline" style="margin-bottom:20px;">
                        <input type="hidden" name="nama_prodi" value="<?php $nama_prodi = session('nama_prodi');
                                                                        echo $nama_prodi ?>">
                        <label for="prodiunit" class="mb-2 mr-sm-2" style="width: 150px;">Program Studi/Unit</label>
                        <input type=" text" class="form-control mb-2 mr-sm-2" id="prodiunit" name="nama_prodi[]" value=" <?php $nama_prodi = session('nama_prodi');
                                                                                                                            echo "$nama_prodi" ?>" name="prodiunit" required disabled>
                        <input type="hidden" name="level" value="<?php $level = session('level');
                                                                    echo $level ?>">
                        <label for="level" class="mb-2 mr-sm-2">Level</label>
                        <input type="text" class="form-control mb-2 mr-sm-2" id="level" name="level[]" value="<?php
                                                                                                                $level = session('level');
                                                                                                                echo "$level"
                                                                                                                ?>" required disabled>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable3" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Angka butir</th>
                                    <th class="text-center">Butir</th>
                                    <th class="text-center">Rencana</th>
                                    <th class="text-center">Bobot</th>
                                    <th class="text-center">Realisasi</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $nomor = 0;
                                foreach ($tampildata as $row) :
                                    $nomor++;
                                ?>
                                    <tr>
                                        <td><?= $nomor; ?></td>
                                        <td><?= $row->idkpi . '.' . $row->angka_butir ?></td>
                                        <td><?= $row->nama_butir ?></td>
                                        <td><?= $row->target ?></td>
                                        <td><?= $row->bobot ?></td>
                                        <td>
                                            <input type="hidden" name="bobot[]" value="<?= $row->bobot ?>" />
                                            <input type="hidden" name="id[]" value="<?= $row->id ?>" />
                                            <input type="number" name="txtRealisasi[]" placeholder='Masukkan realisasi' class="form-control" required>
                                            <input type="hidden" name="idkpi[]" value="6" />
                                            <input type="hidden" name="id_butir_kpi[]" value="<?= $row->angka_butir ?>" />
                                        </td>

                                    </tr>
                                <?php
                                endforeach;
                                ?>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <button type="submit" id="tambah" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>



    </div>
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