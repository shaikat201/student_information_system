-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2015 at 01:08 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `department`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_pass` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_name`, `admin_pass`) VALUES
(1, 'admin', 'shaikat201');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `roll` varchar(11) NOT NULL,
  `name` longtext NOT NULL,
  `mobile` mediumtext NOT NULL,
  `class` longtext NOT NULL,
  `exam` longtext NOT NULL,
  `bangla` longtext NOT NULL,
  `english` mediumtext NOT NULL,
  `math` mediumtext NOT NULL,
  `science` mediumtext NOT NULL,
  `islam` mediumtext NOT NULL,
  `information` mediumtext NOT NULL,
  `art` mediumtext NOT NULL,
  `bangladesh_studies` longtext NOT NULL,
  `physical_education` longtext NOT NULL,
  `Agriculture` mediumtext NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`roll`, `name`, `mobile`, `class`, `exam`, `bangla`, `english`, `math`, `science`, `islam`, `information`, `art`, `bangladesh_studies`, `physical_education`, `Agriculture`) VALUES
('4', 'Sakib', '01676745667', 'six(6)', '1st term', '45', '78', '67', '89', '54', '45', '34', '56', '78', '89'),
('3', 'Ani', '01677777777', 'six(6)', '1st term', '56', '87', '77', '54', '34', '23', '45', '66', '56', '78'),
('1', 'Puja Das', '01777777777', 'six(6)', '1st term', '60', '70', '56', '78', '66', '67', '56', '89', '67', '64'),
('2', 'Moushumi', '01584684984', 'six(6)', '1st term', '45', '67', '89', '65', '78', '45', '90', '45', '34', '67'),
('5', 'Tanvir', '01711113853', 'six(6)', '1st term', '56', '78', '98', '76', '56', '78', '90', '54', '67', '89');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
 ADD PRIMARY KEY (`roll`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
AUTO_INCREMENT=57;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
