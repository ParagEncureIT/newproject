-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2020 at 03:46 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_register`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_register`
--

CREATE TABLE `tbl_register` (
  `id` int(10) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_register`
--

INSERT INTO `tbl_register` (`id`, `full_name`, `gender`, `email`, `password`, `state`, `city`, `branch`) VALUES
(1, 'Parag khambalkar', 'Female', 'keshavkirloskar12@gmail.com', '321', 'karnataka', 'mumbai', 'science'),
(2, 'Parag khambalkar', 'Female', 'keshavkirloskar12@gmail.com', '321', 'karnataka', 'mumbai', 'science'),
(3, 'Parag khambalkar', 'Female', 'keshavkirloskar12@gmail.com', '321', 'karnataka', 'mumbai', 'science'),
(4, 'Parag khambalkar', 'Female', 'keshavkirloskar12@gmail.com', '321', 'karnataka', 'mumbai', 'science'),
(5, 'Parag khambalkar', 'Female', 'keshavkirloskar12@gmail.com', '321', 'maharashtra', 'mumbai', 'art'),
(6, 'Parag khambalkar', 'Female', 'keshavkirloskar12@gmail.com', '321', 'karnataka', 'mumbai', 'science'),
(7, 'Parag khambalkar', 'Female', 'keshavkirloskar12@gmail.com', '321', 'karnataka', 'mumbai', 'science'),
(8, 'xyz', 'Male', 'keshavkirloskar12@gmail.com', '321', 'maharashtra', 'nagpur', 'art');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_register`
--
ALTER TABLE `tbl_register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_register`
--
ALTER TABLE `tbl_register`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
