-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 19, 2023 at 10:10 AM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `footwear`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `product_qty` int NOT NULL DEFAULT '1',
  `product_image` varchar(255) NOT NULL,
  `product_code` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_code_2` (`product_code`),
  KEY `product_code` (`product_code`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_price`, `product_qty`, `product_image`, `product_code`) VALUES
(1, 'Nike Air jordan 1 Mid', '3999', 1, 'Images/Productimg/Nike Air jordan 1 Mid.jpg', 'p1000'),
(2, 'Nike Air Force', '1999', 1, 'Images/Productimg/Nike Air Force.jpg', 'p1001'),
(3, 'Nike Air Max 270', '3499', 1, 'Images/Productimg/Nike Air Max 270.jpg', 'p1002'),
(4, 'Walkaroo Solid Fisherman Sandal', '999', 1, 'Images/Productimg/Walkaroo Solid Fisherman Sandal.jpg', 'p1003'),
(5, 'Walkaroo Strappy Floater Sandals', '12999', 1, 'Images/Productimg/Walkaroo Strappy Floater Sandals.jpg', 'p1004'),
(6, 'Walkaroo Pull-on Belly Shoes', '1759', 1, 'Images/Productimg/Walkaroo Pull-on Belly Shoes.jpg', 'p1005'),
(7, 'Puma Trinity Sneakers', '7999', 1, 'Images/Productimg/Puma Trinity Sneakers.jpg', 'p1006'),
(8, 'Puma Stride Sneakers', '6999', 1, 'Images/ProductImg/Puma Stride Sneakers.jpg', 'p1008'),
(9, 'Puma Anzarun Lite Slipon Sneakers', '3999', 1, 'Images/Productimg/Puma Anzarun Lite Slipon Sneakers.jpg', 'p1007');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
