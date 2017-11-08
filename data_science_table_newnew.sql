-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2017 at 05:29 PM
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
-- Database: `data science`
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
('CSC', 218, 'Data Structures', 3, 'S/F'),
('CSC', 230, 'Object-Oriented Programming', 3, 'N/A'),
('CSC', 260, 'Sophomore Seminar In Computer Science ', 1, 'N/'),
('CSC`', 314, 'Computer Architecture', 3, 'N/A'),
('CSC', 325, 'Database and Intelligent Systems', 3, ''),
('CSC', 335, 'Intodution To Web Design', 3, ''),
('CSC', 401, 'Data Mining and Machin Learning', 3, ''),
('CSC', 240, 'Introduction to Cybersecurity		', 3, ''),
('CSC', 300, 'Introdution to Mobile Robotics		', 3, ''),
('CSC', 315, 'Programming Languages		', 3, ''),
('CSC', 322, 'UNIX Administration & System Programming		', 3, ''),
('CSC', 409, 'Artificial Intelligence		', 3, ''),
('CSC', 412, 'Software Methodology & Engineering		', 3, ''),
('CSC', 413, 'System Analysis & Design		', 3, ''),
('CSC', 415, 'Computer Graphics		', 3, ''),
('CSC', 420, 'Operating System		', 3, ''),
('CSC', 421, 'Special Topics in Computer Science		', 3, ''),
('CSC', 430, 'Undergraduate Research in Computer Science		', 3, ''),
('CSC', 435, 'Advanced Web Design		', 3, ''),
('CSC', 452, 'Internship		', 3, ''),
('CSC', 360, 'Introduction to Cryptography & Data Security		', 3, ''),
('CSC', 410, 'Linear Optimization		', 3, ''),
('CSC', 305, 'Introduction to Bioinformatics		', 3, ''),
('CSC', 318, 'Algorithms		', 3, ''),
('CSC', 414, 'Python Programming & Visualization		', 3, ''),
('CSC', 451, 'Numerical & Symbolic Computing		', 3, ''),
('MATH', 265, 'Calculus II		', 4, ''),
('MATH', 267, 'Calculus III		', 4, ''),
('MATH', 275, 'Foundation of Mathematics		', 3, ''),
('MATH', 345, 'History of Mathematics		', 3, ''),
('MATH', 350, 'Number Theory		', 3, ''),
('MATH', 352, 'College Algebra		', 3, ''),
('MATH', 354, 'Abstract Algebra I		', 3, ''),
('MATH', 358, 'Differential Equations		', 3, ''),
('MATH', 360, 'Applied Cryptography & Data Security		', 3, ''),
('MATH', 365, 'Junior Exit Seminar		', 3, ''),
('MATH', 366, 'Complex Variables		', 3, ''),
('MATH', 400, 'Operations Research Techniques		', 3, ''),
('MATH', 410, 'Operations Research Techniques		', 3, ''),
('MATH', 450, 'Advanced Calculus		', 3, ''),
('MATH', 452, 'Internship		', 3, ''),
('MATH', 454, 'Abstract Algebra II		', 3, ''),
('MATH', 455, 'Elements of Real Analysis		', 3, ''),
('MATH', 465, 'Exit Seminar in Mathematics		', 3, ''),
('BIOL', 101, 'General Biology for Majors I/Lab		', 4, ''),
('BIOL', 102, 'General Biology for Majors II/Lab		', 4, ''),
('BIOL', 210, 'Genetics/Lab		', 4, ''),
('BIOL', 220, 'General Zoology/Lab		', 4, ''),
('BIOL', 221, 'General Botany/Lab		', 4, ''),
('BIOL', 300, 'General Ecology/Lab		', 4, ''),
('CHEM', 103, 'General Chemistry I		', 3, ''),
('CHEM', 1031, 'General Chemistry I Lab		', 1, ''),
('CHEM', 102, 'General Chemistry II		', 3, ''),
('CHEM', 1021, 'General Chemistry II Lab		', 1, ''),
('CHEM', 200, 'Additional Topics in General Chemistry		', 3, ''),
('CHEM', 202, 'Quantiative Chemistry		', 3, ''),
('CHEM', 2021, 'Quantiative Chemistry Lab		', 1, ''),
('CHEM', 205, 'Inorganic Chemistry/Lab		', 4, ''),
('CHEM', 215, 'Introduction to Biomedical Science 		', 3, ''),
('CHEM', 219, 'Basic Principles of Research		', 3, ''),
('CHEM', 301, 'Organic Chemistry I		', 3, ''),
('CHEM', 3011, 'Organic Chemistry I/Lab		', 1, ''),
('CHEM', 302, 'Organic Chemistry II		', 3, ''),
('CHEM', 3021, 'Organic Chemistry II Lab		', 1, ''),
('PHYS', 181, 'University Physics I', 3, ''),
('PHYS', 191, 'University Physics ILab	', 1, ''),
('PHYS', 182, 'University Physics II', 3, ''),
('PHYS', 192, 'University Physics II Lab	', 1, ''),
('STAT', 351, 'Probability & Statistics I', 3, ''),
('CSC', 460, 'Senior Siminar', 2, ''),
('CSC', 410, 'Net- Centric ', 3, '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
