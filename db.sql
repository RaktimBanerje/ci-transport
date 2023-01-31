-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2023 at 10:20 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

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
-- Table structure for table `brokers`
--

CREATE TABLE `brokers` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `phone_no` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `pan` text NOT NULL,
  `bank_name` text NOT NULL,
  `bank_account_no` text DEFAULT NULL,
  `bank_ifsc` text DEFAULT NULL,
  `bank_branch_name` text DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT 0,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brokers`
--

INSERT INTO `brokers` (`id`, `name`, `phone_no`, `address`, `pan`, `bank_name`, `bank_account_no`, `bank_ifsc`, `bank_branch_name`, `deleted`, `deleted_at`) VALUES
(1, 'Krishna Banerjee', '+1 (708) 723-7792', 'Cailin Cantrell', 'Ipsum quidem dolore', 'Shelby Combs', 'Pariatur Reiciendis', 'Eos ea consectetur d', 'Cullen Skinner', 1, '2023-01-31 14:17:00'),
(2, 'Radha Banerjee', '+1 (736) 513-5353', 'Gareth Leonard', 'Non sed id voluptas', 'Cullen Charles', 'Provident excepteur', 'Deserunt mollit quia', 'Lyle Osborn', 1, '2023-01-31 14:17:00'),
(3, 'Raktim Banerjee', '+1 (448) 299-7061', 'Melanie Sweet', 'Sed deserunt corrupt', 'Xerxes Carter', 'Consectetur vel qui', 'Perferendis ducimus', 'Clayton Aguilar', 1, '2023-01-31 14:17:00'),
(4, 'Raktim Banerjee', '+1 (886) 258-2764', 'Alma Forbes', 'Necessitatibus dolor', 'Leo Hawkins', 'Porro nulla Nam aut', 'Rem nemo fugiat et v', 'Kaseem Guzman', 0, NULL),
(5, 'Declan Tillman', '+1 (608) 111-8395', 'Dana Garrison', 'Magna quibusdam alia', 'Abraham Thompson', 'Ratione officiis ips', 'Facere ut repellendu', 'Elton Mcclain', 1, '2023-01-31 14:17:00'),
(6, 'Orson Holt', '+1 (485) 269-6804', 'Felicia Gates', 'Non minus maxime mol', 'Leo Terry', 'Officia aspernatur m', 'Excepteur minim cill', 'Tanisha Mathis', 0, NULL),
(7, 'Marny House', '+1 (431) 603-8969', 'Brandon Anthony', 'Ea aperiam irure off', 'Farrah Houston', 'Duis ab officiis aut', 'Debitis ut laboris m', 'Lisandra Jacobson', 1, '2023-01-31 14:17:00'),
(8, 'Kristen Wilkinson', '+1 (334) 429-2535', 'Rhoda Page', 'Architecto earum dol', 'Jorden Durham', 'Minus nisi vero qui', 'Iste itaque deleniti', 'Murphy Blackwell', 1, '2023-01-31 14:17:00'),
(9, 'Kerry Horne', '+1 (401) 327-1645', 'Gay Pitts', 'Doloribus voluptas e', 'Sara Bryant', 'Architecto culpa qu', 'Illum cupiditate id', 'Lawrence Morton', 1, '2023-01-31 14:17:00'),
(10, 'Griffin Francis', '+1 (199) 761-3683', 'Dillon Blake', 'Et ex consectetur a', 'Uma Santana', 'Id mollit nulla sed', 'Aliquam nihil unde e', 'Uma Hopper', 0, NULL),
(11, 'Sean Boone', '+1 (393) 791-7831', 'Brynne Poole', 'Vel est rerum quam q', 'Jorden Waters', 'Aut recusandae Non', 'Excepturi eius odit', 'Desirae Black', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `pin_no` text DEFAULT NULL,
  `req_no` text DEFAULT NULL,
  `purchase_order_no` text DEFAULT NULL,
  `purchase_order_date` date DEFAULT NULL,
  `gst_no` text DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT 0,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `address`, `pin_no`, `req_no`, `purchase_order_no`, `purchase_order_date`, `gst_no`, `deleted`, `deleted_at`) VALUES
(1, 'Kenneth Watts', '11-Oct-1975', 'Accusamus culpa nos', 'Id odio sequi ut eo', 'Omnis maiores volupt', '1992-12-18', 'Esse qui eos magna', 0, NULL),
(2, 'Rose Vaughn', '11-Aug-2009', 'Id ipsam id adipisci', 'Ipsum eaque cillum s', 'Ipsa porro itaque l', '2022-10-23', 'Delectus blanditiis', 0, NULL),
(3, 'ABC', 'asfsafsa', 'asfsafsasafasfsa', 'asfas', 'Reiciendis id estasfsafsaasfsaf', '2022-12-31', 'Vitae molestiae sed', 0, NULL),
(4, 'Keefe Barrett', '19-Aug-1982', 'Quia labore qui maxi', 'Suscipit dolores sun', 'Est veniam minim do', '2002-05-18', 'Vel rerum doloremque', 1, '2023-01-31 14:14:00'),
(5, 'Fuller Kinney', '21-Jul-2013', 'Nihil vel dolor cill', 'Ea nemo eu et quis l', 'Magni consequat Ex', '2008-04-25', 'Qui doloremque paria', 0, NULL),
(6, 'Jacob Marshall', 'asdsadfsaf', 'Modi asperiores dolo', 'Veniam dolore amet', 'Quia ratione quisqua', '1990-10-20', 'Rerum enim ut optio', 0, NULL),
(7, 'Judah Forbes', 'safsafsaf', 'Voluptas commodi et', 'Aute totam magna rep', 'Optio occaecat comm', '2021-08-18', 'Rem accusamus cupida', 0, NULL),
(8, 'April Boone', 'asfsafsafsa', 'Exercitationem nisi', 'Sunt neque aliquip q', 'Proident voluptatum', '2006-03-14', 'Dicta quas quam est', 0, NULL),
(9, 'Beatrice Reese', '30-Nov-2019', 'Dolore vel qui lorem', 'Do numquam voluptas', 'Delectus voluptatem', '1999-07-04', 'ertyreyhrtret', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `hash` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
  `owner_pan` text DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT 0,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `registration_no`, `registration_copy`, `owner_name`, `owner_phone`, `owner_pan`, `deleted`, `deleted_at`) VALUES
(1, 'Molestiae et fugiat', NULL, 'Nerea Douglas', '+1 (656) 656-6537', NULL, 0, '2023-01-30 00:00:00'),
(2, 'Excepteur quis et do', NULL, 'Keaton Delacruz', '+1 (336) 517-1329', NULL, 0, '2023-01-30 00:00:00'),
(3, 'Excepteur quis et do', '1675036162.pdf', 'Keaton Delacruz', '+1 (336) 517-1329', NULL, 0, '2023-01-30 00:00:00'),
(4, 'Ut impedit saepe pe', '1675036200.pdf', 'Hunter Elliott', '+1 (493) 249-8566', '16750362001.pdf', 0, '2023-01-30 00:00:00'),
(5, 'Laudantium eligendi', '1675036495.pdf', 'Hiram Hardy', '+1 (939) 369-8959', '16750364951.pdf', 0, '2023-01-30 23:36:00'),
(6, 'In qui enim libero e', '1675036995.pdf', 'Burke Henry', '+1 (119) 733-4299', '1675036995.pdf', 0, '2023-01-31 04:07:00'),
(7, '12345678', '1675120280.pdf', 'Raktim Banerjee', '+919836739907', '1675120280.pdf', 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brokers`
--
ALTER TABLE `brokers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `brokers`
--
ALTER TABLE `brokers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
