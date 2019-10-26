-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2019 at 04:19 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `feedback_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`username`, `password`) VALUES
('admin_kaun', 'cpsir');

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE `score` (
  `branch` varchar(10) NOT NULL,
  `sem` int(2) NOT NULL,
  `tname` varchar(100) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `subject_knowledge` int(2) NOT NULL,
  `clarity_in_explanation` int(2) NOT NULL,
  `comm_skill` int(2) NOT NULL,
  `satis_fact_ans` int(2) NOT NULL,
  `quality_notes` int(2) NOT NULL,
  `imp_question` int(2) NOT NULL,
  `punc_class` int(2) NOT NULL,
  `punc_lab` int(2) NOT NULL,
  `need_explain` int(2) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`branch`, `sem`, `tname`, `sname`, `subject_knowledge`, `clarity_in_explanation`, `comm_skill`, `satis_fact_ans`, `quality_notes`, `imp_question`, `punc_class`, `punc_lab`, `need_explain`, `date`) VALUES
('cse', 7, 'CPG', 'WE', 6, 7, 4, 6, 3, 6, 7, 4, 5, '2019-10-22'),
('cse', 7, 'CPG', 'WE', 6, 7, 4, 6, 3, 6, 7, 4, 5, '2019-10-22'),
('', 0, '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00'),
('cse', 7, 'cpg', 'WE', 6, 4, 8, 5, 2, 8, 2, 7, 7, '2019-10-13'),
('CSE', 0, 'CPG', 'CD', 5, 6, 0, 0, 0, 0, 0, 0, 0, '0000-00-00'),
('CSE', 0, 'NS', 'ES', 5, 6, 0, 0, 0, 0, 0, 0, 0, '0000-00-00'),
('CSE', 0, 'PS', 'HCI', 5, 6, 0, 0, 0, 0, 0, 0, 0, '0000-00-00'),
('CSE', 0, 'CPG', 'CD', 5, 6, 0, 0, 0, 0, 0, 0, 0, '0000-00-00'),
('CSE', 0, 'NS', 'ES', 5, 6, 0, 0, 0, 0, 0, 0, 0, '0000-00-00'),
('CSE', 0, 'PS', 'HCI', 5, 6, 0, 0, 0, 0, 0, 0, 0, '0000-00-00'),
('CSE', 0, 'CPG', 'CD', 5, 6, 0, 0, 0, 0, 0, 0, 0, '2019-10-13'),
('CSE', 0, 'NS', 'ES', 5, 6, 0, 0, 0, 0, 0, 0, 0, '2019-10-13'),
('CSE', 0, 'PS', 'HCI', 5, 6, 0, 0, 0, 0, 0, 0, 0, '2019-10-13'),
('CSE', 0, 'DPS', 'WE', 5, 6, 0, 0, 0, 0, 0, 0, 0, '2019-10-13'),
('CSE', 0, 'PS', 'DS', 5, 6, 0, 0, 0, 0, 0, 0, 0, '2019-10-13'),
('CSE', 0, 'CPG', 'CD', 5, 6, 0, 0, 0, 0, 0, 0, 0, '2019-10-13'),
('CSE', 0, 'NS', 'ES', 5, 6, 0, 0, 0, 0, 0, 0, 0, '2019-10-13'),
('CSE', 0, 'PS', 'HCI', 5, 6, 0, 0, 0, 0, 0, 0, 0, '2019-10-13'),
('ME', 6, 'CPG', 'WE', 9, 8, 0, 0, 0, 0, 0, 0, 0, '2019-10-13'),
('ME', 6, 'PT', 'CD', 9, 8, 0, 0, 0, 0, 0, 0, 0, '2019-10-13'),
('ME', 6, 'PS', 'ES', 9, 8, 0, 0, 0, 0, 0, 0, 0, '2019-10-13'),
('ME', 6, 'DPS', 'DS', 9, 8, 0, 0, 0, 0, 0, 0, 0, '2019-10-13'),
('ME', 6, 'NS', 'HCI', 9, 8, 0, 0, 0, 0, 0, 0, 0, '2019-10-13'),
('CSE', 7, 'CPG', 'WE', 8, 7, 8, 7, 4, 5, 8, 0, 0, '2019-10-13'),
('CSE', 7, 'PT', 'CD', 8, 7, 8, 8, 7, 8, 8, 0, 0, '2019-10-13'),
('CSE', 7, 'PS', 'ES', 7, 6, 7, 6, 6, 5, 8, 0, 0, '2019-10-13'),
('CSE', 7, 'DPS', 'DS', 9, 8, 9, 8, 8, 9, 9, 0, 0, '2019-10-13'),
('CSE', 7, 'NS', 'HCI', 8, 5, 8, 5, 7, 6, 8, 0, 0, '2019-10-13'),
('CSE', 6, 'CPG', 'WE', 0, 0, 0, 0, 0, 0, 0, 0, 0, '2019-10-13'),
('CSE', 6, 'CPG', 'WE', 0, 0, 0, 0, 0, 0, 0, 0, 0, '2019-10-13'),
('CSE', 6, 'CPG', 'WE', 0, 0, 0, 0, 0, 0, 0, 0, 0, '2019-10-13'),
('CSE', 6, 'CPG', 'WE', 0, 0, 0, 0, 0, 0, 0, 0, 0, '2019-10-13'),
('CSE', 6, 'CPG', 'WE', 0, 0, 0, 0, 0, 0, 0, 0, 0, '2019-10-13'),
('CSE', 7, 'CPG', 'WE', 0, 0, 0, 0, 0, 0, 0, 0, 0, '2019-10-14'),
('CSE', 7, 'CPG', 'WE', 0, 0, 0, 0, 0, 0, 0, 0, 0, '2019-10-14'),
('CSE', 7, 'CPG', 'WE', 0, 0, 0, 0, 0, 0, 0, 0, 0, '2019-10-14'),
('CSE', 7, 'CPG', 'WE', 0, 0, 0, 0, 0, 0, 0, 0, 0, '2019-10-14'),
('CSE', 7, 'CPG', 'WE', 0, 0, 0, 0, 0, 0, 0, 0, 0, '2019-10-14');

-- --------------------------------------------------------

--
-- Table structure for table `student_login`
--

CREATE TABLE `student_login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_login`
--

INSERT INTO `student_login` (`username`, `password`) VALUES
('0302cs161028', '0302cs161028'),
('0302cs161003', '0302cs161003'),
('0302cs161005', '0302cs161005'),
('0302cs161051', '0302cs161051'),
('0302cs161055', '0302cs161055'),
('0302cs161004', '0302cs161004'),
('0302cs161023', '0302cs161023');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
