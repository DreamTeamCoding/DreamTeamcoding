-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2017 at 06:39 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comp_sci_data_sciece`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_science_table`
--

CREATE TABLE `data_science_table` (
  `prefix` varchar(5) NOT NULL,
  `number` int(4) NOT NULL,
  `class` varchar(50) NOT NULL,
  `hours` int(2) NOT NULL,
  `availability` varchar(4) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_science_table`
--

INSERT INTO `data_science_table` (`prefix`, `number`, `class`, `hours`, `availability`, `type`) VALUES
('CSC', 114, 'Introduction to Computer Science', 3, 'S/F', 'CC'),
('CSC', 115, 'Introduction to Computer Science', 3, 'S/F', 'CC'),
('CSC', 160, 'Computer Science Major Orientation Seminar', 1, 'S/F', 'CC'),
('CSC', 215, 'Programming II', 3, 'S/F', 'CC'),
('CSC', 218, 'Data Structures', 3, 'S/F', 'CC'),
('CSC', 230, 'Object-Oriented Programming', 3, 'S/F', 'CC'),
('CSC', 260, 'Sophomore Seminar in Computer Science', 1, 'S/F', 'CC'),
('CSC', 314, 'Computer Architecture', 3, 'S/F', 'CC'),
('CSC', 325, 'Database and Intelligent Systems', 3, 'S/F', 'CC'),
('CSC', 335, 'Introdution to Web Design', 3, 'S/F', 'CC'),
('CSC', 401, 'Data Mining & Machine Learning', 3, 'S/F', 'CC'),
('CSC', 410, 'Net-Centric Computing', 3, 'S/F', 'CC'),
('CSC', 460, 'Senior Seminar in Computer Science', 2, 'S/F', 'CC'),
('CSC', 240, 'Introduction to Cybersecurity', 3, 'S/F', 'CE'),
('CSC', 300, 'Introdution to Mobile Robotics', 3, 'S/F', 'CE'),
('CSC', 315, 'Programming Languages', 3, 'S/F', 'CE'),
('CSC', 322, 'UNIX Administration & System Programming', 3, 'S/F', 'CE'),
('CSC', 409, 'Artificial Intelligence', 3, 'S/F', 'CE'),
('CSC', 412, 'Software Methodology & Engineering', 3, 'S/F', 'CE'),
('CSC', 413, 'System Analysis & Design', 3, 'S/F', 'CE'),
('CSC', 415, 'Computer Graphics', 3, 'S/F', 'CE'),
('CSC', 420, 'Operating System', 3, 'S/F', 'CE'),
('CSC', 421, 'Special Topics in Computer Science', 3, 'S/F', 'CE'),
('CSC', 430, 'Undergraduate Research in Computer Science', 3, 'S/F', 'CE'),
('CSC', 435, 'Advanced Web Design', 3, 'S/F', 'CE'),
('CSC', 452, 'Internship', 3, 'S/F', 'CE'),
('MATH', 360, 'Introduction to Cryptography & Data Security', 3, 'S/F', 'CE'),
('MATH', 410, 'Linear Optimization', 3, 'S/F', 'CE'),
('MATH', 165, 'Calculus I', 4, 'S/F', 'RAR'),
('MATH', 262, 'Discrete Methods', 3, 'S/F', 'RAR'),
('MATH', 351, 'Linear Algebra', 3, 'S/F', 'RAR'),
('CSC', 305, 'Introduction to Bioinformatics', 3, 'S/F', 'CCR'),
('CSC', 318, 'Algorithms', 3, 'S/F', 'CCR'),
('CSC', 414, 'Python Programming & Visualization', 3, 'S/F', 'CCR'),
('CSC', 451, 'Numerical & Symbolic Computing', 3, 'S/F', 'CCR'),
('MATH', 265, 'Calculus II', 4, 'S/F', 'CCE'),
('MATH', 267, 'Calculus III', 4, 'S/F', 'CCE'),
('MATH', 275, 'Foundation of Mathematics', 3, 'S/F', 'CCE'),
('MATH', 345, 'History of Mathematics', 3, 'S/F', 'CCE');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
