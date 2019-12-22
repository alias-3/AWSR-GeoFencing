-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Dec 22, 2019 at 03:58 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `awsr`
--

-- --------------------------------------------------------

--
-- Table structure for table `gps`
--

CREATE TABLE `gps` (
  `id` int(11) NOT NULL,
  `lat` double DEFAULT NULL,
  `lng` double DEFAULT NULL,
  `gsm` bigint(20) DEFAULT NULL,
  `dtime` datetime NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gps`
--

INSERT INTO `gps` (`id`, `lat`, `lng`, `gsm`, `dtime`, `status`) VALUES
(1, 18.526895, 73.823852, 9000000000, '2019-12-18 09:03:00', 0),
(2, 18.516315, 73.811835, 9000000001, '2019-12-20 00:00:25', 0),
(3, 18.531542, 73.811835, 9000000002, '2019-12-20 00:00:25', 0),
(4, 18.131542, 73.223335, 9000000003, '2019-12-20 00:00:25', 0),
(5, 18.991542, 73.993353, 9000000004, '2019-12-20 00:00:25', 0),
(6, 18.441542, 73.123322, 9000000005, '2019-12-20 00:00:25', 0),
(7, 18.364843, 73.003493, 9000000006, '2019-12-20 00:00:25', 0),
(8, 18.322843, 73.003493, 9000000007, '2019-12-20 00:00:25', 0),
(9, 18.233343, 73.000012, 9000000008, '2019-12-20 00:00:25', 0),
(10, 18.312224, 73.343012, 9000000009, '2019-12-20 00:00:25', 0);

-- --------------------------------------------------------

--
-- Table structure for table `gps1`
--

CREATE TABLE `gps1` (
  `id` int(11) NOT NULL,
  `vehname` varchar(40) NOT NULL,
  `lat` double DEFAULT NULL,
  `lng` double DEFAULT NULL,
  `gsm` bigint(20) DEFAULT NULL,
  `dtime` datetime NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gps1`
--

INSERT INTO `gps1` (`id`, `vehname`, `lat`, `lng`, `gsm`, `dtime`, `status`) VALUES
(1, 'MH-02 BD 4192 ', 18.526895, 73.823852, 9000000000, '2019-12-18 09:03:00', 0),
(2, 'MH-02 RE 3172', 18.526895, 73.998956, 9000000001, '2019-12-17 04:00:00', 1),
(3, 'MH-01 PO 1129', 18.576999, 73.823852, 9000000002, '2019-12-18 18:03:00', 1),
(4, 'MH-14 ND 3922', 18.655993, 73.853485, 9000000003, '2019-12-10 08:00:00', 1),
(5, 'MH-02 PE 8329', 18.123443, 73.384644, 9000000004, '2019-12-21 15:00:00', 1),
(6, 'MH-03 WT 3423', 18.437843, 73.656644, 9000000005, '2019-12-17 15:00:00', 1),
(7, 'MH-03 WT 1123', 18.411243, 73.156644, 9000000006, '2019-12-17 15:00:00', 1),
(8, 'MH-01 HS 4533', 18.231243, 73.156644, 9000000007, '2019-12-17 15:07:00', 1),
(9, 'MH-02 GI 1343', 18.111243, 73.156344, 9000000008, '2019-12-17 15:07:00', 0),
(10, 'MH-01 SE 1343', 18.111223, 73.156343, 9000000009, '2019-12-17 15:07:00', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gps`
--
ALTER TABLE `gps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gps1`
--
ALTER TABLE `gps1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gps`
--
ALTER TABLE `gps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `gps1`
--
ALTER TABLE `gps1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
