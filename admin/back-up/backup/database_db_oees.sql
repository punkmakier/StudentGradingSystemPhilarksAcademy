# WordPress : buffernow.com MySQL database backup
#
# Generated: Wednesday 23. November 2022 17:48 CET
# Hostname: localhost
# Database: `db_oees`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `course`
# --------------------------------------------------------


#
# Delete any existing table `course`
#

DROP TABLE IF EXISTS `course`;


#
# Table structure of table `course`
#

CREATE TABLE `course` (
  `COURSE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `COURSE_NAME` varchar(30) NOT NULL DEFAULT '-',
  `COURSE_LEVEL` varchar(50) NOT NULL DEFAULT '1',
  `COURSE_MAJOR` varchar(30) NOT NULL DEFAULT 'None',
  `COURSE_DESC` varchar(255) NOT NULL DEFAULT '-',
  PRIMARY KEY (`COURSE_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1 ;

#
# Data contents of table course (8 records)
#
 
INSERT INTO `course` VALUES ('1', '', 'Nurser 1', 'None', '') ; 
INSERT INTO `course` VALUES ('2', '', 'Nurser 2', 'None', '') ; 
INSERT INTO `course` VALUES ('6', '-', 'Grade 1', 'None', '-') ; 
INSERT INTO `course` VALUES ('7', '-', 'Grade 2', 'None', '-') ; 
INSERT INTO `course` VALUES ('8', '-', 'Grade 3', 'None', '-') ; 
INSERT INTO `course` VALUES ('9', '-', 'Grade 4', 'None', '-') ; 
INSERT INTO `course` VALUES ('10', '-', 'Grade 5', 'None', '-') ; 
INSERT INTO `course` VALUES ('11', '-', 'Grade 6', 'None', '-') ;
#
# End of data contents of table course
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Wednesday 23. November 2022 17:48 CET
# Hostname: localhost
# Database: `db_oees`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `course`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `grades`
# --------------------------------------------------------


#
# Delete any existing table `grades`
#

DROP TABLE IF EXISTS `grades`;


#
# Table structure of table `grades`
#

CREATE TABLE `grades` (
  `GRADE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `IDNO` int(11) NOT NULL DEFAULT '0',
  `SUBJ_ID` int(11) NOT NULL DEFAULT '0',
  `FIRST` double NOT NULL DEFAULT '0',
  `SECOND` double NOT NULL DEFAULT '0',
  `THIRD` double NOT NULL DEFAULT '0',
  `FOURTH` double NOT NULL DEFAULT '0',
  `AVE` float DEFAULT '0',
  `REMARKS` text NOT NULL,
  `COMMENT` text NOT NULL,
  PRIMARY KEY (`GRADE_ID`),
  KEY `IDNO` (`IDNO`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1 ;

#
# Data contents of table grades (35 records)
#
 
INSERT INTO `grades` VALUES ('1', '1000000214', '1', '75', '75', '75', '75', '75', 'Passed', '-') ; 
INSERT INTO `grades` VALUES ('2', '1000000214', '2', '75', '75', '75', '75', '75', 'Passed', '-') ; 
INSERT INTO `grades` VALUES ('3', '1000000214', '5', '0', '0', '0', '0', '0', '-', '-') ; 
INSERT INTO `grades` VALUES ('4', '1000000214', '8', '75', '75', '75', '75', '75', 'Passed', '-') ; 
INSERT INTO `grades` VALUES ('5', '1000000215', '1', '90', '96', '86', '75', '84.4', 'Passed', '-') ; 
INSERT INTO `grades` VALUES ('6', '1000000215', '2', '0', '0', '0', '0', '0', '-', '-') ; 
INSERT INTO `grades` VALUES ('7', '1000000215', '5', '0', '0', '0', '0', '0', '-', '-') ; 
INSERT INTO `grades` VALUES ('8', '1000000215', '8', '0', '0', '0', '0', '0', '-', '-') ; 
INSERT INTO `grades` VALUES ('9', '1000000216', '1', '75', '75', '75', '75', '75', 'Passed', '-') ; 
INSERT INTO `grades` VALUES ('10', '1000000216', '2', '76', '76', '76', '76', '76', 'Passed', '-') ; 
INSERT INTO `grades` VALUES ('11', '1000000216', '5', '0', '0', '0', '0', '0', '-', '-') ; 
INSERT INTO `grades` VALUES ('12', '1000000216', '8', '0', '0', '0', '0', '0', '-', '-') ; 
INSERT INTO `grades` VALUES ('13', '1000000217', '1', '0', '0', '0', '0', '0', '-', '-') ; 
INSERT INTO `grades` VALUES ('14', '1000000217', '2', '0', '0', '0', '0', '0', '-', '-') ; 
INSERT INTO `grades` VALUES ('15', '1000000217', '5', '0', '0', '0', '0', '0', '-', '-') ; 
INSERT INTO `grades` VALUES ('16', '1000000217', '8', '0', '0', '0', '0', '0', '-', '-') ; 
INSERT INTO `grades` VALUES ('17', '1000000218', '1', '0', '0', '0', '0', '0', '-', '-') ; 
INSERT INTO `grades` VALUES ('18', '1000000218', '2', '0', '0', '0', '0', '0', '-', '-') ; 
INSERT INTO `grades` VALUES ('19', '1000000218', '5', '0', '0', '0', '0', '0', '-', '-') ; 
INSERT INTO `grades` VALUES ('20', '1000000218', '8', '0', '0', '0', '0', '0', '-', '-') ; 
INSERT INTO `grades` VALUES ('21', '1000000219', '7', '0', '0', '0', '0', '0', '-', '-') ; 
INSERT INTO `grades` VALUES ('22', '1000000220', '1', '0', '0', '0', '0', '0', '-', '-') ; 
INSERT INTO `grades` VALUES ('23', '1000000220', '2', '0', '0', '0', '0', '0', '-', '-') ; 
INSERT INTO `grades` VALUES ('24', '1000000220', '5', '0', '0', '0', '0', '0', '-', '-') ; 
INSERT INTO `grades` VALUES ('25', '1000000220', '8', '0', '0', '0', '0', '0', '-', '-') ; 
INSERT INTO `grades` VALUES ('26', '1000000221', '1', '0', '0', '0', '0', '0', '-', '-') ; 
INSERT INTO `grades` VALUES ('27', '1000000221', '2', '0', '0', '0', '0', '0', '-', '-') ; 
INSERT INTO `grades` VALUES ('28', '1000000221', '5', '0', '0', '0', '0', '0', '-', '-') ; 
INSERT INTO `grades` VALUES ('29', '1000000221', '8', '0', '0', '0', '0', '0', '-', '-') ; 
INSERT INTO `grades` VALUES ('30', '1000000222', '1', '0', '0', '0', '0', '0', '-', '-') ; 
INSERT INTO `grades` VALUES ('31', '1000000222', '2', '0', '0', '0', '0', '0', '-', '-') ; 
INSERT INTO `grades` VALUES ('32', '1000000222', '8', '0', '0', '0', '0', '0', '-', '-') ; 
INSERT INTO `grades` VALUES ('33', '1000000224', '1', '0', '0', '0', '0', '0', '-', '-') ; 
INSERT INTO `grades` VALUES ('34', '1000000224', '2', '0', '0', '0', '0', '0', '-', '-') ; 
INSERT INTO `grades` VALUES ('35', '1000000224', '8', '0', '0', '0', '0', '0', '-', '-') ;
#
# End of data contents of table grades
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Wednesday 23. November 2022 17:48 CET
# Hostname: localhost
# Database: `db_oees`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `course`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `grades`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `schoolyr`
# --------------------------------------------------------


#
# Delete any existing table `schoolyr`
#

DROP TABLE IF EXISTS `schoolyr`;


#
# Table structure of table `schoolyr`
#

CREATE TABLE `schoolyr` (
  `SYID` int(11) NOT NULL AUTO_INCREMENT,
  `AY` varchar(30) NOT NULL DEFAULT '0',
  `COURSE_ID` int(11) NOT NULL DEFAULT '0',
  `IDNO` int(30) NOT NULL DEFAULT '0',
  `CATEGORY` varchar(30) NOT NULL DEFAULT 'ENROLLED',
  `DATE_RESERVED` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `DATE_ENROLLED` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `STATUS` varchar(30) NOT NULL DEFAULT 'New',
  PRIMARY KEY (`SYID`),
  KEY `IDNO` (`IDNO`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1 ;

#
# Data contents of table schoolyr (11 records)
#
 
INSERT INTO `schoolyr` VALUES ('1', '2022-2023', '1', '1000000214', 'ENROLLED', '2022-11-21 00:00:00', '2022-11-21 00:00:00', 'New') ; 
INSERT INTO `schoolyr` VALUES ('2', '2022-2023', '1', '1000000215', 'ENROLLED', '2022-11-21 00:00:00', '2022-11-21 00:00:00', 'New') ; 
INSERT INTO `schoolyr` VALUES ('3', '2022-2023', '1', '1000000216', 'ENROLLED', '2022-11-21 00:00:00', '2022-11-21 00:00:00', 'New') ; 
INSERT INTO `schoolyr` VALUES ('4', '2022-2023', '1', '1000000217', 'ENROLLED', '2022-11-21 00:00:00', '2022-11-21 00:00:00', 'New') ; 
INSERT INTO `schoolyr` VALUES ('5', '2022-2023', '1', '1000000218', 'ENROLLED', '2022-11-21 00:00:00', '2022-11-21 00:00:00', 'New') ; 
INSERT INTO `schoolyr` VALUES ('6', '2022-2023', '6', '1000000219', 'ENROLLED', '2022-11-21 00:00:00', '2022-11-21 00:00:00', 'New') ; 
INSERT INTO `schoolyr` VALUES ('7', '2022-2023', '1', '1000000220', 'ENROLLED', '2022-11-22 00:00:00', '2022-11-22 00:00:00', 'New') ; 
INSERT INTO `schoolyr` VALUES ('8', '2022-2023', '1', '1000000221', 'ENROLLED', '2022-11-22 00:00:00', '2022-11-22 00:00:00', 'New') ; 
INSERT INTO `schoolyr` VALUES ('9', '2022-2023', '1', '1000000222', 'ENROLLED', '2022-11-22 00:00:00', '2022-11-22 00:00:00', 'New') ; 
INSERT INTO `schoolyr` VALUES ('10', '2022-2023', '10', '1000000223', 'ENROLLED', '2022-11-23 00:00:00', '2022-11-23 00:00:00', 'New') ; 
INSERT INTO `schoolyr` VALUES ('11', '2022-2023', '1', '1000000224', 'ENROLLED', '2022-11-23 00:00:00', '2022-11-23 00:00:00', 'New') ;
#
# End of data contents of table schoolyr
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Wednesday 23. November 2022 17:48 CET
# Hostname: localhost
# Database: `db_oees`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `course`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `grades`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `schoolyr`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `studentschedule`
# --------------------------------------------------------


#
# Delete any existing table `studentschedule`
#

DROP TABLE IF EXISTS `studentschedule`;


#
# Table structure of table `studentschedule`
#

CREATE TABLE `studentschedule` (
  `CLASS_ID` int(11) NOT NULL AUTO_INCREMENT,
  `SUBJ_ID` int(11) NOT NULL,
  `schedID` int(11) NOT NULL,
  `AY` varchar(11) NOT NULL,
  `DAY` varchar(20) NOT NULL,
  `C_TIME` varchar(30) NOT NULL,
  `IDNO` int(11) NOT NULL,
  `ROOM` text NOT NULL,
  `CSECTION` varchar(30) NOT NULL DEFAULT 'NONE',
  `COURSE_ID` int(11) NOT NULL,
  PRIMARY KEY (`CLASS_ID`),
  KEY `IDNO` (`IDNO`),
  KEY `schedID` (`schedID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ;

#
# Data contents of table studentschedule (0 records)
#

#
# End of data contents of table studentschedule
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Wednesday 23. November 2022 17:48 CET
# Hostname: localhost
# Database: `db_oees`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `course`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `grades`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `schoolyr`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `studentschedule`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `studentsubjects`
# --------------------------------------------------------


#
# Delete any existing table `studentsubjects`
#

DROP TABLE IF EXISTS `studentsubjects`;


#
# Table structure of table `studentsubjects`
#

CREATE TABLE `studentsubjects` (
  `STUDSUBJ_ID` int(11) NOT NULL AUTO_INCREMENT,
  `IDNO` int(11) NOT NULL DEFAULT '0',
  `SUBJ_ID` int(11) NOT NULL DEFAULT '0',
  `LEVEL` int(11) NOT NULL DEFAULT '0',
  `SY` text NOT NULL,
  `ATTEMP` int(11) NOT NULL DEFAULT '0',
  `AVERAGE` double NOT NULL DEFAULT '0',
  `OUTCOME` text NOT NULL,
  PRIMARY KEY (`STUDSUBJ_ID`),
  KEY `IDNO` (`IDNO`),
  KEY `SUBJ_ID` (`SUBJ_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1 ;

#
# Data contents of table studentsubjects (35 records)
#
 
INSERT INTO `studentsubjects` VALUES ('1', '1000000214', '1', '1', '2022-2023', '1', '75', 'Passed') ; 
INSERT INTO `studentsubjects` VALUES ('2', '1000000214', '2', '1', '2022-2023', '1', '75', 'Passed') ; 
INSERT INTO `studentsubjects` VALUES ('3', '1000000214', '5', '1', '2022-2023', '1', '0', '-') ; 
INSERT INTO `studentsubjects` VALUES ('4', '1000000214', '8', '1', '2022-2023', '1', '75', 'Passed') ; 
INSERT INTO `studentsubjects` VALUES ('5', '1000000215', '1', '1', '2022-2023', '1', '84.4', 'Passed') ; 
INSERT INTO `studentsubjects` VALUES ('6', '1000000215', '2', '1', '2022-2023', '1', '0', '-') ; 
INSERT INTO `studentsubjects` VALUES ('7', '1000000215', '5', '1', '2022-2023', '1', '0', '-') ; 
INSERT INTO `studentsubjects` VALUES ('8', '1000000215', '8', '1', '2022-2023', '1', '0', '-') ; 
INSERT INTO `studentsubjects` VALUES ('9', '1000000216', '1', '1', '2022-2023', '1', '75', 'Passed') ; 
INSERT INTO `studentsubjects` VALUES ('10', '1000000216', '2', '1', '2022-2023', '1', '76', 'Passed') ; 
INSERT INTO `studentsubjects` VALUES ('11', '1000000216', '5', '1', '2022-2023', '1', '0', '-') ; 
INSERT INTO `studentsubjects` VALUES ('12', '1000000216', '8', '1', '2022-2023', '1', '0', '-') ; 
INSERT INTO `studentsubjects` VALUES ('13', '1000000217', '1', '1', '2022-2023', '1', '0', '-') ; 
INSERT INTO `studentsubjects` VALUES ('14', '1000000217', '2', '1', '2022-2023', '1', '0', '-') ; 
INSERT INTO `studentsubjects` VALUES ('15', '1000000217', '5', '1', '2022-2023', '1', '0', '-') ; 
INSERT INTO `studentsubjects` VALUES ('16', '1000000217', '8', '1', '2022-2023', '1', '0', '-') ; 
INSERT INTO `studentsubjects` VALUES ('17', '1000000218', '1', '1', '2022-2023', '1', '0', '-') ; 
INSERT INTO `studentsubjects` VALUES ('18', '1000000218', '2', '1', '2022-2023', '1', '0', '-') ; 
INSERT INTO `studentsubjects` VALUES ('19', '1000000218', '5', '1', '2022-2023', '1', '0', '-') ; 
INSERT INTO `studentsubjects` VALUES ('20', '1000000218', '8', '1', '2022-2023', '1', '0', '-') ; 
INSERT INTO `studentsubjects` VALUES ('21', '1000000219', '7', '1', '2022-2023', '1', '0', '-') ; 
INSERT INTO `studentsubjects` VALUES ('22', '1000000220', '1', '1', '2022-2023', '1', '0', '-') ; 
INSERT INTO `studentsubjects` VALUES ('23', '1000000220', '2', '1', '2022-2023', '1', '0', '-') ; 
INSERT INTO `studentsubjects` VALUES ('24', '1000000220', '5', '1', '2022-2023', '1', '0', '-') ; 
INSERT INTO `studentsubjects` VALUES ('25', '1000000220', '8', '1', '2022-2023', '1', '0', '-') ; 
INSERT INTO `studentsubjects` VALUES ('26', '1000000221', '1', '1', '2022-2023', '1', '0', '-') ; 
INSERT INTO `studentsubjects` VALUES ('27', '1000000221', '2', '1', '2022-2023', '1', '0', '-') ; 
INSERT INTO `studentsubjects` VALUES ('28', '1000000221', '5', '1', '2022-2023', '1', '0', '-') ; 
INSERT INTO `studentsubjects` VALUES ('29', '1000000221', '8', '1', '2022-2023', '1', '0', '-') ; 
INSERT INTO `studentsubjects` VALUES ('30', '1000000222', '1', '1', '2022-2023', '1', '0', '-') ; 
INSERT INTO `studentsubjects` VALUES ('31', '1000000222', '2', '1', '2022-2023', '1', '0', '-') ; 
INSERT INTO `studentsubjects` VALUES ('32', '1000000222', '8', '1', '2022-2023', '1', '0', '-') ; 
INSERT INTO `studentsubjects` VALUES ('33', '1000000224', '1', '1', '2022-2023', '1', '0', '-') ; 
INSERT INTO `studentsubjects` VALUES ('34', '1000000224', '2', '1', '2022-2023', '1', '0', '-') ; 
INSERT INTO `studentsubjects` VALUES ('35', '1000000224', '8', '1', '2022-2023', '1', '0', '-') ;
#
# End of data contents of table studentsubjects
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Wednesday 23. November 2022 17:48 CET
# Hostname: localhost
# Database: `db_oees`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `course`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `grades`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `schoolyr`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `studentschedule`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `studentsubjects`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `subject`
# --------------------------------------------------------


#
# Delete any existing table `subject`
#

DROP TABLE IF EXISTS `subject`;


#
# Table structure of table `subject`
#

CREATE TABLE `subject` (
  `SUBJ_ID` int(11) NOT NULL AUTO_INCREMENT,
  `SUBJ_CODE` varchar(30) NOT NULL DEFAULT '-',
  `SUBJ_DESCRIPTION` varchar(255) NOT NULL DEFAULT '-',
  `UNIT` int(2) NOT NULL DEFAULT '0',
  `COURSE_ID` int(11) NOT NULL DEFAULT '0',
  `AY` varchar(30) NOT NULL DEFAULT '-',
  `PreTaken` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`SUBJ_ID`),
  KEY `COURSE_ID` (`COURSE_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 ;

#
# Data contents of table subject (8 records)
#
 
INSERT INTO `subject` VALUES ('1', 'English', 'Oral comunication', '3', '1', '', '0') ; 
INSERT INTO `subject` VALUES ('2', 'filipino', 'filipno 1', '3', '1', '-', '0') ; 
INSERT INTO `subject` VALUES ('4', 'filipino', 'filipno 1', '3', '2', '-', '0') ; 
INSERT INTO `subject` VALUES ('6', 'Math', 'Math', '3', '4', '-', '0') ; 
INSERT INTO `subject` VALUES ('7', 'Math', 'Mathematics ', '3', '6', '-', '0') ; 
INSERT INTO `subject` VALUES ('8', 'math', 'math', '3', '1', '-', '0') ; 
INSERT INTO `subject` VALUES ('9', 'English', 'math', '3', '7', '-', '0') ; 
INSERT INTO `subject` VALUES ('10', 'MMW (MATH)', 'math in the modern world', '3', '11', '-', '0') ;
#
# End of data contents of table subject
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Wednesday 23. November 2022 17:48 CET
# Hostname: localhost
# Database: `db_oees`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `course`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `grades`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `schoolyr`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `studentschedule`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `studentsubjects`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `subject`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tblauto`
# --------------------------------------------------------


#
# Delete any existing table `tblauto`
#

DROP TABLE IF EXISTS `tblauto`;


#
# Table structure of table `tblauto`
#

CREATE TABLE `tblauto` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `autocode` varchar(255) DEFAULT NULL,
  `autoname` varchar(255) DEFAULT NULL,
  `appendchar` varchar(255) DEFAULT NULL,
  `autostart` int(11) DEFAULT '0',
  `autoend` int(11) DEFAULT '0',
  `incrementvalue` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `autocode` (`autocode`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 ;

#
# Data contents of table tblauto (4 records)
#
 
INSERT INTO `tblauto` VALUES ('1', 'Asset', 'Asset', 'ASitem', '0', '3', '1') ; 
INSERT INTO `tblauto` VALUES ('2', 'Trans', 'Transaction', 'TrAnS', '1', '5', '1') ; 
INSERT INTO `tblauto` VALUES ('3', 'SIDNO', 'IDNO', '2015', '1000000', '225', '1') ; 
INSERT INTO `tblauto` VALUES ('4', 'EMPLOYEE', 'EMPID', '020010', '0', '2', '1') ;
#
# End of data contents of table tblauto
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Wednesday 23. November 2022 17:48 CET
# Hostname: localhost
# Database: `db_oees`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `course`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `grades`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `schoolyr`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `studentschedule`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `studentsubjects`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `subject`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tblauto`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tblinstructor`
# --------------------------------------------------------


#
# Delete any existing table `tblinstructor`
#

DROP TABLE IF EXISTS `tblinstructor`;


#
# Table structure of table `tblinstructor`
#

CREATE TABLE `tblinstructor` (
  `INST_ID` int(11) NOT NULL AUTO_INCREMENT,
  `INST_NAME` varchar(90) NOT NULL,
  `INST_MAJOR` varchar(90) NOT NULL,
  `INST_CONTACT` varchar(30) NOT NULL,
  `INST_Username` varchar(90) NOT NULL,
  `INST_Password` varchar(90) NOT NULL,
  PRIMARY KEY (`INST_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1 ;

#
# Data contents of table tblinstructor (7 records)
#
 
INSERT INTO `tblinstructor` VALUES ('1', 'Joker Villanueva', 'Programming', '091873648495', 'j', '5c2dd944dde9e08881bef0894fe7b22a5c9c4b06') ; 
INSERT INTO `tblinstructor` VALUES ('31', 'Recardo Piang', 'English', '09264537432', '', '') ; 
INSERT INTO `tblinstructor` VALUES ('33', 'Lee Jieun', 'filipino', '123', 'iu', '40bd001563085fc35165329ea1ff5c5ecbdbbeef') ; 
INSERT INTO `tblinstructor` VALUES ('35', 'dar', 'math', '123', 'dar', '40bd001563085fc35165329ea1ff5c5ecbdbbeef') ; 
INSERT INTO `tblinstructor` VALUES ('36', 'anexa', 'AP', '099999', 'anex', 'a68ce3b05ffeb6f5fbda93e1eeaa818911e84b87') ; 
INSERT INTO `tblinstructor` VALUES ('37', 'Nami Swan', 'Math', '09123456789', 'nami', 'fe5f55995fd81049f5942fecf1dbd40bb862e3cb') ; 
INSERT INTO `tblinstructor` VALUES ('38', 'joebert', 'math', '09999819389123', 'jj', '7323a5431d1c31072983a6a5bf23745b655ddf59') ;
#
# End of data contents of table tblinstructor
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Wednesday 23. November 2022 17:48 CET
# Hostname: localhost
# Database: `db_oees`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `course`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `grades`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `schoolyr`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `studentschedule`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `studentsubjects`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `subject`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tblauto`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tblinstructor`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tbllogs`
# --------------------------------------------------------


#
# Delete any existing table `tbllogs`
#

DROP TABLE IF EXISTS `tbllogs`;


#
# Table structure of table `tbllogs`
#

CREATE TABLE `tbllogs` (
  `LOGID` int(11) NOT NULL AUTO_INCREMENT,
  `USERID` int(11) NOT NULL,
  `LOGDATETIME` datetime NOT NULL,
  `LOGROLE` varchar(55) NOT NULL,
  `LOGMODE` varchar(55) NOT NULL,
  PRIMARY KEY (`LOGID`)
) ENGINE=InnoDB AUTO_INCREMENT=243 DEFAULT CHARSET=latin1 ;

#
# Data contents of table tbllogs (242 records)
#
 
INSERT INTO `tbllogs` VALUES ('1', '1000000204', '2022-11-19 18:46:13', 'Student', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('2', '1000000204', '2022-11-19 18:48:08', 'Student', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('3', '1000000204', '2022-11-19 19:12:22', 'Student', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('4', '1000000204', '2022-11-19 19:34:15', 'Student', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('5', '1000000204', '2022-11-19 19:41:43', 'Student', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('6', '1000000204', '2022-11-19 20:05:18', 'Student', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('7', '1000000204', '2022-11-19 20:07:41', 'Student', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('8', '1', '2022-11-19 20:11:32', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('9', '1000000204', '2022-11-19 20:12:45', 'Student', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('10', '1000000204', '2022-11-19 20:29:22', 'Student', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('11', '1000000204', '2022-11-19 20:42:27', 'Student', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('12', '1000000204', '2022-11-19 20:42:40', 'Student', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('13', '1000000204', '2022-11-19 20:54:01', 'Student', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('14', '1000000204', '2022-11-19 21:00:58', 'Student', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('15', '1000000204', '2022-11-19 21:04:36', 'Student', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('16', '1', '2022-11-20 05:21:34', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('17', '1', '2022-11-20 05:46:20', 'Administrator', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('18', '1', '2022-11-20 05:51:07', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('19', '1', '2022-11-20 06:23:53', 'Administrator', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('20', '1', '2022-11-20 06:24:17', 'Instructor', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('21', '1', '2022-11-20 06:24:50', 'Instructor', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('22', '1', '2022-11-20 06:24:54', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('23', '1', '2022-11-20 06:36:42', 'Administrator', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('24', '1', '2022-11-20 06:36:49', 'Instructor', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('25', '1000000205', '2022-11-20 06:48:05', 'Student', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('26', '1', '2022-11-20 06:48:49', 'Instructor', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('27', '1', '2022-11-20 06:48:54', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('28', '1000000206', '2022-11-20 06:50:14', 'Student', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('29', '1000000207', '2022-11-20 07:26:01', 'Student', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('30', '1', '2022-11-20 09:15:24', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('31', '1', '2022-11-20 10:15:46', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('32', '1', '2022-11-20 11:01:33', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('33', '1', '2022-11-20 11:21:25', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('34', '1', '2022-11-20 11:29:13', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('35', '1', '2022-11-20 12:45:21', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('36', '1', '2022-11-21 02:24:13', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('37', '1', '2022-11-21 02:24:37', 'Administrator', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('38', '1', '2022-11-21 02:24:46', 'Instructor', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('39', '1', '2022-11-21 02:28:35', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('40', '1', '2022-11-21 02:34:36', 'Instructor', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('41', '1', '2022-11-21 02:34:42', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('42', '1', '2022-11-21 03:01:31', 'Administrator', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('43', '1', '2022-11-21 03:01:40', 'Instructor', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('44', '1', '2022-11-21 03:10:14', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('45', '1', '2022-11-21 03:20:05', 'Administrator', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('46', '1', '2022-11-21 03:20:15', 'Instructor', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('47', '1000000212', '2022-11-21 03:21:58', 'Student', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('48', '1', '2022-11-21 03:25:19', 'Instructor', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('49', '1', '2022-11-21 03:25:43', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('50', '1000000213', '2022-11-21 03:28:09', 'Student', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('51', '1000000213', '2022-11-21 03:29:40', 'Student', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('52', '1000000206', '2022-11-21 04:22:29', 'Student', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('53', '1000000212', '2022-11-21 04:23:07', 'Student', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('54', '1', '2022-11-21 04:26:56', 'Administrator', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('55', '1', '2022-11-21 04:27:07', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('56', '1', '2022-11-21 04:27:15', 'Instructor', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('57', '1', '2022-11-21 04:27:43', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('58', '1', '2022-11-21 04:30:59', 'Instructor', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('59', '1', '2022-11-21 04:31:10', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('60', '1', '2022-11-21 04:31:12', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('61', '1', '2022-11-21 04:32:06', 'Instructor', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('62', '1', '2022-11-21 04:41:34', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('63', '1', '2022-11-21 04:43:57', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('64', '1', '2022-11-21 04:46:25', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('65', '1000000212', '2022-11-21 04:47:03', 'Student', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('66', '1', '2022-11-21 05:05:51', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('67', '1', '2022-11-21 05:19:53', 'Administrator', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('68', '1', '2022-11-21 05:20:09', 'Instructor', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('69', '1', '2022-11-21 05:21:20', 'Instructor', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('70', '1', '2022-11-21 05:24:05', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('71', '1000000212', '2022-11-21 06:53:19', 'Student', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('72', '1', '2022-11-21 06:57:37', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('73', '1000000206', '2022-11-21 09:09:52', 'Student', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('74', '1000000206', '2022-11-21 09:15:53', 'Student', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('75', '1', '2022-11-21 09:23:46', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('76', '1', '2022-11-21 09:32:35', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('77', '1', '2022-11-21 09:33:16', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('78', '1', '2022-11-21 09:45:51', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('79', '1', '2022-11-21 09:48:45', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('80', '1', '2022-11-21 09:50:26', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('81', '1', '2022-11-21 09:56:29', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('82', '1000000212', '2022-11-21 09:57:07', 'Student', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('83', '1', '2022-11-21 10:00:47', 'Administrator', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('84', '1', '2022-11-21 10:00:59', 'Instructor', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('85', '1', '2022-11-21 10:01:40', 'Instructor', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('86', '1', '2022-11-21 10:01:48', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('87', '1', '2022-11-21 10:03:46', 'Administrator', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('88', '1', '2022-11-21 10:04:39', 'Instructor', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('89', '1000000212', '2022-11-21 10:04:54', 'Student', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('90', '1', '2022-11-21 10:05:53', 'Instructor', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('91', '1', '2022-11-21 10:06:03', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('92', '1000000206', '2022-11-21 10:08:30', 'Student', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('93', '1000000212', '2022-11-21 10:08:38', 'Student', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('94', '1', '2022-11-21 10:09:57', 'Administrator', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('95', '1', '2022-11-21 10:10:05', 'Instructor', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('96', '1', '2022-11-21 10:10:52', 'Administrator', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('97', '1', '2022-11-21 10:11:13', 'Instructor', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('98', '1', '2022-11-21 10:13:51', 'Instructor', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('99', '1', '2022-11-21 10:14:00', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('100', '1', '2022-11-21 10:17:55', 'Administrator', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('101', '1', '2022-11-21 10:18:36', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('102', '1', '2022-11-21 10:20:20', 'Administrator', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('103', '1000000206', '2022-11-21 10:20:31', 'Student', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('104', '35', '2022-11-21 10:20:35', 'Instructor', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('105', '35', '2022-11-21 10:21:10', 'Instructor', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('106', '1', '2022-11-21 10:21:16', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('107', '1', '2022-11-21 10:27:18', 'Administrator', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('108', '35', '2022-11-21 10:27:48', 'Instructor', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('109', '1', '2022-11-21 10:30:53', 'Instructor', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('110', '35', '2022-11-21 10:32:19', 'Instructor', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('111', '1', '2022-11-21 10:32:30', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('112', '1', '2022-11-21 10:35:37', 'Instructor', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('113', '1000000206', '2022-11-21 10:37:12', 'Student', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('114', '1', '2022-11-21 10:52:50', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('115', '1000000215', '2022-11-21 11:11:04', 'Student', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('116', '1000000206', '2022-11-21 11:17:22', 'Student', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('117', '1', '2022-11-21 11:22:24', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('118', '1', '2022-11-21 11:23:30', 'Administrator', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('119', '1', '2022-11-21 11:23:35', 'Instructor', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('120', '1', '2022-11-21 11:28:37', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('121', '1', '2022-11-21 11:31:04', 'Instructor', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('122', '1', '2022-11-21 11:32:12', 'Administrator', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('123', '1', '2022-11-21 11:37:15', 'Administrator', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('124', '1', '2022-11-21 11:37:37', 'Instructor', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('125', '1', '2022-11-21 11:42:00', 'Instructor', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('126', '1', '2022-11-21 11:42:10', 'Instructor', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('127', '1000000214', '2022-11-21 11:44:09', 'Student', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('128', '1000000216', '2022-11-21 12:24:48', 'Student', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('129', '1000000216', '2022-11-21 12:25:45', 'Student', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('130', '1', '2022-11-21 12:25:56', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('131', '1', '2022-11-21 12:26:51', 'Administrator', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('132', '1', '2022-11-21 12:26:56', 'Instructor', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('133', '1', '2022-11-21 12:27:08', 'Instructor', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('134', '1', '2022-11-21 12:27:14', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('135', '1', '2022-11-21 12:30:00', 'Administrator', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('136', '1', '2022-11-21 12:30:04', 'Instructor', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('137', '1', '2022-11-21 12:31:30', 'Instructor', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('138', '1', '2022-11-21 12:32:57', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('139', '1', '2022-11-21 12:34:15', 'Administrator', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('140', '4', '2022-11-21 12:34:25', 'Registrar', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('141', '1', '2022-11-21 12:40:10', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('142', '1', '2022-11-21 12:47:03', 'Administrator', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('143', '1', '2022-11-21 12:48:56', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('144', '1', '2022-11-21 12:49:55', 'Administrator', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('145', '36', '2022-11-21 12:50:06', 'Instructor', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('146', '36', '2022-11-21 12:51:48', 'Instructor', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('147', '1000000214', '2022-11-21 12:59:13', 'Student', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('148', '1', '2022-11-21 13:13:42', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('149', '1', '2022-11-21 13:16:41', 'Administrator', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('150', '1', '2022-11-21 13:16:51', 'Instructor', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('151', '1', '2022-11-21 13:31:54', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('152', '1000000214', '2022-11-21 13:37:49', 'Student', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('153', '4', '2022-11-21 13:38:21', 'Registrar', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('154', '4', '2022-11-21 13:40:55', 'Registrar', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('155', '1', '2022-11-21 13:41:06', 'Instructor', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('156', '1', '2022-11-21 13:41:36', 'Instructor', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('157', '1', '2022-11-21 13:41:43', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('158', '1', '2022-11-21 13:42:19', 'Administrator', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('159', '4', '2022-11-21 13:42:27', 'Registrar', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('160', '1', '2022-11-21 13:42:48', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('161', '1', '2022-11-21 13:43:06', 'Administrator', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('162', '6', '2022-11-21 13:43:09', 'Registrar', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('163', '1', '2022-11-21 13:44:35', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('164', '1', '2022-11-21 13:45:02', 'Administrator', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('165', '5', '2022-11-21 13:45:16', 'Registrar', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('166', '6', '2022-11-21 13:46:36', 'Registrar', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('167', '1', '2022-11-21 13:46:42', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('168', '1', '2022-11-21 13:47:11', 'Administrator', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('169', '7', '2022-11-21 13:47:14', 'Registrar', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('170', '1000000217', '2022-11-21 13:48:01', 'Student', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('171', '1', '2022-11-21 13:56:34', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('172', '1', '2022-11-21 14:02:27', 'Administrator', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('173', '37', '2022-11-21 14:02:41', 'Instructor', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('174', '37', '2022-11-21 14:03:23', 'Instructor', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('175', '5', '2022-11-21 14:11:23', 'Registrar', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('176', '1000000214', '2022-11-21 15:34:06', 'Student', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('177', '1', '2022-11-21 15:34:24', 'Instructor', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('178', '1', '2022-11-21 15:36:16', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('179', '1', '2022-11-21 15:52:33', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('180', '1', '2022-11-21 16:15:58', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('181', '1', '2022-11-21 16:29:12', 'Administrator', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('182', '37', '2022-11-21 16:29:24', 'Instructor', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('183', '37', '2022-11-21 16:30:18', 'Instructor', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('184', '7', '2022-11-21 22:07:01', 'Registrar', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('185', '1', '2022-11-21 22:07:15', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('186', '1', '2022-11-21 22:17:54', 'Administrator', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('187', '1', '2022-11-21 22:18:35', 'Instructor', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('188', '1', '2022-11-21 22:19:42', 'Instructor', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('189', '7', '2022-11-21 22:19:59', 'Registrar', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('190', '1', '2022-11-22 05:28:41', 'Administrator', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('191', '1', '2022-11-22 05:29:35', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('192', '1000000220', '2022-11-22 05:39:33', 'Student', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('193', '1000000221', '2022-11-22 05:40:55', 'Student', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('194', '1', '2022-11-22 10:33:03', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('195', '1', '2022-11-22 10:38:01', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('196', '1', '2022-11-22 11:28:33', 'Administrator', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('197', '1', '2022-11-22 13:33:28', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('198', '1000000216', '2022-11-22 13:34:24', 'Student', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('199', '1', '2022-11-22 13:40:55', 'Administrator', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('200', '4', '2022-11-22 13:41:02', 'Registrar', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('201', '1000000216', '2022-11-22 13:43:41', 'Student', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('202', '1000000222', '2022-11-22 14:37:44', 'Student', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('203', '4', '2022-11-22 14:39:31', 'Registrar', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('204', '1', '2022-11-22 14:39:36', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('205', '1', '2022-11-22 15:01:13', 'Administrator', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('206', '1', '2022-11-22 15:01:19', 'Instructor', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('207', '1', '2022-11-22 15:01:38', 'Instructor', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('208', '1', '2022-11-22 15:01:52', 'Instructor', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('209', '1', '2022-11-22 15:04:06', 'Instructor', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('210', '1', '2022-11-22 15:04:09', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('211', '1000000216', '2022-11-22 15:07:02', 'Student', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('212', '1', '2022-11-22 17:48:17', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('213', '1', '2022-11-22 18:12:41', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('214', '1', '2022-11-23 00:51:28', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('215', '1', '2022-11-23 00:59:37', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('216', '1000000214', '2022-11-23 01:09:02', 'Student', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('217', '1', '2022-11-23 01:09:59', 'Administrator', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('218', '1', '2022-11-23 01:10:45', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('219', '33', '2022-11-23 01:11:39', 'Instructor', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('220', '1000000214', '2022-11-23 01:13:04', 'Student', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('221', '1000000214', '2022-11-23 02:36:39', 'Student', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('222', '1000000214', '2022-11-23 02:36:51', 'Student', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('223', '33', '2022-11-23 03:22:40', 'Instructor', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('224', '1', '2022-11-23 03:22:46', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('225', '1', '2022-11-23 10:56:29', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('226', '1000000214', '2022-11-23 11:15:24', 'Student', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('227', '1', '2022-11-23 12:10:16', 'Administrator', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('228', '1', '2022-11-23 12:10:24', 'Instructor', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('229', '1', '2022-11-23 12:10:24', 'Instructor', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('230', '1', '2022-11-23 13:13:00', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('231', '1000000224', '2022-11-23 13:33:07', 'Student', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('232', '1', '2022-11-23 13:35:05', 'Administrator', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('233', '1', '2022-11-23 13:35:16', 'Instructor', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('234', '1', '2022-11-23 13:36:17', 'Instructor', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('235', '4', '2022-11-23 13:36:29', 'Registrar', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('236', '1', '2022-11-23 13:52:37', 'Instructor', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('237', '1', '2022-11-23 13:52:43', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('238', '1', '2022-11-23 17:19:02', 'Instructor', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('239', '1000000206', '2022-11-23 17:19:16', 'Student', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES ('240', '1000000214', '2022-11-23 17:28:37', 'Student', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('241', '1', '2022-11-23 17:30:36', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES ('242', '1000000214', '2022-11-23 17:35:08', 'Student', 'Logged out') ;
#
# End of data contents of table tbllogs
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Wednesday 23. November 2022 17:48 CET
# Hostname: localhost
# Database: `db_oees`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `course`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `grades`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `schoolyr`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `studentschedule`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `studentsubjects`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `subject`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tblauto`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tblinstructor`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tbllogs`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tblschedule`
# --------------------------------------------------------


#
# Delete any existing table `tblschedule`
#

DROP TABLE IF EXISTS `tblschedule`;


#
# Table structure of table `tblschedule`
#

CREATE TABLE `tblschedule` (
  `schedID` int(11) NOT NULL AUTO_INCREMENT,
  `TIME_FROM` varchar(90) NOT NULL,
  `TIME_TO` varchar(90) NOT NULL,
  `sched_time` varchar(30) NOT NULL,
  `sched_day` varchar(30) NOT NULL,
  `sched_sy` varchar(30) NOT NULL,
  `sched_room` varchar(30) NOT NULL,
  `SECTION` varchar(30) NOT NULL,
  `COURSE_ID` int(11) NOT NULL,
  `SUBJ_ID` int(11) NOT NULL,
  `INST_ID` int(11) NOT NULL,
  PRIMARY KEY (`schedID`),
  KEY `COURSE_ID` (`COURSE_ID`),
  KEY `SUBJ_ID` (`SUBJ_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 ;

#
# Data contents of table tblschedule (4 records)
#
 
INSERT INTO `tblschedule` VALUES ('1', '09:00 am', '03:00 pm', '09:00 am-03:00 pm', 'MWF', '2022-2023', '1', '1', '6', '1', '37') ; 
INSERT INTO `tblschedule` VALUES ('2', '03:00 pm', '04:00 am', '03:00 pm-04:00 am', 'MTWTF', '2022-2023', '1', '1', '1', '2', '33') ; 
INSERT INTO `tblschedule` VALUES ('4', '08:00 am', '09:00 am', '08:00 am-09:00 am', 'MWTF', '2022-2023', '1', '1', '1', '8', '35') ; 
INSERT INTO `tblschedule` VALUES ('6', '08:00 am', '09:00 am', '08:00 am-09:00 am', 'Mon - Fri', '2022-2023', '2', '1', '7', '9', '36') ;
#
# End of data contents of table tblschedule
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Wednesday 23. November 2022 17:48 CET
# Hostname: localhost
# Database: `db_oees`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `course`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `grades`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `schoolyr`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `studentschedule`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `studentsubjects`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `subject`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tblauto`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tblinstructor`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tbllogs`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tblschedule`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tblsitesettings`
# --------------------------------------------------------


#
# Delete any existing table `tblsitesettings`
#

DROP TABLE IF EXISTS `tblsitesettings`;


#
# Table structure of table `tblsitesettings`
#

CREATE TABLE `tblsitesettings` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Type` varchar(90) NOT NULL,
  `Description` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ;

#
# Data contents of table tblsitesettings (1 records)
#
 
INSERT INTO `tblsitesettings` VALUES ('1', 'SiteTitle', 'PHIL-ARK CHRISTIAN ACADEMY, INC.') ;
#
# End of data contents of table tblsitesettings
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Wednesday 23. November 2022 17:48 CET
# Hostname: localhost
# Database: `db_oees`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `course`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `grades`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `schoolyr`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `studentschedule`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `studentsubjects`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `subject`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tblauto`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tblinstructor`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tbllogs`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tblschedule`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tblsitesettings`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tblstuddetails`
# --------------------------------------------------------


#
# Delete any existing table `tblstuddetails`
#

DROP TABLE IF EXISTS `tblstuddetails`;


#
# Table structure of table `tblstuddetails`
#

CREATE TABLE `tblstuddetails` (
  `DETAIL_ID` int(11) NOT NULL AUTO_INCREMENT,
  `GUARDIAN` varchar(255) NOT NULL,
  `GUARDIAN_ADDRESS` varchar(255) NOT NULL DEFAULT '-',
  `GCONTACT` varchar(40) NOT NULL,
  `IDNO` int(30) NOT NULL,
  PRIMARY KEY (`DETAIL_ID`),
  KEY `IDNO` (`IDNO`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1 ;

#
# Data contents of table tblstuddetails (11 records)
#
 
INSERT INTO `tblstuddetails` VALUES ('1', 'marishel', '-', '123', '1000000214') ; 
INSERT INTO `tblstuddetails` VALUES ('2', 'Xena Paa', '-', '09519643434', '1000000215') ; 
INSERT INTO `tblstuddetails` VALUES ('3', 'Lorie', '-', '09202307979', '1000000216') ; 
INSERT INTO `tblstuddetails` VALUES ('4', 'lanie', '-', '09486462853', '1000000217') ; 
INSERT INTO `tblstuddetails` VALUES ('5', 'Monkey D. Dragon', '-', '09123456789', '1000000218') ; 
INSERT INTO `tblstuddetails` VALUES ('6', 'cha', '-', '09486462853', '1000000219') ; 
INSERT INTO `tblstuddetails` VALUES ('7', 'marishel', '-', '123', '1000000220') ; 
INSERT INTO `tblstuddetails` VALUES ('8', 'marishel', '-', '123', '1000000221') ; 
INSERT INTO `tblstuddetails` VALUES ('9', 'Lorie', '-', '123012730173', '1000000222') ; 
INSERT INTO `tblstuddetails` VALUES ('10', 'CHOCO', '-', '09123123823', '1000000223') ; 
INSERT INTO `tblstuddetails` VALUES ('11', 'wantutri', '-', '09359839219', '1000000224') ;
#
# End of data contents of table tblstuddetails
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Wednesday 23. November 2022 17:48 CET
# Hostname: localhost
# Database: `db_oees`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `course`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `grades`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `schoolyr`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `studentschedule`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `studentsubjects`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `subject`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tblauto`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tblinstructor`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tbllogs`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tblschedule`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tblsitesettings`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tblstuddetails`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tblstudent`
# --------------------------------------------------------


#
# Delete any existing table `tblstudent`
#

DROP TABLE IF EXISTS `tblstudent`;


#
# Table structure of table `tblstudent`
#

CREATE TABLE `tblstudent` (
  `S_ID` int(11) NOT NULL AUTO_INCREMENT,
  `IDNO` int(20) NOT NULL DEFAULT '0',
  `FNAME` varchar(40) NOT NULL DEFAULT '-',
  `LNAME` varchar(40) NOT NULL DEFAULT '-',
  `MNAME` varchar(40) NOT NULL DEFAULT '-',
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
  `ENROLLED` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`S_ID`),
  UNIQUE KEY `IDNO` (`IDNO`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1 ;

#
# Data contents of table tblstudent (11 records)
#
 
INSERT INTO `tblstudent` VALUES ('1', '1000000214', 'darwin', 'vigas', 'd', 'Male', '2002-01-05', 'lipa city', '', '0', 'filipino', 'catholic', '123', 'marawoy lipa city', 'darwin', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', 'Regular', '1', '1', '2', '-', '-', '-', '1', '0') ; 
INSERT INTO `tblstudent` VALUES ('2', '1000000215', 'Marilyn', 'Dela Cruz ', 'M', 'Female', '2011-02-02', 'Balete', '-', '0', '09519643434', 'Catholic', '09519643434', 'Balete', 'Marilyn', '448d68c31af00852d7799730cdddf8128f108f9b', 'Irregular', '1', '1', '1', 'student_image/images (3).png', '-', '-', '0', '0') ; 
INSERT INTO `tblstudent` VALUES ('3', '1000000216', 'joebert', 'bernal', 'm', 'Male', '2001-01-07', 'Lipa City', '', '0', 'Filipino', 'Roman Catholic', '09972608624', 'Purok6 , Lodlod Lipa City Batangas', 'joebert.bernal', 'c3fd13ad6033ddf043b4563409e7d065bf9fa0b1', 'Irregular', '1', '1', '1', 'student_image/......jpg', '-', '-', '0', '0') ; 
INSERT INTO `tblstudent` VALUES ('4', '1000000217', 'blessie', 'lirit', 'm', 'Female', '1999-10-12', 'balete', '-', '0', 'filipino', 'catholic', '09486462853', 'balete', 'blessie', 'a9e29da4929d11bd0e3fcabadbb1192b9093393c', 'New', '1', '1', '1', '-', '-', '-', '0', '0') ; 
INSERT INTO `tblstudent` VALUES ('5', '1000000218', 'LUFFYmONKEYONKEY4', 'Monkey', 'D', 'Female', '2011-02-02', 'Japan', '-', '0', '09123456789', 'None', '09123456789', 'Japan', 'luffy', '366f38ea85077c49b65e8fa78091ecd7a97291ef', 'New', '1', '1', '1', '-', '-', '-', '0', '0') ; 
INSERT INTO `tblstudent` VALUES ('6', '1000000219', 'baby', 'kulot', 'c', 'Female', '2051-02-01', 'balete', '-', '0', '09486462853', 'catholic', '09486462853', 'POBLACION BALETE BATANGAS', 'baby', '2627e02508efd84d7f3d8683629c46df5fc6335d', 'New', '1', '1', '6', '-', '-', '-', '0', '0') ; 
INSERT INTO `tblstudent` VALUES ('7', '1000000220', 'norman', 'newman', 'd', 'Female', '2010-02-02', 'lipa city', '-', '0', '123', 'catholic', '123', 'marawoy lipa city', 'norman', '4864ccb4939929874a71c5255d77f90846dede54', 'New', '1', '1', '1', '-', '-', '-', '0', '0') ; 
INSERT INTO `tblstudent` VALUES ('8', '1000000221', 'raiden ', 'shogun', 'd', 'Female', '2010-02-02', 'lipa city', '-', '0', '123', 'catholic', '123', 'marawoy lipa city', 'raiden', '52b1a37e360f4c22b8b2aa1e374b1afe1a7eff95', 'New', '1', '1', '1', '-', '-', '-', '0', '0') ; 
INSERT INTO `tblstudent` VALUES ('9', '1000000222', 'joebert1', 'bernal', 'M', 'Male', '2001-01-07', 'Lipa City', '-', '0', 'Filipino', 'Roman Catholic', '1283912832', 'Purok6 , Lodlod Lipa City Batangas', 'joebert.bernal00', '7323a5431d1c31072983a6a5bf23745b655ddf59', 'New', '1', '1', '1', '-', '-', '-', '0', '0') ; 
INSERT INTO `tblstudent` VALUES ('10', '1000000223', 'Star', 'Bucks', 'S', 'Female', '2011-02-02', 'SM LIPA', '-', '0', '09202139232', 'Roman Catholic', '09202139232', 'SM LIPA CITY', 'SB123', '85a7de6e270547e88998d71994b1464d01295177', 'New', '1', '1', '10', '-', '-', '-', '0', '0') ; 
INSERT INTO `tblstudent` VALUES ('11', '1000000224', 'Mark Joseph', 'Laylo', 'M', 'Male', '2001-12-09', 'Lipa City', '-', '0', 'Filipino', 'Roman Catholic', '09123456789', ' Pangao, Lipa City', 'mrkjsph1', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'New', '1', '1', '1', '-', '-', '-', '0', '0') ;
#
# End of data contents of table tblstudent
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Wednesday 23. November 2022 17:48 CET
# Hostname: localhost
# Database: `db_oees`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `course`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `grades`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `schoolyr`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `studentschedule`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `studentsubjects`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `subject`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tblauto`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tblinstructor`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tbllogs`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tblschedule`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tblsitesettings`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tblstuddetails`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tblstudent`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `useraccounts`
# --------------------------------------------------------


#
# Delete any existing table `useraccounts`
#

DROP TABLE IF EXISTS `useraccounts`;


#
# Table structure of table `useraccounts`
#

CREATE TABLE `useraccounts` (
  `ACCOUNT_ID` int(11) NOT NULL AUTO_INCREMENT,
  `ACCOUNT_NAME` varchar(255) NOT NULL DEFAULT '-',
  `ACCOUNT_USERNAME` varchar(255) NOT NULL DEFAULT '-',
  `ACCOUNT_PASSWORD` text NOT NULL,
  `ACCOUNT_TYPE` varchar(30) NOT NULL DEFAULT '-',
  `EMPID` int(11) NOT NULL DEFAULT '0',
  `USERIMAGE` varchar(255) NOT NULL DEFAULT '-',
  PRIMARY KEY (`ACCOUNT_ID`),
  UNIQUE KEY `ACCOUNT_USERNAME` (`ACCOUNT_USERNAME`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 ;

#
# Data contents of table useraccounts (6 records)
#
 
INSERT INTO `useraccounts` VALUES ('1', 'Josh Cadelina', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Administrator', '1234', 'photos/LoginRed.jpg') ; 
INSERT INTO `useraccounts` VALUES ('2', 'Norhan Alamada', 'norhan', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Registrar', '0', '') ; 
INSERT INTO `useraccounts` VALUES ('3', 'Joebert', 'joebert.bernal1', 'c3fd13ad6033ddf043b4563409e7d065bf9fa0b1', 'Administrator', '0', '-') ; 
INSERT INTO `useraccounts` VALUES ('4', 'Joebert1', 'joebert.bernal2', 'c3fd13ad6033ddf043b4563409e7d065bf9fa0b1', 'Registrar', '0', '-') ; 
INSERT INTO `useraccounts` VALUES ('5', 'anexa', 'anex', 'a68ce3b05ffeb6f5fbda93e1eeaa818911e84b87', 'Registrar', '0', '-') ; 
INSERT INTO `useraccounts` VALUES ('7', 's', 's', 'a0f1490a20d0211c997b44bc357e1972deab8ae3', 'Registrar', '0', '-') ;
#
# End of data contents of table useraccounts
# --------------------------------------------------------

