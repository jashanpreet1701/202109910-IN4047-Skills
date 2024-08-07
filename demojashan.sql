-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2024 at 09:57 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demojashan`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `address`, `phone`, `email`) VALUES
(1, 'Jacob Wilson', '123 Elm Street, Springfield', '123-456-7890', 'jacob.wilson@example.com'),
(2, 'Emily Johnson', '456 Maple Avenue, Springfield', '987-654-3210', 'emily.johnson@example.com'),
(3, 'Michael Brown', '789 Oak Drive, Springfield', '555-123-4567', 'michael.brown@example.com'),
(4, 'Olivia Martinez', '101 Pine Street, Springfield', '901-234-5678', 'olivia.martinez@example.com'),
(5, 'Ethan Anderson', '202 Cedar Lane, Springfield', '111-222-3333', 'ethan.anderson@example.com'),
(6, 'Sophia Thomas', '303 Birch Road, Springfield', '444-555-6666', 'sophia.thomas@example.com'),
(7, 'Daniel Jackson', '404 Walnut Court, Springfield', '777-888-9999', 'daniel.jackson@example.com'),
(8, 'Isabella White', '505 Cherry Boulevard, Springfield', '333-444-5555', 'isabella.white@example.com'),
(9, 'James Harris', '606 Redwood Drive, Springfield', '666-777-8888', 'james.harris@example.com'),
(10, 'Ava Lewis', '707 Spruce Street, Springfield', '999-000-1111', 'ava.lewis@example.com'),
(11, 'William Scott', '808 Fir Avenue, Springfield', '222-333-4444', 'william.scott@example.com'),
(12, 'Mia Robinson', '909 Ash Lane, Springfield', '888-999-0000', 'mia.robinson@example.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
