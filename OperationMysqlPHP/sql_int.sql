-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Sep 06, 2019 at 12:56 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `car`
--

-- --------------------------------------------------------

--
-- Table structure for table `car_info`
--

CREATE TABLE `car_info` (
  `id` int(30) NOT NULL,
  `engine` varchar(50) NOT NULL,
  `transmission` varchar(50) NOT NULL,
  `door_no` int(30) NOT NULL,
  `age` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `car_info`
--

INSERT INTO `car_info` (`id`, `engine`, `transmission`, `door_no`, `age`) VALUES
(1, 'rotor', 'lineartronic', 4, 3),
(2, 'rotor', 'best buy', 9, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car_info`
--
ALTER TABLE `car_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car_info`
--
ALTER TABLE `car_info`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
