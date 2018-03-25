-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 24, 2018 at 02:17 PM
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
(13, 'bag-1a', 'Bag-1', 'bag', 'bag-1.jpeg', 0, '5000.00'),
(14, 'bag-2a', 'Bag-2', 'bag', 'bag-2.jpeg', 1, '2600.00'),
(15, 'bag-3a', 'Bag-3', 'bag', 'bag-3.jpg', 2, '1000.00'),
(16, 'bag-4a', 'Bag-4', 'bag', 'bag-4.jpeg', 1, '4000.00'),
(17, 'bag-5a', 'Bag-5', 'bag', 'bag-5.jpeg', 2, '6000.00');

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
  `qty` int(5) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `camera`
--

INSERT INTO `camera` (`id`, `product_code`, `product_name`, `product_desc`, `product_img_name`, `qty`, `price`) VALUES
(7, 'c1', 'cam1', 'camera', 'slr-1.jpeg', 2, '10000.00'),
(8, 'c2', 'cam2', 'camera', 'slr-2.jpg', 2, '2000.00'),
(9, 'c3', 'cam3', 'camera', 'slr-3.jpeg', 2, '5000.00'),
(10, 'c4', 'cam4', 'camera', 'slr-4.jpeg', 2, '5603.00'),
(11, 'c5', 'cam5', 'camera', 'slr-5.jpeg', 2, '7000.00'),
(12, 'c6', 'cam6', 'camera', 'slr-6.jpeg', 2, '3333.00');

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
(18, 'mens-1a', 'Mens-1', 'clothing', 'mens-1.jpg', 2, '400.00'),
(19, 'mens-2a', 'Mens-2', 'clothing', 'mens-2.jpeg', 2, '500.00'),
(20, 'mens-3a', 'Mens-3', 'clothing', 'mens-3.jpeg', 2, '1000.00'),
(21, 'mens-4a', 'Mens-4', 'clothing', 'mens-4.jpeg', 2, '560.00'),
(22, 'mens-5a', 'Mens-5', 'clothing', 'mens-5.jpeg', 2, '1200.00'),
(23, 'mens-6a', 'Mens-6', 'clothing', 'mens-6.jpeg', 1, '1110.00');

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
(1, 'w5', 'watch5', 'watch', 1200, 2, 2400, '2018-03-23 09:53:28', 'root@gmail.com'),
(2, 'bag-4a', 'Bag-4', 'bag', 4000, 1, 4000, '2018-03-23 09:53:28', 'root@gmail.com'),
(3, 'w4', 'watch4', 'watch', 560, 2, 1120, '2018-03-23 09:53:55', 'root@gmail.com'),
(4, 'w2', 'watch2', 'watch', 200, 2, 400, '2018-03-23 09:54:17', 'root@gmail.com'),
(5, 'bag-1a', 'Bag-1', 'bag', 5000, 2, 10000, '2018-03-23 09:54:26', 'root@gmail.com'),
(6, 'bag-2a', 'Bag-2', 'bag', 2600, 1, 2600, '2018-03-23 09:54:32', 'root@gmail.com'),
(7, 'womens-2a', 'Womens-2', 'Clothing', 800, 1, 800, '2018-03-23 09:57:07', 'root@gmail.com'),
(8, 'womens-3a', 'Womens-3', 'Clothing', 1000, 2, 2000, '2018-03-23 09:57:26', 'root@gmail.com'),
(9, 'mens-6a', 'Mens-6', 'clothing', 1110, 1, 1110, '2018-03-23 09:57:26', 'root@gmail.com');

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
(38, 'jeje', 'jejee', '23kj2k', 'anshe', 29101, 'uu@gmail.com', 'password', 'user'),
(39, 'yeye', 'yyeyeye', 'yeyey', '323', 232323, 'yeye@gmail.com', 'PASSWORD', 'user'),
(42, 'sjhdjahsj', 'jhakjfhakjsbk', 'jhkjdshkjfd', '3345', 4444, 'yet@gmail.com', 'password', 'user');

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
(1, 'w1', 'watch1', 'watch', 'watch-1.jpeg', 3, '5000.00'),
(2, 'w2', 'watch2', 'watch', 'watch-2.jpeg', 2, '200.00'),
(3, 'w3', 'watch3', 'watch', 'watch-3.jpeg', 5, '1000.00'),
(4, 'w4', 'watch4', 'watch', 'watch-4.jpeg', 0, '560.00'),
(5, 'w5', 'watch5', 'watch', 'watch-5.jpeg', 0, '1200.00'),
(6, 'w6', 'watch6', 'watch', 'watch-6.jpeg', 2, '300.00');

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
(24, 'womens-1a', 'Womens-1', 'Clothing', 'womens-1.jpeg', 2, '500.00'),
(25, 'womens-2a', 'Womens-2', 'Clothing', 'womens-2.jpeg', 8, '800.00'),
(26, 'womens-3a', 'Womens-3', 'Clothing', 'womens-3.jpeg', 2, '1000.00'),
(27, 'womens-4a', 'Womens-4', 'Clothing', 'womens-4.jpeg', 4, '560.00');

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
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
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
