-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2020 at 04:52 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

#CREATE DATABASE FOR THE APPLICATION
#IMPORT INTO PHPMYADMIN

DROP DATABASE IF EXISTS accountsdb;
CREATE DATABASE IF NOT EXISTS accountsdb;


USE accountsdb;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `accountsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `available`
--

CREATE TABLE `available` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Game_ID` int(10) UNSIGNED NOT NULL,
  `Ausername` varchar(100) NOT NULL,
  `Team1` varchar(100) NOT NULL,
  `Team2` varchar(100) NOT NULL,
  `Date` varchar(100) NOT NULL,
  `Availability` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `available`
--

INSERT INTO `available` (`ID`, `Game_ID`, `Ausername`, `Team1`, `Team2`, `Date`, `Availability`) VALUES
(1, 1, 'Player 1', 'Wide Titans', 'Gamertoad', '2020-12-15', 'Available'),
(2, 2, 'Player 1', 'Jamia', 'Grabbers', '2020-11-04', 'Available'),
(3, 2, 'Player 1', 'Jamia', 'Grabbers', '2020-11-04', 'Available'),
(4, 3, 'Player 1', 'Angie', 'Rex', '2020-12-31', 'Available'),
(5, 4, 'Player 1', 'Gam', 'Derx', '2021-01-28', 'Available'),
(6, 5, 'Player 1', 'Lova', 'Reva', '2020-11-30', 'Available'),
(7, 1, 'Player 2', 'Wide Titans', 'Gamertoad', '2020-12-15', 'Available'),
(8, 3, 'Player 2', 'Angie', 'Rex', '2020-12-31', 'Available'),
(9, 5, 'Player 2', 'Lova', 'Reva', '2020-11-30', 'Available'),
(10, 3, 'Player 2', 'Angie', 'Rex', '2020-12-31', 'Available'),
(11, 1, 'Player 3', 'Wide Titans', 'Gamertoad', '2020-12-15', 'Available'),
(12, 2, 'Player 3', 'Jamia', 'Grabbers', '2020-11-04', 'Available'),
(13, 4, 'Player 3', 'Gam', 'Derx', '2021-01-28', 'Available'),
(14, 5, 'Player 3', 'Lova', 'Reva', '2020-11-30', 'Available'),
(15, 1, 'Player 4', 'Wide Titans', 'Gamertoad', '2020-12-15', 'Available'),
(16, 2, 'Player 4', 'Jamia', 'Grabbers', '2020-11-04', 'Available'),
(17, 3, 'Player 4', 'Angie', 'Rex', '2020-12-31', 'Available'),
(18, 5, 'Player 4', 'Lova', 'Reva', '2020-11-30', 'Available'),
(19, 1, 'Player 4', 'Wide Titans', 'Gamertoad', '2020-12-15', 'Available'),
(20, 2, 'Player 4', 'Jamia', 'Grabbers', '2020-11-04', 'Available'),
(21, 3, 'Player 4', 'Angie', 'Rex', '2020-12-31', 'Available'),
(22, 3, 'Player 4', 'Angie', 'Rex', '2020-12-31', ''),
(23, 4, 'Player 4', 'Gam', 'Derx', '2021-01-28', 'Available'),
(24, 5, 'Player 4', 'Lova', 'Reva', '2020-11-30', 'Available'),
(25, 1, 'Player 4', 'Wide Titans', 'Gamertoad', '2020-12-15', 'Available'),
(26, 4, 'Player 4', 'Gam', 'Derx', '2021-01-28', 'Available'),
(27, 5, 'Player 4', 'Lova', 'Reva', '2020-11-30', 'Available'),
(28, 1, 'Player 5', 'Wide Titans', 'Gamertoad', '2020-12-15', 'Available'),
(29, 3, 'Player 5', 'Angie', 'Rex', '2020-12-31', 'Available'),
(30, 5, 'Player 5', 'Lova', 'Reva', '2020-11-30', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `file_uploads`
--

CREATE TABLE `file_uploads` (
  `id` int(100) NOT NULL,
  `file` varchar(150) NOT NULL,
  `type` varchar(150) NOT NULL,
  `size` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `file_uploads`
--

INSERT INTO `file_uploads` (`id`, `file`, `type`, `size`) VALUES
(1, '28819-team-sheet-1.docx', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '11.1611328125'),
(2, '66809-team-sheet-1.docx', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '11.1611328125'),
(3, '17393-team-sheet-1.docx', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '11.1611328125');

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `Game_ID` int(10) UNSIGNED NOT NULL,
  `Team_1` varchar(100) NOT NULL,
  `Score_1` tinyint(3) NOT NULL,
  `Score_2` tinyint(3) NOT NULL,
  `Team_2` varchar(100) NOT NULL,
  `Date` varchar(100) DEFAULT NULL,
  `Time` varchar(100) NOT NULL,
  `Location` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`Game_ID`, `Team_1`, `Score_1`, `Score_2`, `Team_2`, `Date`, `Time`, `Location`) VALUES
(1, 'Wide Titans', 3, 0, 'Gamertoad', '2020-12-15', '22:56', 'Aberdeen'),
(2, 'Jamia', 2, 4, 'Grabbers', '2020-11-04', '16:00', 'Westhill'),
(3, 'Angie', 0, 0, 'Rex', '2020-12-31', '21:00', 'Hilton Center'),
(4, 'Gam', 0, 0, 'Derx', '2021-01-28', '10:00', 'Ellon'),
(5, 'Lova', 0, 0, 'Reva', '2020-11-30', '12:00', 'Wales');

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `id` int(50) NOT NULL,
  `file_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`id`, `file_name`) VALUES
(1, '97726-a1.jpg'),
(2, '65446-a2.png'),
(3, '58993-a3.jpg'),
(4, '80100-a6.jpg'),
(5, '31322-images (2).png'),
(6, '2678-images (1).png'),
(7, '98030-images.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hash` varchar(32) NOT NULL,
  `avatar` varchar(300) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `type` set('A','P') DEFAULT 'P'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `hash`, `avatar`, `active`, `type`) VALUES
(1, 'Admin', 'admin@email.com', '$2y$10$RtZe6v6//9b3cusbkEh0w.hSCV48kOFoR5tnOeQ3S.9SbeUuA.PQO', 'daca41214b39c5dc66674d09081940f0', 'images/a3.jpg', 0, 'A'),
(2, 'Player 1', 'player1@email.com', '$2y$10$AqxIbk0zuz6xCHANC9H31uk.cD56/Ku7hZ2CmqJIEFT8ptCjMXiHu', 'a86c450b76fb8c371afead6410d55534', 'images/a1.jpg', 0, 'P'),
(3, 'Player 2', 'player2@email.com', '$2y$10$SBqc5Wb8k9GXnvlV1BQjiuYvTs3.hY4NVRICiQserB0NyFrkT9sRq', '11b9842e0a271ff252c1903e7132cd68', 'images/a2.png', 0, 'P'),
(4, 'Player 3', 'player3@email.com', '$2y$10$Y0d932N0.k0FosKmYBjEjOQox82lS3OAc.y3xOuIDEiKrlDpM8Tzu', '5e388103a391daabe3de1d76a6739ccd', 'images/a6.jpg', 0, 'P'),
(5, 'Player 4', 'player4@email.com', '$2y$10$QSVAJlBefvKYNB.XzHzieelDpMxEkwJB3Km6UM55aUNK9hMgbJ2QC', 'ec5aa0b7846082a2415f0902f0da88f2', 'images/images (1).jpg', 0, 'P'),
(6, 'Player 5', 'player5@email.com', '$2y$10$xm88kRU1UQhmgOkj3slXPeFC12yxY68y8SjLAX9YyLZoks3zRCHBG', '2bb232c0b13c774965ef8558f0fbd615', 'images/images (4).png', 0, 'P'),
(7, 'Admin 2', 'admin2@email.com', '$2y$10$Pqw42mH8UlkJlO7TL3IKnOG/0RONq104eNqf2/yE.NxnCOTf1Fm8O', 'fb7b9ffa5462084c5f4e7e85a093e6d7', 'images/images (5).png', 0, 'A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `available`
--
ALTER TABLE `available`
  ADD KEY `ID` (`ID`) USING BTREE;

--
-- Indexes for table `file_uploads`
--
ALTER TABLE `file_uploads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`Game_ID`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
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
-- AUTO_INCREMENT for table `available`
--
ALTER TABLE `available`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `file_uploads`
--
ALTER TABLE `file_uploads`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `Game_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
