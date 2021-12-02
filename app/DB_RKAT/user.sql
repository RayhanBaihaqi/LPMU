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
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_prodi` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `level` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
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
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
