-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2024 at 09:22 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

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
  `filename` varchar(1000) NOT NULL,
  `filetype` tinyint(4) NOT NULL,
  `fileextension` varchar(255) NOT NULL,
  `filedate` datetime NOT NULL,
  `uploadedFileName` varchar(255) NOT NULL,
  `vesti_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`fileid`, `filelocation`, `filename`, `filetype`, `fileextension`, `filedate`, `uploadedFileName`, `vesti_id`) VALUES
(31, 'uploads/slike_smerovi/', 'smerovi', 5, 'jpg', '2024-04-23 00:00:00', 'd0031ac9ab9fc36ccb0b6bec14c22e63.jpg', 92),
(33, 'uploads/slike_smerovi/', 'it_slika', 5, 'jpg', '2024-04-23 00:00:00', '910437f71b04532ca690a568fe20378e.jpg', 93),
(34, 'uploads/slike_smerovi/', 'elektronicar_slika', 5, 'jpg', '2024-04-23 00:00:00', '4773dc4e82dc7e64ea7303d36229a02f.jpg', 94),
(35, 'uploads/slike_smerovi/', 'energeticar_slika', 5, 'jpg', '2024-04-23 00:00:00', 'cf3caa3e249012c2346537740e2f9b8d.jpg', 95),
(36, 'uploads/slike_smerovi/', 'autoel_slika', 5, 'jpg', '2024-04-23 00:00:00', '3fcc7d0440b1be6786ae8fc57f4de7b4.jpg', 96),
(37, 'uploads/slike_smerovi/', 'arhitekta_slika', 5, 'jpg', '2024-04-23 00:00:00', '909141978b1441f71b74b23ab2d9a627.jpg', 97),
(38, 'uploads/slike_smerovi/', 'racunari_slika', 5, 'jpg', '2024-04-23 00:00:00', '2d163a5be76f81103f05655c8d5a8805.jpg', 0),
(40, 'uploads/slike_vesti/', 'takm1', 6, 'jpg', '2024-04-23 00:00:00', '43e54b05bf2ce8a030f65107c9766bf0.jpg', 35),
(41, 'uploads/slike_vesti/', 'takm2', 6, 'jpg', '2024-04-23 00:00:00', 'b6b15fefc348cc62d26c96f2bcf55789.jpg', 36),
(42, 'uploads/slike_vesti/', 'takm3', 6, 'jpg', '2024-04-23 00:00:00', '2f019606db76c524a535ca9cc53f9794.jpg', 37),
(45, 'uploads/slike_vesti/', 'takm6', 6, 'jpg', '2024-05-31 00:00:00', 'ecc527ba1e801e34743857c5c906df17.jpg', 39),
(46, 'uploads/slike_vesti/', 'takm7', 6, 'jpg', '2024-05-31 00:00:00', '6b9b963fa42b300e7eb2c578cf593f09.jpg', 40),
(47, 'uploads/slike_vesti/', 'takm10', 6, 'jpg', '2024-05-31 00:00:00', '49dcb74beaae0d0af068c6ec5d38cbc8.jpg', 42),
(48, 'uploads/javne_nabavke/', 'jn1', 2, 'pdf', '2024-05-31 00:00:00', 'f392871519e8a1796480324a79a86019.pdf', 0),
(49, 'uploads/javne_nabavke/', 'jn2', 2, 'pdf', '2024-05-31 00:00:00', 'f7ec5ab958820dd5d1f0857f27888949.pdf', 0),
(50, 'uploads/javne_nabavke/', 'jn3', 2, 'pdf', '2024-05-31 00:00:00', 'ce907a58260fde1eb7c0adc508f403d7.pdf', 0),
(51, 'uploads/finansije/', 'fin1', 3, 'xlsx', '2024-05-31 00:00:00', 'b2295a380cf6edaf7729e7a7d4a6bc5b.xlsx', 0),
(52, 'uploads/finansije/', 'fin2', 3, 'sql', '2024-05-31 00:00:00', 'bd0dd34288a80cea6862dbcfd1e8ac9d.sql', 0),
(54, 'uploads/skola_dokumenta/', 'proj1', 0, 'jpg', '2024-05-31 00:00:00', '062fdefe07c794c84d7af6adbcad2420.jpg', 1224),
(55, 'uploads/skola_dokumenta/', 'proj2', 0, 'jpg', '2024-05-31 00:00:00', '760cd4f85bb663ab01dd867367b1413c.jpg', 1225),
(56, 'uploads/skola_dokumenta/', 'proj3', 0, 'jpg', '2024-05-31 00:00:00', '94a0ae0a99be6bad44d89336e3a1ee11.jpg', 1226);

-- --------------------------------------------------------

--
-- Table structure for table `projekti`
--

CREATE TABLE `projekti` (
  `id` int(11) NOT NULL,
  `naslov` varchar(500) NOT NULL,
  `opis` varchar(5000) NOT NULL,
  `datum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `projekti`
--

INSERT INTO `projekti` (`id`, `naslov`, `opis`, `datum`) VALUES
(1224, 'Посета Бијеналу архитектуре у Венецији', 'Ученици II, III и IV разреда архитектонског смера и шест професора Техничке школе били су у периоду од 8.11. до 12.11. 2018. на студијском путовању у Словенији и Италији. План путовања обухватио је обилазак Љубљане и Венеције и упознавање са знаменитостима ових градова, као и посету сајму Aмбијент и Дом Плус у Љубљани и Бијеналу архитектуре у Венецији.\r\n\r\nПрво одредиште овог путовања била је Љубљана, престоница Словеније. Прешернов трг са базиликом, Плечникове тржнице, мостови на реци Љубљаници и средњовековна тврђава причали су занимљиву повест о историји, животу и архитектури овог отменог града. Градско језгро Љубљане уредио је познати словеначки архитекта Јоже Плечник са чијим делом су се ученици упознали на предавању које је претходило овом путовању. ', '0000-00-00'),
(1225, 'Генерацијска екскурзија : Будимпешта-Праг-Беч', 'Дугоочекивана генерацијска екскурзија ученика Техничке школе реализована је у термину од 15.10. до 20.10.2018. године.\r\n\r\nТри магична града, Будимпешта, Праг и Беч, открили су нам своје лепоте и учинили да памтимо ово јединствено путовање. Ту смо истраживали, откривали, учили, дружили се и склапали нова пријатељства... ', '0000-00-00'),
(1226, 'Посета Сајму књига и Народном музеју', 'У суботу, 27. 10. 2018, ученици и професори Техничке школе посетили су Сајам књига у Београду. И ове године издавачи су се потрудили да занимљивим насловима и попустима привуку читаоце. У богатој понуди Сајма свако је могао наћи нешто за себе. Наши ученици су били највише заинтересовани за белетристику, трилере и дела из области научне и епске фантастике. ', '0000-00-00');

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
-- Table structure for table `slike`
--

CREATE TABLE `slike` (
  `id` int(11) NOT NULL,
  `id_vesti` int(11) NOT NULL,
  `id_smerovi` int(11) NOT NULL,
  `tip_slike` int(11) NOT NULL,
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
  `id` int(11) NOT NULL,
  `smer` varchar(255) NOT NULL,
  `opis` varchar(5000) NOT NULL,
  `id_slike` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `smerovi`
--

INSERT INTO `smerovi` (`id`, `smer`, `opis`, `id_slike`) VALUES
(92, 'Електротехничар рачунара', 'Ово је атрактивно занимање у нашој школи. Тим професора и добро опремљени кабинети омогућавају да се успешно спроведе доста захтеван план и програм. Након добијања дипломе овог занимања бићете способни за продају и/или сервис и одржавање рачунара и компонената, за рад у фирмама на одржавању рачунарских мрежа и сл. На овом занимању стећићете сва потребна знања за наставак школовања на факултетима техничких наука.', 0),
(93, 'Електротехничар информационих технологија', 'Основни циљ образовања ученика на овом занимању је стицање знања и вештина за рад у индустрији информационих технологија, која је данас веома атрактивна. То су области програмирање, веб програмирање, веб дизајн, базе података, рачунарске мреже, заштита софтвера, електронско пословање, хардвер и сл. Наставу изводи тим обучених и преданих професора у добро опремљеним кабинетима. Осим стручног знања које их оспособљава за рад у ИТ индустирји, ученици овог смера стичу одличну основу и предзнање за наставак школовања у правцу информационих технологија и техничких наука.', 0),
(94, 'Електротехничар електронике', 'Ово је веома перспективно занимање и пружа широко образовање из различитих области електронике са специфичностима као што су аутоматика и роботика, мерна и регулациона техника, електроника у медицини, сервисирање и одржавање рачунара. Опремљене лабораторије и кабинети, као и стручан професорски кадар пружају ученицима основу за самосталан рад и основу за даљи наставак школовања.', 0),
(95, 'Електротехничар енергетике', 'Ово је образовни профил који обучава ученике да се баве пословима везаним за производњу, пренос и дистрибуцију електричне енергије. Имају могућност запошљавања у електранама, разводним постројењима, у компанијама за контролу и одржавање електричних водова и мрежа. Након завршетка средње школе могућ је наставак школовања на свим техничким факултетима, а нарочито на електротехничким смеровима.', 0),
(96, 'Ауто-електричар', 'На овом занимању ученици се током трогодишњег школовања обучавају за самосталан рад кроз организовану праксу у реномираним сервисима за ауто-електрику. Кварови на модерним возилима се детектују помоћу рачунара, а отклањају употребом посебних алата и уређаја. Ауто-електричари морају овладати знањима не само из електронике већ и из механике мотора, аутоматике и рачунарске технике. Непрекидни развој нових система на возилима захтева стално усавршавање и одговорност при раду јер од тога зависи безбедност свих учесника у саобраћају.', 0),
(97, 'Архитектонски техничар', 'На овом занимању ученик кроз индивидуални и тимски рад стиче способност ликовног изражавања, просторну перцепцију, информатичку писменост, познавање историје уметности и архитектуре, савремених архитектонских конструкција, материјала и технологија. Овај занимљив и креативан образовни профил пружа темељно образовање из подручја архитектуре и грађевинарства за обављање широког спектра послова (сарадња у припремању и изради пројектне документације, вођење послова и надзора објеката високоградње), као и најбољу основу за даље студије архитектуре, грађевинарства и других техничких факултета.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `vesti`
--

CREATE TABLE `vesti` (
  `id` int(11) NOT NULL,
  `naslov` varchar(255) NOT NULL,
  `opis` varchar(255) NOT NULL,
  `takmicenje` int(11) DEFAULT NULL,
  `datum` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `vesti`
--

INSERT INTO `vesti` (`id`, `naslov`, `opis`, `takmicenje`, `datum`) VALUES
(35, 'Презентација \"Савремени микроконтролери и њихова примена у индустрији\"', 'Наш бивши ученик, Филип Лазаревић, сада успешни програмер који живи и ради у Амстердаму, посетио је нашу школу у петак 20. 10. 2023. године. Том приликом је одржао презентацију на тему \"Савремени микроконтролери и њихова примена у индустрији\". Осим тога, ', 0, '2024-04-23 08:44:02'),
(36, 'Изложба \"Архитектонско наслеђе Михајла Митровића\"', 'Поводом стогодишњице обележавања рођења архитекте Михајла Митровића, у галерији Градске библиотеке \"Владислав Петковић Дис\", 7. 10. 2022. године отворена је изложба \"Архитектонско наслеђе Михајла Митровића\". Аутори ове изложбе су професори наше школе Ката', 0, '2024-04-23 08:44:14'),
(37, 'Успех на Окружном такмичењу из математике', 'У гимназији \"Таковски устанак\" у Горњем Милановцу , у организацији Друштва математичара Србије, 1. марта 2020. године , одржано је Окружно такмичење из математике. Нашу школу представљали су Јечменић Александар и Лазаревић Марко, ученици одељења III1.', 0, '2024-04-23 08:46:12'),
(39, 'Прва награда на ликовном конкурсу „Моја европска заједница“', 'Мина Лазовић, ученица Техничке школе у Чачку, освојила је прву награду на ликовном конкурсу Европске уније „Моја европска заједница“. Конкурс је окупио средњошколце који су желели да својим радовима покажу како виде проблеме својих вршњака из угрожених гр', 1, '2024-05-30 22:06:14'),
(40, 'Студијско путовање Словенија - Аустрија', 'Новембар је традиционално постао месец када ученици Архитектонског смера и професори Техничке школе крећу на путовање трагом европске културне баштине. Ове године циљ студијског путовања био је упознавање историјског и културног наслеђа Крања, Клагенфурта', 1, '2024-05-30 22:06:30'),
(42, 'Посета Сајму књига у Београду', 'Међународни београдски сајам књига, под слоганом Писмо = глава, одржан је од 20. до 27. oктобра 2019. Сајам је окупио више од 500 издавача, а богата и занимљива понуда привукла је велики број љубитеља књиге. Oвогодишњи почасни гост Сајма књига био је Егип', 1, '2024-05-31 07:14:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`fileid`);

--
-- Indexes for table `projekti`
--
ALTER TABLE `projekti`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `fileid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `projekti`
--
ALTER TABLE `projekti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1227;

--
-- AUTO_INCREMENT for table `skola_login`
--
ALTER TABLE `skola_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `slike`
--
ALTER TABLE `slike`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `smerovi`
--
ALTER TABLE `smerovi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `vesti`
--
ALTER TABLE `vesti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
