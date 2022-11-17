-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2022 at 04:15 PM
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
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminId` int(11) NOT NULL,
  `adminName` varchar(100) NOT NULL,
  `adminPassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminId`, `adminName`, `adminPassword`) VALUES
(1, 'Bob', 'Password1'),


-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bookId` int(11) NOT NULL,
  `bookName` varchar(100) NOT NULL,
  `bookDescription` varchar(100) NOT NULL,
  `bookISBN` varchar(100) NOT NULL,
  `bookAuthor` varchar(100) NOT NULL,
  `active` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bookId`, `bookName`, `bookDescription`, `bookISBN`, `bookAuthor`, `active`) VALUES
(1, 'C# Programming for Absolute Beginners', 'Learn all about C#', '978-1484233177', ' Apress', 1),
(2, 'Java Programming for Beginners', 'Learn all about Java', '978-1788296298\r\n', 'Packt Publishing\r\n', 1),
(3, 'PHP & MySQL: Server-side Web Development', 'Learn all about PHP & MySQL', '978-1119149224\r\n', 'Wiley', 1);

-- --------------------------------------------------------

--
-- Table structure for table `checkedout`
--

CREATE TABLE `checkedout` (
  `checkedId` int(11) NOT NULL,
  `checkedTime` varchar(100) NOT NULL,
  `checkedBook` varchar(100) NOT NULL,
  `checkedName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checkedout`
--

INSERT INTO `checkedout` (`checkedId`, `checkedTime`, `checkedBook`, `checkedName`) VALUES
(1, 'now', 'Book Test', 'Test Name'),
(2, '11/02/22 09:48:51 am', 'C# Programming for Absolute Beginners', 'Bob');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bookId`);

--
-- Indexes for table `checkedout`
--
ALTER TABLE `checkedout`
  ADD PRIMARY KEY (`checkedId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `bookId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `checkedout`
--
ALTER TABLE `checkedout`
  MODIFY `checkedId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
