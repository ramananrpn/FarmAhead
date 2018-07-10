-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2018 at 09:59 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farmahead`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `ctg_id` text NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`ctg_id`, `category`) VALUES
('ctg01', 'Vegetables'),
('ctg02', 'Fruits'),
('ctg03', 'Flowers'),
('ctg04', 'Coconut'),
('ctg05', 'Keerai'),
('ctg06', 'Coconut water'),
('ctg07', 'Rice'),
('ctg08', 'Sugarcane'),
('ctg09', 'Tumeric');

-- --------------------------------------------------------

--
-- Table structure for table `coconut`
--

CREATE TABLE `coconut` (
  `crop_id` varchar(50) NOT NULL,
  `crop` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `EngName` varchar(50) NOT NULL,
  `img_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coconut`
--

INSERT INTO `coconut` (`crop_id`, `crop`, `EngName`, `img_url`) VALUES
('cc01', 'தேங்காய்', 'coconut', 'stock-images\\tender-coco\\coconut.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `coc_water`
--

CREATE TABLE `coc_water` (
  `crop_id` varchar(50) NOT NULL,
  `crop` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `EngName` varchar(50) NOT NULL,
  `img_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coc_water`
--

INSERT INTO `coc_water` (`crop_id`, `crop`, `EngName`, `img_url`) VALUES
('cw01', 'இளநீர்', 'tender coconut', 'stock-images\\tender-coco\\Coconut-water.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `consumer_signup`
--

CREATE TABLE `consumer_signup` (
  `cons_id` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `cpassword` varchar(10) NOT NULL,
  `city` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consumer_signup`
--

INSERT INTO `consumer_signup` (`cons_id`, `username`, `email`, `phone`, `password`, `cpassword`, `city`) VALUES
('FA-C1', 'Ramanan', 'ramananrpn@gmail.com', 7708928751, '123456', '123456', 'Chennai'),
('FA-C2', 'Sivakumar', 'sivapriya1972@yahoo.co.in', 9600076391, 'Sumathi76', 'Sumathi76', 'Thiruvallur');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feed_id` varchar(10) NOT NULL,
  `feed_name` varchar(40) NOT NULL,
  `feed_phone` varchar(20) NOT NULL,
  `feed_email` varchar(40) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feed_id`, `feed_name`, `feed_phone`, `feed_email`, `message`) VALUES
('FEED-1', 'Ramanan', '7708928751', 'ramananrpn@gmail.com', 'Good Work .  Nice initiative . Keep Going!!'),
('FEED-2', 'Kumar', '8988543213', '', 'Support Farmers . keep going..'),
('FEED-3', 'Raj Kumar', '8976432146', '', 'Nice start Go ahead!!!........');

-- --------------------------------------------------------

--
-- Table structure for table `flower_name`
--

CREATE TABLE `flower_name` (
  `crop_id` varchar(50) NOT NULL,
  `crop` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `EngName` varchar(50) NOT NULL,
  `img_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flower_name`
--

INSERT INTO `flower_name` (`crop_id`, `crop`, `EngName`, `img_url`) VALUES
('fl001', 'செம்பருத்திப்பூ', 'China Rose', 'stock-images\\flower\\chinese_rose.jpg'),
('fl002', 'முல்லைப்பூ', 'Jasmine Flowers', 'stock-images\\flower\\jasmine-flower.jpg'),
('fl003', 'ஜாதிமல்லி ', 'jathimalli', 'stock-images\\flower\\Jathimalli.jpg'),
('fl004', 'அல்லிப்பூ', 'White Lilly', 'stock-images\\flower\\alli.jpg'),
('fl005', 'குண்டு மல்லி', 'gundu malli', 'stock-images\\flower\\gundu.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `fruit_name`
--

CREATE TABLE `fruit_name` (
  `crop_id` varchar(50) NOT NULL,
  `crop` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `EngName` varchar(50) NOT NULL,
  `img_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fruit_name`
--

INSERT INTO `fruit_name` (`crop_id`, `crop`, `EngName`, `img_url`) VALUES
('fr001', 'தர்பூசணி', 'Watermelon', 'stock-images\\fruits\\watermelon.jpg'),
('fr002', ' Hybrid தர்பூசணி (கலப்பினம்)', 'Hybrid Watermelon', 'stock-images\\fruits\\watermelon.jpg'),
('fr003', 'கொய்யா பழம்', 'Guava', 'stock-images\\fruits\\guava.jpg'),
('fr004', 'பலா பழம்', 'Jack-Fruit', 'stock-images\\fruits\\jack.jpg'),
('fr005', 'வாழை பழம்', 'Banana', 'stock-images\\fruits\\banana.jpg'),
('fr006', 'மாதுளம் பழம்', 'Pomegranate', 'stock-images\\fruits\\Pomegrenate.jpg'),
('fr007', 'எழுமிச்சை', 'Lemon', 'stock-images\\fruits\\lemon.jpg'),
('fr008', 'கருப்பு திராட்சை', 'purpleGrapes', 'stock-images\\fruits\\purplegrapes.jpg'),
('fr009', 'பச்சை திராட்சை', 'GreenGrapes', 'stock-images\\fruits\\greengrapes.jpg'),
('fr010', 'பப்பாளி ', 'Papaya', 'stock-images\\fruits\\papaya.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `f_crops_stock`
--

CREATE TABLE `f_crops_stock` (
  `id` bigint(20) NOT NULL,
  `farmer_id` varchar(50) NOT NULL,
  `ctg_id` varchar(10) NOT NULL,
  `category` varchar(50) NOT NULL,
  `crop_id` varchar(50) NOT NULL,
  `crop_name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `yield_qty` int(20) NOT NULL,
  `yield_qty_unit` varchar(30) NOT NULL,
  `exp_price` int(20) NOT NULL,
  `exp_price_unit` varchar(20) NOT NULL,
  `organic` varchar(10) NOT NULL,
  `description` text NOT NULL,
  `img_url` text NOT NULL,
  `eng_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `f_crops_stock`
--

INSERT INTO `f_crops_stock` (`id`, `farmer_id`, `ctg_id`, `category`, `crop_id`, `crop_name`, `yield_qty`, `yield_qty_unit`, `exp_price`, `exp_price_unit`, `organic`, `description`, `img_url`, `eng_name`) VALUES
(1, 'FA-02', 'ctg01', 'Vegetables', 'vg001', 'உருளைக்கிழங்கு', 600, 'Kilogram', 15, 'Kilogram', 'Yes', 'Good Product!!', 'stock-images\\vege\\potato.jpg', 'Potato'),
(2, 'FA-02', 'ctg02', 'Fruits', 'fr003', 'கொய்யா பழம்', 100, 'Ton', 25, 'Kilogram', 'Yes', 'Tasty and juicy crop', 'stock-images\\fruits\\guava.jpg', 'Guava'),
(3, 'FA-02', 'ctg03', 'Flowers', 'fl001', 'செம்பருத்திப்பூ', 200, 'Kilogram', 50, 'Kilogram', 'No', '', 'stock-images\\flower\\chinese_rose.jpg', 'China Rose'),
(4, 'FA-02', 'ctg01', 'Vegetables', 'vg003', 'தக்காளி', 200, 'Kilogram', 20, 'Kilogram', 'No', '', 'stock-images\\vege\\tomato.jpg', 'Tomato'),
(5, 'FA-01', 'ctg01', 'Vegetables', 'vg008', 'வெங்காயம்', 2000, 'Kilogram', 45, 'Kilogram', 'Yes', '', 'stock-images\\vege\\onion.jpg', 'Onion'),
(6, 'FA-01', 'ctg02', 'Fruits', 'fr005', 'வாழை பழம்', 30000, 'Kilogram', 40, 'Kilogram', 'No', '', 'stock-images\\fruits\\banana.jpg', 'Banana'),
(7, 'FA-01', 'ctg01', 'Vegetables', 'vg001', 'உருளைக்கிழங்கு', 4000, 'Kilogram', 35, 'Kilogram', 'Yes', 'Potato(Ooty)', 'stock-images\\vege\\potato.jpg', 'Potato'),
(8, 'FA-01', 'ctg01', 'Vegetables', 'vg002', 'கத்திரிக்காய்', 4000, 'Kilogram', 28, 'Kilogram', 'No', '', 'stock-images\\vege\\brinjal.jpg', 'Brinjal'),
(9, 'FA-06', 'ctg04', 'Coconut', 'cc01', 'தேங்காய்', 100, 'Sack', 3000, 'Sack', 'Yes', '', 'stock-images\\tender-coco\\coconut.jpg', 'coconut'),
(10, 'FA-06', 'ctg05', 'Keerai', 'kr001', 'அகத்திக் கீரை', 100, 'Sack', 200, 'Sack', 'No', '', 'stock-images\\keerai\\agathi.jpg', 'Agathi keerai'),
(11, 'FA-06', 'ctg07', 'Rice', 'r02', 'கோ47', 200, 'Sack', 1000, 'Sack', 'No', '', 'stock-images\\paddy\\CO47.jpg', 'CO-47'),
(12, 'FA-01', 'ctg04', 'Coconut', 'cc01', 'தேங்காய்', 12, 'Sack', 100, 'Ton', 'No', '', 'stock-images\\tender-coco\\coconut.jpg', 'coconut'),
(13, 'FA-01', 'ctg01', 'Vegetables', 'vg009', 'கேரட்', 200, 'Kilogram', 50, 'Kilogram', 'Yes', 'Non toxic ', 'stock-images\\vege\\carrots.jpg', 'Carrot'),
(14, 'FA-02', 'ctg01', 'Vegetables', 'vg001', 'உருளைக்கிழங்கு', 5, 'Ton', 8, 'Kilogram', 'Yes', 'Good Product ,  Healthy crop', 'stock-images\\vege\\potato.jpg', 'Potato'),
(15, 'FA-02', 'ctg01', 'Vegetables', 'vg001', 'உருளைக்கிழங்கு', 1, 'Ton', 10, 'Kilogram', 'No', 'qawsdfrgtfhyguh', 'stock-images\\vege\\potato.jpg', 'Potato');

-- --------------------------------------------------------

--
-- Table structure for table `f_signup`
--

CREATE TABLE `f_signup` (
  `farmer_id` varchar(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(11) NOT NULL,
  `address` varchar(20) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `pin` int(4) NOT NULL,
  `confirm_pin` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `f_signup`
--

INSERT INTO `f_signup` (`farmer_id`, `first_name`, `date_of_birth`, `gender`, `address`, `city`, `state`, `phone`, `pin`, `confirm_pin`) VALUES
('FA-01', 'Bharathi K', '0000-00-00', 'Male ', 'Karigalan veethi,New', 'Coimbatore', 'TamilNadu/à®¤à®®à®¿à®´à¯à®¨à®¾à®Ÿà¯', 7373453452, 1234, 1234),
('FA-02', 'Ramanan', '0000-00-00', 'Male ', '27/4E , Thirumal Nag', 'Erode', 'TamilNadu/à®¤à®®à®¿à®´à¯à®¨à®¾à®Ÿà¯', 7708928751, 1234, 1234),
('FA-03', 'Kuppurasu M', '0000-00-00', 'Male ', '23/7 , Puthu kaadu,\r', 'Ariyalur', 'TamilNadu/à®¤à®®à®¿à®´à¯à®¨à®¾à®Ÿà¯', 8845456233, 1234, 1234),
('FA-04', 'Sathish M', '0000-00-00', 'Male ', '1036,Rayappapuram 3r', 'Chennai', 'TamilNadu/à®¤à®®à®¿à®´à¯à®¨à®¾à®Ÿà¯', 8989453124, 1234, 1234),
('FA-05', 'Palani P', '0000-00-00', 'Male ', '45, Palaya veethi.', 'Salem', 'TamilNadu/à®¤à®®à®¿à®´à¯à®¨à®¾à®Ÿà¯', 9987456632, 1234, 1234),
('FA-06', 'Rajkumar', '0000-00-00', 'Male ', 'Thadagam Road, R S p', 'Coimbatore', 'TamilNadu/à®¤à®®à®¿à®´à¯à®¨à®¾à®Ÿà¯', 9486338185, 1234, 1234);

-- --------------------------------------------------------

--
-- Table structure for table `keerai_name`
--

CREATE TABLE `keerai_name` (
  `crop_id` varchar(50) NOT NULL,
  `crop` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `EngName` varchar(50) NOT NULL,
  `img_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keerai_name`
--

INSERT INTO `keerai_name` (`crop_id`, `crop`, `EngName`, `img_url`) VALUES
('kr001', 'அகத்திக் கீரை', 'Agathi keerai', 'stock-images\\keerai\\agathi.jpg'),
('kr002', 'கொத்தமல்லி', 'Coriander', 'stock-images\\keerai\\coriander.jpg'),
('kr003', 'முருங்கை இலை', 'Murangai Leaves', 'stock-images\\keerai\\murungai.jpg'),
('kr004', 'பசலைக் கீரை', 'Pasalai Keerai', 'stock-images\\keerai\\palak.jpg'),
('kr005', 'பொன்னாங்கண்ணிக் கீரை', 'Ponnanganni Keerai', 'stock-images\\keerai\\ponnanganni.jpg'),
('kr006', 'புதினாக் கீரை', 'Pudina Keerai', 'stock-images\\keerai\\pudina.jpg'),
('kr007', 'தண்டு கீரை', 'Thandu Keerai', 'stock-images\\keerai\\thandu.jpg'),
('kr008', 'கறிவேப்பிலை', 'curry leaves', 'stock-images\\keerai\\curry.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `sno` varchar(100) NOT NULL,
  `order_id` text NOT NULL,
  `cons_id` varchar(50) NOT NULL,
  `farmer_id` varchar(50) NOT NULL,
  `prod_id` varchar(50) NOT NULL,
  `pro_name` varchar(100) NOT NULL,
  `con_qty` int(11) NOT NULL,
  `con_unit` varchar(100) NOT NULL,
  `bill_name` varchar(50) NOT NULL,
  `bill_address` text NOT NULL,
  `bill_city` varchar(50) NOT NULL,
  `bill_state` varchar(50) NOT NULL,
  `bill_pin` int(11) NOT NULL,
  `bill_ph` varchar(11) NOT NULL,
  `price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`sno`, `order_id`, `cons_id`, `farmer_id`, `prod_id`, `pro_name`, `con_qty`, `con_unit`, `bill_name`, `bill_address`, `bill_city`, `bill_state`, `bill_pin`, `bill_ph`, `price`) VALUES
('5a4ec54a16d38', 'FA-5a4ec54a16d2e', 'FA-C1', 'FA-02', '1', 'Potato', 5, 'Kilogram', 'Ramanan', '27/4E , Thirumal Nagar,\r\nGobichettipalayam.', 'Erode', 'TamilNadu', 638452, '+9177089287', '80'),
('5a4f08f995ecd', 'FA-5a4f08f995ec2', 'FA-C1', 'FA-02', '1', 'Potato', 1, 'Kilogram', 'Ramanan', '27/4E , Thirumal Nagar,\r\nGobichettipalayam.', 'Erode', 'TamilNadu', 638452, '+9177089287', '16'),
('5a649704a9b4a', 'FA-5a649704a9b31', 'FA-C1', 'FA-02', '1', 'Potato', 5, 'Kilogram', 'Ramanan', '27/4E , Thirumal Nagar,\r\nGobichettipalayam.', 'Erode', 'TamilNadu', 638452, '7708928751', '80'),
('5b19627265c65', 'FA-5b19627252628', 'FA-C1', 'FA-02', '15', 'Potato', 50, 'Kilogram', 'Ramanan', '27/4E , Thirumal Nagar,\r\nGobichettipalayam.', 'Erode', 'TamilNadu', 638452, '+9177089287', '500');

-- --------------------------------------------------------

--
-- Table structure for table `requestcrop`
--

CREATE TABLE `requestcrop` (
  `req_id` varchar(20) NOT NULL,
  `ctg_id` varchar(20) NOT NULL,
  `category` varchar(40) NOT NULL,
  `req_crop` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requestcrop`
--

INSERT INTO `requestcrop` (`req_id`, `ctg_id`, `category`, `req_crop`) VALUES
('REQ-1', 'ctg02', 'Fruits', 'Custard Apple'),
('REQ-2', 'ctg01', 'Vegetables', 'Beans');

-- --------------------------------------------------------

--
-- Table structure for table `rice`
--

CREATE TABLE `rice` (
  `crop_id` varchar(50) NOT NULL,
  `crop` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `EngName` varchar(50) NOT NULL,
  `img_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rice`
--

INSERT INTO `rice` (`crop_id`, `crop`, `EngName`, `img_url`) VALUES
('r01', 'ஐ ஆர் 64', 'IR-64', 'stock-images\\paddy\\IR-64.jpg'),
('r02', 'கோ47', 'CO-47', 'stock-images\\paddy\\CO47.jpg'),
('r03', 'ஐ ஆர் -20', 'IR-20', 'stock-images\\paddy\\IR20.jpg'),
('r04', 'ஐ ஆர் 36', 'IR-36', 'stock-images\\paddy\\IR_36.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sugarcane`
--

CREATE TABLE `sugarcane` (
  `crop_id` varchar(50) NOT NULL,
  `crop` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `EngName` varchar(50) NOT NULL,
  `img_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sugarcane`
--

INSERT INTO `sugarcane` (`crop_id`, `crop`, `EngName`, `img_url`) VALUES
('s01', 'கரும்பு', 'sugarcan', 'stock-images\\sugarcane\\sugar.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tumeric_name`
--

CREATE TABLE `tumeric_name` (
  `crop_id` varchar(50) NOT NULL,
  `crop` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `EngName` varchar(50) NOT NULL,
  `img_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tumeric_name`
--

INSERT INTO `tumeric_name` (`crop_id`, `crop`, `EngName`, `img_url`) VALUES
('t01', 'கஸ்தூரி மஞ்சள்', 'kusturi yello', 'stock-images\\tumeric\\kusturi.jpg\r\n'),
('t02', 'விரலி மஞ்சள்', 'virali manjal', 'stock-images\\tumeric\\virali.jpg'),
('t03', 'காட்டு மஞ்சள்', 'kattu tumeric', 'stock-images\\tumeric\\kattu.jpg'),
('t04', 'முட்டா மஞ்சள்', 'mutta tumeric', 'stock-images\\tumeric\\mutta.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `vege_name`
--

CREATE TABLE `vege_name` (
  `crop_id` varchar(50) NOT NULL,
  `crop` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `EngName` varchar(50) NOT NULL,
  `img_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vege_name`
--

INSERT INTO `vege_name` (`crop_id`, `crop`, `EngName`, `img_url`) VALUES
('vg001', 'உருளைக்கிழங்கு', 'Potato', 'stock-images\\vege\\potato.jpg'),
('vg002', 'கத்திரிக்காய்', 'Brinjal', 'stock-images\\vege\\brinjal.jpg'),
('vg003', 'தக்காளி', 'Tomato', 'stock-images\\vege\\tomato.jpg'),
('vg004', 'முட்டைக்கோஸ்', 'Cabbage', 'stock-images\\vege\\cabbage.jpg'),
('vg005', 'பீட்ரூட்', 'Beet-Root', 'stock-images\\vege\\beet.jpg'),
('vg006', 'வெண்டைக்காய் ', 'LadysFinger', 'stock-images\\vege\\ladysfinger.jpg'),
('vg007', 'பூசணி', 'Pumpkin', 'stock-images\\vege\\pumpkin.jpg'),
('vg008', 'வெங்காயம்', 'Onion', 'stock-images\\vege\\onion.jpg'),
('vg009', 'கேரட்', 'Carrot', 'stock-images\\vege\\carrots.jpg'),
('vg010', 'முள்ளங்கி', 'Raddish', 'stock-images\\vege\\radish.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ctg_id`(100));

--
-- Indexes for table `coconut`
--
ALTER TABLE `coconut`
  ADD PRIMARY KEY (`crop_id`);

--
-- Indexes for table `coc_water`
--
ALTER TABLE `coc_water`
  ADD PRIMARY KEY (`crop_id`);

--
-- Indexes for table `consumer_signup`
--
ALTER TABLE `consumer_signup`
  ADD PRIMARY KEY (`cons_id`);

--
-- Indexes for table `flower_name`
--
ALTER TABLE `flower_name`
  ADD PRIMARY KEY (`crop_id`);

--
-- Indexes for table `fruit_name`
--
ALTER TABLE `fruit_name`
  ADD PRIMARY KEY (`crop_id`);

--
-- Indexes for table `f_crops_stock`
--
ALTER TABLE `f_crops_stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f_signup`
--
ALTER TABLE `f_signup`
  ADD PRIMARY KEY (`farmer_id`);

--
-- Indexes for table `keerai_name`
--
ALTER TABLE `keerai_name`
  ADD PRIMARY KEY (`crop_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `rice`
--
ALTER TABLE `rice`
  ADD PRIMARY KEY (`crop_id`);

--
-- Indexes for table `sugarcane`
--
ALTER TABLE `sugarcane`
  ADD PRIMARY KEY (`crop_id`);

--
-- Indexes for table `tumeric_name`
--
ALTER TABLE `tumeric_name`
  ADD PRIMARY KEY (`crop_id`);

--
-- Indexes for table `vege_name`
--
ALTER TABLE `vege_name`
  ADD PRIMARY KEY (`crop_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `f_crops_stock`
--
ALTER TABLE `f_crops_stock`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
