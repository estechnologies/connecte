-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Apr 20, 2016 at 09:42 AM
-- Server version: 5.5.48-cll
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `connecte_timer`
--

-- --------------------------------------------------------

--
-- Table structure for table `AddUser`
--

CREATE TABLE IF NOT EXISTS `AddUser` (
  `UId` int(11) NOT NULL AUTO_INCREMENT,
  `UserId` varchar(10) NOT NULL,
  `Salutation` varchar(10) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `date_of_birth` varchar(20) NOT NULL,
  `Joiningdate` varchar(20) NOT NULL,
  `email1` varchar(50) NOT NULL,
  `number` varchar(12) NOT NULL,
  `pancard_number` varchar(12) NOT NULL,
  `Designation` varchar(50) NOT NULL,
  `Employeephoto` varchar(300) NOT NULL,
  `ProjectName` varchar(50) NOT NULL,
  `password` varchar(300) NOT NULL,
  `ViewLogs` varchar(5) NOT NULL,
  `ApplyLeaves` varchar(5) NOT NULL,
  `ApproveLeaves` varchar(5) NOT NULL,
  `ApprovedBy` varchar(5) NOT NULL,
  `approveadmin` varchar(10) NOT NULL,
  `ApprovingEmployeeId` varchar(10) NOT NULL,
  `code` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `away` varchar(100) NOT NULL,
  PRIMARY KEY (`UId`),
  KEY `fk_code` (`code`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `AddUser`
--

INSERT INTO `AddUser` (`UId`, `UserId`, `Salutation`, `UserName`, `date_of_birth`, `Joiningdate`, `email1`, `number`, `pancard_number`, `Designation`, `Employeephoto`, `ProjectName`, `password`, `ViewLogs`, `ApplyLeaves`, `ApproveLeaves`, `ApprovedBy`, `approveadmin`, `ApprovingEmployeeId`, `code`, `status`, `away`) VALUES
(17, 'C1001', 'Mr', 'user1', '1990-02-01', '2016-03-17', 'vahini.priya91@gmail.com', '7894561235', 'ANMPC4236A', 'Test Engineer', 'http://user.connectemployee.com/uploads/1345-logo.png', 'Project1', 'e8f1ee14c7f850cb76d03a3a68ac857c', '1', '1', '1', '', '', 'C1001', 'C1', '', ''),
(28, 'ar1', 'Mr', 'arya', '1980-02-01', '2010-02-02', 'aryan.kingrockzz@gmail.com', '9966526462', 'ATUPT3969Q', 'programmer', '', 'testing', 'f0a201dd94bbc89efd606e78a61c6924', '1', '1', '1', '1', 'admin', '', 'ar', 'LOGOUT', ''),
(23, 'C1002', 'Mr', 'user2', '1981-03-06', '2016-03-03', 'vahini1234576433@gmail.com', '3243223432', 'ANMPC3433A', 'test', 'http://user.connectemployee.com/uploads/7391-desert.jpg', 'yodhaa', 'e8f1ee14c7f850cb76d03a3a68ac857c', '1', '1', '1', '1', '', 'C1001', 'C1', '', ''),
(27, 'es02', 'Mrs', 'Sridevi', '1992-06-19', '2015-05-28', 'buddalasridevi413@gmail.com', '8121248867', 'BDBPB4334Q', 'Developer', '', 'Connect Employee', 'f0a201dd94bbc89efd606e78a61c6924', '1', '1', '1', '1', '', '', 'ES', 'LOGOUT', ''),
(24, 'C301', 'Mr', 'krishna', '1990-01-31', '2016-04-01', 'vahini.priya91sadhjfgdfjgbj@fdf.com', '2222222222', 'ANMPC7865A', 'test', 'http://user.connectemployee.com/uploads/7204-butterfly.jpg', 'project 1', 'e8f1ee14c7f850cb76d03a3a68ac857c', '1', '1', '1', '1', '', 'C302', 'C3', 'LOGOUT', ''),
(26, 'es01', 'Mr', 'Ethender', '1986-02-05', '2016-04-21', 'ethender.99665262@gmail.com', '9966525462', 'ATUPT3969Q', 'PHP Developer', '', 'Connect Employee', 'f0a201dd94bbc89efd606e78a61c6924', '1', '1', '1', '1', 'admin', 'es01', 'ES', 'LOGOUT', '3'),
(29, 'es03', 'Mrs', 'ESTechnologies', '1992-06-19', '2015-05-28', 'sridevi.narisetti@yodhaa.com', '9848848867', 'BPBPB4557Q', 'Developer', '', 'Connect Employee', 'f0a201dd94bbc89efd606e78a61c6924', '1', '1', '1', '1', 'user', 'es02', 'ES', '', ''),
(30, 'C401', 'Mr', 'name1', '1990-01-31', '2016-04-06', 'hjsjfhsdjkhfjk@gmail.com', '1111111111', 'ANMPC7865A', 'tester', 'http://user.connectemployee.com/uploads/8460-butterfly.jpg', 'project1', 'e8f1ee14c7f850cb76d03a3a68ac857c', '1', '1', '1', '1', 'admin', '', ' C4', '', ''),
(31, 'C402', 'Miss', 'vahini', '1990-03-02', '2016-04-01', 'hjkjshfisdjgjhkdf@gmail.com', '1111111111', 'ANMPC7865A', 'tester', 'http://user.connectemployee.com/uploads/5603-city.jpg', 'pro3', 'e8f1ee14c7f850cb76d03a3a68ac857c', '1', '1', '1', '1', 'user', 'C401', ' C4', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `ContactMessages`
--

CREATE TABLE IF NOT EXISTS `ContactMessages` (
  `CM_Id` int(11) NOT NULL AUTO_INCREMENT,
  `time` varchar(50) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL,
  PRIMARY KEY (`CM_Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

-- --------------------------------------------------------

--
-- Table structure for table `HolidayList`
--

CREATE TABLE IF NOT EXISTS `HolidayList` (
  `HId` int(11) NOT NULL AUTO_INCREMENT,
  `Holidayname` varchar(50) NOT NULL,
  `date` varchar(20) NOT NULL,
  `companyCode` varchar(100) NOT NULL,
  PRIMARY KEY (`HId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `HolidayList`
--

INSERT INTO `HolidayList` (`HId`, `Holidayname`, `date`, `companyCode`) VALUES
(10, 'holi', '24 March 2016', '59'),
(15, 'Ugadi', '08 April 2016', 'C1'),
(12, 'Holi', '24 March 2016', 'c3'),
(6, 'diwali', '04 November 2016', '59'),
(13, 'Sankranthi', '31 March 2016', 'c3'),
(8, 'dasara', '03 March 2016', 'company2'),
(18, 'Company birthday', '17 March 2016', 'C1'),
(22, 'diwali', '27 April 2016', 'company2'),
(23, 'today', '05 April 2016', 'company2'),
(24, 'Dasara', '06 October 2016', 'ES'),
(25, 'Ugadi', '15 April 2016', ' C4'),
(26, 'extra', '02 April 2016', ' C4');

-- --------------------------------------------------------

--
-- Table structure for table `LeavesType`
--

CREATE TABLE IF NOT EXISTS `LeavesType` (
  `LId` int(11) NOT NULL AUTO_INCREMENT,
  `companyCode` varchar(100) NOT NULL,
  `leaveName` varchar(100) NOT NULL,
  `leaves` varchar(100) NOT NULL,
  PRIMARY KEY (`LId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `LeavesType`
--

INSERT INTO `LeavesType` (`LId`, `companyCode`, `leaveName`, `leaves`) VALUES
(17, 'C1', 'EL', '10'),
(30, 'company2', 'CL', '10'),
(16, 'C1', 'CL', '10'),
(12, '59', 'Work from home', '15'),
(23, 'C3', 'CL', '12'),
(31, 'ES', 'CL', '2'),
(32, 'ES', 'SL', '1'),
(34, ' C4', 'CL', '19');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(300) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'e00cf25ad42683b3df678c61f42c6bda');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `empId` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `message` varchar(400) NOT NULL,
  `code` varchar(100) NOT NULL,
  `photo` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=63 ;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `empId`, `username`, `message`, `code`, `photo`) VALUES
(30, '-1', 'company1', 'Welcome to Employee Connect..Please share your queries here....', 'C1', ''),
(31, 'C1001', 'user1', 'How do i apply my leave request sir??', 'C1', ''),
(32, 'C1001', 'user1', 'Hi', 'C1', ''),
(33, 'C1001', 'user1', 'Hello', 'C1', ''),
(34, '-1', 'admin', 'hi', 'company2', ''),
(35, '-1', 'admin', 'hello', 'company2', ''),
(36, '-1', 'admin', 'hello,world', 'company2', ''),
(37, '-1', 'admin', 'same here', 'company2', ''),
(38, '-1', 'admin', 'hello2', 'company2', ''),
(39, '1', 'arya', 'emp check', 'company2', ''),
(40, '1', 'arya', 'hai', 'company2', ''),
(41, '1', 'arya', ' check emp', 'company2', ''),
(42, '-1', 'admin', 'check admin', 'company2', ''),
(43, '1', 'arya', 'test msg', 'company2', ''),
(62, '-1', 'ESTechnologies', 'hello', 'ES', ''),
(48, 'ar1', 'arya', 'hello', 'ar', ''),
(49, 'ar1', 'arya', 'h1', 'ar', ''),
(50, 'ar1', 'arya', 'hll', 'ar', ''),
(51, 'ar1', 'arya', 'hello', 'ar', ''),
(52, 'ar1', 'arya', 'check1', 'ar', ''),
(61, '-1', 'ESTechnologies', 'Testing', 'ES', ''),
(55, '-1', 'company3', 'hi', 'C3', ''),
(56, '-1', 'company3', 'welcome to connect employee', 'C3', ''),
(57, '-1', 'company4', 'Welcome to connect employee', ' C4', ''),
(58, '-1', 'company4', 'hi', ' C4', '');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `cmpId` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `code` varchar(300) NOT NULL,
  `type` varchar(300) NOT NULL,
  `address` varchar(300) NOT NULL,
  `number` varchar(100) NOT NULL,
  `personname` varchar(100) NOT NULL,
  `personemail` varchar(100) NOT NULL,
  `personnumber` varchar(100) NOT NULL,
  `numberUsers` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(300) NOT NULL,
  `activeUsers` varchar(100) NOT NULL,
  `accessyear` date NOT NULL,
  `amount` varchar(100) NOT NULL,
  PRIMARY KEY (`cmpId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`cmpId`, `name`, `code`, `type`, `address`, `number`, `personname`, `personemail`, `personnumber`, `numberUsers`, `username`, `password`, `activeUsers`, `accessyear`, `amount`) VALUES
(26, 'ES Technologies', 'ES', 'IT ', 'Hitech city', '04099999999', 'Sridevi', 'buddalasridevi@gmail.com', '9999999999', '3', 'ESTechnologies', 'f0a201dd94bbc89efd606e78a61c6924', '', '2016-04-15', '200'),
(25, 'company3', 'C3', 'Information technology', 'address1', '111111111111111', 'Vahini', 'vahini.priya9134@gmail.com', '1111111111', '2', 'company3', 'e828ae3339b8d80b3902c1564578804e', '', '2016-04-30', '1111'),
(21, 'Company1', 'C1', 'IT', 'address1', '7894561237', 'Company1', 'vahini.chandrabhatla@yash.com', '8754693214', '3', 'company1', 'df655f976f7c9d3263815bd981225cd9', '', '2016-06-30', '564'),
(27, 'ethender', 'ar', 'it', 'hitec city', '9966526462', 'ethender', 'ethender.9966526462@gmail.com', '9966526462', '10', 'arya', 'f0a201dd94bbc89efd606e78a61c6924', '', '2016-04-15', '100'),
(28, 'company4', ' C4', 'IT', 'address4', '111111344554454', 'company4', 'company4asdfg@gmail.com', '1111111111', '2', 'company4', '856dfd9045541fa727ef6ad392835eb0', '', '2016-04-14', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `empLeaves`
--

CREATE TABLE IF NOT EXISTS `empLeaves` (
  `elid` int(11) NOT NULL AUTO_INCREMENT,
  `startdate` datetime NOT NULL,
  `enddate` datetime NOT NULL,
  `halffull` varchar(100) NOT NULL,
  `days` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `reason` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `userid` varchar(100) NOT NULL,
  `code` varchar(100) NOT NULL,
  `leavetype` varchar(100) NOT NULL,
  `approvalBy` varchar(100) NOT NULL,
  PRIMARY KEY (`elid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `empLeaves`
--

INSERT INTO `empLeaves` (`elid`, `startdate`, `enddate`, `halffull`, `days`, `subject`, `reason`, `status`, `userid`, `code`, `leavetype`, `approvalBy`) VALUES
(29, '2016-04-06 00:00:00', '2016-04-06 00:00:00', '', '1', 'mbcnx', 'cvnvhgvgn', 'Pending', 'C301', 'C3', 'CL', 'C302'),
(28, '2016-04-06 00:00:00', '2016-04-06 00:00:00', '', '0', 'goog', 'facebook', 'Cancelled by user', '1', 'company2', 'CL', 'admin'),
(27, '2016-04-06 00:00:00', '2016-04-07 00:00:00', '', '2', 'mbcnx', 'HJFS', 'Approved', '1', 'company2', 'CL', 'admin'),
(33, '2016-04-12 00:00:00', '2016-04-13 00:00:00', '', '0', 'xxxxxxxxx', 'testing', 'Cancelled by user', 'es03', 'ES', 'CL', 'es02'),
(31, '2016-04-12 00:00:00', '2016-04-14 00:00:00', '', '0', 'testing', '5766666666666', 'Cancelled by user', 'es03', 'ES', 'CL', 'es02'),
(32, '2016-04-13 00:00:00', '2016-04-13 00:00:00', '', '0', 'testing', 'xxxxxxxxxxxxxxxxxx', 'Cancelled by user', 'es03', 'ES', 'CL', 'es02'),
(34, '2016-04-12 00:00:00', '2016-04-13 00:00:00', '', '0', '455555555555', 'r', 'Cancelled by user', 'es03', 'ES', 'CL', 'es02'),
(35, '2016-04-12 00:00:00', '2016-04-12 00:00:00', '', '1', 'testing', 'xxxxxxxxxxx', 'Pending', 'es03', 'ES', 'CL', 'es02');

-- --------------------------------------------------------

--
-- Table structure for table `empLogins`
--

CREATE TABLE IF NOT EXISTS `empLogins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `empid` varchar(100) NOT NULL,
  `logintime` datetime NOT NULL,
  `logouttime` datetime NOT NULL,
  `awaycounter` varchar(100) NOT NULL,
  `companyCode` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

--
-- Dumping data for table `empLogins`
--

INSERT INTO `empLogins` (`id`, `date`, `empid`, `logintime`, `logouttime`, `awaycounter`, `companyCode`) VALUES
(46, '2016-04-07 17:41:58', '1', '2016-04-07 17:42:05', '2016-04-07 17:42:10', '0', 'company2'),
(47, '2016-04-07 17:46:25', '1', '2016-04-07 17:46:13', '2016-04-07 17:46:37', '0', 'company2'),
(48, '2016-04-07 17:48:04', 'C301', '2016-04-07 17:48:08', '2016-04-07 17:48:16', '0', 'C3'),
(49, '2016-04-07 17:51:26', '1', '2016-04-07 17:51:00', '2016-04-07 17:51:39', '0', 'company2'),
(50, '2016-04-11 15:14:16', 'ar1', '2016-04-11 15:13:16', '2016-04-11 15:14:35', '0', 'ar'),
(51, '2016-04-11 15:14:44', 'es01', '2016-04-11 15:14:52', '2016-04-11 15:15:02', '0', 'ES'),
(52, '2016-04-11 15:30:26', 'es01', '2016-04-11 15:17:19', '2016-04-11 15:30:45', '1', 'ES'),
(53, '2016-04-11 15:38:35', 'es02', '2016-04-11 15:13:29', '2016-04-11 15:38:20', '0', 'ES'),
(54, '2016-04-11 17:11:42', 'es01', '2016-04-11 16:51:12', '2016-04-11 17:12:02', '0', 'ES'),
(55, '2016-04-11 17:44:44', 'es01', '2016-04-11 17:13:02', '2016-04-11 17:45:04', '9', 'ES'),
(56, '2016-04-12 12:27:16', 'es01', '2016-04-12 10:33:22', '2016-04-12 12:27:38', '0', 'ES'),
(57, '2016-04-12 14:29:07', 'es02', '2016-04-12 11:11:19', '2016-04-12 14:28:47', '0', 'ES'),
(58, '2016-04-12 14:46:28', 'es01', '2016-04-12 14:36:30', '2016-04-12 14:46:43', '3', 'ES');

-- --------------------------------------------------------

--
-- Table structure for table `empProfile`
--

CREATE TABLE IF NOT EXISTS `empProfile` (
  `empid` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(300) NOT NULL,
  `status` varchar(100) NOT NULL,
  `away` varchar(100) NOT NULL,
  PRIMARY KEY (`empid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;

--
-- Dumping data for table `empProfile`
--

INSERT INTO `empProfile` (`empid`, `username`, `password`, `status`, `away`) VALUES
(1, 'demo', 'e368b9938746fa090d6afd3628355133', 'LOGOUT', '1');

-- --------------------------------------------------------

--
-- Table structure for table `forgot`
--

CREATE TABLE IF NOT EXISTS `forgot` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` varchar(100) NOT NULL,
  `tableName` varchar(100) NOT NULL,
  `code` varchar(100) NOT NULL,
  `time` datetime NOT NULL,
  `advance` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `forgot`
--

INSERT INTO `forgot` (`id`, `userId`, `tableName`, `code`, `time`, `advance`) VALUES
(1, '8', 'AddUser', '0000-00-00 00:00:00', '2016-03-22 16:43:27', '2016-03-22 16:58:27'),
(2, '8', 'AddUser', '0000-00-00 00:00:00', '2016-03-22 16:45:46', '2016-03-22 17:00:46'),
(3, '7', 'company', '0000-00-00 00:00:00', '2016-03-22 16:49:42', '2016-03-22 17:04:42'),
(4, '7', 'AddUser', '59', '2016-03-22 17:55:50', '2016-03-23 17:59:00'),
(5, '8', 'AddUser', '59', '2016-03-23 09:57:34', '2016-03-23 10:12:34'),
(6, '8', 'AddUser', '59', '2016-03-23 10:14:15', '2016-03-24 10:29:15'),
(7, '3', 'company', '100', '2016-03-23 13:38:37', '2016-03-23 13:53:37'),
(8, '12', 'AddUser', '59', '2016-03-23 16:36:25', '2016-03-23 16:51:25'),
(9, '20', 'company', '1', '2016-03-25 14:53:44', '2016-03-25 15:08:44'),
(10, '20', 'company', '1', '2016-03-25 14:55:37', '2016-03-25 15:30:37'),
(11, '20', 'company', '1', '2016-03-25 15:19:59', '2016-03-25 15:34:59'),
(12, '20', 'company', '1', '2016-03-25 15:45:30', '2016-03-25 16:00:30'),
(13, '21', 'company', 'C1', '2016-03-25 15:49:58', '2016-03-25 16:04:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `active` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `dateofbirth` date NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
