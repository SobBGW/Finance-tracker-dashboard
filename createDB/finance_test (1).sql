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

-- --------------------------------------------------------

--
-- Table structure for table `outbound_payments`
--

CREATE TABLE `outbound_payments` (
  `id` int(11) NOT NULL,
  `entity` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_type` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(10) NOT NULL,
  `date_submitted` date NOT NULL DEFAULT current_timestamp(),
  `time_submitted` timestamp NOT NULL DEFAULT current_timestamp(),
  `approved` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `outbound_payments`
--

INSERT INTO `outbound_payments` (`id`, `entity`, `transaction_type`, `amount`, `date_submitted`, `time_submitted`, `approved`) VALUES
(1, 'uk', 'lol', 1000, '2022-05-19', '2022-05-19 10:22:26', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) UNSIGNED NOT NULL,
  `firstname` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_group` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `password`, `role`, `user_group`) VALUES
(13, 'John', 'Ross', 'john.ham', 'fffd', 'member', 'finance');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daily_recon`
--
ALTER TABLE `daily_recon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `outbound_payments`
--
ALTER TABLE `outbound_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daily_recon`
--
ALTER TABLE `daily_recon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `outbound_payments`
--
ALTER TABLE `outbound_payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
