-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2023 at 02:22 PM
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
-- Database: `goldenbake`
--

-- --------------------------------------------------------

--
-- Table structure for table `kontakt`
--

CREATE TABLE `kontakt` (
  `Id` int(11) NOT NULL,
  `Imię` text NOT NULL,
  `Nazwisko` text NOT NULL,
  `Adres` text NOT NULL,
  `Telefon` int(11) NOT NULL,
  `Uwagi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kontakt`
--

INSERT INTO `kontakt` (`Id`, `Imię`, `Nazwisko`, `Adres`, `Telefon`, `Uwagi`) VALUES
(5, '', '', '', 0, ''),
(6, 'asd', 'asd', 'asd', 345345, 'asdads'),
(7, 'asd', 'asd', 'asd', 345345, 'asdads'),
(8, 'asd', 'asd', 'asd', 34535, 'asdad'),
(9, 'asd', 'asd', 'asd', 34535, 'asdad'),
(10, 'asd', 'asd', 'asdads', 34534, 'asdasd'),
(11, 'asd', 'asd', 'asdads', 34534, 'asdasd'),
(12, 'asd', 'asd', 'asdads', 34534, 'asdasd'),
(13, 'asd', 'asda', 'sdads', 456456, 'asdasd'),
(14, 'asd', 'asda', 'sdads', 456456, 'asdasd'),
(15, 'asd', 'asda', 'sdads', 456456, 'asdasd'),
(16, 'asd', 'asd', 'asda', 345, 'asd'),
(17, 'asd', 'asd', 'asda', 345, 'asd'),
(18, 'asd', 'asd', 'asda', 345, 'asd'),
(19, 'asd', 'asd', 'asdasd', 345345, 'asdasd'),
(20, 'qwe', 'qwe', 'qwe', 123, 'qwe'),
(21, 'asd', 'asd', 'asd', 345, 'rty'),
(22, 'asd', 'asd', 'asd', 345, 'poi'),
(23, 'asd', 'asd', 'asd', 234, 'asd'),
(24, 'asd', 'asd', 'asd', 234, 'asd'),
(25, 'asd', 'asd', 'asd', 234, 'qwert'),
(26, 'asd', 'asd', 'asd', 123, 'asd'),
(27, 'asd', 'asd', 'asd', 123, 'asd'),
(28, 'asd', 'asd', 'asd', 123, 'asd'),
(29, 'asd', 'asd', 'asd', 123, 'ads'),
(30, 'asd', 'asd', 'asd', 123, 'asd123123'),
(31, 'asd', 'asd', 'asd', 123123, 'asdasd123123123'),
(32, 'asd', 'asd', 'asd', 123123, 'asdasd123123123'),
(33, 'asd', 'asd', 'asd', 123123, 'asdasd123123123'),
(34, 'asd', 'asd', 'asd', 123, '893asd'),
(35, 'asd', 'asd', '123', 123, '000000'),
(36, '', '', '', 0, ''),
(37, '', '', '', 0, ''),
(38, 'asd', 'asd', 'asd', 123, 'asdasdasd'),
(39, 'asd', 'asd', 'asd', 123, 'asd'),
(40, '', '', '', 0, ''),
(41, '', '', '', 0, ''),
(42, '', '', '', 0, ''),
(43, '', '', '', 0, ''),
(44, '', '', '', 0, ''),
(45, '', '', '', 0, ''),
(46, 'adsa', 'sdasd', 'asdads', 1231231, '3123asdads');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kontakt`
--
ALTER TABLE `kontakt`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kontakt`
--
ALTER TABLE `kontakt`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
