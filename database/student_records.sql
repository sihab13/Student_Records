-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2023 at 10:55 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_records`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Password` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Admin_ID` varchar(30) NOT NULL,
  `admin_name` varchar(30) NOT NULL,
  `bath_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Password`, `Email`, `Admin_ID`, `admin_name`, `bath_date`) VALUES
('Password123', 'admin@gmail.com', '19202103032', 'Sihab Mahmud', '17-10-2000');

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `Receipt_No` varchar(30) NOT NULL,
  `Student_ID` varchar(30) NOT NULL,
  `Tuition_Fee` varchar(30) NOT NULL,
  `Date_of_Receipts` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`Receipt_No`, `Student_ID`, `Tuition_Fee`, `Date_of_Receipts`) VALUES
('ew343rere', '1001', '15000', '2023-08-07'),
('322xt34', '1001', '1000', '2023-12-01');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `Student_ID` varchar(30) NOT NULL,
  `SGPA` varchar(30) NOT NULL,
  `CGPA` varchar(30) NOT NULL,
  `Semester` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`Student_ID`, `SGPA`, `CGPA`, `Semester`) VALUES
('1001', '3.39', '3.15', 'fall'),
('1001', '3.78', '3.50', 'Fall, 2022');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Student_ID` varchar(30) NOT NULL,
  `fathers_name` varchar(30) NOT NULL,
  `mothers_name` varchar(30) NOT NULL,
  `Student_Name` varchar(30) NOT NULL,
  `date_of_birth` varchar(30) NOT NULL,
  `Gender` varchar(30) NOT NULL,
  `blood_group` varchar(30) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `Contact_Number` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Student_ID`, `fathers_name`, `mothers_name`, `Student_Name`, `date_of_birth`, `Gender`, `blood_group`, `Address`, `Contact_Number`, `Email`, `Password`) VALUES
('1001', 'Kamal Hossain', 'Mst. Hassina Khatun', 'Abdul Hadi', '2004-01-01', 'Male', 'B+', '   Address....', '01700000000', 'student1@gmail.com', 'Password123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
