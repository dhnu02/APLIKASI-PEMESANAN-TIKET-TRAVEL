-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2020 at 04:19 PM
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
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
`id` int(11) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telepon` varchar(50) NOT NULL,
  `jk` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `nik`, `nama`, `alamat`, `telepon`, `jk`, `username`, `password`) VALUES
(7, '1800018226', 'Aldimas de Arsilla', 'Magetan', '089523647755', 'Laki-laki', 'aldimasnh', 'dimas1987');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_berangkat`
--

CREATE TABLE IF NOT EXISTS `jadwal_berangkat` (
`id` int(11) NOT NULL,
  `nama_armada` varchar(50) NOT NULL,
  `kota_asal` varchar(50) NOT NULL,
  `kota_tujuan` varchar(50) NOT NULL,
  `jam_berangkat` varchar(50) NOT NULL,
  `jam_datang` varchar(50) NOT NULL,
  `tarif` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal_berangkat`
--

INSERT INTO `jadwal_berangkat` (`id`, `nama_armada`, `kota_asal`, `kota_tujuan`, `jam_berangkat`, `jam_datang`, `tarif`) VALUES
(1, 'Avanza', 'Banyuwangi', 'Yogyakarta', '15:30', '03:30', '250000'),
(2, 'Grand Livina', 'Madiun', 'Purwokerto', '14:00', '20:00', '275000'),
(3, 'APV', 'Surabaya', 'Semarang', '12:00', '19:00', '300000'),
(4, 'Ertiga', 'Malang', 'Tasikmalaya', '10:30', '00:30', '250000'),
(5, 'ELF', 'Surabaya', 'Jakarta', '09:00', '00:00', '300000'),
(6, 'Xenia', 'Magetan', 'Yogyakarta', '15:30', '20:00', '130000');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan_customer`
--

CREATE TABLE IF NOT EXISTS `pesanan_customer` (
`id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_jadwal` int(11) NOT NULL,
  `kode_booking` varchar(50) NOT NULL,
  `armada` varchar(50) NOT NULL,
  `rute` varchar(50) NOT NULL,
  `jam_berangkat` varchar(50) NOT NULL,
  `jam_datang` varchar(50) NOT NULL,
  `tgl_berangkat` date NOT NULL,
  `tarif` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan_customer`
--

INSERT INTO `pesanan_customer` (`id`, `id_user`, `id_jadwal`, `kode_booking`, `armada`, `rute`, `jam_berangkat`, `jam_datang`, `tgl_berangkat`, `tarif`, `status`) VALUES
(8, 3, 6, '421653', 'Xenia', 'Magetan - Yogyakarta', '15:30', '20:00', '2020-08-01', '130000', 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`) VALUES
(2, 'admin', 'admin', 'admin'),
(3, 'Aldimas de Arsilla', 'aldimasnh', 'dimas1987');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal_berangkat`
--
ALTER TABLE `jadwal_berangkat`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan_customer`
--
ALTER TABLE `pesanan_customer`
 ADD PRIMARY KEY (`id`), ADD KEY `id_user` (`id_user`,`id_jadwal`), ADD KEY `id_jadwal` (`id_jadwal`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `jadwal_berangkat`
--
ALTER TABLE `jadwal_berangkat`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pesanan_customer`
--
ALTER TABLE `pesanan_customer`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `pesanan_customer`
--
ALTER TABLE `pesanan_customer`
ADD CONSTRAINT `pesanan_customer_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`),
ADD CONSTRAINT `pesanan_customer_ibfk_2` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwal_berangkat` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
