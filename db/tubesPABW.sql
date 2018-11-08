-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 08, 2018 at 10:18 PM
-- Server version: 5.7.24-0ubuntu0.16.04.1
-- PHP Version: 7.0.32-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubesPABW`
--

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas_venue`
--

CREATE TABLE `fasilitas_venue` (
  `id` int(6) UNSIGNED NOT NULL,
  `id_venue` int(6) UNSIGNED DEFAULT NULL,
  `fasilitas` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gambar_lapangan_venue`
--

CREATE TABLE `gambar_lapangan_venue` (
  `id` int(6) UNSIGNED NOT NULL,
  `id_venue` int(6) UNSIGNED DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jam_operasional_venue`
--

CREATE TABLE `jam_operasional_venue` (
  `id` int(6) UNSIGNED NOT NULL,
  `id_venue` int(6) UNSIGNED DEFAULT NULL,
  `buka_jam_operasional` time DEFAULT NULL,
  `tutup_jam_operasional` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_olahraga_venue`
--

CREATE TABLE `jenis_olahraga_venue` (
  `id` int(6) UNSIGNED NOT NULL,
  `id_venue` int(6) UNSIGNED DEFAULT NULL,
  `jenis_olahraga` varchar(255) DEFAULT NULL,
  `jenis_lapangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`) VALUES
(1, 'andrianm28@gmail.com', 'lolipop28');

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

CREATE TABLE `venue` (
  `id` int(6) UNSIGNED NOT NULL,
  `nama_venue` varchar(255) DEFAULT NULL,
  `deskripsi_venue` varchar(255) DEFAULT NULL,
  `alamat_venue` varchar(255) DEFAULT NULL,
  `latitude_venue` varchar(255) DEFAULT NULL,
  `longitude_venue` varchar(255) DEFAULT NULL,
  `kontak_venue` varchar(255) DEFAULT NULL,
  `jumlah_lapangan_venue` varchar(255) DEFAULT NULL,
  `harga_lapangan_venue` varchar(255) DEFAULT NULL,
  `gambar_venue` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fasilitas_venue`
--
ALTER TABLE `fasilitas_venue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gambar_lapangan_venue`
--
ALTER TABLE `gambar_lapangan_venue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jam_operasional_venue`
--
ALTER TABLE `jam_operasional_venue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_olahraga_venue`
--
ALTER TABLE `jenis_olahraga_venue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `venue`
--
ALTER TABLE `venue`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fasilitas_venue`
--
ALTER TABLE `fasilitas_venue`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gambar_lapangan_venue`
--
ALTER TABLE `gambar_lapangan_venue`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jam_operasional_venue`
--
ALTER TABLE `jam_operasional_venue`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jenis_olahraga_venue`
--
ALTER TABLE `jenis_olahraga_venue`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `venue`
--
ALTER TABLE `venue`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
