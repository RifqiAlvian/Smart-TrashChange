-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2022 at 04:51 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hosting`
--

-- --------------------------------------------------------

--
-- Table structure for table `hosting`
--

CREATE TABLE `hosting` (
  `id_hosting` int(10) UNSIGNED NOT NULL,
  `nama_hosting` varchar(25) DEFAULT NULL,
  `has_cpanel` char(1) DEFAULT NULL,
  `has_ssl` char(1) DEFAULT NULL,
  `has_subdomain` char(1) DEFAULT NULL,
  `has_storage` int(10) UNSIGNED DEFAULT NULL,
  `num_database` int(10) UNSIGNED DEFAULT NULL,
  `harga` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hosting`
--

INSERT INTO `hosting` (`id_hosting`, `nama_hosting`, `has_cpanel`, `has_ssl`, `has_subdomain`, `has_storage`, `num_database`, `harga`) VALUES
(2, 'GoLiveMedium', 'Y', 'N', 'N', 1500, 100000, 150000),
(3, 'GoLiveLong', 'Y', 'Y', 'Y', 50000, 5000, 250001),
(5, 'GoLiveShort', 'T', 'T', 'T', 500, 100, 100000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hosting`
--
ALTER TABLE `hosting`
  ADD PRIMARY KEY (`id_hosting`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hosting`
--
ALTER TABLE `hosting`
  MODIFY `id_hosting` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
