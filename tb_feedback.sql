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
-- Table structure for table `tb_feedback`
--

CREATE TABLE `tb_feedback` (
  `feedback_id` int(11) NOT NULL,
  `packages` varchar(225) NOT NULL,
  `amenitiesFeed` varchar(225) NOT NULL,
  `overallFeed` varchar(225) NOT NULL,
  `rating` int(5) NOT NULL,
  `submissionDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_feedback`
--

INSERT INTO `tb_feedback` (`feedback_id`, `packages`, `amenitiesFeed`, `overallFeed`, `rating`, `submissionDate`) VALUES
(5, 'overnight', 'I recently had the pleasure of staying at your resort, and I wanted to share my thoughts and feedback on the amenities provided:', ' I recently had the pleasure of staying at your resort, and I wanted to share my thoughts and feedback on the amenities provided:', 5, '2024-05-02 14:10:35'),
(6, 'dayTour', 'sdsds', ' sdsd', 4, '2024-05-04 06:01:42'),
(7, 'dayTour', 'sdsdsd', ' sdsds', 4, '2024-05-04 06:06:41'),
(8, 'dayTour', 'gfgfg', ' fgfg', 3, '2024-05-04 06:16:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_feedback`
--
ALTER TABLE `tb_feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_feedback`
--
ALTER TABLE `tb_feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
