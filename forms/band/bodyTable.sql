-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 16, 2017 at 10:51 AM
-- Server version: 5.7.17-0ubuntu0.16.04.2
-- PHP Version: 5.6.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hvf`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactTable`
--

CREATE TABLE `bandTable` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` VARCHAR(50) DEFAULT NULL,
  `address1` VARCHAR(50) DEFAULT NULL,
  `city` VARCHAR(50) DEFAULT NULL,
  `state` VARCHAR(20) DEFAULT NULL,
  `zipcode` VARCHAR(10) DEFAULT NULL,
  `email` VARCHAR(100) DEFAULT NULL,
  `phone` VARCHAR(15) DEFAULT NULL,
  `message` text,
  `band_type` VARCHAR(25) DEFAULT NULL,
  `band_name` VARCHAR(50) DEFAULT NULL,
  `bandmember_1` VARCHAR(25) DEFAULT NULL,
  `bandmember_2` VARCHAR(25) DEFAULT NULL,
  `bandmember_3` VARCHAR(25) DEFAULT NULL,
  `bandmember_4` VARCHAR(25) DEFAULT NULL,
  `bandmember_5` VARCHAR(25) DEFAULT NULL,
  `bandmember_6` VARCHAR(25) DEFAULT NULL,
  `AutoID` varchar(64) DEFAULT NULL,
  `HTTP_HOST` varchar(255) DEFAULT NULL,
  `IP` varchar(15) DEFAULT NULL,
  `Date` varchar(16) DEFAULT NULL,
  `Time` varchar(16) DEFAULT NULL,
  `HTTP_REFERER` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Indexes for dumped tables
--

--
-- Indexes for table `individualTable`
--
ALTER TABLE `bandTable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `individualTable`
--
ALTER TABLE `bandTable`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
