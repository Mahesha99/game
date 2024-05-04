-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2023 at 09:17 AM
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
-- Database: `tomatogamedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `additionleaderboard`
--

CREATE TABLE `additionleaderboard` (
  `email` varchar(2000) NOT NULL,
  `score` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `additionleaderboard`
--

INSERT INTO `additionleaderboard` (`email`, `score`) VALUES
('test1@gmail.com', 50),
('james@email.com', 50),
('David@yahoo.com', 70),
('anne@gmail.com', 50),
('test2@gmail.com', 30),
('test3@gmail.com', 10),
('test4@gmail.com', 20),
('test6@gmail.com', 20),
('test7@gmail.com', 10);

-- --------------------------------------------------------

--
-- Table structure for table `divisionleaderboard`
--

CREATE TABLE `divisionleaderboard` (
  `email` varchar(2000) NOT NULL,
  `score` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `divisionleaderboard`
--

INSERT INTO `divisionleaderboard` (`email`, `score`) VALUES
('test1@gmail.com', 60),
('David@yahoo.com', 30),
('anne@gmail.com', 60);

-- --------------------------------------------------------

--
-- Table structure for table `multiplicationleaderboard`
--

CREATE TABLE `multiplicationleaderboard` (
  `email` varchar(2000) NOT NULL,
  `score` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `multiplicationleaderboard`
--

INSERT INTO `multiplicationleaderboard` (`email`, `score`) VALUES
('test1@gmail.com', 60),
('james@email.com', 40),
('David@yahoo.com', 90),
('anne@gmail.com', 40);

-- --------------------------------------------------------

--
-- Table structure for table `subtractionleaderboard`
--

CREATE TABLE `subtractionleaderboard` (
  `email` varchar(2000) NOT NULL,
  `score` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subtractionleaderboard`
--

INSERT INTO `subtractionleaderboard` (`email`, `score`) VALUES
('test1@gmail.com', 50),
('james@email.com', 50),
('David@yahoo.com', 20),
('anne@gmail.com', 50);

-- --------------------------------------------------------

--
-- Table structure for table `tomatodb`
--

CREATE TABLE `tomatodb` (
  `email` varchar(2000) NOT NULL,
  `score` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tomatodb`
--

INSERT INTO `tomatodb` (`email`, `score`) VALUES
('test1@gmail.com', 30),
('james@email.com', 10),
('David@yahoo.com', 40),
('anne@gmail.com', 20);

-- --------------------------------------------------------

--
-- Table structure for table `usertb`
--

CREATE TABLE `usertb` (
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usertb`
--

INSERT INTO `usertb` (`email`, `password`) VALUES
('anne@gmail.com', 'anne'),
('David@yahoo.com', 'david123'),
('james@email.com', 'james'),
('test1@gmail.com', 'test1'),
('test2@gmail.com', 'test2'),
('test3@gmail.com', 'test3'),
('test4@gmail.com', 'test4'),
('test5@gmail.com', 'test5'),
('test6@gmail.com', 'test6'),
('test7@gmail.com', 'test7'),
('thushan@gmail.com', 'thushan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usertb`
--
ALTER TABLE `usertb`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
