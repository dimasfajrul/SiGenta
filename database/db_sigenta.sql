-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2022 at 02:35 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sigenta`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_agenda`
--

CREATE TABLE `data_agenda` (
  `id` int(3) NOT NULL,
  `agenda` varchar(100) NOT NULL,
  `waktu` time NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_berkaslain`
--

CREATE TABLE `data_berkaslain` (
  `id` int(3) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_dokumentasi`
--

CREATE TABLE `data_dokumentasi` (
  `id` int(3) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `kegiatan` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_isu`
--

CREATE TABLE `data_isu` (
  `id` int(3) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isu` varchar(100) NOT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_keuangan`
--

CREATE TABLE `data_keuangan` (
  `id` int(3) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `RO` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_notadinas`
--

CREATE TABLE `data_notadinas` (
  `id` int(3) NOT NULL,
  `tujuan` varchar(100) NOT NULL,
  `link` varchar(255) NOT NULL,
  `tanggal` datetime NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_suratkeluar`
--

CREATE TABLE `data_suratkeluar` (
  `id` int(3) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `perihal` varchar(100) NOT NULL,
  `tanggal` datetime NOT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_suratmasuk`
--

CREATE TABLE `data_suratmasuk` (
  `id` int(3) NOT NULL,
  `tanggal` datetime NOT NULL,
  `asal_surat` varchar(100) NOT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_user`
--

CREATE TABLE `data_user` (
  `id` int(3) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_agenda`
--
ALTER TABLE `data_agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_berkaslain`
--
ALTER TABLE `data_berkaslain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_dokumentasi`
--
ALTER TABLE `data_dokumentasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_isu`
--
ALTER TABLE `data_isu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_keuangan`
--
ALTER TABLE `data_keuangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_notadinas`
--
ALTER TABLE `data_notadinas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_suratkeluar`
--
ALTER TABLE `data_suratkeluar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_suratmasuk`
--
ALTER TABLE `data_suratmasuk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_agenda`
--
ALTER TABLE `data_agenda`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_berkaslain`
--
ALTER TABLE `data_berkaslain`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_dokumentasi`
--
ALTER TABLE `data_dokumentasi`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_isu`
--
ALTER TABLE `data_isu`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_keuangan`
--
ALTER TABLE `data_keuangan`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_notadinas`
--
ALTER TABLE `data_notadinas`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_suratkeluar`
--
ALTER TABLE `data_suratkeluar`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_suratmasuk`
--
ALTER TABLE `data_suratmasuk`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
