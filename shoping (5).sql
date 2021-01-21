-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2021 at 11:05 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoping`
--

-- --------------------------------------------------------

--
-- Table structure for table `buy`
--

CREATE TABLE `buy` (
  `pid` int(200) NOT NULL,
  `pimg` varchar(200) NOT NULL,
  `pname` varchar(200) NOT NULL,
  `pdetail` text NOT NULL,
  `price` decimal(20,0) NOT NULL,
  `profile` varchar(200) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `adress` varchar(200) NOT NULL,
  `areapin` int(200) NOT NULL,
  `date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buy`
--

INSERT INTO `buy` (`pid`, `pimg`, `pname`, `pdetail`, `price`, `profile`, `firstname`, `lastname`, `contact`, `email`, `adress`, `areapin`, `date`) VALUES
(3, 'uploads/lcd3.png', 'LCD', 'Display Type: LED Backlit<br> 49.53 cm (19.5 inch) HD+ Display<br> TN Panel<br> Response Time: 5 ms | VGA<br> HDMI<br> Inbuilt Speaker<br> 3 Years Warranty<br>', '22500', 'uploads/IMG_20180722_170433532.jpg', 'gokul', 'makwana', '7999936614', 'gokul123@gmail.com', 'indore', 453001, '18-12-2019 07:15:31 AM'),
(1, 'uploads/xiaomi-mi-a3_white.jpg', 'Mi A3', '4 GB RAM | 64 GB ROM | Expandable Upto 256 GB<br> 16.0 cm (6.3 inch) FHD+ Display<br> 48MP + 5MP | 13MP Front Camera<br> 4000 mAh Battery<br> Qualcomm Snapdragon 660 AIE Processor<br> Splash Proof - Protected by P2i<br> Quick Charge 4.0 Support<br> Brand Warranty of 1 Year Available for Mobile and 6 Months for Accessories<br>', '11999', 'uploads/IMG_20180722_170433532.jpg', 'gokul', 'makwana', '7999936614', 'gokul123@gmail.com', 'indore', 453001, '18-12-2019 07:17:04 AM'),
(1, 'uploads/xiaomi-mi-a3_white.jpg', 'Mi A3', '4 GB RAM | 64 GB ROM | Expandable Upto 256 GB<br> 16.0 cm (6.3 inch) FHD+ Display<br> 48MP + 5MP | 13MP Front Camera<br> 4000 mAh Battery<br> Qualcomm Snapdragon 660 AIE Processor<br> Splash Proof - Protected by P2i<br> Quick Charge 4.0 Support<br> Brand Warranty of 1 Year Available for Mobile and 6 Months for Accessories<br>', '11999', 'uploads/IMG_20180722_170433532.jpg', 'gokul', 'makwana', '7999936614', 'gokul123@gmail.com', 'indore', 453001, '04-01-2020 03:59:24 PM'),
(1, 'uploads/xiaomi-mi-a3_white.jpg', 'Mi A3', '4 GB RAM | 64 GB ROM | Expandable Upto 256 GB<br> 16.0 cm (6.3 inch) FHD+ Display<br> 48MP + 5MP | 13MP Front Camera<br> 4000 mAh Battery<br> Qualcomm Snapdragon 660 AIE Processor<br> Splash Proof - Protected by P2i<br> Quick Charge 4.0 Support<br> Brand Warranty of 1 Year Available for Mobile and 6 Months for Accessories<br>', '11999', 'uploads/gokul3333.jpg', 'gokul ', 'makwana', '7999936614', 'gokul123@gmail.com', 'indore', 453001, '05-01-2020 08:53:20 PM'),
(1, 'uploads/xiaomi-mi-a3_white.jpg', 'Mi A3', '4 GB RAM | 64 GB ROM | Expandable Upto 256 GB<br> 16.0 cm (6.3 inch) FHD+ Display<br> 48MP + 5MP | 13MP Front Camera<br> 4000 mAh Battery<br> Qualcomm Snapdragon 660 AIE Processor<br> Splash Proof - Protected by P2i<br> Quick Charge 4.0 Support<br> Brand Warranty of 1 Year Available for Mobile and 6 Months for Accessories<br>', '11999', 'uploads/signature.jpg', 'dhasrath', 'makwana', '85584654654', 'dhasrath123@gmail.com', '123', 453001, '05-01-2020 08:58:44 PM'),
(17, 'uploads/saress2.jpeg', 'SARRESS', '<h5>Special PriceGet extra 30% off (price inclusive of discount)T&C</h5>                   <h5>Combo OfferBuy 3 items save 10%; Buy 4 or more save 15%See all productsT&C</h5>                   <h5>Buy More, Save MoreBuy worth â‚¹2000-3999 save â‚¹200; Buy worth â‚¹4000 save â‚¹600See all productsT&C</h5>                   <h5>Bank Offer10% Instant Discount* with Axis Bank Credit and Debit CardsT&C</h5>                  ', '999', 'uploads/gokul3333.jpg', 'gokul ', 'makwana', '7999936614', 'gokul123@gmail.com', 'indore', 453001, '05-02-2020 06:46:23 PM'),
(1, 'uploads/xiaomi-mi-a3_white.jpg', 'Mi A3', '4 GB RAM | 64 GB ROM | Expandable Upto 256 GB<br> 16.0 cm (6.3 inch) FHD+ Display<br> 48MP + 5MP | 13MP Front Camera<br> 4000 mAh Battery<br> Qualcomm Snapdragon 660 AIE Processor<br> Splash Proof - Protected by P2i<br> Quick Charge 4.0 Support<br> Brand Warranty of 1 Year Available for Mobile and 6 Months for Accessories<br>', '1', 'uploads/headphone3.jpg', 'Abhay', 'mourya', '8225824260', 'abhay123@gmail.com', 'indore', 452016, '18-05-2020 11:05:22 AM'),
(1, 'uploads/xiaomi-mi-a3_white.jpg', 'Mi A3', '4 GB RAM | 64 GB ROM | Expandable Upto 256 GB<br> 16.0 cm (6.3 inch) FHD+ Display<br> 48MP + 5MP | 13MP Front Camera<br> 4000 mAh Battery<br> Qualcomm Snapdragon 660 AIE Processor<br> Splash Proof - Protected by P2i<br> Quick Charge 4.0 Support<br> Brand Warranty of 1 Year Available for Mobile and 6 Months for Accessories<br>', '1', 'uploads/1600x1200_FURNITURE_Template_0000s_0012_Nordic-1.jpg', 'sachin', 'vishwakarama', '32323233', 'sachinvish07@gmail.com', 'dsd', 12221, '14-06-2020 04:11:47 PM'),
(18, 'uploads/sarees.jpg', 'SAREES', '<h5>Special PriceGet extra 30% off (price inclusive of discount)T&C</h5>                   <h5>Combo OfferBuy 3 items save 10%; Buy 4 or more save 15%See all productsT&C</h5>                   <h5>Buy More, Save MoreBuy worth â‚¹2000-3999 save â‚¹200; Buy worth â‚¹4000 save â‚¹600See all productsT&C</h5>                   <h5>Bank Offer10% Instant Discount* with Axis Bank Credit and Debit CardsT&C</h5>                  ', '555', 'uploads/1600x1200_FURNITURE_Template_0000s_0012_Nordic-1.jpg', 'sachin', 'vishwakarama', '32323233', 'sachinvish07@gmail.com', 'dsd', 12221, '14-06-2020 04:12:10 PM'),
(1, 'uploads/xiaomi-mi-a3_white.jpg', 'Mi A3', '4 GB RAM | 64 GB ROM | Expandable Upto 256 GB<br> 16.0 cm (6.3 inch) FHD+ Display<br> 48MP + 5MP | 13MP Front Camera<br> 4000 mAh Battery<br> Qualcomm Snapdragon 660 AIE Processor<br> Splash Proof - Protected by P2i<br> Quick Charge 4.0 Support<br> Brand Warranty of 1 Year Available for Mobile and 6 Months for Accessories<br>', '0', 'uploads/1600x1200_FURNITURE_Template_0000s_0012_Nordic-1.jpg', 'sachin', 'vishwakarama', '32323233', 'sachinvish07@gmail.com', 'dsd', 12221, '14-06-2020 04:21:52 PM'),
(48, 'uploads/realme-narzo-10-rmx2040-original-imafqectbhfgxutg.jpeg', 'Realme Narzo 10', '4 GB RAM | 128 GB ROM | Expandable Upto 256 GB16.51 cm (6.5 inch) HD+ Display48MP + 8MP + 2MP + 2MP | 16MP Front Camera5000 mAh Lithium-ion BatteryMediaTek Helio G80 (12 nm) Processor', '4999', 'uploads/IMG_20180518_110540.jpg', 'Sumit', 'Vishwakarma', '4554555', 'sumit@gmail.com', 'Udankheri pachor', 3232, '15-06-2020 06:24:37 PM'),
(49, 'uploads/iphone-11-128-d-mwm02hn-a-apple-0-original-imafkg242ugz8hwc.jpeg', 'Apple iPhone 11', '64 GB ROM15.49 cm (6.1 inch) Liquid Retina HD Display12MP + 12MP | 12MP Front CameraA13 Bionic Chip Processor', '64000', 'uploads/DdSC_8511 (1).jpg', 'sachin', 'vishwakarma', '9009796860', 'a', 'indore MP', 452016, '15-06-2020 06:35:37 PM'),
(49, 'uploads/iphone-11-128-d-mwm02hn-a-apple-0-original-imafkg242ugz8hwc.jpeg', 'Apple iPhone 11', '64 GB ROM15.49 cm (6.1 inch) Liquid Retina HD Display12MP + 12MP | 12MP Front CameraA13 Bionic Chip Processor', '64000', 'uploads/DdSC_8511 (1).jpg', 'sachin', 'vishwakarma', '9009796860', 'a', 'indore MP', 452016, '15-06-2020 06:35:39 PM');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `email` varchar(200) NOT NULL,
  `pid` int(200) NOT NULL,
  `pimg` varchar(200) NOT NULL,
  `Pname` varchar(200) NOT NULL,
  `pdetail` varchar(200) NOT NULL,
  `price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`email`, `pid`, `pimg`, `Pname`, `pdetail`, `price`) VALUES
('krishna998@gmail.com', 25, 'uploads/chair.jpg', 'CHAIR', '<h5>Special PriceGet extra 30% off (price inclusive of discount)T&C</h5>                   <h5>Combo OfferBuy 3 items save 10%; Buy 4 or more save 15%See all productsT&C</h5>                   <h5>Buy', '999'),
('dhasrath123@gmail.com', 1, 'uploads/xiaomi-mi-a3_white.jpg', 'Mi A3', '4 GB RAM | 64 GB ROM | Expandable Upto 256 GB<br> 16.0 cm (6.3 inch) FHD+ Display<br> 48MP + 5MP | 13MP Front Camera<br> 4000 mAh Battery<br> Qualcomm Snapdragon 660 AIE Processor<br> Splash Proof - P', '11999'),
('gokul123@gmail.com', 1, 'uploads/xiaomi-mi-a3_white.jpg', 'Mi A3', '4 GB RAM | 64 GB ROM | Expandable Upto 256 GB<br> 16.0 cm (6.3 inch) FHD+ Display<br> 48MP + 5MP | 13MP Front Camera<br> 4000 mAh Battery<br> Qualcomm Snapdragon 660 AIE Processor<br> Splash Proof - P', '11999'),
('abhay123@gmail.com', 1, 'uploads/xiaomi-mi-a3_white.jpg', 'Mi A3', '4 GB RAM | 64 GB ROM | Expandable Upto 256 GB<br> 16.0 cm (6.3 inch) FHD+ Display<br> 48MP + 5MP | 13MP Front Camera<br> 4000 mAh Battery<br> Qualcomm Snapdragon 660 AIE Processor<br> Splash Proof - P', '1'),
('sachinvish07@gmail.com', 1, 'uploads/xiaomi-mi-a3_white.jpg', 'Mi A3', '4 GB RAM | 64 GB ROM | Expandable Upto 256 GB<br> 16.0 cm (6.3 inch) FHD+ Display<br> 48MP + 5MP | 13MP Front Camera<br> 4000 mAh Battery<br> Qualcomm Snapdragon 660 AIE Processor<br> Splash Proof - P', '1'),
('sachinvish07@gmail.com', 18, 'uploads/sarees.jpg', 'SAREES', '<h5>Special PriceGet extra 30% off (price inclusive of discount)T&C</h5>                   <h5>Combo OfferBuy 3 items save 10%; Buy 4 or more save 15%See all productsT&C</h5>                   <h5>Buy', '555'),
('sachinvish07@gmail.com', 9, 'uploads/shirt2.jpg', 'SHIRT', '<h5>Special PriceGet extra 30% off (price inclusive of discount)T&C</h5>                   <h5>Combo OfferBuy 3 items save 10%; Buy 4 or more save 15%See all productsT&C</h5>                   <h5>Buy', '0');

-- --------------------------------------------------------

--
-- Table structure for table `homemenu`
--

CREATE TABLE `homemenu` (
  `id` int(200) NOT NULL,
  `img` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homemenu`
--

INSERT INTO `homemenu` (`id`, `img`, `name`) VALUES
(1, 'uploads/electronics.png', 'electronics'),
(2, 'uploads/menwear.jpg', 'menwear'),
(3, 'womenwear.jpg', 'womenwear'),
(4, 'uploads/furniture.jpg', 'furniture');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(200) NOT NULL,
  `pimg` varchar(20000) NOT NULL,
  `Pname` varchar(200) NOT NULL,
  `pdetail` text NOT NULL,
  `qty` int(50) NOT NULL,
  `price` decimal(11,0) NOT NULL,
  `type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `pimg`, `Pname`, `pdetail`, `qty`, `price`, `type`) VALUES
(1, 'uploads/xiaomi-mi-a3_white.jpg', 'Mi A3', '4 GB RAM | 64 GB ROM | Expandable Upto 256 GB<br> 16.0 cm (6.3 inch) FHD+ Display<br> 48MP + 5MP | 13MP Front Camera<br> 4000 mAh Battery<br> Qualcomm Snapdragon 660 AIE Processor<br> Splash Proof - Protected by P2i<br> Quick Charge 4.0 Support<br> Brand Warranty of 1 Year Available for Mobile and 6 Months for Accessories<br>', 5, '0', 'electronics'),
(2, 'uploads/xiaomi-mi-a3_white.jpg', 'Mi A3', '4 GB RAM | 64 GB ROM | Expandable Upto 256 GB<br> 16.0 cm (6.3 inch) FHD+ Display<br> 48MP + 5MP | 13MP Front Camera<br> 4000 mAh Battery<br> Qualcomm Snapdragon 660 AIE Processor<br> Splash Proof - Protected by P2i<br> Quick Charge 4.0 Support<br> Brand Warranty of 1 Year Available for Mobile and 6 Months for Accessories<br>', 0, '0', 'electronics'),
(3, 'uploads/lcd3.png', 'LCD', 'Display Type: LED Backlit<br> 49.53 cm (19.5 inch) HD+ Display<br> TN Panel<br> Response Time: 5 ms | VGA<br> HDMI<br> Inbuilt Speaker<br> 3 Years Warranty<br>', 0, '22500', 'electronics'),
(4, 'uploads/lcd3.png', 'LCD', 'Display Type: LED Backlit<br> 49.53 cm (19.5 inch) HD+ Display<br> TN Panel<br> Response Time: 5 ms | VGA<br> HDMI<br> Inbuilt Speaker<br> 3 Years Warranty<br>', 0, '25000', 'electronics'),
(5, 'uploads/headphone.jpg', 'HEADPHONES', '<h5>With Mic:Yes</h5>                    <h5>Bluetooth version: 2.1</h5>                   <h5>Wireless range: 10 m</h5>                   <h5>Battery life: 8 hrs | Charging time: 2 hrs</h5>                   <h5>Foldable/ Collapsible: Designed for people always on the move, easy storage and easy to carry</h5>                    <h5>Extra bass: Add extra thump to your music</h5>              ', 0, '999', 'electronics'),
(9, 'uploads/shirt2.jpg', 'SHIRT', '<h5>Special PriceGet extra 30% off (price inclusive of discount)T&C</h5>                   <h5>Combo OfferBuy 3 items save 10%; Buy 4 or more save 15%See all productsT&C</h5>                   <h5>Buy More, Save MoreBuy worth â‚¹2000-3999 save â‚¹200; Buy worth â‚¹4000 save â‚¹600See all productsT&C</h5>                   <h5>Bank Offer10% Instant Discount* with Axis Bank Credit and Debit CardsT&C</h5>                  ', 0, '0', 'menwear'),
(10, 'uploads/shirt.jpg', 'SHIRT', '<h5>Special PriceGet extra 30% off (price inclusive of discount)T&C</h5>                   <h5>Combo OfferBuy 3 items save 10%; Buy 4 or more save 15%See all productsT&C</h5>                   <h5>Buy More, Save MoreBuy worth â‚¹2000-3999 save â‚¹200; Buy worth â‚¹4000 save â‚¹600See all productsT&C</h5>                   <h5>Bank Offer10% Instant Discount* with Axis Bank Credit and Debit CardsT&C</h5>                  ', 0, '0', 'menwear'),
(11, 'uploads/t-shirts.png', 'T SHIRT', '<h5>Special PriceGet extra 30% off (price inclusive of discount)T&C</h5>                   <h5>Combo OfferBuy 3 items save 10%; Buy 4 or more save 15%See all productsT&C</h5>                   <h5>Buy More, Save MoreBuy worth â‚¹2000-3999 save â‚¹200; Buy worth â‚¹4000 save â‚¹600See all productsT&C</h5>                   <h5>Bank Offer10% Instant Discount* with Axis Bank Credit and Debit CardsT&C</h5>                  ', 0, '999', 'menwear'),
(12, 'uploads/tshirt2.jpg', 'T SHIRT', '<h5>Special PriceGet extra 30% off (price inclusive of discount)T&C</h5>                   <h5>Combo OfferBuy 3 items save 10%; Buy 4 or more save 15%See all productsT&C</h5>                   <h5>Buy More, Save MoreBuy worth â‚¹2000-3999 save â‚¹200; Buy worth â‚¹4000 save â‚¹600See all productsT&C</h5>                   <h5>Bank Offer10% Instant Discount* with Axis Bank Credit and Debit CardsT&C</h5>                  ', 0, '555', 'menwear'),
(13, 'uploads/jeans2.jpg', 'JEANS', '<h5>Special PriceGet extra 30% off (price inclusive of discount)T&C</h5>                   <h5>Combo OfferBuy 3 items save 10%; Buy 4 or more save 15%See all productsT&C</h5>                   <h5>Buy More, Save MoreBuy worth â‚¹2000-3999 save â‚¹200; Buy worth â‚¹4000 save â‚¹600See all productsT&C</h5>                   <h5>Bank Offer10% Instant Discount* with Axis Bank Credit and Debit CardsT&C</h5>                  ', 0, '14999', 'menwear'),
(14, 'uploads/jeans.jpg', 'JEANS', '<h5>Special PriceGet extra 30% off (price inclusive of discount)T&C</h5>                   <h5>Combo OfferBuy 3 items save 10%; Buy 4 or more save 15%See all productsT&C</h5>                   <h5>Buy More, Save MoreBuy worth â‚¹2000-3999 save â‚¹200; Buy worth â‚¹4000 save â‚¹600See all productsT&C</h5>                   <h5>Bank Offer10% Instant Discount* with Axis Bank Credit and Debit CardsT&C</h5>                  ', 5, '555', 'menwear'),
(15, 'uploads/shoes.jpg', 'SHOES', '<h5>Special PriceGet extra 30% off (price inclusive of discount)T&C</h5>                   <h5>Combo OfferBuy 3 items save 10%; Buy 4 or more save 15%See all productsT&C</h5>                   <h5>Buy More, Save MoreBuy worth â‚¹2000-3999 save â‚¹200; Buy worth â‚¹4000 save â‚¹600See all productsT&C</h5>                   <h5>Bank Offer10% Instant Discount* with Axis Bank Credit and Debit CardsT&C</h5>                  ', 0, '4999', 'menwear'),
(16, 'uploads/shoes2.jpg', 'SHOES', '<h5>Special PriceGet extra 30% off (price inclusive of discount)T&C</h5>                   <h5>Combo OfferBuy 3 items save 10%; Buy 4 or more save 15%See all productsT&C</h5>                   <h5>Buy More, Save MoreBuy worth â‚¹2000-3999 save â‚¹200; Buy worth â‚¹4000 save â‚¹600See all productsT&C</h5>                   <h5>Bank Offer10% Instant Discount* with Axis Bank Credit and Debit CardsT&C</h5>                  ', 0, '555', 'menwear'),
(17, 'uploads/saress2.jpeg', 'SARRESS', '<h5>Special PriceGet extra 30% off (price inclusive of discount)T&C</h5>                   <h5>Combo OfferBuy 3 items save 10%; Buy 4 or more save 15%See all productsT&C</h5>                   <h5>Buy More, Save MoreBuy worth â‚¹2000-3999 save â‚¹200; Buy worth â‚¹4000 save â‚¹600See all productsT&C</h5>                   <h5>Bank Offer10% Instant Discount* with Axis Bank Credit and Debit CardsT&C</h5>                  ', 0, '999', 'womenwear'),
(18, 'uploads/sarees.jpg', 'SAREES', '<h5>Special PriceGet extra 30% off (price inclusive of discount)T&C</h5>                   <h5>Combo OfferBuy 3 items save 10%; Buy 4 or more save 15%See all productsT&C</h5>                   <h5>Buy More, Save MoreBuy worth â‚¹2000-3999 save â‚¹200; Buy worth â‚¹4000 save â‚¹600See all productsT&C</h5>                   <h5>Bank Offer10% Instant Discount* with Axis Bank Credit and Debit CardsT&C</h5>                  ', 0, '555', 'womenwear'),
(19, 'uploads/salwar.jpg', 'SUIT', '<h5>Special PriceGet extra 30% off (price inclusive of discount)T&C</h5>                   <h5>Combo OfferBuy 3 items save 10%; Buy 4 or more save 15%See all productsT&C</h5>                   <h5>Buy More, Save MoreBuy worth â‚¹2000-3999 save â‚¹200; Buy worth â‚¹4000 save â‚¹600See all productsT&C</h5>                   <h5>Bank Offer10% Instant Discount* with Axis Bank Credit and Debit CardsT&C</h5>                  ', 0, '1999', 'womenwear'),
(20, 'uploads/salwar2.jpg', 'SUIT', '<h5>Special PriceGet extra 30% off (price inclusive of discount)T&C</h5>                   <h5>Combo OfferBuy 3 items save 10%; Buy 4 or more save 15%See all productsT&C</h5>                   <h5>Buy More, Save MoreBuy worth â‚¹2000-3999 save â‚¹200; Buy worth â‚¹4000 save â‚¹600See all productsT&C</h5>                   <h5>Bank Offer10% Instant Discount* with Axis Bank Credit and Debit CardsT&C</h5>                  ', 0, '555', 'womenwear'),
(21, 'uploads/jeans.jpg', 'JEANS', '<h5>Special PriceGet extra 30% off (price inclusive of discount)T&C</h5>                   <h5>Combo OfferBuy 3 items save 10%; Buy 4 or more save 15%See all productsT&C</h5>                   <h5>Buy More, Save MoreBuy worth â‚¹2000-3999 save â‚¹200; Buy worth â‚¹4000 save â‚¹600See all productsT&C</h5>                   <h5>Bank Offer10% Instant Discount* with Axis Bank Credit and Debit CardsT&C</h5>                  ', 0, '1899', 'womenwear'),
(22, 'uploads/jeans.jpg', 'JEANS', '<h5>Special PriceGet extra 30% off (price inclusive of discount)T&C</h5>                   <h5>Combo OfferBuy 3 items save 10%; Buy 4 or more save 15%See all productsT&C</h5>                   <h5>Buy More, Save MoreBuy worth â‚¹2000-3999 save â‚¹200; Buy worth â‚¹4000 save â‚¹600See all productsT&C</h5>                   <h5>Bank Offer10% Instant Discount* with Axis Bank Credit and Debit CardsT&C</h5>                  ', 0, '555', 'womenwear'),
(23, 'uploads/shoes2.jpg', 'SHOES', '<h5>Special PriceGet extra 30% off (price inclusive of discount)T&C</h5>                   <h5>Combo OfferBuy 3 items save 10%; Buy 4 or more save 15%See all productsT&C</h5>                   <h5>Buy More, Save MoreBuy worth â‚¹2000-3999 save â‚¹200; Buy worth â‚¹4000 save â‚¹600See all productsT&C</h5>                   <h5>Bank Offer10% Instant Discount* with Axis Bank Credit and Debit CardsT&C</h5>                  ', 0, '999', 'womenwear'),
(24, 'uploads/shoes.jpg', 'SHOES', '<h5>Special PriceGet extra 30% off (price inclusive of discount)T&C</h5>                   <h5>Combo OfferBuy 3 items save 10%; Buy 4 or more save 15%See all productsT&C</h5>                   <h5>Buy More, Save MoreBuy worth â‚¹2000-3999 save â‚¹200; Buy worth â‚¹4000 save â‚¹600See all productsT&C</h5>                   <h5>Bank Offer10% Instant Discount* with Axis Bank Credit and Debit CardsT&C</h5>                  ', 0, '555', 'womenwear'),
(25, 'uploads/chair.jpg', 'CHAIR', '<h5>Special PriceGet extra 30% off (price inclusive of discount)T&C</h5>                   <h5>Combo OfferBuy 3 items save 10%; Buy 4 or more save 15%See all productsT&C</h5>                   <h5>Buy More, Save MoreBuy worth â‚¹2000-3999 save â‚¹200; Buy worth â‚¹4000 save â‚¹600See all productsT&C</h5>                   <h5>Bank Offer10% Instant Discount* with Axis Bank Credit and Debit CardsT&C</h5>                  ', 75, '999', 'furniture'),
(26, 'uploads/chair2.jpg', 'CHAIR', '<h5>Special PriceGet extra 30% off (price inclusive of discount)T&C</h5>                   <h5>Combo OfferBuy 3 items save 10%; Buy 4 or more save 15%See all productsT&C</h5>                   <h5>Buy More, Save MoreBuy worth â‚¹2000-3999 save â‚¹200; Buy worth â‚¹4000 save â‚¹600See all productsT&C</h5>                   <h5>Bank Offer10% Instant Discount* with Axis Bank Credit and Debit CardsT&C</h5>                  ', 0, '555', 'furniture'),
(27, 'uploads/table.jpg', 'DIINNER TABLE', 'ddd<h5>Special PriceGet extra 30% off (price inclusive of discount)T&C</h5>                   <h5>Combo OfferBuy 3 items save 10%; Buy 4 or more save 15%See all productsT&C</h5>                   <h5>Buy More, Save MoreBuy worth â‚¹2000-3999 save â‚¹200; Buy worth â‚¹4000 save â‚¹600See all productsT&C</h5>                   <h5>Bank Offer10% Instant Discount* with Axis Bank Credit and Debit CardsT&C</h5>                  ', 0, '5555', 'furniture'),
(28, 'uploads/table2.jpg', 'DIINNER TABLE', '<h5>Special PriceGet extra 30% off (price inclusive of discount)T&C</h5>                   <h5>Combo OfferBuy 3 items save 10%; Buy 4 or more save 15%See all productsT&C</h5>                   <h5>Buy More, Save MoreBuy worth â‚¹2000-3999 save â‚¹200; Buy worth â‚¹4000 save â‚¹600See all productsT&C</h5>                   <h5>Bank Offer10% Instant Discount* with Axis Bank Credit and Debit CardsT&C</h5>                  ', 0, '5999', 'furniture'),
(29, 'uploads/furniture.jpg', 'BAD', 'ddd<h5>Special PriceGet extra 30% off (price inclusive of discount)T&C</h5>                   <h5>Combo OfferBuy 3 items save 10%; Buy 4 or more save 15%See all productsT&C</h5>                   <h5>Buy More, Save MoreBuy worth â‚¹2000-3999 save â‚¹200; Buy worth â‚¹4000 save â‚¹600See all productsT&C</h5>                   <h5>Bank Offer10% Instant Discount* with Axis Bank Credit and Debit CardsT&C</h5>                  ', 0, '29999', 'furniture'),
(30, 'uploads/badroom.jpg', '', '<h5>Special PriceGet extra 30% off (price inclusive of discount)T&C</h5>                   <h5>Combo OfferBuy 3 items save 10%; Buy 4 or more save 15%See all productsT&C</h5>                   <h5>Buy More, Save MoreBuy worth â‚¹2000-3999 save â‚¹200; Buy worth â‚¹4000 save â‚¹600See all productsT&C</h5>                   <h5>Bank Offer10% Instant Discount* with Axis Bank Credit and Debit CardsT&C</h5>                  ', 0, '59999', 'furniture'),
(48, 'uploads/realme-narzo-10-rmx2040-original-imafqectbhfgxutg.jpeg', 'Realme Narzo 10', '4 GB RAM | 128 GB ROM | Expandable Upto 256 GB\r\n16.51 cm (6.5 inch) HD+ Display\r\n48MP + 8MP + 2MP + 2MP | 16MP Front Camera\r\n5000 mAh Lithium-ion Battery\r\nMediaTek Helio G80 (12 nm) Processor', 5, '4999', 'electronics'),
(49, 'uploads/iphone-11-128-d-mwm02hn-a-apple-0-original-imafkg242ugz8hwc.jpeg', 'Apple iPhone 11', '64 GB ROM15.49 cm (6.1 inch) Liquid Retina HD Display12MP + 12MP | 12MP Front CameraA13 Bionic Chip Processor', 5, '64000', 'electronics');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(1) NOT NULL,
  `slider1` varchar(200) NOT NULL,
  `slider2` varchar(200) NOT NULL,
  `slider3` varchar(200) NOT NULL,
  `slider4` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `slider1`, `slider2`, `slider3`, `slider4`) VALUES
(1, 'uploads/ayushman.webp', 'uploads/virat.jpg', 'uploads/4.jpg', 'uploads/3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `profile` varchar(200) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  `contact` bigint(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `adress` text NOT NULL,
  `areapin` int(200) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`profile`, `firstname`, `lastname`, `dob`, `contact`, `email`, `password`, `adress`, `areapin`, `role`) VALUES
('uploads/DdSC_8511 (1).jpg', 'sachin', 'vishwakarma', '1999-05-02', 9009796860, 'a', 'a', 'indore MP', 452016, 'admin'),
('uploads/headphone3.jpg', 'Abhay', 'mourya', '1999-05-02', 8225824260, 'abhay123@gmail.com', '123', 'indore', 452016, 'operator'),
('uploads/signature.jpg', 'dhasrath', 'makwana', '1111-11-11', 85584654654, 'dhasrath123@gmail.com', '123', '123', 453001, 'operator'),
('uploads/Screenshot (52).png', 'gokul ', 'makwana', '1998-10-10', 7999936614, 'gokul123@gmail.com', '123', 'indore', 453001, 'operator'),
('uploads/Screenshot (6).png', 'kanhaiya', 'chandel', '2002-05-11', 1234567891, 'kanhaiya123@gmail.com', '123', 'indore', 453001, 'operator'),
('uploads/1600x1200_FURNITURE_Template_0000s_0012_Nordic-1.jpg', 'sachin', 'vishwakarama', '2020-06-07', 32323233, 'sachinvish07@gmail.com', '123', 'dsd', 12221, 'operator'),
('uploads/IMG_20180518_110540.jpg', 'Sumit', 'Vishwakarma', '2000-04-02', 4554555, 'sumit@gmail.com', '123', 'Udankheri pachor', 3232, 'operator'),
('uploads/ganesh.jpg.jpg', 'vickash', 'choudhry', '5656-06-05', 555555555, 'vickash123@gmail.com', '123', 'indore MP', 555, 'operator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `homemenu`
--
ALTER TABLE `homemenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `pid` (`pid`),
  ADD KEY `pid_2` (`pid`) USING BTREE;

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
