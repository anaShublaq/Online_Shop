-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 25, 2022 at 07:50 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `cId` int(10) NOT NULL,
  `cName` varchar(25) NOT NULL,
  `cDescription` varchar(200) NOT NULL,
  PRIMARY KEY (`cId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cId`, `cName`, `cDescription`) VALUES
(1, 'Watches', 'This Category is show every Watches product.\r\n'),
(2, 'Shoes', 'This Category is show every Shoes product.'),
(3, 'Trouser', 'This Category is show every Trouser product.'),
(4, 'Bags', 'This Category is show every Bags product.'),
(5, 'Phones', 'This Category is show every Phones product.');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `categoryId` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `type`, `price`, `discount`, `image`, `categoryId`) VALUES
(1, 'watch1', 'apple plus	', 250, 5, 'img/product/inspired-product/i3.jpg	', 1),
(2, 'watch2', 'apple', 100, 20, 'img/product/inspired-product/i5.jpg', 1),
(3, 'shoes1', 'nike', 120, 5, 'img/product/inspired-product/i4.jpg', 2),
(4, 'shoes2', 'king', 150, 8, 'img/product/inspired-product/i8.jpg', 2),
(5, 'shoes3', 'diadora', 90, 0, 'img/product/inspired-product/i6.jpg', 2),
(6, 'trouser1', 'for men', 210, 20, 'img/product/inspired-product/i2.jpg', 3),
(7, 'bag1', 'for women', 90, 5, 'img/product/inspired-product/i1.jpg', 4),
(8, 'watch3', 'samsong', 250, 5, 'img/product/inspired-product/ivan-shilov-KiAYZZjpjkQ-unsplash.jpg	', 1),
(9, 'watch4', 'apple watch', 200, 5, 'img/product/inspired-product/tommy-den-reijer-YWKh28IllTY-unsplash.jpg', 1),
(11, 'shoes4', 'for women', 100, 5, 'img/product/inspired-product/wengang-zhai-_fOL6ebfECQ-unsplash.jpg', 2),
(12, 'shoes5', 'for men', 120, 0, 'img/product/inspired-product/usama-akram-kP6knT7tjn4-unsplash.jpg', 2),
(13, 'shoes6', 'for women', 150, 5, 'img/product/inspired-product/mostafa-mahmoudi-3OZr-hLbsq0-unsplash.jpg', 2),
(14, 'shoes7', 'for women', 90, 2, 'img/product/inspired-product/linda-xu-fUEP0djb1hA-unsplash.jpg', 2),
(15, 'bag2', 'for women', 150, 5, 'img/product/inspired-product/i7.jpg', 4),
(16, 'bag3', 'for women', 160, 10, 'img/product/inspired-product/james-ree-ZmeFtu11Hpc-unsplash.jpg', 4),
(17, 'bag4', 'for women', 170, 6, 'img/product/inspired-product/arno-senoner-ZT16YkAYueo-unsplash.jpg', 4),
(18, 'shoes8', 'for women', 100, 4, 'img/product/inspired-product/emily-gouker-Zx76sbAndc0-unsplash.jpg', 2),
(19, 'phone1', 'apple x', 950, 0, 'img/product/inspired-product/anton-maksimov-juvnsky-0-YtNZXk27Q-unsplash.jpg', 5),
(20, 'phone2', 'iPhone ', 1000, 5, 'img/product/inspired-product/tom-barrett-gahrG0vrcxg-unsplash.jpg', 5),
(21, 'phone3', 'iPhone 12', 3000, 5, 'img/product/inspired-product/theo-sautif-aioruFj-dfU-unsplash.jpg', 5),
(22, 'phone4', 'iPhone 8', 800, 3, 'img/product/inspired-product/luis-felipe-lins-hF07reVTNSU-unsplash.jpg', 5),
(23, 'phone5', 'iphone 11', 2500, 3, 'img/product/inspired-product/jose-gil-1bjY0uutybE-unsplash.jpg', 5),
(24, 'phone6', 'iPhone x', 1200, 2, 'img/product/inspired-product/wesley-tingey-sPBRRwT_fKA-unsplash.jpg', 5);

-- --------------------------------------------------------

--
-- Table structure for table `saveid`
--

DROP TABLE IF EXISTS `saveid`;
CREATE TABLE IF NOT EXISTS `saveid` (
  `saveId` int(10) NOT NULL,
  PRIMARY KEY (`saveId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userName` varchar(100) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userName`, `password`) VALUES
('Anas', '202cb962ac59075b964b07152d234b70');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
