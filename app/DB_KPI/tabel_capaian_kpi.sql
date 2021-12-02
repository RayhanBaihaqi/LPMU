-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2021 at 05:36 AM
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
  `nama_prodi` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `realisasi` int(11) NOT NULL,
  `nilai_bobot` float NOT NULL,
  `upload_file` varchar(255) NOT NULL,
  `id_capaian_kpi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_capaian_kpi`
--
ALTER TABLE `tabel_capaian_kpi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_capaian_kpi` (`id_capaian_kpi`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tabel_capaian_kpi`
--
ALTER TABLE `tabel_capaian_kpi`
  ADD CONSTRAINT `tabel_capaian_kpi_ibfk_1` FOREIGN KEY (`id_capaian_kpi`) REFERENCES `tabel_butir_kpi` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
