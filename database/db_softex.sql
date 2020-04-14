-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Waktu pembuatan: 06 Feb 2020 pada 04.32
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_softex`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cms_menu`
--

CREATE TABLE `cms_menu` (
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `kat_menu` int(11) NOT NULL,
  `user_role` enum('Administrator','Admin','User','') NOT NULL,
  `perurutan` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cms_user`
--

CREATE TABLE `cms_user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('Admin','User') NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cms_user`
--

INSERT INTO `cms_user` (`user_id`, `name`, `username`, `password`, `level`, `created_at`) VALUES
(1, 'radhitka', 'raditor', 'radit', 'Admin', '2018-09-18 03:30:30'),
(2, 'Softex Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'User', '2018-09-18 03:39:44'),
(3, 'asd', 'asd', '7815696ecbf1c96e6894b779456d330e', 'Admin', '2018-09-18 03:44:50'),
(6, 'danur123', 'danur', 'danur', 'User', '2018-09-26 01:56:47'),
(7, 'Radhitka', 'radit', '79a91412ad3792662aaa310214572592', 'Admin', '2019-05-24 06:49:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_versi`
--

CREATE TABLE `master_versi` (
  `id_versi` int(11) NOT NULL,
  `nama_versi` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `master_versi`
--

INSERT INTO `master_versi` (`id_versi`, `nama_versi`, `created_at`) VALUES
(2, '1.2', '2020-01-08 07:26:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ttr_player`
--

CREATE TABLE `ttr_player` (
  `player_id` int(11) NOT NULL,
  `device_number` varchar(25) NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `survey` varchar(25) NOT NULL,
  `submit_time` datetime NOT NULL,
  `backup_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ttr_player`
--

INSERT INTO `ttr_player` (`player_id`, `device_number`, `no_hp`, `survey`, `submit_time`, `backup_time`) VALUES
(1, 'TAB002', '0852556451', 'Lembut', '2019-10-03 08:20:17', '2020-01-22 07:41:31'),
(2, 'TAB002', '08525564564', 'Kasar', '2019-10-15 10:20:17', '2020-01-22 07:41:31'),
(3, 'TAB002', '08781512553', 'Lembut', '2019-11-12 10:50:17', '2020-01-22 07:41:31'),
(4, 'TAB002', '08592856662', 'Lembut', '2019-11-15 21:20:17', '2020-01-22 07:41:31'),
(5, 'TAB002', '08225848285', 'Sedang', '2019-11-21 20:20:17', '2020-01-22 07:41:31'),
(6, 'TAB005', '0982564564', 'Lembut', '2019-10-03 08:20:17', '2020-01-23 04:23:05'),
(7, 'TAB005', '0784526756', 'Kasar', '2019-10-27 10:20:17', '2020-01-23 04:23:05'),
(8, 'TAB005', '054767245678', 'Lembut', '2019-11-24 10:50:17', '2020-01-23 04:23:05'),
(9, 'TAB005', '045378275678', 'Lembut', '0000-00-00 00:00:00', '2020-01-23 04:23:05'),
(10, 'TAB005', '07527856785', 'Sedang', '2019-11-22 20:20:17', '2020-01-23 04:23:05');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cms_menu`
--
ALTER TABLE `cms_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indeks untuk tabel `cms_user`
--
ALTER TABLE `cms_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indeks untuk tabel `master_versi`
--
ALTER TABLE `master_versi`
  ADD PRIMARY KEY (`id_versi`);

--
-- Indeks untuk tabel `ttr_player`
--
ALTER TABLE `ttr_player`
  ADD PRIMARY KEY (`player_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cms_menu`
--
ALTER TABLE `cms_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `cms_user`
--
ALTER TABLE `cms_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `master_versi`
--
ALTER TABLE `master_versi`
  MODIFY `id_versi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `ttr_player`
--
ALTER TABLE `ttr_player`
  MODIFY `player_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
