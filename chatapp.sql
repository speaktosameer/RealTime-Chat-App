-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2021 at 07:01 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` varchar(255) NOT NULL,
  `outgoing_msg_id` varchar(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(1, '436897535', '753128464', 'Hello '),
(2, '753128464', '436897535', 'Hi'),
(3, '436897535', '753128464', 'How are u'),
(4, '753128464', '436897535', 'I am fine '),
(5, '436897535', '753128464', 'what about you'),
(6, '753128464', '436897535', 'i am also fine'),
(7, '753128464', '436897535', 'Okay'),
(8, '753128464', '436897535', 'sdd'),
(9, '753128464', '436897535', 'sdkjfjbksd'),
(10, '753128464', '436897535', 'sdbsd'),
(11, '753128464', '436897535', 'sdkjbksd'),
(12, '753128464', '436897535', 'sdbsd'),
(13, '753128464', '436897535', '.dnlkskln'),
(14, '753128464', '436897535', 'lgsngg'),
(15, '753128464', '436897535', 'slgns'),
(16, '753128464', '436897535', 'slkkns'),
(17, '753128464', '436897535', 'sglkknsd'),
(18, '753128464', '436897535', 'sg;jsdg'),
(19, '753128464', '436897535', 'g;sg'),
(20, '753128464', '436897535', ';ns'),
(21, '753128464', '436897535', 'sg;s;gnsgs'),
(22, '753128464', '436897535', 'dgjd'),
(23, '753128464', '436897535', 'gjs'),
(24, '436897535', '1329264789', 'Hiii');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(200) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(400) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`) VALUES
(13, 436897535, 'Sameer', 'Ansari', 'sameer@demo.com', '123', '16180373521 (15).jpg', 'Offline now'),
(14, 1612514543, 'Danish', 'Ansari', 'danish@demo.com', '123', '1618037394tempAvatar.jpg', 'Offline now'),
(15, 753128464, 'Sajda', 'Mokhtar', 'sajda@demo.com', '123', '16180374361 (18).jpg', 'Offline now'),
(16, 1329264789, 'Azka', 'Iqbal', 'azka@demo.com', '123', '16180392961.jpg', 'Active now');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
