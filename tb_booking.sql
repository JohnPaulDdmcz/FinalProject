-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2024 at 12:45 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abcresort`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_booking`
--

CREATE TABLE `tb_booking` (
  `booking_no` int(11) NOT NULL,
  `packages` varchar(255) NOT NULL,
  `name` varchar(225) NOT NULL,
  `phoneNo` int(15) NOT NULL,
  `pax` int(225) NOT NULL,
  `arrival` date NOT NULL,
  `leaving` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_booking`
--

INSERT INTO `tb_booking` (`booking_no`, `packages`, `name`, `phoneNo`, `pax`, `arrival`, `leaving`) VALUES
(30, 'Daytour', 'Kiko', 2147483647, 2, '2024-05-04', '2024-05-04'),
(31, 'Overnight', 'Kiko', 2147483647, 3, '2024-05-04', '2024-05-04'),
(32, 'DayTour', 'Kiko', 2147483647, 3, '2024-05-04', '2024-05-18'),
(33, 'DayTour', 'Kiko', 2147483647, 3, '2024-05-03', '2024-05-17'),
(34, 'DayTour', 'Kiko', 2147483647, 10, '2024-05-04', '2024-06-04'),
(35, 'Overnight', 'Lynneth', 2147483647, 15, '2024-05-04', '2024-05-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_booking`
--
ALTER TABLE `tb_booking`
  ADD PRIMARY KEY (`booking_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_booking`
--
ALTER TABLE `tb_booking`
  MODIFY `booking_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
