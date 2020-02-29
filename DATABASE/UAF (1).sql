-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 29, 2020 at 04:50 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `UAF`
--

-- --------------------------------------------------------

--
-- Table structure for table `Admin`
--

CREATE TABLE `Admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Admin`
--

INSERT INTO `Admin` (`username`, `password`) VALUES
('Admin', 'Admin123');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Name` varchar(250) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Message` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Name`, `Email`, `Message`) VALUES
('jordan kinobe', 'jordan@gmail.com', ' Sample TestSample TestSample TestSample TestSample TestSample TestSample TestSample Test'),
('Zoye', 'Zoye@gmail.com', 'Admin Dashboard <title>Admin Dashboard</title><title>Admin Dashboard</title><title>Admin Dashboard</title>');

-- --------------------------------------------------------

--
-- Table structure for table `RegisterRunner`
--

CREATE TABLE `RegisterRunner` (
  `Name` varchar(150) NOT NULL,
  `BipNumber` varchar(100) NOT NULL,
  `ClubName` varchar(100) NOT NULL,
  `AllTrails` varchar(100) NOT NULL,
  `Activities` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `RegisterRunner`
--

INSERT INTO `RegisterRunner` (`Name`, `BipNumber`, `ClubName`, `AllTrails`, `Activities`) VALUES
('Kinobe', 'STREH', 'Genius', '3rd National Trials', '100M(Men / Women),Javelin(Men / Women),100M Hurdles(Men / Women)'),
('Kinobe', 'STREH', 'Genius', '3rd National Trials', '100M(Men / Women),Javelin(Men / Women),100M Hurdles(Men / Women)'),
('Salo', 'Di ', 'Heavy', '21st Akii Bua Memorial Championship/ Central Region Championship', '100M(Men / Women),Shot Put(Men / Women)'),
('jeff', 'bt122', 'SCIENCE', 'National Track & Field Championship', '100M(Men / Women),800M(Men / Women)');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
