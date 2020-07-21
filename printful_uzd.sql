-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2020 at 10:45 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `printful_uzd`
--

-- --------------------------------------------------------

--
-- Table structure for table `print_uzd_tab`
--

CREATE TABLE `print_uzd_tab` (
  `id` int(11) NOT NULL,
  `virsraksts` text NOT NULL,
  `apraksts` text NOT NULL,
  `laiks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `print_uzd_tab`
--

INSERT INTO `print_uzd_tab` (`id`, `virsraksts`, `apraksts`, `laiks`) VALUES
(48, 'Printful uzdevums', 'Sagatavot nepieciešamos skatus.', ''),
(49, 'Nosūtīt uzdevumu', 'Kad viss pabeigts, tad atceries šo nosūtīt!', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `print_uzd_tab`
--
ALTER TABLE `print_uzd_tab`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `print_uzd_tab`
--
ALTER TABLE `print_uzd_tab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
