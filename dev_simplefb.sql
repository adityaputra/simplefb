-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 12, 2015 at 07:49 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dev_simplefb`
--

-- --------------------------------------------------------

--
-- Table structure for table `COMMENT`
--

CREATE TABLE IF NOT EXISTS `COMMENT` (
  `status_username` varchar(40) NOT NULL,
  `status_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `username` varchar(40) NOT NULL,
  `content` varchar(160) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `COMMENT`
--

INSERT INTO `COMMENT` (`status_username`, `status_timestamp`, `username`, `content`, `timestamp`) VALUES
('username2', '2015-11-12 05:55:03', 'username', 'Can I comment too?', '2015-11-12 06:38:18'),
('username2', '2015-11-12 05:55:03', 'username2', 'test on my own status', '2015-11-12 06:02:49'),
('username2', '2015-11-12 05:55:03', 'username2', 'another comment by myself', '2015-11-12 06:33:14');

-- --------------------------------------------------------

--
-- Table structure for table `STATUS_UPDATE`
--

CREATE TABLE IF NOT EXISTS `STATUS_UPDATE` (
  `username` varchar(40) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `content` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `STATUS_UPDATE`
--

INSERT INTO `STATUS_UPDATE` (`username`, `timestamp`, `content`) VALUES
('username', '2015-11-12 01:27:22', 'YWRpdHlh'),
('username', '2015-11-12 01:27:25', 'YWRpdHlh'),
('username', '2015-11-12 01:59:02', 'YWRpdHlh'),
('username', '2015-11-12 02:02:04', 'YWRpdHlh'),
('username', '2015-11-12 02:02:27', 'YWRpdHlh'),
('username', '2015-11-12 02:03:04', 'YWRpdHlh'),
('username', '2015-11-12 02:04:02', 'c2ZzZGY='),
('username', '2015-11-12 02:05:52', 'aGVsbG8='),
('username', '2015-11-12 02:10:17', 'dGVzdA=='),
('username', '2015-11-12 02:54:17', 'AA=='),
('username', '2015-11-12 03:01:37', 'aGVsbG8lMjB0aGVyZSUyMSUwQXRoaXMlMjBpcyUyMG15JTIwZmlyc3QlMjBwb3N0'),
('username', '2015-11-12 03:17:58', 'dGhpcyUyMGlzJTIwbXklMjBzZWNvbmQlMjBwb3N0'),
('username', '2015-11-12 03:18:33', 'dGhpcyUyMGlzJTIwbXklMjB0aGlyZCUyMHBvc3Q='),
('username', '2015-11-12 05:29:47', 'aGVsbG8lMjB0aGVyZQ=='),
('username', '2015-11-12 05:53:57', 'YW5kJTIwdGhpcyUyMGlzJTIwbmFtZSUyMG9uZQ=='),
('username2', '2015-11-12 04:44:57', 'aGVsbG8lMkMlMjBob3clMjBhcmUlMjB5b3UlM0Y='),
('username2', '2015-11-12 05:53:43', 'aGVsbG8lMjBpdCUyMGlzJTIwbmFtZSUyMHR3bw=='),
('username2', '2015-11-12 05:55:03', 'dGVzdCUyMHN0YXR1cyUyMGFuZCUyMGNvbW1lbnQlMjBmcm9tJTIwbmFtZSUyMHR3bw==');

-- --------------------------------------------------------

--
-- Table structure for table `USER_ACCOUNT`
--

CREATE TABLE IF NOT EXISTS `USER_ACCOUNT` (
  `username` varchar(40) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `registration_date` date NOT NULL,
  `name` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `picture_loc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `USER_ACCOUNT`
--

INSERT INTO `USER_ACCOUNT` (`username`, `password`, `email`, `registration_date`, `name`, `birthday`, `address`, `city`, `province`, `country`, `picture_loc`) VALUES
('1', '1', '1', '0000-00-00', '1', '0000-00-00', '1', '1', '1', '1', '1\r\n'),
('username2', '6cb75f652a9b52798eb6cf2201057c73', 'email2@email.com', '0000-00-00', 'name two', '1991-02-02', 'address 2', 'city 2', 'province 2', 'country 2', 'c4f1e74d3852210367e8b496ee5253ca'),
('username', '5f4dcc3b5aa765d61d8327deb882cf99', 'email@email.com', '0000-00-00', 'name', '1991-12-30', 'address', 'city', 'province', 'country', '27a5349d8df472e7c713c030f09ac062');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `COMMENT`
--
ALTER TABLE `COMMENT`
 ADD PRIMARY KEY (`status_username`,`status_timestamp`,`username`,`timestamp`), ADD KEY `fk_grade_id` (`status_timestamp`);

--
-- Indexes for table `STATUS_UPDATE`
--
ALTER TABLE `STATUS_UPDATE`
 ADD PRIMARY KEY (`username`,`timestamp`), ADD KEY `username` (`username`,`timestamp`), ADD KEY `timestamp` (`timestamp`), ADD KEY `username_2` (`username`);

--
-- Indexes for table `USER_ACCOUNT`
--
ALTER TABLE `USER_ACCOUNT`
 ADD PRIMARY KEY (`email`), ADD UNIQUE KEY `username` (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `COMMENT`
--
ALTER TABLE `COMMENT`
ADD CONSTRAINT `COMMENT_ibfk_1` FOREIGN KEY (`status_username`) REFERENCES `STATUS_UPDATE` (`username`),
ADD CONSTRAINT `fk_grade_id` FOREIGN KEY (`status_timestamp`) REFERENCES `STATUS_UPDATE` (`timestamp`);

--
-- Constraints for table `STATUS_UPDATE`
--
ALTER TABLE `STATUS_UPDATE`
ADD CONSTRAINT `STATUS_UPDATE_ibfk_1` FOREIGN KEY (`username`) REFERENCES `USER_ACCOUNT` (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
