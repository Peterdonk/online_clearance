-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 22, 2020 at 07:07 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clearance`
--

-- --------------------------------------------------------

--
-- Table structure for table `cleared_students`
--

CREATE TABLE `cleared_students` (
  `cleared_id` int(100) NOT NULL,
  `cleared_student_id` int(100) NOT NULL,
  `cleared_agent_id` int(100) NOT NULL,
  `cleared_timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `clearing_agents`
--

CREATE TABLE `clearing_agents` (
  `agent_id` int(100) NOT NULL,
  `agent_secret_id` int(50) NOT NULL,
  `agent_department` int(20) NOT NULL,
  `agent_name` varchar(50) NOT NULL,
  `agent_contact` varchar(20) NOT NULL,
  `agent_address` text NOT NULL,
  `agent_role` varchar(100) NOT NULL,
  `agent_username` varchar(100) NOT NULL,
  `agent_password` varchar(100) NOT NULL,
  `agent_timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `departments_tbl`
--

CREATE TABLE `departments_tbl` (
  `department_id` int(100) NOT NULL,
  `department_name` varchar(50) NOT NULL,
  `department_timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `programmes_tbl`
--

CREATE TABLE `programmes_tbl` (
  `programmes_id` int(100) NOT NULL,
  `programmes_name` varchar(50) NOT NULL,
  `programmes_timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_tbl`
--

CREATE TABLE `student_tbl` (
  `student_id` int(100) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `student_department` int(20) NOT NULL,
  `student_index` varchar(50) NOT NULL,
  `student_pass` mediumtext NOT NULL,
  `student_contact` varchar(50) NOT NULL,
  `student_program` varchar(100) NOT NULL,
  `student_year_registered` varchar(50) NOT NULL,
  `student_year_completed` varchar(50) NOT NULL,
  `student_timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users_tbl`
--

CREATE TABLE `users_tbl` (
  `users_id` int(100) NOT NULL,
  `users_username` varchar(50) NOT NULL,
  `users_password` mediumtext NOT NULL,
  `users_timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cleared_students`
--
ALTER TABLE `cleared_students`
  ADD PRIMARY KEY (`cleared_id`);

--
-- Indexes for table `clearing_agents`
--
ALTER TABLE `clearing_agents`
  ADD PRIMARY KEY (`agent_id`);

--
-- Indexes for table `departments_tbl`
--
ALTER TABLE `departments_tbl`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `programmes_tbl`
--
ALTER TABLE `programmes_tbl`
  ADD PRIMARY KEY (`programmes_id`);

--
-- Indexes for table `student_tbl`
--
ALTER TABLE `student_tbl`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `users_tbl`
--
ALTER TABLE `users_tbl`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cleared_students`
--
ALTER TABLE `cleared_students`
  MODIFY `cleared_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clearing_agents`
--
ALTER TABLE `clearing_agents`
  MODIFY `agent_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `departments_tbl`
--
ALTER TABLE `departments_tbl`
  MODIFY `department_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `programmes_tbl`
--
ALTER TABLE `programmes_tbl`
  MODIFY `programmes_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_tbl`
--
ALTER TABLE `student_tbl`
  MODIFY `student_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users_tbl`
--
ALTER TABLE `users_tbl`
  MODIFY `users_id` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
