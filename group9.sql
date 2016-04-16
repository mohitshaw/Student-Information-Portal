-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2016 at 09:16 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `mname` text,
  `lname` text NOT NULL,
  `contact` text NOT NULL,
  `birthday` date NOT NULL,
  `age` text NOT NULL,
  `gender` varchar(7) NOT NULL,
  `image` varchar(100) NOT NULL,
  `hobbies` varchar(255) NOT NULL,
  `reg_no` varchar(50) NOT NULL,
  `dept` text NOT NULL,
  `roll_no` text NOT NULL,
  `sem` text NOT NULL,
  `percent1` varchar(6) NOT NULL,
  `percent2` varchar(6) NOT NULL,
  `cgpa` varchar(6) NOT NULL,
  `email` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `valid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `fname`, `mname`, `lname`, `contact`, `birthday`, `age`, `gender`, `image`, `hobbies`, `reg_no`, `dept`, `roll_no`, `sem`, `percent1`, `percent2`, `cgpa`, `email`, `username`, `password`, `valid`) VALUES
(1, 'mohit', '', 'shaw', '9239286956', '1994-11-04', '21 Years, 4 Months and 22 Days ', 'male', 'mohit_habibpur.jpg', 'Music,Reading,Soccer,', '20130499', 'Information Technology', '13/IT/28', 'Sixth Sem', '93.1', '77.0', '8.00', 'mohitshaw2@gmail.com', 'mohit', '963963963', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
