-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 28, 2018 at 02:57 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'amit', '202cb962ac59075b964b07152d234b70'),
(3, 'admin@123', '202cb962ac59075b964b07152d234b70'),
(4, 'admin@456', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

DROP TABLE IF EXISTS `admin_login`;
CREATE TABLE IF NOT EXISTS `admin_login` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `a_mail` varchar(200) NOT NULL,
  `a_wid` int(11) NOT NULL,
  `a_username` varchar(200) NOT NULL,
  `a_pass` varchar(200) NOT NULL,
  `a_contact` bigint(200) NOT NULL,
  `a_design` varchar(50) NOT NULL,
  `a_lastseen` timestamp NOT NULL,
  `status` int(10) NOT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`a_id`, `a_mail`, `a_wid`, `a_username`, `a_pass`, `a_contact`, `a_design`, `a_lastseen`, `status`) VALUES
(1, 'amitanand.kvj.2@gmail.com', 0, 'Amit Anand', '202cb962ac59075b964b07152d234b70', 8979997072, 'Admin', '2018-07-23 11:36:05', 1),
(4, 'raviranjan.ptm@gmail.com', 3, 'ravi ranjan', '202cb962ac59075b964b07152d234b70', 8979997072, 'Vendor', '2018-07-23 11:36:05', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` bigint(200) NOT NULL AUTO_INCREMENT,
  `u_id` int(200) NOT NULL,
  `p_id` int(200) NOT NULL,
  `p_category` varchar(100) NOT NULL,
  `item` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=70 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `u_id`, `p_id`, `p_category`, `item`) VALUES
(69, 4, 8, '', 4),
(68, 4, 1, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(200) NOT NULL,
  `c_descr` varchar(200) NOT NULL,
  `c_status` int(11) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_id`, `c_name`, `c_descr`, `c_status`) VALUES
(1, 'costmatic', '', 1),
(2, 'rty', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(200) NOT NULL,
  `c_mail` text NOT NULL,
  `c_subject` text NOT NULL,
  `c_message` text NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`c_id`, `c_name`, `c_mail`, `c_subject`, `c_message`) VALUES
(2, 'xdcvb', 'ravi@gmail.com', 'sdcfv', 'ravi@gmail.com'),
(3, 'xdcvb', 'ravi@gmail.com', 'sdcfv', 'ravi@gmail.com'),
(4, 'xdcvb', 'ravadsfgfhi@gmail.com', 'sdcfv', 'ravi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

DROP TABLE IF EXISTS `delivery`;
CREATE TABLE IF NOT EXISTS `delivery` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `u_id` int(20) NOT NULL,
  `d_fname` varchar(100) NOT NULL,
  `d_lname` varchar(100) NOT NULL,
  `d_mob` varchar(10) NOT NULL,
  `d_country` varchar(100) NOT NULL,
  `d_town` varchar(100) NOT NULL,
  `d_state` varchar(100) NOT NULL,
  `d_pin` int(10) NOT NULL,
  `d_add` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`id`, `u_id`, `d_fname`, `d_lname`, `d_mob`, `d_country`, `d_town`, `d_state`, `d_pin`, `d_add`) VALUES
(3, 1, 'amit', 'anand', '8979997072', 'India', 'roorkee', 'Uttarakhand', 247667, 'iit roorkee'),
(4, 4, 'rakesh', 'anand', '8979997072', '', 'roorkee', 'Uttarakhand', 247667, 'iit roorkee');

-- --------------------------------------------------------

--
-- Table structure for table `orderadd`
--

DROP TABLE IF EXISTS `orderadd`;
CREATE TABLE IF NOT EXISTS `orderadd` (
  `order_id` int(100) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) NOT NULL,
  `txnid` varchar(250) NOT NULL,
  `o_time` datetime NOT NULL,
  `payment_mode` text NOT NULL,
  `delivery_email` text NOT NULL,
  `delivery_name` text NOT NULL,
  `delivery_address` text NOT NULL,
  `delivery_city` text NOT NULL,
  `delivery_state` text NOT NULL,
  `delivery_country` varchar(250) NOT NULL,
  `delivery_zip` text NOT NULL,
  `delivery_tel` bigint(212) NOT NULL,
  `amount` int(100) NOT NULL,
  `tax` int(11) NOT NULL,
  `p_id` varchar(250) NOT NULL,
  `p_sp` varchar(250) NOT NULL,
  `p_qty` text NOT NULL,
  `o_status` text NOT NULL,
  `o_paystatus` varchar(50) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=78 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderadd`
--

INSERT INTO `orderadd` (`order_id`, `u_id`, `txnid`, `o_time`, `payment_mode`, `delivery_email`, `delivery_name`, `delivery_address`, `delivery_city`, `delivery_state`, `delivery_country`, `delivery_zip`, `delivery_tel`, `amount`, `tax`, `p_id`, `p_sp`, `p_qty`, `o_status`, `o_paystatus`) VALUES
(42, 0, '1530369325636', '2018-06-11 00:00:00', '', 'amitanand.kvj.2@gmail.com', 'amit anand', 'NAYAGAON NEAR MANS KUNJ MANDIR', 'JAMALPUR', 'Bihar', 'India', '811214', 7903135200, 41, 0, '4', '41', '', '', ''),
(45, 0, '1530369866134', '2018-06-30 14:48:37', '', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 8979997072, 41, 0, '4', '41', '1', '', ''),
(44, 0, '1530369866134', '2018-06-30 14:44:27', '', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 8979997072, 41, 0, '4', '41', '1', '', ''),
(46, 0, '1530370122213', '2018-06-30 14:48:43', '', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 8979997072, 41, 0, '4', '41', '1', '', ''),
(47, 0, '1530370122213', '2018-06-30 14:50:14', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 8979997072, 41, 0, '4', '41', '1', '', ''),
(48, 0, '1530370122213', '2018-06-30 15:55:58', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 8979997072, 41, 0, '4', '41', '1', '', ''),
(49, 0, '1530370122213', '2018-06-30 15:56:43', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 8979997072, 41, 0, '4', '41', '1', '', ''),
(50, 0, '1530370122213', '2018-06-30 15:57:17', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 8979997072, 41, 0, '4', '41', '1', '', ''),
(51, 0, '1530370122213', '2018-06-30 15:57:54', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 8979997072, 41, 0, '4', '41', '1', '', ''),
(52, 0, '1530370122213', '2018-06-30 15:58:39', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 8979997072, 41, 0, '4', '41', '1', '', ''),
(53, 0, '1530370122213', '2018-06-30 15:59:24', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 8979997072, 41, 0, '4', '41', '1', '', ''),
(54, 0, '1530370122213', '2018-06-30 16:01:28', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 8979997072, 41, 0, '4', '41', '1', '', ''),
(55, 0, '1530370122213', '2018-06-30 16:01:56', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 8979997072, 41, 0, '4', '41', '1', '', ''),
(56, 0, '1530370122213', '2018-06-30 16:06:24', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 8979997072, 41, 0, '4', '41', '1', '', ''),
(57, 0, '1530370122213', '2018-06-30 16:09:31', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 8979997072, 41, 0, '4', '41', '1', '', ''),
(58, 0, '1530370122213', '2018-06-30 16:14:53', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 8979997072, 41, 0, '4', '41', '1', '', ''),
(59, 0, '1530370122213', '2018-06-30 16:16:32', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 8979997072, 41, 0, '4', '41', '1', '', ''),
(60, 0, '1530370122213', '2018-06-30 16:17:18', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 8979997072, 41, 0, '4', '41', '1', '', ''),
(61, 0, '1530370122213', '2018-06-30 16:17:57', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 8979997072, 41, 0, '4', '41', '1', '', ''),
(62, 0, '1530370122213', '2018-06-30 16:18:33', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 8979997072, 41, 0, '4', '41', '1', '', ''),
(63, 0, '1530370122213', '2018-06-30 18:12:09', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 8979997072, 41, 0, '4', '41', '1', '', ''),
(64, 0, '1530382417510', '2018-06-30 18:13:39', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 8979997072, 41, 0, '4', '41', '1', '', ''),
(65, 0, '1530384032631', '2018-06-30 18:40:36', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 8979997072, 41, 0, '4', '41', '1', '', ''),
(66, 0, '1530384032631', '2018-06-30 18:43:48', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 8979997072, 41, 0, '4', '41', '1', '', ''),
(67, 0, '1530384032631', '2018-06-30 18:44:08', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 8979997072, 41, 0, '4', '41', '1', '', ''),
(68, 0, '1530384032631', '2018-06-30 18:44:56', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 8979997072, 41, 0, '4', '41', '1', '', ''),
(69, 0, '1530384032631', '2018-06-30 18:46:10', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 8979997072, 41, 0, '4', '41', '1', '', ''),
(70, 0, '1530384032631', '2018-06-30 18:47:08', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 8979997072, 41, 0, '4', '41', '1', '', ''),
(71, 0, '1530384032631', '2018-06-30 18:47:26', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 8979997072, 41, 0, '4', '41', '1', '', ''),
(72, 0, '1530384032631', '2018-06-30 18:47:52', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 8979997072, 41, 0, '4', '41', '1', '', ''),
(73, 0, '1530385155128', '2018-06-30 18:59:21', 'cod', 'amitanand.kvj.2@gmail.com', 'RAJIV RANJAN', 'NAYAGAON NEAR MANS KUNJ MANDIR', 'JAMALPUR', 'MANS KUNJ MANDIR', 'India', '811214', 7903135200, 110, 0, '4,8', '41,23', '1,3', '', ''),
(74, 0, '1530385155128', '2018-06-30 19:01:01', 'cod', 'amitanand.kvj.2@gmail.com', 'RAJIV RANJAN', 'NAYAGAON NEAR MANS KUNJ MANDIR', 'JAMALPUR', 'MANS KUNJ MANDIR', 'India', '811214', 7903135200, 110, 0, '4,8', '41,23', '1,3', '', ''),
(75, 0, '1530385155128', '2018-06-30 19:01:26', 'cod', 'amitanand.kvj.2@gmail.com', 'RAJIV RANJAN', 'NAYAGAON NEAR MANS KUNJ MANDIR', 'JAMALPUR', 'MANS KUNJ MANDIR', 'India', '811214', 7903135200, 110, 0, '4,8', '41,23', '1,3', '', ''),
(76, 0, '1530385155128', '2018-06-30 19:01:43', 'cod', 'amitanand.kvj.2@gmail.com', 'RAJIV RANJAN', 'NAYAGAON NEAR MANS KUNJ MANDIR', 'JAMALPUR', 'MANS KUNJ MANDIR', 'India', '811214', 7903135200, 110, 0, '4,8', '41,23', '1,3', '', ''),
(77, 0, '1530876526505', '2018-07-06 11:29:55', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 8979997072, 155, 0, '1', '155', '1', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `orderpos`
--

DROP TABLE IF EXISTS `orderpos`;
CREATE TABLE IF NOT EXISTS `orderpos` (
  `order_id` int(100) NOT NULL AUTO_INCREMENT,
  `a_id` int(11) NOT NULL,
  `o_wid` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `txnid` varchar(250) NOT NULL,
  `o_time` datetime NOT NULL,
  `payment_mode` text NOT NULL,
  `amount` int(100) NOT NULL,
  `tax` int(11) NOT NULL,
  `p_id` varchar(250) NOT NULL,
  `p_sp` varchar(250) NOT NULL,
  `p_qty` text NOT NULL,
  `o_status` text NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderpos`
--

INSERT INTO `orderpos` (`order_id`, `a_id`, `o_wid`, `u_id`, `txnid`, `o_time`, `payment_mode`, `amount`, `tax`, `p_id`, `p_sp`, `p_qty`, `o_status`) VALUES
(1, 0, 0, 0, '1530781930', '2018-07-05 09:12:10', 'cash', 310, 0, '1,8', '310,23', '2,1', ''),
(2, 0, 0, 0, '1530781943', '2018-07-05 09:12:23', 'cash', 310, 0, '1,8', '310,23', '2,1', ''),
(3, 0, 0, 0, '1530781987', '2018-07-05 09:13:07', 'cash', 310, 0, '1,8', '310,23', '2,1', ''),
(4, 0, 0, 0, '1530782019', '2018-07-05 09:13:39', 'cash', 333, 0, '1,8', '310,23', '2,1', ''),
(5, 0, 0, 0, '1530782026', '2018-07-05 09:13:46', 'cash', 333, 0, '1,8', '310,23', '2,1', ''),
(6, 0, 0, 0, '1530884460', '2018-07-06 13:41:00', 'cash', 155, 0, '1', '155', '1', ''),
(7, 0, 0, 0, '1532248565', '2018-07-22 08:36:05', 'cash', 155, 0, '1', '155', '1', ''),
(8, 0, 0, 0, '1532254260', '2018-07-22 10:11:00', 'cash', 5118, 0, '1,2,3,4,5', '155,45,354,41,4523', '1,1,1,1,1', ''),
(9, 0, 0, 0, '1532255155', '2018-07-22 10:25:55', 'cash', 5118, 0, '1,2,3,4,5', '155,45,354,41,4523', '1,1,1,1,1', ''),
(10, 0, 0, 0, '1532259534', '2018-07-22 11:38:54', 'cash', 5118, 0, '1,2,3,4,5', '155,45,354,41,4523', '1,1,1,1,1', ''),
(11, 0, 0, 0, '1532259545', '2018-07-22 11:39:05', 'cash', 4759, 0, '8,9,10,5', '23,213,0,4523', '1,1,1,1', ''),
(12, 1, 0, 0, '1532263935', '2018-07-22 12:52:15', 'cash', 200, 0, '7', '200', '1', ''),
(13, 4, 3, 0, '1532263976', '2018-07-22 12:52:56', 'cash', 155, 0, '1', '155', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_name` varchar(200) NOT NULL,
  `p_desc` text NOT NULL,
  `p_adddesc` text NOT NULL,
  `p_cp` float NOT NULL,
  `p_sp` float NOT NULL,
  `p_stock` int(11) NOT NULL,
  `p_category` int(11) NOT NULL,
  `p_warehouse` int(11) NOT NULL,
  `p_image` varchar(200) NOT NULL,
  `p_view` int(11) NOT NULL,
  `p_status` int(11) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `p_desc`, `p_adddesc`, `p_cp`, `p_sp`, `p_stock`, `p_category`, `p_warehouse`, `p_image`, `p_view`, `p_status`) VALUES
(1, '475', '4', '', 0, 155, 0, 0, 0, '1528387689product.jpg', 122, 1),
(2, '45', '4', '45', 4, 45, 4, 45, 0, '1528387739product.jpg', 0, 1),
(3, '52', '535', '35', 535, 354, 354, 345, 353, '1528387790product.jpg', 0, 1),
(4, '425', '4512', '4152', 452, 41, 0, 0, 0, '1528387876product.png', 48, 1),
(5, '453', '523', '5231', 4523, 4523, 4523, 23, 523, '1528388062product.jpg', 0, 1),
(6, '', '', '', 0, 0, 0, 0, 0, '1528387912product.jpg', 0, 1),
(7, 'horlicksb 34', 'atta aur chokar', '250 energy', 250, 200, 100, 34, 0, '1528387959product.png', 0, 1),
(8, 'sfvg', 'f', 'ndgh', 123123, 23, 41561, 0, 0, '1528388206product.png', 3, 1),
(9, 'apple', 'fsdzcf', 'sfd', 2, 213, 2, 0, 0, '1530474566product.png', 0, 1),
(10, 'apple', 'kvh', '', 53, 0, 42, 0, 0, '1530475239product.png', 0, 1),
(11, 'jg', 'vhj', 'jh', 15, 0, 15, 5, 0, '', 0, 1),
(12, 'vjh', 'tcgj', 'yucu', 845, 0, 43, 0, 0, '1530475286product.png', 0, 1),
(13, 'jg', 'jcg', '', 1, 0, 15, 0, 0, '1530475305product.JPG', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

DROP TABLE IF EXISTS `subscribe`;
CREATE TABLE IF NOT EXISTS `subscribe` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `s_mail` varchar(200) NOT NULL,
  `s_status` int(11) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`s_id`, `s_mail`, `s_status`) VALUES
(1, 'a2E@DF.GH', 0),
(3, 'amitanand.kvj.2@gmail.com', 0),
(4, 'amit@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_name` varchar(200) NOT NULL,
  `u_lname` varchar(200) NOT NULL,
  `u_card` varchar(200) NOT NULL,
  `u_contact` bigint(100) NOT NULL,
  `u_add` text NOT NULL,
  `u_mail` varchar(200) NOT NULL,
  `u_visit` timestamp NOT NULL,
  `u_visitno` int(11) NOT NULL,
  `u_pass` varchar(200) NOT NULL,
  `u_status` int(11) NOT NULL,
  PRIMARY KEY (`u_id`),
  UNIQUE KEY `u_card` (`u_card`),
  UNIQUE KEY `u_contact` (`u_contact`),
  UNIQUE KEY `u_mail` (`u_mail`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_name`, `u_lname`, `u_card`, `u_contact`, `u_add`, `u_mail`, `u_visit`, `u_visitno`, `u_pass`, `u_status`) VALUES
(1, 'hjk', '', 'dfghjk', 111, 'xcvbnm', 'asdfgh', '2018-05-15 18:30:00', 0, '', 1),
(2, 'dineshvar', '', 'esty35', 8450865472, 'p15 basundhara complex\r\nchingrighata', '5362@gdsh.fh', '2018-05-15 18:30:00', 0, '', 1),
(3, 'amit', '', 'ty6w', 7872129887, 'house no 32/4 Mukandpur samtavihar\r\ngali number 5/2 bisfutta road delhi', 'gsg@sdgh.dgs', '2018-05-15 18:30:00', 0, '', 1),
(4, 'amit', 'anand', '', 8979997072, '', 'amitanand.kvj.2@gmail.com', '2018-05-21 16:00:21', 0, '202cb962ac59075b964b07152d234b70', 0);

-- --------------------------------------------------------

--
-- Table structure for table `warehouse`
--

DROP TABLE IF EXISTS `warehouse`;
CREATE TABLE IF NOT EXISTS `warehouse` (
  `w_id` int(11) NOT NULL AUTO_INCREMENT,
  `w_name` varchar(200) NOT NULL,
  `w_location` varchar(200) NOT NULL,
  `w_status` int(11) NOT NULL,
  PRIMARY KEY (`w_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warehouse`
--

INSERT INTO `warehouse` (`w_id`, `w_name`, `w_location`, `w_status`) VALUES
(1, 'Khagriya', 'szfgfs', 0),
(2, 'ytdyt', 'fyik', 0),
(3, 'munger', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

DROP TABLE IF EXISTS `wishlist`;
CREATE TABLE IF NOT EXISTS `wishlist` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `u_id` bigint(20) NOT NULL,
  `p_id` bigint(20) NOT NULL,
  `item` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `u_id`, `p_id`, `item`) VALUES
(14, 1, 3, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
