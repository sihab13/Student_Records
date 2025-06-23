-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2025 at 09:40 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`Receipt_No`, `Student_ID`, `Tuition_Fee`, `Date_of_Receipts`) VALUES
('19202103032', '1001', '15000', '2025-01-15'),
('19202104052', '1001', '5200', '2025-12-05');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `Student_ID` varchar(30) NOT NULL,
  `SGPA` varchar(30) NOT NULL,
  `CGPA` varchar(30) NOT NULL,
  `Semester` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`Student_ID`, `SGPA`, `CGPA`, `Semester`) VALUES
('1001', '3.15', '3.06', 'Fall 2025');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Student_ID`, `fathers_name`, `mothers_name`, `Student_Name`, `date_of_birth`, `Gender`, `blood_group`, `Address`, `Contact_Number`, `Email`, `Password`) VALUES
('1001', 'Mizan Hossain', 'Salma Begum', 'Anik Hossain', '2004-05-21', 'Male', 'O+', 'Dhaka', '01877171727', 'mizan@gmail.com', 'mizan1234'),
('1002', 'Kabir Rahman', 'Shirin Akter', 'Tania Rahman', '2003-11-09', 'Female', 'B+', '45, Agrabad, Chattogram', '01888883456', 'tania.rahman@gmail.com', ''),
('1003', 'Zahir Ahmed', ' Nasima Khatun', 'Rakib Ahmed', '2002-02-17', 'Male', 'O+', '12, Rajshahi Sadar, Rajshahi', '01999997890', 'rakib.a.bd@gmail.com', ''),
('1004', 'Mobarak Hossain', 'Sharmin Jahan', 'Sumaiya Akter', '2004-07-05', 'Female', 'AB+', '87, Khulna City, Khulna', '01745671234', 'sumaiya_akter@yahoo.com', ''),
('1005', 'Hasan Mahmud', 'Aleya Begum', 'Zubair Mahmud', '2005-01-30', 'Male', 'A-', '33, Barisal Road, Barisal', '01555556677', 'zubair.mahmud@gmail.com', ''),
('1006', 'Rezaul Karim', 'Farzana Yasmin', 'Mehnaz Sultana', '2004-12-12', 'Female', 'B-', '66, Bogura City, Bogura', '01777889900', 'mehnaz.s@gmail.com', ''),
('1007', 'Mahbub Alam', 'Jahanara Begum', 'Tanvir Alam', '2003-06-15', 'Male', 'O−', '5, Uttara Sector-7, Dhaka', '01312344321', 'tanvir.alam01@gmail.com', ''),
('1008', 'Abdur Rahim', 'Noorjahan Begum', 'Farhana Jannat', '2002-09-23', 'Female', 'AB−', '92, Feni Sadar, Feni', '01987654321', 'farhana.jt@gmail.com', ''),
('1009', 'Rafiq Rahman', 'Tahmina Akter', 'Naimur Rahman', '2004-03-18', 'Male', 'A+', '18, Comilla Sadar, Comilla', '01834567891', 'naimur.rahman@gmail.com', ''),
('1010', 'Jalal Chowdhury', 'Mahjabin Sultana', 'Afrin Chowdhury', '2003-08-01', 'Female', 'B+', '104, Sylhet City, Sylhet', '01698765432', 'afrin.chowdhury@gmail.com', ''),
('1011', 'Masudul islam', 'Mst Sheuly Khatun', 'Sihab', '2000-10-17', '', 'A+', 'Mirpur', '01793063540', 'sihabm3444@gmail.com', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
