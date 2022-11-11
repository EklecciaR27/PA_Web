-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2022 at 07:37 PM
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
(2, 'admin', 'admin@gmail.com', '$2y$10$rNqslY6zi2aHeeC3QkHvh.zYZeLgAtYTS/zeDFDOqYh7iILHdE9vG', 'admin'),
(5, 'nopenul', 'nopenul@gmail.com', '$2y$10$r4ILyE4fe5HCLZ8pwAnH2e1hDxyR1/csqoR9TrqeUKZ0O28YXExB6', ''),
(8, 'ciak', 'ciarey@gmail.com', '$2y$10$h9YbOwoSe/Pik49c7y.QFuLhkpMfPhtDS93g.BCVff9FxH2Rp4OOq', ''),
(10, 'memed', 'nurmedina@gmail.com', '$2y$10$bJ4dDp7p8zUC4HevR8eCa.XU2WaEdeQUKQYE7tA7.E3ErqmvBtbiu', ''),
(11, 'ditaeva', 'ditz@gmail.com', '$2y$10$l2j2x8oOXSARCsKMdrQEtu/2.w83TDbZFpL28FywQe4uJUKv6DFTy', ''),
(13, 'sule', 'suleprikitiw@gmail.com', '$2y$10$vrbGEitKPhH66GevP6ponebjyG.JY06PorqmOuKawa0da.LIxMvue', '');

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
('Satu Kata Coffee ', 541223, 'Satu Kata Coffee merupakan salah satu cafe di Samarinda yang menyediakan aneka minuman kopi dan non kopi. Tempatnya cocok untuk kalian yang ingin hangout bareng keluarga, teman, maupun pacar.Jl. Basuki Rahmat, Bugis, Kec. Samarinda Kota, Kot...', 'Jl. Basuki Rahmat, Bugis, Kec. Samarinda Kota, Kota Samarinda, Kalimantan Timur 75242', 1, 'Satu Kata Coffee .png'),
('Safe House Cafe', 654321, 'Santai sejenak di Safe House yuk!\nLelah sehabis bekerja butuh booster untuk semangat lagi nih. Nikmati hidangan di Safe house ada pastry dan minuman yang enak enak yang bakal bikin kamu jadi semangat lagi 🥰\n-Giving you the best quality ingredient in every bite-⁣⁣⁣\n.⁣⁣⁣', 'Jl. Ahmad Yani No.14, Temindung Permai, Kec. Sungai Pinang, Kota Samarinda, Kalimantan Timur 75117', 2, 'cafeSH3.png'),
('Cetro Coffee&CO', 541223344, 'Tempat asyik & humble buat kumpul bersama teman, sahabat, & keluarga tercinta.\n# BerawalDariSini', 'Jl. Siradj Salman No.6a, RW.01, Air Hitam, Kec. Samarinda Ulu, Kota Samarinda, Kalimantan Timur 75124\r\n232342123', 4, 'cafeCetro3.png');

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
(9, '2022-11-06', '7', ' Nice', 'agdita'),
(14, '2022-11-02', '10', ' Keren oke banget buat nongki><', 'Nopenul'),
(15, '2022-11-07', '10', 'mantappp', 'ciacia');

-- --------------------------------------------------------

--
-- Table structure for table `cafe2`
--

CREATE TABLE `cafe2` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `rating` int(50) NOT NULL,
  `pesan` varchar(500) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cafe2`
--

INSERT INTO `cafe2` (`id`, `tanggal`, `rating`, `pesan`, `nama`) VALUES
(3, '2022-10-31', 7, 'Pertama kali berkunjung halamannya luas dan enak duduk di bawah pohon sambil menikmati aneka kopi yang tersedia.\r\n', 'nope ajah'),
(4, '2022-07-04', 9, 'Aesthetic parrah coyyy, kalo kalian ke sini ga afdol kalo ga poto poto hhii', 'Repal Hady'),
(6, '2022-11-08', 8, 'Oke', 'ditz');

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
(2, '2022-10-30', 5, ' Pelayanan nya ga ramah huh', 'MinGyuw'),
(3, '2022-11-02', 8, ' Enak sih cafenya, yaudah enak aja hehe:)', 'Cieciah'),
(4, '2022-11-08', 4, 'ga banget, minumannya ga enak, ngantri shay', 'Dina');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `cafe`
--
ALTER TABLE `cafe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cafe1`
--
ALTER TABLE `cafe1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `cafe2`
--
ALTER TABLE `cafe2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cafe3`
--
ALTER TABLE `cafe3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
