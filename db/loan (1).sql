-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2024 at 11:26 AM
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
-- Database: `loan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_id` int(100) NOT NULL,
  `Admin_Name` varchar(100) NOT NULL,
  `Admin_Email` varchar(100) NOT NULL,
  `Admin_Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_id`, `Admin_Name`, `Admin_Email`, `Admin_Password`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE `loan` (
  `loan_id` int(11) NOT NULL,
  `loan_name` varchar(1000) NOT NULL,
  `loan_image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loan`
--

INSERT INTO `loan` (`loan_id`, `loan_name`, `loan_image`) VALUES
(1, 'Home Loan', '1713000186.png'),
(2, 'Auto Loans', '1712897029.png'),
(4, 'Personal Loan Scheme', '1712897103.png'),
(5, 'Personal Gold Loan', '1712897165.png');

-- --------------------------------------------------------

--
-- Table structure for table `loan_application`
--

CREATE TABLE `loan_application` (
  `loan_id` int(100) NOT NULL,
  `category_id` int(11) NOT NULL,
  `Name` varchar(1000) NOT NULL,
  `Email` varchar(1000) NOT NULL,
  `Phone_number` varchar(1000) NOT NULL,
  `Address` varchar(1000) NOT NULL,
  `Age` int(100) NOT NULL,
  `Monthly_income` varchar(1000) NOT NULL,
  `Loan_amount` varchar(1000) NOT NULL,
  `Loan_status` varchar(1000) NOT NULL,
  `document_status` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loan_application`
--

INSERT INTO `loan_application` (`loan_id`, `category_id`, `Name`, `Email`, `Phone_number`, `Address`, `Age`, `Monthly_income`, `Loan_amount`, `Loan_status`, `document_status`) VALUES
(1, 3, 'Sona Thomas', 'sona@gmail.com', '9876543210', 'ollur thrisur', 20, 'NIL', '10 Lakh', 'Approved', 'Documents Uploaded');

-- --------------------------------------------------------

--
-- Table structure for table `loan_category`
--

CREATE TABLE `loan_category` (
  `lc_category_id` int(11) NOT NULL,
  `lc_loan_id` int(11) NOT NULL,
  `lc_category_name` varchar(1000) NOT NULL,
  `lc_interest` varchar(1000) NOT NULL,
  `lc_limit` varchar(1000) NOT NULL,
  `lc_tenure` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loan_category`
--

INSERT INTO `loan_category` (`lc_category_id`, `lc_loan_id`, `lc_category_name`, `lc_interest`, `lc_limit`, `lc_tenure`) VALUES
(1, 1, 'HOME LOAN – GENERAL', 'Up to Rs 5 lakh – 9.50 %   ; Above 5 lakh – 10.50 %', 'For Construction of new house - up to 30 lakh  ; For Renovation/Addition/For others - up to 40 lakhs', 'Up to a maximum of 20 years. (240 monthly installments) ; For renovation/Addition – up to 10 years.'),
(3, 4, 'EDUCATION LOAN', '10.99% onwards', 'Studies in India - Maximum Rs.10 lakhs ;  Studies Abroad - Maximum Rs.30 lakhs', 'Repayment holiday /Moratorium -Course period +1 year, or 6 months after getting job, whichever is earlier. The loan to be repaid in 5-7 years after commencement of repayment. If the student is not able to complete the course within the scheduled time, extension of time for completion of course may be permitted for a maximum period of 2 years.'),
(4, 4, 'LAPTOP/TABLET LOAN', '9.90% p.a. onwards', 'Lap top - Maximum of Rs. 50000 or 90% of the cost of laptop computer including connectivity charges whichever is less. Tablet - Maximum of Rs. 25000 or 90% of the cost of tablet including connectivity charges whichever is less.', 'Maximum period of 24 months as EMI.');

-- --------------------------------------------------------

--
-- Table structure for table `upload_document`
--

CREATE TABLE `upload_document` (
  `document_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `loan_id` int(11) NOT NULL,
  `User_Email` varchar(100) NOT NULL,
  `monthly_income` varchar(100) NOT NULL,
  `loan_ammount` varchar(1000) NOT NULL,
  `Aadhar` varchar(100) NOT NULL,
  `salary_slip` varchar(100) NOT NULL,
  `asset_document` varchar(100) NOT NULL,
  `document_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `upload_document`
--

INSERT INTO `upload_document` (`document_id`, `user_id`, `loan_id`, `User_Email`, `monthly_income`, `loan_ammount`, `Aadhar`, `salary_slip`, `asset_document`, `document_status`) VALUES
(1, 1, 1, 'sona@gmail.com', 'NIL', '10 Lakh', '1712918701.png', '1712918701.pdf', '1712918701.pdf', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_id` int(100) NOT NULL,
  `User_Name` varchar(100) NOT NULL,
  `User_Email` varchar(100) NOT NULL,
  `User_Phone_number` varchar(100) NOT NULL,
  `User_Address` varchar(100) NOT NULL,
  `User_Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_id`, `User_Name`, `User_Email`, `User_Phone_number`, `User_Address`, `User_Password`) VALUES
(1, 'Sona Thomas', 'sona@gmail.com', '9876543210', 'ollur thrisur', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_id`);

--
-- Indexes for table `loan`
--
ALTER TABLE `loan`
  ADD PRIMARY KEY (`loan_id`);

--
-- Indexes for table `loan_application`
--
ALTER TABLE `loan_application`
  ADD PRIMARY KEY (`loan_id`);

--
-- Indexes for table `loan_category`
--
ALTER TABLE `loan_category`
  ADD PRIMARY KEY (`lc_category_id`);

--
-- Indexes for table `upload_document`
--
ALTER TABLE `upload_document`
  ADD PRIMARY KEY (`document_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Admin_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `loan`
--
ALTER TABLE `loan`
  MODIFY `loan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `loan_application`
--
ALTER TABLE `loan_application`
  MODIFY `loan_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `loan_category`
--
ALTER TABLE `loan_category`
  MODIFY `lc_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `upload_document`
--
ALTER TABLE `upload_document`
  MODIFY `document_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
