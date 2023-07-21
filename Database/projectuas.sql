-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2023 at 10:12 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectuas`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_mobil`
--

CREATE TABLE `data_mobil` (
  `idmobil` int(225) NOT NULL,
  `brand_mobil` varchar(225) NOT NULL,
  `nama_mobil` varchar(225) NOT NULL,
  `harga_sewa` varchar(225) NOT NULL,
  `gambar_mobil` varchar(225) NOT NULL,
  `gambar_desc_mobil` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_mobil`
--

INSERT INTO `data_mobil` (`idmobil`, `brand_mobil`, `nama_mobil`, `harga_sewa`, `gambar_mobil`, `gambar_desc_mobil`) VALUES
(1, 'toyota', 'All New Avanza', '350000', 'all-new-avanza-pict.png', 'all-new-avanza-desc.png'),
(2, 'daihatsu', 'All New Terios', '500000', 'all-new-terios-pict.png', 'all-new-terios-desc.png'),
(3, 'toyota', 'agya', '300000', 'toyota-agya-pict.png', 'toyota-agya-desc.png'),
(4, 'toyota', 'camry', '400000', 'toyota-camry-pict.png', 'toyota-camry-desc.png'),
(5, 'toyota', 'fortuner', '600000', 'toyota-fortuner-pict.png', 'toyota-fortuner-desc.png'),
(6, 'toyota', 'Vios', '350000', 'toyota-vios-pict.png', 'toyota-vios-desc.png'),
(7, 'toyota', 'Yaris', '300000', 'toyota-yaris-pict.png', 'toyota-yaris-desc.png'),
(8, 'wuling', 'Almaz', '400000', 'wuling-almaz-pict.png', 'wuling-almaz-desc.png'),
(9, 'wuling', 'Alvez', '400000', 'wuling-alvez-pict.png', 'wuling-alvez-desc.png'),
(10, 'wuling', 'Confero', '450000', 'wuling-confero-pict.png', 'wuling-confero-desc.png'),
(11, 'wuling', 'Cortez', '400000', 'wuling-cortez-pict.png', 'wuling-cortez-desc.png'),
(12, 'wuling', 'Formo', '400000', 'wuling-formo-pict.png', 'wuling-formo-desc.png'),
(13, 'honda', 'BR-V', '450000', 'honda-brv-pict.png', 'honda-brv-desc.png'),
(14, 'honda', 'City', '450000', 'honda-city-pict.png', 'honda-city-desc.png'),
(15, 'honda', 'Civic', '450000', 'honda-civic-pict.png', 'honda-civic-desc.png'),
(16, 'honda', 'Jazz', '450000', 'honda-jazz-pict.png', 'honda-jazz-desc.png'),
(17, 'honda', 'Mobilio', '500000', 'honda-mobilio-pict.png', 'honda-mobilio-desc.png');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(225) NOT NULL,
  `user` varchar(225) NOT NULL,
  `passwd` varchar(15) NOT NULL,
  `namalengkap` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `user`, `passwd`, `namalengkap`) VALUES
(1, 'admin', 'admin', 'Boss Besar'),
(9, 'apa', 'bima3123', 'apakau');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `idpembayaran` int(225) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `nomor_hp` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `data_rental` varchar(225) NOT NULL,
  `jam` varchar(225) NOT NULL,
  `metode_pembayaran` varchar(225) NOT NULL,
  `nama_mobil` varchar(225) NOT NULL,
  `harga_sewa` varchar(225) NOT NULL,
  `tax` varchar(225) NOT NULL,
  `total` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`idpembayaran`, `nama`, `alamat`, `nomor_hp`, `email`, `data_rental`, `jam`, `metode_pembayaran`, `nama_mobil`, `harga_sewa`, `tax`, `total`) VALUES
(1, '', 'malan', '12321342345365', 'joshualianaldoradjuk1@gmail.com', 'drop', 'sad', 'sdaw', 'sadawd', '230000', '0.11', '255300'),
(2, 'JOSHUA LIAN ALDORA DJUK123', 'malang', '12321342345365', 'pmbjoshualianaldoradjuk1@gmail.com', 'drop_off', '04:06', 'gambar3', 'All New Avanza', '350000', '0.11', '388500'),
(3, 'JOSHUA LIAN ALDORA DJUK123', 'malang', '12321342345365', 'pmbjoshualianaldoradjuk1@gmail.com', 'drop_off', '04:06', 'gambar3', 'All New Avanza', '350000', '0.11', '388500'),
(4, 'JOSHUA LIAN ALDORA DJUK123', 'malang', '12321342345365', 'pmbjoshualianaldoradjuk1@gmail.com', 'drop_off', '04:06', 'gambar3', 'All New Avanza', '350000', '0.11', '388500'),
(5, 'Budi', 'Bali', '9028352907', 'abr.companyofc@gmail.com', 'penjemputan', '06:21', 'gambar2', 'All New Rush', '500000', '0.11', '555000'),
(6, 'asda', 'malang', '12321342345365', '085391081942@gmail.com', 'penjemputan', '21:09', 'BNI', 'Mobilio', '500000', '0.11', '555000'),
(7, 'asda', 'malang', '12321342345365', '085391081942@gmail.com', 'penjemputan', '21:09', 'BNI', 'Mobilio', '500000', '0.11', '555000'),
(8, 'asda', 'malang', '12321342345365', '085391081942@gmail.com', 'penjemputan', '21:09', 'BNI', 'Mobilio', '500000', '0.11', '555000'),
(9, 'Galih', 'Suhat', '6514891548400', 'joshualianaldoradjuk1@2gmail.com', 'penjemputan', '21:14', 'BNI', 'Mobilio', '500000', '0.11', '555000'),
(10, 'Galih', 'Suhat', '6514891548400', 'joshualianaldoradjuk1@2gmail.com', 'penjemputan', '21:14', 'BNI', 'Mobilio', '500000', '0.11', '555000'),
(11, 'arya', 'Bali', '9028352907', 'galihya95@gmail.com', 'penjemputan', '01:34', 'BNI', 'Mobilio', '500000', '0.11', '555000'),
(12, 'bapake', 'malan', '12321342345365', '085391081942@gmail.com', 'drop_off', '01:44', 'BNI', 'Mobilio', '500000', '0.11', '555000'),
(13, 'Perri', 'Bali', '12321342345365', 'galihya95@gmail.com', 'drop_off', '01:51', 'BNI', 'Mobilio', '500000', '0.11', '555000'),
(14, 'asda', 'malang', '9028352907', 'joshualianaldoradjuk1@gmail.com', 'drop_off', '01:50', 'BNI', 'Mobilio', '500000', '0.11', '555000'),
(15, 'JOSHUA LIAN ALDORA DJUK55', 'malang', '12321342345365', 'pmbjoshualianaldoradjuk1@gmail.com', 'drop_off', '03:03', 'MANDIRI', 'Mobilio', '500000', '0.11', '555000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_mobil`
--
ALTER TABLE `data_mobil`
  ADD PRIMARY KEY (`idmobil`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`idpembayaran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_mobil`
--
ALTER TABLE `data_mobil`
  MODIFY `idmobil` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `idpembayaran` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
