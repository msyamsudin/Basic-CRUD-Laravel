-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 22, 2018 at 08:21 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cobasaja`
--

-- --------------------------------------------------------

--
-- Table structure for table `dt_siswa`
--

CREATE TABLE `dt_siswa` (
  `id` int(11) NOT NULL,
  `nis` varchar(50) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `tempat_lahir` varchar(100) DEFAULT NULL,
  `tgl_lahir` varchar(50) DEFAULT NULL,
  `jenis_kelamin` varchar(50) DEFAULT NULL,
  `agama` varchar(50) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `hp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dt_siswa`
--

INSERT INTO `dt_siswa` (`id`, `nis`, `nama`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `agama`, `alamat`, `hp`) VALUES
(5, '028372650092', 'Ganhill Grangschmidt', 'Jakarta', '09/04/1997', 'laki-laki', 'Islam', 'ini alamat si A', '081111111111'),
(6, '029382736122', 'Smitor Culldunn', 'Jakarta', '22/11/2018', 'laki-laki', 'Islam', 'ini alamat si B', '08222222222222'),
(7, '029999381728', 'Pierione Grangwilson', 'Jakarta', '19/06/1998', 'perempuan', 'Katholik', 'ini alamat si C', '08333333333'),
(8, '028739918720', 'Stevens Evens', 'Surabaya', '22/11/2018', 'laki-laki', 'Budha', 'ini alamat nya si C', '084444444');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dt_siswa`
--
ALTER TABLE `dt_siswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nis` (`nis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dt_siswa`
--
ALTER TABLE `dt_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
