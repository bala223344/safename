-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 02, 2019 at 04:24 PM
-- Server version: 5.7.23-log
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_safename`
--

-- --------------------------------------------------------

--
-- Table structure for table `sws_address`
--

CREATE TABLE `sws_address` (
  `address_id` int(11) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `address_safename` varchar(150) NOT NULL,
  `address_safename_enabled` varchar(3) DEFAULT NULL,
  `type_id` int(4) DEFAULT NULL,
  `proved_ownership` varchar(3) NOT NULL,
  `address_status` varchar(20) NOT NULL,
  `cms_login_name` varchar(150) NOT NULL,
  `public_profile_show` varchar(3) NOT NULL,
  `searchable_in_profile` varchar(3) NOT NULL,
  `access_code` varchar(50) NOT NULL,
  `address_risk_score` int(3) NOT NULL,
  `address_creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `alias_binded_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `safename_public` varchar(3) NOT NULL,
  `bind_ip_address` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sws_coin_type`
--

CREATE TABLE `sws_coin_type` (
  `id` int(11) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sws_user`
--

CREATE TABLE `sws_user` (
  `id` int(11) NOT NULL,
  `signup_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `profile_prestige_score` int(3) DEFAULT NULL,
  `cms_login_name` varchar(150) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email_address` varchar(200) DEFAULT NULL,
  `email_validated` varchar(3) DEFAULT NULL,
  `public_profile_set` varchar(3) DEFAULT NULL,
  `public_profile_safename` varchar(100) DEFAULT NULL,
  `profile_status` varchar(20) DEFAULT NULL,
  `profile_risk_score` int(3) DEFAULT NULL,
  `public_profile_enabled` varchar(3) DEFAULT NULL,
  `login_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `profile_description` text,
  `avatar` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sws_whitelist`
--

CREATE TABLE `sws_whitelist` (
  `whitelist_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `address` varchar(150) NOT NULL,
  `requested` varchar(150) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `discord` varchar(150) DEFAULT NULL,
  `signup_from_url` varchar(500) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sws_address`
--
ALTER TABLE `sws_address`
  ADD PRIMARY KEY (`address_id`);

--
-- Indexes for table `sws_coin_type`
--
ALTER TABLE `sws_coin_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sws_user`
--
ALTER TABLE `sws_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sws_whitelist`
--
ALTER TABLE `sws_whitelist`
  ADD PRIMARY KEY (`whitelist_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sws_address`
--
ALTER TABLE `sws_address`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sws_coin_type`
--
ALTER TABLE `sws_coin_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sws_user`
--
ALTER TABLE `sws_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
