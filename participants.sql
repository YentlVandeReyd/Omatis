-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 29 aug 2024 om 12:45
-- Serverversie: 10.4.32-MariaDB
-- PHP-versie: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `omatis`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `participants`
--

CREATE TABLE `participants` (
  `id` bigint(20) NOT NULL,
  `teamname` varchar(255) DEFAULT NULL,
  `classe` varchar(255) DEFAULT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `startnummer` bigint(20) DEFAULT NULL,
  `cc` varchar(255) DEFAULT NULL,
  `transponder` varchar(255) DEFAULT NULL,
  `actief` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `participants`
--

INSERT INTO `participants` (`id`, `teamname`, `classe`, `brand`, `model`, `startnummer`, `cc`, `transponder`, `actief`) VALUES
(1, 'ALNIMAX RACING', 'TA', 'BMW', 'M235i Racing', 14, '2979', '13704560', 1),
(2, 'Arrow racing events', 'TC', 'Peugeot', '206', 206, '1998', 'tba', 1),
(3, 'Atrex Motorsports', 'TB', 'BMW', 'E36 328i', 69, '2793', '8902898', 1),
(4, 'Belgium Racing Team', 'GTA', 'Porsche', '992 GT3 cup', 99, '4.000', '0', 1),
(5, 'BMW Team Van Der Horst', 'TC', 'BMW', 'E90 325i', 44, '2498', '2395051', 1),
(6, 'Buga-Auto/Glow/Mstc', 'TC', 'Abarth', '500 Assetto Corse', 509, '1368', '14677226', 1),
(7, 'Convents Racing team', 'TC', 'bmw', '325I', 60, '2497', '5524407', 1),
(8, 'Convents Racing team', 'TC', 'bmw', '325i', 50, '2497', '7089738', 1),
(9, 'CVW Motorsport', 'GTA', 'Marccar', 'BMW V8', 66, '5000', '3154813', 1),
(10, 'CW Motorsport', 'TC', 'Mazda', 'MX-5 Cup', 16, '1998', '', 1),
(11, 'D\'Ieteren Luxury Performance', 'GTA', 'Porsche', '911 GT3 Cup (992)', 15, '3996', '10478291', 1),
(12, 'Dayvtec', 'TA', 'BMW', 'M240i Dayvtec', 70, '2998', '13091169', 1),
(13, 'GENIUS WATER RACING', 'TA', 'LAMERA', 'LAMERA 53', 53, '2300', '0', 1),
(14, 'GTE Racing', 'TA', 'Cupra', 'Tcr', 43, '1998', '2736403', 1),
(15, 'Hamofa Motorsport', 'GTB', 'BMW', 'M4 GT4', 19, '2933', '', 1),
(16, 'IC MOTORSPORT by Car Care Peeters', 'TC', 'BMW', 'E90 325i', 397, '2500', '3530084', 1),
(17, 'IR Pwrd by GRT Motorsport', 'TB', 'BMW', 'G20 CS', 57, '2800', '12738523', 1),
(18, 'JDK by G&A Racing', 'TA', 'BMW', 'M2 CS Racing', 68, '2979', '3001271', 1),
(19, 'JJ Motorsport', 'TB', 'BMW', '330i Clubsport', 36, '1998', '10154163', 1),
(20, 'JJ Motorsport', 'TB', 'BMW', '330i Clubsport', 35, '1998', '1542709', 1),
(21, 'JJ Motorsport', 'TB', 'BMW', '330i Clubsport', 34, '1998', '10564424', 1),
(22, 'Kuepperracing', 'TC', 'BMW', '325i e90', 42, '2497', '', 1),
(23, 'LVRT', 'GTB', 'BMW', 'M4 GT4 F82', 246, '', '', 1),
(24, 'M&D racing', 'TA', 'Audi', 'RS3 LMS TCR', 616, '2000', '10717092', 1),
(25, 'Michel', 'GTA', 'Peugeot', '30 TCR', 83, '1598', '', 1),
(26, 'MM Racing', 'GTA', 'Porsche', '992 GT3 cup', 23, '3996', '13397810', 1),
(27, 'PB Per4mance', 'TA', 'Aston Martin', 'V8 Vantage N430', 6, '4700', '13897110', 1),
(28, 'Pitstop Racing Events', 'TC', 'Renault', 'Clio Cup 3', 81, '2000', '11710', 1),
(29, 'PK carsport', 'GTA', 'Audi', 'GT2 R8', 1, '', '', 1),
(30, 'Q1 Trackracing', 'GTA', 'Porsche GT3', '992 cup', 56, '4000', '419959', 1),
(31, 'Q1 Trackracing', 'GTA', 'Porsche', '992', 55, '4.00', '14977880', 1),
(32, 'R&J Racing Team', 'TA', 'BMW', 'M3', 39, '3.200', '5305443', 1),
(33, 'Raceschool.Be', 'TC', 'BMW', 'E90 Clubsport', 9, '2497', '', 1),
(34, 'RACING PROJECTS', 'TA', 'LIGIER', 'JS2R EVO', 21, '3726', '15097288', 1),
(35, 'REDANT RACING', 'GTA', 'Porsche', '992 GT3 Cup', 94, '4000', '16436053', 1),
(36, 'REDANT RACING', 'GTA', 'Porsche', '992 GT3 Cup', 93, '4000', '10787221', 1),
(37, 'REDANT RACING', 'GTA', 'Porsche', '992 GT3 Cup', 38, '4000', '10887981', 1),
(38, 'ROVA-jusi racing', 'TA', 'BMW', 'M1', 101, '3000', '11111111', 1),
(39, 'ROVA-jusi racing', 'TA', 'BMW M1', 'M1', 101, '3000', '?', 1),
(40, 'Rush Drivers Collective by NGT', 'GTA', 'Porsche', '911 GT3 Cup (992)', 92, '3996', '10063524', 1),
(41, 'Russell Racing by PK Carsport', 'GTA', 'LAMBORGHINI', 'SUPER TROFEO', 2, '5204', 'TBA', 1),
(42, 'Saber Management Racing', 'GTB', 'Porsche', 'Cayman GT4 RS', 62, '4000', '11257929', 1),
(43, 'Speedlover', 'GTA', 'Porsche', '992 GT3 Cup', 17, '', '', 1),
(44, 'TCL MOTORSPORT', 'GTB', 'BMW', 'M4 GT4', 88, '3000', '10103613', 1),
(45, 'Tip Top by NGT', 'GTB', 'Porsche', '718 Cayman GT4 Clubsport', 8, '3800', '', 1),
(46, 'Tip Top by NGT', 'GTB', 'Porsche', 'Cayman GT4RS', 63, '3996', '10478291', 1),
(47, 'VDW Motorsport', 'TB', 'BMW', 'E46', 83, '2.800', '3359314', 1),
(48, 'Vp-Racing', 'TA', 'Audi', 'RS3 LMS', 747, '1984', '10679874', 1),
(49, 'Xwift Racing Events', 'TC', 'BMW', '325i', 22, '2500', '16753361', 1),
(50, 'Xwift Racing Events', 'TC', 'BMW', '325i', 11, '2500', '16496321', 1),
(51, 'YDM-racing', 'GTA', 'Porsche', '992', 8, '4.0', '10676206', 1),
(52, 'YDM-racing', 'GTB', 'Mercedes', 'GT4 AMG', 8, '3982', '5838194', 1),
(53, 'ALNIMAX RACING', 'TA', 'BMW', 'M235i Racing', 14, '2979', '13704560', 0),
(54, 'Vp-Racing3', 'TA', 'Audio', 'RS3 LMSSS', 748, '1983', '10679873', 0),
(55, 'Vp-Racing', 'TA', 'Audi', 'RS3 LMS', 747, '1984', '10679874', 0),
(56, 'VDW Motorsport', 'TB', 'BMW', 'E46', 83, '2.800', '3359314', 0),
(57, 'TEST NIEUW', 'TA', 'Porsche', '911', 1, '1001', '123456', 0),
(58, 'Yentl', 'TA', 'Porsche', '911', 69, '1005', '123456', 0);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `participants`
--
ALTER TABLE `participants`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
