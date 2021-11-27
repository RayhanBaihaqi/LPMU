-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2021 at 07:23 AM
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
(39, 9, '2', 'Prestasi mahasiswa di bidang akademik tingkat internasional', 'Prodi', 'BKAL', '0,1% prestasi x jumlah mahasiswa aktif', 'PK', 'Prestasi mahasiswa di bidang akademik tingkat internasional', 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
