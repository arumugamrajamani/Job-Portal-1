-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2022 at 10:11 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `employer_bookmark`
--

CREATE TABLE `employer_bookmark` (
  `bookmark_id` int(11) NOT NULL,
  `jobseeker_id` int(11) NOT NULL,
  `employer_id` int(11) NOT NULL,
  `fullname` varchar(80) NOT NULL,
  `resume` varchar(70) NOT NULL,
  `date_applied` datetime NOT NULL,
  `date_bookmarked` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employer_bookmark`
--
ALTER TABLE `employer_bookmark`
  ADD PRIMARY KEY (`bookmark_id`),
  ADD KEY `jobseeker_id2` (`jobseeker_id`),
  ADD KEY `emploer_id2` (`employer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employer_bookmark`
--
ALTER TABLE `employer_bookmark`
  MODIFY `bookmark_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employer_bookmark`
--
ALTER TABLE `employer_bookmark`
  ADD CONSTRAINT `emploer_id2` FOREIGN KEY (`employer_id`) REFERENCES `employer` (`employer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jobseeker_id2` FOREIGN KEY (`jobseeker_id`) REFERENCES `jobseeker` (`jobseeker_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
