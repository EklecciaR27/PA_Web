-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2022 at 04:43 PM
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
-- Database: `pa_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `cafe1`
--

CREATE TABLE `cafe1` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `rating` varchar(20) NOT NULL,
  `pesan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cafe1`
--

INSERT INTO `cafe1` (`id`, `tanggal`, `rating`, `pesan`) VALUES
(3, '2022-10-31', '', 'WEBNYA ANEHHHHHHHH');

-- --------------------------------------------------------

--
-- Table structure for table `cafe2`
--

CREATE TABLE `cafe2` (
  `id` int(11) NOT NULL,
  `tanggal` int(11) NOT NULL,
  `rating` int(50) NOT NULL,
  `pesan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cafe3`
--

CREATE TABLE `cafe3` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `rating` int(5) NOT NULL,
  `pesan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cafe1`
--
ALTER TABLE `cafe1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cafe2`
--
ALTER TABLE `cafe2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cafe3`
--
ALTER TABLE `cafe3`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cafe1`
--
ALTER TABLE `cafe1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cafe2`
--
ALTER TABLE `cafe2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cafe3`
--
ALTER TABLE `cafe3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
