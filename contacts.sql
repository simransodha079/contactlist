-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2024 at 04:37 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contact_list`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `note` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `number`, `email`, `address`, `note`) VALUES
(2, 'simran', '1', 'simransodha079@gmail.com', 'junagadh', 'good'),
(3, 'shahida', '2', 'user@gmail.com', 'junagadh', 'excellent'),
(5, 'user', '4', 'simransodha079@gmail.com', 'junagadh', 'great'),
(6, 'aruna', '5', 'p@gmail.com', 'jnd', 'best'),
(7, 'simran sodha', '6', 'j@gmail.com', 'jnd', 'amazing'),
(10, 'sadhana mevada', '11', 'a@gmail.com', 'junagadh', 'good'),
(11, 'poonam muchadiya', '11', 'p@gmail.com', 'rajkot', 'good'),
(12, 'jiya', '55', 'j@gmail.com', 'junagadh', 'hello'),
(13, 'riya', '11', 'user@gmail.com', 'rajkot', 'good'),
(16, 'simi', '123', 'user@gmail.com', 'junagadh', 'good'),
(17, 'simran', '11', 'user@gmail.com', 'junagadh', 'hhhh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
