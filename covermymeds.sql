-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2024 at 07:02 PM
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
(6, NULL, 0, '', 0, '', ''),
(7, NULL, 0, '', 0, '', ''),
(8, NULL, 0, '', 0, '', ''),
(9, NULL, 0, '', 0, '', ''),
(10, NULL, 0, '', 0, '', ''),
(11, NULL, 0, '', 0, '', ''),
(12, NULL, 0, '', 0, '', ''),
(13, NULL, 0, '', 0, '', ''),
(14, NULL, 12, 'C65032', 12, 'asdfsdf', 'sdfsdf'),
(15, NULL, 0, '', 0, '', '');

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
(84, 'YZA', 'VHEL', 'male', '2001-08-04 00:00:00', 234546, NULL, '', '', '', '', NULL, '', '', '', '', '');

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
-- Table structure for table `priorauthorizationquestions`
--

CREATE TABLE `priorauthorizationquestions` (
  `FormID` int(11) NOT NULL,
  `FormName` varchar(255) DEFAULT NULL,
  `QuestionID` int(11) NOT NULL,
  `QuestionText` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `priorauthorizationquestions`
--

INSERT INTO `priorauthorizationquestions` (`FormID`, `FormName`, `QuestionID`, `QuestionText`) VALUES
(3, 'Humana Electronic PA Form', 1, 'Does the patient have an active seizure disorder?'),
(3, 'Humana Electronic PA Form', 2, 'Does the patient have an active cancer diagnosis or active cancer treatment requiring opioids?'),
(3, 'Humana Electronic PA Form', 3, 'Is the patient in hospice?'),
(3, 'Humana Electronic PA Form', 4, 'Your patient may be prescribed 2 or more anticholinergic (ACH) medications (e.g. antihistamines, antiarrhythmics, antiemetics, antimuscarinics, antiparkinson agents, antispasmodics, skeletal muscle relaxants, antidepressants). Do you attest that the benef'),
(3, 'Humana Electronic PA Form', 5, 'Your patient may be prescribed 3 or more Central Nervous System (CNS) medications (e.g. antidepressants, antipsychotics, benzodiazepines and non benzodiazepine sedative-hypnotics, opioids, antiepileptic drugs). Do you attest that the benefit outweighs the');

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
(1, 'CVS Caremark Non-Medicare Formulary Exception / Prior\n                          Authorization Request Form', 'Prior Authorization for CVS Caremark non-Medicare\r\n                          members (NOT FOR MEDICARE PATIENTS)', NULL, '004336', 'ADV', 'RX 1623', 'CVS Caremark Non-Medicare Formulary Exception / Prior\r\n                          Authorization Request Form', NULL),
(2, 'Molina Healthcare Mississippi Medicaid Universal Pharmacy Prior Authorization Form ', 'Prior Authorizations for Molina Healthcare Mississippi Medicaid Members ', NULL, '003858', 'A4', 'MOLINANY', 'Molina Healthcare Mississippi Medicaid Universal Pharmacy Prior Authorization Form ', NULL),
(3, 'Humana Electronic PA Form', NULL, NULL, '015581', '03200000', 'X1337', 'Humana Electronic PA Form', NULL),
(4, 'Express Scripts Electronic PA Form (2017 NCPDP)', NULL, NULL, NULL, NULL, NULL, 'Express Scripts Electronic PA Form (2017 NCPDP)', NULL),
(5, 'Express Scripts Electronic PA Form (2017 NCPDP)', NULL, NULL, NULL, NULL, NULL, 'Express Scripts Electronic PA Form (2017 NCPDP)', NULL),
(6, 'WellCare Medicare Electronic Prior Authorization Request Form (2017 NCPDP)', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'WellCare Medicare Electronic Prior Authorization Request Form (2017 NCPDP)', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'OptumRx Medicare Part D Electronic Prior Authorization Form (2017 NCPDP)', NULL, NULL, '610097', '9999', 'MDPCSMS', 'OptumRx Medicare Part D Electronic Prior Authorization Form (2017 NCPDP)', NULL),
(9, 'OptumRx Medicaid Electronic Prior Authorization Form (2017 NCPDP)', NULL, NULL, '610494', '4646', NULL, 'OptumRx Medicaid Electronic Prior Authorization Form (2017 NCPDP)', NULL),
(10, 'OptumRx Electronic Prior Authorization Form (2017 NCPDP)', NULL, NULL, '610011', 'IRX', 'BBWORKS', 'OptumRx Electronic Prior Authorization Form (2017 NCPDP)', NULL),
(11, 'Ambetter HIM Electronic Prior Authorization Form 2017 NCPD', NULL, NULL, '004336', 'ADV', 'RX5449', 'Ambetter HIM Electronic Prior Authorization Form 2017 NCPD', NULL),
(12, 'OptumRx Medicare Part D Electronic Prior Authorization Form (2017 NCPDP)', NULL, NULL, '610097', '9999', 'MDPCSMS', 'OptumRx Medicare Part D Electronic Prior Authorization Form (2017 NCPDP)', NULL),
(13, 'OptumRx Medicaid Electronic Prior Authorization Form (2017 NCPDP)', NULL, NULL, '610494', '4646', NULL, 'OptumRx Medicaid Electronic Prior Authorization Form (2017 NCPDP)', NULL),
(14, 'OptumRx Electronic Prior Authorization Form (2017 NCPDP)', NULL, NULL, '610011', 'IRX', 'BBWORKS', 'OptumRx Electronic Prior Authorization Form (2017 NCPDP)', NULL),
(15, 'Ambetter HIM Electronic Prior Authorization Form 2017 NCPD', NULL, NULL, '004336', 'ADV', 'RX5449', 'Ambetter HIM Electronic Prior Authorization Form 2017 NCPD', NULL);

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
(7, '', '', '', '', '', '', '', '', '', '', ''),
(8, '', '', '', '', '', '', '', '', '', '', ''),
(9, '', '', '', '', '', '', '', '', '', '', ''),
(10, '', '', '', '', '', '', '', '', '', '', ''),
(11, '', '', '', '', '', '', '', '', '', '', ''),
(12, '', '', '', '', '', '', '', '', '', '', ''),
(13, '', '', '', '', '', '', '', '', '', '', ''),
(14, '', '', '', '', '', '', '', '', '', '', ''),
(15, '345345', 'SDFSF', 'ASDFSDAF', 'SDFSADF', 'SDFSDF', 'asdfsadf', 'AK', '234154', '23453543', 'SDFSF', 'yes'),
(16, '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `usertype` varchar(50) DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `usertype`) VALUES
(17, 'hannahysabelle', '$2y$10$WrolZhK7v7JPc9xMIpMKfuZ8/MGoS0RfTHvzc5XUlQp', 'user'),
(18, 'hyleguro', 'zxcvbnm', 'user'),
(20, 'yzavhel', '$2y$10$efiUifGWGSEsstm2y4zc7.CIONJB5bVQifYFRmPBV1M', 'user');

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
-- Indexes for table `priorauthorizationquestions`
--
ALTER TABLE `priorauthorizationquestions`
  ADD PRIMARY KEY (`FormID`,`QuestionID`);

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
  MODIFY `drug_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `prior_authorization_forms`
--
ALTER TABLE `prior_authorization_forms`
  MODIFY `forms_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `provider`
--
ALTER TABLE `provider`
  MODIFY `provider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
