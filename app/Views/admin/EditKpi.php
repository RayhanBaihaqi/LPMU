<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Custom fonts for this template-->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="http://localhost:8080/css/style_admin.css" rel="stylesheet">

    <style>
        .table-responsive {
            margin: 30px 0;
        }

        .table-wrapper {
            min-width: 1000px;
            background: #fff;
            padding: 20px 25px;
            border-radius: 3px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
        }

        .table-title {
            padding-bottom: 15px;
            background: #435d7d;
            color: #fff;
            padding: 16px 30px;
            margin: -20px -25px 10px;
            border-radius: 3px 3px 0 0;
        }

        .table-title h2 {
            margin: 5px 0 0;
            font-size: 24px;
        }

        .table-title .btn-group {
            float: right;
        }

        .table-title .btn {
            color: #fff;
            float: right;
            font-size: 13px;
            border: none;
            min-width: 50px;
            border-radius: 2px;
            border: none;
            outline: none !important;
            margin-left: 10px;
        }

        .table-title .btn i {
            float: left;
            font-size: 21px;
            margin-right: 5px;
        }

        .table-title .btn span {
            float: left;
            margin-top: 2px;
        }

        table.table tr th,
        table.table tr td {
            border-color: #e9e9e9;
            padding: 12px 15px;
            vertical-align: middle;
        }

        table.table tr th:first-child {
            width: 60px;
        }

        table.table tr th:last-child {
            width: 100px;
        }

        table.table-striped tbody tr:nth-of-type(odd) {
            background-color: #fcfcfc;
        }

        table.table-striped.table-hover tbody tr:hover {
            background: #f5f5f5;
        }

        table.table th i {
            font-size: 13px;
            margin: 0 5px;
            cursor: pointer;
        }

        table.table td:last-child i {
            opacity: 0.9;
            font-size: 22px;
            margin: 0 5px;
        }

        table.table td a {
            font-weight: bold;
            color: #566787;
            display: inline-block;
            text-decoration: none;
            outline: none !important;
        }

        table.table td a:hover {
            color: #2196F3;
        }

        table.table td a.edit {
            color: #FFC107;
        }

        table.table td a.delete {
            color: #F44336;
        }

        table.table td i {
            font-size: 19px;
        }

        table.table .avatar {
            border-radius: 50%;
            vertical-align: middle;
            margin-right: 10px;
        }

        .pagination {
            float: right;
            margin: 0 0 5px;
        }

        .pagination li a {
            border: none;
            font-size: 13px;
            min-width: 30px;
            min-height: 30px;
            color: #999;
            margin: 0 2px;
            line-height: 30px;
            border-radius: 2px !important;
            text-align: center;
            padding: 0 6px;
        }

        .pagination li a:hover {
            color: #666;
        }

        .pagination li.active a,
        .pagination li.active a.page-link {
            background: #03A9F4;
        }

        .pagination li.active a:hover {
            background: #0397d6;
        }

        .pagination li.disabled i {
            color: #ccc;
        }

        .pagination li i {
            font-size: 16px;
            padding-top: 6px
        }

        .hint-text {
            float: left;
            margin-top: 10px;
            font-size: 13px;
        }

        /* Custom checkbox */
        .custom-checkbox {
            position: relative;
        }

        .custom-checkbox input[type="checkbox"] {
            opacity: 0;
            position: absolute;
            margin: 5px 0 0 3px;
            z-index: 9;
        }

        .custom-checkbox label:before {
            width: 18px;
            height: 18px;
        }

        .custom-checkbox label:before {
            content: '';
            margin-right: 10px;
            display: inline-block;
            vertical-align: text-top;
            background: white;
            border: 1px solid #bbb;
            border-radius: 2px;
            box-sizing: border-box;
            z-index: 2;
        }

        .custom-checkbox input[type="checkbox"]:checked+label:after {
            content: '';
            position: absolute;
            left: 6px;
            top: 3px;
            width: 6px;
            height: 11px;
            border: solid #000;
            border-width: 0 3px 3px 0;
            transform: inherit;
            z-index: 3;
            transform: rotateZ(45deg);
        }

        .custom-checkbox input[type="checkbox"]:checked+label:before {
            border-color: #03A9F4;
            background: #03A9F4;
        }

        .custom-checkbox input[type="checkbox"]:checked+label:after {
            border-color: #fff;
        }

        .custom-checkbox input[type="checkbox"]:disabled+label:before {
            color: #b8b8b8;
            cursor: auto;
            box-shadow: none;
            background: #ddd;
        }

        /* Modal styles */
        .modal .modal-dialog {
            max-width: 400px;
        }

        .modal .modal-header,
        .modal .modal-body,
        .modal .modal-footer {
            padding: 20px 30px;
        }

        .modal .modal-content {
            border-radius: 3px;
        }

        .modal .modal-footer {
            background: #ecf0f1;
            border-radius: 0 0 3px 3px;
        }

        .modal .modal-title {
            display: inline-block;
        }

        .modal .form-control {
            border-radius: 2px;
            box-shadow: none;
            border-color: #dddddd;
        }

        .modal textarea.form-control {
            resize: vertical;
        }

        .modal .btn {
            border-radius: 2px;
            min-width: 100px;
        }

        .modal form label {
            font-weight: normal;
        }
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link " href="/admin">
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
                        <a class="collapse-item" href="<?= base_url('rkat/createbyadmin') ?>">Tambah RKAT</a>
                        <a class="collapse-item" href="<?= base_url('rkat/indexbyadmin') ?>">Lihat Data</a>
                        <a class="collapse-item" href="<?= base_url('setrkat/create') ?>">Atur Semster dan Pagu</a>
                        <a class="collapse-item" href="<?= base_url('setrkat/index') ?>">Lihat Data Set Rkat</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                KPI
            </div>
            <li class="nav-item">
                <a class="nav-link " href="/admin/adminkpi">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Heading -->
            <div class="sidebar-heading">
                User
            </div>
            <li class="nav-item ">
                <a class="nav-link " href="<?= base_url('auth/index') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Tabel User</span></a>
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
                                <img class="img-profile rounded-circle" src="/img/inf-logo.jpg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
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
                <div class="container">
                    <h2>Edit KPI</h2>
                    <br>
                    <form action="<?= base_url('admin/updateadminkpi'); ?>" method="POST" enctype="multipart/form-data">
                        <input required type="hidden" name="id" value="<?= $detail_kpi['id']; ?>">


                        <div class="form-group">
                            <label for="tahun_akademik">Pilih tahun ajaran</label>
                            <select class="form-control" id="tahun_akademik" name="tahun_akademik">
                                <option value="<?= $detail_kpi['tahun_akademik']; ?>" disabled selected>
                                    <?= $detail_kpi['tahun_akademik']; ?></option>
                                <option value="2021/2022">2021/2022</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="prodi_unit">Bagian</label>
                            <select class="form-control" id="prodi_unit" name="prodi_unit">
                                <option value="<?= $detail_kpi['prodi_unit']; ?>" disabled selected>
                                    <?= $detail_kpi['prodi_unit']; ?></option>
                                <option value="Prodi">Prodi</option>
                                <option value="Unit">Unit</option>
                            </select>
                        </div>

                        <div class="form-group" id="kriteriaDiv">
                            <label for="kriteria">Kriteria</label>
                            <select class="form-control" id="kriteria" name="kriteria">
                                <option value="<?= $detail_kpi['kriteria']; ?>" disabled selected>
                                    <?= $detail_kpi['kriteria']; ?></option>
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
                        <div class="form-group" id="standar1Div">
                            <label for="standar1">Indikator Standar</label>
                            <select class="form-control" id="standar1" name="standar">
                                <option value="<?= $detail_kpi['standar']; ?>" disabled selected>
                                    <?= $detail_kpi['standar']; ?></option>
                                <option value="Visi UPJ diturunkan ke dalam visi Fakultas/ Program Studi/Unit Kerja. (korelasi VMTS Universitas dan Prodi)">Visi UPJ diturunkan ke dalam visi Fakultas/ Program Studi/Unit Kerja. (korelasi VMTS Universitas dan Prodi)</option>
                                <option value="Adanya keterlibatan pemangku kepentingan dalam penyusunan Visi Misi Universitas, Fakultas dan Program Studi. (mekanisme penyusunan VMTS yang terdokumentasi dan melibatkan stakeholder)">Adanya keterlibatan pemangku kepentingan dalam penyusunan Visi Misi Universitas, Fakultas dan Program Studi. (mekanisme penyusunan VMTS yang terdokumentasi dan melibatkan stakeholder)</option>
                                <option value="Adanya sosialisasi Visi-misi dan Nilai-Nilai Jaya kepada mahasiswa dan pemangku kepentingan melalui presentasi, video animasi, mars dan hymne universitas serta bentuk lain yang dipandang perlu (minimal 1x per TA)">Adanya sosialisasi Visi-misi dan Nilai-Nilai Jaya kepada mahasiswa dan pemangku kepentingan melalui presentasi, video animasi, mars dan hymne universitas serta bentuk lain yang dipandang perlu (minimal 1x per TA)</option>
                                </option>
                            </select>
                        </div>
                        <div class="form-group" id="standar2Div">
                            <label for="standar2">Indikator Standar</label>
                            <select class="form-control" id="standar2" name="standar">
                                <option value="<?= $detail_kpi['standar']; ?>" disabled selected>
                                    <?= $detail_kpi['standar']; ?></option>
                                <option value="Adanya struktur organisasi universitas yang mengakomodasi struktur organisasi: Fakultas, Program Studi dan Unit dan memenuhi 5 pilar struktur tata pamong (SK SO, Pejabat dan SK Pengangkatan)">Adanya struktur organisasi universitas yang mengakomodasi struktur organisasi: Fakultas, Program Studi dan Unit dan memenuhi 5 pilar struktur tata pamong (SK SO, Pejabat dan SK Pengangkatan)</option>
                                <option value="Adanya kegiatan-kegiatan yang dilakukan sebagai bentuk hasil kerjasama, yang memenuhi 3 aspek
                            (> 2 kegiatan (nasional dan atau internasional) dari MoA/smst/prodi)">Adanya kegiatan-kegiatan yang dilakukan sebagai bentuk hasil kerjasama, yang memenuhi 3 aspek :
                                    a. Memberikan manfaat prodi di bidang Tridharma
                                    b. Memberikan peningkatan kinerja Tridharma dan fasilitas pendukung prodi
                                    c. Memberikan kepuasan pada mitra industri/lainnya
                                    Ada keberlanjutan kerjasama dan hasilnya
                                    (> 2 kegiatan (nasional dan atau internasional) dari MoA/smst/prodi)</option>
                                <option value="Adanya MoU kerjasama UPJ Bidang Tridharma (> 2/tahun MoU baru)">Adanya MoU kerjasama UPJ Bidang Tridharma (> 2/tahun MoU baru)</option>
                                <option value="Adanya MoU kerjasama UPJ Tingkat internasional (> 1/tahun MoU baru)">Adanya MoU kerjasama UPJ Tingkat internasional (> 1/tahun MoU baru)</option>
                                <option value="Adanya MoU kerjasama UPJ Tingkat nasional (> 2/tahun MoU baru)">Adanya MoU kerjasama UPJ Tingkat nasional (> 2/tahun MoU baru)</option>
                                <option value="Monitoring terhadap tercapainya standar (Terlaksananya monitoring dan evaluasi implementasi SN DIKTI dan SPT)">Monitoring terhadap tercapainya standar (Terlaksananya monitoring dan evaluasi implementasi SN DIKTI dan SPT)</option>
                                <option value="Terlaksananya Proses PPEPP 3 SN DIKTI dan 2 SPT UPJ">Terlaksananya Proses PPEPP 3 SN DIKTI dan 2 SPT UPJ</option>
                                <option value="Adanya evaluasi dosen oleh mahasiswa (EDOM) yang diisi oleh mahasiswa minimal 1 (satu) kali dalam 1 (satu) semester.">Adanya evaluasi dosen oleh mahasiswa (EDOM) yang diisi oleh mahasiswa minimal 1 (satu) kali dalam 1 (satu) semester.</option>
                                <option value="Pelaporan proses pembelajaran, berupa kompilasi laporan proses pembelajaran yang diperoleh dari pihak terkait">Pelaporan proses pembelajaran, berupa kompilasi laporan proses pembelajaran yang diperoleh dari pihak terkait</option>
                                <option value="Laporan Akademik Program Studi dan unit setiap TA.">Laporan Akademik Program Studi dan unit setiap TA.</option>
                                <option value="Adanya laporan evaluasi tahunan berdasarkan matriks penilaian instrumen akreditasi yang berlaku serta ada tindak lanjut hasilnya.">Adanya laporan evaluasi tahunan berdasarkan matriks penilaian instrumen akreditasi yang berlaku serta ada tindak lanjut hasilnya.</option>
                                <option value="Universitas melakukan akreditasi Internasional setelah mendapatkan peringkat akreditasi tertinggi dari BAN-PT/LAM dan telah memenuhi persyaratan yang ditetapkan oleh Lembaga Akreditasi internasional yang dituju.">Universitas melakukan akreditasi Internasional setelah mendapatkan peringkat akreditasi tertinggi dari BAN-PT/LAM dan telah memenuhi persyaratan yang ditetapkan oleh Lembaga Akreditasi internasional yang dituju.</option>
                                <option value="Peningkatan Akreditasi Perguruan Tinggi (APT 3.0)">Peningkatan Akreditasi Perguruan Tinggi (APT 3.0)</option>
                                <option value="Peningkatan Akreditasi Program Studi (APS 4.0)">Peningkatan Akreditasi Program Studi (APS 4.0)</option>
                                <option value="Adanya program pasca sarjana (S2)">Adanya program pasca sarjana (S2)</option>

                            </select>
                        </div>

                        <div class="form-group" id="standar3Div">
                            <label for="standar3">Indikator Standar</label>
                            <select class="form-control" id="standar3" name="standar">
                                <option value="<?= $detail_kpi['standar']; ?>" disabled selected>
                                    <?= $detail_kpi['standar']; ?></option>
                                <option value="Program Studi membantu panitia penerimaan mahasiswa baru dalam pelaksanaan dan penilaian seleksi persyaratan khusus. (Rasio maba pendaftar : diterima > 5)">Program Studi membantu panitia penerimaan mahasiswa baru dalam pelaksanaan dan penilaian seleksi persyaratan khusus. (Rasio maba pendaftar : diterima > 5)</option>
                                <option value="Adanya evaluasi tahunan terhadap Program Studi dengan jumlah mahasiswa baru di bawah 30 selama 3 tahun berturut-turut. (peningkatan animo calon maba > 10% per TA)">Adanya evaluasi tahunan terhadap Program Studi dengan jumlah mahasiswa baru di bawah 30 selama 3 tahun berturut-turut. (peningkatan animo calon maba > 10% per TA)</option>
                                <option value="Adanya kegiatan dan usaha-usaha serta bukti peningkatan animo calon mahasiswa. (10 kegiatan marketing/TA)">Adanya kegiatan dan usaha-usaha serta bukti peningkatan animo calon mahasiswa. (10 kegiatan marketing/TA)</option>
                                </option>
                                <option value="Pencapaian target mahasiswa baru (non blended learning) (peningkatan intake maba > 10% per TA)">Pencapaian target mahasiswa baru (non blended learning) (peningkatan intake maba > 10% per TA)</option>
                                <option value="Jumlah student body aktif per semester (>95%)">Jumlah student body aktif per semester (>95%)</option>
                                <option value="Jumlah mahasiswa asing (> 1% student body)">Jumlah mahasiswa asing (> 1% student body)</option>
                                <option value="Jumlah maksimal mahasiswa bimbingan setiap dosen adalah 20 orang mahasiswa setiap semester. (rasio dosen PA 1:20)">Jumlah maksimal mahasiswa bimbingan setiap dosen adalah 20 orang mahasiswa setiap semester. (rasio dosen PA 1:20)</option>
                                <option value="Jumlah pertemuan Pembimbingan Akademik minimal 4 (empat) kali setiap semester.(4x per semester)">Jumlah pertemuan Pembimbingan Akademik minimal 4 (empat) kali setiap semester.(4x per semester)</option>
                                <option value="Sertifikat kompetensi diberikan kepada lulusan yang mengikuti dan lulus ujian kompetensi (Sertifikasi kompetensi)">Sertifikat kompetensi diberikan kepada lulusan yang mengikuti dan lulus ujian kompetensi (Sertifikasi kompetensi)</option>
                                <option value="Skor TOEIC lulusan ≥ 550 (Persentase lulusan yang memiliki Sertifikasi TOEIC dengan skor ≥ 550)">Skor TOEIC lulusan ≥ 550 (Persentase lulusan yang memiliki Sertifikasi TOEIC dengan skor ≥ 550)</option>
                                <option value="Adanya Produk wirausaha berbasis inovasi (Jumlah produk wirausaha berbasis inovasi)">Adanya Produk wirausaha berbasis inovasi (Jumlah produk wirausaha berbasis inovasi)</option>
                            </select>
                        </div>

                        <div class="form-group" id="standar4Div">
                            <label for="standar4">Indikator Standar</label>
                            <select class="form-control" id="standar4" name="standar">
                                <option value="<?= $detail_kpi['standar']; ?>" disabled selected>
                                    <?= $detail_kpi['standar']; ?></option>
                                <option value="Jumlah dosen tetap setiap Program Studi minimal 6 (enam) orang * (NDTPS > 12)">Jumlah dosen tetap setiap Program Studi minimal 6 (enam) orang * (NDTPS > 12)</option>
                                <option value="10% peningkatan jumlah dosen S3 setiap 2 (dua) tahun. (>50% dosen S3)">10% peningkatan jumlah dosen S3 setiap 2 (dua) tahun. (>50% dosen S3)</option>
                                <option value="20% dosen memiliki Jabatan Akademik Dosen (JAD) minimal 2 (dua) tahun. (>70% GB-LK-L)">20% dosen memiliki Jabatan Akademik Dosen (JAD) minimal 2 (dua) tahun. (>70% GB-LK-L)</option>
                                <option value="Jumlah dosen tetap memiliki rasio 1:25 (eksakta) dan 1:35 (sosial) untuk setiap Program Studi. (< 25 (FTD); < 35 (FHB))">Jumlah dosen tetap memiliki rasio 1:25 (eksakta) dan 1:35 (sosial) untuk setiap Program Studi. (< 25 (FTD); < 35 (FHB))</option>
                                <option value="Jumlah maksimal mahasiswa bimbingan Skripsi/Tugas Akhir (TA) setiap dosen adalah 10 (sepuluh) orang mahasiswa per semester">Jumlah maksimal mahasiswa bimbingan Skripsi/Tugas Akhir (TA) setiap dosen adalah 10 (sepuluh) orang mahasiswa per semester. (< 6 mahasiswa/dosen)</option>
                                <option value="Beban Kinerja Dosen (BKD) minimal 12 sks per semester untuk pendidikan dan pengajaran">Beban Kinerja Dosen (BKD) minimal 12 sks per semester untuk pendidikan dan pengajaran. (12 sks/semester/dosen)</option>
                                <option value="Beban Kinerja Dosen (BKD) minimal 5 (lima) sks per semester untuk kegiatan Penelitian, Pengabdian kepada masyarakat dan kegiatan penunjang lainnya. ">Beban Kinerja Dosen (BKD) minimal 5 (lima) sks per semester untuk kegiatan Penelitian, Pengabdian kepada masyarakat dan kegiatan penunjang lainnya. (5 sks/semester/dosen)</option>
                                <option value="Pelaporan dosen, berupa Beban Kinerja Dosen (BKD). ">Pelaporan dosen, berupa Beban Kinerja Dosen (BKD). (1x per semester)</option>
                                <option value="Jumlah dosen tidak tetap setiap Program Studi">Jumlah dosen tidak tetap setiap Program Studi (< 10%)</option>
                                <option value="Dosen mengikuti seminar sebagai pembicara/narasumber minimal 1 (satu) kali per semester">Dosen mengikuti seminar sebagai pembicara/narasumber minimal 1 (satu) kali per semester. (1/dosen/semester)</option>
                                <option value="Publikasi dalam jurnal nasional terakreditasi minimal 1 artikel per tahun per dosen">Publikasi dalam jurnal nasional terakreditasi minimal 1 artikel per tahun per dosen. (1/dosen/tahun)</option>
                                <option value="Publikasi dalam jurnal/media masa nasional">Publikasi dalam jurnal/media masa nasional (1/dosen/semester)</option>
                                <option value="Publikasi dalam jurnal internasional terindeks scopus minimal 1 artikel per 2 tahun per dosen.">Publikasi dalam jurnal internasional terindeks scopus minimal 1 artikel per 2 tahun per dosen. (1/dosen/2 tahun)</option>
                                <option value="Publikasi dalam seminar/media masa internasional">Publikasi dalam seminar/media masa internasional (1/dosen/tahun)</option>
                                <option value="Adanya artikel karya ilmiah yang disitasi (RS = NAS/NDTPS)">Adanya artikel karya ilmiah yang disitasi (RS = NAS/NDTPS) (Jumlah artikel yang disitasi > 50% jumlah dosen)</option>
                                <option value="Adanya hasil penelitian yang dipatenkan minimal 1 paten dalam 5 tahun.">Adanya hasil penelitian yang dipatenkan minimal 1 paten dalam 5 tahun. (1 paten/paten sederhana)</option>
                                <option value="Adanya hasil penelitian/PkM dosen yang mendapat pengakuan HKI">Adanya hasil penelitian/PkM dosen yang mendapat pengakuan HKI (1 HKI dosen/TA)</option>
                                <option value="Seluruh dosen memiliki Jabatan Akademik Dosen Asisten Ahli.">Seluruh dosen memiliki Jabatan Akademik Dosen Asisten Ahli. (>90% minimal AA)</option>
                                <option value="> 50% dosen memiliki jabatan akademik dosen Lektor pada tahun 2035.">> 50% dosen memiliki jabatan akademik dosen Lektor pada tahun 2035. (> 20% dosen Lektor)</option>
                                <option value="Dosen mengikuti kegiatan pelatihan/ workshop/seminar minimal 1 (satu) kali per semester">Dosen mengikuti kegiatan pelatihan/ workshop/seminar minimal 1 (satu) kali per semester. (1/semester)</option>
                                <option value="10% peningkatan jumlah dosen GB atau LK">10% peningkatan jumlah dosen GB atau LK (Jumlah Dosen LK/GB)</option>
                                <option value=">20% dosen tetap memiliki sertifikat pendidik/sertifikasi dosen.">>20% dosen tetap memiliki sertifikat pendidik/sertifikasi dosen. (>80% dosen berserdos)</option>
                                <option value="Seluruh dosen memiliki kemampuan berkomunikasi dalam Bahasa Inggris dengan nilai TOEIC minimal 550 pada TA 2025">Seluruh dosen memiliki kemampuan berkomunikasi dalam Bahasa Inggris dengan nilai TOEIC minimal 550 pada TA 2025. (100% dosen UPJ memiliki skor TOEIC > 550)</option>
                                <option value="Kepemimpinan publik dosen">Kepemimpinan publik dosen (jumlah kepemimpinan publik aras nasional dan internasional per Prodi per TA)</option>
                                <option value="Keikutsertaan dalam lomba dosen berprestasi tingkat nasional, atau lomba lain setara, atau lomba tingkat internasional">Keikutsertaan dalam lomba dosen berprestasi tingkat nasional, atau lomba lain setara, atau lomba tingkat internasional (1/prodi)</option>
                                <option value="Turnover dosen Prodi rendah">Turnover dosen Prodi rendah (Persentase turnover dosen < 1%/TA)</option>
                            </select>
                        </div>
                        <div class="form-group" id="standar5Div">
                            <label for="standar5">Indikator Standar</label>
                            <select class="form-control" id="standar5" name="standar">
                                <option value="<?= $detail_kpi['standar']; ?>" disabled selected>
                                    <?= $detail_kpi['standar']; ?></option>
                                <option value="Biaya operasional pendidikan">Biaya operasional pendidikan (DOP > 20juta/mhsw/tahun)</option>
                                <option value="Dana penelitian dosen">Dana penelitian dosen (rata-rata > 10 juta Rp per 3 tahun terakhir)</option>
                                <option value="Dana pengabdian kepada masyarakat dosen">Dana pengabdian kepada masyarakat dosen (rata-rata > 5 juta Rp per 3 tahun terakhir)</option>
                                <option value="Seluruh Program Studi/Unit Kerja menyusun Rencana Kegiatan dan Anggaran Tahunan (RKAT) yang disetujui oleh Rektor. ">Seluruh Program Studi/Unit Kerja menyusun Rencana Kegiatan dan Anggaran Tahunan (RKAT) yang disetujui oleh Rektor. (1 RKAT/Prodi atau unit/TA)</option>
                                <option value="RKAT diserahkan tepat waktu">RKAT diserahkan tepat waktu (100% tepat waktu)</option>
                                <option value="Adanya income generating unit yang memberikan pendapatan kepada universitas. ">Adanya income generating unit yang memberikan pendapatan kepada universitas. (>40% DOP)</option>
                            </select>
                        </div>
                        <div class="form-group" id="standar6Div">
                            <label for="standar6">Indikator Standar</label>
                            <select class="form-control" id="standar6" name="standar">
                                <option value="<?= $detail_kpi['standar']; ?>" disabled selected>
                                    <?= $detail_kpi['standar']; ?></option>
                                <option value="Terlaksananya peninjauan RPS minimal 1 (satu) kali setiap Tahun akademik guna penyesuaian dengan perkembangan ilmu pengetahuan dan teknologi">Terlaksananya peninjauan RPS minimal 1 (satu) kali setiap Tahun akademik guna penyesuaian dengan perkembangan ilmu pengetahuan dan teknologi (1 (satu) kali/TA)</option>
                                <option value="Kegiatan evaluasi tahunan pelaksanaan kurikulum.">Kegiatan evaluasi tahunan pelaksanaan kurikulum. (1 (satu) kali/TA)</option>
                                <option value="Setiap Program Studi membuat laporan setiap semester yang mencakup: Pelaporan kompetensi lulusan tentang kesesuaian kompetensi bidang pekerjaan lulusan">Setiap Program Studi membuat laporan setiap semester yang mencakup: Pelaporan kompetensi lulusan tentang kesesuaian kompetensi bidang pekerjaan lulusan. (1 kali/semester)</option>
                                <option value="Tersedianya Rencana Pembelajaran Semester (RPS) dan RTM untuk setiap mata kuliah maksimal 1 bulan sebelum perkuliahan dimulai">Tersedianya Rencana Pembelajaran Semester (RPS) dan RTM untuk setiap mata kuliah maksimal 1 bulan sebelum perkuliahan dimulai (1 RPS/MK)</option>
                                <option value="Pelaporan isi pembelajaran, yaitu daftar RPS termasuk peninjauan/ perbaikannya apabila dilakukan">Pelaporan isi pembelajaran, yaitu daftar RPS termasuk peninjauan/ perbaikannya apabila dilakukan. (1 kali/smt)</option>
                                <option value="Metode pembelajaran dinyatakan secara jelas dalam RPS dan dilaksanakan sesuai rencana">Metode pembelajaran dinyatakan secara jelas dalam RPS dan dilaksanakan sesuai rencana (Tiap RPS mecantumkan metode pembelajaran)</option>
                                <option value="RPS, RTM dan slide untuk 14 pertemuan tersedia dan diunggah di sistem Open course Ware UPJ">RPS, RTM dan slide untuk 14 pertemuan tersedia dan diunggah di sistem Open course Ware UPJ (100% diunggah)</option>
                                <option value="Penyerahan jadwal kuliah tepat waktu">Penyerahan jadwal kuliah tepat waktu (100% tepat waktu)</option>
                                <option value="Penyerahan penilaian hasil belajar (UTS dan UAS) tepat waktu">Penyerahan penilaian hasil belajar (UTS dan UAS) tepat waktu (100% tepat waktu)</option>
                                <option value="Terjadi proses tatap muka mahasiswa dengan dosen minimal 14 kali dalam 1 (satu) semester untuk 1 (satu) mata kuliah">Terjadi proses tatap muka mahasiswa dengan dosen minimal 14 kali dalam 1 (satu) semester untuk 1 (satu) mata kuliah. (Jumlah tatap muka 14 kali = 100%)</option>
                                <option value="Pelaksanaan pembelajaran dilakukan secara on-line dan off-line dalam bentuk audiovisual terdokumentasi">Pelaksanaan pembelajaran dilakukan secara on-line dan off-line dalam bentuk audiovisual terdokumentasi (Jumlah mata kuliah online (blended maupun full online) per Prodi)</option>
                                <option value="Jumlah pertemuan pembimbingan Skripsi/Tugas Akhir (TA) minimal 8 (delapan) kali per semester">Jumlah pertemuan pembimbingan Skripsi/Tugas Akhir (TA) minimal 8 (delapan) kali per semester. (lebih dari sama dengan (>_) 8x)</option>
                                <option value="Penilaian dimasukkan dalam sistem informasi akademik dan dapat diakses oleh pemangku kepentingan">Penilaian dimasukkan dalam sistem informasi akademik dan dapat diakses oleh pemangku kepentingan. (100% input nilai tepat waktu)</option>
                                <option value="Proses penilaian Skripsi/Tugas Akhir (TA) dilaksanakan sesuai dengan pedoman penilaian Skripsi/Tugas Akhir (TA) yang ditetapkan oleh Fakultas/Program Studi">Proses penilaian Skripsi/Tugas Akhir (TA) dilaksanakan sesuai dengan pedoman penilaian Skripsi/Tugas Akhir (TA) yang ditetapkan oleh Fakultas/Program Studi. (Ada Pedoman Skripsi/TA)</option>
                                <option value="Proses pembelajaran harus menggunakan metode pembelajaran yang efektif sesuai karakteristik mata kuliah berupa kuliah, responsi/tutorial, seminar dan praktek/praktikum/simulasi">Proses pembelajaran harus menggunakan metode pembelajaran yang efektif sesuai karakteristik mata kuliah berupa kuliah, responsi/tutorial, seminar dan praktek/praktikum/simulasi. (JP/JB > 20% (jam praktikum/jam belajar total))</option>
                                <option value="Terselenggaranya kegiatan penunjang suasana akademik secara konsisten di setiap Program Studi">Terselenggaranya kegiatan penunjang suasana akademik secara konsisten di setiap Program Studi (1 kali per bulan)</option>
                                <option value="Adanya evaluasi/survei kepuasan mahasiswa yang dilakukan 1 (satu) kali dalam 1 (satu) tahun akademik">Adanya evaluasi/survei kepuasan mahasiswa yang dilakukan 1 (satu) kali dalam 1 (satu) tahun akademik. (TKM > 75%)</option>
                                <option value="Analisis dan tindak lanjut survei kepuasan mahasiswa">Analisis dan tindak lanjut survei kepuasan mahasiswa (2x/semester)</option>
                            </select>
                        </div>
                        <div class="form-group" id="standar7Div">
                            <label for="standar7">Indikator Standar</label>
                            <select class="form-control" id="standar7" name="standar">
                                <option value="<?= $detail_kpi['standar']; ?>" disabled selected>
                                    <?= $detail_kpi['standar']; ?></option>
                                <option value="Adanya payung penelitian UPJ yang fokus pada kajian urban">Adanya payung penelitian UPJ yang fokus pada kajian urban (Rencana induk dan renstra (termasuk Roadmap) penelitian Urban)</option>
                                <option value="Adanya roadmap penelitian yang mendukung payung penelitian universitas di bidang kajian urban dengan kekhasan Prodi">Adanya roadmap penelitian yang mendukung payung penelitian universitas di bidang kajian urban dengan kekhasan Prodi. (Roadmap penelitian Prodi dan Fakultas)</option>
                                <option value="Dosen melibatkan mahasiswa dalam kegiatan penelitian dan diberikan tugas sebagai tenaga perbantuan atau menjadi penanggung jawab sesuai dengan kemampuannya">Dosen melibatkan mahasiswa dalam kegiatan penelitian dan diberikan tugas sebagai tenaga perbantuan atau menjadi penanggung jawab sesuai dengan kemampuannya. (> 25% judul penelitian dosen melibatkan mahasiswa)</option>
                                <option value="Kegiatan penelitian dengan Sumber pembiayaan luar negeri">Kegiatan penelitian dengan Sumber pembiayaan luar negeri (1 penelitian/3 tahun)</option>
                                <option value="Kegiatan penelitian dengan Sumber pembiayaan dalam negeri">Kegiatan penelitian dengan Sumber pembiayaan dalam negeri (1/tahun/dosen)</option>
                                <option value="Penelitian dan Pengabdian kepada Masyarakat yang dilakukan dalam proses pembelajaran sesuai dengan Pedoman Penelitian dan Pengabdian kepada Masyarakat UPJ yang berlaku">Penelitian dan Pengabdian kepada Masyarakat yang dilakukan dalam proses pembelajaran sesuai dengan Pedoman Penelitian dan Pengabdian kepada Masyarakat UPJ yang berlaku. (> 3 MK dikembangkan dari proses penelitian dan PkM)</option>
                                <option value="Karya inovasi dari kegiatan penelitian">Karya inovasi dari kegiatan penelitian (Jumlah karya inovasi dosen per Prodi)</option>
                                <option value="Peningkatan skor SINTA dan atau H-index per dosen">Peningkatan skor SINTA dan atau H-index per dosen (Persentase peningkatan skor /TA)</option>
                                <option value="Jumlah joint research (nasional/internasional) dengan eksternal">Jumlah joint research (nasional/internasional) dengan eksternal (≥ 1 joint research/TA/Prodi)</option>
                                <option value="Joint publikasi dengan pihak eksternal (nasional/internasional)">Joint publikasi dengan pihak eksternal (nasional/internasional) (≥ 1 joint publication/TA/Prodi)</option>
                            </select>
                        </div>
                        <div class="form-group" id="standar8Div">
                            <label for="standar8">Indikator Standar</label>
                            <select class="form-control" id="standar8" name="standar">
                                <option value="<?= $detail_kpi['standar']; ?>" disabled selected>
                                    <?= $detail_kpi['standar']; ?></option>
                                <option value="Adanya payung Pengabdian kepada Masyarakat UPJ yang fokus pada kajian urban">Adanya payung Pengabdian kepada Masyarakat UPJ yang fokus pada kajian urban (Rencana induk dan renstra (termasuk Roadmap) pengmas Urban)</option>
                                <option value="Adanya roadmap pengmas yang mendukung payung pengmas universitas di bidang kajian urban dengan kekhasan Prodi">Adanya roadmap pengmas yang mendukung payung pengmas universitas di bidang kajian urban dengan kekhasan Prodi (Roadmap pengmas Prodi dan Fakultas)</option>
                                <option value="Dosen melibatkan mahasiswa dalam kegiatan pengabdian kepada masyarakat">Dosen melibatkan mahasiswa dalam kegiatan pengabdian kepada masyarakat (> 25% judul Pengabdian dosen melibatkan mahasiswa)</option>
                                <option value="Kegiatan pengabdian dengan sumber pembiayaan luar negeri">Kegiatan pengabdian dengan sumber pembiayaan luar negeri (1 pengabdian/3 tahun)</option>
                                <option value="Kegiatan pengabdian dengan sumber pembiayaan dalam negeri">Kegiatan pengabdian dengan sumber pembiayaan dalam negeri (1/tahun/dosen)</option>
                                <option value="Adanya pengmas yang berdampak nasional (RPTRA, Pemda, Pemprov, dsb)">Adanya pengmas yang berdampak nasional (RPTRA, Pemda, Pemprov, dsb) (Jumlah pengmas yang berdampak per Prodi)</option>
                            </select>
                        </div>
                        <div class="form-group" id="standar9Div">
                            <label for="standar9">Indikator Standar</label>
                            <select class="form-control" id="standar9" name="standar">
                                <option value="<?= $detail_kpi['standar']; ?>" disabled selected>
                                    <?= $detail_kpi['standar']; ?></option>
                                <option value="Lulusan yang bekerja, mendapat Gaji >1.2 kali lipat upah minimum Kota/Kabupaten">Lulusan yang bekerja, mendapat Gaji >1.2 kali lipat upah minimum Kota/Kabupaten</option>
                                <option value="Persentase lulusan yang melanjutkan studi < 12 bulan setelah tanggal ijazah">Persentase lulusan yang melanjutkan studi < 12 bulan setelah tanggal ijazah</option>
                                <option value="Persentase mahasiswa yang mengikuti program Merdeka Belajar di Luar UPJ">Persentase mahasiswa yang mengikuti program Merdeka Belajar di Luar UPJ</option>
                                </option>
                                <option value="Jumlah dosen berkegiatan tridarma di perguruan tinggi dalam negeri">Jumlah dosen berkegiatan tridarma di perguruan tinggi dalam negeri</option>
                                <option value="Jumlah Dosen berkegiatan tridarma di perguruan tinggi yang termasuk dalam daftar QS100 berdasarkan ilmu">Jumlah Dosen berkegiatan tridarma di perguruan tinggi yang termasuk dalam daftar QS100 berdasarkan ilmu</option>
                                <option value="Jumlah Dosen yang mempunyai Perjanjian Kerja PKWT, PKWTT, PKPW, atau bekerja sebagai konsultan atau tenaga ahli independen ">Jumlah Dosen yang mempunyai Perjanjian Kerja PKWT, PKWTT, PKPW, atau bekerja sebagai konsultan atau tenaga ahli independen </option>
                                <option value="Jumlah Dosen yang membimbing mahasiswa meraih prestasi minimal tingkat nasional">Jumlah Dosen yang membimbing mahasiswa meraih prestasi minimal tingkat nasional</option>
                                <option value="Jumlah dosen praktisi S3 yang memiliki sertifikasi dari LSP yang diakui Kementerian Pendidikan dan Kebudayaan ">Jumlah dosen praktisi S3 yang memiliki sertifikasi dari LSP yang diakui Kementerian Pendidikan dan Kebudayaan </option>
                                <option value="Persentase mata kuliah program sarjana yang mencantumkan bentuk pembelajaran Student Centered Learning jenis PBL dalam RPS">Persentase mata kuliah program sarjana yang mencantumkan bentuk pembelajaran Student Centered Learning jenis PBL dalam RPS</option>

                            </select>
                        </div>
                        <div class="form-group" id="pic_prodiDiv">
                            <label for="pic_prodi">PIC</label>
                            <select class="form-control" id="pic" name="pic">
                                <option value="<?= $detail_kpi['pic']; ?>" disabled selected>
                                    <?= $detail_kpi['pic']; ?></option>

                                <option value="Kaprodi">Ketua Prodi</option>
                                <option value="Sekprodi">Sekretaris Prodi</option>
                                <option value="Koor Keilmuan">Koordinator Keilmuan</option>
                                <option value="Koor Kemahasiswaan">Koordinator Kemahasiswaan</option>
                                <option value="Koor TA">Koordinator TA</option>
                                <option value="Koor KP">Koordinator KP</option>
                            </select>
                        </div>

                        <div class="form-group" id="pic_unitDiv">
                            <label for="pic_unit">PIC</label>
                            <select class="form-control" id="pic" name="pic">
                                <option value="<?= $detail_kpi['pic']; ?>" disabled selected>
                                    <?= $detail_kpi['pic']; ?></option>
                                <option value="Kabag">Kepala Bagian</option>
                                <option value="Kasubbag">Kepala Sub Bagian</option>
                                <option value="Staff">Staff</option>

                            </select>
                        </div>
                        <div class="form-group" id="nama_picDiv">
                            <label for="nama_pic">Nama PIC</label>
                            <input type="text" class="form-control" id="nama_pic" name="nama_pic" placeholder="Masukkan Nama PIC" required value="<?= $detail_kpi['nama_pic']; ?>">
                        </div>
                        <div class="form-group" id="rencana_realisasiDiv">
                            <label for="rencana_realisasi">Rencana Realisasi</label>
                            <textarea class="form-control" id="rencana_realisasi" rows="3" name="rencana_realisasi" placeholder="Masukkan Rencana Realisasi" required value="<?= $detail_kpi['rencana_realisasi']; ?>"></textarea>
                        </div>
                        <div class="form-group" id="ketercapaianDiv">
                            <label for="ketercapaian">Ketercapaian</label>
                            <textarea class="form-control" id="ketercapaian" rows="3" name="ketercapaian" placeholder="Masukkan Ketercapaian Standar" required value="<?= $detail_kpi['ketercapaian']; ?>"></textarea>
                        </div>
                        <div class="form-group" id="skorDiv">
                            <label for="exampleFormControlTextarea1">Skor</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="skor" id="skor" value=1>
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="skor" id="skor" value=2>
                                <label class="form-check-label" for="inlineRadio2">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="skor" id="skor" value=3>
                                <label class="form-check-label" for="inlineRadio2">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="skor" id="skor" value=4>
                                <label class="form-check-label" for="inlineRadio2">4</label>
                            </div>
                        </div>
                        <div class="form-group" id="buktiDiv">
                            <label for="exampleFormControlFile1">Bukti Pelaksanaan</label>
                            <input type="file" class="form-control-file" id="bukti" name="bukti">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Your Website 2020</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Bootstrap core JavaScript-->
        <script src="http://localhost:8080/js/jquery.min.js"></script>
        <script src="http://localhost:8080/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


</body>
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
            if ($(this).val() == "Visi Misi Tujuan dan Strategi") {
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
            } else if ($(this).val() == "Tata Pamong, Tata Kelola, dan Kerjasama") {
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
            } else if ($(this).val() == "Mahasiswa") {
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
            } else if ($(this).val() == "Sumber Daya Manusia") {
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
            } else if ($(this).val() == "Keuangan, Sarana dan Prasarana") {
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
            } else if ($(this).val() == "Pendidikan") {
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
            } else if ($(this).val() == "Penelitian") {
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
            } else if ($(this).val() == "Pengabdian kepada Masyarakat (PkM)") {
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
            } else if ($(this).val() == "Luaran dan Capaian Tridharma") {
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

    });
</script>

</html>