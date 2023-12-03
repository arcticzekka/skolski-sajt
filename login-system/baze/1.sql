-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 02, 2023 at 09:49 PM
-- Server version: 8.0.32-0ubuntu0.22.04.2
-- PHP Version: 8.1.2-1ubuntu2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`AuthName`, `authID`) VALUES
('Admin', 0),
('Direktor', 1);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `skola_login`
--

INSERT INTO `skola_login` (`id`, `uid`, `pwd`, `email`, `authID`) VALUES
(2, 'aleksa1', '$2y$10$doqTaT6es0LwWzftSrF5q.adtXeykatHCFarDzw62w2fS206wf.IG', 'aleksa1@gmail.com', 0),
(3, 'aleksa2', '$2y$10$wfyabGtlamWiyWq9nQPC7uZYVdiF8F3T4ncAIaax35qiRsRoo2Hxm', 'aleksa2@gmail.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `skola_login`
--
ALTER TABLE `skola_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `skola_login`
--
ALTER TABLE `skola_login`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
