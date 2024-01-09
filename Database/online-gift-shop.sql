-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2023 at 04:15 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online-gift-shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `Id` int(11) NOT NULL,
  `image` varchar(55) NOT NULL,
  `price` varchar(44) NOT NULL,
  `product` varchar(55) NOT NULL,
  `quantity` varchar(55) NOT NULL,
  `subtotal` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `Id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `subject` varchar(55) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feature_product`
--

CREATE TABLE `feature_product` (
  `Id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `price` varchar(55) NOT NULL,
  `Details` varchar(60) NOT NULL,
  `status` varchar(2) NOT NULL,
  `image` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feature_product`
--

INSERT INTO `feature_product` (`Id`, `name`, `price`, `Details`, `status`, `image`) VALUES
(1, 'Rose', 'Rs.1500', 'Gift the rose for your love own', '1', 'mon\\Rose.jpg'),
(2, 'Lilly', 'Rs.2000', 'This lilly is for you..', '1', 'mon\\red-lilly.jpg'),
(3, 'Doll', 'Rs.3000', 'Gift the doll for your love own to say take care!', '1', 'mon\\doll.jpg'),
(4, 'Flowers_combo', 'Rs.2500', 'Gift the flower to your close own...', '1', 'mon\\flower_combo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `new_arrival`
--

CREATE TABLE `new_arrival` (
  `Id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `price` varchar(44) NOT NULL,
  `Details` varchar(55) NOT NULL,
  `status` varchar(11) NOT NULL,
  `image` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `new_arrival`
--

INSERT INTO `new_arrival` (`Id`, `name`, `price`, `Details`, `status`, `image`) VALUES
(1, 'Basket', 'Rs.2500', 'Basket with full of flower..', '1', 'mon\\basket.jpg'),
(2, 'mother_day', 'Rs.3000', 'Make your mom feel special..', '0', 'mon\\mothers day.jpg'),
(3, 'Combo', 'Rs.2500', 'Gift the combo set to your love own..', '1', 'mon\\cocolate-flower-combo.jpg'),
(4, 'Sunflower', 'Rs.1500', 'Make your day happy ..', '0', 'mon\\cute_sunflower.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `price` varchar(55) NOT NULL,
  `Details` varchar(55) NOT NULL,
  `status` varchar(55) NOT NULL,
  `image` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Id`, `name`, `price`, `Details`, `status`, `image`) VALUES
(1, 'Rose', 'Rs.2500', 'Gift the rose for your love own', '0', 'mon\\Rose.jpg'),
(2, 'Doll', 'Rs.3000', 'Gift the doll for your love own to say take care!', '1', 'mon\\doll.jpg'),
(3, 'God shiva', 'Rs.2500', 'Gift the god to give positive energy..', '1', 'God\\shiva.jpg'),
(4, 'mother_day', 'Rs.2500', 'Make your mom feel special..', '1', 'mon\\mothers day.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `Id` int(11) NOT NULL,
  `firstname` varchar(55) NOT NULL,
  `lastname` varchar(55) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`Id`, `firstname`, `lastname`, `phone`, `address`, `email`, `password`) VALUES
(2, 'Reason', 'Sharma', '1234567890', 'add', 'admin@gmail.com', 'reason'),
(4, 'Melina', 'pandey', '1234567890', 'add', 'admin@gmail.com', 'reason'),
(7, 'Reason', 'Sharma', '12345', 'add', 'admin@gmail.com', 'reason'),
(8, 'Reason', 'Sharma', '12345', '', 'admin@gmail.com', 'reason'),
(9, 'Reason', 'Sharma', '123345', '', 'admin@gmail.com', 'reason');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `feature_product`
--
ALTER TABLE `feature_product`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `new_arrival`
--
ALTER TABLE `new_arrival`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `feature_product`
--
ALTER TABLE `feature_product`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `new_arrival`
--
ALTER TABLE `new_arrival`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
