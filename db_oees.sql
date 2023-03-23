-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2022 at 08:47 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_oees`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `COURSE_ID` int(11) NOT NULL,
  `COURSE_NAME` varchar(30) NOT NULL DEFAULT '-',
  `COURSE_LEVEL` varchar(50) NOT NULL DEFAULT '1',
  `COURSE_MAJOR` varchar(30) NOT NULL DEFAULT 'None',
  `COURSE_DESC` varchar(255) NOT NULL DEFAULT '-'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`COURSE_ID`, `COURSE_NAME`, `COURSE_LEVEL`, `COURSE_MAJOR`, `COURSE_DESC`) VALUES
(1, '', 'Nurser 1', 'None', ''),
(2, '', 'Nurser 2', 'None', ''),
(6, '-', 'Grade 1', 'None', '-'),
(7, '-', 'Grade 2', 'None', '-'),
(8, '-', 'Grade 3', 'None', '-'),
(9, '-', 'Grade 4', 'None', '-'),
(10, '-', 'Grade 5', 'None', '-'),
(11, '-', 'Grade 6', 'None', '-');

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `GRADE_ID` int(11) NOT NULL,
  `IDNO` int(11) NOT NULL DEFAULT '0',
  `SUBJ_ID` int(11) NOT NULL DEFAULT '0',
  `FIRST` double NOT NULL DEFAULT '0',
  `SECOND` double NOT NULL DEFAULT '0',
  `THIRD` double NOT NULL DEFAULT '0',
  `FOURTH` double NOT NULL DEFAULT '0',
  `AVE` float DEFAULT '0',
  `REMARKS` text NOT NULL,
  `COMMENT` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`GRADE_ID`, `IDNO`, `SUBJ_ID`, `FIRST`, `SECOND`, `THIRD`, `FOURTH`, `AVE`, `REMARKS`, `COMMENT`) VALUES
(1, 1000000214, 1, 75, 75, 75, 75, 75, 'Passed', '-'),
(2, 1000000214, 2, 75, 75, 75, 75, 75, 'Passed', '-'),
(3, 1000000214, 5, 0, 0, 0, 0, 0, '-', '-'),
(4, 1000000214, 8, 75, 75, 75, 75, 75, 'Passed', '-'),
(5, 1000000215, 1, 90, 96, 86, 75, 84.4, 'Passed', '-'),
(6, 1000000215, 2, 0, 0, 0, 0, 0, '-', '-'),
(7, 1000000215, 5, 0, 0, 0, 0, 0, '-', '-'),
(8, 1000000215, 8, 0, 0, 0, 0, 0, '-', '-'),
(9, 1000000216, 1, 75, 75, 75, 75, 75, 'Passed', '-'),
(10, 1000000216, 2, 76, 76, 76, 76, 76, 'Passed', '-'),
(11, 1000000216, 5, 0, 0, 0, 0, 0, '-', '-'),
(12, 1000000216, 8, 0, 0, 0, 0, 0, '-', '-'),
(13, 1000000217, 1, 0, 0, 0, 0, 0, '-', '-'),
(14, 1000000217, 2, 0, 0, 0, 0, 0, '-', '-'),
(15, 1000000217, 5, 0, 0, 0, 0, 0, '-', '-'),
(16, 1000000217, 8, 0, 0, 0, 0, 0, '-', '-'),
(17, 1000000218, 1, 0, 0, 0, 0, 0, '-', '-'),
(18, 1000000218, 2, 0, 0, 0, 0, 0, '-', '-'),
(19, 1000000218, 5, 0, 0, 0, 0, 0, '-', '-'),
(20, 1000000218, 8, 0, 0, 0, 0, 0, '-', '-'),
(21, 1000000219, 7, 77, 78, 79, 80, 78.8, 'Passed', '-'),
(22, 1000000220, 1, 0, 0, 0, 0, 0, '-', '-'),
(23, 1000000220, 2, 0, 0, 0, 0, 0, '-', '-'),
(24, 1000000220, 5, 0, 0, 0, 0, 0, '-', '-'),
(25, 1000000220, 8, 0, 0, 0, 0, 0, '-', '-'),
(26, 1000000221, 1, 0, 0, 0, 0, 0, '-', '-'),
(27, 1000000221, 2, 0, 0, 0, 0, 0, '-', '-'),
(28, 1000000221, 5, 0, 0, 0, 0, 0, '-', '-'),
(29, 1000000221, 8, 0, 0, 0, 0, 0, '-', '-'),
(30, 1000000222, 1, 0, 0, 0, 0, 0, '-', '-'),
(31, 1000000222, 2, 0, 0, 0, 0, 0, '-', '-'),
(32, 1000000222, 8, 0, 0, 0, 0, 0, '-', '-'),
(33, 1000000224, 1, 0, 0, 0, 0, 0, '-', '-'),
(34, 1000000224, 2, 0, 0, 0, 0, 0, '-', '-'),
(35, 1000000224, 8, 0, 0, 0, 0, 0, '-', '-'),
(36, 1000000214, 4, 0, 0, 0, 0, 0, '', ''),
(37, 1000000219, 9, 99, 88, 77, 88, 88, 'Passed', ''),
(38, 1000000219, 11, 99, 99, 99, 99, 99, 'Passed', '');

-- --------------------------------------------------------

--
-- Table structure for table `schoolyr`
--

CREATE TABLE `schoolyr` (
  `SYID` int(11) NOT NULL,
  `AY` varchar(30) NOT NULL DEFAULT '0',
  `COURSE_ID` int(11) NOT NULL DEFAULT '0',
  `IDNO` int(30) NOT NULL DEFAULT '0',
  `CATEGORY` varchar(30) NOT NULL DEFAULT 'ENROLLED',
  `DATE_RESERVED` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `DATE_ENROLLED` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `STATUS` varchar(30) NOT NULL DEFAULT 'New'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schoolyr`
--

INSERT INTO `schoolyr` (`SYID`, `AY`, `COURSE_ID`, `IDNO`, `CATEGORY`, `DATE_RESERVED`, `DATE_ENROLLED`, `STATUS`) VALUES
(1, '2022-2023', 1, 1000000214, 'ENROLLED', '2022-11-21 00:00:00', '2022-11-21 00:00:00', 'New'),
(2, '2022-2023', 1, 1000000215, 'ENROLLED', '2022-11-21 00:00:00', '2022-11-21 00:00:00', 'New'),
(3, '2022-2023', 1, 1000000216, 'ENROLLED', '2022-11-21 00:00:00', '2022-11-21 00:00:00', 'New'),
(4, '2022-2023', 1, 1000000217, 'ENROLLED', '2022-11-21 00:00:00', '2022-11-21 00:00:00', 'New'),
(5, '2022-2023', 1, 1000000218, 'ENROLLED', '2022-11-21 00:00:00', '2022-11-21 00:00:00', 'New'),
(6, '2022-2023', 6, 1000000219, 'ENROLLED', '2022-11-21 00:00:00', '2022-11-21 00:00:00', 'New'),
(7, '2022-2023', 1, 1000000220, 'ENROLLED', '2022-11-22 00:00:00', '2022-11-22 00:00:00', 'New'),
(8, '2022-2023', 1, 1000000221, 'ENROLLED', '2022-11-22 00:00:00', '2022-11-22 00:00:00', 'New'),
(9, '2022-2023', 1, 1000000222, 'ENROLLED', '2022-11-22 00:00:00', '2022-11-22 00:00:00', 'New'),
(10, '2022-2023', 10, 1000000223, 'ENROLLED', '2022-11-23 00:00:00', '2022-11-23 00:00:00', 'New'),
(11, '2022-2023', 1, 1000000224, 'ENROLLED', '2022-11-23 00:00:00', '2022-11-23 00:00:00', 'New'),
(12, '2022-2023', 2, 1000000214, 'ENROLLED', '2022-11-23 00:00:00', '2022-11-23 00:00:00', 'New'),
(13, '2022-2023', 7, 1000000219, 'ENROLLED', '2022-11-23 00:00:00', '2022-11-23 00:00:00', 'New'),
(14, '2022-2023', 8, 1000000219, 'ENROLLED', '2022-11-23 00:00:00', '2022-11-23 00:00:00', 'New');

-- --------------------------------------------------------

--
-- Table structure for table `studentschedule`
--

CREATE TABLE `studentschedule` (
  `CLASS_ID` int(11) NOT NULL,
  `SUBJ_ID` int(11) NOT NULL,
  `schedID` int(11) NOT NULL,
  `AY` varchar(11) NOT NULL,
  `DAY` varchar(20) NOT NULL,
  `C_TIME` varchar(30) NOT NULL,
  `IDNO` int(11) NOT NULL,
  `ROOM` text NOT NULL,
  `CSECTION` varchar(30) NOT NULL DEFAULT 'NONE',
  `COURSE_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studentsubjects`
--

CREATE TABLE `studentsubjects` (
  `STUDSUBJ_ID` int(11) NOT NULL,
  `IDNO` int(11) NOT NULL DEFAULT '0',
  `SUBJ_ID` int(11) NOT NULL DEFAULT '0',
  `LEVEL` int(11) NOT NULL DEFAULT '0',
  `SY` text NOT NULL,
  `ATTEMP` int(11) NOT NULL DEFAULT '0',
  `AVERAGE` double NOT NULL DEFAULT '0',
  `OUTCOME` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentsubjects`
--

INSERT INTO `studentsubjects` (`STUDSUBJ_ID`, `IDNO`, `SUBJ_ID`, `LEVEL`, `SY`, `ATTEMP`, `AVERAGE`, `OUTCOME`) VALUES
(1, 1000000214, 1, 1, '2022-2023', 1, 75, 'Passed'),
(2, 1000000214, 2, 1, '2022-2023', 1, 75, 'Passed'),
(3, 1000000214, 5, 1, '2022-2023', 1, 0, '-'),
(4, 1000000214, 8, 1, '2022-2023', 1, 75, 'Passed'),
(5, 1000000215, 1, 1, '2022-2023', 1, 84.4, 'Passed'),
(6, 1000000215, 2, 1, '2022-2023', 1, 0, '-'),
(7, 1000000215, 5, 1, '2022-2023', 1, 0, '-'),
(8, 1000000215, 8, 1, '2022-2023', 1, 0, '-'),
(9, 1000000216, 1, 1, '2022-2023', 1, 75, 'Passed'),
(10, 1000000216, 2, 1, '2022-2023', 1, 76, 'Passed'),
(11, 1000000216, 5, 1, '2022-2023', 1, 0, '-'),
(12, 1000000216, 8, 1, '2022-2023', 1, 0, '-'),
(13, 1000000217, 1, 1, '2022-2023', 1, 0, '-'),
(14, 1000000217, 2, 1, '2022-2023', 1, 0, '-'),
(15, 1000000217, 5, 1, '2022-2023', 1, 0, '-'),
(16, 1000000217, 8, 1, '2022-2023', 1, 0, '-'),
(17, 1000000218, 1, 1, '2022-2023', 1, 0, '-'),
(18, 1000000218, 2, 1, '2022-2023', 1, 0, '-'),
(19, 1000000218, 5, 1, '2022-2023', 1, 0, '-'),
(20, 1000000218, 8, 1, '2022-2023', 1, 0, '-'),
(21, 1000000219, 7, 1, '2022-2023', 1, 78.8, 'Passed'),
(22, 1000000220, 1, 1, '2022-2023', 1, 0, '-'),
(23, 1000000220, 2, 1, '2022-2023', 1, 0, '-'),
(24, 1000000220, 5, 1, '2022-2023', 1, 0, '-'),
(25, 1000000220, 8, 1, '2022-2023', 1, 0, '-'),
(26, 1000000221, 1, 1, '2022-2023', 1, 0, '-'),
(27, 1000000221, 2, 1, '2022-2023', 1, 0, '-'),
(28, 1000000221, 5, 1, '2022-2023', 1, 0, '-'),
(29, 1000000221, 8, 1, '2022-2023', 1, 0, '-'),
(30, 1000000222, 1, 1, '2022-2023', 1, 0, '-'),
(31, 1000000222, 2, 1, '2022-2023', 1, 0, '-'),
(32, 1000000222, 8, 1, '2022-2023', 1, 0, '-'),
(33, 1000000224, 1, 1, '2022-2023', 1, 0, '-'),
(34, 1000000224, 2, 1, '2022-2023', 1, 0, '-'),
(35, 1000000224, 8, 1, '2022-2023', 1, 0, '-'),
(36, 1000000214, 4, 2, '2022-2023', 1, 0, ''),
(37, 1000000219, 9, 7, '2022-2023', 1, 88, 'Passed'),
(38, 1000000219, 11, 8, '2022-2023', 1, 99, 'Passed');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `SUBJ_ID` int(11) NOT NULL,
  `SUBJ_CODE` varchar(30) NOT NULL DEFAULT '-',
  `SUBJ_DESCRIPTION` varchar(255) NOT NULL DEFAULT '-',
  `UNIT` int(2) NOT NULL DEFAULT '0',
  `COURSE_ID` int(11) NOT NULL DEFAULT '0',
  `AY` varchar(30) NOT NULL DEFAULT '-',
  `PreTaken` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`SUBJ_ID`, `SUBJ_CODE`, `SUBJ_DESCRIPTION`, `UNIT`, `COURSE_ID`, `AY`, `PreTaken`) VALUES
(1, 'English', 'Oral comunication', 3, 1, '', 0),
(2, 'filipino', 'filipno 1', 3, 1, '-', 0),
(4, 'filipino', 'filipno 1', 3, 2, '-', 0),
(6, 'Math', 'Math', 3, 4, '-', 0),
(7, 'Math', 'Mathematics ', 3, 6, '-', 0),
(8, 'math', 'math', 3, 1, '-', 0),
(9, 'English', 'math', 3, 7, '-', 0),
(10, 'MMW (MATH)', 'math in the modern world', 3, 11, '-', 0),
(11, 'English', 'Oral comunication', 3, 8, '-', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblauto`
--

CREATE TABLE `tblauto` (
  `ID` int(11) NOT NULL,
  `autocode` varchar(255) DEFAULT NULL,
  `autoname` varchar(255) DEFAULT NULL,
  `appendchar` varchar(255) DEFAULT NULL,
  `autostart` int(11) DEFAULT '0',
  `autoend` int(11) DEFAULT '0',
  `incrementvalue` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblauto`
--

INSERT INTO `tblauto` (`ID`, `autocode`, `autoname`, `appendchar`, `autostart`, `autoend`, `incrementvalue`) VALUES
(1, 'Asset', 'Asset', 'ASitem', 0, 3, 1),
(2, 'Trans', 'Transaction', 'TrAnS', 1, 5, 1),
(3, 'SIDNO', 'IDNO', '2015', 1000000, 225, 1),
(4, 'EMPLOYEE', 'EMPID', '020010', 0, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblinstructor`
--

CREATE TABLE `tblinstructor` (
  `INST_ID` int(11) NOT NULL,
  `INST_NAME` varchar(90) NOT NULL,
  `INST_MAJOR` varchar(90) NOT NULL,
  `INST_CONTACT` varchar(30) NOT NULL,
  `INST_Username` varchar(90) NOT NULL,
  `INST_Password` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblinstructor`
--

INSERT INTO `tblinstructor` (`INST_ID`, `INST_NAME`, `INST_MAJOR`, `INST_CONTACT`, `INST_Username`, `INST_Password`) VALUES
(1, 'Joker Villanueva', 'Programming', '091873648495', 'j', '5c2dd944dde9e08881bef0894fe7b22a5c9c4b06'),
(31, 'Recardo Piang', 'English', '09264537432', '', ''),
(33, 'Lee Jieun', 'filipino', '123', 'iu', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(35, 'dar', 'math', '123', 'dar', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(36, 'anexa', 'AP', '099999', 'anex', '08a825b19613b1497e43dd8b6e0e4663cf87d226'),
(37, 'Nami Swan', 'Math', '09123456789', 'nami', 'fe5f55995fd81049f5942fecf1dbd40bb862e3cb'),
(38, 'joebert', 'math', '09999819389123', 'jj', '7323a5431d1c31072983a6a5bf23745b655ddf59');

-- --------------------------------------------------------

--
-- Table structure for table `tbllogs`
--

CREATE TABLE `tbllogs` (
  `LOGID` int(11) NOT NULL,
  `USERID` int(11) NOT NULL,
  `LOGDATETIME` datetime NOT NULL,
  `LOGROLE` varchar(55) NOT NULL,
  `LOGMODE` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbllogs`
--

INSERT INTO `tbllogs` (`LOGID`, `USERID`, `LOGDATETIME`, `LOGROLE`, `LOGMODE`) VALUES
(1, 1000000204, '2022-11-19 18:46:13', 'Student', 'Logged out'),
(2, 1000000204, '2022-11-19 18:48:08', 'Student', 'Logged in'),
(3, 1000000204, '2022-11-19 19:12:22', 'Student', 'Logged out'),
(4, 1000000204, '2022-11-19 19:34:15', 'Student', 'Logged in'),
(5, 1000000204, '2022-11-19 19:41:43', 'Student', 'Logged in'),
(6, 1000000204, '2022-11-19 20:05:18', 'Student', 'Logged in'),
(7, 1000000204, '2022-11-19 20:07:41', 'Student', 'Logged out'),
(8, 1, '2022-11-19 20:11:32', 'Administrator', 'Logged in'),
(9, 1000000204, '2022-11-19 20:12:45', 'Student', 'Logged in'),
(10, 1000000204, '2022-11-19 20:29:22', 'Student', 'Logged in'),
(11, 1000000204, '2022-11-19 20:42:27', 'Student', 'Logged out'),
(12, 1000000204, '2022-11-19 20:42:40', 'Student', 'Logged in'),
(13, 1000000204, '2022-11-19 20:54:01', 'Student', 'Logged in'),
(14, 1000000204, '2022-11-19 21:00:58', 'Student', 'Logged in'),
(15, 1000000204, '2022-11-19 21:04:36', 'Student', 'Logged in'),
(16, 1, '2022-11-20 05:21:34', 'Administrator', 'Logged in'),
(17, 1, '2022-11-20 05:46:20', 'Administrator', 'Logged out'),
(18, 1, '2022-11-20 05:51:07', 'Administrator', 'Logged in'),
(19, 1, '2022-11-20 06:23:53', 'Administrator', 'Logged out'),
(20, 1, '2022-11-20 06:24:17', 'Instructor', 'Logged in'),
(21, 1, '2022-11-20 06:24:50', 'Instructor', 'Logged out'),
(22, 1, '2022-11-20 06:24:54', 'Administrator', 'Logged in'),
(23, 1, '2022-11-20 06:36:42', 'Administrator', 'Logged out'),
(24, 1, '2022-11-20 06:36:49', 'Instructor', 'Logged in'),
(25, 1000000205, '2022-11-20 06:48:05', 'Student', 'Logged out'),
(26, 1, '2022-11-20 06:48:49', 'Instructor', 'Logged out'),
(27, 1, '2022-11-20 06:48:54', 'Administrator', 'Logged in'),
(28, 1000000206, '2022-11-20 06:50:14', 'Student', 'Logged out'),
(29, 1000000207, '2022-11-20 07:26:01', 'Student', 'Logged out'),
(30, 1, '2022-11-20 09:15:24', 'Administrator', 'Logged in'),
(31, 1, '2022-11-20 10:15:46', 'Administrator', 'Logged in'),
(32, 1, '2022-11-20 11:01:33', 'Administrator', 'Logged in'),
(33, 1, '2022-11-20 11:21:25', 'Administrator', 'Logged in'),
(34, 1, '2022-11-20 11:29:13', 'Administrator', 'Logged in'),
(35, 1, '2022-11-20 12:45:21', 'Administrator', 'Logged in'),
(36, 1, '2022-11-21 02:24:13', 'Administrator', 'Logged in'),
(37, 1, '2022-11-21 02:24:37', 'Administrator', 'Logged out'),
(38, 1, '2022-11-21 02:24:46', 'Instructor', 'Logged in'),
(39, 1, '2022-11-21 02:28:35', 'Administrator', 'Logged in'),
(40, 1, '2022-11-21 02:34:36', 'Instructor', 'Logged out'),
(41, 1, '2022-11-21 02:34:42', 'Administrator', 'Logged in'),
(42, 1, '2022-11-21 03:01:31', 'Administrator', 'Logged out'),
(43, 1, '2022-11-21 03:01:40', 'Instructor', 'Logged in'),
(44, 1, '2022-11-21 03:10:14', 'Administrator', 'Logged in'),
(45, 1, '2022-11-21 03:20:05', 'Administrator', 'Logged out'),
(46, 1, '2022-11-21 03:20:15', 'Instructor', 'Logged in'),
(47, 1000000212, '2022-11-21 03:21:58', 'Student', 'Logged out'),
(48, 1, '2022-11-21 03:25:19', 'Instructor', 'Logged out'),
(49, 1, '2022-11-21 03:25:43', 'Administrator', 'Logged in'),
(50, 1000000213, '2022-11-21 03:28:09', 'Student', 'Logged out'),
(51, 1000000213, '2022-11-21 03:29:40', 'Student', 'Logged in'),
(52, 1000000206, '2022-11-21 04:22:29', 'Student', 'Logged in'),
(53, 1000000212, '2022-11-21 04:23:07', 'Student', 'Logged in'),
(54, 1, '2022-11-21 04:26:56', 'Administrator', 'Logged out'),
(55, 1, '2022-11-21 04:27:07', 'Administrator', 'Logged in'),
(56, 1, '2022-11-21 04:27:15', 'Instructor', 'Logged in'),
(57, 1, '2022-11-21 04:27:43', 'Administrator', 'Logged in'),
(58, 1, '2022-11-21 04:30:59', 'Instructor', 'Logged out'),
(59, 1, '2022-11-21 04:31:10', 'Administrator', 'Logged in'),
(60, 1, '2022-11-21 04:31:12', 'Administrator', 'Logged in'),
(61, 1, '2022-11-21 04:32:06', 'Instructor', 'Logged in'),
(62, 1, '2022-11-21 04:41:34', 'Administrator', 'Logged in'),
(63, 1, '2022-11-21 04:43:57', 'Administrator', 'Logged in'),
(64, 1, '2022-11-21 04:46:25', 'Administrator', 'Logged in'),
(65, 1000000212, '2022-11-21 04:47:03', 'Student', 'Logged out'),
(66, 1, '2022-11-21 05:05:51', 'Administrator', 'Logged in'),
(67, 1, '2022-11-21 05:19:53', 'Administrator', 'Logged out'),
(68, 1, '2022-11-21 05:20:09', 'Instructor', 'Logged in'),
(69, 1, '2022-11-21 05:21:20', 'Instructor', 'Logged out'),
(70, 1, '2022-11-21 05:24:05', 'Administrator', 'Logged in'),
(71, 1000000212, '2022-11-21 06:53:19', 'Student', 'Logged in'),
(72, 1, '2022-11-21 06:57:37', 'Administrator', 'Logged in'),
(73, 1000000206, '2022-11-21 09:09:52', 'Student', 'Logged in'),
(74, 1000000206, '2022-11-21 09:15:53', 'Student', 'Logged in'),
(75, 1, '2022-11-21 09:23:46', 'Administrator', 'Logged in'),
(76, 1, '2022-11-21 09:32:35', 'Administrator', 'Logged in'),
(77, 1, '2022-11-21 09:33:16', 'Administrator', 'Logged in'),
(78, 1, '2022-11-21 09:45:51', 'Administrator', 'Logged in'),
(79, 1, '2022-11-21 09:48:45', 'Administrator', 'Logged in'),
(80, 1, '2022-11-21 09:50:26', 'Administrator', 'Logged in'),
(81, 1, '2022-11-21 09:56:29', 'Administrator', 'Logged in'),
(82, 1000000212, '2022-11-21 09:57:07', 'Student', 'Logged in'),
(83, 1, '2022-11-21 10:00:47', 'Administrator', 'Logged out'),
(84, 1, '2022-11-21 10:00:59', 'Instructor', 'Logged in'),
(85, 1, '2022-11-21 10:01:40', 'Instructor', 'Logged out'),
(86, 1, '2022-11-21 10:01:48', 'Administrator', 'Logged in'),
(87, 1, '2022-11-21 10:03:46', 'Administrator', 'Logged out'),
(88, 1, '2022-11-21 10:04:39', 'Instructor', 'Logged in'),
(89, 1000000212, '2022-11-21 10:04:54', 'Student', 'Logged out'),
(90, 1, '2022-11-21 10:05:53', 'Instructor', 'Logged out'),
(91, 1, '2022-11-21 10:06:03', 'Administrator', 'Logged in'),
(92, 1000000206, '2022-11-21 10:08:30', 'Student', 'Logged in'),
(93, 1000000212, '2022-11-21 10:08:38', 'Student', 'Logged in'),
(94, 1, '2022-11-21 10:09:57', 'Administrator', 'Logged out'),
(95, 1, '2022-11-21 10:10:05', 'Instructor', 'Logged in'),
(96, 1, '2022-11-21 10:10:52', 'Administrator', 'Logged out'),
(97, 1, '2022-11-21 10:11:13', 'Instructor', 'Logged in'),
(98, 1, '2022-11-21 10:13:51', 'Instructor', 'Logged out'),
(99, 1, '2022-11-21 10:14:00', 'Administrator', 'Logged in'),
(100, 1, '2022-11-21 10:17:55', 'Administrator', 'Logged out'),
(101, 1, '2022-11-21 10:18:36', 'Administrator', 'Logged in'),
(102, 1, '2022-11-21 10:20:20', 'Administrator', 'Logged out'),
(103, 1000000206, '2022-11-21 10:20:31', 'Student', 'Logged out'),
(104, 35, '2022-11-21 10:20:35', 'Instructor', 'Logged in'),
(105, 35, '2022-11-21 10:21:10', 'Instructor', 'Logged out'),
(106, 1, '2022-11-21 10:21:16', 'Administrator', 'Logged in'),
(107, 1, '2022-11-21 10:27:18', 'Administrator', 'Logged out'),
(108, 35, '2022-11-21 10:27:48', 'Instructor', 'Logged in'),
(109, 1, '2022-11-21 10:30:53', 'Instructor', 'Logged out'),
(110, 35, '2022-11-21 10:32:19', 'Instructor', 'Logged out'),
(111, 1, '2022-11-21 10:32:30', 'Administrator', 'Logged in'),
(112, 1, '2022-11-21 10:35:37', 'Instructor', 'Logged in'),
(113, 1000000206, '2022-11-21 10:37:12', 'Student', 'Logged in'),
(114, 1, '2022-11-21 10:52:50', 'Administrator', 'Logged in'),
(115, 1000000215, '2022-11-21 11:11:04', 'Student', 'Logged out'),
(116, 1000000206, '2022-11-21 11:17:22', 'Student', 'Logged out'),
(117, 1, '2022-11-21 11:22:24', 'Administrator', 'Logged in'),
(118, 1, '2022-11-21 11:23:30', 'Administrator', 'Logged out'),
(119, 1, '2022-11-21 11:23:35', 'Instructor', 'Logged in'),
(120, 1, '2022-11-21 11:28:37', 'Administrator', 'Logged in'),
(121, 1, '2022-11-21 11:31:04', 'Instructor', 'Logged out'),
(122, 1, '2022-11-21 11:32:12', 'Administrator', 'Logged out'),
(123, 1, '2022-11-21 11:37:15', 'Administrator', 'Logged out'),
(124, 1, '2022-11-21 11:37:37', 'Instructor', 'Logged in'),
(125, 1, '2022-11-21 11:42:00', 'Instructor', 'Logged out'),
(126, 1, '2022-11-21 11:42:10', 'Instructor', 'Logged in'),
(127, 1000000214, '2022-11-21 11:44:09', 'Student', 'Logged in'),
(128, 1000000216, '2022-11-21 12:24:48', 'Student', 'Logged out'),
(129, 1000000216, '2022-11-21 12:25:45', 'Student', 'Logged in'),
(130, 1, '2022-11-21 12:25:56', 'Administrator', 'Logged in'),
(131, 1, '2022-11-21 12:26:51', 'Administrator', 'Logged out'),
(132, 1, '2022-11-21 12:26:56', 'Instructor', 'Logged in'),
(133, 1, '2022-11-21 12:27:08', 'Instructor', 'Logged out'),
(134, 1, '2022-11-21 12:27:14', 'Administrator', 'Logged in'),
(135, 1, '2022-11-21 12:30:00', 'Administrator', 'Logged out'),
(136, 1, '2022-11-21 12:30:04', 'Instructor', 'Logged in'),
(137, 1, '2022-11-21 12:31:30', 'Instructor', 'Logged out'),
(138, 1, '2022-11-21 12:32:57', 'Administrator', 'Logged in'),
(139, 1, '2022-11-21 12:34:15', 'Administrator', 'Logged out'),
(140, 4, '2022-11-21 12:34:25', 'Registrar', 'Logged in'),
(141, 1, '2022-11-21 12:40:10', 'Administrator', 'Logged in'),
(142, 1, '2022-11-21 12:47:03', 'Administrator', 'Logged out'),
(143, 1, '2022-11-21 12:48:56', 'Administrator', 'Logged in'),
(144, 1, '2022-11-21 12:49:55', 'Administrator', 'Logged out'),
(145, 36, '2022-11-21 12:50:06', 'Instructor', 'Logged in'),
(146, 36, '2022-11-21 12:51:48', 'Instructor', 'Logged out'),
(147, 1000000214, '2022-11-21 12:59:13', 'Student', 'Logged in'),
(148, 1, '2022-11-21 13:13:42', 'Administrator', 'Logged in'),
(149, 1, '2022-11-21 13:16:41', 'Administrator', 'Logged out'),
(150, 1, '2022-11-21 13:16:51', 'Instructor', 'Logged in'),
(151, 1, '2022-11-21 13:31:54', 'Administrator', 'Logged in'),
(152, 1000000214, '2022-11-21 13:37:49', 'Student', 'Logged out'),
(153, 4, '2022-11-21 13:38:21', 'Registrar', 'Logged in'),
(154, 4, '2022-11-21 13:40:55', 'Registrar', 'Logged out'),
(155, 1, '2022-11-21 13:41:06', 'Instructor', 'Logged in'),
(156, 1, '2022-11-21 13:41:36', 'Instructor', 'Logged out'),
(157, 1, '2022-11-21 13:41:43', 'Administrator', 'Logged in'),
(158, 1, '2022-11-21 13:42:19', 'Administrator', 'Logged out'),
(159, 4, '2022-11-21 13:42:27', 'Registrar', 'Logged in'),
(160, 1, '2022-11-21 13:42:48', 'Administrator', 'Logged in'),
(161, 1, '2022-11-21 13:43:06', 'Administrator', 'Logged out'),
(162, 6, '2022-11-21 13:43:09', 'Registrar', 'Logged in'),
(163, 1, '2022-11-21 13:44:35', 'Administrator', 'Logged in'),
(164, 1, '2022-11-21 13:45:02', 'Administrator', 'Logged out'),
(165, 5, '2022-11-21 13:45:16', 'Registrar', 'Logged in'),
(166, 6, '2022-11-21 13:46:36', 'Registrar', 'Logged out'),
(167, 1, '2022-11-21 13:46:42', 'Administrator', 'Logged in'),
(168, 1, '2022-11-21 13:47:11', 'Administrator', 'Logged out'),
(169, 7, '2022-11-21 13:47:14', 'Registrar', 'Logged in'),
(170, 1000000217, '2022-11-21 13:48:01', 'Student', 'Logged out'),
(171, 1, '2022-11-21 13:56:34', 'Administrator', 'Logged in'),
(172, 1, '2022-11-21 14:02:27', 'Administrator', 'Logged out'),
(173, 37, '2022-11-21 14:02:41', 'Instructor', 'Logged in'),
(174, 37, '2022-11-21 14:03:23', 'Instructor', 'Logged out'),
(175, 5, '2022-11-21 14:11:23', 'Registrar', 'Logged out'),
(176, 1000000214, '2022-11-21 15:34:06', 'Student', 'Logged in'),
(177, 1, '2022-11-21 15:34:24', 'Instructor', 'Logged out'),
(178, 1, '2022-11-21 15:36:16', 'Administrator', 'Logged in'),
(179, 1, '2022-11-21 15:52:33', 'Administrator', 'Logged in'),
(180, 1, '2022-11-21 16:15:58', 'Administrator', 'Logged in'),
(181, 1, '2022-11-21 16:29:12', 'Administrator', 'Logged out'),
(182, 37, '2022-11-21 16:29:24', 'Instructor', 'Logged in'),
(183, 37, '2022-11-21 16:30:18', 'Instructor', 'Logged out'),
(184, 7, '2022-11-21 22:07:01', 'Registrar', 'Logged out'),
(185, 1, '2022-11-21 22:07:15', 'Administrator', 'Logged in'),
(186, 1, '2022-11-21 22:17:54', 'Administrator', 'Logged out'),
(187, 1, '2022-11-21 22:18:35', 'Instructor', 'Logged in'),
(188, 1, '2022-11-21 22:19:42', 'Instructor', 'Logged out'),
(189, 7, '2022-11-21 22:19:59', 'Registrar', 'Logged in'),
(190, 1, '2022-11-22 05:28:41', 'Administrator', 'Logged out'),
(191, 1, '2022-11-22 05:29:35', 'Administrator', 'Logged in'),
(192, 1000000220, '2022-11-22 05:39:33', 'Student', 'Logged out'),
(193, 1000000221, '2022-11-22 05:40:55', 'Student', 'Logged out'),
(194, 1, '2022-11-22 10:33:03', 'Administrator', 'Logged in'),
(195, 1, '2022-11-22 10:38:01', 'Administrator', 'Logged in'),
(196, 1, '2022-11-22 11:28:33', 'Administrator', 'Logged out'),
(197, 1, '2022-11-22 13:33:28', 'Administrator', 'Logged in'),
(198, 1000000216, '2022-11-22 13:34:24', 'Student', 'Logged in'),
(199, 1, '2022-11-22 13:40:55', 'Administrator', 'Logged out'),
(200, 4, '2022-11-22 13:41:02', 'Registrar', 'Logged in'),
(201, 1000000216, '2022-11-22 13:43:41', 'Student', 'Logged out'),
(202, 1000000222, '2022-11-22 14:37:44', 'Student', 'Logged out'),
(203, 4, '2022-11-22 14:39:31', 'Registrar', 'Logged out'),
(204, 1, '2022-11-22 14:39:36', 'Administrator', 'Logged in'),
(205, 1, '2022-11-22 15:01:13', 'Administrator', 'Logged out'),
(206, 1, '2022-11-22 15:01:19', 'Instructor', 'Logged in'),
(207, 1, '2022-11-22 15:01:38', 'Instructor', 'Logged out'),
(208, 1, '2022-11-22 15:01:52', 'Instructor', 'Logged in'),
(209, 1, '2022-11-22 15:04:06', 'Instructor', 'Logged out'),
(210, 1, '2022-11-22 15:04:09', 'Administrator', 'Logged in'),
(211, 1000000216, '2022-11-22 15:07:02', 'Student', 'Logged in'),
(212, 1, '2022-11-22 17:48:17', 'Administrator', 'Logged in'),
(213, 1, '2022-11-22 18:12:41', 'Administrator', 'Logged in'),
(214, 1, '2022-11-23 00:51:28', 'Administrator', 'Logged in'),
(215, 1, '2022-11-23 00:59:37', 'Administrator', 'Logged in'),
(216, 1000000214, '2022-11-23 01:09:02', 'Student', 'Logged out'),
(217, 1, '2022-11-23 01:09:59', 'Administrator', 'Logged out'),
(218, 1, '2022-11-23 01:10:45', 'Administrator', 'Logged in'),
(219, 33, '2022-11-23 01:11:39', 'Instructor', 'Logged in'),
(220, 1000000214, '2022-11-23 01:13:04', 'Student', 'Logged out'),
(221, 1000000214, '2022-11-23 02:36:39', 'Student', 'Logged in'),
(222, 1000000214, '2022-11-23 02:36:51', 'Student', 'Logged out'),
(223, 33, '2022-11-23 03:22:40', 'Instructor', 'Logged out'),
(224, 1, '2022-11-23 03:22:46', 'Administrator', 'Logged in'),
(225, 1, '2022-11-23 10:56:29', 'Administrator', 'Logged in'),
(226, 1000000214, '2022-11-23 11:15:24', 'Student', 'Logged in'),
(227, 1, '2022-11-23 12:10:16', 'Administrator', 'Logged out'),
(228, 1, '2022-11-23 12:10:24', 'Instructor', 'Logged in'),
(229, 1, '2022-11-23 12:10:24', 'Instructor', 'Logged in'),
(230, 1, '2022-11-23 13:13:00', 'Administrator', 'Logged in'),
(231, 1000000224, '2022-11-23 13:33:07', 'Student', 'Logged out'),
(232, 1, '2022-11-23 13:35:05', 'Administrator', 'Logged out'),
(233, 1, '2022-11-23 13:35:16', 'Instructor', 'Logged in'),
(234, 1, '2022-11-23 13:36:17', 'Instructor', 'Logged out'),
(235, 4, '2022-11-23 13:36:29', 'Registrar', 'Logged in'),
(236, 1, '2022-11-23 13:52:37', 'Instructor', 'Logged out'),
(237, 1, '2022-11-23 13:52:43', 'Administrator', 'Logged in'),
(238, 1, '2022-11-23 17:19:02', 'Instructor', 'Logged out'),
(239, 1000000206, '2022-11-23 17:19:16', 'Student', 'Logged out'),
(240, 1000000214, '2022-11-23 17:28:37', 'Student', 'Logged in'),
(241, 1, '2022-11-23 17:30:36', 'Administrator', 'Logged in'),
(242, 1000000214, '2022-11-23 17:35:08', 'Student', 'Logged out'),
(243, 1000000214, '2022-11-23 17:50:27', 'Student', 'Logged in'),
(244, 1000000214, '2022-11-23 17:57:56', 'Student', 'Logged out'),
(245, 1000000214, '2022-11-23 18:18:51', 'Student', 'Logged in'),
(246, 1000000214, '2022-11-23 18:24:00', 'Student', 'Logged out'),
(247, 1, '2022-11-23 18:37:25', 'Administrator', 'Logged in'),
(248, 1, '2022-11-23 18:37:55', 'Administrator', 'Logged out'),
(249, 37, '2022-11-23 18:38:00', 'Instructor', 'Logged in'),
(250, 37, '2022-11-23 18:38:16', 'Instructor', 'Logged out'),
(251, 37, '2022-11-23 18:38:24', 'Instructor', 'Logged in'),
(252, 37, '2022-11-23 18:41:38', 'Instructor', 'Logged out'),
(253, 1, '2022-11-23 18:42:10', 'Administrator', 'Logged in'),
(254, 1, '2022-11-23 18:42:35', 'Administrator', 'Logged out'),
(255, 1000000219, '2022-11-23 18:42:41', 'Student', 'Logged in'),
(256, 1000000219, '2022-11-23 18:42:53', 'Student', 'Logged out'),
(257, 1, '2022-11-23 18:43:28', 'Administrator', 'Logged in'),
(258, 1, '2022-11-23 18:44:06', 'Administrator', 'Logged out'),
(259, 37, '2022-11-23 18:44:17', 'Instructor', 'Logged in'),
(260, 1000000219, '2022-11-23 18:44:43', 'Student', 'Logged in'),
(261, 37, '2022-11-23 18:46:10', 'Instructor', 'Logged out'),
(262, 1, '2022-11-23 18:46:16', 'Administrator', 'Logged in'),
(263, 1, '2022-11-23 18:47:06', 'Administrator', 'Logged out'),
(264, 1, '2022-11-23 18:47:16', 'Administrator', 'Logged in'),
(265, 1, '2022-11-23 18:47:33', 'Administrator', 'Logged out'),
(266, 1, '2022-11-23 18:47:51', 'Administrator', 'Logged in'),
(267, 1, '2022-11-23 18:48:04', 'Administrator', 'Logged out'),
(268, 36, '2022-11-23 18:48:15', 'Instructor', 'Logged in'),
(269, 36, '2022-11-23 19:07:37', 'Instructor', 'Logged out'),
(270, 36, '2022-11-23 19:07:56', 'Instructor', 'Logged in'),
(271, 1000000219, '2022-11-23 19:08:46', 'Student', 'Logged out'),
(272, 1000000219, '2022-11-23 19:08:57', 'Student', 'Logged in'),
(273, 36, '2022-11-23 19:09:20', 'Instructor', 'Logged out'),
(274, 1, '2022-11-23 19:09:25', 'Administrator', 'Logged in'),
(275, 1, '2022-11-23 19:20:20', 'Administrator', 'Logged out'),
(276, 1, '2022-11-23 19:20:23', 'Instructor', 'Logged in'),
(277, 1000000219, '2022-11-23 20:22:50', 'Student', 'Logged out'),
(278, 1000000219, '2022-11-23 20:23:25', 'Student', 'Logged in'),
(279, 1, '2022-11-23 20:38:40', 'Instructor', 'Logged out'),
(280, 1, '2022-11-23 20:38:49', 'Administrator', 'Logged in');

-- --------------------------------------------------------

--
-- Table structure for table `tblschedule`
--

CREATE TABLE `tblschedule` (
  `schedID` int(11) NOT NULL,
  `TIME_FROM` varchar(90) NOT NULL,
  `TIME_TO` varchar(90) NOT NULL,
  `sched_time` varchar(30) NOT NULL,
  `sched_day` varchar(30) NOT NULL,
  `sched_sy` varchar(30) NOT NULL,
  `sched_room` varchar(30) NOT NULL,
  `SECTION` varchar(30) NOT NULL,
  `COURSE_ID` int(11) NOT NULL,
  `SUBJ_ID` int(11) NOT NULL,
  `INST_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblschedule`
--

INSERT INTO `tblschedule` (`schedID`, `TIME_FROM`, `TIME_TO`, `sched_time`, `sched_day`, `sched_sy`, `sched_room`, `SECTION`, `COURSE_ID`, `SUBJ_ID`, `INST_ID`) VALUES
(1, '09:00 am', '03:00 pm', '09:00 am-03:00 pm', 'MWF', '2022-2023', '1', '1', 6, 1, 37),
(2, '03:00 pm', '04:00 am', '03:00 pm-04:00 am', 'MTWTF', '2022-2023', '1', '1', 1, 2, 33),
(4, '08:00 am', '09:00 am', '08:00 am-09:00 am', 'MWTF', '2022-2023', '1', '1', 1, 8, 35),
(6, '08:00 am', '09:00 am', '08:00 am-09:00 am', 'Mon - Fri', '2022-2023', '2', '1', 7, 9, 36),
(7, '09:00 am', '10:00 am', '09:00 am-10:00 am', 'mtwtf', '2022-2023', '9', '1', 8, 11, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblsitesettings`
--

CREATE TABLE `tblsitesettings` (
  `ID` int(11) NOT NULL,
  `Type` varchar(90) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsitesettings`
--

INSERT INTO `tblsitesettings` (`ID`, `Type`, `Description`) VALUES
(1, 'SiteTitle', 'PHIL-ARK CHRISTIAN ACADEMY, INC.');

-- --------------------------------------------------------

--
-- Table structure for table `tblstuddetails`
--

CREATE TABLE `tblstuddetails` (
  `DETAIL_ID` int(11) NOT NULL,
  `GUARDIAN` varchar(255) NOT NULL,
  `GUARDIAN_ADDRESS` varchar(255) NOT NULL DEFAULT '-',
  `GCONTACT` varchar(40) NOT NULL,
  `IDNO` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstuddetails`
--

INSERT INTO `tblstuddetails` (`DETAIL_ID`, `GUARDIAN`, `GUARDIAN_ADDRESS`, `GCONTACT`, `IDNO`) VALUES
(1, 'marishel', '-', '123', 1000000214),
(2, 'Xena Paa', '-', '09519643434', 1000000215),
(3, 'Lorie', '-', '09202307979', 1000000216),
(4, 'lanie', '-', '09486462853', 1000000217),
(5, 'Monkey D. Dragon', '-', '09123456789', 1000000218),
(6, 'cha', '-', '09486462853', 1000000219),
(7, 'marishel', '-', '123', 1000000220),
(8, 'marishel', '-', '123', 1000000221),
(9, 'Lorie', '-', '123012730173', 1000000222),
(10, 'CHOCO', '-', '09123123823', 1000000223),
(11, 'wantutri', '-', '09359839219', 1000000224);

-- --------------------------------------------------------

--
-- Table structure for table `tblstudent`
--

CREATE TABLE `tblstudent` (
  `S_ID` int(11) NOT NULL,
  `IDNO` int(20) NOT NULL DEFAULT '0',
  `FNAME` varchar(40) NOT NULL DEFAULT '-',
  `LNAME` varchar(40) NOT NULL DEFAULT '-',
  `MNAME` varchar(40) NOT NULL DEFAULT '-',
  `Suffix` varchar(30) NOT NULL,
  `SEX` varchar(10) NOT NULL DEFAULT 'Male',
  `BDAY` date NOT NULL,
  `BPLACE` text NOT NULL,
  `STATUS` varchar(30) NOT NULL DEFAULT '-',
  `AGE` int(30) NOT NULL DEFAULT '0',
  `NATIONALITY` varchar(40) NOT NULL DEFAULT '-',
  `RELIGION` varchar(255) NOT NULL DEFAULT '-',
  `CONTACT_NO` varchar(40) NOT NULL DEFAULT '-',
  `HOME_ADD` text NOT NULL,
  `ACC_USERNAME` varchar(255) NOT NULL DEFAULT '-',
  `ACC_PASSWORD` text NOT NULL,
  `student_status` text NOT NULL,
  `YEARLEVEL` int(11) NOT NULL DEFAULT '0',
  `STUDSECTION` int(11) NOT NULL DEFAULT '0',
  `COURSE_ID` int(11) NOT NULL DEFAULT '0',
  `STUDPHOTO` varchar(255) NOT NULL DEFAULT '-',
  `SEMESTER` varchar(30) NOT NULL DEFAULT '-',
  `SYEAR` varchar(30) NOT NULL DEFAULT '-',
  `NewEnrollees` tinyint(1) NOT NULL DEFAULT '0',
  `ENROLLED` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstudent`
--

INSERT INTO `tblstudent` (`S_ID`, `IDNO`, `FNAME`, `LNAME`, `MNAME`, `Suffix`, `SEX`, `BDAY`, `BPLACE`, `STATUS`, `AGE`, `NATIONALITY`, `RELIGION`, `CONTACT_NO`, `HOME_ADD`, `ACC_USERNAME`, `ACC_PASSWORD`, `student_status`, `YEARLEVEL`, `STUDSECTION`, `COURSE_ID`, `STUDPHOTO`, `SEMESTER`, `SYEAR`, `NewEnrollees`, `ENROLLED`) VALUES
(1, 1000000214, 'darwin', 'vigas', 'd', 'jr', 'Male', '2002-01-05', 'lipa city', '', 0, 'filipino', 'catholic', '123', 'Balete', 'darwin', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'Regular', 1, 1, 2, '-', '-', '-', 0, 1),
(2, 1000000215, 'Marilyn', 'Dela Cruz ', 'M', '', 'Female', '2011-02-02', 'Balete', '-', 0, '09519643434', 'Catholic', '09519643434', 'Balete', 'Marilyn', '448d68c31af00852d7799730cdddf8128f108f9b', 'Irregular', 1, 1, 1, 'student_image/images (3).png', '-', '-', 0, 0),
(3, 1000000216, 'joebert', 'bernal', 'm', '', 'Male', '2001-01-07', 'Lipa City', '', 0, 'Filipino', 'Roman Catholic', '09972608624', 'Purok6 , Lodlod Lipa City Batangas', 'joebert.bernal', 'c3fd13ad6033ddf043b4563409e7d065bf9fa0b1', 'Irregular', 1, 1, 1, 'student_image/......jpg', '-', '-', 0, 0),
(4, 1000000217, 'blessie', 'lirit', 'm', '', 'Female', '1999-10-12', 'balete', '-', 0, 'filipino', 'catholic', '09486462853', 'balete', 'blessie', 'a9e29da4929d11bd0e3fcabadbb1192b9093393c', 'New', 1, 1, 1, '-', '-', '-', 0, 0),
(5, 1000000218, 'LUFFYmONKEYONKEY4', 'Monkey', 'D', '', 'Female', '2011-02-02', 'Japan', '-', 0, '09123456789', 'None', '09123456789', 'Japan', 'luffy', '366f38ea85077c49b65e8fa78091ecd7a97291ef', 'New', 1, 1, 1, '-', '-', '-', 0, 0),
(6, 1000000219, 'baby', 'kulot', 'c', 'jr', 'Female', '2051-02-01', 'balete', '-', 0, '09486462853', 'catholic', '09486462853', 'POBLACION BALETE BATANGAS', 'kulot', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', 'Regular', 1, 1, 8, '-', '-', '-', 0, 0),
(7, 1000000220, 'norman', 'newman', 'd', '', 'Female', '2010-02-02', 'lipa city', '-', 0, '123', 'catholic', '123', 'marawoy lipa city', 'norman', '4864ccb4939929874a71c5255d77f90846dede54', 'New', 1, 1, 1, '-', '-', '-', 0, 0),
(8, 1000000221, 'raiden ', 'shogun', 'd', '', 'Female', '2010-02-02', 'lipa city', '-', 0, '123', 'catholic', '123', 'marawoy lipa city', 'raiden', '52b1a37e360f4c22b8b2aa1e374b1afe1a7eff95', 'New', 1, 1, 1, '-', '-', '-', 0, 0),
(9, 1000000222, 'joebert1', 'bernal', 'M', '', 'Male', '2001-01-07', 'Lipa City', '-', 0, 'Filipino', 'Roman Catholic', '1283912832', 'Purok6 , Lodlod Lipa City Batangas', 'joebert.bernal00', '7323a5431d1c31072983a6a5bf23745b655ddf59', 'New', 1, 1, 1, '-', '-', '-', 0, 0),
(10, 1000000223, 'Star', 'Bucks', 'S', '', 'Female', '2011-02-02', 'SM LIPA', '-', 0, '09202139232', 'Roman Catholic', '09202139232', 'SM LIPA CITY', 'SB123', '85a7de6e270547e88998d71994b1464d01295177', 'New', 1, 1, 10, '-', '-', '-', 0, 0),
(11, 1000000224, 'Mark Joseph', 'Laylo', 'M', '', 'Male', '2001-12-09', 'Lipa City', '-', 0, 'Filipino', 'Roman Catholic', '09123456789', ' Pangao, Lipa City', 'mrkjsph1', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'New', 1, 1, 1, '-', '-', '-', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `useraccounts`
--

CREATE TABLE `useraccounts` (
  `ACCOUNT_ID` int(11) NOT NULL,
  `ACCOUNT_NAME` varchar(255) NOT NULL DEFAULT '-',
  `ACCOUNT_USERNAME` varchar(255) NOT NULL DEFAULT '-',
  `ACCOUNT_PASSWORD` text NOT NULL,
  `ACCOUNT_TYPE` varchar(30) NOT NULL DEFAULT '-',
  `EMPID` int(11) NOT NULL DEFAULT '0',
  `USERIMAGE` varchar(255) NOT NULL DEFAULT '-'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useraccounts`
--

INSERT INTO `useraccounts` (`ACCOUNT_ID`, `ACCOUNT_NAME`, `ACCOUNT_USERNAME`, `ACCOUNT_PASSWORD`, `ACCOUNT_TYPE`, `EMPID`, `USERIMAGE`) VALUES
(1, 'Josh Cadelina', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Administrator', 1234, 'photos/LoginRed.jpg'),
(2, 'Norhan Alamada', 'norhan', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Registrar', 0, ''),
(3, 'Joebert', 'joebert.bernal1', 'c3fd13ad6033ddf043b4563409e7d065bf9fa0b1', 'Administrator', 0, '-'),
(4, 'Joebert1', 'joebert.bernal2', 'c3fd13ad6033ddf043b4563409e7d065bf9fa0b1', 'Registrar', 0, '-'),
(5, 'anexa', 'anex', 'a68ce3b05ffeb6f5fbda93e1eeaa818911e84b87', 'Registrar', 0, '-'),
(7, 's', 's', 'a0f1490a20d0211c997b44bc357e1972deab8ae3', 'Registrar', 0, '-');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`COURSE_ID`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`GRADE_ID`),
  ADD KEY `IDNO` (`IDNO`);

--
-- Indexes for table `schoolyr`
--
ALTER TABLE `schoolyr`
  ADD PRIMARY KEY (`SYID`),
  ADD KEY `IDNO` (`IDNO`);

--
-- Indexes for table `studentschedule`
--
ALTER TABLE `studentschedule`
  ADD PRIMARY KEY (`CLASS_ID`),
  ADD KEY `IDNO` (`IDNO`),
  ADD KEY `schedID` (`schedID`);

--
-- Indexes for table `studentsubjects`
--
ALTER TABLE `studentsubjects`
  ADD PRIMARY KEY (`STUDSUBJ_ID`),
  ADD KEY `IDNO` (`IDNO`),
  ADD KEY `SUBJ_ID` (`SUBJ_ID`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`SUBJ_ID`),
  ADD KEY `COURSE_ID` (`COURSE_ID`);

--
-- Indexes for table `tblauto`
--
ALTER TABLE `tblauto`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `autocode` (`autocode`);

--
-- Indexes for table `tblinstructor`
--
ALTER TABLE `tblinstructor`
  ADD PRIMARY KEY (`INST_ID`);

--
-- Indexes for table `tbllogs`
--
ALTER TABLE `tbllogs`
  ADD PRIMARY KEY (`LOGID`);

--
-- Indexes for table `tblschedule`
--
ALTER TABLE `tblschedule`
  ADD PRIMARY KEY (`schedID`),
  ADD KEY `COURSE_ID` (`COURSE_ID`),
  ADD KEY `SUBJ_ID` (`SUBJ_ID`);

--
-- Indexes for table `tblsitesettings`
--
ALTER TABLE `tblsitesettings`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblstuddetails`
--
ALTER TABLE `tblstuddetails`
  ADD PRIMARY KEY (`DETAIL_ID`),
  ADD KEY `IDNO` (`IDNO`);

--
-- Indexes for table `tblstudent`
--
ALTER TABLE `tblstudent`
  ADD PRIMARY KEY (`S_ID`),
  ADD UNIQUE KEY `IDNO` (`IDNO`);

--
-- Indexes for table `useraccounts`
--
ALTER TABLE `useraccounts`
  ADD PRIMARY KEY (`ACCOUNT_ID`),
  ADD UNIQUE KEY `ACCOUNT_USERNAME` (`ACCOUNT_USERNAME`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `COURSE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `GRADE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `schoolyr`
--
ALTER TABLE `schoolyr`
  MODIFY `SYID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `studentschedule`
--
ALTER TABLE `studentschedule`
  MODIFY `CLASS_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `studentsubjects`
--
ALTER TABLE `studentsubjects`
  MODIFY `STUDSUBJ_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `SUBJ_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tblauto`
--
ALTER TABLE `tblauto`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblinstructor`
--
ALTER TABLE `tblinstructor`
  MODIFY `INST_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tbllogs`
--
ALTER TABLE `tbllogs`
  MODIFY `LOGID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=281;

--
-- AUTO_INCREMENT for table `tblschedule`
--
ALTER TABLE `tblschedule`
  MODIFY `schedID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblsitesettings`
--
ALTER TABLE `tblsitesettings`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblstuddetails`
--
ALTER TABLE `tblstuddetails`
  MODIFY `DETAIL_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tblstudent`
--
ALTER TABLE `tblstudent`
  MODIFY `S_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `useraccounts`
--
ALTER TABLE `useraccounts`
  MODIFY `ACCOUNT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
