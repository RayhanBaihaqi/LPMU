-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2021 at 04:29 AM
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
CREATE DATABASE IF NOT EXISTS `db_lpmu` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_lpmu`;

-- --------------------------------------------------------

--
-- Table structure for table `detail_rkat`
--

CREATE TABLE `detail_rkat` (
  `id` int(20) NOT NULL,
  `kategori` varchar(10) NOT NULL,
  `anggaranGenap` int(100) NOT NULL,
  `anggaranGasal` int(100) NOT NULL,
  `no_kegiatan` varchar(50) NOT NULL,
  `indikator` varchar(255) NOT NULL,
  `target` varchar(100) NOT NULL,
  `nama_kegiatan` varchar(255) NOT NULL,
  `kpi` varchar(50) NOT NULL,
  `butir` varchar(50) NOT NULL,
  `total_perkegiatan` varchar(100) NOT NULL,
  `id_set` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_rkat`
--

INSERT INTO `detail_rkat` (`id`, `kategori`, `anggaranGenap`, `anggaranGasal`, `no_kegiatan`, `indikator`, `target`, `nama_kegiatan`, `kpi`, `butir`, `total_perkegiatan`, `id_set`) VALUES
(1, 'PK', 1000000, 1000000, '1', 'sddvsd', '1', 'acara', '2', '2', '', 3);

-- --------------------------------------------------------

--
-- Table structure for table `set_rkat`
--

CREATE TABLE `set_rkat` (
  `id_setrkat` int(20) NOT NULL,
  `tahun_akademik` varchar(50) NOT NULL,
  `pagu` varchar(255) NOT NULL,
  `id_user` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `set_rkat`
--

INSERT INTO `set_rkat` (`id_setrkat`, `tahun_akademik`, `pagu`, `id_user`) VALUES
(2, '2021/2022', '65.000.000', 2),
(3, '2021/2022', '40.000.000', 3),
(4, '2021/2022', '65.000.000', 4);

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
(16, 1, '4', 'nama butir', 'jsdp', 'lpmu', 'target1', 'OPS', 'kegiatan1', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_kpi`
--

CREATE TABLE `tabel_kpi` (
  `idkpi` int(200) NOT NULL,
  `nama_kpi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_kpi`
--

INSERT INTO `tabel_kpi` (`idkpi`, `nama_kpi`) VALUES
(1, 'Visi, Misi, Tujuan dan Strategi'),
(2, 'Tata Pamong, Tata Kelola dan Kerjasama'),
(3, 'Mahasiswa'),
(4, 'Sumber Daya Manusia'),
(5, 'Keuangan, Sarana dan Prasarana'),
(6, 'Pendidikan \r\n'),
(7, 'Penelitian'),
(8, 'Pengabdian Kepada Masyarakat'),
(9, 'Luaran dan Capaian Tridharma');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_prodi` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `level` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama_prodi`, `created_at`, `updated_at`, `level`, `gambar`) VALUES
(1, 'AKT001', '$2y$10$aF5Cs32sr0l0P7iB1tlWO.gMwfE3IwmMjFuDu9NbBaG3ZvczOW4d.', 'Akuntansi', '2021-07-06 09:24:30', '2021-07-06 09:24:30', 'prodi', ''),
(2, 'DKV006', '$2y$10$I0nGwneF1caE6VA0XmHruuDiIXX244/6JkOEvTukhnIgOyogGr1zi', 'Desain Komunikasi Visual', '2021-07-06 07:28:09', '2021-07-06 07:28:09', 'prodi', ''),
(3, 'INF007', '$2y$10$3IJ3/kUW0zAvXCL/4hFH0OsHQkC6nwSFvFsr9UVvyZDoe3ZPzTNOO', 'Informatik', '2021-07-06 07:26:49', '2021-07-06 07:26:49', 'prodi', ''),
(4, 'KOM004', '$2y$10$pZIJ1cOwPcwP6yfVhDqEjuL7Rjv/Y0LuMz2KWANmSMo5chKaTUAqu', 'Ilmu Komunikasi', '2021-07-06 07:53:16', '2021-07-06 07:53:16', 'prodi', ''),
(5, 'MNJ002', '$2y$10$162U7uJxxPF3VREi1InS8.WTa8mpP4.CmGgcGFvAt4CHOvzV1YhLa', 'Manajemen', '2021-07-06 07:34:11', '2021-07-06 07:34:11', 'prodi', ''),
(6, 'admin', '$2y$10$3IJ3/kUW0zAvXCL/4hFH0OsHQkC6nwSFvFsr9UVvyZDoe3ZPzTNOO', 'Admin', '2021-07-30 16:28:57', '2021-07-30 16:28:57', 'admin', ''),
(7, 'rektorat', '$2y$10$eO.QNcysfGjOZEebAB3xxOvevs9l6lIK5aRmFKuFlpw5nfury1RA.', 'rektorat 1', '2021-08-05 10:15:10', '2021-08-05 10:15:10', 'rektorat', ''),
(8, 'LPMU', '$2y$10$Gz6HwFL7sqoiu8dRkjAOsOHB7Cl8ZRKOrtRDD2iVl22cJg4ROgsuK', 'LPMU', '2021-08-05 11:07:54', '2021-08-05 11:07:54', 'admin', ''),
(9, 'BKAL', '$2y$10$zUZ/G30sMhSKFhZWLY13aerm4n4isURkPOFtKdJavcpb9mZLeWLAq', 'Biro Kemahasiswaan Dan Alumni', '2021-08-26 11:34:29', '2021-08-26 11:34:29', 'unit', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_rkat`
--
ALTER TABLE `detail_rkat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FOREIGN` (`id_set`);

--
-- Indexes for table `set_rkat`
--
ALTER TABLE `set_rkat`
  ADD PRIMARY KEY (`id_setrkat`),
  ADD KEY `username` (`id_user`);

--
-- Indexes for table `tabel_butir_kpi`
--
ALTER TABLE `tabel_butir_kpi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idkpi` (`idkpi`);

--
-- Indexes for table `tabel_kpi`
--
ALTER TABLE `tabel_kpi`
  ADD PRIMARY KEY (`idkpi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_rkat`
--
ALTER TABLE `detail_rkat`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `set_rkat`
--
ALTER TABLE `set_rkat`
  MODIFY `id_setrkat` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tabel_butir_kpi`
--
ALTER TABLE `tabel_butir_kpi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tabel_kpi`
--
ALTER TABLE `tabel_kpi`
  MODIFY `idkpi` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_rkat`
--
ALTER TABLE `detail_rkat`
  ADD CONSTRAINT `FOREIGN` FOREIGN KEY (`id_set`) REFERENCES `set_rkat` (`id_setrkat`);

--
-- Constraints for table `set_rkat`
--
ALTER TABLE `set_rkat`
  ADD CONSTRAINT `username` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);
--
-- Database: `db_lpmu_3`
--
CREATE DATABASE IF NOT EXISTS `db_lpmu_3` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_lpmu_3`;

-- --------------------------------------------------------

--
-- Table structure for table `detail_kpi`
--

CREATE TABLE `detail_kpi` (
  `id` int(11) NOT NULL,
  `tahun_akademik` text NOT NULL,
  `prodi_unit` text NOT NULL,
  `nama_prodi_unit` text NOT NULL,
  `nama_kpi` text NOT NULL,
  `nama_butir` text NOT NULL,
  `pic` text NOT NULL,
  `nama_pic` text NOT NULL,
  `rencana_realisasi` text NOT NULL,
  `ketercapaian` text NOT NULL,
  `skor` int(10) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_kpi`
--

INSERT INTO `detail_kpi` (`id`, `tahun_akademik`, `prodi_unit`, `nama_prodi_unit`, `nama_kpi`, `nama_butir`, `pic`, `nama_pic`, `rencana_realisasi`, `ketercapaian`, `skor`, `file`, `created_at`, `updated_at`) VALUES
(56, '2021/2022', 'Unit', 'BP', '1', 'Visi UPJ diturunkan ke dalam visi Fakultas/ Program Studi/Unit Kerja.', 'Staff', 'dsadsa', '', '', NULL, NULL, '2021-11-03 19:55:49', '2021-11-03 19:55:49'),
(58, '2021/2022', 'Unit', 'Perpustakaan', '1', 'Adanya keterlibatan pemangku kepentingan dalam penyusunan Visi Misi Universitas, Fakultas dan Program Studi. (mekanisme penyusunan VMTS yang terdokumentasi dan melibatkan stakeholder)', 'Staff', 'aaaaa', '', '', NULL, NULL, '2021-11-08 20:26:58', '2021-11-08 20:26:58'),
(59, '2021/2022', 'Prodi', 'Sistem Informasi', '2', 'Peningkatan Akreditasi Perguruan Tinggi (APT 3.0)', 'Koor Kemahasiswaan', 'ffffffff', '', '', NULL, NULL, '2021-11-08 20:27:23', '2021-11-08 20:27:23'),
(60, '2021/2022', 'Unit', 'BKAL', '4', 'Adanya hasil penelitian/PkM dosen yang mendapat pengakuan HKI', 'Kabag', 'dsadasd', '', '', NULL, NULL, '2021-11-08 20:27:40', '2021-11-08 20:27:40');

-- --------------------------------------------------------

--
-- Table structure for table `detail_rkat`
--

CREATE TABLE `detail_rkat` (
  `id` int(20) NOT NULL,
  `nama_kegiatan` varchar(255) NOT NULL,
  `jenis_biaya` varchar(255) NOT NULL,
  `anggaran` varchar(100) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `jenis_kpi` varchar(255) NOT NULL,
  `butir` int(50) NOT NULL,
  `jenis_anggaran` varchar(100) NOT NULL,
  `tahun_akademik` varchar(100) NOT NULL,
  `pagu` varchar(100) NOT NULL,
  `semester` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_rkat`
--

INSERT INTO `detail_rkat` (`id`, `nama_kegiatan`, `jenis_biaya`, `anggaran`, `keterangan`, `jenis_kpi`, `butir`, `jenis_anggaran`, `tahun_akademik`, `pagu`, `semester`) VALUES
(1, 'Kunjnan Ke Sekolah', 'Akomodasi biaya', '1000', ' Ongkos grab PP dari UPJ ke lokasi sekolah', '', 0, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `set_rkat`
--

CREATE TABLE `set_rkat` (
  `id_setrkat` int(20) NOT NULL,
  `tahun_akademik` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `pagu` varchar(255) NOT NULL,
  `id_user` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `set_rkat`
--

INSERT INTO `set_rkat` (`id_setrkat`, `tahun_akademik`, `semester`, `pagu`, `id_user`) VALUES
(1, '2021/2022', 'ganjil', '65.000.000', 2),
(2, '2021/2022', 'ganjil', '65.000.000', 3),
(3, '2021/2022', 'ganjil', '65.000.000', 4),
(5, '2021/2022', '', '6000', 2);

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
(14, 2, '11', 'Adanya laporan evaluasi tahunan berdasarkan matriks penilaian instrumen akreditasi yang berlaku serta ada tindak lanjut hasilnya. ', 'Prodi', 'UPM Fakultas', '1x per semester', 'PK', 'Adanya laporan evaluasi tahunan 1x per semester', 0.5);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_kpi`
--

CREATE TABLE `tabel_kpi` (
  `idkpi` int(11) NOT NULL,
  `nama_kpi` varchar(255) NOT NULL,
  `huruf_kpi` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_kpi`
--

INSERT INTO `tabel_kpi` (`idkpi`, `nama_kpi`, `huruf_kpi`) VALUES
(1, 'Visi, Misi, Tujuan dan Strategi', 'A'),
(2, 'Tata Pamong, Tata Kelola dan Kerjasama', 'B'),
(3, 'Mahasiswa', 'C'),
(4, 'Sumber Daya Manusia', 'D'),
(5, 'Keuangan, Sarana dan Prasarana', 'E'),
(6, 'Pendidikan \r\n', 'F'),
(7, 'Penelitian', 'G'),
(8, 'Pengabdian Kepada Masyarakat', 'H'),
(9, 'Luaran dan Capaian Tridharma', 'I');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_prodi` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama_prodi`, `created_at`, `updated_at`, `level`) VALUES
(1, 'AKT001', '$2y$10$1VtvTG0OQ9RDpx6VyWXOYeYs1y4jrbNY8IIriB0Nl8RMYuJ6qeHsi', 'Akuntansi', '2021-07-06 09:24:30', '2021-07-06 09:24:30', 'prodi'),
(2, 'DKV006', '$2y$10$lYVdY1lMIBWlxkYOIatFF.lEn3MtLFUeO4ZCBkqKemtigjmtgWlQu', 'Desain Komunikasi Visual', '2021-07-06 07:28:09', '2021-07-06 07:28:09', 'prodi'),
(3, 'INF007', '$2y$10$3IJ3/kUW0zAvXCL/4hFH0OsHQkC6nwSFvFsr9UVvyZDoe3ZPzTNOO', 'Informatik', '2021-07-06 07:26:49', '2021-07-06 07:26:49', 'prodi'),
(4, 'KOM004', '$2y$10$pZIJ1cOwPcwP6yfVhDqEjuL7Rjv/Y0LuMz2KWANmSMo5chKaTUAqu', 'Ilmu Komunikasi', '2021-07-06 07:53:16', '2021-07-06 07:53:16', 'prodi'),
(5, 'MNJ002', '$2y$10$162U7uJxxPF3VREi1InS8.WTa8mpP4.CmGgcGFvAt4CHOvzV1YhLa', 'Manajemen', '2021-07-06 07:34:11', '2021-07-06 07:34:11', 'prodi'),
(6, 'admin', '$2y$10$3IJ3/kUW0zAvXCL/4hFH0OsHQkC6nwSFvFsr9UVvyZDoe3ZPzTNOO', 'Admin', '2021-07-30 16:28:57', '2021-07-30 16:28:57', 'admin'),
(7, 'rektorat', '$2y$10$3IJ3/kUW0zAvXCL/4hFH0OsHQkC6nwSFvFsr9UVvyZDoe3ZPzTNOO', '', '2021-07-30 16:54:29', '2021-07-30 16:54:29', 'rektorat'),
(8, 'administrator', '$2y$10$.C2Zj6MrG1JyjtWnesvRzuTqzxnD7YX5FGg1M2eR73g45yRItdhpS', 'Admin', '2021-07-31 14:35:07', '2021-07-31 14:35:07', 'admin'),
(10, 'ARS010', '$2y$12$rZWKtmuNcWyxzyPB3WNHqOePQbgUn4UrSBzYd/rqxDJTHWgXDxGPW', 'Arsitektur', '2021-07-14 08:31:13', '2021-07-14 08:31:13', 'prodi'),
(11, 'DPI005', '$2y$12$BWijltD9Ly1otPjvv2XG7.7niywhSHHp8jCQlAkpuPpwp9HNbuAsa', 'Desain Produk', '2021-07-14 08:31:13', '2021-07-14 08:31:13', 'prodi'),
(12, 'LPMU', '$2y$12$YGwX8j/smbd7hOBbqjAj5e.pjeGX3zzAJY7s6Am2nysYNwae22.ES', 'Lembaga Penjamin Mutu Universitas', '2021-07-14 08:44:18', '2021-07-14 08:44:18', 'unit'),
(13, 'PSI003', '$2y$12$GIfRWUebFv9L2XSFHg6qNO7CHTuy0A96QkI/RO28NGAHujgWRcwFi ', 'Psikologi', '2021-07-14 08:26:49', '2021-07-14 08:26:49', 'prodi'),
(14, 'SIF008', '$2y$12$Qhf9z/VcZQ7Syt.33.nxX.yrjkrFZEkJABOoNQJNpo9jwczAfnjnW', 'Sistem Informasi', '2021-07-14 08:11:48', '2021-07-14 08:11:48', 'prodi'),
(15, 'TSP009', '$2y$12$g3ywFYx4KAJOb3aRqHuCG.RgltsC5I9Lvh7uBmLnGnuKBqWthBIVS', 'Teknik Sipil', '2021-07-14 08:26:49', '2021-07-14 08:26:49', 'prodi'),
(20, 'keuangan', '$2y$10$aTnfc.v9fdktDpSE5DZjI.1QJR/70MRrfPiyTbqDEKFQQ3Tljm8DC', 'Keuangan', '2021-08-05 08:03:09', '2021-08-05 08:03:09', 'unit'),
(21, 'jcal', '$2y$10$v1mHxpgb7AQKV2nRnQn54uMIsq8YBQ8Qh1pU52I5BoH5hpS/ZnMmO', 'Jaya Center Advanced Learning', '2021-08-05 08:39:11', '2021-08-05 08:39:11', 'unit'),
(23, 'jsdp', '$2y$10$C7AzRHGEJF9LgPiepXoqbu5o2JZOh/96AWFWs2b67HkV744kkYBwO', 'Jaya Softskills Development Program', '2021-08-05 09:04:43', '2021-08-05 09:04:43', 'unit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_kpi`
--
ALTER TABLE `detail_kpi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `set_rkat`
--
ALTER TABLE `set_rkat`
  ADD PRIMARY KEY (`id_setrkat`),
  ADD KEY `username` (`id_user`);

--
-- Indexes for table `tabel_butir_kpi`
--
ALTER TABLE `tabel_butir_kpi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idkpi` (`idkpi`);

--
-- Indexes for table `tabel_kpi`
--
ALTER TABLE `tabel_kpi`
  ADD PRIMARY KEY (`idkpi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_kpi`
--
ALTER TABLE `detail_kpi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `set_rkat`
--
ALTER TABLE `set_rkat`
  MODIFY `id_setrkat` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tabel_butir_kpi`
--
ALTER TABLE `tabel_butir_kpi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tabel_kpi`
--
ALTER TABLE `tabel_kpi`
  MODIFY `idkpi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tabel_butir_kpi`
--
ALTER TABLE `tabel_butir_kpi`
  ADD CONSTRAINT `tabel_butir_kpi_ibfk_1` FOREIGN KEY (`idkpi`) REFERENCES `tabel_kpi` (`idkpi`);
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin DEFAULT NULL,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

--
-- Dumping data for table `pma__designer_settings`
--

INSERT INTO `pma__designer_settings` (`username`, `settings_data`) VALUES
('root', '{\"angular_direct\":\"direct\",\"snap_to_grid\":\"off\",\"relation_lines\":\"true\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

--
-- Dumping data for table `pma__export_templates`
--

INSERT INTO `pma__export_templates` (`id`, `username`, `export_type`, `template_name`, `template_data`) VALUES
(1, 'root', 'database', 'db_lpmu', '{\"quick_or_custom\":\"quick\",\"what\":\"sql\",\"structure_or_data_forced\":\"0\",\"table_select[]\":\"user\",\"table_structure[]\":\"user\",\"table_data[]\":\"user\",\"aliases_new\":\"\",\"output_format\":\"sendit\",\"filename_template\":\"@DATABASE@\",\"remember_template\":\"on\",\"charset\":\"utf-8\",\"compression\":\"none\",\"maxsize\":\"\",\"codegen_structure_or_data\":\"data\",\"codegen_format\":\"0\",\"csv_separator\":\",\",\"csv_enclosed\":\"\\\"\",\"csv_escaped\":\"\\\"\",\"csv_terminated\":\"AUTO\",\"csv_null\":\"NULL\",\"csv_structure_or_data\":\"data\",\"excel_null\":\"NULL\",\"excel_columns\":\"something\",\"excel_edition\":\"win\",\"excel_structure_or_data\":\"data\",\"json_structure_or_data\":\"data\",\"json_unicode\":\"something\",\"latex_caption\":\"something\",\"latex_structure_or_data\":\"structure_and_data\",\"latex_structure_caption\":\"Structure of table @TABLE@\",\"latex_structure_continued_caption\":\"Structure of table @TABLE@ (continued)\",\"latex_structure_label\":\"tab:@TABLE@-structure\",\"latex_relation\":\"something\",\"latex_comments\":\"something\",\"latex_mime\":\"something\",\"latex_columns\":\"something\",\"latex_data_caption\":\"Content of table @TABLE@\",\"latex_data_continued_caption\":\"Content of table @TABLE@ (continued)\",\"latex_data_label\":\"tab:@TABLE@-data\",\"latex_null\":\"\\\\textit{NULL}\",\"mediawiki_structure_or_data\":\"structure_and_data\",\"mediawiki_caption\":\"something\",\"mediawiki_headers\":\"something\",\"htmlword_structure_or_data\":\"structure_and_data\",\"htmlword_null\":\"NULL\",\"ods_null\":\"NULL\",\"ods_structure_or_data\":\"data\",\"odt_structure_or_data\":\"structure_and_data\",\"odt_relation\":\"something\",\"odt_comments\":\"something\",\"odt_mime\":\"something\",\"odt_columns\":\"something\",\"odt_null\":\"NULL\",\"pdf_report_title\":\"\",\"pdf_structure_or_data\":\"structure_and_data\",\"phparray_structure_or_data\":\"data\",\"sql_include_comments\":\"something\",\"sql_header_comment\":\"\",\"sql_use_transaction\":\"something\",\"sql_compatibility\":\"NONE\",\"sql_structure_or_data\":\"structure_and_data\",\"sql_create_table\":\"something\",\"sql_auto_increment\":\"something\",\"sql_create_view\":\"something\",\"sql_procedure_function\":\"something\",\"sql_create_trigger\":\"something\",\"sql_backquotes\":\"something\",\"sql_type\":\"INSERT\",\"sql_insert_syntax\":\"both\",\"sql_max_query_size\":\"50000\",\"sql_hex_for_binary\":\"something\",\"sql_utc_time\":\"something\",\"texytext_structure_or_data\":\"structure_and_data\",\"texytext_null\":\"NULL\",\"xml_structure_or_data\":\"data\",\"xml_export_events\":\"something\",\"xml_export_functions\":\"something\",\"xml_export_procedures\":\"something\",\"xml_export_tables\":\"something\",\"xml_export_triggers\":\"something\",\"xml_export_views\":\"something\",\"xml_export_contents\":\"something\",\"yaml_structure_or_data\":\"data\",\"\":null,\"lock_tables\":null,\"as_separate_files\":null,\"csv_removeCRLF\":null,\"csv_columns\":null,\"excel_removeCRLF\":null,\"json_pretty_print\":null,\"htmlword_columns\":null,\"ods_columns\":null,\"sql_dates\":null,\"sql_relation\":null,\"sql_mime\":null,\"sql_disable_fk\":null,\"sql_views_as_tables\":null,\"sql_metadata\":null,\"sql_create_database\":null,\"sql_drop_table\":null,\"sql_if_not_exists\":null,\"sql_view_current_user\":null,\"sql_or_replace_view\":null,\"sql_truncate\":null,\"sql_delayed\":null,\"sql_ignore\":null,\"texytext_columns\":null}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"db_lpmu\",\"table\":\"tabel_butir_kpi\"},{\"db\":\"db_lpmu\",\"table\":\"tabel_kpi\"},{\"db\":\"db_lpmu_3\",\"table\":\"tabel_butir_kpi\"},{\"db\":\"db_lpmu_3\",\"table\":\"tabel_kpi\"},{\"db\":\"db_lpmu\",\"table\":\"detail_kpi\"},{\"db\":\"db_lpmu_3\",\"table\":\"detail_kpi\"},{\"db\":\"db_lpmu\",\"table\":\"user\"},{\"db\":\"db_lpmu\",\"table\":\"detail_rkat\"},{\"db\":\"db_lpmu\",\"table\":\"set_rkat\"},{\"db\":\"db_lpmu\",\"table\":\"data_butirkpi\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

--
-- Dumping data for table `pma__table_info`
--

INSERT INTO `pma__table_info` (`db_name`, `table_name`, `display_field`) VALUES
('db_lpmu', 'tabel_butir_kpi', 'nama_butir'),
('db_lpmu_3', 'tabel_butir_kpi', 'nama_butir');

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'db_lpmu_3', 'detail_kpi', '{\"sorted_col\":\"`detail_kpi`.`id` ASC\"}', '2021-11-16 06:04:13'),
('root', 'db_lpmu_3', 'user', '{\"sorted_col\":\"`user`.`id` ASC\"}', '2021-11-16 06:04:13');

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin DEFAULT NULL,
  `data_sql` longtext COLLATE utf8_bin DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2021-11-19 03:29:41', '{\"Console\\/Mode\":\"show\",\"ThemeDefault\":\"pmahomme\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
