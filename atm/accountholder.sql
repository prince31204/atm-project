-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2024 at 10:47 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `accountholder`
--

-- --------------------------------------------------------

--
-- Table structure for table `holder`
--

CREATE TABLE `holder` (
  `roll_id` int(11) NOT NULL,
  `holder_name` varchar(30) NOT NULL,
  `holder_number` int(20) NOT NULL,
  `holder_pin` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `holder`
--

INSERT INTO `holder` (`roll_id`, `holder_name`, `holder_number`, `holder_pin`) VALUES
(11, 'Rohit choudhary', 2147483647, 9090),
(14, 'tanishk singh', 2147483647, 2025),
(15, 'Prince Parmar', 2147483647, 9898);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `holder`
--
ALTER TABLE `holder`
  ADD PRIMARY KEY (`roll_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `holder`
--
ALTER TABLE `holder`
  MODIFY `roll_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
