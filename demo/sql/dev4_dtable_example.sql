-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jul 25, 2016 at 06:48 AM
-- Server version: 10.0.26-MariaDB
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dev4_dtable_example`
--

-- --------------------------------------------------------

--
-- Table structure for table `assembly_types`
--

CREATE TABLE IF NOT EXISTS `assembly_types` (
  `assemble_id` int(11) NOT NULL AUTO_INCREMENT,
  `assemble_name` varchar(10) NOT NULL,
  PRIMARY KEY (`assemble_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `assembly_types`
--

INSERT INTO `assembly_types` (`assemble_id`, `assemble_name`) VALUES
(1, 'local'),
(2, 'imported');

-- --------------------------------------------------------

--
-- Table structure for table `colours`
--

CREATE TABLE IF NOT EXISTS `colours` (
  `colour_id` int(11) NOT NULL AUTO_INCREMENT,
  `colour_name` varchar(150) NOT NULL,
  PRIMARY KEY (`colour_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `colours`
--

INSERT INTO `colours` (`colour_id`, `colour_name`) VALUES
(1, 'black'),
(2, 'green'),
(3, 'blue'),
(4, 'brown'),
(5, 'red'),
(6, 'white');

-- --------------------------------------------------------

--
-- Table structure for table `engines`
--

CREATE TABLE IF NOT EXISTS `engines` (
  `engine_id` int(11) NOT NULL AUTO_INCREMENT,
  `engine_name` varchar(150) NOT NULL,
  PRIMARY KEY (`engine_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `engines`
--

INSERT INTO `engines` (`engine_id`, `engine_name`) VALUES
(1, 'petrol'),
(2, 'diesel'),
(3, 'CNG'),
(4, 'LPG'),
(5, 'hybrid');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(150) NOT NULL,
  `item_colour` int(11) NOT NULL,
  `item_engine_type` int(11) NOT NULL,
  `item_assemble` int(11) NOT NULL,
  `model_id` int(11) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `item_name`, `item_colour`, `item_engine_type`, `item_assemble`, `model_id`) VALUES
(1, 'suzuki mehran', 6, 1, 1, 1),
(2, 'cultus', 2, 1, 1, 2),
(3, 'city auto', 6, 1, 2, 5),
(4, 'civic', 1, 2, 2, 6),
(5, 'corolla', 2, 3, 1, 3),
(6, 'passo', 4, 5, 2, 4),
(7, 'audi a4 series', 4, 1, 2, 7),
(8, 'audi a5', 5, 2, 2, 8),
(9, 'bmw 1x', 1, 1, 2, 9),
(10, 'bmw 2x', 2, 2, 2, 10);

-- --------------------------------------------------------

--
-- Table structure for table `make`
--

CREATE TABLE IF NOT EXISTS `make` (
  `make_id` int(11) NOT NULL AUTO_INCREMENT,
  `make_name` varchar(150) NOT NULL,
  PRIMARY KEY (`make_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `make`
--

INSERT INTO `make` (`make_id`, `make_name`) VALUES
(1, 'suzuki'),
(2, 'toyota'),
(3, 'honda'),
(4, 'audi'),
(5, 'bmw');

-- --------------------------------------------------------

--
-- Table structure for table `models`
--

CREATE TABLE IF NOT EXISTS `models` (
  `model_id` int(11) NOT NULL AUTO_INCREMENT,
  `model_name` varchar(150) NOT NULL,
  `model_year` date NOT NULL,
  `make_id` int(11) NOT NULL,
  PRIMARY KEY (`model_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `models`
--

INSERT INTO `models` (`model_id`, `model_name`, `model_year`, `make_id`) VALUES
(1, 'mehran', '2013-07-01', 1),
(2, 'cultus', '2014-01-01', 1),
(3, 'corolla', '0000-00-00', 2),
(4, 'passo', '0000-00-00', 2),
(5, 'city', '0000-00-00', 3),
(6, 'civic', '0000-00-00', 3),
(7, 'a4', '0000-00-00', 4),
(8, 'a5', '0000-00-00', 4),
(9, '1 series', '0000-00-00', 5),
(10, '2 series', '0000-00-00', 5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
