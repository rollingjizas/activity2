-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 06, 2022 at 02:19 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infoact2`
--

-- --------------------------------------------------------

--
-- Table structure for table `infoquiz2`
--

CREATE TABLE `infoquiz2` (
  `worker_id` int(10) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `work_position` varchar(50) NOT NULL,
  `salary` varchar(50) NOT NULL,
  `hours_of_work` varchar(50) NOT NULL,
  `department_number` varchar(50) NOT NULL,
  `work_shift` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `infoquiz2`
--

INSERT INTO `infoquiz2` (`worker_id`, `surname`, `password`, `work_position`, `salary`, `hours_of_work`, `department_number`, `work_shift`) VALUES
(1, 'versoza', 'versoza', 'CEO', '50,000', '16', '01102', 'day'),
(2, 'jesus', 'jesus', 'CEO', '50,999', '16', '0011', 'day');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `infoquiz2`
--
ALTER TABLE `infoquiz2`
  ADD PRIMARY KEY (`worker_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
