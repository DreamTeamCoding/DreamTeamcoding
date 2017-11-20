-- phpMyAdmin SQL Dump
-- version 4.4.15.8
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 13, 2017 at 06:25 PM
-- Server version: 5.6.31
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `information_systems`
--

-- --------------------------------------------------------

--
-- Table structure for table `info_systems_table`
--

CREATE TABLE IF NOT EXISTS `info_systems_table` (
  `prefix` varchar(5) NOT NULL,
  `number` int(4) NOT NULL,
  `class` varchar(50) NOT NULL,
  `hours` int(2) NOT NULL,
  `availability` varchar(4) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info_systems_table`
--

INSERT INTO `info_systems_table` (`prefix`, `number`, `class`, `hours`, `availability`, `type`) VALUES
('CSC', 114, 'Introduction to Computer Science', 3, 'S/F', 'CC'),
('CSC', 115, 'Programming I', 3, 'S/F', 'CC'),
('CSC', 160, 'Computer Science Major Orientation Seminar', 1, 'S/F', 'CC'),
('CSC', 215, 'Programming II', 3, 'S/F', 'CC'),
('CSC', 218, 'Data Structures', 3, 'S/F', 'CC'),
('CSC', 230, 'Object-Oriented Programming', 3, 'S/F', 'CC'),
('CSC', 260, 'Sophomore Seminar in Computer Science', 1, 'S/F', 'CC'),
('CSC', 314, 'Computer Architecture', 3, 'S/F', 'CC'),
('CSC', 325, 'Database and Intelligent Systems', 3, 'S/F', 'CC'),
('CSC', 335, 'Introduction to Web Design', 3, 'S/F', 'CC'),
('CSC', 401, 'Data Mining & Machine Learning', 3, 'S/F', 'CC'),
('CSC', 410, 'Net-Centric Computing', 3, 'S/F', 'CC'),
('CSC', 460, 'Senior Seminar in Computer Science', 2, 'S/F', 'CC'),
('CSC', 240, 'Introduction to Cybersecurity', 3, 'S/F', 'CE'),
('CSC', 300, 'Introdution to Mobile Robotics', 3, 'S/F', 'CE'),
('CSC', 305, 'Introduction to Bioinformatics', 3, 'S/F', 'CE'),
('CSC', 315, 'Programming Languages', 3, 'S/F', 'CE'),
('CSC', 318, 'Algorithms', 3, 'S/F', 'CE'),
('CSC', 322, 'UNIX Administration & System Programming', 3, 'S/F', 'CE'),
('CSC', 414, 'Python Visualization', 3, 'S/F', 'CE'),
('CSC', 409, 'Artificial Intelligence', 3, 'S/F', 'CE'),
('CSC', 412, 'Software Methodology & Engineering', 3, 'S/F', 'CE'),
('CSC', 413, 'System Analysis & Design', 3, 'S/F', 'CE'),
('CSC', 415, 'Computer Graphics', 3, 'S/F', 'CE'),
('CSC', 420, 'Operating System', 3, 'S/F', 'CE'),
('CSC', 421, 'Special Topics in Computer Science', 3, 'S/F', 'CE'),
('CSC', 430, 'Undergraduate Research in Computer Science', 3, 'S/F', 'CE'),
('CSC', 435, 'Advanced Web Design', 3, 'S/F', 'CE'),
('CSC', 451, 'Numerical & Symbolic Computing', 3, 'S/F', 'CE'),
('CSC', 452, 'Internship', 3, 'S/F', 'CE'),
('MATH', 360, 'Introduction to Cryptography & Data Security', 3, 'S/F', 'CE'),
('MATH', 410, 'Linear Optimization', 3, 'S/F', 'CE'),
('MATH', 165, 'Calculus I', 4, 'S/F', 'RAR'),
('MATH', 262, 'Discrete Methods', 3, 'S/F', 'RAR'),
('MATH', 351, 'Linear Algebra', 3, 'S/F', 'RAR'),
('BUAD', 115, 'Introduction to Business', 3, 'S/F', 'CCR'),
('BUAD', 190, 'Management Information Systems I', 3, 'S/F', 'CCR'),
('ACCT', 210, 'Financial Accounting', 3, 'S/F', 'CCR'),
('MNGT', 221, 'Principles of Management', 3, 'S/F', 'CCR'),
('BMIS', 380, 'Management Information Systems II', 3, 'S/F', 'CCR'),
('BMIS', 386, 'MIS System Analysis', 3, 'S/F', 'CCE'),
('BMIS', 485, 'Decision Support Systems', 3, 'S/F', 'CCE'),
('BMIS', 489, 'IS Project Management', 3, 'S/F', 'CCE');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
