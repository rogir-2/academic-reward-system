-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2025 at 11:45 PM
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
-- Database: `acadmicathalon`
--

-- --------------------------------------------------------

--
-- Table structure for table `badges`
--

CREATE TABLE `badges` (
  `badid` int(11) NOT NULL,
  `badname` text NOT NULL,
  `baddesc` text NOT NULL,
  `badimg` text NOT NULL,
  `badimgalt` text NOT NULL,
  `badcatp` text NOT NULL,
  `badcatc` text NOT NULL,
  `badcon` text NOT NULL,
  `badcycle` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `muid` int(11) NOT NULL,
  `url` text NOT NULL,
  `title` text NOT NULL,
  `alt` text NOT NULL,
  `label` text NOT NULL,
  `seclvl` text NOT NULL COMMENT 'Use 0,1,2, for now\r\n0 - Default ALL\r\n1 - Student\r\n2 - Staff\r\n3 - Admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`muid`, `url`, `title`, `alt`, `label`, `seclvl`) VALUES
(1, './index.php?group=A0113', 'Home', 'Home', 'Home', '0'),
(2, './league.php?group=A0113', 'League', 'League', 'League Table', '1'),
(3, './myachieve.php', 'My Achievements', 'My Achievements', 'My Achievements', '1'),
(4, './links.php', 'Useful Links', 'Useful Links', 'Useful Links', '0');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uuid` int(11) NOT NULL,
  `privlvl` text NOT NULL,
  `usernick` text NOT NULL,
  `userfirst` text NOT NULL,
  `usermid` text NOT NULL,
  `userlast` text NOT NULL,
  `badges` text NOT NULL,
  `points` text NOT NULL,
  `groupref` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uuid`, `privlvl`, `usernick`, `userfirst`, `usermid`, `userlast`, `badges`, `points`, `groupref`) VALUES
(1, '1', 'MickeyMouse', 'Mickey', 'the', 'Mouse', 'Badge.DevDemo', '1852', 'A0113'),
(2, '1', 'MinnieMouse', 'Minnie', 'the', 'Mouse', 'Badge.DevDemo', '1066', 'A0113');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `badges`
--
ALTER TABLE `badges`
  ADD PRIMARY KEY (`badid`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`muid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uuid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `badges`
--
ALTER TABLE `badges`
  MODIFY `badid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `muid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uuid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
