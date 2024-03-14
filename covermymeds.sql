-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2024 at 07:57 PM
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
-- Database: `covermymeds`
--

-- --------------------------------------------------------

--
-- Table structure for table `drug`
--

CREATE TABLE `drug` (
  `drug_id` int(11) NOT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `dosage` varchar(255) DEFAULT NULL,
  `days_supply` int(11) DEFAULT NULL,
  `primary_diagnosis` varchar(255) DEFAULT NULL,
  `secondary_diagnosis` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `drug`
--

INSERT INTO `drug` (`drug_id`, `patient_id`, `quantity`, `dosage`, `days_supply`, `primary_diagnosis`, `secondary_diagnosis`) VALUES
(1, NULL, 0, 'C69124', 2, 'SDFSDF', 'SDFSDAF'),
(2, NULL, 12, 'C28254', 12, 'dfsdf', 'sdafsdaf'),
(3, NULL, 0, '', 0, '', ''),
(4, NULL, 0, '', 0, '', ''),
(5, NULL, 0, '', 0, '', ''),
(6, NULL, 0, '', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `insurance_state`
--

CREATE TABLE `insurance_state` (
  `insurance_state_id` int(11) NOT NULL,
  `insurance_state_name` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `insurance_state`
--

INSERT INTO `insurance_state` (`insurance_state_id`, `insurance_state_name`) VALUES
(1, 'Alabama'),
(2, 'Alaska'),
(3, 'Arizona'),
(4, 'Arkansas'),
(5, 'California'),
(6, 'Colorado'),
(7, 'Connecticut'),
(8, 'Delaware'),
(9, 'Florida'),
(10, 'Georgia'),
(11, 'Hawaii'),
(12, 'Idaho'),
(13, 'Illinois'),
(14, 'Indiana'),
(15, 'Iowa'),
(16, 'Kansas'),
(17, 'Kentucky'),
(18, 'Louisiana'),
(19, 'Maine'),
(20, 'Maryland'),
(21, 'Massachusetts'),
(22, 'Michigan'),
(23, 'Minnesota'),
(24, 'Mississippi'),
(25, 'Missouri'),
(26, 'Montana'),
(27, 'Nebraska'),
(28, 'Nevada'),
(29, 'New Hampshire'),
(30, 'New Jersey'),
(31, 'New Mexico'),
(32, 'New York'),
(33, 'North Carolina'),
(34, 'North Dakota'),
(35, 'Ohio'),
(36, 'Oklahoma'),
(37, 'Oregon'),
(38, 'Pennsylvania'),
(39, 'Rhode Island'),
(40, 'South Carolina'),
(41, 'South Dakota'),
(42, 'Tennessee'),
(43, 'Texas'),
(44, 'Utah'),
(45, 'Vermont'),
(46, 'Virginia'),
(47, 'Washington'),
(48, 'West Virginia'),
(49, 'Wisconsin'),
(50, 'Wyoming'),
(51, 'Patient Insurance State*Patient Insurance StatePatient Insurance State'),
(52, 'Patient Insurance State*Patient Insurance StatePatient Insurance State'),
(53, 'Patient Insurance State*Patient Insurance StatePatient Insurance State'),
(54, 'Patient Insurance State*Patient Insurance StatePatient Insurance State'),
(55, 'Patient Insurance State*Patient Insurance StatePatient Insurance State'),
(56, 'Patient Insurance State*Patient Insurance StatePatient Insurance State'),
(57, 'Patient Insurance State*Patient Insurance StatePatient Insurance State'),
(58, 'Patient Insurance State*Patient Insurance StatePatient Insurance State'),
(59, 'Patient Insurance State*Patient Insurance StatePatient Insurance State'),
(60, 'Patient Insurance State*Patient Insurance StatePatient Insurance State'),
(61, 'Patient Insurance State*Patient Insurance StatePatient Insurance State'),
(62, 'Patient Insurance State*Patient Insurance StatePatient Insurance State'),
(63, 'Patient Insurance State*Patient Insurance StatePatient Insurance State'),
(64, 'Patient Insurance State*Patient Insurance StatePatient Insurance State'),
(65, 'Patient Insurance State*Patient Insurance StatePatient Insurance State'),
(66, 'Patient Insurance State*Patient Insurance StatePatient Insurance State'),
(67, 'Patient Insurance State*Patient Insurance StatePatient Insurance State'),
(68, 'Patient Insurance State*Patient Insurance StatePatient Insurance State'),
(69, 'Patient Insurance State*Patient Insurance StatePatient Insurance State'),
(70, 'Patient Insurance State*Patient Insurance StatePatient Insurance State'),
(71, 'Patient Insurance State*Patient Insurance StatePatient Insurance State'),
(72, 'Patient Insurance State*Patient Insurance StatePatient Insurance State'),
(73, 'Patient Insurance State*Patient Insurance StatePatient Insurance State'),
(74, 'Patient Insurance State*Patient Insurance StatePatient Insurance State'),
(75, 'Patient Insurance State*Patient Insurance StatePatient Insurance State'),
(76, 'Patient Insurance State*Patient Insurance StatePatient Insurance State'),
(77, 'Patient Insurance State*Patient Insurance StatePatient Insurance State'),
(78, 'Patient Insurance State*Patient Insurance StatePatient Insurance State'),
(79, 'Patient Insurance State*Patient Insurance StatePatient Insurance State');

-- --------------------------------------------------------

--
-- Table structure for table `medication`
--

CREATE TABLE `medication` (
  `id` int(11) NOT NULL,
  `medication_name` varchar(250) DEFAULT NULL,
  `NDC_number` varchar(250) DEFAULT NULL,
  `medication_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medication`
--

INSERT INTO `medication` (`id`, `medication_name`, `NDC_number`, `medication_id`) VALUES
(45, 'Acetaminophen', NULL, NULL),
(46, 'Albuterol', NULL, NULL),
(47, 'Amoxicillin', NULL, NULL),
(48, 'Atorvastatin', NULL, NULL),
(49, 'Benadryl', NULL, NULL),
(50, 'Budesonide', NULL, NULL),
(51, 'Bupropion', NULL, NULL),
(52, 'Cephalexin', NULL, NULL),
(53, 'Cetirizine', NULL, NULL),
(54, 'Ciprofloxacin', NULL, NULL),
(55, 'Clonazepam', NULL, NULL),
(56, 'Clopidogrel', NULL, NULL),
(57, 'Diazepam', NULL, NULL),
(58, 'Diphenhydramine', NULL, NULL),
(59, 'Escitalopram', NULL, NULL),
(60, 'Fluoxetine', NULL, NULL),
(61, 'Furosemide', NULL, NULL),
(62, 'Gabapentin', NULL, NULL),
(63, 'Hydrochlorothiazide', NULL, NULL),
(64, 'Hydrocodone', NULL, NULL),
(65, 'Hydromorphone', NULL, NULL),
(66, 'Ibuprofen', NULL, NULL),
(67, 'Imipramine', NULL, NULL),
(68, 'Insulin', NULL, NULL),
(69, 'Levothyroxine', NULL, NULL),
(70, 'Lisinopril', NULL, NULL),
(71, 'Loratadine', NULL, NULL),
(72, 'Losartan', NULL, NULL),
(73, 'Metformin', NULL, NULL),
(74, 'Metoprolol', NULL, NULL),
(75, 'Naproxen', NULL, NULL),
(76, 'Omeprazole', NULL, NULL),
(77, 'Oxycodone', NULL, NULL),
(78, 'Paracetamol', NULL, NULL),
(79, 'Pantoprazole', NULL, NULL),
(80, 'Prednisone', NULL, NULL),
(81, 'Rosuvastatin', NULL, NULL),
(82, 'Sertraline', NULL, NULL),
(83, 'Simvastatin', NULL, NULL),
(84, 'Tamsulosin', NULL, NULL),
(85, 'Tramadol', NULL, NULL),
(86, 'Valsartan', NULL, NULL),
(87, 'Venlafaxine', NULL, NULL),
(88, 'Zolpidem', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `patient_address_book`
--

CREATE TABLE `patient_address_book` (
  `address_book_id` int(11) NOT NULL,
  `patient_address_book_name` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient_information`
--

CREATE TABLE `patient_information` (
  `patient_id` int(11) NOT NULL,
  `firstName` varchar(250) DEFAULT NULL,
  `lastName` varchar(250) DEFAULT NULL,
  `gender` enum('female','male','unspecified') DEFAULT NULL,
  `birthday` datetime DEFAULT NULL,
  `zip_code` int(250) DEFAULT NULL,
  `patient_address_book_id` int(11) DEFAULT NULL,
  `prefix` varchar(50) DEFAULT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `suffix` varchar(50) DEFAULT NULL,
  `member_id` varchar(50) DEFAULT NULL,
  `medication_id` int(11) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `street2` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `provider_state` varchar(255) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient_information`
--

INSERT INTO `patient_information` (`patient_id`, `firstName`, `lastName`, `gender`, `birthday`, `zip_code`, `patient_address_book_id`, `prefix`, `middle_name`, `suffix`, `member_id`, `medication_id`, `street`, `street2`, `city`, `provider_state`, `phone`) VALUES
(71, 'YZA', 'LEGURO', 'female', '2001-04-08 00:00:00', 34125, NULL, '', '', '', '345345', NULL, 'dfgdfg', 'dfgdf', 'dfgdfsg', 'IL', '234534534'),
(72, 'YZA', 'LEGURO', 'female', '2001-04-08 00:00:00', 464524, NULL, '', '', '', '', NULL, '', '', '', '', ''),
(73, '', '', 'male', '0000-00-00 00:00:00', 0, NULL, '', '', '', '', NULL, '', '', '', '', ''),
(74, '', '', 'male', '0000-00-00 00:00:00', 0, NULL, '', '', '', '', NULL, '', '', '', '', ''),
(75, 'YZA', 'LEGURO', 'male', '2001-04-08 00:00:00', 243576, NULL, '', '', '', '', NULL, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `patient_insurance_state`
--

CREATE TABLE `patient_insurance_state` (
  `insurance_state_id` int(11) NOT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `insurance_state_name` varchar(255) DEFAULT NULL,
  `insurance_state` int(11) DEFAULT NULL,
  `RxBIN` varchar(255) DEFAULT NULL,
  `RxPCN_number` varchar(255) DEFAULT NULL,
  `RxGroup` varchar(255) DEFAULT NULL,
  `plan_PBM_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prior_authorization_forms`
--

CREATE TABLE `prior_authorization_forms` (
  `forms_id` int(11) NOT NULL,
  `pa_forms_name` varchar(255) DEFAULT NULL,
  `pa_forms_description` varchar(255) DEFAULT NULL,
  `pa_forms_pdf` blob DEFAULT NULL,
  `RxBIN` varchar(255) DEFAULT NULL,
  `RxPCN_number` varchar(255) DEFAULT NULL,
  `RxGroup` varchar(255) DEFAULT NULL,
  `plan_PBM_name` varchar(255) DEFAULT NULL,
  `insurance_state_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prior_authorization_forms`
--

INSERT INTO `prior_authorization_forms` (`forms_id`, `pa_forms_name`, `pa_forms_description`, `pa_forms_pdf`, `RxBIN`, `RxPCN_number`, `RxGroup`, `plan_PBM_name`, `insurance_state_name`) VALUES
(1, 'CVS Caremark Non-Medicare Formulary Exception / Prior\n                          Authorization Request Form', 'Prior Authorization for CVS Caremark non-Medicare\r\n                          members (NOT FOR MEDICARE PATIENTS)', NULL, '004336', 'ADV', 'RX 1623', NULL, NULL),
(2, 'Molina Healthcare Mississippi Medicaid Universal Pharmacy Prior Authorization Form ', 'Prior Authorizations for Molina Healthcare Mississippi Medicaid Members ', NULL, '003858', 'A4', 'MOLINANY', NULL, NULL),
(3, 'Humana Electronic PA Form', NULL, NULL, '015581', '03200000', 'X1337', 'Humana Electronic PA Form', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `provider`
--

CREATE TABLE `provider` (
  `provider_id` int(11) NOT NULL,
  `npi` varchar(50) DEFAULT NULL,
  `provider_firstName` varchar(50) DEFAULT NULL,
  `provider_lastName` varchar(50) DEFAULT NULL,
  `street` varchar(50) DEFAULT NULL,
  `street2` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `zip_code` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `fax` varchar(50) DEFAULT NULL,
  `review` enum('yes','no') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `provider`
--

INSERT INTO `provider` (`provider_id`, `npi`, `provider_firstName`, `provider_lastName`, `street`, `street2`, `city`, `state`, `zip_code`, `phone`, `fax`, `review`) VALUES
(1, '345345', 'sdfsdf', 'sdfdsf', 'sadfsdaf', 'sdfsdf', 'asdfsadf', 'FL', '234154', '23453543', 'SDFSDF', 'yes'),
(2, '345345', 'SDFSF', 'ASDFSDAF', 'SDFSADF', 'SDFSDF', 'asdfsadf', 'AK', '234154', '23453543', 'SDFSF', 'yes'),
(3, 'sdfsdf', 'sdfsf', 'asdfsdf', 'sdfsdf', 'sadfsdf', 'sdfsdf', 'IA', '345353', '3453425634', 'sdfsadfs', 'yes'),
(4, '', '', '', '', '', '', '', '', '', '', ''),
(5, '', '', '', '', '', '', '', '', '', '', ''),
(6, '', '', '', '', '', '', '', '', '', '', ''),
(7, '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`) VALUES
(1, 'username', 'password', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drug`
--
ALTER TABLE `drug`
  ADD PRIMARY KEY (`drug_id`);

--
-- Indexes for table `insurance_state`
--
ALTER TABLE `insurance_state`
  ADD PRIMARY KEY (`insurance_state_id`);

--
-- Indexes for table `medication`
--
ALTER TABLE `medication`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_address_book`
--
ALTER TABLE `patient_address_book`
  ADD PRIMARY KEY (`address_book_id`);

--
-- Indexes for table `patient_information`
--
ALTER TABLE `patient_information`
  ADD PRIMARY KEY (`patient_id`),
  ADD KEY `FK_patient_address_book_id` (`patient_address_book_id`),
  ADD KEY `FK_medication` (`medication_id`);

--
-- Indexes for table `patient_insurance_state`
--
ALTER TABLE `patient_insurance_state`
  ADD PRIMARY KEY (`insurance_state_id`),
  ADD KEY `insurance_state` (`insurance_state`),
  ADD KEY `patient_insurance_state_ibfk_1` (`patient_id`);

--
-- Indexes for table `prior_authorization_forms`
--
ALTER TABLE `prior_authorization_forms`
  ADD PRIMARY KEY (`forms_id`);

--
-- Indexes for table `provider`
--
ALTER TABLE `provider`
  ADD PRIMARY KEY (`provider_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `drug`
--
ALTER TABLE `drug`
  MODIFY `drug_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `insurance_state`
--
ALTER TABLE `insurance_state`
  MODIFY `insurance_state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `medication`
--
ALTER TABLE `medication`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `patient_information`
--
ALTER TABLE `patient_information`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `prior_authorization_forms`
--
ALTER TABLE `prior_authorization_forms`
  MODIFY `forms_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `provider`
--
ALTER TABLE `provider`
  MODIFY `provider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `patient_information`
--
ALTER TABLE `patient_information`
  ADD CONSTRAINT `FK_medication` FOREIGN KEY (`medication_id`) REFERENCES `medication` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_patient_address_book_id` FOREIGN KEY (`patient_address_book_id`) REFERENCES `patient_address_book` (`address_book_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `patient_insurance_state`
--
ALTER TABLE `patient_insurance_state`
  ADD CONSTRAINT `insurance_state` FOREIGN KEY (`insurance_state`) REFERENCES `insurance_state` (`insurance_state_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
