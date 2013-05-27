-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 27, 2013 at 11:41 PM
-- Server version: 5.5.31
-- PHP Version: 5.4.6-1ubuntu1.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `userinfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE IF NOT EXISTS `userinfo` (
  `name` varchar(20) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `DOB` varchar(20) DEFAULT NULL,
  `Uname` varchar(20) DEFAULT NULL,
  `Pword` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`name`, `Email`, `DOB`, `Uname`, `Pword`) VALUES
('karthik', 'vijaypcguy@yahoo.com', '2/2/1951', 'admin', '9d4e1e23bd5b727046a9e3b4b7db57bd8d6ee684'),
('pck', 'pck@pckmail.com', '1/1/1950', 'pck1', '522a549ca6e90497113d53420f3a3339e7bd7c44'),
('kundi', 'kundi@kunju.com', '23/3/1950', 'kunj', '7ca29e7e7afa966284932da6cd3668046c04484e'),
('karthik', 'vijaypcguy@yahoo.com', '17/4/1967', 'karthik', 'cb4abed6c07c79e2deeb7d5895ddc855894ab403');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
