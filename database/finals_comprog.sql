-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 11, 2018 at 10:55 AM
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
(1, 'test11111', 'LOREM', 'TEST', 5000, 2, 10000, '2018-03-04 02:55:45', 'root@email.com'),
(2, 'test1', 'SIT', 'T', 560, 3, 1680, '2018-03-04 02:55:45', 'root@email.com'),
(3, 'test11111', 'LOREM', 'TEST', 5000, 2, 10000, '2018-03-04 02:58:05', 'root@email.com'),
(4, 'test11111', 'LOREM', 'TEST', 5000, 3, 15000, '2018-03-10 08:24:32', 'pogiko@gmail.com'),
(5, 'test1111', 'IPSUM', 'T', 200, 2, 400, '2018-03-10 08:24:32', 'pogiko@gmail.com'),
(6, '1a', 'asd', 'TEST', 5000, 2, 10000, '2018-03-10 14:44:40', 'root@gmail.com'),
(7, 'dw', 'asd', '11', 12321, 3, 36963, '2018-03-10 14:44:40', 'root@gmail.com'),
(8, '1as', 'DOLOR', 'T', 1000, 2, 2000, '2018-03-10 14:44:40', 'root@gmail.com'),
(9, 'sd21', 'asd', '11', 11, 2, 22, '2018-03-10 14:44:40', 'root@gmail.com'),
(10, '2a', 'IPSUM', 'T', 200, 1, 200, '2018-03-10 14:45:16', 'root@gmail.com'),
(11, '1as', 'DOLOR', 'T', 1000, 2, 2000, '2018-03-10 14:58:34', 'root@gmail.com'),
(12, '3a', 'SIT', 'T', 560, 3, 1680, '2018-03-10 14:58:34', 'root@gmail.com'),
(13, 'dw', 'asd', '11', 12321, 4, 49284, '2018-03-11 05:09:50', 'pogi@email.com'),
(14, '1a', 'asd', 'TEST', 5000, 2, 10000, '2018-03-11 06:34:46', 'root@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_code` varchar(60) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_desc` tinytext NOT NULL,
  `product_img_name` varchar(60) NOT NULL,
  `qty` int(5) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_code`, `product_name`, `product_desc`, `product_img_name`, `qty`, `price`) VALUES
(1, '1a', 'asd', 'TEST', 'watch-1.jpeg', 18, '5000.00'),
(2, '2a', 'IPSUM', 'T', 'watch-2.jpeg', 11, '200.00'),
(3, '1as', 'DOLOR', 'T', 'watch-3.jpeg', 19, '1000.00'),
(4, '3a', 'SIT', 'T', 'watch-4.jpeg', 5, '560.00'),
(5, 'dw', 'asd', '11', 'watch-5.jpeg', 5, '12321.00'),
(6, 'sd21', 'asd', '11', 'watch-6.jpeg', 1, '11.00');

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
(33, 'asd111', 'asd11', '1', '1', 11, '55@gmail.com', 'hehe', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`product_code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
