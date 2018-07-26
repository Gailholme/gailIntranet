-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 21, 2016 at 02:54 PM
-- Server version: 5.7.10-log
-- PHP Version: 5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `cid` varchar(8) NOT NULL,
  `title` varchar(256) NOT NULL,
  `dept_name` varchar(256) NOT NULL,
  `credits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`cid`, `title`, `dept_name`, `credits`) VALUES
('101001', 'Physics', 'Science', 3),
('101002', 'Mathematics', 'Science', 3),
('201001', 'Programming', 'Computer Engineering', 2),
('201002', 'Database Systems', 'Computer Engineering', 3),
('301001', 'Software Engineering', 'Computer Engineering', 3),
('301002', 'Computer Graphics', 'Computer Engineering', 3),
('301003', 'Computer Network', 'Computer Engineering', 3);

-- --------------------------------------------------------

--
-- Table structure for table `professor`
--

CREATE TABLE `professor` (
  `pid` varchar(8) NOT NULL,
  `pname` varchar(256) NOT NULL,
  `salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `professor`
--

INSERT INTO `professor` (`pid`, `pname`, `salary`) VALUES
('001', 'Michael', 35000),
('002', 'Simon', 40000),
('003', 'William', 25000),
('004', 'Ken', 40000),
('005', 'Steve', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `cid` varchar(8) NOT NULL,
  `sect_id` varchar(8) NOT NULL,
  `semester` varchar(16) NOT NULL,
  `year` year(4) NOT NULL,
  `building` varchar(256) NOT NULL,
  `room` varchar(16) NOT NULL,
  `timeslot_id` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`cid`, `sect_id`, `semester`, `year`, `building`, `room`, `timeslot_id`) VALUES
('101001', '1', '1', 2015, 'SCI 03', '512', '1'),
('101002', '1', '1', 2015, 'SCI 28', '418', '2'),
('101002', '2', '1', 2015, 'SCI 28', '317', '3'),
('201001', '1', 'Summer', 2015, 'ENG 3', '305', '3'),
('201001', '2', 'Summer', 2015, 'ENG 3', '405', '3'),
('201001', '3', 'Summer', 2015, 'ENG 3', '309', '1'),
('201002', '1', '2', 2015, 'ENG 100', '403', '1'),
('301001', '1', '2', 2015, 'ENG 3', '309', '2'),
('301001', '2', '2', 2015, 'ENG 3', '305', '1');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` varchar(16) NOT NULL,
  `name` varchar(256) NOT NULL,
  `year` int(11) NOT NULL,
  `email` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `name`, `year`, `email`) VALUES
('55748896', 'Tulip', 3, '55748896@student.chula.ac.th'),
('56717931', 'Rose', 2, '56717931@student.chula.ac.th'),
('56756421', 'Orchid', 2, '56756421@student.chula.ac.th'),
('57712358', 'Lotus', 1, '57712358@student.chula.ac.th'),
('57723547', 'Jasmine', 1, '57723547@student.chula.ac.th');

-- --------------------------------------------------------

--
-- Table structure for table `takes`
--

CREATE TABLE `takes` (
  `student_id` varchar(8) NOT NULL,
  `cid` varchar(8) NOT NULL,
  `sect_id` varchar(8) NOT NULL,
  `semester` varchar(16) NOT NULL,
  `year` year(4) NOT NULL,
  `grade` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `takes`
--

INSERT INTO `takes` (`student_id`, `cid`, `sect_id`, `semester`, `year`, `grade`) VALUES
('55748896', '201002', '1', '2', 2015, 'A'),
('56717931', '201001', '3', 'Summer', 2015, 'B'),
('56756421', '201001', '1', 'Summer', 2015, 'A'),
('57712358', '101001', '1', '1', 2015, 'A'),
('57712358', '101002', '2', '1', 2015, 'B'),
('57723547', '101001', '1', '1', 2015, 'A'),
('57723547', '101002', '1', '1', 2015, 'B+');

-- --------------------------------------------------------

--
-- Table structure for table `teaches`
--

CREATE TABLE `teaches` (
  `pid` varchar(8) NOT NULL,
  `cid` varchar(8) NOT NULL,
  `sect_id` varchar(8) NOT NULL,
  `semester` varchar(16) NOT NULL,
  `year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teaches`
--

INSERT INTO `teaches` (`pid`, `cid`, `sect_id`, `semester`, `year`) VALUES
('001', '101001', '1', '1', 2015),
('002', '101002', '1', '1', 2015),
('002', '101002', '2', '1', 2015),
('003', '201001', '1', 'Summer', 2015),
('003', '201001', '2', 'Summer', 2015),
('003', '201001', '3', 'Summer', 2015),
('004', '201002', '1', '2', 2015),
('005', '301001', '1', '2', 2015),
('005', '301001', '2', '2', 2015);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`cid`,`sect_id`,`semester`,`year`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `takes`
--
ALTER TABLE `takes`
  ADD PRIMARY KEY (`student_id`,`cid`,`sect_id`,`semester`,`year`),
  ADD KEY `cid` (`cid`,`sect_id`,`semester`,`year`);

--
-- Indexes for table `teaches`
--
ALTER TABLE `teaches`
  ADD PRIMARY KEY (`pid`,`cid`,`sect_id`,`semester`,`year`),
  ADD KEY `cid` (`cid`,`sect_id`,`semester`,`year`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `section`
--
ALTER TABLE `section`
  ADD CONSTRAINT `section_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `course` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `takes`
--
ALTER TABLE `takes`
  ADD CONSTRAINT `takes_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`),
  ADD CONSTRAINT `takes_ibfk_2` FOREIGN KEY (`cid`,`sect_id`,`semester`,`year`) REFERENCES `section` (`cid`, `sect_id`, `semester`, `year`);

--
-- Constraints for table `teaches`
--
ALTER TABLE `teaches`
  ADD CONSTRAINT `teaches_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `professor` (`pid`),
  ADD CONSTRAINT `teaches_ibfk_2` FOREIGN KEY (`cid`,`sect_id`,`semester`,`year`) REFERENCES `section` (`cid`, `sect_id`, `semester`, `year`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
