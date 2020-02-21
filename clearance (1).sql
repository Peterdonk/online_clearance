-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 20, 2020 at 08:42 AM
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

--
-- Dumping data for table `cleared_students`
--

INSERT INTO `cleared_students` (`cleared_id`, `cleared_student_id`, `cleared_agent_id`, `cleared_timestamp`) VALUES
(1, 2, 301321, '2020-02-18 06:33:09'),
(2, 3, 301321, '2020-02-19 07:08:48'),
(4, 4, 301321, '2020-02-19 07:15:25');

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

--
-- Dumping data for table `clearing_agents`
--

INSERT INTO `clearing_agents` (`agent_id`, `agent_secret_id`, `agent_department`, `agent_name`, `agent_contact`, `agent_address`, `agent_role`, `agent_username`, `agent_password`, `agent_timestamp`) VALUES
(6, 301321, 1, 'Peter Donk', '055251333333', 'Kasoa\r\n', 'Liberian', '', '', '2020-02-17 21:09:28'),
(7, 301321, 2, 'Peter Donk', '055251333333', 'Kasoa\r\n', 'Liberian', '', '', '2020-02-17 21:09:28'),
(8, 301321, 5, 'Peter Donk', '055251333333', 'Kasoa\r\n', 'Liberian', '', '', '2020-02-17 21:09:28'),
(9, 138093, 5, 'Siaw Mens', '055251333333', 'Nima', 'Accountant', '', '', '2020-02-18 06:50:50'),
(10, 659977, 3, 'Yumi', '0552513', 'No where', 'Sweeper', '', '', '2020-02-19 07:03:01'),
(11, 659977, 4, 'Yumi', '0552513', 'No where', 'Sweeper', '', '', '2020-02-19 07:03:02'),
(12, 849885, 1, 'Malendex', '0552222112', 'Sapeiman', 'Home Maker', 'office', 'akm326833', '2020-02-19 20:35:56'),
(13, 849885, 2, 'Malendex', '0552222112', 'Sapeiman', 'Home Maker', 'office', 'akm326833', '2020-02-19 20:35:56');

-- --------------------------------------------------------

--
-- Table structure for table `departments_tbl`
--

CREATE TABLE `departments_tbl` (
  `department_id` int(100) NOT NULL,
  `department_name` varchar(50) NOT NULL,
  `department_timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departments_tbl`
--

INSERT INTO `departments_tbl` (`department_id`, `department_name`, `department_timestamp`) VALUES
(1, 'hwell', '2020-02-15 14:39:41'),
(2, 'weew', '2020-02-15 14:40:27'),
(3, 'hello', '2020-02-15 14:43:46'),
(4, 'weewes', '2020-02-15 14:44:22'),
(5, 'Computer Science', '2020-02-15 15:00:21');

-- --------------------------------------------------------

--
-- Table structure for table `programmes_tbl`
--

CREATE TABLE `programmes_tbl` (
  `programmes_id` int(100) NOT NULL,
  `programmes_name` varchar(50) NOT NULL,
  `programmes_timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `programmes_tbl`
--

INSERT INTO `programmes_tbl` (`programmes_id`, `programmes_name`, `programmes_timestamp`) VALUES
(1, 'Hospitalities', '2020-02-16 12:13:01'),
(4, 'Hospitality', '2020-02-19 20:59:17');

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

--
-- Dumping data for table `student_tbl`
--

INSERT INTO `student_tbl` (`student_id`, `student_name`, `student_department`, `student_index`, `student_pass`, `student_contact`, `student_program`, `student_year_registered`, `student_year_completed`, `student_timestamp`) VALUES
(1, 'df', 3, 'r', 'hello', '3', 'f', '3', '2', '2020-02-16 12:47:32'),
(2, 'Micheal Boakyee', 5, '1555B2003', 'dont', '200', '0', 'February 1991', 'December 2021', '2020-02-16 12:54:10'),
(4, 'Ada Lovelace', 5, '04/2014/2019', 'hi', '02000000000', '1', 'February 2020', 'December 2020', '2020-02-18 06:48:55'),
(5, 'Moses', 5, 'B202170036', 'akm950924', 'kASOA', '1', 'February 2020', 'March 2020', '2020-02-19 09:18:41'),
(6, 'Sam Doe', 5, 'B202170038', 'akm301274', 'kASOA', '1', 'February 2020', 'March 2020', '2020-02-19 09:38:31'),
(7, 'Kinky', 5, 'B202170045', 'akm114264', '0552513405', '1', 'February 2020', 'March 2020', '2020-02-19 09:39:09'),
(8, 'Kinkyessss', 5, 'B202170090', 'akm988953', '0552513405', '1', 'February 2020', 'March 2020', '2020-02-19 09:42:43'),
(9, 'Kinkyessss', 5, 'B202170003', 'akm112076', 'hjhjhj', '1', 'February 2020', 'March 2020', '2020-02-19 09:45:19'),
(10, 'Kinkyessss', 5, 'B202170002', 'akm977509', '0552513405', '1', 'February 2020', 'March 2020', '2020-02-19 09:45:36'),
(11, 'Majesty', 5, 'B202170005', 'akm274409', '0273495835', '1', 'February 2020', 'March 2020', '2020-02-19 09:46:12'),
(12, 'Majesty', 5, 'B2021700200', 'akm181851', '0552513405', '1', 'February 2020', 'March 2020', '2020-02-19 09:48:04'),
(13, 'Majesty', 5, 'B2021700201', 'akm550796', '0552513405', '1', 'February 2020', 'March 2020', '2020-02-19 10:12:49'),
(14, 'Majesty', 5, 'B2021700205', 'akm881415', '0552513405', '1', 'February 2020', 'March 2020', '2020-02-19 10:15:14'),
(15, 'Majesty', 5, 'B2021700500', 'akm185334', '0552513405', '1', 'February 2020', 'March 2020', '2020-02-19 10:19:06'),
(16, 'Majesty', 5, 'B2021700506', 'akm114646', '0552513405', '1', 'February 2020', 'March 2020', '2020-02-19 10:32:43'),
(17, 'Majesty', 5, 'B2021700599', 'akm532549', '0552513405', '1', 'February 2020', 'March 2020', '2020-02-19 10:34:49'),
(18, 'Majesty', 5, 'B2021700544', 'akm982227', '0552513405', '1', 'February 2020', 'March 2020', '2020-02-19 10:36:31'),
(19, 'Majesty', 5, 'B2021700533', 'akm500875', '0552513405', '1', 'February 2020', 'March 2020', '2020-02-19 10:37:42'),
(20, 'Majesty', 5, 'B2021700577', 'akm951982', '0552513405', '1', 'February 2020', 'March 2020', '2020-02-19 10:38:47'),
(21, 'Fredrck Nsah', 5, 'NAC/001/2019', 'akm204759', '0273495835', '1', 'February 2020', 'December 2020', '2020-02-19 11:44:57'),
(22, 'Eddy Blay', 4, 'NAC/001/2015', 'akm878798', '0552513405', '1', 'January 2020', 'December 2020', '2020-02-19 11:47:43'),
(23, 'Kim pink', 5, 'NAC/001/2014', 'akm231997', '0552513405', '1', 'January 2020', 'December 2020', '2020-02-19 11:48:44');

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
  MODIFY `cleared_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `clearing_agents`
--
ALTER TABLE `clearing_agents`
  MODIFY `agent_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `departments_tbl`
--
ALTER TABLE `departments_tbl`
  MODIFY `department_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `programmes_tbl`
--
ALTER TABLE `programmes_tbl`
  MODIFY `programmes_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student_tbl`
--
ALTER TABLE `student_tbl`
  MODIFY `student_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users_tbl`
--
ALTER TABLE `users_tbl`
  MODIFY `users_id` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
