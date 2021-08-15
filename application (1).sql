-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2021 at 03:41 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `application`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`, `email`) VALUES
(1, 'thrusha', 'thrusha', 'thrusha@gmail.com'),
(2, 'vilsha', 'vilsha', 'vilsha@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `attendance1`
--

CREATE TABLE `attendance1` (
  `attid` int(11) NOT NULL,
  `sid` int(11) DEFAULT NULL,
  `usn` varchar(10) DEFAULT NULL,
  `sname` varchar(20) DEFAULT NULL,
  `sem` int(11) DEFAULT NULL,
  `branch` varchar(10) DEFAULT NULL,
  `subject` varchar(20) DEFAULT NULL,
  `dat` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `entry` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance1`
--

INSERT INTO `attendance1` (`attid`, `sid`, `usn`, `sname`, `sem`, `branch`, `subject`, `dat`, `time`, `entry`) VALUES
(7, 13, '4su19cs002', 'guffy', 3, 'cse', 'dms', '2021-01-18', '01:28:45', 1),
(8, 3, '4su18cs108', 'vilsha', 5, 'cse', 'unix', '2021-01-18', '03:28:53', 1),
(9, 5, '4su18cs102', 'thrusha', 5, 'cse', 'unix', '2021-01-18', '03:28:53', 0),
(10, 6, '4su18cs095', 'sthuthi', 5, 'cse', 'unix', '2021-01-18', '03:28:53', 1),
(11, 7, '4su18cs077', 'sanji', 5, 'cse', 'unix', '2021-01-18', '03:28:53', 1),
(12, 8, '4su18cs104', 'aaa', 5, 'cse', 'unix', '2021-01-18', '03:28:53', 0),
(13, 18, '4su20cs001', 'riyana', 7, 'cse', '', '2021-01-18', '03:34:50', 0),
(14, 19, '4su20cs002', 'clavan', 7, 'cse', '', '2021-01-18', '03:34:50', 0),
(15, 18, '4su20cs001', 'riyana', 7, 'cse', 'ai', '2021-01-18', '03:35:02', 1),
(16, 19, '4su20cs002', 'clavan', 7, 'cse', 'ai', '2021-01-18', '03:35:02', 0),
(17, 18, '4su20cs001', 'riyana', 7, 'cse', 'ai', '2021-01-18', '03:36:01', 1),
(18, 19, '4su20cs002', 'clavan', 7, 'cse', 'ai', '2021-01-18', '03:36:01', 0),
(19, 3, '4su18cs108', 'vilsha', 5, 'cse', 'dbms', '2021-01-18', '03:44:28', 1),
(20, 5, '4su18cs102', 'thrusha', 5, 'cse', 'dbms', '2021-01-18', '03:44:28', 0),
(21, 6, '4su18cs095', 'sthuthi', 5, 'cse', 'dbms', '2021-01-18', '03:44:28', 0),
(22, 7, '4su18cs077', 'sanji', 5, 'cse', 'dbms', '2021-01-18', '03:44:28', 0),
(23, 8, '4su18cs104', 'aaa', 5, 'cse', 'dbms', '2021-01-18', '03:44:28', 0),
(24, 11, '4su18cs111', 'thaksha', 1, 'cse', 'physics', '2021-01-18', '03:47:22', 1),
(25, 12, 'tsu18cs112', 'thanu', 1, 'cse', 'physics', '2021-01-18', '03:47:22', 0),
(26, 15, '4su20cs001', 'nisha', 1, 'cse', 'physics', '2021-01-18', '03:47:22', 1),
(27, 16, '4su20cs002', 'neola', 1, 'cse', 'physics', '2021-01-18', '03:47:22', 0),
(28, 17, '4su20cs001', 'moksha', 1, 'cse', 'physics', '2021-01-18', '03:47:22', 0),
(29, 11, '4su18cs111', 'thaksha', 1, 'cse', 'physics', '2021-01-18', '05:07:55', 1),
(30, 12, 'tsu18cs112', 'thanu', 1, 'cse', 'physics', '2021-01-18', '05:07:55', 0),
(31, 15, '4su20cs001', 'nisha', 1, 'cse', 'physics', '2021-01-18', '05:07:55', 1),
(32, 16, '4su20cs002', 'neola', 1, 'cse', 'physics', '2021-01-18', '05:07:55', 0),
(33, 17, '4su20cs001', 'moksha', 1, 'cse', 'physics', '2021-01-18', '05:07:55', 0);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `subject` varchar(20) DEFAULT NULL,
  `subcode` varchar(10) NOT NULL,
  `fid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `fid` int(10) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `yoe` int(10) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`fid`, `fname`, `branch`, `yoe`, `phone`, `email`, `password`) VALUES
(1, 'Sharath', 'CSE', 14, 8050236266, 'sharath@gmail.com', 'sharath'),
(2, 'chandrappa', 'cse', 11, 9453267854, 'chan@gmail.com', 'chandrappa'),
(3, 'prithvi', 'cse', 12, 9812347654, 'prithvi@gmail.com', 'prithvi'),
(6, 'pradeep', 'cse', 23, 9876345678, 'pradeep@gmail.com', 'pradeep'),
(7, 'chinthesh', 'CSE', 50, 8745634567, 'chinthesh@gmail.com', 'chinthesh'),
(8, 'Amith', 'CSE', 13, 9987654352, 'amith@gmail.com', 'amith');

-- --------------------------------------------------------

--
-- Table structure for table `sem1`
--

CREATE TABLE `sem1` (
  `sid` int(10) NOT NULL,
  `usn` varchar(20) NOT NULL,
  `sname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sid` int(10) NOT NULL,
  `usn` varchar(10) NOT NULL,
  `sname` varchar(20) NOT NULL,
  `sem` int(10) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `spassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `usn`, `sname`, `sem`, `branch`, `phone`, `email`, `spassword`) VALUES
(3, '4su18cs108', 'vilsha', 5, 'cse', 8050236266, 'vilsha@gmail.com', 'vilsha'),
(5, '4su18cs102', 'thrusha', 5, 'cse', 8073781287, 'thrusha@gmail.com', 'thrusha'),
(6, '4su18cs095', 'sthuthi', 5, 'cse', 8073781287, 'sthuthi@gmail.com', 'sthuthi'),
(7, '4su18cs077', 'sanji', 5, 'cse', 9812347654, 'sanji@gmail.com', 'sanji'),
(8, '4su18cs104', 'aaa', 5, 'cse', 9765456787, 'thrush2a@gmail.com', 'aaaaa'),
(11, '4su18cs111', 'thaksha', 1, 'cse', 7022823998, 'thaksha@gmail.com', 'thaksha'),
(12, 'tsu18cs112', 'thanu', 1, 'cse', 8978675645, 'thanu@gmail.com', 'thanu'),
(13, '4su19cs002', 'guffy', 3, 'cse', 8073781287, 'gufy@gmail.com', 'guffy'),
(15, '4su20cs001', 'nisha', 1, 'cse', 9741821789, 'nisha@gmaul.com', 'nisha'),
(16, '4su20cs002', 'neola', 1, 'cse', 9873451239, 'neola@gmail.com', 'neola'),
(17, '4su20cs001', 'moksha', 1, 'cse', 8877665588, 'moksha@gmail.com', 'moksha'),
(18, '4su20cs001', 'riyana', 7, 'cse', 9902896543, 'riyana@gmail.com', 'riyana'),
(19, '4su20cs002', 'clavan', 7, 'cse', 8965436734, 'clavan@gmail.com', 'clavan'),
(22, '4su18cs009', 'rrr', 5, 'CSE', 9876546789, 'va@gmail.com', 'rrr'),
(23, '4su20is020', 'vian', 7, 'ise', 9906746734, 'vian@gmail.com', 'vian'),
(30, '4su20cs001', 'abhi', 1, 'cse', 8765678908, 'abhi@gmail.com', 'abhi'),
(31, '4su20cs001', 'Vilsha', 1, 'ise', 9902961239, 'vils@gmail.com', 'bbb'),
(32, '4su18cs108', 'vilsha', 5, 'ise', 976545678, 'vilsha@gmail.com', '1111'),
(33, '4su18cs108', 'vilsha', 5, 'ise', 8762324568, 'thrusha@gmail.com', 'eeeeeee'),
(34, '4su18cs881', 'Sanjana', 5, 'ise', 9987654367, 'sharath@gmail.com', 'qqqq'),
(35, '4su20cs777', 'Sanjana', 5, 'cse', 8050236266, 'abhi@gmail.com', 'qw'),
(36, '4su20cs003', 'sujay', 1, 'me', 8899009988, 'sujay@gmail.com', 'sujay'),
(37, '4su20ee001', 'abcd', 1, 'eee', 8987686546, 'abc@gmail.com', 'abcd');

--
-- Triggers `student`
--
DELIMITER $$
CREATE TRIGGER `total` AFTER INSERT ON `student` FOR EACH ROW UPDATE total_students SET total_no_students=total_no_students+1 WHERE branch='new.branch'
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `sub1` varchar(20) NOT NULL,
  `sub2` varchar(20) NOT NULL,
  `sub3` varchar(20) NOT NULL,
  `sub4` varchar(20) NOT NULL,
  `sub5` varchar(20) NOT NULL,
  `sub6` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `total_students`
--

CREATE TABLE `total_students` (
  `total_id` int(10) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `total_no_students` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `total_students`
--

INSERT INTO `total_students` (`total_id`, `branch`, `total_no_students`) VALUES
(1, 'cse', 17);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance1`
--
ALTER TABLE `attendance1`
  ADD PRIMARY KEY (`attid`),
  ADD KEY `sid` (`sid`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`subcode`),
  ADD KEY `fid` (`fid`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `sem1`
--
ALTER TABLE `sem1`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `total_students`
--
ALTER TABLE `total_students`
  ADD PRIMARY KEY (`total_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `attendance1`
--
ALTER TABLE `attendance1`
  MODIFY `attid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `fid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `sem1`
--
ALTER TABLE `sem1`
  MODIFY `sid` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `total_students`
--
ALTER TABLE `total_students`
  MODIFY `total_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance1`
--
ALTER TABLE `attendance1`
  ADD CONSTRAINT `attendance1_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `student` (`sid`) ON DELETE CASCADE;

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`fid`) REFERENCES `faculty` (`fid`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
