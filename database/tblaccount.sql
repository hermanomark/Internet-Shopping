-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2018 at 02:40 PM
-- Server version: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `internet_shopping_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblaccount`
--

CREATE TABLE `tblaccount` (
  `aUsername` varchar(50) NOT NULL,
  `aPassword` varchar(50) NOT NULL,
  `aFirstname` varchar(50) NOT NULL,
  `aLastname` varchar(50) NOT NULL,
  `aEmail` varchar(50) NOT NULL,
  `aAge` int(10) NOT NULL,
  `aGender` varchar(10) NOT NULL,
  `aRole` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblaccount`
--

INSERT INTO `tblaccount` (`aUsername`, `aPassword`, `aFirstname`, `aLastname`, `aEmail`, `aAge`, `aGender`, `aRole`) VALUES
('admin', 'admin', 'Mark', 'Hermano', 'hermano.mark.mh@gmail.com', 22, 'Male', 'admin'),
('admin2', 'admin2', 'admin', 'admin', 'admin@gmail.com', 20, 'Female', 'admin'),
('hermanomark', '123456', 'Mark Jason', 'Hermano', 'hermano.mark@yahoo.com', 22, 'Male', 'user'),
('hermanomyrna', '123456', 'Myrna', 'Hermano', 'hermanomyrna@yahoo.com', 55, 'Female', 'user'),
('michermano', '123456', 'Mic', 'Hermano', 'hermanomic@gmail.com', 23, 'Male', 'user'),
('nestorhermano', '2402505', 'Nestor', 'Hermano', 'nestor.hermano@yahoo.com', 60, 'Male', 'user'),
('user1', 'user1', 'user1 fname', 'user1 lname', 'user1@yahoo.com', 29, 'Female', 'user'),
('user2', 'user2', 'user2 fname', 'user2 lname', 'user@gmail.com', 18, 'Female', 'user'),
('user3', 'user3', 'user3 fname', 'user3 lname', 'user3@gmail.com', 30, 'Male', 'user'),
('user4', 'user4', 'user4fname', 'user4lname', 'user4email@gmail.com', 20, 'Male', 'user'),
('user5', 'user5', 'user5 fname', 'user5 lname', 'user@gmail.com', 20, 'Male', 'user'),
('user6', 'user6', 'user6 fname', 'user6 lname', 'user6@gmail.com', 18, 'Male', 'user'),
('user7', 'user7', 'user7fname', 'user7lname', 'user7@gmail.com', 15, 'Male', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblaccount`
--
ALTER TABLE `tblaccount`
  ADD PRIMARY KEY (`aUsername`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
