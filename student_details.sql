-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2023 at 07:53 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `NAME` varchar(50) DEFAULT NULL,
  `STUDENTID` varchar(50) DEFAULT NULL,
  `COLLEGENAME` varchar(100) DEFAULT NULL,
  `COURSE` varchar(50) DEFAULT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `USERNAME` varchar(50) DEFAULT NULL,
  `PASSWORD` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`NAME`, `STUDENTID`, `COLLEGENAME`, `COURSE`, `EMAIL`, `USERNAME`, `PASSWORD`) VALUES
('NALI KUSUMA', '20018-CM-016', 'S .V.GOVT POLYTECHNIC', 'DEPARTMENT OF COMPUTER ENGINEERING', 'kusumanali2004@gmail.comm', 'n.kusuma', 'kusuma'),
('GANGARAPU CHARITHA', '20018-CM-007', 'S.V.GOVT POLYTECHNIC', 'DEPARTMENT OF COMPUTER ENGINEERING', 'charithagangarapu04@gmail.com', 'charitha', 'charitha');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
