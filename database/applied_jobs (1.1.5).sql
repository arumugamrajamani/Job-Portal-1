-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2022 at 10:02 AM
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
-- Table structure for table `applied_jobs`
--

CREATE TABLE `applied_jobs` (
  `apply_id` int(11) NOT NULL,
  `post_id` int(50) NOT NULL,
  `employer_id` int(11) NOT NULL,
  `jobseeker_id` int(10) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `resume` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `date_applied` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applied_jobs`
--

INSERT INTO `applied_jobs` (`apply_id`, `post_id`, `employer_id`, `jobseeker_id`, `job_title`, `fullname`, `resume`, `status`, `date_applied`) VALUES
(16, 77, 45, 51, 'dasdsa', 'Sakura Miko', '482e538b75f2079efb9f18e5191b3f96.pdf', 'Pending', '2022-09-12 17:11:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applied_jobs`
--
ALTER TABLE `applied_jobs`
  ADD PRIMARY KEY (`apply_id`),
  ADD KEY `jobseeker_id3` (`jobseeker_id`),
  ADD KEY `employer_id3` (`employer_id`),
  ADD KEY `post_id` (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applied_jobs`
--
ALTER TABLE `applied_jobs`
  MODIFY `apply_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applied_jobs`
--
ALTER TABLE `applied_jobs`
  ADD CONSTRAINT `employer_id3` FOREIGN KEY (`employer_id`) REFERENCES `employer` (`employer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jobseeker_id3` FOREIGN KEY (`jobseeker_id`) REFERENCES `jobseeker` (`jobseeker_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `post_id` FOREIGN KEY (`post_id`) REFERENCES `jobpost` (`post_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
