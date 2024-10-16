-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2024 at 11:38 AM
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
-- Database: `gatepass`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobnote`
--

CREATE TABLE `jobnote` (
  `id` int(11) NOT NULL,
  `date` varchar(20) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `itm` varchar(20) NOT NULL,
  `sn` varchar(30) NOT NULL,
  `Asssetcd` varchar(20) NOT NULL,
  `item` varchar(500) NOT NULL,
  `CarryingBy` varchar(20) NOT NULL,
  `epf` int(8) NOT NULL,
  `Desc_fault` varchar(1000) NOT NULL,
  `contactPerson` varchar(25) NOT NULL,
  `contactNumber` varchar(10) NOT NULL,
  `Data_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobnote`
--

INSERT INTO `jobnote` (`id`, `date`, `branch`, `itm`, `sn`, `Asssetcd`, `item`, `CarryingBy`, `epf`, `Desc_fault`, `contactPerson`, `contactNumber`, `Data_time`) VALUES
(27, '2024-03-26', 'IT', 'CPU', '01113223', 'CI/ITD/CP/01', '', 'Courier', 6433, 'No power', 'Dinusha', '0776722207', '2024-03-27 16:26:32'),
(28, '2024-03-25', 'IT', 'CPU', '01113223', 'CI/ITD/CP/01', '', 'Courier', 6433, 'No power', 'Dinusha', '0776722207', '2024-03-27 16:26:32'),
(29, '', '', '', '', '', '', '', 0, '', '', '', '2024-03-27 16:26:32'),
(30, '', '', '', '', '', '', '', 0, '', '', '', '2024-03-27 16:26:32'),
(31, '', '', '', '', '', '', '', 0, '', '', '', '2024-03-27 16:26:32'),
(32, '', '', '', '', '', '', '', 0, '', '', '', '2024-03-27 16:26:32'),
(33, '', '', '', '', '', '', '', 0, '', '', '', '2024-03-27 16:26:32'),
(34, '', '', '', '', '', '', '', 0, '', '', '', '2024-03-27 16:26:32'),
(35, '', '', '', '', '', '', '', 0, '', '', '', '2024-03-27 16:26:32'),
(36, '', '', '', '', '', '', '', 0, '', '', '', '2024-03-27 16:26:32'),
(37, '', '', '', '', '', '', '', 0, '', '', '', '2024-03-27 16:26:32'),
(38, '', '', '', '', '', '', '', 0, '', '', '', '2024-03-27 16:26:32'),
(39, '', '', '', '', '', '', '', 0, '', '', '', '2024-03-27 16:26:32'),
(40, '', '', '', '', '', '', '', 0, '', '', '', '2024-03-27 16:26:32'),
(41, '', '', '', '', '', '', '', 0, '', '', '', '2024-03-27 16:26:32'),
(42, '', '', '', '', '', '', '', 0, '', '', '', '2024-03-27 16:26:32'),
(43, '', '', '', '', '', '', '', 0, '', '', '', '2024-03-27 16:26:32'),
(44, '', '', '', '', '', '', '', 0, '', '', '', '2024-03-27 16:26:32'),
(45, '', '', '', '', '', '', '', 0, '', '', '', '2024-03-27 16:26:32'),
(46, '', '', '', '', '', '', '', 0, '', '', '', '2024-03-27 16:26:32'),
(47, '', '', '', '', '', '', '', 0, '', '', '', '2024-03-27 16:26:32'),
(48, '2024-03-26', 'tesst', 'ups', '254', '4', '', 'fyu', 45, 'gki', 'hfhut', '454', '2024-03-27 16:26:32'),
(49, '2024-02-28', 'ddd', 'ddd', 'dsd', 'ddd', '', 'dddd', 1245, 'sss', 'fff', 'ggg', '2024-03-27 16:26:32'),
(50, '2024-03-26', 'Ambalantota', 'CPU', '01113223', 'CI/ITD/CP/01', '', 'Courier', 1003, 'No power', 'asas', '0776722207', '2024-03-27 16:26:32'),
(51, '2024-03-01', '', 'Reciptp300', '01113223', 'CI/ITD/CP/01', '', 'Courier', 1111, 'No power', 'Dinusha', '0776722207', '2024-03-27 16:26:32'),
(52, '2024-03-27', '', 'bulkscan', 'sdfds', 'sdfdf', '', 'dfdf', 12121, 'No power', 'sandun', '0776722207', '2024-03-27 16:26:32'),
(53, '2024-03-27', 'Chilaw', 'CPU', 'sdfds', 'sdfdf', '', 'dfdf', 12121, 'No power', 'sandun', '0776722207', '2024-03-27 16:26:32'),
(54, '2024-03-27', 'Chilaw', 'CPU', 'sdfds', 'sdfdf', '', 'dfdf', 12121, 'No power', 'sandun', '0776722207', '2024-03-27 16:26:32'),
(55, '2024-03-27', 'Chilaw', 'CPU', 'sdfds', 'sdfdf', '', 'dfdf', 12121, 'No power', 'sandun', '0776722207', '2024-03-27 16:26:32'),
(56, '2024-03-27', 'Akuressa', 'CPU', 'sdfds', 'sdfdf', '', 'dfdf', 12121, 'No power', 'sandun', '0776722207', '2024-03-27 16:26:32'),
(57, '2024-03-27', 'Akuressa', 'CPU', 'sdfds', 'sdfdf', '', 'dfdf', 12121, 'No power', 'sandun', '0776722207', '2024-03-27 16:26:32'),
(58, '2024-03-27', 'Akuressa', 'CPU', 'sdfds', 'sdfdf', '', 'dfdf', 12121, 'No power', 'sandun', '0776722207', '2024-03-27 16:26:32'),
(59, '2024-03-27', 'Akuressa', 'CPU', 'sdfds', 'sdfdf', '', 'dfdf', 12121, 'No power', 'sandun', '0776722207', '2024-03-27 16:26:32'),
(60, '2024-03-27', '', 'UPS', 'sdfds', 'sdfdf', '', 'dfdf', 12121, 'No power', 'sandun', '0776722207', '2024-03-27 16:26:32'),
(61, '2024-03-27', 'Baddegama', '', 'sdfds', 'sdfdf', '', 'dfdf', 12121, 'No power', 'sandun', '0776722207', '2024-03-27 16:26:32'),
(62, '2024-03-27', 'Baddegama', '', 'sdfds', 'sdfdf', '', 'dfdf', 12121, 'No power', 'sandun', '0776722207', '2024-03-27 16:26:32'),
(63, '2024-03-27', 'Akkaraipattu', '', 'sdfds', 'sdfdf', '', 'dfdf', 12121, 'No power', 'sandun', '0776722207', '2024-03-27 16:26:32'),
(64, '2024-03-11', 'Bibila', '', 'sdfds', 'sdfdf', '', 'dfdf', 12121, 'No power', 'sandun', '0776722207', '2024-03-27 16:26:32'),
(65, '2024-03-11', 'Bibila', '', 'sdfds', 'sdfdf', '', 'dfdf', 12121, 'No power', 'sandun', '0776722207', '2024-03-27 16:26:32'),
(66, '2024-03-27', 'Baddegama', '', 'sdfds', 'sdfdf', '', 'dfdf', 12121, 'No power', 'sandun', '0776722207', '2024-03-27 16:26:32'),
(67, '2024-03-27', 'Baddegama', 'canon300', 'sdfds', 'sdfdf', '', 'dfdf', 12121, 'No power', 'sandun', '0776722207', '2024-03-27 16:26:32'),
(68, '2024-03-27', 'Baddegama', 'canon300', 'sdfds', 'sdfdf', '', 'dfdf', 12121, 'No power', 'sandun', '0776722207', '2024-03-27 16:28:00'),
(69, '2024-03-28', '', 'Cardmachine', '01113223', 'CI/ITD/CP/01', '', 'dfdf', 1003, 'no power', 'Dinusha', '0776722207', '2024-03-28 12:04:36'),
(70, '2024-03-28', '', 'Cardmachine', '01113223', 'CI/ITD/CP/01', '', 'dfdf', 1003, 'no power', 'Dinusha', '0776722207', '2024-03-28 12:05:01'),
(71, '2024-03-28', '', 'Cardmachine', '01113223', 'CI/ITD/CP/01', '', 'dfdf', 1003, 'no power', 'Dinusha', '0776722207', '2024-03-28 12:05:05'),
(72, '2024-03-28', '', 'Cardmachine', '01113223', 'CI/ITD/CP/01', '', 'dfdf', 1003, 'no powe', 'Dinusha', '0776722207', '2024-03-28 12:29:10'),
(73, '2024-03-01', 'mktdpt', 'Cardmachinehiti', 'S/N - 17465743231', 'CI/ITD/CP/01', '', 'regional_manager', 12121, 'kljsdbffbc', 'Dinusha', '0776722207', '2024-03-28 14:03:07'),
(74, '2024-03-09', 'Admin_DPT', 'canon300', 'S/N - 17465743231', 'CI/ITD/CP/01', '', 'branch_manager', 12121, 'dsd', 'Dinusha', '0776722207', '2024-03-28 14:06:52'),
(75, '2024-03-01', 'Admin_DPT', 'canon300', 'S/N - 17465743231', 'CI/ITD/CP/01', '', 'other', 12121, 'khk', 'Chathura', '0776722207', '2024-03-28 14:40:21'),
(76, '2024-03-01', 'Admin_DPT', 'canon300', 'S/N - 17465743231', 'CI/ITD/CP/01', '', 'other', 12121, 'khk', 'Chathura', '0776722207', '2024-03-28 14:40:42'),
(77, '2024-02-29', 'Admin_DPT', 'Scannerfb1000', 'S/N - 17465743231', 'CI/ITD/CP/01', '', 'courier', 12121, '', 'Chathura', '0776722207', '2024-03-28 14:46:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobnote`
--
ALTER TABLE `jobnote`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobnote`
--
ALTER TABLE `jobnote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
