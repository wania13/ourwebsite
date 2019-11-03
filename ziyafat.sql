-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2019 at 10:53 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ziyafat`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(30) NOT NULL,
  `admin_password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_password`) VALUES
(1, 'wania', 'wania'),
(2, 'sadia', 'sadia');

-- --------------------------------------------------------

--
-- Table structure for table `b.b.q_items`
--

CREATE TABLE `b.b.q_items` (
  `submenu_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `b.b.q_items`
--

INSERT INTO `b.b.q_items` (`submenu_id`, `item_id`, `item_name`) VALUES
(4, 1, 'Chicken Boti'),
(4, 2, 'Chicken Bihari Boti'),
(4, 3, 'Chicken Shashlik'),
(4, 4, 'Chicken Boti Green Masala'),
(4, 5, 'Chicken Boti White Masala'),
(4, 6, 'Chicken Malayi Boti (Boneless) '),
(4, 7, 'Chicken Reshmi Kabab'),
(4, 8, 'Mutton Chops'),
(4, 9, 'Seekh Kabab'),
(4, 10, 'Bihari Kabab'),
(4, 11, 'Tikka Boti\r\n'),
(4, 12, 'Beef Shashlik'),
(4, 13, 'Fish Tikka'),
(4, 14, 'Chicken Chops');

-- --------------------------------------------------------

--
-- Table structure for table `chinese_cuisine`
--

CREATE TABLE `chinese_cuisine` (
  `submenu_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chinese_cuisine`
--

INSERT INTO `chinese_cuisine` (`submenu_id`, `item_id`, `item_name`) VALUES
(5, 1, 'Vegetable/Egg/Chicken Fried Rice'),
(5, 2, 'Chicken Chilli Vegetable'),
(5, 3, 'Beef Chilli Vegetable'),
(5, 4, 'Singaporean Rice'),
(5, 5, 'Garlic Fried Rice'),
(5, 6, 'Chicken Shashlik'),
(5, 7, 'Chicken Jelfrezi'),
(5, 8, 'Chicken Manchurian'),
(5, 9, 'Beef Goulash'),
(5, 10, 'Beef Chilli Dry/Gravy'),
(5, 11, 'Chicken Wonton'),
(5, 12, 'Pasta (live)'),
(5, 13, 'Fish with Chilies and Vegetable ');

-- --------------------------------------------------------

--
-- Table structure for table `continental`
--

CREATE TABLE `continental` (
  `submenu_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `continental`
--

INSERT INTO `continental` (`submenu_id`, `item_id`, `item_name`) VALUES
(1, 1, 'Biryani (Mutton, Beef, Chicken)'),
(1, 2, 'Qourma (Mutton, Beef, Chicken)'),
(1, 3, 'Badami Qorma (Mutton, Beef, Chicken)'),
(1, 4, 'Karahi (Mutton, Beef, Chicken)'),
(1, 5, 'Mutton Kunna'),
(1, 6, 'Beef Nihari'),
(1, 7, 'Beef/Chicken Haleem'),
(1, 8, 'Shab Degh'),
(1, 9, 'Chicken Handi (Boneless)'),
(1, 10, 'Stew'),
(1, 11, 'Chicken Ginger'),
(1, 12, 'Nargisi Kofta'),
(1, 13, 'Palak Gosht'),
(1, 14, 'Dum Qeema'),
(1, 15, 'Green Chilli Qeema'),
(1, 16, 'Kofta Curry');

-- --------------------------------------------------------

--
-- Table structure for table `desserts`
--

CREATE TABLE `desserts` (
  `submenu_id` int(11) NOT NULL,
  `desser_id` int(11) NOT NULL,
  `dessert_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `desserts`
--

INSERT INTO `desserts` (`submenu_id`, `desser_id`, `dessert_name`) VALUES
(10, 1, 'Traditional_desserts'),
(10, 2, 'special_desserts');

-- --------------------------------------------------------

--
-- Table structure for table `fried_items`
--

CREATE TABLE `fried_items` (
  `submenu_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fried_items`
--

INSERT INTO `fried_items` (`submenu_id`, `item_id`, `item_name`) VALUES
(2, 1, 'Chicken Bohra Fried'),
(2, 2, 'Chicken Dhabu'),
(2, 3, 'Chicken Ala Kiev'),
(2, 4, 'Chicken Drum Sticks'),
(2, 5, 'Mutton Chops Fried'),
(2, 6, 'Chandan Kabab'),
(2, 7, 'Finger Fish Fried'),
(2, 8, 'Fish Tampoora'),
(2, 9, 'Pompfret Fish'),
(2, 10, 'Fish Biscuits Bangash'),
(2, 11, 'Prawns Fried');

-- --------------------------------------------------------

--
-- Table structure for table `ice-cream`
--

CREATE TABLE `ice-cream` (
  `submenu_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ice-cream`
--

INSERT INTO `ice-cream` (`submenu_id`, `item_id`, `item_name`) VALUES
(12, 1, 'Caramel Crunch'),
(12, 2, 'Chocolate Chips'),
(12, 3, 'Pineapple'),
(12, 4, 'Vanilla'),
(12, 5, 'Strawberry'),
(12, 6, 'Seasonal Fruit'),
(12, 7, 'Badami Zafrani'),
(12, 8, 'Sicilian'),
(12, 9, 'Qulfi Mango'),
(12, 10, 'Qulfi Crunch'),
(12, 11, 'Tuti Fruity');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `submenu_id` int(11) NOT NULL,
  `submenu_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`submenu_id`, `submenu_name`) VALUES
(1, 'continental'),
(2, 'fried_items'),
(3, 'steamed'),
(4, 'b.b.q_items'),
(5, 'chinese_cuisine'),
(6, 'soups'),
(7, 'titbits'),
(8, 'snacks'),
(9, 'others'),
(10, 'desserts'),
(11, 'thirst'),
(12, 'ice-cream');

-- --------------------------------------------------------

--
-- Table structure for table `others`
--

CREATE TABLE `others` (
  `submenu_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `others`
--

INSERT INTO `others` (`submenu_id`, `item_id`, `item_name`) VALUES
(9, 1, 'Russian Salad'),
(9, 2, 'Mushroom Potato Salad'),
(9, 3, 'Assorted Mixed Vegetable & Red Beans'),
(9, 4, 'Fresh Salad Kachomer'),
(9, 5, 'Potatoes & Egg Salad'),
(9, 6, 'Cole Slaw'),
(9, 7, 'Macaroni'),
(9, 8, 'Cucumber with Dill Salad'),
(9, 9, 'Pasta & Olive Salad'),
(9, 10, 'Baghar-e-Baigan'),
(9, 11, 'Mirch Ka Salan'),
(9, 12, 'Aloo Bukhara Chatni'),
(9, 13, 'Assorted Pickles'),
(9, 14, 'Yougurt Raita'),
(9, 15, 'Baked Tomatoes Chatni ');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `photo_id` int(11) NOT NULL,
  `photo_name` text NOT NULL,
  `photo_img` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `snacks`
--

CREATE TABLE `snacks` (
  `submenu_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `snacks`
--

INSERT INTO `snacks` (`submenu_id`, `item_id`, `item_name`) VALUES
(8, 1, 'Chicken Sandwiches'),
(8, 2, 'Assorted Sandwiches'),
(8, 3, 'Open Face Sandwiches'),
(8, 4, 'Chicken Patties'),
(8, 5, 'Mini Pizza'),
(8, 6, 'chicken Samosa'),
(8, 7, 'qeema samosa'),
(8, 8, 'Cheese Samosa'),
(8, 9, 'Chicken Spring Roll'),
(8, 10, 'Mint Roll'),
(8, 11, 'Dry Pastries'),
(8, 12, 'Fruit Cake'),
(8, 13, 'Plain Cake'),
(8, 14, 'Marble Cake'),
(8, 15, 'Shami Kabab'),
(8, 16, 'Fish & Chips'),
(8, 17, 'French Fries'),
(8, 18, 'Dahi Phulki'),
(8, 19, 'Chollay Chaat'),
(8, 20, 'Ghulab Jaman'),
(8, 21, 'Chicken Wings'),
(8, 22, 'Chicken Nuggets'),
(8, 23, 'Drum Sticks'),
(8, 24, 'Potato Croquettes'),
(8, 25, 'Chicken Croquettes');

-- --------------------------------------------------------

--
-- Table structure for table `soups`
--

CREATE TABLE `soups` (
  `submenu_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `soups`
--

INSERT INTO `soups` (`submenu_id`, `item_id`, `item_name`) VALUES
(6, 1, 'Chicken Corn Soup'),
(6, 2, 'Chicken Clear Soup'),
(6, 3, 'Chicken Cream Soup'),
(6, 4, 'Hot & Sour Soup'),
(6, 5, 'Vegetable Soup'),
(6, 6, 'Tomato Cream Soup'),
(6, 7, 'Thai Soup'),
(6, 8, 'Chicken Yakhni');

-- --------------------------------------------------------

--
-- Table structure for table `special_dessert`
--

CREATE TABLE `special_dessert` (
  `dessert_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `special_dessert`
--

INSERT INTO `special_dessert` (`dessert_id`, `item_id`, `item_name`) VALUES
(2, 1, 'Baked Alaska'),
(2, 2, 'Cassata'),
(2, 3, 'Parfit Nougatine'),
(2, 4, 'Caramel Custard'),
(2, 5, 'Choclate Mousse'),
(2, 6, 'Lemon Mousse'),
(2, 7, 'Strawberry Mousse'),
(2, 8, 'Pineapple Mousse');

-- --------------------------------------------------------

--
-- Table structure for table `steamed`
--

CREATE TABLE `steamed` (
  `submenu_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `steamed`
--

INSERT INTO `steamed` (`submenu_id`, `item_id`, `item_name`) VALUES
(3, 1, 'Chicken(green/red)'),
(3, 2, 'Chicken Foil'),
(3, 3, 'Mutton'),
(3, 4, 'Beef'),
(3, 5, 'Batair'),
(3, 6, 'Stuffed Lamb');

-- --------------------------------------------------------

--
-- Table structure for table `thirst`
--

CREATE TABLE `thirst` (
  `submenu_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `thirst`
--

INSERT INTO `thirst` (`submenu_id`, `item_id`, `item_name`) VALUES
(11, 1, 'Cold Drink'),
(11, 2, 'Fresh Juice'),
(11, 3, 'Squashes'),
(11, 4, 'Lassi (Sweet & Salty)'),
(11, 5, 'Expresso Coffee'),
(11, 6, 'Doodh Patti Chaye'),
(11, 7, 'Falooda'),
(11, 8, 'Lemonade'),
(11, 9, 'Kashmiri Tea');

-- --------------------------------------------------------

--
-- Table structure for table `titbits`
--

CREATE TABLE `titbits` (
  `submenu_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `titbits`
--

INSERT INTO `titbits` (`submenu_id`, `item_id`, `item_name`) VALUES
(7, 1, 'Kachori Aloo Sabzi'),
(7, 2, 'Aloo Bukhara Chatni'),
(7, 3, 'Mirch Salan'),
(7, 4, 'Bhagare Baigun'),
(7, 5, 'Fresh Tomato Chatni'),
(7, 6, 'Live Tandoor'),
(7, 7, 'Assorted Salad ');

-- --------------------------------------------------------

--
-- Table structure for table `traditional_dessert`
--

CREATE TABLE `traditional_dessert` (
  `dessert_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `traditional_dessert`
--

INSERT INTO `traditional_dessert` (`dessert_id`, `item_id`, `item_name`) VALUES
(1, 1, 'Qulfi (Falooda)'),
(1, 2, 'Qulfi in Clay pot'),
(1, 3, 'Gulab Jaman (hot)'),
(1, 4, 'Jalebi (live)'),
(1, 5, 'Immariti'),
(1, 6, 'Rabri'),
(1, 7, 'Ros Malayi'),
(1, 8, 'Khoobani Ka Meetha'),
(1, 9, 'Lab-e-Shireen'),
(1, 10, 'Doodh Dulari'),
(1, 11, 'Fruit Cocktail'),
(1, 12, 'Gajar ka Halwa'),
(1, 13, 'Lockie Halwa'),
(1, 14, 'Sooji Halwa'),
(1, 15, 'Shahi Tukra'),
(1, 16, 'Siwayyan'),
(1, 17, 'Sheer Khorma'),
(1, 18, 'Kheer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `b.b.q_items`
--
ALTER TABLE `b.b.q_items`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `submenu_id` (`submenu_id`);

--
-- Indexes for table `chinese_cuisine`
--
ALTER TABLE `chinese_cuisine`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `submenu_id` (`submenu_id`);

--
-- Indexes for table `continental`
--
ALTER TABLE `continental`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `submenu_id` (`submenu_id`);

--
-- Indexes for table `desserts`
--
ALTER TABLE `desserts`
  ADD PRIMARY KEY (`desser_id`),
  ADD KEY `submenu_id` (`submenu_id`);

--
-- Indexes for table `fried_items`
--
ALTER TABLE `fried_items`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `submenu_id` (`submenu_id`);

--
-- Indexes for table `ice-cream`
--
ALTER TABLE `ice-cream`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `submenu_id` (`submenu_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`submenu_id`);

--
-- Indexes for table `others`
--
ALTER TABLE `others`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `submenu_id` (`submenu_id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`photo_id`);

--
-- Indexes for table `snacks`
--
ALTER TABLE `snacks`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `submenu_id` (`submenu_id`);

--
-- Indexes for table `soups`
--
ALTER TABLE `soups`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `submenu_id` (`submenu_id`);

--
-- Indexes for table `special_dessert`
--
ALTER TABLE `special_dessert`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `dessert_id` (`dessert_id`);

--
-- Indexes for table `steamed`
--
ALTER TABLE `steamed`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `submenu_id` (`submenu_id`);

--
-- Indexes for table `thirst`
--
ALTER TABLE `thirst`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `submenu_id` (`submenu_id`);

--
-- Indexes for table `titbits`
--
ALTER TABLE `titbits`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `submenu_id` (`submenu_id`);

--
-- Indexes for table `traditional_dessert`
--
ALTER TABLE `traditional_dessert`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `dessert_id` (`dessert_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `b.b.q_items`
--
ALTER TABLE `b.b.q_items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `chinese_cuisine`
--
ALTER TABLE `chinese_cuisine`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `continental`
--
ALTER TABLE `continental`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `desserts`
--
ALTER TABLE `desserts`
  MODIFY `desser_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fried_items`
--
ALTER TABLE `fried_items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `ice-cream`
--
ALTER TABLE `ice-cream`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `submenu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10000;

--
-- AUTO_INCREMENT for table `others`
--
ALTER TABLE `others`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `photo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5567;

--
-- AUTO_INCREMENT for table `snacks`
--
ALTER TABLE `snacks`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `soups`
--
ALTER TABLE `soups`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `special_dessert`
--
ALTER TABLE `special_dessert`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `steamed`
--
ALTER TABLE `steamed`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `thirst`
--
ALTER TABLE `thirst`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `titbits`
--
ALTER TABLE `titbits`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `traditional_dessert`
--
ALTER TABLE `traditional_dessert`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `b.b.q_items`
--
ALTER TABLE `b.b.q_items`
  ADD CONSTRAINT `b.b.q_items_ibfk_1` FOREIGN KEY (`submenu_id`) REFERENCES `menu` (`submenu_id`);

--
-- Constraints for table `chinese_cuisine`
--
ALTER TABLE `chinese_cuisine`
  ADD CONSTRAINT `chinese_cuisine_ibfk_1` FOREIGN KEY (`submenu_id`) REFERENCES `menu` (`submenu_id`);

--
-- Constraints for table `continental`
--
ALTER TABLE `continental`
  ADD CONSTRAINT `continental_ibfk_1` FOREIGN KEY (`submenu_id`) REFERENCES `menu` (`submenu_id`);

--
-- Constraints for table `desserts`
--
ALTER TABLE `desserts`
  ADD CONSTRAINT `desserts_ibfk_1` FOREIGN KEY (`submenu_id`) REFERENCES `menu` (`submenu_id`);

--
-- Constraints for table `fried_items`
--
ALTER TABLE `fried_items`
  ADD CONSTRAINT `fried_items_ibfk_1` FOREIGN KEY (`submenu_id`) REFERENCES `menu` (`submenu_id`);

--
-- Constraints for table `ice-cream`
--
ALTER TABLE `ice-cream`
  ADD CONSTRAINT `ice-cream_ibfk_1` FOREIGN KEY (`submenu_id`) REFERENCES `menu` (`submenu_id`);

--
-- Constraints for table `others`
--
ALTER TABLE `others`
  ADD CONSTRAINT `others_ibfk_1` FOREIGN KEY (`submenu_id`) REFERENCES `menu` (`submenu_id`);

--
-- Constraints for table `snacks`
--
ALTER TABLE `snacks`
  ADD CONSTRAINT `snacks_ibfk_1` FOREIGN KEY (`submenu_id`) REFERENCES `menu` (`submenu_id`);

--
-- Constraints for table `soups`
--
ALTER TABLE `soups`
  ADD CONSTRAINT `soups_ibfk_1` FOREIGN KEY (`submenu_id`) REFERENCES `menu` (`submenu_id`);

--
-- Constraints for table `special_dessert`
--
ALTER TABLE `special_dessert`
  ADD CONSTRAINT `special_dessert_ibfk_1` FOREIGN KEY (`dessert_id`) REFERENCES `desserts` (`desser_id`);

--
-- Constraints for table `steamed`
--
ALTER TABLE `steamed`
  ADD CONSTRAINT `steamed_ibfk_1` FOREIGN KEY (`submenu_id`) REFERENCES `menu` (`submenu_id`);

--
-- Constraints for table `thirst`
--
ALTER TABLE `thirst`
  ADD CONSTRAINT `thirst_ibfk_1` FOREIGN KEY (`submenu_id`) REFERENCES `menu` (`submenu_id`);

--
-- Constraints for table `titbits`
--
ALTER TABLE `titbits`
  ADD CONSTRAINT `titbits_ibfk_1` FOREIGN KEY (`submenu_id`) REFERENCES `menu` (`submenu_id`);

--
-- Constraints for table `traditional_dessert`
--
ALTER TABLE `traditional_dessert`
  ADD CONSTRAINT `traditional_dessert_ibfk_1` FOREIGN KEY (`dessert_id`) REFERENCES `desserts` (`desser_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
