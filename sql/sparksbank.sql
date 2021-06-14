-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2021 at 07:36 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sparksbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `current_balance` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `current_balance`) VALUES
(1, 'Rahul', 'rahul@gmail.com', 48000),
(2, 'Sushma', 'sushmabl@gmail.com', 42000),
(3, 'Kiran', 'kiran@gmail.com', 37000),
(4, 'Adam', 'adam@gmail.com', 57000),
(5, 'Sahil', 'sahil@gmail.com', 50000),
(6, 'Leena', 'leena@gmail.com', 65000),
(7, 'Niharika', 'niharika@gmail.com', 62000),
(8, 'Kapil', 'kapil@gmail.com', 54000),
(9, 'Seema', 'seema@gmail.com', 85000),
(10, 'Nisha', 'nisha@gmail.com', 75000);

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `sno` int(50) NOT NULL,
  `sender` varchar(255) NOT NULL,
  `receiver` varchar(255) NOT NULL,
  `balance` int(200) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`sno`, `sender`, `receiver`, `balance`, `datetime`) VALUES
(1, 'Adam', 'Sahil', 1000, '2021-06-14 03:59:53'),
(2, 'Seema', 'Kapil', 5000, '2021-06-14 04:00:26'),
(3, 'Rahul', 'Niharika', 2000, '2021-06-14 20:57:41'),
(4, 'Nisha', 'Leena', 5000, '2021-06-14 20:58:20'),
(5, 'Niharika', 'Kapil', 1000, '2021-06-14 20:58:53'),
(6, 'Sushma', 'Niharika', 1000, '2021-06-14 21:06:28'),
(7, 'Kiran', 'Sahil', 1000, '2021-06-14 21:18:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `transfer`
--
ALTER TABLE `transfer`
  ADD PRIMARY KEY (`sno`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transfer`
--
ALTER TABLE `transfer`
  MODIFY `sno` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
