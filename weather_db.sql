-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2020 at 02:00 PM
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
-- Table structure for table `records`
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
  `date` date DEFAULT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`record_id`, `lon`, `lat`, `weather`, `feelslike`, `temp`, `humidity`, `wind`, `clouds`, `visibility`, `name`, `country`, `sunrise`, `sunset`, `date`, `time`) VALUES
(94, 5.43, 52.13, 'geheel bewolkt', '4.27', '8.94', '49', '3.6', '90', 10000, 'Leusden', 'NL', 1586839352, 1586889238, '2020-04-14', '13:59:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`record_id`),
  ADD UNIQUE KEY `weather` (`temp`,`wind`,`clouds`,`visibility`,`country`,`sunrise`,`sunset`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `record_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
