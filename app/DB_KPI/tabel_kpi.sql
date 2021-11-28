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
(9, 'Luaran dan Capaian Tridharma'),
(10, 'tesss'),
(11, 'nama kpi baru'),
(12, 'awerty');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_kpi`
--
ALTER TABLE `tabel_kpi`
  ADD PRIMARY KEY (`idkpi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_kpi`
--
ALTER TABLE `tabel_kpi`
  MODIFY `idkpi` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
