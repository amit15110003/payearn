-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2018 at 06:25 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payearn`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `p_desc` text NOT NULL,
  `p_adddesc` text NOT NULL,
  `p_cp` float NOT NULL,
  `p_sp` float NOT NULL,
  `p_stock` int(11) NOT NULL,
  `p_category` int(11) NOT NULL,
  `p_warehouse` int(11) NOT NULL,
  `p_image` varchar(200) NOT NULL,
  `p_status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `p_desc`, `p_adddesc`, `p_cp`, `p_sp`, `p_stock`, `p_category`, `p_warehouse`, `p_image`, `p_status`) VALUES
(1, '475', '4', '', 0, 0, 0, 0, 0, '1526938820product.png', 1),
(2, '45', '4', '45', 4, 45, 4, 45, 0, '\n1526938820product.png', 1),
(3, '52', '535', '35', 535, 354, 354, 345, 353, '1526938820product.png', 1),
(4, '425', '4512', '4152', 452, 41, 0, 0, 0, '1526938820product.png', 1),
(5, '453', '523', '5231', 4523, 4523, 4523, 23, 523, '1526938820product.png', 1),
(6, '', '', '', 0, 0, 0, 0, 0, '1526938820product.png', 1),
(7, 'horlicksb 34', 'atta aur chokar', '250 energy', 250, 200, 100, 34, 0, '1526994295product.png', 1),
(8, 'sfvg', 'f', 'ndgh', 123123, 23, 41561, 0, 0, '1527152287product.png', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
