-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2025 at 03:14 AM
-- Server version: 10.11.10-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u349494272_nhyiraba`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(12) NOT NULL,
  `fullName` varchar(250) DEFAULT NULL,
  `emailAddress` varchar(250) DEFAULT NULL,
  `subject` varchar(250) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  `ipAddress` varchar(250) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `fullName`, `emailAddress`, `subject`, `message`, `createdAt`, `ipAddress`) VALUES
(7, 'ISAAC', 'isaac.agyekum1979@gmail.com', 'TRAVEL TO SCHENGEN', 'I want to travel to Germany can be if help', '2024-10-14 16:42:37', '2a02:3100:8a9f:4500:1486:697b:f8b5:16b9'),
(8, 'Isaac Goldman', 'donsahisaac@gmail.com', 'Inquiry', 'A friend of mine introduced your service to me and I would like to know if you work on scholarship for students who want to study abroad?', '2024-10-15 16:25:26', '154.161.189.99'),
(9, 'Isaac Goldman', 'donsahisaac@gmail.com', 'Inquiry', 'A friend of mine introduced your service to me and I would like to know if you work on scholarship for students who want to study abroad?', '2024-10-15 16:25:29', '154.161.189.99');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
