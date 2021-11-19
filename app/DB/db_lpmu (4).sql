-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Nov 2021 pada 04.30
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
  `id_set` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_rkat`
--

INSERT INTO `detail_rkat` (`id`, `kategori`, `anggaranGenap`, `anggaranGasal`, `no_kegiatan`, `indikator`, `target`, `nama_kegiatan`, `kpi`, `butir`, `total`, `id_set`) VALUES
(1, 'PK', 1000000, 1000000, '1', 'sddvsd', '1', 'acara', '2', '2', '0', 3),
(2, 'OPS', 0, 1000000, '1', 'sddvsdscsdv', '2', 'makan makan', '5', '2', '10000000', 3),
(5, 'OPS', 1000000, 1000000, '1', 'sddvsdscsdv', '2', 'hima', '7', '2', '2000000', 3),
(6, 'OPS', 3000000, 1000000, '1', 'uji coba', '2', 'uji coba 1', '9', '3', '4000000', 3),
(7, 'OPS', 1000000, 1000000, '1', 'fefefew', '2', 'Test 1', '3', '2', '2000000', 3),
(13, 'OPS', 1000000, 1000000, '1', 'fefefew', '2', 'Test 1', '3', '2', '', 3),
(14, 'OPS', 1000000, 1000000, '1', 'fefefew', '2', 'Test 1', '3', '2', '', 3),
(15, 'OPS', 1000000, 1000000, '1', 'fefefew', '2', 'Test 1', '3', '2', '', 3),
(16, 'OPS', 3000000, 1000000, '1', 'vvvvds', '2', 'kom', '6', '2', '4000000', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `set_rkat`
--

CREATE TABLE `set_rkat` (
  `id_setrkat` int(20) NOT NULL,
  `tahun_akademik` varchar(50) NOT NULL,
  `pagu` varchar(255) NOT NULL,
  `id_user` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `set_rkat`
--

INSERT INTO `set_rkat` (`id_setrkat`, `tahun_akademik`, `pagu`, `id_user`) VALUES
(2, '2021/2022', '65.000.000', 2),
(3, '2021/2022', '40.000.000', 3),
(4, '2021/2022', '65.000.000', 4);

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
-- Indeks untuk tabel `detail_rkat`
--
ALTER TABLE `detail_rkat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FOREIGN` (`id_set`);

--
-- Indeks untuk tabel `set_rkat`
--
ALTER TABLE `set_rkat`
  ADD PRIMARY KEY (`id_setrkat`),
  ADD KEY `username` (`id_user`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detail_rkat`
--
ALTER TABLE `detail_rkat`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `set_rkat`
--
ALTER TABLE `set_rkat`
  MODIFY `id_setrkat` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_rkat`
--
ALTER TABLE `detail_rkat`
  ADD CONSTRAINT `FOREIGN` FOREIGN KEY (`id_set`) REFERENCES `set_rkat` (`id_setrkat`);

--
-- Ketidakleluasaan untuk tabel `set_rkat`
--
ALTER TABLE `set_rkat`
  ADD CONSTRAINT `username` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
