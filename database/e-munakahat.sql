-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 16, 2023 at 03:55 PM
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
-- Database: `e-munakahat`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicant_partner_info`
--

CREATE TABLE `applicant_partner_info` (
  `Partner_IC` varchar(12) NOT NULL,
  `Partner_Name` varchar(30) DEFAULT NULL,
  `Partner_DOB` date DEFAULT NULL,
  `Partner_Gender` varchar(10) DEFAULT NULL,
  `Partner_Race` varchar(30) DEFAULT NULL,
  `Partner_Address` varchar(50) DEFAULT NULL,
  `Partner_Age` int(11) DEFAULT NULL,
  `Partner_Nationality` varchar(15) DEFAULT NULL,
  `Partner_Edu` varchar(15) DEFAULT NULL,
  `Partner_JobSector` varchar(30) DEFAULT NULL,
  `Partner_JobPosition` varchar(30) DEFAULT NULL,
  `Partner_Salary` float DEFAULT NULL,
  `Partner_MarriageStatus` varchar(15) DEFAULT NULL,
  `Partner_IslamStatus` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applicant_partner_info`
--

INSERT INTO `applicant_partner_info` (`Partner_IC`, `Partner_Name`, `Partner_DOB`, `Partner_Gender`, `Partner_Race`, `Partner_Address`, `Partner_Age`, `Partner_Nationality`, `Partner_Edu`, `Partner_JobSector`, `Partner_JobPosition`, `Partner_Salary`, `Partner_MarriageStatus`, `Partner_IslamStatus`) VALUES
('0404040404', 'Judy', '2023-06-02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `consultation`
--

CREATE TABLE `consultation` (
  `ConsultationID` int(11) NOT NULL,
  `Complaint_Info` varchar(50) NOT NULL,
  `Advisor_Name` varchar(30) NOT NULL,
  `Session_Date` date NOT NULL,
  `Consultation_Status` varchar(10) NOT NULL,
  `Add_Session` varchar(5) NOT NULL,
  `User_IC` varchar(12) NOT NULL,
  `Staff_IC` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `document_info`
--

CREATE TABLE `document_info` (
  `DI_ID` varchar(15) NOT NULL,
  `DI_ICCopy` varchar(255) NOT NULL,
  `DI_AkadNikahCopy` varchar(255) NOT NULL,
  `DI_BankAccountCopy` varchar(255) NOT NULL,
  `DI_SupportDocument` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `heir_info`
--

CREATE TABLE `heir_info` (
  `HI_ID` varchar(15) NOT NULL,
  `HI_Name` varchar(30) NOT NULL,
  `HI_Relationship` varchar(15) NOT NULL,
  `HI_PhoneNo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hiv_test_result`
--

CREATE TABLE `hiv_test_result` (
  `Test_ID` varchar(15) NOT NULL,
  `Test_Date` date NOT NULL,
  `Test_ClinicName` varchar(30) NOT NULL,
  `Test_Result` varchar(50) NOT NULL,
  `Test_ClinicStaffName` varchar(30) NOT NULL,
  `Test_ClinicStaffPos` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hiv_test_result`
--

INSERT INTO `hiv_test_result` (`Test_ID`, `Test_Date`, `Test_ClinicName`, `Test_Result`, `Test_ClinicStaffName`, `Test_ClinicStaffPos`) VALUES
('001', '2023-06-01', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `incentive_application`
--

CREATE TABLE `incentive_application` (
  `IA_ID` int(11) NOT NULL,
  `IA_ApplyDate` date NOT NULL,
  `IA_Status` varchar(30) NOT NULL,
  `IA_Comment` varchar(100) NOT NULL,
  `IA_BankAccount` varchar(30) NOT NULL,
  `IA_BankName` varchar(30) NOT NULL,
  `IA_POB` varchar(30) NOT NULL,
  `IA_PartnerPOB` varchar(30) NOT NULL,
  `User_IC` varchar(12) NOT NULL,
  `DI_ID` varchar(15) NOT NULL,
  `HI_ID` varchar(15) NOT NULL,
  `Staff_IC` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `marriagecard_application`
--

CREATE TABLE `marriagecard_application` (
  `CardApplicationNo` int(11) NOT NULL,
  `CardApplicationCode` varchar(20) NOT NULL,
  `Card_Delivery_Method` varchar(15) NOT NULL,
  `Card_Pickup_Date` date NOT NULL,
  `Card_Pickup_Venue` varchar(15) NOT NULL,
  `Card_Delivery_Address` varchar(10) NOT NULL,
  `CardApplication_Status` varchar(20) NOT NULL,
  `cardAccept_Date` date DEFAULT NULL,
  `MC_PaymentNo` varchar(15) NOT NULL,
  `Staff_IC` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `marriagecard_application`
--

INSERT INTO `marriagecard_application` (`CardApplicationNo`, `CardApplicationCode`, `Card_Delivery_Method`, `Card_Pickup_Date`, `Card_Pickup_Venue`, `Card_Delivery_Address`, `CardApplication_Status`, `cardAccept_Date`, `MC_PaymentNo`, `Staff_IC`) VALUES
(1, 'CARD2023-001', 'COD', '2023-06-01', 'kuantan', 'kuantan', 'Untuk Diluluskan', NULL, '121212', '0202020202'),
(2, 'CARD2023-002', 'pick up', '2023-06-01', 'kuantan', 'kuantan', 'Untuk Diluluskan', NULL, '121212', '0202020202'),
(3, 'CARD2023-003', 'COD', '2023-06-01', 'kuantan', 'kuantan', 'Untuk Diluluskan', NULL, '121212', '0202020202');

-- --------------------------------------------------------

--
-- Table structure for table `marriage_application`
--

CREATE TABLE `marriage_application` (
  `MA_ID` varchar(12) NOT NULL,
  `MA_ApplyDate` date NOT NULL,
  `MA_Nation` varchar(25) NOT NULL,
  `MA_State` varchar(20) NOT NULL,
  `MA_Category` varchar(30) NOT NULL,
  `MA_Date` int(11) NOT NULL,
  `MA_Address` varchar(50) NOT NULL,
  `MA_PrepCertNo` varchar(10) NOT NULL,
  `MA_MasKahwin` float NOT NULL,
  `User_IC` varchar(12) NOT NULL,
  `Staff_IC` varchar(12) NOT NULL,
  `Saksi_IC` varchar(12) NOT NULL,
  `Wali_IC` varchar(12) NOT NULL,
  `Test_ID` varchar(15) NOT NULL,
  `Partner_ID` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `marriage_prep_course`
--

CREATE TABLE `marriage_prep_course` (
  `MPC_SiriTaklimat` varchar(10) NOT NULL,
  `MPC_PenganjurName` varchar(30) NOT NULL,
  `MPC_Address` varchar(50) NOT NULL,
  `MPC_Date` int(11) NOT NULL,
  `MPC_Time` int(11) NOT NULL,
  `MPC_Capacity` int(11) NOT NULL,
  `Staff_IC` varchar(12) NOT NULL,
  `Attendance_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `marriage_registration`
--

CREATE TABLE `marriage_registration` (
  `RegistrationNo` int(11) NOT NULL,
  `Registration_Type` varchar(30) NOT NULL,
  `Registration_Date` date NOT NULL,
  `Registration_Status` varchar(20) NOT NULL,
  `Accept_Date` date DEFAULT NULL,
  `Staff_IC` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `marriage_registration`
--

INSERT INTO `marriage_registration` (`RegistrationNo`, `Registration_Type`, `Registration_Date`, `Registration_Status`, `Accept_Date`, `Staff_IC`) VALUES
(1, 'KTN2M3/2023-001', '2023-01-01', 'Untuk Diluluskan', NULL, '0101010101'),
(2, 'KTN2M3/2023-002', '2023-01-01', 'Untuk Diluluskan', NULL, '0101010101'),
(3, 'KTN2M3/2023-003', '2023-01-02', 'Untuk Diluluskan', NULL, '0101010101');

-- --------------------------------------------------------

--
-- Table structure for table `mc_payment_info`
--

CREATE TABLE `mc_payment_info` (
  `MC_PaymentNo` varchar(15) NOT NULL,
  `MC_Bank_Name` varchar(15) NOT NULL,
  `MC_Bank_Acc` varchar(15) NOT NULL,
  `MC_Payment_Amount` float NOT NULL,
  `MC_Payment_Date` date NOT NULL,
  `MC_Payment_Receipt` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mc_payment_info`
--

INSERT INTO `mc_payment_info` (`MC_PaymentNo`, `MC_Bank_Name`, `MC_Bank_Acc`, `MC_Payment_Amount`, `MC_Payment_Date`, `MC_Payment_Receipt`) VALUES
('121212', 'ambank', '123', 30, '2023-06-01', '131313');

-- --------------------------------------------------------

--
-- Table structure for table `mpc_attendance`
--

CREATE TABLE `mpc_attendance` (
  `Attendance_ID` varchar(10) NOT NULL,
  `Attendance_Status` varchar(10) NOT NULL,
  `Attendance_Note` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mr_payment_info`
--

CREATE TABLE `mr_payment_info` (
  `MR_PaymentNo` varchar(15) NOT NULL,
  `MR_Bank_Name` varchar(15) NOT NULL,
  `MR_Bank_Acc` varchar(15) NOT NULL,
  `MR_Payment_Amount` float NOT NULL,
  `MR_Payment_Date` date NOT NULL,
  `MR_Payment_Receipt` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mr_payment_info`
--

INSERT INTO `mr_payment_info` (`MR_PaymentNo`, `MR_Bank_Name`, `MR_Bank_Acc`, `MR_Payment_Amount`, `MR_Payment_Date`, `MR_Payment_Receipt`) VALUES
('001', 'ambank', '88812345678', 20, '2023-06-01', '001');

-- --------------------------------------------------------

--
-- Table structure for table `saksi_info`
--

CREATE TABLE `saksi_info` (
  `Saksi_IC` varchar(12) NOT NULL,
  `Saksi_Name` varchar(30) NOT NULL,
  `Saksi_Address` varchar(100) NOT NULL,
  `Saksi_HP` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `saksi_info`
--

INSERT INTO `saksi_info` (`Saksi_IC`, `Saksi_Name`, `Saksi_Address`, `Saksi_HP`) VALUES
('0303030303', 'ab', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `staff_registration_info`
--

CREATE TABLE `staff_registration_info` (
  `Staff_IC` varchar(15) NOT NULL,
  `Staff_Name` varchar(30) NOT NULL,
  `Staff_Password` varchar(15) NOT NULL,
  `Staff_PhoneNo` int(11) NOT NULL,
  `Staff_Gender` varchar(10) NOT NULL,
  `Staff_Email` varchar(30) NOT NULL,
  `Staff_Position` varchar(30) NOT NULL,
  `Staff_PAID` varchar(30) NOT NULL,
  `Staff_AccessCategory` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff_registration_info`
--

INSERT INTO `staff_registration_info` (`Staff_IC`, `Staff_Name`, `Staff_Password`, `Staff_PhoneNo`, `Staff_Gender`, `Staff_Email`, `Staff_Position`, `Staff_PAID`, `Staff_AccessCategory`) VALUES
('0101010101', 'admin', 'adminpwd', 0, '', '', '', '', ''),
('011023080204', 'abby', '123', 123, 'f', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_registration_info`
--

CREATE TABLE `user_registration_info` (
  `User_IC` varchar(15) NOT NULL,
  `User_Name` varchar(30) NOT NULL,
  `User_DOB` date NOT NULL,
  `User_Gender` varchar(10) NOT NULL,
  `User_Race` varchar(30) NOT NULL,
  `User_Address` varchar(50) NOT NULL,
  `User_AddressInIC` varchar(50) NOT NULL,
  `User_Age` int(11) NOT NULL,
  `User_Nationality` varchar(15) NOT NULL,
  `User_HomeHP` int(11) NOT NULL,
  `User_HP` int(11) NOT NULL,
  `User_Edu` varchar(15) NOT NULL,
  `User_JobSector` varchar(30) NOT NULL,
  `User_JobPosition` varchar(30) NOT NULL,
  `User_JobAddress` varchar(50) NOT NULL,
  `User_JobHP` int(11) NOT NULL,
  `User_Salary` float NOT NULL,
  `User_MarriageStatus` varchar(15) NOT NULL,
  `User_IslamStatus` varchar(15) NOT NULL,
  `User_Password` varchar(15) NOT NULL,
  `User_Email` varchar(30) NOT NULL,
  `Partner_ID` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_registration_info`
--

INSERT INTO `user_registration_info` (`User_IC`, `User_Name`, `User_DOB`, `User_Gender`, `User_Race`, `User_Address`, `User_AddressInIC`, `User_Age`, `User_Nationality`, `User_HomeHP`, `User_HP`, `User_Edu`, `User_JobSector`, `User_JobPosition`, `User_JobAddress`, `User_JobHP`, `User_Salary`, `User_MarriageStatus`, `User_IslamStatus`, `User_Password`, `User_Email`, `Partner_ID`) VALUES
('011023080204', 'abby', '2001-10-23', 'Perempuan', 'Cina', '', 'kuantan', 22, 'Warganegara', 0, 2147483647, 'PHD', 'Sektor Swasta', '', '1134,SUNGAI DURIAN', 0, 0, '', '', '123', 'abbyoxide01@gmail.com', NULL),
('0909090909', 'izzan', '2001-02-16', 'Lelaki', 'Bumiputera Sabah', 'No.5, Lrg IS 11, Taman Indera Sempurna, Kuantan, P', 'No.5, Lrg IS 11, Taman Indera Sempurna, Kuantan, P', 22, 'Warganegara', 0, 2147483647, 'PT3/PMR/SRP/LC', 'Pesara', '', 'No.5, Lrg IS 11, Taman Indera Sempurna, Kuantan, P', 0, 0, '', '', '122', 'wmizzan@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wali_info`
--

CREATE TABLE `wali_info` (
  `Wali_IC` varchar(12) NOT NULL,
  `Wali_Name` varchar(30) NOT NULL,
  `Wali_DOB` date NOT NULL,
  `Wali_Gender` varchar(10) NOT NULL,
  `Wali_Hubungan` varchar(30) NOT NULL,
  `Wali_Age` int(11) NOT NULL,
  `Wali_HP` varchar(20) NOT NULL,
  `Wali_NoSijilNikah` varchar(20) NOT NULL,
  `Wali_Pelulus` varchar(30) NOT NULL,
  `Wali_MarriageDate` date NOT NULL,
  `Wali_IslamStatus` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wali_info`
--

INSERT INTO `wali_info` (`Wali_IC`, `Wali_Name`, `Wali_DOB`, `Wali_Gender`, `Wali_Hubungan`, `Wali_Age`, `Wali_HP`, `Wali_NoSijilNikah`, `Wali_Pelulus`, `Wali_MarriageDate`, `Wali_IslamStatus`) VALUES
('0202020202', 'abudul', '2023-06-08', '', '', 0, '', '', '', '0000-00-00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicant_partner_info`
--
ALTER TABLE `applicant_partner_info`
  ADD PRIMARY KEY (`Partner_IC`);

--
-- Indexes for table `consultation`
--
ALTER TABLE `consultation`
  ADD PRIMARY KEY (`ConsultationID`),
  ADD KEY `Staff_IC` (`Staff_IC`),
  ADD KEY `User_IC` (`User_IC`);

--
-- Indexes for table `document_info`
--
ALTER TABLE `document_info`
  ADD PRIMARY KEY (`DI_ID`);

--
-- Indexes for table `heir_info`
--
ALTER TABLE `heir_info`
  ADD PRIMARY KEY (`HI_ID`);

--
-- Indexes for table `hiv_test_result`
--
ALTER TABLE `hiv_test_result`
  ADD PRIMARY KEY (`Test_ID`);

--
-- Indexes for table `incentive_application`
--
ALTER TABLE `incentive_application`
  ADD PRIMARY KEY (`IA_ID`),
  ADD KEY `DI_ID` (`DI_ID`),
  ADD KEY `HI_ID` (`HI_ID`),
  ADD KEY `Staff_IC` (`Staff_IC`),
  ADD KEY `User_IC` (`User_IC`);

--
-- Indexes for table `marriagecard_application`
--
ALTER TABLE `marriagecard_application`
  ADD PRIMARY KEY (`CardApplicationNo`),
  ADD KEY `MC_PaymentNo` (`MC_PaymentNo`),
  ADD KEY `Staff_IC` (`Staff_IC`);

--
-- Indexes for table `marriage_application`
--
ALTER TABLE `marriage_application`
  ADD PRIMARY KEY (`MA_ID`),
  ADD KEY `User_IC` (`User_IC`),
  ADD KEY `Staff_IC` (`Staff_IC`),
  ADD KEY `Saksi_IC` (`Saksi_IC`),
  ADD KEY `Wali_IC` (`Wali_IC`),
  ADD KEY `Test_ID` (`Test_ID`),
  ADD KEY `Partner_ID` (`Partner_ID`);

--
-- Indexes for table `marriage_prep_course`
--
ALTER TABLE `marriage_prep_course`
  ADD PRIMARY KEY (`MPC_SiriTaklimat`),
  ADD KEY `Staff_IC` (`Staff_IC`),
  ADD KEY `Attendance_ID` (`Attendance_ID`);

--
-- Indexes for table `marriage_registration`
--
ALTER TABLE `marriage_registration`
  ADD PRIMARY KEY (`RegistrationNo`);

--
-- Indexes for table `mc_payment_info`
--
ALTER TABLE `mc_payment_info`
  ADD PRIMARY KEY (`MC_PaymentNo`);

--
-- Indexes for table `mpc_attendance`
--
ALTER TABLE `mpc_attendance`
  ADD PRIMARY KEY (`Attendance_ID`);

--
-- Indexes for table `mr_payment_info`
--
ALTER TABLE `mr_payment_info`
  ADD PRIMARY KEY (`MR_PaymentNo`);

--
-- Indexes for table `saksi_info`
--
ALTER TABLE `saksi_info`
  ADD PRIMARY KEY (`Saksi_IC`);

--
-- Indexes for table `staff_registration_info`
--
ALTER TABLE `staff_registration_info`
  ADD PRIMARY KEY (`Staff_IC`);

--
-- Indexes for table `user_registration_info`
--
ALTER TABLE `user_registration_info`
  ADD PRIMARY KEY (`User_IC`),
  ADD KEY `Partner_ID` (`Partner_ID`);

--
-- Indexes for table `wali_info`
--
ALTER TABLE `wali_info`
  ADD PRIMARY KEY (`Wali_IC`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `marriagecard_application`
--
ALTER TABLE `marriagecard_application`
  MODIFY `CardApplicationNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `marriage_registration`
--
ALTER TABLE `marriage_registration`
  MODIFY `RegistrationNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `consultation`
--
ALTER TABLE `consultation`
  ADD CONSTRAINT `consultation_ibfk_1` FOREIGN KEY (`Staff_IC`) REFERENCES `staff_registration_info1` (`Staff_IC`),
  ADD CONSTRAINT `consultation_ibfk_2` FOREIGN KEY (`User_IC`) REFERENCES `user_registration_info1` (`User_IC`);

--
-- Constraints for table `incentive_application`
--
ALTER TABLE `incentive_application`
  ADD CONSTRAINT `incentive_application_ibfk_1` FOREIGN KEY (`DI_ID`) REFERENCES `document_info` (`DI_ID`),
  ADD CONSTRAINT `incentive_application_ibfk_2` FOREIGN KEY (`HI_ID`) REFERENCES `heir_info` (`HI_ID`),
  ADD CONSTRAINT `incentive_application_ibfk_3` FOREIGN KEY (`Staff_IC`) REFERENCES `staff_registration_info1` (`Staff_IC`),
  ADD CONSTRAINT `incentive_application_ibfk_4` FOREIGN KEY (`User_IC`) REFERENCES `user_registration_info1` (`User_IC`);

--
-- Constraints for table `marriagecard_application`
--
ALTER TABLE `marriagecard_application`
  ADD CONSTRAINT `marriagecard_application_ibfk_1` FOREIGN KEY (`MC_PaymentNo`) REFERENCES `mc_payment_info` (`MC_PaymentNo`);

--
-- Constraints for table `marriage_application`
--
ALTER TABLE `marriage_application`
  ADD CONSTRAINT `marriage_application_ibfk_1` FOREIGN KEY (`User_IC`) REFERENCES `user_registration_info1` (`User_IC`),
  ADD CONSTRAINT `marriage_application_ibfk_2` FOREIGN KEY (`Staff_IC`) REFERENCES `staff_registration_info1` (`Staff_IC`),
  ADD CONSTRAINT `marriage_application_ibfk_3` FOREIGN KEY (`Saksi_IC`) REFERENCES `saksi_info` (`Saksi_IC`),
  ADD CONSTRAINT `marriage_application_ibfk_4` FOREIGN KEY (`Wali_IC`) REFERENCES `wali_info` (`Wali_IC`),
  ADD CONSTRAINT `marriage_application_ibfk_5` FOREIGN KEY (`Test_ID`) REFERENCES `hiv_test_result` (`Test_ID`),
  ADD CONSTRAINT `marriage_application_ibfk_6` FOREIGN KEY (`Partner_ID`) REFERENCES `applicant_partner_info` (`Partner_IC`);

--
-- Constraints for table `marriage_prep_course`
--
ALTER TABLE `marriage_prep_course`
  ADD CONSTRAINT `marriage_prep_course_ibfk_1` FOREIGN KEY (`Staff_IC`) REFERENCES `staff_registration_info1` (`Staff_IC`),
  ADD CONSTRAINT `marriage_prep_course_ibfk_2` FOREIGN KEY (`Attendance_ID`) REFERENCES `mpc_attendance` (`Attendance_ID`);

--
-- Constraints for table `user_registration_info`
--
ALTER TABLE `user_registration_info`
  ADD CONSTRAINT `user_registration_info_ibfk_1` FOREIGN KEY (`Partner_ID`) REFERENCES `applicant_partner_info` (`Partner_IC`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
