-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2020 at 02:14 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capstone2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `email`, `password`) VALUES
(1, 'Admin', 'Admin', 'admin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(25) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fback` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `fullname`, `contact`, `email`, `fback`) VALUES
(4, 'Jason', '0115623850', 'abc@gmail.com', 'test12345'),
(5, 'david', '0189103635', 'david@gmail.com', 'test12345');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `case` int(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `staff` varchar(50) NOT NULL,
  `food` varchar(50) NOT NULL,
  `onlineb` varchar(50) NOT NULL,
  `comment` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`case`, `username`, `staff`, `food`, `onlineb`, `comment`) VALUES
(1, 'star11', '4', '4', '4', ''),
(2, 'star11', '5', '3', '2', ''),
(3, 'star11', '4', '5', '2', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `reserve_table`
--

CREATE TABLE `reserve_table` (
  `id` int(25) NOT NULL,
  `dates` date NOT NULL,
  `timesw` varchar(255) NOT NULL,
  `table_no` varchar(255) NOT NULL,
  `no_of_people` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reserve_table`
--

INSERT INTO `reserve_table` (`id`, `dates`, `timesw`, `table_no`, `no_of_people`, `name`, `email`, `mobile`) VALUES
(2, '2020-11-26', '16:40', 'Table 3', '4 Person', 'Tan', 'lucas200@gmail.com', '012658920'),
(4, '2020-11-04', '22:30', 'Table 4', '4 Person', 'Justin', 'justin@hmail.com', '0112352089'),
(7, '2020-11-26', '23:25', 'Table 11', '9 Person', 'Jack', 'abc@gmail.com', '01125638420');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `reset` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `reset`) VALUES
(8, 'jordan', 'jordan', 'alien@hotmail.com', '47bce5c74f589f4867dbd57e9ca9f808', '47bce5c74f589f4867dbd57e9ca9f808'),
(9, 'test3', 'test3', 'test33@yopmail.com', '9cb45d54b2ccdc1c486e2f3eb87fbe9f', ''),
(10, 'Star', 'star11', 'star@yopmail.com', 'edcdb2ca8d42263459c46fc65bbe98e3', 'edcdb2ca8d42263459c46fc65bbe98e3'),
(11, 'jack', 'jack200', 'jack@yopmail.com', '951f1b5b51e4be5a986073498c8100ad', ''),
(12, 'aa', 'star1a', 'justin@hmail.com', '4124bc0a9335c27f086f24ba207a4912', ''),
(13, 'james', 'james', 'james@hotmail.com', '8c28d777fafd93ae089fa5ad5db20fad', ''),
(14, 'david', 'david', 'david@gmail.com', 'cca1e4cdb678f010dc66458d91780547', 'cca1e4cdb678f010dc66458d91780547'),
(15, 'david12', 'david134', 'david12@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`case`);

--
-- Indexes for table `reserve_table`
--
ALTER TABLE `reserve_table`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `case` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reserve_table`
--
ALTER TABLE `reserve_table`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
