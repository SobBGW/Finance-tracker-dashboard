-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 24, 2022 at 04:27 PM
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
-- Table structure for table `outstanding_invoices`
--

CREATE TABLE `outstanding_invoices` (
  `id` int(11) NOT NULL,
  `entity` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(100) NOT NULL,
  `date_due` date NOT NULL,
  `urgency` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PDF` mediumblob DEFAULT NULL,
  `approved` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `outstanding_invoices`
--

INSERT INTO `outstanding_invoices` (`id`, `entity`, `name`, `amount`, `date_due`, `urgency`, `PDF`, `approved`) VALUES
(1, 'UK', 'jdgjfdsakhds', 1000, '2022-05-19', 'High', NULL, 0),
(2, 'UK', 'jdgjfdsakhds', 1000, '2022-05-19', 'High', NULL, 1),
(3, 'UK', 'jdgjfdsakhds', 1000, '2022-05-20', 'High', NULL, 1),
(4, 'UK', 'jdgjfdsakhds', 1000, '2022-05-25', 'High', NULL, 1),
(5, 'UK', 'jdgjfdsakhds', 1000, '2022-05-26', 'High', NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `outstanding_invoices`
--
ALTER TABLE `outstanding_invoices`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `outstanding_invoices`
--
ALTER TABLE `outstanding_invoices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
