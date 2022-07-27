-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 22, 2022 at 08:51 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alfacare`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `Appt_ID` int(11) NOT NULL,
  `checkup_date` date DEFAULT NULL,
  `checkup_time` time DEFAULT NULL,
  `CustomerID` int(11) DEFAULT NULL,
  `Dr_ID` int(11) DEFAULT NULL,
  `Status` varchar(20) NOT NULL,
  `Cust_Msg` varchar(200) DEFAULT NULL,
  `Dr_Msg` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`Appt_ID`, `checkup_date`, `checkup_time`, `CustomerID`, `Dr_ID`, `Status`, `Cust_Msg`, `Dr_Msg`) VALUES
(1, '2021-12-21', '23:59:00', 5, 6, '0', 'kuch nhi', 'kuch nhi'),
(2, '2021-12-21', '06:00:00', 7, 4, '2', 'Lorem ipsum sit amet. Lorem ipsum sit amet. Lorem ipsum sit amet.', ''),
(3, '2021-12-20', '23:00:00', 5, 4, '0', 'kuch nhi', 'kuch nhi'),
(4, '2021-12-20', '23:59:00', 5, 9, '0', 'Lorem ipsum sit amet. Lorem ipsum sit amet. Lorem ipsum sit amet.', ''),
(5, '2021-12-23', '14:55:00', 5, 7, '0', 'Test Appointments!', NULL),
(6, '2021-12-23', '23:59:00', 5, 6, '0', 'kuch nhi', 'kuch nhi'),
(7, '2021-12-26', '23:00:00', 5, 4, '-1', 'this is test data', 'this is test data');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `ID` int(11) NOT NULL,
  `CustomerID` int(11) DEFAULT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp(),
  `Paid` tinyint(1) NOT NULL,
  `Price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`ID`, `CustomerID`, `Date`, `Paid`, `Price`) VALUES
(2, 5, '2021-12-16 11:04:41', 0, 1070),
(4, 204, '2021-12-20 21:47:35', 1, 60);

-- --------------------------------------------------------

--
-- Table structure for table `cart_item`
--

CREATE TABLE `cart_item` (
  `ID` int(11) NOT NULL,
  `CartID` int(11) DEFAULT NULL,
  `MedicineID` int(11) DEFAULT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart_item`
--

INSERT INTO `cart_item` (`ID`, `CartID`, `MedicineID`, `Quantity`) VALUES
(4, 2, 8, 3),
(9, 4, 1, 2),
(10, 2, 17, 2),
(11, 2, 18, 1);

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `ID` int(11) NOT NULL,
  `User_ID` int(11) DEFAULT NULL,
  `Spec_ID` int(11) DEFAULT NULL,
  `Experience` int(11) NOT NULL,
  `Description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`ID`, `User_ID`, `Spec_ID`, `Experience`, `Description`) VALUES
(4, 4, 1, 4, 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.'),
(6, 6, 2, 4, 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.'),
(7, 7, 3, 9, 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.'),
(9, 9, 5, 4, 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.'),
(11, 12, 6, 4, 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.');

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

CREATE TABLE `medicines` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Type` enum('Capsule','Injection','Tablet','Syrup','Other') NOT NULL,
  `Price` float NOT NULL,
  `ExpiryDate` datetime NOT NULL,
  `Stock` int(11) NOT NULL,
  `Description` longtext DEFAULT NULL,
  `ImagePath` text DEFAULT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicines`
--

INSERT INTO `medicines` (`ID`, `Name`, `Type`, `Price`, `ExpiryDate`, `Stock`, `Description`, `ImagePath`, `Date`) VALUES
(1, 'Rigix Tablet 10mg', 'Tablet', 60, '2022-12-09 00:00:00', 29, 'pharetra vel turpis nunc eget lorem dolor sed viverra ipsum nunc aliquet bibendum enim facilisis', NULL, '2021-12-09 14:02:14'),
(3, 'Glycerol', 'Syrup', 145, '2023-12-31 00:00:00', 70, 'pharetra vel turpis nunc eget lorem dolor sed viverra ipsum nunc aliquet bibendum enim facilisis', NULL, '2021-12-11 00:51:26'),
(5, 'Cotton', 'Other', 80, '2025-10-31 00:00:00', 100, 'pharetra vel turpis nunc eget lorem dolor sed viverra ipsum nunc aliquet bibendum enim facilisis', NULL, '2021-12-11 23:51:47'),
(8, 'Panadol', 'Syrup', 90, '2023-11-13 00:00:00', 48, 'pharetra vel turpis nunc eget lorem dolor sed viverra ipsum nunc aliquet bibendum enim facilisis', NULL, '2021-12-13 15:08:03'),
(9, 'Glycerin', 'Other', 30, '2025-11-13 00:00:00', 80, 'pharetra vel turpis nunc eget lorem dolor sed viverra ipsum nunc aliquet bibendum enim facilisis', NULL, '2021-12-13 15:10:11'),
(12, 'Hivate Nasal Spray 120 Sprays', 'Other', 220, '2022-12-09 00:00:00', 40, 'pharetra vel turpis nunc eget lorem dolor sed viverra ipsum nunc aliquet bibendum enim facilisis', NULL, '2021-12-09 14:02:14'),
(13, 'Gin-Resin', 'Syrup', 190, '2023-11-13 00:00:00', 50, 'pharetra vel turpis nunc eget lorem dolor sed viverra ipsum nunc aliquet bibendum enim facilisis', NULL, '2021-12-13 15:08:03'),
(14, 'Coferb Cough Syrup 120ml', 'Syrup', 130, '2025-11-13 00:00:00', 86, 'pharetra vel turpis nunc eget lorem dolor sed viverra ipsum nunc aliquet bibendum enim facilisis', NULL, '2021-12-13 15:10:11'),
(15, 'Glint Hand Sanitizer 500ml\n', 'Other', 110, '2023-11-13 00:00:00', 50, 'pharetra vel turpis nunc eget lorem dolor sed viverra ipsum nunc aliquet bibendum enim facilisis', NULL, '2021-12-13 15:08:03'),
(16, 'Calpol Syrup 100ml', 'Syrup', 90, '2023-11-13 00:00:00', 50, 'pharetra vel turpis nunc eget lorem dolor sed viverra ipsum nunc aliquet bibendum enim facilisis', NULL, '2021-12-13 15:08:03'),
(17, 'Arinac Forte Tablet 400mg', 'Tablet', 250, '2025-11-13 00:00:00', 78, 'pharetra vel turpis nunc eget lorem dolor sed viverra ipsum nunc aliquet bibendum enim facilisis', NULL, '2021-12-13 15:10:11'),
(18, 'Nutrifactor Nutra-C Plus 60s', 'Syrup', 210, '2025-11-13 00:00:00', 79, 'pharetra vel turpis nunc eget lorem dolor sed viverra ipsum nunc aliquet bibendum enim facilisis', NULL, '2021-12-13 15:10:11'),
(20, 'Entamizole DS 500mg/400mg', 'Tablet', 850, '2025-11-13 00:00:00', 80, 'pharetra vel turpis nunc eget lorem dolor sed viverra ipsum nunc aliquet bibendum enim facilisis', NULL, '2021-12-13 15:10:11'),
(21, 'Ultra Safe Hand Sanitizer 5L', 'Other', 300, '2025-11-13 00:00:00', 80, 'pharetra vel turpis nunc eget lorem dolor sed viverra ipsum nunc aliquet bibendum enim facilisis', NULL, '2021-12-13 15:10:11'),
(22, 'Avil Syrup 500ml', 'Syrup', 80, '2025-11-13 00:00:00', 80, 'pharetra vel turpis nunc eget lorem dolor sed viverra ipsum nunc aliquet bibendum enim facilisis', NULL, '2021-12-13 15:10:11'),
(23, 'Ensure Nutritional Supplement', 'Other', 320, '2025-11-13 00:00:00', 80, 'pharetra vel turpis nunc eget lorem dolor sed viverra ipsum nunc aliquet bibendum enim facilisis', NULL, '2021-12-13 15:10:11');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` varchar(200) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `name`, `email`, `phone`, `message`, `date_added`) VALUES
(1, 'testname', 'test@gmail.com', '03123456789', 'test message. this is message from the user.', '2021-12-04 03:09:18'),
(2, 'testname', 'test@gmail.com', '03123456789', 'test message. this is message from the user.', '2021-12-04 03:09:45'),
(3, 'test', 'test@gmail.com', '03123456789', 'test message. this is message from the user.', '2021-12-04 03:11:20');

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `news_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`news_id`, `email`, `date_added`) VALUES
(1, 'nadeemdsb5@gmail.com', '2021-12-04 02:35:38'),
(2, 'ameer@gmail.com', '2021-12-05 23:24:55');

-- --------------------------------------------------------

--
-- Table structure for table `specialities`
--

CREATE TABLE `specialities` (
  `ID` int(11) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `specialities`
--

INSERT INTO `specialities` (`ID`, `Title`, `Description`) VALUES
(1, 'Dermatologist', 'a doctor who specializes in conditions involving the diseases of skin, hair, nails and more.'),
(2, 'Pediatrician', 'a medical doctor who manages the physical, behavioral, and mental care for children.'),
(3, 'Physician', 'a medical doctor who treats acute and chronic illnesses and provides preventive care.'),
(4, 'Neurologist', 'a specialist who treats the diseases of the brain and spinal chord, peripherals nerves and muscles.'),
(5, 'Ophthalmologist', 'a specialist in the branch of medicine concerned with the study and diseases of the eye.'),
(6, 'Cardiologist', 'a doctor who specializes in the study or treatment of heart diseases and heart abnormalities.'),
(7, 'Pediatrician', 'a medical doctor who manages the physical, behavioral, and mental care for children.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Age` int(11) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp(),
  `Type` varchar(20) NOT NULL,
  `Address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Name`, `Username`, `Email`, `Phone`, `Age`, `Gender`, `Password`, `Date`, `Type`, `Address`) VALUES
(1, 'Ameer Bakhsh', 'ameer', 'mameerbakhsh02@gmail.com', '03144943434', 21, 'Male', 'ameer', '2021-12-05 17:54:12', 'Admin', 'DG Khan'),
(2, 'Mehreen Zafar', 'mehreen', 'mehreen@gmail.com', '03187347438', 19, 'Female', 'mehreen', '2021-12-05 22:00:11', 'Admin', 'Lahore'),
(3, 'Abdul Mannan', 'mannan', 'mannan@gmail.com', '03074199218', 20, 'Male', 'mannan', '2021-12-05 22:02:01', 'Pharmacist', 'Lahore'),
(4, 'Sobia Safdar', 'sobia', 'sobia@family.com', '0123456789', 19, 'Female', 'sobia', '2021-12-15 01:09:32', 'Doctor', 'Lahore'),
(5, 'Mohammed Nadeem', 'nadeem', 'nadeem@outlook.com', '03123456789', 20, 'Male', 'nadeem', '2021-12-15 01:09:32', 'Customer', 'Rajanpur'),
(6, 'Test Doctor1', 'kainat', 'kainat@family.com', '03123456789', 19, 'Female', 'kainat', '2021-12-15 01:09:32', 'Doctor', 'Lahore'),
(7, 'Test User', 'test2', 'test@family.com', '03123456789', 25, 'Male', 'test2', '2021-12-15 01:09:32', 'Customer', 'Lahore'),
(8, 'Sobia Safdar', 'sobia123', 'sobia@family.com', '0123456789', 19, 'Female', 'sobia123', '2021-12-15 01:09:32', 'Doctor', 'Lahore'),
(9, 'Test Doctor2', 'kainat', 'kainat@family.com', '03123456789', 19, 'Female', 'kainat', '2021-12-15 01:09:32', 'Doctor', 'Lahore'),
(10, 'Test User', 'test', 'test@family.com', '03123456789', 25, 'Male', 'test', '2021-12-15 01:09:32', 'Pharmacist', 'Lahore'),
(12, 'Test Doctor3', 'kainat', 'kainat@family.com', '03123456789', 19, 'Female', 'kainat', '2021-12-15 01:09:32', 'Doctor', 'Lahore'),
(13, 'Test User', 'doctor', 'test@family.com', '03123456789', 25, 'Male', 'doctor', '2021-12-15 01:09:32', 'Doctor', 'Lahore'),
(204, 'Tehseen Akhtar', 'tehseen', 'juciferali@gmail.com', '+923090452494', 20, 'Male', 'tehseen', '2021-12-20 21:42:17', 'Customer', 'Lahore');

-- --------------------------------------------------------

--
-- Table structure for table `vitals`
--

CREATE TABLE `vitals` (
  `vital_id` int(11) NOT NULL,
  `CustomerID` int(11) DEFAULT NULL,
  `age` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `pulse_rate` int(11) NOT NULL,
  `temperature` int(11) NOT NULL,
  `bmi` int(11) NOT NULL,
  `bp_up` int(11) NOT NULL,
  `bp_low` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vitals`
--

INSERT INTO `vitals` (`vital_id`, `CustomerID`, `age`, `height`, `weight`, `pulse_rate`, `temperature`, `bmi`, `bp_up`, `bp_low`) VALUES
(5, 2, 20, 68, 54, 60, 98, 20, 130, 80);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`Appt_ID`),
  ADD KEY `FK_dr_in_appt` (`Dr_ID`),
  ADD KEY `FK_userInAppt` (`CustomerID`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CustomerID` (`CustomerID`);

--
-- Indexes for table `cart_item`
--
ALTER TABLE `cart_item`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CartID` (`CartID`),
  ADD KEY `MedicineID` (`MedicineID`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FK_spec_in_dr` (`Spec_ID`),
  ADD KEY `FK_user_in_dr` (`User_ID`);

--
-- Indexes for table `medicines`
--
ALTER TABLE `medicines`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `specialities`
--
ALTER TABLE `specialities`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `vitals`
--
ALTER TABLE `vitals`
  ADD PRIMARY KEY (`vital_id`),
  ADD KEY `FK_user_in_vit` (`CustomerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `Appt_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cart_item`
--
ALTER TABLE `cart_item`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `medicines`
--
ALTER TABLE `medicines`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `specialities`
--
ALTER TABLE `specialities`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=205;

--
-- AUTO_INCREMENT for table `vitals`
--
ALTER TABLE `vitals`
  MODIFY `vital_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `FK_dr_in_appt` FOREIGN KEY (`Dr_ID`) REFERENCES `doctors` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_userInAppt` FOREIGN KEY (`CustomerID`) REFERENCES `users` (`ID`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`CustomerID`) REFERENCES `users` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cart_item`
--
ALTER TABLE `cart_item`
  ADD CONSTRAINT `cart_item_ibfk_1` FOREIGN KEY (`CartID`) REFERENCES `cart` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_item_ibfk_2` FOREIGN KEY (`MedicineID`) REFERENCES `medicines` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `doctors`
--
ALTER TABLE `doctors`
  ADD CONSTRAINT `FK_spec_in_dr` FOREIGN KEY (`Spec_ID`) REFERENCES `specialities` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_user_in_dr` FOREIGN KEY (`User_ID`) REFERENCES `users` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `vitals`
--
ALTER TABLE `vitals`
  ADD CONSTRAINT `FK_user_in_vit` FOREIGN KEY (`CustomerID`) REFERENCES `users` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
