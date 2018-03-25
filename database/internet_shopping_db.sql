-- phpMyAdmin SQL Dump
-- version 3.5.8.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2018 at 07:07 AM
-- Server version: 5.6.11-log
-- PHP Version: 5.4.14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `internet_shopping_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblaccount`
--

CREATE TABLE IF NOT EXISTS `tblaccount` (
  `aUsername` varchar(50) NOT NULL,
  `aPassword` varchar(50) NOT NULL,
  `aFirstname` varchar(50) NOT NULL,
  `aLastname` varchar(50) NOT NULL,
  `aEmail` varchar(50) NOT NULL,
  `aAge` int(10) NOT NULL,
  `aGender` varchar(10) NOT NULL,
  `aRole` varchar(20) NOT NULL,
  PRIMARY KEY (`aUsername`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblaccount`
--

INSERT INTO `tblaccount` (`aUsername`, `aPassword`, `aFirstname`, `aLastname`, `aEmail`, `aAge`, `aGender`, `aRole`) VALUES
('admin', 'admin', 'admin', 'admin', 'admin', 20, 'Male', 'admin'),
('admin2', 'admin2', 'admin', 'admin', 'admin@gmail.com', 20, 'Female', 'admin'),
('hermanomark', 'mypassword', 'Mark Jason', 'Hermano', 'hermano.mark@yahoo.com', 22, 'Male', 'admin'),
('user1', 'user1', 'user1 fname', 'user1 lname', 'user1@yahoo.com', 29, 'Female', 'user'),
('user2', 'user2', 'user2 fname', 'user2 lname', 'user@gmail.com', 18, 'Female', 'user'),
('user3', 'user3', 'user3 fname', 'user3lname', 'user3@gmail.com', 90, 'Female', 'user'),
('user4', 'user4', 'user4fname', 'user4lname', 'user4email@gmail.com', 20, 'Male', 'user'),
('user5', 'user5', 'user5 fname', 'user5 lname', 'user@gmail.com', 20, 'Male', 'user'),
('user6', 'user6', 'user6 fname', 'user6 lname', 'user6@gmail.com', 18, 'Male', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tblproducts`
--

CREATE TABLE IF NOT EXISTS `tblproducts` (
  `product_code` varchar(50) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_category` varchar(50) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_description` varchar(500) NOT NULL,
  `product_quantity` int(50) NOT NULL,
  PRIMARY KEY (`product_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
