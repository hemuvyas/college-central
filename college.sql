-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 20, 2020 at 04:38 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college`
--

-- --------------------------------------------------------

--
-- Table structure for table `AC_3C_CS`
--

CREATE TABLE `AC_3C_CS` (
  `sub_name` varchar(30) NOT NULL,
  `sub_code` varchar(6) NOT NULL,
  `faculty` varchar(20) NOT NULL,
  `Lec_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `AC_3C_CS`
--

INSERT INTO `AC_3C_CS` (`sub_name`, `sub_code`, `faculty`, `Lec_type`) VALUES
('Computer Networks', '6CS1', 'Sumit Mathur', 'Theory'),
('DAA', '6CS2', 'Vikram Khandelwal', 'Theory'),
('TOC', '6CS3', 'Attrakesh Pandey', 'Theory'),
('CGMT', '6CS4', 'Ashu Sharma', 'Theory'),
('ESD', '6CS5', 'Chandan Kr. Dubey', 'Theory'),
('AI', '6CS6.2', 'Manish Mathuria', 'Theory'),
('Java Lab', '6CS7', 'Attrakesh Pandey', 'Lab'),
('CGMT Lab', '6CS8', 'Ashu Sharma', 'Lab');

-- --------------------------------------------------------

--
-- Table structure for table `AC_4C_CS`
--

CREATE TABLE `AC_4C_CS` (
  `sub_name` varchar(30) NOT NULL,
  `sub_code` varchar(6) NOT NULL,
  `faculty` varchar(20) NOT NULL,
  `Lec_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `AC_4C_CS`
--

INSERT INTO `AC_4C_CS` (`sub_name`, `sub_code`, `faculty`, `Lec_type`) VALUES
('Mobile Computing', '8CS1', 'Vikram Khandelwal', 'Theory'),
('Digital Image Processing', '8CS2', 'Swati Paliwal', 'Theory'),
('Distributed System', '8CS3', 'KK Agarwal', 'Theory'),
('Reaal time Systems', '8CS4.2', 'Atrakesh Pandey', 'Theory'),
('UNSP Lab', '8CS5', 'Mamta Sakpal', 'Lab'),
('FPGA Lab', '8CS6', 'Alka Rani', 'Lab'),
('DIP Lab', '8CS7', 'Sandeep Tulli', 'Lab'),
('Project Lab', '8CSPR', 'Project Guide', 'Lab');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` varchar(40) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `college` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Details`
--

CREATE TABLE `Details` (
  `id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `college` varchar(5) NOT NULL,
  `year` int(2) NOT NULL,
  `section` varchar(1) NOT NULL,
  `Contact_no.` bigint(12) NOT NULL,
  `branch` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Details`
--

INSERT INTO `Details` (`id`, `name`, `college`, `year`, `section`, `Contact_no.`, `branch`) VALUES
('pgi16ce017', 'Hemant Vyas', 'pgi', 4, 'C', 8078606747, 'CS'),
('pgi16ce025', 'Mohit Chaudhary', 'pgi', 4, 'C', 9024107900, 'CS'),
('pgi17ce001', 'Abhinav Gaur', 'pgi', 3, 'C', 995258654, 'CS');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `title` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `file` varchar(50) NOT NULL,
  `branch` varchar(3) NOT NULL,
  `section` varchar(1) NOT NULL,
  `year` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`title`, `time`, `file`, `branch`, `section`, `year`) VALUES
('test', '2020-02-24 22:01:05', 'test.doc', 'CS', 'C', 4),
('zhang2017', '2020-02-25 04:41:51', 'zhang2017.pdf', 'CS', 'C', 4);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` varchar(40) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `college` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `password`, `image`, `college`) VALUES
('pgi16ce017', 'Hemant Vyas', '123456', 'hemant.jpg', 'pgi'),
('pgi17ce001', 'Abhinav Gaur', '123456', '', 'pgi');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` varchar(40) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `college` varchar(5) NOT NULL,
  `designation` varchar(30) NOT NULL DEFAULT 'Assistant Professor'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `password`, `image`, `college`, `designation`) VALUES
('piettn1', 'Deepak Moud', '123456', 'deepak_moud.png', 'piet', 'HOD');

-- --------------------------------------------------------

--
-- Table structure for table `TimeTable_4C_CS`
--

CREATE TABLE `TimeTable_4C_CS` (
  `WeekDay` varchar(10) NOT NULL,
  `8_9` varchar(6) NOT NULL,
  `9_10` varchar(6) NOT NULL,
  `10_11` varchar(6) NOT NULL,
  `11:40_12:40` varchar(6) NOT NULL,
  `12:40_1:30` varchar(6) NOT NULL,
  `1:30_2:30` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `TimeTable_4C_CS`
--

INSERT INTO `TimeTable_4C_CS` (`WeekDay`, `8_9`, `9_10`, `10_11`, `11:40_12:40`, `12:40_1:30`, `1:30_2:30`) VALUES
('Friday', '8CSPR', '8CSPR', '8CS4.2', '8CS2', '8CS4.2', '8CS3'),
('Monday', '8CS6', '8CS6', '8CS4.2', '8CSPR', '8CSPR', '8CSPR'),
('Saturday', '', '', '', '', '', ''),
('Thursday', '8CS5', '8CS5', '8CS2', '8CS2', '8CS3', '8CS1'),
('Tuesday', '8CS1', '8CS7', '8CS7', '8CS2', '8CS4.2', '8CS1'),
('Wednesday', '8CS3', '8CS9', '8CS9', '8CSPR', '8CSPR', '8CSPR');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `AC_3C_CS`
--
ALTER TABLE `AC_3C_CS`
  ADD PRIMARY KEY (`sub_code`);

--
-- Indexes for table `AC_4C_CS`
--
ALTER TABLE `AC_4C_CS`
  ADD PRIMARY KEY (`sub_code`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Details`
--
ALTER TABLE `Details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `TimeTable_4C_CS`
--
ALTER TABLE `TimeTable_4C_CS`
  ADD PRIMARY KEY (`WeekDay`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
