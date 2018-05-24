-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2017 at 07:30 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weblanjut`
--

-- --------------------------------------------------------

--
-- Table structure for table `matkul`
--

CREATE TABLE `matkul` (
  `kode` char(9) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `sks` int(2) NOT NULL,
  `kategori` enum('T','P','TP') NOT NULL,
  `progdi` enum('TI','SI') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matkul`
--

INSERT INTO `matkul` (`kode`, `nama`, `sks`, `kategori`, `progdi`) VALUES
('0123', 'Animasi', 4, '', 'TI'),
('099', 'Dimas Ruroh', 3, 'P', 'TI'),
('124', 'Rekayasa Web', 4, 'P', 'TI');

-- --------------------------------------------------------

--
-- Table structure for table `petani`
--

CREATE TABLE `petani` (
  `no_anggota` int(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telp` int(12) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petani`
--

INSERT INTO `petani` (`no_anggota`, `nama`, `alamat`, `telp`, `foto`) VALUES
(1256, 'Pardi', 'Ds bakaran', 2147483647, 'logo1.png'),
(7864, 'Sarno', 'jfjhkh', 898679, 'Sang_Pemimpi_sampul.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `pass`) VALUES
(1, 'admin', 'admin123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `petani`
--
ALTER TABLE `petani`
  ADD PRIMARY KEY (`no_anggota`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `petani`
--
ALTER TABLE `petani`
  MODIFY `no_anggota` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8976870;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
