-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2021 at 08:37 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `fullname` varchar(25) NOT NULL,
  `password` varchar(15) NOT NULL,
  `signUpDate` date NOT NULL DEFAULT curdate(),
  `imageDir` varchar(100) NOT NULL DEFAULT '../ImageRecord/avatar.png',
  `failedAttempts` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `email`, `fullname`, `password`, `signUpDate`, `imageDir`, `failedAttempts`) VALUES
('abuzerIshi', 'abuzer.ishtiaq@gmail.com', 'muhammad ', '11333', '2021-05-08', '../ImageRecord/avatar.png', 2),
('umair', 'umair.bhatti@gmail.com', 'umair Bhatti', '11', '2021-05-10', '../ImageRecord/WhatsApp Image 2020-10-27 at 10.44.47 AM.jpeg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
