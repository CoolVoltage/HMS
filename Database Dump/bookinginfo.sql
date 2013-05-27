-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 27, 2013 at 11:39 PM
-- Server version: 5.5.31
-- PHP Version: 5.4.6-1ubuntu1.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bookinginfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `N_Rooms` varchar(10) DEFAULT NULL,
  `N_Adults` varchar(10) DEFAULT NULL,
  `N_Children` varchar(10) DEFAULT NULL,
  `R_Type` varchar(30) DEFAULT NULL,
  `I_Date` varchar(20) DEFAULT NULL,
  `NOD` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `karthik`
--

CREATE TABLE IF NOT EXISTS `karthik` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `N_Rooms` varchar(10) DEFAULT NULL,
  `N_Adults` varchar(10) DEFAULT NULL,
  `N_Children` varchar(10) DEFAULT NULL,
  `R_Type` varchar(30) DEFAULT NULL,
  `I_Date` varchar(20) DEFAULT NULL,
  `NOD` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `kunj`
--

CREATE TABLE IF NOT EXISTS `kunj` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `N_Rooms` varchar(10) DEFAULT NULL,
  `N_Adults` varchar(10) DEFAULT NULL,
  `N_Children` varchar(10) DEFAULT NULL,
  `R_Type` varchar(30) DEFAULT NULL,
  `I_Date` varchar(20) DEFAULT NULL,
  `NOD` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pck1`
--

CREATE TABLE IF NOT EXISTS `pck1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `N_Rooms` varchar(10) DEFAULT NULL,
  `N_Adults` varchar(10) DEFAULT NULL,
  `N_Children` varchar(10) DEFAULT NULL,
  `R_Type` varchar(30) DEFAULT NULL,
  `I_Date` varchar(20) DEFAULT NULL,
  `NOD` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pck1`
--

INSERT INTO `pck1` (`id`, `N_Rooms`, `N_Adults`, `N_Children`, `R_Type`, `I_Date`, `NOD`) VALUES
(1, '1', '6', '1', 'Royal Club Suite Room(8)', '15/5/2014', '3');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
