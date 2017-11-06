-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2017 at 09:29 PM
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
  `availability` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_science_table`
--

INSERT INTO `data_science_table` (`prefix`, `number`, `class`, `hours`, `availability`) VALUES
('CSC', 114, 'Introduction to Computer Science', 3, 'S/F'),
('CSC', 115, 'Programming I', 3, 'S/F'),
('CSC', 160, 'Computer Science Major Orientation Seminar', 1, 'S/F'),
('CSC', 215, 'Programming II', 3, 'S/F'),
('CSC', 218, 'Data Structures', 3, 'S/F');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
