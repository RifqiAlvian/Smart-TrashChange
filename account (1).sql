-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2022 at 04:44 AM
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
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id_Account` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Sandi` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id_Account`, `Username`, `Email`, `Sandi`, `role_id`, `is_active`, `date_created`) VALUES
(41, 'vaxcz112', 'testing@gmail.com', '$2y$10$A5i.JZYdzJBwxX0AAGmqK.yyCbWJAHSHOW14tKwHtvkI07pxp6oG.', 0, 1, 1666078871),
(42, 'vaxcz11212rd2', 'tesating@gmail.com', '$2y$10$VSoQo9xsnGZM36dCko1LBO6L/SxOarApI2Gnv.YkqJNFxvZO2QT56', 0, 1, 1666078991),
(43, 'vaxcz112112rd2', 'permadani12a3@gmail.com', '$2y$10$wTTdETZeSWFzGH3r3pnIDuiXiz.ohA.50UO4ga3cwXfrgVzke5.pC', 0, 1, 1666081301),
(44, 'agasuck', 'alfianitem999@gmail.com', 'rinja123', 1, 1, 12312),
(45, 'test', 'test@gmail.com', 'rinja123', 0, 1, 12412412),
(46, 'agasuck1231', 'alfianitem9199@gmail.com', '$2y$10$Y2bdlKs4UM2JPwAQSwMnkOB2jrsHMhu/PU42dnx7OsNx3z6j/.QR.', 0, 1, 1667900871),
(47, 'agasuckad', 'alfianitem999@gmail.com', '$2y$10$uMEQBSpADrwY8yNVyIMEseN5386hdWJ6YLj8jBrNTDUcdHOwpI4hi', 0, 1, 1667900877),
(51, 'agasuck123', 'fian_dm@yahoo.com', '$2y$10$uBod1IHASQoPk4Uaqw5TaurUebZ0lRDBu9UMmFGzQIVAeG/xCdtgS', 0, 1, 1667902249),
(52, 'agasuck12345', 'bliszardboostjasaboosting7@gmail.com', 'rinja123', 0, 1, 1667902294),
(53, 'alfiandm123', 'AlfianKanaerus@gmail.com', 'rinja123', 0, 1, 1667902804),
(59, 'agasuck123', 'alfianitem999@gmail.com', 'ZXC', 0, 1, 1667905467),
(61, 'alfiandm123', 'pgnjg14@gmail.com', 'rinja123', 0, 1, 1667905512),
(68, 'agasuck1231a', 'alfiandmy11tz@gmail.com', 'rinja123', 0, 1, 1667907681),
(69, 'agasuck111', '20081010251@student.upnjatim.ac.id', 'rinja123', 0, 1, 1667907855),
(70, 'agasuckaaa', '2008101025a1@student.upnjatim.ac.id', 'rinja123', 0, 1, 1667907892),
(71, 'agasuckasd', 'alfianitem9991@gmail.com', 'rinja123', 0, 1, 1670642784);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id_Account`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id_Account` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
