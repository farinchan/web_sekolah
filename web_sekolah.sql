-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 16, 2023 at 11:12 AM
-- Server version: 5.7.33
-- PHP Version: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `id` int(10) NOT NULL,
  `agenda_nama` varchar(255) NOT NULL,
  `agenda_tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `agenda_deskripsi` text NOT NULL,
  `agenda_mulai` date NOT NULL,
  `agenda_selesai` date NOT NULL,
  `agenda_tempat` varchar(255) NOT NULL,
  `agenda_waktu` varchar(255) NOT NULL,
  `agenda_keterangan` varchar(255) NOT NULL,
  `agenda_author` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `views` int(10) NOT NULL DEFAULT '1',
  `thumbnail` varchar(255) NOT NULL,
  `kategori_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `author` varchar(255) NOT NULL,
  `meta_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `slug`, `isi`, `tanggal`, `views`, `thumbnail`, `kategori_id`, `user_id`, `author`, `meta_description`) VALUES
(1, 'test', 'test', 'test', '2023-01-31 17:00:00', 2, 'test', 1, 1, 'test', 'test'),
(2, 'test', 'test', 'test', '2023-02-07 17:00:00', 2, 'test', 1, 1, 'test', 'test'),
(3, 'test', 'test', 'test', '2023-02-07 17:00:00', 2, 'test', 1, 1, 'test', 'test'),
(4, 'test', 'test', 'test', '2023-02-07 17:00:00', 2, 'test', 1, 1, 'test', 'test'),
(5, 'test', 'test', 'test', '2023-02-07 17:00:00', 2, 'test', 1, 1, 'test', 'test'),
(6, 'test', 'test', 'test', '2023-02-07 17:00:00', 2, 'test', 1, 1, 'test', 'test'),
(7, 'test', 'test', 'test', '2023-02-07 17:00:00', 2, 'test', 1, 1, 'test', 'test'),
(8, 'test', 'test', 'test', '2023-02-07 17:00:00', 2, 'test', 1, 1, 'test', 'test'),
(9, 'test', 'test', 'test', '2023-02-07 17:00:00', 2, 'test', 1, 1, 'test', 'test'),
(10, 'test', 'test', 'test', '2023-02-07 17:00:00', 2, 'test', 1, 1, 'test', 'test'),
(11, 'test', 'test', 'test', '2023-02-07 17:00:00', 2, 'test', 1, 1, 'test', 'test'),
(12, 'test', 'test', 'test', '2023-02-07 17:00:00', 2, 'test', 1, 1, 'test', 'test'),
(13, 'test', 'test', 'test', '2023-02-07 17:00:00', 2, 'test', 1, 1, 'test', 'test'),
(14, 'test', 'test', 'test', '2023-02-07 17:00:00', 2, 'test', 1, 1, 'test', 'test'),
(15, 'test', 'test', 'test', '2023-02-07 17:00:00', 2, 'test', 1, 1, 'test', 'test'),
(16, 'test', 'test', 'test', '2023-01-31 17:00:00', 2, 'test', 1, 1, 'test', 'test'),
(17, 'test', 'test', 'test', '2023-01-31 17:00:00', 2, 'test', 1, 1, 'test', 'test'),
(18, 'test', 'test', 'test', '2023-01-31 17:00:00', 2, 'test', 1, 1, 'test', 'test'),
(19, 'test', 'test', 'test', '2023-01-31 17:00:00', 2, 'test', 1, 1, 'test', 'test'),
(20, 'test', 'test', 'test', '2023-01-31 17:00:00', 2, 'test', 1, 1, 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE `download` (
  `id` int(10) NOT NULL,
  `download_judul` varchar(255) NOT NULL,
  `download_deskripsi` text NOT NULL,
  `download_tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `download_author` varchar(255) NOT NULL,
  `download_total` int(10) NOT NULL DEFAULT '0',
  `download_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `download`
--

INSERT INTO `download` (`id`, `download_judul`, `download_deskripsi`, `download_tanggal`, `download_author`, `download_total`, `download_file`) VALUES
(1, 'Ini adalah test judul', 'untuk apa', '2023-02-16 10:58:20', 'Fajri', 0, 'gg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `name`, `slug`, `createdAt`) VALUES
(6, 'Pembelajaran', 'pembelajaran', '2023-02-01 02:08:26'),
(11, 'Kegiatan', 'kegiatan', '2023-02-15 14:15:27');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` int(10) NOT NULL,
  `pengumuman_judul` varchar(255) NOT NULL,
  `pengumuman_deskripsi` text NOT NULL,
  `pengumuman_tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pengumuman_author` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tenaga_pengajar`
--

CREATE TABLE `tenaga_pengajar` (
  `id` int(10) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(2) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `mata_pelajaran` varchar(30) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tenaga_pengajar`
--

INSERT INTO `tenaga_pengajar` (`id`, `nip`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `mata_pelajaran`, `foto`) VALUES
(1, '123', 'inan', 'L', 'Medan', '2023-02-16', 'Advance mobile', 'teststststs');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `user_email` varchar(100) DEFAULT NULL,
  `user_password` varchar(200) DEFAULT NULL,
  `user_created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`, `user_created_at`) VALUES
(1, 'Fajri', 'fajri@gariskode.com', '$2y$10$3Su6/5x5cb3dUCsuNz6QM.lKVDQyH4P/6dHLad1jIqe59YSB9Dq16', '2023-02-14 10:44:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tenaga_pengajar`
--
ALTER TABLE `tenaga_pengajar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `download`
--
ALTER TABLE `download`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tenaga_pengajar`
--
ALTER TABLE `tenaga_pengajar`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
