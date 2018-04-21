-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 21, 2018 at 01:02 PM
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
  `start_date` date NOT NULL,
  `close_date` date NOT NULL,
  `rate` int(11) NOT NULL,
  `profile_pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cafe`
--

INSERT INTO `cafe` (`cafe_id`, `cafe_name`, `cafe_info`, `cafe_address`, `phone`, `start_date`, `close_date`, `rate`, `profile_pic`) VALUES
(1, 'Caffe Bene', 'caffeBenecaffeBenecaffeBene', 'images/address/Caffe_Bene.png', 0, '2018-04-14', '0000-00-00', 3, 'images/coffeePic/caffeBene.png'),
(2, 'Costa Coffee', 'costa coffee', 'images/address/Costa_Coffee.png', 653, '2018-04-18', '0000-00-00', 3, 'images/coffeePic/costa_coffee.png'),
(3, 'Dunkin Donuts', 'dunkin donutsdunkin donutsdunkin donuts', 'images/address/Dunkin_Donuts.png', 54356, '2018-04-04', '2018-04-03', 4, 'images/coffeePic/dunkin_donuts.png'),
(4, 'Mado', 'mado', 'images/address/Mado.png', 65346834, '2018-04-17', '2018-04-04', 3, 'images/coffeePic/mado.png'),
(5, 'pappa roti', 'pappa rotipappa roti', 'images/address/pappa_roti.png', 65363684, '2018-04-11', '2018-04-17', 3, 'images/coffeePic/pappa_roti.png'),
(6, 'Starbucks', 'starbucksstarbucks', 'images/address/Starbucks.png', 35136, '2018-04-10', '2018-04-16', 4, 'images/coffeePic/starbucks.png'),
(7, 'coffeeStation', 'for women only', '', 573892759, '2018-04-14', '2018-04-30', 3, 'images/coffeePic/coffeeStation.png'),
(8, 'tarwiga', 'for women only', '', 378902547, '2018-04-30', '2018-05-18', 4, 'images/coffeePic/tarwiga.png');

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
  `start_date` date NOT NULL,
  `close_date` date NOT NULL,
  `rate` int(10) NOT NULL,
  `profile_pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cafeandrest`
--

INSERT INTO `cafeandrest` (`cafeAndRest_id`, `cafeAndRest_name`, `cafeAndRest_info`, `cafeAndRest_address`, `phone`, `start_date`, `close_date`, `rate`, `profile_pic`) VALUES
(1, 'Raffles Creamery', 'Raffles Creamery ', '', 0, '0000-00-00', '0000-00-00', 0, 'images/coffeeAndReturantPic/Raffles_Creamery.png'),
(2, 'Zamzam cafe', '', '', 0, '0000-00-00', '0000-00-00', 0, 'images/coffeeAndReturantPic/Zamzam_cafe.png'),
(3, 'Feld D\'saji', '', '', 45189043, '2018-04-07', '2018-04-28', 3, 'images/coffeeAndReturantPic/_Feld D saji_ l.png'),
(4, 'aldeerah', '', '', 537890436, '2018-04-05', '2018-04-24', 4, 'images/coffeeAndReturantPic/aldeerah.png'),
(5, 'hayat', '', '', 456789034, '2018-04-08', '2018-04-22', 3, 'images/coffeeAndReturantPic/hayat.png'),
(6, 'InterContinental Dar Al Tawhid', '', '', 547109341, '2018-04-10', '2018-04-23', 4, 'images/coffeeAndReturantPic/InterContinental Dar Al Tawhid.png'),
(7, 'rout66', '', '', 432875015, '2018-04-05', '2018-04-24', 4, 'images/coffeeAndReturantPic/rout.png'),
(8, 'tea launge', '', '', 432576890, '2018-04-06', '2018-04-26', 3, 'images/coffeeAndReturantPic/tea launge.png');

-- --------------------------------------------------------

--
-- Table structure for table `cafeandrestpics`
--

CREATE TABLE `cafeandrestpics` (
  `cafeAndRest_id` int(10) UNSIGNED NOT NULL,
  `cafeAndRestPic_id` int(10) UNSIGNED NOT NULL,
  `cafeAndRestPic` longblob NOT NULL,
  `cofeAndResName` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cafepics`
--

CREATE TABLE `cafepics` (
  `cafe_id` int(10) UNSIGNED NOT NULL,
  `cafePic_id` int(10) UNSIGNED NOT NULL,
  `cafePics` longblob NOT NULL,
  `cofeName` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedbackNo` int(5) UNSIGNED NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `type` varchar(40) NOT NULL,
  `description` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reservation_type` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `date` date NOT NULL,
  `state` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `number` int(10) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `place_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `restaurantpics`
--

CREATE TABLE `restaurantpics` (
  `restaurant_id` int(10) UNSIGNED NOT NULL,
  `restaurantPic_id` int(10) UNSIGNED NOT NULL,
  `restaurantPic` varchar(100) NOT NULL,
  `restauran_name` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `restaurantpics`
--

INSERT INTO `restaurantpics` (`restaurant_id`, `restaurantPic_id`, `restaurantPic`, `restauran_name`) VALUES
(1, 3, 'images/resturantPics/dominosPizaa.png', 'Dominos Pizaa'),
(1, 7, 'images/resturantPics/hardees.png', 'Hardee\'s');

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
  `profile_pic` varchar(100) NOT NULL,
  `menu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`restaurant_id`, `restaurant_name`, `restaurants_info`, `restaurants_address`, `phone`, `start_date`, `close_date`, `rate`, `profile_pic`, `menu`) VALUES
(1, 'Al-Baik', 'Al-BaikAl-BaikAl-BaikAl-Baik', 'images/address/albaik.png', 54136, '2018-04-11', '2018-04-11', 3, 'images/resturantPics/albaik.png', 'images/resturantPics/Menu_2.jpg'),
(2, 'Burger King', 'burgerKingburgerKingburgerKing', 'images/address/Burger_King.png', 312352, '2018-04-02', '2018-04-10', 0, 'images/resturantPics/burgerKing.png', ''),
(3, 'Dominos Pizaa', 'dominosPizaadominosPizaadominosPizaa', 'images/address/Dominos_Pizaa.png', 625362, '2018-04-10', '2018-04-25', 5, 'images/resturantPics/dominosPizaa.png', ''),
(4, 'Hardee\'s', 'hardee\'shardee\'shardee\'s', 'images/address/Hardees.png', 3513, '2018-04-05', '2018-04-11', 3, 'images/resturantPics/hardees.png', ''),
(5, 'Kudo', 'kudokudo', 'images/address/Kudo.png', 3435, '2018-04-12', '2018-04-13', 2, 'images/resturantPics/kudo.png', ''),
(6, 'Subway', 'subwaysubwaysubway', 'images/address/Subway.psd', 8451356, '2018-04-06', '2018-04-19', 3, 'images/resturantPics/subway.png', ''),
(7, 'senees', '', '', 654126784, '2018-04-11', '2018-04-18', 4, 'images/resturantPics/senees.png', ''),
(8, 'FiveGuies', '', '', 640126543, '2018-04-01', '2018-04-23', 4, 'images/resturantPics/FiveGuies.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(5) NOT NULL,
  `user_email` varchar(225) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_first_name` varchar(225) NOT NULL DEFAULT 'NAME',
  `user_last_name` varchar(225) NOT NULL,
  `user_picture` varchar(225) NOT NULL DEFAULT 'Users/Photos/pesonal.jpg',
  `user_bio` varchar(225) NOT NULL,
  `user_twitter` varchar(225) NOT NULL,
  `user_facebook` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_email`, `user_password`, `user_first_name`, `user_last_name`, `user_picture`, `user_bio`, `user_twitter`, `user_facebook`) VALUES
(1, 'admin', 'admin', 'admin', '', 'Users/Photos/admin.png', '', '', ''),
(2, 'Joanna.a.s.1996@Gmail.com', '12345678', 'Joanna', 'Assaeedi', 'Users/Photos/pesonal.jpg', '', 'Joanna_A_S', 'Joanna.A.S.107'),
(3, 'israaSamkari@hotmail.com', '12345678', 'israa', 'samkari', 'Users/Photos/1420867127172.jpg', '', '', ''),
(58, 'test@gmail.com', '12345678', 'test', 'test', 'Users/Photos/pesonal.jpg', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `userfav`
--

CREATE TABLE `userfav` (
  `user_id` int(5) NOT NULL,
  `fav_id` int(10) NOT NULL,
  `fav_name` varchar(300) NOT NULL,
  `fav_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userfav`
--

INSERT INTO `userfav` (`user_id`, `fav_id`, `fav_name`, `fav_img`) VALUES
(1, 1, 'Kudo  ', 'images/resturantPics/kudo.png'),
(58, 3, 'Caffe Bene  ', 'images/coffeePic/caffeBene.png');

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
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedbackNo`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD KEY `place_id` (`place_id`),
  ADD KEY `user_id` (`user_id`);

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
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- Indexes for table `userfav`
--
ALTER TABLE `userfav`
  ADD PRIMARY KEY (`fav_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cafe`
--
ALTER TABLE `cafe`
  MODIFY `cafe_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `cafeandrest`
--
ALTER TABLE `cafeandrest`
  MODIFY `cafeAndRest_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
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
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedbackNo` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `restaurantpics`
--
ALTER TABLE `restaurantpics`
  MODIFY `restaurantPic_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `restaurant_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `userfav`
--
ALTER TABLE `userfav`
  MODIFY `fav_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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
