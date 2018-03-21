-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 21, 2018 at 12:49 PM
-- Server version: 5.7.21-log
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finals_comprog`
--

-- --------------------------------------------------------

--
-- Table structure for table `bags`
--

CREATE TABLE `bags` (
  `id` int(11) NOT NULL,
  `product_code` varchar(60) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_desc` tinytext NOT NULL,
  `product_img_name` varchar(255) NOT NULL,
  `qty` int(255) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bags`
--

INSERT INTO `bags` (`id`, `product_code`, `product_name`, `product_desc`, `product_img_name`, `qty`, `price`) VALUES
(23, 'bag-1a', 'Bag-1', 'bag', 'bag-1.jpeg', 18, '5000.00'),
(24, 'bag-2a', 'Bag-2', 'bag', 'bag-2.jpeg', 11, '2600.00'),
(25, 'bag-3a', 'Bag-3', 'bag', 'bag-3.jpg', 19, '1000.00'),
(26, 'bag-4a', 'Bag-4', 'bag', 'bag-4.jpeg', 12, '4000.00'),
(27, 'bag-5a', 'Bag-5', 'bag', 'bag-5.jpeg', 23, '6000.00');

-- --------------------------------------------------------

--
-- Table structure for table `camera`
--

CREATE TABLE `camera` (
  `id` int(11) NOT NULL,
  `product_code` varchar(60) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_desc` tinytext NOT NULL,
  `product_img_name` varchar(255) NOT NULL,
  `qty` int(255) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `camera`
--

INSERT INTO `camera` (`id`, `product_code`, `product_name`, `product_desc`, `product_img_name`, `qty`, `price`) VALUES
(19, 'c1', 'cam1', 'camera', 'featured-2.jpeg', 19, '10000.00'),
(20, 'c2', 'cam2', 'camera', 'camera-2.jpeg', 10, '2000.00'),
(21, 'c3', 'cam3', 'camera', 'camera-1.jpeg', 18, '5000.00'),
(22, 'c4', 'cam4', 'camera', 'featured-3.jpg', 5, '5603.00'),
(38, 'c5', 'cam5', 'camera', 'camera-3.jpeg', 12, '7000.00'),
(39, 'c6', 'cam6', 'camera', 'camera-4.jpeg', 22, '3333.00');

-- --------------------------------------------------------

--
-- Table structure for table `mens`
--

CREATE TABLE `mens` (
  `id` int(11) NOT NULL,
  `product_code` varchar(60) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_desc` tinytext NOT NULL,
  `product_img_name` varchar(255) NOT NULL,
  `qty` int(255) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mens`
--

INSERT INTO `mens` (`id`, `product_code`, `product_name`, `product_desc`, `product_img_name`, `qty`, `price`) VALUES
(28, 'mens-1a', 'Mens-1', 'clothing', 'mens-1.jpg', 18, '400.00'),
(29, 'mens-2a', 'Mens-2', 'clothing', 'mens-2.jpeg', 13, '500.00'),
(30, 'mens-3a', 'Mens-3', 'clothing', 'mens-3.jpeg', 19, '1000.00'),
(31, 'mens-4a', 'Mens-4', 'clothing', 'mens-4.jpeg', 11, '560.00'),
(32, 'mens-5a', 'Mens-5', 'clothing', 'mens-5.jpeg', 22, '1200.00'),
(33, 'mens-6a', 'Mens-6', 'clothing', 'mens-6.jpeg', 12, '1110.00');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(15) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_desc` varchar(255) NOT NULL,
  `price` int(10) NOT NULL,
  `units` int(5) NOT NULL,
  `total` int(15) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_code`, `product_name`, `product_desc`, `price`, `units`, `total`, `date`, `email`) VALUES
(1, 'w1', 'watch1', 'TEST', 5000, 1, 5000, '2018-03-17 06:02:09', 'root@gmail.com'),
(2, 'w5', 'watch5', '11', 12321, 1, 12321, '2018-03-17 06:06:04', 'root@gmail.com'),
(3, 'w6', 'watch6', '11', 11, 1, 11, '2018-03-18 06:31:56', 'root@gmail.com'),
(4, 'c2', 'cam2', 'camera', 200, 1, 200, '2018-03-18 06:31:56', 'root@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `pin` int(6) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(15) NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `address`, `city`, `pin`, `email`, `password`, `type`) VALUES
(3, 'josef', 'david', '16-55', 'angeles city', 2009, '123@gmail.com', 'dragon123', 'user'),
(5, 'josef', 'david', '123', 'nanana', 2012030, 'root@gmail.com', 'password', 'admin'),
(6, 'Yah', 'YAHYAH', 'EXB', 'EXB', 2010, 'email@email.com', 'password', 'user'),
(7, 'jm', 'santos', 'pulungbulu', 'ac', 2009, 'sephooo@yahoo.com', 'sefsepsep', 'user'),
(8, 'hehehehe', 'davids', '1132', 'ac', 212312, 'root@email.com', 'password', 'user'),
(9, 'sdf', 'sdf', 'sdf', 'sdf', 1212, 'admin@gmail.com', 'hehe', 'user'),
(11, 'asd', 'asd', 'asd', 'asd', 23423, 'hehehe@gmail.com', 'hehe', 'user'),
(12, 'asd', 'asd', 'dasd', 'asd', 22, 'admin12@gmail.com', 'password', 'user'),
(13, 'sdf', 'sdf', 'sdfsdf', 'sdf', 233423, 'admin11@gmail.com', '', 'user'),
(14, '123212', '2323', '2323', '11111', 122342342, 'zabs@gmail.com', 'password', 'user'),
(15, '23423', '23423', '23423', '23423', 23423, 'admin11111@gmail.com', '', 'user'),
(17, 'asd', 'asd', 'asd', 'asd', 2323, 'haha@gmail.com', 'pass', 'user'),
(18, 'asd', 'd', 'g', 'g', 22, 'heha@gmail.com', '', 'user'),
(20, 'sdf222222', 'sdf', 'sdf', 'sdf', 3333, 'tangina@gmail.com', 'pass', 'user'),
(21, 'q', 'q', 'q', 'q', 1, 'q@gmail.com', 'qqq', 'user'),
(22, 'd', 'd', 'd', 'dd', 1, 'd@gmail.com', 'dd', 'user'),
(23, 'ddd', 'dddd', 'ddd', 'ddd', 3333, 'ddd@gmail.com', 'pass', 'user'),
(24, 'asdasdadsdsadsadsadsa', 'adsdsaasdsaddsasadsdasadads', 'dsasaddsasadsadsad', 'asdadssad', 33333, 'dasdas@gmeil.com', 'daadssadsadsad', 'user'),
(25, 'sdas333', 'asdas', '323', 'df2', 232, 'k@gmail.com', 'pass', 'user'),
(26, 'l', 'l', 'l', 'l', 5454, 'l@gmail.com', 'gmail', 'user'),
(27, 'ax', 'x', 'x', 'x', 2, 'x@gmail.com', 'xxx', 'user'),
(29, 'asdsadas', 'asdas', 'asd', 'asd', 22, 'tete@gmail.com', 'tanginamu', 'user'),
(30, 'wwww', 'www', 'wwww', 'wwww', 11, 'www@gmail.com', 'www', 'user'),
(31, 'Jisefpogi', 'David', '172', 'Angeles', 33659, 'pogiko@gmail.com', 'pogikone', 'user'),
(32, 'Josefpogi', 'Devid', 'I', 'Hs', 32649588, 'pogi@email.com', 'pogiko', 'user'),
(33, 'asd111', 'asd11', '1', '1', 11, '55@gmail.com', 'hehe', 'user'),
(34, 'April Joie', 'Arazo', 'address', 'city', 1998, 'apriljoie@yahoo.com', 'jhey2698', 'user'),
(35, 'ginagawamu', 'mumu', '21231ax', 'asda', 1211, 'gege@gmail.com', 'password', 'user'),
(36, 'gegewamu', 'gegemo', '234sks', 'asnasnd', 99292, 'gegi@gmail.com', 'password', 'user'),
(37, 'anone', 'anonene', '223hjh', 'angelesba', 29329, 'tengi@gmail.com', 'password', 'user'),
(38, 'jeje', 'jejee', '23kj2k', 'anshe', 29101, 'uu@gmail.com', 'password', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `watch`
--

CREATE TABLE `watch` (
  `id` int(11) NOT NULL,
  `product_code` varchar(60) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_desc` tinytext NOT NULL,
  `product_img_name` varchar(255) NOT NULL,
  `qty` int(255) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `watch`
--

INSERT INTO `watch` (`id`, `product_code`, `product_name`, `product_desc`, `product_img_name`, `qty`, `price`) VALUES
(13, 'w1', 'watch1', 'watch', 'watch-1.jpeg', 18, '5000.00'),
(14, 'w2', 'watch2', 'watch', 'watch-2.jpeg', 11, '200.00'),
(15, 'w3', 'watch3', 'watch', 'watch-3.jpeg', 19, '1000.00'),
(16, 'w4', 'watch4', 'watch', 'watch-4.jpeg', 5, '560.00'),
(17, 'w5', 'watch5', 'watch', 'watch-5.jpeg', 4, '1200.00'),
(18, 'w6', 'watch6', 'watch', 'watch-6.jpeg', 10, '300.00');

-- --------------------------------------------------------

--
-- Table structure for table `womens`
--

CREATE TABLE `womens` (
  `id` int(11) NOT NULL,
  `product_code` varchar(60) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_desc` tinytext NOT NULL,
  `product_img_name` varchar(255) NOT NULL,
  `qty` int(255) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `womens`
--

INSERT INTO `womens` (`id`, `product_code`, `product_name`, `product_desc`, `product_img_name`, `qty`, `price`) VALUES
(34, 'womens-1a', 'Womens-1', 'Clothing', 'womens-1.jpeg', 18, '500.00'),
(35, 'womens-2a', 'Womens-2', 'Clothing', 'womens-2.jpeg', 11, '800.00'),
(36, 'womens-3a', 'Womens-3', 'Clothing', 'womens-3.jpeg', 19, '1000.00'),
(37, 'womens-4a', 'Womens-4', 'Clothing', 'womens-4.jpeg', 21, '560.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bags`
--
ALTER TABLE `bags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`product_code`);

--
-- Indexes for table `camera`
--
ALTER TABLE `camera`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`product_code`);

--
-- Indexes for table `mens`
--
ALTER TABLE `mens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`product_code`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `watch`
--
ALTER TABLE `watch`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`product_code`);

--
-- Indexes for table `womens`
--
ALTER TABLE `womens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`product_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bags`
--
ALTER TABLE `bags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `camera`
--
ALTER TABLE `camera`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=778;
--
-- AUTO_INCREMENT for table `mens`
--
ALTER TABLE `mens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `watch`
--
ALTER TABLE `watch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `womens`
--
ALTER TABLE `womens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
