-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2023 at 05:36 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bazapodataka`
--

-- --------------------------------------------------------

--
-- Table structure for table `sajt`
--

CREATE TABLE `sajt` (
  `id` int(11) NOT NULL,
  `vest` varchar(255) NOT NULL,
  `opisvesti` varchar(255) NOT NULL,
  `imeucenika` varchar(255) NOT NULL,
  `predmet` enum('Matematika','Fizika','Programiranje') NOT NULL,
  `takmicenje` enum('Opštinsko','Državno','Regionalno') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sajt`
--

INSERT INTO `sajt` (`id`, `vest`, `opisvesti`, `imeucenika`, `predmet`, `takmicenje`) VALUES
(28, 'dsa', 'das', 'dasda', '', 'Državno'),
(29, 'das', 'das', 'dsa', '', 'Opštinsko'),
(30, 'dsaaaaa', 'das', 'dsa', '', 'Opštinsko');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sajt`
--
ALTER TABLE `sajt`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sajt`
--
ALTER TABLE `sajt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
