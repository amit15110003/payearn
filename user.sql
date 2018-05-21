-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2018 at 07:41 PM
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
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(200) NOT NULL,
  `u_card` varchar(200) NOT NULL,
  `u_contact` bigint(100) NOT NULL,
  `u_add` text NOT NULL,
  `u_mail` varchar(200) NOT NULL,
  `u_visit` timestamp NOT NULL,
  `u_visitno` int(11) NOT NULL,
  `u_status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_name`, `u_card`, `u_contact`, `u_add`, `u_mail`, `u_visit`, `u_visitno`, `u_status`) VALUES
(1, 'hjk', 'dfghjk', 111, 'xcvbnm', 'asdfgh', '0000-00-00 00:00:00', 0, 1),
(2, 'dineshvar', 'esty35', 8450865472, 'p15 basundhara complex\r\nchingrighata', '5362@gdsh.fh', '0000-00-00 00:00:00', 0, 1),
(3, 'amit', 'ty6w', 7872129887, 'house no 32/4 Mukandpur samtavihar\r\ngali number 5/2 bisfutta road delhi', 'gsg@sdgh.dgs', '0000-00-00 00:00:00', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `u_card` (`u_card`),
  ADD UNIQUE KEY `u_contact` (`u_contact`),
  ADD UNIQUE KEY `u_mail` (`u_mail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
