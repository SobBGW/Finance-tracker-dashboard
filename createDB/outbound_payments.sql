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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `outbound_payments`
--
ALTER TABLE `outbound_payments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `outbound_payments`
--
ALTER TABLE `outbound_payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
