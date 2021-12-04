-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2021 at 10:47 AM
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
  `id` int(11) NOT NULL,
  `level` varchar(255) NOT NULL,
  `nama_prodi` varchar(255) NOT NULL,
  `tahun_ajaran` varchar(255) NOT NULL,
  `realisasi` int(11) NOT NULL,
  `nilai_bobot` float NOT NULL,
  `upload_file` varchar(255) NOT NULL,
  `idkpi` int(11) NOT NULL,
  `id_butir_kpi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_capaian_kpi`
--

INSERT INTO `tabel_capaian_kpi` (`id`, `level`, `nama_prodi`, `tahun_ajaran`, `realisasi`, `nilai_bobot`, `upload_file`, `idkpi`, `id_butir_kpi`) VALUES
(3, 'Prodi', 'Informatika', '2019/2020', 2, 2, 'aaaaaa', 3, 7),
(4, 'Prodi', 'Informatika', '2020/2021', 1, 1, 'aaaa', 6, 2);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
