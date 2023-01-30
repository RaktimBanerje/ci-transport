-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2023 at 01:08 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aps_transport`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `hash` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `hash`) VALUES
(2, 'admin', '$2y$10$JUVV65snIQClWHrwk7vm/uoAwAoMOI4wmbPqi.CZJr6zII3U29nNu');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` int(11) NOT NULL,
  `registration_no` text DEFAULT NULL,
  `registration_copy` text DEFAULT NULL,
  `owner_name` text DEFAULT NULL,
  `owner_phone` text DEFAULT NULL,
  `owner_pan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `registration_no`, `registration_copy`, `owner_name`, `owner_phone`, `owner_pan`) VALUES
(1, 'Molestiae et fugiat', NULL, 'Nerea Douglas', '+1 (656) 656-6537', NULL),
(2, 'Excepteur quis et do', NULL, 'Keaton Delacruz', '+1 (336) 517-1329', NULL),
(3, 'Excepteur quis et do', '1675036162.pdf', 'Keaton Delacruz', '+1 (336) 517-1329', NULL),
(4, 'Ut impedit saepe pe', '1675036200.pdf', 'Hunter Elliott', '+1 (493) 249-8566', '16750362001.pdf'),
(5, 'Laudantium eligendi', '1675036495.pdf', 'Hiram Hardy', '+1 (939) 369-8959', '16750364951.pdf'),
(6, 'In qui enim libero e', '1675036995.pdf', 'Burke Henry', '+1 (119) 733-4299', '1675036995.pdf'),
(7, 'Harum est nisi accu', '1675037052.pdf', 'Maite Wells', '+1 (443) 225-9963', '1675037052.pdf');

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
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
