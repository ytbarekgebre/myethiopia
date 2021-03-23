-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2021 at 08:29 AM
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
-- Database: `myethiopia`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `id` int(25) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `nickname` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`id`, `firstname`, `lastname`, `email`, `password`, `nickname`) VALUES
(1, 'Ytbarek', 'Gebre', 'ytbani@aadmin.net', 'password', 'Ytbani');

-- --------------------------------------------------------

--
-- Table structure for table `adminuser`
--

CREATE TABLE `adminuser` (
  `id` int(10) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `nickname` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminuser`
--

INSERT INTO `adminuser` (`id`, `firstname`, `lastname`, `email`, `password`, `nickname`) VALUES
(2, 'Ytbarek', 'Gebre', 'meetytbarek@gmail.com', 'password', 'ytbaniyas');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(25) NOT NULL,
  `nickname` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `nickname`) VALUES
(1, 'Ytbarek', 'Gebre', 'meetytbarek@gmail.com', 'password', 'ytbaniyas'),
(2, 'Ebsa', 'Eresso', 'epsalo@gmail.com', 'epsalo', 'chula'),
(8, 'Hosana', 'Tashoma', 'benkhos@gmail.com', '1234567890', 'benk'),
(9, 'Selome', 'Geshaw', 'selome2010@gmail.com', '123456789', 'sel');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminuser`
--
ALTER TABLE `adminuser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `adminuser`
--
ALTER TABLE `adminuser`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
