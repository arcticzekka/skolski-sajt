-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2024 at 06:49 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

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
  `authID` int(11) NOT NULL
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
  `fileid` int(11) NOT NULL,
  `filelocation` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `filetype` tinyint(4) NOT NULL,
  `fileextension` varchar(255) NOT NULL,
  `filedate` datetime NOT NULL,
  `uploadedFileName` varchar(255) NOT NULL,
  `vesti_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`fileid`, `filelocation`, `filename`, `filetype`, `fileextension`, `filedate`, `uploadedFileName`, `vesti_id`) VALUES
(28, 'uploads/slike_smerovi/', 'слика', 5, 'png', '2024-03-24 00:00:00', '4763c35dc3f1eadd5440f917cd1dbc8a.png', 0),
(30, 'uploads/raspored/', 'Parna', 1, 'pdf', '2024-03-24 00:00:00', 'b03e0f18570626d524af6014ee101447.pdf', 0),
(31, 'uploads/raspored/', 'Neparna', 1, 'pdf', '2024-03-24 00:00:00', 'efb26506a01b8ecfb95f3a1bad2a446e.pdf', 0),
(32, 'uploads/javne_nabavke/', 'ovajaja', 2, 'png', '2024-04-14 00:00:00', '6bdf2ae19b54527cb2ca808ced882bff.png', 0),
(33, 'uploads/javne_nabavke/', 'uuuuu', 2, 'jpg', '2024-04-14 00:00:00', 'f7a2ad3b1006ea7fa3905ba1c9fb3b8f.jpg', 0),
(34, 'uploads/slike_vesti/', 'аслика', 6, 'png', '2024-04-14 00:00:00', 'b71bd6d2571c42b99538db241dccbe61.png', 41),
(35, 'uploads/slike_vesti/', 'klsdjaf', 6, 'jpeg', '2024-04-14 00:00:00', '124c2619e1bf9030b70df9b5a31b8200.jpeg', 39);

-- --------------------------------------------------------

--
-- Table structure for table `skola_login`
--

CREATE TABLE `skola_login` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `authID` int(11) NOT NULL
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
-- Table structure for table `smerovi`
--

CREATE TABLE `smerovi` (
  `id` int(11) NOT NULL,
  `smer` varchar(255) NOT NULL,
  `opis` varchar(5000) NOT NULL,
  `id_slike` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `smerovi`
--

INSERT INTO `smerovi` (`id`, `smer`, `opis`, `id_slike`) VALUES
(85, 'Електротехничар рачунара ', 'Ово је атрактивно занимање у нашој школи. Тим професора и добро опремљени кабинети омогућавају да се успешно спроведе доста захтеван план и програм. Након добијања дипломе овог занимања бићете способни за продају и/или сервис и одржавање рачунара и компонената, за рад у фирмама на одржавању рачунарских мрежа и сл. На овом занимању стећићете сва потребна знања за наставак школовања на факултетима техничких наука. ', 28),
(86, 'Електротехничар информационих технологија ', 'Основни циљ образовања ученика на овом занимању је стицање знања и вештина за рад у индустрији информационих технологија, која је данас веома атрактивна. То су области програмирање, веб програмирање, веб дизајн, базе података, рачунарске мреже, заштита софтвера, електронско пословање, хардвер и сл. Наставу изводи тим обучених и преданих професора у добро опремљеним кабинетима. Осим стручног знања које их оспособљава за рад у ИТ индустирји, ученици овог смера стичу одличну основу и предзнање за наставак школовања у правцу информационих технологија и техничких наука. ', 28),
(87, 'Електротехничар електронике', 'Ово је веома перспективно занимање и пружа широко образовање из различитих области електронике са специфичностима као што су аутоматика и роботика, мерна и регулациона техника, електроника у медицини, сервисирање и одржавање рачунара. Опремљене лаборатори', 28),
(88, 'Електротехничар енергетике', 'Ово је образовни профил који обучава ученике да се баве пословима везаним за производњу, пренос и дистрибуцију електричне енергије. Имају могућност запошљавања у електранама, разводним постројењима, у компанијама за контролу и одржавање електричних водова', 28),
(89, 'Ауто-електричар', 'На овом занимању ученици се током трогодишњег школовања обучавају за самосталан рад кроз организовану праксу у реномираним сервисима за ауто-електрику. Кварови на модерним возилима се детектују помоћу рачунара, а отклањају употребом посебних алата и уређа', 28),
(91, 'Архитектонски техничар', 'На овом занимању ученик кроз индивидуални и тимски рад стиче способност ликовног изражавања, просторну перцепцију, информатичку писменост, познавање историје уметности и архитектуре, савремених архитектонских конструкција, материјала и технологија. Овај з', 28);

-- --------------------------------------------------------

--
-- Table structure for table `vesti`
--

CREATE TABLE `vesti` (
  `id` int(11) NOT NULL,
  `naslov` varchar(255) NOT NULL,
  `opis` varchar(255) NOT NULL,
  `takmicenje` int(11) DEFAULT NULL,
  `datum` timestamp NULL DEFAULT current_timestamp(),
  `slika` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `vesti`
--

INSERT INTO `vesti` (`id`, `naslov`, `opis`, `takmicenje`, `datum`, `slika`) VALUES
(39, 'aleksa', 'aleksa', 1, '2024-04-14 15:28:43', 0),
(40, 'gdfasasdfg', 'asdfasdfdfasd', 1, '2024-04-14 15:49:42', 0),
(41, 'ova jaja', 'fjdsjkdsfsd', 1, '2024-04-14 15:49:49', 0);

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
  MODIFY `fileid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `skola_login`
--
ALTER TABLE `skola_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `smerovi`
--
ALTER TABLE `smerovi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `vesti`
--
ALTER TABLE `vesti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
