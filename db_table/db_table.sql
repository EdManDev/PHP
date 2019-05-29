-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2019 at 06:18 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_table`
--

-- --------------------------------------------------------

--
-- Table structure for table `name`
--

CREATE TABLE `name` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `purchases` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `distributor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Dumping data for table `name`
--

INSERT INTO `name` (`id`, `first_name`, `last_name`) VALUES
(1, 'James', 'Paterson'),
(2, 'Al', 'Paterson'),
(3, 'Jean Marc', 'Port-au-Prince'),
(4, 'Ed Manigat', 'Port-au-Prince'),
(5, 'Josue Jean', 'Jeremi');

INSERT INTO `purchases`(`id`, `name`, `distributor`) VALUES
(1, 'chips', 'A deliver'),
(2, 'salsa', 'B deliver'),
(3, 'pickles', 'A deliver'),
(4, 'mustard', 'B deliver'),
(5, 'peas', 'A delivery');
--
-- Indexes for dumped tables
--

--
-- Indexes for table `name`
--
ALTER TABLE `name`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `name`
--
ALTER TABLE `name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

ALTER TABLE `purchases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
