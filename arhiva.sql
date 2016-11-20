-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2016 at 11:18 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `arhiva`
--

-- --------------------------------------------------------

--
-- Table structure for table `baranje`
--

CREATE TABLE IF NOT EXISTS `baranje` (
  `id_b` int(50) NOT NULL AUTO_INCREMENT,
  `idk` int(50) NOT NULL,
  `idt` int(50) NOT NULL,
  PRIMARY KEY (`id_b`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Table structure for table `dogovor`
--

CREATE TABLE IF NOT EXISTS `dogovor` (
  `id_d` int(50) NOT NULL AUTO_INCREMENT,
  `idk` int(50) NOT NULL,
  `idt` int(50) NOT NULL,
  PRIMARY KEY (`id_d`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `drugo`
--

CREATE TABLE IF NOT EXISTS `drugo` (
  `id_dr` int(50) NOT NULL AUTO_INCREMENT,
  `idk` int(50) NOT NULL,
  `idt` int(50) NOT NULL,
  PRIMARY KEY (`id_dr`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `izjava`
--

CREATE TABLE IF NOT EXISTS `izjava` (
  `id_i` int(50) NOT NULL AUTO_INCREMENT,
  `idk` int(50) NOT NULL,
  `idt` int(50) NOT NULL,
  PRIMARY KEY (`id_i`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `molba`
--

CREATE TABLE IF NOT EXISTS `molba` (
  `id_m` int(50) NOT NULL AUTO_INCREMENT,
  `idk` int(50) NOT NULL,
  `idt` int(50) NOT NULL,
  PRIMARY KEY (`id_m`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE IF NOT EXISTS `person` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `NameFile` varchar(50) NOT NULL,
  `ime` varchar(50) NOT NULL,
  `kategorija` varchar(20) NOT NULL,
  `idk` int(50) NOT NULL,
  `idt` int(50) NOT NULL,
  `id_b` int(50) NOT NULL,
  `data_added` blob NOT NULL,
  `id_m` int(50) NOT NULL,
  `id_dr` int(50) NOT NULL,
  `id_s` int(50) NOT NULL,
  `id_d` int(50) NOT NULL,
  `id_i` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `num` varchar(50) NOT NULL,
  `embg` int(50) NOT NULL,
  `name1` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `text` text NOT NULL,
  `time1` varchar(50) NOT NULL,
  `time2` varchar(50) NOT NULL,
  `grad` varchar(50) NOT NULL,
  `Vreme` varchar(50) NOT NULL,
  `time3` varchar(50) NOT NULL,
  `obrazovanie` varchar(50) NOT NULL,
  `period` varchar(50) NOT NULL,
  `rabota` varchar(50) NOT NULL,
  `stepen` varchar(50) NOT NULL,
  `den` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

-- --------------------------------------------------------

--
-- Table structure for table `spogodba`
--

CREATE TABLE IF NOT EXISTS `spogodba` (
  `id_s` int(50) NOT NULL AUTO_INCREMENT,
  `idk` int(50) NOT NULL,
  `idt` int(50) NOT NULL,
  PRIMARY KEY (`id_s`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
