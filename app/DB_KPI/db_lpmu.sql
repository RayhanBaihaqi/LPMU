-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2021 at 10:25 AM
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
(14, 2, '11', 'Adanya laporan evaluasi tahunan berdasarkan matriks penilaian instrumen akreditasi yang berlaku serta ada tindak lanjut hasilnya. ', 'Prodi', 'UPM Fakultas', '1x per semester', 'PK', 'Adanya laporan evaluasi tahunan 1x per semester', 0.5);

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
