-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 20, 2011 at 05:19 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ss`
--

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE IF NOT EXISTS `classes` (
  `SubjectCode` varchar(100) NOT NULL,
  `Major` varchar(100) NOT NULL,
  `StartTime` time NOT NULL,
  `EndTime` time NOT NULL,
  `Day` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`SubjectCode`, `Major`, `StartTime`, `EndTime`, `Day`) VALUES
('1', 'BABS', '10:00:00', '11:30:00', 'Mon'),
('1', 'BABS', '11:30:00', '13:00:00', 'Mon'),
('1', 'BABS', '13:30:00', '15:00:00', 'Fri'),
('1', 'BABS', '15:30:00', '16:30:00', 'Fri'),
('2', 'BABS', '16:00:00', '17:30:00', 'Mon'),
('2', 'BABS', '13:00:00', '14:00:00', 'Tue'),
('2', 'BABS', '13:30:00', '15:00:00', 'Wed'),
('3', 'BABS', '13:00:00', '14:30:00', 'Mon'),
('3', 'BABS', '10:00:00', '11:00:00', 'Tue'),
('3', 'BABS', '11:30:00', '13:00:00', 'Wed'),
('4', 'BABS', '15:15:00', '18:00:00', 'Wed'),
('5', 'BABS', '11:30:00', '12:30:00', 'Tue'),
('5', 'BABS', '14:30:00', '16:00:00', 'Tue'),
('5', 'BABS', '11:00:00', '12:30:00', 'Fri'),
('6', 'BAIHM', '14:00:00', '15:30:00', 'Wed'),
('6', 'BAIHM', '16:00:00', '17:00:00', 'Wed'),
('6', 'BAIHM', '15:30:00', '17:00:00', 'Thu'),
('7', 'BAIHM', '14:00:00', '15:30:00', 'Tue'),
('7', 'BAIHM', '09:00:00', '10:30:00', 'Thu'),
('7', 'BAIHM', '10:30:00', '11:30:00', 'Thu'),
('8', 'BAIHM', '09:00:00', '10:30:00', 'Tue'),
('8', 'BAIHM', '09:00:00', '10:30:00', 'Fri'),
('8', 'BAIHM', '10:45:00', '11:45:00', 'Fri'),
('9', 'BAIHM', '11:00:00', '12:30:00', 'Tue'),
('9', 'BAIHM', '10:00:00', '11:00:00', 'Wed'),
('9', 'BAIHM', '11:00:00', '12:30:00', 'Wed'),
('10', 'BAIHM', '12:00:00', '13:30:00', 'Thu'),
('10', 'BAIHM', '14:00:00', '15:00:00', 'Thu'),
('10', 'BAIHM', '12:00:00', '13:30:00', 'Fri'),
('11', 'BAJ', '13:30:00', '15:00:00', 'Mon'),
('11', 'BAJ', '11:00:00', '12:30:00', 'Thu'),
('12', 'BAJ', '14:00:00', '15:00:00', 'Wed'),
('13', 'BAJ', '10:00:00', '11:00:00', 'Mon'),
('13', 'BAJ', '12:00:00', '13:30:00', 'Mon'),
('13', 'BAJ', '14:00:00', '15:00:00', 'Thu'),
('14', 'BAJ', '13:00:00', '14:00:00', 'Tue'),
('14', 'BAJ', '13:00:00', '14:00:00', 'Wed'),
('14', 'BAJ', '13:00:00', '14:00:00', 'Thu'),
('15', 'BAJ', '11:00:00', '12:30:00', 'Tue'),
('15', 'BAJ', '09:30:00', '11:00:00', 'Wed'),
('15', 'BAJ', '11:00:00', '12:00:00', 'Wed'),
('15', 'BAJ', '12:00:00', '13:00:00', 'Wed'),
('16', 'BAJ', '09:30:00', '11:00:00', 'Tue'),
('16', 'BAJ', '14:00:00', '15:30:00', 'Tue');

-- --------------------------------------------------------

--
-- Table structure for table `classids`
--

CREATE TABLE IF NOT EXISTS `classids` (
  `SubjectCode` int(50) NOT NULL AUTO_INCREMENT,
  `ClassName` varchar(100) NOT NULL,
  PRIMARY KEY (`SubjectCode`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `classids`
--

INSERT INTO `classids` (`SubjectCode`, `ClassName`) VALUES
(1, 'E Business Development '),
(2, 'Economic Industry Analysis '),
(3, 'Employee Relations '),
(4, 'Enterprise Development Project '),
(5, 'Marketing Strategy '),
(6, 'Accommodation and Facilitites Management'),
(7, 'Hospitality Law '),
(8, 'Human Resource Management '),
(9, 'Management Information Systems & E-Business'),
(10, 'Tourism Studies '),
(11, 'Advanced Photography '),
(12, 'Mentor2 '),
(13, 'News & Mag Production'),
(14, 'Shorthand '),
(15, 'Understanding Narratives '),
(16, 'Writing & Pres Skills 2 ');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
  `SubjectCode` varchar(100) NOT NULL,
  `Major` varchar(100) NOT NULL,
  `StartTime` time NOT NULL,
  `EndTime` time NOT NULL,
  `Day` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--


-- --------------------------------------------------------

--
-- Table structure for table `studentchoices`
--

CREATE TABLE IF NOT EXISTS `studentchoices` (
  `StudentID` int(50) NOT NULL,
  `SubjectCode` int(50) NOT NULL,
  `ClassName` varchar(100) NOT NULL,
  `ChoiceNumber` varchar(50) NOT NULL,
  `isScheduled` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentchoices`
--


-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `StudentID` int(100) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `MiddleName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

