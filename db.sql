-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2023 at 03:56 PM
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brokers`
--

INSERT INTO `brokers` (`id`, `name`, `phone_no`, `address`, `pan`, `bank_name`, `bank_account_no`, `bank_ifsc`, `bank_branch_name`, `deleted`, `deleted_at`) VALUES
(1, 'Krishna Banerjee', '+1 (708) 723-7792', 'Cailin Cantrell', 'Ipsum quidem dolore', 'Shelby Combs', 'Pariatur Reiciendis', 'Eos ea consectetur d', 'Cullen Skinner', 1, '2023-02-04 17:52:00'),
(2, 'Radha Banerjee', '+1 (736) 513-5353', 'Gareth Leonard', 'Non sed id voluptas', 'Cullen Charles', 'Provident excepteur', 'Deserunt mollit quia', 'Lyle Osborn', 1, '2023-01-31 14:17:00'),
(3, 'Raktim Banerjee', '+1 (448) 299-7061', 'Melanie Sweet', 'Sed deserunt corrupt', 'Xerxes Carter', 'Consectetur vel qui', 'Perferendis ducimus', 'Clayton Aguilar', 1, '2023-01-31 14:17:00'),
(4, 'Raktim Banerjee', '+1 (886) 258-2764', 'Alma Forbes', 'Necessitatibus dolor', 'Leo Hawkins', 'Porro nulla Nam aut', 'Rem nemo fugiat et v', 'Kaseem Guzman', 0, NULL),
(5, 'Declan Tillman', '+1 (608) 111-8395', 'Dana Garrison', 'Magna quibusdam alia', 'Abraham Thompson', 'Ratione officiis ips', 'Facere ut repellendu', 'Elton Mcclain', 1, '2023-01-31 14:17:00'),
(6, 'Orson Holt', '+1 (485) 269-6804', 'Felicia Gates', 'Non minus maxime mol', 'Leo Terry', 'Officia aspernatur m', 'Excepteur minim cill', 'Tanisha Mathis', 0, NULL),
(7, 'Marny House', '+1 (431) 603-8969', 'Brandon Anthony', 'Ea aperiam irure off', 'Farrah Houston', 'Duis ab officiis aut', 'Debitis ut laboris m', 'Lisandra Jacobson', 1, '2023-01-31 14:17:00'),
(8, 'Kristen Wilkinson', '+1 (334) 429-2535', 'Rhoda Page', 'Architecto earum dol', 'Jorden Durham', 'Minus nisi vero qui', 'Iste itaque deleniti', 'Murphy Blackwell', 1, '2023-01-31 14:17:00'),
(9, 'Kerry Horne', '+1 (401) 327-1645', 'Gay Pitts', 'Doloribus voluptas e', 'Sara Bryant', 'Architecto culpa qu', 'Illum cupiditate id', 'Lawrence Morton', 1, '2023-01-31 14:17:00'),
(10, 'Griffin Francis', '+1 (199) 761-3683', 'Dillon Blake', 'Et ex consectetur a', 'Uma Santana', 'Id mollit nulla sed', 'Aliquam nihil unde e', 'Uma Hopper', 0, NULL),
(11, 'Sean Boone', '+1 (393) 791-7831', 'Brynne Poole', 'Vel est rerum quam q', 'Jorden Waters', 'Aut recusandae Non', 'Excepturi eius odit', 'Desirae Black', 0, NULL),
(12, 'Ignacia Macias', '', '', '', '', '', '', '', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cashers`
--

CREATE TABLE `cashers` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `phone_no` text DEFAULT NULL,
  `pan` text DEFAULT NULL,
  `aadhaar` text DEFAULT NULL,
  `bank_name` text DEFAULT NULL,
  `bank_account_no` text DEFAULT NULL,
  `bank_ifsc` text DEFAULT NULL,
  `bank_branch_name` text DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT 0,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cashers`
--

INSERT INTO `cashers` (`id`, `name`, `address`, `phone_no`, `pan`, `aadhaar`, `bank_name`, `bank_account_no`, `bank_ifsc`, `bank_branch_name`, `deleted`, `deleted_at`) VALUES
(1, 'Giselle Bernard', 'Bianca Sykes', '+1 (827) 917-2115', '1677666574.pdf', '16776665741.pdf', 'Kitra Cunningham', 'Cum cumque odio eius', 'Dolore et laudantium', 'Catherine Solomon', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cashes`
--

CREATE TABLE `cashes` (
  `id` int(11) NOT NULL,
  `casher_id` int(11) DEFAULT NULL,
  `amount` float DEFAULT NULL,
  `payment_mode` text DEFAULT NULL,
  `remarks` text DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT 0,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cashes`
--

INSERT INTO `cashes` (`id`, `casher_id`, `amount`, `payment_mode`, `remarks`, `deleted`, `deleted_at`) VALUES
(1, 1, 16.65, 'bank', 'Earum omnis debitis ', 0, NULL);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Table structure for table `loadings`
--

CREATE TABLE `loadings` (
  `id` int(11) NOT NULL,
  `broker_id` int(11) DEFAULT NULL,
  `loading_date` date DEFAULT NULL,
  `vehicle_id` int(11) DEFAULT NULL,
  `fright_slip_no` text DEFAULT NULL,
  `challan_no` text DEFAULT NULL,
  `loading_qun` float(11,2) DEFAULT NULL,
  `material_id` int(11) DEFAULT NULL,
  `price` float(11,2) DEFAULT NULL,
  `loading_point_id` int(11) DEFAULT NULL,
  `cash_advance` float(11,2) DEFAULT NULL,
  `pump_id` int(11) DEFAULT NULL,
  `diesal_advance_amount` float(11,2) DEFAULT NULL,
  `broker_advance` float(11,2) DEFAULT NULL,
  `driver_commission` float(11,2) DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT 0,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loadings`
--

INSERT INTO `loadings` (`id`, `broker_id`, `loading_date`, `vehicle_id`, `fright_slip_no`, `challan_no`, `loading_qun`, `material_id`, `price`, `loading_point_id`, `cash_advance`, `pump_id`, `diesal_advance_amount`, `broker_advance`, `driver_commission`, `deleted`, `deleted_at`) VALUES
(8, 4, '2023-03-03', 10, 'Tempor distinctio R', '123456789', 0.00, 7, 11.00, 3, 0.00, 1, 0.00, 0.00, 0.00, 0, NULL),
(9, 4, '2023-03-01', 8, 'Voluptas aut labore', '321654987', 98.00, 7, 0.00, 1, 45.00, 1, 100.00, 400.00, 300.00, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `loading_points`
--

CREATE TABLE `loading_points` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT 0,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loading_points`
--

INSERT INTO `loading_points` (`id`, `name`, `deleted`, `deleted_at`) VALUES
(1, 'Carly Burris', 0, '2023-02-18'),
(2, 'Loading Point - 2', 0, NULL),
(3, 'Loading Point - 3', 0, NULL),
(4, 'Loading Point - 4', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `broker_id` int(11) DEFAULT NULL,
  `broker_rate` float DEFAULT NULL,
  `broker_from_date` date DEFAULT NULL,
  `broker_to_date` date DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `client_rate` int(11) DEFAULT NULL,
  `client_from_date` date DEFAULT NULL,
  `client_to_date` date DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT 0,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`id`, `name`, `broker_id`, `broker_rate`, `broker_from_date`, `broker_to_date`, `client_id`, `client_rate`, `client_from_date`, `client_to_date`, `deleted`, `deleted_at`) VALUES
(7, 'Chantale Newman', 4, 11, '2023-03-01', '2023-03-03', 9, 44, '2009-10-27', '1989-04-02', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `purchase_order_no` text DEFAULT NULL,
  `purchase_order_date` date DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT 0,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `client_id`, `purchase_order_no`, `purchase_order_date`, `deleted`, `deleted_at`) VALUES
(1, 'Chloe Casey', 7, 'Aut ex lorem et nemo', '1996-07-28', 0, '2023-02-18');

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `extra_rate_per_truck` float DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT 0,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`id`, `name`, `client_id`, `extra_rate_per_truck`, `deleted`, `deleted_at`) VALUES
(1, 'Krishna Banerjee', 3, 101, 0, NULL),
(2, 'Anne Mckay', 1, 96, 1, '2023-02-04');

-- --------------------------------------------------------

--
-- Table structure for table `pumps`
--

CREATE TABLE `pumps` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `phone_no` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `gst_no` text NOT NULL,
  `bank_name` text NOT NULL,
  `bank_account_no` text DEFAULT NULL,
  `bank_ifsc` text DEFAULT NULL,
  `bank_branch_name` text DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT 0,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pumps`
--

INSERT INTO `pumps` (`id`, `name`, `phone_no`, `address`, `gst_no`, `bank_name`, `bank_account_no`, `bank_ifsc`, `bank_branch_name`, `deleted`, `deleted_at`) VALUES
(1, 'Walker Mcintosh', '+1 (735) 697-1866', 'Zena Higgins', 'Officia ut minima se', 'Phillip Fisher', 'Repellendus Eum vol', 'Consectetur reprehen', 'Cathleen Lang', 0, '2023-02-18 13:35:00');

-- --------------------------------------------------------

--
-- Table structure for table `pump_payments`
--

CREATE TABLE `pump_payments` (
  `id` int(11) NOT NULL,
  `pump_id` int(11) DEFAULT NULL,
  `amount` float DEFAULT NULL,
  `payment_mode` text DEFAULT NULL,
  `remarks` text DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT 0,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pump_payments`
--

INSERT INTO `pump_payments` (`id`, `pump_id`, `amount`, `payment_mode`, `remarks`, `deleted`, `deleted_at`) VALUES
(1, 1, 98, 'cash', 'asdsfsa', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `unloadings`
--

CREATE TABLE `unloadings` (
  `id` int(11) NOT NULL,
  `loading_id` int(11) DEFAULT NULL,
  `challan_record` text DEFAULT NULL,
  `unloading_date` date DEFAULT NULL,
  `unloading_point_id` int(11) DEFAULT NULL,
  `unloading_quantity` float DEFAULT NULL,
  `shortage_quantity` float DEFAULT NULL,
  `shortage_value` float DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT 0,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `unloading_points`
--

CREATE TABLE `unloading_points` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT 0,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unloading_points`
--

INSERT INTO `unloading_points` (`id`, `name`, `deleted`, `deleted_at`) VALUES
(1, 'Unloading Point - 1', 0, '2023-02-18'),
(2, 'Unloading Point - 2', 0, NULL),
(3, 'Unloading Point - 3', 0, NULL),
(4, 'Unloading Point - 4', 0, NULL);

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
  `wheel_type` text DEFAULT NULL,
  `owner_name` text DEFAULT NULL,
  `owner_phone` text DEFAULT NULL,
  `owner_pan` text DEFAULT NULL,
  `bank_name` text DEFAULT NULL,
  `bank_account_no` text DEFAULT NULL,
  `bank_ifsc` text DEFAULT NULL,
  `bank_branch_name` text DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT 0,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `registration_no`, `registration_copy`, `wheel_type`, `owner_name`, `owner_phone`, `owner_pan`, `bank_name`, `bank_account_no`, `bank_ifsc`, `bank_branch_name`, `deleted`, `deleted_at`) VALUES
(8, '876541234897', NULL, NULL, 'Branden Levy', '+1 (715) 866-3153', NULL, '0', '0', '0', '0', 0, NULL),
(9, '987455648751', NULL, 'AT RERUM CONSEQUAT', 'SHELBY SPEARS', '+1 (188) 177-9183', NULL, 'ALICE MCPHERSON', 'MOLESTIAE A EST MOL', 'ET INCIDUNT UT SED', 'MOANA SMALL', 0, NULL),
(10, '789456123598', '1676784506.pdf', 'ODIO QUO DOLOR OFFIC', 'ZACHARY MILES', '+1 (409) 228-5488', '1676784506.pdf', 'HU GALLEGOS', 'LABORE ET EX QUAS RE', 'DOLORE EXPEDITA VELI', 'DESTINY SCOTT', 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brokers`
--
ALTER TABLE `brokers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cashers`
--
ALTER TABLE `cashers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cashes`
--
ALTER TABLE `cashes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loadings`
--
ALTER TABLE `loadings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `fright_slip_no` (`fright_slip_no`) USING HASH,
  ADD UNIQUE KEY `challan_no` (`challan_no`) USING HASH;

--
-- Indexes for table `loading_points`
--
ALTER TABLE `loading_points`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pumps`
--
ALTER TABLE `pumps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pump_payments`
--
ALTER TABLE `pump_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unloadings`
--
ALTER TABLE `unloadings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unloading_points`
--
ALTER TABLE `unloading_points`
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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `registration_no` (`registration_no`) USING HASH;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brokers`
--
ALTER TABLE `brokers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cashers`
--
ALTER TABLE `cashers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cashes`
--
ALTER TABLE `cashes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `loadings`
--
ALTER TABLE `loadings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `loading_points`
--
ALTER TABLE `loading_points`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pumps`
--
ALTER TABLE `pumps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pump_payments`
--
ALTER TABLE `pump_payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `unloadings`
--
ALTER TABLE `unloadings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `unloading_points`
--
ALTER TABLE `unloading_points`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
