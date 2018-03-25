-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2018 at 02:41 PM
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
-- Table structure for table `tblproducts`
--

CREATE TABLE `tblproducts` (
  `product_code` varchar(50) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_category` varchar(50) NOT NULL,
  `product_price` float NOT NULL,
  `product_description` text NOT NULL,
  `product_image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproducts`
--

INSERT INTO `tblproducts` (`product_code`, `product_name`, `product_category`, `product_price`, `product_description`, `product_image`) VALUES
('1001', 'Robot', 'Toys', 800, 'Silver', 'robot.jpg'),
('1002', 'Shoes ', 'Clothes', 1999, 'Black', 'shoes.jpg'),
('1003', 'Bracelet', 'Jewellery', 3999, 'Gold', 'gold_bracelet.jpg'),
('1004', 'Basketball', 'Toys', 450, 'Round', 'ball.jpg'),
('1005', 'Shoulder bag', 'Bags', 1199, 'For women', 'shoulder_bag.jpg'),
('1006', 'Mouse pad', 'Gadgets', 199, 'Smooth', 'mouse_pad.jpeg'),
('1007', 'Mouse', 'Gadgets', 699, '2000dpi', 'mouse.jpg'),
('1008', 'Earphones', 'Gadgets', 999, 'Black', 'earphone.jpg'),
('1009', 'Hard drive', 'Gagets', 2199, '1 TB', 'external_hard_drive.jpg'),
('1010', 'Keyboard', 'Gadgets', 999, 'Chroma', 'keyboard.jpg'),
('1011', 'Headphones', 'Gadgets', 1499, 'Red', 'headphone.jpg'),
('1012', 'Camera', 'Gadgets', 1899, '10 megapixels', 'camera.jpg'),
('1013', 'Calendar', 'Misc.', 99, '2018 calendars', 'calendar.jpg'),
('2311', 'sada', 'asdsa', 2131, 'asdad', 'duck.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblproducts`
--
ALTER TABLE `tblproducts`
  ADD PRIMARY KEY (`product_code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
