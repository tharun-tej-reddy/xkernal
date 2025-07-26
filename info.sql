-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2025 at 03:50 PM
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
-- Database: `xkernal`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `sno` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobilenum` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`sno`, `email`, `mobilenum`, `username`, `password`) VALUES
(1, 'tharuntejreddy007@gmail.com', '9346763091', 'tharuntej', '$2y$10$otz3mVHuILA2lK1vHiRaEuxoU0Vy8aQ3WvtKIJs13w4f6qY3O0HCy'),
(2, 'tharuntejreddy007@gmail.com', '983838383', 'thatdd', '$2y$10$tbdptIOWTIoEkvwpZX53o.tniLJ7B0KW/L.sCxa8bWLetc03E1bS.'),
(3, 'tharuntejreddy007@gmail.com', '36743474343438', 'sss', '$2y$10$LU4twAfzcGFwp18X1f6cB.41b2Fj1p3IurkpvfR60ECpmaoZhGEtO'),
(4, 'tharuntejreddy007@gmail.com', '74743878743784', '3323', '$2y$10$ZyqJcZlykgbro27sGdjEOO5A4GDbCIJhMFfazG0KWG09oKh7jiF9.'),
(5, 'yash@gmail.com', '9893383883', 'Yashwanth', '$2y$10$wTSbbSTlkZ7dRTiuUQM7vu8yp6XPJBx/PIhndnhr2DeKfUXVcfu2i');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
