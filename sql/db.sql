-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 21, 2018 at 11:03 PM
-- Server version: 5.7.15-log
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
  `profile_pic` varchar(100) NOT NULL,
  `menu` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cafe`
--

INSERT INTO `cafe` (`cafe_id`, `cafe_name`, `cafe_info`, `cafe_address`, `phone`, `start_date`, `close_date`, `rate`, `profile_pic`, `menu`) VALUES
(1, 'Caffe Bene', 'Raw coffee beans grown in respectively different places such as Ethiopia, Columbia, Brazil ..ect', 'images/address/Caffe_Bene.png', 0, '2018-04-14', '0000-00-00', 3, 'images/coffeePic/caffeBene.png', 'images\\menus\\Cafe bene.jpg'),
(2, 'Costa Coffee', 'Hand-making a cup of coffee is an art that takes time and skill to perfect.', 'images/address/Costa_Coffee.png', 653, '2018-04-18', '0000-00-00', 3, 'images/coffeePic/costa_coffee.png', 'images\\menus\\Costa Coffee.jpg'),
(3, 'Dunkin Donuts', 'full of great-tasting items that will get you going and keep you running throughout your busy day.', 'images/address/Dunkin_Donuts.png', 54356, '2018-04-04', '2018-04-03', 4, 'images/coffeePic/dunkin_donuts.png', 'images\\menus\\donat.jpg'),
(4, 'Mado', 'Mado Ice-cream, which has earned well-deserved fame all over the world with its unique flavor', 'images/address/Mado.png', 65346834, '2018-04-17', '2018-04-04', 3, 'images/coffeePic/mado.png', 'images\\menus\\Mado.jpg'),
(5, 'pappa roti', 'golden brown buns are crispy on the outside while light and fluffy in the inside.', 'images/address/pappa_roti.png', 65363684, '2018-04-11', '2018-04-17', 3, 'images/coffeePic/pappa_roti.png', 'images\\menus\\pappa roti.jpg'),
(6, 'Starbucks', 'ur coffee masters have distilled their years of tasting knowledge down to three simple questions', 'images/address/Starbucks.png', 35136, '2018-04-10', '2018-04-16', 4, 'images/coffeePic/starbucks.png', 'images\\menus\\Starbucks.jpg'),
(7, 'coffeeStation', 'started in 1983 as a small doughnut and coffee stand next to a train station.', 'images/address/Starbucks.png', 573892759, '2018-04-14', '2018-04-30', 3, 'images/coffeePic/coffeeStation.png', 'images\\menus\\Costa Coffee.jpg'),
(8, 'tarwiga', 'A cafe located in makkah for women only', 'images/address/Starbucks.png', 378902547, '2018-04-30', '2018-05-18', 4, 'images/coffeePic/tarwiga.png', 'images\\menus\\Starbucks.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cafeandrest`
--

CREATE TABLE `cafeandrest` (
  `cafeAndRest_id` int(10) UNSIGNED NOT NULL,
  `cafeAndRest_name` varchar(100) NOT NULL,
  `cafeAndRest_info` varchar(225) NOT NULL,
  `cafeAndRest_address` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `close_date` date NOT NULL,
  `rate` int(10) NOT NULL,
  `profile_pic` varchar(100) NOT NULL,
  `menu` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cafeandrest`
--

INSERT INTO `cafeandrest` (`cafeAndRest_id`, `cafeAndRest_name`, `cafeAndRest_info`, `cafeAndRest_address`, `phone`, `start_date`, `close_date`, `rate`, `profile_pic`, `menu`) VALUES
(1, 'Raffles Creamery', 'This artistic, informal and fun-filled café provides a perfect hangout for your family and children on the terrace featuring a stunning view of the Grand Mosque and the Holy Kaaba.', 'images/address/Dominos_Pizaa.png', 0, '0000-00-00', '0000-00-00', 0, 'images/coffeeAndReturantPic/Raffles_Creamery.png', 'images\\menus\\Raffles Creamery.jpg'),
(2, 'Zamzam cafe', 'ZamZam Makkah greets the people who enjoy the magnificent view of the holy Kaaba and Masjid Haram mosque.', 'images/address/Dominos_Pizaa.png', 0, '0000-00-00', '0000-00-00', 0, 'images/coffeeAndReturantPic/Zamzam_cafe.png', 'images\\menus\\Zamzam cafe.jpg'),
(3, 'Feld D\'saji', 'D’Saji Restaurant & Café was formed as a unit in 1984 when the focus was directed on cafeteria services,', 'images/address/Dominos_Pizaa.png', 45189043, '2018-04-07', '2018-04-28', 3, 'images/coffeeAndReturantPic/_Feld D saji_ l.png', 'images\\menus\\Cafe bene.jpg'),
(4, 'aldeerah', 'Aldeerah”, which translates as “The Homeland”, was carefully chosen to reflect one of our main goals: to be a home away from home for all those craving dishes from Saudi Arabia.', 'images/address/Dominos_Pizaa.png', 537890436, '2018-04-05', '2018-04-24', 4, 'images/coffeeAndReturantPic/aldeerah.png', 'images\\menus\\Cafe bene.jpg'),
(5, 'hayat', 'Situated at the heart of the holy city of Makkah, Jabal Omar Hyatt Regency Makkah offers visitors a unique hospitality experience, blending comfort and convenience in an elegant atmosphere.', 'images/address/Dominos_Pizaa.png', 456789034, '2018-04-08', '2018-04-22', 3, 'images/coffeeAndReturantPic/hayat.png', 'images\\menus\\artoCoffee.jpg'),
(6, 'InterContinental Dar Al Tawhid', 'Offering exceptional cuisin complemented by Islamic atmosphere and design', 'images/address/Dominos_Pizaa.png', 547109341, '2018-04-10', '2018-04-23', 4, 'images/coffeeAndReturantPic/InterContinental Dar Al Tawhid.png', 'images\\menus\\Cafe bene.jpg'),
(7, 'rout 66', 'Enjoying the adventure inside the route 66 restaurant will never be less than the route 66 story it self. ', 'images/address/Dominos_Pizaa.png', 432875015, '2018-04-05', '2018-04-24', 4, 'images/coffeeAndReturantPic/rout.png', 'images\\menus\\rout66.jpg'),
(8, 'tea launge', 'This exclusive but informal lounge accommodates up to 30 guests, and serves a variety of light snacks, sandwiches, freshly-made ice cream and freshly-baked patisserie from the counter, along with a wide variety of gourmet tea', 'images/address/Dominos_Pizaa.png', 432576890, '2018-04-06', '2018-04-26', 3, 'images/coffeeAndReturantPic/tea launge.png', 'images\\menus\\Cafe bene.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cafeandrestpics`
--

CREATE TABLE `cafeandrestpics` (
  `cafeAndRest_id` int(10) UNSIGNED NOT NULL,
  `cafeAndRestPic_id` int(10) UNSIGNED NOT NULL,
  `cafeAndRestPic` varchar(150) NOT NULL,
  `cofeAndResName` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cafeandrestpics`
--

INSERT INTO `cafeandrestpics` (`cafeAndRest_id`, `cafeAndRestPic_id`, `cafeAndRestPic`, `cofeAndResName`) VALUES
(1, 1, 'images/coffeeAndReturantPic/Raffles_Creamery.png', 'Raffles Creamery'),
(1, 2, 'images\\pictures\\Raffles Creamery.jpg', 'Raffles Creamery'),
(2, 3, 'images/coffeeAndReturantPic/Zamzam_cafe.png', 'Zamzam cafe'),
(2, 4, 'images\\pictures\\Zamzam cafe.jpg', 'Zamzam cafe'),
(3, 5, 'images/coffeeAndReturantPic/_Feld D saji_ l.png', 'Feld D\'saji'),
(3, 6, 'images\\pictures\\‪Feld D saji‬ l.jpg', 'Feld D\'saji'),
(4, 7, 'images/coffeeAndReturantPic/aldeerah.png', 'aldeerah'),
(4, 8, 'images\\pictures\\aldeerah.jpg', 'aldeerah'),
(5, 9, 'images/coffeeAndReturantPic/hayat.png', 'hayat'),
(5, 10, 'images\\pictures\\hayat.jpg', 'hayat'),
(6, 11, 'images/coffeeAndReturantPic/InterContinental Dar Al Tawhid.png', 'InterContinental Dar Al Tawhid'),
(6, 12, 'images\\pictures\\InterContinental Dar Al Tawhid.jpg', 'InterContinental Dar Al Tawhid'),
(7, 13, 'images/coffeeAndReturantPic/rout.png', 'rout 66'),
(7, 14, 'images/coffeeAndReturantPic/rout.png', 'rout 66'),
(8, 15, 'images/coffeeAndReturantPic/tea launge.png', 'tea launge'),
(8, 16, 'images\\pictures\\tea launge.jpg', 'tea launge'),
(1, 17, 'images\\pictures\\Raffles Creamery2.jpg', 'Raffles Creamery'),
(1, 18, 'images\\pictures\\Raffles Creamery3.jpg', 'Raffles Creamery'),
(2, 19, 'images\\pictures\\Zamzam cafe2.jpg', 'Zamzam cafe'),
(2, 20, 'images\\pictures\\Zamzam cafe3.jpg', 'Zamzam cafe');

-- --------------------------------------------------------

--
-- Table structure for table `cafepics`
--

CREATE TABLE `cafepics` (
  `cafe_id` int(10) UNSIGNED NOT NULL,
  `cafePic_id` int(10) UNSIGNED NOT NULL,
  `cafePics` varchar(150) NOT NULL,
  `cofeName` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cafepics`
--

INSERT INTO `cafepics` (`cafe_id`, `cafePic_id`, `cafePics`, `cofeName`) VALUES
(1, 1, 'images/coffeePic/caffeBene.png', 'Caffe Bene'),
(1, 2, 'images\\pictures\\Cafe bene1.jpg', 'Caffe Bene'),
(1, 3, 'images\\pictures\\Cafe bene2.jpg', 'Caffe Bene'),
(2, 4, 'images/coffeePic/costa_coffee.png', 'Costa Coffee'),
(2, 5, 'images\\pictures\\Costa Coffee.jpg', 'Costa Coffee'),
(3, 6, 'images/coffeePic/dunkin_donuts.png', 'Dunkin Donuts'),
(3, 7, 'images\\pictures\\inside-dunkin-donuts.jpg', 'Dunkin Donuts'),
(2, 8, 'images\\pictures\\Costa Coffee2.jpg', 'Costa Coffee'),
(2, 9, 'images\\pictures\\costa-coffee.jpg', 'Costa Coffee'),
(1, 10, 'images\\pictures\\Cafe bene3.png', 'Caffe Bene'),
(4, 11, 'images/coffeePic/mado.png', 'Mado'),
(4, 12, 'images\\pictures\\mado.jpg', 'Mado'),
(5, 13, 'images/coffeePic/pappa_roti.png', 'pappa roti'),
(5, 14, 'images\\pictures\\pappa roti.jpg', 'pappa roti'),
(6, 15, 'images/coffeePic/starbucks.png', 'Starbucks'),
(6, 16, 'images\\pictures\\Starbucks.jpg', 'Starbucks'),
(7, 17, 'images/coffeePic/coffeeStation.png', 'coffeeStation'),
(7, 18, 'images/coffeePic/coffeeStation.png', 'coffeeStation'),
(8, 19, 'images/coffeePic/tarwiga.png', 'tarwiga'),
(8, 20, 'images\\pictures\\tarwiga.jpg', 'tarwiga');

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
(3, 3, 'images/resturantPics/dominosPizaa.png', 'Dominos Pizaa'),
(4, 7, 'images/resturantPics/hardees.png', 'Hardee\'s'),
(1, 9, 'images\\pictures\\Al-Baik.jpg', 'Al-Baik'),
(1, 10, 'images\\pictures\\Al-Baik2.jpg', 'Al-Baik'),
(1, 11, 'images\\pictures\\Al-Baik3.jpg', 'Al-Baik'),
(2, 12, 'images\\pictures\\Burger King.jpg', 'Burger King'),
(2, 13, 'images\\pictures\\Burger King2.jpg', 'Burger King'),
(2, 14, 'images\\pictures\\Burger King3.jpg', 'Burger King'),
(3, 15, 'images\\pictures\\Dominos Pizaa.jpg', 'Dominos Pizaa'),
(4, 16, 'images\\pictures\\Hardees.jpg', 'Hardee\'s'),
(5, 17, 'images/resturantPics/kudo.png', 'Kudo'),
(5, 18, 'images\\pictures\\Kudo.jpg', 'Kudo'),
(6, 19, 'images/resturantPics/subway.png', 'Subway'),
(6, 20, 'images\\pictures\\Subway.jpg', 'Subway'),
(7, 23, 'images/resturantPics/senees.png', 'senees'),
(7, 24, 'images\\pictures\\senees.jpg', 'senees'),
(8, 25, 'images/resturantPics/FiveGuies.png', 'FiveGuys'),
(8, 26, 'images\\pictures\\FiveGuies.jpg', 'FiveGuys');

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
(1, 'Al-Baik', 'Al-Baik is a major fast food restaurant chain in Saudi Arabia that primarily sells broasted chicken ', 'images/address/albaik.png', 54136, '2018-04-11', '2018-04-11', 3, 'images/resturantPics/albaik.png', 'images\\menus\\Al-Baik.jpg'),
(2, 'Burger King', 'Burger King is an American global chain of hamburger fast food restaurants.', 'images/address/Burger_King.png', 312352, '2018-04-02', '2018-04-10', 1, 'images/resturantPics/burgerKing.png', 'images\\menus\\Burger King.jpg'),
(3, 'Dominos Pizaa', 'Domino\'s Pizza is an American pizza restaurant chain founded in 1960.', 'images/address/Dominos_Pizaa.png', 625362, '2018-04-10', '2018-04-25', 5, 'images/resturantPics/dominosPizaa.png', 'images\\menus\\Dominos Pizaa.jpg'),
(4, 'Hardee\'s', 'Hardee\'s  is an American-based fast-food restaurant chain operated by CKE Restaurants Holdings, Inc.', 'images/address/Hardees.png', 3513, '2018-04-05', '2018-04-11', 3, 'images/resturantPics/hardees.png', 'images\\menus\\Hardees.jpg'),
(5, 'Kudo', 'Kudo is a large fast food chain in Saudi Arabia, established in 1988', 'images/address/Kudo.png', 3435, '2018-04-12', '2018-04-13', 2, 'images/resturantPics/kudo.png', 'images\\menus\\Kudo.jpg'),
(6, 'Subway', 'Subway is an American fast food restaurant franchise that primarily purveys submarine sandwiches', 'images/address/Kudo.png', 8451356, '2018-04-06', '2018-04-19', 3, 'images/resturantPics/subway.png', 'images\\menus\\Subway.jpg'),
(7, 'senees', 'Senses restaurant is the Polish culinary window to the world', 'images/address/Kudo.png', 654126784, '2018-04-11', '2018-04-18', 4, 'images/resturantPics/senees.png', 'images\\menus\\senees.png'),
(8, 'FiveGuys', 'Five Guys is an American fast casual restaurant chain focused on hamburgers, hot dogs, and French', 'images/address/Kudo.png', 640126543, '2018-04-01', '2018-04-23', 4, 'images/resturantPics/FiveGuies.png', 'images\\menus\\FiveGuies.jpg');

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
(3, 'israaSamkari@hotmail.com', '12345678', 'israa', 'samkari', 'Users/Photos/pesonal.jpg', '', '', ''),
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
(58, 3, 'Caffe Bene  ', 'images/coffeePic/caffeBene.png'),
(1, 10, 'Dominos Pizaa ', 'images/resturantPics/dominosPizaa.png'),
(1, 11, 'Burger King ', 'images/resturantPics/burgerKing.png'),
(1, 12, 'tarwiga ', 'images/coffeePic/tarwiga.png'),
(3, 13, 'Raffles Creamery ', 'images/coffeeAndReturantPic/Raffles_Creamery.png');

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
  MODIFY `cafeAndRestPic_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `cafepics`
--
ALTER TABLE `cafepics`
  MODIFY `cafePic_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedbackNo` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `restaurantpics`
--
ALTER TABLE `restaurantpics`
  MODIFY `restaurantPic_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
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
  MODIFY `fav_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
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
