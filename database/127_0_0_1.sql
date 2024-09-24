-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2022 at 07:41 PM
-- Server version: 5.6.17-log
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ccetcart`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart_info`
--

CREATE TABLE IF NOT EXISTS `cart_info` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `item_quantity` int(11) NOT NULL,
  `item_rate` float NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `reg_date` date NOT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=95 ;

--
-- Dumping data for table `cart_info`
--

INSERT INTO `cart_info` (`cart_id`, `item_id`, `item_quantity`, `item_rate`, `user_name`, `reg_date`) VALUES
(91, 12, 1, 987.36, 'ankit', '2022-08-11'),
(92, 5, 1, 4619.23, 'ankit', '2022-08-11');

-- --------------------------------------------------------

--
-- Table structure for table `category_info`
--

CREATE TABLE IF NOT EXISTS `category_info` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(30) NOT NULL,
  `cat_dname` varchar(30) NOT NULL,
  `cat_image_path` text NOT NULL,
  `cat_type` varchar(10) NOT NULL,
  `cat_parent_id` int(11) NOT NULL,
  `reg_date` date NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `category_info`
--

INSERT INTO `category_info` (`cat_id`, `cat_name`, `cat_dname`, `cat_image_path`, `cat_type`, `cat_parent_id`, `reg_date`) VALUES
(8, 'Electronics', 'Electronics', 'electronics.jpg', 'Primary', 0, '2022-08-11'),
(9, 'Furniture', 'Furniture', 'furniture.jpg', 'Primary', 0, '2022-08-11'),
(10, 'Clothes', 'Clothes', 'clothes.jpg', 'Primary', 0, '2022-08-11'),
(11, 'clothesMens', 'Men', 'clothesMen.jpg', 'Secondary', 10, '2022-08-11'),
(12, 'clothesWomen', 'Women', 'clothesWomen.jpg', 'Secondary', 10, '2022-08-11'),
(13, 'Shoes', 'Shoes', 'shoes.jpg', 'Primary', 0, '2022-08-11'),
(14, 'ShoesWomen', 'Women', 'shoesWomen.jpg', 'Secondary', 13, '2022-08-11'),
(15, 'ShoesMen', 'Men', 'shoesMen.jpg', 'Secondary', 13, '2022-08-11'),
(16, 'mobiles', 'Mobiles', 'mobiles.jpg', 'Secondary', 8, '2022-08-11');

-- --------------------------------------------------------

--
-- Table structure for table `customer_info`
--

CREATE TABLE IF NOT EXISTS `customer_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cust_name` varchar(30) NOT NULL,
  `cust_email` varchar(30) NOT NULL,
  `cust_mobile` varchar(10) NOT NULL,
  `cust_address` text NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_pass` varchar(10) NOT NULL,
  `user_type` varchar(5) NOT NULL,
  `reg_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `customer_info`
--

INSERT INTO `customer_info` (`id`, `cust_name`, `cust_email`, `cust_mobile`, `cust_address`, `user_name`, `user_pass`, `user_type`, `reg_date`) VALUES
(1, 'sandeep sikdar', 'sikdarsandeep16@gmail.com', '7509976248', 'industrial estate bhilai', 'admin', 'admin12', 'admin', '2022-08-11'),
(2, 'Ram sharma', 'ramsharma@gmail.com', '2435772541', ' Ram Nagar, Delhi.', 'Ram', 'ram123', 'user', '2022-08-11'),
(3, 'Ankit Verma', 'ankitverma@gmail.com', '2342343454', ' Odisha, India.', 'Ankit', 'ankit12', 'user', '2022-08-11'),
(4, 'Salman Khan', 'salmankhan@gmail.com', '3546785432', ' Andheri, Mumbai, India.', 'salman', 'sallu12', 'user', '2022-08-11'),
(5, 'Dipika Padukon', 'dipikap@gmail.com', '7664566435', ' Bombay, India, Earth.', 'dipika', 'dipika12', 'user', '2022-08-11'),
(6, 'Shahrukh Khan', 'shahkhan@gmail.com', '2144654543', ' Mannat, Mumbai, Earth.', 'shahrukh', 'khan12', 'user', '2022-08-11');

-- --------------------------------------------------------

--
-- Table structure for table `item_info`
--

CREATE TABLE IF NOT EXISTS `item_info` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(30) NOT NULL,
  `item_detail` text NOT NULL,
  `image_path` text NOT NULL,
  `parent_category` int(11) NOT NULL,
  `item_rate` float NOT NULL,
  `item_discount` float NOT NULL,
  `reg_date` date NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `item_info`
--

INSERT INTO `item_info` (`item_id`, `item_name`, `item_detail`, `image_path`, `parent_category`, `item_rate`, `item_discount`, `reg_date`) VALUES
(3, 'Nbrand men shoe', 'men casual shoe size-7', 'he1.jpg', 15, 1500, 12, '2022-08-11'),
(4, 'Nike sports shoe', 'mens shoe sports', 'he2.jpg', 15, 1300, 10, '2022-08-11'),
(5, 'Nbrand shoe', 'black casual men shoe', 'he3.jpg', 15, 5999, 23, '2022-08-11'),
(6, 'sportX men shoe', 'white men sports shoe', 'he4.jpg', 15, 7666, 12, '2022-08-11'),
(7, 'women casual ', 'Gray casual women shoe', 'she1.jpg', 14, 12999, 10, '2022-08-11'),
(8, 'Nbrand women shoe', '2inch heel women', 'she2.jpg', 14, 2999, 2, '2022-08-11'),
(9, 'Nbrand high casual ', 'green shoe size-7,8', 'she3.jpg', 14, 12999, 23, '2022-08-11'),
(10, 'sprotsX women', 'sprts women shoe pink', 'she4.jpg', 14, 3889, 7, '2022-08-11'),
(11, 'mens jacket', 'jacket brown leather', 'men1.jpg', 11, 5000, 20, '2022-08-11'),
(12, 'Nbrand Shirt men', 'mens casual shirt', 'men2.jpg', 11, 1122, 12, '2022-08-11'),
(13, 'shirt pant combo', 'one shirt one pant combo', 'men3.jpg', 11, 1293, 10, '2022-08-11'),
(14, 'Nbrand Shirt ', 'blue shirt size-M,S,L', 'men4.jpg', 11, 1112, 15, '2022-08-11'),
(15, 'Dress for girls', 'long beautiful dress', 'wo1.jpg', 12, 12123, 8, '2022-08-11'),
(16, 'Nbrand women', 'casual dress two color', 'wo2.jpg', 12, 1232, 20, '2022-08-11'),
(17, 'jeans girls', 'long girls jeans perfect fit', 'wo3.jpg', 12, 1232, 1, '2022-08-11'),
(18, 'Kurti long', 'long kurti black designer', 'wo4.jpg', 12, 5999, 24, '2022-08-11'),
(19, 'Nbrand chair', 'chair for one green', 'chair.jpg', 9, 9747, 12, '2022-08-11'),
(20, 'Desk table', 'portable foldable desk', 'portable.jpg', 9, 9423, 20, '2022-08-11'),
(21, 'Nbrand sofa', 'white sofa for two', 'sofa.jpg', 9, 9999, 15, '2022-08-11'),
(22, 'sofa blue', 'blue sofa and table', 'table sofa.jpg', 9, 91444, 5, '2022-08-11'),
(23, 'iphone X', 'iphone x dual cam', 'iphone.jpg', 16, 50999, 10, '2022-08-11'),
(24, 'vivo T1', 'vivo dual cam 44w', 'vivo.jpg', 16, 30000, 12, '2022-08-11'),
(26, 'samsung m53', '5G samsung latest', 'samsung.jpg', 16, 16000, 5, '2022-08-11'),
(27, 'nokia dual cam', 'fingure print senser ', 'nokia.jpg', 16, 12000, 5, '2022-08-11'),
(28, 'samsung fridge', 'dual door re-fridgerator', 'fridge.jpg', 8, 20000, 12, '2022-08-11');

-- --------------------------------------------------------

--
-- Table structure for table `message_info`
--

CREATE TABLE IF NOT EXISTS `message_info` (
  `msg_id` int(11) NOT NULL AUTO_INCREMENT,
  `msg_heading` text NOT NULL,
  `msg_detail` text NOT NULL,
  `sender_name` varchar(30) NOT NULL,
  `receiver_name` varchar(30) NOT NULL,
  `sent_date` datetime NOT NULL,
  PRIMARY KEY (`msg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `message_info`
--

INSERT INTO `message_info` (`msg_id`, `msg_heading`, `msg_detail`, `sender_name`, `receiver_name`, `sent_date`) VALUES
(4, 'about clothe material.', 'your clothes material are not good,\r\nwe can clearly see deformation of \r\nfabric.\r\nplease do something...', 'ram', 'admin', '2022-08-11 21:43:30');

-- --------------------------------------------------------

--
-- Table structure for table `news_info`
--

CREATE TABLE IF NOT EXISTS `news_info` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `news_heading` text NOT NULL,
  `news_detail` text NOT NULL,
  `reg_date` date NOT NULL,
  `del_status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `news_info`
--

INSERT INTO `news_info` (`news_id`, `news_heading`, `news_detail`, `reg_date`, `del_status`) VALUES
(2, 'upcoming Offers', 'Offer for you on the occasion of Janmashtami, 15th August\r\nupto 30% off.', '2022-08-11', 0);

-- --------------------------------------------------------

--
-- Table structure for table `offer_info`
--

CREATE TABLE IF NOT EXISTS `offer_info` (
  `offer_id` int(11) NOT NULL AUTO_INCREMENT,
  `offer_name` text NOT NULL,
  `offer_start_dt` datetime NOT NULL,
  `offer_end_dt` datetime NOT NULL,
  `cat_type` text NOT NULL,
  `offer_discount` float NOT NULL,
  `reg_date` date NOT NULL,
  PRIMARY KEY (`offer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `offer_info`
--

INSERT INTO `offer_info` (`offer_id`, `offer_name`, `offer_start_dt`, `offer_end_dt`, `cat_type`, `offer_discount`, `reg_date`) VALUES
(1, 'Rakshabandhan Gift', '2022-08-10 00:00:00', '2022-08-12 00:00:00', '12', 10, '2022-08-11'),
(2, 'Independence day offer', '2022-08-15 00:00:00', '2022-08-20 00:00:00', '8-16', 15, '2022-08-11');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE IF NOT EXISTS `order_detail` (
  `order_detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `item_quantity` int(11) NOT NULL,
  `item_rate` float NOT NULL,
  `order_ref_id` int(11) NOT NULL,
  PRIMARY KEY (`order_detail_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`order_detail_id`, `item_id`, `item_quantity`, `item_rate`, `order_ref_id`) VALUES
(4, 14, 1, 945.2, 2),
(5, 22, 1, 86871.8, 3),
(6, 23, 2, 45899.1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `order_master`
--

CREATE TABLE IF NOT EXISTS `order_master` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(30) NOT NULL,
  `order_date` date NOT NULL,
  `total_amount` float NOT NULL,
  `order_status` varchar(20) NOT NULL,
  `last_update_date` date NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `order_master`
--

INSERT INTO `order_master` (`order_id`, `user_name`, `order_date`, `total_amount`, `order_status`, `last_update_date`) VALUES
(2, 'ram', '2022-08-11', 1112, 'Transit', '2022-08-11'),
(3, 'salman', '2022-08-11', 193442, 'Dispatched', '2022-08-11');
--
-- Database: `first`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `sname` varchar(20) DEFAULT NULL,
  `semail` varchar(30) DEFAULT NULL,
  `sphone` varchar(10) DEFAULT NULL,
  `regdate` date DEFAULT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `sname`, `semail`, `sphone`, `regdate`) VALUES
(1, 'ram', 'ram16@gmail.com', '1234567890', '2022-07-24'),
(2, 'shyam', 'shyam16@gmail.com', '0987654321', '2022-07-24');
--
-- Database: `php`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `roll_no` int(10) NOT NULL AUTO_INCREMENT,
  `sname` varchar(20) NOT NULL,
  `course` varchar(10) NOT NULL,
  `fees` float NOT NULL DEFAULT '5000',
  `jdate` date NOT NULL,
  PRIMARY KEY (`roll_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=103 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`roll_no`, `sname`, `course`, `fees`, `jdate`) VALUES
(100, 'ram', 'java', 6000, '2022-07-19'),
(101, 'rahul', 'php', 5000, '2022-07-19'),
(102, 'mohan', 'android', 5000, '2022-07-19');
--
-- Database: `test`
--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
