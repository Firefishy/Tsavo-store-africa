-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 26, 2021 at 09:23 AM
-- Server version: 10.3.30-MariaDB-cll-lve
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tsavosto_tsavo`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(10) UNSIGNED NOT NULL,
  `main_head` varchar(40) DEFAULT NULL,
  `main_head_content` text DEFAULT NULL,
  `section_2` varchar(40) DEFAULT NULL,
  `a_head` varchar(40) DEFAULT NULL,
  `a_subhead` varchar(40) DEFAULT NULL,
  `a_content` text DEFAULT NULL,
  `b_head` varchar(40) DEFAULT NULL,
  `b_subhead` varchar(40) DEFAULT NULL,
  `b_content` text DEFAULT NULL,
  `c_head` varchar(40) DEFAULT NULL,
  `c_subhead` varchar(40) DEFAULT NULL,
  `c_content` text DEFAULT NULL,
  `section_3` varchar(40) DEFAULT NULL,
  `a2_head` varchar(40) DEFAULT NULL,
  `a2_content` text DEFAULT NULL,
  `a2_head_1` varchar(40) DEFAULT NULL,
  `a2_content_1` text DEFAULT NULL,
  `a2_head_2` varchar(40) DEFAULT NULL,
  `a2_content_2` text DEFAULT NULL,
  `a2_head_3` varchar(40) DEFAULT NULL,
  `a2_content_3` text DEFAULT NULL,
  `section_4` varchar(40) DEFAULT NULL,
  `a3_mainhead` varchar(40) DEFAULT NULL,
  `a3_head` varchar(40) DEFAULT NULL,
  `a3_content` varchar(200) DEFAULT NULL,
  `a3_head_1` varchar(40) DEFAULT NULL,
  `a3_content_1` varchar(200) DEFAULT NULL,
  `a3_head_2` varchar(40) DEFAULT NULL,
  `a3_content_2` varchar(200) DEFAULT NULL,
  `a3_head_3` varchar(40) DEFAULT NULL,
  `a3_content_3` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `main_head`, `main_head_content`, `section_2`, `a_head`, `a_subhead`, `a_content`, `b_head`, `b_subhead`, `b_content`, `c_head`, `c_subhead`, `c_content`, `section_3`, `a2_head`, `a2_content`, `a2_head_1`, `a2_content_1`, `a2_head_2`, `a2_content_2`, `a2_head_3`, `a2_content_3`, `section_4`, `a3_mainhead`, `a3_head`, `a3_content`, `a3_head_1`, `a3_content_1`, `a3_head_2`, `a3_content_2`, `a3_head_3`, `a3_content_3`) VALUES
(1, 'Our Vision', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `creationDate`, `updationDate`) VALUES
(1, 'admin', 'f925916e2754e5e03f75dd58a5733251', '2017-01-24 16:21:18', '21-06-2018 08:27:55 PM');

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `first_name` varchar(40) DEFAULT NULL,
  `last_name` varchar(40) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `phone` int(20) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `id` varchar(40) NOT NULL,
  `station` varchar(100) NOT NULL,
  `zone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`first_name`, `last_name`, `email`, `phone`, `address`, `id`, `station`, `zone`) VALUES
('0', '0', 'princesswan', 793060164, '0', '1', 'Thika COSSIm PUS', 'Zone 1'),
('0', '0', 'e5u65eu45u5', 0, '0', '2', 'Juja COSSIM PUS', 'Zone 1'),
('Dennis', 'wang\'ang\'a', 'FGCXHFO01@gmail.com', 793060164, 'Muguga, Thika, Kenya', 'AGENT1619289030', 'Kirwara PUS', 'Zone 2'),
('Default', 'Default', 'default@default.com', NULL, NULL, 'AGENT1619291239', 'Default Station 0', 'Zone 0');

-- --------------------------------------------------------

--
-- Table structure for table `agent_monitor`
--

CREATE TABLE `agent_monitor` (
  `pay_number` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `sale_date` int(11) DEFAULT 1,
  `user_name` int(11) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `email` int(11) DEFAULT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `editors_name` varchar(40) DEFAULT NULL,
  `create_time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `board_member`
--

CREATE TABLE `board_member` (
  `id` int(10) UNSIGNED NOT NULL,
  `profile_photo` varchar(40) DEFAULT NULL,
  `first_name` varchar(40) DEFAULT NULL,
  `last_name` varchar(40) DEFAULT NULL,
  `position` varchar(40) DEFAULT NULL,
  `details` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `board_member`
--

INSERT INTO `board_member` (`id`, `profile_photo`, `first_name`, `last_name`, `position`, `details`) VALUES
(1, '55e482cb8e1bf80be.jpg', 'Alex', 'Warorua', 'Board member', 'The Developer<div>The Designer</div><div>The Technician</div>');

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` int(30) NOT NULL,
  `branch_code` varchar(40) DEFAULT NULL,
  `zonee` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL COMMENT 'Column for distance NOT STATE',
  `zip_code` varchar(50) NOT NULL COMMENT 'column for delivery_price NOT ZIP-CODE',
  `country` text NOT NULL COMMENT 'Column for Station name NOT COUNTRY',
  `contact` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `price` int(40) NOT NULL,
  `field9` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `branch_code`, `zonee`, `city`, `state`, `zip_code`, `country`, `contact`, `date_created`, `price`, `field9`) VALUES
(10, 'lVtycFupgAqnE1R', 'zone 2', 'Thika', '55', '0', 'Thika Main PUS', '011245874425', '2021-05-19 03:05:26', 0, NULL),
(1621964099, 'BRAN1621964099', 'Zone 1', 'Kenol', '85', '425', 'Kenol PUS', '', '2021-05-25 20:34:59', 5, NULL),
(1622146826, 'BRAN1622146826', 'Zone 1', 'Nairobi', '25', '75', 'Kasarani Main PUS', '0793060164', '2021-05-27 20:20:26', 3, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  `product` varchar(40) DEFAULT NULL,
  `product_name` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `user_address` varchar(100) NOT NULL,
  `user_cont` varchar(100) NOT NULL,
  `price` decimal(10,2) DEFAULT 0.00,
  `weight` varchar(100) NOT NULL,
  `height` varchar(100) NOT NULL,
  `length` varchar(100) NOT NULL,
  `width` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `zone_pus` varchar(200) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `field1` varchar(40) DEFAULT NULL,
  `field2` varchar(40) DEFAULT NULL,
  `field3` varchar(40) DEFAULT NULL,
  `field4` varchar(40) DEFAULT NULL,
  `field5` varchar(40) DEFAULT NULL,
  `field6` varchar(40) DEFAULT NULL,
  `field7` varchar(40) DEFAULT NULL,
  `field8` varchar(40) DEFAULT NULL,
  `coupon_user` varchar(40) DEFAULT NULL,
  `coupon_user_worth` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product_id`, `quantity`, `name`, `product`, `product_name`, `first_name`, `user_address`, `user_cont`, `price`, `weight`, `height`, `length`, `width`, `last_name`, `zone_pus`, `user_email`, `field1`, `field2`, `field3`, `field4`, `field5`, `field6`, `field7`, `field8`, `coupon_user`, `coupon_user_worth`) VALUES
(92, 107, 56, 1, NULL, NULL, 'Generic Cute Swim Turtle Wound-up Chain Clockwork Baby Kid B', 'Patricia', 'Thika, Kenya', '0700000000', 4598.00, '8', '45', '75', '55', 'Wangui', 'Zone 2--Kirwara PUS--240.00', 'patriciawnjuguna2000@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(112, 111, 55, 1, NULL, NULL, 'Tsavo Ticket', 'Salome', 'Kamagambo, Thika, Kenya', '0710860361', 1.00, '0', '1', '1', '1', 'Warorua', 'Zone 2--Kirwara PUS--240.00', 'salomewarorua@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(116, 110, 59, 1, NULL, NULL, 'Tsavo VIP Ticket', 'Patricia', 'Gathondeki Naivasha Road, Nairobi, Kenya', '0716912002', 2.00, '0', '20', '35', '35', 'Wangui', 'Zone 2--Kirwara PUS--240.00', 'patriciawnjuguna2000@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(131, 9, 59, 1, NULL, NULL, 'Tsavo VIP Ticket', 'Alex', 'General Kago, Thika', '0793060164', 210.00, '0', '20', '35', '35', 'Warorua', 'Zone 1--Kasarani Main PUS--75', 'waroruaalex640@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(152, 37, 45, 1, NULL, NULL, 'TCL 32', 'Martio', 'General Kago Rd\r\nNjewa Cyber', '0789765556', 18054.00, '4', '56', '112', '43', 'Mugure', 'Zone 3--Nyeri Town COSSIM PUS', 'spinnetech@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `cat_slug` varchar(150) DEFAULT NULL,
  `code` int(2) DEFAULT NULL,
  `sub_cat` varchar(40) DEFAULT NULL,
  `cat_name` varchar(40) DEFAULT NULL,
  `cat_ban` varchar(100) NOT NULL DEFAULT 'tsavo.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `cat_slug`, `code`, `sub_cat`, `cat_name`, `cat_ban`) VALUES
(139, 'Laptops', 'laptops', 4, 'Laptops', NULL, 'tsavo.png'),
(140, 'Cameras', 'camera', 4, 'Other Computer Accessories', NULL, 'tsavo.png'),
(141, 'Phone Chargers', 'Phones_chargers', 7, 'Phone Accessories', NULL, 'tsavo.png'),
(142, 'Clothes', 'clothes', 6, 'Teens Grooming', NULL, 'tsavo.png'),
(143, 'Office Electronics', 'office-electronics', 3, 'Office Appliances', NULL, 'tsavo.png'),
(144, 'Stationery', 'stationery', 3, 'Office Appliances', NULL, 'tsavo.png'),
(145, 'Furniture', 'furniture', 3, 'Furniture & Decor', NULL, 'tsavo.png'),
(146, 'Tsavo Tickets', 'tsavo254', 14, 'Others', NULL, 'tsavo.png'),
(147, 'LED/LCD TVS', 'led-lcd', 2, 'Televisions', NULL, 'tsavo.png'),
(148, 'Smart TV', 'smart-tv', 2, 'Televisions', NULL, 'tsavo.png'),
(149, 'Projector', 'projector', 2, 'Televisions', NULL, 'tsavo.png'),
(150, 'Hometheater/Woofer', 'hometheater', 2, 'Audio System', NULL, 'tsavo.png'),
(151, 'Sound Bar', 'soundbar', 2, 'Audio System', NULL, 'tsavo.png'),
(152, 'Amplifiers/Compact Radio', 'amp-compactradio', 2, 'Audio System', NULL, 'tsavo.png'),
(153, 'Cables', 'cables', 2, 'Electronic Accessories', NULL, 'tsavo.png'),
(154, 'Batteries', 'batteries', 2, 'Electronic Accessories', NULL, 'tsavo.png'),
(155, 'Phone Chargers', 'charger', 2, 'Electronic Accessories', NULL, 'tsavo.png'),
(156, 'Cooking Food Stuffs', 'cooking-ingredients', 1, 'Food Stuffs', NULL, 'tsavo.png'),
(157, 'Margarine/Butter/Jam', 'spreads', 1, 'Food Stuffs', NULL, 'tsavo.png'),
(158, 'Snacks', 'snacks', 1, 'Food Stuffs', NULL, 'tsavo.png'),
(159, 'Juice/Soda/Water', 'juice-soda', 1, 'Beverages', NULL, 'tsavo.png'),
(160, 'Coffee/Tea/Cocoa', 'coffee-tea-cocoa', 1, 'Beverages', NULL, 'tsavo.png'),
(161, 'Spirits/Wines/Beer', 'spirits-wine-beer', 1, 'Beverages', NULL, 'tsavo.png'),
(162, 'Toiletries', 'toiletries', 1, 'Personal Care', NULL, 'tsavo.png'),
(163, 'Toothpaste/Oralcare', 'oralcare', 1, 'Personal Care', NULL, 'tsavo.png'),
(164, 'Air Fresheners', 'airfreshners', 1, 'Personal Care', NULL, 'tsavo.png'),
(165, 'Large Appliances', 'large-appliances', 3, 'House Appliances', NULL, 'tsavo.png'),
(166, 'Acaricides', 'acaricides', 13, 'Pest Controllers', NULL, 'tsavo.png'),
(167, 'Cattle/Goat Feeds', 'cattle-feed', 13, 'Feeds', NULL, 'tsavo.png'),
(168, 'Cattle Feed Supplements', 'cattle-supplements', 13, 'AgroSupplements', NULL, 'tsavo.png'),
(169, 'Fertilizers', 'fertilizers', 13, 'AgroSupplements', NULL, 'tsavo.png'),
(170, 'Fish Feeds', 'fish-feed', 13, 'Feeds', NULL, 'tsavo.png'),
(171, 'Herbicides', 'herbicides', 13, 'Pest Controllers', NULL, 'tsavo.png'),
(172, 'Pestcides', 'pestcides', 13, 'Pest Controllers', NULL, 'tsavo.png'),
(173, 'Poultry Feed', 'poultry-feed', 13, 'Feeds', NULL, 'tsavo.png'),
(174, 'Poultry Feed Supplements', 'poultry-supplements', 13, 'AgroSupplements', NULL, 'tsavo.png'),
(175, 'Flood Lights', 'flood-lights', 12, 'Outdoor Lights', NULL, 'tsavo.png'),
(176, 'Insectsides', 'insectsides', 12, 'Pest Control', NULL, 'tsavo.png'),
(177, 'Landscape Lights', 'landscape-lights', 12, 'Outdoor Lights', NULL, 'tsavo.png'),
(178, 'Mosquito/Cockroach Killers', 'mosquito-cockroaches', 12, 'Pest Control', NULL, 'tsavo.png'),
(179, 'Pruning Tools', 'pruning-tools', 12, 'Gardening Tools', NULL, 'tsavo.png'),
(180, 'Rat/Mole Killers', 'rat-moles', 12, 'Pest Control', NULL, 'tsavo.png'),
(181, 'Security-lights', 'security-lights', 12, 'Outdoor Lights', NULL, 'tsavo.png'),
(182, 'Soil Work Tools', 'soil-work-tools', 12, 'Gardening Tools', NULL, 'tsavo.png'),
(183, 'Specialty Tools', 'specialty-tools', 12, 'Gardening Tools', NULL, '47a10e3e8496df106.jpg'),
(184, 'Blood Pressure Kits', 'blood-pressure', 11, 'Laboratory Tools & Electronics', NULL, 'tsavo.png'),
(185, 'The getrudes Chemist', 'chemist-1', 11, 'Get a Prescription', NULL, 'tsavo.png'),
(186, 'Chemist 2', 'chemist-2', 11, 'Get a Prescription', NULL, 'tsavo.png'),
(187, 'Chemist 3', 'chemist-3', 11, 'Get a Prescription', NULL, 'tsavo.png'),
(188, 'Other Drugs', 'common-drugs', 11, 'OTC Drugs', NULL, 'tsavo.png'),
(189, 'Diabetes Drugs', 'diabetes', 11, 'Laboratory Tools & Electronics', NULL, 'tsavo.png'),
(190, 'Laboratory Tools', 'lab-tools', 11, 'Laboratory Tools & Electronics', NULL, 'tsavo.png'),
(191, 'PainKiller Drugs', 'painkillers', 11, 'OTC Drugs', NULL, 'tsavo.png'),
(192, 'Syringes', 'syringes', 11, 'OTC Drugs', NULL, 'tsavo.png'),
(193, 'Baby Chair/Potty etc', 'baby-accessories', 10, 'Baby Care', NULL, 'tsavo.png'),
(194, 'Baby Monitoring devices/instruments', 'baby-monitor', 10, 'Baby Care', NULL, 'f2fee215ea7f9fb19.jpg'),
(195, 'Baby bottle feeders', 'bottle-feeding', 10, 'Baby Feeding', NULL, 'tsavo.png'),
(196, 'Burp Clothes', 'burp-clothes', 10, 'Baby Feeding', NULL, 'tsavo.png'),
(197, 'Diaper Changing Tables/', 'diaper-changing-accessories', 10, 'Diapering', NULL, 'tsavo.png'),
(198, 'Baby / Adult diapers', 'diapers', 10, 'Diapering', NULL, 'tsavo.png'),
(199, 'Holders/Wipes', 'holders-wipes', 10, 'Diapering', NULL, 'tsavo.png'),
(200, 'Pacifiers', 'pacifiers', 10, 'Baby Feeding', NULL, 'tsavo.png'),
(201, 'Toys', 'toys', 10, 'Baby Care', NULL, '60d0b004f2fe9d208.jpg'),
(202, 'Active Exercising Wear', 'active-wear', 9, 'Sports Jersey', NULL, 'tsavo.png'),
(203, 'Bicycle', 'bicycle', 9, 'Sports Equipment', NULL, 'tsavo.png'),
(204, 'Fat Burning drugs/lotions', 'fat-burners', 9, 'Nutrition', NULL, 'tsavo.png'),
(205, 'Gym Equipments', 'gym-equipment', 9, 'Sports Equipment', NULL, 'tsavo.png'),
(206, 'Preworkout', 'preworkout', 9, 'Nutrition', NULL, 'tsavo.png'),
(207, 'Sports Equipment/Tools', 'sporting-equipment', 9, 'Sports Equipment', NULL, 'tsavo.png'),
(208, 'Sports Jersey', 'sports-jersey', 9, 'Sports Jersey', NULL, 'tsavo.png'),
(209, 'Body Supplements', 'supplements', 9, 'Nutrition', NULL, 'tsavo.png'),
(210, 'Swimming Costumes', 'swimming-costume', 9, 'Sports Jersey', NULL, 'tsavo.png'),
(211, 'Aftershave', 'aftershave', 8, 'Perfumes', NULL, 'tsavo.png'),
(212, 'Body Care Lotions', 'body-care', 8, 'Health Care', NULL, 'tsavo.png'),
(213, 'Body Sprays', 'body-spray', 8, 'Perfumes', NULL, 'tsavo.png'),
(214, 'Colognes', 'cologne', 8, 'Perfumes', NULL, 'tsavo.png'),
(215, 'Face Makeup', 'facial-makeup', 8, 'Make Ups', NULL, 'tsavo.png'),
(216, 'Hair Care', 'hair-care', 8, 'Health Care', NULL, 'tsavo.png'),
(217, 'Hair Makeup', 'hair-makeup', 8, 'Make Ups', NULL, 'tsavo.png'),
(218, 'Other Makeup', 'other-makeup', 8, 'Make Ups', NULL, 'tsavo.png'),
(219, 'Skin Care', 'skin-care', 8, 'Health Care', NULL, 'tsavo.png'),
(220, 'Cases/Powerbanks', 'cases-powerbanks', 7, 'Phone Accessories', NULL, 'tsavo.png'),
(221, 'Laptop Chargers', 'chargers', 4, 'Laptops', NULL, 'tsavo.png'),
(222, 'Earphones/headsets', 'earphones-headsets', 7, 'Phone Accessories', NULL, 'tsavo.png'),
(223, 'Ipads', 'ipads', 7, 'Tablets', NULL, 'tsavo.png'),
(224, 'Kids Tablets', 'kids-tablet', 7, 'Tablets', NULL, 'tsavo.png'),
(225, 'Office Telephones', 'office-telephone', 7, 'Mobile Phones', NULL, 'tsavo.png'),
(226, 'Push Button Phones', 'push-button-phone', 7, 'Mobile Phones', NULL, 'tsavo.png'),
(227, 'Smart Phones', 'smart-phones', 7, 'Mobile Phones', NULL, 'tsavo.png'),
(228, 'Tablet Covers', 'tablet-cover', 7, 'Tablets', NULL, 'tsavo.png'),
(229, 'Belts/Watches', 'belt-watch', 6, 'Men Grooming', NULL, 'tsavo.png'),
(230, 'Boys Grooming', 'boy-grooming', 6, 'Teens Grooming', NULL, 'tsavo.png'),
(231, 'Girls Grooming', 'girl-grooming', 6, 'Teens Grooming', NULL, 'tsavo.png'),
(232, 'Jewellery', 'jewellery', 6, 'Women Grooming', NULL, 'tsavo.png'),
(233, 'Men Clothing', 'men-clothing', 6, 'Men Grooming', NULL, 'tsavo.png'),
(234, 'Men Shoes', 'men-shoes', 6, 'Men Grooming', NULL, 'tsavo.png'),
(235, 'Teens Accessories', 'teen-accessories', 6, 'Teens Grooming', NULL, 'tsavo.png'),
(236, 'Women Clothings', 'women-clothing', 6, 'Women Grooming', NULL, 'tsavo.png'),
(237, 'Women Foot Wear', 'women-foot-wear', 6, 'Women Grooming', NULL, 'tsavo.png'),
(238, 'Antivirus', 'antivirus', 5, 'Softwares', NULL, 'tsavo.png'),
(239, 'Nintendo Consoles', 'nintendo', 5, 'Gaming Consoles', NULL, 'tsavo.png'),
(240, 'Nintendo games', 'nintendo-game', 5, 'Games', NULL, 'tsavo.png'),
(241, 'Office Software', 'office-software', 5, 'Softwares', NULL, 'tsavo.png'),
(242, 'Operating Systems', 'operating-system', 5, 'Softwares', NULL, 'tsavo.png'),
(243, 'Playstations', 'playstation', 5, 'Gaming Consoles', NULL, 'tsavo.png'),
(244, 'Playstation Games', 'playstation-game', 5, 'Games', NULL, 'tsavo.png'),
(245, 'X-box', 'x-box', 5, 'Gaming Consoles', NULL, 'tsavo.png'),
(246, 'X-Box Games', 'x-box-game', 5, 'Games', NULL, 'tsavo.png'),
(247, 'Computer Peripherals', 'computer-peripherals', 4, 'Desktop Computer', NULL, 'tsavo.png'),
(248, 'Computer Spares', 'computer-spares', 4, 'Other Computer Accessories', NULL, 'tsavo.png'),
(249, 'Desktop', 'desktop', 4, 'Desktop Computer', NULL, 'tsavo.png'),
(250, 'MacBooks', 'macbooks', 4, 'Laptops', NULL, 'tsavo.png'),
(251, 'Monitors', 'monitor', 4, 'Desktop Computer', NULL, 'tsavo.png'),
(252, 'NetBooks', 'netbooks', 4, 'Laptops', NULL, 'tsavo.png'),
(253, 'Scanners/Printers', 'scanner-printer', 4, 'Other Computer Accessories', NULL, 'tsavo.png'),
(254, 'Storage Medias/Accessories', 'storage-accessories', 4, 'Other Computer Accessories', NULL, 'tsavo.png'),
(255, 'UltraBooks', 'ultrabooks', 4, 'Laptops', NULL, 'tsavo.png'),
(256, 'Beddings', 'beddings', 3, 'Furniture & Decor', NULL, 'tsavo.png'),
(257, 'Home Decor', 'decor', 3, 'Furniture & Decor', NULL, 'tsavo.png'),
(258, 'House Lighting', 'house-lighting', 3, 'House Appliances', NULL, 'tsavo.png'),
(259, 'Small Appliances', 'small-appliances', 3, 'House Appliances', NULL, 'tsavo.png'),
(260, 'Supplies', 'supplies', 3, 'Office Appliances', NULL, 'tsavo.png'),
(261, 'Car Electronics', 'car-electronics', 14, 'Automobile Accessories', NULL, 'tsavo.png'),
(262, 'Car Lights', 'car-lights', 14, 'Automobile Accessories', NULL, 'tsavo.png'),
(263, 'Highschool Books', 'highschool', 14, 'Books & Novels', NULL, 'tsavo.png'),
(264, 'Miscellaneous', 'miscellaneous', 14, 'Others', NULL, 'tsavo.png'),
(265, 'Music Equipment', 'music-equip', 14, 'Others', NULL, 'tsavo.png'),
(266, 'Novels/Storybooks', 'novels', 14, 'Books & Novels', NULL, 'tsavo.png'),
(267, 'Primary School Books', 'primaryschool', 14, 'Books & Novels', NULL, 'tsavo.png'),
(268, 'Car Seat Covers', 'seat-covers', 14, 'Automobile Accessories', NULL, 'tsavo.png'),
(269, 'STAY SAFE', 'stay-safe', 14, 'Others', NULL, 'tsavo.png'),
(270, 'Books', 'books', 1, 'Food Stuffs', NULL, 'tsavo.png'),
(271, 'Vegetables', 'vegetables', 1, 'Food Stuffs', NULL, 'f5baa6653eee6ef9e.jpg'),
(272, 'Elitebooks', 'elitebook', 4, 'Laptops', '4', 'tsavo.png'),
(273, 'Utensils', 'CAT1622039604', 3, 'House Appliances', '3', 'tsavo.png');

-- --------------------------------------------------------

--
-- Table structure for table `confirm_order`
--

CREATE TABLE `confirm_order` (
  `id` int(11) NOT NULL,
  `sales_id` int(11) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `details_id` int(11) NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `confirm_order`
--

INSERT INTO `confirm_order` (`id`, `sales_id`, `buyer_id`, `product_id`, `details_id`, `time`) VALUES
(1, 79, 128, 57, 131, '2021-07-08 10:59:25'),
(2, 82, 95, 59, 134, '2021-07-08 11:00:22'),
(3, 78, 95, 57, 130, '2021-07-08 11:06:36'),
(4, 80, 95, 59, 132, '2021-07-09 02:09:38'),
(5, 94, 95, 45, 140, '2021-08-06 10:07:47'),
(6, 95, 95, 45, 141, '2021-09-07 02:11:16'),
(7, 96, 95, 45, 142, '2021-10-18 02:32:59');

-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

CREATE TABLE `coupon` (
  `coupon_id` int(11) NOT NULL,
  `coupon_code` varchar(20) NOT NULL,
  `discount` mediumint(100) DEFAULT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coupon`
--

INSERT INTO `coupon` (`coupon_id`, `coupon_code`, `discount`, `status`) VALUES
(1, 'PRWW1B2L7B', 20, 'Valid'),
(3, 'PRQ7D5CBAZ', 99, 'Valid'),
(8, 'PR45TNPMQI', 40, 'Valid'),
(11, 'PRUZU5ZPSF', 500, 'Valid'),
(16, 'TSV1624564221', 5, 'Valid'),
(18, 'PRE8HREWCN', 200000, 'Valid'),
(19, 'TSV1630325616', 360000, 'Valid'),
(20, 'TSV1630325671', 500000, 'Valid'),
(21, 'TSV1630325977', 500000, 'Valid');

-- --------------------------------------------------------

--
-- Table structure for table `dash_cat`
--

CREATE TABLE `dash_cat` (
  `id` int(10) UNSIGNED NOT NULL,
  `phot` text DEFAULT NULL,
  `openn` varchar(40) DEFAULT NULL,
  `close` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `id` decimal(40,2) UNSIGNED NOT NULL,
  `distance` int(11) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT 0.00,
  `cost` decimal(10,2) DEFAULT NULL,
  `agent` varchar(100) NOT NULL,
  `station1` varchar(100) NOT NULL,
  `zone` varchar(40) DEFAULT NULL,
  `field7` varchar(40) DEFAULT NULL,
  `agent_id` varchar(40) DEFAULT NULL,
  `location` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`id`, `distance`, `price`, `cost`, `agent`, `station1`, `zone`, `field7`, `agent_id`, `location`) VALUES
(1.00, 45, 2.50, 112.50, '1', 'Thika COSSIM PUS', 'Zone 1', NULL, NULL, NULL),
(2.00, 85, 1.80, 153.00, '2', 'Muranga Town COSSIM PUS', 'Zone 2', NULL, NULL, NULL),
(3.00, 140, 2.00, 280.00, '2', 'Nyeri Town COSSIM PUS', 'Zone 3', NULL, NULL, NULL),
(4.00, 32, 2.30, 73.60, '1', 'Juja COSSIM PUS', 'Zone 1', NULL, NULL, NULL),
(5.00, 28, 3.00, 84.00, '2', 'Ruiru COSSIM PUS', 'Zone 1', NULL, NULL, NULL),
(99999999.99, 60, 4.00, 240.00, 'AGENT1619289030', 'Kirwara PUS', 'Zone 2', NULL, 'AGENT1619289030', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15956.48946704698!2d37.1823434!3d-1.0701817!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9a749db050591cac!2sSt.%20Albans%20School%2C%20Th');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(10) UNSIGNED NOT NULL,
  `sales_id` int(11) NOT NULL,
  `product_id` varchar(40) DEFAULT NULL,
  `quantity` text NOT NULL,
  `user_id` varchar(40) DEFAULT NULL,
  `product_name` text NOT NULL,
  `sales_date` date DEFAULT NULL,
  `size` varchar(40) DEFAULT NULL,
  `details` varchar(1000) DEFAULT 'Not Dispatched',
  `payy_id` varchar(100) DEFAULT NULL,
  `recipient_fname` text NOT NULL,
  `recipient_contact` text NOT NULL,
  `recipient_email` text NOT NULL,
  `conf_id` varchar(40) DEFAULT NULL,
  `pus` varchar(40) DEFAULT NULL,
  `last_edit` varchar(40) DEFAULT NULL,
  `editor` varchar(40) DEFAULT NULL,
  `length` varchar(40) DEFAULT NULL,
  `width` varchar(40) DEFAULT NULL,
  `height` varchar(40) DEFAULT NULL,
  `weight` varchar(40) DEFAULT NULL,
  `price` varchar(40) DEFAULT '0.00',
  `reference_number` varchar(40) DEFAULT 'Not Available',
  `recipient_address` text NOT NULL,
  `from_branch_id` int(10) DEFAULT 1,
  `to_branch_id` int(10) DEFAULT 0,
  `type` int(10) DEFAULT 2,
  `recipient_lname` varchar(40) DEFAULT NULL,
  `status` varchar(40) DEFAULT '0',
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `supp_name` varchar(40) DEFAULT NULL,
  `recipient_id` int(10) NOT NULL DEFAULT 0,
  `supp_conf` varchar(40) DEFAULT 'Not Seen',
  `total_sales` varchar(40) DEFAULT NULL,
  `payment` varchar(40) NOT NULL DEFAULT 'Not Paid',
  `variation` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `sales_id`, `product_id`, `quantity`, `user_id`, `product_name`, `sales_date`, `size`, `details`, `payy_id`, `recipient_fname`, `recipient_contact`, `recipient_email`, `conf_id`, `pus`, `last_edit`, `editor`, `length`, `width`, `height`, `weight`, `price`, `reference_number`, `recipient_address`, `from_branch_id`, `to_branch_id`, `type`, `recipient_lname`, `status`, `date_created`, `supp_name`, `recipient_id`, `supp_conf`, `total_sales`, `payment`, `variation`) VALUES
(43, 26, '55', '1', NULL, 'Tsavo Ticket', NULL, '55', 'Item Dispatched', '26', 'Martio', '0789765556', 'spinnetech@gmail.com', NULL, 'Zone 3--Nyeri Town COSSIM PUS', '5/18/2021/5/18/2021 07:46:23 pm', 'warorua_alex', '1', NULL, '1', '0', '1.00', 'REF1621356383', 'General Kago Rd\r\nNjewa Cyber', NULL, NULL, NULL, 'Warorua', '0', '2021-05-10 21:39:55', '55', 0, 'Sent to vendor', '752451', 'Paid', ''),
(44, 29, '55', '2', NULL, 'Tsavo Ticket', NULL, '55', 'Delivered', '29', 'Maureen', '+254793060164', 'reenyquwee@gmail.com', NULL, 'Zone 1--Thika COSSIM PUS--112.50', '5/18/2021/5/18/2021 07:19:12 pm', 'warorua_alex', '1', '', '1', '0', '1.00', 'REF1621354752', 'Zone 1--Thika COSSIM PUS--112.50', 9, 9, 2, 'Wangui', '7', '2021-05-12 21:33:34', '55', 0, 'Sent to vendor', '752451', 'Paid', ''),
(50, 30, '55', '1', NULL, 'Tsavo Ticket', NULL, NULL, 'Not Dispatched', NULL, 'Maureen', '+254793060164', 'reenyquwee@gmail.com', NULL, 'Zone 2--Kirwara PUS--240.00', NULL, NULL, '1', NULL, '1', '0', '110.00', 'Not Available', 'Kamagambo, Thika, Kenya', 1, 0, 2, 'Wangui', '0', '2021-06-20 00:11:17', NULL, 0, 'Not Seen', '752891', 'Paid', ''),
(51, 31, '55', '2', NULL, '', NULL, NULL, 'Not Dispatched', NULL, 'lewis', '0714702221', 'lewiswarorua0@gmail.com', NULL, '', NULL, NULL, '1', NULL, '1', '0', '110.00', 'Not Available', 'penta flowers', 1, 0, 2, 'warorua', '0', '2021-06-23 11:16:20', NULL, 0, 'Seen', '752891', 'Paid', ''),
(52, 31, '45', '1', NULL, 'TCL 32', NULL, '45', 'Item Dispatched', '31', 'lewis', '0714702221', 'lewiswarorua0@gmail.com', NULL, 'zone 2--Thika Main PUS--0', '6/23/2021/6/23/2021 02:22:49 pm', 'warorua_alex', '112', NULL, '56', '4', '18054.00', 'REF1624447369', 'penta flowers', NULL, NULL, NULL, 'warorua', NULL, '2021-06-23 11:16:20', '45', 0, 'Seen', '191330', 'Paid', ''),
(53, 32, '55', '1', NULL, 'Tsavo Ticket', NULL, NULL, 'Not Dispatched', NULL, 'lewis', '0714702221', 'lewiswarorua0@gmail.com', NULL, 'zone 2--Thika Main PUS--0', NULL, NULL, '1', NULL, '1', '0', '110.00', 'Not Available', 'penta flowers', 1, 0, 2, 'warorua', '0', '2021-06-23 12:10:35', NULL, 0, 'Seen', '752891', 'Paid', ''),
(55, 33, '50', '1', NULL, 'Celebrat A18 Wireless Bluetooth Headphon', NULL, NULL, 'Not Dispatched', NULL, 'lewis', '0714702221', 'lewiswarorua0@gmail.com', NULL, 'zone 2--Thika Main PUS--0', NULL, NULL, '23', NULL, '7', '1', '3021.00', 'Not Available', 'penta flowers', 1, 0, 2, 'warorua', '0', '2021-06-23 12:28:16', NULL, 0, 'Not Seen', '246232', 'Not Paid', ''),
(56, 33, '57', '1', NULL, 'Generic Fitness Tracker Bluetooth Smart Watch - Purple', NULL, NULL, 'Not Dispatched', NULL, 'lewis', '0714702221', 'lewiswarorua0@gmail.com', NULL, 'zone 2--Thika Main PUS--0', NULL, NULL, '7', NULL, '6', '0', '1310.00', 'Not Available', 'penta flowers', 1, 0, 2, 'warorua', '0', '2021-06-23 12:28:16', NULL, 0, 'Not Seen', '756901', 'Not Paid', ''),
(57, 34, '50', '1', NULL, '', NULL, NULL, 'Not Dispatched', NULL, 'Princess', '0789765556', 'princesswanjiru3@gmail.com', NULL, '', NULL, NULL, '23', NULL, '7', '1', '3021.00', 'Not Available', 'Kamagambo, Thika, Kenya', 1, 0, 2, 'Wanjiru', '0', '2021-06-23 12:31:20', NULL, 0, 'Not Seen', '246232', 'Not Paid', ''),
(58, 34, '57', '1', NULL, '', NULL, NULL, 'Not Dispatched', NULL, 'Princess', '0789765556', 'princesswanjiru3@gmail.com', NULL, '', NULL, NULL, '7', NULL, '6', '0', '1310.00', 'Not Available', 'Kamagambo, Thika, Kenya', 1, 0, 2, 'Wanjiru', '0', '2021-06-23 12:31:20', NULL, 0, 'Not Seen', '756901', 'Not Paid', ''),
(59, 34, '45', '1', NULL, '', NULL, NULL, 'Not Dispatched', NULL, 'Princess', '0789765556', 'princesswanjiru3@gmail.com', NULL, '', NULL, NULL, '112', NULL, '56', '4', '18054.00', 'Not Available', 'Kamagambo, Thika, Kenya', 1, 0, 2, 'Wanjiru', '0', '2021-06-23 12:31:20', NULL, 0, 'Not Seen', '191330', 'Not Paid', ''),
(61, 36, '55', '22', NULL, 'Tsavo Ticket', NULL, NULL, 'Not Dispatched', NULL, 'Maureen', '+254793060164', 'reenyquwee@gmail.com', NULL, 'Zone 2--Kirwara PUS--240.00', NULL, NULL, '1', NULL, '1', '0', '110.00', 'Not Available', 'Kamagambo, Thika, Kenya', 1, 0, 2, 'Wangui', '0', '2021-06-24 17:15:28', NULL, 0, 'Not Seen', '752891', 'Not Paid', ''),
(65, 39, '45', '1', NULL, 'TCL 32', NULL, NULL, 'Not Dispatched', NULL, 'Maureen', '+254793060164', 'reenyquwee@gmail.com', NULL, 'Zone 2--Kirwara PUS--240.00', NULL, NULL, '112', NULL, '56', '4', '18054.00', 'Not Available', 'Kamagambo, Thika, Kenya', 1, 0, 2, 'Wangui', '0', '2021-06-24 17:32:16', NULL, 0, 'Not Seen', '227858', 'Not Paid', ''),
(66, 40, '45', '1', NULL, 'TCL 32', NULL, NULL, 'Not Dispatched', NULL, 'Maureen', '+254793060164', 'reenyquwee@gmail.com', NULL, 'Zone 2--Kirwara PUS--240.00', NULL, NULL, '112', NULL, '56', '4', '18054.00', 'Not Available', 'Kamagambo, Thika, Kenya', 1, 0, 2, 'Wangui', '0', '2021-06-24 17:53:19', NULL, 0, 'Not Seen', '246232', 'Not Paid', ''),
(67, 41, '45', '1', NULL, 'TCL 32', NULL, NULL, 'Not Dispatched', NULL, 'Maureen', '+254793060164', 'reenyquwee@gmail.com', NULL, 'Zone 2--Kirwara PUS--240.00', NULL, NULL, '112', NULL, '56', '4', '18054.00', 'Not Available', 'Kamagambo, Thika, Kenya', 1, 0, 2, 'Wangui', '0', '2021-06-24 18:43:56', NULL, 0, 'Not Seen', '246232', 'Not Paid', ''),
(68, 42, '45', '1', NULL, 'TCL 32', NULL, NULL, 'Not Dispatched', NULL, 'Maureen', '+254793060164', 'reenyquwee@gmail.com', NULL, 'Zone 2--Kirwara PUS--240.00', NULL, NULL, '112', NULL, '56', '4', '18054.00', 'Not Available', 'Kamagambo, Thika, Kenya', 1, 0, 2, 'Wangui', '0', '2021-06-24 18:59:14', NULL, 0, 'Not Seen', '246232', 'Not Paid', ''),
(69, 43, '45', '2', NULL, 'TCL 32', NULL, NULL, 'Not Dispatched', NULL, 'Maureen', '+254793060164', 'reenyquwee@gmail.com', NULL, 'Zone 2--Kirwara PUS--240.00', NULL, NULL, '112', NULL, '56', '4', '18054.00', 'Not Available', 'Kamagambo, Thika, Kenya', 1, 0, 2, 'Wangui', '0', '2021-06-24 19:37:03', NULL, 0, 'Not Seen', '246232', 'Not Paid', ''),
(72, 45, '45', '1', NULL, 'TCL 32', NULL, NULL, 'Not Dispatched', NULL, 'Maureen', '+254793060164', 'reenyquwee@gmail.com', NULL, 'Zone 2--Kirwara PUS--240.00', NULL, NULL, '112', NULL, '56', '4', '18054.00', 'Not Available', 'Kamagambo, Thika, Kenya', 1, 0, 2, 'Wangui', '0', '2021-06-24 20:49:36', NULL, 0, 'Not Seen', '246232', 'Not Paid', ''),
(73, 46, '45', '1', NULL, 'TCL 32', NULL, NULL, 'Not Dispatched', NULL, 'Maureen', '+254793060164', 'reenyquwee@gmail.com', NULL, 'Zone 2--Kirwara PUS--240.00', NULL, NULL, '112', NULL, '56', '4', '18054.00', 'Not Available', 'Kamagambo, Thika, Kenya', 1, 0, 2, 'Wangui', '0', '2021-06-24 20:52:00', NULL, 0, 'Not Seen', '246232', 'Not Paid', ''),
(74, 47, '59', '1', NULL, 'Tsavo VIP Ticket', NULL, NULL, 'Not Dispatched', NULL, 'Maureen', '+254793060164', 'reenyquwee@gmail.com', NULL, 'Zone 2--Kirwara PUS--240.00', NULL, NULL, '35', NULL, '20', '0', '210.00', 'Not Available', 'Kamagambo, Thika, Kenya', 1, 0, 2, 'Wangui', '0', '2021-06-24 21:05:17', NULL, 0, 'Not Seen', '191330', 'Not Paid', ''),
(75, 48, '45', '1', NULL, 'TCL 32', NULL, NULL, 'Not Dispatched', NULL, 'Princess', '0789765556', 'princesswanjiru3@gmail.com', NULL, 'Delivery Point not set', NULL, NULL, '112', NULL, '56', '4', '18054.00', 'Not Available', 'Kamagambo, Thika, Kenya', 1, 0, 2, 'Wanjiru', '0', '2021-06-24 21:34:29', NULL, 0, 'Not Seen', '246232', 'Not Paid', ''),
(76, 49, '59', '1', NULL, '', NULL, NULL, 'Not Dispatched', NULL, 'Princess', '0789765556', 'princesswanjiru3@gmail.com', NULL, '', NULL, NULL, '35', NULL, '20', '0', '210.00', 'Not Available', 'Kamagambo, Thika, Kenya', 1, 0, 2, 'Wanjiru', '0', '2021-06-24 22:53:54', NULL, 0, 'Not Seen', NULL, 'Not Paid', ''),
(77, 49, '45', '1', NULL, '', NULL, NULL, 'Not Dispatched', NULL, 'Princess', '0789765556', 'princesswanjiru3@gmail.com', NULL, '', NULL, NULL, '112', NULL, '56', '4', '18054.00', 'Not Available', 'Kamagambo, Thika, Kenya', 1, 0, 2, 'Wanjiru', '0', '2021-06-24 22:53:54', NULL, 0, 'Not Seen', '246232', 'Not Paid', ''),
(78, 50, '59', '1', NULL, '', NULL, NULL, 'Not Dispatched', NULL, 'Princess', '0789765556', 'princesswanjiru3@gmail.com', NULL, '', NULL, NULL, '35', NULL, '20', '0', '210.00', 'Not Available', 'Kamagambo, Thika, Kenya', 1, 0, 2, 'Wanjiru', '0', '2021-06-24 22:55:34', NULL, 0, 'Not Seen', NULL, 'Not Paid', ''),
(79, 50, '45', '1', NULL, '', NULL, NULL, 'Not Dispatched', NULL, 'Princess', '0789765556', 'princesswanjiru3@gmail.com', NULL, '', NULL, NULL, '112', NULL, '56', '4', '18054.00', 'Not Available', 'Kamagambo, Thika, Kenya', 1, 0, 2, 'Wanjiru', '0', '2021-06-24 22:55:34', NULL, 0, 'Not Seen', '246232', 'Not Paid', ''),
(80, 51, '55', '1', NULL, 'Tsavo Ticket', NULL, NULL, 'Not Dispatched', NULL, 'Princess', '0789765556', 'princesswanjiru3@gmail.com', NULL, 'zone 2--Thika Main PUS--0', NULL, NULL, '1', NULL, '1', '0', '110.00', 'Not Available', 'Kamagambo, Thika, Kenya', 1, 0, 2, 'Wanjiru', '0', '2021-06-24 23:00:50', NULL, 0, 'Not Seen', '752891', 'Not Paid', ''),
(81, 51, '59', '1', NULL, 'Tsavo VIP Ticket', NULL, NULL, 'Not Dispatched', NULL, 'Princess', '0789765556', 'princesswanjiru3@gmail.com', NULL, 'zone 2--Thika Main PUS--0', NULL, NULL, '35', NULL, '20', '0', '210.00', 'Not Available', 'Kamagambo, Thika, Kenya', 1, 0, 2, 'Wanjiru', '0', '2021-06-24 23:00:50', NULL, 0, 'Not Seen', NULL, 'Not Paid', ''),
(82, 51, '45', '1', NULL, 'TCL 32', NULL, NULL, 'Not Dispatched', NULL, 'Princess', '0789765556', 'princesswanjiru3@gmail.com', NULL, 'zone 2--Thika Main PUS--0', NULL, NULL, '112', NULL, '56', '4', '18054.00', 'Not Available', 'Kamagambo, Thika, Kenya', 1, 0, 2, 'Wanjiru', '0', '2021-06-24 23:00:50', NULL, 0, 'Not Seen', '246232', 'Not Paid', ''),
(83, 52, '62', '1', NULL, 'Samsung Galaxy A32, 6.4', NULL, NULL, 'Not Dispatched', NULL, 'Princess', '0789765556', 'princesswanjiru3@gmail.com', NULL, 'Zone 1--Kenol PUS--425', NULL, NULL, '15', NULL, '8', '0', '26900.00', 'Not Available', 'Kamagambo, Thika, Kenya', 1, 0, 2, 'Wanjiru', '0', '2021-06-24 23:42:00', NULL, 0, 'Not Seen', NULL, 'Not Paid', ''),
(84, 52, '45', '1', NULL, 'TCL 32', NULL, NULL, 'Not Dispatched', NULL, 'Princess', '0789765556', 'princesswanjiru3@gmail.com', NULL, 'Zone 1--Kenol PUS--425', NULL, NULL, '112', NULL, '56', '4', '18054.00', 'Not Available', 'Kamagambo, Thika, Kenya', 1, 0, 2, 'Wanjiru', '0', '2021-06-24 23:42:00', NULL, 0, 'Not Seen', NULL, 'Not Paid', ''),
(85, 52, '52', '1', NULL, 'Alex Warorua', NULL, NULL, 'Not Dispatched', NULL, 'Princess', '0789765556', 'princesswanjiru3@gmail.com', NULL, 'Zone 1--Kenol PUS--425', NULL, NULL, '20', NULL, '7', '1', '2520.00', 'Not Available', 'Kamagambo, Thika, Kenya', 1, 0, 2, 'Wanjiru', '0', '2021-06-24 23:42:00', NULL, 0, 'Not Seen', NULL, 'Not Paid', ''),
(86, 52, '47', '1', NULL, 'Delta MILITARY DESERT COMBAT BOOTS - BEIGE/BROWN.', NULL, NULL, 'Not Dispatched', NULL, 'Princess', '0789765556', 'princesswanjiru3@gmail.com', NULL, 'Zone 1--Kenol PUS--425', NULL, NULL, '30', NULL, '15', '1', '3544.00', 'Not Available', 'Kamagambo, Thika, Kenya', 1, 0, 2, 'Wanjiru', '0', '2021-06-24 23:42:00', NULL, 0, 'Not Seen', NULL, 'Not Paid', ''),
(87, 52, '44', '1', NULL, 'Binatone BLS-360, Blender & Smoothie Maker, 1.25L - Grey', NULL, NULL, 'Not Dispatched', NULL, 'Princess', '0789765556', 'princesswanjiru3@gmail.com', NULL, 'Zone 1--Kenol PUS--425', NULL, NULL, '27', NULL, '40', '1', '3020.00', 'Not Available', 'Kamagambo, Thika, Kenya', 1, 0, 2, 'Wanjiru', '0', '2021-06-24 23:42:00', NULL, 0, 'Not Seen', '753001', 'Not Paid', ''),
(88, 52, '46', '1', NULL, 'Ramtons RF/173, 2 Door Direct Cool Fridg', NULL, NULL, 'Not Dispatched', NULL, 'Princess', '0789765556', 'princesswanjiru3@gmail.com', NULL, 'Zone 1--Kenol PUS--425', NULL, NULL, '35', NULL, '145', '35', '36395.00', 'Not Available', 'Kamagambo, Thika, Kenya', 1, 0, 2, 'Wanjiru', '0', '2021-06-24 23:42:00', NULL, 0, 'Not Seen', '759731', 'Not Paid', ''),
(89, 52, '48', '1', NULL, 'CAT Leather Shoe', NULL, NULL, 'Not Dispatched', NULL, 'Princess', '0789765556', 'princesswanjiru3@gmail.com', NULL, 'Zone 1--Kenol PUS--425', NULL, NULL, '21', NULL, '20', '1', '3221.00', 'Not Available', 'Kamagambo, Thika, Kenya', 1, 0, 2, 'Wanjiru', '0', '2021-06-24 23:42:00', NULL, 0, 'Not Seen', NULL, 'Not Paid', ''),
(90, 52, '49', '1', NULL, 'Fashion Business Men\'s English Leather Shoes', NULL, NULL, 'Not Dispatched', NULL, 'Princess', '0789765556', 'princesswanjiru3@gmail.com', NULL, 'Zone 1--Kenol PUS--425', NULL, NULL, '33', NULL, '8', '1', '2521.00', 'Not Available', 'Kamagambo, Thika, Kenya', 1, 0, 2, 'Wanjiru', '0', '2021-06-24 23:42:00', NULL, 0, 'Not Seen', NULL, 'Not Paid', ''),
(91, 52, '50', '1', NULL, 'Celebrat A18 Wireless Bluetooth Headphones', NULL, NULL, 'Not Dispatched', NULL, 'Princess', '0789765556', 'princesswanjiru3@gmail.com', NULL, 'Zone 1--Kenol PUS--425', NULL, NULL, '23', NULL, '7', '1', '3021.00', 'Not Available', 'Kamagambo, Thika, Kenya', 1, 0, 2, 'Wanjiru', '0', '2021-06-24 23:42:00', NULL, 0, 'Not Seen', NULL, 'Not Paid', ''),
(92, 52, '51', '1', NULL, 'LG 65UK6100PVA - 65', NULL, NULL, 'Not Dispatched', NULL, 'Princess', '0789765556', 'princesswanjiru3@gmail.com', NULL, 'Zone 1--Kenol PUS--425', NULL, NULL, '130', NULL, '65', '15', '216174.00', 'Not Available', 'Kamagambo, Thika, Kenya', 1, 0, 2, 'Wanjiru', '0', '2021-06-24 23:42:00', NULL, 0, 'Not Seen', NULL, 'Not Paid', ''),
(93, 52, '53', '1', NULL, 'DELL Refurbished 2110 10.1', NULL, NULL, 'Not Dispatched', NULL, 'Princess', '0789765556', 'princesswanjiru3@gmail.com', NULL, 'Zone 1--Kenol PUS--425', NULL, NULL, '35', NULL, '5', '3', '15043.00', 'Not Available', 'Kamagambo, Thika, Kenya', 1, 0, 2, 'Wanjiru', '0', '2021-06-24 23:42:00', NULL, 0, 'Not Seen', '796126', 'Not Paid', ''),
(94, 52, '54', '1', NULL, 'Generic Purism Retro Wireless Sensor Control Light Round LED', NULL, NULL, 'Not Dispatched', NULL, 'Princess', '0789765556', 'princesswanjiru3@gmail.com', NULL, 'Zone 1--Kenol PUS--425', NULL, NULL, '23', NULL, '45', '2', '2452.00', 'Not Available', 'Kamagambo, Thika, Kenya', 1, 0, 2, 'Wanjiru', '0', '2021-06-24 23:42:00', NULL, 0, 'Not Seen', '752341', 'Not Paid', ''),
(95, 52, '56', '1', NULL, 'Generic Cute Swim Turtle Wound-up Chain Clockwork Baby Kid B', NULL, NULL, 'Not Dispatched', NULL, 'Princess', '0789765556', 'princesswanjiru3@gmail.com', NULL, 'Zone 1--Kenol PUS--425', NULL, NULL, '75', NULL, '45', '8', '4598.00', 'Not Available', 'Kamagambo, Thika, Kenya', 1, 0, 2, 'Wanjiru', '0', '2021-06-24 23:42:00', NULL, 0, 'Not Seen', '752341', 'Not Paid', ''),
(96, 52, '57', '1', NULL, 'Generic Fitness Tracker Bluetooth Smart Watch - Purple', NULL, NULL, 'Not Dispatched', NULL, 'Princess', '0789765556', 'princesswanjiru3@gmail.com', NULL, 'Zone 1--Kenol PUS--425', NULL, NULL, '7', NULL, '6', '0', '1310.00', 'Not Available', 'Kamagambo, Thika, Kenya', 1, 0, 2, 'Wanjiru', '0', '2021-06-24 23:42:00', NULL, 0, 'Not Seen', '756901', 'Not Paid', ''),
(97, 52, '60', '1', NULL, 'Ingco Rotary Hammer - 1800W, 3 Drills And 2 Chisels', NULL, NULL, 'Not Dispatched', NULL, 'Princess', '0789765556', 'princesswanjiru3@gmail.com', NULL, 'Zone 1--Kenol PUS--425', NULL, NULL, '35', NULL, '18', '3', '4443.00', 'Not Available', 'Kamagambo, Thika, Kenya', 1, 0, 2, 'Wanjiru', '0', '2021-06-24 23:42:00', NULL, 0, 'Not Seen', '752341', 'Not Paid', ''),
(98, 52, '61', '1', NULL, 'Garnier Pure Active 3 In1 Charcoal Wash Scrub 150ml', NULL, NULL, 'Not Dispatched', NULL, 'Princess', '0789765556', 'princesswanjiru3@gmail.com', NULL, 'Zone 1--Kenol PUS--425', NULL, NULL, '6', NULL, '15', '0', '1610.00', 'Not Available', 'Kamagambo, Thika, Kenya', 1, 0, 2, 'Wanjiru', '0', '2021-06-24 23:42:00', NULL, 0, 'Not Seen', '752341', 'Not Paid', ''),
(99, 52, '63', '1', NULL, 'Protex Antibacterial Soap Herbal ï¿½ 150g', NULL, NULL, 'Not Dispatched', NULL, 'Princess', '0789765556', 'princesswanjiru3@gmail.com', NULL, 'Zone 1--Kenol PUS--425', NULL, NULL, '5', NULL, '2', '0', '510.00', 'Not Available', 'Kamagambo, Thika, Kenya', 1, 0, 2, 'Wanjiru', '0', '2021-06-24 23:42:00', NULL, 0, 'Not Seen', '752341', 'Not Paid', ''),
(100, 52, '64', '1', NULL, 'Fashion Men\'s Jacket Flight Suit-green', NULL, NULL, 'Not Dispatched', NULL, 'Princess', '0789765556', 'princesswanjiru3@gmail.com', NULL, 'Zone 1--Kenol PUS--425', NULL, NULL, '10', NULL, '5', '0', '1080.00', 'Not Available', 'Kamagambo, Thika, Kenya', 1, 0, 2, 'Wanjiru', '0', '2021-06-24 23:42:00', NULL, 0, 'Not Seen', '753001', 'Not Paid', ''),
(101, 52, '65', '1', NULL, 'Generic Sofa Elastic Stretch Sofa Cover 7&5 Seater(3,2,1,1)(', NULL, NULL, 'Not Dispatched', NULL, 'Princess', '0789765556', 'princesswanjiru3@gmail.com', NULL, 'Zone 1--Kenol PUS--425', NULL, NULL, '280', NULL, '60', '66', '13236.00', 'Not Available', 'Kamagambo, Thika, Kenya', 1, 0, 2, 'Wanjiru', '0', '2021-06-24 23:42:00', NULL, 0, 'Not Seen', '753001', 'Not Paid', ''),
(102, 52, '66', '1', NULL, 'Soko Maize Meal Fortified With Vitamins And Minerals - 2kg', NULL, NULL, 'Not Dispatched', NULL, 'Princess', '0789765556', 'princesswanjiru3@gmail.com', NULL, 'Zone 1--Kenol PUS--425', NULL, NULL, '32', NULL, '6', '2', '129.00', 'Not Available', 'Kamagambo, Thika, Kenya', 1, 0, 2, 'Wanjiru', '0', '2021-06-24 23:42:00', NULL, 0, 'Not Seen', '753001', 'Not Paid', ''),
(103, 52, '67', '1', NULL, 'Samsung 55 inch Samsung - 55MU7350 - UHD 4K Curved Smart LED', NULL, NULL, 'Not Dispatched', NULL, 'Princess', '0789765556', 'princesswanjiru3@gmail.com', NULL, 'Zone 1--Kenol PUS--425', NULL, NULL, '210', NULL, '95', '29', '146328.00', 'Not Available', 'Kamagambo, Thika, Kenya', 1, 0, 2, 'Wanjiru', '0', '2021-06-24 23:42:00', NULL, 0, 'Not Seen', '753001', 'Not Paid', ''),
(104, 53, '55', '1', NULL, 'Alex Warorua', NULL, NULL, 'Not Dispatched', NULL, 'Maureen', '+254793060164', 'reenyquwee@gmail.com', NULL, 'Zone 2--Kirwara PUS--240.00', NULL, NULL, '1', NULL, '1', '0', '110.00', 'Not Available', 'Kamagambo, Thika, Kenya', 1, 0, 2, 'Wangui', '0', '2021-06-25 09:59:29', NULL, 0, 'Not Seen', '753001', 'Not Paid', ''),
(105, 54, '55', '1', NULL, 'Tsavo Ticket', NULL, NULL, 'Not Dispatched', NULL, 'Maureen', '+254793060164', 'reenyquwee@gmail.com', NULL, 'Zone 2--Kirwara PUS--240.00', NULL, NULL, '1', NULL, '1', '0', '110.00', 'Not Available', 'Kamagambo, Thika, Kenya', 1, 0, 2, 'Wangui', '0', '2021-06-25 12:14:33', NULL, 0, 'Not Seen', '753001', 'Not Paid', ''),
(106, 55, '55', '1', NULL, 'Tsavo Ticket', NULL, NULL, 'Not Dispatched', NULL, 'Maureen', '+254793060164', 'reenyquwee@gmail.com', NULL, 'Zone 2--Kirwara PUS--240.00', NULL, NULL, '1', NULL, '1', '0', '110.00', 'Not Available', 'Kamagambo, Thika, Kenya', 1, 0, 2, 'Wangui', '0', '2021-06-25 12:33:21', NULL, 0, 'Not Seen', '753001', 'Not Paid', ''),
(107, 56, '55', '1', NULL, 'Tsavo Ticket', NULL, NULL, 'Not Dispatched', NULL, 'Maureen', '+254793060164', 'reenyquwee@gmail.com', NULL, 'Zone 2--Kirwara PUS--240.00', NULL, NULL, '1', NULL, '1', '0', '110.00', 'Not Available', 'Kamagambo, Thika, Kenya', 1, 0, 2, 'Wangui', '0', '2021-06-25 13:12:10', NULL, 0, 'Not Seen', '753001', 'Not Paid', ''),
(108, 57, '55', '1', NULL, 'Tsavo Ticket', NULL, NULL, 'Not Dispatched', NULL, 'Maureen', '+254793060164', 'reenyquwee@gmail.com', NULL, 'Zone 2--Kirwara PUS--240.00', NULL, NULL, '1', NULL, '1', '0', '110.00', 'Not Available', 'Kamagambo, Thika, Kenya', 1, 0, 2, 'Wangui', '0', '2021-06-25 13:17:56', NULL, 0, 'Not Seen', '753001', 'Not Paid', ''),
(109, 58, '55', '1', NULL, 'Tsavo Ticket', NULL, NULL, 'Not Dispatched', NULL, 'Maureen', '+254793060164', 'reenyquwee@gmail.com', NULL, 'Zone 2--Kirwara PUS--240.00', NULL, NULL, '1', NULL, '1', '0', '110.00', 'Not Available', 'Kamagambo, Thika, Kenya', 1, 0, 2, 'Wangui', '0', '2021-06-25 16:55:07', NULL, 0, 'Not Seen', '753001', 'Not Paid', ''),
(110, 59, '55', '1', NULL, 'Tsavo Ticket', NULL, NULL, 'Not Dispatched', NULL, 'Maureen', '+254793060164', 'reenyquwee@gmail.com', NULL, 'Zone 2--Kirwara PUS--240.00', NULL, NULL, '1', NULL, '1', '0', '110.00', 'Not Available', 'Kamagambo, Thika, Kenya', 1, 0, 2, 'Wangui', '0', '2021-06-25 22:58:08', NULL, 0, 'Not Seen', NULL, 'Not Paid', ''),
(111, 60, '55', '1', NULL, '', NULL, NULL, 'Not Dispatched', NULL, 'Ruth', '0727828772', 'njewacyber@gmail.com', NULL, '', NULL, NULL, '1', NULL, '1', '0', '110.00', 'Not Available', 'Thika Road, Nairobi, Kenya', 1, 0, 2, 'Njeri', '0', '2021-06-26 11:05:07', NULL, 0, 'Not Seen', NULL, 'Not Paid', ''),
(112, 60, '59', '1', NULL, 'Tsavo VIP Ticket', NULL, NULL, 'Not Dispatched', NULL, 'Ruth', '0727828772', 'njewacyber@gmail.com', NULL, 'zone 2--Thika Main PUS--0', NULL, NULL, '35', NULL, '20', '0', '210.00', 'Not Available', 'Thika Road, Nairobi, Kenya', 1, 0, 2, 'Njeri', '0', '2021-06-26 11:05:07', NULL, 0, 'Not Seen', NULL, 'Not Paid', ''),
(113, 61, '59', '1', NULL, 'Tsavo VIP Ticket', NULL, NULL, 'Not Dispatched', NULL, 'Maureen', '+254793060164', 'reenyquwee@gmail.com', NULL, 'Zone 2--Kirwara PUS--240.00', NULL, NULL, '35', NULL, '20', '0', '210.00', 'Not Available', 'Kamagambo, Thika, Kenya', 1, 0, 2, 'Wangui', '0', '2021-06-26 19:19:57', NULL, 0, 'Not Seen', NULL, 'Not Paid', ''),
(114, 62, '59', '1', NULL, 'Tsavo VIP Ticket', NULL, NULL, 'Not Dispatched', NULL, 'Maureen', '+254793060164', 'reenyquwee@gmail.com', NULL, 'Zone 2--Kirwara PUS--240.00', NULL, NULL, '35', NULL, '20', '0', '210.00', 'Not Available', 'Kamagambo, Thika, Kenya', 1, 0, 2, 'Wangui', '0', '2021-06-26 19:23:02', NULL, 0, 'Not Seen', NULL, 'Not Paid', ''),
(115, 63, '59', '1', NULL, 'Tsavo VIP Ticket', NULL, NULL, 'Not Dispatched', NULL, 'Maureen', '+254793060164', 'reenyquwee@gmail.com', NULL, 'Zone 2--Kirwara PUS--240.00', NULL, NULL, '35', NULL, '20', '0', '210.00', 'Not Available', 'Kamagambo, Thika, Kenya', 1, 0, 2, 'Wangui', '0', '2021-06-26 19:26:17', NULL, 1, 'Not Seen', NULL, 'Not Paid', ''),
(116, 64, '59', '1', NULL, 'Tsavo VIP Ticket', NULL, NULL, 'Not Dispatched', NULL, 'Maureen', '+254793060164', 'reenyquwee@gmail.com', NULL, 'Zone 2--Kirwara PUS--240.00', NULL, NULL, '35', NULL, '20', '0', '210.00', 'Not Available', 'Kamagambo, Thika, Kenya', 1, 0, 2, 'Wangui', '0', '2021-06-26 19:30:13', NULL, 1, 'Not Seen', NULL, 'Not Paid', ''),
(117, 65, '59', '1', NULL, 'Tsavo VIP Ticket', NULL, NULL, 'Not Dispatched', NULL, 'Maureen', '+254793060164', 'reenyquwee@gmail.com', NULL, 'Zone 2--Kirwara PUS--240.00', NULL, NULL, '35', NULL, '20', '0', '210.00', 'Not Available', 'Kamagambo, Thika, Kenya', 1, 0, 2, 'Wangui', '0', '2021-06-26 21:16:05', NULL, 1, 'Not Seen', NULL, 'Not Paid', ''),
(118, 66, '59', '1', NULL, 'Tsavo VIP Ticket', NULL, NULL, 'Not Dispatched', NULL, 'Maureen', '+254793060164', 'reenyquwee@gmail.com', NULL, 'Zone 2--Kirwara PUS--240.00', NULL, NULL, '35', NULL, '20', '0', '210.00', 'Not Available', 'Kamagambo, Thika, Kenya', 1, 0, 2, 'Wangui', '0', '2021-06-26 21:21:09', NULL, 1, 'Not Seen', NULL, 'Not Paid', ''),
(119, 67, '59', '1', NULL, 'Tsavo VIP Ticket', NULL, NULL, 'Not Dispatched', NULL, 'Maureen', '+254793060164', 'reenyquwee@gmail.com', NULL, 'Zone 2--Kirwara PUS--240.00', NULL, NULL, '35', NULL, '20', '0', '210.00', 'Not Available', 'Kamagambo, Thika, Kenya', 1, 0, 2, 'Wangui', '0', '2021-06-26 21:26:52', NULL, 1, 'Not Seen', NULL, 'Not Paid', ''),
(129, 77, '55', '3', NULL, 'Tsavo Ticket', NULL, NULL, 'Not Dispatched', NULL, 'Maureen', '793060164', 'reenyquwee@gmail.com', NULL, 'Zone 2--Kirwara PUS--240.00', NULL, NULL, '1', NULL, '1', '0', '110.00', 'Not Available', 'Kamagambo, Thika, Kenya', 1, 0, 2, 'Wangui', '0', '2021-06-29 20:41:20', NULL, 1, 'Not Seen', '796126', 'Not Paid', ''),
(130, 78, '57', '1', NULL, 'Generic Fitness Tracker Bluetooth Smart Watch - Purple', NULL, NULL, 'Not Dispatched', NULL, 'Maureen', '793060164', 'reenyquwee@gmail.com', NULL, 'Kenol PUS', NULL, NULL, '7', NULL, '6', '0', '1310.00', 'Not Available', 'Kamagambo, Thika, Kenya', 1, 0, 2, 'Wangui', '0', '2021-06-30 20:42:41', NULL, 1, 'Not Seen', '796126', 'Not Paid', ''),
(131, 79, '57', '1', NULL, 'Generic Fitness Tracker Bluetooth Smart Watch - Purple', NULL, NULL, 'Not Dispatched', NULL, 'Dennis', '745025031', 'youngboyd254@gmail.com', NULL, 'Delivery Point not set', NULL, NULL, '7', NULL, '6', '0', '1310.00', 'Not Available', '196', 1, 0, 2, 'Njuguna', '0', '2021-06-30 21:38:36', NULL, 1, 'Not Seen', '796126', 'Not Paid', ''),
(133, 81, '46', '1', NULL, '', NULL, NULL, 'Not Dispatched', NULL, 'Maureen', '793060164', 'reenyquwee@gmail.com', NULL, '', NULL, NULL, '35', NULL, '145', '35', '36395.00', 'Not Available', 'Kamagambo, Thika, Kenya', 1, 0, 2, 'Wangui', '0', '2021-07-01 13:29:10', NULL, 1, 'Not Seen', '868966', 'Not Paid', ''),
(136, 83, '68', '1', NULL, '', NULL, NULL, 'Not Dispatched', NULL, 'Maureen', '793060164', 'reenyquwee@gmail.com', NULL, '', NULL, NULL, '10', NULL, '5', '100', '210.00', 'Not Available', 'Kamagambo, Thika, Kenya', 1, 0, 2, 'Wangui', '0', '2021-07-10 10:03:29', NULL, 0, 'Not Seen', '868966', 'Not Paid', ''),
(137, 84, '59', '1', NULL, '', NULL, NULL, 'Not Dispatched', NULL, 'Maureen', '793060164', 'reenyquwee@gmail.com', NULL, '', NULL, NULL, '35', NULL, '20', '0', '210.00', 'Not Available', 'Kamagambo, Thika, Kenya', 1, 0, 2, 'Wangui', '0', '2021-08-03 17:43:08', NULL, 0, 'Not Seen', '868966', 'Not Paid', ''),
(138, 89, '45', '1', NULL, 'TCL 32', NULL, NULL, 'Not Dispatched', NULL, 'Maureen', '793060164', 'reenyquwee@gmail.com', NULL, 'Kenol PUS', NULL, NULL, '112', NULL, '56', '4', '18000.00', 'Not Available', 'Kamagambo, Thika, Kenya', 1, 0, 2, 'Wangui', '0', '2021-08-06 18:39:20', NULL, 0, 'Not Seen', '868966', 'Not Paid', '5'),
(139, 91, '45', '1', NULL, 'TCL 32', NULL, NULL, 'Not Dispatched', NULL, 'Maureen', '793060164', 'reenyquwee@gmail.com', NULL, 'Kenol PUS', NULL, NULL, '112', NULL, '56', '4', '18000.00', 'Not Available', 'Kamagambo, Thika, Kenya', 1, 0, 2, 'Wangui', '0', '2021-08-06 18:42:23', NULL, 0, 'Not Seen', '868966', 'Not Paid', '5'),
(140, 94, '45', '1', NULL, 'TCL 32', NULL, NULL, 'Not Dispatched', NULL, 'Maureen', '793060164', 'reenyquwee@gmail.com', NULL, 'Kenol PUS', NULL, NULL, '112', NULL, '56', '4', '18000.00', 'Not Available', 'Kamagambo, Thika, Kenya', 1, 0, 2, 'Wangui', '0', '2021-08-06 19:03:57', NULL, 1, 'Not Seen', '868966', 'Not Paid', '52 Inch'),
(141, 95, '45', '2', NULL, 'TCL 32', NULL, '45', 'Not Dispatched', '95', 'Maureen', '793060164', 'reenyquwee@gmail.com', NULL, 'Kenol PUS', '9/7/2021/9/7/2021 02:18:20 am', 'warorua_alex', '112', NULL, '56', '4', '18000.00', 'REF1630970300', 'Kamagambo, Thika, Kenya', NULL, NULL, NULL, 'Wangui', '4', '2021-09-06 22:57:52', '45', 1, 'Seen', '868966', 'Not Paid', '52 Inch'),
(142, 96, '45', '2', NULL, 'TCL 32', NULL, '45', 'Item Dispatched', '96', 'Maureen', '793060164', 'reenyquwee@gmail.com', NULL, 'Kenol PUS', '10/18/2021/10/18/2021 02:35:24 am', 'warorua_alex', '112', '', '56', '4', '1805400', 'REF1634513724', 'Kenol PUS', 1622146826, 1621964099, 2, 'Wangui', '2', '2021-10-17 23:24:53', '45', 1, 'Seen', '883024', 'Not Paid', '24 Inch'),
(143, 97, '45', '1', NULL, 'TCL 32 FULL HD ANDROID TV 32S65A FRAMELESS PLUS WALL BRACKET', NULL, NULL, 'Not Dispatched', NULL, 'Maureen', '793060164', 'reenyquwee@gmail.com', NULL, 'Kenol PUS', NULL, NULL, '112', NULL, '56', '4', '18000.00', 'Not Available', 'Kamagambo, Thika, Kenya', 1, 0, 2, 'Wangui', '0', '2021-10-21 21:03:01', NULL, 1, 'Not Seen', NULL, 'Not Paid', '32 Inch'),
(144, 98, '45', '1', NULL, 'TCL 32 FULL HD ANDROID TV 32S65A FRAMELESS PLUS WALL BRACKET', NULL, NULL, 'Not Dispatched', NULL, 'Maureen', '793060164', 'reenyquwee@gmail.com', NULL, 'Kenol PUS', NULL, NULL, '112', NULL, '56', '4', '20500.00', 'Not Available', 'Kamagambo, Thika, Kenya', 1, 0, 2, 'Wangui', '0', '2021-10-21 21:32:41', NULL, 1, 'Not Seen', NULL, 'Not Paid', '32 Inch');

-- --------------------------------------------------------

--
-- Table structure for table `drop_off`
--

CREATE TABLE `drop_off` (
  `id` int(10) UNSIGNED NOT NULL,
  `point_name` varchar(40) NOT NULL,
  `location` text DEFAULT NULL,
  `licence` varchar(40) NOT NULL,
  `packages_accepted` text NOT NULL,
  `operating_licence` varchar(40) NOT NULL,
  `station_email` varchar(40) DEFAULT NULL,
  `station_photo` varchar(40) NOT NULL,
  `station_contact` varchar(40) NOT NULL,
  `agent_incharge` varchar(40) NOT NULL,
  `agent_id` varchar(40) DEFAULT NULL,
  `station_reg_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `drop_off`
--

INSERT INTO `drop_off` (`id`, `point_name`, `location`, `licence`, `packages_accepted`, `operating_licence`, `station_email`, `station_photo`, `station_contact`, `agent_incharge`, `agent_id`, `station_reg_date`) VALUES
(1, 'Njewa Cyber Drop Off Point (MKU)', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15956.48946704698!2d37.1823434!3d-1.0701817!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9a749db050591cac!2sSt.%20Albans%20School%2C%20Th', '0a77c43604cb97195.pdf', 'Small, Medium, Large', '2bd32931e94830bfe.txt', 'sales@tsavo.store', '6f7088cab52c40673.png', '0716912002', 'Alex Warorua', '39290974', '2021-05-31');

-- --------------------------------------------------------

--
-- Table structure for table `female_dresses`
--

CREATE TABLE `female_dresses` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  `cat_slug` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `female_pants`
--

CREATE TABLE `female_pants` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  `cat_slug` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `female_shoes`
--

CREATE TABLE `female_shoes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  `cat_slug` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `female_skirts`
--

CREATE TABLE `female_skirts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  `cat_slug` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `followers`
--

CREATE TABLE `followers` (
  `likeid` int(11) NOT NULL,
  `vendorid` varchar(40) NOT NULL,
  `userid` int(11) NOT NULL,
  `f_fname` varchar(40) DEFAULT NULL,
  `follow_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `followers`
--

INSERT INTO `followers` (`likeid`, `vendorid`, `userid`, `f_fname`, `follow_date`) VALUES
(209, '5', 1, NULL, NULL),
(210, '3', 1, NULL, NULL),
(211, '3', 1, NULL, NULL),
(223, '1', 37, NULL, NULL),
(230, 'TS1621988947', 95, NULL, NULL),
(231, 'tsavoshop', 95, NULL, NULL),
(233, 'tsavoshop', 114, NULL, NULL),
(234, 'TS1621988947', 9, NULL, NULL),
(235, 'TS1621988947', 118, NULL, NULL),
(236, 'TS1621988947', 123, NULL, NULL),
(238, 'TS1621988947', 124, NULL, NULL),
(239, 'ID3251789824', 95, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `how_to_agent`
--

CREATE TABLE `how_to_agent` (
  `id` int(10) UNSIGNED NOT NULL,
  `how_to_1` varchar(40) DEFAULT NULL,
  `how_to_2` varchar(40) DEFAULT NULL,
  `how_to_3` varchar(40) DEFAULT NULL,
  `how_to_4` varchar(40) DEFAULT NULL,
  `how_to_5` varchar(40) DEFAULT NULL,
  `how_to_6` varchar(40) DEFAULT NULL,
  `how_to_7` varchar(40) DEFAULT NULL,
  `how_to_8` varchar(40) DEFAULT NULL,
  `how_to_9` varchar(40) DEFAULT NULL,
  `how_to_10` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `how_to_agent`
--

INSERT INTO `how_to_agent` (`id`, `how_to_1`, `how_to_2`, `how_to_3`, `how_to_4`, `how_to_5`, `how_to_6`, `how_to_7`, `how_to_8`, `how_to_9`, `how_to_10`) VALUES
(1, 'https://youtu.be/k5pQSlJ6tog', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `how_to_vendor`
--

CREATE TABLE `how_to_vendor` (
  `id` int(10) UNSIGNED NOT NULL,
  `how_to_1` varchar(40) DEFAULT NULL,
  `how_to_2` varchar(40) DEFAULT NULL,
  `how_to_3` varchar(40) DEFAULT NULL,
  `how_to_4` varchar(40) DEFAULT NULL,
  `how_to_5` varchar(40) DEFAULT NULL,
  `how_to_6` varchar(40) DEFAULT NULL,
  `how_to_7` varchar(40) DEFAULT NULL,
  `how_to_8` varchar(40) DEFAULT NULL,
  `how_to_9` varchar(40) DEFAULT NULL,
  `how_to_10` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `how_to_vendor`
--

INSERT INTO `how_to_vendor` (`id`, `how_to_1`, `how_to_2`, `how_to_3`, `how_to_4`, `how_to_5`, `how_to_6`, `how_to_7`, `how_to_8`, `how_to_9`, `how_to_10`) VALUES
(1, 'https://youtu.be/k5pQSlJ6tog', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `item_rating`
--

CREATE TABLE `item_rating` (
  `ratingId` int(11) NOT NULL,
  `itemId` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `userId` int(11) NOT NULL,
  `ratingNumber` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comments` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 = Block, 0 = Unblock',
  `rater_name` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `item_rating`
--

INSERT INTO `item_rating` (`ratingId`, `itemId`, `userId`, `ratingNumber`, `title`, `comments`, `created`, `modified`, `status`, `rater_name`) VALUES
(14, '12345678', 1, 2, 'its awesome', 'It\'s awesome!!!', '2018-08-19 09:13:01', '2018-08-19 09:13:01', 1, NULL),
(27, 'P1620393830', 37, 3, 'Its good though for somebody buying lots of goods', 'P1620393830', '2021-05-20 11:41:50', '2021-05-20 11:41:50', 1, NULL),
(30, '00000', 37, 5, 'Beautiful experience', 'just passing by ;)', '2021-05-21 03:10:13', '2021-05-21 03:10:13', 1, NULL),
(31, '00000', 95, 5, 'Beautiful experience', 'A wonderful upcoming company. Keep it up', '2021-06-21 20:06:13', '2021-06-21 20:06:13', 1, NULL),
(32, '00000', 114, 5, 'Its good though not so helpful', 'hjik', '2021-06-21 20:19:26', '2021-06-21 20:19:26', 1, NULL),
(33, '1618562798', 118, 5, 'the best', 'it was cheap', '2021-06-23 11:57:14', '2021-06-23 11:57:14', 1, NULL),
(34, 'P1620393830', 124, 1, 'Wonderful', 'I think its a good step ur taking. Congrats', '2021-06-26 11:03:29', '2021-06-26 11:03:29', 1, NULL),
(35, 'generic-fitness-tracker-bluetooth-smart-', 128, 5, 'Dennis', 'Pure product thenks tsavo', '2021-06-30 21:25:34', '2021-06-30 21:25:34', 1, NULL),
(36, 'P1620393830', 95, 5, 'keep Moving...', 'Tsavo marketplace. Wooow!', '2021-07-09 01:52:41', '2021-07-09 01:52:41', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `last_viewed`
--

CREATE TABLE `last_viewed` (
  `id` int(40) NOT NULL,
  `user_id` int(40) NOT NULL,
  `product_id` int(40) NOT NULL,
  `time_viewed` int(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `last_viewed`
--

INSERT INTO `last_viewed` (`id`, `user_id`, `product_id`, `time_viewed`) VALUES
(1622516680, 95, 50, 1625335404),
(1622548098, 95, 59, 1625784761),
(1622550352, 95, 60, 1625335437),
(1622551135, 9, 52, 1624576203),
(1622551219, 9, 60, 1625335437),
(1622563456, 95, 56, 1622563456),
(1622569645, 9, 59, 1625784761),
(1622926727, 95, 51, 1634512653),
(1624148230, 95, 55, 1624841801),
(1624306642, 114, 55, 1624841801),
(1624445153, 118, 55, 1624841801),
(1624446703, 118, 45, 1634851847),
(1624446729, 118, 67, 1624454152),
(1624449578, 118, 54, 1624449694),
(1624449712, 118, 59, 1625784761),
(1624450429, 123, 55, 1624841801),
(1624450945, 118, 44, 1624450945),
(1624451104, 118, 50, 1625335404),
(1624451173, 118, 57, 1625136260),
(1624454003, 118, 51, 1634512653),
(1624460546, 118, 65, 1624460624),
(1624552337, 95, 52, 1624576203),
(1624555887, 95, 45, 1634851847),
(1624562674, 37, 45, 1634851847),
(1624563115, 37, 55, 1624841801),
(1624570407, 123, 45, 1634851847),
(1624570604, 123, 59, 1625784761),
(1624576032, 123, 62, 1624576108),
(1624576124, 123, 52, 1624576203),
(1624576497, 123, 47, 1624576497),
(1624576542, 123, 44, 1624576542),
(1624576570, 123, 46, 1624576570),
(1624576622, 123, 48, 1624576622),
(1624576743, 123, 49, 1624576743),
(1624576808, 123, 50, 1625335404),
(1624576880, 123, 51, 1634512653),
(1624576959, 123, 53, 1624576959),
(1624577079, 123, 54, 1624577079),
(1624577115, 123, 56, 1624577115),
(1624577176, 123, 57, 1625136260),
(1624577286, 123, 60, 1625335437),
(1624577344, 123, 61, 1624577344),
(1624577410, 123, 63, 1624577410),
(1624577495, 123, 64, 1624577495),
(1624577587, 123, 65, 1624577587),
(1624577660, 123, 66, 1624577660),
(1624577729, 123, 67, 1624577729),
(1624705283, 124, 52, 1624705283),
(1624705352, 124, 59, 1625784761),
(1624793609, 126, 59, 1625784761),
(1625085433, 95, 57, 1625136260),
(1625087958, 128, 66, 1625087958),
(1625087995, 128, 57, 1625136260),
(1625088018, 128, 49, 1625088018),
(1625173823, 115, 59, 1625784761),
(1625333520, 137, 50, 1625335404),
(1625334185, 137, 60, 1625335437),
(1625335471, 137, 52, 1625335471),
(1625572041, 138, 51, 1634512653),
(1625572071, 138, 45, 1634851847),
(1628012812, 95, 68, 1628012812);

-- --------------------------------------------------------

--
-- Table structure for table `male_pants`
--

CREATE TABLE `male_pants` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  `cat_slug` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `male_shirts`
--

CREATE TABLE `male_shirts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  `cat_slug` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `male_shoes`
--

CREATE TABLE `male_shoes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  `cat_slug` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `male_shoes`
--

INSERT INTO `male_shoes` (`id`, `name`, `cat_slug`) VALUES
(1, 'Male Shoe 31', '31'),
(2, 'Male Shoe 32', '32'),
(3, 'Male Shoe 33', '33'),
(4, 'Male Shoe 34', '34');

-- --------------------------------------------------------

--
-- Table structure for table `membership_cache`
--

CREATE TABLE `membership_cache` (
  `request` varchar(100) NOT NULL,
  `request_ts` int(11) DEFAULT NULL,
  `response` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `membership_cache`
--

INSERT INTO `membership_cache` (`request`, `request_ts`, `response`) VALUES
('6840ca2b6273f6e93fb7c1471d34a307', 1619872190, '{\"title\":\"Step by step Guide on How to Start Selling on Jumia| Step 1-Create Your Store on Jumia\",\"author_name\":\"Jane Njambi\",\"author_url\":\"https://www.youtube.com/channel/UCEVinLt7inDYDJzjGILzF_Q\",\"type\":\"video\",\"height\":113,\"width\":200,\"version\":\"1.0\",\"provider_name\":\"YouTube\",\"provider_url\":\"https://www.youtube.com/\",\"thumbnail_height\":360,\"thumbnail_width\":480,\"thumbnail_url\":\"https://i.ytimg.com/vi/k5pQSlJ6tog/hqdefault.jpg\",\"html\":\"\\u003ciframe width=\\u0022200\\u0022 height=\\u0022113\\u0022 src=\\u0022https://www.youtube.com/embed/k5pQSlJ6tog?feature=oembed\\u0022 frameborder=\\u00220\\u0022 allow=\\u0022accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\\u0022 allowfullscreen\\u003e\\u003c/iframe\\u003e\"}'),
('b3ce8cc0e1cd6afcc19a67889c6b95c9', 1619872760, '{\"title\":\"Step by step Guide on How to Start Selling on Jumia| Step 1-Create Your Store on Jumia\",\"author_name\":\"Jane Njambi\",\"author_url\":\"https://www.youtube.com/channel/UCEVinLt7inDYDJzjGILzF_Q\",\"type\":\"video\",\"height\":113,\"width\":200,\"version\":\"1.0\",\"provider_name\":\"YouTube\",\"provider_url\":\"https://www.youtube.com/\",\"thumbnail_height\":360,\"thumbnail_width\":480,\"thumbnail_url\":\"https://i.ytimg.com/vi/k5pQSlJ6tog/hqdefault.jpg\",\"html\":\"\\u003ciframe width=\\u0022200\\u0022 height=\\u0022113\\u0022 src=\\u0022https://www.youtube.com/embed/k5pQSlJ6tog?feature=oembed\\u0022 frameborder=\\u00220\\u0022 allow=\\u0022accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\\u0022 allowfullscreen\\u003e\\u003c/iframe\\u003e\"}'),
('e8508730cb43c6a6b45899e2f5ec3d7f', 1619872746, '{\"title\":\"Step by step Guide on How to Start Selling on Jumia| Step 1-Create Your Store on Jumia\",\"author_name\":\"Jane Njambi\",\"author_url\":\"https://www.youtube.com/channel/UCEVinLt7inDYDJzjGILzF_Q\",\"type\":\"video\",\"height\":113,\"width\":200,\"version\":\"1.0\",\"provider_name\":\"YouTube\",\"provider_url\":\"https://www.youtube.com/\",\"thumbnail_height\":360,\"thumbnail_width\":480,\"thumbnail_url\":\"https://i.ytimg.com/vi/k5pQSlJ6tog/hqdefault.jpg\",\"html\":\"\\u003ciframe width=\\u0022200\\u0022 height=\\u0022113\\u0022 src=\\u0022https://www.youtube.com/embed/k5pQSlJ6tog?feature=oembed\\u0022 frameborder=\\u00220\\u0022 allow=\\u0022accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\\u0022 allowfullscreen\\u003e\\u003c/iframe\\u003e\"}');

-- --------------------------------------------------------

--
-- Table structure for table `membership_grouppermissions`
--

CREATE TABLE `membership_grouppermissions` (
  `permissionID` int(10) UNSIGNED NOT NULL,
  `groupID` int(10) UNSIGNED DEFAULT NULL,
  `tableName` varchar(100) DEFAULT NULL,
  `allowInsert` tinyint(4) NOT NULL DEFAULT 0,
  `allowView` tinyint(4) NOT NULL DEFAULT 0,
  `allowEdit` tinyint(4) NOT NULL DEFAULT 0,
  `allowDelete` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `membership_grouppermissions`
--

INSERT INTO `membership_grouppermissions` (`permissionID`, `groupID`, `tableName`, `allowInsert`, `allowView`, `allowEdit`, `allowDelete`) VALUES
(1, 2, 'sales', 1, 3, 3, 3),
(2, 2, 'banner', 1, 3, 3, 3),
(3, 2, 'cart', 1, 3, 3, 3),
(4, 2, 'category', 1, 3, 3, 3),
(5, 2, 'chatting', 1, 3, 3, 3),
(6, 2, 'details', 1, 3, 3, 3),
(7, 2, 'products', 1, 3, 3, 3),
(8, 2, 'ship', 1, 3, 3, 3),
(9, 2, 'supplier', 1, 3, 3, 3),
(10, 2, 'type', 1, 3, 3, 3),
(11, 2, 'users', 1, 3, 3, 3),
(50, 2, 'stock', 1, 3, 3, 3),
(57, 2, 'agent', 1, 3, 3, 3),
(65, 2, 'male_shoes', 1, 3, 3, 3),
(66, 2, 'male_pants', 1, 3, 3, 3),
(67, 2, 'male_shirts', 1, 3, 3, 3),
(68, 2, 'female_shoes', 1, 3, 3, 3),
(69, 2, 'female_dresses', 1, 3, 3, 3),
(70, 2, 'female_skirts', 1, 3, 3, 3),
(71, 2, 'female_pants', 1, 3, 3, 3),
(101, 2, 'branches', 1, 3, 3, 3),
(150, 2, 'agent_monitor', 1, 3, 3, 3),
(644, 2, 'coupon', 1, 3, 3, 3),
(717, 2, 'parcels', 1, 3, 3, 3),
(737, 2, 'test', 1, 3, 3, 3),
(1092, 2, 'drop_off', 1, 3, 3, 3),
(1093, 2, 'how_to_vendor', 1, 3, 3, 3),
(1094, 2, 'how_to_agent', 1, 3, 3, 3),
(1227, 2, 'message', 1, 3, 3, 3),
(1412, 2, 'sales_monitor', 1, 3, 3, 3),
(1847, 2, 'system_setting', 1, 3, 3, 3),
(1848, 2, 'dash_cat', 1, 3, 3, 3),
(2261, 2, 'wishlist', 1, 3, 3, 3),
(2262, 2, 'sub_cat', 1, 3, 3, 3),
(2263, 2, 'item_rating', 1, 3, 3, 3),
(2318, 2, 'followers', 1, 3, 3, 3),
(2431, 31, 'sales', 0, 0, 0, 0),
(2432, 31, 'products', 0, 0, 0, 0),
(2433, 31, 'category', 0, 0, 0, 0),
(2434, 31, 'supplier', 0, 0, 0, 0),
(2435, 31, 'users', 0, 0, 0, 0),
(2436, 31, 'stock', 0, 0, 0, 0),
(2437, 31, 'agent', 0, 0, 0, 0),
(2438, 31, 'male_shoes', 0, 0, 0, 0),
(2439, 31, 'male_pants', 0, 0, 0, 0),
(2440, 31, 'male_shirts', 0, 0, 0, 0),
(2441, 31, 'female_shoes', 0, 0, 0, 0),
(2442, 31, 'female_dresses', 0, 0, 0, 0),
(2443, 31, 'female_skirts', 0, 0, 0, 0),
(2444, 31, 'female_pants', 0, 0, 0, 0),
(2445, 31, 'details', 0, 3, 3, 0),
(2446, 31, 'branches', 0, 0, 0, 0),
(2447, 31, 'agent_monitor', 1, 3, 1, 0),
(2448, 31, 'coupon', 0, 0, 0, 0),
(2449, 31, 'cart', 0, 0, 0, 0),
(2450, 31, 'drop_off', 0, 0, 0, 0),
(2451, 31, 'how_to_vendor', 0, 0, 0, 0),
(2452, 31, 'how_to_agent', 0, 0, 0, 0),
(2453, 31, 'message', 0, 0, 0, 0),
(2454, 31, 'sales_monitor', 0, 0, 0, 0),
(2455, 31, 'wishlist', 0, 0, 0, 0),
(2456, 31, 'sub_cat', 0, 0, 0, 0),
(2457, 31, 'item_rating', 0, 0, 0, 0),
(2458, 31, 'followers', 0, 0, 0, 0),
(2711, 2, 'sub_cat_2', 1, 3, 3, 3),
(3732, 84, 'sales', 0, 0, 0, 0),
(3733, 84, 'products', 0, 1, 1, 1),
(3734, 84, 'category', 0, 0, 0, 0),
(3735, 84, 'supplier', 0, 1, 1, 0),
(3736, 84, 'users', 0, 0, 0, 0),
(3737, 84, 'stock', 0, 0, 0, 0),
(3738, 84, 'agent', 0, 0, 0, 0),
(3739, 84, 'male_shoes', 0, 0, 0, 0),
(3740, 84, 'male_pants', 0, 0, 0, 0),
(3741, 84, 'male_shirts', 0, 0, 0, 0),
(3742, 84, 'female_shoes', 0, 0, 0, 0),
(3743, 84, 'female_dresses', 0, 0, 0, 0),
(3744, 84, 'female_skirts', 0, 0, 0, 0),
(3745, 84, 'female_pants', 0, 0, 0, 0),
(3746, 84, 'details', 0, 1, 1, 0),
(3747, 84, 'branches', 0, 0, 0, 0),
(3748, 84, 'agent_monitor', 0, 0, 0, 0),
(3749, 84, 'coupon', 0, 0, 0, 0),
(3750, 84, 'cart', 0, 0, 0, 0),
(3751, 84, 'drop_off', 0, 0, 0, 0),
(3752, 84, 'how_to_vendor', 0, 3, 0, 0),
(3753, 84, 'how_to_agent', 0, 0, 0, 0),
(3754, 84, 'message', 0, 0, 0, 0),
(3755, 84, 'sales_monitor', 0, 1, 0, 0),
(3756, 84, 'wishlist', 0, 1, 1, 0),
(3757, 84, 'sub_cat', 0, 0, 0, 0),
(3758, 84, 'item_rating', 0, 1, 1, 0),
(3759, 84, 'followers', 0, 1, 0, 0),
(3760, 84, 'sub_cat_2', 0, 0, 0, 0),
(7282, 2, 'staff', 1, 3, 3, 3),
(7283, 2, 'board_member', 1, 3, 3, 3),
(7284, 2, 'about_us', 1, 3, 3, 3),
(7285, 2, 'privacy_policy', 1, 3, 3, 3),
(7286, 2, 'terms_conditions', 1, 3, 3, 3),
(7287, 2, 'return_policy', 1, 3, 3, 3),
(9130, 767, 'sales', 0, 0, 0, 0),
(9131, 767, 'products', 0, 0, 0, 0),
(9132, 767, 'category', 0, 0, 0, 0),
(9133, 767, 'supplier', 0, 0, 0, 0),
(9134, 767, 'users', 0, 0, 0, 0),
(9135, 767, 'stock', 0, 0, 0, 0),
(9136, 767, 'agent', 0, 0, 0, 0),
(9137, 767, 'male_shoes', 0, 0, 0, 0),
(9138, 767, 'male_pants', 0, 0, 0, 0),
(9139, 767, 'male_shirts', 0, 0, 0, 0),
(9140, 767, 'female_shoes', 0, 0, 0, 0),
(9141, 767, 'female_dresses', 0, 0, 0, 0),
(9142, 767, 'female_skirts', 0, 0, 0, 0),
(9143, 767, 'female_pants', 0, 0, 0, 0),
(9144, 767, 'details', 0, 0, 0, 0),
(9145, 767, 'branches', 0, 0, 0, 0),
(9146, 767, 'agent_monitor', 0, 0, 0, 0),
(9147, 767, 'coupon', 0, 0, 0, 0),
(9148, 767, 'cart', 0, 0, 0, 0),
(9149, 767, 'drop_off', 0, 0, 0, 0),
(9150, 767, 'how_to_vendor', 0, 0, 0, 0),
(9151, 767, 'how_to_agent', 0, 0, 0, 0),
(9152, 767, 'message', 0, 0, 0, 0),
(9153, 767, 'sales_monitor', 0, 0, 0, 0),
(9154, 767, 'wishlist', 0, 0, 0, 0),
(9155, 767, 'sub_cat', 0, 0, 0, 0),
(9156, 767, 'item_rating', 0, 0, 0, 0),
(9157, 767, 'followers', 0, 0, 0, 0),
(9158, 767, 'sub_cat_2', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `membership_groups`
--

CREATE TABLE `membership_groups` (
  `groupID` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `allowSignup` tinyint(4) DEFAULT NULL,
  `needsApproval` tinyint(4) DEFAULT NULL,
  `allowCSVImport` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `membership_groups`
--

INSERT INTO `membership_groups` (`groupID`, `name`, `description`, `allowSignup`, `needsApproval`, `allowCSVImport`) VALUES
(1, 'anonymous', 'Anonymous group created automatically on 2021-04-10', 0, 0, 0),
(2, 'Admins', 'Admin group created automatically on 2021-04-10', 0, 1, 0),
(31, 'Zone 1 Agent', 'Agents posted in the Zone 1 Region', 0, 1, 0),
(84, 'Tsavo Vendor', 'Vendors selling different product on the Tsavo platform', 1, 1, 0),
(767, 'Tsavo Developer', '', 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `membership_userpermissions`
--

CREATE TABLE `membership_userpermissions` (
  `permissionID` int(10) UNSIGNED NOT NULL,
  `memberID` varchar(100) NOT NULL,
  `tableName` varchar(100) DEFAULT NULL,
  `allowInsert` tinyint(4) NOT NULL DEFAULT 0,
  `allowView` tinyint(4) NOT NULL DEFAULT 0,
  `allowEdit` tinyint(4) NOT NULL DEFAULT 0,
  `allowDelete` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `membership_userpermissions`
--

INSERT INTO `membership_userpermissions` (`permissionID`, `memberID`, `tableName`, `allowInsert`, `allowView`, `allowEdit`, `allowDelete`) VALUES
(1, 'vendor 1', 'sales', 0, 0, 0, 0),
(2, 'vendor 1', 'products', 0, 1, 1, 1),
(3, 'vendor 1', 'category', 0, 0, 0, 0),
(4, 'vendor 1', 'supplier', 0, 1, 1, 0),
(5, 'vendor 1', 'users', 0, 0, 0, 0),
(6, 'vendor 1', 'stock', 0, 0, 0, 0),
(7, 'vendor 1', 'agent', 0, 0, 0, 0),
(8, 'vendor 1', 'male_shoes', 0, 0, 0, 0),
(9, 'vendor 1', 'male_pants', 0, 0, 0, 0),
(10, 'vendor 1', 'male_shirts', 0, 0, 0, 0),
(11, 'vendor 1', 'female_shoes', 0, 0, 0, 0),
(12, 'vendor 1', 'female_dresses', 0, 0, 0, 0),
(13, 'vendor 1', 'female_skirts', 0, 0, 0, 0),
(14, 'vendor 1', 'female_pants', 0, 0, 0, 0),
(15, 'vendor 1', 'details', 0, 1, 1, 0),
(16, 'vendor 1', 'branches', 0, 0, 0, 0),
(17, 'vendor 1', 'agent_monitor', 0, 0, 0, 0),
(18, 'vendor 1', 'coupon', 0, 0, 0, 0),
(19, 'vendor 1', 'cart', 0, 0, 0, 0),
(20, 'vendor 1', 'drop_off', 0, 0, 0, 0),
(21, 'vendor 1', 'how_to_vendor', 0, 3, 0, 0),
(22, 'vendor 1', 'how_to_agent', 0, 0, 0, 0),
(79, 'tsavo254 mall', 'sales', 0, 0, 0, 0),
(80, 'tsavo254 mall', 'products', 1, 1, 1, 1),
(81, 'tsavo254 mall', 'category', 0, 0, 0, 0),
(82, 'tsavo254 mall', 'supplier', 0, 1, 1, 0),
(83, 'tsavo254 mall', 'users', 0, 0, 0, 0),
(84, 'tsavo254 mall', 'stock', 0, 0, 0, 0),
(85, 'tsavo254 mall', 'agent', 0, 0, 0, 0),
(86, 'tsavo254 mall', 'male_shoes', 0, 0, 0, 0),
(87, 'tsavo254 mall', 'male_pants', 0, 0, 0, 0),
(88, 'tsavo254 mall', 'male_shirts', 0, 0, 0, 0),
(89, 'tsavo254 mall', 'female_shoes', 0, 0, 0, 0),
(90, 'tsavo254 mall', 'female_dresses', 0, 0, 0, 0),
(91, 'tsavo254 mall', 'female_skirts', 0, 0, 0, 0),
(92, 'tsavo254 mall', 'female_pants', 0, 0, 0, 0),
(93, 'tsavo254 mall', 'details', 0, 0, 0, 0),
(94, 'tsavo254 mall', 'branches', 0, 0, 0, 0),
(95, 'tsavo254 mall', 'agent_monitor', 0, 0, 0, 0),
(96, 'tsavo254 mall', 'coupon', 0, 0, 0, 0),
(97, 'tsavo254 mall', 'cart', 0, 0, 0, 0),
(98, 'tsavo254 mall', 'drop_off', 0, 0, 0, 0),
(99, 'tsavo254 mall', 'how_to_vendor', 0, 0, 3, 0),
(100, 'tsavo254 mall', 'how_to_agent', 0, 0, 0, 0),
(101, 'tsavo254 mall', 'message', 0, 0, 0, 0),
(102, 'tsavo254 mall', 'sales_monitor', 0, 0, 0, 0),
(103, 'tsavo254 mall', 'wishlist', 0, 0, 0, 0),
(104, 'tsavo254 mall', 'sub_cat', 0, 0, 0, 0),
(105, 'tsavo254 mall', 'item_rating', 0, 0, 0, 0),
(106, 'tsavo254 mall', 'followers', 0, 0, 0, 0),
(107, 'tsavo254 mall', 'sub_cat_2', 0, 0, 0, 0),
(166, 'cyrus developer', 'sales', 0, 3, 0, 0),
(167, 'cyrus developer', 'products', 0, 3, 3, 1),
(168, 'cyrus developer', 'category', 0, 3, 0, 0),
(169, 'cyrus developer', 'supplier', 0, 3, 1, 0),
(170, 'cyrus developer', 'users', 0, 3, 0, 0),
(171, 'cyrus developer', 'stock', 0, 0, 0, 0),
(172, 'cyrus developer', 'agent', 0, 3, 0, 0),
(173, 'cyrus developer', 'male_shoes', 0, 0, 0, 0),
(174, 'cyrus developer', 'male_pants', 0, 0, 0, 0),
(175, 'cyrus developer', 'male_shirts', 0, 0, 0, 0),
(176, 'cyrus developer', 'female_shoes', 0, 0, 0, 0),
(177, 'cyrus developer', 'female_dresses', 0, 0, 0, 0),
(178, 'cyrus developer', 'female_skirts', 0, 0, 0, 0),
(179, 'cyrus developer', 'female_pants', 0, 0, 0, 0),
(180, 'cyrus developer', 'details', 0, 3, 1, 0),
(181, 'cyrus developer', 'branches', 0, 3, 0, 0),
(182, 'cyrus developer', 'agent_monitor', 0, 3, 0, 0),
(183, 'cyrus developer', 'coupon', 0, 3, 0, 0),
(184, 'cyrus developer', 'cart', 0, 3, 0, 0),
(185, 'cyrus developer', 'drop_off', 0, 3, 0, 0),
(186, 'cyrus developer', 'how_to_vendor', 0, 3, 0, 0),
(187, 'cyrus developer', 'how_to_agent', 0, 3, 0, 0),
(188, 'cyrus developer', 'message', 0, 3, 0, 0),
(189, 'cyrus developer', 'sales_monitor', 0, 3, 0, 0),
(190, 'cyrus developer', 'wishlist', 0, 3, 1, 0),
(191, 'cyrus developer', 'sub_cat', 0, 3, 0, 0),
(192, 'cyrus developer', 'item_rating', 0, 3, 1, 0),
(193, 'cyrus developer', 'followers', 0, 3, 0, 0),
(194, 'cyrus developer', 'sub_cat_2', 0, 3, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `membership_userrecords`
--

CREATE TABLE `membership_userrecords` (
  `recID` bigint(20) UNSIGNED NOT NULL,
  `tableName` varchar(100) DEFAULT NULL,
  `pkValue` varchar(255) DEFAULT NULL,
  `memberID` varchar(100) DEFAULT NULL,
  `dateAdded` bigint(20) UNSIGNED DEFAULT NULL,
  `dateUpdated` bigint(20) UNSIGNED DEFAULT NULL,
  `groupID` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `membership_userrecords`
--

INSERT INTO `membership_userrecords` (`recID`, `tableName`, `pkValue`, `memberID`, `dateAdded`, `dateUpdated`, `groupID`) VALUES
(1, 'products', '41', 'warorua_alex', 1618098456, 1618098456, 2),
(2, 'stock', '1', 'warorua_alex', 1618501310, 1618501310, 2),
(3, 'products', '42', 'warorua_alex', 1618518681, 1618518681, 2),
(4, 'supplier', '5', 'warorua_alex', 1618524913, 1618524913, 2),
(6, 'products', '44', 'tsavo254 mall', 1618526932, 1624576241, 84),
(7, 'stock', '2', 'warorua_alex', 1618562352, 1618562352, 2),
(8, 'products', '45', 'tsavo254 mall', 1618562798, 1624575465, 84),
(9, 'stock', '3', 'warorua_alex', 1618562820, 1618562820, 2),
(10, 'products', '46', 'tsavo254 mall', 1618563239, 1625145946, 84),
(11, 'male_shoes', '1', 'warorua_alex', 1618610530, 1618610530, 2),
(12, 'male_shoes', '2', 'warorua_alex', 1618610544, 1618610544, 2),
(13, 'male_shoes', '3', 'warorua_alex', 1618610558, 1618610558, 2),
(14, 'male_shoes', '4', 'warorua_alex', 1618610573, 1618610573, 2),
(15, 'products', '47', 'warorua_alex', 1618610976, 1624576370, 2),
(16, 'products', '48', 'warorua_alex', 1618613382, 1624576608, 2),
(17, 'products', '49', 'warorua_alex', 1618649582, 1624576716, 2),
(18, 'branches', '', 'warorua_alex', 1618742607, 1619046693, 2),
(19, 'branches', '2', 'warorua_alex', 1618742640, 1618861199, 2),
(20, 'branches', '3', 'warorua_alex', 1618752428, 1618861238, 2),
(21, 'supplier', '6', 'warorua_alex', 1618841397, 1618841397, 2),
(22, 'products', '50', 'tsavo254 mall', 1618841507, 1624576805, 84),
(23, 'supplier', '7', 'warorua_alex', 1618841805, 1618841805, 2),
(24, 'products', '51', 'tsavo254 mall', 1618841898, 1624576872, 84),
(25, 'supplier', '8', 'warorua_alex', 1618842140, 1618842140, 2),
(26, 'products', '52', 'warorua_alex', 1618842227, 1624576484, 2),
(27, 'supplier', '9', 'warorua_alex', 1618843007, 1618843007, 2),
(28, 'products', '53', 'tsavo254 mall', 1618843099, 1625176266, 84),
(36, 'details', '21', 'zone 1 agent 1', 1618855476, 1619288540, 31),
(37, 'details', '22', 'zone 1 agent 1', 1618855476, 1619005796, 31),
(38, 'agent', '1', 'warorua_alex', 1618860503, 1618860503, 2),
(39, 'branches', '4', 'warorua_alex', 1618861031, 1618861031, 2),
(40, 'agent', '2', 'warorua_alex', 1618861119, 1618861119, 2),
(43, 'supplier', '10', 'warorua_alex', 1619012367, 1619012367, 2),
(44, 'products', '54', 'tsavo254 mall', 1619012654, 1624577075, 84),
(45, 'supplier', '1619014060', 'warorua_alex', 1619014060, 1619014060, 2),
(46, 'coupon', '1', 'warorua_alex', 1619107023, 1619111628, 2),
(48, 'coupon', '3', 'warorua_alex', 1619108232, 1619108232, 2),
(49, 'coupon', '4', 'warorua_alex', 1619108453, 1619108453, 2),
(51, 'agent', '', 'warorua_alex', 1619289030, 1619289381, 2),
(52, 'branches', '1619289453', 'warorua_alex', 1619289453, 1619289453, 2),
(53, 'agent', 'AGENT1619291239', 'warorua_alex', 1619291239, 1619291239, 2),
(54, 'branches', '1619291303', 'warorua_alex', 1619291303, 1619291303, 2),
(59, 'test', '1', 'warorua_alex', 1619566052, 1619566052, 2),
(60, 'parcels', '12', 'warorua_alex', 1619568342, 1619568342, 2),
(61, 'parcels', '13', 'warorua_alex', 1619568405, 1619568405, 2),
(64, 'details', '35', 'warorua_alex', 1619693187, 1619693194, 2),
(66, 'how_to_vendor', '1', 'warorua_alex', 1619872189, 1619872189, 2),
(67, 'how_to_agent', '1', 'warorua_alex', 1619872799, 1619872799, 2),
(68, 'supplier', '', 'vendor 1', 1619877666, 1621990232, 84),
(69, 'message', '1', 'warorua_alex', 1619888836, 1619888836, 2),
(70, 'message', '2', 'warorua_alex', 1619890662, 1619895159, 2),
(71, 'message', '3', 'warorua_alex', 1619891315, 1619891315, 2),
(72, 'stock', '4', 'warorua_alex', 1619958755, 1619958755, 2),
(73, 'products', '56', 'tsavo254 mall', 1619999085, 1624577105, 84),
(74, 'message', '4', 'warorua_alex', 1620033315, 1620033315, 2),
(75, 'products', '57', 'tsavo254 mall', 1620037857, 1625085539, 84),
(77, 'system_setting', '', 'warorua_alex', 1620253684, 1620254394, 2),
(78, 'products', '59', 'tsavo254 mall', 1620393830, 1624575117, 84),
(79, 'products', '60', 'warorua_alex', 1620669555, 1624577223, 2),
(80, 'products', '61', 'warorua_alex', 1620670097, 1624577322, 2),
(81, 'products', '62', 'warorua_alex', 1620670361, 1624576097, 2),
(82, 'products', '63', 'warorua_alex', 1620670636, 1624577512, 2),
(83, 'products', '64', 'warorua_alex', 1620670902, 1624577458, 2),
(84, 'products', '65', 'warorua_alex', 1620671206, 1624577577, 2),
(85, 'products', '66', 'warorua_alex', 1620671598, 1624577629, 2),
(86, 'message', '5', 'warorua_alex', 1620741729, 1620741729, 2),
(87, 'supplier', '1621335347', 'warorua_alex', 1621335347, 1621335347, 2),
(88, 'sales_monitor', '1', 'warorua_alex', 1621443036, 1621443057, 2),
(89, 'products', '67', 'warorua_alex', 1621445542, 1624577724, 2),
(90, 'branches', '1621964099', 'warorua_alex', 1621964099, 1621964099, 2),
(91, 'sub_cat', 'books', 'warorua_alex', 1621969935, 1621969935, 2),
(92, 'category', '270', 'warorua_alex', 1621970117, 1621970478, 2),
(93, 'sub_cat', 'Food Stuffs', 'warorua_alex', 1621970428, 1621970451, 2),
(94, 'sub_cat', 'AgroSupplements', 'warorua_alex', 1621970584, 1621970584, 2),
(95, 'sub_cat', 'Audio System', 'warorua_alex', 1621970616, 1621970616, 2),
(96, 'sub_cat', 'Automobile Accessories', 'warorua_alex', 1621970629, 1621970629, 2),
(97, 'sub_cat', 'Baby Care', 'warorua_alex', 1621970647, 1621970647, 2),
(98, 'sub_cat', 'Baby Feeding', 'warorua_alex', 1621970674, 1621970674, 2),
(99, 'sub_cat', 'Beverages', 'warorua_alex', 1621970689, 1621970689, 2),
(100, 'sub_cat', 'Books & Novels', 'warorua_alex', 1621970703, 1621970703, 2),
(101, 'sub_cat', 'Desktop Computer', 'warorua_alex', 1621970716, 1621970716, 2),
(102, 'sub_cat', 'Diapering', 'warorua_alex', 1621970731, 1621970731, 2),
(103, 'sub_cat', 'Electronic Accessories', 'warorua_alex', 1621970741, 1621970741, 2),
(104, 'sub_cat', 'Feeds', 'warorua_alex', 1621970755, 1621970755, 2),
(105, 'sub_cat', 'Furniture & Decor', 'warorua_alex', 1621970792, 1621970792, 2),
(106, 'sub_cat', 'Games', 'warorua_alex', 1621970804, 1621970804, 2),
(107, 'sub_cat', 'Gaming Consoles', 'warorua_alex', 1621970817, 1621970817, 2),
(108, 'sub_cat', 'Gardening Tools', 'warorua_alex', 1621970827, 1621970827, 2),
(109, 'sub_cat', 'Get a Prescription', 'warorua_alex', 1621970851, 1621970851, 2),
(110, 'sub_cat', 'Health Care', 'warorua_alex', 1621970865, 1621970865, 2),
(111, 'sub_cat', 'House Appliances', 'warorua_alex', 1621970876, 1621970876, 2),
(112, 'sub_cat', 'Laboratory Tools & Electronics', 'warorua_alex', 1621970888, 1621970888, 2),
(113, 'sub_cat', 'Laptops', 'warorua_alex', 1621970897, 1621970897, 2),
(114, 'sub_cat', 'Make Ups', 'warorua_alex', 1621970906, 1621970906, 2),
(115, 'sub_cat', 'Men Grooming', 'warorua_alex', 1621970920, 1621970920, 2),
(116, 'sub_cat', 'Mobile Phones', 'warorua_alex', 1621970936, 1621970936, 2),
(117, 'sub_cat', 'Nutrition', 'warorua_alex', 1621970945, 1621970945, 2),
(118, 'sub_cat', 'Office Appliances', 'warorua_alex', 1621970956, 1621970956, 2),
(119, 'sub_cat', 'OTC Drugs', 'warorua_alex', 1621970965, 1621970965, 2),
(120, 'sub_cat', 'Other Computer Accessories', 'warorua_alex', 1621970976, 1621970976, 2),
(121, 'sub_cat', 'Others', 'warorua_alex', 1621970984, 1621970984, 2),
(122, 'sub_cat', 'Outdoor Lights', 'warorua_alex', 1621970993, 1621970993, 2),
(123, 'sub_cat', 'Perfumes', 'warorua_alex', 1621971001, 1621971001, 2),
(124, 'sub_cat', 'Personal Care', 'warorua_alex', 1621971010, 1621971010, 2),
(125, 'sub_cat', 'Pest Control', 'warorua_alex', 1621971021, 1621971021, 2),
(126, 'sub_cat', 'Pest Controllers', 'warorua_alex', 1621971033, 1621971033, 2),
(127, 'sub_cat', 'Phone Accessories', 'warorua_alex', 1621971055, 1621971055, 2),
(128, 'sub_cat', 'Softwares', 'warorua_alex', 1621971065, 1621971065, 2),
(129, 'sub_cat', 'Sports Equipment', 'warorua_alex', 1621971075, 1621971075, 2),
(130, 'sub_cat', 'Sports Jersey', 'warorua_alex', 1621971083, 1621971083, 2),
(131, 'sub_cat', 'Tablets', 'warorua_alex', 1621971093, 1621971093, 2),
(132, 'sub_cat', 'Teens Grooming', 'warorua_alex', 1621971103, 1621971103, 2),
(133, 'sub_cat', 'Televisions', 'warorua_alex', 1621971113, 1621971113, 2),
(134, 'sub_cat', 'Women Grooming', 'warorua_alex', 1621971123, 1621971123, 2),
(135, 'supplier', '1621335348', 'tsavo254 mall', 1621988948, 1622217328, 84),
(136, 'category', '271', 'warorua_alex', 1621993584, 1622055128, 2),
(137, 'sub_cat_2', '1', 'warorua_alex', 1622023461, 1622023461, 2),
(138, 'sub_cat_2', '2', 'warorua_alex', 1622023472, 1622024355, 2),
(139, 'sub_cat_2', '3', 'warorua_alex', 1622023479, 1622024416, 2),
(140, 'sub_cat_2', '4', 'warorua_alex', 1622023497, 1622024448, 2),
(141, 'category', '272', 'warorua_alex', 1622025545, 1622025545, 2),
(142, 'category', '273', 'warorua_alex', 1622039604, 1622039604, 2),
(143, 'branches', '1622146826', 'warorua_alex', 1622146826, 1622146826, 2),
(144, 'products', '55', 'tsavo254 mall', 1622218040, 1624615470, 84),
(145, 'drop_off', '1', 'warorua_alex', 1622456368, 1622456368, 2),
(146, 'staff', '1', 'tsavo', 1622599985, 1622649754, 2),
(147, 'board_member', '1', 'tsavo', 1622649894, 1622649894, 2),
(148, 'about_us', '1', 'tsavo', 1622650438, 1622650438, 2),
(149, 'message', '6', 'warorua_alex', 1624451784, 1624451784, 2),
(150, 'message', '7', 'warorua_alex', 1624451875, 1624451875, 2),
(151, 'message', '8', 'warorua_alex', 1624451927, 1624451927, 2),
(152, 'coupon', '15', 'warorua_alex', 1624563618, 1624563618, 2),
(153, 'coupon', '16', 'warorua_alex', 1624564221, 1624564339, 2),
(154, 'coupon', '17', 'warorua_alex', 1624577879, 1624577879, 2),
(155, 'staff', '2', 'tsavo', 1628013456, 1628013465, 2),
(156, 'coupon', '19', 'warorua_alex', 1630325616, 1630325616, 2),
(157, 'coupon', '20', 'warorua_alex', 1630325671, 1630325671, 2),
(158, 'coupon', '21', 'warorua_alex', 1630325977, 1630326023, 2);

-- --------------------------------------------------------

--
-- Table structure for table `membership_users`
--

CREATE TABLE `membership_users` (
  `memberID` varchar(100) NOT NULL,
  `passMD5` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `signupDate` date DEFAULT NULL,
  `groupID` int(10) UNSIGNED DEFAULT NULL,
  `isBanned` tinyint(4) DEFAULT NULL,
  `isApproved` tinyint(4) DEFAULT NULL,
  `custom1` text DEFAULT NULL,
  `custom2` text DEFAULT NULL,
  `custom3` text DEFAULT NULL,
  `custom4` text DEFAULT NULL,
  `comments` text DEFAULT NULL,
  `pass_reset_key` varchar(100) DEFAULT NULL,
  `pass_reset_expiry` int(10) UNSIGNED DEFAULT NULL,
  `allowCSVImport` tinyint(4) NOT NULL DEFAULT 0,
  `flags` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `membership_users`
--

INSERT INTO `membership_users` (`memberID`, `passMD5`, `email`, `signupDate`, `groupID`, `isBanned`, `isApproved`, `custom1`, `custom2`, `custom3`, `custom4`, `comments`, `pass_reset_key`, `pass_reset_expiry`, `allowCSVImport`, `flags`) VALUES
('cyrus developer', '$2y$10$EcU8AXAbHioecRhdTKfV3.V9AhbPVHl2uw0EcDuVM1MIh4Z0V8KoG', 'Cyrus.developer@tsavo.store', '2021-07-03', 767, 0, 1, 'Cyrus', 'Developer', '0790395822', 'Kahawa West', 'member signed up through the registration form.', '79265cd54ec38e11a', 1625431621, 0, NULL),
('guest', NULL, NULL, '2021-04-10', 1, 0, 1, NULL, NULL, NULL, NULL, 'Anonymous member created automatically on 2021-04-10', NULL, NULL, 0, NULL),
('njewa cyber', '$2y$10$tkxf8W.mMXu2ZxQ1zBl0I.aVs7.igu2hLmdOwn1XG2WydreCbrZRO', 'thetsavo254@gmail.com', '2021-05-29', 84, 0, 1, 'NJERI', 'WARORUA', '07009977722', 'MURANG\'A', 'member signed up through the registration form.', '9e510a59919891ce5', 1622339424, 0, NULL),
('test', '$2y$10$F0LPvmFXgM1fGXmvwxbkV.ufuXN8vVaMDSLr/HumVpgeXqXGGq.li', 'Waroruaalex640@gmail.com', '2021-05-29', 84, 0, 1, 'Alex', 'Warorua', '07009977722', 'MURANG\'A', 'member signed up through the registration form.', NULL, NULL, 0, NULL),
('tsavo', '$2y$10$Zy5N.XtJ.N0ZnSMPgXFnieRVlly7Dr0JdWpG.sEJyySW5B6gZC8G2', 'waroruaalex@tsavo.store', '2021-05-30', 2, 0, 1, 'Alex', 'Warorua', '0716912002', 'MURANG\'A', 'Admin for Tsavo system', NULL, NULL, 0, NULL),
('tsavo254 mall', '$2y$10$0OjbLPfUXbQTCrsKPz2DzeG8Iwf0Jn17xxKrGMG7CxDwXZgXsfvWm', 'thetsavo254@gmail.com', '2021-05-26', 84, 0, 1, 'Alex Warorua', '196', 'Thika', 'MURANG\'A', 'member signed up through the registration form.', NULL, NULL, 0, NULL),
('vendor 1', '$2y$10$0ph/tR2m47SWmW82dMEM1uz9.RO5DwfempX0rPTQiQzLEJR7OJA62', 'stalbansschoolthika01@gmail.com', '2021-04-30', 84, 0, 1, 'Warorua Alex', 'Muguga, Thika, Kenya', 'Thika', 'Central', '', NULL, NULL, 0, NULL),
('warorua_alex', '$2y$10$F/bAB80DDvq8Z8d2jewzh.8wNK5qf6RpEk3P7tuxIcNhTg8Qcm87e', 'sales@tsavo.store', '2021-04-10', 2, 0, 1, NULL, NULL, NULL, NULL, 'Admin member created automatically on 2021-04-10\nRecord updated automatically on 2021-04-19\nRecord updated automatically on 2021-04-19\nRecord updated automatically on 2021-04-24\nRecord updated automatically on 2021-04-24\nRecord updated automatically on 2021-04-24\nRecord updated automatically on 2021-04-24\nRecord updated automatically on 2021-04-30\nRecord updated automatically on 2021-05-26\nRecord updated automatically on 2021-05-26\nRecord updated automatically on 2021-05-26\nRecord updated automatically on 2021-05-26\nRecord updated automatically on 2021-05-26\nRecord updated automatically on 2021-05-27\nRecord updated automatically on 2021-05-27\nRecord updated automatically on 2021-05-29\nRecord updated automatically on 2021-05-29\nRecord updated automatically on 2021-05-29\nRecord updated automatically on 2021-05-29\nRecord updated automatically on 2021-05-31\nRecord updated automatically on 2021-06-05', NULL, NULL, 0, NULL),
('zone 1 agent 1', '$2y$10$WRa9nV/2qKUymW/RpkeimOiS3L0lFbHQqbtiQ08JE.j0WsFrKGhsq', 'Waroruaalex640@gmail.com', '2021-04-19', 31, 0, 1, 'Alex Warorua', 'Kamagambo, Thika, Kenya', 'Thika', 'Central', '', NULL, NULL, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `membership_usersessions`
--

CREATE TABLE `membership_usersessions` (
  `memberID` varchar(100) NOT NULL,
  `token` varchar(100) NOT NULL,
  `agent` varchar(100) NOT NULL,
  `expiry_ts` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `membership_usersessions`
--

INSERT INTO `membership_usersessions` (`memberID`, `token`, `agent`, `expiry_ts`) VALUES
('warorua_alex', 'Oh3gWHjV5ev2mvY2dLdXcOCZfZvL5g', 'mpZssRo5OK44HAaAixnmpnTUBsDij3', 1634219031);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `message` text DEFAULT NULL,
  `product` varchar(100) DEFAULT NULL,
  `product_id` varchar(40) DEFAULT '1',
  `quantity` varchar(40) DEFAULT NULL,
  `user_name` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `user_id`, `message`, `product`, `product_id`, `quantity`, `user_name`) VALUES
(6, 123, 'Hello Princess, Kindly updated your delivery point', 'You do not have a delivery point', '1', NULL, '123'),
(7, 118, 'Hello Lewis,, Good afternoon', 'Good afternoon Boss,,,', '1', NULL, '118'),
(8, 118, 'Boss ulipata TV yako<div><br></div>', 'Ulipata TV yako', '1', NULL, '118'),
(16, 95, 'Jambo Maureen. You successfully subscribed to our newsletter on 2021-06-28', 'Subsription to our newsletter was successful', '1', NULL, '95'),
(17, 9, 'Jambo Alex. You successfully subscribed to our newsletter on 2021-07-01', 'Subsription to our newsletter was successful', '1', NULL, '9'),
(18, 9, 'Jambo Alex. You successfully unsubscribed to our newsletter on 2021-07-01', 'You have successfully unsubscribed from our newsletter!', '1', NULL, '9'),
(19, 137, 'Jambo Cyrus. You successfully subscribed to our newsletter on 2021-07-03', 'Subsription to our newsletter was successful', '1', NULL, '137'),
(20, 128, '\r\n<div style=\'border-color:#FF1DFF; border-radius:7px; font-family: Verdana, sans-serif;\'> \r\n                 <h1 style=\'text-align:center;\'>Ordered item confirmed.</h1>\r\n				 <hr />\r\n				 <img src=\'https://www.linkpicture.com/q/tsavo.jpg\' width=\'100%\' style=\'border:none;border-radius:3px\' />\r\n					<hr />\r\n<p style=\'text-align:center;\'>\r\nJambo Dennis, your order bought under the order number PAY2320188 has just been successfully \r\nconfirmed be the Vendor. It now will be dispatched soonest.\r\n</p>\r\n</div>\r\n<hr />\r\n<small style=\'text-align:center;\'>For enquiries contact: contacts@tsavo.store</small>\r\n', 'Ordered item confirmation.', '1', NULL, '128'),
(21, 95, '\r\n<div style=\'border-color:#FF1DFF; border-radius:7px; font-family: Verdana, sans-serif;\'> \r\n                 <h1 style=\'text-align:center;\'>Ordered item confirmed.</h1>\r\n				 <hr />\r\n				 <img src=\'https://www.linkpicture.com/q/tsavo.jpg\' width=\'100%\' style=\'border:none;border-radius:3px\' />\r\n					<hr />\r\n<p style=\'text-align:center;\'>\r\nJambo Maureen, your order bought under the order number PAY2335201 has just been successfully \r\nconfirmed be the Vendor. It now will be dispatched soonest.\r\n</p>\r\n</div>\r\n<hr />\r\n<small style=\'text-align:center;\'>For enquiries contact: contacts@tsavo.store</small>\r\n', 'Ordered item confirmation.', '1', NULL, '95'),
(22, 95, '\r\n<div style=\'border-color:#FF1DFF; border-radius:7px; font-family: Verdana, sans-serif;\'> \r\n                 <h1 style=\'text-align:center;\'>Ordered item confirmed.</h1>\r\n				 <hr />\r\n				 <img src=\'https://www.linkpicture.com/q/tsavo.jpg\' width=\'100%\' style=\'border:none;border-radius:3px\' />\r\n					<hr />\r\n<p style=\'text-align:center;\'>\r\nJambo Maureen, your order bought under the order number PAY2320130 has just been successfully \r\nconfirmed be the Vendor. It now will be dispatched soonest.\r\n</p>\r\n</div>\r\n<hr />\r\n<small style=\'text-align:center;\'>For enquiries contact: contacts@tsavo.store</small>\r\n', 'Ordered item confirmation.', '1', NULL, '95'),
(23, 95, '\r\n<div style=\'border-color:#FF1DFF; border-radius:7px; font-family: Verdana, sans-serif;\'> \r\n                 <h1 style=\'text-align:center;\'>Ordered item confirmed.</h1>\r\n				 <hr />\r\n				 <img src=\'https://www.linkpicture.com/q/tsavo.jpg\' width=\'100%\' style=\'border:none;border-radius:3px\' />\r\n					<hr />\r\n<p style=\'text-align:center;\'>\r\nJambo Maureen, your order bought under the order number PAY2321381 has just been successfully \r\nconfirmed be the Vendor. It now will be dispatched soonest.\r\n</p>\r\n</div>\r\n<hr />\r\n<small style=\'text-align:center;\'>For enquiries contact: contacts@tsavo.store</small>\r\n', 'Ordered item confirmation.', '1', NULL, '95'),
(24, 95, '\r\n<div style=\'border-color:#FF1DFF; border-radius:7px; font-family: Verdana, sans-serif;\'> \r\n                 <h1 style=\'text-align:center;\'>Ordered item confirmed.</h1>\r\n				 <hr />\r\n				 <img src=\'https://www.linkpicture.com/q/tsavo.jpg\' width=\'100%\' style=\'border:none;border-radius:3px\' />\r\n					<hr />\r\n<p style=\'text-align:center;\'>\r\nJambo Maureen, your order bought under the order number PAY2392452 has just been successfully \r\nconfirmed be the Vendor. It now will be dispatched soonest.\r\n</p>\r\n</div>\r\n<hr />\r\n<small style=\'text-align:center;\'>For enquiries contact: contacts@tsavo.store</small>\r\n', 'Ordered item confirmation.', '1', NULL, '95'),
(25, 95, '\r\n<div style=\'border-color:#FF1DFF; border-radius:7px; font-family: Verdana, sans-serif;\'> \r\n                 <h1 style=\'text-align:center;\'>Ordered item confirmed.</h1>\r\n				 <hr />\r\n				 <img src=\'https://www.linkpicture.com/q/tsavo.jpg\' width=\'100%\' style=\'border:none;border-radius:3px\' />\r\n					<hr />\r\n<p style=\'text-align:center;\'>\r\nJambo Maureen, your order bought under the order number PAY2465196 has just been successfully \r\nconfirmed be the Vendor. It now will be dispatched soonest.\r\n</p>\r\n</div>\r\n<hr />\r\n<small style=\'text-align:center;\'>For enquiries contact: contacts@tsavo.store</small>\r\n', 'Ordered item confirmation.', '1', NULL, '95'),
(26, 95, '\r\n<div style=\'border-color:#FF1DFF; border-radius:7px; font-family: Verdana, sans-serif;\'> \r\n                 <h1 style=\'text-align:center;\'>Ordered item confirmed.</h1>\r\n				 <hr />\r\n				 <img src=\'https://www.linkpicture.com/q/tsavo.jpg\' width=\'100%\' style=\'border:none;border-radius:3px\' />\r\n					<hr />\r\n<p style=\'text-align:center;\'>\r\nJambo Maureen, your order bought under the order number PAY2555443 has just been successfully \r\nconfirmed be the Vendor. It now will be dispatched soonest.\r\n</p>\r\n</div>\r\n<hr />\r\n<small style=\'text-align:center;\'>For enquiries contact: contacts@tsavo.store</small>\r\n', 'Ordered item confirmation.', '1', NULL, '95');

-- --------------------------------------------------------

--
-- Table structure for table `new_user_cookie`
--

CREATE TABLE `new_user_cookie` (
  `id` int(11) NOT NULL,
  `ip` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `value` int(11) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `new_user_cookie`
--

INSERT INTO `new_user_cookie` (`id`, `ip`, `name`, `value`, `date`) VALUES
(6, '196.96.110.151', 'Tsavo_user', 1625325994, '2021/07/03 | 06:26:34pm'),
(7, '105.161.63.131', 'Tsavo_user', 1625328101, '2021/07/03 | 07:01:41pm'),
(8, '92.118.160.45', 'Tsavo_user', 1625331542, '2021/07/03 | 07:59:02pm'),
(9, '105.160.15.237', 'Tsavo_user', 1625337532, '2021/07/03 | 09:38:52pm'),
(10, '40.77.167.38', 'Tsavo_user', 1625337561, '2021/07/03 | 09:39:21pm'),
(11, '54.36.148.82', 'Tsavo_user', 1625339560, '2021/07/03 | 10:12:40pm'),
(12, '54.36.148.186', 'Tsavo_user', 1625344816, '2021/07/03 | 11:40:16pm'),
(13, '54.36.148.74', 'Tsavo_user', 1625350039, '2021/07/04 | 01:07:19am'),
(14, '54.36.148.50', 'Tsavo_user', 1625352583, '2021/07/04 | 01:49:43am'),
(15, '54.36.148.188', 'Tsavo_user', 1625388160, '2021/07/04 | 11:42:40am'),
(16, '54.36.148.103', 'Tsavo_user', 1625392688, '2021/07/04 | 12:58:08pm'),
(17, '54.36.149.94', 'Tsavo_user', 1625395221, '2021/07/04 | 01:40:21pm'),
(18, '54.36.148.6', 'Tsavo_user', 1625398437, '2021/07/04 | 02:33:57pm'),
(19, '45.129.18.172', 'Tsavo_user', 1625398605, '2021/07/04 | 02:36:45pm'),
(20, '54.36.149.41', 'Tsavo_user', 1625426892, '2021/07/04 | 10:28:12pm'),
(21, '54.36.148.27', 'Tsavo_user', 1625432231, '2021/07/04 | 11:57:11pm'),
(22, '54.36.148.245', 'Tsavo_user', 1625434509, '2021/07/05 | 12:35:09am'),
(23, '54.36.149.72', 'Tsavo_user', 1625437335, '2021/07/05 | 01:22:15am'),
(24, '54.36.149.104', 'Tsavo_user', 1625442491, '2021/07/05 | 02:48:11am'),
(25, '18.236.148.86', 'Tsavo_user', 1625455712, '2021/07/05 | 06:28:32am'),
(26, '34.210.11.14', 'Tsavo_user', 1625457969, '2021/07/05 | 07:06:09am'),
(27, '18.236.154.1', 'Tsavo_user', 1625459692, '2021/07/05 | 07:34:52am'),
(28, '52.26.132.160', 'Tsavo_user', 1625459839, '2021/07/05 | 07:37:19am'),
(29, '34.216.83.209', 'Tsavo_user', 1625460018, '2021/07/05 | 07:40:18am'),
(30, '54.36.148.252', 'Tsavo_user', 1625466265, '2021/07/05 | 09:24:25am'),
(31, '54.36.149.61', 'Tsavo_user', 1625471554, '2021/07/05 | 10:52:34am'),
(32, '92.118.160.37', 'Tsavo_user', 1625473515, '2021/07/05 | 11:25:15am'),
(33, '54.36.148.191', 'Tsavo_user', 1625473691, '2021/07/05 | 11:28:11am'),
(34, '54.36.148.238', 'Tsavo_user', 1625477435, '2021/07/05 | 12:30:35pm'),
(35, '196.201.210.221', 'Tsavo_user', 1625480395, '2021/07/05 | 01:19:55pm'),
(36, '34.105.72.231', 'Tsavo_user', 1625481707, '2021/07/05 | 01:41:47pm'),
(37, '35.230.102.90', 'Tsavo_user', 1625482245, '2021/07/05 | 01:50:45pm'),
(38, '34.127.120.29', 'Tsavo_user', 1625482255, '2021/07/05 | 01:50:55pm'),
(39, '34.105.72.231', 'Tsavo_user', 1625482319, '2021/07/05 | 01:51:59pm'),
(40, '34.83.53.31', 'Tsavo_user', 1625482319, '2021/07/05 | 01:51:59pm'),
(41, '54.36.149.71', 'Tsavo_user', 1625498318, '2021/07/05 | 06:18:38pm'),
(42, '54.36.148.130', 'Tsavo_user', 1625502861, '2021/07/05 | 07:34:21pm'),
(43, '105.160.60.209', 'Tsavo_user', 1625504336, '2021/07/05 | 07:58:56pm'),
(44, '54.36.148.218', 'Tsavo_user', 1625505228, '2021/07/05 | 08:13:48pm'),
(45, '92.118.160.17', 'Tsavo_user', 1625508934, '2021/07/05 | 09:15:34pm'),
(46, '54.36.149.50', 'Tsavo_user', 1625509210, '2021/07/05 | 09:20:10pm'),
(47, '34.77.162.21', 'Tsavo_user', 1625517845, '2021/07/05 | 11:44:05pm'),
(48, '54.36.148.166', 'Tsavo_user', 1625526597, '2021/07/06 | 02:09:57am'),
(49, '54.36.149.22', 'Tsavo_user', 1625532015, '2021/07/06 | 03:40:15am'),
(50, '54.36.148.56', 'Tsavo_user', 1625534077, '2021/07/06 | 04:14:37am'),
(51, '54.36.148.18', 'Tsavo_user', 1625537027, '2021/07/06 | 05:03:47am'),
(52, '34.127.115.30', 'Tsavo_user', 1625544805, '2021/07/06 | 07:13:25am'),
(53, '35.227.164.5', 'Tsavo_user', 1625545032, '2021/07/06 | 07:17:12am'),
(54, '35.199.173.93', 'Tsavo_user', 1625545033, '2021/07/06 | 07:17:13am'),
(55, '34.105.55.108', 'Tsavo_user', 1625545033, '2021/07/06 | 07:17:13am'),
(56, '35.233.230.85', 'Tsavo_user', 1625545034, '2021/07/06 | 07:17:14am'),
(57, '54.187.124.237', 'Tsavo_user', 1625545069, '2021/07/06 | 07:17:49am'),
(58, '18.237.131.133', 'Tsavo_user', 1625545099, '2021/07/06 | 07:18:19am'),
(59, '18.236.182.105', 'Tsavo_user', 1625545355, '2021/07/06 | 07:22:35am'),
(60, '34.209.51.233', 'Tsavo_user', 1625545489, '2021/07/06 | 07:24:49am'),
(61, '54.245.72.63', 'Tsavo_user', 1625545617, '2021/07/06 | 07:26:57am'),
(62, '52.34.215.81', 'Tsavo_user', 1625545668, '2021/07/06 | 07:27:48am'),
(63, '18.237.225.59', 'Tsavo_user', 1625546437, '2021/07/06 | 07:40:37am'),
(64, '52.89.36.130', 'Tsavo_user', 1625546450, '2021/07/06 | 07:40:50am'),
(65, '3.90.226.20', 'Tsavo_user', 1625548619, '2021/07/06 | 08:16:59am'),
(66, '54.36.148.120', 'Tsavo_user', 1625553479, '2021/07/06 | 09:37:59am'),
(67, '102.22.214.238', 'Tsavo_user', 1625554290, '2021/07/06 | 09:51:30am'),
(68, '54.36.149.23', 'Tsavo_user', 1625564678, '2021/07/06 | 12:44:38pm'),
(69, '54.36.149.74', 'Tsavo_user', 1625567411, '2021/07/06 | 01:30:11pm'),
(70, '54.36.148.97', 'Tsavo_user', 1625570155, '2021/07/06 | 02:15:55pm'),
(71, '196.101.212.174', 'Tsavo_user', 1625578180, '2021/07/06 | 04:29:40pm'),
(72, '54.36.148.192', 'Tsavo_user', 1625583148, '2021/07/06 | 05:52:28pm'),
(73, '62.8.95.69', 'Tsavo_user', 1625585446, '2021/07/06 | 06:30:46pm'),
(74, '54.189.230.128', 'Tsavo_user', 1625593806, '2021/07/06 | 08:50:06pm'),
(75, '54.36.148.69', 'Tsavo_user', 1625595021, '2021/07/06 | 09:10:21pm'),
(76, '34.77.162.6', 'Tsavo_user', 1625596590, '2021/07/06 | 09:36:30pm'),
(77, '54.36.148.43', 'Tsavo_user', 1625597366, '2021/07/06 | 09:49:26pm'),
(78, '54.36.148.21', 'Tsavo_user', 1625601650, '2021/07/06 | 11:00:50pm'),
(79, '185.195.24.52', 'Tsavo_user', 1625611438, '2021/07/07 | 01:43:58am'),
(80, '185.195.24.52', 'Tsavo_user', 1625611438, '2021/07/07 | 01:43:58am'),
(81, '185.195.24.52', 'Tsavo_user', 1625611439, '2021/07/07 | 01:43:59am'),
(82, '54.36.148.203', 'Tsavo_user', 1625612454, '2021/07/07 | 02:00:54am'),
(83, '54.36.148.209', 'Tsavo_user', 1625623419, '2021/07/07 | 05:03:39am'),
(84, '54.36.148.234', 'Tsavo_user', 1625625844, '2021/07/07 | 05:44:04am'),
(85, '54.36.149.106', 'Tsavo_user', 1625630136, '2021/07/07 | 06:55:36am'),
(86, '34.96.130.29', 'Tsavo_user', 1625630388, '2021/07/07 | 06:59:48am'),
(87, '54.212.225.10', 'Tsavo_user', 1625631693, '2021/07/07 | 07:21:33am'),
(88, '52.89.181.209', 'Tsavo_user', 1625631723, '2021/07/07 | 07:22:03am'),
(89, '52.89.181.209', 'Tsavo_user', 1625631749, '2021/07/07 | 07:22:29am'),
(90, '54.188.207.4', 'Tsavo_user', 1625631931, '2021/07/07 | 07:25:31am'),
(91, '34.105.114.62', 'Tsavo_user', 1625632196, '2021/07/07 | 07:29:56am'),
(92, '18.237.142.33', 'Tsavo_user', 1625632351, '2021/07/07 | 07:32:31am'),
(93, '34.77.162.3', 'Tsavo_user', 1625634764, '2021/07/07 | 08:12:44am'),
(94, '185.201.11.108', 'Tsavo_user', 1625636824, '2021/07/07 | 08:47:04am'),
(95, '197.248.23.182', 'Tsavo_user', 1625636912, '2021/07/07 | 08:48:32am'),
(96, '34.86.35.20', 'Tsavo_user', 1625644452, '2021/07/07 | 10:54:12am'),
(97, '54.36.148.150', 'Tsavo_user', 1625647421, '2021/07/07 | 11:43:41am'),
(98, '54.36.149.95', 'Tsavo_user', 1625658859, '2021/07/07 | 02:54:19pm'),
(99, '54.36.148.234', 'Tsavo_user', 1625661309, '2021/07/07 | 03:35:09pm'),
(100, '54.36.149.90', 'Tsavo_user', 1625662485, '2021/07/07 | 03:54:45pm'),
(101, '35.185.244.38', 'Tsavo_user', 1625662528, '2021/07/07 | 03:55:28pm'),
(102, '34.145.33.34', 'Tsavo_user', 1625663130, '2021/07/07 | 04:05:30pm'),
(103, '54.36.148.102', 'Tsavo_user', 1625674729, '2021/07/07 | 07:18:49pm'),
(104, '54.36.148.220', 'Tsavo_user', 1625686385, '2021/07/07 | 10:33:05pm'),
(105, '54.36.148.69', 'Tsavo_user', 1625692408, '2021/07/08 | 12:13:28am'),
(106, '54.36.148.37', 'Tsavo_user', 1625694602, '2021/07/08 | 12:50:02am'),
(107, '54.36.148.242', 'Tsavo_user', 1625703010, '2021/07/08 | 03:10:10am'),
(108, '66.249.64.192', 'Tsavo_user', 1625707615, '2021/07/08 | 04:26:55am'),
(109, '66.249.64.195', 'Tsavo_user', 1625711831, '2021/07/08 | 05:37:11am'),
(110, '54.36.148.53', 'Tsavo_user', 1625720206, '2021/07/08 | 07:56:46am'),
(111, '54.36.148.164', 'Tsavo_user', 1625722786, '2021/07/08 | 08:39:46am'),
(112, '54.36.148.157', 'Tsavo_user', 1625726171, '2021/07/08 | 09:36:11am'),
(113, '134.122.7.14', 'Tsavo_user', 1625726591, '2021/07/08 | 09:43:11am'),
(114, '157.245.218.134', 'Tsavo_user', 1625729807, '2021/07/08 | 10:36:47am'),
(115, '161.35.130.5', 'Tsavo_user', 1625730112, '2021/07/08 | 10:41:52am'),
(116, '35.199.148.5', 'Tsavo_user', 1625734672, '2021/07/08 | 11:57:52am'),
(117, '34.127.68.219', 'Tsavo_user', 1625734678, '2021/07/08 | 11:57:58am'),
(118, '66.249.64.236', 'Tsavo_user', 1625737170, '2021/07/08 | 12:39:30pm'),
(119, '105.161.152.51', 'Tsavo_user', 1625745556, '2021/07/08 | 02:59:16pm'),
(120, '54.36.148.90', 'Tsavo_user', 1625746788, '2021/07/08 | 03:19:48pm'),
(121, '54.36.148.218', 'Tsavo_user', 1625755656, '2021/07/08 | 05:47:36pm'),
(122, '54.36.148.199', 'Tsavo_user', 1625758468, '2021/07/08 | 06:34:28pm'),
(123, '54.36.148.114', 'Tsavo_user', 1625766541, '2021/07/08 | 08:49:01pm'),
(124, '54.36.149.40', 'Tsavo_user', 1625773336, '2021/07/08 | 10:42:16pm'),
(125, '34.86.35.33', 'Tsavo_user', 1625780212, '2021/07/09 | 12:36:52am'),
(126, '54.36.148.130', 'Tsavo_user', 1625784392, '2021/07/09 | 01:46:32am'),
(127, '208.80.194.42', 'Tsavo_user', 1625784604, '2021/07/09 | 01:50:04am'),
(128, '54.36.149.7', 'Tsavo_user', 1625786658, '2021/07/09 | 02:24:18am'),
(129, '105.161.152.51', 'Tsavo_user', 1625787207, '2021/07/09 | 02:33:27am'),
(130, '105.161.152.51', 'Tsavo_user', 1625787225, '2021/07/09 | 02:33:45am'),
(131, '105.161.152.51', 'Tsavo_user', 1625787347, '2021/07/09 | 02:35:47am'),
(132, '34.77.162.14', 'Tsavo_user', 1625793751, '2021/07/09 | 04:22:31am'),
(133, '34.77.162.4', 'Tsavo_user', 1625800378, '2021/07/09 | 06:12:58am'),
(134, '54.36.149.64', 'Tsavo_user', 1625800935, '2021/07/09 | 06:22:15am'),
(135, '196.201.210.160', 'Tsavo_user', 1625807574, '2021/07/09 | 08:12:54am'),
(136, '54.36.148.243', 'Tsavo_user', 1625808026, '2021/07/09 | 08:20:26am'),
(137, '172.247.250.138', 'Tsavo_user', 1625818331, '2021/07/09 | 11:12:11am'),
(138, '172.247.250.138', 'Tsavo_user', 1625818331, '2021/07/09 | 11:12:11am'),
(139, '54.36.148.168', 'Tsavo_user', 1625820063, '2021/07/09 | 11:41:03am'),
(140, '54.36.148.176', 'Tsavo_user', 1625823004, '2021/07/09 | 12:30:04pm'),
(141, '54.36.148.175', 'Tsavo_user', 1625833507, '2021/07/09 | 03:25:07pm'),
(142, '34.96.130.4', 'Tsavo_user', 1625835146, '2021/07/09 | 03:52:26pm'),
(143, '54.36.148.109', 'Tsavo_user', 1625842873, '2021/07/09 | 06:01:13pm'),
(144, '34.215.163.80', 'Tsavo_user', 1625852490, '2021/07/09 | 08:41:30pm'),
(145, '54.187.111.212', 'Tsavo_user', 1625852530, '2021/07/09 | 08:42:10pm'),
(146, '40.77.167.42', 'Tsavo_user', 1625855208, '2021/07/09 | 09:26:48pm'),
(147, '34.209.218.47', 'Tsavo_user', 1625857844, '2021/07/09 | 10:10:44pm'),
(148, '54.218.253.234', 'Tsavo_user', 1625857870, '2021/07/09 | 10:11:10pm'),
(149, '54.36.149.34', 'Tsavo_user', 1625858091, '2021/07/09 | 10:14:51pm'),
(150, '92.118.160.17', 'Tsavo_user', 1625859927, '2021/07/09 | 10:45:27pm'),
(151, '54.36.149.104', 'Tsavo_user', 1625860246, '2021/07/09 | 10:50:46pm'),
(152, '15.206.84.192', 'Tsavo_user', 1625863170, '2021/07/09 | 11:39:30pm'),
(153, '136.243.155.105', 'Tsavo_user', 1625864632, '2021/07/10 | 12:03:52am'),
(154, '40.77.167.38', 'Tsavo_user', 1625868874, '2021/07/10 | 01:14:34am'),
(155, '54.36.149.47', 'Tsavo_user', 1625870406, '2021/07/10 | 01:40:06am'),
(156, '46.45.185.189', 'Tsavo_user', 1625872129, '2021/07/10 | 02:08:49am'),
(157, '46.45.185.178', 'Tsavo_user', 1625872154, '2021/07/10 | 02:09:14am'),
(158, '137.226.113.44', 'Tsavo_user', 1625875619, '2021/07/10 | 03:06:59am'),
(159, '137.226.113.44', 'Tsavo_user', 1625875620, '2021/07/10 | 03:07:00am'),
(160, '54.36.148.220', 'Tsavo_user', 1625880450, '2021/07/10 | 04:27:30am'),
(161, '54.36.149.100', 'Tsavo_user', 1625885116, '2021/07/10 | 05:45:16am'),
(162, '54.36.148.172', 'Tsavo_user', 1625888965, '2021/07/10 | 06:49:25am'),
(163, '31.13.103.117', 'Tsavo_user', 1625892099, '2021/07/10 | 07:41:39am'),
(164, '31.13.103.119', 'Tsavo_user', 1625892099, '2021/07/10 | 07:41:39am'),
(165, '31.13.103.5', 'Tsavo_user', 1625892100, '2021/07/10 | 07:41:40am'),
(166, '31.13.103.119', 'Tsavo_user', 1625892113, '2021/07/10 | 07:41:53am'),
(167, '31.13.103.23', 'Tsavo_user', 1625892113, '2021/07/10 | 07:41:53am'),
(168, '31.13.103.7', 'Tsavo_user', 1625892240, '2021/07/10 | 07:44:00am'),
(169, '34.216.39.213', 'Tsavo_user', 1625892741, '2021/07/10 | 07:52:21am'),
(170, '35.227.158.75', 'Tsavo_user', 1625899478, '2021/07/10 | 09:44:38am'),
(171, '54.36.148.213', 'Tsavo_user', 1625900335, '2021/07/10 | 09:58:55am'),
(172, '34.86.35.26', 'Tsavo_user', 1625906845, '2021/07/10 | 11:47:25am'),
(173, '34.96.130.15', 'Tsavo_user', 1625907617, '2021/07/10 | 12:00:17pm'),
(174, '54.36.148.107', 'Tsavo_user', 1625908724, '2021/07/10 | 12:18:44pm'),
(175, '54.36.148.135', 'Tsavo_user', 1625912537, '2021/07/10 | 01:22:17pm'),
(176, '54.36.149.59', 'Tsavo_user', 1625917719, '2021/07/10 | 02:48:39pm'),
(177, '92.118.160.37', 'Tsavo_user', 1625919490, '2021/07/10 | 03:18:10pm'),
(178, '54.36.149.8', 'Tsavo_user', 1625929958, '2021/07/10 | 06:12:38pm'),
(179, '103.247.141.30', 'Tsavo_user', 1625937799, '2021/07/10 | 08:23:19pm'),
(180, '54.36.149.76', 'Tsavo_user', 1625940488, '2021/07/10 | 09:08:08pm'),
(181, '54.36.148.13', 'Tsavo_user', 1625947401, '2021/07/10 | 11:03:21pm'),
(182, '54.36.148.173', 'Tsavo_user', 1625951699, '2021/07/11 | 12:14:59am'),
(183, '54.36.149.7', 'Tsavo_user', 1625956001, '2021/07/11 | 01:26:41am'),
(184, '54.36.148.64', 'Tsavo_user', 1625968539, '2021/07/11 | 04:55:39am'),
(185, '54.36.148.250', 'Tsavo_user', 1625973687, '2021/07/11 | 06:21:27am'),
(186, '54.202.246.173', 'Tsavo_user', 1625976622, '2021/07/11 | 07:10:22am'),
(187, '35.163.51.224', 'Tsavo_user', 1625976639, '2021/07/11 | 07:10:39am'),
(188, '34.219.131.99', 'Tsavo_user', 1625976647, '2021/07/11 | 07:10:47am'),
(189, '92.118.160.1', 'Tsavo_user', 1625978588, '2021/07/11 | 07:43:08am'),
(190, '54.36.148.154', 'Tsavo_user', 1625982079, '2021/07/11 | 08:41:19am'),
(191, '92.118.160.5', 'Tsavo_user', 1625985118, '2021/07/11 | 09:31:58am'),
(192, '54.36.148.216', 'Tsavo_user', 1625985988, '2021/07/11 | 09:46:28am'),
(193, '196.104.175.169', 'Tsavo_user', 1625986117, '2021/07/11 | 09:48:37am'),
(194, '20.191.45.212', 'Tsavo_user', 1625996629, '2021/07/11 | 12:43:49pm'),
(195, '54.36.149.47', 'Tsavo_user', 1625999821, '2021/07/11 | 01:37:01pm'),
(196, '54.36.149.36', 'Tsavo_user', 1626004494, '2021/07/11 | 02:54:54pm'),
(197, '54.36.148.172', 'Tsavo_user', 1626010775, '2021/07/11 | 04:39:35pm'),
(198, '167.71.28.100', 'Tsavo_user', 1626011984, '2021/07/11 | 04:59:44pm'),
(199, '167.71.28.100', 'Tsavo_user', 1626011984, '2021/07/11 | 04:59:44pm'),
(200, '93.158.91.229', 'Tsavo_user', 1626013835, '2021/07/11 | 05:30:35pm'),
(201, '54.36.148.224', 'Tsavo_user', 1626013911, '2021/07/11 | 05:31:51pm'),
(202, '92.118.160.41', 'Tsavo_user', 1626022403, '2021/07/11 | 07:53:23pm'),
(203, '54.36.148.194', 'Tsavo_user', 1626028076, '2021/07/11 | 09:27:56pm'),
(204, '54.36.148.118', 'Tsavo_user', 1626036664, '2021/07/11 | 11:51:04pm'),
(205, '54.36.148.0', 'Tsavo_user', 1626041087, '2021/07/12 | 01:04:47am'),
(206, '66.249.64.236', 'Tsavo_user', 1626045489, '2021/07/12 | 02:18:09am'),
(207, '54.36.149.56', 'Tsavo_user', 1626045517, '2021/07/12 | 02:18:37am'),
(208, '54.36.148.88', 'Tsavo_user', 1626058961, '2021/07/12 | 06:02:41am'),
(209, '54.36.148.134', 'Tsavo_user', 1626061476, '2021/07/12 | 06:44:36am'),
(210, '221.2.163.231', 'Tsavo_user', 1626061522, '2021/07/12 | 06:45:22am'),
(211, '34.220.236.55', 'Tsavo_user', 1626064646, '2021/07/12 | 07:37:26am'),
(212, '54.202.172.244', 'Tsavo_user', 1626064795, '2021/07/12 | 07:39:55am'),
(213, '34.213.48.43', 'Tsavo_user', 1626064816, '2021/07/12 | 07:40:16am'),
(214, '34.222.29.95', 'Tsavo_user', 1626065116, '2021/07/12 | 07:45:16am'),
(215, '34.82.186.86', 'Tsavo_user', 1626069061, '2021/07/12 | 08:51:01am'),
(216, '54.36.149.62', 'Tsavo_user', 1626071391, '2021/07/12 | 09:29:51am'),
(217, '92.118.160.57', 'Tsavo_user', 1626071738, '2021/07/12 | 09:35:38am'),
(218, '54.36.148.170', 'Tsavo_user', 1626073624, '2021/07/12 | 10:07:04am'),
(219, '54.36.148.163', 'Tsavo_user', 1626087220, '2021/07/12 | 01:53:40pm'),
(220, '54.36.148.246', 'Tsavo_user', 1626091372, '2021/07/12 | 03:02:52pm'),
(221, '221.2.163.231', 'Tsavo_user', 1626093240, '2021/07/12 | 03:34:00pm'),
(222, '54.36.148.104', 'Tsavo_user', 1626101170, '2021/07/12 | 05:46:10pm'),
(223, '54.36.148.253', 'Tsavo_user', 1626104675, '2021/07/12 | 06:44:35pm'),
(224, '173.252.107.15', 'Tsavo_user', 1626108311, '2021/07/12 | 07:45:11pm'),
(225, '173.252.107.2', 'Tsavo_user', 1626108311, '2021/07/12 | 07:45:11pm'),
(226, '54.36.148.18', 'Tsavo_user', 1626116148, '2021/07/12 | 09:55:48pm'),
(227, '18.237.254.172', 'Tsavo_user', 1626118781, '2021/07/12 | 10:39:41pm'),
(228, '54.36.148.96', 'Tsavo_user', 1626119979, '2021/07/12 | 10:59:39pm'),
(229, '221.2.163.231', 'Tsavo_user', 1626123020, '2021/07/12 | 11:50:20pm'),
(230, '54.36.148.30', 'Tsavo_user', 1626130602, '2021/07/13 | 01:56:42am'),
(231, '54.36.149.83', 'Tsavo_user', 1626136167, '2021/07/13 | 03:29:27am'),
(232, '34.86.35.4', 'Tsavo_user', 1626138058, '2021/07/13 | 04:00:58am'),
(233, '54.36.148.138', 'Tsavo_user', 1626144899, '2021/07/13 | 05:54:59am'),
(234, '221.2.163.231', 'Tsavo_user', 1626147832, '2021/07/13 | 06:43:52am'),
(235, '54.36.148.252', 'Tsavo_user', 1626150868, '2021/07/13 | 07:34:28am'),
(236, '35.199.176.97', 'Tsavo_user', 1626156546, '2021/07/13 | 09:09:06am'),
(237, '54.36.148.108', 'Tsavo_user', 1626164922, '2021/07/13 | 11:28:42am'),
(238, '54.36.148.113', 'Tsavo_user', 1626172920, '2021/07/13 | 01:42:00pm'),
(239, '54.36.148.104', 'Tsavo_user', 1626179174, '2021/07/13 | 03:26:14pm'),
(240, '54.36.148.243', 'Tsavo_user', 1626184009, '2021/07/13 | 04:46:49pm'),
(241, '35.183.78.254', 'Tsavo_user', 1626194562, '2021/07/13 | 07:42:42pm'),
(242, '54.36.148.185', 'Tsavo_user', 1626198784, '2021/07/13 | 08:53:04pm'),
(243, '34.86.35.11', 'Tsavo_user', 1626199556, '2021/07/13 | 09:05:56pm'),
(244, '54.36.148.251', 'Tsavo_user', 1626210901, '2021/07/14 | 12:15:01am'),
(245, '34.96.130.18', 'Tsavo_user', 1626213174, '2021/07/14 | 12:52:54am'),
(246, '100.21.218.158', 'Tsavo_user', 1626220192, '2021/07/14 | 02:49:52am'),
(247, '54.36.148.196', 'Tsavo_user', 1626223325, '2021/07/14 | 03:42:05am'),
(248, '66.249.64.239', 'Tsavo_user', 1626229806, '2021/07/14 | 05:30:06am'),
(249, '54.36.148.103', 'Tsavo_user', 1626232872, '2021/07/14 | 06:21:12am'),
(250, '34.96.130.24', 'Tsavo_user', 1626234052, '2021/07/14 | 06:40:52am'),
(251, '54.36.149.97', 'Tsavo_user', 1626234771, '2021/07/14 | 06:52:51am'),
(252, '35.166.168.194', 'Tsavo_user', 1626236120, '2021/07/14 | 07:15:20am'),
(253, '34.219.168.133', 'Tsavo_user', 1626236512, '2021/07/14 | 07:21:52am'),
(254, '34.222.126.66', 'Tsavo_user', 1626237580, '2021/07/14 | 07:39:40am'),
(255, '197.248.112.253', 'Tsavo_user', 1626245496, '2021/07/14 | 09:51:36am'),
(256, '54.36.148.105', 'Tsavo_user', 1626247138, '2021/07/14 | 10:18:58am'),
(257, '41.139.128.171', 'Tsavo_user', 1626253022, '2021/07/14 | 11:57:02am'),
(258, '54.36.148.129', 'Tsavo_user', 1626255315, '2021/07/14 | 12:35:15pm'),
(259, '41.139.128.171', 'Tsavo_user', 1626260029, '2021/07/14 | 01:53:49pm'),
(260, '41.139.128.171', 'Tsavo_user', 1626261211, '2021/07/14 | 02:13:31pm'),
(261, '54.36.149.62', 'Tsavo_user', 1626262104, '2021/07/14 | 02:28:24pm'),
(262, '41.139.128.171', 'Tsavo_user', 1626262718, '2021/07/14 | 02:38:38pm'),
(263, '54.36.148.36', 'Tsavo_user', 1626265431, '2021/07/14 | 03:23:51pm'),
(264, '66.249.64.243', 'Tsavo_user', 1626267225, '2021/07/14 | 03:53:45pm'),
(265, '54.36.148.19', 'Tsavo_user', 1626280019, '2021/07/14 | 07:26:59pm'),
(266, '54.36.148.103', 'Tsavo_user', 1626286111, '2021/07/14 | 09:08:31pm'),
(267, '196.207.139.137', 'Tsavo_user', 1626288824, '2021/07/14 | 09:53:44pm'),
(268, '54.36.148.227', 'Tsavo_user', 1626289067, '2021/07/14 | 09:57:47pm'),
(269, '34.216.210.167', 'Tsavo_user', 1626293415, '2021/07/14 | 11:10:15pm'),
(270, '54.36.149.52', 'Tsavo_user', 1626297143, '2021/07/15 | 12:12:23am'),
(271, '191.101.209.52', 'Tsavo_user', 1626305226, '2021/07/15 | 02:27:06am'),
(272, '54.36.148.239', 'Tsavo_user', 1626310676, '2021/07/15 | 03:57:56am'),
(273, '54.36.148.49', 'Tsavo_user', 1626317751, '2021/07/15 | 05:55:51am'),
(274, '54.36.149.85', 'Tsavo_user', 1626320486, '2021/07/15 | 06:41:26am'),
(275, '34.211.226.205', 'Tsavo_user', 1626323401, '2021/07/15 | 07:30:01am'),
(276, '52.27.178.48', 'Tsavo_user', 1626323525, '2021/07/15 | 07:32:05am'),
(277, '54.213.230.18', 'Tsavo_user', 1626323560, '2021/07/15 | 07:32:40am'),
(278, '34.221.209.227', 'Tsavo_user', 1626323639, '2021/07/15 | 07:33:59am'),
(279, '54.36.148.247', 'Tsavo_user', 1626331294, '2021/07/15 | 09:41:34am'),
(280, '45.129.18.199', 'Tsavo_user', 1626332420, '2021/07/15 | 10:00:20am'),
(281, '54.36.148.146', 'Tsavo_user', 1626343843, '2021/07/15 | 01:10:43pm'),
(282, '54.36.148.7', 'Tsavo_user', 1626346172, '2021/07/15 | 01:49:32pm'),
(283, '54.36.149.83', 'Tsavo_user', 1626348715, '2021/07/15 | 02:31:55pm'),
(284, '62.210.91.2', 'Tsavo_user', 1626355689, '2021/07/15 | 04:28:09pm'),
(285, '116.203.29.216', 'Tsavo_user', 1626360244, '2021/07/15 | 05:44:04pm'),
(286, '116.203.29.216', 'Tsavo_user', 1626360251, '2021/07/15 | 05:44:11pm'),
(287, '54.36.148.107', 'Tsavo_user', 1626360671, '2021/07/15 | 05:51:11pm'),
(288, '66.249.64.202', 'Tsavo_user', 1626363473, '2021/07/15 | 06:37:53pm'),
(289, '54.36.148.128', 'Tsavo_user', 1626373710, '2021/07/15 | 09:28:30pm'),
(290, '34.86.35.11', 'Tsavo_user', 1626375311, '2021/07/15 | 09:55:11pm'),
(291, '34.86.35.24', 'Tsavo_user', 1626375923, '2021/07/15 | 10:05:23pm'),
(292, '54.36.148.55', 'Tsavo_user', 1626376290, '2021/07/15 | 10:11:30pm'),
(293, '54.36.148.228', 'Tsavo_user', 1626381897, '2021/07/15 | 11:44:57pm'),
(294, '76.72.172.167', 'Tsavo_user', 1626385832, '2021/07/16 | 12:50:32am'),
(295, '54.36.148.4', 'Tsavo_user', 1626392465, '2021/07/16 | 02:41:05am'),
(296, '54.36.149.102', 'Tsavo_user', 1626399874, '2021/07/16 | 04:44:34am'),
(297, '208.80.194.41', 'Tsavo_user', 1626400198, '2021/07/16 | 04:49:58am'),
(298, '54.36.148.114', 'Tsavo_user', 1626404873, '2021/07/16 | 06:07:53am'),
(299, '54.190.71.234', 'Tsavo_user', 1626409088, '2021/07/16 | 07:18:08am'),
(300, '54.71.24.248', 'Tsavo_user', 1626409305, '2021/07/16 | 07:21:45am'),
(301, '34.211.177.213', 'Tsavo_user', 1626409349, '2021/07/16 | 07:22:29am'),
(302, '34.96.130.31', 'Tsavo_user', 1626411224, '2021/07/16 | 07:53:44am'),
(303, '54.36.148.241', 'Tsavo_user', 1626412312, '2021/07/16 | 08:11:52am'),
(304, '41.139.128.171', 'Tsavo_user', 1626418223, '2021/07/16 | 09:50:23am'),
(305, '41.139.128.171', 'Tsavo_user', 1626418224, '2021/07/16 | 09:50:24am'),
(306, '41.139.128.171', 'Tsavo_user', 1626418247, '2021/07/16 | 09:50:47am'),
(307, '54.36.148.30', 'Tsavo_user', 1626425834, '2021/07/16 | 11:57:14am'),
(308, '66.249.64.205', 'Tsavo_user', 1626427275, '2021/07/16 | 12:21:15pm'),
(309, '54.36.148.235', 'Tsavo_user', 1626428072, '2021/07/16 | 12:34:32pm'),
(310, '54.36.148.179', 'Tsavo_user', 1626437582, '2021/07/16 | 03:13:02pm'),
(311, '54.36.148.59', 'Tsavo_user', 1626444055, '2021/07/16 | 05:00:55pm'),
(312, '34.96.130.28', 'Tsavo_user', 1626446174, '2021/07/16 | 05:36:14pm'),
(313, '54.36.148.231', 'Tsavo_user', 1626452075, '2021/07/16 | 07:14:35pm'),
(314, '54.36.149.53', 'Tsavo_user', 1626456737, '2021/07/16 | 08:32:17pm'),
(315, '34.77.162.5', 'Tsavo_user', 1626473516, '2021/07/17 | 01:11:56am'),
(316, '54.36.148.178', 'Tsavo_user', 1626477868, '2021/07/17 | 02:24:28am'),
(317, '54.36.149.66', 'Tsavo_user', 1626479860, '2021/07/17 | 02:57:40am'),
(318, '66.249.66.50', 'Tsavo_user', 1626488292, '2021/07/17 | 05:18:12am'),
(319, '66.249.66.54', 'Tsavo_user', 1626489395, '2021/07/17 | 05:36:35am'),
(320, '54.36.148.111', 'Tsavo_user', 1626489427, '2021/07/17 | 05:37:07am'),
(321, '66.249.66.50', 'Tsavo_user', 1626489521, '2021/07/17 | 05:38:41am'),
(322, '54.36.149.57', 'Tsavo_user', 1626492993, '2021/07/17 | 06:36:33am'),
(323, '34.212.99.228', 'Tsavo_user', 1626495359, '2021/07/17 | 07:15:59am'),
(324, '34.219.30.64', 'Tsavo_user', 1626495561, '2021/07/17 | 07:19:21am'),
(325, '54.190.21.52', 'Tsavo_user', 1626495643, '2021/07/17 | 07:20:43am'),
(326, '52.13.17.146', 'Tsavo_user', 1626495806, '2021/07/17 | 07:23:26am'),
(327, '137.226.113.44', 'Tsavo_user', 1626505528, '2021/07/17 | 10:05:28am'),
(328, '137.226.113.44', 'Tsavo_user', 1626505528, '2021/07/17 | 10:05:28am'),
(329, '34.77.162.5', 'Tsavo_user', 1626507084, '2021/07/17 | 10:31:24am'),
(330, '54.36.148.236', 'Tsavo_user', 1626507243, '2021/07/17 | 10:34:03am'),
(331, '66.249.66.47', 'Tsavo_user', 1626509475, '2021/07/17 | 11:11:15am'),
(332, '54.36.148.85', 'Tsavo_user', 1626510301, '2021/07/17 | 11:25:01am'),
(333, '119.162.122.3', 'Tsavo_user', 1626511736, '2021/07/17 | 11:48:56am'),
(334, '66.249.66.51', 'Tsavo_user', 1626512642, '2021/07/17 | 12:04:02pm'),
(335, '54.36.149.32', 'Tsavo_user', 1626514366, '2021/07/17 | 12:32:46pm'),
(336, '34.77.162.8', 'Tsavo_user', 1626518529, '2021/07/17 | 01:42:09pm'),
(337, '54.36.148.51', 'Tsavo_user', 1626527009, '2021/07/17 | 04:03:29pm'),
(338, '54.36.149.75', 'Tsavo_user', 1626541615, '2021/07/17 | 08:06:55pm'),
(339, '54.36.148.225', 'Tsavo_user', 1626544058, '2021/07/17 | 08:47:38pm'),
(340, '54.36.149.33', 'Tsavo_user', 1626545146, '2021/07/17 | 09:05:46pm'),
(341, '92.118.160.5', 'Tsavo_user', 1626556489, '2021/07/18 | 12:14:49am'),
(342, '54.36.148.45', 'Tsavo_user', 1626559461, '2021/07/18 | 01:04:21am'),
(343, '54.36.148.205', 'Tsavo_user', 1626573705, '2021/07/18 | 05:01:45am'),
(344, '54.36.148.79', 'Tsavo_user', 1626576697, '2021/07/18 | 05:51:37am'),
(345, '54.36.149.93', 'Tsavo_user', 1626578549, '2021/07/18 | 06:22:29am'),
(346, '54.36.149.99', 'Tsavo_user', 1626592095, '2021/07/18 | 10:08:15am'),
(347, '54.36.149.22', 'Tsavo_user', 1626597518, '2021/07/18 | 11:38:38am'),
(348, '66.249.66.51', 'Tsavo_user', 1626601378, '2021/07/18 | 12:42:58pm'),
(349, '54.36.148.107', 'Tsavo_user', 1626606327, '2021/07/18 | 02:05:27pm'),
(350, '107.150.37.187', 'Tsavo_user', 1626610399, '2021/07/18 | 03:13:19pm'),
(351, '107.150.37.187', 'Tsavo_user', 1626610399, '2021/07/18 | 03:13:19pm'),
(352, '54.36.149.90', 'Tsavo_user', 1626610929, '2021/07/18 | 03:22:09pm'),
(353, '92.118.160.9', 'Tsavo_user', 1626611944, '2021/07/18 | 03:39:04pm'),
(354, '54.36.148.215', 'Tsavo_user', 1626625951, '2021/07/18 | 07:32:31pm'),
(355, '54.36.148.26', 'Tsavo_user', 1626629260, '2021/07/18 | 08:27:40pm'),
(356, '62.210.91.2', 'Tsavo_user', 1626629550, '2021/07/18 | 08:32:30pm'),
(357, '54.36.149.73', 'Tsavo_user', 1626637302, '2021/07/18 | 10:41:42pm'),
(358, '54.36.148.145', 'Tsavo_user', 1626641512, '2021/07/18 | 11:51:52pm'),
(359, '66.249.64.192', 'Tsavo_user', 1626654056, '2021/07/19 | 03:20:56am'),
(360, '54.36.148.188', 'Tsavo_user', 1626658729, '2021/07/19 | 04:38:49am'),
(361, '54.36.149.64', 'Tsavo_user', 1626662565, '2021/07/19 | 05:42:45am'),
(362, '54.36.148.62', 'Tsavo_user', 1626669670, '2021/07/19 | 07:41:10am'),
(363, '92.118.160.41', 'Tsavo_user', 1626673028, '2021/07/19 | 08:37:08am'),
(364, '54.36.149.91', 'Tsavo_user', 1626673442, '2021/07/19 | 08:44:02am'),
(365, '92.118.160.61', 'Tsavo_user', 1626679745, '2021/07/19 | 10:29:05am'),
(366, '54.36.148.250', 'Tsavo_user', 1626684945, '2021/07/19 | 11:55:45am'),
(367, '54.36.148.224', 'Tsavo_user', 1626699185, '2021/07/19 | 03:53:05pm'),
(368, '54.36.148.252', 'Tsavo_user', 1626703252, '2021/07/19 | 05:00:52pm'),
(369, '66.249.64.192', 'Tsavo_user', 1626704968, '2021/07/19 | 05:29:28pm'),
(370, '54.36.148.187', 'Tsavo_user', 1626707575, '2021/07/19 | 06:12:55pm'),
(371, '54.36.148.253', 'Tsavo_user', 1626713224, '2021/07/19 | 07:47:04pm'),
(372, '54.202.87.165', 'Tsavo_user', 1626715900, '2021/07/19 | 08:31:40pm'),
(373, '54.202.87.165', 'Tsavo_user', 1626715901, '2021/07/19 | 08:31:41pm'),
(374, '34.209.174.100', 'Tsavo_user', 1626715925, '2021/07/19 | 08:32:05pm'),
(375, '144.86.173.75', 'Tsavo_user', 1626733343, '2021/07/20 | 01:22:23am'),
(376, '54.36.148.103', 'Tsavo_user', 1626739777, '2021/07/20 | 03:09:37am'),
(377, '92.118.160.5', 'Tsavo_user', 1626741096, '2021/07/20 | 03:31:36am'),
(378, '54.36.148.176', 'Tsavo_user', 1626744132, '2021/07/20 | 04:22:12am'),
(379, '54.36.148.49', 'Tsavo_user', 1626748778, '2021/07/20 | 05:39:38am'),
(380, '54.36.148.146', 'Tsavo_user', 1626751292, '2021/07/20 | 06:21:32am'),
(381, '164.90.141.220', 'Tsavo_user', 1626769561, '2021/07/20 | 11:26:01am'),
(382, '72.13.62.25', 'Tsavo_user', 1626777077, '2021/07/20 | 01:31:17pm'),
(383, '54.36.149.106', 'Tsavo_user', 1626777106, '2021/07/20 | 01:31:46pm'),
(384, '54.36.149.66', 'Tsavo_user', 1626783521, '2021/07/20 | 03:18:41pm'),
(385, '66.249.64.242', 'Tsavo_user', 1626786320, '2021/07/20 | 04:05:20pm'),
(386, '54.36.148.129', 'Tsavo_user', 1626787862, '2021/07/20 | 04:31:02pm'),
(387, '54.36.148.63', 'Tsavo_user', 1626791568, '2021/07/20 | 05:32:48pm'),
(388, '66.249.65.45', 'Tsavo_user', 1626805664, '2021/07/20 | 09:27:44pm'),
(389, '144.86.173.91', 'Tsavo_user', 1626808780, '2021/07/20 | 10:19:40pm'),
(390, '144.86.173.25', 'Tsavo_user', 1626812729, '2021/07/20 | 11:25:29pm'),
(391, '144.86.173.137', 'Tsavo_user', 1626816506, '2021/07/21 | 12:28:26am'),
(392, '54.36.148.98', 'Tsavo_user', 1626821152, '2021/07/21 | 01:45:52am'),
(393, '54.201.232.100', 'Tsavo_user', 1626821859, '2021/07/21 | 01:57:39am'),
(394, '54.36.148.157', 'Tsavo_user', 1626825004, '2021/07/21 | 02:50:04am'),
(395, '34.220.51.238', 'Tsavo_user', 1626826516, '2021/07/21 | 03:15:16am'),
(396, '34.217.28.105', 'Tsavo_user', 1626826597, '2021/07/21 | 03:16:37am'),
(397, '54.189.175.57', 'Tsavo_user', 1626826776, '2021/07/21 | 03:19:36am'),
(398, '34.209.44.16', 'Tsavo_user', 1626826802, '2021/07/21 | 03:20:02am'),
(399, '54.36.148.191', 'Tsavo_user', 1626827437, '2021/07/21 | 03:30:37am'),
(400, '52.36.33.219', 'Tsavo_user', 1626828129, '2021/07/21 | 03:42:09am'),
(401, '34.219.233.230', 'Tsavo_user', 1626828156, '2021/07/21 | 03:42:36am'),
(402, '66.249.65.93', 'Tsavo_user', 1626832555, '2021/07/21 | 04:55:55am'),
(403, '54.36.148.76', 'Tsavo_user', 1626834186, '2021/07/21 | 05:23:06am'),
(404, '144.86.173.80', 'Tsavo_user', 1626836979, '2021/07/21 | 06:09:39am'),
(405, '41.60.236.44', 'Tsavo_user', 1626854858, '2021/07/21 | 11:07:38am'),
(406, '41.60.236.44', 'Tsavo_user', 1626857028, '2021/07/21 | 11:43:48am'),
(407, '54.36.148.43', 'Tsavo_user', 1626862250, '2021/07/21 | 01:10:50pm'),
(408, '100.21.218.158', 'Tsavo_user', 1626862945, '2021/07/21 | 01:22:25pm'),
(409, '72.55.136.154', 'Tsavo_user', 1626863335, '2021/07/21 | 01:28:55pm'),
(410, '54.36.148.238', 'Tsavo_user', 1626866277, '2021/07/21 | 02:17:57pm'),
(411, '100.21.218.158', 'Tsavo_user', 1626866855, '2021/07/21 | 02:27:35pm'),
(412, '54.36.148.80', 'Tsavo_user', 1626867386, '2021/07/21 | 02:36:26pm'),
(413, '54.36.148.117', 'Tsavo_user', 1626876658, '2021/07/21 | 05:10:58pm'),
(414, '66.249.64.192', 'Tsavo_user', 1626880015, '2021/07/21 | 06:06:55pm'),
(415, '144.86.173.26', 'Tsavo_user', 1626881006, '2021/07/21 | 06:23:26pm'),
(416, '66.249.64.244', 'Tsavo_user', 1626890492, '2021/07/21 | 09:01:32pm'),
(417, '66.249.64.242', 'Tsavo_user', 1626892270, '2021/07/21 | 09:31:10pm'),
(418, '192.252.222.38', 'Tsavo_user', 1626893518, '2021/07/21 | 09:51:58pm'),
(419, '54.36.149.79', 'Tsavo_user', 1626896701, '2021/07/21 | 10:45:01pm'),
(420, '54.36.148.38', 'Tsavo_user', 1626904559, '2021/07/22 | 12:55:59am'),
(421, '54.36.148.211', 'Tsavo_user', 1626908134, '2021/07/22 | 01:55:34am'),
(422, '66.249.64.247', 'Tsavo_user', 1626910878, '2021/07/22 | 02:41:18am'),
(423, '54.36.148.26', 'Tsavo_user', 1626913267, '2021/07/22 | 03:21:07am'),
(424, '66.249.64.192', 'Tsavo_user', 1626921738, '2021/07/22 | 05:42:18am'),
(425, '54.36.148.89', 'Tsavo_user', 1626926185, '2021/07/22 | 06:56:25am'),
(426, '34.223.250.94', 'Tsavo_user', 1626927899, '2021/07/22 | 07:24:59am'),
(427, '34.211.210.29', 'Tsavo_user', 1626928167, '2021/07/22 | 07:29:27am'),
(428, '34.216.89.193', 'Tsavo_user', 1626928195, '2021/07/22 | 07:29:55am'),
(429, '54.187.233.204', 'Tsavo_user', 1626928696, '2021/07/22 | 07:38:16am'),
(430, '54.190.184.41', 'Tsavo_user', 1626929036, '2021/07/22 | 07:43:56am'),
(431, '54.244.60.120', 'Tsavo_user', 1626929053, '2021/07/22 | 07:44:13am'),
(432, '54.191.49.205', 'Tsavo_user', 1626929073, '2021/07/22 | 07:44:33am'),
(433, '18.237.187.150', 'Tsavo_user', 1626929099, '2021/07/22 | 07:44:59am'),
(434, '18.236.218.161', 'Tsavo_user', 1626929119, '2021/07/22 | 07:45:19am'),
(435, '54.36.148.213', 'Tsavo_user', 1626938715, '2021/07/22 | 10:25:15am'),
(436, '124.207.115.68', 'Tsavo_user', 1626948058, '2021/07/22 | 01:00:58pm'),
(437, '54.36.148.15', 'Tsavo_user', 1626950110, '2021/07/22 | 01:35:10pm'),
(438, '66.249.66.30', 'Tsavo_user', 1627504231, '2021/07/28 | 11:30:31pm'),
(439, '54.36.148.11', 'Tsavo_user', 1627506453, '2021/07/29 | 12:07:33am'),
(440, '54.36.148.91', 'Tsavo_user', 1627519707, '2021/07/29 | 03:48:27am'),
(441, '35.157.235.246', 'Tsavo_user', 1627523619, '2021/07/29 | 04:53:39am'),
(442, '18.184.195.200', 'Tsavo_user', 1627529585, '2021/07/29 | 06:33:05am'),
(443, '18.184.195.200', 'Tsavo_user', 1627530619, '2021/07/29 | 06:50:19am'),
(444, '34.209.51.60', 'Tsavo_user', 1627533844, '2021/07/29 | 07:44:04am'),
(445, '34.220.50.89', 'Tsavo_user', 1627533871, '2021/07/29 | 07:44:31am'),
(446, '52.12.27.177', 'Tsavo_user', 1627533884, '2021/07/29 | 07:44:44am'),
(447, '34.216.221.202', 'Tsavo_user', 1627533913, '2021/07/29 | 07:45:13am'),
(448, '66.249.66.55', 'Tsavo_user', 1627535496, '2021/07/29 | 08:11:36am'),
(449, '52.37.222.200', 'Tsavo_user', 1627535558, '2021/07/29 | 08:12:38am'),
(450, '34.222.21.127', 'Tsavo_user', 1627536279, '2021/07/29 | 08:24:39am'),
(451, '34.221.96.90', 'Tsavo_user', 1627536400, '2021/07/29 | 08:26:40am'),
(452, '54.36.148.207', 'Tsavo_user', 1627542683, '2021/07/29 | 10:11:23am'),
(453, '54.36.148.133', 'Tsavo_user', 1627546706, '2021/07/29 | 11:18:26am'),
(454, '66.249.66.47', 'Tsavo_user', 1627555868, '2021/07/29 | 01:51:08pm'),
(455, '66.249.66.47', 'Tsavo_user', 1627558869, '2021/07/29 | 02:41:09pm'),
(456, '54.36.148.28', 'Tsavo_user', 1627565872, '2021/07/29 | 04:37:52pm'),
(457, '54.36.149.61', 'Tsavo_user', 1627571757, '2021/07/29 | 06:15:57pm'),
(458, '195.154.35.52', 'Tsavo_user', 1627587685, '2021/07/29 | 10:41:25pm'),
(459, '54.36.148.215', 'Tsavo_user', 1627597552, '2021/07/30 | 01:25:52am'),
(460, '35.157.235.246', 'Tsavo_user', 1627602118, '2021/07/30 | 02:41:58am'),
(461, '34.217.129.205', 'Tsavo_user', 1627619541, '2021/07/30 | 07:32:21am'),
(462, '34.210.221.19', 'Tsavo_user', 1627619556, '2021/07/30 | 07:32:36am'),
(463, '54.190.75.152', 'Tsavo_user', 1627620175, '2021/07/30 | 07:42:55am'),
(464, '52.11.33.50', 'Tsavo_user', 1627620203, '2021/07/30 | 07:43:23am'),
(465, '34.222.245.48', 'Tsavo_user', 1627620214, '2021/07/30 | 07:43:34am'),
(466, '34.220.50.169', 'Tsavo_user', 1627620262, '2021/07/30 | 07:44:22am'),
(467, '54.36.148.141', 'Tsavo_user', 1627624866, '2021/07/30 | 09:01:06am'),
(468, '93.158.90.162', 'Tsavo_user', 1627634662, '2021/07/30 | 11:44:22am'),
(469, '34.212.23.214', 'Tsavo_user', 1627635877, '2021/07/30 | 12:04:37pm'),
(470, '54.36.148.83', 'Tsavo_user', 1627636024, '2021/07/30 | 12:07:04pm'),
(471, '144.86.173.31', 'Tsavo_user', 1627636585, '2021/07/30 | 12:16:25pm'),
(472, '137.226.113.44', 'Tsavo_user', 1627638940, '2021/07/30 | 12:55:40pm'),
(473, '137.226.113.44', 'Tsavo_user', 1627638940, '2021/07/30 | 12:55:40pm'),
(474, '54.36.148.245', 'Tsavo_user', 1627642391, '2021/07/30 | 01:53:11pm'),
(475, '198.244.174.157', 'Tsavo_user', 1627645315, '2021/07/30 | 02:41:55pm'),
(476, '191.101.217.51', 'Tsavo_user', 1627645905, '2021/07/30 | 02:51:45pm'),
(477, '54.36.149.34', 'Tsavo_user', 1627654039, '2021/07/30 | 05:07:19pm'),
(478, '66.249.64.248', 'Tsavo_user', 1627657147, '2021/07/30 | 05:59:07pm'),
(479, '65.154.226.100', 'Tsavo_user', 1627662372, '2021/07/30 | 07:26:12pm'),
(480, '54.208.156.102', 'Tsavo_user', 1627668303, '2021/07/30 | 09:05:03pm'),
(481, '54.36.148.56', 'Tsavo_user', 1627682779, '2021/07/31 | 01:06:19am'),
(482, '54.36.148.65', 'Tsavo_user', 1627698995, '2021/07/31 | 05:36:35am'),
(483, '76.72.172.167', 'Tsavo_user', 1627702267, '2021/07/31 | 06:31:07am'),
(484, '66.249.64.244', 'Tsavo_user', 1627702992, '2021/07/31 | 06:43:12am'),
(485, '54.36.148.214', 'Tsavo_user', 1627703170, '2021/07/31 | 06:46:10am'),
(486, '50.112.219.196', 'Tsavo_user', 1627705293, '2021/07/31 | 07:21:33am'),
(487, '54.202.186.255', 'Tsavo_user', 1627705310, '2021/07/31 | 07:21:50am'),
(488, '54.185.71.133', 'Tsavo_user', 1627705947, '2021/07/31 | 07:32:27am'),
(489, '34.221.242.72', 'Tsavo_user', 1627705969, '2021/07/31 | 07:32:49am'),
(490, '54.36.148.76', 'Tsavo_user', 1627706134, '2021/07/31 | 07:35:34am'),
(491, '54.190.211.116', 'Tsavo_user', 1627708946, '2021/07/31 | 08:22:26am'),
(492, '35.247.126.255', 'Tsavo_user', 1627708949, '2021/07/31 | 08:22:29am'),
(493, '54.201.147.12', 'Tsavo_user', 1627709028, '2021/07/31 | 08:23:48am'),
(494, '34.209.98.46', 'Tsavo_user', 1627709031, '2021/07/31 | 08:23:51am'),
(495, '34.209.234.41', 'Tsavo_user', 1627709291, '2021/07/31 | 08:28:11am'),
(496, '52.27.12.253', 'Tsavo_user', 1627709371, '2021/07/31 | 08:29:31am'),
(497, '76.72.172.165', 'Tsavo_user', 1627712543, '2021/07/31 | 09:22:23am'),
(498, '54.202.122.91', 'Tsavo_user', 1627713268, '2021/07/31 | 09:34:28am'),
(499, '20.191.45.212', 'Tsavo_user', 1627722887, '2021/07/31 | 12:14:47pm'),
(500, '144.86.173.19', 'Tsavo_user', 1627723390, '2021/07/31 | 12:23:10pm'),
(501, '54.36.148.117', 'Tsavo_user', 1627743491, '2021/07/31 | 05:58:11pm'),
(502, '92.118.160.17', 'Tsavo_user', 1627749531, '2021/07/31 | 07:38:51pm'),
(503, '54.36.148.157', 'Tsavo_user', 1627756510, '2021/07/31 | 09:35:10pm'),
(504, '54.36.148.114', 'Tsavo_user', 1627769119, '2021/08/01 | 01:05:19am'),
(505, '54.36.148.89', 'Tsavo_user', 1627772614, '2021/08/01 | 02:03:34am'),
(506, '66.249.64.249', 'Tsavo_user', 1627788380, '2021/08/01 | 06:26:20am'),
(507, '66.249.64.249', 'Tsavo_user', 1627788381, '2021/08/01 | 06:26:21am'),
(508, '54.191.122.85', 'Tsavo_user', 1627792132, '2021/08/01 | 07:28:52am'),
(509, '18.237.243.186', 'Tsavo_user', 1627792158, '2021/08/01 | 07:29:18am'),
(510, '54.189.67.119', 'Tsavo_user', 1627792416, '2021/08/01 | 07:33:36am'),
(511, '52.38.142.19', 'Tsavo_user', 1627792446, '2021/08/01 | 07:34:06am'),
(512, '105.160.49.57', 'Tsavo_user', 1627807060, '2021/08/01 | 11:37:40am'),
(513, '105.160.49.57', 'Tsavo_user', 1627807060, '2021/08/01 | 11:37:40am'),
(514, '92.118.160.37', 'Tsavo_user', 1627807248, '2021/08/01 | 11:40:48am'),
(515, '105.160.49.57', 'Tsavo_user', 1627807464, '2021/08/01 | 11:44:24am'),
(516, '105.160.88.39', 'Tsavo_user', 1627809450, '2021/08/01 | 12:17:30pm'),
(517, '105.160.49.57', 'Tsavo_user', 1627809516, '2021/08/01 | 12:18:36pm'),
(518, '54.36.149.47', 'Tsavo_user', 1627809813, '2021/08/01 | 12:23:33pm'),
(519, '54.36.148.221', 'Tsavo_user', 1627820217, '2021/08/01 | 03:16:57pm'),
(520, '54.36.149.101', 'Tsavo_user', 1627826742, '2021/08/01 | 05:05:42pm'),
(521, '66.249.75.18', 'Tsavo_user', 1627834010, '2021/08/01 | 07:06:50pm'),
(522, '54.36.149.36', 'Tsavo_user', 1627835458, '2021/08/01 | 07:30:58pm'),
(523, '45.129.18.181', 'Tsavo_user', 1627871033, '2021/08/02 | 05:23:53am'),
(524, '34.220.205.2', 'Tsavo_user', 1627878312, '2021/08/02 | 07:25:12am'),
(525, '34.212.223.183', 'Tsavo_user', 1627878364, '2021/08/02 | 07:26:04am'),
(526, '54.245.64.185', 'Tsavo_user', 1627878410, '2021/08/02 | 07:26:50am'),
(527, '52.43.50.147', 'Tsavo_user', 1627878676, '2021/08/02 | 07:31:16am'),
(528, '54.36.149.28', 'Tsavo_user', 1627883920, '2021/08/02 | 08:58:40am'),
(529, '54.36.148.62', 'Tsavo_user', 1627885970, '2021/08/02 | 09:32:50am'),
(530, '54.36.148.84', 'Tsavo_user', 1627892089, '2021/08/02 | 11:14:49am'),
(531, '18.218.48.68', 'Tsavo_user', 1627903950, '2021/08/02 | 02:32:30pm'),
(532, '18.218.48.68', 'Tsavo_user', 1627903950, '2021/08/02 | 02:32:30pm'),
(533, '54.36.148.29', 'Tsavo_user', 1627906132, '2021/08/02 | 03:08:52pm'),
(534, '54.71.161.127', 'Tsavo_user', 1627909707, '2021/08/02 | 04:08:27pm'),
(535, '52.27.252.218', 'Tsavo_user', 1627909865, '2021/08/02 | 04:11:05pm'),
(536, '66.249.64.248', 'Tsavo_user', 1627944363, '2021/08/03 | 01:46:03am'),
(537, '66.249.64.249', 'Tsavo_user', 1627947396, '2021/08/03 | 02:36:36am'),
(538, '54.36.148.32', 'Tsavo_user', 1627953266, '2021/08/03 | 04:14:26am'),
(539, '54.36.149.5', 'Tsavo_user', 1627957042, '2021/08/03 | 05:17:22am'),
(540, '54.36.149.0', 'Tsavo_user', 1627961442, '2021/08/03 | 06:30:42am'),
(541, '54.190.53.7', 'Tsavo_user', 1627964903, '2021/08/03 | 07:28:23am'),
(542, '54.245.47.103', 'Tsavo_user', 1627964905, '2021/08/03 | 07:28:25am'),
(543, '18.236.210.179', 'Tsavo_user', 1627964969, '2021/08/03 | 07:29:29am'),
(544, '54.202.185.152', 'Tsavo_user', 1627965069, '2021/08/03 | 07:31:09am'),
(545, '35.163.154.74', 'Tsavo_user', 1627965105, '2021/08/03 | 07:31:45am'),
(546, '18.237.165.224', 'Tsavo_user', 1627965263, '2021/08/03 | 07:34:23am'),
(547, '54.185.41.82', 'Tsavo_user', 1627965287, '2021/08/03 | 07:34:47am'),
(548, '52.38.117.86', 'Tsavo_user', 1627965469, '2021/08/03 | 07:37:49am'),
(549, '66.249.64.248', 'Tsavo_user', 1627967301, '2021/08/03 | 08:08:21am'),
(550, '52.41.108.248', 'Tsavo_user', 1627967732, '2021/08/03 | 08:15:32am'),
(551, '35.163.227.173', 'Tsavo_user', 1627967945, '2021/08/03 | 08:19:05am'),
(552, '18.236.210.179', 'Tsavo_user', 1627967983, '2021/08/03 | 08:19:43am'),
(553, '54.36.148.88', 'Tsavo_user', 1627972591, '2021/08/03 | 09:36:31am'),
(554, '66.249.64.246', 'Tsavo_user', 1627984963, '2021/08/03 | 01:02:43pm'),
(555, '66.249.64.244', 'Tsavo_user', 1627986545, '2021/08/03 | 01:29:05pm'),
(556, '105.160.48.109', 'Tsavo_user', 1628012422, '2021/08/03 | 08:40:22pm'),
(557, '54.36.148.63', 'Tsavo_user', 1628014742, '2021/08/03 | 09:19:02pm'),
(558, '144.86.173.72', 'Tsavo_user', 1628016842, '2021/08/03 | 09:54:02pm'),
(559, '54.36.148.69', 'Tsavo_user', 1628033407, '2021/08/04 | 02:30:07am'),
(560, '100.21.218.158', 'Tsavo_user', 1628037728, '2021/08/04 | 03:42:08am'),
(561, '54.36.149.106', 'Tsavo_user', 1628038957, '2021/08/04 | 04:02:37am'),
(562, '54.36.149.24', 'Tsavo_user', 1628043858, '2021/08/04 | 05:24:18am'),
(563, '35.167.180.202', 'Tsavo_user', 1628051095, '2021/08/04 | 07:24:55am'),
(564, '34.217.25.182', 'Tsavo_user', 1628051174, '2021/08/04 | 07:26:14am'),
(565, '54.244.166.250', 'Tsavo_user', 1628051239, '2021/08/04 | 07:27:19am'),
(566, '134.175.228.189', 'Tsavo_user', 1628059857, '2021/08/04 | 09:50:57am'),
(567, '134.175.228.189', 'Tsavo_user', 1628059857, '2021/08/04 | 09:50:57am'),
(568, '159.65.183.74', 'Tsavo_user', 1628069158, '2021/08/04 | 12:25:58pm'),
(569, '54.36.149.63', 'Tsavo_user', 1628069343, '2021/08/04 | 12:29:03pm'),
(570, '66.249.64.195', 'Tsavo_user', 1628073756, '2021/08/04 | 01:42:36pm'),
(571, '66.249.64.241', 'Tsavo_user', 1628084037, '2021/08/04 | 04:33:57pm'),
(572, '124.126.78.141', 'Tsavo_user', 1628087258, '2021/08/04 | 05:27:38pm'),
(573, '54.36.148.66', 'Tsavo_user', 1628096470, '2021/08/04 | 08:01:10pm'),
(574, '54.36.149.34', 'Tsavo_user', 1628104560, '2021/08/04 | 10:16:00pm'),
(575, '207.46.13.111', 'Tsavo_user', 1628105470, '2021/08/04 | 10:31:10pm'),
(576, '54.36.148.135', 'Tsavo_user', 1628108801, '2021/08/04 | 11:26:41pm'),
(577, '209.58.142.156', 'Tsavo_user', 1628115402, '2021/08/05 | 01:16:42am'),
(578, '54.36.148.7', 'Tsavo_user', 1628127203, '2021/08/05 | 04:33:23am'),
(579, '18.237.193.135', 'Tsavo_user', 1628136765, '2021/08/05 | 07:12:45am'),
(580, '54.244.38.27', 'Tsavo_user', 1628137037, '2021/08/05 | 07:17:17am'),
(581, '66.249.66.30', 'Tsavo_user', 1628147947, '2021/08/05 | 10:19:07am'),
(582, '54.36.148.121', 'Tsavo_user', 1628162582, '2021/08/05 | 02:23:02pm'),
(583, '54.36.148.245', 'Tsavo_user', 1628171565, '2021/08/05 | 04:52:45pm'),
(584, '54.36.148.184', 'Tsavo_user', 1628177195, '2021/08/05 | 06:26:35pm'),
(585, '143.198.8.200', 'Tsavo_user', 1628181985, '2021/08/05 | 07:46:25pm'),
(586, '54.36.148.185', 'Tsavo_user', 1628182382, '2021/08/05 | 07:53:02pm'),
(587, '64.225.53.60', 'Tsavo_user', 1628188076, '2021/08/05 | 09:27:56pm'),
(588, '167.99.116.130', 'Tsavo_user', 1628188349, '2021/08/05 | 09:32:29pm'),
(589, '83.229.75.113', 'Tsavo_user', 1628201892, '2021/08/06 | 01:18:12am'),
(590, '20.83.43.218', 'Tsavo_user', 1628213625, '2021/08/06 | 04:33:45am'),
(591, '20.83.43.218', 'Tsavo_user', 1628213639, '2021/08/06 | 04:33:59am'),
(592, '52.34.49.94', 'Tsavo_user', 1628223731, '2021/08/06 | 07:22:11am'),
(593, '54.36.148.247', 'Tsavo_user', 1628224575, '2021/08/06 | 07:36:15am'),
(594, '144.86.173.8', 'Tsavo_user', 1628226944, '2021/08/06 | 08:15:44am'),
(595, '54.36.148.107', 'Tsavo_user', 1628230545, '2021/08/06 | 09:15:45am'),
(596, '54.36.148.48', 'Tsavo_user', 1628237982, '2021/08/06 | 11:19:42am'),
(597, '54.36.148.183', 'Tsavo_user', 1628242923, '2021/08/06 | 12:42:03pm'),
(598, '108.62.9.186', 'Tsavo_user', 1628245124, '2021/08/06 | 01:18:44pm'),
(599, '41.81.27.185', 'Tsavo_user', 1628247289, '2021/08/06 | 01:54:49pm'),
(600, '41.81.27.185', 'Tsavo_user', 1628248074, '2021/08/06 | 02:07:54pm'),
(601, '41.81.27.185', 'Tsavo_user', 1628248110, '2021/08/06 | 02:08:30pm'),
(602, '41.81.27.185', 'Tsavo_user', 1628248147, '2021/08/06 | 02:09:07pm'),
(603, '41.81.27.185', 'Tsavo_user', 1628248209, '2021/08/06 | 02:10:09pm'),
(604, '41.81.27.185', 'Tsavo_user', 1628248233, '2021/08/06 | 02:10:33pm'),
(605, '41.81.27.185', 'Tsavo_user', 1628248262, '2021/08/06 | 02:11:02pm'),
(606, '41.81.27.185', 'Tsavo_user', 1628248348, '2021/08/06 | 02:12:28pm'),
(607, '41.81.27.185', 'Tsavo_user', 1628248615, '2021/08/06 | 02:16:55pm'),
(608, '41.81.27.185', 'Tsavo_user', 1628248664, '2021/08/06 | 02:17:44pm'),
(609, '41.81.27.185', 'Tsavo_user', 1628248889, '2021/08/06 | 02:21:29pm'),
(610, '41.81.27.185', 'Tsavo_user', 1628248993, '2021/08/06 | 02:23:13pm'),
(611, '41.81.27.185', 'Tsavo_user', 1628249009, '2021/08/06 | 02:23:29pm'),
(612, '41.81.27.185', 'Tsavo_user', 1628249041, '2021/08/06 | 02:24:01pm'),
(613, '41.81.27.185', 'Tsavo_user', 1628249123, '2021/08/06 | 02:25:23pm'),
(614, '41.81.27.185', 'Tsavo_user', 1628249324, '2021/08/06 | 02:28:44pm'),
(615, '41.81.27.185', 'Tsavo_user', 1628249446, '2021/08/06 | 02:30:46pm'),
(616, '41.81.27.185', 'Tsavo_user', 1628249495, '2021/08/06 | 02:31:35pm'),
(617, '41.81.27.185', 'Tsavo_user', 1628249590, '2021/08/06 | 02:33:10pm'),
(618, '41.81.27.185', 'Tsavo_user', 1628249624, '2021/08/06 | 02:33:44pm'),
(619, '41.81.27.185', 'Tsavo_user', 1628249823, '2021/08/06 | 02:37:03pm'),
(620, '41.81.27.185', 'Tsavo_user', 1628249850, '2021/08/06 | 02:37:30pm'),
(621, '41.81.27.185', 'Tsavo_user', 1628249859, '2021/08/06 | 02:37:39pm'),
(622, '41.81.27.185', 'Tsavo_user', 1628249887, '2021/08/06 | 02:38:07pm'),
(623, '41.81.27.185', 'Tsavo_user', 1628249895, '2021/08/06 | 02:38:15pm'),
(624, '41.81.27.185', 'Tsavo_user', 1628249924, '2021/08/06 | 02:38:44pm'),
(625, '41.81.27.185', 'Tsavo_user', 1628250053, '2021/08/06 | 02:40:53pm'),
(626, '41.81.27.185', 'Tsavo_user', 1628250096, '2021/08/06 | 02:41:36pm'),
(627, '41.81.27.185', 'Tsavo_user', 1628250179, '2021/08/06 | 02:42:59pm'),
(628, '41.81.27.185', 'Tsavo_user', 1628250213, '2021/08/06 | 02:43:33pm'),
(629, '41.81.27.185', 'Tsavo_user', 1628250730, '2021/08/06 | 02:52:10pm'),
(630, '41.81.27.185', 'Tsavo_user', 1628250802, '2021/08/06 | 02:53:22pm'),
(631, '41.81.27.185', 'Tsavo_user', 1628250848, '2021/08/06 | 02:54:08pm'),
(632, '41.81.27.185', 'Tsavo_user', 1628251039, '2021/08/06 | 02:57:19pm'),
(633, '41.81.27.185', 'Tsavo_user', 1628251064, '2021/08/06 | 02:57:44pm'),
(634, '62.210.88.24', 'Tsavo_user', 1628269623, '2021/08/06 | 08:07:03pm'),
(635, '41.81.19.185', 'Tsavo_user', 1628270436, '2021/08/06 | 08:20:36pm'),
(636, '54.36.148.84', 'Tsavo_user', 1628287402, '2021/08/07 | 01:03:22am'),
(637, '54.36.149.47', 'Tsavo_user', 1628293690, '2021/08/07 | 02:48:10am'),
(638, '66.249.64.239', 'Tsavo_user', 1628296007, '2021/08/07 | 03:26:47am'),
(639, '144.86.173.141', 'Tsavo_user', 1628296992, '2021/08/07 | 03:43:12am'),
(640, '114.119.146.240', 'Tsavo_user', 1628297252, '2021/08/07 | 03:47:32am'),
(641, '54.36.149.62', 'Tsavo_user', 1628298209, '2021/08/07 | 04:03:29am'),
(642, '92.118.160.61', 'Tsavo_user', 1628298941, '2021/08/07 | 04:15:41am'),
(643, '54.36.148.40', 'Tsavo_user', 1628304613, '2021/08/07 | 05:50:13am'),
(644, '137.226.113.44', 'Tsavo_user', 1628310106, '2021/08/07 | 07:21:46am'),
(645, '137.226.113.44', 'Tsavo_user', 1628310106, '2021/08/07 | 07:21:46am'),
(646, '54.212.186.231', 'Tsavo_user', 1628310904, '2021/08/07 | 07:35:04am'),
(647, '18.237.38.64', 'Tsavo_user', 1628310931, '2021/08/07 | 07:35:31am'),
(648, '54.68.31.63', 'Tsavo_user', 1628310942, '2021/08/07 | 07:35:42am'),
(649, '34.215.173.17', 'Tsavo_user', 1628310972, '2021/08/07 | 07:36:12am'),
(650, '18.234.224.72', 'Tsavo_user', 1628313692, '2021/08/07 | 08:21:32am'),
(651, '157.55.39.133', 'Tsavo_user', 1628316961, '2021/08/07 | 09:16:01am'),
(652, '54.36.148.141', 'Tsavo_user', 1628353027, '2021/08/07 | 07:17:07pm'),
(653, '185.130.104.185', 'Tsavo_user', 1628356288, '2021/08/07 | 08:11:28pm'),
(654, '54.36.148.151', 'Tsavo_user', 1628356754, '2021/08/07 | 08:19:14pm'),
(655, '54.36.149.52', 'Tsavo_user', 1628359404, '2021/08/07 | 09:03:24pm'),
(656, '92.118.160.41', 'Tsavo_user', 1628360344, '2021/08/07 | 09:19:04pm'),
(657, '54.36.149.6', 'Tsavo_user', 1628364026, '2021/08/07 | 10:20:26pm'),
(658, '77.241.196.131', 'Tsavo_user', 1628365173, '2021/08/07 | 10:39:33pm'),
(659, '51.158.127.119', 'Tsavo_user', 1628382380, '2021/08/08 | 03:26:20am'),
(660, '54.201.15.168', 'Tsavo_user', 1628396774, '2021/08/08 | 07:26:14am'),
(661, '54.186.215.139', 'Tsavo_user', 1628396794, '2021/08/08 | 07:26:34am'),
(662, '45.129.18.201', 'Tsavo_user', 1628405460, '2021/08/08 | 09:51:00am'),
(663, '114.119.141.76', 'Tsavo_user', 1628411009, '2021/08/08 | 11:23:29am'),
(664, '51.158.191.84', 'Tsavo_user', 1628411434, '2021/08/08 | 11:30:34am'),
(665, '54.36.149.28', 'Tsavo_user', 1628421128, '2021/08/08 | 02:12:08pm'),
(666, '54.36.149.51', 'Tsavo_user', 1628426073, '2021/08/08 | 03:34:33pm'),
(667, '142.44.167.89', 'Tsavo_user', 1628426677, '2021/08/08 | 03:44:37pm'),
(668, '142.44.167.89', 'Tsavo_user', 1628428799, '2021/08/08 | 04:19:59pm'),
(669, '54.36.148.150', 'Tsavo_user', 1628430659, '2021/08/08 | 04:50:59pm'),
(670, '54.36.148.29', 'Tsavo_user', 1628434973, '2021/08/08 | 06:02:53pm'),
(671, '41.81.19.185', 'Tsavo_user', 1628435569, '2021/08/08 | 06:12:49pm'),
(672, '41.81.19.185', 'Tsavo_user', 1628437330, '2021/08/08 | 06:42:10pm'),
(673, '66.249.66.51', 'Tsavo_user', 1628454731, '2021/08/08 | 11:32:11pm'),
(674, '66.249.66.4', 'Tsavo_user', 1628479300, '2021/08/09 | 06:21:40am');
INSERT INTO `new_user_cookie` (`id`, `ip`, `name`, `value`, `date`) VALUES
(675, '66.249.66.52', 'Tsavo_user', 1628479350, '2021/08/09 | 06:22:30am'),
(676, '66.249.66.31', 'Tsavo_user', 1628479549, '2021/08/09 | 06:25:49am'),
(677, '35.161.34.66', 'Tsavo_user', 1628482335, '2021/08/09 | 07:12:15am'),
(678, '34.209.72.84', 'Tsavo_user', 1628482356, '2021/08/09 | 07:12:36am'),
(679, '34.216.209.104', 'Tsavo_user', 1628483060, '2021/08/09 | 07:24:20am'),
(680, '34.221.22.141', 'Tsavo_user', 1628483167, '2021/08/09 | 07:26:07am'),
(681, '54.36.148.8', 'Tsavo_user', 1628483484, '2021/08/09 | 07:31:24am'),
(682, '52.11.221.167', 'Tsavo_user', 1628484436, '2021/08/09 | 07:47:16am'),
(683, '163.172.148.199', 'Tsavo_user', 1628493314, '2021/08/09 | 10:15:14am'),
(684, '54.36.148.255', 'Tsavo_user', 1628496046, '2021/08/09 | 11:00:46am'),
(685, '54.36.148.174', 'Tsavo_user', 1628501016, '2021/08/09 | 12:23:36pm'),
(686, '54.36.149.92', 'Tsavo_user', 1628506622, '2021/08/09 | 01:57:02pm'),
(687, '34.219.19.66', 'Tsavo_user', 1628534447, '2021/08/09 | 09:40:47pm'),
(688, '54.36.148.154', 'Tsavo_user', 1628553455, '2021/08/10 | 02:57:35am'),
(689, '54.36.148.176', 'Tsavo_user', 1628558659, '2021/08/10 | 04:24:19am'),
(690, '54.36.148.9', 'Tsavo_user', 1628568196, '2021/08/10 | 07:03:16am'),
(691, '54.187.8.132', 'Tsavo_user', 1628569630, '2021/08/10 | 07:27:10am'),
(692, '34.219.225.55', 'Tsavo_user', 1628569632, '2021/08/10 | 07:27:12am'),
(693, '54.214.192.201', 'Tsavo_user', 1628569659, '2021/08/10 | 07:27:39am'),
(694, '52.41.41.240', 'Tsavo_user', 1628569722, '2021/08/10 | 07:28:42am'),
(695, '52.38.129.71', 'Tsavo_user', 1628569791, '2021/08/10 | 07:29:51am'),
(696, '52.41.41.240', 'Tsavo_user', 1628569795, '2021/08/10 | 07:29:55am'),
(697, '34.222.64.63', 'Tsavo_user', 1628570134, '2021/08/10 | 07:35:34am'),
(698, '34.221.118.140', 'Tsavo_user', 1628570173, '2021/08/10 | 07:36:13am'),
(699, '54.36.148.98', 'Tsavo_user', 1628572736, '2021/08/10 | 08:18:56am'),
(700, '192.71.42.108', 'Tsavo_user', 1628621165, '2021/08/10 | 09:46:05pm'),
(701, '54.36.148.174', 'Tsavo_user', 1628624752, '2021/08/10 | 10:45:52pm'),
(702, '144.86.173.16', 'Tsavo_user', 1628627914, '2021/08/10 | 11:38:34pm'),
(703, '54.36.148.168', 'Tsavo_user', 1628629317, '2021/08/11 | 12:01:57am'),
(704, '54.36.148.98', 'Tsavo_user', 1628635430, '2021/08/11 | 01:43:50am'),
(705, '54.36.148.37', 'Tsavo_user', 1628644140, '2021/08/11 | 04:09:00am'),
(706, '35.166.228.211', 'Tsavo_user', 1628655569, '2021/08/11 | 07:19:29am'),
(707, '34.222.87.3', 'Tsavo_user', 1628655597, '2021/08/11 | 07:19:57am'),
(708, '34.221.184.30', 'Tsavo_user', 1628655848, '2021/08/11 | 07:24:08am'),
(709, '54.202.252.111', 'Tsavo_user', 1628655914, '2021/08/11 | 07:25:14am'),
(710, '34.217.27.34', 'Tsavo_user', 1628656096, '2021/08/11 | 07:28:16am'),
(711, '54.36.149.52', 'Tsavo_user', 1628684114, '2021/08/11 | 03:15:14pm'),
(712, '144.86.173.137', 'Tsavo_user', 1628688437, '2021/08/11 | 04:27:17pm'),
(713, '54.36.148.97', 'Tsavo_user', 1628699833, '2021/08/11 | 07:37:13pm'),
(714, '54.36.148.208', 'Tsavo_user', 1628704876, '2021/08/11 | 09:01:16pm'),
(715, '54.36.149.83', 'Tsavo_user', 1628707980, '2021/08/11 | 09:53:00pm'),
(716, '34.219.93.94', 'Tsavo_user', 1628742084, '2021/08/12 | 07:21:24am'),
(717, '54.203.73.198', 'Tsavo_user', 1628746204, '2021/08/12 | 08:30:04am'),
(718, '54.36.148.222', 'Tsavo_user', 1628751930, '2021/08/12 | 10:05:30am'),
(719, '54.36.148.150', 'Tsavo_user', 1628768156, '2021/08/12 | 02:35:56pm'),
(720, '54.36.149.44', 'Tsavo_user', 1628774000, '2021/08/12 | 04:13:20pm'),
(721, '54.36.149.92', 'Tsavo_user', 1628783914, '2021/08/12 | 06:58:34pm'),
(722, '114.119.128.143', 'Tsavo_user', 1628803933, '2021/08/13 | 12:32:13am'),
(723, '139.155.16.233', 'Tsavo_user', 1628812239, '2021/08/13 | 02:50:39am'),
(724, '54.36.149.89', 'Tsavo_user', 1628819037, '2021/08/13 | 04:43:57am'),
(725, '144.86.173.132', 'Tsavo_user', 1628819692, '2021/08/13 | 04:54:52am'),
(726, '54.218.111.68', 'Tsavo_user', 1628828367, '2021/08/13 | 07:19:27am'),
(727, '34.222.33.75', 'Tsavo_user', 1628828426, '2021/08/13 | 07:20:26am'),
(728, '54.36.148.45', 'Tsavo_user', 1628828861, '2021/08/13 | 07:27:41am'),
(729, '35.161.13.254', 'Tsavo_user', 1628829910, '2021/08/13 | 07:45:10am'),
(730, '52.11.226.18', 'Tsavo_user', 1628829926, '2021/08/13 | 07:45:26am'),
(731, '54.36.148.137', 'Tsavo_user', 1628832801, '2021/08/13 | 08:33:21am'),
(732, '54.36.148.163', 'Tsavo_user', 1628842141, '2021/08/13 | 11:09:01am'),
(733, '137.226.113.44', 'Tsavo_user', 1628849964, '2021/08/13 | 01:19:24pm'),
(734, '137.226.113.44', 'Tsavo_user', 1628849964, '2021/08/13 | 01:19:24pm'),
(735, '102.22.214.238', 'Tsavo_user', 1628860733, '2021/08/13 | 04:18:53pm'),
(736, '66.249.64.223', 'Tsavo_user', 1628865770, '2021/08/13 | 05:42:50pm'),
(737, '15.222.21.105', 'Tsavo_user', 1628873946, '2021/08/13 | 07:59:06pm'),
(738, '2c0f:fe38:2103:7d38:1:1:843a:eeda', 'Tsavo_user', 1628876922, '2021/08/13 | 08:48:42pm'),
(739, '54.36.149.11', 'Tsavo_user', 1628877335, '2021/08/13 | 08:55:35pm'),
(740, '54.36.148.127', 'Tsavo_user', 1628884044, '2021/08/13 | 10:47:24pm'),
(741, '54.36.148.236', 'Tsavo_user', 1628888497, '2021/08/14 | 12:01:37am'),
(742, '54.36.148.14', 'Tsavo_user', 1628898354, '2021/08/14 | 02:45:54am'),
(743, '52.12.181.159', 'Tsavo_user', 1628914443, '2021/08/14 | 07:14:03am'),
(744, '35.162.129.85', 'Tsavo_user', 1628914516, '2021/08/14 | 07:15:16am'),
(745, '34.220.62.152', 'Tsavo_user', 1628914525, '2021/08/14 | 07:15:25am'),
(746, '34.209.41.144', 'Tsavo_user', 1628914767, '2021/08/14 | 07:19:27am'),
(747, '52.40.225.34', 'Tsavo_user', 1628915448, '2021/08/14 | 07:30:48am'),
(748, '34.221.47.100', 'Tsavo_user', 1628915467, '2021/08/14 | 07:31:07am'),
(749, '92.118.160.1', 'Tsavo_user', 1628920708, '2021/08/14 | 08:58:28am'),
(750, '144.86.173.78', 'Tsavo_user', 1628922969, '2021/08/14 | 09:36:09am'),
(751, '54.36.149.102', 'Tsavo_user', 1628927581, '2021/08/14 | 10:53:01am'),
(752, '54.36.149.84', 'Tsavo_user', 1628933671, '2021/08/14 | 12:34:31pm'),
(753, '144.86.173.9', 'Tsavo_user', 1628933944, '2021/08/14 | 12:39:04pm'),
(754, '54.36.149.49', 'Tsavo_user', 1628937782, '2021/08/14 | 01:43:02pm'),
(755, '54.36.148.4', 'Tsavo_user', 1628950079, '2021/08/14 | 05:07:59pm'),
(756, '103.253.25.169', 'Tsavo_user', 1628950420, '2021/08/14 | 05:13:40pm'),
(757, '114.119.128.154', 'Tsavo_user', 1628962942, '2021/08/14 | 08:42:22pm'),
(758, '124.126.78.186', 'Tsavo_user', 1628964644, '2021/08/14 | 09:10:44pm'),
(759, '92.118.160.5', 'Tsavo_user', 1628970822, '2021/08/14 | 10:53:42pm'),
(760, '54.36.148.39', 'Tsavo_user', 1628976188, '2021/08/15 | 12:23:08am'),
(761, '54.36.148.134', 'Tsavo_user', 1628983262, '2021/08/15 | 02:21:02am'),
(762, '54.36.148.247', 'Tsavo_user', 1628987649, '2021/08/15 | 03:34:09am'),
(763, '81.69.191.124', 'Tsavo_user', 1628997788, '2021/08/15 | 06:23:08am'),
(764, '54.36.148.40', 'Tsavo_user', 1629004415, '2021/08/15 | 08:13:35am'),
(765, '54.36.148.89', 'Tsavo_user', 1629017788, '2021/08/15 | 11:56:28am'),
(766, '114.119.128.172', 'Tsavo_user', 1629018408, '2021/08/15 | 12:06:48pm'),
(767, '54.36.149.77', 'Tsavo_user', 1629048877, '2021/08/15 | 08:34:37pm'),
(768, '54.36.148.116', 'Tsavo_user', 1629054629, '2021/08/15 | 10:10:29pm'),
(769, '54.36.149.85', 'Tsavo_user', 1629059620, '2021/08/15 | 11:33:40pm'),
(770, '54.36.148.150', 'Tsavo_user', 1629060996, '2021/08/15 | 11:56:36pm'),
(771, '216.19.195.220', 'Tsavo_user', 1629076535, '2021/08/16 | 04:15:35am'),
(772, '92.118.160.13', 'Tsavo_user', 1629085199, '2021/08/16 | 06:39:59am'),
(773, '35.160.67.79', 'Tsavo_user', 1629088251, '2021/08/16 | 07:30:51am'),
(774, '54.245.175.24', 'Tsavo_user', 1629088265, '2021/08/16 | 07:31:05am'),
(775, '52.89.246.203', 'Tsavo_user', 1629088289, '2021/08/16 | 07:31:29am'),
(776, '197.248.23.182', 'Tsavo_user', 1629097238, '2021/08/16 | 10:00:38am'),
(777, '54.36.149.13', 'Tsavo_user', 1629100515, '2021/08/16 | 10:55:15am'),
(778, '151.80.195.102', 'Tsavo_user', 1629103535, '2021/08/16 | 11:45:35am'),
(779, '92.118.160.5', 'Tsavo_user', 1629103552, '2021/08/16 | 11:45:52am'),
(780, '54.36.149.7', 'Tsavo_user', 1629108600, '2021/08/16 | 01:10:00pm'),
(781, '54.36.148.88', 'Tsavo_user', 1629113940, '2021/08/16 | 02:39:00pm'),
(782, '54.36.148.50', 'Tsavo_user', 1629116564, '2021/08/16 | 03:22:44pm'),
(783, '2c0f:fe38:2103:7d38:1:1:843a:eeda', 'Tsavo_user', 1629124299, '2021/08/16 | 05:31:39pm'),
(784, '66.249.69.205', 'Tsavo_user', 1629124988, '2021/08/16 | 05:43:08pm'),
(785, '179.43.169.181', 'Tsavo_user', 1629127266, '2021/08/16 | 06:21:06pm'),
(786, '179.43.169.181', 'Tsavo_user', 1629127295, '2021/08/16 | 06:21:35pm'),
(787, '179.43.169.181', 'Tsavo_user', 1629127311, '2021/08/16 | 06:21:51pm'),
(788, '66.249.69.209', 'Tsavo_user', 1629128239, '2021/08/16 | 06:37:19pm'),
(789, '34.145.60.157', 'Tsavo_user', 1629139708, '2021/08/16 | 09:48:28pm'),
(790, '52.41.31.121', 'Tsavo_user', 1629147447, '2021/08/16 | 11:57:27pm'),
(791, '52.41.31.121', 'Tsavo_user', 1629147450, '2021/08/16 | 11:57:30pm'),
(792, '185.220.100.247', 'Tsavo_user', 1629152373, '2021/08/17 | 01:19:33am'),
(793, '144.86.173.86', 'Tsavo_user', 1629155248, '2021/08/17 | 02:07:28am'),
(794, '54.36.148.188', 'Tsavo_user', 1629155782, '2021/08/17 | 02:16:22am'),
(795, '144.86.173.145', 'Tsavo_user', 1629160747, '2021/08/17 | 03:39:07am'),
(796, '64.246.178.34', 'Tsavo_user', 1629160860, '2021/08/17 | 03:41:00am'),
(797, '54.36.148.184', 'Tsavo_user', 1629161063, '2021/08/17 | 03:44:23am'),
(798, '54.36.149.19', 'Tsavo_user', 1629162827, '2021/08/17 | 04:13:47am'),
(799, '54.36.148.209', 'Tsavo_user', 1629168207, '2021/08/17 | 05:43:27am'),
(800, '35.167.78.33', 'Tsavo_user', 1629175474, '2021/08/17 | 07:44:34am'),
(801, '52.32.86.217', 'Tsavo_user', 1629175504, '2021/08/17 | 07:45:04am'),
(802, '20.106.152.225', 'Tsavo_user', 1629187728, '2021/08/17 | 11:08:48am'),
(803, '45.129.18.94', 'Tsavo_user', 1629192908, '2021/08/17 | 12:35:08pm'),
(804, '54.36.148.80', 'Tsavo_user', 1629203132, '2021/08/17 | 03:25:32pm'),
(805, '54.36.148.150', 'Tsavo_user', 1629212146, '2021/08/17 | 05:55:46pm'),
(806, '54.36.148.235', 'Tsavo_user', 1629217264, '2021/08/17 | 07:21:04pm'),
(807, '54.36.149.41', 'Tsavo_user', 1629222217, '2021/08/17 | 08:43:37pm'),
(808, '157.55.39.26', 'Tsavo_user', 1629231968, '2021/08/17 | 11:26:08pm'),
(809, '66.249.64.240', 'Tsavo_user', 1629240950, '2021/08/18 | 01:55:50am'),
(810, '66.249.64.240', 'Tsavo_user', 1629245092, '2021/08/18 | 03:04:52am'),
(811, '196.201.218.36', 'Tsavo_user', 1629245872, '2021/08/18 | 03:17:52am'),
(812, '54.36.148.238', 'Tsavo_user', 1629253067, '2021/08/18 | 05:17:47am'),
(813, '35.226.197.112', 'Tsavo_user', 1629253287, '2021/08/18 | 05:21:27am'),
(814, '54.36.148.21', 'Tsavo_user', 1629259941, '2021/08/18 | 07:12:21am'),
(815, '34.222.150.237', 'Tsavo_user', 1629261324, '2021/08/18 | 07:35:24am'),
(816, '35.162.202.30', 'Tsavo_user', 1629261343, '2021/08/18 | 07:35:43am'),
(817, '34.219.1.39', 'Tsavo_user', 1629261998, '2021/08/18 | 07:46:38am'),
(818, '35.164.138.155', 'Tsavo_user', 1629261999, '2021/08/18 | 07:46:39am'),
(819, '54.36.148.204', 'Tsavo_user', 1629269971, '2021/08/18 | 09:59:31am'),
(820, '54.36.148.107', 'Tsavo_user', 1629275346, '2021/08/18 | 11:29:06am'),
(821, '144.86.173.31', 'Tsavo_user', 1629278805, '2021/08/18 | 12:26:45pm'),
(822, '34.127.81.137', 'Tsavo_user', 1629279630, '2021/08/18 | 12:40:30pm'),
(823, '54.36.148.156', 'Tsavo_user', 1629301831, '2021/08/18 | 06:50:31pm'),
(824, '54.36.149.101', 'Tsavo_user', 1629305714, '2021/08/18 | 07:55:14pm'),
(825, '66.249.64.243', 'Tsavo_user', 1629308265, '2021/08/18 | 08:37:45pm'),
(826, '54.36.149.37', 'Tsavo_user', 1629322800, '2021/08/19 | 12:40:00am'),
(827, '66.249.64.195', 'Tsavo_user', 1629327158, '2021/08/19 | 01:52:38am'),
(828, '54.36.149.60', 'Tsavo_user', 1629328035, '2021/08/19 | 02:07:15am'),
(829, '213.168.249.115', 'Tsavo_user', 1629341907, '2021/08/19 | 05:58:27am'),
(830, '18.236.217.85', 'Tsavo_user', 1629348391, '2021/08/19 | 07:46:31am'),
(831, '52.35.231.9', 'Tsavo_user', 1629348576, '2021/08/19 | 07:49:36am'),
(832, '54.202.237.33', 'Tsavo_user', 1629348605, '2021/08/19 | 07:50:05am'),
(833, '34.214.23.233', 'Tsavo_user', 1629348766, '2021/08/19 | 07:52:46am'),
(834, '34.223.252.161', 'Tsavo_user', 1629348780, '2021/08/19 | 07:53:00am'),
(835, '54.36.149.36', 'Tsavo_user', 1629355234, '2021/08/19 | 09:40:34am'),
(836, '54.36.149.100', 'Tsavo_user', 1629364915, '2021/08/19 | 12:21:55pm'),
(837, '34.82.157.58', 'Tsavo_user', 1629367033, '2021/08/19 | 12:57:13pm'),
(838, '54.36.148.50', 'Tsavo_user', 1629369686, '2021/08/19 | 01:41:26pm'),
(839, '54.36.149.107', 'Tsavo_user', 1629377686, '2021/08/19 | 03:54:46pm'),
(840, '34.145.105.224', 'Tsavo_user', 1629385094, '2021/08/19 | 05:58:14pm'),
(841, '54.203.73.198', 'Tsavo_user', 1629388116, '2021/08/19 | 06:48:36pm'),
(842, '34.216.210.167', 'Tsavo_user', 1629402254, '2021/08/19 | 10:44:14pm'),
(843, '54.36.148.157', 'Tsavo_user', 1629403267, '2021/08/19 | 11:01:07pm'),
(844, '54.36.149.34', 'Tsavo_user', 1629413182, '2021/08/20 | 01:46:22am'),
(845, '54.36.148.136', 'Tsavo_user', 1629417998, '2021/08/20 | 03:06:38am'),
(846, '54.36.149.32', 'Tsavo_user', 1629421018, '2021/08/20 | 03:56:58am'),
(847, '52.42.28.165', 'Tsavo_user', 1629433231, '2021/08/20 | 07:20:31am'),
(848, '34.217.98.145', 'Tsavo_user', 1629433513, '2021/08/20 | 07:25:13am'),
(849, '18.236.244.63', 'Tsavo_user', 1629433747, '2021/08/20 | 07:29:07am'),
(850, '50.112.71.188', 'Tsavo_user', 1629433785, '2021/08/20 | 07:29:45am'),
(851, '114.119.128.196', 'Tsavo_user', 1629449390, '2021/08/20 | 11:49:50am'),
(852, '137.226.113.44', 'Tsavo_user', 1629456010, '2021/08/20 | 01:40:10pm'),
(853, '137.226.113.44', 'Tsavo_user', 1629456011, '2021/08/20 | 01:40:11pm'),
(854, '54.36.149.53', 'Tsavo_user', 1629456324, '2021/08/20 | 01:45:24pm'),
(855, '54.36.149.65', 'Tsavo_user', 1629461296, '2021/08/20 | 03:08:16pm'),
(856, '54.36.148.41', 'Tsavo_user', 1629466801, '2021/08/20 | 04:40:01pm'),
(857, '66.249.66.49', 'Tsavo_user', 1629471222, '2021/08/20 | 05:53:42pm'),
(858, '54.36.148.21', 'Tsavo_user', 1629471600, '2021/08/20 | 06:00:00pm'),
(859, '66.249.66.47', 'Tsavo_user', 1629472320, '2021/08/20 | 06:12:00pm'),
(860, '93.159.230.89', 'Tsavo_user', 1629498233, '2021/08/21 | 01:23:53am'),
(861, '54.36.149.47', 'Tsavo_user', 1629503157, '2021/08/21 | 02:45:57am'),
(862, '54.36.148.163', 'Tsavo_user', 1629506676, '2021/08/21 | 03:44:36am'),
(863, '54.36.149.64', 'Tsavo_user', 1629514120, '2021/08/21 | 05:48:40am'),
(864, '144.86.173.66', 'Tsavo_user', 1629517876, '2021/08/21 | 06:51:16am'),
(865, '54.189.55.121', 'Tsavo_user', 1629520047, '2021/08/21 | 07:27:27am'),
(866, '34.214.147.172', 'Tsavo_user', 1629520097, '2021/08/21 | 07:28:17am'),
(867, '35.161.148.38', 'Tsavo_user', 1629520343, '2021/08/21 | 07:32:23am'),
(868, '54.188.2.228', 'Tsavo_user', 1629520393, '2021/08/21 | 07:33:13am'),
(869, '54.149.65.30', 'Tsavo_user', 1629520721, '2021/08/21 | 07:38:41am'),
(870, '54.200.112.0', 'Tsavo_user', 1629520759, '2021/08/21 | 07:39:19am'),
(871, '54.36.149.76', 'Tsavo_user', 1629520818, '2021/08/21 | 07:40:18am'),
(872, '54.36.149.24', 'Tsavo_user', 1629556270, '2021/08/21 | 05:31:10pm'),
(873, '114.119.129.200', 'Tsavo_user', 1629558340, '2021/08/21 | 06:05:40pm'),
(874, '66.249.73.145', 'Tsavo_user', 1629560945, '2021/08/21 | 06:49:05pm'),
(875, '54.36.148.126', 'Tsavo_user', 1629561068, '2021/08/21 | 06:51:08pm'),
(876, '144.86.173.66', 'Tsavo_user', 1629568134, '2021/08/21 | 08:48:54pm'),
(877, '54.36.149.0', 'Tsavo_user', 1629568974, '2021/08/21 | 09:02:54pm'),
(878, '144.86.173.87', 'Tsavo_user', 1629569323, '2021/08/21 | 09:08:43pm'),
(879, '54.36.148.35', 'Tsavo_user', 1629574379, '2021/08/21 | 10:32:59pm'),
(880, '66.249.73.141', 'Tsavo_user', 1629590225, '2021/08/22 | 02:57:05am'),
(881, '66.249.73.138', 'Tsavo_user', 1629599013, '2021/08/22 | 05:23:33am'),
(882, '18.237.65.79', 'Tsavo_user', 1629606559, '2021/08/22 | 07:29:19am'),
(883, '35.165.38.84', 'Tsavo_user', 1629606758, '2021/08/22 | 07:32:38am'),
(884, '34.217.191.213', 'Tsavo_user', 1629606784, '2021/08/22 | 07:33:04am'),
(885, '66.249.73.141', 'Tsavo_user', 1629607118, '2021/08/22 | 07:38:38am'),
(886, '18.205.119.160', 'Tsavo_user', 1629623739, '2021/08/22 | 12:15:39pm'),
(887, '54.36.149.62', 'Tsavo_user', 1629626486, '2021/08/22 | 01:01:26pm'),
(888, '54.36.149.2', 'Tsavo_user', 1629632042, '2021/08/22 | 02:34:02pm'),
(889, '54.36.148.240', 'Tsavo_user', 1629641261, '2021/08/22 | 05:07:41pm'),
(890, '54.36.149.104', 'Tsavo_user', 1629646847, '2021/08/22 | 06:40:47pm'),
(891, '66.249.64.240', 'Tsavo_user', 1629647529, '2021/08/22 | 06:52:09pm'),
(892, '92.118.160.9', 'Tsavo_user', 1629653386, '2021/08/22 | 08:29:46pm'),
(893, '18.208.126.193', 'Tsavo_user', 1629657641, '2021/08/22 | 09:40:41pm'),
(894, '31.13.103.118', 'Tsavo_user', 1629660193, '2021/08/22 | 10:23:13pm'),
(895, '31.13.103.8', 'Tsavo_user', 1629660193, '2021/08/22 | 10:23:13pm'),
(896, '66.249.64.242', 'Tsavo_user', 1629675749, '2021/08/23 | 02:42:29am'),
(897, '54.36.149.80', 'Tsavo_user', 1629683429, '2021/08/23 | 04:50:29am'),
(898, '54.36.148.98', 'Tsavo_user', 1629689228, '2021/08/23 | 06:27:08am'),
(899, '92.118.160.41', 'Tsavo_user', 1629692775, '2021/08/23 | 07:26:15am'),
(900, '34.209.85.29', 'Tsavo_user', 1629693099, '2021/08/23 | 07:31:39am'),
(901, '34.223.2.21', 'Tsavo_user', 1629693150, '2021/08/23 | 07:32:30am'),
(902, '54.184.200.244', 'Tsavo_user', 1629693353, '2021/08/23 | 07:35:53am'),
(903, '34.208.59.127', 'Tsavo_user', 1629693646, '2021/08/23 | 07:40:46am'),
(904, '35.163.144.156', 'Tsavo_user', 1629693678, '2021/08/23 | 07:41:18am'),
(905, '54.36.148.143', 'Tsavo_user', 1629698848, '2021/08/23 | 09:07:28am'),
(906, '34.145.33.22', 'Tsavo_user', 1629701568, '2021/08/23 | 09:52:48am'),
(907, '54.36.149.55', 'Tsavo_user', 1629702051, '2021/08/23 | 10:00:51am'),
(908, '92.118.160.9', 'Tsavo_user', 1629724628, '2021/08/23 | 04:17:08pm'),
(909, '66.249.64.223', 'Tsavo_user', 1629738836, '2021/08/23 | 08:13:56pm'),
(910, '54.36.148.215', 'Tsavo_user', 1629744654, '2021/08/23 | 09:50:54pm'),
(911, '54.188.19.137', 'Tsavo_user', 1629747906, '2021/08/23 | 10:45:06pm'),
(912, '54.188.19.137', 'Tsavo_user', 1629747907, '2021/08/23 | 10:45:07pm'),
(913, '54.36.149.62', 'Tsavo_user', 1629747949, '2021/08/23 | 10:45:49pm'),
(914, '54.36.148.206', 'Tsavo_user', 1629755026, '2021/08/24 | 12:43:46am'),
(915, '54.36.148.151', 'Tsavo_user', 1629758971, '2021/08/24 | 01:49:31am'),
(916, '157.55.39.13', 'Tsavo_user', 1629760943, '2021/08/24 | 02:22:23am'),
(917, '54.214.110.112', 'Tsavo_user', 1629780549, '2021/08/24 | 07:49:09am'),
(918, '54.202.184.30', 'Tsavo_user', 1629780559, '2021/08/24 | 07:49:19am'),
(919, '54.218.43.19', 'Tsavo_user', 1629780638, '2021/08/24 | 07:50:38am'),
(920, '18.237.250.250', 'Tsavo_user', 1629780681, '2021/08/24 | 07:51:21am'),
(921, '172.241.171.130', 'Tsavo_user', 1629782751, '2021/08/24 | 08:25:51am'),
(922, '23.81.70.235', 'Tsavo_user', 1629782759, '2021/08/24 | 08:25:59am'),
(923, '144.86.173.32', 'Tsavo_user', 1629790754, '2021/08/24 | 10:39:14am'),
(924, '92.118.160.45', 'Tsavo_user', 1629793611, '2021/08/24 | 11:26:51am'),
(925, '144.86.173.7', 'Tsavo_user', 1629797139, '2021/08/24 | 12:25:39pm'),
(926, '114.119.128.142', 'Tsavo_user', 1629815050, '2021/08/24 | 05:24:10pm'),
(927, '54.36.148.105', 'Tsavo_user', 1629816052, '2021/08/24 | 05:40:52pm'),
(928, '54.36.149.55', 'Tsavo_user', 1629821168, '2021/08/24 | 07:06:08pm'),
(929, '66.249.64.223', 'Tsavo_user', 1629822037, '2021/08/24 | 07:20:37pm'),
(930, '54.36.148.15', 'Tsavo_user', 1629833483, '2021/08/24 | 10:31:23pm'),
(931, '54.36.148.1', 'Tsavo_user', 1629837822, '2021/08/24 | 11:43:42pm'),
(932, '54.201.72.172', 'Tsavo_user', 1629865306, '2021/08/25 | 07:21:46am'),
(933, '54.190.12.192', 'Tsavo_user', 1629865308, '2021/08/25 | 07:21:48am'),
(934, '54.214.128.135', 'Tsavo_user', 1629865343, '2021/08/25 | 07:22:23am'),
(935, '54.191.244.84', 'Tsavo_user', 1629865519, '2021/08/25 | 07:25:19am'),
(936, '144.86.173.134', 'Tsavo_user', 1629869044, '2021/08/25 | 08:24:04am'),
(937, '34.82.100.229', 'Tsavo_user', 1629870564, '2021/08/25 | 08:49:24am'),
(938, '54.36.148.80', 'Tsavo_user', 1629872740, '2021/08/25 | 09:25:40am'),
(939, '54.36.148.122', 'Tsavo_user', 1629876583, '2021/08/25 | 10:29:43am'),
(940, '66.249.64.238', 'Tsavo_user', 1629882663, '2021/08/25 | 12:11:03pm'),
(941, '54.36.148.253', 'Tsavo_user', 1629886533, '2021/08/25 | 01:15:33pm'),
(942, '54.36.148.111', 'Tsavo_user', 1629894806, '2021/08/25 | 03:33:26pm'),
(943, '69.160.160.50', 'Tsavo_user', 1629907426, '2021/08/25 | 07:03:46pm'),
(944, '69.160.160.50', 'Tsavo_user', 1629907432, '2021/08/25 | 07:03:52pm'),
(945, '66.249.64.245', 'Tsavo_user', 1629914820, '2021/08/25 | 09:07:00pm'),
(946, '104.198.111.71', 'Tsavo_user', 1629925287, '2021/08/26 | 12:01:27am'),
(947, '54.36.148.120', 'Tsavo_user', 1629927964, '2021/08/26 | 12:46:04am'),
(948, '54.36.148.36', 'Tsavo_user', 1629930394, '2021/08/26 | 01:26:34am'),
(949, '41.90.4.72', 'Tsavo_user', 1629932258, '2021/08/26 | 01:57:38am'),
(950, '54.36.148.241', 'Tsavo_user', 1629938246, '2021/08/26 | 03:37:26am'),
(951, '54.36.148.32', 'Tsavo_user', 1629950256, '2021/08/26 | 06:57:36am'),
(952, '54.218.179.79', 'Tsavo_user', 1629951882, '2021/08/26 | 07:24:42am'),
(953, '18.237.245.83', 'Tsavo_user', 1629952063, '2021/08/26 | 07:27:43am'),
(954, '35.165.153.113', 'Tsavo_user', 1629952543, '2021/08/26 | 07:35:43am'),
(955, '52.12.110.208', 'Tsavo_user', 1629952576, '2021/08/26 | 07:36:16am'),
(956, '114.119.128.172', 'Tsavo_user', 1629966384, '2021/08/26 | 11:26:24am'),
(957, '54.36.148.255', 'Tsavo_user', 1629978866, '2021/08/26 | 02:54:26pm'),
(958, '66.249.64.245', 'Tsavo_user', 1629985289, '2021/08/26 | 04:41:29pm'),
(959, '54.36.148.61', 'Tsavo_user', 1629985536, '2021/08/26 | 04:45:36pm'),
(960, '54.36.148.219', 'Tsavo_user', 1629989722, '2021/08/26 | 05:55:22pm'),
(961, '34.222.179.49', 'Tsavo_user', 1630001841, '2021/08/26 | 09:17:21pm'),
(962, '162.55.190.191', 'Tsavo_user', 1630002171, '2021/08/26 | 09:22:51pm'),
(963, '54.36.148.233', 'Tsavo_user', 1630005419, '2021/08/26 | 10:16:59pm'),
(964, '54.36.148.49', 'Tsavo_user', 1630027127, '2021/08/27 | 04:18:47am'),
(965, '45.129.18.23', 'Tsavo_user', 1630027611, '2021/08/27 | 04:26:51am'),
(966, '54.202.92.237', 'Tsavo_user', 1630038159, '2021/08/27 | 07:22:39am'),
(967, '52.26.160.84', 'Tsavo_user', 1630038237, '2021/08/27 | 07:23:57am'),
(968, '34.217.137.89', 'Tsavo_user', 1630038254, '2021/08/27 | 07:24:14am'),
(969, '34.212.170.126', 'Tsavo_user', 1630039029, '2021/08/27 | 07:37:09am'),
(970, '52.13.99.32', 'Tsavo_user', 1630039494, '2021/08/27 | 07:44:54am'),
(971, '54.36.148.199', 'Tsavo_user', 1630041190, '2021/08/27 | 08:13:10am'),
(972, '54.36.148.91', 'Tsavo_user', 1630044878, '2021/08/27 | 09:14:38am'),
(973, '137.226.113.44', 'Tsavo_user', 1630061143, '2021/08/27 | 01:45:43pm'),
(974, '137.226.113.44', 'Tsavo_user', 1630061143, '2021/08/27 | 01:45:43pm'),
(975, '54.36.148.103', 'Tsavo_user', 1630063007, '2021/08/27 | 02:16:47pm'),
(976, '114.119.128.142', 'Tsavo_user', 1630072333, '2021/08/27 | 04:52:13pm'),
(977, '54.36.148.160', 'Tsavo_user', 1630088961, '2021/08/27 | 09:29:21pm'),
(978, '105.160.85.206', 'Tsavo_user', 1630093084, '2021/08/27 | 10:38:04pm'),
(979, '105.160.85.206', 'Tsavo_user', 1630093153, '2021/08/27 | 10:39:13pm'),
(980, '105.160.85.206', 'Tsavo_user', 1630093179, '2021/08/27 | 10:39:39pm'),
(981, '105.160.85.206', 'Tsavo_user', 1630093188, '2021/08/27 | 10:39:48pm'),
(982, '105.160.85.206', 'Tsavo_user', 1630093220, '2021/08/27 | 10:40:20pm'),
(983, '54.36.149.42', 'Tsavo_user', 1630094069, '2021/08/27 | 10:54:29pm'),
(984, '105.160.85.206', 'Tsavo_user', 1630103159, '2021/08/28 | 01:25:59am'),
(985, '54.36.148.58', 'Tsavo_user', 1630103984, '2021/08/28 | 01:39:44am'),
(986, '144.86.173.90', 'Tsavo_user', 1630113625, '2021/08/28 | 04:20:25am'),
(987, '92.118.160.57', 'Tsavo_user', 1630116206, '2021/08/28 | 05:03:26am'),
(988, '54.36.149.32', 'Tsavo_user', 1630117958, '2021/08/28 | 05:32:38am'),
(989, '144.86.173.23', 'Tsavo_user', 1630122554, '2021/08/28 | 06:49:14am'),
(990, '34.217.118.16', 'Tsavo_user', 1630124260, '2021/08/28 | 07:17:40am'),
(991, '34.220.32.30', 'Tsavo_user', 1630124962, '2021/08/28 | 07:29:22am'),
(992, '92.118.160.17', 'Tsavo_user', 1630125549, '2021/08/28 | 07:39:09am'),
(993, '54.36.148.219', 'Tsavo_user', 1630145422, '2021/08/28 | 01:10:22pm'),
(994, '54.36.149.48', 'Tsavo_user', 1630149835, '2021/08/28 | 02:23:55pm'),
(995, '69.160.160.55', 'Tsavo_user', 1630151357, '2021/08/28 | 02:49:17pm'),
(996, '69.160.160.55', 'Tsavo_user', 1630151358, '2021/08/28 | 02:49:18pm'),
(997, '124.126.78.156', 'Tsavo_user', 1630157167, '2021/08/28 | 04:26:07pm'),
(998, '54.36.148.58', 'Tsavo_user', 1630163918, '2021/08/28 | 06:18:38pm'),
(999, '196.100.247.9', 'Tsavo_user', 1630175403, '2021/08/28 | 09:30:03pm'),
(1000, '8.41.221.50', 'Tsavo_user', 1630198520, '2021/08/29 | 03:55:20am'),
(1001, '81.69.191.124', 'Tsavo_user', 1630207777, '2021/08/29 | 06:29:37am'),
(1002, '81.69.191.124', 'Tsavo_user', 1630208418, '2021/08/29 | 06:40:18am'),
(1003, '54.36.149.54', 'Tsavo_user', 1630209540, '2021/08/29 | 06:59:00am'),
(1004, '18.237.234.200', 'Tsavo_user', 1630211306, '2021/08/29 | 07:28:26am'),
(1005, '18.237.167.255', 'Tsavo_user', 1630211364, '2021/08/29 | 07:29:24am'),
(1006, '34.217.83.200', 'Tsavo_user', 1630211897, '2021/08/29 | 07:38:17am'),
(1007, '54.184.3.63', 'Tsavo_user', 1630212086, '2021/08/29 | 07:41:26am'),
(1008, '54.36.148.23', 'Tsavo_user', 1630212691, '2021/08/29 | 07:51:31am'),
(1009, '54.36.149.16', 'Tsavo_user', 1630218856, '2021/08/29 | 09:34:16am'),
(1010, '92.118.160.37', 'Tsavo_user', 1630220756, '2021/08/29 | 10:05:56am'),
(1011, '54.36.148.103', 'Tsavo_user', 1630232876, '2021/08/29 | 01:27:56pm'),
(1012, '196.100.247.9', 'Tsavo_user', 1630251748, '2021/08/29 | 06:42:28pm'),
(1013, '196.100.247.9', 'Tsavo_user', 1630251781, '2021/08/29 | 06:43:01pm'),
(1014, '176.74.192.85', 'Tsavo_user', 1630252894, '2021/08/29 | 07:01:34pm'),
(1015, '92.118.160.61', 'Tsavo_user', 1630264683, '2021/08/29 | 10:18:03pm'),
(1016, '92.118.160.45', 'Tsavo_user', 1630270517, '2021/08/29 | 11:55:17pm'),
(1017, '82.80.249.214', 'Tsavo_user', 1630273461, '2021/08/30 | 12:44:21am'),
(1018, '82.80.230.228', 'Tsavo_user', 1630273464, '2021/08/30 | 12:44:24am'),
(1019, '82.80.230.228', 'Tsavo_user', 1630273473, '2021/08/30 | 12:44:33am'),
(1020, '82.80.230.228', 'Tsavo_user', 1630273577, '2021/08/30 | 12:46:17am'),
(1021, '82.80.230.228', 'Tsavo_user', 1630273582, '2021/08/30 | 12:46:22am'),
(1022, '82.80.230.228', 'Tsavo_user', 1630273592, '2021/08/30 | 12:46:32am'),
(1023, '82.80.230.228', 'Tsavo_user', 1630273695, '2021/08/30 | 12:48:15am'),
(1024, '82.80.230.228', 'Tsavo_user', 1630273760, '2021/08/30 | 12:49:20am'),
(1025, '82.80.230.228', 'Tsavo_user', 1630273761, '2021/08/30 | 12:49:21am'),
(1026, '82.80.230.228', 'Tsavo_user', 1630273763, '2021/08/30 | 12:49:23am'),
(1027, '82.80.230.228', 'Tsavo_user', 1630273841, '2021/08/30 | 12:50:41am'),
(1028, '82.80.230.228', 'Tsavo_user', 1630273841, '2021/08/30 | 12:50:41am'),
(1029, '82.80.230.228', 'Tsavo_user', 1630273842, '2021/08/30 | 12:50:42am'),
(1030, '54.36.148.2', 'Tsavo_user', 1630275504, '2021/08/30 | 01:18:24am'),
(1031, '54.36.149.7', 'Tsavo_user', 1630281038, '2021/08/30 | 02:50:38am'),
(1032, '54.36.148.157', 'Tsavo_user', 1630286320, '2021/08/30 | 04:18:40am'),
(1033, '54.189.131.221', 'Tsavo_user', 1630298754, '2021/08/30 | 07:45:54am'),
(1034, '34.220.238.11', 'Tsavo_user', 1630298773, '2021/08/30 | 07:46:13am'),
(1035, '54.203.215.163', 'Tsavo_user', 1630303296, '2021/08/30 | 09:01:36am'),
(1036, '34.209.70.156', 'Tsavo_user', 1630303327, '2021/08/30 | 09:02:07am'),
(1037, '34.219.243.16', 'Tsavo_user', 1630303696, '2021/08/30 | 09:08:16am'),
(1038, '34.222.132.91', 'Tsavo_user', 1630303920, '2021/08/30 | 09:12:00am'),
(1039, '54.36.148.40', 'Tsavo_user', 1630305695, '2021/08/30 | 09:41:35am'),
(1040, '2c0f:fe38:2009:b2c2:1:2:cba0:ce0e', 'Tsavo_user', 1630318623, '2021/08/30 | 01:17:03pm'),
(1041, '196.100.247.9', 'Tsavo_user', 1630321624, '2021/08/30 | 02:07:04pm'),
(1042, '196.100.247.9', 'Tsavo_user', 1630322380, '2021/08/30 | 02:19:40pm'),
(1043, '196.100.247.9', 'Tsavo_user', 1630325159, '2021/08/30 | 03:05:59pm'),
(1044, '196.100.247.9', 'Tsavo_user', 1630325176, '2021/08/30 | 03:06:16pm'),
(1045, '54.36.149.12', 'Tsavo_user', 1630340705, '2021/08/30 | 07:25:05pm'),
(1046, '54.36.149.98', 'Tsavo_user', 1630344794, '2021/08/30 | 08:33:14pm'),
(1047, '114.119.128.196', 'Tsavo_user', 1630346314, '2021/08/30 | 08:58:34pm'),
(1048, '54.36.148.252', 'Tsavo_user', 1630347873, '2021/08/30 | 09:24:33pm'),
(1049, '196.100.247.9', 'Tsavo_user', 1630353545, '2021/08/30 | 10:59:05pm'),
(1050, '35.166.69.255', 'Tsavo_user', 1630358079, '2021/08/31 | 12:14:39am'),
(1051, '54.36.148.44', 'Tsavo_user', 1630374464, '2021/08/31 | 04:47:44am'),
(1052, '34.223.204.203', 'Tsavo_user', 1630385681, '2021/08/31 | 07:54:41am'),
(1053, '35.85.32.69', 'Tsavo_user', 1630386065, '2021/08/31 | 08:01:05am'),
(1054, '54.218.118.175', 'Tsavo_user', 1630386103, '2021/08/31 | 08:01:43am'),
(1055, '34.219.136.60', 'Tsavo_user', 1630386193, '2021/08/31 | 08:03:13am'),
(1056, '35.162.63.122', 'Tsavo_user', 1630386605, '2021/08/31 | 08:10:05am'),
(1057, '144.86.173.81', 'Tsavo_user', 1630409449, '2021/08/31 | 02:30:49pm'),
(1058, '54.36.148.217', 'Tsavo_user', 1630412257, '2021/08/31 | 03:17:37pm'),
(1059, '54.36.148.147', 'Tsavo_user', 1630419952, '2021/08/31 | 05:25:52pm'),
(1060, '54.36.149.100', 'Tsavo_user', 1630423542, '2021/08/31 | 06:25:42pm'),
(1061, '23.80.151.122', 'Tsavo_user', 1630439771, '2021/08/31 | 10:56:11pm'),
(1062, '172.241.160.177', 'Tsavo_user', 1630439771, '2021/08/31 | 10:56:11pm'),
(1063, '54.36.149.86', 'Tsavo_user', 1630467412, '2021/09/01 | 06:36:52am'),
(1064, '34.209.97.141', 'Tsavo_user', 1630470139, '2021/09/01 | 07:22:19am'),
(1065, '54.188.232.163', 'Tsavo_user', 1630470274, '2021/09/01 | 07:24:34am'),
(1066, '54.36.148.42', 'Tsavo_user', 1630492874, '2021/09/01 | 01:41:14pm'),
(1067, '54.36.148.76', 'Tsavo_user', 1630502231, '2021/09/01 | 04:17:11pm'),
(1068, '54.36.148.132', 'Tsavo_user', 1630514443, '2021/09/01 | 07:40:43pm'),
(1069, '207.200.8.180', 'Tsavo_user', 1630542240, '2021/09/02 | 03:24:00am'),
(1070, '144.86.173.8', 'Tsavo_user', 1630551191, '2021/09/02 | 05:53:11am'),
(1071, '54.36.148.155', 'Tsavo_user', 1630556841, '2021/09/02 | 07:27:21am'),
(1072, '54.69.252.208', 'Tsavo_user', 1630556859, '2021/09/02 | 07:27:39am'),
(1073, '18.237.253.112', 'Tsavo_user', 1630556890, '2021/09/02 | 07:28:10am'),
(1074, '52.10.40.128', 'Tsavo_user', 1630556957, '2021/09/02 | 07:29:17am'),
(1075, '52.12.141.43', 'Tsavo_user', 1630556991, '2021/09/02 | 07:29:51am'),
(1076, '54.212.93.9', 'Tsavo_user', 1630557668, '2021/09/02 | 07:41:08am'),
(1077, '114.119.128.154', 'Tsavo_user', 1630560376, '2021/09/02 | 08:26:16am'),
(1078, '114.119.128.196', 'Tsavo_user', 1630581298, '2021/09/02 | 02:14:58pm'),
(1079, '54.36.148.233', 'Tsavo_user', 1630583694, '2021/09/02 | 02:54:54pm'),
(1080, '54.36.148.77', 'Tsavo_user', 1630586594, '2021/09/02 | 03:43:14pm'),
(1081, '54.36.148.141', 'Tsavo_user', 1630592308, '2021/09/02 | 05:18:28pm'),
(1082, '66.249.69.209', 'Tsavo_user', 1630624615, '2021/09/03 | 02:16:55am'),
(1083, '54.36.148.136', 'Tsavo_user', 1630633127, '2021/09/03 | 04:38:47am'),
(1084, '144.86.173.82', 'Tsavo_user', 1630637949, '2021/09/03 | 05:59:09am'),
(1085, '18.237.168.200', 'Tsavo_user', 1630643024, '2021/09/03 | 07:23:44am'),
(1086, '66.70.185.71', 'Tsavo_user', 1630646434, '2021/09/03 | 08:20:34am'),
(1087, '54.36.149.54', 'Tsavo_user', 1630652521, '2021/09/03 | 10:02:01am'),
(1088, '5.188.62.214', 'Tsavo_user', 1630656739, '2021/09/03 | 11:12:19am'),
(1089, '144.86.173.157', 'Tsavo_user', 1630662628, '2021/09/03 | 12:50:28pm'),
(1090, '137.226.113.44', 'Tsavo_user', 1630665437, '2021/09/03 | 01:37:17pm'),
(1091, '137.226.113.44', 'Tsavo_user', 1630665437, '2021/09/03 | 01:37:17pm'),
(1092, '192.0.100.18', 'Tsavo_user', 1630667517, '2021/09/03 | 02:11:57pm'),
(1093, '54.36.148.66', 'Tsavo_user', 1630670137, '2021/09/03 | 02:55:37pm'),
(1094, '31.13.115.17', 'Tsavo_user', 1630674851, '2021/09/03 | 04:14:11pm'),
(1095, '31.13.115.120', 'Tsavo_user', 1630674851, '2021/09/03 | 04:14:11pm'),
(1096, '54.36.149.6', 'Tsavo_user', 1630675111, '2021/09/03 | 04:18:31pm'),
(1097, '92.118.160.1', 'Tsavo_user', 1630697601, '2021/09/03 | 10:33:21pm'),
(1098, '139.155.16.233', 'Tsavo_user', 1630705840, '2021/09/04 | 12:50:40am'),
(1099, '93.159.230.28', 'Tsavo_user', 1630708258, '2021/09/04 | 01:30:58am'),
(1100, '54.36.148.131', 'Tsavo_user', 1630710225, '2021/09/04 | 02:03:45am'),
(1101, '93.159.230.28', 'Tsavo_user', 1630712531, '2021/09/04 | 02:42:11am'),
(1102, '54.36.148.151', 'Tsavo_user', 1630720832, '2021/09/04 | 05:00:32am'),
(1103, '54.36.148.204', 'Tsavo_user', 1630728358, '2021/09/04 | 07:05:58am'),
(1104, '52.13.20.175', 'Tsavo_user', 1630730063, '2021/09/04 | 07:34:23am'),
(1105, '35.165.213.184', 'Tsavo_user', 1630730083, '2021/09/04 | 07:34:43am'),
(1106, '52.40.83.137', 'Tsavo_user', 1630730086, '2021/09/04 | 07:34:46am'),
(1107, '34.223.215.243', 'Tsavo_user', 1630730112, '2021/09/04 | 07:35:12am'),
(1108, '54.36.148.130', 'Tsavo_user', 1630739144, '2021/09/04 | 10:05:44am'),
(1109, '124.126.78.156', 'Tsavo_user', 1630740826, '2021/09/04 | 10:33:46am'),
(1110, '54.36.149.74', 'Tsavo_user', 1630764763, '2021/09/04 | 05:12:43pm'),
(1111, '54.36.148.54', 'Tsavo_user', 1630769374, '2021/09/04 | 06:29:34pm'),
(1112, '54.36.149.78', 'Tsavo_user', 1630771825, '2021/09/04 | 07:10:25pm'),
(1113, '54.36.148.203', 'Tsavo_user', 1630783293, '2021/09/04 | 10:21:33pm'),
(1114, '54.36.148.108', 'Tsavo_user', 1630801878, '2021/09/05 | 03:31:18am'),
(1115, '54.36.148.49', 'Tsavo_user', 1630816026, '2021/09/05 | 07:27:06am'),
(1116, '34.212.90.119', 'Tsavo_user', 1630816052, '2021/09/05 | 07:27:32am'),
(1117, '52.36.41.59', 'Tsavo_user', 1630816318, '2021/09/05 | 07:31:58am'),
(1118, '35.167.55.116', 'Tsavo_user', 1630816328, '2021/09/05 | 07:32:08am'),
(1119, '52.26.71.15', 'Tsavo_user', 1630816342, '2021/09/05 | 07:32:22am'),
(1120, '54.189.63.225', 'Tsavo_user', 1630816409, '2021/09/05 | 07:33:29am'),
(1121, '54.213.142.19', 'Tsavo_user', 1630816585, '2021/09/05 | 07:36:25am'),
(1122, '54.36.148.231', 'Tsavo_user', 1630818555, '2021/09/05 | 08:09:15am'),
(1123, '54.245.215.212', 'Tsavo_user', 1630819486, '2021/09/05 | 08:24:46am'),
(1124, '54.245.215.212', 'Tsavo_user', 1630819660, '2021/09/05 | 08:27:40am'),
(1125, '54.212.30.212', 'Tsavo_user', 1630819778, '2021/09/05 | 08:29:38am'),
(1126, '54.36.148.242', 'Tsavo_user', 1630830093, '2021/09/05 | 11:21:33am'),
(1127, '92.118.160.9', 'Tsavo_user', 1630836801, '2021/09/05 | 01:13:21pm'),
(1128, '54.36.148.178', 'Tsavo_user', 1630841366, '2021/09/05 | 02:29:26pm'),
(1129, '92.118.160.5', 'Tsavo_user', 1630852808, '2021/09/05 | 05:40:08pm'),
(1130, '54.36.148.123', 'Tsavo_user', 1630854717, '2021/09/05 | 06:11:57pm'),
(1131, '41.81.133.69', 'Tsavo_user', 1630859124, '2021/09/05 | 07:25:24pm'),
(1132, '54.36.149.27', 'Tsavo_user', 1630861785, '2021/09/05 | 08:09:45pm'),
(1133, '114.119.128.158', 'Tsavo_user', 1630863013, '2021/09/05 | 08:30:13pm'),
(1134, '54.36.148.55', 'Tsavo_user', 1630873936, '2021/09/05 | 11:32:16pm'),
(1135, '54.36.148.243', 'Tsavo_user', 1630880966, '2021/09/06 | 01:29:26am'),
(1136, '92.118.160.41', 'Tsavo_user', 1630897218, '2021/09/06 | 06:00:18am'),
(1137, '54.36.148.124', 'Tsavo_user', 1630899506, '2021/09/06 | 06:38:26am'),
(1138, '54.201.140.81', 'Tsavo_user', 1630902183, '2021/09/06 | 07:23:03am'),
(1139, '54.245.65.79', 'Tsavo_user', 1630902260, '2021/09/06 | 07:24:20am'),
(1140, '52.27.125.55', 'Tsavo_user', 1630902271, '2021/09/06 | 07:24:31am'),
(1141, '54.186.61.183', 'Tsavo_user', 1630902318, '2021/09/06 | 07:25:18am'),
(1142, '34.219.185.47', 'Tsavo_user', 1630903086, '2021/09/06 | 07:38:06am'),
(1143, '34.219.134.99', 'Tsavo_user', 1630903110, '2021/09/06 | 07:38:30am'),
(1144, '54.227.21.184', 'Tsavo_user', 1630905899, '2021/09/06 | 08:24:59am'),
(1145, '54.36.148.180', 'Tsavo_user', 1630911040, '2021/09/06 | 09:50:40am'),
(1146, '64.246.178.34', 'Tsavo_user', 1630913730, '2021/09/06 | 10:35:30am'),
(1147, '54.36.149.100', 'Tsavo_user', 1630921453, '2021/09/06 | 12:44:13pm'),
(1148, '92.118.160.41', 'Tsavo_user', 1630924597, '2021/09/06 | 01:36:37pm'),
(1149, '54.36.148.245', 'Tsavo_user', 1630924668, '2021/09/06 | 01:37:48pm'),
(1150, '92.118.160.57', 'Tsavo_user', 1630946607, '2021/09/06 | 07:43:27pm'),
(1151, '124.126.78.153', 'Tsavo_user', 1630952864, '2021/09/06 | 09:27:44pm'),
(1152, '54.36.148.207', 'Tsavo_user', 1630955861, '2021/09/06 | 10:17:41pm'),
(1153, '54.36.148.142', 'Tsavo_user', 1630958374, '2021/09/06 | 10:59:34pm'),
(1154, '52.33.248.186', 'Tsavo_user', 1630966989, '2021/09/07 | 01:23:09am'),
(1155, '52.33.248.186', 'Tsavo_user', 1630966991, '2021/09/07 | 01:23:11am'),
(1156, '54.36.149.87', 'Tsavo_user', 1630967810, '2021/09/07 | 01:36:50am'),
(1157, '54.36.148.172', 'Tsavo_user', 1630976183, '2021/09/07 | 03:56:23am'),
(1158, '142.44.167.89', 'Tsavo_user', 1630978583, '2021/09/07 | 04:36:23am'),
(1159, '34.127.29.218', 'Tsavo_user', 1630985585, '2021/09/07 | 06:33:05am'),
(1160, '54.190.13.216', 'Tsavo_user', 1630989128, '2021/09/07 | 07:32:08am'),
(1161, '54.212.230.35', 'Tsavo_user', 1630989147, '2021/09/07 | 07:32:27am'),
(1162, '54.191.74.67', 'Tsavo_user', 1630989171, '2021/09/07 | 07:32:51am'),
(1163, '34.217.41.210', 'Tsavo_user', 1630989179, '2021/09/07 | 07:32:59am'),
(1164, '52.25.210.231', 'Tsavo_user', 1630994586, '2021/09/07 | 09:03:06am'),
(1165, '35.164.59.211', 'Tsavo_user', 1630994611, '2021/09/07 | 09:03:31am'),
(1166, '34.221.138.11', 'Tsavo_user', 1630996484, '2021/09/07 | 09:34:44am'),
(1167, '54.36.148.238', 'Tsavo_user', 1630997919, '2021/09/07 | 09:58:39am'),
(1168, '54.149.82.196', 'Tsavo_user', 1631001406, '2021/09/07 | 10:56:46am'),
(1169, '34.223.1.189', 'Tsavo_user', 1631001449, '2021/09/07 | 10:57:29am'),
(1170, '54.213.47.174', 'Tsavo_user', 1631001886, '2021/09/07 | 11:04:46am'),
(1171, '54.190.200.241', 'Tsavo_user', 1631001933, '2021/09/07 | 11:05:33am'),
(1172, '54.36.148.29', 'Tsavo_user', 1631006269, '2021/09/07 | 12:17:49pm'),
(1173, '54.36.148.129', 'Tsavo_user', 1631009044, '2021/09/07 | 01:04:04pm'),
(1174, '114.119.128.181', 'Tsavo_user', 1631013995, '2021/09/07 | 02:26:35pm'),
(1175, '54.36.148.16', 'Tsavo_user', 1631029458, '2021/09/07 | 06:44:18pm'),
(1176, '167.99.112.48', 'Tsavo_user', 1631038756, '2021/09/07 | 09:19:16pm'),
(1177, '138.197.11.106', 'Tsavo_user', 1631040968, '2021/09/07 | 09:56:08pm'),
(1178, '54.36.148.130', 'Tsavo_user', 1631042794, '2021/09/07 | 10:26:34pm'),
(1179, '54.36.148.96', 'Tsavo_user', 1631052651, '2021/09/08 | 01:10:51am'),
(1180, '144.86.173.7', 'Tsavo_user', 1631055379, '2021/09/08 | 01:56:19am'),
(1181, '54.36.148.124', 'Tsavo_user', 1631055888, '2021/09/08 | 02:04:48am'),
(1182, '173.211.77.87', 'Tsavo_user', 1631059461, '2021/09/08 | 03:04:21am'),
(1183, '54.36.148.168', 'Tsavo_user', 1631072993, '2021/09/08 | 06:49:53am'),
(1184, '41.60.235.9', 'Tsavo_user', 1631075777, '2021/09/08 | 07:36:17am'),
(1185, '18.237.79.119', 'Tsavo_user', 1631076177, '2021/09/08 | 07:42:57am'),
(1186, '34.220.77.78', 'Tsavo_user', 1631076177, '2021/09/08 | 07:42:57am'),
(1187, '34.220.32.209', 'Tsavo_user', 1631076191, '2021/09/08 | 07:43:11am'),
(1188, '34.217.22.172', 'Tsavo_user', 1631076210, '2021/09/08 | 07:43:30am'),
(1189, '54.36.149.102', 'Tsavo_user', 1631091140, '2021/09/08 | 11:52:20am'),
(1190, '54.36.148.3', 'Tsavo_user', 1631094899, '2021/09/08 | 12:54:59pm'),
(1191, '34.68.202.237', 'Tsavo_user', 1631096284, '2021/09/08 | 01:18:04pm'),
(1192, '54.36.148.129', 'Tsavo_user', 1631117451, '2021/09/08 | 07:10:51pm'),
(1193, '34.127.88.48', 'Tsavo_user', 1631127556, '2021/09/08 | 09:59:16pm'),
(1194, '54.36.148.162', 'Tsavo_user', 1631127841, '2021/09/08 | 10:04:01pm'),
(1195, '54.36.149.45', 'Tsavo_user', 1631136492, '2021/09/09 | 12:28:12am'),
(1196, '54.36.149.47', 'Tsavo_user', 1631139444, '2021/09/09 | 01:17:24am'),
(1197, '51.158.97.254', 'Tsavo_user', 1631159351, '2021/09/09 | 06:49:11am'),
(1198, '51.158.97.254', 'Tsavo_user', 1631159352, '2021/09/09 | 06:49:12am'),
(1199, '51.158.97.254', 'Tsavo_user', 1631159352, '2021/09/09 | 06:49:12am'),
(1200, '51.158.97.254', 'Tsavo_user', 1631159352, '2021/09/09 | 06:49:12am'),
(1201, '51.158.113.206', 'Tsavo_user', 1631160540, '2021/09/09 | 07:09:00am'),
(1202, '114.119.128.154', 'Tsavo_user', 1631161653, '2021/09/09 | 07:27:33am'),
(1203, '35.164.168.3', 'Tsavo_user', 1631161751, '2021/09/09 | 07:29:11am'),
(1204, '34.222.82.66', 'Tsavo_user', 1631161936, '2021/09/09 | 07:32:16am'),
(1205, '54.36.148.240', 'Tsavo_user', 1631165295, '2021/09/09 | 08:28:15am'),
(1206, '54.36.148.234', 'Tsavo_user', 1631174170, '2021/09/09 | 10:56:10am'),
(1207, '23.81.95.217', 'Tsavo_user', 1631181065, '2021/09/09 | 12:51:05pm'),
(1208, '34.135.212.41', 'Tsavo_user', 1631181066, '2021/09/09 | 12:51:06pm'),
(1209, '104.155.173.95', 'Tsavo_user', 1631181066, '2021/09/09 | 12:51:06pm'),
(1210, '23.105.1.227', 'Tsavo_user', 1631181067, '2021/09/09 | 12:51:07pm'),
(1211, '54.36.148.90', 'Tsavo_user', 1631181416, '2021/09/09 | 12:56:56pm'),
(1212, '38.122.112.147', 'Tsavo_user', 1631184391, '2021/09/09 | 01:46:31pm'),
(1213, '54.36.148.53', 'Tsavo_user', 1631184573, '2021/09/09 | 01:49:33pm'),
(1214, '93.158.90.155', 'Tsavo_user', 1631185642, '2021/09/09 | 02:07:22pm'),
(1215, '42.83.147.36', 'Tsavo_user', 1631187019, '2021/09/09 | 02:30:19pm'),
(1216, '54.74.148.125', 'Tsavo_user', 1631190421, '2021/09/09 | 03:27:01pm'),
(1217, '54.36.149.50', 'Tsavo_user', 1631210674, '2021/09/09 | 09:04:34pm'),
(1218, '199.16.157.182', 'Tsavo_user', 1631215074, '2021/09/09 | 10:17:54pm'),
(1219, '54.36.148.15', 'Tsavo_user', 1631222801, '2021/09/10 | 12:26:41am'),
(1220, '54.36.148.74', 'Tsavo_user', 1631225401, '2021/09/10 | 01:10:01am'),
(1221, '54.36.149.33', 'Tsavo_user', 1631228023, '2021/09/10 | 01:53:43am'),
(1222, '54.186.181.185', 'Tsavo_user', 1631247412, '2021/09/10 | 07:16:52am'),
(1223, '18.237.199.186', 'Tsavo_user', 1631247515, '2021/09/10 | 07:18:35am'),
(1224, '34.219.205.22', 'Tsavo_user', 1631247517, '2021/09/10 | 07:18:37am'),
(1225, '35.165.23.205', 'Tsavo_user', 1631247571, '2021/09/10 | 07:19:31am'),
(1226, '34.214.206.206', 'Tsavo_user', 1631247622, '2021/09/10 | 07:20:22am'),
(1227, '34.212.177.143', 'Tsavo_user', 1631247648, '2021/09/10 | 07:20:48am'),
(1228, '18.203.185.237', 'Tsavo_user', 1631248964, '2021/09/10 | 07:42:44am'),
(1229, '54.36.149.66', 'Tsavo_user', 1631263362, '2021/09/10 | 11:42:42am'),
(1230, '54.36.148.250', 'Tsavo_user', 1631276071, '2021/09/10 | 03:14:31pm'),
(1231, '75.119.129.90', 'Tsavo_user', 1631278841, '2021/09/10 | 04:00:41pm'),
(1232, '54.36.149.19', 'Tsavo_user', 1631279941, '2021/09/10 | 04:19:01pm'),
(1233, '54.36.148.207', 'Tsavo_user', 1631285736, '2021/09/10 | 05:55:36pm'),
(1234, '51.81.98.72', 'Tsavo_user', 1631288361, '2021/09/10 | 06:39:21pm'),
(1235, '137.226.113.44', 'Tsavo_user', 1631293589, '2021/09/10 | 08:06:29pm'),
(1236, '137.226.113.44', 'Tsavo_user', 1631293590, '2021/09/10 | 08:06:30pm'),
(1237, '54.36.148.178', 'Tsavo_user', 1631315398, '2021/09/11 | 02:09:58am'),
(1238, '66.220.149.14', 'Tsavo_user', 1631318496, '2021/09/11 | 03:01:36am'),
(1239, '54.36.148.129', 'Tsavo_user', 1631320645, '2021/09/11 | 03:37:25am'),
(1240, '54.36.148.97', 'Tsavo_user', 1631324701, '2021/09/11 | 04:45:01am'),
(1241, '102.140.206.138', 'Tsavo_user', 1631332260, '2021/09/11 | 06:51:00am'),
(1242, '54.36.149.41', 'Tsavo_user', 1631335992, '2021/09/11 | 07:53:12am'),
(1243, '144.86.173.82', 'Tsavo_user', 1631350711, '2021/09/11 | 11:58:31am'),
(1244, '54.36.148.243', 'Tsavo_user', 1631363493, '2021/09/11 | 03:31:33pm'),
(1245, '93.158.90.169', 'Tsavo_user', 1631369633, '2021/09/11 | 05:13:53pm'),
(1246, '54.36.148.203', 'Tsavo_user', 1631371126, '2021/09/11 | 05:38:46pm'),
(1247, '54.36.148.246', 'Tsavo_user', 1631374299, '2021/09/11 | 06:31:39pm'),
(1248, '66.249.70.49', 'Tsavo_user', 1631375524, '2021/09/11 | 06:52:04pm'),
(1249, '54.36.148.241', 'Tsavo_user', 1631389706, '2021/09/11 | 10:48:26pm'),
(1250, '41.80.97.154', 'Tsavo_user', 1631398698, '2021/09/12 | 01:18:18am'),
(1251, '41.80.97.154', 'Tsavo_user', 1631398699, '2021/09/12 | 01:18:19am'),
(1252, '114.119.128.142', 'Tsavo_user', 1631405796, '2021/09/12 | 03:16:36am'),
(1253, '54.36.148.61', 'Tsavo_user', 1631418788, '2021/09/12 | 06:53:08am'),
(1254, '54.36.148.21', 'Tsavo_user', 1631424138, '2021/09/12 | 08:22:18am'),
(1255, '54.36.148.3', 'Tsavo_user', 1631427228, '2021/09/12 | 09:13:48am'),
(1256, '52.11.233.196', 'Tsavo_user', 1631439438, '2021/09/12 | 12:37:18pm'),
(1257, '52.11.233.196', 'Tsavo_user', 1631439439, '2021/09/12 | 12:37:19pm'),
(1258, '92.118.160.61', 'Tsavo_user', 1631443408, '2021/09/12 | 01:43:28pm'),
(1259, '66.249.70.40', 'Tsavo_user', 1631448385, '2021/09/12 | 03:06:25pm'),
(1260, '54.36.148.53', 'Tsavo_user', 1631454238, '2021/09/12 | 04:43:58pm'),
(1261, '196.201.218.238', 'Tsavo_user', 1631460517, '2021/09/12 | 06:28:37pm'),
(1262, '66.249.70.47', 'Tsavo_user', 1631464723, '2021/09/12 | 07:38:43pm'),
(1263, '66.249.70.44', 'Tsavo_user', 1631466445, '2021/09/12 | 08:07:25pm'),
(1264, '221.2.163.231', 'Tsavo_user', 1631474994, '2021/09/12 | 10:29:54pm'),
(1265, '54.36.148.46', 'Tsavo_user', 1631485464, '2021/09/13 | 01:24:24am'),
(1266, '54.36.148.134', 'Tsavo_user', 1631488661, '2021/09/13 | 02:17:41am'),
(1267, '54.36.148.112', 'Tsavo_user', 1631499310, '2021/09/13 | 05:15:10am'),
(1268, '54.184.232.214', 'Tsavo_user', 1631506536, '2021/09/13 | 07:15:36am'),
(1269, '18.237.148.91', 'Tsavo_user', 1631506555, '2021/09/13 | 07:15:55am'),
(1270, '54.188.34.55', 'Tsavo_user', 1631506573, '2021/09/13 | 07:16:13am'),
(1271, '54.190.97.145', 'Tsavo_user', 1631507121, '2021/09/13 | 07:25:21am'),
(1272, '54.36.149.71', 'Tsavo_user', 1631541590, '2021/09/13 | 04:59:50pm'),
(1273, '54.203.242.6', 'Tsavo_user', 1631549334, '2021/09/13 | 07:08:54pm'),
(1274, '54.203.242.6', 'Tsavo_user', 1631549334, '2021/09/13 | 07:08:54pm'),
(1275, '54.36.148.179', 'Tsavo_user', 1631553623, '2021/09/13 | 08:20:23pm'),
(1276, '54.36.149.58', 'Tsavo_user', 1631557395, '2021/09/13 | 09:23:15pm'),
(1277, '114.119.129.200', 'Tsavo_user', 1631561546, '2021/09/13 | 10:32:26pm'),
(1278, '54.36.148.117', 'Tsavo_user', 1631563315, '2021/09/13 | 11:01:55pm'),
(1279, '114.119.128.172', 'Tsavo_user', 1631566071, '2021/09/13 | 11:47:51pm'),
(1280, '217.69.8.54', 'Tsavo_user', 1631573077, '2021/09/14 | 01:44:37am'),
(1281, '217.69.8.54', 'Tsavo_user', 1631573078, '2021/09/14 | 01:44:38am'),
(1282, '54.201.7.5', 'Tsavo_user', 1631575549, '2021/09/14 | 02:25:49am'),
(1283, '54.201.35.147', 'Tsavo_user', 1631593074, '2021/09/14 | 07:17:54am'),
(1284, '18.236.62.106', 'Tsavo_user', 1631593087, '2021/09/14 | 07:18:07am'),
(1285, '54.36.149.104', 'Tsavo_user', 1631627707, '2021/09/14 | 04:55:07pm'),
(1286, '54.203.242.6', 'Tsavo_user', 1631628347, '2021/09/14 | 05:05:47pm'),
(1287, '54.203.242.6', 'Tsavo_user', 1631628347, '2021/09/14 | 05:05:47pm'),
(1288, '54.203.242.6', 'Tsavo_user', 1631629510, '2021/09/14 | 05:25:10pm'),
(1289, '54.203.242.6', 'Tsavo_user', 1631629510, '2021/09/14 | 05:25:10pm'),
(1290, '54.36.148.150', 'Tsavo_user', 1631631110, '2021/09/14 | 05:51:50pm'),
(1291, '34.217.253.81', 'Tsavo_user', 1631632624, '2021/09/14 | 06:17:04pm'),
(1292, '34.217.253.81', 'Tsavo_user', 1631632624, '2021/09/14 | 06:17:04pm'),
(1293, '54.36.148.36', 'Tsavo_user', 1631634721, '2021/09/14 | 06:52:01pm'),
(1294, '54.36.148.142', 'Tsavo_user', 1631637612, '2021/09/14 | 07:40:12pm'),
(1295, '54.185.161.154', 'Tsavo_user', 1631654754, '2021/09/15 | 12:25:54am'),
(1296, '54.203.242.6', 'Tsavo_user', 1631657326, '2021/09/15 | 01:08:46am'),
(1297, '54.203.242.6', 'Tsavo_user', 1631657327, '2021/09/15 | 01:08:47am'),
(1298, '54.203.242.6', 'Tsavo_user', 1631658318, '2021/09/15 | 01:25:18am'),
(1299, '54.203.242.6', 'Tsavo_user', 1631658318, '2021/09/15 | 01:25:18am'),
(1300, '54.203.242.6', 'Tsavo_user', 1631669607, '2021/09/15 | 04:33:27am'),
(1301, '54.203.242.6', 'Tsavo_user', 1631669607, '2021/09/15 | 04:33:27am'),
(1302, '52.89.103.56', 'Tsavo_user', 1631670536, '2021/09/15 | 04:48:56am'),
(1303, '52.89.103.56', 'Tsavo_user', 1631671383, '2021/09/15 | 05:03:03am'),
(1304, '52.89.103.56', 'Tsavo_user', 1631671383, '2021/09/15 | 05:03:03am'),
(1305, '34.212.3.228', 'Tsavo_user', 1631678748, '2021/09/15 | 07:05:48am'),
(1306, '34.210.211.184', 'Tsavo_user', 1631678774, '2021/09/15 | 07:06:14am'),
(1307, '105.230.24.155', 'Tsavo_user', 1631689771, '2021/09/15 | 10:09:31am'),
(1308, '54.203.242.6', 'Tsavo_user', 1631701369, '2021/09/15 | 01:22:49pm'),
(1309, '54.203.242.6', 'Tsavo_user', 1631701369, '2021/09/15 | 01:22:49pm'),
(1310, '114.119.128.143', 'Tsavo_user', 1631703649, '2021/09/15 | 02:00:49pm'),
(1311, '64.227.111.148', 'Tsavo_user', 1631707884, '2021/09/15 | 03:11:24pm'),
(1312, '54.36.148.181', 'Tsavo_user', 1631710238, '2021/09/15 | 03:50:38pm'),
(1313, '54.36.148.30', 'Tsavo_user', 1631713766, '2021/09/15 | 04:49:26pm'),
(1314, '54.36.148.67', 'Tsavo_user', 1631719278, '2021/09/15 | 06:21:18pm'),
(1315, '54.36.148.63', 'Tsavo_user', 1631722245, '2021/09/15 | 07:10:45pm'),
(1316, '3.142.143.106', 'Tsavo_user', 1631746667, '2021/09/16 | 01:57:47am'),
(1317, '52.89.103.56', 'Tsavo_user', 1631758351, '2021/09/16 | 05:12:31am'),
(1318, '52.89.103.56', 'Tsavo_user', 1631758352, '2021/09/16 | 05:12:32am'),
(1319, '66.249.66.5', 'Tsavo_user', 1631758593, '2021/09/16 | 05:16:33am'),
(1320, '154.123.177.61', 'Tsavo_user', 1631759286, '2021/09/16 | 05:28:06am'),
(1321, '34.220.252.239', 'Tsavo_user', 1631766481, '2021/09/16 | 07:28:01am'),
(1322, '34.222.25.242', 'Tsavo_user', 1631766542, '2021/09/16 | 07:29:02am'),
(1323, '54.203.242.6', 'Tsavo_user', 1631794813, '2021/09/16 | 03:20:13pm'),
(1324, '54.203.242.6', 'Tsavo_user', 1631794813, '2021/09/16 | 03:20:13pm'),
(1325, '54.203.242.6', 'Tsavo_user', 1631794813, '2021/09/16 | 03:20:13pm'),
(1326, '31.13.103.4', 'Tsavo_user', 1631801758, '2021/09/16 | 05:15:58pm'),
(1327, '31.13.103.26', 'Tsavo_user', 1631801758, '2021/09/16 | 05:15:58pm'),
(1328, '51.222.253.12', 'Tsavo_user', 1631802747, '2021/09/16 | 05:32:27pm'),
(1329, '51.222.253.19', 'Tsavo_user', 1631805984, '2021/09/16 | 06:26:24pm'),
(1330, '163.172.148.199', 'Tsavo_user', 1631807145, '2021/09/16 | 06:45:45pm'),
(1331, '51.222.253.12', 'Tsavo_user', 1631814699, '2021/09/16 | 08:51:39pm'),
(1332, '42.83.147.36', 'Tsavo_user', 1631815332, '2021/09/16 | 09:02:12pm'),
(1333, '51.222.253.15', 'Tsavo_user', 1631818044, '2021/09/16 | 09:47:24pm'),
(1334, '34.77.162.11', 'Tsavo_user', 1631837800, '2021/09/17 | 03:16:40am'),
(1335, '168.91.68.43', 'Tsavo_user', 1631840480, '2021/09/17 | 04:01:20am'),
(1336, '172.241.171.239', 'Tsavo_user', 1631840481, '2021/09/17 | 04:01:21am');
INSERT INTO `new_user_cookie` (`id`, `ip`, `name`, `value`, `date`) VALUES
(1337, '34.220.85.97', 'Tsavo_user', 1631852746, '2021/09/17 | 07:25:46am'),
(1338, '18.237.202.83', 'Tsavo_user', 1631852784, '2021/09/17 | 07:26:24am'),
(1339, '93.158.91.214', 'Tsavo_user', 1631863548, '2021/09/17 | 10:25:48am'),
(1340, '114.119.134.10', 'Tsavo_user', 1631873896, '2021/09/17 | 01:18:16pm'),
(1341, '114.119.128.158', 'Tsavo_user', 1631878215, '2021/09/17 | 02:30:15pm'),
(1342, '114.119.129.200', 'Tsavo_user', 1631879491, '2021/09/17 | 02:51:31pm'),
(1343, '114.119.128.181', 'Tsavo_user', 1631880794, '2021/09/17 | 03:13:14pm'),
(1344, '114.119.129.200', 'Tsavo_user', 1631882084, '2021/09/17 | 03:34:44pm'),
(1345, '114.119.131.116', 'Tsavo_user', 1631892130, '2021/09/17 | 06:22:10pm'),
(1346, '114.119.129.36', 'Tsavo_user', 1631894609, '2021/09/17 | 07:03:29pm'),
(1347, '51.222.253.6', 'Tsavo_user', 1631898398, '2021/09/17 | 08:06:38pm'),
(1348, '137.226.113.44', 'Tsavo_user', 1631901590, '2021/09/17 | 08:59:50pm'),
(1349, '137.226.113.44', 'Tsavo_user', 1631901591, '2021/09/17 | 08:59:51pm'),
(1350, '114.119.159.121', 'Tsavo_user', 1631913597, '2021/09/18 | 12:19:57am'),
(1351, '51.222.253.14', 'Tsavo_user', 1631913758, '2021/09/18 | 12:22:38am'),
(1352, '51.222.253.11', 'Tsavo_user', 1631917270, '2021/09/18 | 01:21:10am'),
(1353, '191.96.80.55', 'Tsavo_user', 1631919458, '2021/09/18 | 01:57:38am'),
(1354, '51.222.253.10', 'Tsavo_user', 1631922245, '2021/09/18 | 02:44:05am'),
(1355, '102.140.206.138', 'Tsavo_user', 1631933850, '2021/09/18 | 05:57:30am'),
(1356, '34.223.211.64', 'Tsavo_user', 1631941113, '2021/09/18 | 07:58:33am'),
(1357, '34.216.181.9', 'Tsavo_user', 1631941148, '2021/09/18 | 07:59:08am'),
(1358, '52.35.236.153', 'Tsavo_user', 1631941537, '2021/09/18 | 08:05:37am'),
(1359, '18.236.132.150', 'Tsavo_user', 1631941547, '2021/09/18 | 08:05:47am'),
(1360, '34.223.211.64', 'Tsavo_user', 1631941986, '2021/09/18 | 08:13:06am'),
(1361, '54.212.199.162', 'Tsavo_user', 1631942282, '2021/09/18 | 08:18:02am'),
(1362, '114.119.128.196', 'Tsavo_user', 1631951310, '2021/09/18 | 10:48:30am'),
(1363, '103.148.182.34', 'Tsavo_user', 1631969214, '2021/09/18 | 03:46:54pm'),
(1364, '114.119.128.154', 'Tsavo_user', 1631976385, '2021/09/18 | 05:46:25pm'),
(1365, '34.217.253.81', 'Tsavo_user', 1631984786, '2021/09/18 | 08:06:26pm'),
(1366, '34.217.253.81', 'Tsavo_user', 1631984786, '2021/09/18 | 08:06:26pm'),
(1367, '212.192.241.31', 'Tsavo_user', 1631985306, '2021/09/18 | 08:15:06pm'),
(1368, '172.58.3.97', 'Tsavo_user', 1631994630, '2021/09/18 | 10:50:30pm'),
(1369, '114.119.128.172', 'Tsavo_user', 1632003168, '2021/09/19 | 01:12:48am'),
(1370, '51.222.253.4', 'Tsavo_user', 1632006992, '2021/09/19 | 02:16:32am'),
(1371, '52.25.32.210', 'Tsavo_user', 1632026282, '2021/09/19 | 07:38:02am'),
(1372, '35.85.151.53', 'Tsavo_user', 1632026284, '2021/09/19 | 07:38:04am'),
(1373, '54.245.9.169', 'Tsavo_user', 1632026310, '2021/09/19 | 07:38:30am'),
(1374, '34.221.46.184', 'Tsavo_user', 1632026311, '2021/09/19 | 07:38:31am'),
(1375, '51.222.253.17', 'Tsavo_user', 1632030239, '2021/09/19 | 08:43:59am'),
(1376, '51.222.253.13', 'Tsavo_user', 1632033530, '2021/09/19 | 09:38:50am'),
(1377, '51.222.253.19', 'Tsavo_user', 1632040911, '2021/09/19 | 11:41:51am'),
(1378, '102.140.206.138', 'Tsavo_user', 1632053048, '2021/09/19 | 03:04:08pm'),
(1379, '103.31.39.19', 'Tsavo_user', 1632065169, '2021/09/19 | 06:26:09pm'),
(1380, '103.31.39.19', 'Tsavo_user', 1632068542, '2021/09/19 | 07:22:22pm'),
(1381, '92.38.132.110', 'Tsavo_user', 1632069658, '2021/09/19 | 07:40:58pm'),
(1382, '103.31.39.19', 'Tsavo_user', 1632074221, '2021/09/19 | 08:57:01pm'),
(1383, '103.31.39.19', 'Tsavo_user', 1632077408, '2021/09/19 | 09:50:08pm'),
(1384, '103.31.39.19', 'Tsavo_user', 1632082494, '2021/09/19 | 11:14:54pm'),
(1385, '45.129.18.162', 'Tsavo_user', 1632099389, '2021/09/20 | 03:56:29am'),
(1386, '114.119.128.181', 'Tsavo_user', 1632107228, '2021/09/20 | 06:07:08am'),
(1387, '34.222.132.118', 'Tsavo_user', 1632111300, '2021/09/20 | 07:15:00am'),
(1388, '34.220.32.107', 'Tsavo_user', 1632111340, '2021/09/20 | 07:15:40am'),
(1389, '52.33.3.32', 'Tsavo_user', 1632111366, '2021/09/20 | 07:16:06am'),
(1390, '54.190.138.11', 'Tsavo_user', 1632111403, '2021/09/20 | 07:16:43am'),
(1391, '102.140.206.138', 'Tsavo_user', 1632126311, '2021/09/20 | 11:25:11am'),
(1392, '51.222.253.3', 'Tsavo_user', 1632129731, '2021/09/20 | 12:22:11pm'),
(1393, '92.118.160.45', 'Tsavo_user', 1632131335, '2021/09/20 | 12:48:55pm'),
(1394, '51.222.253.7', 'Tsavo_user', 1632152816, '2021/09/20 | 06:46:56pm'),
(1395, '92.118.160.17', 'Tsavo_user', 1632153740, '2021/09/20 | 07:02:20pm'),
(1396, '51.222.253.14', 'Tsavo_user', 1632165406, '2021/09/20 | 10:16:46pm'),
(1397, '51.158.103.247', 'Tsavo_user', 1632166169, '2021/09/20 | 10:29:29pm'),
(1398, '51.222.253.19', 'Tsavo_user', 1632168799, '2021/09/20 | 11:13:19pm'),
(1399, '34.77.162.29', 'Tsavo_user', 1632169439, '2021/09/20 | 11:23:59pm'),
(1400, '194.154.78.200', 'Tsavo_user', 1632179122, '2021/09/21 | 02:05:22am'),
(1401, '34.222.138.162', 'Tsavo_user', 1632192929, '2021/09/21 | 05:55:29am'),
(1402, '35.163.79.109', 'Tsavo_user', 1632202055, '2021/09/21 | 08:27:35am'),
(1403, '18.237.185.88', 'Tsavo_user', 1632202057, '2021/09/21 | 08:27:37am'),
(1404, '34.216.89.210', 'Tsavo_user', 1632202090, '2021/09/21 | 08:28:10am'),
(1405, '18.236.204.156', 'Tsavo_user', 1632202123, '2021/09/21 | 08:28:43am'),
(1406, '102.140.206.138', 'Tsavo_user', 1632208978, '2021/09/21 | 10:22:58am'),
(1407, '34.77.162.8', 'Tsavo_user', 1632226599, '2021/09/21 | 03:16:39pm'),
(1408, '66.249.64.223', 'Tsavo_user', 1632255448, '2021/09/21 | 11:17:28pm'),
(1409, '51.222.253.19', 'Tsavo_user', 1632259029, '2021/09/22 | 12:17:09am'),
(1410, '102.140.206.138', 'Tsavo_user', 1632261916, '2021/09/22 | 01:05:16am'),
(1411, '194.186.142.231', 'Tsavo_user', 1632275162, '2021/09/22 | 04:46:02am'),
(1412, '54.218.158.23', 'Tsavo_user', 1632285459, '2021/09/22 | 07:37:39am'),
(1413, '54.218.83.51', 'Tsavo_user', 1632285475, '2021/09/22 | 07:37:55am'),
(1414, '34.221.117.239', 'Tsavo_user', 1632286314, '2021/09/22 | 07:51:54am'),
(1415, '52.12.148.199', 'Tsavo_user', 1632286565, '2021/09/22 | 07:56:05am'),
(1416, '51.222.253.10', 'Tsavo_user', 1632291925, '2021/09/22 | 09:25:25am'),
(1417, '51.222.253.1', 'Tsavo_user', 1632310483, '2021/09/22 | 02:34:43pm'),
(1418, '51.222.253.18', 'Tsavo_user', 1632313896, '2021/09/22 | 03:31:36pm'),
(1419, '94.228.142.132', 'Tsavo_user', 1632337877, '2021/09/22 | 10:11:17pm'),
(1420, '114.119.128.162', 'Tsavo_user', 1632370962, '2021/09/23 | 07:22:42am'),
(1421, '52.12.95.218', 'Tsavo_user', 1632371607, '2021/09/23 | 07:33:27am'),
(1422, '34.211.49.38', 'Tsavo_user', 1632371631, '2021/09/23 | 07:33:51am'),
(1423, '114.119.128.154', 'Tsavo_user', 1632387509, '2021/09/23 | 11:58:29am'),
(1424, '114.119.129.200', 'Tsavo_user', 1632392098, '2021/09/23 | 01:14:58pm'),
(1425, '51.222.253.19', 'Tsavo_user', 1632395008, '2021/09/23 | 02:03:28pm'),
(1426, '18.116.42.82', 'Tsavo_user', 1632410428, '2021/09/23 | 06:20:28pm'),
(1427, '51.222.253.12', 'Tsavo_user', 1632438807, '2021/09/24 | 02:13:27am'),
(1428, '121.5.147.119', 'Tsavo_user', 1632439746, '2021/09/24 | 02:29:06am'),
(1429, '54.148.93.109', 'Tsavo_user', 1632456785, '2021/09/24 | 07:13:05am'),
(1430, '54.218.100.206', 'Tsavo_user', 1632456825, '2021/09/24 | 07:13:45am'),
(1431, '42.83.147.35', 'Tsavo_user', 1632463909, '2021/09/24 | 09:11:49am'),
(1432, '51.222.253.12', 'Tsavo_user', 1632469719, '2021/09/24 | 10:48:39am'),
(1433, '51.222.253.8', 'Tsavo_user', 1632481027, '2021/09/24 | 01:57:07pm'),
(1434, '137.226.113.44', 'Tsavo_user', 1632492539, '2021/09/24 | 05:08:59pm'),
(1435, '137.226.113.44', 'Tsavo_user', 1632492540, '2021/09/24 | 05:09:00pm'),
(1436, '34.86.35.30', 'Tsavo_user', 1632500412, '2021/09/24 | 07:20:12pm'),
(1437, '35.197.251.99', 'Tsavo_user', 1632505927, '2021/09/24 | 08:52:07pm'),
(1438, '35.197.251.99', 'Tsavo_user', 1632505927, '2021/09/24 | 08:52:07pm'),
(1439, '45.170.15.8', 'Tsavo_user', 1632511906, '2021/09/24 | 10:31:46pm'),
(1440, '23.106.22.29', 'Tsavo_user', 1632511906, '2021/09/24 | 10:31:46pm'),
(1441, '87.250.224.178', 'Tsavo_user', 1632517977, '2021/09/25 | 12:12:57am'),
(1442, '54.203.242.6', 'Tsavo_user', 1632534393, '2021/09/25 | 04:46:33am'),
(1443, '54.203.242.6', 'Tsavo_user', 1632534393, '2021/09/25 | 04:46:33am'),
(1444, '34.210.47.227', 'Tsavo_user', 1632543731, '2021/09/25 | 07:22:11am'),
(1445, '54.202.169.60', 'Tsavo_user', 1632543747, '2021/09/25 | 07:22:27am'),
(1446, '51.222.253.2', 'Tsavo_user', 1632551669, '2021/09/25 | 09:34:29am'),
(1447, '5.45.75.92', 'Tsavo_user', 1632579031, '2021/09/25 | 05:10:31pm'),
(1448, '198.204.238.212', 'Tsavo_user', 1632607793, '2021/09/26 | 01:09:53am'),
(1449, '198.204.238.212', 'Tsavo_user', 1632607828, '2021/09/26 | 01:10:28am'),
(1450, '198.204.238.212', 'Tsavo_user', 1632608189, '2021/09/26 | 01:16:29am'),
(1451, '54.203.242.6', 'Tsavo_user', 1632612322, '2021/09/26 | 02:25:22am'),
(1452, '54.203.242.6', 'Tsavo_user', 1632614247, '2021/09/26 | 02:57:27am'),
(1453, '114.119.128.158', 'Tsavo_user', 1632618096, '2021/09/26 | 04:01:36am'),
(1454, '51.222.253.15', 'Tsavo_user', 1632625241, '2021/09/26 | 06:00:41am'),
(1455, '34.220.108.140', 'Tsavo_user', 1632630891, '2021/09/26 | 07:34:51am'),
(1456, '34.209.237.38', 'Tsavo_user', 1632630892, '2021/09/26 | 07:34:52am'),
(1457, '54.186.253.228', 'Tsavo_user', 1632630906, '2021/09/26 | 07:35:06am'),
(1458, '34.219.99.79', 'Tsavo_user', 1632630929, '2021/09/26 | 07:35:29am'),
(1459, '23.88.96.41', 'Tsavo_user', 1632632285, '2021/09/26 | 07:58:05am'),
(1460, '93.158.92.130', 'Tsavo_user', 1632633702, '2021/09/26 | 08:21:42am'),
(1461, '34.222.237.217', 'Tsavo_user', 1632635066, '2021/09/26 | 08:44:26am'),
(1462, '52.89.103.56', 'Tsavo_user', 1632642439, '2021/09/26 | 10:47:19am'),
(1463, '52.89.103.56', 'Tsavo_user', 1632642440, '2021/09/26 | 10:47:20am'),
(1464, '52.89.103.56', 'Tsavo_user', 1632642440, '2021/09/26 | 10:47:20am'),
(1465, '64.246.165.180', 'Tsavo_user', 1632643672, '2021/09/26 | 11:07:52am'),
(1466, '207.46.13.41', 'Tsavo_user', 1632646397, '2021/09/26 | 11:53:17am'),
(1467, '51.222.253.5', 'Tsavo_user', 1632677475, '2021/09/26 | 08:31:15pm'),
(1468, '51.222.253.2', 'Tsavo_user', 1632688591, '2021/09/26 | 11:36:31pm'),
(1469, '54.203.242.6', 'Tsavo_user', 1632694448, '2021/09/27 | 01:14:08am'),
(1470, '54.203.242.6', 'Tsavo_user', 1632694449, '2021/09/27 | 01:14:09am'),
(1471, '159.65.24.22', 'Tsavo_user', 1632703530, '2021/09/27 | 03:45:30am'),
(1472, '52.89.103.56', 'Tsavo_user', 1632706025, '2021/09/27 | 04:27:05am'),
(1473, '52.89.103.56', 'Tsavo_user', 1632706025, '2021/09/27 | 04:27:05am'),
(1474, '52.89.103.56', 'Tsavo_user', 1632708033, '2021/09/27 | 05:00:33am'),
(1475, '52.89.103.56', 'Tsavo_user', 1632708034, '2021/09/27 | 05:00:34am'),
(1476, '52.24.71.87', 'Tsavo_user', 1632717247, '2021/09/27 | 07:34:07am'),
(1477, '54.212.153.133', 'Tsavo_user', 1632717249, '2021/09/27 | 07:34:09am'),
(1478, '54.184.118.5', 'Tsavo_user', 1632717273, '2021/09/27 | 07:34:33am'),
(1479, '34.220.183.112', 'Tsavo_user', 1632717277, '2021/09/27 | 07:34:37am'),
(1480, '54.203.242.6', 'Tsavo_user', 1632717551, '2021/09/27 | 07:39:11am'),
(1481, '34.217.253.81', 'Tsavo_user', 1632717551, '2021/09/27 | 07:39:11am'),
(1482, '34.217.253.81', 'Tsavo_user', 1632717551, '2021/09/27 | 07:39:11am'),
(1483, '54.244.42.19', 'Tsavo_user', 1632720096, '2021/09/27 | 08:21:36am'),
(1484, '54.212.225.196', 'Tsavo_user', 1632720103, '2021/09/27 | 08:21:43am'),
(1485, '34.217.253.81', 'Tsavo_user', 1632720195, '2021/09/27 | 08:23:15am'),
(1486, '54.203.242.6', 'Tsavo_user', 1632720196, '2021/09/27 | 08:23:16am'),
(1487, '54.203.242.6', 'Tsavo_user', 1632720196, '2021/09/27 | 08:23:16am'),
(1488, '34.221.1.87', 'Tsavo_user', 1632720365, '2021/09/27 | 08:26:05am'),
(1489, '34.214.253.14', 'Tsavo_user', 1632720366, '2021/09/27 | 08:26:06am'),
(1490, '34.220.99.3', 'Tsavo_user', 1632720389, '2021/09/27 | 08:26:29am'),
(1491, '52.89.197.2', 'Tsavo_user', 1632720401, '2021/09/27 | 08:26:41am'),
(1492, '52.89.103.56', 'Tsavo_user', 1632724226, '2021/09/27 | 09:30:26am'),
(1493, '34.217.253.81', 'Tsavo_user', 1632724945, '2021/09/27 | 09:42:25am'),
(1494, '54.186.2.246', 'Tsavo_user', 1632726015, '2021/09/27 | 10:00:15am'),
(1495, '54.200.113.25', 'Tsavo_user', 1632726018, '2021/09/27 | 10:00:18am'),
(1496, '54.187.132.185', 'Tsavo_user', 1632726032, '2021/09/27 | 10:00:32am'),
(1497, '34.215.240.236', 'Tsavo_user', 1632726038, '2021/09/27 | 10:00:38am'),
(1498, '66.249.73.252', 'Tsavo_user', 1632733977, '2021/09/27 | 12:12:57pm'),
(1499, '66.249.73.254', 'Tsavo_user', 1632734113, '2021/09/27 | 12:15:13pm'),
(1500, '51.222.253.16', 'Tsavo_user', 1632734567, '2021/09/27 | 12:22:47pm'),
(1501, '104.154.49.76', 'Tsavo_user', 1632740846, '2021/09/27 | 02:07:26pm'),
(1502, '130.255.166.156', 'Tsavo_user', 1632749359, '2021/09/27 | 04:29:19pm'),
(1503, '104.154.49.76', 'Tsavo_user', 1632763550, '2021/09/27 | 08:25:50pm'),
(1504, '92.40.203.186', 'Tsavo_user', 1632775126, '2021/09/27 | 11:38:46pm'),
(1505, '110.39.199.238', 'Tsavo_user', 1632777256, '2021/09/28 | 12:14:16am'),
(1506, '95.179.130.74', 'Tsavo_user', 1632785199, '2021/09/28 | 02:26:39am'),
(1507, '54.203.178.11', 'Tsavo_user', 1632785376, '2021/09/28 | 02:29:36am'),
(1508, '42.83.147.34', 'Tsavo_user', 1632791961, '2021/09/28 | 04:19:21am'),
(1509, '172.255.48.139', 'Tsavo_user', 1632792813, '2021/09/28 | 04:33:33am'),
(1510, '172.255.48.139', 'Tsavo_user', 1632792817, '2021/09/28 | 04:33:37am'),
(1511, '54.203.242.6', 'Tsavo_user', 1632798038, '2021/09/28 | 06:00:38am'),
(1512, '54.203.242.6', 'Tsavo_user', 1632798039, '2021/09/28 | 06:00:39am'),
(1513, '34.217.253.81', 'Tsavo_user', 1632798378, '2021/09/28 | 06:06:18am'),
(1514, '34.217.253.81', 'Tsavo_user', 1632798378, '2021/09/28 | 06:06:18am'),
(1515, '114.119.128.158', 'Tsavo_user', 1632802094, '2021/09/28 | 07:08:14am'),
(1516, '34.219.20.98', 'Tsavo_user', 1632805024, '2021/09/28 | 07:57:04am'),
(1517, '52.42.156.47', 'Tsavo_user', 1632805047, '2021/09/28 | 07:57:27am'),
(1518, '18.237.214.101', 'Tsavo_user', 1632805408, '2021/09/28 | 08:03:28am'),
(1519, '35.164.25.192', 'Tsavo_user', 1632805452, '2021/09/28 | 08:04:12am'),
(1520, '207.244.230.205', 'Tsavo_user', 1632807349, '2021/09/28 | 08:35:49am'),
(1521, '52.89.103.56', 'Tsavo_user', 1632814950, '2021/09/28 | 10:42:30am'),
(1522, '52.89.103.56', 'Tsavo_user', 1632814950, '2021/09/28 | 10:42:30am'),
(1523, '51.222.253.5', 'Tsavo_user', 1632820662, '2021/09/28 | 12:17:42pm'),
(1524, '34.217.253.81', 'Tsavo_user', 1632823176, '2021/09/28 | 12:59:36pm'),
(1525, '34.217.253.81', 'Tsavo_user', 1632823176, '2021/09/28 | 12:59:36pm'),
(1526, '46.7.145.19', 'Tsavo_user', 1632825361, '2021/09/28 | 01:36:01pm'),
(1527, '167.99.120.2', 'Tsavo_user', 1632829800, '2021/09/28 | 02:50:00pm'),
(1528, '100.8.14.85', 'Tsavo_user', 1632841585, '2021/09/28 | 06:06:25pm'),
(1529, '42.83.147.34', 'Tsavo_user', 1632854082, '2021/09/28 | 09:34:42pm'),
(1530, '51.222.253.18', 'Tsavo_user', 1632883238, '2021/09/29 | 05:40:38am'),
(1531, '54.149.67.205', 'Tsavo_user', 1632888684, '2021/09/29 | 07:11:24am'),
(1532, '34.217.3.2', 'Tsavo_user', 1632888698, '2021/09/29 | 07:11:38am'),
(1533, '52.27.131.4', 'Tsavo_user', 1632888707, '2021/09/29 | 07:11:47am'),
(1534, '52.12.79.16', 'Tsavo_user', 1632888716, '2021/09/29 | 07:11:56am'),
(1535, '34.211.37.53', 'Tsavo_user', 1632888718, '2021/09/29 | 07:11:58am'),
(1536, '18.237.154.49', 'Tsavo_user', 1632889179, '2021/09/29 | 07:19:39am'),
(1537, '34.212.137.146', 'Tsavo_user', 1632889219, '2021/09/29 | 07:20:19am'),
(1538, '51.222.253.7', 'Tsavo_user', 1632901544, '2021/09/29 | 10:45:44am'),
(1539, '5.62.56.65', 'Tsavo_user', 1632912509, '2021/09/29 | 01:48:29pm'),
(1540, '161.35.91.184', 'Tsavo_user', 1632919255, '2021/09/29 | 03:40:55pm'),
(1541, '52.43.147.174', 'Tsavo_user', 1632919437, '2021/09/29 | 03:43:57pm'),
(1542, '161.35.91.76', 'Tsavo_user', 1632919549, '2021/09/29 | 03:45:49pm'),
(1543, '51.222.253.11', 'Tsavo_user', 1632928837, '2021/09/29 | 06:20:37pm'),
(1544, '102.140.206.138', 'Tsavo_user', 1632949295, '2021/09/30 | 12:01:35am'),
(1545, '195.146.37.241', 'Tsavo_user', 1632950324, '2021/09/30 | 12:18:44am'),
(1546, '195.146.37.241', 'Tsavo_user', 1632950324, '2021/09/30 | 12:18:44am'),
(1547, '195.146.37.241', 'Tsavo_user', 1632950349, '2021/09/30 | 12:19:09am'),
(1548, '195.146.37.241', 'Tsavo_user', 1632950351, '2021/09/30 | 12:19:11am'),
(1549, '179.43.169.181', 'Tsavo_user', 1632950404, '2021/09/30 | 12:20:04am'),
(1550, '195.146.37.241', 'Tsavo_user', 1632950413, '2021/09/30 | 12:20:13am'),
(1551, '195.146.37.241', 'Tsavo_user', 1632950414, '2021/09/30 | 12:20:14am'),
(1552, '179.43.169.181', 'Tsavo_user', 1632950526, '2021/09/30 | 12:22:06am'),
(1553, '50.18.204.14', 'Tsavo_user', 1632950961, '2021/09/30 | 12:29:21am'),
(1554, '54.203.242.6', 'Tsavo_user', 1632951775, '2021/09/30 | 12:42:55am'),
(1555, '54.203.242.6', 'Tsavo_user', 1632951775, '2021/09/30 | 12:42:55am'),
(1556, '209.225.130.182', 'Tsavo_user', 1632952082, '2021/09/30 | 12:48:02am'),
(1557, '167.99.60.10', 'Tsavo_user', 1632965132, '2021/09/30 | 04:25:32am'),
(1558, '54.71.255.155', 'Tsavo_user', 1632976969, '2021/09/30 | 07:42:49am'),
(1559, '34.219.219.52', 'Tsavo_user', 1632976971, '2021/09/30 | 07:42:51am'),
(1560, '34.222.95.49', 'Tsavo_user', 1632976985, '2021/09/30 | 07:43:05am'),
(1561, '34.216.43.42', 'Tsavo_user', 1632977001, '2021/09/30 | 07:43:21am'),
(1562, '54.36.148.154', 'Tsavo_user', 1632982659, '2021/09/30 | 09:17:39am'),
(1563, '91.219.212.228', 'Tsavo_user', 1633001475, '2021/09/30 | 02:31:15pm'),
(1564, '134.122.9.25', 'Tsavo_user', 1633016310, '2021/09/30 | 06:38:30pm'),
(1565, '54.36.148.19', 'Tsavo_user', 1633018280, '2021/09/30 | 07:11:20pm'),
(1566, '34.217.253.81', 'Tsavo_user', 1633020217, '2021/09/30 | 07:43:37pm'),
(1567, '54.36.149.89', 'Tsavo_user', 1633021328, '2021/09/30 | 08:02:08pm'),
(1568, '34.217.253.81', 'Tsavo_user', 1633022587, '2021/09/30 | 08:23:07pm'),
(1569, '207.46.13.41', 'Tsavo_user', 1633022592, '2021/09/30 | 08:23:12pm'),
(1570, '92.249.45.104', 'Tsavo_user', 1633036004, '2021/10/01 | 12:06:44am'),
(1571, '54.36.148.43', 'Tsavo_user', 1633036661, '2021/10/01 | 12:17:41am'),
(1572, '114.119.128.142', 'Tsavo_user', 1633039374, '2021/10/01 | 01:02:54am'),
(1573, '31.13.103.3', 'Tsavo_user', 1633040017, '2021/10/01 | 01:13:37am'),
(1574, '31.13.103.15', 'Tsavo_user', 1633040017, '2021/10/01 | 01:13:37am'),
(1575, '92.249.45.104', 'Tsavo_user', 1633047414, '2021/10/01 | 03:16:54am'),
(1576, '92.249.45.104', 'Tsavo_user', 1633047657, '2021/10/01 | 03:20:57am'),
(1577, '102.129.227.238', 'Tsavo_user', 1633052186, '2021/10/01 | 04:36:26am'),
(1578, '40.77.167.8', 'Tsavo_user', 1633054122, '2021/10/01 | 05:08:42am'),
(1579, '54.214.186.244', 'Tsavo_user', 1633062259, '2021/10/01 | 07:24:19am'),
(1580, '34.222.152.217', 'Tsavo_user', 1633062286, '2021/10/01 | 07:24:46am'),
(1581, '138.197.12.84', 'Tsavo_user', 1633063577, '2021/10/01 | 07:46:17am'),
(1582, '192.185.82.245', 'Tsavo_user', 1633067885, '2021/10/01 | 08:58:05am'),
(1583, '192.185.82.245', 'Tsavo_user', 1633067885, '2021/10/01 | 08:58:05am'),
(1584, '192.185.82.245', 'Tsavo_user', 1633067886, '2021/10/01 | 08:58:06am'),
(1585, '192.185.82.245', 'Tsavo_user', 1633067887, '2021/10/01 | 08:58:07am'),
(1586, '192.185.82.245', 'Tsavo_user', 1633067888, '2021/10/01 | 08:58:08am'),
(1587, '92.249.45.104', 'Tsavo_user', 1633073781, '2021/10/01 | 10:36:21am'),
(1588, '51.222.253.3', 'Tsavo_user', 1633086123, '2021/10/01 | 02:02:03pm'),
(1589, '143.198.145.52', 'Tsavo_user', 1633086475, '2021/10/01 | 02:07:55pm'),
(1590, '51.222.253.7', 'Tsavo_user', 1633124759, '2021/10/02 | 12:45:59am'),
(1591, '51.222.253.11', 'Tsavo_user', 1633132278, '2021/10/02 | 02:51:18am'),
(1592, '34.71.56.133', 'Tsavo_user', 1633135451, '2021/10/02 | 03:44:11am'),
(1593, '23.83.92.5', 'Tsavo_user', 1633135452, '2021/10/02 | 03:44:12am'),
(1594, '51.222.253.16', 'Tsavo_user', 1633135613, '2021/10/02 | 03:46:53am'),
(1595, '185.220.101.16', 'Tsavo_user', 1633141645, '2021/10/02 | 05:27:25am'),
(1596, '45.63.90.163', 'Tsavo_user', 1633144402, '2021/10/02 | 06:13:22am'),
(1597, '65.21.244.138', 'Tsavo_user', 1633144966, '2021/10/02 | 06:22:46am'),
(1598, '102.140.206.138', 'Tsavo_user', 1633148704, '2021/10/02 | 07:25:04am'),
(1599, '35.161.201.108', 'Tsavo_user', 1633149801, '2021/10/02 | 07:43:21am'),
(1600, '34.215.126.99', 'Tsavo_user', 1633149827, '2021/10/02 | 07:43:47am'),
(1601, '180.163.220.66', 'Tsavo_user', 1633149834, '2021/10/02 | 07:43:54am'),
(1602, '180.163.220.66', 'Tsavo_user', 1633149879, '2021/10/02 | 07:44:39am'),
(1603, '42.236.10.84', 'Tsavo_user', 1633149890, '2021/10/02 | 07:44:50am'),
(1604, '180.163.220.5', 'Tsavo_user', 1633149925, '2021/10/02 | 07:45:25am'),
(1605, '137.226.113.44', 'Tsavo_user', 1633152330, '2021/10/02 | 08:25:30am'),
(1606, '137.226.113.44', 'Tsavo_user', 1633152331, '2021/10/02 | 08:25:31am'),
(1607, '40.77.167.40', 'Tsavo_user', 1633159362, '2021/10/02 | 10:22:42am'),
(1608, '116.203.89.95', 'Tsavo_user', 1633166559, '2021/10/02 | 12:22:39pm'),
(1609, '116.203.89.95', 'Tsavo_user', 1633166560, '2021/10/02 | 12:22:40pm'),
(1610, '116.203.89.95', 'Tsavo_user', 1633166562, '2021/10/02 | 12:22:42pm'),
(1611, '162.55.182.254', 'Tsavo_user', 1633166567, '2021/10/02 | 12:22:47pm'),
(1612, '74.208.42.172', 'Tsavo_user', 1633167178, '2021/10/02 | 12:32:58pm'),
(1613, '74.208.42.172', 'Tsavo_user', 1633167179, '2021/10/02 | 12:32:59pm'),
(1614, '102.140.206.138', 'Tsavo_user', 1633167478, '2021/10/02 | 12:37:58pm'),
(1615, '116.203.89.95', 'Tsavo_user', 1633168567, '2021/10/02 | 12:56:07pm'),
(1616, '116.203.89.95', 'Tsavo_user', 1633168568, '2021/10/02 | 12:56:08pm'),
(1617, '116.203.89.95', 'Tsavo_user', 1633168569, '2021/10/02 | 12:56:09pm'),
(1618, '66.249.88.172', 'Tsavo_user', 1633168709, '2021/10/02 | 12:58:29pm'),
(1619, '66.249.88.172', 'Tsavo_user', 1633168715, '2021/10/02 | 12:58:35pm'),
(1620, '66.249.88.170', 'Tsavo_user', 1633168715, '2021/10/02 | 12:58:35pm'),
(1621, '66.249.88.168', 'Tsavo_user', 1633168715, '2021/10/02 | 12:58:35pm'),
(1622, '209.85.238.231', 'Tsavo_user', 1633168715, '2021/10/02 | 12:58:35pm'),
(1623, '209.85.238.235', 'Tsavo_user', 1633168715, '2021/10/02 | 12:58:35pm'),
(1624, '66.249.80.231', 'Tsavo_user', 1633168718, '2021/10/02 | 12:58:38pm'),
(1625, '66.249.88.172', 'Tsavo_user', 1633168741, '2021/10/02 | 12:59:01pm'),
(1626, '66.102.6.170', 'Tsavo_user', 1633168743, '2021/10/02 | 12:59:03pm'),
(1627, '209.85.238.233', 'Tsavo_user', 1633168823, '2021/10/02 | 01:00:23pm'),
(1628, '209.85.238.233', 'Tsavo_user', 1633168823, '2021/10/02 | 01:00:23pm'),
(1629, '66.249.88.172', 'Tsavo_user', 1633168879, '2021/10/02 | 01:01:19pm'),
(1630, '66.102.6.170', 'Tsavo_user', 1633169306, '2021/10/02 | 01:08:26pm'),
(1631, '54.203.242.6', 'Tsavo_user', 1633174959, '2021/10/02 | 02:42:39pm'),
(1632, '54.203.242.6', 'Tsavo_user', 1633174960, '2021/10/02 | 02:42:40pm'),
(1633, '124.126.78.189', 'Tsavo_user', 1633182670, '2021/10/02 | 04:51:10pm'),
(1634, '51.222.253.15', 'Tsavo_user', 1633183344, '2021/10/02 | 05:02:24pm'),
(1635, '52.89.103.56', 'Tsavo_user', 1633199671, '2021/10/02 | 09:34:31pm'),
(1636, '52.89.103.56', 'Tsavo_user', 1633201260, '2021/10/02 | 10:01:00pm'),
(1637, '52.89.103.56', 'Tsavo_user', 1633201261, '2021/10/02 | 10:01:01pm'),
(1638, '52.89.103.56', 'Tsavo_user', 1633202170, '2021/10/02 | 10:16:10pm'),
(1639, '34.217.253.81', 'Tsavo_user', 1633202819, '2021/10/02 | 10:26:59pm'),
(1640, '52.89.103.56', 'Tsavo_user', 1633205316, '2021/10/02 | 11:08:36pm'),
(1641, '130.255.166.235', 'Tsavo_user', 1633216388, '2021/10/03 | 02:13:08am'),
(1642, '51.222.253.9', 'Tsavo_user', 1633220598, '2021/10/03 | 03:23:18am'),
(1643, '18.237.148.154', 'Tsavo_user', 1633236569, '2021/10/03 | 07:49:29am'),
(1644, '52.37.253.221', 'Tsavo_user', 1633236572, '2021/10/03 | 07:49:32am'),
(1645, '34.216.147.68', 'Tsavo_user', 1633236595, '2021/10/03 | 07:49:55am'),
(1646, '35.167.246.64', 'Tsavo_user', 1633236609, '2021/10/03 | 07:50:09am'),
(1647, '34.217.253.81', 'Tsavo_user', 1633237670, '2021/10/03 | 08:07:50am'),
(1648, '51.222.253.12', 'Tsavo_user', 1633242981, '2021/10/03 | 09:36:21am'),
(1649, '173.211.90.133', 'Tsavo_user', 1633246445, '2021/10/03 | 10:34:05am'),
(1650, '37.114.96.220', 'Tsavo_user', 1633246451, '2021/10/03 | 10:34:11am'),
(1651, '102.140.206.138', 'Tsavo_user', 1633246454, '2021/10/03 | 10:34:14am'),
(1652, '85.92.66.148', 'Tsavo_user', 1633246574, '2021/10/03 | 10:36:14am'),
(1653, '85.92.66.146', 'Tsavo_user', 1633246578, '2021/10/03 | 10:36:18am'),
(1654, '114.119.128.158', 'Tsavo_user', 1633246642, '2021/10/03 | 10:37:22am'),
(1655, '66.249.65.40', 'Tsavo_user', 1633247294, '2021/10/03 | 10:48:14am'),
(1656, '66.249.65.44', 'Tsavo_user', 1633247296, '2021/10/03 | 10:48:16am'),
(1657, '66.249.65.40', 'Tsavo_user', 1633247442, '2021/10/03 | 10:50:42am'),
(1658, '66.249.65.40', 'Tsavo_user', 1633260447, '2021/10/03 | 02:27:27pm'),
(1659, '66.249.65.40', 'Tsavo_user', 1633260454, '2021/10/03 | 02:27:34pm'),
(1660, '66.249.65.40', 'Tsavo_user', 1633260678, '2021/10/03 | 02:31:18pm'),
(1661, '66.249.65.40', 'Tsavo_user', 1633260678, '2021/10/03 | 02:31:18pm'),
(1662, '66.249.65.40', 'Tsavo_user', 1633260679, '2021/10/03 | 02:31:19pm'),
(1663, '66.249.65.40', 'Tsavo_user', 1633260680, '2021/10/03 | 02:31:20pm'),
(1664, '51.222.253.17', 'Tsavo_user', 1633269173, '2021/10/03 | 04:52:53pm'),
(1665, '51.222.253.18', 'Tsavo_user', 1633279076, '2021/10/03 | 07:37:56pm'),
(1666, '34.217.253.81', 'Tsavo_user', 1633284079, '2021/10/03 | 09:01:19pm'),
(1667, '54.203.242.6', 'Tsavo_user', 1633284629, '2021/10/03 | 09:10:29pm'),
(1668, '54.203.242.6', 'Tsavo_user', 1633284629, '2021/10/03 | 09:10:29pm'),
(1669, '34.217.253.81', 'Tsavo_user', 1633285001, '2021/10/03 | 09:16:41pm'),
(1670, '34.217.253.81', 'Tsavo_user', 1633285001, '2021/10/03 | 09:16:41pm'),
(1671, '92.118.160.9', 'Tsavo_user', 1633285549, '2021/10/03 | 09:25:49pm'),
(1672, '124.126.78.179', 'Tsavo_user', 1633286075, '2021/10/03 | 09:34:35pm'),
(1673, '54.203.242.6', 'Tsavo_user', 1633286078, '2021/10/03 | 09:34:38pm'),
(1674, '54.203.242.6', 'Tsavo_user', 1633286078, '2021/10/03 | 09:34:38pm'),
(1675, '54.203.242.6', 'Tsavo_user', 1633286251, '2021/10/03 | 09:37:31pm'),
(1676, '52.89.103.56', 'Tsavo_user', 1633286641, '2021/10/03 | 09:44:01pm'),
(1677, '73.237.97.207', 'Tsavo_user', 1633288814, '2021/10/03 | 10:20:14pm'),
(1678, '34.217.253.81', 'Tsavo_user', 1633288861, '2021/10/03 | 10:21:01pm'),
(1679, '52.89.103.56', 'Tsavo_user', 1633288862, '2021/10/03 | 10:21:02pm'),
(1680, '52.89.103.56', 'Tsavo_user', 1633288862, '2021/10/03 | 10:21:02pm'),
(1681, '52.89.103.56', 'Tsavo_user', 1633289525, '2021/10/03 | 10:32:05pm'),
(1682, '52.89.103.56', 'Tsavo_user', 1633289679, '2021/10/03 | 10:34:39pm'),
(1683, '34.217.253.81', 'Tsavo_user', 1633289912, '2021/10/03 | 10:38:32pm'),
(1684, '54.203.242.6', 'Tsavo_user', 1633290035, '2021/10/03 | 10:40:35pm'),
(1685, '54.203.242.6', 'Tsavo_user', 1633290281, '2021/10/03 | 10:44:41pm'),
(1686, '54.203.242.6', 'Tsavo_user', 1633290331, '2021/10/03 | 10:45:31pm'),
(1687, '54.203.242.6', 'Tsavo_user', 1633290519, '2021/10/03 | 10:48:39pm'),
(1688, '52.89.103.56', 'Tsavo_user', 1633292709, '2021/10/03 | 11:25:09pm'),
(1689, '52.89.103.56', 'Tsavo_user', 1633292709, '2021/10/03 | 11:25:09pm'),
(1690, '52.89.103.56', 'Tsavo_user', 1633292709, '2021/10/03 | 11:25:09pm'),
(1691, '54.203.242.6', 'Tsavo_user', 1633293109, '2021/10/03 | 11:31:49pm'),
(1692, '51.222.253.7', 'Tsavo_user', 1633299904, '2021/10/04 | 01:25:04am'),
(1693, '102.140.206.138', 'Tsavo_user', 1633301033, '2021/10/04 | 01:43:53am'),
(1694, '114.119.128.142', 'Tsavo_user', 1633304320, '2021/10/04 | 02:38:40am'),
(1695, '51.222.253.9', 'Tsavo_user', 1633311599, '2021/10/04 | 04:39:59am'),
(1696, '54.69.56.181', 'Tsavo_user', 1633320237, '2021/10/04 | 07:03:57am'),
(1697, '34.210.153.254', 'Tsavo_user', 1633320256, '2021/10/04 | 07:04:16am'),
(1698, '18.236.117.213', 'Tsavo_user', 1633320266, '2021/10/04 | 07:04:26am'),
(1699, '52.33.101.5', 'Tsavo_user', 1633320293, '2021/10/04 | 07:04:53am'),
(1700, '66.249.65.40', 'Tsavo_user', 1633323408, '2021/10/04 | 07:56:48am'),
(1701, '114.119.128.14', 'Tsavo_user', 1633323940, '2021/10/04 | 08:05:40am'),
(1702, '66.249.65.42', 'Tsavo_user', 1633324083, '2021/10/04 | 08:08:03am'),
(1703, '18.237.246.19', 'Tsavo_user', 1633324742, '2021/10/04 | 08:19:02am'),
(1704, '52.89.103.56', 'Tsavo_user', 1633326026, '2021/10/04 | 08:40:26am'),
(1705, '18.236.131.222', 'Tsavo_user', 1633326180, '2021/10/04 | 08:43:00am'),
(1706, '34.217.253.81', 'Tsavo_user', 1633326982, '2021/10/04 | 08:56:22am'),
(1707, '54.203.242.6', 'Tsavo_user', 1633327432, '2021/10/04 | 09:03:52am'),
(1708, '52.89.103.56', 'Tsavo_user', 1633327837, '2021/10/04 | 09:10:37am'),
(1709, '34.217.253.81', 'Tsavo_user', 1633328420, '2021/10/04 | 09:20:20am'),
(1710, '34.217.253.81', 'Tsavo_user', 1633328420, '2021/10/04 | 09:20:20am'),
(1711, '34.217.253.81', 'Tsavo_user', 1633329352, '2021/10/04 | 09:35:52am'),
(1712, '185.253.97.251', 'Tsavo_user', 1633329598, '2021/10/04 | 09:39:58am'),
(1713, '34.217.253.81', 'Tsavo_user', 1633331229, '2021/10/04 | 10:07:09am'),
(1714, '54.203.242.6', 'Tsavo_user', 1633331368, '2021/10/04 | 10:09:28am'),
(1715, '34.217.253.81', 'Tsavo_user', 1633331635, '2021/10/04 | 10:13:55am'),
(1716, '54.203.242.6', 'Tsavo_user', 1633341519, '2021/10/04 | 12:58:39pm'),
(1717, '34.217.253.81', 'Tsavo_user', 1633341737, '2021/10/04 | 01:02:17pm'),
(1718, '34.217.253.81', 'Tsavo_user', 1633341996, '2021/10/04 | 01:06:36pm'),
(1719, '51.222.253.9', 'Tsavo_user', 1633342114, '2021/10/04 | 01:08:34pm'),
(1720, '52.89.103.56', 'Tsavo_user', 1633342159, '2021/10/04 | 01:09:19pm'),
(1721, '52.89.103.56', 'Tsavo_user', 1633342282, '2021/10/04 | 01:11:22pm'),
(1722, '52.89.103.56', 'Tsavo_user', 1633342282, '2021/10/04 | 01:11:22pm'),
(1723, '34.217.253.81', 'Tsavo_user', 1633342579, '2021/10/04 | 01:16:19pm'),
(1724, '54.203.242.6', 'Tsavo_user', 1633342831, '2021/10/04 | 01:20:31pm'),
(1725, '52.89.103.56', 'Tsavo_user', 1633342898, '2021/10/04 | 01:21:38pm'),
(1726, '54.203.242.6', 'Tsavo_user', 1633343017, '2021/10/04 | 01:23:37pm'),
(1727, '51.222.253.8', 'Tsavo_user', 1633345939, '2021/10/04 | 02:12:19pm'),
(1728, '66.249.65.42', 'Tsavo_user', 1633346701, '2021/10/04 | 02:25:01pm'),
(1729, '66.249.65.42', 'Tsavo_user', 1633346705, '2021/10/04 | 02:25:05pm'),
(1730, '171.13.14.19', 'Tsavo_user', 1633371913, '2021/10/04 | 09:25:13pm'),
(1731, '171.13.14.75', 'Tsavo_user', 1633371956, '2021/10/04 | 09:25:56pm'),
(1732, '102.140.206.138', 'Tsavo_user', 1633376255, '2021/10/04 | 10:37:35pm'),
(1733, '51.222.253.20', 'Tsavo_user', 1633376400, '2021/10/04 | 10:40:00pm'),
(1734, '54.185.161.154', 'Tsavo_user', 1633379693, '2021/10/04 | 11:34:53pm'),
(1735, '54.185.161.154', 'Tsavo_user', 1633379841, '2021/10/04 | 11:37:21pm'),
(1736, '54.191.252.115', 'Tsavo_user', 1633379851, '2021/10/04 | 11:37:31pm'),
(1737, '51.222.253.7', 'Tsavo_user', 1633379923, '2021/10/04 | 11:38:43pm'),
(1738, '93.159.230.89', 'Tsavo_user', 1633380623, '2021/10/04 | 11:50:23pm'),
(1739, '34.220.111.170', 'Tsavo_user', 1633387410, '2021/10/05 | 01:43:30am'),
(1740, '164.90.132.30', 'Tsavo_user', 1633402812, '2021/10/05 | 06:00:12am'),
(1741, '45.55.46.220', 'Tsavo_user', 1633402819, '2021/10/05 | 06:00:19am'),
(1742, '159.89.179.158', 'Tsavo_user', 1633404374, '2021/10/05 | 06:26:14am'),
(1743, '34.209.85.78', 'Tsavo_user', 1633407564, '2021/10/05 | 07:19:24am'),
(1744, '54.202.254.54', 'Tsavo_user', 1633407564, '2021/10/05 | 07:19:24am'),
(1745, '52.88.193.245', 'Tsavo_user', 1633407585, '2021/10/05 | 07:19:45am'),
(1746, '54.214.119.242', 'Tsavo_user', 1633407594, '2021/10/05 | 07:19:54am'),
(1747, '51.222.253.20', 'Tsavo_user', 1633413855, '2021/10/05 | 09:04:15am'),
(1748, '51.222.253.16', 'Tsavo_user', 1633417500, '2021/10/05 | 10:05:00am'),
(1749, '102.140.206.138', 'Tsavo_user', 1633420050, '2021/10/05 | 10:47:30am'),
(1750, '34.217.253.81', 'Tsavo_user', 1633426647, '2021/10/05 | 12:37:27pm'),
(1751, '54.203.242.6', 'Tsavo_user', 1633426648, '2021/10/05 | 12:37:28pm'),
(1752, '54.203.242.6', 'Tsavo_user', 1633426648, '2021/10/05 | 12:37:28pm'),
(1753, '34.217.253.81', 'Tsavo_user', 1633429062, '2021/10/05 | 01:17:42pm'),
(1754, '93.158.161.53', 'Tsavo_user', 1633437003, '2021/10/05 | 03:30:03pm'),
(1755, '51.222.253.9', 'Tsavo_user', 1633449506, '2021/10/05 | 06:58:26pm'),
(1756, '51.222.253.19', 'Tsavo_user', 1633452945, '2021/10/05 | 07:55:45pm'),
(1757, '51.222.253.5', 'Tsavo_user', 1633485181, '2021/10/06 | 04:53:01am'),
(1758, '51.222.253.9', 'Tsavo_user', 1633488576, '2021/10/06 | 05:49:36am'),
(1759, '34.219.67.171', 'Tsavo_user', 1633495160, '2021/10/06 | 07:39:20am'),
(1760, '34.211.115.16', 'Tsavo_user', 1633495167, '2021/10/06 | 07:39:27am'),
(1761, '54.245.71.118', 'Tsavo_user', 1633495183, '2021/10/06 | 07:39:43am'),
(1762, '54.212.8.36', 'Tsavo_user', 1633495185, '2021/10/06 | 07:39:45am'),
(1763, '66.249.73.227', 'Tsavo_user', 1633518264, '2021/10/06 | 02:04:24pm'),
(1764, '103.213.202.163', 'Tsavo_user', 1633520416, '2021/10/06 | 02:40:16pm'),
(1765, '103.213.202.163', 'Tsavo_user', 1633520505, '2021/10/06 | 02:41:45pm'),
(1766, '51.222.253.18', 'Tsavo_user', 1633525958, '2021/10/06 | 04:12:38pm'),
(1767, '51.222.253.7', 'Tsavo_user', 1633536026, '2021/10/06 | 07:00:26pm'),
(1768, '52.89.103.56', 'Tsavo_user', 1633552056, '2021/10/06 | 11:27:36pm'),
(1769, '66.249.73.227', 'Tsavo_user', 1633555194, '2021/10/07 | 12:19:54am'),
(1770, '51.222.253.18', 'Tsavo_user', 1633566698, '2021/10/07 | 03:31:38am'),
(1771, '51.222.253.16', 'Tsavo_user', 1633572261, '2021/10/07 | 05:04:21am'),
(1772, '66.249.65.44', 'Tsavo_user', 1633577122, '2021/10/07 | 06:25:22am'),
(1773, '93.158.161.53', 'Tsavo_user', 1633578879, '2021/10/07 | 06:54:39am'),
(1774, '52.35.23.227', 'Tsavo_user', 1633581612, '2021/10/07 | 07:40:12am'),
(1775, '34.216.178.185', 'Tsavo_user', 1633581634, '2021/10/07 | 07:40:34am'),
(1776, '34.208.157.131', 'Tsavo_user', 1633581635, '2021/10/07 | 07:40:35am'),
(1777, '34.208.157.131', 'Tsavo_user', 1633581654, '2021/10/07 | 07:40:54am'),
(1778, '34.216.178.185', 'Tsavo_user', 1633581659, '2021/10/07 | 07:40:59am'),
(1779, '34.221.66.146', 'Tsavo_user', 1633581721, '2021/10/07 | 07:42:01am'),
(1780, '52.26.234.132', 'Tsavo_user', 1633581778, '2021/10/07 | 07:42:58am'),
(1781, '52.26.234.132', 'Tsavo_user', 1633581778, '2021/10/07 | 07:42:58am'),
(1782, '54.187.49.167', 'Tsavo_user', 1633581779, '2021/10/07 | 07:42:59am'),
(1783, '143.198.159.29', 'Tsavo_user', 1633592463, '2021/10/07 | 10:41:03am'),
(1784, '51.222.253.9', 'Tsavo_user', 1633601937, '2021/10/07 | 01:18:57pm'),
(1785, '66.249.65.45', 'Tsavo_user', 1633603836, '2021/10/07 | 01:50:36pm'),
(1786, '51.222.253.8', 'Tsavo_user', 1633608207, '2021/10/07 | 03:03:27pm'),
(1787, '54.203.242.6', 'Tsavo_user', 1633619672, '2021/10/07 | 06:14:32pm'),
(1788, '54.203.242.6', 'Tsavo_user', 1633619672, '2021/10/07 | 06:14:32pm'),
(1789, '52.89.103.56', 'Tsavo_user', 1633620034, '2021/10/07 | 06:20:34pm'),
(1790, '52.89.103.56', 'Tsavo_user', 1633620034, '2021/10/07 | 06:20:34pm'),
(1791, '54.203.242.6', 'Tsavo_user', 1633620447, '2021/10/07 | 06:27:27pm'),
(1792, '34.217.253.81', 'Tsavo_user', 1633621125, '2021/10/07 | 06:38:45pm'),
(1793, '34.217.253.81', 'Tsavo_user', 1633621125, '2021/10/07 | 06:38:45pm'),
(1794, '34.217.253.81', 'Tsavo_user', 1633622047, '2021/10/07 | 06:54:07pm'),
(1795, '66.249.73.231', 'Tsavo_user', 1633626421, '2021/10/07 | 08:07:01pm'),
(1796, '34.217.253.81', 'Tsavo_user', 1633629947, '2021/10/07 | 09:05:47pm'),
(1797, '34.212.244.116', 'Tsavo_user', 1633631708, '2021/10/07 | 09:35:08pm'),
(1798, '51.222.253.19', 'Tsavo_user', 1633637056, '2021/10/07 | 11:04:16pm'),
(1799, '23.108.52.104', 'Tsavo_user', 1633638582, '2021/10/07 | 11:29:42pm'),
(1800, '51.222.253.3', 'Tsavo_user', 1633640794, '2021/10/08 | 12:06:34am'),
(1801, '66.249.73.229', 'Tsavo_user', 1633642525, '2021/10/08 | 12:35:25am'),
(1802, '34.223.54.117', 'Tsavo_user', 1633649625, '2021/10/08 | 02:33:45am'),
(1803, '114.119.128.172', 'Tsavo_user', 1633654615, '2021/10/08 | 03:56:55am'),
(1804, '54.213.100.101', 'Tsavo_user', 1633667350, '2021/10/08 | 07:29:10am'),
(1805, '54.184.252.207', 'Tsavo_user', 1633667350, '2021/10/08 | 07:29:10am'),
(1806, '35.86.107.64', 'Tsavo_user', 1633667368, '2021/10/08 | 07:29:28am'),
(1807, '54.202.185.154', 'Tsavo_user', 1633667373, '2021/10/08 | 07:29:33am'),
(1808, '51.222.253.14', 'Tsavo_user', 1633675078, '2021/10/08 | 09:37:58am'),
(1809, '93.158.92.199', 'Tsavo_user', 1633676089, '2021/10/08 | 09:54:49am'),
(1810, '51.222.253.7', 'Tsavo_user', 1633678261, '2021/10/08 | 10:31:01am'),
(1811, '66.70.178.119', 'Tsavo_user', 1633692520, '2021/10/08 | 02:28:40pm'),
(1812, '103.13.106.225', 'Tsavo_user', 1633692725, '2021/10/08 | 02:32:05pm'),
(1813, '51.222.253.16', 'Tsavo_user', 1633703310, '2021/10/08 | 05:28:30pm'),
(1814, '52.89.103.56', 'Tsavo_user', 1633704926, '2021/10/08 | 05:55:26pm'),
(1815, '34.217.253.81', 'Tsavo_user', 1633704927, '2021/10/08 | 05:55:27pm'),
(1816, '34.217.253.81', 'Tsavo_user', 1633704927, '2021/10/08 | 05:55:27pm'),
(1817, '51.222.253.16', 'Tsavo_user', 1633709344, '2021/10/08 | 07:09:04pm'),
(1818, '51.222.253.5', 'Tsavo_user', 1633733397, '2021/10/09 | 01:49:57am'),
(1819, '92.118.160.13', 'Tsavo_user', 1633737353, '2021/10/09 | 02:55:53am'),
(1820, '51.222.253.17', 'Tsavo_user', 1633743854, '2021/10/09 | 04:44:14am'),
(1821, '54.186.15.40', 'Tsavo_user', 1633753098, '2021/10/09 | 07:18:18am'),
(1822, '183.88.110.69', 'Tsavo_user', 1633753341, '2021/10/09 | 07:22:21am'),
(1823, '54.202.135.187', 'Tsavo_user', 1633753576, '2021/10/09 | 07:26:16am'),
(1824, '114.119.128.158', 'Tsavo_user', 1633754454, '2021/10/09 | 07:40:54am'),
(1825, '23.20.236.240', 'Tsavo_user', 1633756499, '2021/10/09 | 08:14:59am'),
(1826, '51.222.253.11', 'Tsavo_user', 1633760074, '2021/10/09 | 09:14:34am'),
(1827, '51.222.253.6', 'Tsavo_user', 1633769391, '2021/10/09 | 11:49:51am'),
(1828, '137.226.113.44', 'Tsavo_user', 1633784142, '2021/10/09 | 03:55:42pm'),
(1829, '137.226.113.44', 'Tsavo_user', 1633784142, '2021/10/09 | 03:55:42pm'),
(1830, '51.222.253.18', 'Tsavo_user', 1633798782, '2021/10/09 | 07:59:42pm'),
(1831, '51.222.253.14', 'Tsavo_user', 1633803679, '2021/10/09 | 09:21:19pm'),
(1832, '147.182.242.109', 'Tsavo_user', 1633811552, '2021/10/09 | 11:32:32pm'),
(1833, '92.118.160.41', 'Tsavo_user', 1633822561, '2021/10/10 | 02:36:01am'),
(1834, '51.222.253.4', 'Tsavo_user', 1633837490, '2021/10/10 | 06:44:50am'),
(1835, '34.220.245.146', 'Tsavo_user', 1633840260, '2021/10/10 | 07:31:00am'),
(1836, '52.39.23.161', 'Tsavo_user', 1633840298, '2021/10/10 | 07:31:38am'),
(1837, '51.222.253.1', 'Tsavo_user', 1633840750, '2021/10/10 | 07:39:10am'),
(1838, '51.222.253.15', 'Tsavo_user', 1633871605, '2021/10/10 | 04:13:25pm'),
(1839, '51.222.253.11', 'Tsavo_user', 1633874909, '2021/10/10 | 05:08:29pm'),
(1840, '161.156.101.149', 'Tsavo_user', 1633891833, '2021/10/10 | 09:50:33pm'),
(1841, '208.80.194.35', 'Tsavo_user', 1633895782, '2021/10/10 | 10:56:22pm'),
(1842, '23.81.67.231', 'Tsavo_user', 1633902153, '2021/10/11 | 12:42:33am'),
(1843, '173.245.75.228', 'Tsavo_user', 1633902157, '2021/10/11 | 12:42:37am'),
(1844, '51.222.253.19', 'Tsavo_user', 1633916516, '2021/10/11 | 04:41:56am'),
(1845, '51.222.253.3', 'Tsavo_user', 1633919639, '2021/10/11 | 05:33:59am'),
(1846, '49.251.72.16', 'Tsavo_user', 1633923667, '2021/10/11 | 06:41:07am'),
(1847, '119.193.128.104', 'Tsavo_user', 1633923670, '2021/10/11 | 06:41:10am'),
(1848, '52.24.231.69', 'Tsavo_user', 1633930563, '2021/10/11 | 08:36:03am'),
(1849, '34.220.156.78', 'Tsavo_user', 1633930564, '2021/10/11 | 08:36:04am'),
(1850, '52.26.194.173', 'Tsavo_user', 1633930603, '2021/10/11 | 08:36:43am'),
(1851, '35.160.231.58', 'Tsavo_user', 1633930610, '2021/10/11 | 08:36:50am'),
(1852, '196.105.39.243', 'Tsavo_user', 1633936768, '2021/10/11 | 10:19:28am'),
(1853, '34.210.130.187', 'Tsavo_user', 1633947791, '2021/10/11 | 01:23:11pm'),
(1854, '34.210.130.187', 'Tsavo_user', 1633947791, '2021/10/11 | 01:23:11pm'),
(1855, '124.126.78.190', 'Tsavo_user', 1633950228, '2021/10/11 | 02:03:48pm'),
(1856, '51.222.253.8', 'Tsavo_user', 1633962578, '2021/10/11 | 05:29:38pm'),
(1857, '31.13.103.20', 'Tsavo_user', 1633963511, '2021/10/11 | 05:45:11pm'),
(1858, '31.13.103.14', 'Tsavo_user', 1633963511, '2021/10/11 | 05:45:11pm'),
(1859, '154.70.58.127', 'Tsavo_user', 1633963518, '2021/10/11 | 05:45:18pm'),
(1860, '51.222.253.3', 'Tsavo_user', 1633965882, '2021/10/11 | 06:24:42pm'),
(1861, '52.89.103.56', 'Tsavo_user', 1633987310, '2021/10/12 | 12:21:50am'),
(1862, '52.89.103.56', 'Tsavo_user', 1633987310, '2021/10/12 | 12:21:50am'),
(1863, '34.222.144.248', 'Tsavo_user', 1633998139, '2021/10/12 | 03:22:19am'),
(1864, '51.222.253.16', 'Tsavo_user', 1634011984, '2021/10/12 | 07:13:04am'),
(1865, '51.222.253.17', 'Tsavo_user', 1634015607, '2021/10/12 | 08:13:27am'),
(1866, '72.13.46.2', 'Tsavo_user', 1634034967, '2021/10/12 | 01:36:07pm'),
(1867, '51.222.253.17', 'Tsavo_user', 1634059467, '2021/10/12 | 08:24:27pm'),
(1868, '45.129.18.224', 'Tsavo_user', 1634062528, '2021/10/12 | 09:15:28pm'),
(1869, '51.222.253.14', 'Tsavo_user', 1634063150, '2021/10/12 | 09:25:50pm'),
(1870, '18.237.64.219', 'Tsavo_user', 1634100167, '2021/10/13 | 07:42:47am'),
(1871, '34.219.173.87', 'Tsavo_user', 1634100186, '2021/10/13 | 07:43:06am'),
(1872, '18.236.126.15', 'Tsavo_user', 1634100249, '2021/10/13 | 07:44:09am'),
(1873, '54.202.132.237', 'Tsavo_user', 1634100284, '2021/10/13 | 07:44:44am'),
(1874, '52.89.20.71', 'Tsavo_user', 1634101885, '2021/10/13 | 08:11:25am'),
(1875, '54.213.199.192', 'Tsavo_user', 1634102011, '2021/10/13 | 08:13:31am'),
(1876, '51.222.253.16', 'Tsavo_user', 1634108244, '2021/10/13 | 09:57:24am'),
(1877, '51.222.253.13', 'Tsavo_user', 1634113929, '2021/10/13 | 11:32:09am'),
(1878, '146.70.49.106', 'Tsavo_user', 1634122063, '2021/10/13 | 01:47:43pm'),
(1879, '51.222.253.20', 'Tsavo_user', 1634157927, '2021/10/13 | 11:45:27pm'),
(1880, '51.222.253.4', 'Tsavo_user', 1634162376, '2021/10/14 | 12:59:36am'),
(1881, '3.21.44.53', 'Tsavo_user', 1634175855, '2021/10/14 | 04:44:15am'),
(1882, '3.21.44.53', 'Tsavo_user', 1634175855, '2021/10/14 | 04:44:15am'),
(1883, '18.237.233.67', 'Tsavo_user', 1634185195, '2021/10/14 | 07:19:55am'),
(1884, '52.32.15.208', 'Tsavo_user', 1634185196, '2021/10/14 | 07:19:56am'),
(1885, '52.43.22.243', 'Tsavo_user', 1634185219, '2021/10/14 | 07:20:19am'),
(1886, '34.211.166.19', 'Tsavo_user', 1634185326, '2021/10/14 | 07:22:06am'),
(1887, '13.127.206.181', 'Tsavo_user', 1634202952, '2021/10/14 | 12:15:52pm'),
(1888, '51.222.253.18', 'Tsavo_user', 1634207632, '2021/10/14 | 01:33:52pm'),
(1889, '51.222.253.15', 'Tsavo_user', 1634211521, '2021/10/14 | 02:38:41pm'),
(1890, '66.249.65.42', 'Tsavo_user', 1634212937, '2021/10/14 | 03:02:17pm'),
(1891, '192.71.44.44', 'Tsavo_user', 1634240414, '2021/10/14 | 10:40:14pm'),
(1892, '66.249.65.44', 'Tsavo_user', 1634241314, '2021/10/14 | 10:55:14pm'),
(1893, '66.249.65.40', 'Tsavo_user', 1634246475, '2021/10/15 | 12:21:15am'),
(1894, '54.203.242.6', 'Tsavo_user', 1634250025, '2021/10/15 | 01:20:25am'),
(1895, '54.203.242.6', 'Tsavo_user', 1634250147, '2021/10/15 | 01:22:27am'),
(1896, '51.222.253.6', 'Tsavo_user', 1634261054, '2021/10/15 | 04:24:14am'),
(1897, '51.222.253.3', 'Tsavo_user', 1634264324, '2021/10/15 | 05:18:44am'),
(1898, '54.191.121.57', 'Tsavo_user', 1634273292, '2021/10/15 | 07:48:12am'),
(1899, '54.245.53.121', 'Tsavo_user', 1634273294, '2021/10/15 | 07:48:14am'),
(1900, '54.149.80.242', 'Tsavo_user', 1634273321, '2021/10/15 | 07:48:41am'),
(1901, '54.213.222.164', 'Tsavo_user', 1634273322, '2021/10/15 | 07:48:42am'),
(1902, '66.249.65.44', 'Tsavo_user', 1634296529, '2021/10/15 | 02:15:29pm'),
(1903, '51.222.253.7', 'Tsavo_user', 1634311751, '2021/10/15 | 06:29:11pm'),
(1904, '51.222.253.11', 'Tsavo_user', 1634315185, '2021/10/15 | 07:26:25pm'),
(1905, '92.118.160.5', 'Tsavo_user', 1634323850, '2021/10/15 | 09:50:50pm'),
(1906, '34.217.253.81', 'Tsavo_user', 1634330583, '2021/10/15 | 11:43:03pm'),
(1907, '208.80.194.35', 'Tsavo_user', 1634336679, '2021/10/16 | 01:24:39am'),
(1908, '66.249.65.42', 'Tsavo_user', 1634340187, '2021/10/16 | 02:23:07am'),
(1909, '77.74.177.119', 'Tsavo_user', 1634341420, '2021/10/16 | 02:43:40am'),
(1910, '137.226.113.44', 'Tsavo_user', 1634342981, '2021/10/16 | 03:09:41am'),
(1911, '137.226.113.44', 'Tsavo_user', 1634342983, '2021/10/16 | 03:09:43am'),
(1912, '92.118.160.57', 'Tsavo_user', 1634347655, '2021/10/16 | 04:27:35am'),
(1913, '54.191.250.69', 'Tsavo_user', 1634358743, '2021/10/16 | 07:32:23am'),
(1914, '54.213.37.157', 'Tsavo_user', 1634358748, '2021/10/16 | 07:32:28am'),
(1915, '54.245.172.6', 'Tsavo_user', 1634358759, '2021/10/16 | 07:32:39am'),
(1916, '34.213.79.75', 'Tsavo_user', 1634358921, '2021/10/16 | 07:35:21am'),
(1917, '51.222.253.10', 'Tsavo_user', 1634364337, '2021/10/16 | 09:05:37am'),
(1918, '51.222.253.4', 'Tsavo_user', 1634368269, '2021/10/16 | 10:11:09am'),
(1919, '64.246.187.42', 'Tsavo_user', 1634378766, '2021/10/16 | 01:06:06pm'),
(1920, '54.203.242.6', 'Tsavo_user', 1634394153, '2021/10/16 | 05:22:33pm'),
(1921, '51.222.253.1', 'Tsavo_user', 1634397912, '2021/10/16 | 06:25:12pm'),
(1922, '51.222.253.7', 'Tsavo_user', 1634401721, '2021/10/16 | 07:28:41pm'),
(1923, '92.118.160.5', 'Tsavo_user', 1634404047, '2021/10/16 | 08:07:27pm'),
(1924, '45.129.18.188', 'Tsavo_user', 1634414481, '2021/10/16 | 11:01:21pm'),
(1925, '92.118.160.61', 'Tsavo_user', 1634419121, '2021/10/17 | 12:18:41am'),
(1926, '66.249.73.138', 'Tsavo_user', 1634427413, '2021/10/17 | 02:36:53am'),
(1927, '51.222.253.16', 'Tsavo_user', 1634433202, '2021/10/17 | 04:13:22am'),
(1928, '51.222.253.15', 'Tsavo_user', 1634436629, '2021/10/17 | 05:10:29am'),
(1929, '197.248.48.127', 'Tsavo_user', 1634467943, '2021/10/17 | 01:52:23pm'),
(1930, '51.222.253.16', 'Tsavo_user', 1634469741, '2021/10/17 | 02:22:21pm'),
(1931, '51.222.253.19', 'Tsavo_user', 1634473321, '2021/10/17 | 03:22:01pm'),
(1932, '208.80.194.27', 'Tsavo_user', 1634478661, '2021/10/17 | 04:51:01pm'),
(1933, '3.137.185.52', 'Tsavo_user', 1634488962, '2021/10/17 | 07:42:42pm'),
(1934, '35.238.245.3', 'Tsavo_user', 1634497095, '2021/10/17 | 09:58:15pm'),
(1935, '35.238.245.3', 'Tsavo_user', 1634497095, '2021/10/17 | 09:58:15pm'),
(1936, '51.222.253.10', 'Tsavo_user', 1634504174, '2021/10/17 | 11:56:14pm'),
(1937, '51.222.253.11', 'Tsavo_user', 1634508055, '2021/10/18 | 01:00:55am'),
(1938, '197.155.95.6', 'Tsavo_user', 1634512537, '2021/10/18 | 02:15:37am'),
(1939, '197.155.95.6', 'Tsavo_user', 1634513102, '2021/10/18 | 02:25:02am'),
(1940, '102.140.206.138', 'Tsavo_user', 1634513239, '2021/10/18 | 02:27:19am'),
(1941, '52.89.103.56', 'Tsavo_user', 1634517003, '2021/10/18 | 03:30:03am'),
(1942, '52.89.103.56', 'Tsavo_user', 1634517427, '2021/10/18 | 03:37:07am'),
(1943, '54.190.57.210', 'Tsavo_user', 1634535238, '2021/10/18 | 08:33:58am'),
(1944, '34.211.36.119', 'Tsavo_user', 1634535247, '2021/10/18 | 08:34:07am'),
(1945, '34.220.224.179', 'Tsavo_user', 1634535573, '2021/10/18 | 08:39:33am'),
(1946, '35.238.245.3', 'Tsavo_user', 1634536068, '2021/10/18 | 08:47:48am'),
(1947, '35.238.245.3', 'Tsavo_user', 1634536068, '2021/10/18 | 08:47:48am'),
(1948, '34.146.173.151', 'Tsavo_user', 1634557529, '2021/10/18 | 02:45:29pm'),
(1949, '51.222.253.4', 'Tsavo_user', 1634564850, '2021/10/18 | 04:47:30pm'),
(1950, '51.222.253.16', 'Tsavo_user', 1634573741, '2021/10/18 | 07:15:41pm'),
(1951, '34.217.253.81', 'Tsavo_user', 1634579015, '2021/10/18 | 08:43:35pm'),
(1952, '34.217.253.81', 'Tsavo_user', 1634579015, '2021/10/18 | 08:43:35pm'),
(1953, '208.80.194.27', 'Tsavo_user', 1634582134, '2021/10/18 | 09:35:34pm'),
(1954, '92.118.160.41', 'Tsavo_user', 1634582562, '2021/10/18 | 09:42:42pm'),
(1955, '34.86.35.19', 'Tsavo_user', 1634585520, '2021/10/18 | 10:32:00pm'),
(1956, '93.159.230.89', 'Tsavo_user', 1634590230, '2021/10/18 | 11:50:30pm'),
(1957, '66.249.65.40', 'Tsavo_user', 1634599886, '2021/10/19 | 02:31:26am'),
(1958, '34.77.162.1', 'Tsavo_user', 1634601944, '2021/10/19 | 03:05:44am'),
(1959, '34.122.152.166', 'Tsavo_user', 1634602203, '2021/10/19 | 03:10:03am'),
(1960, '172.241.161.63', 'Tsavo_user', 1634602271, '2021/10/19 | 03:11:11am'),
(1961, '51.222.253.17', 'Tsavo_user', 1634609122, '2021/10/19 | 05:05:22am'),
(1962, '35.86.115.182', 'Tsavo_user', 1634609499, '2021/10/19 | 05:11:39am'),
(1963, '42.83.147.34', 'Tsavo_user', 1634611279, '2021/10/19 | 05:41:19am'),
(1964, '52.11.94.27', 'Tsavo_user', 1634617777, '2021/10/19 | 07:29:37am'),
(1965, '52.25.130.167', 'Tsavo_user', 1634617913, '2021/10/19 | 07:31:53am'),
(1966, '54.185.1.253', 'Tsavo_user', 1634618270, '2021/10/19 | 07:37:50am'),
(1967, '52.35.39.226', 'Tsavo_user', 1634618685, '2021/10/19 | 07:44:45am'),
(1968, '34.214.36.77', 'Tsavo_user', 1634618707, '2021/10/19 | 07:45:07am'),
(1969, '204.12.198.242', 'Tsavo_user', 1634634229, '2021/10/19 | 12:03:49pm'),
(1970, '31.13.127.38', 'Tsavo_user', 1634635659, '2021/10/19 | 12:27:39pm'),
(1971, '51.222.253.17', 'Tsavo_user', 1634637998, '2021/10/19 | 01:06:38pm'),
(1972, '117.30.101.54', 'Tsavo_user', 1634643465, '2021/10/19 | 02:37:45pm'),
(1973, '117.30.101.54', 'Tsavo_user', 1634643494, '2021/10/19 | 02:38:14pm'),
(1974, '117.30.101.54', 'Tsavo_user', 1634643494, '2021/10/19 | 02:38:14pm'),
(1975, '117.30.101.54', 'Tsavo_user', 1634643499, '2021/10/19 | 02:38:19pm'),
(1976, '52.89.103.56', 'Tsavo_user', 1634655891, '2021/10/19 | 06:04:51pm'),
(1977, '198.244.140.11', 'Tsavo_user', 1634660315, '2021/10/19 | 07:18:35pm'),
(1978, '51.222.253.10', 'Tsavo_user', 1634663105, '2021/10/19 | 08:05:05pm'),
(1979, '77.88.9.134', 'Tsavo_user', 1634664637, '2021/10/19 | 08:30:37pm'),
(1980, '77.88.9.133', 'Tsavo_user', 1634664714, '2021/10/19 | 08:31:54pm'),
(1981, '77.88.9.134', 'Tsavo_user', 1634664971, '2021/10/19 | 08:36:11pm'),
(1982, '77.88.9.133', 'Tsavo_user', 1634664986, '2021/10/19 | 08:36:26pm'),
(1983, '77.88.9.138', 'Tsavo_user', 1634665301, '2021/10/19 | 08:41:41pm'),
(1984, '77.88.9.134', 'Tsavo_user', 1634665319, '2021/10/19 | 08:41:59pm'),
(1985, '5.188.62.214', 'Tsavo_user', 1634672932, '2021/10/19 | 10:48:52pm'),
(1986, '5.188.62.214', 'Tsavo_user', 1634672951, '2021/10/19 | 10:49:11pm'),
(1987, '208.80.194.27', 'Tsavo_user', 1634677960, '2021/10/20 | 12:12:40am'),
(1988, '51.222.253.19', 'Tsavo_user', 1634684383, '2021/10/20 | 01:59:43am'),
(1989, '34.221.212.179', 'Tsavo_user', 1634703251, '2021/10/20 | 07:14:11am'),
(1990, '54.202.159.233', 'Tsavo_user', 1634703282, '2021/10/20 | 07:14:42am'),
(1991, '54.190.123.208', 'Tsavo_user', 1634703343, '2021/10/20 | 07:15:43am'),
(1992, '34.208.16.214', 'Tsavo_user', 1634704128, '2021/10/20 | 07:28:48am'),
(1993, '34.86.35.2', 'Tsavo_user', 1634708441, '2021/10/20 | 08:40:41am'),
(1994, '208.80.194.35', 'Tsavo_user', 1634711372, '2021/10/20 | 09:29:32am');
INSERT INTO `new_user_cookie` (`id`, `ip`, `name`, `value`, `date`) VALUES
(1995, '34.223.53.41', 'Tsavo_user', 1634719963, '2021/10/20 | 11:52:43am'),
(1996, '66.249.65.40', 'Tsavo_user', 1634726469, '2021/10/20 | 01:41:09pm'),
(1997, '51.222.253.1', 'Tsavo_user', 1634727680, '2021/10/20 | 02:01:20pm'),
(1998, '51.222.253.4', 'Tsavo_user', 1634738978, '2021/10/20 | 05:09:38pm'),
(1999, '117.30.101.54', 'Tsavo_user', 1634745715, '2021/10/20 | 07:01:55pm'),
(2000, '117.30.101.54', 'Tsavo_user', 1634745770, '2021/10/20 | 07:02:50pm'),
(2001, '117.30.101.54', 'Tsavo_user', 1634745773, '2021/10/20 | 07:02:53pm'),
(2002, '117.30.101.54', 'Tsavo_user', 1634745781, '2021/10/20 | 07:03:01pm'),
(2003, '192.71.126.175', 'Tsavo_user', 1634746397, '2021/10/20 | 07:13:17pm'),
(2004, '197.155.95.4', 'Tsavo_user', 1634754378, '2021/10/20 | 09:26:18pm'),
(2005, '172.255.48.132', 'Tsavo_user', 1634754443, '2021/10/20 | 09:27:23pm'),
(2006, '172.255.48.132', 'Tsavo_user', 1634754447, '2021/10/20 | 09:27:27pm'),
(2007, '172.255.48.138', 'Tsavo_user', 1634755308, '2021/10/20 | 09:41:48pm'),
(2008, '172.255.48.138', 'Tsavo_user', 1634755311, '2021/10/20 | 09:41:51pm'),
(2009, '54.215.85.207', 'Tsavo_user', 1634755412, '2021/10/20 | 09:43:32pm'),
(2010, '102.140.206.138', 'Tsavo_user', 1634755766, '2021/10/20 | 09:49:26pm'),
(2011, '100.21.218.158', 'Tsavo_user', 1634764711, '2021/10/21 | 12:18:31am'),
(2012, '66.249.65.42', 'Tsavo_user', 1634774292, '2021/10/21 | 02:58:12am'),
(2013, '51.222.253.19', 'Tsavo_user', 1634777724, '2021/10/21 | 03:55:24am'),
(2014, '51.222.253.9', 'Tsavo_user', 1634788311, '2021/10/21 | 06:51:51am'),
(2015, '35.166.98.222', 'Tsavo_user', 1634791712, '2021/10/21 | 07:48:32am'),
(2016, '35.85.144.157', 'Tsavo_user', 1634791712, '2021/10/21 | 07:48:32am'),
(2017, '18.236.254.120', 'Tsavo_user', 1634791746, '2021/10/21 | 07:49:06am'),
(2018, '197.248.231.190', 'Tsavo_user', 1634797344, '2021/10/21 | 09:22:24am'),
(2019, '54.203.242.6', 'Tsavo_user', 1634830779, '2021/10/21 | 06:39:39pm'),
(2020, '34.217.253.81', 'Tsavo_user', 1634831418, '2021/10/21 | 06:50:18pm'),
(2021, '54.203.242.6', 'Tsavo_user', 1634831418, '2021/10/21 | 06:50:18pm'),
(2022, '54.203.242.6', 'Tsavo_user', 1634831419, '2021/10/21 | 06:50:19pm'),
(2023, '51.222.253.1', 'Tsavo_user', 1634832930, '2021/10/21 | 07:15:30pm'),
(2024, '51.222.253.1', 'Tsavo_user', 1634837279, '2021/10/21 | 08:27:59pm'),
(2025, '18.116.51.108', 'Tsavo_user', 1634857364, '2021/10/22 | 02:02:44am'),
(2026, '18.197.193.89', 'Tsavo_user', 1634857414, '2021/10/22 | 02:03:34am'),
(2027, '35.167.38.234', 'Tsavo_user', 1634876569, '2021/10/22 | 07:22:49am'),
(2028, '34.219.44.57', 'Tsavo_user', 1634876596, '2021/10/22 | 07:23:16am'),
(2029, '51.222.253.17', 'Tsavo_user', 1634882613, '2021/10/22 | 09:03:33am'),
(2030, '51.222.253.10', 'Tsavo_user', 1634886298, '2021/10/22 | 10:04:58am'),
(2031, '35.230.36.34', 'Tsavo_user', 1634896327, '2021/10/22 | 12:52:07pm'),
(2032, '66.249.65.40', 'Tsavo_user', 1634897258, '2021/10/22 | 01:07:38pm'),
(2033, '51.222.253.2', 'Tsavo_user', 1634927321, '2021/10/22 | 09:28:41pm'),
(2034, '54.203.242.6', 'Tsavo_user', 1634929283, '2021/10/22 | 10:01:23pm'),
(2035, '66.249.65.42', 'Tsavo_user', 1634938209, '2021/10/23 | 12:30:09am'),
(2036, '51.222.253.15', 'Tsavo_user', 1634941905, '2021/10/23 | 01:31:45am'),
(2037, '18.236.151.160', 'Tsavo_user', 1634962464, '2021/10/23 | 07:14:24am'),
(2038, '34.220.108.133', 'Tsavo_user', 1634962517, '2021/10/23 | 07:15:17am'),
(2039, '51.222.253.4', 'Tsavo_user', 1634975067, '2021/10/23 | 10:44:27am'),
(2040, '66.249.65.44', 'Tsavo_user', 1634981181, '2021/10/23 | 12:26:21pm'),
(2041, '66.249.65.44', 'Tsavo_user', 1634982080, '2021/10/23 | 12:41:20pm'),
(2042, '51.222.253.8', 'Tsavo_user', 1634999366, '2021/10/23 | 05:29:26pm'),
(2043, '104.232.209.77', 'Tsavo_user', 1635003420, '2021/10/23 | 06:37:00pm'),
(2044, '66.249.65.42', 'Tsavo_user', 1635022829, '2021/10/24 | 12:00:29am'),
(2045, '216.244.66.242', 'Tsavo_user', 1635027149, '2021/10/24 | 01:12:29am'),
(2046, '92.118.160.45', 'Tsavo_user', 1635030240, '2021/10/24 | 02:04:00am'),
(2047, '51.222.253.1', 'Tsavo_user', 1635030468, '2021/10/24 | 02:07:48am'),
(2048, '51.222.253.18', 'Tsavo_user', 1635048126, '2021/10/24 | 07:02:06am'),
(2049, '54.69.9.219', 'Tsavo_user', 1635049215, '2021/10/24 | 07:20:15am'),
(2050, '54.187.188.185', 'Tsavo_user', 1635049223, '2021/10/24 | 07:20:23am'),
(2051, '54.69.9.219', 'Tsavo_user', 1635049228, '2021/10/24 | 07:20:28am'),
(2052, '34.212.45.205', 'Tsavo_user', 1635049247, '2021/10/24 | 07:20:47am'),
(2053, '34.212.45.205', 'Tsavo_user', 1635049259, '2021/10/24 | 07:20:59am'),
(2054, '54.202.249.243', 'Tsavo_user', 1635049611, '2021/10/24 | 07:26:51am'),
(2055, '66.249.65.44', 'Tsavo_user', 1635063971, '2021/10/24 | 11:26:11am'),
(2056, '31.13.103.6', 'Tsavo_user', 1635074072, '2021/10/24 | 02:14:32pm'),
(2057, '31.13.103.15', 'Tsavo_user', 1635074072, '2021/10/24 | 02:14:32pm'),
(2058, '51.222.253.17', 'Tsavo_user', 1635074315, '2021/10/24 | 02:18:35pm'),
(2059, '130.255.166.79', 'Tsavo_user', 1635074481, '2021/10/24 | 02:21:21pm'),
(2060, '105.161.20.118', 'Tsavo_user', 1635076245, '2021/10/24 | 02:50:45pm'),
(2061, '102.140.206.138', 'Tsavo_user', 1635086514, '2021/10/24 | 05:41:54pm'),
(2062, '51.222.253.14', 'Tsavo_user', 1635093447, '2021/10/24 | 07:37:27pm'),
(2063, '102.140.206.138', 'Tsavo_user', 1635104463, '2021/10/24 | 10:41:03pm'),
(2064, '34.217.253.81', 'Tsavo_user', 1635117078, '2021/10/25 | 02:11:18am'),
(2065, '51.222.253.12', 'Tsavo_user', 1635123679, '2021/10/25 | 04:01:19am'),
(2066, '34.215.247.25', 'Tsavo_user', 1635139198, '2021/10/25 | 08:19:58am'),
(2067, '34.217.118.126', 'Tsavo_user', 1635139201, '2021/10/25 | 08:20:01am'),
(2068, '34.217.118.126', 'Tsavo_user', 1635139219, '2021/10/25 | 08:20:19am'),
(2069, '34.211.53.241', 'Tsavo_user', 1635139235, '2021/10/25 | 08:20:35am'),
(2070, '34.220.100.149', 'Tsavo_user', 1635139236, '2021/10/25 | 08:20:36am'),
(2071, '34.220.100.149', 'Tsavo_user', 1635139236, '2021/10/25 | 08:20:36am'),
(2072, '51.222.253.14', 'Tsavo_user', 1635140469, '2021/10/25 | 08:41:09am'),
(2073, '23.88.58.65', 'Tsavo_user', 1635146977, '2021/10/25 | 10:29:37am'),
(2074, '105.160.105.77', 'Tsavo_user', 1635153056, '2021/10/25 | 12:10:56pm'),
(2075, '35.184.35.194', 'Tsavo_user', 1635153089, '2021/10/25 | 12:11:29pm'),
(2076, '173.255.194.181', 'Tsavo_user', 1635153091, '2021/10/25 | 12:11:31pm'),
(2077, '51.15.251.143', 'Tsavo_user', 1635161388, '2021/10/25 | 02:29:48pm'),
(2078, '216.19.195.15', 'Tsavo_user', 1635176451, '2021/10/25 | 06:40:51pm'),
(2079, '51.222.253.5', 'Tsavo_user', 1635177748, '2021/10/25 | 07:02:28pm'),
(2080, '51.222.253.19', 'Tsavo_user', 1635194838, '2021/10/25 | 11:47:18pm'),
(2081, '34.217.253.81', 'Tsavo_user', 1635199827, '2021/10/26 | 01:10:27am'),
(2082, '34.217.253.81', 'Tsavo_user', 1635204025, '2021/10/26 | 02:20:25am'),
(2083, '34.217.253.81', 'Tsavo_user', 1635204025, '2021/10/26 | 02:20:25am'),
(2084, '35.85.53.144', 'Tsavo_user', 1635210911, '2021/10/26 | 04:15:11am'),
(2085, '208.80.194.28', 'Tsavo_user', 1635214032, '2021/10/26 | 05:07:12am'),
(2086, '54.202.98.207', 'Tsavo_user', 1635221581, '2021/10/26 | 07:13:01am'),
(2087, '54.149.234.182', 'Tsavo_user', 1635221590, '2021/10/26 | 07:13:10am'),
(2088, '34.214.202.154', 'Tsavo_user', 1635221625, '2021/10/26 | 07:13:45am'),
(2089, '51.222.253.4', 'Tsavo_user', 1635226335, '2021/10/26 | 08:32:15am'),
(2090, '66.249.65.42', 'Tsavo_user', 1635236549, '2021/10/26 | 11:22:29am'),
(2091, '34.86.35.21', 'Tsavo_user', 1635239023, '2021/10/26 | 12:03:43pm');

-- --------------------------------------------------------

--
-- Table structure for table `parcel_tracks`
--

CREATE TABLE `parcel_tracks` (
  `id` int(30) NOT NULL,
  `parcel_id` int(30) NOT NULL,
  `status` int(2) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parcel_tracks`
--

INSERT INTO `parcel_tracks` (`id`, `parcel_id`, `status`, `date_created`) VALUES
(1, 2, 1, '2020-11-27 09:53:27'),
(2, 3, 1, '2020-11-27 09:55:17'),
(3, 1, 1, '2020-11-27 10:28:01'),
(4, 1, 2, '2020-11-27 10:28:10'),
(5, 1, 3, '2020-11-27 10:28:16'),
(6, 1, 4, '2020-11-27 11:05:03'),
(7, 1, 5, '2020-11-27 11:05:17'),
(8, 1, 7, '2020-11-27 11:05:26'),
(9, 3, 2, '2020-11-27 11:05:41'),
(10, 6, 1, '2020-11-27 14:06:57'),
(11, 7, 3, '2021-04-27 03:32:05'),
(12, 26, 1, '2021-04-29 01:42:37'),
(13, 33, 1, '2021-04-29 23:53:01'),
(14, 34, 3, '2021-05-01 19:28:41'),
(15, 44, 1, '2021-05-19 02:52:10'),
(16, 45, 1, '2021-05-19 03:35:47'),
(17, 44, 2, '2021-05-19 03:57:09'),
(18, 44, 3, '2021-05-19 03:57:47'),
(19, 44, 4, '2021-05-19 03:59:36'),
(20, 44, 6, '2021-05-19 04:04:22'),
(21, 44, 7, '2021-05-19 04:04:40'),
(22, 141, 1, '2021-09-09 00:53:09'),
(23, 141, 4, '2021-09-09 00:53:47'),
(24, 142, 1, '2021-10-17 23:36:07'),
(25, 142, 2, '2021-10-17 23:42:13');

-- --------------------------------------------------------

--
-- Table structure for table `privacy_policy`
--

CREATE TABLE `privacy_policy` (
  `id` int(10) UNSIGNED NOT NULL,
  `main_head` varchar(40) DEFAULT NULL,
  `main_head_content` text DEFAULT NULL,
  `sub_head1` varchar(40) DEFAULT NULL,
  `head_1` text DEFAULT NULL,
  `sub_head2` varchar(40) DEFAULT NULL,
  `head_2` text DEFAULT NULL,
  `sub_head3` varchar(40) DEFAULT NULL,
  `head_3` text DEFAULT NULL,
  `sub_head4` varchar(40) DEFAULT NULL,
  `head_4` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(100) NOT NULL,
  `name` varchar(60) NOT NULL,
  `description` text NOT NULL,
  `slug` varchar(40) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT 0.00,
  `photo` text NOT NULL,
  `date_view` date DEFAULT NULL,
  `counter` int(40) DEFAULT 1,
  `was` bigint(100) NOT NULL,
  `brand` varchar(40) NOT NULL,
  `weight` int(40) NOT NULL,
  `width` int(40) NOT NULL,
  `category` int(11) NOT NULL,
  `price_1` varchar(40) DEFAULT NULL,
  `price_2` varchar(40) DEFAULT NULL,
  `code` varchar(100) NOT NULL,
  `prod_qty` int(50) DEFAULT NULL,
  `barcode` int(100) DEFAULT NULL,
  `size` varchar(40) NOT NULL,
  `male_shoes` varchar(40) DEFAULT NULL,
  `male_shoes_id` varchar(40) DEFAULT NULL,
  `male_pants` varchar(40) DEFAULT NULL,
  `male_pants_id` varchar(40) DEFAULT NULL,
  `male_shirts` varchar(40) DEFAULT NULL,
  `male_shirts_id` varchar(40) DEFAULT NULL,
  `female_shoes` varchar(40) DEFAULT NULL,
  `female_shoes_id` varchar(40) DEFAULT NULL,
  `female_dresses` varchar(40) DEFAULT NULL,
  `female_dresses_id` varchar(40) DEFAULT NULL,
  `female_skirts` varchar(40) DEFAULT NULL,
  `female_skirts_id` varchar(40) DEFAULT NULL,
  `female_pants` varchar(40) DEFAULT NULL,
  `female_pants_id` varchar(40) DEFAULT NULL,
  `cat_code` varchar(40) DEFAULT NULL,
  `supplier` varchar(40) DEFAULT NULL,
  `supp_id` varchar(40) NOT NULL,
  `length` int(11) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `supp_cont` varchar(40) NOT NULL,
  `shipping_add` varchar(40) DEFAULT NULL,
  `p_off` decimal(10,0) DEFAULT NULL,
  `more_desc` text DEFAULT NULL,
  `material` varchar(40) DEFAULT NULL,
  `seller_sku` varchar(40) DEFAULT NULL,
  `field45` varchar(40) DEFAULT NULL,
  `supp_email` varchar(40) NOT NULL,
  `ship_orig` varchar(40) DEFAULT 'Kenya',
  `field1` varchar(40) DEFAULT NULL,
  `promote_code` varchar(40) DEFAULT NULL,
  `promo_date` date DEFAULT NULL,
  `field4` varchar(40) DEFAULT NULL,
  `field5` varchar(40) DEFAULT NULL,
  `field6` varchar(40) DEFAULT NULL,
  `categ` varchar(40) DEFAULT NULL,
  `note` varchar(10) NOT NULL,
  `product_status` int(2) NOT NULL DEFAULT 1,
  `field2` varchar(40) DEFAULT NULL,
  `promote_class` varchar(40) DEFAULT NULL,
  `field7` varchar(200) NOT NULL,
  `field8` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `description`, `slug`, `price`, `photo`, `date_view`, `counter`, `was`, `brand`, `weight`, `width`, `category`, `price_1`, `price_2`, `code`, `prod_qty`, `barcode`, `size`, `male_shoes`, `male_shoes_id`, `male_pants`, `male_pants_id`, `male_shirts`, `male_shirts_id`, `female_shoes`, `female_shoes_id`, `female_dresses`, `female_dresses_id`, `female_skirts`, `female_skirts_id`, `female_pants`, `female_pants_id`, `cat_code`, `supplier`, `supp_id`, `length`, `height`, `supp_cont`, `shipping_add`, `p_off`, `more_desc`, `material`, `seller_sku`, `field45`, `supp_email`, `ship_orig`, `field1`, `promote_code`, `promo_date`, `field4`, `field5`, `field6`, `categ`, `note`, `product_status`, `field2`, `promote_class`, `field7`, `field8`) VALUES
(44, 259, 'Binatone BLS-360, Blender & Smoothie Maker, 1.25L - Grey', '<header class=\"-pvs -bb\" xss=\"removed\"><h2 class=\"-fs20 -m -phm -pvxs\" xss=\"removed\">Product details</h2></header><div class=\"markup -mhm -pvl -oxa -sc\" wfd-id=\"288\" xss=\"removed\">Binatone\'s BLS-360 Blender is an attractive mix of power and elegance. A powerful motor of 300 W, well-built body and a safety lock feature adds up to the perfect buy. Whether your crushing ice for a smoothie or making juice, it always works perfectly. It is operated via a touch panel with LED lights. It includes a 1.25 Litres unbreakable blending jar with a lid, 0.5 Litres of a separate jar for smoothies, and also includes mixing stick and scraper. Make healthy drinks to fit your active lifestyle. Stainless steel blades on both jar and cup. Consisting of added motor overheat protection. it has a 2-speed pulse mode to help you adjust as per your needs. Order the&nbsp;<b>Binatone BLS-360 Blender &amp; Smoothie&nbsp;</b>Maker now on&nbsp;<b>Jumia Kenya</b>&nbsp;to be delivered right at your doorstep.</div>', '1618526932', 3020.00, '3be3772042d02db16.jpg', '2021-10-22', 1, 4990, 'BRUHM', 1, 27, 259, '2999', '11', '', 0, 2147483647, '--', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tsavo Management', 'TS1621988947', 27, 40, '0112456667', '10', 39, '<ul wfd-id=\"269\" xss=\"removed\"><li wfd-id=\"274\" xss=\"removed\">1 x Binatone BLS-360, Blender &amp; Smoothie Maker, 1.25L - Black</li><li wfd-id=\"273\" xss=\"removed\">1 x 1.25 L Unbreakable Jug</li><li wfd-id=\"272\" xss=\"removed\">1 x 0.5 L Drinking cup</li><li wfd-id=\"271\" xss=\"removed\">1 x Stir/ Scrap Stick</li><li wfd-id=\"270\" xss=\"removed\">1 x User Manual</li></ul>', 'PVC', 'BI162EL12TV8FNAFAMZ', NULL, 'Waroruaalex@tsavo.store', 'Kenya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 1, NULL, NULL, '', ''),
(45, 147, 'TCL 32 FULL HD ANDROID TV 32S65A FRAMELESS PLUS WALL BRACKET', '<p>ntroduce the advance TCL 32S6500S 79.97 cm (32 Inches) Smart FHD Ready LED TV to your home that features a thin and impressive design. Its display resolution of provides crisp and clear visuals. It comes with a free 14-42 wall mount Enjoy your favorite movies or television shows with your family on this 32 inch wide-screen TV with built-in Stereo Surrounding Soundbox speakers. Furthermore, Sports Mode Ready feature optimizes images and sound which allows audiences to enjoy the immersive feeling of live-action sports event.&nbsp;Order&nbsp;for this TCL LED&nbsp;<strong>Smart Android TV online on Jumia&nbsp;Kenya</strong>&nbsp;and have it delivered&nbsp;right at your doorstep.<br />\r\n<br />\r\n<img alt=\"image\" src=\"https://ke.jumia.is/cms/external/pet/TC187EL1JYO22NAFAMZ/c2e92c186b9ff0258ea0402945822c81.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&quot;&gt;</p>\r\n', '1618562798', 18000.00, '1618562798_1619874205.webp', '2021-10-24', 4, 25000, 'TCL', 4, 43, 147, '18000', '0', '', 5, 2147483647, '32 INCH', '24 Inch', '32 Inch', '40 Inch', '52 Inch', '64 Inch', '', '', '', NULL, NULL, '', '', '20000', '22000', '147', 'Tsavo Africa', 'TS1621988947', 112, 56, '0716912002', '40', 72, '<ul>\r\n	<li>32 INCH smart TV</li>\r\n	<li>Antennae</li>\r\n	<li>Menu guide</li>\r\n	<li>Remote Control</li>\r\n	<li>Wall bracket</li>\r\n</ul>\r\n', 'PVC', 'LK55', NULL, 'sales@tsavo.store', 'Kenya', '30500', NULL, NULL, '38000', '46000', '', '', '', 1, '', NULL, '', ''),
(46, 165, 'Ramtons RF/173, 2 Door Direct Cool Fridg', '<span xss=\"removed\">?Ramtons is a re-known manufacturer of electronic home appliances??.?? Their products are affordable??,?? innovative and durable.?? For every household and kitchen need??,?? you can trust Ramtons to have an appliance that will make every task simple and fun. What\'s more? Ramtons appliances always turn your house into a real home. Order for this&nbsp;</span><strong xss=\"removed\">Ramtons RF/173 - 128Lts&nbsp;</strong><span xss=\"removed\">2 Door Direct Cool&nbsp;Glass shelf&nbsp;</span><strong xss=\"removed\">Fridge</strong><span xss=\"removed\">&nbsp;online at Jumia Kenya and have it delivered straight at your doorstep.&nbsp;&nbsp;</span><br><div><p xss=\"removed\"><br><br></p><br xss=\"removed\"><br xss=\"removed\"><p xss=\"removed\">Product Information</p><ul wfd-id=\"284\" xss=\"removed\"><li wfd-id=\"292\" xss=\"removed\">Zanussi compressor</li><li wfd-id=\"291\" xss=\"removed\">128 Litres</li><li wfd-id=\"290\" xss=\"removed\">Double Door</li><li wfd-id=\"289\" xss=\"removed\">CFC Free</li><li wfd-id=\"288\" xss=\"removed\">Direct Cool</li><li wfd-id=\"287\" xss=\"removed\">Hard top</li><li wfd-id=\"286\" xss=\"removed\">Glass shelf</li></ul></div>', '1618563239', 36395.00, '878c6003f6fb64031.jpg', '2021-10-19', 2, 38000, 'RAMTOMS', 35, 35, 165, '36000', '45', '', 0, 2147483647, '50 LITRES', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tsavo Management', 'TS1621988947', 35, 145, '0112456667', '350', 4, '<br>', NULL, NULL, NULL, 'spinnetech@gmail.com', 'Kenya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 1, NULL, NULL, '', ''),
(47, 234, 'Delta MILITARY DESERT COMBAT BOOTS - BEIGE/BROWN.', '<span xss=\"removed\">Delta combat military boots makes you feel the elegance of military boots experience. They are comfortable trendy and of good quality. Get them on&nbsp;</span><b segoe=\"\" helvetica=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" xss=\"removed\">Jumia&nbsp;</b><span xss=\"removed\">and have them</span><b segoe=\"\" helvetica=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" xss=\"removed\">&nbsp;delivered to your doorstep</b><br segoe=\"\" helvetica=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" xss=\"removed\"><span xss=\"removed\">Good quality These are leather boots,high quality material.They will serve you for a long time Comfortable These boots are super comfortable.They are well designed for any season Trendy This is what we call trendy.Wear these boots and you will stand out.</span><br segoe=\"\" helvetica=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" xss=\"removed\"><br segoe=\"\" helvetica=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" xss=\"removed\"><span xss=\"removed\">Item Specifics?</span><br segoe=\"\" helvetica=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" xss=\"removed\"><span xss=\"removed\">Gender: Men</span><br segoe=\"\" helvetica=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" xss=\"removed\"><span xss=\"removed\">Type: Boots</span><br segoe=\"\" helvetica=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" xss=\"removed\"><span xss=\"removed\">Upper Material: Nylon, Artificial Leather</span><br segoe=\"\" helvetica=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" xss=\"removed\"><span xss=\"removed\">Lining Material: Mesh</span><br segoe=\"\" helvetica=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" xss=\"removed\"><span xss=\"removed\">Sole Material: Rubber</span><br segoe=\"\" helvetica=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" xss=\"removed\"><span xss=\"removed\">Toe: Round Toe</span><br segoe=\"\" helvetica=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" xss=\"removed\"><span xss=\"removed\">Fastening: Lace-Up</span><br segoe=\"\" helvetica=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" xss=\"removed\"><span xss=\"removed\">Width: Medium (B, M)</span><br segoe=\"\" helvetica=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" xss=\"removed\"><span xss=\"removed\">Pattern: Solid</span><br segoe=\"\" helvetica=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" xss=\"removed\"><span xss=\"removed\">Color: Sand</span><br segoe=\"\" helvetica=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" xss=\"removed\"><span xss=\"removed\">Package Included?</span><br segoe=\"\" helvetica=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" xss=\"removed\"><span xss=\"removed\">1 pair of shoes (Without Box) Sand</span><br segoe=\"\" helvetica=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" xss=\"removed\"><br segoe=\"\" helvetica=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" xss=\"removed\"><span xss=\"removed\">PLEASE NOTE</span><b segoe=\"\" helvetica=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" xss=\"removed\">&nbsp;</b><span xss=\"removed\">The available Size are: SIZE 40, SIZE 41, SIZE 42, SIZE 43 SIZE 44, SIZE 45.</span><br segoe=\"\" helvetica=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" xss=\"removed\"><span xss=\"removed\">Best quality boot with the lower price of discounts</span><div><span xss=\"removed\"><br></span></div><div><ul segoe=\"\" helvetica=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" wfd-id=\"255\" xss=\"removed\"><li wfd-id=\"263\" xss=\"removed\">High quality</li><li wfd-id=\"262\" xss=\"removed\">Pure leather</li><li wfd-id=\"261\" xss=\"removed\">Easier to walk with.</li><li wfd-id=\"260\" xss=\"removed\">Comfortable</li><li wfd-id=\"259\" xss=\"removed\">Trendy</li><li wfd-id=\"258\" xss=\"removed\">Color-Brown</li><li wfd-id=\"257\" xss=\"removed\">Laced</li><li wfd-id=\"256\" xss=\"removed\">Light weight thus great wearing experience.</li></ul></div>', '1618610976', 3544.00, 'e43d69a161ba0c6a7.jpg', '2021-10-19', 1, 7000, 'Delta', 1, 32, 234, '3523', '11', '', 0, 2147483647, '32', '2', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tsavo Management', 'tsavoshop', 30, 15, '+254716912002', '10', 49, '<span xss=\"removed\">A pair of Original Delta Military combat boots</span><br>', 'Leather', 'DE716FS0L185DNAFAMZ', NULL, 'thetsavo254@gmail.com', 'Kenya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 1, NULL, NULL, '', ''),
(48, 234, 'CAT Leather Shoe', 'erhgeh', '1618613382', 3221.00, '1618613382_1618841612.jpg', '2021-10-24', 1, 4400, 'CAT', 1, 27, 234, '3200', '11', '', 0, 2147483647, '31', '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tsavo Management', 'tsavoshop', 21, 20, '0112456667', '10', 27, '<br>', NULL, NULL, NULL, 'contacts@tsavo.store', 'Kenya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 1, NULL, NULL, '', ''),
(49, 234, 'Fashion Business Men\'s English Leather Shoes', '<ul wfd-id=\"244\" xss=\"removed\"><li wfd-id=\"254\" xss=\"removed\">Product category: leather shoes</li><li wfd-id=\"253\" xss=\"removed\">Vamp material: artificial Pu</li><li wfd-id=\"252\" xss=\"removed\">Sole material: PVC</li><li wfd-id=\"251\" xss=\"removed\">Gender: Male</li><li wfd-id=\"250\" xss=\"removed\">Toe shape: round head</li><li wfd-id=\"249\" xss=\"removed\">Upper height: low upper</li><li wfd-id=\"248\" xss=\"removed\">Function: breathable</li><li wfd-id=\"247\" xss=\"removed\">Gross weight: 0.7kg</li><li wfd-id=\"246\" xss=\"removed\">Color: Brown</li><li wfd-id=\"245\" xss=\"removed\">Style: English version</li></ul><img src=\"https://ke.jumia.is/cms/external/pet/FA113FS02IPMLNAFAMZ/b46aad6ef1a55efebe5839e539bc875d.jpg\" alt=\"image\" xss=\"removed\"><br xss=\"removed\"><br xss=\"removed\"><span xss=\"removed\">Note:1. All the products are photographed in kind with guaranteed quality.2. Due to differences in display and lighting effects, the actual color of the item may differ slightly from the color displayed on the image. Thank you!3. Due to the difference in manual measurement, please allow the measurement deviation to be 1-3 cm. Asian sizes are smaller than EU/US/UK sizes, please check the detailed size information before purchasing. All goods in this product are subject to the actual goods received.4. There may be some smell when the product is used, and it will disappear naturally after a period of time.</span>', '1618649582', 2521.00, 'd9597380934f58b4b.jpg', '2021-10-22', 1, 3000, 'Fashion', 1, 10, 234, '2500', '11', '', 0, 2147483647, 'Size 33', '3', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tsavo Management', 'tsavoshop', 33, 8, '0793060164', '10', 16, '<span xss=\"removed\">1 * shoes</span><br>', 'Leather', 'FA113FS02IPMLNAFAMZ', NULL, 'stalbansschoolthika01@gmail.com', 'Kenya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 1, NULL, NULL, '', ''),
(50, 222, 'Celebrat A18 Wireless Bluetooth Headphones', '<span xss=\"removed\">tylish and functional wireless&nbsp;</span><b segoe=\"\" helvetica=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" xss=\"removed\">headphones</b><span xss=\"removed\">&nbsp;with good powerful sound.&nbsp;They are powered by a built-in battery, which is charged using a USB-micro USB cable (cable included).</span><br segoe=\"\" helvetica=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" xss=\"removed\"><span xss=\"removed\">You can listen to music via Bluetooth (a signal at a distance of up to 10 m), from a microSD memory card,</span><b segoe=\"\" helvetica=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" xss=\"removed\">&nbsp;FM radio</b><span xss=\"removed\">, you can connect headphones to the music player via an audio cable (cable included).&nbsp;Headphones also have a built-in microphone and can be used for talking on the phoneTo switch tracks, increase / decrease volume, answer a call, the control buttons are located on the headphones.&nbsp;There is also a color indicator.</span><br segoe=\"\" helvetica=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" xss=\"removed\"><span xss=\"removed\">Headphones are securely fixed to the head with a soft vertical bow connecting their cups, so they can be used while jogging or other physical activity.&nbsp;The size of the brackets is adjustable</span><div><article class=\"col8 -pvs\" xss=\"removed\"><div class=\"card-b -fh\" wfd-id=\"233\" xss=\"removed\"><div class=\"markup -pam\" wfd-id=\"234\" xss=\"removed\"><ul segoe=\"\" helvetica=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" wfd-id=\"235\" xss=\"removed\"><li wfd-id=\"242\" xss=\"removed\">Bluetooth Headphones Celebrat A18 &nbsp;&nbsp; &nbsp;</li>&nbsp;stylish and functional wireless headphones with good powerful sound.<li wfd-id=\"241\" xss=\"removed\">They are powered by a built-in battery, which is charged using a USB-micro USB cable (cable included).</li><li wfd-id=\"240\" xss=\"removed\">You can listen to music via Bluetooth (a signal at a distance of up to 10 m), from a microSD memory card, FM radio, you can connect headphones to the music player via an audio cable (cable included).&nbsp;</li><li wfd-id=\"239\" xss=\"removed\">Headphones also have a built-in microphone and can be used for talking on the phoneTo switch tracks, increase / decrease volume, answer a call, the control buttons are located on the headphones.&nbsp;</li><li wfd-id=\"238\" xss=\"removed\">There is also a color indicator.</li><li wfd-id=\"237\" xss=\"removed\">Headphones are securely fixed to the head with a soft vertical bow connecting their cups, so they can be used while jogging or other physical activity.&nbsp;</li><li wfd-id=\"236\" xss=\"removed\">The size of the brackets is adjustable</li></ul></div></div></article><article class=\"col8 -pvs\" xss=\"removed\"><div class=\"card-b -fh\" wfd-id=\"231\" xss=\"removed\"><h2 class=\"hdr -upp -fs14 -m -pam\" xss=\"removed\">WHAT’S IN THE BOX</h2><div class=\"markup -pam\" wfd-id=\"232\" xss=\"removed\">x1 headphonex1 usb charging cable</div></div></article><article class=\"col8 -pvs\" xss=\"removed\"><div class=\"card-b -fh\" wfd-id=\"217\" xss=\"removed\"><h2 class=\"hdr -upp -fs14 -m -pam\" xss=\"removed\">SPECIFICATIONS</h2><ul class=\"-pvs -mvxs -phm -lsn\" wfd-id=\"218\" xss=\"removed\"><li class=\"-pvxs\" wfd-id=\"229\" xss=\"removed\"><span class=\"-b\" wfd-id=\"230\" xss=\"removed\">SKU</span>: CE132EA06N17LNAFAMZ</li><li class=\"-pvxs\" wfd-id=\"227\" xss=\"removed\"><span class=\"-b\" wfd-id=\"228\" xss=\"removed\">Care Label</span>: Handle with care</li><li class=\"-pvxs\" wfd-id=\"225\" xss=\"removed\"><span class=\"-b\" wfd-id=\"226\" xss=\"removed\">Main Material</span>: PVC</li><li class=\"-pvxs\" wfd-id=\"223\" xss=\"removed\"><span class=\"-b\" wfd-id=\"224\" xss=\"removed\">Model</span>: A18</li><li class=\"-pvxs\" wfd-id=\"221\" xss=\"removed\"><span class=\"-b\" wfd-id=\"222\" xss=\"removed\">Size (L x W x H cm)</span>: 6cm x 4cm</li><li class=\"-pvxs\" wfd-id=\"219\" xss=\"removed\"><span class=\"-b\" wfd-id=\"220\" xss=\"removed\">Weight (kg)</span>: 0.006</li></ul></div></article><div><span xss=\"removed\"><br></span></div></div>', '1618841507', 3021.00, '1618841507_1618841586.jpg', '2021-10-25', 1, 4500, 'Celebrat', 1, 23, 222, '3000', '11', '', 0, 2147483647, '--', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tsavo Management', 'TS1621988947', 23, 7, '0793060164', '10', 33, '<br>', NULL, NULL, NULL, 'stalbansschoolthika01@gmail.com', 'Kenya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 1, NULL, NULL, '', ''),
(51, 147, 'LG 65UK6100PVA - 75', '<p><img alt=\"The image of colorful microcrystal on the TV screen\" src=\"https://ke.jumia.is/cms/external/pet/LG835EA13HHNHNAFAMZ/d5141a0e489d732a50f99e834007787d.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>The Pure Colors</strong><br />\r\nPure RGB colors are the key to realistic picture quality. NanoCell Technology applies nanoparticles that create purify colors by filtering out dull colors and enhancing the purity of the RGB spectrum.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"The RGB spectrum graph that showing filter out dull colors and images comparing Color Purity between Conventional and NanoCell Tech\" src=\"https://ke.jumia.is/cms/external/pet/LG835EA1GQ37PNAFAMZ/6050495a66a856686a76edaa5e955e57.jpg\" /></p>\r\n\r\n<p><br />\r\n<br />\r\n<strong>Real 4K Made by Pure Colors</strong><br />\r\nNanoCell TV delivers a Real 4K that meets the international standard CM value. Discover the more brilliant and clear visual experience with Real 4K resolution completed by NanoCell Technology.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"TV screen showing the wide view of nature\" src=\"https://ke.jumia.is/cms/external/pet/LG835EA1GQ37PNAFAMZ/3d2a0aaae1b6056c1bf228e78913ad02.jpg\" /><br />\r\n<br />\r\n<strong>Quad-Core Processor 4K</strong><br />\r\nUpgrading Image and Sound More Real. NanoCell TV with the Quad core processor 4K eliminates noise and creates more dynamic color and contrast. Low-resolution images are up-scaled and reproduced at close to 4K quality images.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"Roma Province\" src=\"https://ke.jumia.is/cms/external/pet/LG835EA1GQ37PNAFAMZ/6ce4c0a4ecfcdce567c5e78729638a98.jpg\" /></p>\r\n\r\n<p><br />\r\n<strong>Pure Colors Turn Your Home into the Movie Theater</strong><br />\r\nNanoCell TV makes all scenes real based on the vivid Pure Colors creates and the intense contrast that Nano Black creates. In addition, it delivers optimized visual and sound for a spectacular, more lifelike experience. Now enjoy the true home cinema with NanoCell TV, which supports unlimited entertainment.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"TV screen showing the scene of SF movie with a woman shooting a bow\" src=\"https://ke.jumia.is/cms/external/pet/LG835EA13HHNHNAFAMZ/9f75fafde7660f00aa4e7abcd8986ea2.jpg\" /></p>\r\n\r\n<p><br />\r\n<br />\r\nFILMMAKER MODE&trade;<br />\r\nSee Content the Way it was Made. The processor automatically adjusts the picture, turning off motion smoothing for the full motion picture effect. Watch films with the creative intent and cinematic experience preserved. Enjoy all your content at the cinematic standard and feel the full artistic intent of every film.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"A man sitting on a sofa in the living room with the colorful movie on the TV screen\" src=\"https://ke.jumia.is/cms/external/pet/LG835EA13HHNHNAFAMZ/7fb395caffef4548024b9d08f893a927.jpg\" /><br />\r\n<br />\r\nHDR 10 Pro &amp; HLG Pro<br />\r\nUpgraded Major HDR Formats. NanoCell TVs provide optimal HDR picture quality by adjusting the supported major HDR formats HLG and HDR 10. It allows you to enjoy all of your content in lifelike high definition.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"Marvel Iron Man, title cards with the HLG pro and HDR 10 Pro logos\" src=\"https://ke.jumia.is/cms/external/pet/LG835EA13HHNHNAFAMZ/257beff878e5c8e2e5adeda2ed5a2d3c.jpg\" /><br />\r\n<br />\r\nLocal Dimming<br />\r\nCrisp Detailed Scene. With the Local Dimming, the color and contrast levels are enhancing compared to direct back Lit TVs. NanoCell 4K provides a great entertainment experience with greater contrast.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"Comparison of image quality between conventional and Full Array Dimming with flame image\" src=\"https://ke.jumia.is/cms/external/pet/LG835EA13HHNHNAFAMZ/8a535f057a3631f66a73ab04fed60ebb.jpg\" /><br />\r\n<br />\r\nUnlimited Entertainment<br />\r\nMultiplex in Your Home. Dive into the wide variety of content available on the Apple TV app and Netflix. From the latest movies, TV shows, and documentaries, to live sports and more, find them all here in one place. Just sit back and enjoy.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"The Apple TV app and Netflix\" src=\"https://ke.jumia.is/cms/external/pet/LG835EA13HHNHNAFAMZ/fa5a34a4527634893cf5ddb8cf1d6d56.jpg\" /><br />\r\n<br />\r\n<br />\r\nThe Apple TV app<br />\r\nThe home of Apple TV+ and much more. Original shows and movies from Apple TV+. Just the premium channels you want and thousands of movies to buy or rent. It&rsquo;s personalized and expertly curated, so you&rsquo;ll discover the best of what&rsquo;s on. And it&rsquo;s all in the Apple TV app.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"Thumbnails of Apple TV+ top 4 titles\" src=\"https://ke.jumia.is/cms/external/pet/LG835EA13HHNHNAFAMZ/976f7d5eb835f7c4324b325e1f786154.jpg\" /><br />\r\nPure Colors Bring Battlefield in Front of You<br />\r\nNanoCell technology completes a virtual world that surpasses reality with Pure Colors, created through NanoCell Technology. In addition, various game features such as Low Input lag, HDMI 2.1 and HGiG allow you to enjoy a virtual world of improved graphics on real-time.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"TV screen showing the scene of the battle game.\" src=\"https://ke.jumia.is/cms/external/pet/LG835EA13HHNHNAFAMZ/2416cde0a6b61329f0d8935dda339df4.jpg\" /></p>\r\n\r\n<p><br />\r\nLow Input Lag<br />\r\nReact and Aim More Faster. NanoCell TV allows users to instantly attack the opponent without delay. It synchronizes your senses with real-time scenes happening in a fast-paced game by low input lag.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"A scene of a battle game with the plane\" src=\"https://ke.jumia.is/cms/external/pet/LG835EA13HHNHNAFAMZ/3b71ae7ee7443a5be9caed1d5e58ce5f.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><br />\r\nHGiG profile for HDR Gaming<br />\r\nRealistic Cinema Cut-scene. Get wholly immersed into the game with views that are much more pleasing to the eyes. HGiG recognizes TV performance of picture quality and tunes HDR graphics to providing the ultimate HDR gaming experience.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"A scene of a game with monster shown on a conventional TV and other half on an LG NanoCell TV with HDR\" src=\"https://ke.jumia.is/cms/external/pet/LG835EA13HHNHNAFAMZ/7f9a47b26c73d7e9a02109bdf28ffde6.jpg\" /><br />\r\n<br />\r\nPure Colors Create a Real Stadium Feel<br />\r\nNo matter where you sit, the NanoCell TV delivers accurate colors from all angles without distortion. Watch your favorite teams play displayed with Pure Color on an ultra large screen with amazing picture quality.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"People watching sports game on TV in the living room with ultra large scree TV\" src=\"https://ke.jumia.is/cms/external/pet/LG835EA13HHNHNAFAMZ/f48e826b71ca4e2cb02d4a5eef1140f6.jpg\" /></p>\r\n\r\n<p><br />\r\n<br />\r\nSport Alert<br />\r\nDon&#39;t Miss the Shot. Sports alert notifies you before, during, and after games. You&rsquo;ll never have to worry about missing the big plays from your favorite teams, even when you&rsquo;re watching other content.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"TV screen showing a scene from a basketball game with a Sports Alert\" src=\"https://ke.jumia.is/cms/external/pet/LG835EA13HHNHNAFAMZ/abe21e7f21dffa086a575f17582ef02c.jpg\" /></p>\r\n\r\n<p><br />\r\n<br />\r\nBluetooth Surround Ready<br />\r\nBig Sound for the Big Game. NanoCell Tv up-mixed 2.0 ch sound to richer virtual 4.0 sound. It can create a surround sound effect by connecting two bluetooth speakers. Become more immersed in the game and get the feeling of a live atmosphere.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"A man and women watching sports game on TV in the living room with Bluetooth rear speakers\" src=\"https://ke.jumia.is/cms/external/pet/LG835EA13HHNHNAFAMZ/47a23d0deebcb5cb72049583f95d65da.jpg\" /><br />\r\nThinQ AI<br />\r\nYour Central Hub of Convenience. Intelligent LG ThinQ AI makes life all the more convenient. *Natural voice recognition allows you to command and control your Home IoT ecosystem.<br />\r\n&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"A men and women sitting on a sofa in the living room with the Home Dashboard on the TV screen\" src=\"https://ke.jumia.is/cms/external/pet/LG835EA13HHNHNAFAMZ/3eca73db034d7fed65609ec1d0274e46.jpg\" /></p>\r\n', '1618841897', 215999.00, '1618841897_1618841949.jpg', '2021-10-20', 1, 255100, 'LG', 15, 5, 147, '215999', '0', '', 2, 2147483647, '65 INCH', '75 Inch', '', '', '', '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, 'Tsavo Africa', 'TS1621988947', 130, 65, '0716912002', '150', 85, '<h2>KEY FEATURES</h2>\r\n\r\n<ul>\r\n	<li>LG 75&#39;&#39; NANOCELL 4K ULTRA HD SMART TV</li>\r\n	<li>REAL 4K NANOCELL TV</li>\r\n	<li>4K ULTRA HD TV</li>\r\n	<li>SMART TV</li>\r\n	<li>4K QUAD CORE PROCESSOR</li>\r\n	<li>4K UPSCALER</li>\r\n	<li>3840 x 2160 SCREEN RESOLUTION</li>\r\n	<li>WIDE COLOR GAMUT</li>\r\n	<li>WIDE VIEWING ANGLE</li>\r\n	<li>UNIVERSAL CONTROL</li>\r\n	<li>INTELLIGENT VOICE RECOGNITION</li>\r\n	<li>VOICE CONTROL</li>\r\n	<li>NETFLIX</li>\r\n	<li>YOUTUBE</li>\r\n	<li>IN-BUILT WI-FI AND ETHERNET</li>\r\n	<li>WEBOS SMART TV</li>\r\n	<li>APPLE TV</li>\r\n	<li>WEB BROWSER</li>\r\n	<li>CHROMECAST</li>\r\n	<li>BLUETOOTH</li>\r\n	<li>THINQ AI</li>\r\n	<li>CINEMATIC EXPERIENCE</li>\r\n	<li>UNLIMITED ENTERTAINMENT</li>\r\n	<li>CLEAR VOICE III</li>\r\n	<li>FILMMAKER MODE</li>\r\n	<li>GAME MODE</li>\r\n	<li>SPORTS MODE</li>\r\n</ul>\r\n\r\n<h2>WHAT&rsquo;S IN THE BOX</h2>\r\n\r\n<ul>\r\n	<li>LG 75&#39;&#39; NANOCELL 4K ULTRA HD SMART TV</li>\r\n	<li>USER MANUAL</li>\r\n	<li>REMOTE CONTROL&nbsp;</li>\r\n</ul>\r\n', 'PVC', '', NULL, 'sales@tsavo.store', 'Kenya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 1, NULL, NULL, '', ''),
(52, 243, 'Generic PS4 Wireless Controller Pad DualShock 4 Bluetooth Ga', '<ul wfd-id=\"267\" xss=\"removed\"><li wfd-id=\"274\" xss=\"removed\">About the product</li><li wfd-id=\"273\" xss=\"removed\">The feel, shape, and sensitivity of the dual analog sticks and trigger buttons have been improved to provide a greater sense of control, no matter what you play.</li><li wfd-id=\"272\" xss=\"removed\">The new multi-touch and clickable touch pad on the face of the DualShock 4 Wireless Controller opens up worlds of new gameplay possibilities for both newcomers and veteran gamers.</li><li wfd-id=\"271\" xss=\"removed\">The DualShock 4 Wireless Controller features a built-in speaker and stereo headset jack, putting several new audio options in the player\'s hands.</li><li wfd-id=\"270\" xss=\"removed\">New Ways to Play:</li><li wfd-id=\"269\" xss=\"removed\">Revolutionary features like the touch pad, integrated light bar, and built-in speaker offer exciting new ways to experience and interact with your games, and the 3.5mm audio jack offers a practical personal audio solution for gamers who want to listen to their games in private.</li><li wfd-id=\"268\" xss=\"removed\">On the front of the PS4 controller wireless controller, the newly designed \"OPTIONS button\" that combines the \"SELECT\" button and the \"START\" button on the PS3 handle, and the \"SHARE\" button that expands the gaming experience. \". Each user can use the “SHARE” button to easily connect to a live webcast platform such as Ustream and live broadcast the game to friends. In addition, the PS4 will also record the whole game while playing the game. Users don\'t have to worry about missing any exciting moments. With simple button operation, you can upload the game video to Facebook and share it with your friends. It\'s easy to share without having to use a PC to transform the video format. When the PS4 enters the standby state, in addition to using a dedicated charger to charge the PS4 controller, charge the charger of your smart phone and other devices.</li></ul>', '1618842226', 2520.00, '1618842226_1618842257.jpg', '2021-10-24', 1, 3000, 'PS4', 1, 20, 243, '2499', '11', '', 0, 2147483647, '--', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tsavo Management', 'tsavoshop', 20, 7, '+254793060164', '10', 16, '<br>', NULL, NULL, NULL, 'Waroruaalex@tsavo.store', 'Kenya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 1, NULL, NULL, '', ''),
(53, 252, 'DELL Refurbished 2110 10.1\" Intel Atom N470 160GB, 2GB WiFi', '<div class=\"card aim -mtm\" wfd-id=\"279\" xss=\"removed\"><div class=\"markup -mhm -pvl -oxa -sc\" wfd-id=\"280\" xss=\"removed\"><b><font face=\"courier new\">BEING SOLD BY WANJIRU WARORUA COMPANY</font></b></div><div class=\"markup -mhm -pvl -oxa -sc\" wfd-id=\"280\" xss=\"removed\"><b>Dell Latitude 2110 Mini Laptop 10.1\"&nbsp; Intel Atom N470 Processor - Storage 160GB HDD- 2GB RAM- WiFi- Camera- VGA - SD Slot - Mic/ Headphones- LAN - Windows&nbsp;&nbsp;</b>and colour<b>&nbsp;Black</b><b>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</b><p xss=\"removed\">Dell Latitude 2110 is a netbook aimed at businesses and schools, with a tough, rubberised finish that\'s designed to withstand a lot of punishment. It\'s fitted with an Intel Atom N470 processor and its 10.1in widescreen LCD has a resistive touch interface.<br></p><p xss=\"removed\">This affordable laptops comes&nbsp;&nbsp;already installed with windows and other essential softwares. A very reliable and portable laptop that will easily fit on any small or medium sized bag.</p><p xss=\"removed\">This is a reliable and affordable&nbsp;mini laptop with&nbsp;robust with&nbsp; Intel Atom processor N470 at an&nbsp;<b>Amazing exclusive offer</b>&nbsp;that you will like. You need not to worry as Dell brings you the best high quality&nbsp; mini laptop. These Laptop has been engineered to offer the best premium performance like other<b>&nbsp;<a data-cke-saved-href=\"https://www.jumia.co.ke/steliam-computers/\" href=\"https://www.jumia.co.ke/steliam-computers/\" xss=\"removed\">Steliam Computers</a></b>&nbsp;Dell Mini Laptops.</p><img src=\"https://ke.jumia.is/cms/external/pet/DE168EL04BI9UNAFAMZ/ac83e764013e81bee053289ae44b7e49.jpg\" alt=\"image\" xss=\"removed\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<p xss=\"removed\">Dell Latitude 2100 Netbook PC.&nbsp;Keep your productivity high with this budget friendly Dell Netbook. The Netbook is exceptionally rugged and very capa ble of standing up to the rigors of the full day in the classroom. Get online quickly with the built-in Gigabit Ethernet port. This laptop is rugged, dependable and infused with Wifi to get you online wirelessly at home, in class or your favorite local park.</p><h2 xss=\"removed\">Intel Atom</h2><p xss=\"removed\">The ultra-low-voltage Intel Atom is one of the most useful processors on the market. The low power consumption helps create the perfect internal workings of mobile friendly machine. The Intel Atom Is capable of browsing the web, watching videos, taking notes, editing word documents and all of your day to day activities.</p><h2 xss=\"removed\">10 Inch Screen</h2><p xss=\"removed\">Providing the best portability available for laptops, the 10in screen is the perfect fit for kids, business professionals and the casual web surfer. With the smaller screen size comes a smaller footprint, which means the computer requires less memory when running.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p><h2 xss=\"removed\">2GB RAM</h2><p xss=\"removed\">The more RAM, the more information a computer can work with at the same time. This generally creates a heightened performance experience. If you consider yourself a casual or even average user, then 2GB of RAM is a adequate amount. Whether you are editing documents watching videos or performing research for school 2 GB will meet your needs.</p><h2 xss=\"removed\">Ports and Slots</h2><p xss=\"removed\">3 USB&nbsp;- The USB 3.0 is ten times faster than USB 2.0, saving you much needed time during long transfers. The USB allows for connectivity in various activities, such as, charging your phone, plugging in mice and keyboards as well as downloading photos and videos.&nbsp;&nbsp;</p><p xss=\"removed\">Network Port- The network port allows for quick connection to your local network or ethernet, by plugging directly into the laptop itself.</p><p xss=\"removed\">VGA-Having the ability to display your videos and computer screen to multiple different platforms is a must have in the 20th&nbsp;century. VGA outputs allow you to connect your laptop to a second monitor, increasing overall production.</p><p xss=\"removed\">Headphone and microphone&nbsp;- This laptop includes ports for connecting your headphones and listening to your favorite music as well as making voice calls with programs like skype.</p><h2 xss=\"removed\">Integrated Webcam</h2><p xss=\"removed\">With the integrated webcam there is no additional cost added to functions like online meetings, video chatting, creating home video or taking personal pictures. With no plugs and no cords, the webcam is extremely convenient, and a must have for online content creators.</p><p xss=\"removed\"><b>Rugged and Dependable</b></p><p xss=\"removed\">Rugged and dependable computers are a must have for anyone with important information or on a tight budget. Dependability is highly reliant, on the tests and procedures preformed prior to the computer being put on the market. Discount Computer Depot puts our computers through three of most inclusive tests one can perform on a computer, assuring premium quality and extended life. Computer repairs are not cheap,&nbsp;</p>Latitude performance &amp; packed into a sleek affordable netbook featuring Intel\'s Atom N260 processor, 2GB memory and 160 GB hard drive storage. Get down to business with this compact netbook that features an 10.1\" display and a compact yet sturdy design. ?&nbsp;Order for this Dell Latitude 2100 netbook online from Jumia Kenya and have it delivered to you right where you are?.?&nbsp;The Dell Latitude 2100 provides an affordable mobile computing solution that includes all the core benefits of the business-proven Latitude family.&nbsp;&nbsp;With Windows 7, fewer walls stand between you and your success. Improved desktop navigation features like Snap, Peek and Shake, make it easier to manage all of your open windows. Creating a home network has never been easier. You can even share files and printers with all the PCs with Windows 7 on the network.&nbsp;&nbsp;Technical Specifications<b>&nbsp;</b><b>Display</b>&nbsp;<ul wfd-id=\"301\" xss=\"removed\"><li wfd-id=\"304\" xss=\"removed\">10.1\" HD</li><li wfd-id=\"303\" xss=\"removed\">Resolution:&nbsp;1024 x 600</li><li wfd-id=\"302\" xss=\"removed\">Type:&nbsp;WSVGA&nbsp;LED Display</li></ul><p xss=\"removed\">&nbsp;</p><p xss=\"removed\"><b>System</b></p><ul wfd-id=\"298\" xss=\"removed\"><li wfd-id=\"300\" xss=\"removed\">Operating System:&nbsp; Windows 7</li><li wfd-id=\"299\" xss=\"removed\">Processor:&nbsp;Intel® Atom™ N270 (1.60 GHz, 512KB L2 Cache, 533MHz FSB)</li></ul><p xss=\"removed\">&nbsp;</p><p xss=\"removed\"><b>Memory/Storage</b></p><ul wfd-id=\"295\" xss=\"removed\"><li wfd-id=\"297\" xss=\"removed\">RAM: 1 x 2GB&nbsp;Memory</li><li wfd-id=\"296\" xss=\"removed\">Hard Drive:&nbsp;5400rpm HDD&nbsp;160GB</li></ul><p xss=\"removed\">&nbsp;</p><p xss=\"removed\"><b>Connectivity</b></p><ul wfd-id=\"292\" xss=\"removed\"><li wfd-id=\"294\" xss=\"removed\">WI-FI 802.11ac/a/g/n&nbsp;</li><li wfd-id=\"293\" xss=\"removed\">10/100/1000 Gigabit Ethernet</li></ul><p xss=\"removed\">&nbsp;</p><p xss=\"removed\"><b>Multimedia</b></p><ul wfd-id=\"288\" xss=\"removed\"><li wfd-id=\"291\" xss=\"removed\">2 speakers</li><li wfd-id=\"290\" xss=\"removed\">Digital microphone</li><li wfd-id=\"289\" xss=\"removed\">Optional VGA camera?</li></ul><p xss=\"removed\">&nbsp;</p><p xss=\"removed\"><b>Ports</b></p><ul wfd-id=\"283\" xss=\"removed\"><li wfd-id=\"287\" xss=\"removed\">Network connector (RJ-45)&nbsp;</li><li wfd-id=\"286\" xss=\"removed\">3 x USB 2.0</li><li wfd-id=\"285\" xss=\"removed\">Headphone/ Microphone combo jack&nbsp;</li><li wfd-id=\"284\" xss=\"removed\">3-in-1 card reader&nbsp;&nbsp;</li></ul><p xss=\"removed\">&nbsp;</p><p xss=\"removed\">Power</p><ul wfd-id=\"281\" xss=\"removed\"><li wfd-id=\"282\" xss=\"removed\">65W AC Adapter featuring cord wrapping</li></ul><br><img src=\"https://ke.jumia.is/cms/external/pet/DE168EL04BI9UNAFAMZ/143e158daea7de96af832aad6066d513.jpg\" alt=\"image\" xss=\"removed\">&nbsp;<img src=\"https://ke.jumia.is/cms/external/pet/DE168EL04BI9UNAFAMZ/48e2369c024d987d2394e1e4bb0cde00.jpg\" alt=\"image\" xss=\"removed\"></div></div><section class=\"card aim -mtm -fs16\" wfd-id=\"232\" xss=\"removed\"><div id=\"specifications\" class=\"hook\" wfd-id=\"278\" xss=\"removed\"></div><header class=\"-pvs -bb\" xss=\"removed\"><h2 class=\"-fs20 -m -phm -pvxs\" xss=\"removed\">Specifications</h2></header><div class=\"row -pas\" wfd-id=\"233\" xss=\"removed\"><article class=\"col8 -pvs\" xss=\"removed\"><div class=\"card-b -fh\" wfd-id=\"267\" xss=\"removed\"><h2 class=\"hdr -upp -fs14 -m -pam\" xss=\"removed\">KEY FEATURES</h2><div class=\"markup -pam\" wfd-id=\"268\" xss=\"removed\"><ul wfd-id=\"269\" xss=\"removed\"><li wfd-id=\"277\" xss=\"removed\">Processor: Intel® Atom™ N470</li><li wfd-id=\"276\" xss=\"removed\">Storage: 160GB HDD</li><li wfd-id=\"275\" xss=\"removed\">Memory: 2GB RAM</li><li wfd-id=\"274\" xss=\"removed\">10.1\" HD: 1024 x 600</li><li wfd-id=\"273\" xss=\"removed\">WSVGA LED Display</li><li wfd-id=\"272\" xss=\"removed\">Operating System:&nbsp; Windows</li><li wfd-id=\"271\" xss=\"removed\">WiFi</li><li wfd-id=\"270\" xss=\"removed\">Camera</li></ul></div></div></article><article class=\"col8 -pvs\" xss=\"removed\"><div class=\"card-b -fh\" wfd-id=\"262\" xss=\"removed\"><h2 class=\"hdr -upp -fs14 -m -pam\" xss=\"removed\">WHAT’S IN THE BOX</h2><div class=\"markup -pam\" wfd-id=\"263\" xss=\"removed\"><ul wfd-id=\"264\" xss=\"removed\"><li wfd-id=\"266\" xss=\"removed\">Reburf Dell Latitude 2110 Laptop</li><li wfd-id=\"265\" xss=\"removed\">1 x Power cord</li></ul></div></div></article><article class=\"col8 -pvs\" xss=\"removed\"><div class=\"card-b -fh\" wfd-id=\"234\" xss=\"removed\"><h2 class=\"hdr -upp -fs14 -m -pam\" xss=\"removed\">SPECIFICATIONS</h2><ul class=\"-pvs -mvxs -phm -lsn\" wfd-id=\"235\" xss=\"removed\"><li class=\"-pvxs\" wfd-id=\"260\" xss=\"removed\"><span class=\"-b\" wfd-id=\"261\" xss=\"removed\">SKU</span>: DE168EL04BI9UNAFAMZ</li><li class=\"-pvxs\" wfd-id=\"258\" xss=\"removed\"><span class=\"-b\" wfd-id=\"259\" xss=\"removed\">Processor&nbsp;</span>: Intel Atom</li><li class=\"-pvxs\" wfd-id=\"256\" xss=\"removed\"><span class=\"-b\" wfd-id=\"257\" xss=\"removed\">Display Size (in)</span>: 10.1</li><li class=\"-pvxs\" wfd-id=\"254\" xss=\"removed\"><span class=\"-b\" wfd-id=\"255\" xss=\"removed\">Megapixels</span>: 8.0</li><li class=\"-pvxs\" wfd-id=\"252\" xss=\"removed\"><span class=\"-b\" wfd-id=\"253\" xss=\"removed\">Operating System</span>: Windows 7</li><li class=\"-pvxs\" wfd-id=\"250\" xss=\"removed\"><span class=\"-b\" wfd-id=\"251\" xss=\"removed\">Screen Technology</span>: LCD</li><li class=\"-pvxs\" wfd-id=\"248\" xss=\"removed\"><span class=\"-b\" wfd-id=\"249\" xss=\"removed\">Memory Size (GB)</span>: 160</li><li class=\"-pvxs\" wfd-id=\"246\" xss=\"removed\"><span class=\"-b\" wfd-id=\"247\" xss=\"removed\">RAM&nbsp;</span>: 2</li><li class=\"-pvxs\" wfd-id=\"244\" xss=\"removed\"><span class=\"-b\" wfd-id=\"245\" xss=\"removed\">Main Material</span>: pvc</li><li class=\"-pvxs\" wfd-id=\"242\" xss=\"removed\"><span class=\"-b\" wfd-id=\"243\" xss=\"removed\">Model</span>: 2110</li><li class=\"-pvxs\" wfd-id=\"240\" xss=\"removed\"><span class=\"-b\" wfd-id=\"241\" xss=\"removed\">Production Country</span>: United Kingdom</li><li class=\"-pvxs\" wfd-id=\"238\" xss=\"removed\"><span class=\"-b\" wfd-id=\"239\" xss=\"removed\">Size (L x W x H cm)</span>: -</li><li class=\"-pvxs\" wfd-id=\"236\" xss=\"removed\"><span class=\"-b\" wfd-id=\"237\" xss=\"removed\">Weight (kg)</span>: 1.32</li></ul></div></article></div></section>', '1618843098', 15043.00, '1618843098_1618843137.jpg', '2021-10-26', 1, 17000, 'DELL', 3, 25, 252, '15000', '13', '', 0, 2147483647, '10.1\"', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tsavo Management', 'VEND1621335347', 35, 5, '+254716912002', '30', 12, '<br>', 'PVC', NULL, NULL, 'thetsavo254@gmail.com', 'Kenya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 1, NULL, NULL, '', ''),
(54, 258, 'Generic Purism Retro Wireless Sensor Control Light Round LED', '<div class=\"card aim -mtm\" wfd-id=\"241\" xss=\"removed\"><div class=\"markup -mhm -pvl -oxa -sc\" wfd-id=\"242\" xss=\"removed\">This table lamp comes equipped with light senor and motion sensor for automatic on/off operation, and can also be switched to ON/OFF permanently. It\'s ideal for lighting the way when checking on the baby, heading to the bathroom after dark, or making your way to the kitchen for a late-night snack.<br><br><strong>Feat</strong><strong>ures:</strong><br>1. Lightweight and portable, retro style design<br>2. Dual mode switch, which makes it possible to choose between Light-sensing and motion-sensing or always-on operation<br>3. Energy-efficient LEDs that deliver super-bright long-lasting illumination<br>4. With a daylight sensor, only activate in darkness saving the life of the battery<br>5. Automatically activate when you pass within 6 feet of the sensor, 20 seconds with each activation<br>6. Ideal for use anywhere in the home<br>7.Powered by 3 x AAA batteries(NOT Include)<br>8. Lights 20,000 x 20 Second Cycles on 1 Set of Batteries<br>9. Size: 7.5cm(Dia.) x 15(H)<br><br><strong>Package include</strong><br>1 x Motion Sensor LED Lamp<p xss=\"removed\"><br><img src=\"https://ke.jumia.is/cms/external/pet/GE840HL19YDFKNAFAMZ/96f3ef0280e2fa513e4050e08b9c543c.jpg\" alt=\"image\" xss=\"removed\"><br><img src=\"https://ke.jumia.is/cms/external/pet/GE840HL19YDFKNAFAMZ/ff7390b89d2ce309acfd2852fe48572d.jpg\" alt=\"image\" xss=\"removed\"><br><img src=\"https://ke.jumia.is/cms/external/pet/GE840HL19YDFKNAFAMZ/4869b9908d3bcb4f643f57355c755882.jpg\" alt=\"image\" xss=\"removed\"><br><img src=\"https://ke.jumia.is/cms/external/pet/GE840HL19YDFKNAFAMZ/998a95a1d310fdacc4c257c041e2b2e2.jpg\" alt=\"image\" xss=\"removed\"><br><img src=\"https://ke.jumia.is/cms/external/pet/GE840HL19YDFKNAFAMZ/1802c7c7fa2836e5d386b21cb384807b.jpg\" alt=\"image\" xss=\"removed\"><br><img src=\"https://ke.jumia.is/cms/external/pet/GE840HL19YDFKNAFAMZ/1329b48079dd04f6cb5cc460c7e2c1eb.jpg\" alt=\"image\" xss=\"removed\"></p><img src=\"https://ke.jumia.is/cms/external/pet/GE840HL19YDFKNAFAMZ/07596ff7e38945d0cadd8d9214a56402.jpg\" alt=\"image\" xss=\"removed\"><img src=\"https://ke.jumia.is/cms/external/pet/GE840HL19YDFKNAFAMZ/5140260d96499385165b99dfd2c0c1e3.jpg\" width=\"824\" height=\"400\" alt=\"image\" xss=\"removed\"><br></div></div><section class=\"card aim -mtm -fs16\" wfd-id=\"215\" xss=\"removed\"><div id=\"specifications\" class=\"hook\" wfd-id=\"240\" xss=\"removed\"></div><header class=\"-pvs -bb\" xss=\"removed\"><h2 class=\"-fs20 -m -phm -pvxs\" xss=\"removed\">Specifications</h2></header><div class=\"row -pas\" wfd-id=\"216\" xss=\"removed\"><article class=\"col8 -pvs\" xss=\"removed\"><div class=\"card-b -fh\" wfd-id=\"231\" xss=\"removed\"><h2 class=\"hdr -upp -fs14 -m -pam\" xss=\"removed\">KEY FEATURES</h2><div class=\"markup -pam\" wfd-id=\"232\" xss=\"removed\"><ul class=\"\" wfd-id=\"233\" xss=\"removed\"><li class=\"\" wfd-id=\"239\" xss=\"removed\">Color: White</li><li class=\"\" wfd-id=\"238\" xss=\"removed\">Size: 7.5cm(Dia.) x 15(H)</li><li class=\"\" wfd-id=\"237\" xss=\"removed\">Dual-mode switch</li><li class=\"\" wfd-id=\"236\" xss=\"removed\">Retro style design</li><li class=\"\" wfd-id=\"235\" xss=\"removed\">Energy-efficient LEDs</li><li class=\"\" wfd-id=\"234\" xss=\"removed\">Ideal for use anywhere in the home</li></ul></div></div></article><article class=\"col8 -pvs\" xss=\"removed\"><div class=\"card-b -fh\" wfd-id=\"229\" xss=\"removed\"><h2 class=\"hdr -upp -fs14 -m -pam\" xss=\"removed\"><br></h2><div class=\"markup -pam\" wfd-id=\"230\" xss=\"removed\">1 specification</div></div></article><article class=\"col8 -pvs\" xss=\"removed\"><div class=\"card-b -fh\" wfd-id=\"217\" xss=\"removed\"><ul class=\"-pvs -mvxs -phm -lsn\" wfd-id=\"218\" xss=\"removed\"><li class=\"-pvxs\" wfd-id=\"225\" xss=\"removed\"><span class=\"-b\" wfd-id=\"226\" xss=\"removed\">Care Label</span>: Handle with care</li><li class=\"-pvxs\" wfd-id=\"223\" xss=\"removed\"><span class=\"-b\" wfd-id=\"224\" xss=\"removed\">Main Material</span>: synthetic</li><li class=\"-pvxs\" wfd-id=\"221\" xss=\"removed\"><span class=\"-b\" wfd-id=\"222\" xss=\"removed\">Size (L x W x H cm)</span>: 5 x 10 x 8</li><li class=\"-pvxs\" wfd-id=\"219\" xss=\"removed\"><span class=\"-b\" wfd-id=\"220\" xss=\"removed\">Weight (kg)</span>: 1</li></ul></div></article></div></section>', '1619012654', 2452.00, '1619012654_1619025111.jpg', '2021-10-24', 1, 2600, 'Generic', 2, 23, 258, '2420', '12', '', 0, 2147483647, '--', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tsavo Management', 'TS1621988947', 23, 45, '0112456667', '20', 6, '&nbsp;x Motion Sensor LED Lamp<br>', NULL, 'GE840HL19YDFKNAFAMZ', NULL, '254tsavo@gmail.com', 'Kenya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 1, NULL, NULL, '', ''),
(55, 146, 'Tsavo Ticket', '<div xss=\"removed\">THE TSAVO SUPPORT TIP</div>\r\n\r\n<p>Thanks in advance for choosing Tsavo™</p><p>Help us crawl</p>\r\n\r\n<p><code>Developed By:</code></p>\r\n\r\n<p><code>WARORUA ALEX&nbsp;</code></p>\r\n\r\n<p>&nbsp;</p>', '00000', 110.00, '00000.png', '2021-10-21', 1, 150, 'Tsavo System', 0, 1, 146, '100', '10', '', 88, 2147483647, 'Tsavo VIP', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tsavo Management', 'TS1621988947', 1, 1, '+254716912002', '0', 27, '<br>', NULL, NULL, NULL, '254tsavo@gmail.com', 'Kenya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 1, NULL, 'Level 1', '', '');
INSERT INTO `products` (`id`, `category_id`, `name`, `description`, `slug`, `price`, `photo`, `date_view`, `counter`, `was`, `brand`, `weight`, `width`, `category`, `price_1`, `price_2`, `code`, `prod_qty`, `barcode`, `size`, `male_shoes`, `male_shoes_id`, `male_pants`, `male_pants_id`, `male_shirts`, `male_shirts_id`, `female_shoes`, `female_shoes_id`, `female_dresses`, `female_dresses_id`, `female_skirts`, `female_skirts_id`, `female_pants`, `female_pants_id`, `cat_code`, `supplier`, `supp_id`, `length`, `height`, `supp_cont`, `shipping_add`, `p_off`, `more_desc`, `material`, `seller_sku`, `field45`, `supp_email`, `ship_orig`, `field1`, `promote_code`, `promo_date`, `field4`, `field5`, `field6`, `categ`, `note`, `product_status`, `field2`, `promote_class`, `field7`, `field8`) VALUES
(56, 201, 'Generic Cute Swim Turtle Wound-up Chain Clockwork Baby Kid B', '<span xss=\"removed\">This bathing turtle is a developmental toy for baby, help children exercise their hand muscles and improve your baby\'s grip ability, enhance their ability to recognize color and shape. Let your child full of happiness when he have a bath!</span><br xss=\"removed\"><br xss=\"removed\"><br xss=\"removed\"><br xss=\"removed\"><br xss=\"removed\"><br xss=\"removed\"><strong xss=\"removed\">Features:</strong><br xss=\"removed\"><br xss=\"removed\"><span xss=\"removed\">Easy to draw your kids attention, fun bath toy to entice your child into taking baths.</span><br xss=\"removed\"><br xss=\"removed\"><span xss=\"removed\">Clockwise rotate the spring at belly of the turtle, they can be swimming in the water.</span><br xss=\"removed\"><br xss=\"removed\"><span xss=\"removed\">Cute design, ideal for little hands and tiny fingers.</span><br xss=\"removed\"><br xss=\"removed\"><span xss=\"removed\">Play it together with parent, make your family full with happiness.</span><br xss=\"removed\"><br xss=\"removed\"><span xss=\"removed\">The cute turtle won\'t hurt your children without any sharp edge.</span><br xss=\"removed\"><br xss=\"removed\"><span xss=\"removed\">Powered by a clockwork motor, no batteries required.</span><br xss=\"removed\"><br xss=\"removed\"><br xss=\"removed\"><br xss=\"removed\"><br xss=\"removed\"><br xss=\"removed\"><strong xss=\"removed\">Specifications:</strong><br xss=\"removed\"><br xss=\"removed\"><span xss=\"removed\">Material: plastic</span><br xss=\"removed\"><br xss=\"removed\"><span xss=\"removed\">Color: randomly</span><br xss=\"removed\"><br xss=\"removed\"><span xss=\"removed\">Gender: unisex</span><br xss=\"removed\"><br xss=\"removed\"><span xss=\"removed\">Age range: 3- 8 years old</span><br xss=\"removed\"><br xss=\"removed\"><span xss=\"removed\">Item size: 11.5 * 10.5 * 5cm / 4.53 * 4.13 * 1.97in</span><br xss=\"removed\"><br xss=\"removed\"><span xss=\"removed\">Item weight: 32g / 1.13oz</span><br xss=\"removed\"><br xss=\"removed\"><span xss=\"removed\">Package size: 14 * 13 * 7cm / 5.51 * 5.12 * 2.76in</span><br xss=\"removed\"><br xss=\"removed\"><span xss=\"removed\">Package weight: 38g / 1.34oz</span><br xss=\"removed\"><br xss=\"removed\"><br xss=\"removed\"><br xss=\"removed\"><br xss=\"removed\"><br xss=\"removed\"><strong xss=\"removed\">Notes:</strong><br xss=\"removed\"><br xss=\"removed\"><span xss=\"removed\">1. Avoid breaking the turtle by winding it too tightly, then put it into water, it will swim forward.</span><br xss=\"removed\"><br xss=\"removed\"><span xss=\"removed\">2. Recommended age: +3 YEARS</span><br xss=\"removed\"><br xss=\"removed\"><span xss=\"removed\">3. If you would like to buy these for little kids or baby, please make sure that to be used under adults\' supervision.</span><br>', 'P1619999085', 4598.00, '116dcd4027c2fc706.jpg', '2021-10-20', 3, 5000, 'MEROLER', 8, 55, 201, '4500', '18', '', 0, 2147483647, '--', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'warorua_alex', 'TS1621988947', 75, 45, '+254793060164', '80', 8, '<span xss=\"removed\">1 x Bathing Turtle</span><br>', 'PVC', 'LK55', NULL, 'Waroruaalex640@gmail.com', 'Kenya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 1, NULL, NULL, '', ''),
(57, 229, 'Generic Fitness Tracker Bluetooth Smart Watch - Purple', '<p>This&nbsp;<strong>smartwatch</strong>&nbsp;gives your&nbsp;conveniency by using advanced technology. It can be paired to your phone via Bluetooth and by downloading the&nbsp;<strong>HryFine App.</strong>&nbsp;It comes with a user manual inside in case you need more information.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Please note:<br>\r\n1. That this model charges battery directly for&nbsp;<strong>USB</strong>. The strap can be replaced. If you need other other color straps can be purchased separately</p>\r\n\r\n<p>2. The packaging of the products displayed in this product is for reference only. The actual packaging is subject to the stock.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Smart Bracelet 116 plus/D13</strong></p>\r\n\r\n<p>System: Android 4.4 or more, iOS 8.4 or more<br>\r\nSize: 258*34.7*11.3<br>\r\nNet Weight: 36.5g<br>\r\nFunctions:&nbsp;Time display, step counting, calories, distance, raising your hand on the screen, exercise mode, heart rate, blood pressure, blood oxygen, message reminder, sedentary reminder, alarm clock reminder, search bracelet, photo, dial switch</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"image\" src=\"https://ke.jumia.is/cms/external/pet/GE840EA0IDK9DNAFAMZ/8b0206a0d0243024b3b1789b4291800d.jpg\" xss=\"removed\"></p>\r\n\r\n<p>You do not need to worry about how to charge, simply remove one side of the band and insert into a charger head and charge your watch to 100%. The watch keeps its charge for the longest time possible with its 150 mAh battery.<br>\r\nOnce synced with your phone, you can be able to view sms notifications, Facebook, WhatsApp notifications, you can also be able to monitor your heart rate, blood pressure and also monitor your sleep.</p>\r\n\r\n<p><img alt=\"Amazon Hot Selling smart watch 116 plus wrist band bracelet blood pressure sport wristband fitness a6s smartwatch\" src=\"https://ke.jumia.is/cms/external/pet/GE840EA0IDK9DNAFAMZ/55ba8d17b071ec19f519934eb7d55d22.jpg\" xss=\"removed\"></p>\r\n\r\n<p><img alt=\"Amazon Hot Selling smart watch 116 plus wrist band bracelet blood pressure sport wristband fitness a6s smartwatch\" src=\"https://ke.jumia.is/cms/external/pet/GE840EA0IDK9DNAFAMZ/d466dbe986d5627d791f950bff293564.jpg\" xss=\"removed\"></p>\r\n\r\n<p><img alt=\"Amazon Hot Selling smart watch 116 plus wrist band bracelet blood pressure sport wristband fitness a6s smartwatch\" src=\"https://ke.jumia.is/cms/external/pet/GE840EA0IDK9DNAFAMZ/16d926084518b5ab3962581c77753836.jpg\" xss=\"removed\"></p>\r\n\r\n<p><img alt=\"Amazon Hot Selling smart watch 116 plus wrist band bracelet blood pressure sport wristband fitness a6s smartwatch\" src=\"https://ke.jumia.is/cms/external/pet/GE840EA0IDK9DNAFAMZ/f2293462d4264b6c598dc09141cbc35e.jpg\" xss=\"removed\"></p>\r\n\r\n<p><img alt=\"Amazon Hot Selling smart watch 116 plus wrist band bracelet blood pressure sport wristband fitness a6s smartwatch\" src=\"https://ke.jumia.is/cms/external/pet/GE840EA0IDK9DNAFAMZ/45c94e681314c0e68d97b47e2de9ad29.jpg\" xss=\"removed\"></p>\r\n\r\n<p><img alt=\"Amazon Hot Selling smart watch 116 plus wrist band bracelet blood pressure sport wristband fitness a6s smartwatch\" src=\"https://ke.jumia.is/cms/external/pet/GE840EA0IDK9DNAFAMZ/137e8c53aab0bd9be4d1c48757fd9546.jpg\" xss=\"removed\"></p>\r\n\r\n<p><img alt=\"Amazon Hot Selling smart watch 116 plus wrist band bracelet blood pressure sport wristband fitness a6s smartwatch\" src=\"https://ke.jumia.is/cms/external/pet/GE840EA0IDK9DNAFAMZ/04dde24c461549d40345f5cb2c32c8f1.jpg\" xss=\"removed\"></p>\r\n\r\n<p><img alt=\"Amazon Hot Selling smart watch 116 plus wrist band bracelet blood pressure sport wristband fitness a6s smartwatch\" src=\"https://ke.jumia.is/cms/external/pet/GE840EA0IDK9DNAFAMZ/3cd67d080a1758b33945289ddb808aee.jpg\" xss=\"removed\"></p>\r\n\r\n<p><img alt=\"Amazon Hot Selling smart watch 116 plus wrist band bracelet blood pressure sport wristband fitness a6s smartwatch\" src=\"https://ke.jumia.is/cms/external/pet/GE840EA0IDK9DNAFAMZ/583c1181078d46a483c4bf2821b377d3.jpg\" xss=\"removed\"></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Notes: Due to the difference between different monitors, the pictures may not reflect the actual color of the item. Compare the detail sizes with yours, please allow 1-3cm error, due to manual measurement. Please leaving a message before you give the bad feedback, if the products have some problems.<br>\r\nWhatsapp: +254779361293&nbsp;in case you get any challenges with setting up the watch.</p>\r\n\r\n<h2>Specifications</h2>', 'generic-fitness-tracker-bluetooth-smart-', 1310.00, '0ba8baeb86dd75448.jpg', '2021-10-24', 1, 1900, 'Generic', 0, 8, 229, '1300', '10', '', 0, 2147483647, '2.25 INCH', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'warorua_alex', 'TS1621988947', 7, 6, '+254716912002', '0', 31, '<ul wfd-id=\"235\" xss=\"removed\"><li wfd-id=\"237\" xss=\"removed\">1x smart watch</li><li wfd-id=\"236\" xss=\"removed\">1x manual</li></ul>', 'PVC', 'LK551', NULL, 'thetsavo254@gmail.com', 'Kenya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 1, NULL, NULL, '', ''),
(59, 146, 'Tsavo VIP Ticket', 'Support Tsavo by purchasing a VIP ticket and join our Tsavo VIP Community. Your support will be highly valued.&nbsp;', 'P1620393830', 210.00, '78fad9da0cc6641cc.png', '2021-10-19', 2, 500, 'TSAVO INC', 0, 35, 146, '200', '10', '', 72, 2147483647, 'Tsavo VIP', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'warorua_alex', 'TS1621988947', 35, 20, '0112456667', '0', 58, '<ul wfd-id=\"154\"><li wfd-id=\"155\">VIP Ticket</li></ul>', '--', 'TSAVO1', NULL, '254tsavo@gmail.com', 'Kenya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 1, NULL, 'Level 1', '', ''),
(60, 183, 'Ingco Rotary Hammer - 1800W, 3 Drills And 2 Chisels', '<span xss=\"removed\">INGCO tools are devoted to making professional quality tools affordable. INGCO believes that top quality refers to not only function, usability and appearance, but also efficiency, performance and maintainability. The rotary Hummer/Drill features Input Power of 1800W, No load speed of 850 bpm, Impact rate of 4200 bpm and comes packed with 3 drills and 2 chisels</span><br segoe=\"\" helvetica=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" xss=\"removed\"><span xss=\"removed\">Thank You for viewing our products if you don\'t see what you need here please visit our online shop (</span><b segoe=\"\" helvetica=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" xss=\"removed\">toolstation</b><span xss=\"removed\">) jumia where we have a lot more products at amazing prices.Place your&nbsp;</span><b segoe=\"\" helvetica=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" xss=\"removed\">order online</b><span xss=\"removed\">&nbsp;</span><b segoe=\"\" helvetica=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" xss=\"removed\">Jumia&nbsp;</b><span xss=\"removed\">Kenya and have it delivered straight to your doorstep.</span><br segoe=\"\" helvetica=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" xss=\"removed\"><b segoe=\"\" helvetica=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" xss=\"removed\">Technical Specifications</b><ul segoe=\"\" helvetica=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" wfd-id=\"251\" xss=\"removed\"><li wfd-id=\"263\" xss=\"removed\">Voltage:220-240V~50/60Hz</li><li wfd-id=\"262\" xss=\"removed\">Input power:1050W</li><li wfd-id=\"261\" xss=\"removed\">No-load speed:900rpm</li><li wfd-id=\"260\" xss=\"removed\">Impact rate:4000bpm</li><li wfd-id=\"259\" xss=\"removed\">Impact energy:5J</li><li wfd-id=\"258\" xss=\"removed\">Max.drilling capacity:</li><li wfd-id=\"257\" xss=\"removed\">&nbsp;Concrete:28mm</li><li wfd-id=\"256\" xss=\"removed\">&nbsp;Steel:13mm</li><li wfd-id=\"255\" xss=\"removed\">&nbsp;Wood:40mm</li><li wfd-id=\"254\" xss=\"removed\">SDS plus chuck system</li><li wfd-id=\"253\" xss=\"removed\">With 3 drills and 2 chisels</li><li wfd-id=\"252\" xss=\"removed\">Packed by BMC</li></ul>', 'P1620669555', 4443.00, 'e2ec8d5a413c0fa46.jpg', '2021-10-21', 2, 4600, 'INGCO', 3, 30, 183, '4400', '13', '', 0, 2147483647, '--', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'warorua_alex', 'tsavoshop', 35, 18, '0793060164', '30', 3, '<ul wfd-id=\"230\" xss=\"removed\"><li wfd-id=\"232\" xss=\"removed\">Ingco Rotary Hammer RH10508</li><li wfd-id=\"231\" xss=\"removed\">3 drills and 2 chisels</li></ul>', 'Steel', 'DR556', NULL, 'stalbansschoolthika01@gmail.com', 'Kenya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 1, NULL, NULL, '', ''),
(61, 219, 'Garnier Pure Active 3 In1 Charcoal Wash Scrub 150ml', '<p segoe=\"\" helvetica=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" px;=\"\" line-height:=\"\" xss=\"removed\">Garnier Pure Active 3 in 1 Anti Blackhead Charcoal</p><p segoe=\"\" helvetica=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" px;=\"\" line-height:=\"\" xss=\"removed\">it&nbsp; can be used as a face wash, blackhead scrub and charcoal face mask to visibly reduce the appearance of blackheads, and help to protect against their reappearance.&nbsp;</p><p segoe=\"\" helvetica=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" px;=\"\" line-height:=\"\" xss=\"removed\">How to use:&nbsp;</p><p segoe=\"\" helvetica=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" px;=\"\" line-height:=\"\" xss=\"removed\">1.&nbsp;Wash: Apply daily to a wet face. Rinse thoroughly.&nbsp;</p><p segoe=\"\" helvetica=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" px;=\"\" line-height:=\"\" xss=\"removed\">2.&nbsp;Scrub: Every day, gently massage to exfoliate skin. Rinse thoroughly.&nbsp;</p><p segoe=\"\" helvetica=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" px;=\"\" line-height:=\"\" xss=\"removed\">3.&nbsp;Mask: Up to 3 times per week apply to dry, clean face. Leave on for up to 5 minutes. Rinse thoroughly.</p><p segoe=\"\" helvetica=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" px;=\"\" line-height:=\"\" xss=\"removed\">&nbsp;Avoid eye and lip area. In case of contact with eyes, rinse them immediately.</p>', 'P1620670096', 1610.00, 'ee4f35a71a3260829.jpg', '2021-10-20', 1, 1800, 'Garnier', 0, 6, 219, '1600', '10', '', 0, 2147483647, '--', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'warorua_alex', 'tsavoshop', 6, 15, '0112456667', '0', 11, '<span xss=\"removed\">Garnier Pure Active 3 in1 Charcoal Blackhead Mask Wash Scrub 150ml</span><br>', '--', 'GA297ST0VT15RNAFAMZ', NULL, 'reenyquwee@gmail.com', 'Kenya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 1, NULL, NULL, '', ''),
(62, 227, 'Samsung Galaxy A32, 6.4\", 128GB + 6GB RAM (Dual SIM), 5000mA', '<p xss=\"removed\">Samsung Galaxy A32 comes with&nbsp;&nbsp;6.4-inch touchscreen display with a resolution of 1080×2400 pixels,&nbsp;<strong>6GB of RAM and&nbsp;128GB</strong>&nbsp;inbuilt&nbsp;capacity storage.&nbsp;Samsung Galaxy A32 is powered by an octa-core processor and 5,000mAh battery.&nbsp;Order for this Samsung&nbsp;<strong>Galaxy A32&nbsp;</strong>smartphone online from Jumia Kenya and have it delivered to your doorstep.</p><p xss=\"removed\"><a href=\"https://postimg.cc/75kxjLqT\" target=\"_blank\" xss=\"removed\"><img src=\"https://ke.jumia.is/cms/external/pet/SA948MP19NQNLNAFAMZ/f19520db013204cc1de629d1f0871922.jpg\" alt=\"1\" xss=\"removed\"></a><br><br><br><a href=\"https://postimages.org/\" target=\"_blank\" xss=\"removed\"><img src=\"https://ke.jumia.is/cms/external/pet/SA948MP19NQNLNAFAMZ/e6e4953a9b121449f901c2f3e3a74b78.jpg\" alt=\"2\" xss=\"removed\"></a><br><br><br><a href=\"https://postimages.org/\" target=\"_blank\" xss=\"removed\"><img src=\"https://ke.jumia.is/cms/external/pet/SA948MP19NQNLNAFAMZ/2676444408272409277e01e1be270f61.jpg\" alt=\"3\" xss=\"removed\"></a><br><br><br><a href=\"https://postimages.org/\" target=\"_blank\" xss=\"removed\"><img src=\"https://ke.jumia.is/cms/external/pet/SA948MP19NQNLNAFAMZ/4f08f8cdcfbeb626b99f1ddd34e3c4b6.jpg\" alt=\"4\" xss=\"removed\"></a><br><br><br><a href=\"https://postimages.org/\" target=\"_blank\" xss=\"removed\"><img src=\"https://ke.jumia.is/cms/external/pet/SA948MP19NQNLNAFAMZ/7f5129725b90f97da4cad50b7669dcdc.jpg\" alt=\"5\" xss=\"removed\"></a><br><br><br><a href=\"https://postimages.org/\" target=\"_blank\" xss=\"removed\"><img src=\"https://ke.jumia.is/cms/external/pet/SA948MP19NQNLNAFAMZ/2aac72a62c5ddd9e4420fc1485c4adc6.jpg\" alt=\"6\" xss=\"removed\"></a><br><br><br><a href=\"https://postimages.org/\" target=\"_blank\" xss=\"removed\"><img src=\"https://ke.jumia.is/cms/external/pet/SA948MP19NQNLNAFAMZ/0fe25c384fb82a90d6ecdce481a5f666.jpg\" alt=\"7\" xss=\"removed\"></a><br><br><br><br></p><h2 xss=\"removed\">Technical Specifications</h2><p xss=\"removed\">DISPLAY&nbsp;&nbsp; &nbsp;<br></p><ul wfd-id=\"281\" xss=\"removed\"><li wfd-id=\"285\" xss=\"removed\">Type: Super AMOLED, 90Hz, 800 nits (peak)</li><li wfd-id=\"284\" xss=\"removed\">Size: 6.4 inches, 98.9 cm2 (~84.6% screen-to-body ratio)</li><li wfd-id=\"283\" xss=\"removed\">Resolution: 1080 x 2400 pixels, 20:9 ratio (~411 ppi density)</li><li wfd-id=\"282\" xss=\"removed\">Protection: Corning Gorilla Glass 5</li></ul><p xss=\"removed\">PLATFORM&nbsp;&nbsp; &nbsp;<br></p><ul wfd-id=\"276\" xss=\"removed\"><li wfd-id=\"280\" xss=\"removed\">OS: Android 11, One UI 3.0</li><li wfd-id=\"279\" xss=\"removed\">Chipset: Mediatek Helio G80 (12 nm)</li><li wfd-id=\"278\" xss=\"removed\">CPU: Octa-core (2x2.0 GHz Cortex-A75 &amp; 6x1.8 GHz Cortex-A55)</li><li wfd-id=\"277\" xss=\"removed\">GPU: Mali-G52 MC2</li></ul><p xss=\"removed\">MEMORY&nbsp;&nbsp; &nbsp;<br></p><ul wfd-id=\"273\" xss=\"removed\"><li wfd-id=\"275\" xss=\"removed\">Card slot: microSDXC (dedicated slot)</li><li wfd-id=\"274\" xss=\"removed\">Internal:&nbsp;<strong>128GB + 6GB RAM</strong></li></ul><p xss=\"removed\">MAIN CAMERA&nbsp;&nbsp; &nbsp;<br></p><ul wfd-id=\"264\" xss=\"removed\"><li wfd-id=\"267\" xss=\"removed\">Quad&nbsp;&nbsp; &nbsp;<br><ul wfd-id=\"268\" xss=\"removed\"><li wfd-id=\"272\" xss=\"removed\">64 MP, f/1.8, 26mm (wide), PDAF</li><li wfd-id=\"271\" xss=\"removed\">8 MP, f/2.2, 123?, (ultrawide), 1/4.0\", 1.12µm</li><li wfd-id=\"270\" xss=\"removed\">5 MP, f/2.4, (macro)</li><li wfd-id=\"269\" xss=\"removed\">5 MP, f/2.4, (depth)</li></ul></li><li wfd-id=\"266\" xss=\"removed\">Features: LED flash, panorama, HDR</li><li wfd-id=\"265\" xss=\"removed\">Video: 4K@30fps, 1080p@30/120fps</li></ul><p xss=\"removed\">SELFIE CAMERA&nbsp;&nbsp; &nbsp;<br></p><ul wfd-id=\"261\" xss=\"removed\"><li wfd-id=\"263\" xss=\"removed\">Single: 20 MP, f/2.2, (wide)</li><li wfd-id=\"262\" xss=\"removed\">Video: 1080p@30fps</li></ul><p xss=\"removed\">SOUND&nbsp;&nbsp; &nbsp;<br></p><ul wfd-id=\"258\" xss=\"removed\"><li wfd-id=\"260\" xss=\"removed\">Loudspeaker</li><li wfd-id=\"259\" xss=\"removed\">3.5mm jack</li></ul><p xss=\"removed\">COMMS&nbsp;&nbsp; &nbsp;<br></p><ul wfd-id=\"252\" xss=\"removed\"><li wfd-id=\"257\" xss=\"removed\">WLAN: Wi-Fi 802.11 a/b/g/n/ac, dual-band, Wi-Fi Direct, hotspot</li><li wfd-id=\"256\" xss=\"removed\">Bluetooth: 5.0, A2DP, LE</li><li wfd-id=\"255\" xss=\"removed\">GPS: Yes, with A-GPS, GLONASS, BDS, GALILEO</li><li wfd-id=\"254\" xss=\"removed\">NFC: Yes (market/region dependent)</li><li wfd-id=\"253\" xss=\"removed\">USB: USB Type-C 2.0, USB On-The-Go</li></ul><p xss=\"removed\">FEATURES&nbsp;&nbsp; &nbsp;<br></p><ul wfd-id=\"250\" xss=\"removed\"><li wfd-id=\"251\" xss=\"removed\">Sensors: Fingerprint (under display, optical), accelerometer, gyro, proximity, compass</li></ul><p xss=\"removed\">BATTERY&nbsp;&nbsp; &nbsp;<br></p><ul wfd-id=\"248\" xss=\"removed\"><li wfd-id=\"249\" xss=\"removed\">Type: Li-Ion 5000 mAh, non-removable</li></ul>', 'P1620670361', 26900.00, '40ae6ec27d40bab5a.jpg', '2021-10-21', 1, 50000, 'SAMSUNG', 0, 7, 227, '26890', '10', '', 0, 2147483647, '--', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'warorua_alex', 'tsavoshop', 15, 8, '0112456667', '0', 46, '<ul wfd-id=\"230\" xss=\"removed\"><li wfd-id=\"233\" xss=\"removed\">Galaxy A32 Handset</li><li wfd-id=\"232\" xss=\"removed\">Charger</li><li wfd-id=\"231\" xss=\"removed\">User Manual</li></ul>', NULL, 'SA948MP19NQNLNAFAMZ', NULL, 'contacts@tsavo.store', 'Kenya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 1, NULL, NULL, '', ''),
(63, 162, 'Protex Antibacterial Soap Herbal – 150g', '<span xss=\"removed\">Get&nbsp;Protex Antibacterial Soap Herbal – 150g On&nbsp;</span><b xss=\"removed\">Jumia</b><span xss=\"removed\">&nbsp;Kenya. Order For This Item On Jumia Kenya And Have It Delivered At Your Doorstep.</span><br><div><ul wfd-id=\"230\" xss=\"removed\"><li wfd-id=\"236\" xss=\"removed\">Sodium palmate&nbsp;</li><li wfd-id=\"235\" xss=\"removed\">Aqua</li><li wfd-id=\"234\" xss=\"removed\">Parfum</li><li wfd-id=\"233\" xss=\"removed\">Sodium chloride</li><li wfd-id=\"232\" xss=\"removed\">Limonene</li><li wfd-id=\"231\" xss=\"removed\">Linalool</li></ul></div>', 'P1620670635', 510.00, 'c7d2997ad9b4c3dfe.jpg', '2021-10-19', 1, 550, 'Protex', 0, 3, 162, '500', '10', '', 0, 2147483647, '--', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'warorua_alex', 'tsavoshop', 5, 2, '0112456667', '0', 7, 'Protex Anti-bacterial soap', NULL, 'PR541TB0VK50QNAFAMZ', NULL, 'reenyquwee@gmail.com', 'Kenya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 1, NULL, NULL, '', ''),
(64, 233, 'Fashion Men\'s Jacket Flight Suit-green', '<br xss=\"removed\"><span xss=\"removed\">Introduction:</span><ul wfd-id=\"269\" xss=\"removed\"><li wfd-id=\"294\" xss=\"removed\">Product category: Jacket</li><li wfd-id=\"293\" xss=\"removed\">Style: leisure</li><li wfd-id=\"292\" xss=\"removed\">Purchasing category: Fashion City (24-35 years old)</li><li wfd-id=\"291\" xss=\"removed\">Collar type: stand-up collar</li><li wfd-id=\"290\" xss=\"removed\">Edition type: Slim type</li><li wfd-id=\"289\" xss=\"removed\">Placket: zipper</li><li wfd-id=\"288\" xss=\"removed\">Whether hooded: not hooded</li><li wfd-id=\"287\" xss=\"removed\">Thickness: General</li><li wfd-id=\"286\" xss=\"removed\">pattern: plain</li><li wfd-id=\"285\" xss=\"removed\">Suitable season: spring and autumn</li><li wfd-id=\"284\" xss=\"removed\">Suitable for the crowd: youth</li><li wfd-id=\"283\" xss=\"removed\">Fabric name: chemical fiber blended</li><li wfd-id=\"282\" xss=\"removed\">Main fabric composition: polyester fiber (polyester)</li><li wfd-id=\"281\" xss=\"removed\">The content of the main fabric ingredient: 100 (%)</li><li wfd-id=\"280\" xss=\"removed\">Lining composition: polyester fiber (polyester)</li><li wfd-id=\"279\" xss=\"removed\">Lining ingredient content: 100 (%)</li><li wfd-id=\"278\" xss=\"removed\">Applicable scene: Leisure</li><li wfd-id=\"277\" xss=\"removed\">Style details: ribbed bottom hem</li><li wfd-id=\"276\" xss=\"removed\">Clothing hem design: straight hem</li><li wfd-id=\"275\" xss=\"removed\">Process: non-iron treatment</li><li wfd-id=\"274\" xss=\"removed\">Length: Regular</li><li wfd-id=\"273\" xss=\"removed\">Clothing pocket style: side slit pocket</li><li wfd-id=\"272\" xss=\"removed\">How to wear: external wear</li><li wfd-id=\"271\" xss=\"removed\">Sleeve length: long sleeve</li><li wfd-id=\"270\" xss=\"removed\">Sleeve type: conventional sleeve</li></ul><br xss=\"removed\"><br xss=\"removed\"><br xss=\"removed\"><br xss=\"removed\"><span xss=\"removed\">Note:1. Due to differences in display and lighting effects, the actual color of the item may differ slightly from the color displayed on the image. Thank you!2. Due to the difference in manual measurement, please allow the measurement deviation to be 1-3 cm. Asian sizes are smaller than EU/US/UK sizes, please check the detailed size information before purchasing. All goods in this product are subject to the actual goods received.</span><br xss=\"removed\"><br xss=\"removed\"><img src=\"https://ke.jumia.is/WHM0H2lPIKPw6XdX8byujulcRac=/fit-in/500x500/filters:fill(white)/product/79/931803/1.jpg?6335\" alt=\"image\" xss=\"removed\"><img src=\"https://ke.jumia.is/cms/external/pet/FA113MW1BL7RVNAFAMZ/4531d3af5d1ab08629919d49e283b10d.jpg\" alt=\"image\" xss=\"removed\"><img src=\"https://ke.jumia.is/cms/external/pet/FA113MW1BL7RVNAFAMZ/1d3a5f598edc33ad565d984732e28f4a.jpg\" alt=\"image\" xss=\"removed\"><div><br></div>', 'P1620670901', 1080.00, 'c57f9ca191a17d5fc.jpg', '2021-10-19', 1, 1799, 'Fashion', 0, 10, 233, '1070', '10', '', 0, 2147483647, '--', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'warorua_alex', 'tsavoshop', 10, 5, '0112456667', '0', 40, '<span xss=\"removed\">FA113MW1BL7RVNAFAMZ</span><br>', NULL, NULL, NULL, 'reenyquwee@gmail.com', 'China', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 1, NULL, NULL, '', ''),
(65, 145, 'Generic Sofa Elastic Stretch Sofa Cover 7&5 Seater(3,2,1,1)(', '<p xss=\"removed\">Life is like a big colorful puzzle, everyone is trying to perfect and enrich it. Our focus&nbsp;is: continuously research new technology, develop more products, provide you with a variety of choices, add joy and happiness to your life. Lamberia is committed to lighting up your home life with more quality products.</p><ul class=\"a-unordered-list a-vertical a-spacing-mini\" amazon=\"\" arial,=\"\" wfd-id=\"236\" xss=\"removed\"><li wfd-id=\"238\" xss=\"removed\">Perfect Protector: It is easy to install and protect your sofa from daily wear and stains,durable and comfortable.Offering you perfect enjoyment.</li><li wfd-id=\"237\" xss=\"removed\">Care Instruction:Mashine washable and dry quickily.Separately in cold water on the gentle cycle, do not bleach or iron.</li></ul><span xss=\"removed\">&nbsp;</span><ul class=\"a-unordered-list a-vertical a-spacing-mini\" amazon=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" wfd-id=\"228\" xss=\"removed\"><li wfd-id=\"232\" xss=\"removed\">Soft &amp; Elastic Material: Made of 95% polyester and 5% spandex material.Durable fabric and soft to the touch.</li><li wfd-id=\"231\" xss=\"removed\">Unique Design: Designed with various printed pattern and different color to complete any décor,add modern and elegant to your furniture and home design.</li><li wfd-id=\"230\" xss=\"removed\">Size: Suitable for armless sofa beds with a length of 160 to 190 cm, a seat depth of 45 to 60 cm and a backrest height of 45 to 60 cm.Any other problems,please contact with us.</li><li wfd-id=\"229\" xss=\"removed\">Perfect Protector: It is easy to install and protect your sofa from daily wear and stains,durable and comfortable.Offering you perfect enjoyment.</li></ul>', 'P1620671206', 13236.00, '205272a5b71e207c2.jpg', '2021-10-20', 1, 15000, 'Generic', 66, 88, 145, '12500', '76', '', 0, 2147483647, '--', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'warorua_alex', 'tsavoshop', 280, 60, '0793060164', '660', 12, '<br>', 'Leather, Wood', 'GE840FD0UW5TRNAFAMZ', NULL, 'stalbansschoolthika01@gmail.com', 'Kenya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 1, NULL, NULL, '', ''),
(66, 156, 'Soko Maize Meal Fortified With Vitamins And Minerals - 2kg', '<span xss=\"removed\">The Soko Flour Maize Meal 2Kg is Now On Tsavo Kenya At&nbsp;</span><b xss=\"removed\">Carrefour</b><span xss=\"removed\">&nbsp;Shop online. You can now order For the Soko Flour Maize Meal 2Kg on Jumia Kenya at the best price and Have It Delivered Right At Your Doorstep.</span><b xss=\"removed\"><br></b><div><ul wfd-id=\"275\" xss=\"removed\"><li wfd-id=\"280\" xss=\"removed\">Product Name: Soko Flour Maize Meal 2Kg</li><li wfd-id=\"279\" xss=\"removed\">Brand Name: Soko</li><li wfd-id=\"278\" xss=\"removed\">Product Type: Food Cupboard</li><li wfd-id=\"277\" xss=\"removed\">Quality: Top Quality</li><li wfd-id=\"276\" xss=\"removed\">Affordable Price</li></ul></div>', 'P1620671598', 129.00, '15f29757c1a542299.png', '2021-10-23', 1, 98, 'Soko', 2, 12, 156, '97', '12', '', 0, 2147483647, '2kg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'warorua_alex', 'tsavoshop', 32, 6, '0112456667', '20', -32, '<ul><li>2kg Soko Maize Flour</li></ul>', NULL, 'SO771OT0WC2F5NAFAMZ', NULL, 'patriciawnjuguna2000@gmail.com', 'Kenya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 1, NULL, NULL, '', ''),
(67, 147, 'Samsung 55 inch Samsung - 55MU7350 - UHD 4K Curved Smart LED', '<h3 class=\"type-cp1 p1-subHeadline\" xss=\"removed\">TU8000 Crystal UHD TV &nbsp;</h3><p xss=\"removed\">Experience your favorite movies and shows on a vibrant, stunning 4K UHD screen, using the Universal Guide to surf smoothly and select content. Everything you watch is automatically upscaled into 4K for stunningly vivid color and detail.&nbsp;</p><img alt=\"Transforms everything into crystal clear 4K\" class=\"lazyloaded\" data-src=\"/image-us.samsung.com/SamsungUS/home/televisions-and-home-theater/tvs/uhd-tv/tu8000/021020/feature-benefits/00-Feature_2020-TU8000-Overview-KV-MO.jpg?$feature-benefit-bottom-mobile-jpg$\" src=\"https://ke.jumia.is/cms/external/pet/SA948EA1N4QVCNAFAMZ/338f401d018cf68627e621109a455236.jpg\" title=\"Transforms everything into crystal clear 4K\" xss=\"removed\"><p xss=\"removed\">&nbsp;</p><h2 class=\"title-text\" xss=\"removed\">Experience the beauty of 4K UHD Resolution</h2><h3 class=\"type-cp1 p1-subHeadline\" xss=\"removed\"><strong>4K UHD Resolution</strong></h3><p xss=\"removed\">See what you’ve been missing on the crisp, clear picture that’s 4X the resolution of Full HD.&nbsp; &nbsp;</p><span xss=\"removed\">&nbsp;</span><img alt=\"Experience the beauty of 4K UHD Resolution\" class=\"lazyloaded\" data-src=\"/image-us.samsung.com/SamsungUS/home/televisions-and-home-theater/tvs/uhd-tv/tu8000/021020/feature-benefits/03-Feature_2020-TU8500-TU8000-TU7000-4K-UHD-Resolution-MO.jpg?$feature-benefit-bottom-mobile-jpg$\" src=\"https://ke.jumia.is/cms/external/pet/SA948EA1N4QVCNAFAMZ/093b7bc0bb3508387ce70844fd1acfde.jpg\" title=\"Experience the beauty of 4K UHD Resolution\" xss=\"removed\"><p xss=\"removed\">&nbsp;</p><p xss=\"removed\">&nbsp;</p><h2 class=\"title-text\" xss=\"removed\">Knows when you\'re ready to play</h2><h3 class=\"type-cp1 p1-subHeadline\" xss=\"removed\">Auto Game Mode (ALLM)</h3><p xss=\"removed\">Get into the game faster with Auto Game Mode which automatically optimizes the screen and minimizes input lag, giving you more control. Enjoy a smooth gaming experience without motion blur and judder.</p><p xss=\"removed\">&nbsp;</p><p xss=\"removed\">&nbsp;</p><h2 class=\"title-text\" xss=\"removed\">Powerful picture quality</h2><h3 class=\"type-cp1 p1-subHeadline\" xss=\"removed\">Crystal Processor 4K</h3><p xss=\"removed\">The ultra-fast processor transforms everything you watch into stunning 4K.</p><span xss=\"removed\">&nbsp;</span><p xss=\"removed\">&nbsp;</p><ul segoe=\"\" helvetica=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" wfd-id=\"239\" xss=\"removed\"><li wfd-id=\"246\" xss=\"removed\">Picture Engine:&nbsp;Crystal Processor 4K</li><li wfd-id=\"245\" xss=\"removed\">Series: UHD 8 series</li><li wfd-id=\"244\" xss=\"removed\">Resolutions: 3,840 x 2,160</li><li wfd-id=\"243\" xss=\"removed\">Design: Boundless Design</li><li wfd-id=\"242\" xss=\"removed\">Wi-Fi Connectivity: Yes</li><li wfd-id=\"241\" xss=\"removed\">Bluetooth Headset Support: Yes</li><li wfd-id=\"240\" xss=\"removed\">65TU8000 With Magic Remote&nbsp;</li></ul><div><font color=\"#282828\" face=\"Roboto, -apple-system, BlinkMacSystemFont, Segoe UI, Helvetica Neue, Arial, sans-serif\"><span xss=\"removed\"><br></span></font></div><div><font color=\"#282828\" face=\"Roboto, -apple-system, BlinkMacSystemFont, Segoe UI, Helvetica Neue, Arial, sans-serif\"><span xss=\"removed\"><br></span></font></div><img alt=\"\" class=\"lazyloaded\" data-src=\"/image-us.samsung.com/SamsungUS/home/televisions-and-home-theater/tvs/uhd-tv/tu8000/021020/feature-benefits/02-Feature_2020-TU8500-TU8000-TU7000-Crystal-Processor-4K-MO.jpg?$feature-benefit-jpg$\" src=\"https://ke.jumia.is/cms/external/pet/SA948EA1N4QVCNAFAMZ/196882dc20519f87a190bc79fe265bf0.jpg\" xss=\"removed\"><span xss=\"removed\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><p xss=\"removed\">&nbsp;</p>', 'P1621445542', 146328.00, 'e9ad8865845ba6fdd.jpg', '2021-10-19', 1, 146000, 'SAMSUNG', 29, 7, 147, '145999', '39', '', 0, 2147483647, '55 INCH', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'warorua_alex', 'tsavoshop', 210, 95, '+254793060164', '290', 0, '<ul wfd-id=\"230\" xss=\"removed\"><li wfd-id=\"236\" xss=\"removed\">SAMSUNG 65” 4K&nbsp; SMART TV Series 8</li><li wfd-id=\"235\" xss=\"removed\">Remote Control</li><li wfd-id=\"234\" xss=\"removed\">User manual</li><li wfd-id=\"233\" xss=\"removed\">TV Stands</li><li wfd-id=\"232\" xss=\"removed\">Batteries&nbsp;</li><li wfd-id=\"231\" xss=\"removed\">Power Cable</li></ul>', 'PVC', 'SA948EL1FFWTTNAFAMZ', NULL, 'Waroruaalex@tsavo.store', 'Kenya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 1, NULL, NULL, '', ''),
(68, 142, 'denim', 'file:///C:/Users/HP/Desktop/media/fami%3By/3d339054972742cc8b863aa2a4fa8c05.jpg', '3251791636', 1310.00, '3251791636_1625960630.jpg', '2021-10-19', 1, 160, 'denim', 100, 5, 142, '200.00', '110', '', 0, NULL, '', '', '', '', '', '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, 'Cyrus developer', 'ID3251789824', 10, 5, '0790395822', '1000', -719, NULL, 'leather', '', NULL, 'wakariacyrusmburu@gmail.com', 'Kenya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 1, NULL, NULL, '', ''),
(69, 227, 'Apple IPhone 12 Pro Max - 256GB - 6.7 Inch - 12 Mega Pixel -', '<p>iPhone 12 Pro Max.&nbsp;<strong>5G to download</strong>&nbsp;movies on the fly and stream high-quality video.&sup1; Beautifully bright 6.7-inch Super Retina XDR display.&sup2; Ceramic Shield with 4x better drop performance.&sup3; Incredible low-light photography with Night mode on all cameras. Cinema-grade Dolby Vision video recording, editing, and playback. Powerful A14 Bionic chip. And new MagSafe accessories for easy attach and wireless charging. 2 Years local warranty plus first year screen and liquid damage covered (terms and conditions apply)<br />\r\n<img alt=\"iPhone 12 Pro. 5G speed. A14 Bionic, the fastest chip in a smartphone.\" src=\"data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7\" /><img alt=\"iPhone 12 Pro\" src=\"data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7\" /><img alt=\"iPhone 12 Pro\" src=\"data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7\" /><img alt=\"iPhone 12 Pro\" src=\"data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7\" /></p>\r\n\r\n<p><img alt=\"iPhone 12 Pro\" src=\"data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7\" /></p>\r\n\r\n<p><img alt=\"iPhone 12 Pro\" src=\"data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7\" /></p>\r\n\r\n<p><img alt=\"iPhone 12 Pro\" src=\"data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7\" /></p>\r\n\r\n<p><img alt=\"iPhone 12 Pro\" src=\"data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7\" /></p>\r\n\r\n<p><img alt=\"iPhone Pro 12\" src=\"data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7\" /></p>\r\n\r\n<p>iPhone 12 Pro Max.&nbsp;<strong>5G to download</strong>&nbsp;movies on the fly and stream high-quality video.&sup1; Beautifully bright 6.7-inch Super Retina XDR display.&sup2; Ceramic Shield with 4x better drop performance.&sup3; Incredible low-light photography with Night mode on all cameras. Cinema-grade Dolby Vision video recording, editing, and playback. Powerful A14 Bionic chip. And new MagSafe accessories for easy attach and wireless charging.&nbsp;</p>\r\n\r\n<p>Order the iPhone 12 Pro Max now online on Jumia Kenya to be delivered right at your doorstep.</p>\r\n', '3270206654', 168990.00, '05d21f6f9bcd5b329b2d3e3fb9f36ed023e235e6996c568a88ad1200ab7646cf36330fde.jpg', '2021-10-26', 1, 199990, 'Apple', 228, 72, 227, '168990', '0', '', 12, NULL, '', 'IPhone 12 Pro Max', '', '', '', '', '', '', '', NULL, NULL, '', '', '', '', NULL, 'Tsavo Africa', 'TS1621988947', 147, 6, '0716912002', NULL, 84, '<ul>\r\n	<li>iPhone 12 Pro Max</li>\r\n	<li>USB C to Lightning Cable</li>\r\n	<li>Documentation</li>\r\n</ul>\r\n', 'PVC', 'AP044MP070MV3NAFAMZ', NULL, 'sales@tsavo.store', 'Kenya', '', NULL, NULL, '', '', '', '', '', 1, '', NULL, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `return_policy`
--

CREATE TABLE `return_policy` (
  `id` int(10) UNSIGNED NOT NULL,
  `main_head` varchar(40) DEFAULT NULL,
  `main_head_content` text DEFAULT NULL,
  `sub_head1` varchar(40) DEFAULT NULL,
  `head_1` text DEFAULT NULL,
  `sub_head2` varchar(40) DEFAULT NULL,
  `head_2` text DEFAULT NULL,
  `sub_head3` varchar(40) DEFAULT NULL,
  `head_3` text DEFAULT NULL,
  `sub_head4` varchar(40) DEFAULT NULL,
  `head_4` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pay_id` varchar(50) NOT NULL,
  `sales_day` date NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(40) DEFAULT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(40) DEFAULT NULL,
  `product_name` varchar(40) DEFAULT NULL,
  `generated_by` varchar(40) DEFAULT NULL,
  `confirmation_id` varchar(40) DEFAULT NULL,
  `approval` varchar(40) NOT NULL DEFAULT 'Not Approved',
  `zone` varchar(40) DEFAULT NULL,
  `zone_fee` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `user_id`, `pay_id`, `sales_day`, `first_name`, `last_name`, `email`, `phone`, `address`, `product_name`, `generated_by`, `confirmation_id`, `approval`, `zone`, `zone_fee`) VALUES
(25, 95, '1620576069', '2021-05-09', '95', '95', '95', '95', '95', NULL, 'warorua_alex', '1621354311', 'Approved', '95', '95'),
(26, 37, '1620671995', '2021-05-10', '37', '37', '37', '37', '37', NULL, 'warorua_alex', '1620672206', 'Approved', '37', '37'),
(29, 95, '1620844414', '2021-05-12', '95', '95', '95', '95', '95', NULL, 'warorua_alex', '1621354792', 'Approved', '95', '95'),
(30, 95, '1624147877', '2021-06-20', '', '', NULL, '', NULL, NULL, NULL, NULL, 'Not Approved', NULL, NULL),
(31, 118, 'PAY3248893960', '2021-06-23', '118', '118', '118', '118', '118', NULL, 'warorua_alex', '1624447324', 'Approved', '118', '118'),
(32, 118, 'PAY3248900470', '2021-06-23', '', '', NULL, '', NULL, NULL, NULL, NULL, 'Not Approved', NULL, NULL),
(33, 118, 'PAY3248902592', '2021-06-23', '', '', NULL, '', NULL, NULL, NULL, NULL, 'Not Approved', NULL, NULL),
(34, 123, 'PAY3248902960', '2021-06-23', '', '', NULL, '', NULL, NULL, NULL, NULL, 'Not Approved', NULL, NULL),
(35, 118, 'PAY3248920374', '2021-06-23', '', '', NULL, '', NULL, NULL, NULL, NULL, 'Not Approved', NULL, NULL),
(36, 95, 'PAY3249109856', '2021-06-24', '', '', NULL, '', NULL, NULL, NULL, NULL, 'Not Approved', NULL, NULL),
(37, 95, 'PAY3249111026', '2021-06-24', '', '', NULL, '', NULL, NULL, NULL, NULL, 'Not Approved', NULL, NULL),
(38, 95, 'PAY3249111204', '2021-06-24', '', '', NULL, '', NULL, NULL, NULL, NULL, 'Not Approved', NULL, NULL),
(39, 95, 'PAY3249111872', '2021-06-24', '', '', NULL, '', NULL, NULL, NULL, NULL, 'Not Approved', NULL, NULL),
(40, 95, 'PAY3249114398', '2021-06-24', '', '', NULL, '', NULL, NULL, NULL, NULL, 'Not Approved', NULL, NULL),
(41, 95, 'PAY3249120472', '2021-06-24', '', '', NULL, '', NULL, NULL, NULL, NULL, 'Not Approved', NULL, NULL),
(42, 95, 'PAY3249122308', '2021-06-24', '', '', NULL, '', NULL, NULL, NULL, NULL, 'Not Approved', NULL, NULL),
(43, 95, 'PAY3249126846', '2021-06-24', '', '', NULL, '', NULL, NULL, NULL, NULL, 'Not Approved', NULL, NULL),
(44, 95, 'PAY3249127562', '2021-06-24', '', '', NULL, '', NULL, NULL, NULL, NULL, 'Not Approved', NULL, NULL),
(45, 95, 'PAY3249135552', '2021-06-24', '', '', NULL, '', NULL, NULL, NULL, NULL, 'Not Approved', NULL, NULL),
(46, 95, 'PAY3249135840', '2021-06-24', '', '', NULL, '', NULL, NULL, NULL, NULL, 'Not Approved', NULL, NULL),
(47, 95, 'PAY3249137434', '2021-06-24', '', '', NULL, '', NULL, NULL, NULL, NULL, 'Not Approved', NULL, NULL),
(48, 123, 'PAY3249140938', '2021-06-24', '', '', NULL, '', NULL, NULL, NULL, NULL, 'Not Approved', NULL, NULL),
(49, 123, 'PAY3249150468', '2021-06-24', '', '', NULL, '', NULL, NULL, NULL, NULL, 'Not Approved', NULL, NULL),
(50, 123, 'PAY3249150668', '2021-06-24', '', '', NULL, '', NULL, NULL, NULL, NULL, 'Not Approved', NULL, NULL),
(51, 123, 'PAY3249151300', '2021-06-24', '', '', NULL, '', NULL, NULL, NULL, NULL, 'Not Approved', NULL, NULL),
(52, 123, 'PAY3249156240', '2021-06-24', '', '', NULL, '', NULL, NULL, NULL, NULL, 'Not Approved', NULL, NULL),
(53, 95, 'PAY3249230338', '2021-06-25', '', '', NULL, '', NULL, NULL, NULL, NULL, 'Not Approved', NULL, NULL),
(54, 95, 'PAY3249246508', '2021-06-25', '', '', NULL, '', NULL, NULL, NULL, NULL, 'Not Approved', NULL, NULL),
(55, 95, 'PAY1624624378', '2021-06-25', '', '', NULL, '', NULL, NULL, NULL, NULL, 'Not Approved', NULL, NULL),
(56, 95, 'PAY1624626710', '2021-06-25', '', '', NULL, '', NULL, NULL, NULL, NULL, 'Not Approved', NULL, NULL),
(57, 95, 'PAY1624626954', '2021-06-25', '', '', NULL, '', NULL, NULL, NULL, NULL, 'Not Approved', NULL, NULL),
(58, 95, 'PAY1624640085', '2021-06-25', '', '', NULL, '', NULL, NULL, NULL, NULL, 'Not Approved', NULL, NULL),
(59, 95, 'PAY2310324', '2021-06-25', '', '', NULL, '', NULL, NULL, NULL, NULL, 'Not Approved', NULL, NULL),
(60, 124, 'PAY2311242', '2021-06-26', '', '', NULL, '', NULL, NULL, NULL, NULL, 'Not Approved', NULL, NULL),
(61, 95, 'PAY2311805', '2021-06-26', '', '', NULL, '', NULL, NULL, NULL, NULL, 'Not Approved', NULL, NULL),
(62, 95, 'PAY2311809', '2021-06-26', '', '', NULL, '', NULL, NULL, NULL, NULL, 'Not Approved', NULL, NULL),
(63, 95, 'PAY2311811', '2021-06-26', '', '', NULL, '', NULL, NULL, NULL, NULL, 'Not Approved', NULL, NULL),
(64, 95, 'PAY2311815', '2021-06-26', '', '', NULL, '', NULL, NULL, NULL, NULL, 'Not Approved', NULL, NULL),
(65, 95, 'PAY2311941', '2021-06-26', '', '', NULL, '', NULL, NULL, NULL, NULL, 'Not Approved', NULL, NULL),
(66, 95, 'PAY1624742353', '2021-06-26', '', '', NULL, '', NULL, NULL, NULL, NULL, 'Not Approved', NULL, NULL),
(67, 95, 'PAY2311953', '2021-06-26', '', '', NULL, '', NULL, NULL, NULL, NULL, 'Not Approved', NULL, NULL),
(68, 95, 'cookieValue', '2021-06-26', '', '', NULL, '', NULL, NULL, NULL, NULL, 'Not Approved', NULL, NULL),
(69, 95, 'gw7vqJPOFf8j', '2021-06-26', '', '', NULL, '', NULL, NULL, NULL, NULL, 'Not Approved', NULL, NULL),
(70, 95, '5YRw2upjAmed', '2021-06-26', '', '', NULL, '', NULL, NULL, NULL, NULL, 'Not Approved', NULL, NULL),
(71, 95, 'PAY2312011', '2021-06-26', '', '', NULL, '', NULL, NULL, NULL, NULL, 'Not Approved', NULL, NULL),
(72, 95, 'PAY2312014', '2021-06-26', '', '', NULL, '', NULL, NULL, NULL, NULL, 'Not Approved', NULL, NULL),
(73, 126, 'PAY2312820', '2021-06-27', '', '', NULL, '', NULL, NULL, NULL, NULL, 'Not Approved', NULL, NULL),
(74, 126, 'PAY2312823', '2021-06-27', '', '', NULL, '', NULL, NULL, NULL, NULL, 'Not Approved', NULL, NULL),
(75, 126, 'PAY2312899', '2021-06-27', '', '', NULL, '', NULL, NULL, NULL, NULL, 'Not Approved', NULL, NULL),
(76, 95, 'PAY2313615', '2021-06-28', '', '', NULL, '', NULL, NULL, NULL, NULL, 'Not Approved', NULL, NULL),
(77, 95, '06cb6209517252631a9193701186f6f5', '2021-06-29', '', '', NULL, '', NULL, NULL, NULL, NULL, 'Not Approved', NULL, NULL),
(78, 95, 'PAY2320130', '2021-06-30', '', '', NULL, '', NULL, NULL, NULL, NULL, 'Not Approved', NULL, NULL),
(79, 128, 'PAY2320188', '2021-06-30', '', '', NULL, '', NULL, NULL, NULL, NULL, 'Not Approved', NULL, NULL),
(80, 95, 'PAY2321381', '2021-07-01', '', '', NULL, '', NULL, NULL, NULL, NULL, 'Not Approved', NULL, NULL),
(81, 95, 'PAY2321783', '2021-07-01', '', '', NULL, '', NULL, NULL, NULL, NULL, 'Not Approved', NULL, NULL),
(82, 95, 'PAY2335201', '2021-07-09', '', '', NULL, '', NULL, NULL, NULL, NULL, 'Not Approved', NULL, NULL),
(83, 95, 'PAY2338144', '2021-07-10', '', '', NULL, '', NULL, NULL, NULL, NULL, 'Not Approved', NULL, NULL),
(84, 95, 'PAY2385523', '2021-08-03', '', '', NULL, '', NULL, NULL, NULL, NULL, 'Not Approved', NULL, NULL),
(85, 95, 'PAY2392342', '2021-08-06', '', '', NULL, '', NULL, NULL, NULL, NULL, 'Not Approved', NULL, NULL),
(86, 95, 'PAY2392344', '2021-08-06', '', '', NULL, '', NULL, NULL, NULL, NULL, 'Not Approved', NULL, NULL),
(87, 95, 'PAY2392361', '2021-08-06', '', '', NULL, '', NULL, NULL, NULL, NULL, 'Not Approved', NULL, NULL),
(88, 95, 'PAY2392374', '2021-08-06', '', '', NULL, '', NULL, NULL, NULL, NULL, 'Not Approved', NULL, NULL),
(89, 95, 'PAY2392426', '2021-08-06', '', '', NULL, '', NULL, NULL, NULL, NULL, 'Not Approved', NULL, NULL),
(90, 95, 'PAY2392426', '2021-08-06', '', '', NULL, '', NULL, NULL, NULL, NULL, 'Not Approved', NULL, NULL),
(91, 95, 'PAY2392428', '2021-08-06', '', '', NULL, '', NULL, NULL, NULL, NULL, 'Not Approved', NULL, NULL),
(92, 95, 'PAY2392428', '2021-08-06', '', '', NULL, '', NULL, NULL, NULL, NULL, 'Not Approved', NULL, NULL),
(93, 95, 'PAY2392436', '2021-08-06', '', '', NULL, '', NULL, NULL, NULL, NULL, 'Not Approved', NULL, NULL),
(94, 95, 'PAY2392452', '2021-08-06', '', '', NULL, '', NULL, NULL, NULL, NULL, 'Not Approved', NULL, NULL),
(95, 95, 'PAY2465196', '2021-09-07', '95', '95', '95', '95', '95', NULL, 'warorua_alex', '1630970243', 'Approved', '95', '95'),
(96, 95, 'PAY2555443', '2021-10-18', '95', '95', '95', '95', '95', NULL, 'warorua_alex', '1634513519', 'Approved', '95', '95'),
(97, 95, 'PAY2565612', '2021-10-22', '', '', NULL, '', NULL, NULL, NULL, NULL, 'Not Approved', NULL, NULL),
(98, 95, 'PAY2565642', '2021-10-22', '', '', NULL, '', NULL, NULL, NULL, NULL, 'Not Approved', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sales_monitor`
--

CREATE TABLE `sales_monitor` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `product_name` int(10) UNSIGNED DEFAULT NULL,
  `total_sale` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sales_monitor`
--

INSERT INTO `sales_monitor` (`id`, `product_id`, `product_name`, `total_sale`) VALUES
(1, 44, 44, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ship`
--

CREATE TABLE `ship` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `sec_f` varchar(100) NOT NULL,
  `sec_l` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `county` varchar(100) NOT NULL,
  `sec_phone` varchar(100) NOT NULL,
  `secu_q` varchar(100) NOT NULL,
  `id` int(100) NOT NULL,
  `sec_email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(10) UNSIGNED NOT NULL,
  `profile_photo` varchar(40) DEFAULT NULL,
  `first_name` varchar(40) DEFAULT NULL,
  `last_name` varchar(40) DEFAULT NULL,
  `position` varchar(40) DEFAULT NULL,
  `details` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `profile_photo`, `first_name`, `last_name`, `position`, `details`) VALUES
(1, '5b1117b64285bceb6.jpg', 'Alex', 'Warorua', 'Systems Manager', 'Alex is the developer behind the Tsavo projects and the current systems manager and technician.&nbsp;'),
(2, '1ba15c7de496ba86d.png', 'Cyrus', 'Wakaria', 'Tsavo Developer', 'Cyrus is a dedicated young developer at Tsavo. He is specialized in Website Development and maintenance.');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `product_name` int(10) UNSIGNED DEFAULT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `supplier` int(10) UNSIGNED DEFAULT NULL,
  `stock_quantity` int(10) UNSIGNED DEFAULT NULL,
  `company_stock_quantity` int(10) UNSIGNED DEFAULT NULL,
  `id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`product_name`, `product_id`, `supplier`, `stock_quantity`, `company_stock_quantity`, `id`) VALUES
(40, 40, 40, 40, 40, 1),
(44, 44, 44, 44, 44, 2),
(45, 45, 45, 45, 45, 3),
(54, 54, 54, 54, 54, 4);

-- --------------------------------------------------------

--
-- Table structure for table `subscriber`
--

CREATE TABLE `subscriber` (
  `id` int(11) NOT NULL,
  `sub_mail` varchar(50) NOT NULL,
  `sub_id` int(11) NOT NULL,
  `sub_date` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscriber`
--

INSERT INTO `subscriber` (`id`, `sub_mail`, `sub_id`, `sub_date`) VALUES
(6, 'reenyquwee@gmail.com', 95, '2021-06-28');

-- --------------------------------------------------------

--
-- Table structure for table `sub_cat`
--

CREATE TABLE `sub_cat` (
  `sub_category` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sub_cat`
--

INSERT INTO `sub_cat` (`sub_category`) VALUES
('AgroSupplements'),
('Audio System'),
('Automobile Accessories'),
('Baby Care'),
('Baby Feeding'),
('Beverages'),
('books'),
('Books & Novels'),
('Desktop Computer'),
('Diapering'),
('Electronic Accessories'),
('Feeds'),
('Food Stuffs'),
('Furniture & Decor'),
('Games'),
('Gaming Consoles'),
('Gardening Tools'),
('Get a Prescription'),
('Health Care'),
('House Appliances'),
('Laboratory Tools & Electronics'),
('Laptops'),
('Make Ups'),
('Men Grooming'),
('Mobile Phones'),
('Nutrition'),
('Office Appliances'),
('OTC Drugs'),
('Other Computer Accessories'),
('Others'),
('Outdoor Lights'),
('Perfumes'),
('Personal Care'),
('Pest Control'),
('Pest Controllers'),
('Phone Accessories'),
('Softwares'),
('Sports Equipment'),
('Sports Jersey'),
('Tablets'),
('Teens Grooming'),
('Televisions'),
('Women Grooming');

-- --------------------------------------------------------

--
-- Table structure for table `sub_cat_2`
--

CREATE TABLE `sub_cat_2` (
  `code` varchar(40) NOT NULL,
  `cat_name` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sub_cat_2`
--

INSERT INTO `sub_cat_2` (`code`, `cat_name`) VALUES
('1', 'Supermarket'),
('10', 'Baby Products'),
('11', 'Chemist'),
('12', 'Outdoor'),
('13', 'Agrovet'),
('14', 'Others'),
('2', 'Electronics'),
('3', 'Home & Office'),
('4', 'Computing'),
('5', 'Softwares & Gaming accessories'),
('6', 'Fashion'),
('7', 'Phones & Tablets'),
('8', 'Health & Beauty Items'),
('9', 'Sporting');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `address` varchar(40) DEFAULT NULL,
  `supp_contact` varchar(40) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `supp_name` varchar(40) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `photo` varchar(1000) DEFAULT 'grocery-store.png',
  `type` int(1) DEFAULT 1,
  `created_on` date DEFAULT NULL,
  `supp_slug` varchar(40) DEFAULT NULL,
  `identity_no` varchar(40) DEFAULT NULL,
  `licence_no` varchar(40) DEFAULT NULL,
  `store_overview` varchar(40) DEFAULT NULL,
  `id_number` int(8) DEFAULT NULL,
  `terms_conditions` varchar(40) NOT NULL,
  `gender` varchar(40) DEFAULT NULL,
  `passport` varchar(40) DEFAULT NULL,
  `drop_off_point` varchar(40) DEFAULT NULL,
  `drop_off_contact` varchar(40) DEFAULT NULL,
  `reg_date` date DEFAULT NULL,
  `origin_country` varchar(40) DEFAULT NULL,
  `bank_head` varchar(40) DEFAULT 'Add Your Bank Details',
  `sp_name` varchar(40) DEFAULT NULL,
  `sp_number` varchar(40) DEFAULT NULL,
  `account_name` varchar(40) DEFAULT NULL,
  `account_number` int(25) DEFAULT NULL,
  `bank_name` varchar(40) DEFAULT NULL,
  `bank_branch` varchar(40) DEFAULT NULL,
  `bank_code` varchar(40) DEFAULT NULL,
  `mode_of_transfer` varchar(40) DEFAULT NULL,
  `service_provider` varchar(40) DEFAULT NULL,
  `iban_number` int(30) DEFAULT NULL,
  `shop_id` varchar(40) DEFAULT NULL,
  `field34` varchar(40) DEFAULT NULL,
  `field1` text DEFAULT NULL,
  `field2` varchar(40) DEFAULT NULL,
  `field3` varchar(40) DEFAULT NULL,
  `field4` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`address`, `supp_contact`, `email`, `id`, `supp_name`, `name`, `photo`, `type`, `created_on`, `supp_slug`, `identity_no`, `licence_no`, `store_overview`, `id_number`, `terms_conditions`, `gender`, `passport`, `drop_off_point`, `drop_off_contact`, `reg_date`, `origin_country`, `bank_head`, `sp_name`, `sp_number`, `account_name`, `account_number`, `bank_name`, `bank_branch`, `bank_code`, `mode_of_transfer`, `service_provider`, `iban_number`, `shop_id`, `field34`, `field1`, `field2`, `field3`, `field4`) VALUES
('Kamagambo, Thika, Kenya', '+254793060164', 'thettsavo254@gmail.com', 1, 'Alex Warorua', 'Tsavo 2021', '6f6a3418d148f6a5f.png', NULL, '0000-00-00', '', NULL, NULL, NULL, 39290974, '1', 'Male', NULL, '1', '1', NULL, 'Kenya', NULL, 'Alex Wanganga warorua', '0716912002', 'Alex Wanganga warorua', 2147483647, 'COOPERATIVE BANK', 'THIKA BRANCH', '5563SS', 'MPESA', 'Safaricom', NULL, 'tsavoshop', NULL, NULL, NULL, NULL, NULL),
('Muguga, Thika, Kenya', '', 'stalbansschoolthika01@gmail.com', 2, '', 'Warorua Alex', 'grocery-store.png', 0, '0000-00-00', '', '', '', NULL, 0, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Kamagambo, Thika, Kenya', '', 'Waroruaalex640@gmail.com', 3, '', 'Spinne Tech Inc', 'grocery-store.png', 0, '0000-00-00', '', '', '', NULL, 0, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Muthaiga, Nairobi, Kenya', '', 'ramtomfridge@yahoo.com', 4, '', 'Ramtoms', 'grocery-store.png', 0, '0000-00-00', '', '', '', NULL, 0, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Kamagambo, Thika, Kenya', '+254793060164', 'spinnetech@gmail.com', 5, 'Anthony Mwaria', 'Spinne Tech Inc', 'grocery-store.png', 1, '2021-04-16', '', '', '', NULL, 0, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Muguga, Thika, Kenya', '01221457700', 'stalbansschoolthika01@gmail.com', 6, 'Nonchanit', 'Celebrat Company', 'grocery-store.png', 1, '2021-04-19', '', '', '', NULL, 0, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('General Kago Rd, Njewa Cyber', '011224550', 'rtyjhetyje@jdfdjv.fj', 7, 'Mack Lokio', 'LG KENYA', 'grocery-store.png', 1, '2021-04-19', '', '', '', NULL, 0, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('SDTIJTHGG', '07445512225545', 'dfghjk@gmail.com', 8, 'MOSES KIMAIYO', 'Generic', 'grocery-store.png', 1, '2021-04-19', '', '', '', NULL, 0, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('GGJAKLO', '0745521545561', 'LEWIS@GMAIL.COM', 9, 'LEWIS WARORUA', 'LEWIS WANJIRU COMPANY', 'grocery-store.png', 1, '2021-04-19', '', '', '', NULL, 0, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('jjiooo, dheduio, 002', '041123665456', 'reenyuwee@gmail.com', 10, 'MWANGI KOIGI', 'JAKAYA Co Sellers', 'grocery-store.png', 1, '2021-04-21', 'seller-1619012367', '', '', NULL, 0, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('General Kago Rd', '01122454745', 'reeuwklij79ghjhgee@gmail.com', 1619014060, 'MOSES KIMAIYO', 'Technix Mall', 'grocery-store.png', 1, '2021-04-21', 'seller-1619014060', '', '', NULL, 0, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('196', '+254716912002', 'thettsavo254@gmail.com', 1619877666, 'MOSES KIMAIYO', 'Vendor 1 Shop', 'a33ea5d1b25e3969e.png', NULL, '2021-05-01', 'VEND1619877666', NULL, NULL, NULL, 39290974, '1', 'Male', NULL, NULL, NULL, '2021-05-01', 'Kenya', 'Add Your Bank Details', 'Alex Wanganga warorua', '0716912002', 'Alex Wanganga warorua', 2147483647, 'COOPERATIVE BANK', 'THIKA BRANCH', '5563SS', 'MPESA', 'Safaricom', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Kamagambo, Thika, Kenya', '+254790395822', 'cyrus.developer@tsavo.store', 1621335347, 'Cyrus Wakaria', 'Tsavo Africa', 'd5024d11d079e0872.jpg', NULL, '2021-05-18', 'VEND1621335347', NULL, NULL, NULL, NULL, '1', 'Male', NULL, NULL, NULL, '2021-05-18', 'Kenya', 'Add Your Bank Details', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Airtel', NULL, 'VEND1621335347', NULL, NULL, NULL, NULL, NULL),
('Muguga, Thika, Kenya', '0700000000', '22test@gmail.com', 1621335349, 'Warorua Alex', 'thrth', 'grocery-store.png', 2, '2021-07-08', 'VEND-dd7cf04af46b3d20d3f98dbcbb4e9572d66', NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, 'Add Your Bank Details', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TS162198894774', NULL, '$2y$10$peMtjYJQeBYesuRYM2T35emcTywQUfH1G/0Lq5D73OaAag64r/g.a', NULL, NULL, NULL),
('Kamagambo, Thika, Kenya', '0716912002', 'sales@tsavo.store', 1621335350, 'Alex Warorua', 'Tsavo Africa', 'dde3f288890d1b7d3bd775b2c6baba1201723e8a534b44a19bf18d20b71ecc4eb77c572f.jpg', 2, '2021-07-08', 'VEND-f927a2577a5b43da6fea29d7d39ca7850c6', '358358358', '3582468358358587', 'dde3f288890d1b7d3bd775b2c6baba1201723e8a', NULL, '1', NULL, '', 'Njewa Cyber Drop Off Point (MKU)', NULL, '0000-00-00', 'Kenya', 'Add Your Bank Details', NULL, '+254793060164', 'Alex Warorua', 2147483647, 'COOPERATIVE BANK', 'THIKA BRANCH', '5563SS', 'Paypal', 'Safaricom', 7457, 'TS1621988947', NULL, '$2y$10$7a5v.9/.DibP/hAG3oGs1emiYzLc5qI0fHyUAtfnv/aiTlGrt6j7K', NULL, NULL, NULL),
('kahawa west', '0790395822', 'wakariacyrusmburu@gmail.com', 1621335351, 'wakaria', 'Cyrus developer', 'grocery-store.png', 2, '2021-07-10', 'VEND-e24685c26491b3fc736b60cee108eb415cc', NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, 'Add Your Bank Details', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ID3251789824', NULL, '$2y$10$XimCjfLjDLLwtE08IBTr7utW8fN/z8KKbgmtXKtn/cVYecpwXwk6y', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `system_setting`
--

CREATE TABLE `system_setting` (
  `flash_sale` varchar(40) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `just_sold` varchar(40) DEFAULT NULL,
  `js_date` date DEFAULT NULL,
  `recommended` varchar(40) DEFAULT NULL,
  `r_date` date DEFAULT NULL,
  `latest_product` varchar(40) DEFAULT NULL,
  `lp_date` date DEFAULT NULL,
  `prods_1` varchar(200) DEFAULT NULL,
  `p1_date` date DEFAULT NULL,
  `id` varchar(40) NOT NULL,
  `prods_2` varchar(40) DEFAULT NULL,
  `p2_date` date DEFAULT NULL,
  `prods_3` varchar(40) DEFAULT NULL,
  `p3_date` date DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `phone` varchar(40) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `system_bg` text DEFAULT NULL,
  `hidder` int(10) UNSIGNED DEFAULT NULL,
  `unhidder` int(10) UNSIGNED DEFAULT NULL,
  `new_script` text DEFAULT NULL,
  `new_script2` text DEFAULT NULL,
  `new_script3` text DEFAULT NULL,
  `new_script4` text DEFAULT NULL,
  `new_script5` text DEFAULT NULL,
  `new_script6` text DEFAULT NULL,
  `new_script7` text DEFAULT NULL,
  `new_script8` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `system_setting`
--

INSERT INTO `system_setting` (`flash_sale`, `date`, `just_sold`, `js_date`, `recommended`, `r_date`, `latest_product`, `lp_date`, `prods_1`, `p1_date`, `id`, `prods_2`, `p2_date`, `prods_3`, `p3_date`, `location`, `phone`, `email`, `system_bg`, `hidder`, `unhidder`, `new_script`, `new_script2`, `new_script3`, `new_script4`, `new_script5`, `new_script6`, `new_script7`, `new_script8`) VALUES
('Flash sale', '2021-05-05', 'Just Sold', '2021-05-05', 'Recommended', '2021-05-05', 'Sponsored', '2021-05-05', 'Televisions', '2021-05-05', '1620253684', NULL, NULL, NULL, '2021-05-05', NULL, NULL, NULL, NULL, NULL, NULL, '<br>', '<br>', '<br>', '<br>', '<br>', '<br>', '<br>', '<br>');

-- --------------------------------------------------------

--
-- Table structure for table `system_settings`
--

CREATE TABLE `system_settings` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `cover_img` text NOT NULL,
  `track` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `system_settings`
--

INSERT INTO `system_settings` (`id`, `name`, `email`, `contact`, `address`, `cover_img`, `track`) VALUES
(1, 'Tsavo Package Management System', 'spinnetech@gmail.com', '+254716912002', 'General Kago Road, Thika, Kenya', '', 'Track Pack');

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 'FinePix Pro2 3D Camera', '3DcAM01', 'product-images/camera.jpg', 1500.00),
(2, 'EXP Portable Hard Drive', 'USB02', 'product-images/external-hard-drive.jpg', 800.00),
(3, 'Luxury Ultra thin Wrist Watch', 'wristWear03', 'product-images/watch.jpg', 300.00),
(4, 'XP 1155 Intel Core Laptop', 'LPN45', 'product-images/laptop.jpg', 800.00);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_discount_coupon`
--

CREATE TABLE `tbl_discount_coupon` (
  `id` int(8) NOT NULL,
  `discount_code` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_discount_coupon`
--

INSERT INTO `tbl_discount_coupon` (`id`, `discount_code`, `price`) VALUES
(1, 'C_USB02', 100.00),
(2, 'C_LPN45', 200.00),
(3, 'C_3DcAM01', 340.00),
(4, 'C_wristWear03', 50.00);

-- --------------------------------------------------------

--
-- Table structure for table `terms_conditions`
--

CREATE TABLE `terms_conditions` (
  `id` int(10) UNSIGNED NOT NULL,
  `main_head` varchar(40) DEFAULT NULL,
  `main_head_content` text DEFAULT NULL,
  `sub_head1` varchar(40) DEFAULT NULL,
  `head_1` text DEFAULT NULL,
  `sub_head2` varchar(40) DEFAULT NULL,
  `head_2` text DEFAULT NULL,
  `sub_head3` varchar(40) DEFAULT NULL,
  `head_3` text DEFAULT NULL,
  `sub_head4` varchar(40) DEFAULT NULL,
  `head_4` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(10) UNSIGNED NOT NULL,
  `name1` int(10) UNSIGNED DEFAULT NULL,
  `address` int(10) UNSIGNED DEFAULT NULL,
  `last` int(10) UNSIGNED DEFAULT NULL,
  `the_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `name1`, `address`, `last`, `the_id`) VALUES
(1, 37, 37, 37, 37);

-- --------------------------------------------------------

--
-- Table structure for table `transaction_code`
--

CREATE TABLE `transaction_code` (
  `id` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction_code`
--

INSERT INTO `transaction_code` (`id`, `code`, `user_id`, `amount`) VALUES
(11, 1624624378, 1, 356),
(305, 3435, 114, 425),
(304, 2147483647, 123, 425),
(303, 0, 114, 425),
(302, 0, 123, 425),
(301, 0, 114, 425),
(441, 0, 138, 0),
(440, 8, 118, 10),
(439, 0, 137, 10),
(297, 0, 114, 0),
(438, 28, 137, 10),
(437, 0, 137, 10),
(436, 0, 137, 75),
(435, 90447, 9, 296),
(434, 3640, 137, 75),
(433, 3815, 137, 75),
(432, 0, 137, 75),
(431, 0, 137, 75),
(430, 9, 9, 296),
(429, 92, 115, 0),
(428, 5969, 115, 0),
(427, 2147483647, 115, 0),
(426, 609, 115, 0),
(425, 1, 9, 296),
(424, 885, 9, 296),
(423, 3, 9, 296),
(422, 0, 118, 10),
(421, 2147483647, 9, 296),
(448, 0, 133, 0),
(447, 0, 133, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(60) NOT NULL,
  `type` int(1) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `contact_info` varchar(100) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `status` int(1) DEFAULT NULL,
  `activate_code` varchar(15) NOT NULL,
  `reset_code` varchar(15) NOT NULL,
  `created_on` date DEFAULT NULL,
  `zone` varchar(150) DEFAULT 'Delivery Point not set',
  `cost` decimal(10,2) DEFAULT NULL,
  `coupon_code` varchar(40) DEFAULT NULL,
  `coupon_worth` varchar(40) DEFAULT NULL,
  `discount` varchar(100) NOT NULL,
  `wallet` int(40) DEFAULT 0,
  `coupon_id` varchar(40) DEFAULT NULL,
  `field20` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `type`, `firstname`, `lastname`, `address`, `contact_info`, `photo`, `status`, `activate_code`, `reset_code`, `created_on`, `zone`, `cost`, `coupon_code`, `coupon_worth`, `discount`, `wallet`, `coupon_id`, `field20`) VALUES
(1, 'waroruaalex@tsavo.store', '$2y$10$hteUHReAM05QxJZqLQiMquWXfGDeaUfRGxRPNWlBEc6BvUz68FtGO', 1, 'Alex', 'Warorua', '', '', 'favicon.png', 1, '', '', '2018-05-01', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL);
INSERT INTO `users` (`id`, `email`, `password`, `type`, `firstname`, `lastname`, `address`, `contact_info`, `photo`, `status`, `activate_code`, `reset_code`, `created_on`, `zone`, `cost`, `coupon_code`, `coupon_worth`, `discount`, `wallet`, `coupon_id`, `field20`) VALUES
(9, 'waroruaalex640@gmail.com', '$2y$10$cuMTgNJc4eCbc1ptBz6VtuFYxKxeyxi7.OjzE3UGeNZfDSk0LvNMW', 0, 'Alex', 'Warorua', 'General Kago, Thika', '793060164', 'c756515837bc931085f4038b47cd6b26ce85a1df1e85d99904498ff7a3cbf675973e1908.jpg', 1, 'k8FBpynQfqsv', 'wzPGkX5IODlTYHg', '2018-05-09', 'Kasarani Main PUS', 75.00, NULL, NULL, '0', NULL, '1622146826', 0x2f396a2f34414151536b5a4a5267414241514141415141424141442f3277434541414943416749434167494341674944417749444177514441774d4442415945424151454241594a42515946425159464351674a427763484351674f43776b4a437734514451774e45424d5245524d594678676648796f4241674943416749434167494341674d4441674d4442414d4441774d45426751454241514542676b46426755464267554a43416b484277634a4341344c43516b4c4468414e444130514578455245786758474238664b762f43414245494164384233774d4249674143455145444551482f7841413441414142417755424151414141414141414141414141414141674d494151554742776b454367454141515144415141414141414141414141414141414167414241775945425163492f396f4144414d424141495141784141414144756f42754b47414a414351416b414a774247414a41444f417353517061326b5173516e5741704148475a73554d4b52516b6b554a4a4643535261484941647874775174493944616a624847334141495142324145674241414a674249415341456742494153414567424f41497742494259476c796a6a534957434d4841554a5543364669553671747254316f6f5a6b43784567576c494778326347784d34416847334230696a676b326859615a5436473147324f4e75414151674473416843734243414a414351416b414a4342614d415467444f5671735346673034446a4f416b42554e694e5358424f323461506154655565594a6148556b38724e797573755668396c74332f4f316a55733331674f664976764f484b2b6e51344f547778436e6d6d6a6978476b656c736d6157716a69413268634b56544e6a67536251734a4d5563536f5567474141374143414154414351416b414a774247414d34364c43564378536b533441494570596e454f56593071554d314b6b57476d7338412f4274796474595267766d485a756d5973506f782f4f6a382b4f6536785a576434625139616a7a7366786e4a6355774d37746432362b4e44366a36376d796741665243564354597568696c4378304461304e57334278624b304e32322f51326f6d7744694148594151414359415467434d415a7830574577446a53415641614336444c577261307130714351416c72546b584950522b5172726a647430786b3475495748305778386e4438766e6339577532777a782f7031474857587a6d6c61352b7778732f4c4e6159744c53526752782f3748516f752b69766665576d75746b62337a38794f42514e674955306551374e674845685968457342524e6a6a5a6b306a304e76453241635141374143414152674351744b774d6371735a71465143464e4c59774845314b67426a674b5146616b444c346a52376d744365446f2b46374e6c6649374b30484b5676745069554f7a3553544f324e36644e645970795969706a2b70365049574e5552723374615a4e444e593034767162624e6e546d303869664b6e564e57454533376435585653685070514b706d687969464173514d43304845416831576f676845504e754b576e473368414445416467424942635a75566264553148414243426253674c5a696f4164584b436c4b56455a706a63376f543853727a66634a713371715674306974764635665468666f77325049395769624e7a333256533348475a32323362684c58674c633246645a575176396d6b732b2b395a5747344b58736633492b4c4b64655456667069524553582b4e6a4e725374347149574957796f5564454f43586e466f4f43744253535731564945495747764f4f4e76414147414178447171684b41343067434149574c5a79726c416c71416e414559446a454957416647786e6638454b7a3656332f414f7149476873714b6573423963324f32385954617471644e744d2f4b547a397a6349353964666e31386658336d6a644b72715a4e66465971322f356868456a3032397943544a35745146714a2f536c31472b482f7743743244476c76536f65756f68784a416b70556f6d787874436757326356557549544e6a694a475a523645504530416352576a676d4f30476d63424d61554e764e494b414341635577416e466c524d414567424c41506b742b784748477a78766d3679507452424853626657472f4a5a5a427463486e44414c716278397838337272614a6a774d355a31445138776244507a726e496f5138397535334b65514f654f33744b6651487a3770484c4c724262756b394b796555755864737a735050496e5378417363416341424a4648476a6a7141347470576c3455715174785156535554614843524d5563626541645336306f343234426a6269474e78644b675941796341557773714d67414a414351416b5252323968707777426a6c4a6662584c756c38672f4632793135756d2b654c71543076764f46734d4f7375795736685a75456d354f7531677556533449344239474c517a636d3551627567687a7a6f31786e4e797837616265725452454c375a7738415341456742497055646d797444684733424d77565363436b71536d476e577a4670486f51556158573345597371436f346d6f533172536f6b4c51346a6f756f307451416b4145674249436955624d41794c4e6553644469766a45734944645a6f6b796658693262385a37663457764e62546255313473316d314f366b49615575755867626e545841633742355059466f61596d54614d4a2b6a486b4c316a3650773764674779716f416b414a414351416c527035427830416357304c46416971566b7a61484548485274774e41434a64516a5a6142596d5641536343716c556d67306a674147414a414351455a59737241724c7043546c49364272694c2f414554687a5772506a3278637a322f724d2b486e67324474694c4d7750625674315275645074473961773264424a3565506b332b50746c317a753038556b66654b62307a325a7a796c39632b533942674b745a5142494153414567424953716a704142776f6f34326f326c675564457253556259343262674475345554476c7251746e714467536c465555796c4a554a41416b42422b59707636383458374c693355723953376674336e54766550534a6a42755459345764784c32686f7a4e785a415a4f694b31316f6d35747251646d7a54626f724a37727a69334f6e3642786f686c412f626a736150506d7550654f6339473571774e6c3153744c376237722f6476504c68504c5a30495a7658327041455967435644787854557375477555326c366e3050754f6370656e567a357466614b534143466f55614b5653634b6b7251674733477a565674725a716f55686a65716c59454f4e754d5943314c55434f553042703768506173655447443739365038414c5645754573583553616e6f48523732522b6b487976734f755a6452536d4c32506b63556f6354533576627a5339495839547a50676e68397633414e685569385a6e42756347694d544f3447596832413550656d4f544b7365522b4c66342b38756b5845336f643561366e4e536c7565374c353333427561464730504e5070337157636f387637467966705a704c6e526f7131302f4f2f547032313856394d534b6b5835656a6e516554782b6b4534626d6f4e69304f4e554c625553554f494f425346746f617472515969304c5443466f615631614667343432347869304c61656f4148776430686e2b2b2b713172646b4c3577384c504b3167305a4d6151764d50723833594b57665038416d393576394e586241646b346f324676477858753837335551796d684136624f4a734c6a6f4f517353454573644a6537583855746734686652313834766638416c766f585266544b395778332b32562f4c366f582f6e5674767a376435783357506534625a7a33642b59616175764f757132617837767a7a3044353930507647343435757354646b6e4e516266714e6941493152433047315733473144524330484170436b496174316f5969304c5443466f6156316146676878746253316362634763786a4a2b594f55584c2f72397a38366c3033442b59664f734b7a6a303768645a65445052446e4a776e587a776d5478786e375176544854794f6c72307a7a7532543466356c62717a734b3153313444355031536d3970725478546c5471746850446632455a4c79473637782b615756304f2f5466474b3138754c586174767a566944317a72454d4f2f4872374e74745538613164304c326470626c424f596139664d4d7a736e356e396c7a30477673736b56754542536f4e586d6743516d71534772546a547843466f4f4254627261534b4f4e6e474c51346d6f68784447347443774d636257783163626347656e7a64665350775a4d354c36586864445730366a77377031663267334772356178777a504472747431733066307532796645364c54314644444d4f4c4d7a344f316a4f79655730495677352f315338526276702f6839723068613837747662365a723564632b784a4e2b62717445533956504f7a4a756474783232706e766a556674316a754d5632546d554d394661656c4768624273687a37747663342b6a6d75353441545959416b414f79476e576a67436c56485246614845696a6a5a4d414753307249304c51746e713432424b343468597a342f38414d4439496646584b7875555858586c2f324f326567337a6733446a574e513050717449656a4c3841686e39516c576e79572f583566626a4876484b4e467a51306558426671467a302b6d7267466d773763376579764f316779486c4431776a6c36366f6643614c572f7744514679324574496b6441344961535a3135586f78724258332b663336486137697a36483832656a344e7633724265546450332b4f66526a387576305361326d376e41336650674249436954614b306b78514b49554346795244626a5a49414a33436847315274614e3070574d33466f574f524869506d2b39455654422b667a656b636435394871555562493535653557384655306d53322b68594d744176567a2b695233706c397a4c6930594d386b6c692b42736f4366535238352f6162692f704b656579322f5264613362344a53763475367264383363366c444a7674394c6966717650354e5a736e4f33783947347336613836643943504879363336776e6c4147544e78312b3164557930675475724849546f7878596c2f714b3939485168613547414a464b73754b51447851473351557163493357684f6862626843757156416b314b7361366f57426a7a4c72545277354a6462766e63734f74695a3045353337726e7275687a594f76722f6152317065546d4c553158555a446d3737424c446e6e4c7648674f73384f324a794f6c527a4d6e4d4d704861666e4e544836543349326e383847503661773954347852667661627062354942795633465868426d7550587974644e6c476e435042326d72362b786a4c4d6238353943777441302b6a3234787233616e614964666446344764562b57327565306f2b492f6253446d6a674734304179746f34514234614d75704d524332794369484547445472626942626a6267796946676b4c514d376a6a64516d3135386b663253664d5876645a676d794c357a647050494e3878305539317a737a5976316276592b6a785430674454717674505a38614a4e316e536159657a6a42656e6443666d7043685776782b77584a484a7050564377773439496266614f2b686a3261724e6b58686b772b594666444d3936332b5239347a592b365676656f724e707334736479397650626e704e33792b6e6d7574653239716a615852354d796e507a393379646878337239776a2b6e7a6d4f673251444e3335685641486a41555449416b69473347695657616f4b4b7132787839416862544f415270446c4247757261774a7a686e334a6a4c42692f4e5248666157727532597a692f4f724673547a7a5074314d557834493739306a534b565473687957367a5a3157313166666246614f755450636756644a74354a325338614e6c5357506d636961384b3958334c3175706e56683532727233695570626c712f647054646e4c6e5a3574697a6e5775354f4557422b37323958554d72544a5431635a77334e6759486d74396a382b37744a3770754778364f39616f52546170584c784e555a756f4146474e4b624a4c414b42736f6952446461504141456e36734c4356787843784d5173457861426b7478756f5363552b49483231664d7464387a6e3152437243624632734e35306d4a4d4f473837495731626e31356e647a786b68634c444e666d523159357536436e3630386c7873755a33444f656758502b587a312b55584c71545741567178366b33533675486179617a53323746376244464f41485157486e4b64787271524f443748356a5a57734b32747053387242626b7739794c424d3877505a5853494d616b78484b5836732f52666f707843376436726c68555659616369676877517344456255676871696a5a524142784144734b5341666f4b566164776263424149593346746a4f3967656331436635434e442f56583870397a324e487664343972484d324e752f7446552f6c32767330777a4d4c503172706c72754d452f4d486a584c37487574456343746d447a57315464736e4a3066646369374b55546f50466e4c4f31634235353955627468566c6d79734f724e5a614a585a6348662b5361486d39794f37612f6a564b794a4f666a592f77433170376d6b464e68362f77426764567762314976516d38367a304b576659546e6e304d747644717430514e524274777770537148594242674e4138414159416c5351416e717474635a756a62716d5742476b4c454b52626a616d56666e502b6a43436332772b5a487858577a39446e6c6e726a5a576f6170796e56325a59566e2b30374a364c6a347651736a644f73724c696d733132517a53352b5355722b2f2b6c484f2f6e77377a7836587761303933455538544c4e4d362b7331413672727171334d72564f39476563633236315973566a64755852316d685730387a555166324c727a4e656f34656337623035754f6d644336377a4f69544c4c71506d395451356961777251654e736f6951527574464341474143585a51434541524144505662627747746243326c634142304c4248586e46305935523547627762787a497364764f647633464c6a624e4851645a374731747373756d2b6a305832532b4e6c784f78766365714e5a6b5931735857393530382b3873523979744c76396e3665795059495a757573426e646f653448475337376e756438726d6974777459667879783748304c4b614d6d6336304939484b674d6b7879355732505a32374939795969732f5653612f4f666f35612b463062446156306271534a74446a5477414267414f774167414577416e41455941784f6a537764306263553767323444484666745277767a732f6a37624847725473643334667450566572706544374938573232764630397431386d4a6c73594a3041764f32584d6d38626f31785a39564c584c4976794c6776655165434d5754614f365350353937316872524e5665577650644b787237646b3970646a794a4d78616c504532795a6233705a65354f493433535a62556b446f4c6158556332665057666978326e306e4e71464558436a676c4b684144414164674241414a6742494153414534416a414764645777443941327454562b664c3644506e6579646c7a43515a6276736d554d584e2f77415863536f53786c6a796132706b625466756c7451503432366b2f5950646d4f6f766b6337444a72424d2f5736726c6e7136554736334f3363733931323365376835473365756839397072356474665766525932344c48726630312b575155613967596a51397a62774f544555725633326473335765342b324c5a5065336772306a3548724a78496f6462347141474141374143414154414351416b414a414351416e414559417a6930416b76357276704f2b57356271472b394e4a7971744f6d3135346359742b4a6d53643274426630374447336c666f3135526c3744703069446c6a772b6a7a436834337150425763336e557a6c6255797264715736387536667146703272555430446963444d56526c2b4a396a366c3256727a74576c39685272696536654368767469512b684a422b6f7071795830646376484f2f37776c61656b504c5941374143414154414351416b414a414351416b414a414363415241436576794c2f584638584a57485a32625866546c6f702b4271716d73394a59754e6a76654d396336775462577433463966555661374f612f32466a754d477536757279613166384161656c396d315733613957556b315478517870764f2b6c6c77796978656d3337316b656870335145656a7a33505a6a757a62574762483951374c59316779487865497478336251705070667932414645414a67424941534145762f4541446b514141454541514d42426751464241454641414d4141414d42416751464141595245684d4845425168496a45564d6b424249434d7a554645574a4452436352636c4d464a684a6a57412f396f414341454241414549417638412b435a6571614b4764305654612f67425655582f414b6b5665336d4874443077526e493866552b6d356173594250556e4a763770633338436a45783071544c747239487262544a6f68442b4831376e59713439634a366b56716a61324b567059736656327149624e6f3850745a74515034575654326a61587448644d6e3768715855795648477672347351684a424a7375326c4b4d6668324f58484c6a6c787934356363754f773332646a765079587372314b64355361616d6674327064516642786969516f7755447a4a697562474138726a4636727947567934356363754f584658465846782f7975377171785055326b47306a3659314238666963792f746c745a6770363654597947496335704d327746356c524d757a634934342b4f58484c685a5559612b73566459544f75735a326e4c7472586b4f54547477776c694d546c2b5a4d5848727369706d2b554f6b72436259314970736379784c796b6b752f624e557a664758676f44586666644c53434d724f553655736b716b4935552b385354456a5730523970413144456357552b4e59524a496159387a445435735456645a486a6e6a6d6b326c6d2b7356315059533367575a58796f6b6b6b56617a53737934617668594656615555393848434a42734b3648495151524d444a52617179446231304b7a422b31336c69384f714e5153593875624a6d4c2b64793471696f30764d6655523067572f4448524a45694e346c6c667072554c6a5354674a385a43474c2f56454b2b612b5834695a426b577a4e50306b476c6c575978524832316e4667504c6278685a4a6a536d327476637736363173624b713842436e3138304d685a5447775732594b3830625277327842574e614c397176705a494648635451334d4c547070592b4a494d64445252526f756d4b6c736f454b5241306e70375a483443756f365a376b6b576d6f6773364a4a782f366974416b574c625075497152327245723679775a4c74543230694857564d4373665a54587a6a71584236697577776e56724e46797946744a484f697276694a31575761356b52615a41556c6a706941794b646d61416d757361427377763756714f4f53587036396a42675232426532327258566c4e5778417a4a39664952427758345a6e514f4b566b73306b3367656a58536f39656b56365631664768444258576c37416f4b6f5676466d32562f347948384e682b336b6934713445356f78464b442b7249376e724a4e4a7669724d4e4f6a5437537773586b6358736874612b4e466e314a2f3275724d2b756d4467534c433769383231513663327167496c5a484e5a7971576e5834693258653949307977697850686851544c532f774251555854384655795a42354a4f724b56635663566356333838307870474a37746c38666c5377543739614e49394c365074413142526f774c7144572b6e745171304d6239703151726f2b6f62694d71475965484f725a6a4c576c734b2b5547534f6d653754676138382f55776171376b54596b2b316e7a316b64647934716f6e7644716247773955615852334550647846587a5646376b78653563595237506b5753684534794b5874483144536342747065317167735869425a444b4d77786c462b7a617941594d6a78512f696c4b615250384d6d6f616d4b7766772b587157376d386e534e3032394c3374483576716f746650642f6456656e4b434f4e6b6d4f2b434a7962744a45497a6457585136465766384165624964494e332f414731794c73693936392b32337a636b543245685450474a75694b6d5a536159717136662b7a576b4c346c57574e646b675a495279527034496b795976434a4d707257443462786b6651316f56724454494f6761623570656f4e4830734a6945465732557a54746d4b54446d3970776737456972326b44735971786f3962512f31665975384b50525648432b5758565538614f764f307147415a346b577a4e38647075365a304664473058616c547153762b6a6451364f337736396961354737475937434973716a3056703354376d6d672f74456869754a6279734b62684e6c4558555574674c4b7066496b4764505749567033746967566954374d51594a537a4a782f48533348445536636956304d556366614670364e44686a74593267546f474c7751494655376c666277556d6a556558534d69316859733369356544475351436a427052745755496167366d6c436f545474553339737230517459496d535635576a684a726654525a3836474f425836726e30444568544a65767042586377534a6c6c666e526a644a614a50474e4773376f703133325a49444674496b6d746d7255366c30624d4934442b30594c6f364d552b727275632f7056386653757072516a6a4f70644b5236696443644b734f4b7669687955507836525932614674584e6c5756484d2f61726c3732316335426c4d494b6357567a586c314649563070552f7154645a45434e4b62735a4e4e3144563549474d474f33674c6266797751397653776a574e564f537452366275644561766e69415250636f576f506b304961393836306b324575614d707052354569567a424f614f393037385650443146546674576f583876686b4e4f4b75546732716a4b6c2f64455755376e66427762756257752f4136464d4449362b4c474a4a6135714d5470735931796c597a796435624a737673755773317a72757a4942386c54674e4b4c62513171764173796a6335314e55382f327155315a74314932614e676b38677877526e5444737435486772436d6d3547354f587070307959346a422f4e34714d675046593755645275714e5a66564f2b347832356a4f32694e67793542787a4a2b576c67327172706b3933564a356f7442562f47416969357261472b3075744e316f36636a6c3865463337554f306a68676a73486a2b4b7a3933476d514c5949566345304f564c554b79773064596741684b375456477257384e724f487759506f76362f69566879314c4964456d4e45445a2f5755305154785232706a337347313553613973445447566d31654a5a7154415a70613346577a56363447786a7a58574756542b6e644f5a2b315831394867785a38614a434677643148496d79496d4d643141755256487352775644366a4e775779763955775738736a634178476a527957305942527835436771316c6b36626f6c574747393732375a597a527a5876523139637575356a587055514a5a42534c4b4136714151374a4d536f723556527a456735664531504f2f614c4b654f75697249644d4c506e37724a614673566a524e6a4f325569352f7744632f774342722f653262635352486972314a4d53307235526b44436d523153356156592f6d4c624c64556251324a5652725138324e7932736b4d6b69484676372f414f4a63594d496633584e446634566b584656665043535661764649534a59417361346c5250645a31735359542f774c35652f31656f6465305641705932532b31792b65393368494e78667a7775734c31666643743669636367474738374f527038434934513544395156417550694a70343065306c6e794969786b726c69334c3348745939546373735a636d66564f6d52664e726b51593253526d69456a396f5649794844624b7365304e6b6c7278513747346c575041543274566364354a3038305049616b61786a715137504e42685a7964766c61714a4a79444a53707558444a2b46376d6a5939354a4770326c567a4b69644a74544f6565624570346b783369434457545466336c4c476b426c7834387550395065366c70394f69366c7066384161466458494a4877326937504a38356f35466b367130336f7141577a48416d6d6b6155734a78686d5a49454b53484756637331773073574c474e47687868304e6b613541357a484a4a6a31747147337974536577465361766d556b71625a747537435646636d6d5a316b6b4e66523549716f714f51326d4b322b676c43613071356c4e4f4e587a324d33323339765976766d6c356259316c30486959684e3930546a766e5855503572586c5a4f69766a6e7062306e5648543350666258734b6f5272445864374d7356324f795649474e7263475a31756f636877356468782b4878744e313431516b763666586570313031556f73615057715637374331307457747362596b71524e6d5234455538325a7166554239517a6c6b4c6f6857487037534937547a2b45655656716e3277706e523539575651675a5a6a66496e324a745073592b4658324c4962565941412b7259545133625249386976465957394a572b446e4e5a47346f393348496e354e316478313755596e4f4e517a30542b4f35374e307a5a7a46544b4f2f3861396b6555306a4834373149715a4765305a6644466c52612b52443663714865366972455551662b6f385a694979564e31784c6c7366775a4959357a76417a55346b56797859687242364e4857564c43794256656532794a3952326b4555327361614b35502f756b6f546f464447367661644f3871717254706b6530726d36426c49327a6c7758712f77414865525435372b5750454d79733630556b30304d454b644861316742735a5951415763597355314e77594a386362562b2b4f5968574f45366c4d523843714f2f357665576e54765942453751416549307831472f67662b51724469595244783430736254766235593576556235746371743475697646354e776f2b717a695639576a4871534d7353577675436f63373179426a614e714d62707046494f306c723954723253456d76514d5a707a54704a796a7372475a7172547358716466557431386374704e6a6a4b46494663536e664249574c506947464a567474454d715135586a6f554b64335064307038644841642b5874694c73714c6c61354132552b4d6f6e637870757a356d355547613645484f747369344e33697241686d32555a624f6f6e784774586c73713937526c6d4f6367512f4671647a69774975726b522b38674f706167337577725337504230334f524842517047665046654d33555845596e64494d4d416e764c5178697736657544492b6f6d536777596b71644a30664166716256443531687242532f4248394f636e43664c544e4f4138566630344676794d696d57616456556e4a7931786954342f696f6d6c3562334d6b31736e4e5253316873716a6a4764714c754d6b7050506c4a746831326f6e52546a6b6c4678567472654e726f6a705234596d736778554130717a4863494d654f4d544178514972517075347a6d7650494b50487561784e3165397850654f37344e707343344751475235424c42464c647855756d7242714b364f6b615a464976434c714732694b31533132734153484d4752746c48564e33696e7831325268355352787155395841665a6b46494a395432715766684b414e637a73722f58767375654b3146736a724679506e533154545a656871476d4a6e6144614b61534b6e5a376565524a5a594a32794152706762644247687872347a57394f665932724848385a4f724e553173645041466b36706f6f7a464932584d4e5a7a547a4478353968466277696b4d5535464d66534549456d544e4e49594d70484e61496b6f6352704353745136776b3237487759695935364e3333637172377849704a73754a444666563045695171574e4d707045527a6e6c72766943743567424d4b4a757a3074784f596a4a4a5974464e395470576c576b546c486847576c6c4e626331756e394a576355452b766836666f71386a545176717530696165323162384f69364930342f5439664b4a4d317471364f79472b74723870495a546e6b5432366d66316451336a382f6e452f6a453352794f52316850497a70453736436e69576444713253527045784e6e65326b5a374930383859304e30594d48713571375651372b61304d506b6e766a6a662b754e613579374e30704255393541594f326e42717451325977783765754c366d4c466946326b44574b48374546495a2b6d53656f6c52707136314476737953416377546d725332787449326a537552643052552b7130684b68394c5632744a4d3757383630362f695876495a37696c6a676b537a704869306c434f7271543130677a796b4f596b686666752b5a4e2f7736416b7a77336367454c6a78527565532b3236747a54483951795a315a4a6e58656d724f4a59574c6f727450336f34526246395241577a733431653053645a4558456277627333524b716c704e3644355569635938325467336c43714f454b34734765386137416630535869416366544c4b69766a535645744261753357444a743437536a3575374f4c56386d735054482b706c45364d5753584b7a714a6f473948697274353570765238535046464d74775249305a712b42734a344b794f615a4a65397a6c6372752f6465397675334e4e536f6b505545416b37556c53326d7572437447345438305a6f3852493464515778596a4c414c676e72344559412f537864305562693056507072574e6351576f4b36424448574f673543736e30756c6243544643335954555875544579706d76433973596c7167754561536f68526c614d3453414973586c413078592f433954566b7033314e38546f30563256617176366d6862396d566757537247736a4f3162714661554442785a6c6e597a334b36592f332f38414133356d344351734f64456d5a7261723842617835415142644a4e486a4d6c43474a3057766a526d7463524d434655594a484f56504c4e534263656d6e394f576a575636686d4f647752585a71304d576b3033456f777454307033375a37354a4a303238636a4d385256786835484e496a76384179713633547a466c6a4849365249615454396b747853316c6b37366a567275476c74534c6c62584a486f58524630305642336c5372746353427962614b59574f392f7874617231614e7466703835792f334537545342454d6a4c547879615030387954586c5a4773613653516966336135445a7963782b4e59316a4f4c584b6a6e6a7a58636f514e4c5861596a55524d6931733665346249327434704a4e3547594e314a5a4d33776f44672f585445376a4f356b6575564a4f555a7773744932334b53316971315776624c6c784a4157475a325a7a303457744d37366a5662576b6f3541436170746d564652595338704e6d3238486656497478524a546553397962622b72384e54423654456b4572576352504968787159524774706b36384455465649664862433653796445327a627175454d675274474e72574f667877736a666c6e6146622b4e6c52614b4c583059592f544c4a67395630324e7768795a4e72614a5050353471626f7263744b7873565045786b7769394d4c732f6e4b32563079444d317a6d636433324c6c385139477848376f386561636d2f413769706d6d2b6f3157376a543873317449664b6b576730516a676c5951626952376d764d6774746c564f2f7a7a644f2b71722b70744b4d5972516a655970395153396d686851745279786b616b3675737636647667325758384145614e4d6a7836327a50584f472b4a48375561727845694e5a6c3174706834314b6c373269444b4e305767303748567a356c675843536970513370325233764a79556a4649317a58437035355a504f4d556b7278556a704d54356557544862745950487078565234317a32664c476c6d496e68795450576d4233556f6b5a4a67426b7756526449327062576d4434723666566a64364757374c5331336b586b63372f644d6f47454961536f7256503730726c2f44556743615571456372477338374935445347425875684e4e4970596277333163475a703475724b47496459306d504a5a4966346f356975364938545a76796a4b51587144385873777463357572624a6b537467616169425a307844376f6f7568444c4a63776e42346e3469656c4d524f745959762b336331565255567670574d544b3848586b745a6a473778576a5771745067467179776639506278466e314e724253494358647a55614b54704e424655546f55414d41585448714234335349374f2f38413443457367694243766c7569564a6d676b756339387772794d646a3149535163685537716577676772596f7a36543249362f64534f596a484559314f3950644d307a5852724765395a7570724f4e633263526c66756e46465774716e48346d6c577848454d4d57474a386e6442546b70433936652b412f786d3570356e49726c79584d384b42635731644b6b534270326579546d303930532f5436646a6643745558465937554b6b474f78636e5649767a3762656c6430586266426a366842697749525247644f502f716934423335343936364757644954617a45304e6a4e45334e307a644d67574579706c68737137576e3538327575486436496e2b3269345134386156647a49694e387a5a563150486a496c2b58336b534775636151554c6c4d64356c56654b4b374972654947597a354764796662476634695a54536b6a7a45592b3849713750796d6a535a3167474c43717132505431385774692f54366f7258774f304b4c4e5a71616634327a496738387676737632327872746e6a584a30706f7848556638627435497163593059554d6259386554535270737830737771657346374c305174354b6f67455a367a30646166664151354571726c61626c65744f6258596d4a75357a57743143326657554e4c5248714b72777778484f336458496d584d736357493975464b3471376b687036466468503079592f3067656d4e2f3078506d33377558546849754d463079522b56676272315133353256564b4d67793738333147714b6b746e42455746614d476b79576775394d442b73464d6c4f6539683178472f794e766c6b4a2f6949554d7932556f735745615546645257532b545433316d38577a6f576f706f68394a384733697a6e6448436b6b442f7559656f6856396e452f71474b6d66786d6e71774268426e737152725a3245792f6c376234632f774150676e6d6b6d79436e6b506554325866414e2f74784e78665a557955373869526a666c784f34542b71344447536c39615a74317177715a32644b71364d70642f7165306a523662483152567554625a7962372b612f384f58494c655573444d4b41493468327354314b6d62655732616350314944674c4d43703463715069623749696c396d344c3530544e6c3930715a6a3538586d735770675742645161516c4f5938543159587a2f414e624b506256384346525a476a7468674246474a69454a3033616d6b626b55534c35377537763030626e482f544a6e36472b662b71643376355a45543047646b72395a2b415a77714932335a355a3961444d706966552f7a76727a53613664734f76462f77446d662b79343733774c756938524566356d4778554772445059716b586e756c444b3850594d61752b796f75574d66777336594444657a4d6237747a3352467a5467332b446b7564716a6447426e726278594d6151413152514465747246666c4e347534734a4e355079477a694e537271654d307275616541656e6d6f61386a6969526e467733714e364e3236615a5038414e6f6b7a356e5a396c7a2f5a4d692b59334a6a6d396157354d69743552354173304f35576171416e31646c58513761444a725a2b6f36475a70327a4c58792f73756664632b3252586452726e354d546a4a6e397a46325269705854556e7842485739725854474d6b787a70736d7a754c6e4976474252795a6a42764d4a6767744749576f4a54445053426c5a572f474b754d465a384b3130364f36685a5754612f6f4443786a784f56484433597a6665316b69504952474538305275646270466a374636764e7233765a303241795975353270696650334e2b58496e366135455a764a6b7679753875746d68593676314c4f6b6657613130306d706168346865653250545a557a374a6c5a2f67677979542b365033442f545a6c645945727a3956735756486d695173655875364b664639534b6a7159727642394c4a73315851354b514e4d61566b3337336e502f54384231544c70594666476b746a32527261627049594a42585558675944596d6d69706353427445516a563833505847766550354f7134306b4c33644163694e473532367178772b4d6c6435424d623776783379726965795a462f54584966764d794238373830434a462b5054507265303354337732366262674a37737a374e7974332b48683231437841324b68542b4d462b6b7a45775479674968414376374a6963434f74354b343257643730584b47384a41654d4e6e7747496643504648776279796162337868324351556d62625763616271466a59313266357739795931654c6d726b4664347738754863704c4759587a6b48584766375a392b364c386a736966504c7949373831567a516f7546524c4e3962326b69455452396d3468765a4d2f6e4b496a45414a354c6c5664506339333254472f4b334554764c3837753649314a385251357037575a36427a42546f4e7058326b496375747330364969504c714c55373746376f5666455a345657714f63726c526975784d3233394f555a314d4c67733565725061754c377678503478506456376f612b5438423644534759784f6e344e2b614a2f38413044507265315354304e4c494843664c6e33796d6436447379332f7a457a2f585034376b5935794b72552b324854354f36415a3443492f4a346d4f4b346a4b32317339505458534b7534315a643334785233444738544547694e4d3738334a4c56523649376a763559674834364f34624f53315a6e42647a593861645a48716e73784d39765045546a3352506e646a48635a555232453871364f7561434e31614636665739725a662b31557366432f4c3355337a79737476387a5035376f6f4853444e5257666c4d6178733843523547374338565a76334358695275644e6a326f7a4e6d4e52557759316435444657536c395744706d7472746a536f306473776d7962382b4c634f7848684d784b353235327462627451507062374578664a64753843385443795236474466672f56586c544f7a56552b4858512f726531313335756d6d34583337716450386c63736c336c7537765635627857766a786c6b4538614c79366b2b4c475a48615959346b6d557879523231707657727851412b766e58516138385961596b594958716a56335846586a354f6d793430634952596179557079765a317976354c6d3773397650494b394b5448646d6f4538677578766e79785064563730585a5558442f704f796b656a67716a757a776a515739394264395a32744533744b4d4f652f6e3356624f454e72386b703172416a636658536d7273316c525a4b394563536f73354b396152417267534a446d4869784963614d38512f50644d6b4d3645677a635577426e656931397941546e6a56316b36786a6f5152356b2f714f4357766a4b3533696a32354f4c6d357435596d4e45392f794b4e572f4f7a6b4d37484f73503769706945787679596e34506e43695a5172386a4d6f6a7569617170442f41467661793762554d524d583739773264466f324a47647a6c696576574476684c577445316437572b6976324248446253424843384c376979666a706b306e7a796554696f522b4e6430334e4b6c51722b71336732415576714932417a2f653369786d4e4b2f4852524e626a514348374a6e32584a6a484643355778444e6448657a4873365a6a422f4448387874544b583050544c56546a6a4d6b5234306b4d794e476d5276712b3168662f414d6e6a706e3379457a6e4b446b3876474b56326662457858636431785635627578714f56555447774a6a2f414e4d644c5975325630796b634d4c53765375442f7446454c697a4b736975472b4f364d5a534d56486d4a30687139316f622b353644695352386d59365752664a76564c6e4a324e4b5271386d782b625775466b6855664c556966676a4c2b536935566a3959387353624e61504f7a2b597039507043643958326e6b3675726a733771635370315a4757442f41455a55707431335945415379593758573368776a474558464d672b63324933755646797765507730686848533437665a737872484634417453684d4d714e744a6e4a484d4e4f6c50336566353376646a66645637747539452f78434b5037722b454b2f6b6958492b772f435063442b356b6b4b2f5168337764517a71312f31666141376e724f2f56477456376d736273324d49596d54584a312b6b30556b77474f474a6b715231427678382b5955726a4f38584b79464e6d6466716f7468597639334649543954797857394e7847393851717545676c6b72774358755476547a387537356f542b4930524f354f2f35576f6d5476796b47695147384934386a6b574671445438786e3165706a646655562b624b6f504a367948474e306d766b3535717139322f71616e6644547949374537356264696f377641546756485a4e39556264766638413872354c763363396f7a6b7a337a3338753971636e4e626b644e3555664a336b724677592b6b4e42354c396f5438583358367058494e72694b3537334968586844306f776f2b57442f7741354174376d65626c58766970734966344a6264784e642b41524e345a767772356f71596e71783766307358472b586e33692f55486c576e556c747952357a49695a7468504e39657a507576384135502f4541437752414145454151514242414545417745424141414141414543417751464267414845424553457941684d52514946534977497a4a425552662f3267414941514942415167413935505769652f59543172793135613874655767652f59446f48762b346e766e79352b64664f7539416a324139614235423044332f5554316f6e676e72326844713141424d496e2f4147465735343968554357442f426156744b3858657a6f4548326558495066394250584a506648593135612b546f4938456a54534f68707447674f2b48522f4c72547053314a4442343748495058495066754a36344a363437372b694f593651537053673273754a4a6c507552575138322f6b737854547a6b562f4a624a68314c6246646c444c7a512f63706551734a4b5052564c634c71336e6b714241567a333741652b41652f6154336f6e726a6f614a363557734951705a475431316377325a4a7949795674705162695768433346765071644437306947784b6562576f794b4b6338327974356263714b392b4d674e65763679455267417730452b77487667664f67652b423965306e76676e72324c41556b704c725542694d3634746d55314c6a65636831397831544c6d6f654f76536b6c433473434e42516c4c4b35624b464b535a6b4a6d6338583952716149794f307577314d6a795a42483170576766384168344831723650656765754165436575436575436576595431784d43325a37696a4571706374544b704d536b6a563650586b336d64317454354e6f58754a615079536f302b544a73513230744c6946396b4b554f74656f704a386b75506574313549557279494f6765526f482f6d67652b4165394539386b3965776e6d7142564a384265356a4767354c53346b7a327276737a4759377356317552436c55386d78616961364350454e424c6276386e637579435a6a38637652747273357663766b57364c736f51666a51485141484150664130662b48512f357744776676676e7339386b2b77334e625178704e6c6151476b57534d7133524c65645355442f504d796d786e734f4e49625a6c74504355592b59546f725962656d5a72627574464c47544f32636d454a556e616d755578445835657a3650492b74442f414d306e6b6e76522b666a6b392b32777757347a724b35386c3239704974566755796f6752585136796e7350744879514651304b57664831486b74702f4843504e49426f73652f63624f51307148534e31746a64534766614433774e483730443137506f636764657839396d4d30743536566e4d756536706d7475372b38626143553161356a6958697550496b4f79584756694b34374f2f4459595570516338734b685372724a4979475530556d75736937436b4e6c2b74635772326a373550794e442f414a6f48766c584a50444564365334686d4e6c454f7a78716f636e544a396a4e734672584a706b4f4670617457554a3954446e6c5759504d2f626657314e6a4c69572f673478426c7a76536367774d4779473265533075696f344f50563755534464626759336a304f32656d3451632b7a6163336c39733667744f4f4e48684243336d3436584d6e642f656f6c4245666a4f786c6544773448316f66576b3650337766763259396a4c6c7746536e74316432706d46576973463235744d4e79436b785637494d786c6f4463706145345a47686d6e616c747679595a555730774d796845536f38624a374a6d644d72505445782b4366796f324932626c78554e5370443669554561334d78434c477932466d55794e4d72372f41426c394f4b3456635a7446736269486655562f5635464645757169312f724c5348546b396c6a7562354c316a6c584d70684d73724e53314c55564b48316f6154704f6b365033776676672f5844562f573476686b4b78734e704d5479504a64304a2b3447537a73717274794965345658456d78316f694e6c6343316e77343879484769424b6f3753784849626e76494e6b6f4e705a5672397853384845613273737658687a594a6350696f6a56306868324738302f46327473714f3461737366334b32327173387130767763547a764b6346726d73627573597946475230734f36516641714c716e6c4262726978704f68704f6b36546f2f66422b2b4661726f613538364a43526c39374d5a336a69317a32664638344a6b3773505a724170465669483778497a5447483674313939454b444b544e516e556a474d6c6979573449653259745a6353746c514d703276657876476c576c68485232346b70323878715a5573505755365a4b394c73366c4236544b6a70437242686b6b53356136575170666f4d4f327a58616f7a4f524d4f6554614a466d342b6a775277506f36476b3654704f6a393848373456704f5248464973322f5a777661796249746b5a7a6e32387565562b4c59302f58437459616934316a624c557474754d74775359316255516958594c306b724a537a436b576b653073554e5a55592b54304d366c6c34724e78327379786d687448726c45684b6d346947314c36577053302f7549636156636f4148356a536350733165677649614b5a696a6a467658333751744b43486c315a486652495a626662342f38304f423961547972685769354769553871644a33767563756e546357775443344836625a4b486f39686b7a4c595a6153796c785148786f7749595059665067554e4e79467069354e47312b71484c354f4d346b6d7370396a63586d325462552b597038526e6f7a4c63647a786a413642574679466d5937384a527153386c4248654c5348386a7879387836526746777046704b786962564e50317379326f705875543754396a57557173624e754669315a4f747a45336c784b54506d795733554943467a5543522b4d745770456b4a3751693379695569555531794c756249636a76792f314b34625079354f485a4256346851784d5a6f596363503267753736757071352b48345248584859654d77314d4e42322b785354416a4f7a5972703833553678572b526a6d52566b782f646a4356524a38664c61504b5845535838587a646e674476676344672f66422b2b4d4267496c5a6b755572647648477932637169556339753071345539755930792b3336547a6b534d7941645a52654c614b71714c696442455845544f6d354856516d43334a6a56586f7971702b7666733857564e54344e30474f56574d754c655a73375a4c71575747704d7431546f5672473438702f47504b3170595a7462694844626e68496b756f4f49584b386f773632786d62692f725a4a545a626865714f782f63594c616e4e416344363042337972676a766971765a4f50565757574d47726a5a6a755a537a5a64726a395563597134466645666b466844306c2b707941336a396736396b4c6158374838746345496172596668597832357a53454f434f616d7762495839616357434e5348464c2b38597849507162734c545062356d6a6f3371396a6143414a2b51535a3635537774317770326c63416e35472f725a537653695a6d5639506f6f7a71386b7947315941396965434f765952317153586677724270716c7234465651553746642b4b3632745a687a586638556c783347347862616b4b475356613257596a756f5456744f6949536b515a45645867354b684f5447416a555a35536d696c325339346a3478544857314246704f794c4d425339776f4f5254354c354c386a6146516a34376e4e6b5a4c78506d4474764b444c742f42544a6e784d656f64304b4744415a625968734961344135413052337772325970654a5144537a354d574c4653476b53343648576e325559675370365448566374706e775830496f314644616d74544850467a79314655705568495261495657544177594d4a56705067787745496a5230495250776a4b4a4d36584e526d564465555a6972747344654d5861764f33744b505857746f47555363316846794f7456376e756659787246356273796c694b663042776e674472676a72676a72676a522b666a554378647349416a764c486f6d4d67342b42476d7a50474572794d684a58474d5a7772625846443654326c555375594d6c326538753066584b4e6261324e477379347376633939494356526433306f625a6a79393163766679573661517853545574374f796d744f71365068725a525865614a3169456b74622b4b624d69417a573246744659413731384451486679644166304561694f757353575674546a314b59476f5453576246394968722b5854703553467137447237795153695738746254766d7a495136416a547a79476b646d513869525057557231642f6364656f6931746261566730762f414731733237345a7445624e7049566a572b6332557579634569796e766a363131396438416465776a76676a766d4732706332476845332b553952436945536e46366a6636654f70636b4d39494333326654486b342b467266536c6237375a486b6d466658432f5367554f307555324c79584a6b445a694b3448667a6431734e69343837456731576231694d59782f43735a4f73456d49727375783659763841554442584233416b503670356a302b7267545877506e354136344136397848664a4857716f65566e42477656386c79487a494861484f6b4d4c48656b306a386c62696a4278494649544a566a324f317a734a352b566b5743304c2f7a59623156384d4b62715275766c6b394c7957583532513237696f364b6d424e68336459755a76452b5838306c4e634d4f725a655a65522b6f687475512f6964366e43482f414636474b673841646630456438775853334d615545452b6e34706b6e6f2f784e6b55416544747a50363847334763696e6c53576f324435544f614374562b3053724e6d504d73592b32654c78484177355070397571434166793364324d486f677550535374366161306a79612b66756b312b5a6155462b336f666574346f61704f306d43575a323473695a4e6a56723042312f5552336f6a7254592f7741794470434342336f766f616c7866554e31426164486d6a4b36786c4b6c7165334a6778676f4e6f335a74564a4b49537477737251312b4f786135546b303262365574783554767974773964615431354a37334e5777615045483061522f756a57385550384143326658473169636f517279746b42503050375742354f71303443797a36696e6e656e536446314a53564b6e6e706e556837795831706c39534855674f44736c5772646e30336f6b68747866696e765250656742313262612f6b573843696775617057773963566253742b43502f6d6c71774b684a4e6c5767492f3148752f2f7841417645514142424149424177514341514d45417741414141414241674d4542514152426841534d5163544643456751534956497a49774d304a52466951302f396f414341454441514549415077486e714276414e596c49566e2b4831304a316d7a6d7a6d7a6d7a674f2b696b377853516e775276434e64534e663641472b6f474a53446955367a75784f414559556a3939714d37426e614d4b4e35325a3235347748464a33696b6850676a654561366476354161364162784f416475453677416e4f7a41515041515850436a476a746878332b70742f704535685148634578566746487733436a7651704147614b664a2b2f4952764f30344659514659416349313049312b41472b674738536e654164756563536b2f73654d376362516c52497854694846454a6b7646357a65495473374c534d516e786a5949534d6b566b6c3676647545644f334163556b2f57654d2b6a696b36776a58516a58516565674738536e65453677416e7742727944316b713745705a517439416a72516d67715974784f4d575a52656b56574a6b474a62772f534c6930794d38375035443661574e664e374b477339506243514a6679586550314d6a6a626347433677746c7862532b7734553649785352303834527250497853645952726f52727145344232346e443965414e39414d69785679704c455645483058356479696138756e58365a75786d464f32444870395847557969757271646d484c674d56484a375374694c6a52737266564375687653555639644d71624b41717843467663644e5861723543745474315972566e622b384a336e62684773413368473849377676414e5952727234316950476232526e6a414e345031695142306a4f4b6165616554537a7557583970455a68323346356c4e662f44716d4761654c4173367564626572444e564d585a7862533573626866644d625a64554536714f5357644579754e47746561636774557474796e4368395a5558476c6f3133707853642f59776a66336847733173617a7869683344434e39414d536e59427a66337245707a7a6e5a72585144574162366349665973754852674c6a6e3950516437484737336d31747945745232366669452b79487575703452574e73414a74754f71726970536662556b6b4c482f51374e67444574397577715777796c435845347050525364595269675070514233696b396f776a5741596c4f73534e6e4f336f4232344272414f732b59596b4e627070366d5a50704c586b53673674784a33555053784c39787156457349384235384b6463665535754f7159314a516848484b4f4a632f494c2f4d364b4c51523462304154482f414346754c576472364b546d2f72435031672f597a576a72464a336e62695537414f4b78486739514d412f4279756d32723065444257704e5a59635a3950454f634972314b3233433437585148573170573746635438664a664561365574546a634c69465179744b584b4e69476c62316441395358417757497a76346552684773554e352b38575033672f5978536530596a78684f38543442364a7849412f466a6c6c62785368695230385a746e7254314267574d71516e3258564a55454f4b306f64316755677256474462682b59415374506279572b69554642436d4737354571356f2b4c73506669744f44776349336e6c4a7748464a3330526e6e422b73486e43642f684569534a723755655047344643725751375a38646f61514f755346326271576c704b586b734d78575a414d784968706d53586b4d6b6f4c584a505a72615a5a66746556785a38435a57324d4a354456697979332b586269686f34506f367858306f3444766f6762474a7849333041364a5356624f6365724557396f784579746a524b3143576f74323467506f4270704c496b4b534c546d304a646b59676979666c307a54674d70714d6c317039584a616575624c78734c4f586153317a4a696542386e7637364f314535616543384b69723468566237307065543039683334373073786541782f774478366679697a6263616b4e4239676a3778656638414c484239346e46596a7763486a45346e704d6d7351576774364c33796d55535a50702b3447726c624357396c434d35724e6d71746a45645a6a546d306f635861634d6d494d47584b34375776514b3264332f46616c74764d753245524d5361707076517a6931334c6b38626e63617235456177343979566b387135565663526b774b702b6f76754e327648482f597335566b6d4d6866744d38467165612b6c2f436c7135706551626c364455556151454943556e794d632f654b785133724534664f4947686963546738394c6d472f4c7447326d7773485454664365526f4e3030347a334a635746706b5655436449596c796e6b6c547a715632615339486972545852317574797747717878745865655452437849616478493372474853773832386952366c55334a4b4f524374665458314b747541325a683348497542635835354d637636546c50442f36446453716c624450776d50616a3630416e702b786a6e3778574c38444534664f494f786963546963423043724a6d6c5256366a64775a476359676642636c7a334f4d5855613159626a723279473175756f736146784335425a39516f4b4835636554526331617362675630535938503855386a7357704c76785755354f6b5259385235557548784257307a614b4247756d47774c4b54786d6c6e72376d7066464c4f455171557a584e4d71537066512b526a6e37772b5269767361784f487a695042784f4a78486a466a6253736555363870544f5756744871304e6c364d79596f5448787078532b776f666c7a5a41434a4c626567413470444c6a4c536a53796e6161786a7a3262646375577775664137536a616c424b6e43426a6c637a5039324e4d5a3459314663397974616a5838415a416362733276596b7377696665724a4d2b4935416c767848656e2f654f6565692f4f4a36494f6869634278486a4a7a3562454a4b62523651564e52597a76464872427874556f364f73413848506b7648364b45375633716a3658466451654b31364a4d354c72334a624a444343793346506370666568495345707947557257343668687633507647576a354162516d78517474364738744c4c37584f7138747577374a505652326569385430546d744559504f4a3845355a71536c754c3357552f34664d61714174744253726167796f6f39314a2b7362526f45713535366a7a5944723966782f77424a7561326c314a6b5631317847336943504c5569796c7532453177694c42524469757a4a5a355530394e524372496c3750626665446450626953744b486c6e74516f35546750795a61634e713343625530354d6463764b6932684f6446713752315635316738596a786838352b6b3450474e6e57387545754b565868504d4b324a4c7259396f2f45655649697848796853327a3349533834724f6663736c516a2f41454376346c7743725443596e334e3955774f4a326450794b70714954384679784b59786162554643365a6c334e6537415456635858564f4662396642625a696f51624e6147726c686d4a592f77426d4567596e3650307346447065564251714847616c713546574b724c42314b636450363645353948462f6f34504f4b7842304d486e4548527a6b6b7856647836777347716176354a366956546e79714b70525455384b6e4a55323232705a3472796c504a70646f49764d6f634b484e637548366478747972725847722b6768386a6873775a6456435242684d562b41667247472f3564754a536d52594c435a453941543745616c694c6e57624d683237503147526a51375641354b5233686f5a4963534b36476f6377736d4871537368767256326a4364394364596e464b33674f4a5676456e57453777486558455264705358465933513137465a553139664744715345682b57554a68794d395071356942436e4276316c533859644974484861336d2f4b4b746b51322f54726c7251397a4f50336c357836597a58583766624a513149616463537930566c4c37704b326d6b7346545333316363692f2b794674636c2b35634e4f4d493246616b495870433031545473755577786c733834375953693670586a72765a474b56724f3741635372514178574a56674f735363562f65543769554f754f4b2f6c59706366685447302b6d6a7269576242682f6e644f62666a4d35707630646c6841733674615270597a6c3853504971773835786154386d4b45354f646343304d705a5a4b47696f50767449616a52527878477849566e4930397379454d62543942575454706f3578396e745a59737a7a71766172655254576d414e6a43645954765041785375345954766f507637774875476130526747384238596c5a516f4c536c7842556c3149527633426e45304a5a35646551304250642f4532464a59634d757a645638663141572b454568646a794f576d4f576847714937455350476c51354c37715a5445424d6a745532714f686269696e6a4367784855724c68774c73596d4162424f57482f774175516d6b6a696a535563796c435a667a484d5572657349772b634a37514d4a3131486e4e36784b74346b367a7a674f5146674f6874514f77346f38665174766e6474336850617449784c4b466f2f6d726a744b745a647945777a3761574735304e364b6f375959646b4f70595a6a734f51366770635a52334252796b2f754e536d425a4166315a78476638556a4c42492b4d34724b5570643476463762707775576b3153734a3139425374644364394165674f73336f6a416537456e57453779466f50494b6c66375947516f365563396c6c4b503572556343774e44454e715779734a6967747159783276544d516b47737134634d6c62646f38684d584679464e2b654e5445747a3246757a4856534c536649506b354933374b7334652f774239616c446e4a32417879433361785367666f6147456665453736453736413636413534784b74345272494232363569782f676a4b6853487557584d31554f337256667a53712f72474e70562f583970536d497a4d735a487a47315649666c4e734b58486a686c6e76566273496162694e35376249317443306f42576b744570616b596e786968334a556e4f4b6b6832776148714448374f52505341705773424f45373645372f4148585148574436784b7435584a436e6c6a4a6a776973535a4a346243573744735a4c305468554572436e493146567372436a465a723255705169512b796955555a53506b5072597a623365706f543358583552474a677676714373544164615673525a487556794744673835784e5737577753665571744a724b323052684f2b684f2f774167646441645a396e4b644a553635726c4d6b6d4f6975616a3172706f44436a4d386473573267457765507a766b7442636172644141797871326b705a6444514454724c776a72694c726c574451424b796337632b6c44376842333543773454724e362b38346932484c4f576b386e5945366d754942563550516e6638416f4136774866536c54707553364978467a647946464b41476741794e35576f5375573243306a2f686b316c4c6b46776c745063645a5279777548506775424f75685062344448734c57536e486639707a4f474a39703562677354714a505758542f6356684f2f782f2f3851415842414141514944424155484277594b427751474377414141514944414151524569457851515554496a4a5245454a68635947526f52516a4d314a797363456751474b436b7149474653524455464e6a73734c524d44527a6735506838455255732f456c56585355772b4d315a4943456f3653303074506938762f61414167424151414a50774c2f414e676d653138346d7471576b304b6d6e456b5a4c44494e6a363149304c705776534a64506770326f6a51326c4f7a79622f38414e4473334b6e31587056772b4c495749302f6f3954697431737a43457250525a5551596f5538526550307153755a64756c35526e616665503055384f4a77454f466a52693667614e6c565751552f743342744c36527538524355747971515172566f43552b796c4f5853666b59486a436c4d4f2b7577645372734c643861666d7458367378596d54315664536f2b4d614b6c706c4f42584c465443764857425868453271526d50556e364e4a505573457038663069304a6e546a794c54624a335755596131376f344a78564436356d655836655a634e2f48567039524b6548684870466a7a6839565044742f6f4f726b63744e687258534a55643278767339576165483650516c33545530466553744c3347306a463533364365474a796835543834367532394d7562546a7a6e456e6839484952756f535648337876714e36756a49663058707056344f70475368675548326753496c764a35317342626a654b464957564a5136326656565949364b666f3046534768736f52764f4f47354461656c5275687a5761536d714639564b4249705644625979536a4144746a45527a314258596e446c64536739437858347849764f366c61454f3143576768626939576c4e48696b6d3167426a45756845716c7a5675544b6c4f466c4a5276456c4353717a5562314f324a567438536145755444736f36677432534c535643315971446c515667594769686d4438695863596c356f706453534b576d733144706844374e645a6f715a59564b754e793744546e6f454958754779744953466336312b6a56566c3947747063576e2f414e626d5161452b77332b3947464c7963414f6d4a6b4b4f306d79692b7652466f4158495236762f41446a43474c55686253587262666c464d6253696b3074654d5373735136686130535575304c61555774737a4368657061383268774661434a715a6c6e576735705664767a54363335397a567442564e31615562344847454f7030596e55615051776d6f59554332436f57634b707434394566672b486b6f516c626373414e5533625341322b5537494a4b62374234782b44576b484e49504b4573334a4d754959386d6f6d7a61536f564b6c3357746f42504747563635417446504f534f42365230597738307564746c486b597148454246796935617562536e4b744b33782b4475693335744c4a6d6c47614a56526c505044696c57416e4b73542b6a6445706e4c5253797a726b70746f4e463677416f54624275715231527039696630305751746962447773796a637172584957367464716f316752735263334d7442797a6d68584f51656c4a7550364d4b5857485a6c4c66744b616153696750464e494f794d457033653063656d4d526633514e6e6437596462726d4c59714f754e477a6970544550706c58436744415557416b47414a46795456526377374e61676f56665769305a707337665644446d6c355253684d75706c664e725376304c4c6271434536774b504d4142725774596d6e5575612b5a436d6b746c626b7130365334744c5a716d7974616a5972536f48434332314f7a776d4a71596d567275536867684e6b71574659584a3668456f704f6b566961304650757936673073756741706346314b304644476a2f4a5a494d703069706b7546357a79596264394b32564c474175684d724f5331326c6b6f6652625a64596d4e62747153757853785a335467714a64703753534a522b526d6d374951745573367172623751774b55314b536e49786f39702f38495a7468586c6d6a62496361596b6d577768424a47363973374a4561576c544c726d32574a74744c536d424c764f43695856744b75424f5a54524a4d572f4a474a67726c3761745a736c536d56314e414c526361556f7079722b697a52396d546563615030776e5a6966616231726a45744c4f364f644b6a715141335759517259534778687a6a45374e4f57304d32785a43564a65567670536d6772513551773438347657724f736d58516e5653387734327230484f4b615a557536595249725138793675792b77485832725372573834564161744e42655066433277564d416845776f4d73706135714457346c527162346f3662514d6e4b53364c64707a424b6d67756855613772704154366f4d53306d374f7955333642433963476e3170324637657254575854634d5156564d54416d4a2b5652724a3738587449446369335a76556b76576a72314a775043743053327230544c7231727a6a716c4f4f4c7469676c6b4b51556c5a4f3961714d61554d6154306d37704553695a6f53345731354f77354d433943367074433557465947705364725668626a704b735646613362314c4f4b6a452b737952536174566f4b4845562b4554436d5a526d57646d5a6f4e714e4379796e644b6564517168385372456e4c4c6d5a7038625244534b4256674a7a6951544a534d7734354c765072634335747878474f74395130363643457249305a3568526b477255374f50756f533456756d6873744331634c376f573275624c36325831747174314c486d303275427369766a6e2b6930326e6e64487a4b57306a4e5a5162493734636b574e48793071314c666a5761424c5a664f303436796a6e4b4a4e4961527057516d5850384130684b4b576c2f577172656f5779434466576d65554a315430336f365131435a595546704b69355a75775274643049716c63784d4b62624e3662444b37505a78366f594c72794a6172436c6f624530686546704333457232656d6b614d6c3576384b356c78614b4a58744a733749586256614f306d3953752b4554306e706964744b45386d6131614831327652326d564c5433694a527761575157764a33485a7258612f58336c64414535432b364e4774534f6a64634a674a526157377374366f425331472f704e4b31693771355671535332707464446968596f52476a7a3563745a442b724e68742b586542317a4b306a6956624a2f6c43707658376a55793671792f514931514a556d6d324538496353326864664e744777674a4a4b724148717072634d6f6e32555472383372574a64537470657741624a774e6548364d5a5374476a48483948614f5a53517559657345325332324e785a53515675717541367a4231316c453674533558625171666e55716f4563554931684858457345495a51584b7a694e567147334b31496378534655756958594a4b4857704279555662595548556e5a4a4e4b464a543352704852576a6b546f7177696255573364565367516d68545a5434786f79545a30556c477361306a6f7044726f757a55346879304254453076686b54306f6e574c625538486d30744f752b6b57705256626557656f4a68393139354b417a62644e6f305464515677412b5251645635684e6576384179684b6a30577249384154457331335839356843683147436b2b3249506c2b6a30336169614a747048374e32386a714e714a725554352f324f626f32366659795832666f70577130664d53724f6b7039356f4458726243664a7453466e6d714b41414f324e424d364f6e4a665236744a614e55316334306c766154614f38484b336e6a6d49646d476c323061554c45745759556f4e4a73617435617762525459716f7168576f656d706e38597574706155363477327357454a51326d2b32756e7634512f35644e76536957486d30445570525a32436d70326d466770725976695a56715846367854544e476d6c71784333456f41446971383433386d455335445036393359523335784a71576a3132664f70757a324d4f324d526b666c72686c4b6833524f4b6e5a4e503841733039746b44364c6f32766844546d6a5a686431707736795734623470547446424330725a576b4c517442716c535465434350304f67464d32784c734a557630615a6d5466313754532f3765325144784147634c655a3068705057747a4d78504f49314d713037744f3261554b765654574a53304574374c4b7132586c4f4a62746d5a57716731595569354b626a6e476b5867564f716658716a7131564973575163514567376d4638554b527a526c58456a69654a6853514f6b787079546c453177637158657a424137535961524e4c78544d72633131347a54545a42385953704a34697362644c3772694f6d36437768644e6c527566374c4e2f66476c564f673878786b7070395978753548492f4a78673967764d41447056663734614c70576f4953684b4e70616a645241474a34516679744b5672576974645872564665722b72572f702f513637486c5571394c322f563169624e65794764544e737173504e4f4368537273784841784b5444362f77426d6853766868456c7133487951303258457155516b41376f4e526a4530784c4958656b4771334664677668353261586d534c4b42347779706b47344730622b3830683432457242576c4a325855567653716d4d614c537470524e6844737a5236794c6956424353453956596c5049394b4f72625a6266654964595a74716f584461484e6775496c4537626b784d6d334d4f4a7251754f724f665244546b3872724b436163416e474e4849517268744b4e50724b69575768676974516f4b482b554f5536302f474a51656639487470327169317834517471585a463669664f4c732f52536e48716a546b34486c4972725368436b6d756442513037592f436a766b762f4e6a384956726170684c7971576c2f6155706353647564417035584d713172335954636e36745030536f2f3173726236457474495a5639354a673173796a506974634f5543307a4b4c57514b6745315056417336316b57787741504e364354664739534b74716271664f6f4e70793261414a68674943724b456f41705657486a6a44446471794336346f62613365636f3975454d4274616e3074506175354a71436f476e474b44796c7370464d3769676a72464b783948484b476a55594b4e312f58476b6b6a53586f304e4e4a416f6763613431706a4636795145676354446446747a646738663673356a433070557464687670585330592f4d4e65526e726c5646672f752f6f77483870446b305163764b3146366e5a6170472b5a5757364c314c6353497174356d57553470704a7062466f447a646267666646586457646c715a53706839764c4167705066436e6d696162506d794454316f61646d484c7947326b562f64687443464d485753736b6b3269485058645048684275486643664d54445a53717a6a5445456449796958544e364c745769734a5534305236357362534430786f384a65364a6d6f2f644245463864444b3175487754574e484f49747176646d764e31726e35793877557a4d2f5278326c447132745651585a31744c46435963486d576e5a303271377a6c476d38426e56526838744f65574d424432397133567244614372364e56587732706d6274716d557372786264545274396e734e466738344b722b6931324833472f4a32566348582f4e492b385979467754773659795a6c31552f765861526835457042375670686c446950566453484539796f305a492f3932524459534f43525a4136674f53677a7154466974626a574f794664366177346f6456305674692b74636f64734a6c64484e424372565053754c557137506354465554376a345347386b6f516b374a4e63514233316732567468642b473267576b6e7668354d722b45557659646c336e4b367035494238302b6b5a454b7061782f526178747636393148724e4d44344c556d4d6375754c7733354d7966614157372f346f6a6e535531393131722b635a6a35453834354c6d7574615851707163434453716164304f7261714b46784e7837494e6158565669595054325268484348434b4b544c31774931535167302b745746717469635a744b55613371626557666444566c795a30537a4e506a39736f72432b34554562346c47557239704b6148782f526168715a4e704574374c792f504c48616b6f6a4869635947322b377233564845717368412b366d5051687163626639673674525031516d3332514b6a4b456d376b6d472f4a727a724c5173335931556268534a304b48727449573450744a53704d6158532b3863454a5672563953576d522f44574e477a7a3139366c4e43585232362b7961646b42684c6a59587157327175576259737171745154584449436b6441675631534e685072757175516e744d4b74714e56572f5756782b744271776a5443485a727059444838654544616d5138686651336153705237414447366c384c6148374a78412f69722b693675716e33485a69575132504f76705761743262564d47374e536268476b52494e313832334a4951747a367a73774642583155696b6668484f72526d486d35525138475237343071386f744c4b30427070707261556e566e6d6e49784c726d454941516845323434386c49467961494a4b526430526f7158616654656c79575271466739436d7277596e32707958546347394a56532b6e6f544d4e412b497248344d614c564e6d385065553158324b314661784a4c6c5a784c5a64534e6148576e5777624a4c53785374673779534c7169466b55484847485568626e6f302b74546b5545746f535672556f30534570764a4a345261626b314c6463615a56635657514b4f7247536a6175475136345156544b5764637a5339536a4c3752514f4e744250644339584a7a41516a58303245756a61516f384533305630515079344d4a6c794b31434557725a31665176317336435039706b4b2f38416448502f41442f30553648744d616f70626c3274746261316969464f3033453533396b554b37435751726443554932554e4e704736684977534f73347830434d675159784b3748594c6f39714d306d4f67646b62787a67454c5a565962635353464a4578736b44724e49307070473974533649315357306b4b73324370434172786846484453307453793836756d4674785a7152377552774452456f6254726877646361784a2b673263654b6f545a6c577170595451566f623671363432703651665a655179634845305554534a64542b67394c324e63306c506e4a5a355636486b6a49416b67384b6b52704c58365054664b6f5750504d39466f5a5579673255747a7947487839475a426c776e3761306e732f524353745a49626162474c6a6973453530484535432b4e494f4a6272554d53366977304f41716d696c317a744570504347304e4a424e6c4c59736f76787078726e386a38337042595031676c7765436f6d5757576a6774355162424e634e714e49537230776e614c6148554659417a704436536b79624e6c4775466256747746646a4f6f6f4b78367867663164737a4e502b7a45502f77776b5a6733636a2b7259526450546f5542712f3261566672446d65624353316f6c716762534e6e57557755526b6e3155386e4f6d306f2b7969313859786a62554f3648564154444a53485533574c5973326b394b626a44657266576d7a4d4e667133327a5964622b7173456630506a3838634d33704e4e786c5a666d6e397176424876364930646f2b575a77416574764c483172534234513472582b556f6c5a61554c576f533068355345754f464f4a4a43377257486279476e5443696d7739715851514c51493571746f58557637596e47304b6374716143376c727371496f6c417156646b54546b75446775616c6e35644832336d306a786839767943636b323531755a536f617572586d484b45593357593144756e394a73716d504b6c677649596c3642524451466d71425649785461336a66436d70684c31664a5a3656624d75394c7a493268594b6c4b32686b6f58567869545872327065616b4a6d61545254446a7a44776f76694b325453316d626f787241716835436d794f68516f59564e4c6d784c746555367469344f326476654b63346c4a6c715877755745764f41343751746173645654306941686d54627157355669357348316a6d7058456e6b776a45506f643730552b45596e486749476548474451326155396b6777516e522b6c6e425a557137563651436249542f666f5464394a505438705153326b46536c4b754141784a686f5443616c4a6d33616f6c77666f5a7530364b4a5072527046395461543571585958354d32745275467a4a71556e48614a69546c6454613269746842553672707452564c4c4f322f6f314a506b7a7a5976576870764270774464497055347775334c76746f65615636794669304433664f4a734963556b6c7468473238355431552f48434548526d686b48616574666c44677946704a7574634539384b2f46386d62307330724d71546a6853694f3375695453755a62543570365a4964655773595753626b317a70446e3559715a656657752b706d567568784e325654535052504953386a7163466f636a7a6255732b306b544c68785170705779704177556f31494662685152354b7a4c72622f727336567a4479716d324c67556c79315774367853507768305938764e6c795557785836327463493636526f39556c4f4d744c6d4870635753784e4e347572594933746e4f34385962442b6b4e444e7561466e4a56343670533230324b6c424e31746572537046545167784c69556b35566e576f614b6b465963316435585975466a4b383168466c557a3564507342574b45456c396a7470516e70675542536e7445596731485846575a2b556d357158626d30446153674f6c5459574f656d795244646839463978716861446774427a544745596369714e7a4b6457422b30473533786c6c4735532f716a6552746a714d556361576d687853626a554b53704f436b6e4135474861547545724e716f6c4d346e6864636c3863354f65492b51564f7a6978567156617663574d4c5830552f534e304f67684f337145663164752b71646b37362b6c58594245785a736a4941432b453257553074444f74666a4462596b38424e76587330474772536d7956304f504e344b6775547a775661426d364643534c785a6253416755794e4b39507a676a385a7a61697a4b31356c427450554f4e6a33777463784e754b31697737656f712f615a715630594151415a505252525a545459564f4b477a2f684a2b385963734d4e49316a716a6c30646463426e4674456f6a596c5a645233453854394e575a69394966326b6e31483057666846363542306f52783144684b6b487333657a6b6d316f6c58484e572b684e774962535a674b4a34624e6b6a4f73576a4a724b6b747371554b4f4974716f5661736d306c59797a474d66672b784d6f546142524b7961464948724330414556364b316952646c58564f31546f78314a625135617555755874565332735675734b3749306b36784f4753615170365273684c6d424b6e4c5149586a676f5547516a5363784e4d4c5a73716163615a5333636969363670494a745938496d4a354345744f3153314e5057436c4b6433566c5a5451384b523676494c6e48474a745055383171766531472b48584a513949576d332f41416e3543714b474246314f6d4c703843695643344f3039787033774e72786759355161745674494978706d495148355a61647852557531374e6d2b317770416230764a6a30624d793771357850424f7541556c774469622b6d4e476d546e6165686e5853774b2b307046343652476c3948614f5a79386d645338372f69765548334f32476c7672635862573661715374517a636563332b6856564b79684e55454a414f4b616a4551464b5144657065364932705a4459656d3633316233554e6e2b306f6139414d5959664f543570695253386b665355745a7239775161446a434c457a4e7258505070773233396f4a49364530454b474b3578305a37506d3056376255494a6161514c5a47435156554665737771694a7558326637527331486754414e48536d5566546a632f7548736439353545314356576b3078536157616a7372446a6d756151307739656d7736686b46466f55767375447867554147416846616930306f584b51344e3153446b515956615a6c79576d542b785545754d333537437848716e3777704736744a516532364e357955594b2f615567563865543839497642662f414c75383270502f414244482b787a6a4470396c645766657635474562794667703638524732323641734b7974556f5231787456756f4d6f4650705a6738524241567a694f6431664743433659546162344738514768394856684a2b314458656f5135565071444341416e68427168326555686f2f516c30686b6a2f414245712b64454573796a4c4474634173323130376c67774c45694472454e4c764c78395a5830656e4d52707557714b31314b746373455a5755576f5155533945745336466279576d363364704e65324c706c396c4a6d464b2f584c546c3747454f46743574314e6c775a4b7237754d585050494c4c71563474544b6559665a4f4543676d47454f6b6571705142506a647959504e4c53462f54626f6f44744665364d6f79766935744345735548467031316b6663536a776a45593963635956733163734534464773565a3849637031474164544c4e4b6c6776313348696c532f736849377a776a666d5a563143612b73526439364d78583543464c446261336c57636d32786155727345504573473977493356586339485245694c65436e4a65373773544772566d485152436b4c75467944376f49554d654367654268683066535354384956553268637174664742794b734e6f5356754b39524b52556d473745317151354d49475437766e485076452f4f5453586c325676756b58374459744745326b4a57725355304275726357765a6236716d744f416852445a655a44744d32796155373656456672564876326f33544d6f556570727a682f64697571315773562f645855485a472f56532f356a73695944476b304a4463316d3038427536784f5a36636f61314d773074557977316143775a6430383035684b36392f4a365271653870582f59744e713176335651716d48636234637465377768615579733430322b34545561715939486565423159724371685172316a69447768305771454d3272376138714a34635964446b736c68434576633151516d7a62723077664e48666d556e4d5a4e635430376f684953326b575567444c2f574a685153687357796f34414a764a4d5531546a7a69306452566148687959786877686f6c7a537277387365754f715962323232414f4b7874486f4d4c536f6665485a444a4c2f3750476e54415173657061322b364e6179384d61565453505049416f4467727654663378524c786f4c4c6c784a4f56595374506950434a6b634c4b37753631436b4d4e692f574f7173704861634962556e5279464a63537051736d594b54564e6b59324b69704f437372766e53687274495441535535366c6e7a697164744232774f5a4b65396362766b623333556b786b3554374f7a38492f337044662b4a35763478364f577376762f41456e6e425544367154474f4d5955494b5467704f615444757230693072574e436d32307334386253446d496b6e307a41754a6c3231504e713655464e61486f565346744d58616c686c53716c4b6435646f44477037726f4c766b5366367536747661516e48564c415564336d6d4a76586e454e4e425255615a58345162334657796e496341496e706c6c73383174306850644479336e734c6269696f30684163625a435347794b70316a684f315a34696b4955705178435255447368656f44517134584275694b73364f4f2b5463362f544d38453941787a354d636b2f474e34776f4a57382b32794648414678515457504e796d6a32466d69667a626a74416931785669706657496c3754504e6652656e7579696455334b69346931612b374347332b6c615350424553395565714c783242554e36705856536b504253547537735363314f614e773163744e4f73757348693359574c5855714e664d53726f7168666c30306f484b68436e4d52774f4561496c4770684f4479576b3633375a32766e62626a766b6a534a5274706f46777264574e6175796b6459376f7365587a433071656f61706151324e6c46726f7153544339597437656554756b4a6f6467353963645a693576526a58347857654f704e516a36314978387263623747396a34636e5a3178636f5a6a474a35395458716c78524565504b6853702b5159512f4c4c43694c494670616a544f6f54534463637838594d4c73706d5541494f57735153516e72494a6853454d6f54626663634e6b4a554c31465a7970466f614c59755170516f5831332b6350424e39776851372b53383868736c6d733270646d71676c417854584f704553344d7555536f6373373273434c31564f4a706a61787868394c5338773773654b726a44434b6e4678477a612b736d36464b5363716d304953687a6f43374e596c486b714f5368525059633463383364566c577a54704548456242474e4f4268522f453079624d38774e704c527731794f6c756c35357963636f7778487a7358726d6e6a586e70615635386f5430727441646b4e6c4c4653574a5a74586d774467485058706a5746326e436279714756765071335732775366434b4b666d77727974784f46566a563251654361303636782f57464f4b4c76743176356366667933526830516d5863564d797267564c54446862512f5977516851426f735a476e47415264676549343459526a4371447268553272516a63776e616d5657576c4f325471626c622b31536b614f63646b684e764962386d535853684e6169304559584559786f57635249746237726a4b6b43687a6f6f5670784f4547696e6266334546667767374e415365465947506a434c553271544b57676f556253685469617263367156706e4474715a646355745a416f4f6f644148493674424272734b70684471566a39736d2f767967616c5872596f3734516c624b7432743436784736623064503841796a614835705978413659546153352b397a597235526f776844616a7a705a797572783953685432664f7559307466634b787547596b6e2b7a5742732b4b4f535753394f7549446e6b3779664e4d704f414b54764c343177776952595971622f41435a704c4e657579494e6c4c57366b347256773759506e46456c585763666b5964556541354f49674a4d6970616d4a693367454f697a61364b45347754354b464a646c36332b616454624171665672515a7832516d3079712b546c7a6d422b63563135516e386d4e4c4b454570705a4e704b6b6c4f4242774d4e71466d7031726969747856627970536c456b337764596b696d47584255614c506b38306d6166616d664b69326957556873323061757a536c2b7a664575793268656a705a31534561515a657371585736796b56633976506b516863354f545a5963637a6c327969796d3177565547796e4b4d71667a2b53664e4f45424830467175413759516c6157337250314444434c6a61517271794d4c32314a4b6b494e7774694779684437717042394e4b624532765a2b77756c54383677526f2b6158396c736d4d457972617637786876796a336d425644303477306f4831564c414d424b70366174366d315170516b59724e635361335250764f6b354b634e6e36716342475038415131717738322f642b7a5661687772306250532b756b72375162516e46684842434c565539426730572b386958536542634e6e34774c4d73773068744363676841753849397273684e396d7773653478656130687430756f73726244564c5a734c7273326f6c7074755a614d73797a72436a635a533842686c664172532b6b46496663666257384b3762696b4a323346646f4564487966535a3955476c7556543971672f6967437156454b536344306d477a58464e4662505443694e616b6c4b686a5535396b55317a7a4131344631486b624469657851507a6e2f71796154397073694e353974317866384166566f4f784e424343704c627474564d54595354345173715235456b4469504f4c752f6f5256785246423177384751425767326c5858524f456d746c5670482b63455079795a747870702f4f58576930685573665742705643756777716a624d334c757150414963436959764e6b303749425473336a6f354f6b3439454339787177657478784b506a416957577372556c4174584e565561586e49635938342f354f6b4f724f796d30705a736756336163496c777134586f6354444c6a5a2f614a7331366a6e386a4b4d55453050304d6f7775446f36636a47386b685136786643384e726435687568594f725569655a767853384c4c6741344253612f572b6370744e7676796373736355767a43477a37345035517074534a6449784c684750554b786861554f327952484d5557316658764875504c68782b546549394d72634279482b635a6d776e3252473862785469495a5576517a3761486e74556a575053637771354d3032326d3954594b61714177797a69583137457a4a326d71465362316f79705a72594a774d47756b3948684462396358573845756a32686a3078756a446b7776543452525367734f50704848383033323439304944307954756d354350382b6d4a64546c4671437257434c6c5872395544686e413834353531646e6332453041415631347749465152516a6a584b425357745756494f4b437234636e4f354e327a71336532427357437673673159786236654d59554a685a445346496c4a724144796561466b4656636b71736b2f4f637449614d502f414d343143764d797a586b3652306757316550754547696b6c4c6954394a4e34685651346b2f5558694b39735969366e4c3434516b646b4a2b4d647768486d7855746a3169503551545144456541684b474745437944533073395a4d65656c363432516c61656e5a78676c656a5868596d72463664537638366b5a3254663151704c6b764a5459636b33454b744a4d704d306462736e31624b774b38524461457a6158304f4e4f4e2b62644678466d3041646b317642463853363551706d58576b4c525635736f5253696a5368466135634930764c464e4b30316874665a7057473959722f654670734e6f3667627965754b7550326b6a5771336c4b6432696f6e71354736537a4b6e55466554366b556231615032536563656371345851346268515a4144476b4c574343434b472b36466772534c53484f64544d5263773668624948574c49506648433134306a726a6d3154346d4453464b4f6142305a78764a32316e32736f39644d656a64326671556f6e77697634786c4647526e6135764e446679337852586238344f7930374b7a4b76596c33304f713842466f756c2b626151364d78626f41655265726351324670586c617267726f4f634e467478653034326561356d42372f6c4a74687447737030314168586d30333333415567624351484b5a6d6f336c637639615943314d482b7a55525477454e41535534332f414e4b535954364a3142736c394147367042394a787868434657466f585a63516c30477961344b684b42614a565a4351414c38676e43414f527862612b4b5655696564716b56417258434b6c4357576c5076557563434b334a5053704e56486a484f7154384f54306a365179306e36472b6f787a566c586466484148766a6d6d313358783678354e34476f3634785568546836794b63697147776d2f68534b6a5237774572704544424341727a622f3930546639452f4f44517a4d6d2b77443075494b5954616d7070536e6c4657364b33715565694e496c536b68494e47746e414736754f4d576c456e62634f4b7572684870513251766f76325238684a556f2b485359373834336455734472336f4e425557556e4566533749765861705832646e6c6e554e75704c68554c36693034565a524d496d6975777159305576304530777446464a4664787a45494f376b654d42784b47314b625368386564545a5653793442676f5a2f4a556a385853724b33356b4f6d793262374b626651635431513055794d75776d575a4e697a614739634f6142573452686e586f6936587256435469352f6c42325549705a2b6c6e345236525641656f636d617166492f566d4d763452542b4b4f59324c7a676d755862436c5746564a43715753416234423163704e4f796b756f3573706f70492b706173646e7a697447557a4d7169764270314e6e7643596d4e5175366968532b346248472b485632546a565237344858474f425658474d4f4563355152396f776d67336a32596b386d372f6c6a426f774b572b694252416375485253376b5049397135786b326b2b71735a747147595645675a5a656b35564c37696d7956797279716244724c6c3153704e4c53434152342f4933633456526c42736756325079626255366f6335535362494f564932625679523056724779744a436d6d6564304b583849775465657946382b313333434f6f64482f41446a49566a6837343463763673787575454a505554534e33574f4b50314d49516c55302b64537a3674636261766f4a414e727169705a595453307265557052744b57656c524e666e414f70306c4c4c6442793172545262574f79674a363448354f77564d746a695533465a354f772f7a6a77354d6c417876325631377554654639654544446e35714f4f31447136464971326b424f413962474a5275755263322f336f51684b55345551495961556856393642534b797039646b4567644f72757232524c757a32674579636f755864516e38716c6e41336557554253395a5a497446756f4e4c685750534a4b6b7175556e41304e62655663754f4e2f4b43566b30534569704a4f51416832772b343438347555615746656274326b36776a456c52757975684e586851747079627238594e43545373487a727049434f63526e325162386877456335523849395258756a315350434f416a71354d774935366f486e5550574639554a382f4d724d744c715036687265556e32313439587a6c4e644b534c766c636f6d34617732536c544e546872456d6c636a41495a31696c7467697955676d74676a6d6c4f4247522b5232526674697659617865516b696734556a736a4f4f65306d766453454253306c48704d4146476b61684e62747a2f4f464e32565937454e737262546c65676a714d65616d62506f6c4865366c51765636525a5768365863714452316f464e4c2b616f456f4d4d496c4e4b3743744a53714c6d6e304f4b31666c6a46627a357935514f304d2b585354657130664e75507a446a3742466c734e4a736d69726965634443317274504c45747256625851622f565361436d4559516d72685259625236784f454b74486a31384f726b794672764d634349396e786a6879376a642f644871434f6534663355774b483870752f76312f4f6d71455836535a546d503841654150332b2f6b487767434f714f6362506664462f6d6c376564624f48564764776a68472b773564374c6d3050456d4f65305570396f59526a6a384936655130554d44775047462f6c51716c3072566d427371766a567454797078656c4e454f32687671624461674c4a35746d70542f4143686f7450494f7264624f3868784e796b6e6f42776a6579702f6c44674834776d467575797a643679614e36734f6e364f4e304771476b5751654b743558666a47464c52366f33555839776a6a796573506447653147642f644847764c304166474f416935615656565470772b45487a6b693762592f374d2b53704f507171716e7170383646334177332f414e437a696a715032446d4a59367655364f5471354d554b4375362b4f614e59665a46776a4674536b6e3674305952364e38616c58587a50474d6f33645a62523743723078786a6949796a63636341376b32666a43617561784a73336a7a674f735475304f466349637436476e6d664b4a524a4e564d47753277752f46767076695731786c69702b77705151674f4a75515656764974307243725a53536c487136785635732b7944795972506749577444747a563242474d4f345837734f4a567470565443742b454a73527a6d4c583251714f6b523071377a546b7948766a312f6847617834526457714f38556758716b5a74745856615172336a353231724a52394e6c6166454564494f4562585059657051504d6b30432b764a51796a3275583957795075442b5a6a395a2b39667947684142423451726241734f675a4c48382f6a43617574334b534c37614d715263724568517053456b39516857705970666d6f707a6f4d6f534e5542595168506a58704d477157623346635865485a45764d4e61536b356c6d564d3247564b5a636c4a68335669305264625955764431596c714e4762456d39704e4664536b5741346b6673314b4467787571627349486b775a6242734c4f516f4c64656b77386c593432684330304146546147634f7472462b44674f39742f474e303348716a30685673396b4f573761413561396f3070482b344c4832762f77436f79456570795a6e3352786a6d586438595267784971742b334e4c53522f77414d2f504150786c4c31656b3163565a746d75532f6666463345474f42392f4a7750762f796a4e5950335248474f45433032626e555a48713652446c73633463355057506a4374314665364e30692b4e3950757a385241747668356c6e5757536f4a537044717a71694c315573646b4b57786f744b6c3235684e366e5635686b34472f46654843473235567078716a546a5366527643696b4f2f53556c514237495959457a704a2f577a55736736356c4931534a657a744461425369706870727964395347583556787657574561314a5575584a766f4d624757555438693873706d716f41655461435856626f5567455550476d46304e68765962516b416e616f326c504f5051597a68646d4d62685434786945705033524742535548744e49356d7a483066647938592f5749393066526a664d797a4b48715961446e2f4149767a31464a4853424b6c55356b31696f6658337575764a2f7138786a66377a484d616142363656354f48497054626c626c497537343162746271754a6f622b6c4d4e4d3176794d4f454a5554577a647647736151664f6a46544c536e72616c4c415a4c626f565a2b6a6543657145424f72545a3833636b49395564484a2f72756a584a516c626c6d7771695155304f32452f36347774386f5a5355457572714e59706131713938594a6f44375a7835636a58756a49326535524d6573453979625838556672536e776a4e52384f58316a376f395a50756a4d56376f2f5036536d6c2f345a314838487a31436254533564786f6b56737231795556485451306a6a48524171323034366669504577617257674c4a3653547963506c656c614257327632727151484a7252424a6f306d6d74597a4770725155346f4e33434a78443871713630336b6362436762307136446646735562714c4b6256354e416e6f687474704b685233556a5a4652513036387a413835554b7230692b4e395331452b2f34387564305937353972412b456358462f5a4e6d505756377a7964584a3679666447625950324e6d4f63564a376c57506a482b2b7a2f4150384155722b656a2b745437445032617666775278484a6b6f4b37785434522b7154377a796572794955514c79514d506b4463494a396e4f4c325a684f75534f7534784e367453674e594e6c6254794d5148456d342b385155366e796443485132684e53724f2f49567968674a7269584466586f68354b6250304371484c56456a494a7869734d713859545a414e6b3973637852633778534d6d796c50766a3169652b2b4d6f7a763550556a6e576b6439306378524866483575666d302f6258726634766e76506e79353968705366346f7a2f414a636e3673652b503161666565586348704f67634f324657556a644854486f6c436f723478787976354d2b474d56576e655170536972727568434c3774305169746274684f4d4e6876506275384965507075614b59624549725a7a4e2b516a424b5033722f3465544865336f2f4f416a3678766a63444970326c56597948766a723565646433786b7348756a383273722b4d596a5364727355773250683839395764502f436a2f41455658386e3045652b4f436664795763596d6454724f44566f6b6a436c38544534654a4253304f304e5877452b6b3369536f6d764731457574516f62774e6e7668535730344768744837734c587371556767624f463966644571435436354b364f6a7234784c4e4e6c4e344953497154776a5a5042634c744f4651325562575549473071337464304f55746e424d4b50664755666d33666474527a6a596a6e4b50684856386a3276474d46495144314a466d4c6e484a65576553503746536b4b2f66487a336d796a792f7472412f686a4f702b4877354f6571333850684241745061712f4b6d7a4351344d724b762f414c6f6b58624a5651376f75726c574e55773045456254676f6c4b66597a695956617056734d38366e74524c3332777043334c315634386e4e5661724477734c536d316657394f7966434572585861545a4850454e556677716f316f73657a6a4470526c5a514c5062435361626c72694d342f4e43314858794956434664304a32535239335a6a3833543753425a5068482b722f414a505051524759633844467a633268325365726b566f31696539534238392f3671623858584f54474e317449413630782b7374487674513831396f52504e71577051716c473368374d4a64574d5632685a425052434570707333314f5051596d536e3241452b364a78373752676c52566d713833636d4949563351326f6f6370556758416e6a42616f4c7855576a436c2f5641544671327461576b625751764d57746f6f475045776d2f6c33306b4676736a64554e596858546752484d6449487369702b546e62486a4836317a33522f584a64354579782f61746d306e78454b745337375348326a7851344c515064383879305a4c2f385230386d52743931385a374d5a446b79763768474d4a4f49756954642f77414d6a78684b45444f326f59524d43355154734a726a436c4b37516d45626543696279436b32565269693736716f394b6d372b556349636f6c7356563753386643465769464652732f59454a37385958384955714671744338646b446162526252304a5038414c434f634c2b78492b547856373435327358396f576668484f5661762b6949555376523736354f707a626f48572b354b37505a38382f4e5363756a774b2f6a7959714961485a6559396577507133712b456571456647476d6a56314171556a4d784b74704b6a56586d774c4b5275776b64776a3959462f5a466551513468427062323143757a6643716e696c4a4d4e6b685372597264694144444b4b55493749644356684e31684f5236346d585451566f646d74505a6a4d7831664a34687058557638412f59523949655079656d4d4579684a366a663841475052684e4578514e7a5571616364624b71752b30685a505a3838396468503257477847386f6849367a64472b6e7a53656c527a376359394731357364664f3859565a5163614373544c6d796f486570684530345671754e5457364876756a2b5550717449436a674f64644532756e585a68313166576f386e4e4e6e6c786277366a484f494866386e6548756a474d456f4a375159336a66386e47676a4155536e367072475a4a6755506c3744532b7036737172392f35357a74497a4948556c77704867494f35636e727a69367a56444936546e474e65547235637950442f6e386a6e44336375657965324d4c53666b595269636668795957785a2b746a2b37795a63755a7048363048374d66536a6d674937726f356b2f4b71376e6b78782b64594a46727567315574496355667047382b4a6a476c4439612b4e317635576454386a6d6d6e66386a6d6f736e742b566c63597a71763671646e6b7a7835665748766a6d4955723756305a425076354f64704752482f78302f77424c2f3851414b68414141514d4441675545417745424141414141414141415141524954464255574678454343426b614577514c4877776448683856442f326741494151454141543868396d3374572f357a424d457754424d457754424e364a2f344c63304b4577544a6b33736a2f7741642b4c703034554a6b33726e2f414954386743675868426d535333495557434b70724674776d69496d7730434e47586659796d785467677831523052736b4b6b466348546979623157523973334f2f4e536c336d48784c714c2f774270486338494e6c413166595a4872594431454367344656454743596d6d454a39534a3957374345524a304f72755768454d7978316b73384a686b7766735a6c79333661384754656f33766d34455168393641462b714f5145594f377670574244595368676335367a7747586c7a437168626652674767517832526c706d65524e625333594350594832726358344d6d354350317747725048527159755253535867587142526c4c465467395067685048784954384f66684e6738496e4b2b636a355561356b3156467355495a437057794f7655374b70454f5a76535074674f63456d39307538746964776d45663869494755416a614951416c504b586b752b713051746e4d375643434d7a646358682b5455493242766757515a4945452b6c79483978366959694f3042654b685757715149525a72675a57726a714a584d674943764c336c4333316e42656567546378392b2f507077477842654c4b495a3441534d4c495365756842617552654a62574a5647526352566b456e42414141756c486d6a425141356b6f77476a3744566f4451584a41494f4a613447774c52434a5530383047564d3451556b577354616e3262654a4368544744475a4949584142636f4c494d5a56384237314342655844705778344c455a4777416f76794636566a4f5645433643506d43764143375171476f6f6e485743623339614433516e3672334a686e6e36345465775071446c41542b6a6e4d795268614f5643617347777048315541454941353975614e43484c4144306b396b2f6347495945536179636b715242416b474846335277424f6a4b544533456f356877466b77784734344938703133714e494b702f7743667254415259524e72386a596172717832546f7457556d796e7653695746493167446f49473930524b50584135694144474c615162584436422b634c43564a686b51634a387751576b45414b6e71386d344e5267634d62644e79507a74794833444c51684d68354b6455325a6b674d3255553656436c594d556a5a6b7554746d572f59484944636969554a6b41434751574c6750533650525a6f784e446859396a4b7650666f34776a454f7452514d78594c76635a617545446841682f4a564f3434434430657254723779594b66697774415542514b396b7646597937444b4271597641666e507741682b7a5a6743515a494b4d66782f48347344647a71716546393533516f66726d5044766d76496e63424439482f61526570743531514f62765131626f436b752f4c4e3763656b334b512f58484e4933544450524953304a6b345647744d5a77395978306f71534e425a6c3844594f6b4731496768757a424b6a71646d684f4f616d794d6f304266764934704744356963426d584c5369644c3434412b5a393050516f63416a4a636d4848314a346d365746774d4b795457434c4179417a55643061596c514f50616f573143716e30726450445759523773754341704445422b704658493575364f444d5334755434635031515a72552b714f552b67423742326e43386347543733376a6d45556f5073564b39352b456c685230396565446f6b69754e5543794d6d4c78794b525766463065536a725577524f5846616951425973363235494a6e446b624a44495a4179554376677a454a6d4b4841354b2f7168326846796a363251512b69422b6f58554f4275562b42736e676f674d6f39527032584d4c47795646737047366a31703152395379626b50724e364a67464e68504650525163724a527a46484f79496956696b794c4f4673332b4932516845585636327673674968546f43656d575532785366645a5674636e4156684535537170456937486f69476d6b3236356151736c6542546f695553696a716934453671344e44495052436c416751586a5a434935324744614e48676a53364459385379753336346842315769747a41632b3148737231652f4b4957416c6b4b455670796b4d6e4c4d4e3056452b7967486432777579796945754a6a784e576e6977346f42414749647a3877454844576b435477796f4e615173503152436878593777556573795975593457356f46427546544b7572334a70565844684e482b3679444a423631447030584353774655424e2f425030425850574a2f4a507578674557544236414c7068524466496275426e5935443668394d6570356d6f446a336e517768526871667774784542636c6a7a626f465443536f4c39576b4d6b7742674f6c484e45355a7564736c36674673356c7167494e657a3570546742436e67695135716e4f496c3054597441634733306758466b31683039396547624241436738684a70564167685561764e6a724b6f553856794a717a6f2f6b544153414e36357842504e577a41314671584973627841576f453877746b71472b33316475794f3942327176577432637875553835357a7748724f326857614a55674743364641453535763550424d6e493444636b514e56354779684933627a4b4e6b493345496f4443777a52686176765a766f4b41514f304a42486d78775271383555446336716c454843364835564b5445356f744a73543972324b3971774a42756a556b456a427430476b355a6f4949536c476f52705a4355584a532b6c6c62307a364139594a73594b796e4d69716e42415043584c4b5749674a797375534155664338514b67706847676763516456797158754d6d37664a4d7554447748714e51553436524e3577454234637a4b7033353149326a4e6f4751467a4f744376597a596453724f78736c787443434243514e7a37344e6b4175516746466a6355457a63653466594c4555487965776753414f7430493361476d467856427659676559653045334a354f64374b4c5a494a78446170584a4f59456f4e6b7a494e47532f6c383336436d354c46414c515477696930534e595161365945675475764a39464f456934496c4535784a43684c686951343767425073742b452f4557556169526773556d6935492b6d78686b477132526c69427a6652457452425733704e7948674b637051346a324a446d6d5a6a593364416b33426853505261443461723775756b3358507878646e597357726a7567742b50347a476f5351676f53377557554d2b736a797455736d7841636f6b4a7047614f644e75447767504a6f6f3134592f53304548454c555035554f436661722b4e3745493834346e6c487045563062497168477a5a3158646348536f44527346474943614d495142456d6b63734858796d424c4f69696e657453714e466d2f75415177384b37517144334141683930456f673977594a754c55535433675235415474594e53413842442f593532514e4d49645a6e4b336d4a547262344873462f517837446645634d444a3745415475507154364235523747734a676f613948597746516863514f7a6152654876583341706a5a6950497139675573736b726e534858597168683367482b413449746832544e646c72465072485962714a3139534c6338486b7978537568787577595747456b45734b46675471736e6f514769627a626344545067784d43415654394b4149445a442b7a454673574e787356304b675766594c365751554a305232426e544947655459514670726250322f4431447850455539414a2f5732512b644e4959594b416e4951677a787659477a674b754b6a69746e657a4b754637415742462f526c41305030495564534b455a39597a6666565477436259455365316b6e4e55525649316e516d6742475a44446131316167786852412f384170627969693077693751454c426b52564470466a62544c416469724e476b4d58764348725141323549372f5363516e622b7859534b43507175687a6c526a4d3179476f4874355138576b6556564b7367524836474d533634744a574c717257742b453850516d436f646d56306b3059554749445567594750557743794a723874413734534b4467683034422b6f596b51306c314a775145513559446f68325169446f3378445953674547503670385a4a5861686b455439686f4b71334a7056554259555761796a69384352436e6e514337363839476a4767774d554a694b38447948676655504f6438314a347a3261524b6a5361655551457a4d6b627666697a454736774955687169737148516a6c4e46785a795157514566466a5a6d524b655956704a6d476445464f67484538656970376f7a6772464b4a5a5a36416a67492b68776451615967553942794231564d414646576f5248504661364a3262614843396f714c4b6a577173414c48534e2b6f6f4574674d657373684a68656c3062517052364831466d425967484c6851677241457a5a305242564230556a525963774573585a6d6335426f4167596f774d7173417a4f354530784a635667466752374a773834537144534e78386f432b36566a644141342b76644d2b784767507169523544374d5042422f5a50354a536b3456597735564c576c5331575a79386f65334d68786f4e58466b4b2b3059436947773043324d7676316a6755316a384e666f7377425146744b722f5a416f6464675156627656446147346a6243316e324865474377747853736252704c7a596a31617972682f466e4a70724e6b6f66705238486768644f5249324b6f586f614f594a75386d7056397252422f356c4a6335684f4375706a476f6738556247732f365879434b794548494a6c4330682b5145736946614d494338327977714f545170514b42575564654e4176342f4743515a337951466747376655746d3642794c50307948505164554e7466465338475651324d7944414441303451665a694f775131536e2f4e34704478764165425239416352796a6a51323542726a55446f47515147526a70724c455a417353414271724a4f497661515065656d784b67584d74636d52556b7450664c3049514134366b5352455a6453395163376c413543656c5564365472375567724f6a4a4d31676732324f686e7451496b596a6e52677573323452456c544c35336f6d524e557269496c6f42692f43694c754b3646677138357a334239694f4e7636396771416f4d78614e6752585661713557617847507a39304157364d30485939784332784645453162496b424977457078444a46495834704479736e7842354a6b71414e7164536f466a6e514c513252684c754141756b676b6c70506741614f3156564e54514e7576534d79735552332b69786f4849356c41336a6d49324e4143665245447051554e437545796f734f6e4f3765454c524541414159494441484b5566514845636f3437426b75614973635643516c676d6336677175693430476a3475646e6a357a697a382f594273676f48595270482b4b6767565a517944425235376a505542493873666a4d68786f5a79523762614c47796576615177386f694d336e464847384175796b504459414b48466d724b51594152516e4545414f7953486f6c7374542b704167687741447a755479426a414c43554737467449546b6769374441584945705131646a7142573658594541686b56485948625253317530685874494f78636b55685161694848786349584957595170393677642f7836387852394733416568614a733130596f6b574942523267335362774a68462f544d684d6d6a2f53376950474a4c38766d68474743505974764748594f7677572f755879335730615a68725143527367304b37322f336c474939722f6c4545314964694835676a48303351687955417157456f506a7763423745573664715149582b4358334c55474639333348784a745844367a564d6767315357467968562b50394b51675a726f68334f70536636487a55356f4631462f524867506d35422b53415843585746415a746452525478756941554259715942617166324c6c50435a4276573349694e756246486a6267655333416335574172446753324c7745306e617279587141617a7255617251392b4f6b4c36707a2f5a4344594c792b4a4458412f317a747847475742736c324f354d4c444268624c52644f54784d7a38455a776b365a67754f2b2b366e6c6d4c34454842514b674f787371655649626b473442494478454442327268414f7041436f6539316f524e515555513241355a516d78684344632f463070566935694652595a4a51384d57694e73674362784d4c52387a75616442494a55434f7445614932356969637145537330424a6b394264644239776a45306b304e6d6579444e517a2b71456441556f2f5045326b3053444c31765472412b315361534f574f4b432f464237364e3255632b6b64716f39427737726d4246486c504563527a7470726a732f3364506e4659334f68364235564d5571794876377172314d50397244716e4a41614962707230465741396b45534f394a735150375554664f745633616161576a46344a783761795164736a6c6257674b55436248414f366f4b683642756a6b754f6956465543306877464561414b61384a542b6965332b636d68502b456362614530794a70415575475162435a374148684169682f4951753550514741706b72734243577a6f424a46663454344643494a6b39786d3467424a34524875546a75716756744a3335304534685754575a54666866344f79466c6333684b42674e6a65796472626b34517263454739786d316653506c3642394563527a6d70302f595372754172446d6a3672694f34544a6e5a474d63714442657653714d3464796772483165382f7752546c414f347377556164666a634f71496875596741693455586d614f4d4d56336656777276775a4234524e564266794271394330476e4f4651754a4275372f5a41444d6b664b696f38772f73796d354d695547596c7161445a4f4b6d57705274615230636348674d49715245356a474b735859457933514c2f705552664a2f7744536b4f756d456c745535776d543041497950475343414e5143654c446c514642476d4656446541796864615757506b424145494a687755494d763642354477504d4f5956436a664469733231625271596d4b6a4a66776f39473742386441764b6f4d6e674e55332b394f36473267382f685838714b57362b776a744e2f71716b56344e6e6f516b6766735278686b394c4a305867536a67454d5634516b6a666b614b6f4f6f71485a41442b684a4c5a6766514a692f555357382b6d4947647a684468706d79475a55613476464b633132356e3951524e4b472b5350586a694352414a794f4f4d7953783051684949515358414e546f546650706b5a394a5159464f414f37754359535a777572364f75536430564641696a486d674934594f33323154754a7a4356422f436836423544367a523137396f376f4c49332b43464949774a4a32513956362b71483356412f38413965385345474b6336494841366f2b487a625664313541534348736448366248414c543245445878426f576c734c6149374163617746323971617177706c5253572b4944515568436f5a6e46695767527a676b46512f434b546b696d31464d7a46534a75574367783130577279475977423057776451317a6c425a484138754a45324f7a386c434557344e436175764949687941356169362f61716477515242786f7159514f36506e734256754b4f716c444b774f3649316e6255526f4e676e67552b6d665748567a4530717838596345424d554342445a3646546547525a63423442314c4233355778454e45775a746c7954364574516a7767726348437143505a53514b506a796f476b466b7a72714c434a51586b51396b44324a344451447171692b5863735a376754324546472f56497849426c4351763079692b6868303434414a4d714670516f5a6c716c7079497072546a457767474e6d45566f4a41684f7068634338706c6949494b36436c55436f466f56384b58516f427272544e4357526b4451444f632b79314853554c73636171494e4d5a73524f685463446c5775345665514469335368384a4242695755542f4145655070496f534f645279416d4a4d3243344639645732674245416a557459426b4e3546546c49544a646479736c42696a366c5348314544446b6351414d63496a595a4578413331434c4948467a41636f4f2b537172504f794f6748393233414643456b4c4c4c6772456272542b536678585a6c4466417073466c4d776a666f496b4b732b784c545139416577724e682f5a516b30376168336f364c505871612f345a752f4a5645794b412f77444152424675756e466771562f516a4d506478376f456f6a7a6d6e4c743657475479664f63424f324f444c45414f774e494e38457168434f4647496e4133357459736d4132674b5a52414d78514f314a5043686c3977744c4569673278676a33416d454b455651693862777341727149417550736e6941306251594f3351475777364e32726766576f4b684f354251675035324151553945614136766e4a735030543068335544415439624143432b473536494a752f4b6551383434486d6b464f78475130704e536b4e486f5946524f714d42422f42714a45417a68594e7842436c455a484e77546a2b695565633942434a2b3734306f506331593445434c68414e755867445a48546345477356474443435669336141614f386c472b6f6436586e326b7045544a4955527a6e50676c374d3767764352554648484d32747437434f454b43357a323679475a494a4f344936735941454f76537668432f48532b53454a61514b4753474377474247696955493449306653545a714a36336c454b59334457527745436a67683373395a5641326f52427875374343516c2f685949327a4633522b3630436f466f38755972437237446c504d654934446b48494179416446462b47655176394368413464506c474d3243624335516b6c4f38554a38755550617166524c6a59432f6442627246646a59416d35485461506b472f4465696662306c744d50734544756b32573867786d4d43766777636f69495651726d3341426943614a6732612b6e68356c644756453532752b367a3154676a4f6b494f524259355177666455522b47763872386a476e32457263544a5671425546687371494f68524f4547314a4138727a5656584a6a51794a7a5139596a667242464b67385479486c507036426648444435543759474d37666241536a447a6d75694f554932357a4754573042686435416c773871684f694165536a524b2f30674b42384155396f573142625a5032754d43776b44384b4b424e566970514637502f44672b7769585942526739665a434f474e32614b78335145624d6775426451497a5a4463547a78414958457a755761714f6154424f797757507858435367516431554a74734e6d67674d62776d6875745a63564b613668415342716966346b516f647838494b676f6e5157774138306c51423857486734495a374459386a73717939684a436e65635835543651516767366f4d69475646364948377a57673254384b656c316431432b57357775436d444d624151776954745a556a424378647351494b4d47515335596866774c6c4274434c4946626c4c622f6159657470314856585178455377344b68684941765752646b516844664675374a4b67687468324c38516f6f6d545643493270614d31455567444159414f774735622f686435364d5a5343422f55704b6e454c72526a424d364a4e646a7358666a765868766c477147654c394a4f6a7369326f4e7a46556b6b4a4e2f7943493839436f4b4e5649754239746f38636d4254676a514355715431786d4779693945354141324e7842624673334c56565a70466443716f5643354f792f6441594a6a44536851744b376a4c39464462535154576438454c592f4e6d536f67553847304955464a44397536684150683232526b414341756956415865683065797a684d566a6c4e5169513744674b454968594e49554a416c584732574357383730534730574137346c4143326747446f36486477337046676d52622b59706a7967576f705a674e4a484c684667573364417a5a35546d6c424256586262477845417836473378666b504b665648314d46515a48536d55494369714e762f7744764a78314d36305442415178736830496d6b63524556704e68454b626e6f594b4339724748577162684259624963595043556770305a4c4335784b7743314f513755784873464645696b62443569557774516b45334e6143376e4b704a47594c59553053465149685749562b7668486c517638576f785a30716a626d4f6557396743456b5141676c736b4c53563541386b5a4d345a55306f4259776c4e4a5946383775453054587a59716e445a345771303779546d71447967313668446f693048756a6d7a7a486b4870524170766f747567466b49757048645742682f7955502b5155417a304b61414b6f3069674879524753766b6968494f415972666731494e3838666e386c6f4a42646b4875664647325a43596c7a42775155364541424f425545364149507330572f4c54524264445367314e4f304242494d4a63774f4a4a7331536f4836364a38674d6f3631745846676a4455514f46544e37696d7a4941385a56456757676f472b725349476d344343544b6d46474b4170725a427a446c334b306a4939465549344249767938476e4d6658494241414a416767634547784366414a4d37587861376f57524445705a435969374c39716a3078563168486c56593444582b4368754a59445336744b2f77424c364b476f54396c685958304369383738496d4d6a797273674b415651786850424551514f594a536b714d633536303861616f41514550473048556d4e416e6b394e4e5930764f71445870644f5171314559704e53337552464d57523355567368442f73494f6d714d766f4335553675676b37415348596d685244415744554348414130352b4551696b444f683336456652484f44784169742f4e584f303472464848614259736d4c527953464a44476e2b5551376443767575422f6c524e6351373046396b5137424171514c75746159536875646948755876435642646c57345266687569685150473856576545794a6e35424674325349776b6d6c3173396f5159456142504c6636646f744642414a773277484a36653049625a715178756138696f4951434561616747374551714b5a6f5533677243422f6567674f7031347277755a5261572b633450326839565659527552345964495152574734646b33594d764a3258346e6966514870536657497354724f4e474a4977784e7368376a6f6d7439484c38366758365152704f412f4c68514f557943674f664351683561675975454b764d47744746684a413246474f55766b314b58526e397973557051625465503031516d4d524f536b5677586d457567344247686b79426d75433749717731346d6a546a6c505151652f7a2b62514a534c76694a523736365568784c766e717071424c4a6e44416f493953726f674f726c4e6c423363456543563561385277557a32695856447462616f72382b4a50453853665a2f4b4c422f7744737750444b6a3246384b4f7872645879683649736e30645536316536474572694875454b7a434136574e52475943356845434d5754666d6149353245497877564246415a685268735141694b637a71795947656a7568454152663871413473677452634374362b714865782f54726357694e334676345849766f744831516443642f77446d49304930344b5344393370784e7379472b6a79704c65694f5565672f416c684c6e5767534b3756416b5a496166424f3669426d456d714d437748776a3871486967494f2b46645353413758724c526e567562696349634b493031575668674664676f3979324549554579613665787a714d3971554237524a365a7853692b6853677145377172776f34674a5935686664434e574954326f6b53575a7a7951687441543868355436376f67647a6e6f4534704f7950634a73556a5273506c6669517568784b6f6342636f4a334a676453674d5452424535675a512b714f426c696762684d41423745726a51516d646f396836794949764a733549725177686b3236656b35337843446741455357624b5049436872475156744b3258542f41436d7571665737496c707750786b6269793161674f315150726d5a5a374b495734507948327a46796a69554e493863424b554151483449744430616579434537524e63414f307a4a596d697252444b374c756e556d646f4855776e4a416c4e445344364a324165525443656341636c5a416146564947386b576c6963647564566137674a59616430426955746e324a5267456b4769427a4746556f396b543248776e53676d39425757426a4d3866557a346b582b6835306475386555796e2b6d33432f496659507a69772f6b676a4e647632454531742f4d545077704e6b3241596736517046716e4b5548384146305a2b535250494f7079704563394964366967505152795771477465462b77306b46797a345155674b73655352686b5232774146536d6b52494562765a4f635151713461616b4a57476167575275646464444a4f33613830366a485a3150396f456648394143443251646b39726b4552784e6c4c3068554655333548396b2f4e6d7856516e686b314a457a33734369364c4a2b47466a45484f306b464e6d4a4241376f4b4c426b6b44727146644f776743764a423141517445734f55415a6953574b495367474f686e6c456854575a3953684758777851372b69444a615a3052773249753448646c64547a674d3246642f31536777644235464572566b5a594136726162685469315541554e697450456f665a526b4b5341704263514f32676a6b4e2f61446c2b797264584e6b484a414677415839745a4341584142786a51494a41754542794643683646466a78735869534c61774b6b52702b48714c777451674236525979686a35516a4264485049592b53644f3466776539465949344853756d4d506450773432446743684d69794e42447736485654644678734a30626f525572616a707154525636436a6b4b505253464372437067514845446979376f6761454c4d7a6255754239772f427a44335a593162634661304965595545484b324f4b56434544394a38684f37777a2b45417879514d6c3052795255436d56464e70336f665176366f734f764c52494b744569796a4a334b6e634f6854425849434f6c3538496434524e41714a6e6139344348514541773475434a6f4d6450773463464369756179522f6d5254386b75712f58796872434e347068664f41784979696f6e6c586a424e6b374465374834624b394a583451672f4a5562422b675a517066634643417964554d6969624e6b7a2b3842514c444a796f43346d613551565246434b635a42746f4842516d476b765654666453616f4e526b6c7934536c76714d70425459536d5647496969414c4153584a5977436a4e666277776b70776372597541376846454a336a454641617164446a33684137434336697650393273516f396d456a2f615579734667397964506f554d5433547a7157525450436a75672b45416f6a4155765549444a6870776445543770523154414943665770507a344768656e4949536f414f424149494e45366649456d32784f5366304845464c35794e447847515167434d7143734348534272517945454d6274647739417044452b36456c6b51325549466a4348656630516d6477615a7049476c78366f7770463171544a6c7579664a4c2b59475066514f6c42435155764546453445376941684b6f6f757861714456714435454e526c564469615450635658582b346a304946355832442f374b416e37324a724239304741355a6a4c58576f6c5348544959343970524754436271685a4868594a326e484673756762384f2b434345686a524545496f61726f3458346734584446475144312f6754414f3467306939553053614b422f3270794c56567748436f69744b3933576650366e2f3851414b6841424141494341514d45415151444151454141414141415141524954464255574678454343426b61457773634877514e48783456442f3267414941514541415438512f77414f6b432f38522f3841696771412b7076395771714f7630422f3841334b77332b67766a4c5333705a4c4a5a4c50306166576e2f4f425836593336576c4a335052534f4c2b755065622f41464466754e7748395172674d7a4d49625739674877434f675679636e494b4f7a4473546638536e496953667a67724d723034574c67367945656a35634134544a73395043556c4d6465746e364666384562393149622f544e3078756549493361304c4e67356d5856504d65443051357332686539416c4465336c4e5a53735970464c494c44473479636b72437530746e73766f716559526d5933747355654742334e33687a3968495349532f77445031304363324f51345856563859524e5070574f524b665a5a2f6c6775472f65623956456f54304942484c6173355969446953617a4c5a6b71302f63345550446330684757682b3369554f5a5a615a35766d53587453384855715033496d6c797549366f506a3036646655763274556e734e2b38663451582b67455539673449314f79736f3466436b576a5359775868664635776c716a7972306a59697a704c47786443554d73696b5933674d7953744a2b584b5854325641647a456a512f572b426b474266374858375630656e564c374576327250576e31482b41462b386f39517231636c6c715337426e6659494a2f306c4d72525a7539356c4b6f702b344e6d6c6f3870514e4452555544355841537466336f75627068384d536144474e4d644c6867454631486e63767a346f4f425163525a455a33692b35547069316e7a35384d73487178502b734154476f4670637136515973626d4b336f544a5a48326f53507871574c697169435068485874464d7039546675646672472f6146796a314776616f79452f32746265624b46586c4b43316267444b77557879436255364636474a512f714667474c6a344a7a6d6d544d4f4f776d424145586c6f666a754539727a75364f2b5656646d4e6c435167634f58396f6d74753545626e51547344504b4c6c2f734b4a78704c4856664a56782f38784d774968354933746c45704461634c65735849614d7441564733456d36784938574b68595073627a78574a5235626a4f2f70756c632b336f374d37326e5063777041343930477950734e2b3466726e554e536a4c374272326449436f47324458504955586b334a75415335366a3749414577313356786e73625744674d75434842696a684e74706a7a764e73466c716c534252616c5675736a6369356b427155455376596b436c785851327742655a6a5a7279316f72575277556d44775246354c6a543856343558474d4850564d6879566d50782b4279725943694c2f6c79537a7961734341424266534b77322b5732676b4f6c6a77664a4d396230516131545863304d50704e734a3133684163484831576f39543742592f514f7651332b6e4e2b687632472f3051686d3454657834594c47317a6c6e753832594d654556456b6746725541746175554a32675255733057417245514e3169667230317247576432493749303443546378613969467976416171713655676f58694d526c57536738706154797a43315954486e57317a2f416f474c47762f774364773361555a51524b6f2f756b5a4846745645326e356d6152366a58575770756c49566e696b68744d7378387365534c71377857517050756732614c524746704674466b574e61785a4659346a3234324153505265594871536f2b614d4c38392b3066513667334855646570754f76523148582b414e2b707231552b6c6e70746f67432f335652434535534271745a4a376d45577938487548526b77357449533054427457704d7664634f6f32694573754275384e4256553665365a7346426248764f767a454451673979775669425142686c6c394176714a6e5459796d336242644d6f4e6373596d745270717945424f7263355135536e79776c5a6f4f575a3249466d473868557159644562776e69463671566a695037354849774f6e4e3450674e484d783175696b46327951354a5371675a5159536d387831366a63532f523142754f76615450366e6b39446671623954583642615053466c44694d4a4e5944696e515a4b56535a467734726773756c5177764c4d4c4d4546544638686b56776a525745584767704964776834326f374372556c507477393671425452764444504c4f79377066387870705a39626363376c4d4762304b5842623073503368577155344e6b38303939592f4b4446716379596d3452772b506d5732454e72612f6e5743536c37342b75596c57756970666652415a554368565134356c57616c5853385a497058523667384e43424c457a44666f4e784c39727231505164656f393576326d2f512f524f336e41754e777554396635614f4b5866446634364e5673644b564673474a6335506a31765453643374435065626b507373374c375546477247323471325071726d386d627137537554317741433658555736686a697958365379786e784664583843563763796c64614e6d4a7049754b682f6939484a4d6e7047574c634c4231334c6c48566d667230666c64304757684f494256683948627863336d4966494748464b3974494735757a795935674966494d4a364463532f633768754f34363958583659333648705a2b6a572b745961316e573957396a49785a48425a516b7262416959613149536b6f33434c7452563255657079797169574d71357234476f57346746334d5762683576386b77336f4f31735945476c42426774436174665a7078306761734c5341384b4f35666759517a593751626f5a5a656e794b747541426f4f714a4b633757722f712b7375546d6f2b41793859714b394b55646f4143717659797877387655385a6678755a76484e6d72385966694f394a734a5a644e32696749343778584358542b4144645061646e7547794a6e30642b3662394466744648754f49466532726c565473712f4b52764354636c7472544532584a6f4d4177666a4475556c384c443962746b47627246795a6364306f752b3168306a514141796b5938766479386169735a584a684170646a4f4c464463454e4a4874677a3551356c316c743356715357564a425272426168557061534448575051783145705067767132566a527a464e755073437470735236434668526c2b4746765944744871476346793449395a484f6f50494c783757637238595236325034464e546e67702f69584a4333596455636f4666645437673348587136396f50634648764376666c58344749396549365763775a744d45356953554d646f3359362f4151747676424f79582b374e4e3630427534326d5555314963556438514e4272354431466d514671727678506475307048305070563243662f3841466f46416e484141646b7872764e4d69355554585a49375975434d3572516f4a6f365866566c51485673486a765a7a35416f574a74594a35434766727471336e372f537558717969504d47794f34363952366d2f614b397878417233375a614f5742446332685438354b303538542f584f62754d492f527372775431375154706254356b6238777938345648725552576d41574e6c6e624b4842316b2f774170387656754e4137464d686637574245686f79424c624641747a6f6b7444672b3357782b4e455654565759504d6a6a47565a554e544e61666e72633757302b4b7357696a6a7746536d7349477767327442514e4b2b5556664a4c49304378674768435947736d306b564e77743276365631376159623968314858707739706c43616f3977562b67374a6c4667337834384e33566c674f674d64456574662f7742434f464f5545616a4279694a574134784761724678455276354a576f6d3958687771773845466272654a664e79386f4d49756b4f55693250664376794a44316847356f732f686e6347554b544b634d3357555a59576b6b34316b4c5065616d39504977324b4b55776e45796e32536878554e7846773630484578586f62596d466155582f646e3654376a52457a376644324f534743576576454e5150305170552b69356830733656466a363159435a6c6d6654416b7850563244582f6f2f77426167736f72444c727559377859642f4b69516663654a4a6b6141725262736352365074536a466f356475387652454c4442427067757952747a6c4f65654647724c4268432b302b304736582f6a35556b6636577137396e366158486a324f2f5564666f41754c5241723272503048417353615a5577456e57306d5a736b79462f35507757743854704d722f6443642b5976684864457867706e7867674b7955756d524665683333524d46563469376d3445426d39454c62364648712f79656f7767543247676f4848796b707677694d753134637861346c78723245334b784e33535572614745694c43332b61487a524d42514a627442726433612f4d4169415044317579755833714e594e66373568534b64387665742f34566e58364936394458736451332b68587952736a787847513345427746684d5875754c38647a5958327032356737474d6a596e577a3349356f385769534e73564463646b6531686e31493147684965706a44684846784761497778347131763841666f414f496b513654786d5075363935654b4b416d784e4e43434574764d4e77544341326e6d64594a6a336a632b7757726445477a704a4d2f774474516d65394570787a616e396a62357a5246345a3878752f593034746c61486c646a4c686e465346393232384d45504958363974364f706f6a754f7663497761396e442b6a5334475977692f7039654b536c413269796c424b6e70556b797374504a394867582b646843434e6779504e6b4f474e2f69676e2f414a744b6862734c6569455a4e394f59334155793468416d5a4272465a70687a485a574574336d536e7464736f4c44745242747a672f50447a4767586e2b4976694f4d4a6a6365366334636165684c737736324546793172444c46586d563470785579575539366f6274675854695a667845693378523233623951362f77414147765935666f47666c4f34356141565a454743416d70624270544959364b474a576f44754d6a6955355a66477a454c546c6e346b5a52776c52616348634239446a2b31627652656853364364317666736855657345754662564c6d6351394768372b4e552f4e4d46414d623267752b4a684b32685973664a416e66383256782b427a4d6b61536e4f713655356a756e71455637365657334b734a646c384a6541484a63766174504143635749366b4d2b33553963646b504e666f55384672477947344b737661346f77397033364466764f6f623944586f63656f505a3449664a55415851454568345961634459705977382f6545767672717265614d57524f544f35333978464f79677450726b544548686d573856554234326f46464a513630444b775a592b474c744a306a495a41396a587648744261595a7347726a4930556d382b774b5562347350724c62674242526a315a4d6c72784f58564734785835715a4450536c37634c53786c5854474b394678554761584d544649532b6d7263795065684a334b5667327471664350764c4b646f76464a62704778686951464155395a38736156734e6d77322f45306a343655712b30654f334f54316c67736b42545939776c434a76796542793163424d30755169524e75714e435944425364507a4e616e736a7174736956567a2b537068394c4b6f354f484e4575642b306843534871514d39366f4d466e713739547232472f553344544458734f505966687a4645342b6c614232786d4977365046714c3856334f4b374d6d6b447a4973586374616e7039524463467644444a663452646f785a7058354c49667a534b6859746d5373737974417462576c614b434d6565576956366444524b5374455a685471516e5a71547575565a41305241386449335a3853514c7361544d346b355744737a6a4d2f667336424d5334533850576e544534427a69535635415966337a70734771327935716c4c30656872677979337249636d48532b584f4c454a4144724b66444b747565594d4a5146354c58355455676137515a784b474835666950494e525359393872534c47344e41637759456d677a6b313351413477414f4779505072556f7165545372376334786145787865515442764b304d31773166557a4157636f526a457974552b37743378704a6573636c517947614d7247684a52337a77394832397134714e63596f4d414767726a306e4871636b655a78376a72394930746b4f4159334b65424f7871626664762b2f6252433869616f4339596334776b78446576554c394630324b456f4f6677483654466a48466679794d4f396c635942744e6f6a38453371625170316e3065474a685463336d51506e376b564178334d4779656b5a755332665a4c5774526a2b624f2f4a634275314757526d37325831584c556c4d6f7a67795a4a774e6b7a4873594243563357727271655951524a51386c3639444f3634597a6e55614f5048495238333450634f764c58385471316c717873503841756c785a4b4a724277527a6350447a787061476f616730756b575668314b374358466146384b766d4f56686673774e6a394e57714443517979674c70693564746c495653316a76696b3164564d7241656247456a49704d335059472b6a364445303066695937332b546b3636376a6f79527a69537446724a46375139596a533944576e6e596241414c514b413958554f50594f35784f534f765964667048394e34624f5a62613070626d5135534d61304154586a57766f6c4f476c32772f426b7864555379515068536f45526c363338646c6f424d6c7774654e76504a49417443664b5861744b71306c6e486f5773346c53697848587a4747614475414e554a625668477a6e6f5a4a785a6d4d422f3339784a7357757867314c65392b76336a4f4870515a2b4a6c434e556643515951756a79732b46642f366776303651314b532b33303569584f2b6f596833456d735156544258665a4b48716852467833326e4a74413472376c6b6a306e4851616837574b776243306434746a347730705a4b7838715845774b68545a6d51446653776975624e302b513253375a6763493276714d43642b5534374348456b2b775434396b33554f50594f3461397271487644587142746e4b655275707976626c554b31494b7678544c6d636e5839444561576752436b42427646795535726b47656f4f65734e615a66732b656e7a6d6b497253506d5344692f474f55735574434c7673704643304e515157666e484d384d396a786f394f4352683470755a74387747712b442b2f61577567524c614f374d44636d4f58374b5a4570474766784756336a67733063664f516a496a4c30483138524455592b5a2f6c45462b6c6345353641625946733068764533776c6e4e72543042627862594279356a4a63645559786245724a66664d675333734f6e2f6867356430496d757877356764323451486d4873634d53416149514771496a3469554b6757505268413348356f6a74565a5a4673517672776f6e734231446a3244754d47765964512f52482b774365796577394544633861586f3152676530497357556261666672484a4c6c3866466b6d41654c396e504a4b68777273552b3759434430794b625663666f567a762b6a6d424838424d2b5971324a6e58377878476b5a5a4c7a544b614773326d46644c6c356d48304f544162305647644550664e377364537768527370664e784b516170646c4a624665675256707734374c71506d69747a724d6c547572352f4d38674344686330794457764873774f6a71796e552b46467948627852725a4c695165526e55416572322b59514f30365147736265787749476d7143362b4548347335423048516d4f43677867752b37656e634a635264676d56346f456f2b6a7455506d4954757456456c4e4a73594d5532762f414172752b3259327945706e5767465734724c7147415865426458424c745a51733746436d6b4d5737687a2b694f59366872326a72327549636572716f73552f464e3757425438566c2f5934782b4d356938502b444a416250347558465a2f346d59484933645477736b2f6c4c45676876684c545571584841754272684931526c586279317a324a6a4238454a6533656c486f5949696f6f6d77434d785946336c325672322b4c64513668717257357a51417832556e6e4c5256514f723776706971356238582f494f325977426c3063486457704c52684f4738624e734d426d4772336f6b38572f78493759666749396a6a4842644f6f516952685565506b646b6c61623244474a324a6a62464d494c46675a3651686e654756644a71506e456656336e35776769645359366f70414e615537794f4e326330317869576559514346347a5343706a666d4f762f562b38514c7257485046574537705a48747348794a4b7135632b3131446673632b38362f514d363537306f6e7954393332366d36706f386e4d7459644c324f6b753263796241434631584e544e5846476743364b6f457976367775684255657342714c656166317a465447726c4c59686b523077364b4c4f455574366969327665735a645a6962335842756f63566d554d76565a6867776b69644e614f36546d3771414731664955374b4963676f76493059515776524e4a78324346414959664a6e646b4e73475a73466f68764e444c59426f39433433435052736a414d4b327047464c566c34347942583239566b2b6a444d4831587876306b33466549716a737a337678464356657578793353416d684b594a7a31617747706467504841376378664b6d51754d3876704961395551424e7a68356d3869736b4e78584d49307045574857726167386e2b47446673477655325470516a6d64666879555546692b6f6757465632356251635a6374566c37456555364a63364e5732424e4b30506c594344615154576c6474643634732f7741726273352f466d4e6837586644743853344f6a474c56656647506c7549614b4c37536c5a76593277564f695853354c75586871677a4d736974416d716244497362476d6d73773336637634343569436c4b6f4f54657941386f524a3551664e4276454131374a623646676a482f414e6257546e616c797a3969377a392b6d73614e747768497175384b61433468772b595532585a58686f31487834763839594a74445a575a6a6d55624a5939575455584949557442733733316875774a753132766548616a4b784448455337476459343158684f384866446659667859655264764e5371546c584e5666792b442f534e636e7078397a71472f5131375848714544642f786b5a314c76444f555a554d4d3251754b524b76586c72736a424e77697244545961543835305957656c4536614a39645238322b70566c792b4d5754622b385369566d614353717879784b777049584c656f323575646a4c61457279376b65446c4355615a47556a6c6e4972435033587a436675556a3965737642697030707244552b4c676847447842336e59444561597659366a6c476b704552724f475a4b76504f6f786f774d6e756e364e6f4e6774564635694a596b7778774b3452734c35544f5a375565685841334f57616b41716870314a7843414c613649523257646a7a43386665582b3535785634717a4d78617262594665445a334e453170434e444e32696e7664657a62394531366d2f544c385a3952436172693761663461665162594b566c5a61494c6f545732416e43793876464247654b5852784461796c457a3976734e7733485533694f392f774279455473614c5539374e432f4645654e4279784145444c6a7835572f426d787273472f515066475462735257395243764643574c66526b4b774b717467716c77765a347351586c55594c6375726c2f55464467356759456d6a6a6e737a5677754f576e5a7a4767446343304f72424536497932365439735448386c647853516e4c486d744966786142316c58706e4b3472754e70786e36382b676c6f3730354a5767665264756350634e645462316451332b6f63526146672f376a70594461666345506d4968664574674e376f4d70496e574349746b543668755552314c72692b306367573753716f486d626a564772397745307375444e79316e30785276316466472b544952434d6672342b43547073793958564c34756f423632686f5576486e4a485977717162325778493058666a484534774e70552f6b4b53356c33414443624a5149374350744e726830537932594d565549663435775167316454534132733676634f7569375468356d69476e31596a52676e52375775676133784f2f4a2f656a5554304647735646726e55524d344574314e385a6a4376456565533055752f754f76314472304e5131367570703572652f766d6141517568737a48626a747957312f32654f76377a2b416e6545575842455968533269342b48617766766645363636646347346e454177776363693662376959456f66384165714d75522f312f4d767834584372666e736946636b2b71634637687a43566c3839736f4a494167514e794948354b44756c56494f777750394663706d6d41466c52653763647549385a742b7152764c6d77767832535a675151486f35352f5168524d573079687338416153784a524b505a4c39417a42496a7a68674e546d7656757a717a6c723770366e2f41495275452f4a4b6c422b6e2b7959366f712b526935486b46542b7950544d394d737153567555314b30495a6946643570425452614e4a30582b6b6d76523336472f61476f61395454434c5954784d42687565432f6a497753364b52726b2b456842306e4363653147664c317850384150705676487a427133374e6b416645584b583746396c6d67625630594a3852706c4647746a775144317a737935336c30516d5142727435586461445a5a4136344f657542333254327747312f41465a797343364d4336324464594433426257444b517345654567365342614b545377415a424a55367351573752375951306f75796c65463255434e664174775061646135305573617439643738536a356a39435242517677596a41613136345039695a45527a6b73653864547674694e766e457150335a632b4135334d5a38515672516c7330503636717851736431744b48357131796e6b6759546258424865645366794d7a344f79696c2b394d714677696861644e6a7052623941645133366e587078396a6b39726869362b6e51545074696b316874594470696a334b434f4a4f477354326e485a475566437372444f634432395a714d30664444324f4c4c52364f5339496147657357725a4b5345482b78466e4e7751524e38795031745579793948697779707643515843454b317a7a4946535a4f357936325a694458484a687244674a4649355279524530566b5973634d31666b632b494e6b314b6a5546374870476b4b3044513671382b736b683367436b764e644c316c4c442f6b7278497971696835556a51366677302f36656f356266637a637032666b5166766d7375336c495379544166422f4743586a633675626850674a33694c4148496c69667245333744666f61396562577366556179496975506a6c63324a5a636f4237656b7a6573673433634b2f45516d4f4a3135572f6b454e41494138426c6c37557367454976794a304f5a6c4c794f6432326d554e472f4a4748653449413137613248797a4d366b394c50384a35786146425870732b49797942417a6e2f3034725064374150365132496c69564d664c506734373972546836633875757361544b3356637735683143334f707a6a704b496c426b4c616f4972776b684f47357a4f377869612b564c477a777855726e594651556f4732653953665575375a48646f66746d6a2f65336f2f4949717a6834673674392f6c35465576504a75574146596153644e5a7a4e59374f71626271767739547232507544634e2f6f6d4c63426e4c3635626550476d6131784269444f446f4f55345735766a685175616c79477762616952715770513434493752324e5765643375596c68334c5575654c684a6e4f35725a6841717a505842626c6e2f4142774b50704b427a3436776e306e77717047666b542b554476373451306c4e6738516532545a7148316c4b434d453652315233734d657658753944594a64364a2b39685957596e6468365764357932464c73445572624f686931384935687048675736446469613053412f35454d5446513573564343663633635530582b7a366f624a334a58356966326652685866515158345965796f68584944584331754d61654f566d5664764162514934515465374d632b615075507364523136472f636268754466714241376772346230442b5849786645666951344f485665716e53634f49663169626975576d455a7456493436664c52736f33385775457a74644d746545383675514c6d66464b6968777a4f6a4a755a7269484c37546e4256705a48484b595032324430363568794962423431307a417555494959324e6259574856716268336c436f77326d613934724d31386c413077653251334e6b634d656244656d57674d72427448764e386470636a4669507253454d2b2b7a75726a713648346a6e644170634c753659647045784458515937452f74542f66534c574235702b794d75507348373439453249487971695a73333667523170307678525864496d444d71627a32737731723066593250617659623935723036567a333275795732547a7959426e2f47546c6f6d594c4b636663576b4c6935586c314842326674784353743468704a39735333715238354466616f7075762f7959722f534750316e6d4c4d6f5634366e325153367548316f777a30343563444e386c6f776b4f4650686563304e6446644d426439376254727863686977386869574a415956474e4444453178416c774a5830754b6f675a4c4c4e7148336c3951476363445035584f4a73674a6536314b68394f624f6d3232435053504d436953727654325a713873345a2f774a33576e316a386338582f4c383150485036552f6766336d725075592b35625246375733475079563877364875396b576f31626739476465787733367576307733365859776e474e775442473546613950712f6d46565947596d55355638536963566d577a466f48784a434a306e33345968616d3443327a327a4e334e2f51494f35674f44543847474146744b6a7862494671696b652b6a6638414f4a53344f6f66632b47483278454f3246624d5477764d42336f36774c6d436d6c5845656e72315249314a5376707359626b357475336c6c614377437457674d7175677a484b74747454483164417a5644627044622f4145314e4b4165426c6d326a3734735561713970507557754f312f435a5331663553313679486e4830323462686e706a793468763466474c64596b525a2f4b414c622b454d6b63554b385752494f686c716b50536e303251332b6c4e2b6876334776514d6d6d44314b4e69624a3572632f654d2b5753383037504450754a396f454461684641326d50442f434d33736633557646577270496444397741565164587a793144383655763979657770396b57732f723039666f5632456236534752364a2f6c627661534c71436c3252556d75447778615a435735487a656c6f475870756a71333236777a714e6a6e656b376f2b4b7a675038416d6a4851537a776d58366c2f7065466b523254456832374e5a4e6e4d4e434f7a36686f51447742504657476248644f2f3854467a68665a694f6638416a454859372f5250465a4b2f2b78634d6d3733664d6a59697576546c2f46796a442f7435663649584855646530362f775136663469503773614d65473048794977306c542b793446495339712f6e69436e3068467a426c5861664d3864306d2b476450504f50364b7835376a4b57684e644675316c69764e34546c5a6d7a30537938313555544d727174674b35616864696e386f4f554e4d6f665a6b777a6b724f5346783779794b5443766f6457745844577435556d5369336f58764f716f796b654946334f305464715359517746396f53427a504653316b533665444e76416c51574f665350346a47366539414261426d722b65456b514733306268756a4d2f45525879596e535948377a385a482f415059544b4c514f2f4b5a6c43765034664963766f736652522f676f33366a456c634f6c676e626a5737546b344b6a30776b50493337756477765156326b4c505a65666f6d6d6a2f414878416f42613044726d573369666e3874774758316e4d45467a2b624649702f4b694c773141756d49444242644e42764f2b7549424c4a3562684937546141432b663166366f7250786864487a476448455939664267346c6742694e587851756258694435363661554977626f374c6864767a6f4657786843757168786a4f594b4e4d423749776f4b4c51357269614b56396259526c724c2b36352b4936594645422f62452f7364336f623848362b6d4133555a2b6735796e744b3269332b34756d4c587142486258366b62397876324e3741654679687979495736413066496f2b35656c4b31356a394c4e456e395766507147377a53714c58324f59664d786139736f3472714d52584d5549627057545247563056756b4667657841675538506a4234525978726936383054767655387947694c454e3343355350334c6f4b43305751396e49664759443131556b4f4e785937785570305a347675676d427671447238767159506630342b6a6d312b587a386b76375a5970354d507a7a38346d7959536c702b3377596236594e322f4d49663468616974506f482b43413337446673442b52676c76384162763571493466375139784f4f332f5534442b592b467539572f457353395050776567747156774c6f7856632f6f527670746c4f326d63734e4e38726c38757539784c77416a4977784530556e73534570303462675144694541336347516f56612f4c306e795439334659396144704d38474d51426467375a47364f31394b4971397a38705a306f2f62455668365370626f2f6149726d6e766c2f744f75746634495a79353136555a5933394858367762394466734e2b6846426d336e46483975345748706246342f77436666316f32707548577a526e4b58486976724a647238415a596e785a3471786641434c346c4e4c31423052386b72576b6535394274676c4f44544f774c35637a7a34515864637570674a58416870325563394a3071315939684e66636f68694372505654557a415a5a4f41784c67646f556c58376a4e4132394d474e38636a7a41663839494c464c2f414f7a632b2b35396378685842394b2f3373782f3679723935304a2b7873462b34307550783659555246783148582b414e4d4e2b385550364c764d324a2f306b4d55644a5433442f4142394c62667a517050442b4d4c79374a422f5a784877436448612f4d3548684b68584e33676c3566527054373564474577593957365974446e70484a775a6f644e666e4b5a6f4b73656d4574746968596e7a6a5663716562763841676a724d4c6d3034644a31385242734f2f756f6e696b2f4e6b533647307747756177643433636f364d4c4d637a6c76642f587a4b6e34366d514c336c2b45374448387651615267443471664b557176342f6b6b6e39694d6d35712f366a6e364f5952312f6879784466754b6b786c7177623550396e55644e78416e4d462f54345332452f4b4a6a35443472795279704e446e716d6f2b724935623945774d4e67776c715a506754633844536c584c477a4235737a33746a59776d636c5a7a50446b52304b68784c5072615a77776e4e6a425752624d59344633495a2b4137735a677a4d58574a62693553374d31516e7a783568646768356b586c574b713665356470493453305478464331663663787847667775485246722f42417075596b4576412f6248722f306e5679382b6e30434f39524369522b592f77413853616f6e67693850596c482f4141722b3444392f38544c74366b42325247644164675a675674472f52472f52414a524142476971484362595545786546613073656c6b42533274725151356e56444e58654f3634676249704967764250444b6c6b776546526968563165416c527574647171484f38734e4857794e7475494a32344a5a56316d393534347a66444c324465577a47682b596d434932517634557564585750314e5236735a41324b586b4e7659676472587a4f446561795939377430456679685858654f2b2f4b6e39663054643669784a34444877694b475a7539415a796e6243384f38754f324f7638414c426d66595055594737586d566f67494c54753358376f6234734943327175414c675a5868416d647134493741545a52675a2f44694c587a317753455a365333486b5674706744573466384176304558714a68583977524c6a4b5472754d796f6f3369774f597a496f4667485339355935714e7a423748583279794e43585a2f495a715632382b444138424e4368476b6c345a6b3642794d35475a383451656b6238755343676a722f517768634c7436742b62374651732f37714a6c677248355752464f5331434f37676f6d5841554d68422f6c455136697a7746556e5276346a454e703950384172454b4d666e7845494c4276757a542f4150564776676a4337694f6a367964783643306f4142745a52785855326432634a3672676a41464449536373746c71685579334631476e4269506a4c4d59544e35674430687351395266314d4372492b4d674271417663615371756633557232744c47574e71797452334f446a79484b532f5a664461394d6853434370576a466c367751656f66372f4d355a5166506577334f68483055517a2f38416149735a62794630587442317442455144542f4b6a356949484a776d4546744734494c6748722f716356506866506a4678326b4165504b4d706c505a6e363433744249636339596e4a6345416150555455344a542f7742445870414e706d6741587773666e7436562b426c78786d554c6d775248467477567837525a4d4845506b6361396255356930426c554178576c6e655051425831313874486d38544d525439737636472f74695665494d52723051683043734f4d71494f6374394d304c2f61423765736a396559472f64656a2f41424c3448317431686a46444c4f626638756958575a2b39786962412b777a714838724d78423933592b392b73704e4c53362f3357564a4e4d58386467384756476975526c6a5a4f4d35374a35334e572f74675977323857312b594b7355735436364a744437685556394c7843364d78483268736d3554746a63417a6e58325254636645694f524a6e5054635845664446562f41664c4f722f77426b2f7742724e576545677a2f426e5030486343706f355635614966327a744467432f774431732f32763566796944734776674d66762f6c436a715a66622f706d736343304b4c2f5a69666b76465166567a45416633476c4d6e51356a7764767938656c734a3178474f463832706265454e784c5136346938485a484a4b76454d4466356b2f777a646854344e7733366f6b30472f456d7363486b78345861387a4f78376444494770386633463776483639662b595845786358542b5a2f436638414e53454c675071386237414e356945626979664b6635546a684b34492f77426f714a4f4e6b2b51536352516e526b4437674f414b3870764730486252496f30765376366c75763841315a316872454547786d636347506e63305a70434273626d56783855667034656f36413369537653595a4f513738422b55514f6861777162516e6e366a5a39532f434f647039754746336d2f516c6a4f5553442f414d514f6d61647a2f48366e2f3851415168454141674544416749474267674542415944414141414151494441415152456945464d524d694d6b4652595241554d4847426b51597a51454a44556d4b6849334b43775255674e4a4a51553153696f37477930644c2f3267414941514942435438412f7743466968397336716e6d7847616d6234415663442b7063372f43676b766b6a595079624649364e734d4d5074484f73366a327638764c766f345a3036564234726e374f76384149614248654b747a4d77645630673450574f4d31456a6445474d6968546c5655344a7a4a557a794b74353675795045426c676d726251765a476330304d4d6f4a445047585a43563934324e5275364d326c4a644a4b6648414a70673673796c4a466b5843496f32514c7a78396d354b435455524d69365548524d72456c742f4772454137413635644c416b5a786769686232354249306868495650646c6a544d56364d4d7a4c474656392b525541416b55576b596f3569614a735459643131594f354249586e5672726a586456476b506e395a324a4a4970586a6c6d4c704b717944716e414a5a4777616a4d6b4d61686e314d7971636b6369324d37626b304d4c6a59654832555a424646466b3146496c6c584936556e63364d344971326e685746524a30736b654656787a4367626d6a49716e483853524d61466248573231594f4f3971696a6a675448385a67486242485a33417964396d70463134416151714e5248634e674b5946687a566436566c6b32424f72477738717551484c46794742635a706c6c69356b727352396d5973736e345a4764536e6d7137486348474b6957526d674d456a6761455657353579647a5468324a4d6d57374b75334e6c4761676d6d6c37756f55542f41484d4b686a5732376f7943426a77314446634f6d693237616f576a2b644e2f392b6734506b61545534354e734b3564323450376a37494e694d6d6c3654694e38486d6b3037434742555a773266466974594a38787655514977642b52417268556b63426e43787a4e4c6c5a43507a4b6141554256436b554e5438736b6e4f2f654e3855566b666f4a35744d6f316655727178746a6e554b5249697854576978786c464b456c57334a4f6345665a72714f43336a584f5862426248636f356d6f4d58733839744677307a6a4a6a67595267743864654b3451586b2f4e48494d487a77514d56476c764649414755485735486754675946584158663444794663506a75746741656b4d5a717767683037395a69357158316934753764774656746b424a794e49786742616a30586c724b77554e7a61433456574b2f4d5a422b7a5a744f4277424c5154796471514a75786941776530534d3147526257734b4c45684f53516a68785861585a7666545a62472b4f59706e4b44744156486e4442634e3359726d77776155457957376f67353736656a442f41476c41685a376549655a575066374c497152714d6b73514b4a742b485259432f646b6c4835764945387134704f3170634b5138546e49794b75354f75516f3633376d6c694c4b53476b306b466879776348656f59533632356c48534e705638436b434b473068644f6e6c35623162613743334a4e7a4b335a49497870486e55576a31615a7a47526b677773636a34446b61746a464b53585a4e7530504478422b7878504a4d327752426b6d6f6f344a585a5972644a4a453173373934544a4f46377a5677386a5a374c48716641554f624161652f486a696f5844494e53676a4233786b34504f726b363054704845614267674f4f5a384b694b4d38514a516a66554e6966504f4b745a4a70306a305030594c454b5049437261537974523964635441717748364650614e5242596c4753543233633832596e636b316678746532636a49624d45644f30683679714535344b344f65566356466c7742576c46707734523457654e687078704743526a6b314464546a30757654796252786b6a55325041477543336376455a32636c47416a30524c2b4b33365737714144597a73636a326b7069735562546c526c7047384671306a546a4a6a515866454748545461354f7a4643507a65504d43754a334e39394a62693974577642637947517752464352422f547233384f5664676b4f4738566263476b55334c5a535a2b624171657a5678444c4d4163773639546a7a41715678714267664b366461354732664d696f644c7736305936675164565374484e47555a57556b45623437764773644d72474a3862416b41454830634b39662b6a374d713856746c7a71554b4d435843344a41712b67364a374a6f724e7264746f53554b4b4d6331595a72695673594f467469385469747959706c694a77485145484e58416d684446474a42585379387732724744553649705049454d2f794663426c75654a534e366e594b344a4d636551526843446b4f4b6e452f77424a7549754a7236666d493135704448344242524a4a377a375356564268666f6f66784a354335495646473756776536742b48527a5433676d756f586856705a334d61516a574271304236514347466d6d73705276307132363651792b2f6f382b34313962477869636e2f74715852446349456b787a55654b6d6d77775164627a70697a73456b4f2b6573647a6b69674e5166574739336455517a3062594a4f656666697561464a6c333568396a36465578744777594f4d374e7458306d6e346645387950496a4b2b30624850564b6e446a775569703468394937654d474b34593652506f48596c3034352b4e66514357474779426a575733696b6a575144385173413459742b61724d327958485361596e37576c484b416e5a65654b5264514861787542585a4c6b6a32684f71615a5939756535334e4b5a6546384876624f43307466773853596c636863597964574b796b3866445a5a5938647a496859664969747549635656626d424279454b6e4b61764f5145354867616761546739795339744f427641784f65696638416c4e51752b515142454e657454736356776538792b4f6a586f6e36776263486b52584549592b4a47434e62754f636c51584137536b5a32726a43537a78734450454559687932797168714668477a425641337a35436759704c694d4b6b424f3454495946364f5a473252527a7a54356b4c5a4b45624848645676314677764c596e79713561336c7a6b6449707750694b4d66454c63444a5647566d49384239367245704b7556654a6d30465455516a4237527a6b6e3276447a665839756952574e70754f6c757268784647446972684a7670446353693939556943694b4b586d7173343539474e734461726847346e7849657170626f63794a4533316a734f35644f77387a5567654f4f7874346b596369466a473952435868383531536f5531716b7032316b4849306e767177745969774446346f6b5449506d6f427063674872534873714b6c4d754247785355374d6d64744a50493171676431444232566a6f5a547a366f4949713873354c79473145384571794272667039624a30664c36785175636432616b516b646f6a4f4e506a54376338397839776f4150474364523242797058487633713257564f57547a7150315364794d6169593874563237326d6f425a4d414647626b446a5968716941766f4346766b58594e6a5a6c627a6f3552786e3271422b673476774f5264517a674a654b373438796f4e5476426663594d6b74784e45786a59517141563634494b714f624556394d54637935553345554d52646d386c6c6b494e456447704f6744594b70354c3842517a6d725a415353546a493531735864564138467a7652326e566f584a35454d4f7174586b6c7263337a496b37777470637873324167503557414a617268354c4870486d69695a69796449656236574a4754544141454b2b3548554133727259323871357377304877423771586e766d6c44416a664e417a544a6169577a4c376b45456c52384730316a3150697362327a4b773554444b7271384d376968696579755854424f634b54735061706d3476376c4a504973674b782f4973536147386e42587365654e4d724f774b317956736d6c5a484b366f793277667878364d504a673556546e54357634436e416a54494568472b6f63366c3147467734594b416471317957535443337531484e4566634d61774845536d5268346b6234706454766336706e7754306343454d3745676262437047534a4579716a355538676c636449644c3437565347614a52716b5673426c5878474b3279614f4c4e773170634e6e41565a755448794441557753316e6b52376c6f6a6752796e645a68354f61356354582f432b4a6f5075336b5141316b6432723273595a3766682b49324937426d66515456324c572b34624b7336355871737049796f6f3957614a484f2b634e6a656f77364866656a49554833444b355544335a785566526f794235484867334956624c497a4843492b363666456a784e524c43326f71516d774949384b55536a5753497a344863455678426f6f6a7a5851446a794649383132352f697a79746d5268344139776f36535731482b777156396665554f435457517a78534b786362364f374e44655630436a6e6858363337436873705a5233374b63436a6c724f315a67783762524c316f6c487561747052627278473263444a53366a625972386356686275496d47346a35465a554f47423970476a58305844476d67456742477150626650634e57612b6b3557305363683755774844414839495546525572586c6d7353394a4952706670447558414a32486c5730617032656541426d6b3057567179694b4d376b6b6e476f3173476a56424764396b3548794a726c30536b3063496a6176665831456f4b717835626e306244464a794f6c534f645250304f4e556344446d65595a785471622b654578434e4467524977335a7151614c4330655856344d3430697552332b5972385068457a5938644c716154466f676830794876574a4337662f476b4d664437715a354f6a3769374d547437683752517a5432733175564f77784970576f776c6a366c4536352f4d7935596e3431634b694d645257524f6b516b3934494949715a5a57574a67463034544a474d415568445353624c6e59453033386152394c2b533163366f55366847767546484a4f3447614a36566579445738305a4b76384f564c7551525562456b67774a4a766a39574b4b76784676384177722b6170586b6e6d62727535795361323057756e50756a66416f5a5a69535437366c4b33664562442f4437585475544a4f36706b6551424a4e4454445964416934324c42305743567a385251367567456566745a4d32306d3171373739472f35506331416a56494645657474494c6338436b4371465944534f2f4761375379426c387975784e4c313453484648596e4e446359464c326c417a545a57634c49573548553535554d46704e5250643061387a51325251696756616573517975586a6b5352657a334168694d4556772b57464862714f526c446b654b35723731794c5a442b596b522f2f7568513268676d6e4838326e5144384e565367536357742b4a32306174794d79755448517850466d43542b61493644375a38337475565a5859395a315267322b655a774b47354142397835476c7a31582f64714865772f39567959354648646c37683455354a4930347a75324f5946416767375a48634b6a535a4751493055763566654b344c48724237706a672f7458427446757756576b686c4c4d6f5050624739544f4f43775946744163714e51786c6d466471626a79524d50355967394434312f30567852325045722b503443466a5178434f495862714f654138724e6a392f62484436677038773232445868722b5147314874414c512b38562b5272635649775548595535594a4951666474514b73635a42384b4766496338554e74586f484d3644517848633861754a5639367778782b67344573453065666368622b314d794b6e48684b647677353241636637584e44416c755a5a414f654e545a39734e326d516676584e496770486d6137736e33312b55622f484e4c7159696e55456a49424f3570574c465163446c34555035534f343177363775546e415a496e4b2f45347231657967354d3072686e48394b3178353243796c4d52526841644f4164324a354861705a4c694f5746582f694f4863795a77657a582b7074374e726d357873444e4d565a6d48754f336f4f456a7649316233506c614248726472424e2f5571674e2b36314a726e6e6753575276314f417839742f7a6c6f66575374384175414b2b2b51712b2b6a49515239303756412b2f336e494171354334505a52515352357361574d78746c5a477548476b36783154672b44564a614e74757472454a4848794663486c6e774d6f307a694a666b4178713569744947665951494e597963377332616e7662795a6954306174492b51655a306a595659334b694b3768655579497743414d42765464534332686a51654334795051634f6a7134506756336f64533573556a4a3854704d672f5a7137554a614c344b3241666a37595a4957512f4a43614f4631626a7a324a4e44555678676374334f4b69306e38784f54524942483461622f4d5662337369482b59412b346b6972514b46373570567a745847417355694a4955746f77637136687361323777617350574a51516f4e77374e712b47514b736546514f4e4a77776a4c637879555a4e634f615a635941744956695134387a58414a30744a304d52654f56586361752f4856704e754a6347564a6879496e746e7751664d61386644306a445778744969664b57442b326d6d354b6b385938755465323534634433754e483936333070585956696449334f534b74574948365571316d7875415656635a2b6463506b6b6362344c686134626251642b5859794839385678486f59687132696a5264324f5469754f3330694e4a70436d5a6c4750494952544d7a6369584f5366514e73357852477166683972634b4d3867385342675434677236426e72436a2f6f344f4868504e6c6b534d6d6831705a65686c5065776b47422b2f747642562b6241352b474b3567594238535279706534567a7a67554b586c35304e6a586653352f694145652b68364f5135696752467736306131697a3367757a5a2f66486f4f46613768512b356d416f624d39704837674a6b6f3959584d41482b3866352f77442f784141344551414341514d444151554642675944415145414141414241674d41424245534954464242524d69555745514d444a436351595549434f426b544e41556d4b6877535279735257432f396f414341454441516b2f41506462352f6e786d683752522f6c442b41657a4d72486841644e5761656d3571315a542f624a2f6f314d366b372b4a446a397854493638355276396577554b50766a522f44774b326a6a2f41474e66447742376542585467306e2f4142495a343757642f4b53514d7962656f552f79373738796a484950417067584a78743556326e4659526431492f667971585573694d34514162366e49774b37554b535839786232396a4b7536794e4b516545446b676e43466763416b486356464232644333326569376174726933764136727175566a4379724f36365a634168734847534e7474376539764c5630696b6a6a6e69574b372f4e7a734967784c6f70556a5742673165576b453173686c6d746d6d547638417531786c744f635946423470343470514c5672655233754c6a4a5179504b63786851426a79476759357043727178566c4f784246482b55486a6c6b574e6575374541564833566c6f45356b766b6c68554b4e6964576b6a6756326f735734376c6f59576d53526645724d436832414b48424e53396f33304a77786d456663643676555170347a6e6e784862616b53476470414e4d3934566e74316a526646714a48644a4957314b32467953414d6d725747464c612b6757352b3978786d774c7778544d716d4d624d73526c5669757467334e586a57456c7764456b2b6d526f30694c4843776f437756597763494d446172794f3573757a48745a72616557306c65457864374a4633467a4645646e4772574e4f4d3546586b466c5063336a5257695270484b79787773555a70464263516c586b56493439576572486d6d314f30376c6e794357506e6b632f7970495a4844412f51356f58306c764c42426358736c6a6339334a4c614b6a6646634c34772b7337674852714a384f31586e5a76616b393550334357746c64724a4c6477544b796f7a444867625a535143657034714730656149453978325a634d54657971726638414763686f752b525a47475569797a615353617565304c6e746d35637933646d586c7437614f614b3444784b42725a68455931377434573248796d70324d5962576b4f706d6a5269414352724a4a4f334a4e4a73654353414b75454d4c37744870316a3147636a59314b786a6a68467376644b6b4f596c4f517261414361445279592b6263667651494876442b412f68746847657a6d5a5775594a48566f706370494a3567727143475573477947797134577232654952646f513970496b3069334d797a774b5934343032594c743469584a3341465152573043573056715668554c4a4c48414d5269526c417956486c74556b634d4741636c77376e506b716e4e547a4e63636c386a6e3042712b696c4733685a7773677a356a4e62483244496f6a5230546d73712f4242487544377a4a55486341366475745168624731585448713361535855716b443642716b59526a424142302f74696e6b306b6a543469526b394b37575353344d4c4d597537306852354951647a556a353173703333427a31387a55686133323259444238796156314562526853687744724f445773616e654f585764575473525256573877414b596e3352393162504c4d7a664b704b674871783446506d7a69745a354c2f756a6753544e4735483177527172745231544f53724a75503155675649387a4963717a44536f506d4648576f446b446e716655316453577a6c74545954574d31647a53453745674251545542686a74706f75384a5834396647357954527a61584d58686464744d384a354a363748335a3976507450346354397153413348644a77686337617a55674e7863534f7a6441434957554b4b324a38532b6f4e497847514274317133434d514656734145314b6f324c44484a5049474b2b49734b552f6c5864756c79654d7147456d6a506d536f465346726f52335538687a357a6266343932666451764a49357746525361433350615572457357385563586f753247774f7072737133463762454e464f7134616f3138493163644430486c57734d366768454f6b437279654a444e335245616c6975547467314b306d51435763354a4a3336552b4c366641743158346c4f63354e5443574735685235677a414f6c784541572f55714136316566654973434f4f58664256762f442f4a386564507169336b6d30676e434c363162787852375a4b72676b4431356f36526f2b4c3566706b37644b6b5851367368504f39524478746f5270483039356a714152556f6b437379676a6f4d354855314d69513935724f7262636743704675726b444d554d65363538334e4f53374859664b696a6741565a53697876516b71336d6b39796b5155497a46754d6771526a6d757976766e627a5278693676326c3863456f4f74574c4e6e42424736563844376a30387837593246724556457375446f557563414d65415458326b733762736d316a474a49775a746477564c666431347934774f4d696d4c526c744f534d454833674c4f666851636d746b635a5349624b6f6f414761316b5368754e694b6d7a626f695043677a6a42474d6b6461746269474e68345a7845556a782f632f6b616a54576f3735634d584b48485854796347704136544f736965456f515678794453426c6451644a787669686c434177394e3845657a7445575862786950384138366438414669633650466b416d724b59545233717a58695437744f75664751324d454e3072732b345a2b316350597a646d57346b6a6479423447775646516147306831306b4f57553951467a6d6f4a5a4a4279785170474f6e7850675639703465792b794c5a52326832764c46705066797567317157557141597957566456527642396a657956376e7332314f336648683769587a4c6e7a6f41494f673935384169516b39463879612b52436372364c6d67564e6e644342796469797937617633426f2f6c794c6c50384164516870725936346a30794f684641746c694d486767306d49317a474346774d636243736c4d4b4d59366e725568436a79582f48363177327054364666597a43524744715230494f612b7a4e763275795173496e6a6b584a6c477971797351385a39564e57557a665a756159744a62474e383270636e38794457446b4c31466662784a7072724474424e4c473752353456564a526c5566303166535376446f317541564758554e685178626747704a4e4c455a444d5343664d6a4e4447414678355948764f6731566c58654c636730634f3175366b6a6367736847617a336c34366c3134495563564d735861635341536f78326c412b63657046547870436e784632306a5051484e647051596a7a72496b556e61724a354c45534d495869414a3066347961374f4d634d6d516a735272774e386d70564467456c4d372f55307975694d78615162676e6a61746a35394b4a57426c4b753637454139633132774744414d41535135794d376b5662527a786a59364842592f554562305a2b7a62736a5572714d4a2b716b3661375453565366444d735770574854634e6747706e6c596342746c7a3733624a786d6c435734324a7a6b7636656770384d5855454435567a67736649596f62526f7359362f423461646b75492f346241344a556344506e56784c494d2f43376b344e486e3565704e414264576b4f6d3547334443674a51684f5172415a553745623074774935485a5a513634664741542b6d545149464c7361684574753059426a493332594e6e2f4658733044487a33417034376949664b54717a366b5645715445594b44716364504b7366645a414655734e6b4f64694b486a6a596a3078373359744b374831415374705a4d357763486175304e7459655651685974356a55534b47345651665567597a374a43654b4f6355504a6c4a347975354e5271364b446a554d6759484e654674675478515064754d4544314e62696c494a4a315a2b74484744584936556d68303363386b45394b556c633533363076686e58753350384163674139377a6c38452b754257305678614e6a50395a4a494950726a48734f514468674f5235476a57796d706b515259575335436869573668436369726b5475796435452b6b446a494f645031703871636d4e7363344f44394e785753756f34552b5170776b537844476f34476f3841314573325830504b78495165654231785563625249326745722b3949714f635950414a387136416d76346a44556f72787a484152654e3652653874565736694b3759306e44416a364833716b71706b4a7835394e71756a6258665a7057574734354737447773504c504641417952493577517779526e6c5363305344575030555a70484e374f6939354d756371722f4b6d4f7071464c71376b48654c472f696a6a7a356a713157736475727a2f644c754b4d61596d575565453447774e4d50753039793178426a6251736f444f682f2f41466b31426c2b725a716675513432494868464f7372757056635a4143714e7951616951456a58787351664f6c4378426b5a736346756f78527958436a793533396b6a4e7477787a6755766a6e6253573834783078537439326b4a6b684a2f706266336d6b334672484a496d7266355351663346666151515766336a51596534774d7141655146794e367547633269474d544f43433479546a726755634b716c32506f6f7a56743356706246456a4c484c7557445a596a6f446a61676d66757168355a505450686a3961554c464a61784f6f3867514b6e64496c6d57584d5a47535671563556696a4349376e4c6b4c786e7a3968327079796f41426e67443571326a41494d6e516b5577377276534274584261767052334c3134753451686c78317a6a46496f3752456a4f4e4977566a3441493935675458566c4e44455351414a5375454a4a34337148756f6f496c514952687334334c446f784f63306864774d616c62445948414f5276696c3078393232734535596a4641426e6c426b7963746a6b416d7458634361565755485937416a4e647145646e32332f465750767a4838413667566349306f4f77576473343838303739317177544f53326a795a574a344e5a4b4f41527430505565596f3863446e4a6f674d772f4d4b3759423378532f6c5977702f714a35464c6845584f4b3671314767447062656a6c5a51336836413066454a4754486c6a33412f434d54703857506d55566734584f72534d37655a707375384c6866516b62564b786e6b5a5a38736556596c52533637693341756f7672487a5778494678474d2f6f787231714a544b6b7142472b5946715571562f4a436a63414a6a65734264496551455a2f36302b3534474b58776f696c686e356a52354158696a766f7950594b494768306a5872757877612f6853615a6c486c336744592f4350636245484e44774f436a4b5036694d55656d4b2f6878526d426670433451567544474467372b6d4b51765936324b486f6f666d4a2f544a32727378555934424f76502b715665366a624f414d4b6d65446e725250654b46314654685165704970644d30724b544b44674d51414f4b5a6848755353766c54625a3347504b6b495876446756794c5a662f54376469554455666730525a48557871465076766759342f586f613233786a366d686748377777483149496f2f49425335556a47477273364953645346786d6f6b6a526c794167786738554e55665236584d6a635a346f6e76466a436b48316f313851416b4830477872354949782f67483248414330526c6b6452395258784756732b2b36416d7438746d6a674e415778395646625a4e43756a555144717876307038593644687339434b54453344593241726339364579574e4368732f67497a512b4e776f2f77436f727052726352334754356b4e74533455584d6741394d2b2b36527366594d5251786b4d336c704155316557355674787159412f7354567a486c7542467561684c497778716b3333347a523079716f615053754e38304831684172456e473436305178445a4744584c4d5a574e46565049365a707751753549337858777972714238774e765a314246487772486b4879775251776b3861532f553447666666306166334e63526f782f555634546335566d354f42766e395361757047486c74555162423331746b6255495658414977764648557a4848683954314e4c674f43464a50474b62726759465a5a55554b70417a676a6b55516f4f2b2b3153726e474351656c4e2b6242636b412f324f504c327278424b78506f4b545a484d4570387465362f76672b2b3641452f707654666e5854372b69446b3034526e565168625942436176736a794c4f503032715a43437747526e497156526a5962455a2f6355574a7a704a58624a6f6641516366536f59784b735231484761354c4676333967324e4e734351332b7661666942584648387357375047504a6f53477a37342f58394659303256584d59484f6d4654673438693163624b50514374714873356a77772f66487350684d525a442b416276686a2b32665a2f54527958526e2b6d6d7479594a4d6a36716148552f692f2f396b3d);
INSERT INTO `users` (`id`, `email`, `password`, `type`, `firstname`, `lastname`, `address`, `contact_info`, `photo`, `status`, `activate_code`, `reset_code`, `created_on`, `zone`, `cost`, `coupon_code`, `coupon_worth`, `discount`, `wallet`, `coupon_id`, `field20`) VALUES
(31, 'stalbansschoolthika01@gmail.com', '$2y$10$9W2mSB3FHblKPkH1J8Jmv.dDiC3z3j/EP7BYih//Per7zmXEtCy0.', 0, 'Alex', 'Warorua', 'General Kago Rd\r\nNjewa Cyber', '0793060164', 'DSC00496.JPG', 1, 'CgaBGhbmfwc6', '6NoUC2TQntLv8gd', '2021-04-05', 'Zone 1--Thika COSSIM PUS--112.50', 112.50, NULL, NULL, '', NULL, NULL, NULL),
(37, 'spinnetech@gmail.com', '', 0, 'Martio', 'Mugure', 'General Kago Rd\r\nNjewa Cyber', '0789765556', '', 1, '', '', '2021-04-14', 'Zone 3--Nyeri Town COSSIM PUS', 280.00, NULL, NULL, '', 2500, NULL, NULL);
INSERT INTO `users` (`id`, `email`, `password`, `type`, `firstname`, `lastname`, `address`, `contact_info`, `photo`, `status`, `activate_code`, `reset_code`, `created_on`, `zone`, `cost`, `coupon_code`, `coupon_worth`, `discount`, `wallet`, `coupon_id`, `field20`) VALUES
(95, 'reenyquwee@gmail.com', '$2y$10$iR7fCb5/oGabzq1YzoF8D.maBwdjQvk/MAFWpoHUAjiqUyGJvpqlG', 0, 'Maureen', 'Wangui', 'Kamagambo, Thika, Kenya', '793060164', '6c50ec5b9d6ab554276252783d93b0c75743c58cb55d21ad9f2879fff5f9483e372c004f.jpg', 1, '', '6Dxt2ARkBlKurIH', '2021-04-25', 'Kenol PUS', 425.00, NULL, NULL, '', 0, '1621964099', 0x2f396a2f34414151536b5a4a5267414241514141415141424141442f3277434541414943416749434167494341674944417749444177514441774d4442415945424151454241594a42515946425159464351674a427763484351674f43776b4a437734514451774e45424d5245524d594678676648796f4241674943416749434167494341674d4441674d4442414d4441774d45426751454241514542676b46426755464267554a43416b484277634a4341344c43516b4c4468414e444130514578455245786758474238664b762f43414245494164384233774d4249674143455145444551482f7841413441414142417755424151414141414141414141414141414141674d494151554742776b454367454141515144415141414141414141414141414141414167414241775945425163492f396f4144414d424141495141784141414144756f42754b47414a414351416b414a774247414a41444f417353517061326b5173516e5741704148475a73554d4b52516b6b554a4a4643535261484941647874775174493944616a624847334141495142324145674241414a674249415341456742494153414567424f41497742494259476c796a6a534957434d4841554a5543364669553671747254316f6f5a6b43784567576c494778326347784d34416847334230696a676b326859615a5436473147324f4e75414151674473416843734243414a414351416b414a4342614d415467444f5671735346673034446a4f416b42554e694e5358424f323461506154655565594a6148556b38724e797573755668396c74332f4f316a55733331674f664976764f484b2b6e51344f547778436e6d6d6a6978476b656c736d6157716a69413268634b56544e6a67536251734a4d5563536f5567474141374143414154414351416b414a774247414d34364c43564378536b533441494570596e454f56593071554d314b6b57476d7338412f4274796474595267766d485a756d5973506f782f4f6a382b4f6536785a576434625139616a7a7366786e4a6355774d37746432362b4e44366a36376d796741665243564354597568696c4378304461304e57334278624b304e32322f51326f6d7744694148594151414359415467434d415a7830574577446a53415641614336444c577261307130714351416c72546b584950522b5172726a647430786b3475495748305778386e4438766e6339577532777a782f7031474857587a6d6c61352b7778732f4c4e6159744c53526752782f3748516f752b69766665576d75746b62337a38794f42514e674955306551374e674845685968457342524e6a6a5a6b306a304e76453241635141374143414152674351744b774d6371735a71465143464e4c59774845314b67426a674b5146616b444c346a52376d744365446f2b46374e6c6649374b30484b5676745069554f7a3553544f324e36644e645970795969706a2b70365049574e5552723374615a4e444e593034767162624e6e546d303869664b6e564e57454533376435585653685070514b706d687969464173514d43304845416831576f676845504e754b576e473368414445416467424942635a75566264553148414243426253674c5a696f4164584b436c4b56455a706a63376f543853727a66634a713371715674306974764635665468666f77325049395769624e7a333256533348475a32323362684c58674c633246645a575176396d6b732b2b395a5747344b58736633492b4c4b64655456667069524553582b4e6a4e725374347149574957796f5564454f43586e466f4f43744253535731564945495747764f4f4e76414147414178447171684b41343067434149574c5a79726c416c71416e414559446a454957416647786e6638454b7a3656332f414f7149476873714b6573423963324f32385954617471644e744d2f4b547a397a6349353964666e31386658336d6a644b72715a4e66465971322f356868456a3032397943544a35745146714a2f536c31472b482f7743743244476c76536f65756f68784a416b70556f6d787874436757326356557549544e6a694a475a523645504530416352576a676d4f30476d63424d61554e764e494b414341635577416e466c524d414567424c41506b742b784748477a78766d3679507452424853626657472f4a5a5a427463486e44414c716278397838337272614a6a774d355a31445138776244507a726e496f5138397535334b65514f654f33744b6651487a3770484c4c724262756b394b796555755864737a735050496e5378417363416341424a4648476a6a7141347470576c3455715174785156535554614843524d5563626541645336306f343234426a6269474e78644b675941796341557773714d67414a414351416b5252323968707777426a6c4a6662584c756c38672f4632793135756d2b654c71543076764f46734d4f7375795736685a75456d354f7531677556533449344239474c517a636d3551627567687a7a6f31786e4e797837616265725452454c375a7738415341456742497055646d797444684733424d77565363436b71536d476e577a4670486f51556158573345597371436f346d6f533172536f6b4c51346a6f756f307451416b4145674249436955624d41794c4e6553644469766a45734944645a6f6b796658693262385a37663457764e62546255313473316d314f366b49615575755867626e545841633742355059466f61596d54614d4a2b6a486b4c316a3650773764674779716f416b414a414351416c527035427830416357304c46416971566b7a61484548485274774e41434a64516a5a6142596d5641536343716c556d67306a674147414a414351455a59737241724c7043546c49364272694c2f414554687a5772506a3278637a322f724d2b486e67324474694c4d7750625674315275645074473961773264424a3565506b332b50746c317a753038556b66654b62307a325a7a796c39632b533942674b745a5142494153414567424953716a704142776f6f34326f326c675564457253556259343262674475345554476c7251746e714467536c465555796c4a554a41416b42422b59707636383458374c693355723953376674336e54766550534a6a42755459345764784c32686f7a4e785a415a4f694b31316f6d35747251646d7a54626f724a37727a69334f6e3642786f686c412f626a736150506d7550654f6339473571774e6c3153744c376237722f6476504c68504c5a30495a7658327041455967435644787854557375477555326c366e3050754f6370656e567a357466614b534143466f55614b5653634b6b7251674733477a565674725a716f55686a65716c59454f4e754d5943314c55434f553042703768506173655447443739365038414c5645754573583553616e6f48523732522b6b487976734f755a6452536d4c32506b63556f6354533576627a5339495839547a50676e68397633414e685569385a6e42756347694d544f3447596832413550656d4f544b7365522b4c66342b38756b5845336f643561366e4e536c7565374c353333427561464730504e5070337157636f387637467966705a704c6e526f7131302f4f2f547032313856394d534b6b5835656a6e516554782b6b4534626d6f4e69304f4e554c625553554f494f425346746f617472515969304c5443466f615631614667343432347869304c61656f4148776430686e2b2b2b713172646b4c3577384c504b3167305a4d6151764d50723833594b57665038416d393576394e586241646b346f324676477858753837335551796d684136624f4a734c6a6f4f517353454573644a6537583855746734686652313834766638416c766f585266544b395778332b32562f4c366f582f6e5674767a376435783357506534625a7a33642b59616175764f757132617837767a7a3044353930507647343435757354646b6e4e516266714e6941493152433047315733473144524330484170436b496174316f5969304c5443466f6156316146676878746253316362634763786a4a2b594f55584c2f72397a38366c3033442b59664f734b7a6a303768645a65445052446e4a776e587a776d5478786e375176544854794f6c72307a7a7532543466356c62717a734b3153313444355031536d3970725478546c5471746850446632455a4c79473637782b615756304f2f5466474b3138754c586174767a566944317a72454d4f2f4872374e74745538613164304c326470626c424f596139664d4d7a736e356e396c7a30477673736b56754542536f4e586d6743516d71534772546a547843466f4f4254627261534b4f4e6e474c51346d6f68784447347443774d636257783163626347656e7a64665350775a4d354c36586864445730366a77377031663267334772356178777a504472747431733066307532796645364c54314644444d4f4c4d7a344f316a4f79655730495677352f315338526276702f6839723068613837747662365a723564632b784a4e2b62717445533956504f7a4a756474783232706e766a556674316a754d5632546d554d394661656c4768624273687a37747663342b6a6d75353441545959416b414f79476e576a67436c56485246614845696a6a5a4d414753307249304c51746e713432424b343468597a342f38414d4439496646584b7875555858586c2f324f326567337a6733446a574e513050717449656a4c3841686e39516c576e79572f583566626a4876484b4e467a51306558426671467a302b6d7267466d773763376579764f316779486c4431776a6c36366f6643614c572f7744514679324574496b6441344961535a3135586f78724258332b663336486137697a36483832656a344e7633724265546450332b4f66526a387576305361326d376e41336650674249436954614b306b78514b49554346795244626a5a49414a33436847315274614e3070574d33466f574f524869506d2b39455654422b667a656b636435394871555562493535653557384655306d53322b68594d744176567a2b695233706c397a4c6930594d386b6c692b42736f4366535238352f6162692f704b656579322f5264613362344a53763475367264383363366c444a7674394c6966717650354e5a736e4f33783947347336613836643943504879363336776e6c4147544e78312b3164557930675475724849546f7878596c2f714b3939485168613547414a464b73754b51447851473351557163493357684f6862626843757156416b314b7361366f57426a7a4c72545277354a6462766e63734f74695a3045353337726e7275687a594f76722f6152317065546d4c553158555a446d3737424c446e6e4c7648674f73384f324a794f6c527a4d6e4d4d704861666e4e544836543349326e383847503661773954347852667661627062354942795633465868426d7550587974644e6c476e435042326d72362b786a4c4d6238353943777441302b6a3234787233616e614964666446344764562b57327565306f2b492f6253446d6a674734304179746f34514234614d75704d524332794369484547445472626942626a6267796946676b4c514d376a6a64516d3135386b663253664d5876645a676d794c357a647050494e3878305539317a737a5976316276592b6a785430674454717674505a38614a4e316e536159657a6a42656e6443666d7043685776782b77584a484a7050564377773439496266614f2b686a3261724e6b58686b772b594666444d3936332b5239347a592b365676656f724e707334736479397650626e704e33792b6e6d7574653239716a615852354d796e507a393379646878337239776a2b6e7a6d4f673251444e3335685641486a41555449416b69473347695657616f4b4b7132787839416862544f415270446c4247757261774a7a686e334a6a4c42692f4e5248666157727532597a692f4f724673547a7a5074314d557834493739306a534b565473687957367a5a3157313166666246614f755450636756644a74354a325338614e6c5357506d636961384b3958334c3175706e56683532727233695570626c712f647054646e4c6e5a3574697a6e5775354f4557422b37323958554d72544a5431635a77334e6759486d74396a382b37744a3770754778364f39616f52546170584c784e555a756f4146474e4b624a4c414b42736f6952446461504141456e36734c4356787843784d5173457861426b7478756f5363552b49483231664d7464387a6e3152437243624632734e35306d4a4d4f473837495731626e31356e647a786b68634c444e666d523159357536436e3630386c7873755a33444f656758502b587a312b55584c71545741567178366b33533675486179617a53323746376244464f41485157486e4b64787271524f443748356a5a57734b32747053387242626b7739794c424d3877505a5853494d616b78484b5836732f52666f707843376436726c68555659616369676877517344456255676871696a5a524142784144734b5341666f4b566164776263424149593346746a4f3967656331436635434e442f56583870397a324e487664343972484d324e752f7446552f6c32767330777a4d4c503172706c72754d452f4d486a584c37487574456343746d447a57315464736e4a3066646369374b55546f50466e4c4f31634235353955627468566c6d79734f724e5a614a585a6348662b5361486d39794f37612f6a564b794a4f666a592f77433170376d6b464e68362f77426764567762314976516d38367a304b576659546e6e304d747644717430514e524274777770537148594242674e4138414159416c5351416e717474635a756a62716d5742476b4c454b52626a616d56666e502b6a43436332772b5a487858577a39446e6c6e726a5a576f6170796e56325a59566e2b30374a364c6a347651736a644f73724c696d733132517a53352b5355722b2f2b6c484f2f6e77377a7836587761303933455538544c4e4d362b7331413672727171334d72564f39476563633236315973566a64755852316d685730387a555166324c727a4e656f34656337623035754f6d644336377a4f69544c4c71506d395451356961777251654e736f6951527574464341474143585a51434541524144505662627747746243326c634142304c4248586e46305935523547627762787a497364764f647633464c6a624e4851645a374731747373756d2b6a305832532b4e6c784f78766365714e5a6b5931735857393530382b3873523979744c76396e3665795059495a757573426e646f653448475337376e756438726d6974777459667879783748304c4b614d6d6336304939484b674d6b7879355732505a32374939795969732f5653612f4f666f35612b463062446156306271534a74446a5477414267414f774167414577416e41455941784f6a537764306263553767323444484666745277767a732f6a37624847725473643334667450566572706544374938573232764630397431386d4a6c73594a3041764f32584d6d38626f31785a39564c584c4976794c6776655165434d5754614f365350353937316872524e5665577650644b787237646b3970646a794a4d78616c504532795a6233705a65354f493433535a62556b446f4c6158556332665057666978326e306e4e71464558436a676c4b684144414164674241414a6742494153414534416a414764645777443941327454562b664c3644506e6579646c7a43515a6276736d554d584e2f77415863536f53786c6a796132706b625466756c7451503432366b2f5950646d4f6f766b6337444a72424d2f5736726c6e7136554736334f3363733931323365376835473365756839397072356474665766525932344c48726630312b575155613967596a51397a62774f544555725633326473335765342b324c5a5065336772306a3548724a78496f6462347141474141374143414154414351416b414a414351416e414559417a6930416b76357276704f2b57356271472b394e4a7971744f6d3135346359742b4a6d53643274426630374447336c666f3135526c3744703069446c6a772b6a7a436834337150425763336e557a6c6255797264715736387536667146703272555430446963444d56526c2b4a396a366c3256727a74576c39685272696536654368767469512b684a422b6f7071795830646376484f2f37776c61656b504c5941374143414154414351416b414a414351416b414a414363415241436576794c2f584638584a57485a32625866546c6f702b4271716d73394a59754e6a76654d396336775462577433463966555661374f612f32466a754d477536757279613166384161656c396d315733613957556b315478517870764f2b6c6c77796978656d3337316b656870335145656a7a33505a6a757a62574762483951374c59316779487865497478336251705070667932414645414a67424941534145762f4541446b514141454541514d42426751464241454641414d4141414d42416751464141595245684d4845425168496a45564d6b424249434d7a554645574a4452436352636c4d464a684a6a57412f396f414341454241414549417638412b435a6571614b4764305654612f67425655582f414b6b5665336d4874443077526e493866552b6d356173594250556e4a763770633338436a45783071544c747239487262544a6f68442b4831376e59713439634a366b56716a61324b567059736656327149624e6f3850745a74515034575654326a61587448644d6e3768715855795648477672347351684a424a7375326c4b4d6668324f58484c6a6c787934356363754f773332646a765079587372314b64355361616d6674327064516642786969516f7755447a4a697562474138726a4636727947567934356363754f584658465846782f7975377171785055326b47306a3659314238666963792f746c745a6770363654597947496335704d327746356c524d757a634934342b4f58484c685a5559612b73566459544f75735a326e4c7472586b4f54547477776c694d546c2b5a4d5848727369706d2b554f6b72436259314970736379784c796b6b752f624e557a664758676f44586666644c53434d724f553655736b716b4935552b385354456a5730523970413144456357552b4e59524a496159387a445435735456645a486a6e6a6d6b326c6d2b7356315059533367575a58796f6b6b6b56617a53737934617668594656615555393848434a42734b3648495151524d444a52617179446231304b7a422b31336c69384f714e5153593875624a6d4c2b64793471696f30764d6655523067572f4448524a45694e346c6c667072554c6a5354674a385a43474c2f56454b2b612b5834695a426b577a4e50306b476c6c575978524832316e4667504c6278685a4a6a536d327476637736363173624b713842436e3138304d685a5447775732594b3830625277327842574e614c397176705a494648635451334d4c547070592b4a494d64445252526f756d4b6c736f454b5241306e70375a483443756f365a376b6b576d6f6773364a4a782f366974416b574c625075497152327245723679775a4c74543230694857564d4373665a54587a6a71584236697577776e56724e46797946744a484f697276694a31575761356b52615a41556c6a706941794b646d61416d757361427377763756714f4f53587036396a42675232426532327258566c4e5778417a4a39664952427758345a6e514f4b566b73306b3367656a58536f39656b56365631664768444258576c37416f4b6f5676466d32562f347948384e682b336b6934713445356f78464b442b7249376e724a4e4a7669724d4e4f6a5437537773586b6358736874612b4e466e314a2f3275724d2b756d4467534c433769383231513663327167496c5a484e5a7971576e5834693258653949307977697850686851544c532f774251555854384655795a42354a4f724b56635663566356333838307870474a37746c38666c5377543739614e49394c365074413142526f774c7144572b6e745171304d6239703151726f2b6f62694d71475965484f725a6a4c576c734b2b5547534f6d653754676138382f55776171376b54596b2b316e7a316b64647934716f6e7644716247773955615852334550647846587a5646376b78653563595237506b5753684534794b5874483144536342747065317167735869425a444b4d77786c462b7a617941594d6a78512f696c4b615250384d6d6f616d4b7766772b587157376d386e534e3032394c3374483576716f746650642f6456656e4b434f4e6b6d4f2b434a7962744a45497a6457585136465766384165624964494e332f414731794c73693936392b32337a636b543245685450474a75694b6d5a536159717136662b7a576b4c346c57574e646b675a495279527034496b795976434a4d707257443462786b6651316f56724454494f6761623570656f4e4830734a6945465732557a54746d4b54446d3970776737456972326b44735971786f3962512f31665975384b50525648432b5758565538614f764f307147415a346b577a4e38647075365a304664473058616c547153762b6a6451364f337736396961354737475937434973716a3056703354376d6d672f74456869754a6279734b62684e6c4558555574674c4b7066496b4764505749567033746967566954374d51594a537a4a782f48533348445536636956304d556366614670364e44686a74593267546f474c7751494655376c666277556d6a556558534d69316859733369356544475351436a427052745755496167366d6c436f545474553339737230517459496d535635576a684a726654525a3836474f425836726e30444568544a65767042586377534a6c6c666e526a644a614a50474e4773376f703133325a49444674496b6d746d7255366c30624d4934442b30594c6f364d552b727275632f7056386653757072516a6a4f70644b5236696443644b734f4b7669687955507836525932614674584e6c5756484d2f61726c3732316335426c4d494b6357567a586c314649563070552f7154645a45434e4b62735a4e4e3144563549474d474f33674c6266797751397653776a574e564f537452366275644561766e69415250636f576f506b304961393836306b324575614d707052354569567a424f614f393037385650443146546674576f583876686b4e4f4b75546732716a4b6c2f64455755376e66427762756257752f4136464d4449362b4c474a4a6135714d5470735931796c597a796435624a737673755773317a72757a4942386c54674e4b4c62513171764173796a6335314e55382f327155315a74314932614e676b38677877526e5444737435486772436d6d3547354f587070307959346a422f4e34714d675046593755645275714e5a66564f2b347832356a4f32694e67793542787a4a2b576c67327172706b3933564a356f7442562f47416969357261472b3075744e316f36636a6c3865463337554f306a68676a73486a2b4b7a3933476d514c5949566345304f564c554b79773064596741684b375456477257384e724f487759506f76362f69566879314c4964456d4e45445a2f5755305154785232706a337347313553613973445447566d31654a5a7154415a70613346577a56363447786a7a58574756542b6e644f5a2b315831394867785a38614a434677643148496d79496d4d643141755256487352775644366a4e775779763955775738736a634178476a527957305942527835436771316c6b36626f6c574747393732375a597a527a5876523139637575356a587055514a5a42534c4b4136714151374a4d536f723556527a456735664531504f2f614c4b654f75697249644d4c506e37724a614673566a524e6a4f325569352f7744632f774342722f653262635352486972314a4d53307235526b44436d523153356156592f6d4c624c64556251324a5652725138324e7932736b4d6b69484676372f414f4a63594d496633584e446634566b584656665043535661764649534a59417361346c5250645a31735359542f774c35652f31656f6465305641705932532b31792b65393368494e78667a7775734c31666643743669636367474738374f527038434934513544395156417550694a70343065306c6e794969786b726c69334c3348745939546373735a636d66564f6d52664e726b51593253526d69456a396f5649794844624b7365304e6b6c7278513747346c575041543274566364354a3038305049616b61786a715137504e42685a7964766c61714a4a79444a53707558444a2b46376d6a5939354a4770326c567a4b69644a74544f6565624570346b783369434457545466336c4c476b426c7834387550395065366c70394f69366c7066384161466458494a4877326937504a38356f35466b367130336f7141577a48416d6d6b6155734a78686d5a49454b53484756637331773073574c474e47687868304e6b613541357a484a4a6a31747147337974536577465361766d556b71625a747537435646636d6d5a316b6b4e66523549716f714f51326d4b322b676c43613071356c4e4f4e587a324d33323339765976766d6c356259316c30486959684e3930546a766e5855503572586c5a4f69766a6e7062306e5648543350666258734b6f5272445864374d7356324f795649474e7263475a31756f636877356468782b4878744e313431516b763666586570313031556f73615057715637374331307457747362596b71524e6d5234455538325a7166554239517a6c6b4c6f6857487037534937547a2b45655656716e3277706e523539575651675a5a6a66496e324a745073592b4658324c4962565941412b7259545133625249386976465957394a572b446e4e5a47346f393348496e354e316478313755596e4f4e517a30542b4f35374e307a5a7a46544b4f2f3861396b6555306a4834373149715a4765305a6644466c52612b52443663714865366972455551662b6f385a694979564e31784c6c7366775a4959357a76417a55346b56797859687242364e4857564c43794256656532794a3952326b4555327361614b35502f756b6f546f464447367661644f3871717254706b6530726d36426c49327a6c7758712f77414865525435372b5750454d79733630556b30304d454b644861316742735a5951415763597355314e77594a386362562b2b4f5968574f45366c4d523843714f2f357665576e54765942453751416549307831472f67662b51724469595244783430736254766235593576556235746371743475697646354e776f2b717a695639576a4871534d7353577675436f63373179426a614e714d62707046494f306c723954723253456d76514d5a707a54704a796a7372475a7172547358716466557431386374704e6a6a4b46494663536e664249574c506947464a567474454d715135586a6f554b64335064307038644841642b5874694c73714c6c61354132552b4d6f6e637870757a356d355547613645484f747369344e33697241686d32555a624f6f6e784774586c73713937526c6d4f6367512f4671647a69774975726b522b38674f706167337577725337504230334f524842517047665046654d33555845596e64494d4d416e764c5178697736657544492b6f6d536777596b71644a30664166716256443531687242532f4248394f636e43664c544e4f4138566630344676794d696d57616456556e4a7931786954342f696f6d6c3562334d6b31736e4e5253316873716a6a4764714c754d6b7050506c4a746831326f6e52546a6b6c4678567472654e726f6a705234596d736778554130717a4863494d654f4d544178514972517075347a6d7650494b50487561784e3165397850654f37344e707343344751475235424c42464c647855756d7242714b364f6b615a464976434c714732694b31533132734153484d4752746c48564e33696e7831325268355352787155395841665a6b46494a395432715766684b414e637a73722f58767375654b3146736a724679506e533154545a656871476d4a6e6144614b61534b6e5a376565524a5a594a32794152706762644247687872347a57394f665932724848385a4f724e553173645041466b36706f6f7a464932584d4e5a7a547a4478353968466277696b4d5535464d66534549456d544e4e49594d70484e61496b6f6352704353745136776b3237487759695935364e3333637172377849704a73754a444666563045695171574e4d707045527a6e6c72766943743567424d4b4a757a3074784f596a4a4a5974464e395470576c576b546c486847576c6c4e626331756e394a576355452b766836666f71386a545176717530696165323162384f69364930342f5439664b4a4d317471364f79472b74723870495a546e6b5432366d66316451336a382f6e452f6a453352794f52316850497a70453736436e69576444713253527045784e6e65326b5a374930383859304e30594d48713571375651372b61304d506b6e766a6a662b754e613579374e30704255393541594f326e42717451325977783765754c366d4c466946326b44574b48374546495a2b6d53656f6c52707136314476737953416377546d725332787449326a537552643052552b7130684b68394c5632744a4d3757383630362f695876495a37696c6a676b537a704869306c434f7271543130677a796b4f596b686666752b5a4e2f7736416b7a77336367454c6a78527565532b3236747a54483951795a315a4a6e58656d724f4a59574c6f727450336f34526246395241577a733431653053645a4558456277627333524b716c704e3644355569635938325467336c43714f454b34734765386137416630535869416366544c4b69766a535645744261753357444a743437536a3575374f4c56386d735054482b706c45364d5753584b7a714a6f473948697274353570765238535046464d74775249305a712b42734a344b794f615a4a65397a6c6372752f6465397675334e4e536f6b505545416b37556c53326d7572437447345438305a6f3852493464515778596a4c414c676e72344559412f537864305562693056507072574e6351576f4b36424448574f673543736e30756c6243544643335954555875544579706d76433973596c7167754561536f68526c614d3453414973586c413078592f433954566b7033314e38546f30563256617176366d6862396d566757537247736a4f3162714661554442785a6c6e597a334b36592f332f38414133356d344351734f64456d5a7261723842617835415142644a4e486a4d6c43474a3057766a526d7463524d434655594a484f56504c4e534263656d6e394f576a575636686d4f647752585a71304d576b3033456f777454307033375a37354a4a303238636a4d385256786835484e496a76384179713633547a466c6a4849365249615454396b747853316c6b37366a567275476c74534c6c62584a486f58524630305642336c5372746353427962614b59574f392f7874617231614e7466703835792f334537545342454d6a4c547879615030387954586c5a4773613653516966336135445a7963782b4e59316a4f4c584b6a6e6a7a58636f514e4c5861596a55524d6931733665346249327434704a4e3547594e314a5a4d33776f44672f585445376a4f356b6575564a4f555a7773744932334b53316971315776624c6c784a4157475a325a7a303457744d37366a5662576b6f3541436170746d564652595338704e6d3238486656497478524a546553397962622b72384e54423654456b4572576352504968787159524774706b36384455465649664862433653796445327a627175454d675274474e72574f667877736a666c6e6146622b4e6c52614b4c583059592f544c4a67395630324e7768795a4e72614a5050353471626f7263744b7873565045786b7769394d4c732f6e4b32563079444d317a6d636433324c6c385139477848376f386561636d2f413769706d6d2b6f3157376a543873317449664b6b576730516a676c5951626952376d764d6774746c564f2f7a7a644f2b71722b70744b4d5972516a655970395153396d686851745279786b616b3675737636647667325758384145614e4d6a7836327a50584f472b4a48375561727845694e5a6c3174706834314b6c373269444b4e305767303748567a356c675843536970513370325233764a79556a4649317a58437035355a504f4d556b7278556a704d54356557544862745950487078565234317a32664c476c6d496e68795450576d4233556f6b5a4a67426b7756526449327062576d4434723666566a64364757374c5331336b586b63372f644d6f47454961536f7256503730726c2f44556743615571456372477338374935445347425875684e4e4970596277333163475a703475724b47496459306d504a5a4966346f356975364938545a76796a4b51587144385873777463357572624a6b537467616169425a307844376f6f7568444c4a63776e42346e3469656c4d524f745959762b336331565255567670574d544b3848586b745a6a473778576a5771745067467179776639506278466e314e724253494358647a55614b54704e424655546f55414d41585448714234335349374f2f38413443457367694243766c7569564a6d676b756339387772794d646a3149535163685537716577676772596f7a36543249362f64534f596a484559314f3950644d307a5852724765395a7570724f4e633263526c66756e46465774716e48346d6c577848454d4d57474a386e6442546b70433936652b412f786d3570356e49726c79584d384b42635731644b6b534270326579546d303930532f5436646a6643745558465937554b6b474f78636e5649767a3762656c6430586266426a366842697749525247644f502f716934423335343936364757644954617a45304e6a4e45334e307a644d67574579706c68737137576e3538327575486436496e2b3269345134386156647a49694e387a5a563150486a496c2b58336b534775636151554c6c4d64356c56654b4b374972654947597a354764796662476634695a54536b6a7a45592b3849713750796d6a535a3167474c43717132505431385774692f54366f7258774f304b4c4e5a71616634327a496738387676737632327872746e6a584a30706f7848556638627435497163593059554d6259386554535270737830737771657346374c305174354b6f67455a367a30646166664151354571726c61626c65744f6258596d4a75357a57743143326657554e4c5248714b72777778484f336458496d584d736357493975464b3471376b687036466468503079592f3067656d4e2f3078506d33377558546849754d463079522b56676272315133353256564b4d67793738333147714b6b746e42455746614d476b79576775394d442b73464d6c4f6539683178472f794e766c6b4a2f6949554d7932556f735745615546645257532b545433316d38577a6f576f706f68394a384733697a6e6448436b6b442f7559656f6856396e452f71474b6d66786d6e71774268426e737152725a3245792f6c376234632f774150676e6d6b6d79436e6b506554325866414e2f74784e78665a557955373869526a666c784f34542b71344447536c39615a74317177715a32644b71364d70642f7165306a523662483152567554625a7962372b612f384f58494c655573444d4b41493468327354314b6d62655732616350314944674c4d43703463715069623749696c396d344c3530544e6c3930715a6a3538586d735770675742645161516c4f5938543159587a2f414e624b506256384346525a476a7468674246474a69454a3033616d6b626b55534c35377537763030626e482f544a6e36472b662b71643376355a45543047646b72395a2b415a77714932335a355a3961444d706966552f7a76727a53613664734f76462f77446d662b79343733774c756938524566356d4778554772445059716b586e756c444b3850594d61752b796f75574d66777336594444657a4d6237747a3352467a5467332b446b7564716a6447426e726278594d6151413152514465747246666c4e347534734a4e355079477a694e537271654d307275616541656e6d6f61386a6969526e467733714e364e3236615a5038414e6f6b7a356e5a396c7a2f5a4d692b59334a6a6d396157354d69743552354173304f35576171416e31646c58513761444a725a2b6f36475a70327a4c58792f73756664632b3252586452726e354d546a4a6e397a46325269705854556e7842485739725854474d6b787a70736d7a754c6e4976474252795a6a42764d4a6767744749576f4a54445053426c5a572f474b754d465a384b3130364f36685a5754612f6f4443786a784f56484433597a6665316b69504952474538305275646270466a374636764e7233765a303241795975353270696650334e2b58496e366135455a764a6b7679753875746d68593676314c4f6b6657613130306d706168346865653250545a557a374a6c5a2f67677979542b365033442f545a6c645945727a3956735756486d695173655875364b664639534b6a7159727642394c4a73315851354b514e4d61566b3337336e502f54384231544c70594666476b746a32527261627049594a42585558675944596d6d69706353427445516a563833505847766550354f7134306b4c33644163694e473532367178772b4d6c6435424d623776783379726965795a462f54584966764d794238373830434a462b5054507265303354337732366262674a37737a374e7974332b48683231437841324b68542b4d462b6b7a45775479674968414376374a6963434f74354b343257643730584b47384a41654d4e6e7747496643504648776279796162337868324351556d62625763616271466a59313266357739795931654c6d726b4664347738754863704c4759587a6b48584766375a392b364c386a736966504c7949373831567a516f7546524c4e3962326b69455452396d3468765a4d2f6e4b496a45414a354c6c5664506339333254472f4b334554764c3837753649314a385251357037575a36427a42546f4e7058326b496375747330364969504c714c55373746376f5666455a345657714f63726c526975784d3233394f555a314d4c67733565725061754c377678503478506456376f612b5438423644534759784f6e344e2b614a2f38413044507265315354304e4c494843664c6e33796d6436447379332f7a457a2f585034376b5935794b72552b324854354f36415a3443492f4a346d4f4b346a4b32317339505458534b7534315a643334785233444738544547694e4d3738334a4c56523649376a763559674834364f34624f53315a6e42647a593861645a48716e73784d39765045546a3352506e646a48635a555232453871364f7561434e31614636665739725a662b31557366432f4c3355337a79737476387a5035376f6f4853444e5257666c4d6178733843523547374338565a76334358695275644e6a326f7a4e6d4e52557759316435444657536c395744706d7472746a536f306473776d7962382b4c634f7848684d784b353235327462627451507062374578664a64753843385443795236474466672f56586c544f7a56552b4858512f726531313335756d6d34583337716450386c63736c336c7537765635627857766a786c6b4538614c79366b2b4c475a48615959346b6d557879523231707657727851412b766e58516138385961596b594958716a56335846586a354f6d793430634952596179557079765a317976354c6d3773397650494b394b5448646d6f4538677578766e79785064563730585a5558442f704f796b656a67716a757a776a515739394264395a32744533744b4d4f652f6e3356624f454e72386b703172416a636658536d7273316c525a4b394563536f73354b396152417267534a446d4869784963614d38512f50644d6b4d3645677a635577426e656931397941546e6a56316b36786a6f5152356b2f714f4357766a4b3533696a32354f4c6d357435596d4e45392f794b4e572f4f7a6b4d37484f73503769706945787679596e34506e43695a5172386a4d6f6a7569617170442f41467661793762554d524d583739773264466f324a47647a6c696576574476684c577445316437572b6976324248446253424843384c376979666a706b306e7a796554696f522b4e6430334e4b6c51722b71336732415576714932417a2f653369786d4e4b2f4852524e626a514348374a6e32584a6a484643355778444e6448657a4873365a6a422f4448387874544b583050544c56546a6a4d6b5234306b4d794e476d5276712b3168662f414d6e6a706e3379457a6e4b446b3876474b56326662457858636431785635627578714f56555447774a6a2f414e4d644c5975325630796b634d4c53765375442f7446454c697a4b736975472b4f364d5a534d56486d4a30687139316f622b353644695352386d59365752664a76564c6e4a324e4b5271386d782b625775466b6855664c556966676a4c2b536935566a3959387353624e61504f7a2b597039507043643958326e6b3675726a733771635370315a4757442f41455a55707431335945415379593758573368776a474558464d672b63324933755646797765507730686848533437665a737872484634417453684d4d714e744a6e4a484d4e4f6c50336566353376646a66645637747539452f78434b5037722b454b2f6b6958492b772f435063442b356b6b4b2f5168337764517a71312f31666141376e724f2f56477456376d736273324d49596d54584a312b6b30556b77474f474a6b715231427678382b5955726a4f38584b79464e6d6466716f7468597639334649543954797857394e7847393851717545676c6b72774358755476547a387537356f542b4930524f354f2f35576f6d5476796b47695147384934386a6b574671445438786e3165706a646655562b624b6f504a367948474e306d766b3535717139322f71616e6644547949374537356264696f377641546756485a4e39556264766638413872354c763363396f7a6b7a337a3338753971636e4e626b644e3555664a336b724677592b6b4e42354c396f5438583358367058494e72694b3537334968586844306f776f2b57442f7741354174376d65626c58766970734966344a6264784e642b41524e345a767772356f71596e71783766307358472b586e33692f55486c576e556c747952357a49695a7468504e39657a507576384135502f4541437752414145454151514242414545417745424141414141414543417751464267414845424553457941684d52514946534977497a4a425552662f3267414941514942415167413935505769652f59543172793135613874655767652f59446f48762b346e766e79352b64664f7539416a324139614235423044332f5554316f6e676e72326844713141424d496e2f4147465735343968554357442f426156744b3858657a6f4548326558495066394250584a506648593135612b546f4938456a54534f68707447674f2b48522f4c72547053314a4442343748495058495066754a36344a363437372b694f593651537053673273754a4a6c507552575138322f6b737854547a6b562f4a624a68314c6246646c444c7a512f63706551734a4b5052564c634c71336e6b714241567a333741652b41652f6154336f6e726a6f614a363557734951705a475431316377325a4a7949795674705162695768433346765071644437306947784b6562576f794b4b6338327974356263714b392b4d674e65763679455267417730452b77487667664f67652b423965306e76676e72324c41556b704c725542694d3634746d55314c6a65636831397831544c6d6f654f76536b6c433473434e42516c4c4b35624b464b535a6b4a6d6338583952716149794f307577314d6a795a42483170576766384168344831723650656765754165436575436575436576595431784d43325a37696a4571706374544b704d536b6a563650586b336d64317454354e6f58754a615079536f302b544a73513230744c6946396b4b554f74656f704a386b75506574313549557279494f6765526f482f6d67652b4165394539386b3965776e6d7142564a384265356a4767354c53346b7a327276737a4759377356317552436c55386d78616961364350454e424c6276386e637579435a6a38637652747273357663766b57364c736f51666a51485141484150664130662b48512f357744776676676e7339386b2b77334e625178704e6c6151476b57534d7133524c65645355442f504d796d786e734f4e49625a6c74504355592b59546f725962656d5a72627574464c47544f32636d454a556e616d755578445835657a3650492b74442f414d306e6b6e76522b666a6b392b32777757347a724b35386c3239704974566755796f6752585136796e7350744879514651304b57664831486b74702f4843504e49426f73652f63624f51307148534e31746a64534766614433774e483730443137506f636764657839396d4d30743536566e4d756536706d7475372b38626143553161356a6958697550496b4f79584756694b34374f2f4459595570516338734b685372724a4979475530556d75736937436b4e6c2b74635772326a373550794e442f414a6f48766c584a50444564365334686d4e6c454f7a78716f636e544a396a4e734672584a706b4f4670617457554a3954446e6c5759504d2f626657314e6a4c69572f673478426c7a76536367774d4779473265533075696f344f50563755534464626759336a304f32656d3451632b7a6163336c39733667744f4f4e48684243336d3436584d6e642f656f6c4245666a4f786c6544773448316f66576b3650337766763259396a4c6c7746536e74316432706d46576973463235744d4e79436b785637494d786c6f4463706145345a47686d6e616c747679595a555730774d796845536f38624a374a6d644d72505445782b4366796f324932626c78554e5370443669554561334d78434c477932466d55794e4d72372f41426c394f4b3456635a7446736269486655562f5635464645757169312f724c5348546b396c6a7562354c316a6c584d70684d73724e53314c55564b48316f6154704f6b365033776676672f5844562f573476686b4b78734e704d5479504a64304a2b3447537a73717274794965345658456d78316f694e6c6343316e77343879484769424b6f3753784849626e76494e6b6f4e705a5672397853384845613273737658687a594a6350696f6a56306868324738302f46327473714f3461737366334b32327173387130767763547a764b6346726d73627573597946475230734f36516641714c716e6c4262726978704f68704f6b36546f2f66422b2b4661726f613538364a43526c39374d5a336a69317a32664638344a6b3773505a724170465669483778497a5447483674313939454b444b544e516e556a474d6c6979573449653259745a6353746c514d703276657876476c576c68485232346b70323878715a5573505755365a4b394c73366c4236544b6a70437242686b6b53356136575170666f4d4f327a58616f7a4f524d4f6554614a466d342b6a775277506f36476b3654704f6a393848373456704f5248464973322f5a777661796249746b5a7a6e32387565562b4c59302f58437459616934316a624c557474754d74775359316255516958594c306b724a537a436b576b653073554e5a55592b54304d366c6c34724e78327379786d687448726c45684b6d346947314c36577053302f7549636156636f4148356a536350733165677649614b5a696a6a467658333751744b43486c315a486652495a626662342f38304f423961547972685769354769553871644a33767563756e546357775443344836625a4b486f39686b7a4c595a6153796c785148786f7749595059665067554e4e79467069354e47312b71484c354f4d346b6d7370396a63586d325462552b597038526e6f7a4c63647a786a413642574679466d5937384a527153386c4248654c5348386a7879387836526746777046704b786962564e50317379326f705875543754396a57557173624e754669315a4f747a45336c784b54506d795733554943467a5543522b4d745770456b4a3751693379695569555531794c756249636a76792f314b34625079354f485a4256346851784d5a6f596363503267753736757071352b48345248584859654d77314d4e42322b785354416a4f7a5972703833553678572b526a6d52566b782f646a4356524a38664c61504b5845535838587a646e674476676344672f66422b2b4d4267496c5a6b755572647648477932637169556339753071345539755930792b3336547a6b534d7941645a52654c614b71714c696442455845544f6d354856516d43334a6a56586f7971702b7666733857564e54344e30474f56574d754c655a73375a4c71575747704d7431546f5672473438702f47504b3170595a7462694844626e68496b756f4f49584b386f773632786d62692f725a4a545a626865714f782f63594c616e4e416344363042337972676a766971765a4f50565757574d47726a5a6a755a537a5a64726a395563597134466645666b466844306c2b707941336a396736396b4c6158374838746345496172596668597832357a53454f434f616d7762495839616357434e5348464c2b38597849507162734c545062356d6a6f3371396a6143414a2b51535a3635537774317770326c63416e35472f725a537653695a6d5639506f6f7a71386b7947315941396965434f765952317153586677724270716c7234465651553746642b4b3632745a687a586638556c783347347862616b4b475356613257596a756f5456744f6949536b515a45645867354b684f5447416a555a35536d696c325339346a3478544857314246704f794c4d425339776f4f5254354c354c386a6146516a34376e4e6b5a4c78506d4474764b444c742f42544a6e784d656f64304b4744415a625968734961344135413052337772325970654a5144537a354d574c4653476b53343648576e325559675370365448566374706e775830496f314644616d74544850467a79314655705568495261495657544177594d4a56705067787745496a5230495250776a4b4a4d36584e526d564465555a6972747344654d5861764f33744b505857746f47555363316846794f7456376e756659787246356273796c694b663042776e674472676a72676a72676a522b666a554378647349416a764c486f6d4d67342b42476d7a50474572794d684a58474d5a7772625846443654326c555375594d6c326538753066584b4e6261324e477379347376633939494356526433306f625a6a79393163766679573661517853545574374f796d744f71365068725a525865614a3169456b74622b4b624d69417a573246744659413731384451486679644166304561694f757353575674546a314b59476f5453576246394968722b5854703553467137447237795153695738746254766d7a495136416a547a79476b646d513869525057557231642f6364656f6931746261566730762f414731733237345a7445624e7049566a572b6332557579634569796e766a363131396438416465776a76676a766d4732706332476845332b553952436945536e46366a6636654f70636b4d39494333326654486b342b467266536c6237375a486b6d466658432f5367554f307555324c79584a6b445a694b3448667a6431734e69343837456731576231694d59782f43735a4f73456d49727375783659763841554442584233416b503670356a302b7267545877506e354136344136397848664a4857716f65566e42477656386c79487a494861484f6b4d4c48656b306a386c62696a4278494649544a566a324f317a734a352b566b5743304c2f7a59623156384d4b62715275766c6b394c7957583532513237696f364b6d424e68336459755a76452b5838306c4e634d4f725a655a65522b6f687475512f6964366e43482f414636474b673841646630456438775853334d615545452b6e34706b6e6f2f784e6b55416544747a50363847334763696e6c53576f324435544f614374562b3053724e6d504d73592b32654c78484177355070397571434166793364324d486f677550535374366161306a79612b66756b312b5a6155462b336f666574346f61704f306d43575a323473695a4e6a56723042312f5552336f6a7254592f7741794470434342336f766f616c7866554e31426164486d6a4b36786c4b6c7165334a6778676f4e6f335a74564a4b49537477737251312b4f786135546b303262365574783554767974773964615431354a37334e5777615045483061522f756a57385550384143326658473169636f517279746b42503050375742354f71303443797a36696e6e656e536446314a53564b6e6e706e556837795831706c39534855674f44736c5772646e30336f6b68747866696e765250656742313262612f6b573843696775617057773963566253742b43502f6d6c71774b684a4e6c5767492f3148752f2f7841417645514142424149424177514341514d45417741414141414241674d4542514152426841534d5163544643456751534956497a49774d304a52466951302f396f414341454441514549415077486e714276414e596c49566e2b4831304a316d7a6d7a6d7a6d7a674f2b696b377853516e775276434e64534e663641472b6f474a53446955367a75784f414559556a3939714d37426e614d4b4e35325a3235347748464a33696b6850676a654561366476354161364162784f416475453677416e4f7a41515041515850436a476a746878332b70742f704535685148634578566746487733436a7651704147614b664a2b2f4952764f30344659514659416349313049312b41472b674738536e654164756563536b2f73654d376362516c52497854694846454a6b7646357a65495473374c534d516e786a5949534d6b566b6c3676647545644f334163556b2f57654d2b6a696b36776a58516a58516565674738536e65453677416e7742727944316b713745705a517439416a72516d67715974784f4d575a52656b56574a6b474a62772f534c6930794d38375035443661574e664e374b477339506243514a6679586550314d6a6a626347433677746c7862532b7734553649785352303834527250497853645952726f52727145344232346e443965414e39414d69785679704c455645483058356479696138756e58365a75786d464f32444870395847557969757271646d484c674d56484a375374694c6a52737266564375687653555639644d71624b41717843467663644e5861723543745474315972566e622b384a336e62684773413368473849377676414e5952727234316950476232526e6a414e345031695142306a4f4b6165616554537a7557583970455a68323346356c4e662f44716d4761654c4173367564626572444e564d585a7862533573626866644d625a64554536714f5357644579754e47746561636774557474796e4368395a5558476c6f3133707853642f59776a66336847733173617a7869683344434e39414d536e59427a66337245707a7a6e5a72585144574162366349665973754852674c6a6e3950516437484737336d31747945745232366669452b79487575703452574e73414a74754f71726970536662556b6b4c482f51374e67444574397577715777796c435845347050525364595269675070514233696b396f776a5741596c4f73534e6e4f336f4232344272414f732b59596b4e627070366d5a50704c586b53673674784a33555053784c39787156457349384235384b6463665535754f7159314a516848484b4f4a632f494c2f4d364b4c51523462304154482f414346754c576472364b546d2f72435031672f597a576a72464a336e62695537414f4b78486739514d412f4279756d32723065444257704e5a59635a3950454f634972314b3233433437585148573170573746635438664a664561365574546a634c69465179744b584b4e69476c62316441395358417757497a76346552684773554e352b38575033672f5978536530596a78684f38543442364a7849412f466a6c6c62785368695230385a746e7254314267574d71516e3258564a55454f4b306f64316755677256474462682b59415374506279572b69554642436d4737354571356f2b4c73506669744f44776349336e6c4a7748464a3330526e6e422b73486e43642f684569534a723755655047344643725751375a38646f61514f755346326271576c704b586b734d78575a414d784968706d53586b4d6b6f4c584a505a72615a5a66746556785a38435a57324d4a354456697979332b586269686f34506f367858306f3444766f6762474a7849333041364a5356624f6365724557396f784579746a524b3143576f74323467506f4270704c496b4b534c546d304a646b59676979666c307a54674d70714d6c317039584a616575624c78734c4f586153317a4a696542386e7637364f314535616543384b69723468566237307065543039683334373073786541782f774478366679697a6263616b4e4239676a3778656638414c484239346e46596a7763486a45346e704d6d7351576774364c33796d55535a50702b3447726c624357396c434d35724e6d71746a45645a6a546d306f635861634d6d494d47584b34375776514b3264332f46616c74764d753245524d5361707076517a6931334c6b38626e63617235456177343979566b387135565663526b774b702b6f76754e327648482f597335566b6d4d6866744d38467165612b6c2f436c7135706551626c364455556151454943556e794d632f654b785133724534664f4947686963546738394c6d472f4c7447326d7773485454664365526f4e3030347a334a635746706b5655436449596c796e6b6c547a715632615339486972545852317574797747717878745865655452437849616478493372474853773832386952366c55334a4b4f524374665458314b747541325a683348497542635835354d637636546c50442f36446453716c624450776d50616a3630416e702b786a6e3778574c38444534664f494f786963546963423043724a6d6c5256366a64775a476359676642636c7a334f4d5855613159626a723279473175756f736146784335425a39516f4b4835636554526331617362675630535938503855386a7357704c76785755354f6b5259385235557548784257307a614b4247756d47774c4b54786d6c6e72376d7066464c4f455171557a584e4d71537066512b526a6e37772b5269767361784f487a695042784f4a78486a466a6253736555363870544f5756744871304e6c364d79596f5448787078532b776f666c7a5a41434a4c626567413470444c6a4c536a53796e6161786a7a3262646375577775664137536a616c424b6e43426a6c637a5039324e4d5a3459314663397974616a5838415a416362733276596b7377696665724a4d2b4935416c767848656e2f654f6565692f4f4a36494f6869634278486a4a7a3562454a4b62523651564e52597a76464872427874556f364f73413848506b7648364b45375633716a3658466451654b31364a4d354c72334a624a444343793346506370666568495345707947557257343668687633507647576a354162516d78517474364738744c4c37584f7138747577374a505652326569385430546d744559504f4a3845355a71536c754c3357552f34664d61714174744253726167796f6f39314a2b7362526f45713535366a7a5944723966782f77424a7561326c314a6b5631317847336943504c5569796c7532453177694c42524469757a4a5a355530394e524372496c3750626665446450626953744b486c6e74516f35546750795a61634e713343625530354d6463764b6932684f6446713752315635316738596a786838352b6b3450474e6e57387545754b565868504d4b324a4c7259396f2f45655649697848796853327a3349533834724f6663736c516a2f41454376346c7743725443596e334e3955774f4a326450794b70714954384679784b59786162554643365a6c334e6537415456635858564f4662396642625a696f51624e6147726c686d4a592f77426d4567596e3650307346447065564251714847616c713546574b724c42314b636450363645353948462f6f34504f4b7842304d486e4548527a6b6b7856647836777347716176354a366956546e79714b70525455384b6e4a55323232705a3472796c504a70646f49764d6f634b484e637548366478747972725847722b6768386a6873775a6456435242684d562b41667247472f3564754a536d52594c435a453941543745616c694c6e57624d683237503147526a51375641354b5233686f5a4963534b36476f6377736d4871537368767256326a4364394364596e464b33674f4a5676456e57453777486558455264705358465933513137465a553139664744715345682b57554a68794d395071356942436e4276316c533859644974484861336d2f4b4b746b51322f54726c7251397a4f50336c357836597a58583766624a513149616463537930566c4c37704b326d6b7346545333316363692f2b794674636c2b35634e4f4d493246616b495870433031545473755577786c733834375953693670586a72765a474b56724f3741635372514178574a56674f735363562f65543769554f754f4b2f6c59706366685447302b6d6a7269576242682f6e644f62666a4d35707630646c6841733674615270597a6c3853504971773835786154386d4b45354f646343304d705a5a4b47696f50767449616a52527878477849566e4930397379454d62543942575454706f3578396e745a59737a7a71766172655254576d414e6a43645954765041785375345954766f507637774875476130526747384238596c5a516f4c536c7842556c3149527633426e45304a5a35646551304250642f4532464a59634d757a645638663141572b454568646a794f576d4f576847714937455350476c51354c37715a5445424d6a745532714f686269696e6a4367784855724c68774c73596d4162424f57482f774175516d6b6a696a535563796c435a667a484d5572657349772b634a37514d4a3131486e4e36784b74346b367a7a674f5146674f6874514f77346f38665174766e6474336850617449784c4b466f2f6d726a744b745a647945777a3761574735304e364b6f375959646b4f70595a6a734f51366770635a52334252796b2f754e536d425a4166315a78476638556a4c42492b4d34724b5570643476463762707775576b3153734a3139425374644364394165674f73336f6a416537456e57453779466f50494b6c66375947516f365563396c6c4b503572556343774e44454e715779734a6967747159783276544d516b47737134634d6c62646f38684d584679464e2b654e5445747a3246757a4856534c536649506b354933374b7334652f774239616c446e4a32417879433361785367666f6147456665453736453736413636413534784b74345272494232363569782f676a4b6853487557584d31554f337256667a53712f72474e70562f583970536d497a4d735a487a47315649666c4e734b58486a686c6e76566273496162694e35376249317443306f42576b744570616b596e786968334a556e4f4b6b6832776148714448374f52505341705773424f45373645372f4148585148574436784b7435584a436e6c6a4a6a776973535a4a346243573744735a4c305468554572436e493146567372436a465a723255705169512b796955555a53506b5072597a623365706f543358583552474a677676714373544164615673525a487556794744673835784e5737577753665571744a724b323052684f2b684f2f774167646441645a396e4b644a553635726c4d6b6d4f6975616a3172706f44436a4d386473573267457765507a766b7442636172644141797871326b705a6444514454724c776a72694c726c574451424b796337632b6c44376842333543773454724e362b38346932484c4f576b386e5945366d754942563550516e6638416f4136774866536c54707553364978467a647946464b41476741794e35576f5375573243306a2f686b316c4c6b46776c745063645a5279777548506775424f75685062344448734c57536e486639707a4f474a39703562677354714a505758542f6356684f2f782f2f3851415842414141514944424155484277594b427751474377414141514944414151524569457851515554496a4a5245454a68635947526f52516a4d314a797363456751474b436b7149474653524455464e6a73734c524d44527a6735506838455255732f456c56585355772b4d315a4943456f3653303074506938762f61414167424151414a50774c2f414e676d653138346d7471576b304b6d6e456b5a4c44494e6a363149304c705776534a64506770326f6a51326c4f7a79622f38414e4473334b6e31587056772b4c495749302f6f3954697431737a43457250525a5551596f5538526550307153755a64756c35526e616665503055384f4a77454f466a52693667614e6c565751552f743342744c36527538524355747971515172566f43552b796c4f5853666b59486a436c4d4f2b7577645372734c643861666d7458367378596d54315664536f2b4d614b6c706c4f42584c465443764857425868453271526d50556e364e4a505573457038663069304a6e546a794c54624a335755596131376f344a78564436356d655836655a634e2f48567039524b6548684870466a7a6839565044742f6f4f726b63744e687258534a55643278767339576165483650516c33545530466553744c3347306a463533364365474a796835543834367532394d7562546a7a6e456e6839484952756f535648337876714e36756a49663058707056344f70475368675548326753496c764a35317342626a654b464957564a5136326656565949364b666f3046534768736f52764f4f47354461656c5275687a5761536d714639564b4249705644625979536a4144746a45527a314258596e446c64536739437858347849764f366c61454f3143576768626939576c4e48696b6d3167426a45756845716c7a5675544b6c4f466c4a5276456c4353717a5562314f324a567438536145755444736f36677432534c535643315971446c515667594769686d4438695863596c356f706453534b576d733144706844374e645a6f715a59564b754e793744546e6f454958754779744953466336312b6a56566c3947747063576e2f414e626d5161452b77332b3947464c7963414f6d4a6b4b4f306d79692b7652466f4158495236762f41446a43474c55686253587262666c464d6253696b3074654d5373735136686130535575304c61555774737a4368657061383268774661434a715a6c6e576735705664767a54363335397a567442564e31615562344847454f7030596e55615051776d6f59554332436f57634b707434394566672b486b6f516c626373414e5533625341322b5537494a4b62374234782b44576b484e49504b4573334a4d754959386d6f6d7a61536f564b6c3357746f42504747563635417446504f534f42365230597738307564746c486b597148454246796935617562536e4b744b33782b4475693335744c4a6d6c47614a56526c505044696c57416e4b73542b6a6445706e4c5253797a726b70746f4e463677416f54624275715231527039696630305751746962447773796a637172584957367464716f316752735263334d7442797a6d68584f51656c4a7550364d4b5857485a6c4c66744b616153696750464e494f794d457033653063656d4d526633514e6e6437596462726d4c59714f754e477a6970544550706c58436744415557416b47414a46795456526377374e61676f56665769305a707337665644446d6c355253684d75706c664e725376304c4c6271434536774b504d4142725774596d6e5575612b5a436d6b746c626b7130365334744c5a716d7974616a5972536f48434332314f7a776d4a71596d567275536867684e6b71574659584a3668456f704f6b566961304650757936673073756741706346314b304644476a2f4a5a494d703069706b7546357a79596264394b32564c474175684d724f5331326c6b6f6652625a64596d4e62747153757853785a335467714a64703753534a522b526d6d374951745573367172623751774b55314b536e49786f39702f38495a7468586c6d6a62496361596b6d577768424a47363973374a4561576c544c726d32574a74744c536d424c764f43695856744b75424f5a54524a4d572f4a474a67726c3761745a736c536d56314e414c526361556f7079722b697a52396d546563615030776e5a6966616231726a45744c4f364f644b6a715141335759517259534778687a6a45374e4f57304d32785a43564a65567670536d6772513551773438347657724f736d58516e5653387734327230484f4b615a557536595249725138793675792b77485832725372573834564161744e42655066433277564d416845776f4d73706135714457346c527162346f3662514d6e4b53364c64707a424b6d67756855613772704154366f4d53306d374f7955333642433963476e3170324637657254575854634d5156564d54416d4a2b5652724a3738587449446369335a76556b76576a72314a775043743053327230544c7231727a6a716c4f4f4c7469676c6b4b51556c5a4f3961714d61554d6154306d37704553695a6f53345731354f77354d433943367074433557465947705364725668626a704b735646613362314c4f4b6a452b737952536174566f4b4845562b4554436d5a526d57646d5a6f4e714e4379796e644b6564517168385372456e4c4c6d5a7038625244534b4256674a7a6951544a534d7734354c765072634335747878474f74395130363643457249305a3568526b477255374f50756f533456756d6873744331634c376f573275624c36325831747174314c486d303275427369766a6e2b6930326e6e64487a4b57306a4e5a5162493734636b574e48793071314c666a5761424c5a664f303436796a6e4b4a4e4961527057516d5850384130684b4b576c2f577172656f5779434466576d65554a315430336f365131435a595546704b69355a75775274643049716c63784d4b62624e3662444b37505a78366f594c72794a6172436c6f624530686546704333457232656d6b614d6c3576384b356c78614b4a58744a733749586256614f306d3953752b4554306e706964744b45386d6131614831327652326d564c5433694a527761575157764a33485a7258612f58336c64414535432b364e4774534f6a64634a674a526157377374366f425331472f704e4b31693771355671535332707464446968596f52476a7a3563745a442b724e68742b586542317a4b306a6956624a2f6c43707658376a55793671792f514931514a556d6d324538496353326864664e744777674a4a4b724148717072634d6f6e32555472383372574a64537470657741624a774e6548364d5a5374476a48483948614f5a53517559657345325332324e785a53515675717541367a4231316c453674533558625171666e55716f4563554931684858457345495a51584b7a694e567147334b31496378534655756958594a4b4857704279555662595548556e5a4a4e4b464a543352704852576a6b546f7177696255573364565367516d68545a5434786f79545a30556c477361306a6f7044726f757a55346879304254453076686b54306f6e574c625538486d30744f752b6b57705256626557656f4a68393139354b417a62644e6f305464515677412b5251645635684e6576384179684b6a30577249384154457331335839356843683147436b2b3249506c2b6a30336169614a747048374e32386a714e714a725554352f324f626f32366659795832666f70577130664d53724f6b7039356f4458726243664a7453466e6d714b41414f324e424d364f6e4a665236744a614e55316334306c766154614f38484b336e6a6d49646d476c323061554c45745759556f4e4a73617435617762525459716f7168576f656d706e38597574706155363477327357454a51326d2b32756e7634512f35644e76536957486d30445570525a32436d70326d466770725976695a56715846367854544e476d6c71784333456f41446971383433386d455335445036393359523335784a71576a3132664f70757a324d4f324d526b666c72686c4b6833524f4b6e5a4e503841733039746b44364c6f32766844546d6a5a686431707736795734623470547446424330725a576b4c517442716c535465434350304f67464d32784c734a557630615a6d5466313754532f3765325144784147634c655a3068705057747a4d78504f49314d713037744f3261554b765654574a53304574374c4b7132586c4f4a62746d5a57716731595569354b626a6e476b5867564f716658716a7131564973575163514567376d4638554b527a526c58456a69654a6853514f6b787079546c453177637158657a424137535961524e4c78544d72633131347a54545a42385953704a34697362644c3772694f6d36437768644e6c527566374c4e2f66476c564f673878786b7070395978753548492f4a78673967764d41447056663734614c70576f4953684b4e70616a645241474a34516679744b5672576974645872564665722b72572f702f513637486c5571394c322f563169624e65794764544e737173504e4f4368537273784841784b5444362f77426d6853766868456c7133487951303258457155516b41376f4e526a4530784c4958656b4771334664677668353261586d534c4b42347779706b47344730622b3830683432457242576c4a325855567653716d4d614c537470524e6844737a5236794c6956424353453956596c5049394b4f72625a6266654964595a74716f584461484e6775496c4537626b784d6d334d4f4a7251754f724f665244546b3872724b436163416e474e4849517268744b4e50724b69575768676974516f4b482b554f5536302f474a51656639487470327169317834517471585a463669664f4c732f52536e48716a546b34486c4972725368436b6d756442513037592f436a766b762f4e6a384956726170684c7971576c2f6155706353647564417035584d713172335954636e36745030536f2f3173726236457474495a5639354a673173796a506974634f5543307a4b4c57514b6745315056417336316b57787741504e364354664739534b74716271664f6f4e70793261414a68674943724b456f41705657486a6a44446471794336346f62613365636f3975454d4274616e3074506175354a71436f476e474b44796c7370464d3769676a72464b783948484b476a55594b4e312f58476b6b6a53586f304e4e4a416f6763613431706a4636795145676354446446747a646738663673356a433070557464687670585330592f4d4e65526e726c5646672f752f6f77483870446b305163764b3146366e5a6170472b5a5757364c314c6353497174356d57553470704a7062466f447a646267666646586457646c715a53706839764c4167705066436e6d696162506d794454316f61646d484c7947326b562f64687443464d485753736b6b3269485058645048684275486643664d54445a53717a6a5445456449796958544e364c745769734a5534305236357362534430786f384a65364a6d6f2f644245463864444b3175487754574e484f49747176646d764e31726e35793877557a4d2f5278326c447132745651585a31744c46435963486d576e5a303271377a6c476d38426e56526838744f65574d424432397133567244614372364e56587732706d6274716d557372786264545274396e734e466738344b722b6931324833472f4a32566348582f4e492b385979467754773659795a6c31552f765861526835457042375670686c446950566453484539796f305a492f3932524459534f43525a4136674f53677a7154466974626a574f794664366177346f6456305674692b74636f64734a6c64484e424372565053754c557137506354465554376a345347386b6f516b374a4e63514233316732567468642b473267576b6e7668354d722b45557659646c336e4b367035494238302b6b5a454b7061782f526178747636393148724e4d44344c556d4d6375754c7733354d7966614157372f346f6a6e535531393131722b635a6a35453834354c6d7574615851707163434453716164304f7261714b46784e7837494e6158565669595054325268484348434b4b544c31774931535167302b745746717469635a744b55613371626557666444566c795a30537a4e506a39736f72432b34554562346c47557239704b6148782f526168715a4e704574374c792f504c48616b6f6a4869635947322b377233564845717368412b366d5051687163626639673674525031516d3332514b6a4b456d376b6d472f4a727a724c5173335931556268534a304b48727449573450744a53704d6158532b3863454a5672563953576d522f44574e477a7a3139366c4e43585232362b7961646b42684c6a59587157327175576259737171745154584449436b6441675631534e685072757175516e744d4b74714e56572f5756782b744271776a5443485a727059444838654544616d5138686651336153705237414447366c384c6148374a78412f69722b693675716e33485a69575132504f76705761743262564d47374e536268476b52494e313832334a4951747a367a73774642583155696b6668484f72526d486d35525138475237343071386f744c4b30427070707261556e566e6d6e49784c726d454941516845323434386c49467961494a4b526430526f7158616654656c79575271466739436d7277596e32707958546347394a56532b6e6f544d4e412b497248344d614c564e6d385065553158324b314661784a4c6c5a784c5a64534e6148576e5777624a4c53785374673779534c7169466b55484847485568626e6f302b74546b5545746f535672556f30534570764a4a345261626b314c6463615a56635657514b4f7247536a6175475136345156544b5764637a5339536a4c3752514f4e744250644339584a7a41516a58303245756a61516f384533305630515079344d4a6c794b31434557725a31665176317336435039706b4b2f38416448502f41442f30553648744d616f70626c3274746261316969464f3033453533396b554b37435751726443554932554e4e704736684977534f73347830434d675159784b3748594c6f39714d306d4f67646b62787a67454c5a565962635353464a4578736b44724e49307070473974533649315357306b4b73324370434172786846484453307453793836756d4674785a7152377552774452456f6254726877646361784a2b673263654b6f545a6c577170595451566f623671363432703651665a655179634845305554534a64542b67394c324e63306c506e4a5a355636486b6a49416b67384b6b52704c58365054664b6f5750504d39466f5a5579673255747a7947487839475a426c776e3761306e732f524353745a49626162474c6a6973453530484535432b4e494f4a6272554d53366977304f41716d696c317a744570504347304e4a424e6c4c59736f76787078726e386a38337042595031676c7765436f6d5757576a6774355162424e634e714e49537230776e614c6148554659417a704436536b79624e6c4775466256747746646a4f6f6f4b78367867663164737a4e502b7a45502f77776b5a6733636a2b7259526450546f5542712f3261566672446d65624353316f6c716762534e6e57557755526b6e3155386e4f6d306f2b7969313859786a62554f3648564154444a53485533574c5973326b394b626a44657266576d7a4d4e667133327a5964622b7173456630506a3838634d33704e4e786c5a666d6e397176424876364930646f2b575a77416574764c483172534234513472582b556f6c5a61554c576f533068355345754f464f4a4a43377257486279476e5443696d7739715851514c51493571746f58557637596e47304b6374716143376c727371496f6c417156646b54546b75446775616c6e35644832336d306a786839767943636b323531755a536f617572586d484b45593357593144756e394a73716d504b6c677649596c3642524451466d71425649785461336a66436d70684c31664a5a3656624d75394c7a493268594b6c4b32686b6f58567869545872327065616b4a6d61545254446a7a44776f76694b325453316d626f787241716835436d794f68516f59564e4c6d784c746555367469344f326476654b63346c4a6c715877755745764f41343751746173645654306941686d54627157355669357348316a6d7058456e6b776a45506f643730552b45596e486749476548474451326155396b6777516e522b6c6e425a557137563651436249542f666f5464394a505438705153326b46536c4b754141784a686f5443616c4a6d33616f6c77666f5a7530364b4a5072527046395461543571585958354d32745275467a4a71556e48614a69546c6454613269746842553672707452564c4c4f322f6f314a506b7a7a5976576870764270774464497055347775334c76746f65615636794669304433664f4a734963556b6c7468473238355431552f48434548526d686b48616574666c44677946704a7574634539384b2f46386d62307330724d71546a6853694f3375695453755a62543570365a4964655773595753626b317a70446e3559715a656657752b706d567568784e325654535052504953386a7163466f636a7a6255732b306b544c68785170705779704177556f31494662685152354b7a4c72622f727336567a4479716d324c67556c79315774367853507768305938764e6c795557785836327463493636526f39556c4f4d744c6d4870635753784e4e347572594933746e4f34385962442b6b4e444e7561466e4a56343670533230324b6c424e31746572537046545167784c69556b35566e576f614b6b465963316435585975466a4b383168466c557a3564507342574b45456c396a7470516e70675542536e7445596731485846575a2b556d357158626d30446153674f6c5459574f656d795244646839463978716861446774427a544745596369714e7a4b6457422b30473533786c6c4735532f716a6552746a714d556361576d687853626a554b53704f436b6e4135474861547545724e716f6c4d346e6864636c3863354f65492b51564f7a6978567156617663574d4c5830552f534e304f67684f337145663164752b71646b37362b6c58594245785a736a4941432b453257553074444f74666a4462596b38424e76587330474772536d7956304f504e344b6775547a775661426d364643534c785a6253416755794e4b39507a676a385a7a61697a4b31356c427450554f4e6a33777463784e754b31697737656f712f615a715630594151415a505252525a545459564f4b477a2f684a2b385963734d4e49316a716a6c30646463426e4674456f6a596c5a645233453854394e575a69394966326b6e31483057666846363542306f52783144684b6b487333657a6b6d316f6c58484e572b684e774962535a674b4a34624e6b6a4f73576a4a724b6b747371554b4f4974716f5661736d306c59797a474d66672b784d6f546142524b7961464948724330414556364b316952646c58564f31546f78314a625135617555755874565332735675734b3749306b36784f4753615170365273684c6d424b6e4c5149586a676f5547516a5363784e4d4c5a73716163615a5333636969363670494a745938496d4a354345744f3153314e5057436c4b6433566c5a5451384b523676494c6e48474a745055383171766531472b48584a513949576d332f41416e3543714b474246314f6d4c703843695643344f3039787033774e72786759355161745674494978706d495148355a61647852557531374e6d2b317770416230764a6a30624d793771357850424f7541556c774469622b6d4e476d546e6165686e5853774b2b307046343652476c3948614f5a79386d645338372f69765548334f32476c7672635862573661715374517a636563332b6856564b79684e55454a414f4b616a4551464b5144657065364932705a4459656d3633316233554e6e2b306f6139414d5959664f543570695253386b665355745a7239775161446a434c457a4e7258505070773233396f4a49364530454b474b3578305a37506d3056376255494a6161514c5a47435156554665737771694a7558326637527331486754414e48536d5566546a632f7548736439353545314356576b3078536157616a7372446a6d756151307739656d7736686b46466f55767375447867554147416846616930306f584b51344e3153446b515956615a6c79576d542b785545754d333537437848716e3777704736744a516532364e357955594b2f615567563865543839497642662f414c75383270502f414244482b787a6a4470396c645766657635474562794667703638524732323641734b7974556f5231787456756f4d6f4650705a6738524241567a694f6431664743433659546162344738514768394856684a2b314458656f5135565071444341416e68427168326555686f2f516c30686b6a2f414245712b64454573796a4c4474634173323130376c67774c45694472454e4c764c78395a5830656e4d52707557714b31314b746373455a5755576f5155533945745336466279576d363364704e65324c706c396c4a6d464b2f584c546c3747454f46743574314e6c775a4b7237754d585050494c4c71563474544b6559665a4f4543676d47454f6b6571705142506a647959504e4c53462f54626f6f44744665364d6f79766935744345735548467031316b6663536a776a45593963635956733163734534464773565a3849637031474164544c4e4b6c6776313348696c532f736849377a776a666d5a563143612b73526439364d78583543464c446261336c57636d32786155727345504573473977493356586339485245694c65436e4a65373773544772566d485152436b4c75467944376f49554d654367654268683066535354384956553268637174664742794b734e6f5356754b39524b52556d473745317151354d49475437766e485076452f4f5453586c325676756b58374459744745326b4a57725355304275726357765a6236716d744f416852445a655a44744d32796155373656456672564876326f33544d6f556570727a682f64697571315773562f645855485a472f56532f356a73695944476b304a4463316d3038427536784f5a36636f61314d773074557977316143775a6430383035684b36392f4a365271653870582f59744e713176335651716d48636234637465377768615579733430322b34545561715939486565423159724371685172316a69447768305771454d3272376138714a34635964446b736c68434576633151516d7a62723077664e48666d556e4d5a4e635430376f684953326b575567444c2f574a685153687357796f34414a764a4d5531546a7a69306452566148687959786877686f6c7a537277387365754f715962323232414f4b7874486f4d4c536f6665485a444a4c2f3750476e54415173657061322b364e6179384d61565453505049416f4467727654663378524c786f4c4c6c784a4f56595374506950434a6b634c4b37753631436b4d4e692f574f7173704861634962556e5279464a63537051736d594b54564e6b59324b69704f437372766e53687274495441535535366c6e7a697164744232774f5a4b65396362766b623333556b786b3554374f7a38492f337044662b4a35763478364f577376762f41456e6e425544367154474f4d5955494b5467704f615444757230693072574e436d32307334386253446d496b6e307a41754a6c3231504e713655464e61486f565346744d58616c686c53716c4b6435646f44477037726f4c766b5366367536747661516e48564c415564336d6d4a76586e454e4e425255615a58345162334657796e496341496e706c6c73383174306850644479336e734c6269696f30684163625a435347794b70316a684f315a34696b4955705178435255447368656f44517134584275694b73364f4f2b5463362f544d38453941787a354d636b2f474e34776f4a57382b32794648414678515457504e796d6a32466d69667a626a74416931785669706657496c3754504e6652656e7579696455334b69346931612b374347332b6c615350424553395565714c783242554e36705856536b504253547537735363314f614e773163744e4f73757348693359574c5855714e664d53726f7168666c30306f484b68436e4d52774f4561496c4770684f4479576b3633375a32766e62626a766b6a534a5274706f46777264574e6175796b6459376f7365587a433071656f61706151324e6c46726f7153544339597437656554756b4a6f6467353963645a693576526a58347857654f704e516a36314978387263623747396a34636e5a3178636f5a6a474a35395458716c78524565504b6853702b5159512f4c4c43694c494670616a544f6f54534463637838594d4c73706d5541494f57735153516e72494a6853454d6f54626663634e6b4a554c31465a7970466f614c59755170516f5831332b6350424e39776851372b53383868736c6d733270646d71676c417854584f704553344d7555536f6373373273434c31564f4a706a61787868394c5338773773654b726a44434b6e4678477a612b736d36464b5363716d304953687a6f43374e596c486b714f5368525059633463383364566c577a54704548456242474e4f4268522f453079624d38774e704c527731794f6c756c35357963636f7778487a7358726d6e6a586e70615635386f5430727441646b4e6c4c4653574a5a74586d774467485058706a5746326e436279714756765071335732775366434b4b666d77727974784f46566a563251654361303636782f57464f4b4c76743176356366667933526830516d5863564d797267564c54446862512f5977516851426f735a476e47415264676549343459526a4371447268553272516a63776e616d5657576c4f325471626c622b31536b614f63646b684e764962386d535853684e6169304559584559786f57635249746237726a4b6b43687a6f6f5670784f4547696e6266334546667767374e415365465947506a434c553271544b57676f556253685469617263367156706e4474715a646355745a416f4f6f644148493674424272734b70684471566a39736d2f767967616c5872596f3734516c624b7432743436784736623064503841796a614835705978413659546153352b397a597235526f776844616a7a705a797572783953685432664f7559307466634b787547596b6e2b7a5742732b4b4f535753394f7549446e6b3779664e4d704f414b54764c343177776952595971622f41435a704c4e657579494e6c4c57366b347256773759506e46456c585763666b5964556541354f49674a4d6970616d4a693367454f697a61364b45347754354b464a646c36332b616454624171665672515a7832516d3079712b546c7a6d422b63563135516e386d4e4c4b454570705a4e704b6b6c4f4242774d4e71466d7031726969747856627970536c456b337764596b696d47584255614c506b38306d6166616d664b69326957556873323061757a536c2b7a664575793268656a705a31534561515a657371585736796b56633976506b516863354f545a5963637a6c327969796d3177565547796e4b4d71667a2b53664e4f45424830467175413759516c6157337250314444434c6a61517271794d4c32314a4b6b494e7774694779684437717042394e4b624532765a2b77756c54383677526f2b6158396c736d4d457972617637786876796a336d425644303477306f4831564c414d424b70366174366d315170516b59724e635361335250764f6b354b634e6e36716342475038415131717738322f642b7a5661687772306250532b756b72375162516e46684842434c565539426730572b386958536542634e6e34774c4d73773068744363676841753849397273684e396d7773653478656130687430756f73726244564c5a734c7273326f6c7074755a614d73797a72436a635a533842686c664172532b6b46496663666257384b3762696b4a323346646f4564487966535a3955476c7556543971672f6967437156454b536344306d477a58464e4662505443694e616b6c4b686a5535396b55317a7a4131344631486b624469657851507a6e2f71796154397073694e353974317866384166566f4f784e424343704c627474564d54595354345173715235456b4469504f4c752f6f5256785246423177384751425767326c5858524f456d746c5670482b63455079795a747870702f4f58576930685573665742705643756777716a624d334c757150414963436959764e6b303749425473336a6f354f6b3439454339787177657478784b506a416957577372556c4174584e565561586e49635938342f354f6b4f724f796d30705a736756336163496c777134586f6354444c6a5a2f614a7331366a6e386a4b4d55453050304d6f7775446f36636a47386b685136786643384e726435687568594f725569655a767853384c4c6741344253612f572b6370744e7676796373736355767a43477a37345035517074534a6449784c684750554b786861554f327952484d5557316658764875504c68782b546549394d72634279482b635a6d776e3252473862785469495a5576517a3761486e74556a575053637771354d3032326d3954594b61714177797a69583137457a4a326d71465362316f79705a72594a774d47756b3948684462396358573845756a32686a3078756a446b7776543452525367734f50704848383033323439304944307954756d354350382b6d4a64546c4671437257434c6c5872395544686e413834353531646e6332453041415631347749465152516a6a584b425357745756494f4b437234636e4f354e327a71336532427357437673673159786236654d59554a685a445346496c4a724144796561466b4656636b71736b2f4f637449614d502f414d343143764d797a586b3652306757316550754547696b6c4c6954394a4e34685651346b2f5558694b39735969366e4c3434516b646b4a2b4d647768486d7855746a3169503551545144456541684b474745437944533073395a4d65656c363432516c61656e5a78676c656a5868596d72463664537638366b5a3254663151704c6b764a5459636b33454b744a4d704d306462736e31624b774b38524461457a6158304f4e4f4e2b62644678466d3041646b317642463853363551706d58576b4c525635736f5253696a5368466135634930764c464e4b30316874665a7057473959722f654670734e6f3667627965754b7550326b6a5771336c4b6432696f6e71354736537a4b6e55466554366b556231615032536563656371345851346268515a4144476b4c574343434b472b36466772534c53484f64544d5263773668624948574c49506648433134306a726a6d3154346d4453464b4f6142305a78764a32316e32736f39644d656a64326671556f6e77697634786c4647526e6135764e446679337852586238344f7930374b7a4b76596c33304f713842466f756c2b626151364d78626f41655265726351324670586c617267726f4f634e467478653034326561356d42372f6c4a74687447737030314168586d30333333415567624351484b5a6d6f336c637639615943314d482b7a55525477454e41535534332f414e4b535954364a3142736c394147367042394a787868434657466f585a63516c30477961344b684b42614a565a4351414c38676e43414f527862612b4b5655696564716b56417258434b6c4357576c5076557563434b334a5053704e56486a484f7154384f54306a365179306e36472b6f787a566c586466484148766a6d6d313358783678354e34476f3634785568546836794b63697147776d2f68534b6a5237774572704544424341727a622f3930546639452f4f44517a4d6d2b77443075494b5954616d7070536e6c4657364b33715565694e496c536b68494e47746e414736754f4d576c456e62634f4b7572684870513251766f76325238684a556f2b485359373834336455734472336f4e425557556e4566533749765861705832646e6c6e554e75704c68554c36693034565a524d496d6975777159305576304530777446464a4664787a45494f376b654d42784b47314b625368386564545a5653793442676f5a2f4a556a385853724b33356b4f6d793262374b626651635431513055794d75776d575a4e697a614739634f6142573452686e586f6936587256435469352f6c42325549705a2b6c6e345236525641656f636d617166492f566d4d763452542b4b4f59324c7a676d755862436c5746564a43715753416234423163704e4f796b756f3573706f70492b706173646e7a697447557a4d7169764270314e6e7643596d4e5175366968532b346248472b485632546a565237344858474f425658474d4f4563355152396f776d67336a32596b386d372f6c6a426f774b572b694252416375485253376b5049397135786b326b2b71735a747147595645675a5a656b35564c37696d7956797279716244724c6c3153704e4c53434152342f4933633456526c42736756325079626255366f6335535362494f564932625679523056724779744a436d6d6564304b583849775465657946382b313333434f6f64482f41446a49566a6837343463763673787575454a505554534e33574f4b50314d49516c55302b64537a3674636261766f4a414e727169705a595453307265557052744b57656c524e666e414f70306c4c4c6442793172545262574f79674a363448354f77564d746a695533465a354f772f7a6a77354d6c417876325631377554654639654544446e35714f4f31447136464971326b424f413962474a5275755263322f336f51684b55345551495961556856393642534b797039646b4567644f72757232524c757a32674579636f755864516e38716c6e41336557554253395a5a497446756f4e4c685750534a4b6b7175556e41304e62655663754f4e2f4b43566b30534569704a4f51416832772b343438347555615746656274326b36776a456c52757975684e586851747079627238594e43545373487a727049434f63526e325162386877456335523849395258756a315350434f416a71354d774935366f486e5550574639554a382f4d724d744c715036687265556e32313439587a6c4e644b534c766c636f6d34617732536c544e546872456d6c636a41495a31696c7467697955676d74676a6d6c4f4247522b5232526674697659617865516b696734556a736a4f4f65306d766453454253306c48704d4146476b61684e62747a2f4f464e32565937454e737262546c65676a714d65616d62506f6c4865366c51765636525a5768365863714452316f464e4c2b616f456f4d4d496c4e4b3743744a53714c6d6e304f4b31666c6a46627a357935514f304d2b585354657130664e75507a446a3742466c734e4a736d69726965634443317274504c45747256625851622f565361436d4559516d72685259625236784f454b74486a31384f726b794672764d634349396e786a6879376a642f644871434f6534663355774b483870752f76312f4f6d71455836535a546d503841654150332b2f6b487767434f714f6362506664462f6d6c376564624f48564764776a68472b773564374c6d3050456d4f65305570396f59526a6a384936655130554d44775047462f6c51716c3072566d427371766a567454797078656c4e454f32687671624461674c4a35746d70542f4143686f7450494f7264624f3868784e796b6e6f42776a6579702f6c44674834776d467575797a643679614e36734f6e364f4e304771476b5751654b743558666a47464c52366f33555839776a6a796573506447653147642f644847764c304166474f416935615656565470772b45487a6b693762592f374d2b53704f507171716e7170383646334177332f414e437a696a715032446d4a59367655364f5471354d554b4375362b4f614e59665a46776a4674536b6e3674305952364e38616c58587a50474d6f33645a62523743723078786a6949796a63636341376b32666a43617561784a73336a7a674f735475304f466349637436476e6d664b4a524a4e564d47753277752f46767076695731786c69702b77705151674f4a75515656764974307243725a53536c487136785635732b7944795972506749577444747a563242474d4f345837734f4a567470565443742b454a73527a6d4c583251714f6b523071377a546b7948766a312f6847617834526457714f38556758716b5a74745856615172336a353231724a52394e6c6166454564494f4562585059657051504d6b30432b764a51796a3275583957795075442b5a6a395a2b39667947684142423451726241734f675a4c48382f6a43617574334b534c37614d715263724568517053456b39516857705970666d6f707a6f4d6f534e5542595168506a58704d477157623346635865485a45764d4e61536b356c6d564d3247564b5a636c4a68335669305264625955764431596c714e4762456d39704e4664536b5741346b6673314b4467787571627349486b775a6242734c4f516f4c64656b77386c593432684330304146546147634f7472462b44674f39742f474e303348716a30685673396b4f573761413561396f3070482b344c4832762f77436f79456570795a6e3352786a6d586438595267784971742b334e4c53522f77414d2f504150786c4c31656b3163565a746d75532f6666463345474f42392f4a7750762f796a4e5950335248474f45433032626e555a48713652446c73633463355057506a4374314665364e30692b4e3950757a385241747668356c6e5757536f4a537044717a71694c315573646b4b57786f744b6c3235684e366e5635686b34472f46654843473235567078716a546a5366527643696b4f2f53556c514237495959457a704a2f577a55736736356c4931534a657a744461425369706870727964395347583556787657574561314a5575584a766f4d624757555438693873706d716f41655461435856626f5567455550476d46304e68765962516b416e616f326c504f5051597a68646d4d62685434786945705033524742535548744e49356d7a483066647938592f5749393066526a664d797a4b48715961446e2f4149767a31464a4853424b6c55356b31696f6658337575764a2f7138786a66377a484d616142363656354f48497054626c626c497537343162746271754a6f622b6c4d4e4d3176794d4f454a5554577a647647736151664f6a46544c536e72616c4c415a4c626f565a2b6a6543657145424f72545a3833636b49395564484a2f72756a584a516c626c6d7771695155304f32452f36347774386f5a5355457572714e59706131713938594a6f44375a7835636a58756a49326535524d6573453979625838556672536e776a4e52384f58316a376f395a50756a4d56376f2f5036536d6c2f345a314838487a31436254533564786f6b56737231795556485451306a6a48524171323034366669504577617257674c4a3653547963506c656c614257327632727151484a7252424a6f306d6d74597a4770725155346f4e33434a78443871713630336b6362436762307136446646735562714c4b6256354e416e6f687474704b685233556a5a4652513036387a413835554b7230692b4e395331452b2f34387564305937353972412b456358462f5a4e6d505756377a7964584a3679666447625950324e6d4f63564a376c57506a482b2b7a2f4150384155722b656a2b745437445032617666775278484a6b6f4b37785434522b7154377a796572794955514c79514d506b4463494a396e4f4c325a684f75534f7534784e367453674e594e6c6254794d5148456d342b385155366e796443485132684e53724f2f49567968674a7269584466586f68354b6250304371484c56456a494a7869734d713859545a414e6b3973637852633778534d6d796c50766a3169652b2b4d6f7a763550556a6e576b6439306378524866483575666d302f6258726634766e76506e79353968705366346f7a2f414a636e3673652b503161666565586348704f67634f324657556a644854486f6c436f723478787976354d2b474d56576e655170536972727568434c3774305169746274684f4d4e6876506275384965507075614b59624549725a7a4e2b516a424b5033722f3465544865336f2f4f416a3678766a63444970326c56597948766a723565646433786b7348756a383273722b4d596a5364727355773250683839395764502f436a2f41455658386e3045652b4f436664795763596d6454724f44566f6b6a436c38544534654a4253304f304e5877452b6b3369536f6d764731457574516f62774e6e7668535730344768744837734c587371556767624f463966644571435436354b364f6a7234784c4e4e6c4e344953497154776a5a5042634c744f4651325562575549473071337464304f55746e424d4b50664755666d33666474527a6a596a6e4b50684856386a3276474d46495144314a466d4c6e484a65576553503746536b4b2f66487a336d796a792f7472412f686a4f702b4877354f6571333850684241745061712f4b6d7a4351344d724b762f414c6f6b58624a5651376f75726c574e55773045456254676f6c4b66597a695956617056734d38366e74524c3332777043334c315634386e4e5661724477734c536d316657394f7966434572585861545a4850454e556677716f316f73657a6a4470526c5a514c5062435361626c72694d342f4e43314858794956434664304a32535239335a6a3833543753425a5068482b722f414a505051524759633844467a633268325365726b566f31696539534238392f3671623858584f54474e317449413630782b7374487674513831396f52504e71577051716c473368374d4a64574d5632685a425052434570707333314f5051596d536e3241452b364a78373752676c52566d713833636d4949563351326f6f6370556758416e6a42616f4c7855576a436c2f5641544671327461576b625751764d57746f6f475045776d2f6c33306b4676736a64554e596858546752484d6449487369702b546e62486a4836317a33522f584a64354579782f61746d306e78454b745337375348326a7851344c515064383879305a4c2f385230386d52743931385a374d5a446b79763768474d4a4f49756954642f77414d6a78684b45444f326f59524d43355154734a726a436c4b37516d45626543696279436b32565269693736716f394b6d372b556349636f6c7356563753386643465769464652732f59454a37385958384955714671744338646b446162526252304a5038414c434f634c2b78492b547856373435327358396f576668484f5661762b6949555376523736354f707a626f48572b354b37505a38382f4e5363756a774b2f6a7959714961485a6559396577507133712b456571456647476d6a56314171556a4d784b74704b6a56586d774c4b5275776b64776a3959462f5a466551513468427062323143757a6643716e696c4a4d4e6b685372597264694144444b4b55493749644356684e31684f5236346d585451566f646d74505a6a4d7831664a34687058557638412f59523949655079656d4d4579684a366a663841475052684e4578514e7a5571616364624b71752b30685a505a3838396468503257477847386f6849367a64472b6e7a53656c527a376359394731357364664f3859565a5163614373544c6d796f486570684530345671754e5457364876756a2b5550717449436a674f64644532756e585a68313166576f386e4e4e6e6c786277366a484f494866386e6548756a474d456f4a375159336a66386e47676a4155536e367072475a4a6755506c3744532b7036737172392f35357a74497a4948556c77704867494f35636e727a69367a56444936546e474e65547235637950442f6e386a6e44336375657965324d4c53666b595269636668795957785a2b746a2b37795a63755a7048363048374d66536a6d674937726f356b2f4b71376e6b78782b64594a46727567315574496355667047382b4a6a476c4439612b4e317635576454386a6d6d6e66386a6d6f736e742b566c63597a71763671646e6b7a7835665748766a6d4955723756305a425076354f64704752482f78302f77424c2f3851414b68414141514d4441675545417745424141414141414141415141524954464255574678454343426b614577514c4877776448683856442f326741494151454141543868396d3374572f357a424d457754424d457754424e364a2f344c63304b4577544a6b33736a2f7741642b4c703034554a6b33726e2f414954386743675868426d535333495557434b70724674776d69496d7730434e47586659796d785467677831523052736b4b6b466348546979623157523973334f2f4e536c336d48784c714c2f774270486338494e6c413166595a4872594431454367344656454743596d6d454a39534a3957374345524a304f72755768454d7978316b73384a686b7766735a6c79333661384754656f33766d34455168393641462b714f5145594f377670574244595368676335367a7747586c7a437168626652674767517832526c706d65524e625333594350594832726358344d6d354350317747725048527159755253535867587142526c4c465467395067685048784954384f66684e6738496e4b2b636a355561356b3156467355495a437057794f7655374b70454f5a76535074674f63456d39307538746964776d45663869494755416a614951416c504b586b752b713051746e4d375643434d7a646358682b5455493242766757515a4945452b6c79483978366959694f3042654b685757715149525a72675a57726a714a584d674943764c336c4333316e42656567546378392b2f507077477842654c4b495a3441534d4c495365756842617552654a62574a5647526352566b456e42414141756c486d6a425141356b6f77476a3744566f4451584a41494f4a613447774c52434a5530383047564d3451556b577354616e3262654a4368544744475a4949584142636f4c494d5a56384237314342655844705778344c455a4777416f76794636566a4f5645433643506d43764143375171476f6f6e485743623339614433516e3672334a686e6e36345465775071446c41542b6a6e4d795268614f5643617347777048315541454941353975614e43484c4144306b396b2f6347495945536179636b715242416b474846335277424f6a4b544533456f356877466b77784734344938703133714e494b702f7743667254415259524e72386a596172717832546f7457556d796e7653695746493167446f49473930524b50584135694144474c615162584436422b634c43564a686b51634a387751576b45414b6e71386d344e5267634d62644e79507a74794833444c51684d68354b6455325a6b674d3255553656436c594d556a5a6b7554746d572f59484944636969554a6b41434751574c6750533650525a6f784e446859396a4b7650666f34776a454f7452514d78594c76635a617545446841682f4a564f3434434430657254723779594b66697774415542514b396b7646597937444b4271597641666e507741682b7a5a6743515a494b4d66782f48347344647a71716546393533516f66726d5044766d76496e63424439482f61526570743531514f62765131626f436b752f4c4e3763656b334b512f58484e4933544450524953304a6b345647744d5a77395978306f71534e425a6c3844594f6b4731496768757a424b6a71646d684f4f616d794d6f304266764934704744356963426d584c5369644c3434412b5a393050516f63416a4a636d4848314a346d365746774d4b795457434c4179417a55643061596c514f50616f573143716e30726450445759523773754341704445422b704658493575364f444d5334755434635031515a72552b714f552b67423742326e43386347543733376a6d45556f5073564b39352b456c685230396565446f6b69754e5543794d6d4c78794b525766463065536a725577524f5846616951425973363235494a6e446b624a44495a4179554376677a454a6d4b4841354b2f7168326846796a363251512b69422b6f58554f4275562b42736e676f674d6f39527032584d4c47795646737047366a31703152395379626b50724e364a67464e68504650525163724a527a46484f79496956696b794c4f4673332b4932516845585636327673674968546f43656d575532785366645a5674636e4156684535537170456937486f69476d6b3236356151736c6542546f695553696a716934453671344e44495052436c416751586a5a434935324744614e48676a53364459385379753336346842315769747a41632b3148737231652f4b4957416c6b4b455670796b4d6e4c4d4e3056452b7967486432777579796945754a6a784e576e6977346f42414749647a3877454844576b435477796f4e615173503152436878593777556573795975593457356f46427546544b7572334a70565844684e482b3679444a423631447030584353774655424e2f425030425850574a2f4a507578674557544236414c7068524466496275426e5935443668394d6570356d6f446a336e517768526871667774784542636c6a7a626f465443536f4c39576b4d6b7742674f6c484e45355a7564736c36674673356c7167494e657a3570546742436e67695135716e4f496c3054597441634733306758466b31683039396547624241436738684a70564167685561764e6a724b6f553856794a717a6f2f6b544153414e36357842504e577a41314671584973627841576f453877746b71472b33316475794f3942327176577432637875553835357a7748724f326857614a55674743364641453535763550424d6e493444636b514e56354779684933627a4b4e6b493345496f4443777a52686176765a766f4b41514f304a42486d78775271383555446336716c454843364835564b5445356f744a73543972324b3971774a42756a556b456a427430476b355a6f4949536c476f52705a4355584a532b6c6c62307a364139594a73594b796e4d69716e42415043584c4b5749674a797375534155664338514b67706847676763516456797158754d6d37664a4d7554447748714e51553436524e3577454234637a4b7033353149326a4e6f4751467a4f744376597a596453724f78736c787443434243514e7a37344e6b4175516746466a6355457a63653466594c4555487965776753414f7430493361476d467856427659676559653045334a354f64374b4c5a494a78446170584a4f59456f4e6b7a494e47532f6c383336436d354c46414c515477696930534e595161365945675475764a39464f456934496c4535784a43684c686951343767425073742b452f4557556169526773556d6935492b6d78686b477132526c69427a6652457452425733704e7948674b637051346a324a446d6d5a6a593364416b33426853505261443461723775756b3358507878646e597357726a7567742b50347a476f5351676f53377557554d2b736a797455736d7841636f6b4a7047614f644e75447767504a6f6f3134592f53304548454c555035554f436661722b4e3745493834346e6c487045563062497168477a5a3158646348536f44527346474943614d495142456d6b63734858796d424c4f69696e657453714e466d2f75415177384b37517144334141683930456f673977594a754c55535433675235415474594e53413842442f593532514e4d49645a6e4b336d4a547262344873462f517837446645634d444a3745415475507154364235523747734a676f613948597746516863514f7a6152654876583341706a5a6950497139675573736b726e534858597168683367482b413449746832544e646c72465072485962714a3139534c6338486b7978537568787577595747456b45734b46675471736e6f514769627a626344545067784d43415654394b4149445a442b7a454673574e787356304b675766594c365751554a305232426e544947655459514670726250322f4431447850455539414a2f5732512b644e4959594b416e4951677a787659477a674b754b6a69746e657a4b754637415742462f526c41305030495564534b455a39597a6666565477436259455365316b6e4e55525649316e516d6742475a44446131316167786852412f384170627969693077693751454c426b52564470466a62544c416469724e476b4d58764348725141323549372f5363516e622b7859534b43507175687a6c526a4d3179476f4874355138576b6556564b7367524836474d533634744a574c717257742b453850516d436f646d56306b3059554749445567594750557743794a723874413734534b4467683034422b6f596b51306c314a775145513559446f68325169446f3378445953674547503670385a4a5861686b455439686f4b71334a7056554259555761796a69384352436e6e514337363839476a4767774d554a694b38447948676655504f6438314a347a3261524b6a5361655551457a4d6b627666697a454736774955687169737148516a6c4e46785a795157514566466a5a6d524b655956704a6d476445464f67484538656970376f7a6772464b4a5a5a36416a67492b68776451615967553942794231564d414646576f5248504661364a3262614843396f714c4b6a577173414c48534e2b6f6f4574674d657373684a68656c3062517052364831466d425967484c6851677241457a5a305242564230556a525963774573585a6d6335426f4167596f774d7173417a4f354530784a635667466752374a773834537144534e78386f432b36566a644141342b76644d2b784767507169523544374d5042422f5a50354a536b3456597735564c576c5331575a79386f65334d68786f4e58466b4b2b3059436947773043324d7676316a6755316a384e666f7377425146744b722f5a416f6464675156627656446147346a6243316e324865474377747853736252704c7a596a31617972682f466e4a70724e6b6f66705238486768644f5249324b6f586f614f594a75386d7056397252422f356c4a6335684f4375706a476f6738556247732f365879434b794548494a6c4330682b5145736946614d494338327977714f545170514b42575564654e4176342f4743515a337951466747376655746d3642794c50307948505164554e7466465338475651324d7944414441303451665a694f775131536e2f4e34704478764165425239416352796a6a51323542726a55446f47515147526a70724c455a417353414271724a4f497661515065656d784b67584d74636d52556b7450664c3049514134366b5352455a6453395163376c413543656c5564365472375567724f6a4a4d31676732324f686e7451496b596a6e52677573323452456c544c35336f6d524e557269496c6f42692f43694c754b3646677138357a334239694f4e7636396771416f4d78614e6752585661713557617847507a39304157364d30485939784332784645453162496b424977457078444a46495834704479736e7842354a6b71414e7164536f466a6e514c513252684c754141756b676b6c70506741614f3156564e54514e7576534d79735552332b69786f4849356c41336a6d49324e4143665245447051554e437545796f734f6e4f3765454c524541414159494441484b5566514845636f3437426b75614973635643516c676d6336677175693430476a3475646e6a357a697a382f594273676f48595270482b4b6767565a517944425235376a505542493873666a4d68786f5a79523762614c47796576615177386f694d336e464847384175796b504459414b48466d724b51594152516e4545414f7953486f6c7374542b704167687741447a755479426a414c43554737467449546b6769374441584945705131646a7142573658594541686b56485948625253317530685874494f78636b55685161694848786349584957595170393677642f7836387852394733416568614a733130596f6b574942523267335362774a68462f544d684d6d6a2f53376950474a4c38766d68474743505974764748594f7677572f755879335730615a68725143527367304b37322f336c474939722f6c4545314964694835676a48303351687955417157456f506a7763423745573664715149582b4358334c55474639333348784a745844367a564d6767315357467968562b50394b51675a726f68334f70536636487a55356f4631462f524867506d35422b53415843585746415a746452525478756941554259715942617166324c6c50435a4276573349694e756246486a6267655333416335574172446753324c7745306e617279587141617a7255617251392b4f6b4c36707a2f5a4344594c792b4a4458412f317a747847475742736c324f354d4c444268624c52644f54784d7a38455a776b365a67754f2b2b366e6c6d4c34454842514b674f787371655649626b473442494478454442327268414f7041436f6539316f524e515555513241355a516d78684344632f463070566935694652595a4a51384d57694e73674362784d4c52387a75616442494a55434f7445614932356969637145537330424a6b394264644239776a45306b304e6d6579444e517a2b71456441556f2f5045326b3053444c31765472412b315361534f574f4b432f464237364e3255632b6b64716f39427737726d4246486c504563527a7470726a732f3364506e4659334f68364235564d5571794876377172314d50397244716e4a41614962707230465741396b45534f394a735150375554664f745633616161576a46344a783761795164736a6c6257674b55436248414f366f4b683642756a6b754f6956465543306877464561414b61384a542b6965332b636d68502b456362614530794a70415575475162435a374148684169682f4951753550514741706b72734243577a6f424a46663454344643494a6b39786d3467424a34524875546a75716756744a3335304534685754575a54666866344f79466c6333684b42674e6a65796472626b34517263454739786d316653506c3642394563527a6d70302f595372754172446d6a3672694f34544a6e5a474d63714442657653714d3464796772483165382f7752546c414f347377556164666a634f71496875596741693455586d614f4d4d56336656777276775a4234524e564266794271394330476e4f4651754a4275372f5a41444d6b664b696f38772f73796d354d695547596c7161445a4f4b6d57705274615230636348674d49715245356a474b735859457933514c2f705552664a2f7744536b4f756d456c745535776d543041497950475343414e5143654c446c514642476d4656446541796864615757506b424145494a687755494d763642354477504d4f5956436a664469733231625271596d4b6a4a66776f39473742386441764b6f4d6e674e55332b394f36473267382f685838714b57362b776a744e2f71716b56344e6e6f516b6766735278686b394c4a305867536a67454d5634516b6a666b614b6f4f6f71485a41442b684a4c5a6766514a692f555357382b6d4947647a684468706d79475a55613476464b633132356e3951524e4b472b5350586a694352414a794f4f4d7953783051684949515358414e546f546650706b5a394a5159464f414f37754359535a777572364f75536430564641696a486d674934594f33323154754a7a4356422f436836423544367a523137396f376f4c49332b43464949774a4a32513956362b71483356412f38413965385345474b6336494841366f2b487a625664313541534348736448366248414c543245445878426f576c734c6149374163617746323971617177706c5253572b4944515568436f5a6e46695767527a676b46512f434b546b696d31464d7a46534a75574367783130577279475977423057776451317a6c425a484138754a45324f7a386c434557344e436175764949687941356169362f61716477515242786f7159514f36506e734256754b4f716c444b774f3649316e6255526f4e676e67552b6d665748567a4530717838596345424d554342445a3646546547525a63423442314c4233355778454e45775a746c7954364574516a7767726348437143505a53514b506a796f476b466b7a72714c434a51586b51396b44324a344451447171692b5863735a376754324546472f56497849426c4351763079692b6868303434414a4d714670516f5a6c716c7079497072546a457767474e6d45566f4a41684f7068634338706c6949494b36436c55436f466f56384b58516f427272544e4357526b4451444f632b79314853554c73636171494e4d5a73524f685463446c5775345665514469335368384a4242695755542f4145655070496f534f645279416d4a4d3243344639645732674245416a557459426b4e3546546c49544a646479736c42696a366c5348314544446b6351414d63496a595a4578413331434c4948467a41636f4f2b537172504f794f6748393233414643456b4c4c4c6772456272542b536678585a6c4466417073466c4d776a666f496b4b732b784c545139416577724e682f5a516b30376168336f364c505871612f345a752f4a5645794b412f77444152424675756e466771562f516a4d506478376f456f6a7a6d6e4c743657475479664f63424f324f444c45414f774e494e38457168434f4647496e4133357459736d4132674b5a52414d78514f314a5043686c3977744c4569673278676a33416d454b455651693862777341727149417550736e6941306251594f3351475777364e32726766576f4b684f354251675035324151553945614136766e4a735030543068335544415439624143432b473536494a752f4b6551383434486d6b464f78475130704e536b4e486f5946524f714d42422f42714a45417a68594e7842436c455a484e77546a2b695565633942434a2b3734306f506331593445434c68414e755867445a48546345477356474443435669336141614f386c472b6f6436586e326b7045544a4955527a6e50676c374d3767764352554648484d32747437434f454b43357a323679475a494a4f344936735941454f76537668432f48532b53454a61514b4753474377474247696955493449306653545a714a36336c454b59334457527745436a67683373395a5641326f52427875374343516c2f685949327a4633522b3630436f466f38755972437237446c504d654934446b48494179416446462b47655176394368413464506c474d3243624335516b6c4f38554a38755550617166524c6a59432f6442627246646a59416d35485461506b472f4465696662306c744d50734544756b32573867786d4d43766777636f69495651726d3341426943614a6732612b6e68356c644756453532752b367a3154676a4f6b494f524259355177666455522b47763872386a476e32457263544a5671425546687371494f68524f4547314a4138727a5656584a6a51794a7a5139596a667242464b67385479486c507036426648444435543759474d37666241536a447a6d75694f554932357a4754573042686435416c773871684f694165536a524b2f30674b42384155396f573142625a5032754d43776b44384b4b424e566970514637502f44672b7769585942526739665a434f474e32614b78335145624d6775426451497a5a4463547a78414958457a755761714f6154424f797757507858435367516431554a74734e6d67674d62776d6875745a63564b613668415342716966346b516f647838494b676f6e5157774138306c51423857486734495a374459386a73717939684a436e65635835543651516767366f4d69475646364948377a57673254384b656c316431432b57357775436d444d624151776954745a556a424378647351494b4d47515335596866774c6c4274434c4946626c4c622f6159657470314856585178455377344b68684941765752646b516844664675374a4b67687468324c38516f6f6d545643493270614d31455567444159414f774735622f686435364d5a5343422f55704b6e454c72526a424d364a4e646a7358666a765868766c477147654c394a4f6a7369326f4e7a46556b6b4a4e2f7943493839436f4b4e5649754239746f38636d4254676a514355715431786d4779693945354141324e7842624673334c56565a70466443716f5643354f792f6441594a6a44536851744b376a4c39464462535154576438454c592f4e6d536f67553847304955464a44397536684150683232526b414341756956415865683065797a684d566a6c4e5169513744674b454968594e49554a416c584732574357383730534730574137346c4143326747446f36486477337046676d52622b59706a7967576f705a674e4a484c684667573364417a5a35546d6c424256586262477845417836473378666b504b665648314d46515a48536d55494369714e762f7744764a78314d36305442415178736830496d6b63524556704e68454b626e6f594b4339724748577162684259624963595043556770305a4c4335784b7743314f513755784873464645696b62443569557774516b45334e6143376e4b704a47594c59553053465149685749562b7668486c517638576f785a30716a626d4f6557396743456b5141676c736b4c53563541386b5a4d345a55306f4259776c4e4a5946383775453054587a59716e445a345771303779546d71447967313668446f693048756a6d7a7a486b4870524170766f747567466b49757048645742682f7955502b5155417a304b61414b6f3069674879524753766b6968494f415972666731494e3838666e386c6f4a42646b4875664647325a43596c7a42775155364541424f425545364149507330572f4c54524264445367314e4f304242494d4a63774f4a4a7331536f4836364a38674d6f3631745846676a4455514f46544e37696d7a4941385a56456757676f472b725349476d344343544b6d46474b4170725a427a446c334b306a4939465549344249767938476e4d6658494241414a416767634547784366414a4d37587861376f57524445705a435969374c39716a3078563168486c56593444582b4368754a59445336744b2f77424c364b476f54396c685958304369383738496d4d6a797273674b415651786850424551514f594a536b714d633536303861616f41514550473048556d4e416e6b394e4e5930764f71445870644f5171314559704e53337552464d57523355567368442f73494f6d714d766f4335553675676b37415348596d685244415744554348414130352b4551696b444f683336456652484f44784169742f4e584f303472464848614259736d4c527953464a44476e2b5551376443767575422f6c524e6351373046396b5137424171514c75746159536875646948755876435642646c57345266687569685150473856576545794a6e35424674325349776b6d6c3173396f5159456142504c6636646f744642414a773277484a36653049625a715178756138696f4951434561616747374551714b5a6f5533677243422f6567674f7031347277755a5261572b633450326839565659527552345964495152574734646b33594d764a3258346e6966514870536657497354724f4e474a4977784e7368376a6f6d7439484c38366758365152704f412f4c68514f557943674f664351683561675975454b764d47744746684a413246474f55766b314b58526e397973557051625465503031516d4d524f536b5677586d457567344247686b79426d75433749717731346d6a546a6c505151652f7a2b62514a534c76694a523736365568784c766e717071424c4a6e44416f493953726f674f726c4e6c423363456543563561385277557a32695856447462616f72382b4a50453853665a2f4b4c422f7744737750444b6a3246384b4f7872645879683649736e30645536316536474572694875454b7a434136574e52475943356845434d5754666d6149353245497877564246415a685268735141694b637a71795947656a7568454152663871413473677452634374362b714865782f54726357694e334676345849766f744831516443642f77446d49304930344b5344393370784e7379472b6a79704c65694f5565672f416c684c6e5767534b3756416b5a496166424f3669426d456d714d437748776a3871486967494f2b46645353413758724c526e567562696349634b493031575668674664676f3979324549554579613665787a714d3971554237524a365a7853692b6853677145377172776f34674a5935686664434e574954326f6b53575a7a7951687441543868355436376f67647a6e6f4534704f7950634a73556a5273506c6669517568784b6f6342636f4a334a676453674d5452424535675a512b714f426c696762684d41423745726a51516d646f396836794949764a733549725177686b3236656b35337843446741455357624b5049436872475156744b3258542f41436d7571665737496c707750786b6269793161674f315150726d5a5a374b495734507948327a46796a69554e493863424b554151483449744430616579434537524e63414f307a4a596d697252444b374c756e556d646f4855776e4a416c4e445344364a324165525443656341636c5a416146564947386b576c6963647564566137674a59616430426955746e324a5267456b4769427a4746556f396b543248776e53676d39425757426a4d3866557a346b582b6835306475386555796e2b6d33432f496659507a69772f6b676a4e647632454531742f4d545077704e6b3241596736517046716e4b5548384146305a2b535250494f7079704563394964366967505152795771477465462b77306b46797a345155674b73655352686b5232774146536d6b52494562765a4f635151713461616b4a57476167575275646464444a4f33613830366a485a3150396f456648394143443251646b39726b4552784e6c4c3068554655333548396b2f4e6d7856516e686b314a457a33734369364c4a2b47466a45484f306b464e6d4a4241376f4b4c426b6b44727146644f776743764a423141517445734f55415a6953574b495367474f686e6c456854575a3953684758777851372b69444a615a3052773249753448646c64547a674d3246642f31536777644235464572566b5a594136726162685469315541554e697450456f665a526b4b5341704263514f32676a6b4e2f61446c2b797264584e6b484a414677415839745a4341584142786a51494a41754542794643683646466a78735869534c61774b6b52702b48714c777451674236525979686a35516a4264485049592b53644f3466776539465949344853756d4d506450773432446743684d69794e42447736485654644678734a30626f525572616a707154525636436a6b4b505253464372437067514845446979376f6761454c4d7a6255754239772f427a44335a593162634661304965595545484b324f4b56434544394a38684f37777a2b45417879514d6c3052795255436d56464e70336f665176366f734f764c52494b744569796a4a334b6e634f6854425849434f6c3538496434524e41714a6e6139344348514541773475434a6f4d6450773463464369756179522f6d5254386b75712f58796872434e347068664f41784979696f6e6c586a424e6b374465374834624b394a583451672f4a5562422b675a517066634643417964554d6969624e6b7a2b3842514c444a796f43346d613551565246434b635a42746f4842516d476b765654666453616f4e526b6c7934536c76714d70425459536d5647496969414c4153584a5977436a4e666277776b70776372597541376846454a336a454641617164446a33684137434336697650393273516f396d456a2f615579734667397964506f554d5433547a7157525450436a75672b45416f6a4155765549444a6870776445543770523154414943665770507a344768656e4949536f414f424149494e45366649456d32784f5366304845464c35794e447847515167434d7143734348534272517945454d6274647739417044452b36456c6b51325549466a4348656630516d6477615a7049476c78366f7770463171544a6c7579664a4c2b59475066514f6c42435155764546453445376941684b6f6f757861714456714435454e526c564469615450635658582b346a304946355832442f374b416e37324a724239304741355a6a4c58576f6c5348544959343970524754436271685a4868594a326e484673756762384f2b434345686a524545496f61726f3458346734584446475144312f6754414f3467306939553053614b422f3270794c56567748436f69744b3933576650366e2f3851414b6841424141494341514d45415151444151454141414141415141524954464255574678454343426b61457773634877514e48783456442f3267414941514541415438512f77414f6b432f38522f3841696771412b7076395771714f7630422f3841334b77332b67766a4c5333705a4c4a5a4c50306166576e2f4f425836593336576c4a335052534f4c2b755065622f41464466754e7748395172674d7a4d49625739674877434f675679636e494b4f7a4473546638536e496953667a67724d723034574c67367945656a35634134544a73395043556c4d6465746e364666384562393149622f544e3078756549493361304c4e67356d5856504d65443051357332686539416c4465336c4e5a53735970464c494c44473479636b72437530746e73766f716559526d5933747355654742334e33687a3968495349532f77445031304363324f51345856563859524e5070574f524b665a5a2f6c6775472f65623956456f54304942484c6173355969446953617a4c5a6b71302f63345550446330684757682b3369554f5a5a615a35766d53587453384855715033496d6c797549366f506a3036646655763274556e734e2b38663451582b67455539673449314f79736f3466436b576a5359775868664635776c716a7972306a59697a704c47786443554d73696b5933674d7953744a2b584b5854325641647a456a512f572b426b474266374858375630656e564c374576327250576e31482b41462b386f39517231636c6c715337426e6659494a2f306c4d72525a7539356c4b6f702b344e6d6c6f3870514e4452555544355841537466336f75627068384d536144474e4d644c6867454631486e63767a346f4f425163525a455a33692b35547069316e7a35384d73487178502b734154476f4670637136515973626d4b336f544a5a48326f53507871574c697169435068485874464d7039546675646672472f6146796a314776616f79452f32746265624b46586c4b43316267444b77557879436255364636474a512f714667474c6a344a7a6d6d544d4f4f776d424145586c6f666a754539727a75364f2b5656646d4e6c435167634f58396f6d74753545626e51547344504b4c6c2f734b4a78704c4856664a56782f38784d774968354933746c45704461634c65735849614d7441564733456d36784938574b68595073627a78574a5235626a4f2f70756c632b336f374d37326e5063777041343930477950734e2b3466726e554e536a4c374272326449436f47324458504955586b334a75415335366a3749414577313356786e73625744674d75434842696a684e74706a7a764e73466c716c534252616c5675736a6369356b427155455376596b436c785851327742655a6a5a7279316f72575277556d44775246354c6a543856343558474d4850564d6879566d50782b4279725943694c2f6c79537a7961734341424266534b77322b5732676b4f6c6a77664a4d396230516131545863304d50704e734a3133684163484831576f39543742592f514f7651332b6e4e2b687632472f3051686d3454657834594c47317a6c6e753832594d654556456b6746725541746175554a32675255733057417245514e3169667230317247576432493749303443546378613969467976416171713655676f58694d526c57536738706154797a43315954486e57317a2f416f474c47762f774364773361555a51524b6f2f756b5a4846745645326e356d6152366a58575770756c49566e696b68744d7378387365534c71377857517050756732614c524746704674466b574e61785a4659346a3234324153505265594871536f2b614d4c38392b3066513667334855646570754f76523148582b414e2b707231552b6c6e70746f67432f335652434535534271745a4a376d45577938487548526b77357449533054427457704d7664634f6f32694573754275384e4256553665365a7346426248764f767a454451673979775669425142686c6c394176714a6e5459796d336242644d6f4e6373596d745270717945424f7263355135536e79776c5a6f4f575a3249466d473868557159644562776e69463671566a695037354849774f6e4e3450674e484d783175696b46327951354a5371675a5159536d387831366a63532f523142754f76615450366e6b39446671623954583642615053466c44694d4a4e5944696e515a4b56535a467734726773756c5177764c4d4c4d4546544638686b56776a525745584767704964776834326f374372556c507477393671425452764444504c4f79377066387870705a39626363376c4d4762304b5842623073503368577155344e6b38303939592f4b4446716379596d3452772b506d5732454e72612f6e5743536c37342b75596c57756970666652415a554368565134356c57616c5853385a497058523667384e43424c457a44666f4e784c39727231505164656f393576326d2f512f524f336e41754e777554396635614f4b5866446634364e5673644b564673474a6335506a31765453643374435065626b507373374c375546477247323471325071726d386d627137537554317741433658555736686a697958365379786e784664583843563763796c64614e6d4a7049754b682f6939484a4d6e7047574c634c4231334c6c48566d667230666c64304757684f494256683948627863336d4966494748464b3974494735757a795935674966494d4a364463532f633768754f34363958583659333648705a2b6a572b745961316e573957396a49785a48425a516b7262416959613149536b6f33434c7452563255657079797169574d71357234476f57346746334d5762683576386b77336f4f31735945476c42426774436174665a7078306761734c5341384b4f35666759517a593751626f5a5a656e794b747541426f4f714a4b633757722f712b7375546d6f2b41793859714b394b55646f4143717659797877387655385a6678755a76484e6d72385966694f394a734a5a644e32696749343778584358542b4144645061646e7547794a6e30642b3662394466744648754f49466532726c565473712f4b52764354636c7472544532584a6f4d4177666a4475556c384c443962746b47627246795a6364306f752b3168306a514141796b5938766479386169735a584a684170646a4f4c464463454e4a4874677a3551356c316c743356715357564a425272426168557061534448575051783145705067767132566a527a464e755073437470735236434668526c2b4746765944744871476346793449395a484f6f50494c783757637238595236325034464e546e67702f69584a4333596455636f4666645437673348587136396f50634648764376666c58344749396549365763775a744d45356953554d646f3359362f4151747676424f79582b374e4e3630427534326d5555314963556438514e4272354431466d514671727678506475307048305070563243662f3841466f46416e484141646b7872764e4d69355554585a49375975434d3572516f4a6f365866566c51485673486a765a7a35416f574a74594a35434766727471336e372f537558717969504d47794f34363952366d2f614b397878417233375a614f5742446332685438354b303538542f584f62754d492f527372775431375154706254356b6238777938345648725552576d41574e6c6e624b4842316b2f774170387656754e4137464d686637574245686f79424c624641747a6f6b7444672b3357782b4e455654565759504d6a6a47565a554e544e61666e72633757302b4b7357696a6a7746536d7349477767327442514e4b2b5556664a4c49304378674768435947736d306b564e77743276365631376159623968314858707739706c43616f3977562b67374a6c4667337834384e33566c674f674d64456574662f7742434f464f5545616a4279694a574134784761724678455276354a576f6d3958687771773845466272654a664e79386f4d49756b4f55693250664376794a44316847356f732f686e6347554b544b634d3357555a59576b6b34316b4c5065616d39504977324b4b55776e45796e32536878554e7846773630484578586f62596d466155582f646e3654376a52457a376644324f534743576576454e5150305170552b69356830733656466a363159435a6c6d6654416b7850563244582f6f2f77426167736f72444c727559377859642f4b69516663654a4a6b6141725262736352365074536a466f356475387652454c4442427067757952747a6c4f65654647724c4268432b302b304736582f6a35556b6636577137396e366158486a324f2f5564666f41754c5241723272503048417353615a5577456e57306d5a736b79462f35507757743854704d722f6443642b5976684864457867706e7867674b7955756d524665683333524d46563469376d3445426d39454c62364648712f79656f7767543247676f4848796b707677694d753134637861346c78723245334b784e33535572614745694c43332b61487a524d42514a627442726433612f4d4169415044317579755833714e594e66373568534b64387665742f34566e58364936394458736451332b68587952736a787847513345427746684d5875754c38647a5958327032356737474d6a596e577a3349356f385769534e73564463646b6531686e31493147684965706a44684846784761497778347131763841666f414f496b513654786d5075363935654b4b416d784e4e43434574764d4e77544341326e6d64594a6a336a632b7757726445477a704a4d2f774474516d65394570787a616e396a62357a5246345a3878752f593034746c61486c646a4c686e465346393232384d45504958363974364f706f6a754f7663497761396e442b6a5334475977692f7039654b536c413269796c424b6e70556b797374504a394867582b646843434e6779504e6b4f474e2f69676e2f414a744b6862734c6569455a4e394f59334155793468416d5a4272465a70687a485a574574336d536e7464736f4c44745242747a672f50447a4767586e2b4976694f4d4a6a6365366334636165684c737736324546793172444c46586d563470785579575539366f6274675854695a667845693378523233623951362f77414147765935666f47666c4f34356141565a454743416d70624270544959364b474a576f44754d6a6955355a66477a454c546c6e346b5a52776c52616348634239446a2b31627652656853364364317666736855657345754662564c6d6351394768372b4e552f4e4d46414d623267752b4a684b32685973664a416e66383256782b427a4d6b61536e4f713655356a756e71455637365657334b734a646c384a6541484a63766174504143635749366b4d2b33553963646b504e666f55384672477947344b737661346f77397033364466764f6f623944586f63656f505a3449664a55415851454568345961634459705977382f6545767672717265614d57524f544f35333978464f79677450726b544548686d573856554234326f46464a513630444b775a592b474c744a306a495a41396a587648744261595a7347726a4930556d382b774b5562347350724c62674242526a315a4d6c72784f58564734785835715a4450536c37634c53786c5854474b394678554761584d544649532b6d7263795065684a334b5667327471664350764c4b646f76464a62704778686951464155395a38736156734e6d77322f45306a343655712b30654f334f54316c67736b42545939776c434a76796542793163424d30755169524e75714e435944425364507a4e616e736a7174736956567a2b537068394c4b6f354f484e4575642b306843534871514d39366f4d466e713739547232472f553344544458734f505966687a4645342b6c614232786d4977365046714c3856334f4b374d6d6b447a4973586374616e7039524463467644444a663452646f785a7058354c49667a534b6859746d5373737974417462576c614b434d6565576956366444524b5374455a685471516e5a71547575565a41305241386449335a3853514c7361544d346b355744737a6a4d2f667336424d5334533850576e544534427a69535635415966337a70734771327935716c4c30656872677979337249636d48532b584f4c454a4144724b66444b747565594d4a5146354c58355455676137515a784b474835666950494e525359393872534c47344e41637759456d677a6b313351413477414f4779505072556f7165545372376334786145787865515442764b304d31773166557a4157636f526a457974552b37743378704a6573636c517947614d7247684a52337a77394832397134714e63596f4d414767726a306e4871636b655a78376a72394930746b4f4159334b65424f7871626664762b2f6252433869616f4339596334776b78446576554c394630324b456f4f6677483654466a48466679794d4f396c635942744e6f6a38453371625170316e3065474a685463336d51506e376b564178334d4779656b5a755332665a4c5774526a2b624f2f4a634275314757526d37325831584c556c4d6f7a67795a4a774e6b7a4873594243563357727271655951524a51386c3639444f3634597a6e55614f5048495238333450634f764c58385471316c717873503841756c785a4b4a724277527a6350447a787061476f616730756b575668314b374358466146384b766d4f56686673774e6a394e57714443517979674c70693564746c495653316a76696b3164564d7241656247456a49704d335059472b6a364445303066695937332b546b3636376a6f79527a69537446724a46375139596a533944576e6e596241414c514b413958554f50594f35784f534f765964667048394e34624f5a62613070626d5135534d61304154586a57766f6c4f476c32772f426b7864555379515068536f45526c363338646c6f424d6c7774654e76504a49417443664b5861744b71306c6e486f5773346c53697848587a4747614475414e554a625668477a6e6f5a4a785a6d4d422f3339784a7357757867314c65392b76336a4f4870515a2b4a6c434e556643515951756a79732b46642f366776303651314b532b33303569584f2b6f596833456d735156544258665a4b48716852467833326e4a74413472376c6b6a306e4851616837574b776243306434746a347730705a4b7838715845774b68545a6d51446653776975624e302b513253375a6763493276714d43642b5534374348456b2b775434396b33554f50594f3461397271487644587142746e4b655275707976626c554b31494b7678544c6d636e5839444561576752436b42427646795535726b47656f4f65734e615a66732b656e7a6d6b497253506d5344692f474f55735574434c7673704643304e515157666e484d384d396a786f394f4352683470755a74387747712b442b2f61577567524c614f374d44636d4f58374b5a4570474766784756336a67733063664f516a496a4c30483138524455592b5a2f6c45462b6c6345353641625946733068764533776c6e4e72543042627862594279356a4a63645559786245724a66664d675333734f6e2f6867356430496d757877356764323451486d4873634d53416149514771496a3469554b6757505268413348356f6a74565a5a4673517672776f6e734231446a3244754d47765964512f52482b774365796577394544633861586f3152676530497357556261666672484a4c6c3866466b6d41654c396e504a4b68777273552b3759434430794b625663666f567a762b6a6d424838424d2b5971324a6e58377878476b5a5a4c7a544b614773326d46644c6c356d48304f544162305647644550664e377364537768527370664e784b516170646c4a624665675256707734374c71506d69747a724d6c547572352f4d38674344686330794457764873774f6a71796e552b46467948627852725a4c695165526e55416572322b59514f30365147736265787749476d7143362b4548347335423048516d4f43677867752b37656e634a635264676d56346f456f2b6a7455506d4954757456456c4e4a73594d5532762f414172752b3259327945706e5767465734724c7147415865426458424c745a51733746436d6b4d5737687a2b694f59366872326a72327549636572716f73552f464e3757425438566c2f5934782b4d356938502b444a416250347558465a2f346d59484933645477736b2f6c4c45676876684c545571584841754272684931526c586279317a324a6a4238454a6533656c486f5949696f6f6d77434d785946336c325672322b4c64513668717257357a51417832556e6e4c5256514f723776706971356238582f494f325977426c3063486457704c52684f4738624e734d426d4772336f6b38572f78493759666749396a6a4842644f6f516952685565506b646b6c61623244474a324a6a62464d494c46675a3651686e654756644a71506e456656336e35776769645359366f70414e615537794f4e326330317869576559514346347a5343706a666d4f762f562b38514c7257485046574537705a48747348794a4b7135632b3131446673632b38362f514d363537306f6e7954393332366d36706f386e4d7459644c324f6b753263796241434631584e544e5846476743364b6f457976367775684255657342714c656166317a465447726c4c59686b523077364b4c4f455574366969327665735a645a6962335842756f63566d554d76565a6867776b69644e614f36546d3771414731664955374b4963676f76493059515776524e4a78324346414959664a6e646b4e73475a73466f68764e444c59426f39433433435052736a414d4b327047464c566c34347942583239566b2b6a444d4831587876306b33466549716a737a337678464356657578793353416d684b594a7a31617747706467504841376378664b6d51754d3876704961395551424e7a68356d3869736b4e78584d49307045574857726167386e2b47446673477655325470516a6d64666879555546692b6f6757465632356251635a6374566c37456555364a63364e5732424e4b30506c594344615154576c6474643634732f7741726273352f466d4e6837586644743853344f6a474c56656647506c7549614b4c37536c5a76593277564f695853354c75586871677a4d736974416d716244497362476d6d73773336637634343569436c4b6f4f54657941386f524a3551664e4276454131374a623646676a482f414e6257546e616c797a3969377a392b6d73614e747768497175384b61433468772b595532585a58686f31487834763839594a74445a575a6a6d55624a5939575455584949557442733733316875774a753132766548616a4b784448455337476459343158684f384866446659667859655264764e5371546c584e5666792b442f534e636e7078397a71472f5131375848714544642f786b5a314c76444f555a554d4d3251754b524b76586c72736a424e77697244545961543835305957656c4536614a39645238322b70566c792b4d5754622b385369566d614353717879784b777049584c656f323575646a4c61457279376b65446c4355615a47556a6c6e4972435033587a436675556a3965737642697030707244552b4c676847447842336e59444561597659366a6c476b704552724f475a4b76504f6f786f774d6e756e364e6f4e6774564635694a596b7778774b3452734c35544f5a375565685841334f57616b41716870314a7843414c613649523257646a7a43386665582b3535785634717a4d78617262594665445a334e453170434e444e32696e7664657a62394531366d2f544c385a3952436172693761663461665162594b566c5a61494c6f545732416e43793876464247654b5852784461796c457a3976734e7733485533694f392f774279455473614c5539374e432f4645654e4279784145444c6a7835572f426d787273472f515066475462735257395243764643574c66526b4b774b717467716c77765a347351586c55594c6375726c2f55464467356759456d6a6a6e737a5677754f576e5a7a4767446343304f72424536497932365439735448386c647853516e4c486d744966786142316c58706e4b3472754e70786e36382b676c6f3730354a5767665264756350634e645462316451332b6f63526146672f376a70594461666345506d4968664574674e376f4d70496e574349746b543668755552314c72692b306367573753716f486d626a564772397745307375444e79316e30785276316466472b544952434d6672342b43547073793958564c34756f423632686f5576486e4a485977717162325778493058666a484534774e70552f6b4b53356c33414443624a5149374350744e726830537932594d565549663435775167316454534132733676634f7569375468356d69476e31596a52676e52375775676133784f2f4a2f656a5554304647735646726e55524d344574314e385a6a4376456565533055752f754f76314472304e5131367570703572652f766d6141517568737a48626a747957312f32654f76377a2b416e6545575842455968533269342b48617766766645363636646347346e454177776363693662376959456f66384165714d75522f312f4d767834584372666e736946636b2b71634637687a43566c3839736f4a494167514e794948354b44756c56494f777750394663706d6d41466c52653763647549385a742b7152764c6d77767832535a675151486f35352f5168524d573079687338416153784a524b505a4c39417a42496a7a68674e546d7656757a717a6c723770366e2f41495275452f4a4b6c422b6e2b7959366f712b526935486b46542b7950544d394d737153567555314b30495a6946643570425452614e4a30582b6b6d76523336472f61476f61395454434c5954784d42687565432f6a497753364b52726b2b456842306e4363653147664c317850384150705676487a427133374e6b416645584b583746396c6d67625630594a3852706c4647746a775144317a737935336c30516d5142727435586461445a5a4136344f657542333254327747312f41465a797343364d4336324464594433426257444b517345654567365342614b545377415a424a55367351573752375951306f75796c65463255434e664174775061646135305573617439643738536a356a39435242517677596a41613136345039695a45527a6b73653864547674694e766e457150335a632b4135334d5a38515672516c7330503636717851736431744b48357131796e6b6759546258424865645366794d7a344f79696c2b394d714677696861644e6a7052623941645133366e587078396a6b39726869362b6e51545074696b316874594470696a334b434f4a4f477354326e485a475566437372444f634432395a714d30664444324f4c4c52364f5339496147657357725a4b5345482b78466e4e7751524e38795031745579793948697779707643515843454b317a7a4946535a4f357936325a694458484a687244674a4649355279524530566b5973634d31666b632b494e6b314b6a5546374870476b4b3044513671382b736b683367436b764e644c316c4c442f6b7278497971696835556a51366677302f36656f356266637a637032666b5166766d7375336c495379544166422f4743586a633675626850674a33694c4148496c69667245333744666f61396562577366556179496975506a6c63324a5a636f4237656b7a6573673433634b2f45516d4f4a3135572f6b454e41494138426c6c37557367454976794a304f5a6c4c794f6432326d554e472f4a4748653449413137613248797a4d366b394c50384a35786146425870732b49797942417a6e2f3034725064374150365132496c69564d664c506734373972546836633875757361544b3356637735683143334f707a6a704b496c426b4c616f4972776b684f47357a4f377869612b564c477a777855726e594651556f4732653953665575375a48646f66746d6a2f65336f2f4949717a6834673674392f6c35465576504a75574146596153644e5a7a4e59374f71626271767739547232507544634e2f6f6d4c63426e4c3635626550476d6131784269444f446f4f55345735766a685175616c79477762616952715770513434493752324e5765643375596c68334c5575654c684a6e4f35725a6841717a505842626c6e2f4142774b50704b427a3436776e306e77717047666b542b554476373451306c4e6738516532545a7148316c4b434d453652315233734d657658753944594a64364a2b39685957596e6468365764357932464c73445572624f686931384935687048675736446469613053412f35454d5446513573564343663633635530582b7a366f624a334a58356966326652685866515158345965796f68584944584331754d61654f566d5664764162514934515465374d632b615075507364523136472f636268754466714241376772346230442b5849786645666951344f485665716e53634f49663169626975576d455a7456493436664c52736f33385775457a74644d746545383675514c6d66464b6968777a4f6a4a755a7269484c37546e4256705a48484b595032324430363568794962423431307a417555494959324e6259574856716268336c436f77326d613934724d31386c413077653251334e6b634d656244656d57674d72427448764e386470636a4669507253454d2b2b7a75726a713648346a6e644170634c753659647045784458515937452f74542f66534c574235702b794d75507348373439453249487971695a73333667523170307678525864496d444d71627a32737731723066593250617659623935723036567a333275795732547a7959426e2f47546c6f6d594c4b636663576b4c6935586c314842326674784353743468704a39735333715238354466616f7075762f7959722f534750316e6d4c4d6f5634366e325153367548316f777a30343563444e386c6f776b4f4650686563304e6446644d426439376254727863686977386869574a415956474e4444453178416c774a5830754b6f675a4c4c4e7148336c3951476363445035584f4a73674a6536314b68394f624f6d3232435053504d436953727654325a713873345a2f774a33576e316a386338582f4c383150485036552f6766336d725075592b35625246375733475079563877364875396b576f31626739476465787733367576307733365859776e474e775442473546613950712f6d46565947596d55355638536963566d577a466f48784a434a306e33345968616d3443327a327a4e334e2f51494f35674f44543847474146744b6a7862494671696b652b6a6638414f4a53344f6f66632b47483278454f3246624d5477764d42336f36774c6d436d6c5845656e72315249314a5376707359626b357475336c6c614377437457674d7175677a484b74747454483164417a5644627044622f4145314e4b4165426c6d326a3734735561713970507557754f312f435a5331663553313679486e4830323462686e706a793468763466474c64596b525a2f4b414c622b454d6b63554b385752494f686c716b50536e303251332b6c4e2b6876334776514d6d6d44314b4e69624a3572632f654d2b5753383037504450754a396f454461684641326d50442f434d33736633557646577270496444397741565164587a793144383655763979657770396b57732f723039666f5632456236534752364a2f6c627661534c71436c3252556d75447778615a435735487a656c6f475870756a71333236777a714e6a6e656b376f2b4b7a675038416d6a4851537a776d58366c2f7065466b523254456832374e5a4e6e4d4e434f7a36686f51447742504657476248644f2f3854467a68665a694f6638416a454859372f5250465a4b2f2b78634d6d3733664d6a59697576546c2f46796a442f7435663649584855646530362f775136663469503773614d65473048794977306c542b793446495339712f6e69436e3068467a426c5861664d3864306d2b476450504f50364b7835376a4b57684e644675316c69764e34546c5a6d7a30537938313555544d727174674b35616864696e386f4f554e4d6f665a6b777a6b724f5346783779794b5443766f6457745844577435556d5369336f58764f716f796b654946334f305464715359517746396f53427a504653316b533665444e76416c51574f665350346a47366539414261426d722b65456b514733306268756a4d2f45525879596e535948377a385a482f415059544b4c514f2f4b5a6c43765034664963766f736652522f676f33366a456c634f6c676e626a5737546b344b6a30776b50493337756477765156326b4c505a65666f6d6d6a2f414878416f42613044726d573369666e3874774758316e4d45467a2b624649702f4b694c773141756d49444242644e42764f2b7549424c4a3562684937546141432b663166366f7250786864487a476448455939664267346c6742694e587851756258694435363661554977626f374c6864767a6f4657786843757168786a4f594b4e4d423749776f4b4c51357269614b56396259526c724c2b36352b4936594645422f62452f7364336f623848362b6d4133555a2b6735796e744b3269332b34756d4c587142486258366b62397876324e3741654679687979495736413066496f2b35656c4b31356a394c4e456e395766507147377a53714c58324f59664d786139736f3472714d52584d5549627057545247563056756b4667657841675538506a4234525978726936383054767655387947694c454e3343355350334c6f4b43305751396e49664759443131556b4f4e785937785570305a347675676d427671447238767159506630342b6a6d312b587a386b76375a5970354d507a7a38346d7959536c702b3377596236594e322f4d49663468616974506f482b43413337446673442b52676c76384162763571493466375139784f4f332f5534442b592b467539572f457353395050776567747156774c6f7856632f6f527670746c4f326d63734e4e38726c38757539784c77416a4977784530556e73534570303462675144694541336347516f56612f4c306e795439334659396144704d38474d51426467375a47364f31394b4971397a38705a306f2f62455668365370626f2f6149726d6e766c2f744f75746634495a79353136555a5933394858367762394466734e2b6846426d336e46483975345748706246342f77436666316f32707548577a526e4b58486976724a647238415a596e785a3471786641434c346c4e4c31423052386b72576b6535394274676c4f44544f774c35637a7a34515864637570674a58416870325563394a3071315939684e66636f68694372505654557a415a5a4f41784c67646f556c58376a4e4132394d474e38636a7a41663839494c464c2f414f7a632b2b35396378685842394b2f3373782f3679723935304a2b7873462b34307550783659555246783148582b414e4d4e2b385550364c764d324a2f306b4d55644a5433442f4142394c62667a517050442b4d4c79374a422f5a784877436448612f4d3548684b68584e33676c3566527054373564474577593957365974446e70484a775a6f644e666e4b5a6f4b73656d4574746968596e7a6a5663716562763841676a724d4c6d3034644a31385242734f2f756f6e696b2f4e6b533647307747756177643433636f364d4c4d637a6c76642f587a4b6e34366d514c336c2b45374448387651615267443471664b557176342f6b6b6e39694d6d35712f366a6e364f5952312f6879784466754b6b786c7177623550396e55644e78416e4d462f54345332452f4b4a6a35443472795279704e446e716d6f2b724935623945774d4e67776c715a506754633844536c584c477a4235737a33746a59776d636c5a7a50446b52304b68784c5072615a77776e4e6a425752624d59344633495a2b4137735a677a4d58574a62693553374d31516e7a783568646768356b586c574b713665356470493453305478464331663663787847667775485246722f42417075596b4576412f6248722f306e5679382b6e30434f39524369522b592f77413853616f6e67693850596c482f4141722b3444392f38544c74366b42325247644164675a675674472f52472f52414a524142476971484362595545786546613073656c6b42533274725151356e56444e58654f3634676249704967764250444b6c6b776546526968563165416c527574647171484f38734e4857794e7475494a32344a5a56316d393534347a66444c324465577a47682b596d434932517634557564585750314e5236735a41324b586b4e7659676472587a4f446561795939377430456679685858654f2b2f4b6e39663054643669784a34444877694b475a7539415a796e6243384f38754f324f7638414c426d66595055594737586d566f67494c54753358376f6234734943327175414c675a5868416d647134493741545a52675a2f44694c587a317753455a365333486b5674706744573466384176304558714a68583977524c6a4b5472754d796f6f3369774f597a496f4667485339355935714e7a423748583279794e43585a2f495a715632382b444138424e4368476b6c345a6b3642794d35475a383451656b6238755343676a722f517768634c7436742b62374651732f37714a6c677248355752464f5331434f37676f6d5841554d68422f6c455136697a7746556e5276346a454e703950384172454b4d666e7845494c4276757a542f4150564776676a4337694f6a367964783643306f4142745a52785855326432634a3672676a41464449536373746c71685579334631476e4269506a4c4d59544e35674430687351395266314d4372492b4d674271417663615371756633557232744c47574e71797452334f446a79484b532f5a664461394d6853434370576a466c367751656f66372f4d355a5166506577334f68483055517a2f38416149735a62794630587442317442455144542f4b6a356949484a776d4546744734494c6748722f716356506866506a4678326b4165504b4d706c505a6e363433744249636339596e4a6345416150555455344a542f7742445870414e706d6741587773666e7436562b426c78786d554c6d775248467477567837525a4d4845506b6361396255356930426c554178576c6e655051425831313874486d38544d525439737636472f74695665494d52723051683043734f4d71494f6374394d304c2f61423765736a396559472f64656a2f41424c3448317431686a46444c4f626638756958575a2b39786962412b777a714838724d78423933592b392b73704e4c53362f3357564a4e4d58386467384756476975526c6a5a4f4d35374a35334e572f74675977323857312b594b7355735436364a744437685556394c7843364d78483268736d3554746a63417a6e58325254636645694f524a6e5054635845664446562f41664c4f722f77426b2f7742724e576545677a2f426e5030486343706f355635614966327a744467432f774431732f32763566796944734776674d66762f6c436a715a66622f706d736343304b4c2f5a69666b76465166567a45416633476c4d6e51356a7764767938656c734a3178474f463832706265454e784c5136346938485a484a4b76454d4466356b2f777a646854344e7733366f6b30472f456d7363486b78345861387a4f78376444494770386633463776483639662b595845786358542b5a2f436638414e53454c675071386237414e356945626979664b6635546a684b34492f77426f714a4f4e6b2b51536352516e526b4437674f414b3870764730486252496f30765376366c75763841315a316872454547786d636347506e63305a70434273626d56783855667034656f36413369537653595a4f513738422b55514f6861777162516e6e366a5a39532f434f647039754746336d2f516c6a4f5553442f414d514f6d61647a2f48366e2f3851415168454141674544416749474267674542415944414141414151494441415152456945464d524d694d6b4652595241554d4847426b51597a51454a44556d4b6849334b43775255674e4a4a51553153696f37477930644c2f3267414941514942435438412f7743466968397336716e6d7847616d6234415663442b7063372f43676b766b6a595079624649364e734d4d5074484f73366a327638764c766f345a3036564234726e374f76384149614248654b747a4d77645630673450574f4d31456a6445474d6968546c5655344a7a4a557a794b74353675795045426c676d726251765a476330304d4d6f4a445047585a43563934324e5275364d326c4a644a4b6648414a70673673796c4a466b5843496f32514c7a78396d354b435455524d69365548524d72456c742f4772454137413635644c416b5a786769686232354249306868495650646c6a544d56364d4d7a4c474656392b525541416b55576b596f3569614a735459643131594f354249586e5672726a586456476b506e395a324a4a4970586a6c6d4c704b717944716e414a5a4777616a4d6b4d61686e314d7971636b6369324d37626b304d4c6a59654832555a424646466b3146496c6c584936556e63364d344971326e685746524a30736b654656787a4367626d6a49716e483853524d61466248573231594f4f3971696a6a675448385a67486242485a33417964396d70463134416151714e5248634e674b5946687a566436566c6b32424f72477738717551484c46794742635a706c6c69356b727352396d5973736e345a4764536e6d7137486348474b6957526d674d456a6761455657353579647a5468324a4d6d57374b75334e6c4761676d6d6c37756f55542f41484d4b686a5732376f7943426a77314446634f6d693237616f576a2b644e2f392b6734506b61545534354e734b3564323450376a37494e694d6d6c3654694e38486d6b3037434742555a773266466974594a38787655514977642b52417268556b63426e43787a4e4c6c5a43507a4b6141554256436b554e5438736b6e4f2f654e3855566b666f4a35744d6f316655727178746a6e554b5249697854576978786c464b456c57334a4f6345665a72714f43336a584f5862426248636f356d6f4d58733839744677307a6a4a6a67595267743864654b3451586b2f4e48494d487a77514d56476c764649414755485735486754675946584158663444794663506a75746741656b4d5a717767683037395a69357158316934753764774656746b424a794e49786742616a30586c724b77554e7a61433456574b2f4d5a422b7a5a744f4277424c5154796471514a75786941776530534d3147526257734b4c45684f53516a68785861585a7666545a62472b4f59706e4b44744156486e4442634e3359726d77776155457957376f67353736656a442f41476c41685a376549655a575066374c497152714d6b73514b4a742b485259432f646b6c4835764945387134704f3170634b5138546e49794b75354f75516f3633376d6c694c4b53476b306b466879776348656f59533632356c48534e705638436b434b473068644f6e6c35623162613743334a4e7a4b335a49497870486e55576a31615a7a47526b677773636a34446b61746a464b53585a4e7530504478422b7878504a4d327752426b6d6f6f344a585a5972644a4a453173373934544a4f46377a5677386a5a374c48716641554f624161652f486a696f5844494e53676a4233786b34504f726b363054704845614267674f4f5a384b694b4d38514a516a66554e6966504f4b745a4a70306a305030594c454b5049437261537974523964635441717748364650614e5242596c4753543233633832596e636b316678746532636a49624d45644f30683679714535344b344f65566356466c7742576c46707734523457654e687078704743526a6b314464546a30757654796252786b6a55325041477543336376455a32636c47416a30524c2b4b33365737714144597a73636a326b7069735562546c526c7047384671306a546a4a6a515866454748545461354f7a4643507a65504d43754a334e39394a62693974577642637947517752464352422f547233384f5664676b4f4738566263476b55334c5a535a2b624171657a5678444c4d4163773639546a7a41715678714267664b366461354732664d696f644c7736305936675164565374484e47555a57556b45623437764773644d72474a3862416b41454830634b39662b6a374d713856746c7a71554b4d435843344a41712b67364a374a6f724e7264746f53554b4b4d6331595a72695673594f467469385469747959706c694a77485145484e58416d684446474a42585379387732724744553649705049454d2f794663426c75654a534e366e594b344a4d636551526843446b4f4b6e452f77424a7549754a7236666d493135704448344242524a4a377a375356564268666f6f66784a354335495646473756776536742b48527a5433676d756f586856705a334d61516a574271304236514347466d6d73705276307132363651792b2f6f382b34313962477869636e2f74715852446349456b787a55654b6d6d77775164627a70697a73456b4f2b6573647a6b69674e5166574739336455517a3062594a4f656666697561464a6c333568396a36465578744777594f4d374e7458306d6e346645387950496a4b2b30624850564b6e446a775569703468394937654d474b34593652506f48596c3034352b4e66514357474779426a575733696b6a575144385173413459742b61724d327958485361596e37576c484b416e5a65654b5264514861787542585a4c6b6a32684f71615a5939756535334e4b5a6546384876624f43307466773853596c636863597964574b796b3866445a5a5938647a496859664969747549635656626d424279454b6e4b61764f5145354867616761546739795339744f427641784f65696638416c4e51752b515142454e657454736356776538792b4f6a586f6e36776263486b52584549592b4a47434e62754f636c51584137536b5a32726a43537a78734450454559687932797168714668477a425641337a35436759704c694d4b6b424f3454495946364f5a473252527a7a54356b4c5a4b45624848645676314677764c596e79713561336c7a6b6449707750694b4d66454c63444a5647566d49384239367245704b7556654a6d30465455516a4237527a6b6e3276447a665839756952574e70754f6c757268784647446972684a7670446353693939556943694b4b586d7173343539474e734461726847346e7849657170626f63794a4533316a734f35644f77387a5567654f4f7874346b596369466a473952435868383531536f5531716b7032316b4849306e767177745969774446346f6b5449506d6f427063674872534873714b6c4d754247785355374d6d64744a50493171676431444232566a6f5a547a366f4949713873354c79473145384571794272667039624a30664c36785175636432616b516b646f6a4f4e506a54376338397839776f4150474364523242797058487633713257564f57547a7150315364794d6169593874563237326d6f425a4d414647626b446a5968716941766f4346766b58594e6a5a6c627a6f3552786e3271422b673476774f5264517a674a654b373438796f4e5476426663594d6b74784e45786a59517141563634494b714f624556394d54637935553345554d52646d386c6c6b494e456447704f6744594b70354c3842517a6d725a415353546a493531735864564138467a7652326e566f584a35454d4f7174586b6c7263337a496b37777470637873324167503557414a617268354c4870486d69695a69796449656236574a4754544141454b2b3548554133727259323871357377304877423771586e766d6c44416a664e417a544a6169577a4c376b45456c52384730316a3150697362327a4b773554444b7271384d376968696579755854424f634b54735061706d3476376c4a504973674b782f4973536147386e42587365654e4d724f774b317956736d6c5a484b366f793277667878364d504a673556546e54357634436e416a54494568472b6f63366c3147467734594b416471317957535443337531484e4566634d61774845536d5268346b6234706454766336706e7754306343454d3745676262437047534a4579716a355538676c636449644c3437565347614a52716b5673426c5878474b3279614f4c4e773170634e6e41565a755448794441557753316e6b52376c6f6a6752796e645a68354f61356354582f432b4a6f5075336b5141316b6432723273595a3766682b49324937426d66515456324c572b34624b7336355871737049796f6f3957614a484f2b634e6a656f77364866656a49554833444b355544335a785566526f794235484867334956624c497a4843492b363666456a784e524c43326f71516d774949384b55536a5753497a344863455678426f6f6a7a5851446a794649383132352f697a79746d5268344139776f36535731482b777156396665554f435457517a78534b786362364f374e44655630436a6e6858363337436873705a5233374b63436a6c724f315a67783762524c316f6c487561747052627278473263444a53366a625972386356686275496d47346a35465a554f47423970476a58305844476d67456742477150626650634e57612b6b3557305363683755774844414839495546525572586c6d7353394a4952706670447558414a32486c5730617032656541426d6b3057567179694b4d376b6b6e476f3173476a56424764396b3548794a726c30536b3063496a6176665831456f4b717835626e306244464a794f6c534f645250304f4e556344446d65595a785471622b654578434e4467524977335a7151614c4330655856344d3430697552332b5972385068457a5938644c716154466f676830794876574a4337662f476b4d664437715a354f6a3769374d547437683752517a5432733175564f77784970576f776c6a366c4536352f4d7935596e3431634b694d645257524f6b516b3934494949715a5a57574a67463034544a474d415568445353624c6e59453033386152394c2b533163366f55366847767546484a4f3447614a36566579445738305a4b76384f564c7551525562456b67774a4a766a39574b4b76784676384177722b6170586b6e6d62727535795361323057756e50756a66416f5a5a69535437366c4b33664562442f4437585475544a4f36706b6551424a4e4454445964416934324c42305743567a385251367567456566745a4d32306d3171373739472f35506331416a56494645657474494c6338436b4371465944534f2f4761375379426c387975784e4c313453484648596e4e446359464c326c417a545a57634c49573548553535554d46704e5250643061387a51325251696756616573517975586a6b5352657a334168694d4556772b57464862714f526c446b654b35723731794c5a442b596b522f2f7568513268676d6e4838326e5144384e565367536357742b4a32306174794d79755448517850466d43542b61493644375a38337475565a5859395a315267322b655a774b47354142397835476c7a31582f64714865772f39567959354648646c37683455354a4930347a75324f5946416767375a48634b6a535a4751493055763566654b344c48724237706a672f7458427446757756576b686c4c4d6f5050624739544f4f43775946744163714e51786c6d466471626a79524d50355967394434312f30567852325045722b503443466a5178434f495862714f654138724e6a392f62484436677038773232445868722b5147314874414c512b38562b5272635649775548595535594a4951666474514b73635a42384b4766496338554e74586f484d3644517848633861754a5639367778782b67344573453065666368622b314d794b6e48684b647677353241636637584e44416c755a5a414f654e545a39734e326d516676584e496770486d6137736e33312b55622f484e4c7159696e55456a49424f3570574c465163446c34555035534f343177363775546e415a496e4b2f45347231657967354d3072686e48394b3178353243796c4d52526841644f4164324a354861705a4c694f5746582f694f4863795a77657a582b7074374e726d357873444e4d565a6d48754f336f4f456a7649316233506c614248726472424e2f5571674e2b36314a726e6e6753575276314f417839742f7a6c6f66575374384175414b2b2b51712b2b6a49515239303756412b2f336e494171354334505a52515352357361574d78746c5a477548476b36783154672b44564a614e74757472454a4848794663486c6e774d6f307a694a666b4178713569744947665951494e597963377332616e7662795a6954306174492b51655a306a595659334b694b3768655579497743414d42765464534332686a51654334795051634f6a7134506756336f64533573556a4a3854704d672f5a7137554a614c344b3241666a37595a4957512f4a43614f4631626a7a324a4e44555678676374334f4b69306e38784f54524942483461622f4d5662337369482b59412b346b6972514b46373570567a745847417355694a4955746f77637136687361323777617350574a51516f4e77374e712b47514b736546514f4e4a77776a4c637879555a4e634f615a635941744956695134387a58414a30744a304d52654f56586361752f4856704e754a6347564a6879496e746e7751664d61386644306a445778744969664b57442b326d6d354b6b385938755465323534634433754e483936333070585956696449334f534b74574948365571316d7875415656635a2b6463506b6b6362344c686134626251642b5859794839385678486f59687132696a5264324f5469754f3330694e4a70436d5a6c4750494952544d7a6369584f5366514e73357852477166683972634b4d3867385342675434677236426e72436a2f6f344f4868504e6c6b534d6d6831705a65686c5065776b47422b2f747642562b6241352b474b3567594238535279706534567a7a67554b586c35304e6a586653352f694145652b68364f5135696752467736306131697a3367757a5a2f66486f4f46613768512b356d416f624d39704837674a6b6f3959584d41482b3866352f77442f784141344551414341514d444151554642675944415145414141414241674d41424245534954464242524d69555745514d444a436351595549434f426b544e41556d4b6877535279735257432f396f414341454441516b2f41506462352f6e786d683752522f6c442b41657a4d72486841644e5761656d3571315a542f624a2f6f314d366b372b4a446a397854493638355276396577554b50766a522f44774b326a6a2f41474e66447742376542585467306e2f4142495a343757642f4b53514d7962656f552f79373738796a484950417067584a78743556326e4659526431492f667971585573694d34514162366e49774b37554b535839786232396a4b7536794e4b516545446b676e43466763416b486356464232644333326569376174726933764136727175566a4379724f36365a634168734847534e7474376539764c5630696b6a6a6e69574b372f4e7a734967784c6f70556a5742673165576b453173686c6d746d6d547638417531786c744f635946423470343470514c5672655233754c6a4a5179504b63786851426a79476759357043727178566c4f784246482b55486a6c6b574e6575374541564833566c6f45356b766b6c68554b4e6964576b6a6756326f735734376c6f59576d53526645724d436832414b48424e53396f33304a77786d456663643676555170347a6e6e784862616b53476470414e4d3934566e74316a526646714a48644a4957314b32467953414d6d725747464c612b6757352b3978786d774c7778544d716d4d624d73526c5669757467334e586a57456c7764456b2b6d526f30694c4843776f437756597763494d446172794f3573757a48745a72616557306c65457864374a4633467a4645646e4772574e4f4d3546586b466c5063336a5257695270484b79787773555a70464263516c586b56493439576572486d6d314f30376c6e794357506e6b632f7970495a4844412f51356f58306c764c42426358736c6a6339334a4c614b6a6646634c34772b7337674852714a384f31586e5a76616b393550334357746c64724a4c6477544b796f7a444867625a535143657034714730656149453978325a634d54657971726638414763686f752b525a47475569797a615353617565304c6e746d35637933646d586c7437614f614b3444784b42725a68455931377434573248796d70324d5962576b4f706d6a5269414352724a4a4f334a4e4a73654353414b75454d4c37744870316a3147636a59314b786a6a68467376644b6b4f596c4f517261414361445279592b6263667651494876442b412f68746847657a6d5a5775594a48566f706370494a3567727143475573477947797134577232654952646f513970496b3069334d797a774b5934343032594c743469584a3341465152573043573056715668554c4a4c48414d5269526c417956486c74556b634d4741636c77376e506b716e4e547a4e63636c386a6e3042712b696c4733685a7773677a356a4e62483244496f6a5230546d73712f4242487544377a4a55486341366475745168624731585448713361535855716b443642716b59526a424142302f74696e6b306b6a543469526b394b37575353344d4c4d597537306852354951647a556a353173703333427a31387a55686133323259444238796156314562526853687744724f445773616e654f585764575473525256573877414b596e3352393162504c4d7a664b704b674871783446506d7a69745a354c2f756a6753544e4735483177527172745231544f53724a75503155675649387a4963717a44536f506d4648576f446b446e716655316453577a6c74545954574d31647a53453745674251545542686a74706f75384a5834396647357954527a61584d58686464744d384a354a363748335a3976507450346354397153413348644a77686337617a55674e7863534f7a6441434957554b4b324a38532b6f4e497847514274317133434d514656734145314b6f324c44484a5049474b2b49734b552f6c5864756c79654d7147456d6a506d536f465346726f52335538687a357a6266343932666451764a49357746525361433350615572457357385563586f753247774f7072737133463762454e464f7134616f3138493163644430486c57734d366768454f6b437279654a444e335245616c6975547467314b306d51435763354a4a3336552b4c366641743158346c4f63354e5443574735685235677a414f6c784541572f55714136316566654973434f4f58664256762f442f4a386564507169336b6d30676e434c363162787852375a4b72676b4431356f36526f2b4c3566706b37644b6b5851367368504f39524478746f5270483039356a714152556f6b437379676a6f4d354855314d69513935724f7262636743704675726b444d554d65363538334e4f53374859664b696a6741565a53697876516b71336d6b39796b5155497a46754d6771526a6d757976766e627a5278693676326c3863456f4f74574c4e6e42424736563844376a30387837593246724556457375446f557563414d65415458326b733762736d316a474a49775a746477564c666431347934774f4d696d4c526c744f534d454833674c4f666851636d746b635a5349624b6f6f414761316b5368754e694b6d7a626f695043677a6a42474d6b6461746269474e68345a7845556a782f632f6b616a54576f3735634d584b48485854796347704136544f736965456f515678794453426c6451644a787669686c434177394e3845657a7445575862786950384138366438414669633650466b416d724b59545233717a58695437744f75664751324d454e3072732b345a2b316350597a646d57346b6a6479423447775646516147306831306b4f57553951467a6d6f4a5a4a4279785170474f6e7850675639703465792b794c5a52326832764c46705066797567317157557141597957566456527642396a657956376e7332314f336648683769587a4c6e7a6f41494f673935384169516b39463879612b52436372364c6d67564e6e644342796469797937617633426f2f6c794c6c50384164516870725936346a30794f684641746c694d486767306d49317a474346774d636243736c4d4b4d59366e725568436a79582f48363177327054364666597a43524744715230494f612b7a4e763275795173496e6a6b584a6c477971797351385a39564e57557a665a756159744a62474e383270636e38794457446b4c31466662784a7072724474424e4c473752353456564a526c5566303166535376446f317541564758554e685178626747704a4e4c455a444d5343664d6a4e4447414678355948764f6731566c58654c636730634f3175366b6a6367736847617a336c34366c3134495563564d735861635341536f78326c412b63657046547870436e784632306a5051484e647051596a7a72496b556e61724a354c45534d495869414a3066347961374f4d634d6d516a735272774e386d70564467456c4d372f55307975694d78615162676e6a61746a35394b4a57426c4b753637454139633132774744414d41535135794d376b5662527a786a59364842592f554562305a2b7a62736a5572714d4a2b716b3661375453565366444d735770574854634e6747706e6c596342746c7a3733624a786d6c435734324a7a6b7636656770384d5855454435567a67736649596f62526f7359362f423461646b75492f346241344a556344506e56784c494d2f43376b344e486e3565704e414264576b4f6d3547334443674a51684f5172415a553745623074774935485a5a513634664741542b6d545149464c7361684574753059426a493332594e6e2f4658733044487a33417034376949664b54717a366b5645715445594b44716364504b7366645a414655734e6b4f64694b486a6a596a3078373359744b374831415374705a4d357763486175304e7459655651685974356a55534b47345651665567597a374a43654b4f6355504a6c4a347975354e5271364b446a554d6759484e654674675478515064754d4544314e62696c494a4a315a2b74484744584936556d68303363386b45394b556c633533363076686e58753350384163674139377a6c38452b754257305678614e6a50395a4a494950726a48734f514468674f5235476a57796d706b515259575335436869573668436369726b5475796435452b6b446a494f645031703871636d4e7363344f44394e785753756f34552b5170776b537844476f34476f3841314573325830504b78495165654231785563625249326745722b3949714f635950414a387136416d76346a44556f72787a484152654e3652653874565736694b3759306e44416a364833716b71706b4a7835394e71756a6258665a7057574734354737447773504c504641417952493577517779526e6c5363305344575030555a70484e374f6939354d756371722f4b6d4f7071464c71376b48654c472f696a6a7a356a713157736475727a2f644c754b4d61596d575565453447774e4d50753039793178426a6251736f444f682f2f41466b31426c2b725a716675513432494868464f7372757056635a4143714e7951616951456a58787351664f6c4378426b5a736346756f78527958436a793533396b6a4e7477787a6755766a6e6253573834783078537439326b4a6b684a2f706266336d6b334672484a496d7266355351663346666151515766336a51596534774d7141655146794e367547633269474d544f43433479546a726755634b716c32506f6f7a56743356706246456a4c484c7557445a596a6f446a61676d66757168355a505450686a3961554c464a61784f6f3867514b6e64496c6d57584d5a47535671563556696a4349376e4c6b4c786e7a3968327079796f41426e67443571326a41494d6e516b5577377276534274584261767052334c3134753451686c78317a6a46496f3752456a4f4e4977566a3441493935675458566c4e44455351414a5375454a4a34337148756f6f496c514952687334334c446f784f63306864774d616c62445948414f5276696c3078393232734535596a4641426e6c426b7963746a6b416d7458634361565755485937416a4e647145646e32332f465750767a4838413667566349306f4f77576473343838303739317177544f53326a795a574a344e5a4b4f41527430505565596f3863446e4a6f674d772f4d4b3759423378532f6c5977702f714a35464c6845584f4b3671314767447062656a6c5a51336836413066454a4754486c6a33412f434d54703857506d55566734584f72534d37655a707375384c6866516b62564b786e6b5a5a38736556596c52533637693341756f7672487a5778494678474d2f6f787231714a544b6b7142472b5946715571562f4a436a63414a6a65734264496551455a2f36302b3534474b58776f696c686e356a52354158696a766f7950594b494768306a5872757877612f6853615a6c486c336744592f4350636245484e44774f436a4b5036694d55656d4b2f6878526d426670433451567544474467372b6d4b51765936324b486f6f666d4a2f544a32727378555934424f76502b715665366a624f414d4b6d65446e725250654b46314654685165704970644d30724b544b44674d51414f4b5a6848755353766c54625a3347504b6b495876446756794c5a662f54376469554455666730525a48557871465076766759342f586f613233786a366d686748377777483149496f2f49425335556a47477273364953645346786d6f6b6a526c794167786738554e55665236584d6a635a346f6e76466a436b48316f313851416b4830477872354949782f67483248414330526c6b6452395258784756732b2b36416d7438746d6a674e415778395646625a4e43756a555144717876307038593644687339434b54453344593241726339364579574e4368732f67497a512b4e776f2f77436f727052726352334754356b4e74533455584d6741394d2b2b36527366594d5251786b4d336c704155316557355674787159412f7354567a486c7542467561684c497778716b3333347a523079716f615053754e38304831684172456e473436305178445a4744584c4d5a574e46565049365a707751753549337858777972714238774e765a314246487772486b4879775251776b3861532f553447666666306166334e63526f782f555634546335566d354f42766e395361757047486c74555162423331746b6255495658414977764648557a4848683954314e4c674f43464a50474b62726759465a5a55554b70417a676a6b55516f4f2b2b3153726e474351656c4e2b6242636b412f324f504c327278424b78506f4b545a484d4570387465362f76672b2b3641452f707654666e5854372b69446b3034526e565168625942436176736a794c4f503032715a43437747526e497156526a5962455a2f6355574a7a704a58624a6f6641516366536f59784b735231484761354c4676333967324e4e734351332b7661666942584648387357375047504a6f53477a37342f58394659303256584d59484f6d4654673438693163624b50514374714873356a77772f66487350684d525a442b416276686a2b32665a2f54527958526e2b6d6d7479594a4d6a36716148552f692f2f396b3d);
INSERT INTO `users` (`id`, `email`, `password`, `type`, `firstname`, `lastname`, `address`, `contact_info`, `photo`, `status`, `activate_code`, `reset_code`, `created_on`, `zone`, `cost`, `coupon_code`, `coupon_worth`, `discount`, `wallet`, `coupon_id`, `field20`) VALUES
(114, 'contacts@tsavo.store', '$2y$10$tFi19noFBxjYh6jpd69FWuNH/gcnii3E.q7MXKxkVezRJ.5esWim2', 0, 'Salome', 'Wanjiru', 'Muguga, Thika, Kenya', '710860361', 'ea4281892d2584ad263494a2c5b5c8eb.JPG', 1, 'ZhvwmD6L1YG3', '', '2021-05-28', 'Kenol PUS', 425.00, NULL, NULL, '', 0, NULL, NULL),
(115, 'kennykareko@gmail.com', '$2y$10$.GZjVvkIyfknAk2ZUtCZsOarVekzhqXu3VprQG6UKlU7DskEL5U2m', 0, 'Kennedy', 'Warorua', 'Gatanga kirwara ', '0714560978', '', 1, 'NQMzFtdPhnxB', 'nAhvqgLXipMzuYb', '2021-05-28', 'zone 2--Thika Main PUS--0', 0.00, NULL, NULL, '', 0, NULL, NULL),
(116, 'leowambugu18@gmail.com', '$2y$10$LHyuuy1Vkrzo7tX089Q.m.bvA5VwbWHuHLUC70ijDph4MmeNIgk4O', 0, 'Leo', 'Wambugu', 'Temple Road, Nyeri, Kenya', '0728976631', '', 1, 'rjEl5VuK9QoN', '', '2021-05-30', 'Zone 1--Kenol PUS--425', 425.00, NULL, NULL, '', 0, NULL, NULL);
INSERT INTO `users` (`id`, `email`, `password`, `type`, `firstname`, `lastname`, `address`, `contact_info`, `photo`, `status`, `activate_code`, `reset_code`, `created_on`, `zone`, `cost`, `coupon_code`, `coupon_worth`, `discount`, `wallet`, `coupon_id`, `field20`) VALUES
INSERT INTO `users` (`id`, `email`, `password`, `type`, `firstname`, `lastname`, `address`, `contact_info`, `photo`, `status`, `activate_code`, `reset_code`, `created_on`, `zone`, `cost`, `coupon_code`, `coupon_worth`, `discount`, `wallet`, `coupon_id`, `field20`) VALUES
(123, 'princesswanjiru3@gmail.com', '$2y$10$7H.Ty2rIvxgxGFDIHxF59u0IJa8QsoQnZEJ6ujC/fxtQUFdElNnsm', 0, 'Princess', 'Wanjiru', 'Kamagambo, Thika, Kenya', '0789765556', 'teacher-1.jpg', 1, '', 'M7Bm8b1ojyTxvzu', '2021-06-23', 'Zone 1--Kenol PUS--425', 425.00, NULL, NULL, '', 0, NULL, NULL),
(124, 'njewacyber@gmail.com', '$2y$10$DJQ7WNHUWgK9VN.CgBitlu36pv3PVCCEdMx3XLILyFptuvu.y.xEO', 0, 'Njewa', 'Cyber', 'Thika Road, Nairobi, Kenya', '0727828772', 'IMG20200614163811.jpg', 1, 'ki53FA8XJLOQ', '', '2021-06-26', 'zone 2--Thika Main PUS--0', 0.00, NULL, NULL, '', 0, NULL, NULL),
(126, 'thetsavo254@gmail.com', '$2y$10$8qaM8Qrxxn8ahg6Bf60sR.7tEveV.vQQ12u5Rx219181FiLSPDVbm', 0, 'Anesto', 'Miran', 'Haile Selassie Avenue, Nairobi, Kenya', '716912002', '', 1, 'PVBKsDI6FYlp', '', '2021-06-27', 'Zone 1--Kasarani Main PUS--75', 75.00, NULL, NULL, '', 0, NULL, NULL),
(127, 'henrynjue254@gmail.com', '$2y$10$K9ztyHXx5LgYD8TOQewY3.yF7sIkp6sTyweeOm0q9jMUPy/Bn3kBG', 0, 'Lazy', 'Swine', '198', '740295282', '', 1, 'oj4ax3y2pLAS', 'VQHc9BXTLFrotEZ', '2021-06-29', 'Zone 1--Kasarani Main PUS--75', 75.00, NULL, NULL, '', 0, NULL, NULL),
(128, 'youngboyd254@gmail.com', '$2y$10$0MTKTygcwYMaJTyMKD5UVOopfA5OarzeAzFwKLFhwcOx9LS2UuWea', 0, 'Dennis', 'Njuguna', '196', '745025031', '', 1, '', '', '2021-06-30', NULL, NULL, NULL, NULL, '', 8635, NULL, NULL),
(133, 'dominicnganga2025@gmail.com', '$2y$10$0NnV1A2XUkslXs9QNAqm.OdI.dpFRG7iflCc5RzoQuiWV1mEqNwI6', 0, 'Dominic gitau ng\'ang\'a', 'Gitau', '71 Thika', '742372059', '', 1, 'BGXSxVJIfP9a', '', '2021-07-02', 'Thika Main PUS', 0.00, NULL, NULL, '', 0, '10', NULL),
(137, 'Cyrus.developer@tsavo.store', '$2y$10$2/vmB3m5cMGWWCsA4A1PG.FhO8c95ZexIpaUKCaCw4iI9.RTFFDJu', 0, 'Cyrus', 'Developer', 'Kahawa West Station Road, Githurai, Kenya', '790395822', '', 1, '', '', '2021-07-03', 'Kasarani Main PUS', 75.00, NULL, NULL, '', 200000, '1622146826', ''),
(138, 'njeriruth13@gmail.com', '$2y$10$AW4V6yYOLykS2mF2WO0JPewY0j685XJekdddkYeAZcCIedz8kUbGm', 0, 'Ruth', 'Njeri', '1356 ', '727828772', '', 1, 'vQR16HgUG3JP', '', '2021-07-06', 'Thika Main PUS', 0.00, NULL, NULL, '', 0, '10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users_agent`
--

CREATE TABLE `users_agent` (
  `id` int(30) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 2 COMMENT '1 = admin, 2 = staff',
  `branch_id` int(30) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_agent`
--

INSERT INTO `users_agent` (`id`, `firstname`, `lastname`, `email`, `password`, `type`, `branch_id`, `date_created`) VALUES
(1, 'Alex', 'Warorua', 'Waroruaalex@tsavo.store', 'b53477c2821c1bf0da5d40e57b870d35', 1, 0, '2020-11-26 10:57:04'),
(4, 'John', 'Warorua', 'stalbansschoolthika01@gmail.com', 'b53477c2821c1bf0da5d40e57b870d35', 2, 5, '2021-04-27 03:20:16'),
(6, 'Maryanne', 'wambui', 'FGCXHFO01@gmail.com', 'b53477c2821c1bf0da5d40e57b870d35', 2, 9, '2021-05-19 02:50:06'),
(7, 'Alex', 'Warorua', 'thetsavo254@gmail.com', 'b53477c2821c1bf0da5d40e57b870d35', 2, 10, '2021-05-19 03:06:00');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  `product` varchar(40) DEFAULT NULL,
  `field1` varchar(40) DEFAULT NULL,
  `field2` varchar(40) DEFAULT NULL,
  `field3` varchar(40) DEFAULT NULL,
  `w_fname` varchar(40) DEFAULT NULL,
  `w_lname` varchar(40) DEFAULT NULL,
  `w_email` varchar(40) DEFAULT NULL,
  `w_pnumber` varchar(40) DEFAULT NULL,
  `w_product` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `user_id`, `product_id`, `quantity`, `name`, `product`, `field1`, `field2`, `field3`, `w_fname`, `w_lname`, `w_email`, `w_pnumber`, `w_product`) VALUES
(18, 31, 46, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 31, 45, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 31, 44, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, 95, 51, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(34, 95, 55, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(35, 95, 59, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(36, 95, 62, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, 95, 60, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(38, 95, 45, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(39, 95, 52, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(45, 95, 49, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(46, 95, 46, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(47, 95, 61, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(48, 95, 64, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(49, 95, 56, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(50, 118, 65, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(51, 137, 60, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(52, 137, 52, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agent_monitor`
--
ALTER TABLE `agent_monitor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pay_number` (`pay_number`);

--
-- Indexes for table `board_member`
--
ALTER TABLE `board_member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_cat` (`sub_cat`),
  ADD KEY `cat_name` (`cat_name`);

--
-- Indexes for table `confirm_order`
--
ALTER TABLE `confirm_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`coupon_id`);

--
-- Indexes for table `dash_cat`
--
ALTER TABLE `dash_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `agent` (`agent`),
  ADD KEY `agent_id` (`agent_id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `sales_id` (`sales_id`),
  ADD KEY `sales_date` (`sales_date`);

--
-- Indexes for table `drop_off`
--
ALTER TABLE `drop_off`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `female_dresses`
--
ALTER TABLE `female_dresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `female_pants`
--
ALTER TABLE `female_pants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `female_shoes`
--
ALTER TABLE `female_shoes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `female_skirts`
--
ALTER TABLE `female_skirts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `followers`
--
ALTER TABLE `followers`
  ADD PRIMARY KEY (`likeid`),
  ADD KEY `userid` (`userid`),
  ADD KEY `vendorid` (`vendorid`);

--
-- Indexes for table `how_to_agent`
--
ALTER TABLE `how_to_agent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `how_to_vendor`
--
ALTER TABLE `how_to_vendor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_rating`
--
ALTER TABLE `item_rating`
  ADD PRIMARY KEY (`ratingId`),
  ADD KEY `itemId` (`itemId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `male_pants`
--
ALTER TABLE `male_pants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `male_shirts`
--
ALTER TABLE `male_shirts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `male_shoes`
--
ALTER TABLE `male_shoes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `membership_cache`
--
ALTER TABLE `membership_cache`
  ADD PRIMARY KEY (`request`);

--
-- Indexes for table `membership_grouppermissions`
--
ALTER TABLE `membership_grouppermissions`
  ADD PRIMARY KEY (`permissionID`),
  ADD UNIQUE KEY `groupID_tableName` (`groupID`,`tableName`);

--
-- Indexes for table `membership_groups`
--
ALTER TABLE `membership_groups`
  ADD PRIMARY KEY (`groupID`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `membership_userpermissions`
--
ALTER TABLE `membership_userpermissions`
  ADD PRIMARY KEY (`permissionID`),
  ADD UNIQUE KEY `memberID_tableName` (`memberID`,`tableName`);

--
-- Indexes for table `membership_userrecords`
--
ALTER TABLE `membership_userrecords`
  ADD PRIMARY KEY (`recID`),
  ADD UNIQUE KEY `tableName_pkValue` (`tableName`,`pkValue`(150)),
  ADD KEY `pkValue` (`pkValue`),
  ADD KEY `tableName` (`tableName`),
  ADD KEY `memberID` (`memberID`),
  ADD KEY `groupID` (`groupID`);

--
-- Indexes for table `membership_users`
--
ALTER TABLE `membership_users`
  ADD PRIMARY KEY (`memberID`),
  ADD KEY `groupID` (`groupID`);

--
-- Indexes for table `membership_usersessions`
--
ALTER TABLE `membership_usersessions`
  ADD UNIQUE KEY `memberID_token_agent` (`memberID`,`token`,`agent`),
  ADD KEY `memberID` (`memberID`),
  ADD KEY `expiry_ts` (`expiry_ts`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `new_user_cookie`
--
ALTER TABLE `new_user_cookie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parcel_tracks`
--
ALTER TABLE `parcel_tracks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privacy_policy`
--
ALTER TABLE `privacy_policy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`category`),
  ADD KEY `slug` (`slug`),
  ADD KEY `male_shoes` (`male_shoes`),
  ADD KEY `male_pants` (`male_pants`),
  ADD KEY `male_shirts` (`male_shirts`),
  ADD KEY `female_shoes` (`female_shoes`),
  ADD KEY `female_dresses` (`female_dresses`),
  ADD KEY `female_skirts` (`female_skirts`),
  ADD KEY `female_pants` (`female_pants`),
  ADD KEY `supplier` (`supplier`);

--
-- Indexes for table `return_policy`
--
ALTER TABLE `return_policy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `sales_monitor`
--
ALTER TABLE `sales_monitor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `ship`
--
ALTER TABLE `ship`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_name` (`product_name`);

--
-- Indexes for table `subscriber`
--
ALTER TABLE `subscriber`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_cat`
--
ALTER TABLE `sub_cat`
  ADD PRIMARY KEY (`sub_category`);

--
-- Indexes for table `sub_cat_2`
--
ALTER TABLE `sub_cat_2`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`),
  ADD KEY `drop_off_point` (`drop_off_point`);

--
-- Indexes for table `system_setting`
--
ALTER TABLE `system_setting`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hidder` (`hidder`);

--
-- Indexes for table `system_settings`
--
ALTER TABLE `system_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms_conditions`
--
ALTER TABLE `terms_conditions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name1` (`name1`);

--
-- Indexes for table `transaction_code`
--
ALTER TABLE `transaction_code`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `zone` (`zone`),
  ADD KEY `cost` (`cost`),
  ADD KEY `coupon_code` (`coupon_code`),
  ADD KEY `coupon_id` (`coupon_id`),
  ADD KEY `discount` (`discount`);

--
-- Indexes for table `users_agent`
--
ALTER TABLE `users_agent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `agent_monitor`
--
ALTER TABLE `agent_monitor`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `board_member`
--
ALTER TABLE `board_member`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1622146827;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=274;

--
-- AUTO_INCREMENT for table `confirm_order`
--
ALTER TABLE `confirm_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `coupon`
--
ALTER TABLE `coupon`
  MODIFY `coupon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `dash_cat`
--
ALTER TABLE `dash_cat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT for table `drop_off`
--
ALTER TABLE `drop_off`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `female_dresses`
--
ALTER TABLE `female_dresses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `female_pants`
--
ALTER TABLE `female_pants`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `female_shoes`
--
ALTER TABLE `female_shoes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `female_skirts`
--
ALTER TABLE `female_skirts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `followers`
--
ALTER TABLE `followers`
  MODIFY `likeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT for table `how_to_agent`
--
ALTER TABLE `how_to_agent`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `how_to_vendor`
--
ALTER TABLE `how_to_vendor`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `item_rating`
--
ALTER TABLE `item_rating`
  MODIFY `ratingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `male_pants`
--
ALTER TABLE `male_pants`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `male_shirts`
--
ALTER TABLE `male_shirts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `male_shoes`
--
ALTER TABLE `male_shoes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `membership_grouppermissions`
--
ALTER TABLE `membership_grouppermissions`
  MODIFY `permissionID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11655;

--
-- AUTO_INCREMENT for table `membership_groups`
--
ALTER TABLE `membership_groups`
  MODIFY `groupID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=976;

--
-- AUTO_INCREMENT for table `membership_userpermissions`
--
ALTER TABLE `membership_userpermissions`
  MODIFY `permissionID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=195;

--
-- AUTO_INCREMENT for table `membership_userrecords`
--
ALTER TABLE `membership_userrecords`
  MODIFY `recID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `new_user_cookie`
--
ALTER TABLE `new_user_cookie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2092;

--
-- AUTO_INCREMENT for table `parcel_tracks`
--
ALTER TABLE `parcel_tracks`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `privacy_policy`
--
ALTER TABLE `privacy_policy`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `return_policy`
--
ALTER TABLE `return_policy`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `sales_monitor`
--
ALTER TABLE `sales_monitor`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subscriber`
--
ALTER TABLE `subscriber`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1621335352;

--
-- AUTO_INCREMENT for table `system_settings`
--
ALTER TABLE `system_settings`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `terms_conditions`
--
ALTER TABLE `terms_conditions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transaction_code`
--
ALTER TABLE `transaction_code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=684;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT for table `users_agent`
--
ALTER TABLE `users_agent`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;