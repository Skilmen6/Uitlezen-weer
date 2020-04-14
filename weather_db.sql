-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2020 at 04:53 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

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
-- Table structure for table `uitlezen_weer_records`
--

CREATE TABLE `uitlezen_weer_records` (
  `record_id` int(11) NOT NULL,
  `lon` double NOT NULL,
  `lat` double NOT NULL,
  `weather` varchar(500) NOT NULL,
  `feelslike` varchar(500) NOT NULL,
  `temp` varchar(500) NOT NULL,
  `min_temp` varchar(500) NOT NULL,
  `max_temp` varchar(500) NOT NULL,
  `humidity` varchar(500) NOT NULL,
  `pressure` int(11) NOT NULL,
  `wind` varchar(200) NOT NULL,
  `wind_direction` varchar(5) NOT NULL,
  `clouds` varchar(20) NOT NULL,
  `visibility` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `country` varchar(5) NOT NULL,
  `sunrise` time NOT NULL,
  `sunset` time NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uitlezen_weer_records`
--

INSERT INTO `uitlezen_weer_records` (`record_id`, `lon`, `lat`, `weather`, `feelslike`, `temp`, `min_temp`, `max_temp`, `humidity`, `pressure`, `wind`, `wind_direction`, `clouds`, `visibility`, `name`, `country`, `sunrise`, `sunset`, `date`, `time`) VALUES
(184, 5.43, 52.13, 'geheel bewolkt', '5.16', '9.53', '8.33', '10.56', '46', 1026, '3.1', '', '90', 10000, 'Leusden', 'NL', '06:42:32', '20:33:58', '2020-04-14', '16:52:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `uitlezen_weer_records`
--
ALTER TABLE `uitlezen_weer_records`
  ADD PRIMARY KEY (`record_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `uitlezen_weer_records`
--
ALTER TABLE `uitlezen_weer_records`
  MODIFY `record_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=185;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
