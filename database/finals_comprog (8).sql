-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 27, 2018 at 09:02 AM
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
(14, 'bag-2a', 'Bag-2', 'bag', 'bag-2.jpeg', 0, '2600.00'),
(15, 'bag-3a', 'Bag-3', 'bag', 'bag-3.jpg', 0, '1000.00'),
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
(7, 'c1', 'cam1', 'camera', 'slr-1.jpeg', 0, '10000.00'),
(8, 'c2', 'cam2', 'camera', 'slr-2.jpg', 2, '2000.00'),
(9, 'c3', 'cam3', 'camera', 'slr-3.jpeg', 1, '5000.00'),
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
(19, 'mens-2a', 'Mens-2', 'clothing', 'mens-2.jpeg', 1, '500.00'),
(20, 'mens-3a', 'Mens-3', 'clothing', 'mens-3.jpeg', 2, '1000.00'),
(21, 'mens-4a', 'Mens-4', 'clothing', 'mens-4.jpeg', 2, '560.00'),
(22, 'mens-5a', 'Mens-5', 'clothing', 'mens-5.jpeg', 1, '1200.00'),
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

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `pin` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `address`, `city`, `pin`, `email`, `password`, `type`) VALUES
(1, 'bhhjhk', 'hjkhjh', 'jhuijhi', 'hijh', '09123456789', 'hjikj@gmail.com', '$2y$10$C6Yo6VmnCfvskbku5qLffe3yM7SS/7MGtZUVL82PWYlZRapb/rnV.', 'user'),
(5, 'pogikono', 'heheheh', 'pampangaku', 'angelesnaman', '09565128808', 'root1@gmail.com', '$2y$10$2Vg/jLH5lh1BguHPLp8MMeksgM6PpJCuGyCoFr/gMWYqQkqIbCVaW', 'admin'),
(6, 'test', 'test', 'test', 'test', '09565128808', 'test@gmail.com', '$2y$10$STVarRe18g8xjsuajcyJqufjZJG.bL384FPjJDimElLnGZhUvVfZu', 'admin');

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
(1, 'w1', 'watch1', 'watch', 'watch-1.jpeg', 10, '5000.00'),
(2, 'w2', 'watch2', 'watch', 'watch-2.jpeg', 29, '200.00'),
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
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `camera`
--
ALTER TABLE `camera`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `mens`
--
ALTER TABLE `mens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `watch`
--
ALTER TABLE `watch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `womens`
--
ALTER TABLE `womens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
