-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2021 at 11:07 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lpmu`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_butir_kpi`
--

CREATE TABLE `tabel_butir_kpi` (
  `id` int(11) NOT NULL,
  `idkpi` int(11) NOT NULL,
  `angka_butir` varchar(20) NOT NULL,
  `nama_butir` text NOT NULL,
  `unit_utama` varchar(50) NOT NULL,
  `unit_pendukung` varchar(50) NOT NULL,
  `target` text NOT NULL,
  `kategori` enum('PK','OPS','INV') NOT NULL,
  `kegiatan` text NOT NULL,
  `bobot` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_butir_kpi`
--

INSERT INTO `tabel_butir_kpi` (`id`, `idkpi`, `angka_butir`, `nama_butir`, `unit_utama`, `unit_pendukung`, `target`, `kategori`, `kegiatan`, `bobot`) VALUES
(1, 1, '1', 'Visi UPJ diturunkan ke dalam visi Fakultas/ Program Studi/Unit Kerja. \r\n', 'Fakultas/Prodi', 'LPMU', 'Visi UPJ diturunkan dalam Visi Prodi', 'OPS', 'korelasi VMTS Universitas dan Prodi', 2),
(2, 1, '2', 'Adanya keterlibatan pemangku kepentingan dalam penyusunan Visi Misi Universitas, Fakultas dan Program Studi. \r\n', 'Fakultas/Prodi', 'LPMU', 'Dokumentasi penyusunan VMTS melibatkan stakeholders', 'PK', 'mekanisme penyusunan VMTS yang terdokumentasi dan melibatkan stakeholder', 2),
(3, 1, '3', 'Adanya sosialisasi Visi-misi dan Nilai-Nilai Jaya kepada mahasiswa dan pemangku kepentingan melalui presentasi, video animasi, mars dan hymne universitas serta bentuk lain yang dipandang perlu ', 'Fakultas/Prodi', 'YPJ dan HCD', '1x/TA', 'PK', 'sosialisasi Visi-misi minimal 1x per TA\r\n', 1),
(4, 2, '1', 'Adanya struktur organisasi universitas yang mengakomodasi struktur organisasi: Fakultas, Program Studi dan Unit dan memenuhi 5 pilar struktur tata pamong', 'Rektorat', 'LPMU', 'SK SO Lengkap', 'PK', 'SK SO, Pejabat dan SK Pengangkatan', 0.25),
(5, 2, '2', '\"Adanya kegiatan-kegiatan yang dilakukan sebagai bentuk hasil kerjasama, yang memenuhi 3 aspek :\r\na. Memberikan manfaat prodi di bidang Tridharma\r\nb. Memberikan peningkatan kinerja Tridharma dan fasilitas pendukung prodi\r\nc. Memberikan kepuasan pada mitra industri/lainnya\r\nAda keberlanjutan kerjasama dan hasilnya\"', 'Prodi', 'KHI', '> 2 kegiatan ', 'PK', '> 2 kegiatan (nasional dan atau internasional) dari MoA/smst/prodi\r\n', 2),
(6, 2, '3', 'Adanya MoU kerjasama UPJ Bidang Tridharma', 'Prodi', 'KHI', '3 MoU', 'PK', '> 2 MoU/tahun', 1),
(7, 2, '4', 'Adanya MoU kerjasama UPJ Tingkat internasional', 'Prodi', 'KHI', '1 MoU', 'PK', '> 1 MoU/tahun\r\n', 1.5),
(8, 2, '5', 'Adanya MoU kerjasama UPJ Tingkat nasional', 'Prodi', 'KHI', '2 MoU', 'PK', '> 2 MoU/tahun\r\n', 1),
(9, 2, '6', 'Monitoring terhadap tercapainya standar\r\n', 'GKM dan UPM', 'LPMU', '1x/smt', 'PK', 'Terlaksananya monitoring dan evaluasi implementasi SN DIKTI dan SPT', 2),
(10, 2, '7', 'Terlaksananya Proses PPEPP 3 SN DIKTI dan 2 SPT UPJ', 'GKM dan UPM', 'LPMU', '1x per smt atau per TA', 'PK', 'Proses PPEPP 3 SN DIKTI dan 2 SPT UPJ', 2.75),
(11, 2, '8', 'Adanya evaluasi dosen oleh mahasiswa (EDOM) yang diisi oleh mahasiswa minimal 1 (satu) kali dalam 1 (satu) semester. ', 'BP', 'ICT', '2x per semester', 'PK', 'Adanya evaluasi dosen oleh mahasiswa (EDOM) 2x per semester', 0.5),
(12, 2, '9', 'Pelaporan proses pembelajaran, berupa kompilasi laporan proses pembelajaran yang diperoleh dari pihak terkait ', 'Prodi', 'LPMU', '1x per semester', 'PK', 'Pelaporan proses pembelajaran 1x per semester', 0.5),
(13, 2, '10', 'Laporan Akademik Program Studi dan unit setiap TA.', 'Prodi dan Unit', 'LPMU', '1x per semester', 'PK', 'Laporan akademik 1x per semester', 1),
(14, 2, '11', 'Adanya laporan evaluasi tahunan berdasarkan matriks penilaian instrumen akreditasi yang berlaku serta ada tindak lanjut hasilnya. ', 'Prodi', 'UPM Fakultas', '1x per semester', 'PK', 'Adanya laporan evaluasi tahunan 1x per semester', 0.5),
(18, 2, '12', 'Universitas melakukan akreditasi Internasional setelah mendapatkan peringkat akreditasi tertinggi dari BAN-PT/LAM dan telah memenuhi persyaratan yang ditetapkan oleh Lembaga Akreditasi internasional yang dituju. ', 'Prodi', 'LPMU', '> 5 Prodi terakreditasi Internasional', 'PK', 'roadmap akreditasi internasional (Dokumen akreditasi internasional tersusun)', 2),
(19, 2, '13', 'Peningkatan Akreditasi Perguruan Tinggi (APT 3.0)', 'ALL', '', 'Akreditasi Institusi Meningkat', 'PK', 'Peningkatan Akreditasi Perguruan Tinggi (APT 3.0)', 0),
(20, 2, '14', 'Peningkatan Akreditasi Program Studi (APS 4.0)', 'Prodi', 'Unit Kerja', 'Jumlah Prodi terakreditasi A', 'PK', 'Dokumen Re Akreditasi/ISK sesuai Instrumen APS 4.0 selesai tersusun', 0),
(21, 2, '15', 'Adanya program pasca sarjana (S2)', 'Prodi', 'Satgas', 'Jumlah prodi S2 baru yang diusulkan', 'PK', '', 0),
(22, 3, '1', 'Program Studi membantu panitia penerimaan mahasiswa baru dalam pelaksanaan dan penilaian seleksi persyaratan khusus.', 'Prodi', 'MPH', 'Rasio maba pendaftar : diterima = 1:2\r\n\r\n', 'PK', 'Program Studi membantu panitia penerimaan mahasiswa baru dalam pelaksanaan dan penilaian seleksi persyaratan khusus.\r\n', 1),
(23, 3, '2', 'Adanya evaluasi tahunan terhadap Program Studi dengan jumlah mahasiswa baru di bawah 30 selama 3 tahun berturut-turut. ', 'Prodi', 'MPH', '> 10%', 'PK', 'peningkatan animo calon maba > 10% per TA', 0.2),
(24, 3, '3', 'Adanya kegiatan dan usaha-usaha serta bukti peningkatan animo calon mahasiswa. ', 'Prodi', 'MPH', '10 kegiatan marketing/TA', 'PK', 'Kegiatan dan usaha-usaha serta bukti peningkatan animo calon mahasiswa. ', 1),
(26, 4, '1', 'Jumlah dosen tetap setiap Program Studi minimal 6 (enam) orang', 'Prodi', 'HCD', '6/prodi', 'PK', '', 0.5),
(27, 4, '2', '10% peningkatan jumlah dosen S3 setiap 2 (dua) tahun. \r\n', 'Prodi', 'HCD', '20% dosen S3', 'PK', '', 1),
(28, 4, '3', '20% dosen memiliki Jabatan Akademik Dosen (JAD) minimal 2 (dua) tahun. ', 'Prodi', 'HCD', '50% GB-LK-L', 'PK', '', 0.5),
(29, 5, '1', 'Biaya operasional pendidikan', 'Prodi', 'Keuangan', '> 10 juta', 'PK', 'DOP > 20juta/mhsw/tahun', 0.5),
(30, 5, '2', 'Dana penelitian dosen', 'Prodi', 'Keuangan', '> 5 juta\r\n', 'PK', 'rata-rata Dana penelitian dosen > 10 juta Rp per 3 tahun terakhir\r\n', 1.5),
(31, 6, '1', 'Terlaksananya peninjauan RPS minimal 1 (satu) kali setiap Tahun akademik guna penyesuaian dengan perkembangan ilmu pengetahuan dan teknologi', 'Prodi', 'Fakultas', '1 (satu) kali/TA', 'PK', 'peninjauan RPS minimal 1 (satu) kali setiap Tahun akademik', 1),
(32, 6, '2', 'Kegiatan evaluasi tahunan pelaksanaan kurikulum.', 'Prodi', 'Fakultas', '1 (satu) kali/TA', 'PK', 'Kegiatan evaluasi tahunan pelaksanaan kurikulum.', 1),
(33, 7, '1', 'Adanya payung penelitian UPJ yang fokus pada kajian urban', 'LP2M', 'Prodi', 'Rencana induk dan renstra (termasuk Roadmap) penelitian Urban', 'PK', 'Rencana induk dan renstra (termasuk Roadmap) penelitian Urban', 0),
(34, 7, '2', 'Adanya roadmap penelitian yang mendukung payung penelitian universitas di bidang kajian urban dengan kekhasan Prodi.', 'Prodi', 'LP2M', 'Ada Roadmap Penelitian Hingga 2025', 'PK', 'Roadmap penelitian Prodi dan Fakultas', 1),
(35, 8, '1', 'Adanya payung Pengabdian kepada Masyarakat UPJ yang fokus pada kajian urban', 'LP2M', 'Prodi', 'Rencana induk dan renstra (termasuk Roadmap) pengmas Urban', 'PK', 'Rencana induk dan renstra (termasuk Roadmap) pengmas Urban', 0),
(36, 8, '2', 'Adanya roadmap pengmas yang mendukung payung pengmas universitas di bidang kajian urban dengan kekhasan Prodi', 'Prodi', 'LP2M', 'Ada Roadmap Pengabdian kepada Masyarakat hingga 2025', 'PK', 'Roadmap pengmas Prodi dan Fakultas', 1),
(37, 8, '3', 'Dosen melibatkan mahasiswa dalam kegiatan pengabdian kepada masyarakat', 'Prodi', 'LP2M', 'judul Pengabdian dosen melibatkan mahasiswa > 20%  ', 'PK', 'Dosen melibatkan mahasiswa dalam kegiatan pengabdian kepada masyarakat', 1),
(38, 9, '1', 'Rerata IPK lulusan', 'Prodi', 'BP', 'Rerata IPK lulusan > 3,25', 'PK', 'Rerata IPK lulusan', 1),
(39, 9, '2', 'Prestasi mahasiswa di bidang akademik tingkat internasional', 'Prodi', 'BKAL', '0,1% prestasi x jumlah mahasiswa aktif', 'PK', 'Prestasi mahasiswa di bidang akademik tingkat internasional', 1),
(43, 9, '3', 'Prestasi mahasiswa di bidang akademik tingkat nasional', 'Prodi', 'BKAL', '>1%', 'PK', '', 0.5),
(45, 3, '4', 'Pencapaian target mahasiswa baru (non blended learning)', 'MPH', 'Prodi', '1140', 'PK', 'peningkatan intake maba > 10% per TA', 1.5),
(46, 3, '5', 'Jumlah student body aktif per semester', 'Prodi', 'BP', '>95%', 'PK', '', 0.5),
(47, 3, '6', 'Jumlah mahasiswa asing', 'Prodi', 'KHI', '> 1% student body', 'PK', 'Jumlah mahasiswa asing >!%', 1),
(48, 3, '7', 'Jumlah maksimal mahasiswa bimbingan setiap dosen adalah 20 orang mahasiswa setiap semester.', 'Prodi', 'BP', 'Rasio 1 : 20', 'PK', 'Dosen melakukan bimbingan thdp 20 orang mahasiswa setiap semester.', 0.25),
(49, 3, '8', 'Jumlah pertemuan Pembimbingan Akademik minimal 4 (empat) kali setiap semester.', 'Prodi', 'BP', '4x per semester', 'PK', 'Pembimbingan Akademik minimal 4 (empat) kali setiap semester.', 0.25),
(50, 3, '9', 'Sertifikat kompetensi diberikan kepada lulusan yang mengikuti dan lulus ujian kompetensi ', 'JCAL', 'Prodi', '≥50%', 'PK', 'Sertifikasi kompetensi', 0.25),
(51, 3, '10', 'Skor TOEIC lulusan ≥ 550 ', 'Prodi', 'JCAL', '≥50%', 'PK', 'Persentase lulusan yang memiliki Sertifikasi TOEIC dengan skor ≥ 550', 0.5),
(52, 3, '11', 'Adanya Produk wirausaha berbasis inovasi ', 'JLP', 'Prodi', '2', 'PK', 'wirausaha berbasis inovasi', 1),
(53, 4, '4', 'Jumlah dosen tetap memiliki rasio 1:25 (eksakta) dan 1:35 (sosial) untuk setiap Program Studi.', 'Prodi', 'BP', '< 25 (FTD); < 35 (FHB)', 'PK', 'Jumlah dosen tetap', 0.25),
(54, 4, '5', 'Jumlah maksimal mahasiswa bimbingan Skripsi/Tugas Akhir (TA) setiap dosen adalah 10 (sepuluh) orang mahasiswa per semester.', 'Prodi', 'BP', ' 1:10', 'PK', 'Bimbingan', 0.5),
(55, 4, '6', 'Beban Kinerja Dosen (BKD) minimal 12 sks per semester untuk pendidikan dan pengajaran. ', 'Prodi', 'Fakultas, HCD', '12 sks/semester/dosen', 'PK', 'Jumlah Beban Kinerja Dosen (BKD)', 0.5),
(56, 4, '7', 'Beban Kinerja Dosen (BKD) minimal 5 (lima) sks per semester untuk kegiatan Penelitian, Pengabdian kepada masyarakat dan kegiatan penunjang lainnya. ', 'Prodi', 'Fakultas, HCD, LP2M', '5 sks/semester/dosen', 'PK', 'Jumlah Beban Kinerja Dosen (BKD)', 1),
(57, 4, '8', 'Pelaporan dosen, berupa Beban Kinerja Dosen (BKD). ', 'Prodi', 'HCD', '1x per semester', 'PK', 'Pelaporan dosen, berupa Beban Kinerja Dosen (BKD). ', 0.5),
(58, 4, '9', 'Jumlah dosen tidak tetap setiap Program Studi', 'Prodi', 'HCD', '<20%', 'PK', '', 0.5),
(59, 4, '10', 'Jumlah dosen tetap minimal 80% dari jumlah seluruh dosen.', 'Prodi', 'HCD', '>70%', 'PK', '', 0.25),
(60, 4, '11', 'Dosen mengikuti seminar sebagai pembicara/narasumber minimal 1 (satu) kali per semester. ', 'Prodi', 'HCD', '12', 'PK', 'dosen jadi pembicara/narasumber seminar', 0.5),
(61, 4, '12', 'Publikasi dalam jurnal nasional terakreditasi minimal 1 artikel per tahun per dosen.', 'Prodi', 'LP2M', '6', 'PK', 'Publikasi', 2),
(62, 4, '13', 'Publikasi dalam jurnal/media masa nasional', 'Prodi', 'LP2M', '12', 'PK', 'Publikasi', 0.5),
(63, 4, '14', 'Publikasi dalam jurnal internasional terindeks scopus minimal 1 artikel per 2 tahun per dosen.', 'Prodi', 'LP2M', '3', 'PK', '', 2.5),
(64, 4, '15', 'Publikasi dalam seminar/media masa internasional', 'Prodi', 'LP2M', '3', 'PK', '', 1.5),
(65, 4, '16', 'Adanya artikel karya ilmiah yang disitasi (RS = NAS/NDTPS)', 'Prodi', 'LP2M', '10%', 'PK', '', 2),
(66, 4, '17', 'Adanya hasil penelitian yang dipatenkan minimal 1 paten dalam 5 tahun.', 'Prodi', 'LP2M', '1', 'PK', 'Penelitian', 2),
(67, 4, '18', 'Adanya hasil penelitian/PkM dosen yang mendapat pengakuan HKI ', 'Prodi', 'LP2M', '1', 'PK', 'hasil penelitian/PkM dosen yang mendapat pengakuan HKI ', 0.5),
(68, 4, '19', 'Seluruh dosen memiliki Jabatan Akademik Dosen Asisten Ahli. ', 'Prodi', 'HCD', '50%', 'PK', '', 0.5),
(69, 4, '20', '> 50% dosen memiliki jabatan akademik dosen Lektor pada tahun 2035. ', 'Prodi', 'HCD', '10%', 'PK', '', 1),
(70, 4, '21', 'Dosen mengikuti kegiatan pelatihan/ workshop/seminar minimal 1 (satu) kali per semester. ', 'Prodi', 'HCD', '1/smt/dosen', 'PK', '', 0.5),
(71, 4, '22', '10% peningkatan jumlah dosen GB atau LK', 'Prodi', 'HCD', '1', 'PK', '', 2),
(72, 4, '23', '>20% dosen tetap memiliki sertifikat pendidik/sertifikasi dosen. ', 'Prodi', 'HCD', '5 orang', 'PK', '', 1),
(73, 4, '24', 'Seluruh dosen memiliki kemampuan berkomunikasi dalam Bahasa Inggris dengan nilai TOEIC minimal 550 pada TA 2025. ', 'Prodi', 'HCD', '50%', 'PK', '', 0.5),
(74, 4, '25', 'Kepemimpinan publik dosen', 'Prodi', 'Fakultas', '2', 'PK', '', 1),
(75, 4, '26', 'Keikutsertaan dalam lomba dosen berprestasi tingkat nasional, atau lomba lain setara, atau lomba tingkat internasional', 'Prodi', 'HCD, LPMU', '1/prodi', 'PK', '', 0.5),
(76, 4, '26', 'Turnover dosen Prodi rendah', 'Prodi', 'HCD', '< 1%', 'PK', 'Persentase turnover dosen < 1%/TA', 1),
(77, 5, '3', 'Dana pengabdian kepada masyarakat dosen', 'Prodi', 'Keuangan', '> 3 juta', 'PK', 'Dana pengabdian kepada masyarakat', 1),
(78, 5, '4', 'Seluruh Program Studi/Unit Kerja menyusun Rencana Kegiatan dan Anggaran Tahunan (RKAT) yang disetujui oleh Rektor. ', 'Prodi', 'Keuangan', '1x/TA', 'PK', 'Penyusunan RKAT', 0.25),
(79, 5, '5', 'RKAT diserahkan tepat waktu', 'Prodi', 'Keuangan', '100% tepat waktu', 'PK', 'Penyerahan RKAT', 0.25),
(80, 5, '6', 'Adanya income generating unit yang memberikan pendapatan kepada universitas. ', 'JCAL, CUS, JLP, Umum, Prodi', 'Keuangan', '> 5% DOP', 'PK', '', 1.5),
(81, 6, '3', 'Setiap Program Studi membuat laporan setiap semester yang mencakup: Pelaporan kompetensi lulusan tentang kesesuaian kompetensi bidang pekerjaan lulusan. ', 'Prodi', 'LPMU', '1 kali/semester', 'PK', '', 1),
(82, 6, '4', 'Tersedianya Rencana Pembelajaran Semester (RPS) dan RTM untuk setiap mata kuliah maksimal 1 bulan sebelum perkuliahan dimulai', 'Prodi', 'BP', '1 RPS/MK', 'PK', 'RPS', 1),
(83, 6, '5', 'Pelaporan isi pembelajaran, yaitu daftar RPS termasuk peninjauan/ perbaikannya apabila dilakukan. ', 'Prodi', 'Fakultas', '1 kali/smt', 'PK', '', 0.25),
(84, 6, '6', 'Metode pembelajaran dinyatakan secara jelas dalam RPS dan dilaksanakan sesuai rencana', 'Prodi', 'UPM Fakultas', '100%', 'PK', 'Tiap RPS mecantumkan metode pembelajaran', 0.25),
(85, 6, '7', 'RPS, RTM dan slide untuk 14 pertemuan tersedia dan diunggah di sistem Open course Ware UPJ', 'Prodi', 'BP', '100%', 'PK', '', 1),
(86, 6, '8', 'Penyerahan jadwal kuliah tepat waktu', 'Prodi', 'BP', '100% tepat waktu', 'PK', '', 1),
(87, 6, '9', 'Penyerahan penilaian hasil belajar (UTS dan UAS) tepat waktu', 'Prodi', 'BP', '100% tepat waktu', 'PK', '', 1),
(88, 6, '10', 'Terjadi proses tatap muka mahasiswa dengan dosen minimal 14 kali dalam 1 (satu) semester untuk 1 (satu) mata kuliah. ', 'Prodi', 'BP', '100%', 'PK', '', 0.5),
(89, 6, '11', 'Pelaksanaan pembelajaran dilakukan secara on-line dan off-line dalam bentuk audiovisual terdokumentasi', 'Prodi', 'BP', '2', 'PK', '', 1.5),
(90, 6, '12', 'Jumlah pertemuan pembimbingan Skripsi/Tugas Akhir (TA) minimal 8 (delapan) kali per semester.', 'Prodi', 'BP', '>= 8 x', 'PK', '', 0.25),
(91, 6, '13', 'Penilaian dimasukkan dalam sistem informasi akademik dan dapat diakses oleh pemangku kepentingan. ', 'Prodi', 'BP', '100% tepat waktu', 'PK', '100% input nilai tepat waktu', 1.5),
(92, 6, '14', 'Proses penilaian Skripsi/Tugas Akhir (TA) dilaksanakan sesuai dengan pedoman penilaian Skripsi/Tugas Akhir (TA) yang ditetapkan oleh Fakultas/Program Studi. ', 'Fakultas', 'Prodi', 'Ada Pedoman Skripsi/TA', 'PK', '', 0.25),
(93, 6, '15', 'Proses pembelajaran harus menggunakan metode pembelajaran yang efektif sesuai karakteristik mata kuliah berupa kuliah, responsi/tutorial, seminar dan praktek/praktikum/simulasi. ', 'Prodi', 'UPM Fakultas', 'JP/JB > 20%', 'PK', '', 0.5),
(94, 6, '16', 'Terselenggaranya kegiatan penunjang suasana akademik secara konsisten di setiap Program Studi. ', 'Prodi', 'Fakultas, JCAL, CUS, JLP', '12 kegiatan', 'PK', '', 1.5),
(95, 6, '17', 'Adanya evaluasi/survei kepuasan mahasiswa yang dilakukan 1 (satu) kali dalam 1 (satu) tahun akademik. ', 'UPJ Fakultas', 'Prodi', 'TKM > 75%', 'PK', '', 0.5),
(96, 6, '18', 'Analisis dan tindak lanjut survei kepuasan mahasiswa', 'UPJ Fakultas', 'Prodi', '2x/smt', 'PK', 'Survey', 1),
(97, 7, '3', 'Dosen melibatkan mahasiswa dalam kegiatan penelitian dan diberikan tugas sebagai tenaga perbantuan atau menjadi penanggung jawab sesuai dengan kemampuannya. ', 'Prodi', 'LP2M', '20%', 'PK', 'penelitian', 1),
(98, 7, '4', 'Kegiatan penelitian dengan Sumber pembiayaan luar negeri', 'Prodi', 'LP2M', '1', 'PK', '', 2),
(99, 7, '5', 'Kegiatan penelitian dengan Sumber pembiayaan dalam negeri', 'Prodi', 'LP2M', '6', 'PK', 'Penelitian', 1),
(100, 7, '6', 'Penelitian dan Pengabdian kepada Masyarakat yang dilakukan dalam proses pembelajaran sesuai dengan Pedoman Penelitian dan Pengabdian kepada Masyarakat UPJ yang berlaku. ', 'Prodi', 'LP2M', '1 MK/Prodi', 'PK', '', 0.75),
(101, 7, '7', 'Karya inovasi dari kegiatan penelitian', 'Prodi', 'LP2M', '1', 'PK', '', 1),
(102, 7, '8', 'Peningkatan skor SINTA dan atau H-index per dosen', 'Prodi', 'LP2M', 'skor Sinta naik > 25%', 'PK', '', 0.75),
(103, 7, '9', 'Jumlah joint research (nasional/internasional) dengan eksternal', 'Prodi', 'LP2M', '> 1', 'PK', '', 1),
(104, 8, '4', 'Kegiatan pengabdian dengan sumber pembiayaan luar negeri', 'Prodi', 'LP2M', '1', 'PK', '', 1.5),
(105, 8, '5', 'Kegiatan pengabdian dengan sumber pembiayaan dalam negeri', 'Prodi', 'LP2M', '1 kegiatan/dosen', 'PK', '', 1),
(106, 8, '6', 'Adanya pengmas yang berdampak nasional (RPTRA, Pemda, Pemprov, dsb)', 'Prodi', 'LP2M', '1', 'PK', '', 0.5),
(107, 9, '4', 'Prestasi mahasiswa di bidang non akademik tingkat internasional', 'Prodi', 'BKAL', '>0,2%', 'PK', '', 1),
(108, 9, '5', 'Prestasi mahasiswa di bidang non akademik tingkat nasional', 'Prodi', 'BKAL', '>2%', 'PK', '', 0.25),
(109, 9, '6', 'Lama masa studi rerata lulusan', 'Prodi', 'BP', '< 4,5 th', 'PK', '', 1),
(110, 9, '7', 'Jumlah lulusan tepat waktu (< 8 semester)', 'Prodi', 'BP', '> 50% lulus tepat waktu', 'PK', '', 1),
(111, 9, '8', 'Setiap mahasiswa yang lulus diberikan ijazah, gelar dan Surat Keterangan Pendamping Ijazah (SKPI) dan transkrip JSDP. ', 'BP', 'Prodi', '> 85%', 'PK', '', 0.25),
(112, 9, '9', 'Adanya survei terhadap pengguna lulusan mengenai kualitas lulusan, minimal setiap 2 (dua) tahun.', 'BKAL', 'Prodi', '> 1 x / TA', 'PK', '', 0.5),
(113, 9, '10', 'Rata-rata masa tunggu lulusan memperoleh pekerjaan atau menciptakan pekerjaan adalah kurang dari 3 (tiga) bulan. ', 'BKAL', 'Prodi', '90% < 6 bulan', 'PK', '', 1),
(114, 9, '11', 'Persentase lulusan yang memiliki bidang kerja tetap sesuai dengan bidang ilmu mencapai 80%. ', 'BKAL', 'Prodi', '> 65% sesuai', 'PK', '', 0.75),
(115, 9, '12', 'Persentase lulusan yang bekerja di perusahaan multinasional/internasional', 'BKAL', 'Prodi', '>5%', 'PK', '', 1),
(116, 9, '13', 'Persentase lulusan yang bekerja di perusahaan nasional/wirausaha berizin', 'BKAL', 'Prodi', '>20%', 'PK', '', 0.5),
(117, 9, '14', 'Hasil penilaian pengguna terhadap lulusan minimal baik', 'BKAL', 'Prodi', '> 80 % minimal \'baik\'', 'PK', '', 0.5),
(118, 9, '15', 'Publikasi mahasiswa dalam prosding atau jurnal  Tingkat internasional', 'Prodi', 'LP2M', '1', 'PK', '', 1),
(119, 9, '16', 'Publikasi mahasiswa dalam prosding atau jurnal  Tingkat nasional', 'Prodi', 'LP2M', '10', 'PK', '', 0.25),
(120, 9, '17', 'Adanya hasil penelitian/PkM mahasiswa yang mendapat pengakuan HKI ', 'Prodi', 'LP2M', '1', 'PK', '', 0.5),
(121, 9, '18', 'Adanya proposal sesuai standar panduan PKM yang diajukan dengan kebaharuan, kreativitas dan inovasi yang telah terseleksi dengan baik', 'Prodi', 'BKAL', '10/prodi', 'PK', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_butir_kpi`
--
ALTER TABLE `tabel_butir_kpi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idkpi` (`idkpi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_butir_kpi`
--
ALTER TABLE `tabel_butir_kpi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tabel_butir_kpi`
--
ALTER TABLE `tabel_butir_kpi`
  ADD CONSTRAINT `tabel_butir_kpi_ibfk_1` FOREIGN KEY (`idkpi`) REFERENCES `tabel_kpi` (`idkpi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
