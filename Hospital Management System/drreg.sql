-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2021 at 11:56 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `drreg`
--

-- --------------------------------------------------------

--
-- Table structure for table `drlogin`
--

CREATE TABLE `drlogin` (
  `uname` varchar(100) NOT NULL,
  `password` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `drreg`
--

CREATE TABLE `drreg` (
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `gender` char(5) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `rec_email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drreg`
--

INSERT INTO `drreg` (`firstname`, `lastname`, `gender`, `email`, `username`, `password`, `rec_email`) VALUES
('Intisar', 'Fahim', 'male', 'syedintisarfahim@gmail.com', 'intisar', '0', 'syedintisarfahim@gmail.com'),
('', '', '', '', '', '0', ''),
('Intisar', 'Fahim', 'male', 'syedintisarfahim@gmail.com', 'intisar', '0', 'syedintisarfahim@gmail.com'),
('Intisar', 'Fahim', 'male', 'syedintisarfahim@gmail.com', 'intisar', '0', 'syedintisarfahim@gmail.com'),
('Intisar', 'Fahim', 'male', 'syedintisarfahim@gmail.com', 'intisar', '0', 'syedintisarfahim@gmail.com'),
('Intisar', 'Fahim', 'male', 'syedintisarfahim@gmail.com', 'intisar', '1234', 'syedintisarfahim@gmail.com'),
('', '', '', '', '', '0', ''),
('', '', '', '', '', '0', ''),
('', '', '', '', '', '0', ''),
('Intisar', 'Fahim', 'male', 'syedintisarfahim@gmail.com', 'intisar', '1234', 'syedintisarfahim@gmail.com'),
('Intisar', 'Fahim', 'male', 'syedintisarfahim@gmail.com', 'intisar', '0', 'syedintisarfahim@gmail.com'),
('Intisar', 'Fahim', 'male', 'syedintisarfahim@gmail.com', 'intisar', '0', 'syedintisarfahim@gmail.com'),
('Intisar', 'Fahim', 'male', 'syedintisarfahim@gmail.com', 'intisar', '1234', 'syedintisarfahim@gmail.com'),
('', '', '', '', '', '0', ''),
('', '', '', '', '', '0', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
