-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 10, 2023 at 12:58 PM
-- Server version: 8.0.32-0ubuntu0.22.04.2
-- PHP Version: 8.1.2-1ubuntu2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `php_dev`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `AuthName` varchar(255) NOT NULL,
  `authID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`AuthName`, `authID`) VALUES
('Admin', 0),
('Direktor', 1),
('Profesor', 2);

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `fileid` int NOT NULL,
  `filelocation` varchar(255) COLLATE utf8_general_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8_general_ci NOT NULL,
  `filetype` tinyint NOT NULL,
  `fileextension` varchar(255) COLLATE utf8_general_ci NOT NULL,
  `filedate` datetime NOT NULL,
  `uploadedFileName` varchar(255) COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `skola_login`
--

CREATE TABLE `skola_login` (
  `id` int NOT NULL,
  `uid` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `authID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `skola_login`
--

INSERT INTO `skola_login` (`id`, `uid`, `pwd`, `email`, `authID`) VALUES
(2, 'aleksa1', '$2y$10$doqTaT6es0LwWzftSrF5q.adtXeykatHCFarDzw62w2fS206wf.IG', 'aleksa1@gmail.com', 0),
(3, 'aleksa2', '$2y$10$wfyabGtlamWiyWq9nQPC7uZYVdiF8F3T4ncAIaax35qiRsRoo2Hxm', 'aleksa2@gmail.com', 1),
(4, 'aleksa3', '$2y$10$xcwNh3gb7DNblq7sJVBEYOQJOLycB6q2DgfrK3vlflChHrJnTWy1u', 'aleksa3@gmail.com', 2),
(5, 'aleksaprof', '$2y$10$D2Pl.KOtGq0v8JEDuTlKBuOu2d.thNDSQbTomE0PwQrAx1z4dfjGW', 'aleksaprof@madwa.com', 2);

-- --------------------------------------------------------

--
-- Table structure for table `slike`
--

CREATE TABLE `slike` (
  `id` int NOT NULL,
  `id_vesti` int NOT NULL,
  `id_smerovi` int NOT NULL,
  `tip_slike` int NOT NULL,
  `ime_slike` varchar(255) NOT NULL,
  `novo_ime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `slike`
--

INSERT INTO `slike` (`id`, `id_vesti`, `id_smerovi`, `tip_slike`, `ime_slike`, `novo_ime`) VALUES
(8, 0, 59, 1, 'ZVBVUK0035-Vuk_i_mesec_400x.webp', '27506629867c64e886b7a2538355cb57.webp');

-- --------------------------------------------------------

--
-- Table structure for table `smerovi`
--

CREATE TABLE `smerovi` (
  `id` int NOT NULL,
  `smer` varchar(255) NOT NULL,
  `opis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `smerovi`
--

INSERT INTO `smerovi` (`id`, `smer`, `opis`) VALUES
(59, '23131223121332', '3212133223123132231');

-- --------------------------------------------------------

--
-- Table structure for table `vesti`
--

CREATE TABLE `vesti` (
  `id` int NOT NULL,
  `naslov` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `opis` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `takmicenje` int DEFAULT NULL,
  `datum` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `vesti`
--

INSERT INTO `vesti` (`id`, `naslov`, `opis`, `takmicenje`, `datum`) VALUES
(28, 'dsa', 'das', 1, NULL),
(29, 'das', 'das', 1, NULL),
(30, 'dsaaaaa', 'das', 1, NULL),
(31, 'matija', 'matija', 0, NULL),
(32, 'www', 'werwer', 0, NULL),
(33, 'wqeqw', 'qwe', 1, NULL),
(34, 'aaa', 'aaa', 0, '2023-05-08 06:11:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`fileid`);

--
-- Indexes for table `skola_login`
--
ALTER TABLE `skola_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slike`
--
ALTER TABLE `slike`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smerovi`
--
ALTER TABLE `smerovi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vesti`
--
ALTER TABLE `vesti`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `fileid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `skola_login`
--
ALTER TABLE `skola_login`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `slike`
--
ALTER TABLE `slike`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `smerovi`
--
ALTER TABLE `smerovi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `vesti`
--
ALTER TABLE `vesti`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
