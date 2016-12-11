-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 11, 2016 at 05:46 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `ID` int(50) NOT NULL,
  `Firstname` varchar(10) NOT NULL,
  `Lastname` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` int(15) NOT NULL,
  `Business` varchar(10) NOT NULL,
  `Subject` varchar(10) NOT NULL,
  `Message` text NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Country` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `Firstname`, `Lastname`, `Email`, `Phone`, `Business`, `Subject`, `Message`, `Gender`, `Country`) VALUES
(0, 'yash', 'patel', 'yes.g.patel@gmail.com', 2147483647, 'it', 'Technical ', 'qwegdgdgdb', 'on', 'India'),
(0, 'yash', 'patel', 'yes.g.patel@gmail.com', 2147483647, 'it', 'Technical ', 'qwegdgdgdb', 'on', 'India'),
(0, 'abc', 'ax', '1@gmail.com', 12345, 'zx', 'Technical ', 'fgfhgchngjfgj', 'on', 'India'),
(0, 'abc', 'az', '1@gmail.com', 1324, 'sfs', 'General Qu', 'dtfsdg', 'on', 'India');

-- --------------------------------------------------------

--
-- Table structure for table `regis_form`
--

CREATE TABLE IF NOT EXISTS `regis_form` (
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `confirmpass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regis_form`
--

INSERT INTO `regis_form` (`firstname`, `lastname`, `email`, `password`, `confirmpass`) VALUES
('yash', 'patel', 'yash@gmail.com', '12345', '12345');
