-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05 Mei 2017 pada 12.01
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pend_sscs_v2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absen`
--

CREATE TABLE `absen` (
  `id` varchar(75) NOT NULL,
  `id_jadwal` varchar(75) NOT NULL,
  `id_korwil` varchar(75) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `account`
--

CREATE TABLE `account` (
  `id` varchar(75) NOT NULL,
  `nama` varchar(75) NOT NULL,
  `username` varchar(75) NOT NULL,
  `password` varchar(75) NOT NULL,
  `level` varchar(75) NOT NULL,
  `wilayah` varchar(75) NOT NULL,
  `koordinator` enum('1','0') NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `account`
--

INSERT INTO `account` (`id`, `nama`, `username`, `password`, `level`, `wilayah`, `koordinator`, `status`) VALUES
('ACCOUNTS_1_5909c5e86257f', 'Bayu Saputra', 'baysptr', 'fc084203c8c2c803e8346920c1c8ec5c', 'LEVEL_1_590234e33e122', 'WILAYAH_1_5904def95e979', '1', '1'),
('ACCOUNTS_2_590b18bc4058e', 'Super admin', 'admin', '0eff44c362b13fa25fc88a412f5512e1', 'LEVEL_2_5909c65554e2e', 'WILAYAH_1_5904def95e979', '1', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_absen`
--

CREATE TABLE `detail_absen` (
  `id` varchar(75) NOT NULL,
  `id_absen` varchar(75) NOT NULL,
  `id_pengajar` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_account`
--

CREATE TABLE `detail_account` (
  `id` varchar(75) NOT NULL,
  `id_account` varchar(75) NOT NULL,
  `nama_lengkap` varchar(75) NOT NULL,
  `email` varchar(75) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `tgl_lhr` date NOT NULL,
  `gender` enum('L','P') NOT NULL,
  `avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_level`
--

CREATE TABLE `detail_level` (
  `id` varchar(75) NOT NULL,
  `id_level` varchar(75) NOT NULL,
  `id_menu` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_level`
--

INSERT INTO `detail_level` (`id`, `id_level`, `id_menu`) VALUES
('D_MENU_1_590a13211f8fa', 'LEVEL_2_5909c65554e2e', 'MENU_2_590a06e9e54c0'),
('D_MENU_2_590a132551005', 'LEVEL_2_5909c65554e2e', 'MENU_1_590a06bb36894'),
('D_MENU_3_590c49de95a88', 'LEVEL_1_590234e33e122', 'MENU_1_590a06bb36894'),
('D_MENU_4_590c4c6350115', 'LEVEL_2_5909c65554e2e', 'MENU_3_590c35c031502'),
('D_MENU_5_590c4c67df05b', 'LEVEL_2_5909c65554e2e', 'MENU_4_590c35df671fb'),
('D_MENU_6_590c4c6bf1eb8', 'LEVEL_2_5909c65554e2e', 'MENU_5_590c35f087090');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_modul`
--

CREATE TABLE `detail_modul` (
  `id` varchar(75) NOT NULL,
  `id_modul` varchar(75) NOT NULL,
  `parameter` text NOT NULL,
  `tolok_ukur` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_modul`
--

INSERT INTO `detail_modul` (`id`, `id_modul`, `parameter`, `tolok_ukur`) VALUES
('PARAMETER_1_5904b2665be6a', 'MODUL_2_5904af43ef2ca', 'Berhitung', 'N');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id` varchar(75) NOT NULL,
  `tgl_hari` date NOT NULL,
  `modul` varchar(75) NOT NULL,
  `wilayah_ngajar` varchar(75) NOT NULL,
  `korwil` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `level`
--

CREATE TABLE `level` (
  `id` varchar(75) NOT NULL,
  `level` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `level`
--

INSERT INTO `level` (`id`, `level`) VALUES
('LEVEL_1_590234e33e122', 'Pengajar'),
('LEVEL_2_5909c65554e2e', 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id` varchar(75) NOT NULL,
  `menu` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id`, `menu`, `link`) VALUES
('MENU_1_590a06bb36894', 'Modul', '/index.php/admin/modul'),
('MENU_2_590a06e9e54c0', 'Menu', '/index.php/admin/menu'),
('MENU_3_590c35c031502', 'Level', '/index.php/admin/level'),
('MENU_4_590c35df671fb', 'Wialayah Ajar', '/index.php/admin/wilayah_ajar'),
('MENU_5_590c35f087090', 'Member', '/index.php/admin/member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `modul`
--

CREATE TABLE `modul` (
  `id` varchar(75) NOT NULL,
  `nama_modul` varchar(75) NOT NULL,
  `deskripsi_modul` text NOT NULL,
  `file_modul` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `modul`
--

INSERT INTO `modul` (`id`, `nama_modul`, `deskripsi_modul`, `file_modul`) VALUES
('MODUL_1_590396904b4a8', 'testing', 'testing', 'From-kesanggupan_bayu-saputra.pdf'),
('MODUL_2_5904af43ef2ca', 'Asem', 'Asem', 'From-kesanggupan_ade-fahmi.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wilayah_ajar`
--

CREATE TABLE `wilayah_ajar` (
  `id` varchar(75) NOT NULL,
  `wilayah` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `wilayah_ajar`
--

INSERT INTO `wilayah_ajar` (`id`, `wilayah`) VALUES
('WILAYAH_1_5904def95e979', 'Taman Bungkul');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama` (`nama`);

--
-- Indexes for table `detail_absen`
--
ALTER TABLE `detail_absen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_account`
--
ALTER TABLE `detail_account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_level`
--
ALTER TABLE `detail_level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_modul`
--
ALTER TABLE `detail_modul`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modul`
--
ALTER TABLE `modul`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wilayah_ajar`
--
ALTER TABLE `wilayah_ajar`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
