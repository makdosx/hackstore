-- phpMyAdmin SQL Dump
-- version 4.0.10deb1ubuntu0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 29, 2020 at 06:50 AM
-- Server version: 5.5.62-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hackstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE IF NOT EXISTS `applications` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `_from` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mini_description` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_description` varchar(4096) COLLATE utf8mb4_unicode_ci NOT NULL,
  `compatibility` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `app_img_name` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `app_img_type` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'text/plain',
  `app_img_size` bigint(20) NOT NULL,
  `app_img_data` longblob NOT NULL,
  `app_apk_name` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `app_apk_type` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'text/pain',
  `app_apk_size` bigint(20) NOT NULL,
  `app_apk_data` longblob NOT NULL,
  `paypal_id` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=20 ;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `instant` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(8192) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `devices`
--

CREATE TABLE IF NOT EXISTS `devices` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `device_name` varchar(12) NOT NULL,
  `device_category` varchar(16) NOT NULL,
  `imei1` varchar(32) NOT NULL,
  `imei2` varchar(32) NOT NULL,
  `email` varchar(64) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `imei1` (`imei1`),
  UNIQUE KEY `imei2` (`imei2`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `devices_details`
--

CREATE TABLE IF NOT EXISTS `devices_details` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `device_name` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `device_title` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `device_mini_description` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `device_full_description` varchar(8192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `device_category` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `device_paypal_id` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `instant` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `email` varchar(64) NOT NULL,
  `device_name` varchar(12) NOT NULL,
  `device_category` varchar(16) NOT NULL,
  `imei1` varchar(32) NOT NULL,
  `imei2` varchar(32) NOT NULL,
  `password` varchar(512) NOT NULL,
  `verification_code` varchar(5) NOT NULL,
  `verified` varchar(4) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `imei1` (`imei1`),
  UNIQUE KEY `email` (`email`),
  KEY `imei2` (`imei2`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

-- --------------------------------------------------------

--
-- Table structure for table `login_error_attempts`
--

CREATE TABLE IF NOT EXISTS `login_error_attempts` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `instant` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ip_addr` varchar(16) NOT NULL,
  `browser` varchar(128) NOT NULL,
  `email` varchar(64) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

-- --------------------------------------------------------

--
-- Table structure for table `users_activities`
--

CREATE TABLE IF NOT EXISTS `users_activities` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(64) NOT NULL,
  `ip_addr` varchar(16) NOT NULL,
  `browser` varchar(128) NOT NULL,
  `log_in_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fingerprint` varchar(32) NOT NULL,
  `cookies` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
