-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql206.byetcluster.com
-- Generation Time: Oct 17, 2021 at 10:28 AM
-- Server version: 5.7.35-38
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_28084319_cpct_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `name` varchar(255) NOT NULL,
  `email` varchar(30) NOT NULL,
  `passsword` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`name`, `email`, `passsword`) VALUES
('Priyank Agrawal', 'priyankagrawal76660@gmail.com', 'Course_edubin@345');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `cid` int(11) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `cimg` varchar(25) NOT NULL,
  `cdesc` varchar(50) NOT NULL,
  `cdur` int(11) NOT NULL,
  `cfees` int(11) NOT NULL,
  `c_up_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`cid`, `cname`, `cimg`, `cdesc`, `cdur`, `cfees`, `c_up_time`) VALUES
(11, 'Core Java', 'java.png', 'Complete java with project', 6, 2500, '2021-02-14 20:41:08'),
(12, 'Hyperext Markup Language', 'html.png', ' Complete html with project', 5, 7500, '2021-02-14 20:42:40'),
(13, 'Node JS', 'node.png', '   Complete java with project', 6, 2500, '2021-02-16 13:14:06'),
(14, 'Programmimg In C++', 'c++.jpg', 'Full knowledge of c++ with project', 3, 2500, '2021-02-28 17:54:37'),
(15, 'Programmimg In C', 'c.png', 'Full knowledge of c with project', 4, 7500, '2021-02-28 17:55:05'),
(16, 'Programming with Python', 'python.png', 'Full knowledge of PYTHON with project', 6, 6500, '2021-02-28 22:57:33'),
(17, 'React JS for Beginners', 'react.png', 'Full knowledge of REACT JS with project', 6, 7500, '2021-02-28 22:58:20'),
(18, 'Angular JS for Beginners', 'angular.png', 'Full knowledge of angular JS with project', 6, 9800, '2021-02-28 22:59:17'),
(19, 'Cascading Style Sheets(CSS)', 'css.jpg', 'Full knowledge of css with project', 2, 2500, '2021-02-28 23:00:17'),
(20, 'Bootstrap4 For Beginners', 'bootstrap.jpg', 'Full knowledge of bootstrap with project', 5, 6500, '2021-02-28 23:01:07'),
(21, 'Cloud Computing for Beginners', 'cc.jpg', 'Full knowledge of cloud computing with project', 8, 6500, '2021-02-28 23:02:12'),
(22, 'Web Scrapping For Beginners', 'web.jpg', 'Full knowledge of web Scrapping with project', 5, 6500, '2021-02-28 23:03:26'),
(23, 'Machine Learning ', 'ml.png', 'Full knowledge of ml with project', 5, 3500, '2021-02-28 23:04:13'),
(24, 'Internet Of Things( IOT )', 'iot.jpg', 'Full knowledge of iot with project', 2, 3600, '2021-02-28 23:05:02'),
(25, 'Ethical Hacking For Beginners', 'eh.jpg', 'Full knowledge of Ethical hacking with project', 5, 9800, '2021-02-28 23:05:56'),
(26, 'Javascript For Beginners', 'js.png', 'Full knowledge of js with project', 3, 5200, '2021-02-28 23:06:46'),
(27, 'Artificial Intelligence For Beginners', 'ai.jpg', 'Full knowledge of AI with project', 6, 10000, '2021-02-28 23:07:33');

-- --------------------------------------------------------

--
-- Table structure for table `enrolled_course`
--

CREATE TABLE `enrolled_course` (
  `eid` int(6) NOT NULL,
  `uid` int(6) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `uemail` varchar(50) NOT NULL,
  `cid` int(6) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `e_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(30) NOT NULL DEFAULT 'pending'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enrolled_course`
--

INSERT INTO `enrolled_course` (`eid`, `uid`, `uname`, `uemail`, `cid`, `cname`, `e_date`, `status`) VALUES
(13, 3, 'Priyank', 'priyankagrawal76660@gmail.com', 11, 'Core Java', '2021-06-06 01:09:13', 'pending'),
(2, 1, 'Mohit', 'mohitagawal76660@gmail.com', 12, 'Hyperext Markup Language', '2021-03-04 20:11:07', 'pending'),
(3, 1, 'Mohit', 'mohitagawal76660@gmail.com', 13, 'Node JS', '2021-03-04 20:14:48', 'pending'),
(5, 1, 'Mohit', 'mohitagawal76660@gmail.com', 15, 'Programmimg In C', '2021-03-04 20:24:17', 'pending'),
(6, 1, 'Mohit', 'mohitagawal76660@gmail.com', 15, 'Programmimg In C', '2021-03-04 20:24:25', 'pending'),
(7, 1, 'Mohit', 'mohitagawal76660@gmail.com', 16, 'Programming with Python', '2021-03-04 20:27:40', 'pending'),
(12, 3, 'Priyank', 'priyankagrawal76660@gmail.com', 13, 'Node JS', '2021-05-01 00:01:37', 'pending'),
(10, 3, 'Priyank', 'priyankagrawal76660@gmail.com', 19, 'Cascading Style Sheets(CSS)', '2021-03-06 10:36:22', 'approved'),
(11, 3, 'Priyank', 'priyankagrawal76660@gmail.com', 12, 'Hyperext Markup Language', '2021-03-07 23:10:43', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `otp_expire`
--

CREATE TABLE `otp_expire` (
  `user_email` varchar(30) NOT NULL,
  `otp` int(30) NOT NULL,
  `expire` int(30) NOT NULL,
  `dt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `otp_expire`
--

INSERT INTO `otp_expire` (`user_email`, `otp`, `expire`, `dt`) VALUES
('mohitagawal76660@gmail.com', 137985, 0, '2021-03-02 12:36:48'),
('priyankagrawal76660@gmail.com', 547830, 0, '2021-03-02 20:19:57'),
('mohitagawal76660@gmail.com', 525994, 0, '2021-03-02 20:27:53'),
('priyankagrawal76660@gmail.com', 438131, 0, '2021-03-02 20:30:05'),
('mayankjha796@gmail.com', 185308, 0, '2021-03-02 20:35:34'),
('agrawalpriyank68@gmail.com', 826058, 0, '2021-03-05 17:04:23'),
('agrawalpriyank68@gmail.com', 436346, 0, '2021-03-05 17:21:04'),
('agrawalpriyank68@gmail.com', 327032, 0, '2021-03-05 17:23:05'),
('agrawalpriyank68@gmail.com', 724682, 0, '2021-03-05 17:26:12'),
('agrawalpriyank68@gmail.com', 272897, 0, '2021-03-05 17:36:31'),
('nainagrawal567@gmail.com', 117056, 0, '2021-03-05 17:39:34'),
('agrawalpriyank68@gmail.com', 785189, 0, '2021-03-05 19:15:44'),
('agrawalpriyank68@gmail.com', 115325, 0, '2021-03-05 19:18:55'),
('agrawalpriyank68@gmail.com', 960586, 0, '2021-03-05 19:20:49'),
('agrawalpriyank68@gmail.com', 755883, 0, '2021-03-05 19:22:10'),
('agrawalpriyank68@gmail.com', 486993, 0, '2021-03-05 19:23:25'),
('agrawalpriyank68@gmail.com', 506658, 0, '2021-03-05 19:38:15'),
('agrawalpriyank68@gmail.com', 220327, 0, '2021-03-05 19:48:39'),
('agrawalpriyank68@gmail.com', 339749, 0, '2021-03-05 19:50:10'),
('mayankjha796@gmail.com', 535609, 0, '2021-03-06 04:10:30'),
('mayankjha796@gmail.com', 642437, 0, '2021-03-06 04:25:21');

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

CREATE TABLE `user_reg` (
  `uid` int(4) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `user_image` varchar(40) NOT NULL DEFAULT 'dummy.jpg',
  `email` varchar(30) NOT NULL,
  `mobile_no` bigint(12) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `reg_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `password` varchar(15) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'pending'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`uid`, `first_name`, `last_name`, `user_image`, `email`, `mobile_no`, `gender`, `city`, `state`, `country`, `reg_date`, `password`, `status`) VALUES
(3, 'Priyank', 'Agrawal', 'dummy.jpg', 'priyankagrawal76660@gmail.com', 8871820947, 'male', '  Bailhongal ', ' Karnat', ' India', '2021-02-08 11:40:50', '6969', 'approved'),
(23, 'Nancy', 'Agrawal', 'dummy.jpg', 'agrawalpriyank68@gmail.com', 8871820947, 'on', ' Gwalior', ' Madhya Pradesh', ' INDIA', '2021-03-05 19:50:02', '1111', 'approved'),
(25, 'mayank', 'jha', 'dummy.jpg', 'mayankjha796@gmail.com', 7970206397, 'on', ' Gwalior', ' Madhya Pradesh', ' INDIA', '2021-03-06 04:25:21', '123', 'pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`cid`),
  ADD UNIQUE KEY `cname` (`cname`);

--
-- Indexes for table `enrolled_course`
--
ALTER TABLE `enrolled_course`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `user_reg`
--
ALTER TABLE `user_reg`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `enrolled_course`
--
ALTER TABLE `enrolled_course`
  MODIFY `eid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_reg`
--
ALTER TABLE `user_reg`
  MODIFY `uid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
