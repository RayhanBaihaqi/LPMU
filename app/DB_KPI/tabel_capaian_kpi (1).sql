-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2021 at 11:06 AM
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
-- Table structure for table `tabel_capaian_kpi`
--

CREATE TABLE `tabel_capaian_kpi` (
  `id` int(100) NOT NULL,
  `tahun_ajaran` varchar(255) NOT NULL,
  `nama_prodi` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `realisasi` int(11) NOT NULL,
  `nilai_bobot` float NOT NULL,
  `upload_file` varchar(255) NOT NULL,
  `idkpi` int(11) NOT NULL,
  `id_butir_kpi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_capaian_kpi`
--

INSERT INTO `tabel_capaian_kpi` (`id`, `tahun_ajaran`, `nama_prodi`, `level`, `realisasi`, `nilai_bobot`, `upload_file`, `idkpi`, `id_butir_kpi`) VALUES
(1, '2019/2020', 'Informatika', 'prodi', 2, 4, '', 1, 1),
(2, '2019/2020', 'Informatika', 'prodi', 2, 4, '', 1, 2),
(3, '2019/2020', 'Informatika', 'prodi', 1, 2, '', 1, 3),
(4, '2020/2021', 'Informatika', 'prodi', 1, 0.0025, '', 2, 1),
(5, '2020/2021', 'Informatika', 'prodi', 2, 0.04, '', 2, 2),
(6, '2020/2021', 'Informatika', 'prodi', 3, 0.03, '', 2, 3),
(7, '2020/2021', 'Informatika', 'prodi', 2, 0.03, '', 2, 4),
(8, '2020/2021', 'Informatika', 'prodi', 2, 0.02, '', 2, 5),
(9, '2020/2021', 'Informatika', 'prodi', 1, 0.02, '', 2, 6),
(10, '2020/2021', 'Informatika', 'prodi', 3, 0.0825, '', 2, 7),
(11, '2020/2021', 'Informatika', 'prodi', 2, 0.01, '', 2, 8),
(12, '2020/2021', 'Informatika', 'prodi', 2, 0.01, '', 2, 9),
(13, '2020/2021', 'Informatika', 'prodi', 2, 0.02, '', 2, 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_capaian_kpi`
--
ALTER TABLE `tabel_capaian_kpi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_capaian_kpi`
--
ALTER TABLE `tabel_capaian_kpi`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
