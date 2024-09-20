-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2023 at 02:59 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_dvd`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin01', '01admin');

-- --------------------------------------------------------

--
-- Table structure for table `dvd`
--

CREATE TABLE `dvd` (
  `id_film` int(6) NOT NULL,
  `judul` char(100) DEFAULT NULL,
  `sekilas` text DEFAULT NULL,
  `jenis` char(20) DEFAULT NULL,
  `nama_gmb` char(200) DEFAULT NULL,
  `sutradara` char(30) DEFAULT NULL,
  `pemain_utama` char(30) DEFAULT NULL,
  `harga` int(6) DEFAULT NULL,
  `thn_terbit` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dvd`
--

INSERT INTO `dvd` (`id_film`, `judul`, `sekilas`, `jenis`, `nama_gmb`, `sutradara`, `pemain_utama`, `harga`, `thn_terbit`) VALUES
(1, 'kungfu panda', 'sfsdfdsf', 'fiksi aksi', 'sdasdsa', 'naufal', 'rafid', 50000, 2022),
(3, 'upin dan ipin', 'film tentang anak kembar', 'series', 'upin dan ipin', 'datuk', 'upin, ipin, opah, kak ros', 89000, 2023),
(8, 'aadc', 'cinta', 'romance', 'ini gambar', 'harul', 'denny', 30000, 2015),
(10, 'sdswadfds', 'fdsfsdaf', 'dsfsdf', 'dsfdsf', 'dsfdfd', 'fdsf', 345345, 0000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dvd`
--
ALTER TABLE `dvd`
  ADD PRIMARY KEY (`id_film`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dvd`
--
ALTER TABLE `dvd`
  MODIFY `id_film` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
