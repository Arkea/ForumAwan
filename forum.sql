-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2019 at 02:15 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user` varchar(255) COLLATE utf8_bin NOT NULL,
  `pass` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user`, `pass`) VALUES
('admin', 'admin'),
('test', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(9) NOT NULL,
  `id_thread` int(5) NOT NULL,
  `content` text COLLATE utf8_bin,
  `date` datetime NOT NULL,
  `image` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `archived` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `id_thread`, `content`, `date`, `image`, `archived`) VALUES
(1, 1, 'jajajaj', '0000-00-00 00:00:00', 'test.jpg', NULL),
(2, 1, 'another one', '0000-00-00 00:00:10', NULL, 1),
(3, 2, 'test baru', '0000-00-00 00:00:15', 'okey.png', NULL),
(4, 3, 'test baru lagi', '0000-00-00 00:01:00', 'ye.png', NULL),
(5, 2, 'comen 1 di t2', '0000-00-00 00:01:15', NULL, NULL),
(6, 2, 'cek cek', '0000-00-00 00:03:25', 'kek.jpg', NULL),
(7, 3, 'beda thread', '0000-00-00 00:04:15', 'wkwkwk.jpeg', NULL),
(8, 1, 'top kek', '0000-00-00 00:05:42', NULL, NULL),
(9, 4, 'ayayayayaya', '0000-00-01 00:20:23', 'C_Indomie (2).jpg', NULL),
(10, 5, 'ondel ondel', '2019-10-25 07:04:28', '', NULL),
(11, 4, 'awokaowkaokwoakowakwoakwokawk', '2019-10-26 11:52:53', 'baygon.jpg', NULL),
(12, 6, 'wkwkwkwkwkwkwkwkwkwkwkwkwkwkwkwkwkwkwkwkwkwkwkwkwkwkwkwkwkwkwk', '2019-10-29 01:42:09', 'anjay.jpg', NULL),
(13, 6, 'brisik', '2019-10-29 01:42:18', '', NULL),
(14, 5, 'ayayayaya', '2019-10-29 01:59:41', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `thread`
--

CREATE TABLE `thread` (
  `id` int(5) NOT NULL,
  `id_post` int(9) NOT NULL,
  `subject` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `archived` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `thread`
--

INSERT INTO `thread` (`id`, `id_post`, `subject`, `archived`) VALUES
(1, 1, 'pertama kali', NULL),
(2, 3, NULL, NULL),
(3, 4, 'test baru', NULL),
(4, 9, 'testing buat baru', 1),
(5, 10, 'coba lagi 2', NULL),
(6, 12, 'sandayhrufkasih', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `user` (`user`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thread`
--
ALTER TABLE `thread`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_post` (`id_post`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `thread`
--
ALTER TABLE `thread`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
