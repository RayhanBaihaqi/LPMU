-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Des 2021 pada 08.36
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Struktur dari tabel `detail_rkat`
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
  `total` varchar(100) NOT NULL,
  `id_set` int(11) NOT NULL,
  `tahunAkademik` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_rkat`
--

INSERT INTO `detail_rkat` (`id`, `kategori`, `anggaranGenap`, `anggaranGasal`, `no_kegiatan`, `indikator`, `target`, `nama_kegiatan`, `kpi`, `butir`, `total`, `id_set`, `tahunAkademik`) VALUES
(63, 'PK', 2, 1, '3', 'test ke sekian 1', '2', 'Testing 1', '3', '2', '3', 3, ''),
(64, 'OPS', 4, 3, '3', 'test ke sekian 2', '3', 'Testing 2', '3', '1', '7', 3, ''),
(65, 'OPS', 4, 2, '3', 'test ke sekian 3', '2', 'Testing 3', '4', '3', '6', 3, ''),
(66, 'INV', 1, 3, '1', 'test ke sekian 4', '1', 'Testing 4', '8', '3', '4', 3, ''),
(67, 'INV', 5, 5, '1', 'test ke sekian 5', '4', 'Testing 5', '8', '2', '10', 3, ''),
(68, 'OPS', 2, 1, '1', 'indikator 1', '3', 'Testing 4', '3', '2', '3', 3, ''),
(69, 'OPS', 2, 1, '1', 'qqqqqqqqqqqqqq', '2', '1234', '2', '2', '3', 3, ''),
(70, 'OPS', 2, 1, '1', 'qqqqqqqqqqqqqq', '2', 'Testing 4', '3', '2', '3', 3, ''),
(71, 'OPS', 2, 1, '3', 'qqqqqqqqqqqqqq', '2', 'Test 1', '5', '3', '3', 3, ''),
(72, 'INV', 2, 1, '1', 'qqqqqqqqqqqqqq', '2', 'Testing 4', '8', '2', '3', 3, ''),
(73, 'OPS', 300000, 20000000, '1', 'qqqqqqqqqqqqqq', '3', '1234', '2', '3', '', 3, ''),
(74, 'OPS', 1000000, 1000000, '3', 'fefefew', '3', 'Test 1', '3', '2', '2000000', 3, ''),
(75, 'OPS', 1000000, 20000000, '3', 'indikator 1', '3', 'Keperluan Promoasi prodi', '3', '3', '21000000', 4, ''),
(76, 'OPS', 300000, 20000000, '3', 'qqqqqqqqqqqqqq', '3', 'Testing 4', '3', '2', '20300000', 3, '2019/2020'),
(77, 'INV', 2, 20000000, '3', 'qqqqqqqqqqqqqq', '3', '1234', '4', '2', '20000002', 3, '2019/2020'),
(78, 'INV', 20000000, 20000000, '3', 'qqqqqqqqqqqqqq', '3', '1234', '4', '2', '40000000', 3, '2019/2020'),
(79, 'OPS', 300000, 1000000, '3', 'fefefew', '3', 'Testing 4', '5', '3', '1300000', 3, '2019/2020'),
(80, 'OPS', 20000000, 1000000, '3', 'indikator 1', '2', 'data 1', '7', '2', '21000000', 3, '2019/2020'),
(81, '', 0, 0, '', '', '', 'Test 1', '', '2', '', 3, ''),
(82, '', 0, 0, '', '', '', 'Testing 4', '', '2', '', 2, ''),
(83, '', 0, 0, '', '', '', 'Testing 21', '', '3', '', 4, ''),
(84, '', 0, 0, '', '', '', 'fdv bgnhj', '', '2', '', 3, ''),
(85, 'OPS', 1000000, 20000000, '3', 'qqqqqqqqqqqqqq', '3', 'Test 1', '3', '3', '21000000', 3, '2020/2021');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detail_rkat`
--
ALTER TABLE `detail_rkat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FOREIGN` (`id_set`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detail_rkat`
--
ALTER TABLE `detail_rkat`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_rkat`
--
ALTER TABLE `detail_rkat`
  ADD CONSTRAINT `FOREIGN` FOREIGN KEY (`id_set`) REFERENCES `set_rkat` (`id_setrkat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
