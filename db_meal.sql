-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2016 at 10:08 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_meal`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_accounts`
--

CREATE TABLE `tbl_accounts` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_markets`
--

CREATE TABLE `tbl_markets` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `cost` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_markets`
--

INSERT INTO `tbl_markets` (`id`, `name`, `date`, `cost`) VALUES
(1, 'zahid', '600', '0'),
(2, 'zahid', '24', '0'),
(3, 'zahid', '20', '0'),
(4, 'zahid', '18', '0'),
(5, 'hlw', 'hhh', '2010'),
(6, 'hlw', 'hhh', '0'),
(7, 'zahid', '8/25/2016', '500'),
(8, 'zahid', '8/25/2016', '600');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_meals`
--

CREATE TABLE `tbl_meals` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `name1` varchar(20) NOT NULL,
  `name2` int(11) NOT NULL,
  `name3` varchar(10) NOT NULL,
  `name4` varchar(20) NOT NULL,
  `name5` varchar(10) NOT NULL,
  `name6` varchar(10) NOT NULL,
  `name7` varchar(10) NOT NULL,
  `name8` varchar(10) NOT NULL,
  `name9` varchar(10) NOT NULL,
  `name10` varchar(10) NOT NULL,
  `name11` varchar(10) NOT NULL,
  `name12` varchar(10) NOT NULL,
  `name13` varchar(10) NOT NULL,
  `name14` varchar(10) NOT NULL,
  `name15` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_meals`
--

INSERT INTO `tbl_meals` (`id`, `date`, `name1`, `name2`, `name3`, `name4`, `name5`, `name6`, `name7`, `name8`, `name9`, `name10`, `name11`, `name12`, `name13`, `name14`, `name15`) VALUES
(5, '2016-09-01', '20', 1, '4', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(6, '2016-09-02', '3', 0, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(8, '2016-09-03', '0', 0, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(9, '2016-09-04', '0', 0, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(10, '2016-09-05', '3', 0, '0', '0', '0', '0', '0', '0', '0', '5', '0', '0', '0', '0', '0'),
(11, '2016-09-06', '0', 0, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(12, '2016-09-07', '0', 0, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(13, '2016-09-08', '0', 0, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(14, '2016-09-09', '0', 0, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(15, '2016-09-10', '0', 0, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(16, '2016-09-11', '0', 0, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(17, '2016-09-12', '0', 0, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(18, '2016-09-13', '0', 0, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(19, '2016-09-14', '0', 0, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(20, '2016-09-15', '0', 0, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(21, '2016-09-16', '0', 0, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(22, '2016-09-17', '0', 0, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(23, '2016-09-18', '0', 0, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(24, '2016-09-19', '0', 0, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(25, '2016-09-20', '0', 0, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(26, '2016-09-21', '0', 0, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(27, '2016-09-22', '0', 0, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(28, '2016-09-23', '0', 0, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(29, '2016-09-24', '0', 0, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(30, '2016-09-25', '0', 0, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(31, '2016-09-26', '0', 0, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(32, '2016-09-27', '0', 0, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(35, '2016-09-28', '0', 0, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(36, '2016-09-29', '0', 0, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(37, '2016-09-30', '0', 0, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_members`
--

CREATE TABLE `tbl_members` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `balance` varchar(10) NOT NULL,
  `meals` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_members`
--

INSERT INTO `tbl_members` (`id`, `name`, `phone`, `balance`, `meals`) VALUES
(1, 'zahid', '01686407947', '0', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_accounts`
--
ALTER TABLE `tbl_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_markets`
--
ALTER TABLE `tbl_markets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_meals`
--
ALTER TABLE `tbl_meals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_members`
--
ALTER TABLE `tbl_members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_accounts`
--
ALTER TABLE `tbl_accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_markets`
--
ALTER TABLE `tbl_markets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_meals`
--
ALTER TABLE `tbl_meals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `tbl_members`
--
ALTER TABLE `tbl_members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
