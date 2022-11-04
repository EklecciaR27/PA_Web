-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2022 at 04:52 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

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
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `psw` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `username`, `email`, `psw`, `level`) VALUES
(1, 'user', 'user@gmail.com', '$2y$10$FmFV2m8p5iaQamhv.QDLKOu/ALvqnHWznoVt4jzvceDRqJIuubZCm', ''),
(2, 'admin', 'admin@gmail.com', '$2y$10$rNqslY6zi2aHeeC3QkHvh.zYZeLgAtYTS/zeDFDOqYh7iILHdE9vG', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cafe`
--

CREATE TABLE `cafe` (
  `nama` varchar(255) NOT NULL,
  `phone` int(12) NOT NULL,
  `deskripsi` varchar(999) NOT NULL,
  `alamat` varchar(999) NOT NULL,
  `id` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cafe`
--

INSERT INTO `cafe` (`nama`, `phone`, `deskripsi`, `alamat`, `id`, `gambar`) VALUES
('Satu Kata Coffee ', 54122332, 'Cafenya bagus, estetik, tapi minumannya mehong :) terus baristanya baik, lahan parkir luas. minumannya unik unik, apalagi yah, kopinya enak abis. lu musti coba dahhh', 'Jl. Basuki Rahmat, Bugis, Kec. Samarinda Kota, Kota Samarinda, Kalimantan Timur 75242', 1, 'cafeSatuKata1.png'),
('Safe House Cafe', 654321, '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', 'Jl. Ahmad Yani No.14, Temindung Permai, Kec. Sungai Pinang, Kota Samarinda, Kalimantan Timur 75117', 2, 'cafeSH3.png'),
('Cetro Coffee&CO', 541223344, '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', 'Jl. Siradj Salman No.6a, RW.01, Air Hitam, Kec. Samarinda Ulu, Kota Samarinda, Kalimantan Timur 75124\r\n232342123', 4, 'cafeCetro3.png');

-- --------------------------------------------------------

--
-- Table structure for table `cafe1`
--

CREATE TABLE `cafe1` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `rating` varchar(20) NOT NULL,
  `pesan` varchar(500) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cafe1`
--

INSERT INTO `cafe1` (`id`, `tanggal`, `rating`, `pesan`, `nama`) VALUES
(8, '2022-10-13', '5', ' Huyy', 'Rannel Elgio'),
(9, '2022-11-06', '7', ' Nice', 'agdita'),
(10, '2022-11-22', '6', ' a', 'alexander'),
(11, '2022-11-28', '11', ' 1', 'ciaaakk'),
(12, '2022-10-31', '3', ' 3', '1'),
(13, '2022-11-08', '9', ' Keren abis', 'Alan Cyrus');

-- --------------------------------------------------------

--
-- Table structure for table `cafe2`
--

CREATE TABLE `cafe2` (
  `id` int(11) NOT NULL,
  `tanggal` int(11) NOT NULL,
  `rating` int(50) NOT NULL,
  `pesan` varchar(500) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cafe2`
--

INSERT INTO `cafe2` (`id`, `tanggal`, `rating`, `pesan`, `nama`) VALUES
(1, 2022, 5, ' Safe banget disini. enak lagi. thanks', 'Refal Hadi');

-- --------------------------------------------------------

--
-- Table structure for table `cafe3`
--

CREATE TABLE `cafe3` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `rating` int(5) NOT NULL,
  `pesan` varchar(500) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cafe3`
--

INSERT INTO `cafe3` (`id`, `tanggal`, `rating`, `pesan`, `nama`) VALUES
(1, '2022-11-01', 10, ' Kerennn ABIS, Murah lagi\r\n', 'Rannel Elgio'),
(2, '2022-10-30', 5, ' Pelayanan nya ga ramah huh', 'MinGyuw');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cafe`
--
ALTER TABLE `cafe`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cafe`
--
ALTER TABLE `cafe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cafe1`
--
ALTER TABLE `cafe1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `cafe2`
--
ALTER TABLE `cafe2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cafe3`
--
ALTER TABLE `cafe3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
