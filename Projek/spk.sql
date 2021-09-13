-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2021 at 03:15 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk`
--

-- --------------------------------------------------------

--
-- Table structure for table `bobot_user`
--

CREATE TABLE `bobot_user` (
  `id` int(3) NOT NULL,
  `id_user` int(3) NOT NULL,
  `id_konsentrasi` int(3) NOT NULL,
  `ipk` int(3) NOT NULL,
  `keahlian` int(3) NOT NULL,
  `pengalaman` int(3) NOT NULL,
  `pelatihan` int(3) NOT NULL,
  `speaking` int(3) NOT NULL,
  `inggris` int(3) NOT NULL,
  `leadership` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bobot_user`
--

INSERT INTO `bobot_user` (`id`, `id_user`, `id_konsentrasi`, `ipk`, `keahlian`, `pengalaman`, `pelatihan`, `speaking`, `inggris`, `leadership`) VALUES
(6, 1, 2, 5, 3, 3, 2, 4, 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(11) NOT NULL,
  `jurusan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id`, `jurusan`) VALUES
(1, 'Teknik Informatika'),
(2, 'Teknik Mesin'),
(3, 'Teknik Industri'),
(4, 'Teknik Penerbangan'),
(5, 'Teknik Elektro'),
(6, 'D3 Aeronautika');

-- --------------------------------------------------------

--
-- Table structure for table `konsentrasi`
--

CREATE TABLE `konsentrasi` (
  `id` int(3) NOT NULL,
  `id_jurusan` int(3) NOT NULL,
  `nama_konsentrasi` varchar(40) NOT NULL,
  `bobot` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `konsentrasi`
--

INSERT INTO `konsentrasi` (`id`, `id_jurusan`, `nama_konsentrasi`, `bobot`) VALUES
(2, 1, 'Sistem Informasi ', 3),
(3, 1, 'Jaringan ', 2),
(4, 1, 'Animasi ', 1),
(5, 3, 'Manajemen Industri  ', 3),
(6, 3, 'Manajemen Industri Penerbangan', 2),
(7, 3, 'Sistem Industri Manufaktur', 1),
(8, 5, 'Elektronika Penerbangan', 2),
(9, 5, 'Telekomunikasi ', 1),
(10, 2, 'Mesin Pesawat Terbang', 3),
(11, 2, 'Konversi Energi ', 2),
(12, 2, 'Bahan dan Manufaktur', 1),
(13, 4, 'Perancangan Pesawat Terbang', 3),
(14, 4, 'Perawatan Pesawat Terbang', 2),
(15, 4, 'Operasi Penerbangan ', 1),
(16, 6, 'Airframe Power Plant', 2),
(17, 6, 'Electrical Avionic', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `id` int(3) NOT NULL,
  `id_jurusan` int(3) NOT NULL,
  `id_konsentrasi` int(3) NOT NULL,
  `konsentrasi` int(3) NOT NULL,
  `nama_pekerjaan` varchar(40) NOT NULL,
  `ipk` int(3) NOT NULL,
  `keahlian` int(3) NOT NULL,
  `pengalaman` int(3) NOT NULL,
  `pelatihan` int(3) NOT NULL,
  `speaking` int(3) NOT NULL,
  `inggris` int(3) NOT NULL,
  `leadership` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pekerjaan`
--

INSERT INTO `pekerjaan` (`id`, `id_jurusan`, `id_konsentrasi`, `konsentrasi`, `nama_pekerjaan`, `ipk`, `keahlian`, `pengalaman`, `pelatihan`, `speaking`, `inggris`, `leadership`) VALUES
(6, 1, 2, 3, 'System Analyst', 5, 5, 3, 2, 3, 4, 4),
(7, 2, 10, 3, 'Mechaninal Officer', 4, 5, 2, 1, 2, 3, 4),
(8, 1, 4, 1, 'Graphic Designer', 3, 4, 2, 1, 1, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(3) NOT NULL,
  `id_jurusan` int(3) NOT NULL,
  `nama_user` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `id_jurusan`, `nama_user`) VALUES
(1, 1, 'Nurul Maulida');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bobot_user`
--
ALTER TABLE `bobot_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konsentrasi`
--
ALTER TABLE `konsentrasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bobot_user`
--
ALTER TABLE `bobot_user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `konsentrasi`
--
ALTER TABLE `konsentrasi`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
