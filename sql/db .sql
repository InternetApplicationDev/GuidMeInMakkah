-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 13, 2018 at 09:28 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cafe`
--

CREATE TABLE `cafe` (
  `cafe_id` int(10) UNSIGNED NOT NULL,
  `cafe_name` varchar(100) NOT NULL,
  `cafe_info` varchar(100) NOT NULL,
  `cafe_address` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `start_date` time NOT NULL,
  `close_date` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `profile_pic` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cafeandrest`
--

CREATE TABLE `cafeandrest` (
  `cafeAndRest_id` int(10) UNSIGNED NOT NULL,
  `cafeAndRest_name` varchar(100) NOT NULL,
  `cafeAndRest_info` varchar(100) NOT NULL,
  `cafeAndRest_address` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `start_date` time NOT NULL,
  `close_date` time NOT NULL,
  `rate` int(10) NOT NULL,
  `profile_pic` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cafeandrestpics`
--

CREATE TABLE `cafeandrestpics` (
  `cafeAndRest_id` int(10) UNSIGNED NOT NULL,
  `cafeAndRestPic_id` int(10) UNSIGNED NOT NULL,
  `cafeAndRestPic` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cafepics`
--

CREATE TABLE `cafepics` (
  `cafe_id` int(10) UNSIGNED NOT NULL,
  `cafePic_id` int(10) UNSIGNED NOT NULL,
  `cafePics` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `restaurantpics`
--

CREATE TABLE `restaurantpics` (
  `restaurant_id` int(10) UNSIGNED NOT NULL,
  `restaurantPic_id` int(10) UNSIGNED NOT NULL,
  `restaurantPic` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `restaurant_id` int(10) UNSIGNED NOT NULL,
  `restaurant_name` varchar(100) NOT NULL,
  `restaurants_info` varchar(100) NOT NULL,
  `restaurants_address` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `close_date` date NOT NULL,
  `rate` int(11) NOT NULL,
  `profile_pic` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`restaurant_id`, `restaurant_name`, `restaurants_info`, `restaurants_address`, `phone`, `start_date`, `close_date`, `rate`, `profile_pic`) VALUES
(1, 'Al-Baik', 'Al-BaikAl-BaikAl-BaikAl-Baik', 'Al-Baik adress', 54136, '2018-04-11', '2018-04-11', 5, 'albaik.png'),
(2, 'Burger King', 'burgerKingburgerKingburgerKing', 'burgerKing adress', 312352, '2018-04-02', '2018-04-10', 0, 'burgerKing.png'),
(3, 'Dominos Pizaa', 'dominosPizaadominosPizaadominosPizaa', 'dominosPizaa adress', 625362, '2018-04-10', '2018-04-25', 5, 'dominosPizaa.png'),
(4, 'Hardee\'s', 'hardee\'shardee\'shardee\'s', 'hardee\'s adress', 3513, '2018-04-05', '2018-04-11', 3, 'hardees.png'),
(6, 'Kudo', 'kudokudo', 'kudo adress', 3435, '2018-04-12', '2018-04-13', 2, 'kudo.png'),
(7, 'Subway', 'subwaysubwaysubway', 'subway adress', 8451356, '2018-04-06', '2018-04-19', 3, 'subway.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cafe`
--
ALTER TABLE `cafe`
  ADD PRIMARY KEY (`cafe_id`);

--
-- Indexes for table `cafeandrest`
--
ALTER TABLE `cafeandrest`
  ADD PRIMARY KEY (`cafeAndRest_id`);

--
-- Indexes for table `cafeandrestpics`
--
ALTER TABLE `cafeandrestpics`
  ADD PRIMARY KEY (`cafeAndRestPic_id`),
  ADD KEY `cafeAndRest_id` (`cafeAndRest_id`);

--
-- Indexes for table `cafepics`
--
ALTER TABLE `cafepics`
  ADD PRIMARY KEY (`cafePic_id`),
  ADD KEY `cafe_id` (`cafe_id`);

--
-- Indexes for table `restaurantpics`
--
ALTER TABLE `restaurantpics`
  ADD PRIMARY KEY (`restaurantPic_id`),
  ADD KEY `restaurant_id` (`restaurant_id`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`restaurant_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cafe`
--
ALTER TABLE `cafe`
  MODIFY `cafe_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cafeandrest`
--
ALTER TABLE `cafeandrest`
  MODIFY `cafeAndRest_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cafeandrestpics`
--
ALTER TABLE `cafeandrestpics`
  MODIFY `cafeAndRestPic_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cafepics`
--
ALTER TABLE `cafepics`
  MODIFY `cafePic_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `restaurantpics`
--
ALTER TABLE `restaurantpics`
  MODIFY `restaurantPic_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `restaurant_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cafeandrestpics`
--
ALTER TABLE `cafeandrestpics`
  ADD CONSTRAINT `cafeandrestpics_ibfk_1` FOREIGN KEY (`cafeAndRest_id`) REFERENCES `cafeandrest` (`cafeAndRest_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cafepics`
--
ALTER TABLE `cafepics`
  ADD CONSTRAINT `cafepics_ibfk_1` FOREIGN KEY (`cafe_id`) REFERENCES `cafe` (`cafe_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `restaurantpics`
--
ALTER TABLE `restaurantpics`
  ADD CONSTRAINT `restaurantpics_ibfk_1` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurants` (`restaurant_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
