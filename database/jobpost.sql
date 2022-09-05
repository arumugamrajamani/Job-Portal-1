-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2022 at 08:37 AM
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
-- Table structure for table `jobpost`
--

CREATE TABLE `jobpost` (
  `post_id` int(50) NOT NULL,
  `company_name` text NOT NULL,
  `job_title` text NOT NULL,
  `employment_type` text NOT NULL,
  `job_category` text NOT NULL,
  `job_description` text NOT NULL,
  `salary` varchar(255) NOT NULL,
  `employer_email` varchar(255) NOT NULL,
  `primary_skill` text NOT NULL,
  `secondary_skill` text NOT NULL,
  `postedby_uid` int(10) NOT NULL,
  `date_posted` varchar(50) NOT NULL,
  `bookmark` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobpost`
--

INSERT INTO `jobpost` (`post_id`, `company_name`, `job_title`, `employment_type`, `job_category`, `job_description`, `salary`, `employer_email`, `primary_skill`, `secondary_skill`, `postedby_uid`, `date_posted`, `bookmark`) VALUES
(64, 'Polytechnic University of the Philippines', 'TEst freelancer', 'Freelancer', 'comshop', 'dasdasdas', '15000', 'm.a.pandan26@gmail.com', '1', '1', 45, '2022-08-30 13:14:12', ''),
(67, 'Jujutsu High', 'Philippines', 'Full-Time', 'comshop bantay', 'fsagdfgdfgdfgdfgdfgdfgfdgdfg', '60000', 'TPAdmin1@gmail.com', '2', '3', 45, '2022-09-01 16:06:30', ''),
(68, 'Python Testing', 'dasdasdas', 'Freelancer', 'Janitor', 'dasdasdas', '50000', 'jujutsuhigh@gmail.com', '2', '1', 39, '2022-09-01 16:27:54', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobpost`
--
ALTER TABLE `jobpost`
  ADD PRIMARY KEY (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobpost`
--
ALTER TABLE `jobpost`
  MODIFY `post_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
