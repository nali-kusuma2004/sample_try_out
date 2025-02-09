-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2023 at 11:10 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer_eee`
--

CREATE TABLE `answer_eee` (
  `option_id` int(10) NOT NULL,
  `ques_id` int(10) NOT NULL,
  `option_number` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `answer_eee`
--

INSERT INTO `answer_eee` (`option_id`, `ques_id`, `option_number`) VALUES
(1, 1, 3),
(2, 2, 2),
(3, 3, 4),
(4, 4, 4),
(5, 5, 1),
(6, 6, 4),
(7, 7, 2),
(8, 8, 3),
(9, 9, 1),
(10, 10, 4),
(11, 11, 3),
(12, 12, 1),
(13, 13, 2),
(14, 14, 1),
(15, 15, 1),
(16, 16, 2),
(17, 17, 3),
(18, 18, 3),
(19, 19, 3),
(20, 20, 2),
(21, 21, 4),
(22, 22, 4),
(23, 23, 4),
(24, 24, 3),
(25, 25, 1),
(26, 26, 1),
(27, 27, 2),
(28, 28, 1),
(29, 29, 2),
(30, 30, 3),
(31, 31, 3),
(32, 32, 3),
(33, 33, 4),
(34, 34, 2),
(35, 35, 3),
(36, 36, 4),
(37, 37, 1),
(38, 38, 4),
(39, 39, 2),
(40, 40, 4),
(41, 41, 3),
(42, 42, 4),
(43, 43, 4),
(44, 44, 3),
(45, 45, 3),
(46, 46, 2),
(47, 47, 1),
(48, 48, 1),
(49, 49, 1),
(50, 50, 1),
(51, 51, 2),
(52, 52, 1),
(53, 53, 2),
(54, 54, 3),
(55, 55, 4),
(56, 56, 3),
(57, 57, 1),
(58, 58, 3),
(59, 59, 4),
(60, 60, 4),
(61, 61, 4),
(62, 62, 2),
(63, 63, 3),
(64, 64, 1),
(65, 65, 4),
(66, 66, 3),
(67, 67, 4),
(68, 68, 1),
(69, 69, 1),
(70, 70, 1),
(71, 71, 2),
(72, 72, 2),
(73, 73, 3),
(74, 74, 1),
(75, 75, 4),
(76, 76, 2),
(77, 77, 3),
(78, 78, 1),
(79, 79, 3),
(80, 80, 3),
(81, 81, 1),
(82, 82, 1),
(83, 83, 1),
(84, 84, 4),
(85, 85, 1),
(86, 86, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer_eee`
--
ALTER TABLE `answer_eee`
  ADD PRIMARY KEY (`option_id`),
  ADD UNIQUE KEY `option_id` (`option_id`,`ques_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
