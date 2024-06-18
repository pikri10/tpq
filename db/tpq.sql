-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2024 at 04:24 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tpq`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru_madrasah`
--

CREATE TABLE `guru_madrasah` (
  `id` int(11) NOT NULL,
  `kode_guru` varchar(256) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `jenis_kelamin` varchar(256) NOT NULL,
  `nipy` varchar(256) NOT NULL,
  `status_kawin` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `guru_tahfidz`
--

CREATE TABLE `guru_tahfidz` (
  `id` int(11) NOT NULL,
  `kode_guru` varchar(256) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `jenis_kelamin` varchar(256) NOT NULL,
  `nipy` varchar(256) NOT NULL,
  `status_kawin` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `guru_tpq`
--

CREATE TABLE `guru_tpq` (
  `id` int(11) NOT NULL,
  `kode_guru` varchar(256) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `jenis_kelamin` varchar(256) NOT NULL,
  `nipy` varchar(256) NOT NULL,
  `status_kawin` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `siswa_madrasah`
--

CREATE TABLE `siswa_madrasah` (
  `id` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `nik` varchar(256) NOT NULL,
  `jenis_kelamin` varchar(256) NOT NULL,
  `tempat_lahir` varchar(256) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `ibu` varchar(256) NOT NULL,
  `ayah` varchar(256) NOT NULL,
  `nomor_ortu` varchar(256) NOT NULL,
  `foto` varchar(256) NOT NULL,
  `tahun_ajaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `siswa_tahfidz`
--

CREATE TABLE `siswa_tahfidz` (
  `id` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `nik` varchar(256) NOT NULL,
  `jenis_kelamin` varchar(256) NOT NULL,
  `tempat_lahir` varchar(256) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `ibu` varchar(256) NOT NULL,
  `ayah` varchar(256) NOT NULL,
  `nomor_ortu` varchar(256) NOT NULL,
  `foto` varchar(256) NOT NULL,
  `tahun_ajaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `siswa_tpq`
--

CREATE TABLE `siswa_tpq` (
  `id` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `nik` varchar(256) NOT NULL,
  `jenis_kelamin` varchar(256) NOT NULL,
  `tempat_lahir` varchar(256) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `ibu` varchar(256) NOT NULL,
  `ayah` varchar(256) NOT NULL,
  `nomor_ortu` varchar(256) NOT NULL,
  `foto` varchar(256) NOT NULL,
  `tahun_ajaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(256) NOT NULL,
  `image` varchar(256) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `date_created` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(6, 'Ken', 'kenjago@gmail.com', 'default.jpg', '$2y$10$9cuDgF.PF4.HkpqFgiI6vu01Rv2dBrOme21DbqxUqs36s26/mNEqW', 2, 1, '1675825428'),
(8, 'Fikri Oka', 'okafadilah14@gmail.com', 'fbc5c62d5c1142691af725a127a59316.png', '$2y$10$NHS7f3/hbMZY9nsiMUiwkuje11fEY.RAnzks10NtiXaofidvp9aJq', 1, 1, '1718024190'),
(9, 'Umi Nurul', 'uminurul@gmail.com', 'default.jpg', '$2y$10$wECSBxiYUbusUd2Q.FDb7.EXYxfFBt69/S/9M77BRhWoWwg0FvWQ6', 3, 1, '1718034880'),
(10, 'Yulia Rahmawati', 'yulia@gmail.com', 'default.jpg', '$2y$10$hGpDCO6GfkzgTBfNrCQq1OZm0Mz3wAhEJ7ch172c/zKUifPRjFeGq', 4, 1, '1718034915');

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 1, 3),
(6, 1, 4),
(8, 1, 5),
(9, 3, 4),
(10, 4, 5),
(11, 1, 6),
(12, 5, 6);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'Kesiswaan'),
(3, 'Menu'),
(4, 'TPQ'),
(5, 'Madrasah'),
(6, 'Program Tahfidz');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Operator'),
(3, 'TPQ'),
(4, 'Madrasah'),
(5, 'Program Tahfidz');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(256) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard Admin', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(8, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(10, 1, 'Rekap Administrasi', 'admin/rekap', 'fas fa-fw fa-book', 1),
(11, 4, 'Siswa', 'tpq', 'fas fa-fw fa-user', 1),
(12, 4, 'Guru', 'tpq/guru', 'fas fa-fw fa-users', 1),
(15, 2, 'Pendaftaran', 'siswa', 'fas fa-fw fa-user', 1),
(17, 2, 'TPQ', 'siswa/siswa_tpq', 'fas fa-fw fa-address-book', 1),
(18, 2, 'Madrasah', 'siswa/siswa_madrasah', 'fas fa-fw fa-address-book', 1),
(19, 5, 'Siswa', 'madrasah', 'fas fa-fw fa-user', 1),
(20, 5, 'Guru', 'madrasah/guru', 'fas fa-fw fa-users', 1),
(23, 6, 'Siswa', 'tahfidz', 'fas fa-fw fa-user', 1),
(24, 6, 'Guru', 'tahfidz/guru', 'fas fa-fw fa-users', 1),
(25, 2, 'Program Tahfidz', 'siswa/siswa_tahfidz', 'fas fa-fw fa-address-book', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru_madrasah`
--
ALTER TABLE `guru_madrasah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guru_tahfidz`
--
ALTER TABLE `guru_tahfidz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guru_tpq`
--
ALTER TABLE `guru_tpq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa_madrasah`
--
ALTER TABLE `siswa_madrasah`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nis` (`nis`);

--
-- Indexes for table `siswa_tahfidz`
--
ALTER TABLE `siswa_tahfidz`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nis` (`nis`);

--
-- Indexes for table `siswa_tpq`
--
ALTER TABLE `siswa_tpq`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nis` (`nis`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guru_madrasah`
--
ALTER TABLE `guru_madrasah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guru_tahfidz`
--
ALTER TABLE `guru_tahfidz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guru_tpq`
--
ALTER TABLE `guru_tpq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `siswa_madrasah`
--
ALTER TABLE `siswa_madrasah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `siswa_tahfidz`
--
ALTER TABLE `siswa_tahfidz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `siswa_tpq`
--
ALTER TABLE `siswa_tpq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
