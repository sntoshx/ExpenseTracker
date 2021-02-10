-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 10, 2021 at 06:27 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `expensetracker`
--

-- --------------------------------------------------------

--
-- Table structure for table `table1`
--

DROP TABLE IF EXISTS `table1`;
CREATE TABLE IF NOT EXISTS `table1` (
  `tr_id` int(11) NOT NULL AUTO_INCREMENT,
  `tr_date` date DEFAULT NULL,
  `tr_time` time DEFAULT NULL,
  `tr_amt` varchar(255) DEFAULT NULL,
  `amt` int(11) DEFAULT NULL,
  `tr_reason` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`tr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table1`
--

INSERT INTO `table1` (`tr_id`, `tr_date`, `tr_time`, `tr_amt`, `amt`, `tr_reason`) VALUES
(1, '2020-12-30', '21:54:26', '+48', 48, 'domestic'),
(2, '2020-12-30', '22:00:04', '-466', 466, 'domestic'),
(3, '2020-12-30', '22:00:07', '+22', 22, 'domestic'),
(4, '2020-12-30', '22:09:59', '+250', 250, 'Satyam'),
(5, '2021-01-01', '02:42:55', '+345', 345, 'domestic'),
(6, '2021-01-01', '02:42:57', '+345', 345, 'domestic'),
(7, '2021-01-01', '02:42:58', '+345', 345, 'domestic'),
(8, '2021-01-01', '02:43:00', '-545', 545, 'domestic'),
(9, '2021-01-01', '02:43:03', '-535', 535, 'shopping'),
(10, '2021-01-01', '02:43:06', '+345', 345, 'domestic'),
(11, '2021-01-01', '02:43:08', '-344', 344, 'domestic'),
(12, '2021-01-01', '02:43:10', '+2355', 2355, 'domestic'),
(13, '2021-01-01', '02:43:14', '-2355', 2355, 'domestic'),
(14, '2021-01-01', '02:44:15', '-466', 466, 'domestic'),
(15, '2021-01-01', '02:44:18', '+234', 234, 'domestic'),
(16, '2021-01-01', '02:44:24', '-199', 199, 'shopping'),
(17, '2021-01-01', '02:44:36', '-399', 399, 'Satyam'),
(18, '2021-01-01', '13:07:59', '-9', 9, 'domestic'),
(19, '2021-01-01', '13:50:45', '+1', 1, 'domestic'),
(20, '2021-01-01', '17:13:27', '+33', 33, 'domestic'),
(21, '2021-01-01', '18:14:12', '+199', 199, 'Satyam'),
(22, '2021-01-01', '23:34:24', '-766', 766, 'shopping'),
(23, '2021-01-02', '00:18:03', '-344', 344, 'others'),
(24, '2021-01-02', '02:14:52', '-199', 199, 'shopping'),
(25, '2021-01-02', '02:15:02', '+11', 11, 'others'),
(26, '2021-01-02', '02:15:12', '+299', 299, 'domestic'),
(27, '2021-01-02', '02:15:24', '-50', 50, 'shopping'),
(28, '2021-01-02', '02:17:23', '-500', 500, 'Satyam'),
(29, '2021-01-04', '21:22:21', '+255', 255, 'Vaibhav'),
(30, '2021-01-11', '01:20:49', '+299', 299, 'Manas'),
(31, '2021-01-23', '21:33:03', '+33', 33, 'domestic');

-- --------------------------------------------------------

--
-- Table structure for table `table2`
--

DROP TABLE IF EXISTS `table2`;
CREATE TABLE IF NOT EXISTS `table2` (
  `tr_id` int(11) NOT NULL AUTO_INCREMENT,
  `tr_date` date DEFAULT NULL,
  `tr_time` time DEFAULT NULL,
  `tr_amt` varchar(255) DEFAULT NULL,
  `amt` int(11) DEFAULT NULL,
  `tr_reason` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`tr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table2`
--

INSERT INTO `table2` (`tr_id`, `tr_date`, `tr_time`, `tr_amt`, `amt`, `tr_reason`) VALUES
(1, '2020-12-30', '22:03:21', '+544', 544, 'domestic'),
(2, '2020-12-30', '22:06:38', '+299', 299, 'domestic'),
(3, '2020-12-30', '22:09:59', '-250', 250, 'Santosh'),
(4, '2021-01-01', '02:44:36', '+399', 399, 'Santosh'),
(5, '2021-01-01', '17:40:19', '-1500', 1500, 'shopping'),
(6, '2021-01-01', '18:14:12', '-199', 199, 'Santosh'),
(7, '2021-01-01', '18:17:35', '+561', 561, 'shopping'),
(8, '2021-01-02', '02:17:23', '+500', 500, 'Santosh'),
(9, '2021-01-11', '21:09:45', '+199', 199, 'Babu');

-- --------------------------------------------------------

--
-- Table structure for table `table3`
--

DROP TABLE IF EXISTS `table3`;
CREATE TABLE IF NOT EXISTS `table3` (
  `tr_id` int(11) NOT NULL AUTO_INCREMENT,
  `tr_date` date DEFAULT NULL,
  `tr_time` time DEFAULT NULL,
  `tr_amt` varchar(255) DEFAULT NULL,
  `amt` int(11) DEFAULT NULL,
  `tr_reason` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`tr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table3`
--

INSERT INTO `table3` (`tr_id`, `tr_date`, `tr_time`, `tr_amt`, `amt`, `tr_reason`) VALUES
(1, '2021-01-02', '14:47:48', '+32', 32, 'domestic'),
(2, '2021-01-02', '14:47:55', '-34', 34, 'shopping');

-- --------------------------------------------------------

--
-- Table structure for table `table4`
--

DROP TABLE IF EXISTS `table4`;
CREATE TABLE IF NOT EXISTS `table4` (
  `tr_id` int(11) NOT NULL AUTO_INCREMENT,
  `tr_date` date DEFAULT NULL,
  `tr_time` time DEFAULT NULL,
  `tr_amt` varchar(255) DEFAULT NULL,
  `amt` int(11) DEFAULT NULL,
  `tr_reason` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`tr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table4`
--

INSERT INTO `table4` (`tr_id`, `tr_date`, `tr_time`, `tr_amt`, `amt`, `tr_reason`) VALUES
(1, '2021-01-02', '14:52:29', '+355', 355, 'domestic'),
(2, '2021-01-02', '14:52:33', '-144', 144, 'shopping'),
(3, '2021-01-02', '14:52:46', '+19', 19, 'domestic'),
(4, '2021-01-02', '14:52:55', '-105', 105, 'shopping'),
(5, '2021-01-02', '14:52:59', '+105', 105, 'domestic');

-- --------------------------------------------------------

--
-- Table structure for table `table5`
--

DROP TABLE IF EXISTS `table5`;
CREATE TABLE IF NOT EXISTS `table5` (
  `tr_id` int(11) NOT NULL AUTO_INCREMENT,
  `tr_date` date DEFAULT NULL,
  `tr_time` time DEFAULT NULL,
  `tr_amt` varchar(255) DEFAULT NULL,
  `amt` int(11) DEFAULT NULL,
  `tr_reason` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`tr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table5`
--

INSERT INTO `table5` (`tr_id`, `tr_date`, `tr_time`, `tr_amt`, `amt`, `tr_reason`) VALUES
(1, '2021-01-04', '21:20:33', '-432', 432, 'shopping'),
(2, '2021-01-04', '21:21:14', '+34', 34, 'domestic'),
(3, '2021-01-04', '21:22:21', '-255', 255, 'Santosh'),
(4, '2021-01-04', '21:25:00', '+234234', 234234, 'domestic'),
(5, '2021-01-04', '21:25:02', '-3434', 3434, 'domestic'),
(6, '2021-01-04', '21:25:04', '+234', 234, 'domestic'),
(7, '2021-01-04', '21:25:06', '-3422', 3422, 'domestic'),
(8, '2021-01-04', '21:27:02', '-73', 1, 'domestic');

-- --------------------------------------------------------

--
-- Table structure for table `table6`
--

DROP TABLE IF EXISTS `table6`;
CREATE TABLE IF NOT EXISTS `table6` (
  `tr_id` int(11) NOT NULL AUTO_INCREMENT,
  `tr_date` date DEFAULT NULL,
  `tr_time` time DEFAULT NULL,
  `tr_amt` varchar(255) DEFAULT NULL,
  `amt` int(11) DEFAULT NULL,
  `tr_reason` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`tr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table6`
--

INSERT INTO `table6` (`tr_id`, `tr_date`, `tr_time`, `tr_amt`, `amt`, `tr_reason`) VALUES
(1, '2021-01-11', '01:19:01', '-1295', 1295, 'others'),
(2, '2021-01-11', '01:19:17', '+56000', 56000, 'others'),
(3, '2021-01-11', '01:19:25', '-1000', 1000, 'domestic'),
(4, '2021-01-11', '01:19:33', '-1499', 1499, 'shopping'),
(5, '2021-01-11', '01:19:53', '+50', 50, 'domestic'),
(6, '2021-01-11', '01:20:49', '-299', 299, 'Santosh');

-- --------------------------------------------------------

--
-- Table structure for table `table7`
--

DROP TABLE IF EXISTS `table7`;
CREATE TABLE IF NOT EXISTS `table7` (
  `tr_id` int(11) NOT NULL AUTO_INCREMENT,
  `tr_date` date DEFAULT NULL,
  `tr_time` time DEFAULT NULL,
  `tr_amt` varchar(255) DEFAULT NULL,
  `amt` int(11) DEFAULT NULL,
  `tr_reason` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`tr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table7`
--

INSERT INTO `table7` (`tr_id`, `tr_date`, `tr_time`, `tr_amt`, `amt`, `tr_reason`) VALUES
(1, '2021-01-11', '21:08:53', '+5000', 5000, 'others'),
(2, '2021-01-11', '21:09:01', '-299', 299, 'shopping'),
(3, '2021-01-11', '21:09:06', '-599', 599, 'shopping'),
(4, '2021-01-11', '21:09:12', '+500', 500, 'domestic'),
(5, '2021-01-11', '21:09:45', '-199', 199, 'Satyam');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_gender` varchar(6) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_email` (`user_email`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_password`, `user_gender`) VALUES
(1, 'Santosh Pandey', 'santosh@gmail.com', 'df53ca268240ca76670c8566ee54568a', 'Male'),
(2, 'Satyam Dubey', 'satyam@gmail.com', 'df53ca268240ca76670c8566ee54568a', 'Male'),
(3, 'John Doe', 'john@gmail.com', 'df53ca268240ca76670c8566ee54568a', 'Male'),
(4, 'Jane Doe', 'jane@gmail.com', 'df53ca268240ca76670c8566ee54568a', 'Female'),
(5, 'Vaibhav Mishra ', 'vaibhav@mishra.com', 'df53ca268240ca76670c8566ee54568a', 'Male'),
(6, 'Manas Barman', 'manas@gmail.com', 'df53ca268240ca76670c8566ee54568a', 'Male'),
(7, 'Babu Rao', 'babu@gmail.com', 'df53ca268240ca76670c8566ee54568a', 'Male');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
