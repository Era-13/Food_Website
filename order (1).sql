-- phpMyAdmin SQL Dump
-- version 2.11.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 24, 2016 at 03:38 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `order`
--

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `Restuarent_name` varchar(80) NOT NULL,
  `Phone_no` varchar(80) NOT NULL,
  `Email` varchar(80) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`Restuarent_name`, `Phone_no`, `Email`) VALUES
('Tarka', '01671-448844', 'https://www.facebook.com/tarkarestaurant/'),
('Tokyo Express', '01776-009911', 'https://www.facebook.com/ILoveTokyoExpress/'),
('Spaghetti Jazz', '01720-656403', 'https://www.facebook.com/Spaghetti-Jazz-107533745970194/'),
('bbq Bangladesh', '01776-117788', 'https://www.facebook.com/bbq.bangladesh/'),
('The Glasshouse Brasserie', '01619-888222', 'https://www.facebook.com/theglasshousebrasseriedhaka/'),
('New Cathay', '01767-803333', 'https://www.facebook.com/New-Cathay-Restaurant-338786129544170/'),
('Mainland China', '02-7912588', 'https://www.facebook.com/pages/Mainland-China/137498169638099'),
('Koreana Korean Restaurant', '01621-212334', 'https://www.facebook.com/bdkoreana/?rf=150387885031661'),
('Atrium', '01712-444422', 'https://www.facebook.com/pages/Atrium-Restaurant/107710332643500'),
('Chilis', '02-9121235', 'https://www.facebook.com/pages/Chilis/213638888647619');

-- --------------------------------------------------------

--
-- Table structure for table `order1`
--

CREATE TABLE IF NOT EXISTS `order1` (
  `Restuarent_name` varchar(80) NOT NULL,
  `Phone_no` varchar(80) NOT NULL,
  `Email` varchar(80) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order1`
--

INSERT INTO `order1` (`Restuarent_name`, `Phone_no`, `Email`) VALUES
('Tarka', '01671-448844', 'https://www.facebook.com/tarkarestaurant/'),
('Tokyo Express', '01776-009911', 'https://www.facebook.com/ILoveTokyoExpress/'),
('Spaghetti Jazz', '01720-656403', 'https://www.facebook.com/Spaghetti-Jazz-107533745970194/'),
('bbq Bangladesh', '01776-117788', 'https://www.facebook.com/bbq.bangladesh/'),
('The Glasshouse Brasserie', '01619-888222', 'https://www.facebook.com/theglasshousebrasseriedhaka/'),
('New Cathay', '01767-803333', 'https://www.facebook.com/New-Cathay-Restaurant-338786129544170/'),
('Mainland China', '02-7912588', 'https://www.facebook.com/pages/Mainland-China/137498169638099'),
('Koreana Korean Restaurant', '01621-212334', 'https://www.facebook.com/bdkoreana/?rf=150387885031661'),
('Atrium', '01712-444422', 'https://www.facebook.com/pages/Atrium-Restaurant/107710332643500'),
('Chilis', '02-9121235', 'https://www.facebook.com/pages/Chilis/213638888647619');
