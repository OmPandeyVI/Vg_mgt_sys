-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2025 at 02:51 PM
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
-- Database: `vg_mg_sys`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_emp`
--

CREATE TABLE `tbl_emp` (
  `id` int(11) NOT NULL,
  `uid` varchar(50) NOT NULL,
  `salutation` varchar(256) DEFAULT NULL,
  `f_name` varchar(100) DEFAULT NULL,
  `m_name` varchar(100) DEFAULT NULL,
  `l_name` varchar(100) DEFAULT NULL,
  `father's_name` varchar(256) DEFAULT NULL,
  `mother's_name` varchar(256) DEFAULT NULL,
  `marital_status` enum('Single','Married','Divorced','Widowed') DEFAULT NULL,
  `spouse_name` varchar(256) NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `gender` enum('Male','Female','Other','') DEFAULT NULL,
  `primary_phone_no` varchar(11) DEFAULT NULL,
  `alternative_phone_no` varchar(15) DEFAULT NULL,
  `personal_email` varchar(100) NOT NULL,
  `official_email` varchar(100) DEFAULT NULL,
  `current_address` text DEFAULT NULL,
  `permanent_address` text DEFAULT NULL,
  `aadharcard_no` varchar(12) DEFAULT NULL,
  `pancard_no` varchar(10) DEFAULT NULL,
  `bank_name` varchar(100) DEFAULT NULL,
  `bank_acc_no` varchar(100) DEFAULT NULL,
  `ifsc_code` varchar(12) DEFAULT NULL,
  `branch_name` varchar(256) DEFAULT NULL,
  `branch_address` varchar(256) DEFAULT NULL,
  `is_upi_id` enum('Yes','No') DEFAULT NULL,
  `upi_id` varchar(100) DEFAULT NULL,
  `emergency_name` varchar(256) DEFAULT NULL,
  `emergency_relationship` enum('Father','Mother','Spouse','Other') DEFAULT NULL,
  `emergency_phone_no` varchar(100) NOT NULL,
  `nominee_name` varchar(256) DEFAULT NULL,
  `nominee_relationship` enum('Spouse','Parent','Child','Other') DEFAULT NULL,
  `high_education_qualification` enum('10th','12th','Diploma','Bachelor''s','Master''s','PhD') DEFAULT NULL,
  `institute_name` varchar(256) DEFAULT NULL,
  `passing_year` varchar(100) DEFAULT NULL,
  `education_certificate_path` varchar(256) DEFAULT NULL,
  `have_worked_previously` enum('Yes','No') DEFAULT NULL,
  `previous_employer_name` varchar(100) DEFAULT NULL,
  `previous_job_role` varchar(256) DEFAULT NULL,
  `emp_period_start_date` date DEFAULT NULL,
  `emp_period_end_date` date DEFAULT NULL,
  `reason_leaving` text DEFAULT NULL,
  `document_path` varchar(256) DEFAULT NULL,
  `joining_date` date DEFAULT NULL,
  `current_job_role` varchar(100) DEFAULT NULL,
  `current_salary_ctc` decimal(10,2) DEFAULT NULL,
  `in_hand_salary` decimal(10,2) DEFAULT NULL,
  `conveyance` decimal(10,2) DEFAULT NULL,
  `company_loan_advance` enum('Yes','No') DEFAULT NULL,
  `loan_amt_repayment` varchar(256) DEFAULT NULL,
  `official_work_timing` varchar(256) DEFAULT NULL,
  `weekly_off_day` enum('Sunday','Saturday','Rotational') DEFAULT NULL,
  `annual_leave_entitlement` varchar(256) DEFAULT NULL,
  `leave_application_process` text DEFAULT NULL,
  `is_policy_agree` enum('Yes','No') DEFAULT NULL,
  `willing_for_docs` enum('Yes','No') DEFAULT NULL,
  `additional_comments` text DEFAULT NULL,
  `family` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `position` varchar(100) DEFAULT NULL,
  `branch` varchar(100) DEFAULT NULL,
  `date_joined` date DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_emp`
--

INSERT INTO `tbl_emp` (`id`, `uid`, `salutation`, `f_name`, `m_name`, `l_name`, `father's_name`, `mother's_name`, `marital_status`, `spouse_name`, `date_of_birth`, `gender`, `primary_phone_no`, `alternative_phone_no`, `personal_email`, `official_email`, `current_address`, `permanent_address`, `aadharcard_no`, `pancard_no`, `bank_name`, `bank_acc_no`, `ifsc_code`, `branch_name`, `branch_address`, `is_upi_id`, `upi_id`, `emergency_name`, `emergency_relationship`, `emergency_phone_no`, `nominee_name`, `nominee_relationship`, `high_education_qualification`, `institute_name`, `passing_year`, `education_certificate_path`, `have_worked_previously`, `previous_employer_name`, `previous_job_role`, `emp_period_start_date`, `emp_period_end_date`, `reason_leaving`, `document_path`, `joining_date`, `current_job_role`, `current_salary_ctc`, `in_hand_salary`, `conveyance`, `company_loan_advance`, `loan_amt_repayment`, `official_work_timing`, `weekly_off_day`, `annual_leave_entitlement`, `leave_application_process`, `is_policy_agree`, `willing_for_docs`, `additional_comments`, `family`, `position`, `branch`, `date_joined`, `password`, `timestamp`) VALUES
(0, 'vms-0000', '', 'Unauthorised', 'Unauthorised', 'Unauthorised', '', '', 'Single', '', NULL, 'Male', '0', '1234567890', '', 'Unauthorised@gmail.com', 'Unauthorised', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1234.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Unauthorised', 'Unauthorised', 'Unauthorised', '2025-04-09', '$2y$10$5kpPviRdpHR3WqMRUu0mc.TeK5sgQ535AzuJEEH3Rfsy.e7KKlkaS', '2025-04-10 09:20:40'),
(1, 'vms-001', '', 'receptionist', 'receptionist', 'receptionist', '', '', 'Single', '', NULL, 'Male', '0', '1234567890', '', 'receptionist@gmail.com', 'receptionist', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1234.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'receptionist', 'receptionist', 'receptionist', '2025-04-09', '$2y$10$5kpPviRdpHR3WqMRUu0mc.TeK5sgQ535AzuJEEH3Rfsy.e7KKlkaS', '2025-04-08 20:12:59');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_loans`
--

CREATE TABLE `tbl_loans` (
  `id` int(11) NOT NULL,
  `uid` varchar(50) NOT NULL,
  `applied_by` int(11) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `reason` text DEFAULT NULL,
  `duration` varchar(50) DEFAULT NULL,
  `status` enum('Approved','Rejected') DEFAULT NULL,
  `date` date NOT NULL,
  `feedback` text DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_loan_status`
--

CREATE TABLE `tbl_loan_status` (
  `id` int(11) NOT NULL,
  `loan_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `months` int(11) NOT NULL,
  `emi_amount` decimal(10,2) NOT NULL,
  `paid_amount` decimal(10,2) DEFAULT 0.00,
  `pending_amount` decimal(10,2) DEFAULT 0.00,
  `status` enum('Ongoing','Completed') DEFAULT 'Ongoing',
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_logs`
--

CREATE TABLE `tbl_logs` (
  `id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `action` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `ip_address` varchar(255) NOT NULL,
  `user_agent` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_logs`
--

INSERT INTO `tbl_logs` (`id`, `emp_id`, `action`, `status`, `timestamp`, `ip_address`, `user_agent`) VALUES
(12, 1, 'login_request', 'completed', '2025-04-09 06:55:54', '', NULL),
(13, 1, 'login_request', 'completed', '2025-04-09 13:24:31', '', NULL),
(14, 1, 'login_request', 'completed', '2025-04-10 06:30:21', '', NULL),
(15, 1, 'login_request', 'completed', '2025-04-10 06:37:46', '::1', NULL),
(16, 1, 'login_request', 'completed', '2025-04-10 06:44:13', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36'),
(17, 1, 'login_request', 'failed', '2025-04-10 08:44:37', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36'),
(18, 1, 'login_request', 'failed', '2025-04-10 08:44:44', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36'),
(21, 0, 'login_request', 'failed', '2025-04-10 09:21:00', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36'),
(22, 1, 'login_request', 'completed', '2025-04-10 10:27:18', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36'),
(23, 1, 'login_request', 'completed', '2025-04-10 10:27:45', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_meeting_history`
--

CREATE TABLE `tbl_meeting_history` (
  `id` int(11) NOT NULL,
  `uid` varchar(50) NOT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `visitor_id` int(11) DEFAULT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `reason` text DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `in_time` time DEFAULT NULL,
  `out_time` time DEFAULT NULL,
  `payment_status` enum('Paid','Unpaid') DEFAULT NULL,
  `payment_mode` enum('Cash','Card','Online') DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `meeting_status` enum('Scheduled','Completed','Cancelled') DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_meeting_notes`
--

CREATE TABLE `tbl_meeting_notes` (
  `id` int(11) NOT NULL,
  `uid` varchar(50) NOT NULL,
  `meeting_id` int(11) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `files` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`files`)),
  `reminders` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`reminders`)),
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_misc`
--

CREATE TABLE `tbl_misc` (
  `id` int(11) NOT NULL,
  `uid` varchar(50) NOT NULL,
  `applied_by` int(11) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `description` text DEFAULT NULL,
  `proof` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `status` enum('Approved','Rejected') DEFAULT NULL,
  `feedback` text DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `id` int(11) NOT NULL,
  `uid` varchar(50) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `type` enum('Cash','Card','Online','Cheque') DEFAULT NULL,
  `reason` text DEFAULT NULL,
  `note` text DEFAULT NULL,
  `proof` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`proof`)),
  `payment_date` date DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project`
--

CREATE TABLE `tbl_project` (
  `id` int(11) NOT NULL,
  `uid` varchar(256) DEFAULT NULL,
  `project_title` varchar(256) DEFAULT NULL,
  `project_type` varchar(256) DEFAULT NULL,
  `project_manager` int(11) DEFAULT NULL,
  `project_client` varchar(256) DEFAULT NULL,
  `project_status` varchar(256) DEFAULT NULL,
  `file_path` varchar(256) DEFAULT NULL,
  `project_description` varchar(256) DEFAULT NULL,
  `project_start_date` date DEFAULT NULL,
  `project_end_date` date DEFAULT NULL,
  `project_created_by` varchar(256) DEFAULT NULL,
  `timestamp` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_project`
--

INSERT INTO `tbl_project` (`id`, `uid`, `project_title`, `project_type`, `project_manager`, `project_client`, `project_status`, `file_path`, `project_description`, `project_start_date`, `project_end_date`, `project_created_by`, `timestamp`) VALUES
(20, 'prj_680f77b645a29', '', '', 0, '', '', '', '', NULL, NULL, 'admin', '2025-04-28'),
(21, 'prj_680f77ed89734', 'infotech', '1', 1, '1', '1', '../uploads/project/infotech/DAA LAB Q3 OP.png', 'm, ff msd fk', '2025-04-28', '2025-05-11', 'admin', '2025-04-28'),
(22, 'prj_680f780d1cc70', 'infotech2', '1', 1, '1', '1', '../uploads/project/infotech2/DAA LAB Q1 OP.png', 'm, ff msd fk', '2025-04-28', '2025-05-11', 'admin', '2025-04-28');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project_emp`
--

CREATE TABLE `tbl_project_emp` (
  `id` int(11) NOT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  `timestamp` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_project_emp`
--

INSERT INTO `tbl_project_emp` (`id`, `emp_id`, `project_id`, `timestamp`) VALUES
(9, 1, 21, '2025-04-28'),
(10, 1, 22, '2025-04-28');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tasks`
--

CREATE TABLE `tbl_tasks` (
  `id` int(11) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `title` varchar(256) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `project_title` varchar(256) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `assigned_employee` varchar(256) DEFAULT NULL,
  `priority` varchar(256) DEFAULT NULL,
  `tags` int(11) DEFAULT NULL,
  `image_path` varchar(256) DEFAULT NULL,
  `file_path` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_todo`
--

CREATE TABLE `tbl_todo` (
  `id` int(11) NOT NULL,
  `uid` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `create_date` date NOT NULL,
  `create_time` time NOT NULL,
  `isCompleted` tinyint(1) DEFAULT 0,
  `isArchived` tinyint(1) DEFAULT 0,
  `created_by` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_visitor`
--

CREATE TABLE `tbl_visitor` (
  `id` int(11) NOT NULL,
  `uid` varchar(50) NOT NULL,
  `f_name` varchar(100) DEFAULT NULL,
  `m_name` varchar(100) DEFAULT NULL,
  `l_name` varchar(100) DEFAULT NULL,
  `phone_no` varchar(15) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `img` varchar(255) NOT NULL,
  `registered_date` date DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_emp`
--
ALTER TABLE `tbl_emp`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uid` (`uid`);

--
-- Indexes for table `tbl_loans`
--
ALTER TABLE `tbl_loans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uid` (`uid`),
  ADD KEY `applied_by` (`applied_by`);

--
-- Indexes for table `tbl_loan_status`
--
ALTER TABLE `tbl_loan_status`
  ADD PRIMARY KEY (`id`),
  ADD KEY `loan_id` (`loan_id`),
  ADD KEY `emp_id` (`emp_id`);

--
-- Indexes for table `tbl_logs`
--
ALTER TABLE `tbl_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emp_id` (`emp_id`);

--
-- Indexes for table `tbl_meeting_history`
--
ALTER TABLE `tbl_meeting_history`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uid` (`uid`),
  ADD KEY `emp_id` (`emp_id`),
  ADD KEY `tbl_meeting_history_ibfk_1` (`visitor_id`);

--
-- Indexes for table `tbl_meeting_notes`
--
ALTER TABLE `tbl_meeting_notes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uid` (`uid`),
  ADD KEY `meeting_id` (`meeting_id`);

--
-- Indexes for table `tbl_misc`
--
ALTER TABLE `tbl_misc`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uid` (`uid`),
  ADD KEY `applied_by` (`applied_by`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uid` (`uid`);

--
-- Indexes for table `tbl_project`
--
ALTER TABLE `tbl_project`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_escape_pm` (`project_manager`);

--
-- Indexes for table `tbl_project_emp`
--
ALTER TABLE `tbl_project_emp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_project_emp_fk_emp` (`emp_id`),
  ADD KEY `tbl_project_emp_fk_project` (`project_id`);

--
-- Indexes for table `tbl_tasks`
--
ALTER TABLE `tbl_tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_todo`
--
ALTER TABLE `tbl_todo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uid` (`uid`),
  ADD KEY `created_by` (`created_by`);

--
-- Indexes for table `tbl_visitor`
--
ALTER TABLE `tbl_visitor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uid` (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_emp`
--
ALTER TABLE `tbl_emp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_loans`
--
ALTER TABLE `tbl_loans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_loan_status`
--
ALTER TABLE `tbl_loan_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_logs`
--
ALTER TABLE `tbl_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_meeting_history`
--
ALTER TABLE `tbl_meeting_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_meeting_notes`
--
ALTER TABLE `tbl_meeting_notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_misc`
--
ALTER TABLE `tbl_misc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_project`
--
ALTER TABLE `tbl_project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_project_emp`
--
ALTER TABLE `tbl_project_emp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_tasks`
--
ALTER TABLE `tbl_tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_todo`
--
ALTER TABLE `tbl_todo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_visitor`
--
ALTER TABLE `tbl_visitor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_loans`
--
ALTER TABLE `tbl_loans`
  ADD CONSTRAINT `tbl_loans_ibfk_1` FOREIGN KEY (`applied_by`) REFERENCES `tbl_emp` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_loan_status`
--
ALTER TABLE `tbl_loan_status`
  ADD CONSTRAINT `tbl_loan_status_ibfk_1` FOREIGN KEY (`loan_id`) REFERENCES `tbl_loans` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_loan_status_ibfk_2` FOREIGN KEY (`emp_id`) REFERENCES `tbl_emp` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_logs`
--
ALTER TABLE `tbl_logs`
  ADD CONSTRAINT `tbl_logs_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `tbl_emp` (`id`);

--
-- Constraints for table `tbl_meeting_history`
--
ALTER TABLE `tbl_meeting_history`
  ADD CONSTRAINT `tbl_meeting_history_ibfk_1` FOREIGN KEY (`visitor_id`) REFERENCES `tbl_visitor` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_meeting_history_ibfk_2` FOREIGN KEY (`emp_id`) REFERENCES `tbl_emp` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_meeting_notes`
--
ALTER TABLE `tbl_meeting_notes`
  ADD CONSTRAINT `tbl_meeting_notes_ibfk_1` FOREIGN KEY (`meeting_id`) REFERENCES `tbl_meeting_history` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_misc`
--
ALTER TABLE `tbl_misc`
  ADD CONSTRAINT `tbl_misc_ibfk_1` FOREIGN KEY (`applied_by`) REFERENCES `tbl_emp` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_project`
--
ALTER TABLE `tbl_project`
  ADD CONSTRAINT `tbl_escape_pm` FOREIGN KEY (`project_manager`) REFERENCES `tbl_emp` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_project_emp`
--
ALTER TABLE `tbl_project_emp`
  ADD CONSTRAINT `tbl_project_emp_fk_emp` FOREIGN KEY (`emp_id`) REFERENCES `tbl_emp` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_project_emp_fk_project` FOREIGN KEY (`project_id`) REFERENCES `tbl_project` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_todo`
--
ALTER TABLE `tbl_todo`
  ADD CONSTRAINT `tbl_todo_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `tbl_emp` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
