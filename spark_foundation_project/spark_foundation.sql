-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2020 at 06:40 PM
-- Server version: 5.6.15-log
-- PHP Version: 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `spark_foundation`
--

-- --------------------------------------------------------

--
-- Table structure for table `spark`
--

CREATE TABLE IF NOT EXISTS `spark` (
  `name` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `credit` varchar(10) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spark`
--

INSERT INTO `spark` (`name`, `email`, `credit`) VALUES
('abhi', 'abhi@gmail.com', '13'),
('akshay', 'aks@gmail.com', '145'),
('Anirud', 'ani@gmail.com', '36077'),
('Ayushi', 'ayushi@gmail.com', '8726'),
('gauri', 'gb@gmail.com', '39511'),
('mayuri', 'mayu@gmail.com', '100'),
('samayra', 'samer@gmail.com', '20'),
('Shrey', 'Shrey11@gmail.com', '236'),
('tejas', 'tejas123@gmail.com', '1334'),
('vai', 'vai@gmail.com', '200000');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
