-- phpMyAdmin SQL Dump
-- version 4.4.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 22, 2015 at 04:35 PM
-- Server version: 5.5.42
-- PHP Version: 5.6.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `hmwk2154`
--

-- --------------------------------------------------------

--
-- Table structure for table `hw8`
--

CREATE TABLE `hw8` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `username` varchar(15) DEFAULT NULL,
  `password` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `probation` varchar(2) DEFAULT NULL,
  `hotornot` varchar(3) DEFAULT NULL,
  `smartornot` varchar(3) DEFAULT NULL,
  `beers` varchar(20) DEFAULT NULL,
  `comments` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hw8`
--
ALTER TABLE `hw8`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hw8`
--
ALTER TABLE `hw8`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
