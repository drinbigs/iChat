-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2015 at 12:45 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ichat`
--

-- --------------------------------------------------------

--
-- Table structure for table `logged`
--

CREATE TABLE IF NOT EXISTS `logged` (
  `start_time` timestamp NOT NULL,
  `username` varchar(25) NOT NULL,
  PRIMARY KEY (`start_time`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logged`
--

INSERT INTO `logged` (`start_time`, `username`) VALUES
('2015-09-07 04:10:29', 'nhomar12');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `sess_time` timestamp NOT NULL,
  `username` varchar(25) NOT NULL,
  `message` varchar(100) NOT NULL,
  PRIMARY KEY (`sess_time`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`sess_time`, `username`, `message`) VALUES
('2015-09-07 02:47:38', 'nhomar12', 'Yolo naman oh'),
('2015-09-07 02:47:58', 'nhomar12', 'Yes!!!'),
('2015-09-07 02:48:06', 'nhomar12', 'Hahahaha.'),
('2015-09-07 03:44:56', 'nhomar12', 'checks the time'),
('2015-09-07 03:45:04', 'nhomar12', 'hays'),
('2015-09-07 03:53:18', 'nhomar12', 'hey');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `email`, `password`) VALUES
('kimberly', 'caballeskim@gmail.com', 'kimsexy'),
('neil', 'aldrin@gmail.com', 'neil'),
('nhomar12', 'nhomarramos@yahoo.com', '92b4244e73ab5d4bbad8e5fe49f4857a'),
('rbaysantos', 'rushty@yahoo.com', 'benben'),
('RCorsino', 'corsinoronalyn@gmail.com', 'rona0217'),
('renzo', 'allainerods@yahoo.com', 'renzo');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
