-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2022 at 09:41 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

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
-- Table structure for table `jobpost_bookmark`
--

CREATE TABLE `jobpost_bookmark` (
  `bookmark_id` int(10) NOT NULL,
  `jobpost_id` int(10) NOT NULL,
  `jobseeker_id` int(10) NOT NULL,
  `employer_id` int(10) NOT NULL,
  `job_title` text NOT NULL,
  `company_name` text NOT NULL,
  `job_description` text NOT NULL,
  `date_bookmarked` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobpost_bookmark`
--
ALTER TABLE `jobpost_bookmark`
  ADD PRIMARY KEY (`bookmark_id`),
  ADD KEY `jobseeker_id` (`jobseeker_id`),
  ADD KEY `jobpost_id` (`jobpost_id`),
  ADD KEY `employer_id` (`employer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobpost_bookmark`
--
ALTER TABLE `jobpost_bookmark`
  MODIFY `bookmark_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jobpost_bookmark`
--
ALTER TABLE `jobpost_bookmark`
  ADD CONSTRAINT `employer_id` FOREIGN KEY (`employer_id`) REFERENCES `employer` (`employer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jobpost_id` FOREIGN KEY (`jobpost_id`) REFERENCES `jobpost` (`post_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jobseeker_id` FOREIGN KEY (`jobseeker_id`) REFERENCES `jobseeker` (`jobseeker_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
