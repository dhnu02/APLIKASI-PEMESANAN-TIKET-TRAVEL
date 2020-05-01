-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2020 at 10:42 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tp_prpl`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_berangkat`
--

CREATE TABLE IF NOT EXISTS `jadwal_berangkat` (
`id` int(11) NOT NULL,
  `nama_armada` varchar(50) NOT NULL,
  `relasi` varchar(50) NOT NULL,
  `jam_berangkat` varchar(50) NOT NULL,
  `jam_datang` varchar(50) NOT NULL,
  `tarif` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal_berangkat`
--

INSERT INTO `jadwal_berangkat` (`id`, `nama_armada`, `relasi`, `jam_berangkat`, `jam_datang`, `tarif`) VALUES
(1, 'Avanza', 'Banyuwangi-Yogyakarta', '15:30', '03:30', '250000'),
(2, 'Grand Livina', 'Madiun-Purwokerto', '14:00', '20:00', '275000'),
(3, 'APV', 'Surabaya-Semarang', '12:00', '19:00', '300000'),
(4, 'Ertiga', 'Malang-Tasikmalaya', '10:30', '00:30', '250000'),
(5, 'ELF', 'Surabaya-Jakarta', '09:00', '00:00', '300000');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan_tiket`
--

CREATE TABLE IF NOT EXISTS `pesanan_tiket` (
`id` int(11) NOT NULL,
  `nik` int(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `tgl_berangkat` text NOT NULL,
  `tujuan` text NOT NULL,
  `jumlah_penumpang` int(20) NOT NULL,
  `total_bayar` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan_tiket`
--

INSERT INTO `pesanan_tiket` (`id`, `nik`, `nama`, `alamat`, `tgl_berangkat`, `tujuan`, `jumlah_penumpang`, `total_bayar`) VALUES
(15, 1800018226, 'Aldimas de Arsilla', 'Magetan', '30/04/2020', '2', 1, '275000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwal_berangkat`
--
ALTER TABLE `jadwal_berangkat`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan_tiket`
--
ALTER TABLE `pesanan_tiket`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal_berangkat`
--
ALTER TABLE `jadwal_berangkat`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pesanan_tiket`
--
ALTER TABLE `pesanan_tiket`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
