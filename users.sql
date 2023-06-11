-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 05:05 PM
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
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'ayush', '$2y$10$U1gIy.w..u3/bPd4nrheU.ymDwQ.jAzA8RWt7VfAo56V/OLcsvLo.', '2023-06-10 20:34:19'),
(3, 'akash', '$2y$10$8v4i/yz6uiUKk2rwQMli.eiQmSICE.i.1m7ECwmmooGzniHjxJRTO', '2023-06-10 20:34:51'),
(4, 'ayushj', '$2y$10$tKQ8Ljd.mBNJYOuCOWtoCuqzivfILMgIgLW0F74KsIfjWsRDHEAIO', '2023-06-11 12:25:04'),
(5, '9137466601', '$2y$10$3YZlXOKJoekn/9jNAHcQU.d8cNSkqypYhi90q6/XgncsNv9rk6YX.', '2023-06-11 12:46:10'),
(6, 'ayush1', '$2y$10$MuQeGaAzo3Ml7lHM3eN5Q.4qM1rk1qReR5dticY8frUMoQ8s2Dh9.', '2023-06-11 12:52:50'),
(7, '', '', '2023-06-11 13:02:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
