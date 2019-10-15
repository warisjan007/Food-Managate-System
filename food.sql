-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 01, 2019 at 03:43 PM
-- Server version: 5.7.27-0ubuntu0.19.04.1
-- PHP Version: 7.2.19-0ubuntu0.19.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_order`
--

-- --------------------------------------------------------

--
-- Table structure for table `exsisting_items`
--

CREATE TABLE `exsisting_items` (
  `ID` int(11) NOT NULL,
  `Name` text COLLATE utf8_unicode_ci NOT NULL,
  `Description` text COLLATE utf8_unicode_ci,
  `Photo` varchar(128) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'images/breakfast-5.jpg',
  `Price` double NOT NULL,
  `Category` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `exsisting_items`
--

INSERT INTO `exsisting_items` (`ID`, `Name`, `Description`, `Photo`, `Price`, `Category`) VALUES
(1, 'Breakfast-1', 'Meat, Potatoes, Rice, Tomatoe', 'images/breakfast-1.jpg', 29, 'breakfast'),
(2, 'Breakfast-2', 'Meat, Potatoes, Rice, Tomatoe', 'images/breakfast-2.jpg', 21, 'breakfast'),
(3, 'Breakfast-3', 'Meat, Potatoes, Rice, Tomatoe', 'images/breakfast-3.jpg', 26, 'breakfast'),
(4, 'Breakfast-4', 'Meat, Potatoes, Rice, Tomatoe', 'images/breakfast-4.jpg', 26, 'breakfast'),
(5, 'Breakfast-5', 'Meat, Potatoes, Rice, Tomatoe', 'images/breakfast-5.jpg', 20, 'breakfast'),
(6, 'Breakfast-6', 'Meat, Potatoes, Rice, Tomatoe', 'images/breakfast-6.jpg', 28, 'breakfast'),
(7, 'Breakfast-7', 'Meat, Potatoes, Rice, Tomatoe', 'images/breakfast-7.jpg', 25, 'breakfast'),
(8, 'Breakfast-8', 'Meat, Potatoes, Rice, Tomatoe', 'images/breakfast-8.jpg', 26, 'breakfast'),
(9, 'Lunch-1', 'Meat, Potatoes, Rice, Tomatoe', 'images/lunch-1.jpg', 21, 'lunch'),
(10, 'Lunch-2', 'Meat, Potatoes, Rice, Tomatoe', 'images/lunch-2.jpg', 28, 'lunch'),
(11, 'Lunch-3', 'Meat, Potatoes, Rice, Tomatoe', 'images/lunch-3.jpg', 20, 'lunch'),
(12, 'Lunch-4', 'Meat, Potatoes, Rice, Tomatoe', 'images/lunch-4.jpg', 23, 'lunch'),
(13, 'Lunch-5', 'Meat, Potatoes, Rice, Tomatoe', 'images/lunch-5.jpg', 26, 'lunch'),
(14, 'Lunch-6', 'Meat, Potatoes, Rice, Tomatoe', 'images/lunch-6.jpg', 28, 'lunch'),
(15, 'Lunch-7', 'Meat, Potatoes, Rice, Tomatoe', 'images/lunch-7.jpg', 20, 'lunch'),
(16, 'Lunch-8', 'Meat, Potatoes, Rice, Tomatoe', 'images/lunch-8.jpg', 22, 'lunch'),
(17, 'Drink-1', 'Meat, Potatoes, Rice, Tomatoe', 'images/drink-1.jpg', 21, 'drink'),
(18, 'Drink-2', 'Meat, Potatoes, Rice, Tomatoe', 'images/drink-2.jpg', 26, 'drink'),
(19, 'Drink-3', 'Meat, Potatoes, Rice, Tomatoe', 'images/drink-3.jpg', 29, 'drink'),
(20, 'Drink-4', 'Meat, Potatoes, Rice, Tomatoe', 'images/drink-4.jpg', 24, 'drink'),
(21, 'Drink-5', 'Meat, Potatoes, Rice, Tomatoe', 'images/drink-5.jpg', 22, 'drink'),
(22, 'Drink-6', 'Meat, Potatoes, Rice, Tomatoe', 'images/drink-6.jpg', 27, 'drink'),
(23, 'Dinner-1', 'Meat, Potatoes, Rice, Tomatoe', 'images/dinner-1.jpg', 24, 'dinner'),
(24, 'Dinner-2', 'Meat, Potatoes, Rice, Tomatoe', 'images/dinner-2.jpg', 21, 'dinner'),
(25, 'Dinner-3', 'Meat, Potatoes, Rice, Tomatoe', 'images/dinner-3.jpg', 22, 'dinner'),
(26, 'Dinner-4', 'Meat, Potatoes, Rice, Tomatoe', 'images/dinner-4.jpg', 27, 'dinner'),
(27, 'Dinner-5', 'Meat, Potatoes, Rice, Tomatoe', 'images/dinner-5.jpg', 29, 'dinner'),
(28, 'Dinner-6', 'Meat, Potatoes, Rice, Tomatoe', 'images/dinner-6.jpg', 25, 'dinner'),
(29, 'Dessert-1', 'Meat, Potatoes, Rice, Tomatoe', 'images/dessert-1.jpg', 20, 'dessert'),
(30, 'Dessert-2', 'Meat, Potatoes, Rice, Tomatoe', 'images/dessert-2.jpg', 24, 'dessert'),
(31, 'Dessert-3', 'Meat, Potatoes, Rice, Tomatoe', 'images/dessert-3.jpg', 27, 'dessert'),
(32, 'Dessert-4', 'Meat, Potatoes, Rice, Tomatoe', 'images/dessert-4.jpg', 26, 'dessert'),
(33, 'Dessert-5', 'Meat, Potatoes, Rice, Tomatoe', 'images/dessert-5.jpg', 25, 'dessert');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Price` float NOT NULL,
  `Count` int(11) NOT NULL,
  `Total` float NOT NULL,
  `DateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `TableNo` int(11) NOT NULL DEFAULT '1',
  `Status` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Waiting'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ID`, `Name`, `Price`, `Count`, `Total`, `DateTime`, `TableNo`, `Status`) VALUES
(38, 'Breakfast-4', 26, 3, 78, '2019-10-01 17:34:08', 1, 'Waiting'),
(39, 'Breakfast-5', 20, 2, 40, '2019-10-01 17:34:08', 1, 'Waiting'),
(40, 'Breakfast-6', 28, 1, 28, '2019-10-01 17:34:08', 1, 'Waiting'),
(41, 'Breakfast-1', 29, 2, 58, '2019-10-01 17:44:35', 1, 'Waiting'),
(42, 'Breakfast-2', 21, 1, 21, '2019-10-01 17:44:35', 1, 'Waiting'),
(43, 'Dinner-2', 21, 1, 21, '2019-10-01 15:04:53', 1, 'Waiting'),
(44, 'Dinner-1', 24, 1, 24, '2019-10-01 15:04:53', 1, 'Waiting'),
(45, 'Dinner-4', 27, 1, 27, '2019-10-01 15:04:53', 1, 'Waiting'),
(46, 'Breakfast-2', 21, 1, 21, '2019-10-01 15:29:00', 1, 'Waiting'),
(47, 'Breakfast-6', 28, 5, 140, '2019-10-01 15:38:48', 1, 'Waiting'),
(48, 'Breakfast-4', 26, 3, 78, '2019-10-01 15:38:48', 1, 'Waiting'),
(49, 'Breakfast-2', 21, 3, 63, '2019-10-01 15:38:49', 1, 'Waiting'),
(50, 'Drink-5', 22, 1, 22, '2019-10-01 15:38:49', 1, 'Waiting'),
(51, 'Drink-6', 27, 1, 27, '2019-10-01 15:38:49', 1, 'Waiting'),
(52, 'Breakfast-2', 21, 1, 21, '2019-10-01 15:41:21', 1, 'Waiting'),
(53, 'Breakfast-1', 29, 1, 29, '2019-10-01 15:41:21', 1, 'Waiting');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exsisting_items`
--
ALTER TABLE `exsisting_items`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exsisting_items`
--
ALTER TABLE `exsisting_items`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
