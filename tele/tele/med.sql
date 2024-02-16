-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2023 at 04:21 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `med`
--

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

CREATE TABLE `medicines` (
  `shop` varchar(20) NOT NULL,
  `medicine` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL,
  `location` varchar(20) NOT NULL,
  `rating` varchar(20) NOT NULL,
  `stock` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medicines`
--

INSERT INTO `medicines` (`shop`, `medicine`, `price`, `location`, `rating`, `stock`) VALUES
('Rakib Pharmacy', 'Napa', '100', 'Jhenaidah', '5', 1000),
('Prosenjit&#039;s Pha', 'Cinkara', '400', 'Sirajganj', '4', 300),
('Samia&#039;s Pharmac', 'Omeprazole', '70', 'Gazipur', '5', 500);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `quantity` int(10) NOT NULL,
  `Trxid` varchar(20) NOT NULL,
  `phone` int(20) NOT NULL,
  `address` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`quantity`, `Trxid`, `phone`, `address`) VALUES
(5, '5fda', 55555255, 'dhaaja'),
(4, '545465', 54655, 'ajhdhf'),
(5, '4838764', 87789787, 'Gazipur'),
(4, '878954', 87789787, 'uyauy'),
(5, '465', 645, 'jg'),
(5, '5', 4, 'f'),
(5, '2525', 5, 'jyyt'),
(5, 'ihauihfh', 7898948, 'dhaka'),
(5, 'ah', 5, 'af'),
(5, 'af', 24, 'af'),
(4, 'ihauihfh', 7898948, 'Gazipur'),
(5, '545465', 5, 'Gazipur'),
(5, 'ihauihfh', 5, 'dhaka'),
(4, 'fa', 54, 'Gazipur'),
(5, 'ihauihfh', 54655, 'Gazipur'),
(10, '4838764', 7898948, 'Gazipur'),
(100, '545465', 54655, 'dhaka'),
(5, '878954', 7898948, 'Gazipur'),
(200, '4838764', 54, 'Gazipur'),
(10, 'WUGA72378BNDS', 1406849034, 'Duet Gate, Joydebpur, Gazipur'),
(10, 'WUGA72378BNDS', 1406849034, 'Duet Gate, Joydebpur, Gazipur');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy_owner`
--

CREATE TABLE `pharmacy_owner` (
  `shop_name` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `license` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pharmacy_owner`
--

INSERT INTO `pharmacy_owner` (`shop_name`, `name`, `email`, `address`, `username`, `password`, `license`) VALUES
('Mayer Doa Pharmay', 'Rakib Hossain', 'rakib@gmail.com', 'Gazipur', 'rakib', 'rakib', 'jaag555hiaf'),
('Rakib Pharmacy', 'Rakib Hossain', 'rakib@gmail.com', 'Dhaka', 'rakib', '1245', 'abj65626');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `shop` varchar(20) NOT NULL,
  `rating` double DEFAULT NULL,
  `description` varchar(100) NOT NULL,
  `medicine` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`shop`, `rating`, `description`, `medicine`) VALUES
('Sazib Pharmacy', 5, 'Very good sercices, Fast delivery and medicines were in very good condition.', 'Napa'),
('Mayer Doya Pharmacy', 3, 'Very fast delivery but the packaging of the medicines were not in very good condition.', 'Napa'),
('Sazib Pharmacy', 2, 'afa', 'af'),
('fa', 4, 'fa', 'af'),
('Samia', 1, 'Very Poor', 'Napa'),
('Sazib Pharmacy', 4, 'af', 'Napa'),
('Sazib Pharmacy', 4, 'fa', 'Napa'),
('Sazib Pharmacy', 4, 'Very Poor', 'Napa'),
('Phrmacy', 5, 'good service indeed', 'Omeprazole'),
('Sazib Pharmacy', 5, 'Very good sercices, Fast delivery and medicines were in very good condition.', 'Napa'),
('Samia Pharmacy', 5, 'Very good sercices, Fast delivery and medicines were in very good condition.', 'Alatrol'),
('Sazib Pharmacy', 4, 'Very good sercices, Fast delivery and medicines were in very good condition.', 'Napa'),
('S', 3.5, 'good service indeed', 'Ceevit'),
('S', 4.25, 'good service indeed', 'Ceevit'),
('Samia&#039;s Pharmac', 2.5, 'Very good sercices, Fast delivery and medicines were in very good condition.', 'Ome'),
('Samia&#039;s Pharmac', 2.5, 'Very good sercices, Fast delivery and medicines were in very good condition.', 'Omeprazole');

-- --------------------------------------------------------

--
-- Table structure for table `user_signup`
--

CREATE TABLE `user_signup` (
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_signup`
--

INSERT INTO `user_signup` (`name`, `email`, `phone`, `username`, `pass`) VALUES
('rakib', 'rakib@gmail.com', '578748787', 'admin', 'padd'),
('sazibur rahman', 'rssazib@gmail.com', '8578778', 'sazib61', '1234'),
('Samia Akhter', 'samia@gmail.com', '551211', 'admin', 'admin'),
('Prosenjit Kumar', 'depression_king@gmai', '55', 'admin', 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
