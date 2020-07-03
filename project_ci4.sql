-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2020 at 09:56 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_ci4`
--

-- --------------------------------------------------------

--
-- Table structure for table `pizza`
--

CREATE TABLE `pizza` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `price` int(11) NOT NULL,
  `ingredients` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pizza`
--

INSERT INTO `pizza` (`id`, `name`, `price`, `ingredients`) VALUES
(5, 'flower', 3, 'cheese pizza'),
(9, 'Sokphorn Teng', 491, 'Ea earum culpa dolor'),
(15, 'Meredith Gonzales', 834, 'Do et sit nobis asp'),
(18, 'Sierra Brock', 580, 'Autem corrupti expe');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` int(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `roles` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `address`, `roles`) VALUES
(3, 'sokphorn.teng@gmail.com', 0, 'dfghjkl', 1),
(4, 'flower.teng@gmail.com', 0, 'dddddddddddddddd', NULL),
(5, 'xyrum@mailinator.com', 0, 'Sunt rerum ipsa al', 1),
(6, 'xyrum@mailinator.com', 0, 'Sunt rerum ipsa al', 1),
(7, 'refehedax@mailinator.com', 0, 'Consequuntur quibusd', 1),
(8, 'sokphorn.teng@gmail.com', 0, 'dfgh', 1),
(9, 'flower.teng@gmail.com', 0, 'sdfghjkl', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pizza`
--
ALTER TABLE `pizza`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pizza`
--
ALTER TABLE `pizza`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
