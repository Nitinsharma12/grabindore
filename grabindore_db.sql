-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 03, 2016 at 07:05 PM
-- Server version: 5.5.46
-- PHP Version: 5.3.10-1ubuntu3.21

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `grabindore_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

CREATE TABLE IF NOT EXISTS `coupon` (
  `coupon_id` int(20) NOT NULL AUTO_INCREMENT,
  `coupon_code` varchar(20) NOT NULL,
  `coupon_description` varchar(60) NOT NULL,
  `shop_id` int(20) NOT NULL,
  `photo` varchar(60) NOT NULL,
  PRIMARY KEY (`coupon_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE IF NOT EXISTS `discount` (
  `discount_id` int(20) NOT NULL AUTO_INCREMENT,
  `discount_code` varchar(20) NOT NULL,
  `discount_description` varchar(60) NOT NULL,
  `shop_id` int(20) NOT NULL,
  `photo` varchar(60) NOT NULL,
  PRIMARY KEY (`discount_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE IF NOT EXISTS `shop` (
  `shop_id` int(20) NOT NULL AUTO_INCREMENT,
  `shop_name` varchar(60) NOT NULL,
  `shop_type` varchar(40) NOT NULL,
  `user_id` int(10) NOT NULL,
  `shop_contact_no` int(15) NOT NULL,
  `shop_address` varchar(60) NOT NULL,
  `nearby_location` varchar(40) NOT NULL,
  `shop_photo` varchar(60) NOT NULL,
  PRIMARY KEY (`shop_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `shopkeeper`
--

CREATE TABLE IF NOT EXISTS `shopkeeper` (
  `shopkeeper_id` int(10) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(40) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `user_id` int(10) NOT NULL,
  `mail_id` varchar(40) NOT NULL,
  `personal_contact_no` int(15) NOT NULL,
  `office_contact_no` int(15) NOT NULL,
  `address` varchar(60) NOT NULL,
  `nearby_location` varchar(40) NOT NULL,
  `photo` varchar(60) NOT NULL,
  PRIMARY KEY (`shopkeeper_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `shopkeeper`
--

INSERT INTO `shopkeeper` (`shopkeeper_id`, `first_name`, `last_name`, `user_id`, `mail_id`, `personal_contact_no`, `office_contact_no`, `address`, `nearby_location`, `photo`) VALUES
(1, 'nitin', 'sharma', 1, 'test@test.com', 2147483647, 2147483647, 'test', 'test', ''),
(2, 'Rajat', 'Kapoor', 1, 'test', 78, 78, '546', 'Bhawarkua', ''),
(3, 'test1', 'test2', 2, 'test@test.com', 456, 456, '456', 'Bhawarkua', ''),
(4, 'test3', 'test3', 3, 'test3', 4562, 4556, '74', 'Bhawarkua', ''),
(5, 'poorab', 'poorab', 4, 'poorab', 1235, 1235, '1631', 'Bhawarkua', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `is_admin` enum('0','1') NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `is_admin`) VALUES
(1, 'test', '098f6bcd4621d373cade4e832627b4', '0'),
(2, 'test@test.com', '098f6bcd4621d373cade4e832627b4', '0'),
(3, 'test3', 'test', '0'),
(4, 'poorab', 'test', '0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
