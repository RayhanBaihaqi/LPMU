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
        <?php
        if (session()->getFlashData('status')) {
            echo "<h4>" . session()->getFlashData('status') . "</h4><br>";
        }
        ?>
        <h3>Silahkan isi form dibawah ini</h3>
        <br>
        <form action="<?= base_url('detail-save') ?>" method="POST">
            <div class="container">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Pilih tahun ajaran</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="tahun_akademik">
                        <option value="" disabled selected>Pilih tahun</option>
                        <option value="2021/2022">2021/2022</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="prodi_unit">Bagian</label>
                    <select class="form-control" id="prodi_unit" name="prodi_unit">
                        <option value="" disabled selected>Pilih prodi/unit</option>
                        <option value="Prodi">Prodi</option>
                        <option value="Unit">Unit</option>
                    </select>
                </div>

                <div class="form-group" id="nama_prodiDiv">
                    <label for="nama_prodi_unit">Nama prodi</label>
                    <select class="form-control" id="nama_prodi" name="nama_prodi_unit">
                        <option value="" disabled selected>Pilih prodi</option>
                        <option value="Akuntansi">Akuntansi</option>
                        <option value="Manajemen">Manajemen</option>
                        <option value="Psikologi">Psikologi</option>
                        <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
                        <option value="Desain Produk">Desain Produk</option>
                        <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                        <option value="Informatika">Informatika</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Teknik Sipil">Teknik Sipil</option>
                        <option value="Arsitektur">Arsitektur</option>
                    </select>
                </div>

                <div class="form-group" id="nama_unitDiv">
                    <label for="nama_prodi_unit">Nama unit</label>
                    <select class="form-control" id="nama_unit" name="nama_prodi_unit">
                        <option value="" disabled selected>Pilih unit</option>
                        <option value="Rektorat">Rektorat</option>
                        <option value="FTD">Fakultas Teknologi dan Desain</option>
                        <option value="FHB">Fakultas Humaniora dan Bisnis</option>
                        <option value="Center For Urban Studies">Center For Urban Studies</option>
                        <option value="JCAL">Jaya Center Advanced Learning</option>
                        <option value="JSDP">Jaya Softskill Development Program</option>
                        <option value="JLP">Jaya Launch Pad</option>
                        <option value="KOTA">KOTA</option>
                        <option value="Sustainable Development">Sustainable Development</option>
                        <option value="Lembaga Penelitian dan Pengabdian Masyarakat">Lembaga Penelitian dan Pengabdian Masyarakat</option>
                        <option value="LPMU">Lembaga Penjamin Mutu Universitas</option>
                        <option value="Keuangan">Keuangan</option>
                        <option value="Biro PSDM">Biro Pengembangan Sumber Daya Manusia</option>
                        <option value="Publikasi Humas dan Admisi">Publikasi Humas dan Admisi</option>
                        <option value="BKAL">Biro Kemahasiswaan dan Alumni</option>
                        <option value="BP">Biro Pendidikan</option>
                        <option value="Perpustakaan">Perpustakaan</option>
                        <option value="Sarana dan Prasarana">Sarana dan Prasarana</option>
                    </select>
                </div>

                <div class="form-group" id="kriteriaDiv">
                    <label for="kriteria">Kriteria</label>
                    <select class="form-control" id="kriteria" name="kriteria">
                        <option value="Pilih Kriteria" disabled selected>Pilih Kriteria</option>
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
                        <option value="" disabled selected>Pilih Indikator standar Visi Misi</option>
                        <option value="Visi UPJ diturunkan ke dalam visi Fakultas/ Program Studi/Unit Kerja.">Visi UPJ diturunkan ke dalam visi Fakultas/ Program Studi/Unit Kerja</option>
                        <option value="Adanya keterlibatan pemangku kepentingan dalam penyusunan Visi Misi Universitas, Fakultas dan Program Studi. (mekanisme penyusunan VMTS yang terdokumentasi dan melibatkan stakeholder)">Adanya keterlibatan pemangku kepentingan dalam penyusunan Visi Misi Universitas, Fakultas dan Program Studi. (mekanisme penyusunan VMTS yang terdokumentasi dan melibatkan stakeholder)</option>
                        <option value="Sosialisasi Visi-misi dan Nilai-Nilai Jaya (minimal 1x per TA)">Sosialisasi Visi-misi dan Nilai-Nilai Jaya (minimal 1x per TA)</option>
                        </option>
                    </select>
                </div>

                <div class="form-group" id="standar2Div">
                    <label for="standar2">Indikator Standar</label>
                    <select class="form-control" id="standar2" name="standar">
                        <option value="" disabled selected>Pilih Indikator standar Tata Pamong</option>
                        <option value="Adanya struktur organisasi universitas yang mengakomodasi struktur organisasi: Fakultas, Program Studi dan Unit dan memenuhi 5 pilar struktur tata pamong (SK SO, Pejabat dan SK Pengangkatan)">Adanya struktur organisasi universitas yang mengakomodasi struktur organisasi: Fakultas, Program Studi dan Unit dan memenuhi 5 pilar struktur tata pamong (SK SO, Pejabat dan SK Pengangkatan)</option>
                        <option value="Adanya kegiatan-kegiatan yang dilakukan sebagai bentuk hasil kerjasama, yang memenuhi 3 aspek
                        (> 5 kegiatan, 1 kegiatan internasional dan memenuhi 3 aspek)">Adanya kegiatan-kegiatan yang dilakukan sebagai bentuk hasil kerjasama, yang memenuhi 3 aspek
                            (> 5 kegiatan, 1 kegiatan internasional dan memenuhi 3 aspek)</option>
                        <option value="Adanya MoU kerjasama UPJ Bidang Tridharma (> 2/tahun MoU baru)">Adanya MoU kerjasama UPJ Bidang Tridharma (> 2/tahun MoU baru)</option>
                        <option value="Adanya MoU kerjasama UPJ Tingkat internasional (> 1/tahun MoU baru)">Adanya MoU kerjasama UPJ Tingkat internasional (> 1/tahun MoU baru)</option>
                        <option value="Adanya MoU kerjasama UPJ Tingkat nasional (> 2/tahun MoU baru)">Adanya MoU kerjasama UPJ Tingkat nasional (> 2/tahun MoU baru)</option>
                        <option value="Monitoring terhadap tercapainya standar">Monitoring terhadap tercapainya standar (Terlaksananya monitoring dan evaluasi implementasi SN DIKTI dan SPT 1x/semester)</option>
                        <option value="Terlaksananya Proses PPEPP 3 SN DIKTI dan 2 SPT UPJ">Terlaksananya Proses PPEPP 3 SN DIKTI dan 2 SPT UPJ (1x/TA)</option>
                        <option value="Evaluasi Pendidikan dan pengajaran">Evaluasi Pendidikan pengajaran (1x/TA)</option>
                        <option value="Evaluasi Penelitian">Evaluasi Penelitian (1x/TA)</option>
                        <option value="Evaluasi Pengabdian Kemasyarakatan">Evaluasi Pengabdian Masyarakat (1x/TA)</option>
                        <option value="Evaluasi Tata Kelola">Evaluasi Tata Kelola (1x/TA)</option>
                        <option value="Evaluasi Kemahasiswaan dan Alumni">Evaluasi Kemahasiswaan dan Alumni (1x/TA)</option>
                        <option value="Adanya evaluasi dosen oleh mahasiswa (EDOM) yang diisi oleh mahasiswa minimal 1 (satu) kali dalam 1 (satu) semester.">Adanya evaluasi dosen oleh mahasiswa (EDOM) yang diisi oleh mahasiswa minimal 1 (satu) kali dalam 1 (satu) semester. (2x/semester)</option>
                        <option value="Pelaporan proses pembelajaran, berupa kompilasi laporan proses pembelajaran yang diperoleh dari pihak terkait">Pelaporan proses pembelajaran, berupa kompilasi laporan proses pembelajaran yang diperoleh dari pihak terkait (1x/semester)</option>
                        <option value="Laporan Akademik Program Studi dan unit setiap TA.">Laporan Akademik Program Studi dan unit setiap TA. (1x per semester)</option>
                        <option value="Adanya laporan evaluasi tahunan berdasarkan matriks penilaian instrumen akreditasi yang berlaku serta ada tindak lanjut hasilnya.">Adanya laporan evaluasi tahunan berdasarkan matriks penilaian instrumen akreditasi yang berlaku serta ada tindak lanjut hasilnya. (1x/semester)</option>
                        <option value="Universitas melakukan akreditasi Internasional setelah mendapatkan peringkat akreditasi tertinggi dari BAN-PT/LAM dan telah memenuhi persyaratan yang ditetapkan oleh Lembaga Akreditasi internasional yang dituju.">Universitas melakukan akreditasi Internasional setelah mendapatkan peringkat akreditasi tertinggi dari BAN-PT/LAM dan telah memenuhi persyaratan yang ditetapkan oleh Lembaga Akreditasi internasional yang dituju.</option>
                        <option value="Peningkatan Akreditasi Perguruan Tinggi (APT 3.0)">Peningkatan Akreditasi Perguruan Tinggi (APT 3.0)</option>
                        <option value="Peningkatan Akreditasi Program Studi (APS 4.0)">Peningkatan Akreditasi Program Studi (APS 4.0)</option>
                        <option value="Adanya program pasca sarjana (S2)">Adanya program pasca sarjana (S2)</option>

                    </select>
                </div>

                <div class="form-group" id="standar3Div">
                    <label for="standar3">Indikator Standar</label>
                    <select class="form-control" id="standar3" name="standar">
                        <option value="" disabled selected>Pilih Indikator standar Mahasiswa</option>
                        <option value="Program Studi membantu panitia penerimaan mahasiswa baru dalam pelaksanaan dan penilaian seleksi persyaratan khusus. (Rasio maba pendaftar : diterima > 5)">Program Studi membantu panitia penerimaan mahasiswa baru dalam pelaksanaan dan penilaian seleksi persyaratan khusus. (Rasio maba pendaftar : diterima > 1:5)</option>
                        <option value="Adanya evaluasi tahunan terhadap Program Studi dengan jumlah mahasiswa baru di bawah 30 selama 3 tahun berturut-turut.">Adanya evaluasi tahunan terhadap Program Studi dengan jumlah mahasiswa baru di bawah 30 selama 3 tahun berturut-turut. (peningkatan animo calon maba > 10% per TA)</option>
                        <option value="Adanya kegiatan dan usaha-usaha serta bukti peningkatan animo calon mahasiswa.">Adanya kegiatan dan usaha-usaha serta bukti peningkatan animo calon mahasiswa. (10 kegiatan marketing/TA)</option>
                        </option>
                        <option value="Pencapaian target mahasiswa baru (non blended learning)">Pencapaian target mahasiswa baru (non blended learning) (peningkatan intake maba > 10% per TA)</option>
                        <option value="Jumlah student body aktif per semester">Jumlah student body aktif per semester (>95%)</option>
                        <option value="Jumlah mahasiswa asing">Jumlah mahasiswa asing (> 1% student body)</option>
                        <option value="Jumlah maksimal mahasiswa bimbingan setiap dosen adalah 20 orang mahasiswa setiap semester.">Jumlah maksimal mahasiswa bimbingan setiap dosen adalah 20 orang mahasiswa setiap semester. (1 dosen memberikan bimbingan terhadap max 20 mahasiswa)</option>
                        <option value="Jumlah pertemuan Pembimbingan Akademik minimal 4 (empat) kali setiap semester.">Jumlah pertemuan Pembimbingan Akademik minimal 4 (empat) kali setiap semester.(4x per semester)</option>
                        <option value="Sertifikat kompetensi diberikan kepada lulusan yang mengikuti dan lulus ujian kompetensi">Sertifikat kompetensi diberikan kepada lulusan yang mengikuti dan lulus ujian kompetensi (Lulusan yg memiliki sertifat kompetensi >50%)</option>
                        <option value="Skor TOEIC lulusan ≥ 550">Skor TOEIC lulusan ≥ 550 (Persentase lulusan yang memiliki Sertifikasi TOEIC dengan minimal skor 550 ≥ 50%)</option>
                        <option value="Adanya Produk wirausaha berbasis inovasi (Jumlah produk wirausaha berbasis inovasi)">Adanya Produk wirausaha berbasis inovasi (2 produk)</option>
                    </select>
                </div>

                <div class="form-group" id="standar4Div">
                    <label for="standar4">Indikator Standar</label>
                    <select class="form-control" id="standar4" name="standar">
                        <option value="" disabled selected>Pilih Indikator standar Sumber Daya Manusia</option>
                        <option value="Jumlah dosen tetap setiap Program Studi minimal 8 orang">Jumlah dosen tetap setiap Program Studi minimal 8 orang * (NDTPS > 12)</option>
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
                        <option value="" disabled selected>Pilih Indikator standar Keuangan, Sarana, dan Prasarana</option>
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
                        <option value="" disabled selected>Pilih Indikator standar Pendidikan</option>
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
                        <option value="" disabled selected>Pilih Indikator standar Penelitian</option>
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
                        <option value="" disabled selected>Pilih Indikator standar Pengabdian Masyarakat</option>
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
                        <option value="" disabled selected>Pilih Indikator standar luaran dan capaian tridharma</option>
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
                        <option value="Pilih Kriteria" disabled selected>Pilih Jabatan PIC</option>
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
                        <option value="Pilih Kriteria" disabled selected>Pilih Jabatan PIC</option>
                        <option value="Kabag">Kepala Bagian</option>
                        <option value="Kasubbag">Kepala Sub Bagian</option>
                        <option value="Staff">Staff</option>

                    </select>
                </div>

                <div class="form-group" id="nama_picDiv">
                    <label for="nama_pic">Nama PIC</label>
                    <input type="text" class="form-control" id="nama_pic" name="nama_pic" placeholder="Masukkan Nama PIC">
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
                <br><br>

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
        $("kriteria").trigger("change");

    });
</script>

</html>