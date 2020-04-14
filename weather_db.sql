-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 14 apr 2020 om 13:26
-- Serverversie: 10.1.35-MariaDB
-- PHP-versie: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weather_db`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `records`
--

CREATE TABLE `records` (
  `record_id` int(11) NOT NULL,
  `lon` double NOT NULL,
  `lat` double NOT NULL,
  `weather` varchar(500) NOT NULL,
  `feelslike` varchar(500) NOT NULL,
  `temp` varchar(500) NOT NULL,
  `humidity` varchar(500) NOT NULL,
  `wind` varchar(200) NOT NULL,
  `clouds` varchar(20) NOT NULL,
  `visibility` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `country` varchar(5) NOT NULL,
  `sunrise` bigint(20) NOT NULL,
  `sunset` bigint(20) NOT NULL,
  `created` datetime DEFAULT CURRENT_TIMESTAMP,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `records`
--

INSERT INTO `records` (`record_id`, `lon`, `lat`, `weather`, `feelslike`, `temp`, `humidity`, `wind`, `clouds`, `visibility`, `name`, `country`, `sunrise`, `sunset`, `created`, `time`) VALUES
(28, 5.43, 52.13, 'geheel bewolkt', '11.33', '10.33', '', '4.6', '90', 10000, 'Leusden', 'NL', 1585804185, 1585851204, '2020-04-07 12:31:01', '12:31:01'),
(30, 5.43, 52.13, 'geheel bewolkt', '9.88', '10.32', '', '4.6', '90', 10000, 'Leusden', 'NL', 1585804185, 1585851204, '2020-04-07 12:31:01', '12:31:01'),
(36, 5.43, 52.13, 'onbewolkt', '11.54', '13.15', '', '3.6', '4', 10000, 'Leusden', 'NL', 1585976707, 1586024209, '2020-04-07 12:31:01', '12:31:01'),
(37, 5.43, 52.13, 'geheel bewolkt', '13.33', '14.1', '', '4.1', '90', 10000, 'Leusden', 'NL', 1586149232, 1586197214, '2020-04-07 12:31:01', '12:31:01'),
(41, 5.43, 52.13, 'zwaar bewolkt', '13.23', '15.85', '', '3.1', '52', 10000, 'Leusden', 'NL', 1586235495, 1586283717, '2020-04-07 12:31:01', '12:31:01'),
(51, 5.43, 52.13, 'zwaar bewolkt', '12.77', '16.06', '48', '3.1', '52', 10000, 'Leusden', 'NL', 1586235495, 1586283717, '2020-04-07 12:31:01', '12:31:01'),
(55, 5.43, 52.13, 'zwaar bewolkt', '12.91', '16.17', '48', '3.1', '52', 10000, 'Leusden', 'NL', 1586235495, 1586283717, '2020-04-07 12:34:05', '12:34:05'),
(61, 5.43, 52.13, 'geheel bewolkt', '14.07', '17.61', '45', '3.6', '90', 10000, 'Leusden', 'NL', 1586235495, 1586283717, '2020-04-07 13:18:47', '13:18:47');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`record_id`),
  ADD UNIQUE KEY `weather` (`weather`,`temp`,`wind`,`clouds`,`visibility`,`country`,`sunrise`,`sunset`) USING BTREE;

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `records`
--
ALTER TABLE `records`
  MODIFY `record_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
