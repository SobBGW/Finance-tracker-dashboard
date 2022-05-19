-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 19, 2022 at 02:41 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finance_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `daily_recon`
--

CREATE TABLE `daily_recon` (
  `id` int(11) NOT NULL,
  `created` tinyint(1) NOT NULL DEFAULT 0,
  `reviewed_1` tinyint(1) NOT NULL DEFAULT 0,
  `reviewed_2` tinyint(1) NOT NULL DEFAULT 0,
  `aprroved` tinyint(1) NOT NULL DEFAULT 0,
  `created_time` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '00:00:00',
  `reviewed_1_time` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '00:00:00',
  `reviewed_2_time` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '00:00:00',
  `approved_time` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `daily_recon`
--

INSERT INTO `daily_recon` (`id`, `created`, `reviewed_1`, `reviewed_2`, `aprroved`, `created_time`, `reviewed_1_time`, `reviewed_2_time`, `approved_time`) VALUES
(2, 1, 1, 0, 1, '15:03:00', '15:03:00', '15:03:00', '15:03:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daily_recon`
--
ALTER TABLE `daily_recon`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daily_recon`
--
ALTER TABLE `daily_recon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
