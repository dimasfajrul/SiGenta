-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2022 at 09:58 AM
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

--
-- Dumping data for table `data_berkaslain`
--

INSERT INTO `data_berkaslain` (`id`, `judul`, `keterangan`, `link`, `created_at`, `updated_at`) VALUES
(1, 'zzz', 'asdasd', 'https://www.youtube.com/watch?v=lQVIVX5iHkU', '2022-02-22 08:35:08', '2022-02-22 08:39:37');

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

--
-- Dumping data for table `data_isu`
--

INSERT INTO `data_isu` (`id`, `judul`, `isu`, `link`, `created_at`, `updated_at`) VALUES
(1, 'haha', 'ahha', 'https://www.youtube.com/watch?v=lQVIVX5iHkU', '2022-02-21 19:30:42', '2022-02-21 19:53:27');

-- --------------------------------------------------------

--
-- Table structure for table `data_keuangan`
--

CREATE TABLE `data_keuangan` (
  `id` int(3) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `ro` int(3) NOT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_keuangan`
--

INSERT INTO `data_keuangan` (`id`, `judul`, `ro`, `link`, `created_at`, `updated_at`) VALUES
(3, 'asdasd', 2, 'https://www.youtube.com/watch?v=lQVIVX5iHkU', '2022-02-23 07:09:58', '2022-02-23 07:11:38');

-- --------------------------------------------------------

--
-- Table structure for table `data_notadinas`
--

CREATE TABLE `data_notadinas` (
  `id` int(3) NOT NULL,
  `tujuan` varchar(100) NOT NULL,
  `link` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_notadinas`
--

INSERT INTO `data_notadinas` (`id`, `tujuan`, `link`, `tanggal`, `created_at`, `updated_at`) VALUES
(2, 'asd', 'https://www.youtube.com/watch?v=lQVIVX5iHkU', '2022-02-03', '2022-02-23 07:14:15', '2022-02-23 07:20:58');

-- --------------------------------------------------------

--
-- Table structure for table `data_suratkeluar`
--

CREATE TABLE `data_suratkeluar` (
  `id` int(3) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `perihal` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_suratkeluar`
--

INSERT INTO `data_suratkeluar` (`id`, `no_surat`, `perihal`, `tanggal`, `link`, `created_at`, `updated_at`) VALUES
(2, 'TI2022/SK-10/0222', 'Survey TA', '2022-02-16', 'https://www.youtube.com/watch?v=lQVIVX5iHkU', '2022-02-23 07:12:40', '2022-02-23 07:13:57');

-- --------------------------------------------------------

--
-- Table structure for table `data_suratmasuk`
--

CREATE TABLE `data_suratmasuk` (
  `id` int(3) NOT NULL,
  `tanggal` date NOT NULL,
  `asal_surat` varchar(100) NOT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_suratmasuk`
--

INSERT INTO `data_suratmasuk` (`id`, `tanggal`, `asal_surat`, `link`, `created_at`, `updated_at`) VALUES
(2, '2022-02-01', 'asdasd', 'https://www.youtube.com/watch?v=lQVIVX5iHkU', '2022-02-21 23:32:00', '2022-02-21 23:32:00'),
(3, '2022-02-10', 'asdasd', 'https://www.youtube.com/watch?v=lQVIVX5iHkU', '2022-02-23 07:11:50', '2022-02-23 07:11:50');

-- --------------------------------------------------------

--
-- Table structure for table `data_user`
--

CREATE TABLE `data_user` (
  `id` int(3) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(1) NOT NULL COMMENT '0)Non-Aktif; 1)Aktif;',
  `role` int(1) NOT NULL COMMENT '0)Admin; 1)User;',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_user`
--

INSERT INTO `data_user` (`id`, `nama`, `email`, `password`, `status`, `role`, `created_at`, `updated_at`) VALUES
(4, 'Dimas Fajrul F', 'dimas@gmail.com', '$2y$10$GPM/UZ1lxT3bK2TR8bQ87u3ihXIJn9iS/wjbfmkI7CUttdJlwyHca', 1, 0, '2022-02-23 07:56:32', '2022-02-23 08:41:40');

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
-- Indexes for table `data_user`
--
ALTER TABLE `data_user`
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
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_dokumentasi`
--
ALTER TABLE `data_dokumentasi`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data_isu`
--
ALTER TABLE `data_isu`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `data_keuangan`
--
ALTER TABLE `data_keuangan`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data_notadinas`
--
ALTER TABLE `data_notadinas`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_suratkeluar`
--
ALTER TABLE `data_suratkeluar`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_suratmasuk`
--
ALTER TABLE `data_suratmasuk`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data_user`
--
ALTER TABLE `data_user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
