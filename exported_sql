-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2024 at 10:11 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `attendee_type` varchar(255) NOT NULL,
  `event_start` datetime NOT NULL,
  `event_end` datetime NOT NULL,
  `day` varchar(50) NOT NULL,
  `booked` date NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event_name`, `attendee_type`, `event_start`, `event_end`, `day`, `booked`, `status`) VALUES
(2, 'Annual Tech Conference', 'Ticket Registration', '2024-06-10 10:30:00', '2024-06-12 17:00:00', 'Saturday', '2024-06-08', 'Archived'),
(3, 'International Food Expo', 'RSVP', '2024-05-26 10:30:00', '2024-05-28 20:30:00', 'Friday', '2024-05-24', 'Active'),
(4, 'Music Fest 2024', 'Ticket Registration', '2024-07-15 14:00:00', '2024-07-16 22:00:00', 'Monday', '2024-07-08', 'Archived'),
(5, 'Health and Wellness Fair', 'Ticket Registration', '2024-09-24 08:00:00', '2024-09-26 15:42:00', 'Thursday', '2024-09-19', 'Archived'),
(6, 'Business Leaders Summit', 'RSVP', '2024-10-10 16:00:00', '2024-10-11 12:00:00', 'Friday', '2024-10-09', 'Archived'),
(7, 'Art and Craft Exhibition', 'Ticket Registration', '2024-11-01 11:00:00', '2024-11-02 19:00:00', 'Wednesday', '2024-10-30', 'Archived'),
(8, 'Charity Gala Dinner', 'RSVP', '2025-02-14 18:30:00', '2024-02-14 21:00:00', 'Tuesday', '2024-02-13', 'Archived');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
