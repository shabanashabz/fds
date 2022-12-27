-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2022 at 05:31 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fds`
--

-- --------------------------------------------------------

--
-- Table structure for table `eventmanagement`
--

CREATE TABLE `eventmanagement` (
  `mng_id` int(50) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email_id` varchar(150) NOT NULL,
  `phn_number` bigint(50) NOT NULL,
  `address` varchar(150) NOT NULL,
  `location` varchar(150) NOT NULL,
  `license` varchar(150) NOT NULL,
  `date` datetime NOT NULL,
  `created_by` int(50) NOT NULL,
  `status` int(150) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eventmanagement`
--

INSERT INTO `eventmanagement` (`mng_id`, `name`, `email_id`, `phn_number`, `address`, `location`, `license`, `date`, `created_by`, `status`) VALUES
(6, 'Shabana', 'shabanakm@gmail.com', 7559058938, 'Esse sed modi volupt', 'Thrissur Medical College Hospital, Thrissur, Kerala, India', 'license_1659338431.', '0000-00-00 00:00:00', 46, 1),
(7, 'anu', 'anu@gmail.com', 7896541131, 'karivil parambil', 'Ernakulam Town Railway Station(North), Ernakulam North, Ayyappankavu, Ernakulam, Kerala, India', 'license_1659348259.', '0000-00-00 00:00:00', 47, 1),
(8, 'SIVA', 'siv@gmail.com', 7896541131, 'streat 4', 'Trichur Towers, TB Road, Veliyannur, Thrissur, Kerala, India', 'license_1659406375.', '0000-00-00 00:00:00', 50, 1),
(9, 'aju', 'aju@gmail.com', 9867456723, 'Amet ut voluptate d', 'perumbilav', 'license_1663213913.pptx', '0000-00-00 00:00:00', 41, 1),
(10, 'ashik', 'ashik@gmail.com', 7894565698, 'kambrans house', 'Round The Global Diner, Thrissur, Thrissur - Shoranur Road, Green Park, Peringavu, Thrissur, Kerala, India', 'license_1663214201.pdf', '0000-00-00 00:00:00', 37, 1),
(11, 'Shameemul Haque P', 'haa@gmail.com', 9867453467, 'Amet ut voluptate d', 'Thrissur Medical College Hospital, Thrissur, Kerala, India', 'license_1663215462.', '0000-00-00 00:00:00', 34, 1);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `events_id` int(50) NOT NULL,
  `name` varchar(150) NOT NULL,
  `phn_number` bigint(10) NOT NULL,
  `email_id` varchar(150) NOT NULL,
  `address` varchar(150) NOT NULL,
  `location` varchar(150) NOT NULL,
  `item` varchar(150) NOT NULL,
  `veg_quantity` int(50) NOT NULL,
  `non_veg_quantity` int(50) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `created_by` int(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`events_id`, `name`, `phn_number`, `email_id`, `address`, `location`, `item`, `veg_quantity`, `non_veg_quantity`, `date`, `created_by`, `status`) VALUES
(3, 'Inaguration', 7896541131, 'siv@gmail.com', 'Jupiter Mall', 'chalakudy', 'veg and non veg', 2000, 1300, '2022-08-02', 50, 1),
(4, 'Christen Boone', 7896541131, 'siv@gmail.com', 'Eos aute veritatis ', 'Quis delectus est q', 'Dolor consequatur at', 657, 61950, '2022-08-02', 50, 1),
(5, 'marriage', 7896541131, 'siv@gmail.com', 'Esse sed modi volupt', 'idukki', 'Biriyani ,Chicken,Beaf,rice,sambar,payasam', 600, 600, '2022-08-02', 50, 1),
(6, 'marriage', 7896541131, 'fathimaaa@gmail.com', 'Esse sed modi volupt', 'Idukki Wildlife Sanctuary, Idukki, Kerala, India', 'Biriyani ,Chicken,Beaf,rice,sambar,payasam', 550, 860, '2022-09-14', 46, 1),
(7, 'Marriage Function', 7896541131, 'fathimaaa@gmail.com', 'kaithodathil', 'thrissur', 'Biriyani ,Chicken,Beaf,rice,sambar,payasam', 750, 850, '2022-09-15', 46, 1),
(8, 'Engagement', 7896541131, 'anu@gmail.com', 'Hibas Auditorium', 'kunnamkulam', 'sadya pappada sambar,fish', 1500, 600, '2022-09-15', 47, 1),
(9, 'Inaguration Function', 7896541131, 'siv@gmail.com', 'Jupiter Mall', 'thrissur', 'Ved and Non Veg items', 2000, 1200, '2022-09-15', 50, 1),
(10, 'Marriage', 9867456723, 'aju@gmail.com', 'thoppil house', 'permbilav', 'sadya pappada sambar,fish,beef', 700, 300, '2022-09-15', 41, 1),
(11, 'Function', 7894565698, 'ashik@gmail.com', 'Anim asperiores maio', 'Round The Global Diner, Thrissur, Thrissur - Shoranur Road, Green Park, Peringavu, Thrissur, Kerala, India', 'chappathi,chicken,rice,veg curry', 500, 450, '2022-09-15', 37, 1),
(12, 'Engagement', 9867453467, 'haa@gmail.com', 'chelanchuvttil', 'Guruvayur Temple, Guruvayur Devaswom, East Nada, Guruvayur, Kerala, India', 'sadya pappada sambar,fish,beef', 300, 400, '2022-09-15', 34, 1),
(13, 'marriage', 7896541131, 'fathimaaa@gmail.com', 'Anim asperiores maio', 'thrissur', 'Biriyani ,Chicken,Beaf,rice,sambar,payasam', 400, 600, '2022-09-15', 46, 1),
(14, 'hjik', 7559058938, 'shabanakm@gmail.com', 'yuio', 'Idukki Dam, Cheruthony, Idukki Township, Kerala, India', 'Biriyani ,Chicken,Beaf,rice,sambar,payasam', 9000, 870, '2022-09-15', 46, 1);

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE `organization` (
  `org_id` int(50) NOT NULL,
  `ev_id` int(50) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email_id` varchar(150) NOT NULL,
  `phn_number` bigint(50) NOT NULL,
  `no_members` int(150) NOT NULL,
  `age_group` enum('children','youth','adults','seniors') NOT NULL,
  `address` varchar(150) NOT NULL,
  `location` varchar(150) NOT NULL,
  `license` varchar(150) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` int(50) NOT NULL,
  `status` int(150) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `organization`
--

INSERT INTO `organization` (`org_id`, `ev_id`, `name`, `email_id`, `phn_number`, `no_members`, `age_group`, `address`, `location`, `license`, `date`, `created_by`, `status`) VALUES
(39, 0, 'Shabana', 'shabanakm@gmail.com', 7559058938, 60, 'adults', 'k m k house', 'Muttil, Muttil South, Kerala, India', 'license_1659337921.', '2022-08-01 12:42:01', 45, 1),
(40, 0, 'haque', 'haque@gmail.com', 7894565698, 78, 'adults', 'kamyian house', 'Malappuram kunnummal, Up Hill, Malappuram, Kerala, India', 'license_1659348686.', '2022-08-01 15:41:26', 48, 1),
(41, 0, 'AMBILI PRIYA', 'am@gmail.com', 7894565698, 500, 'youth', 'street 1', 'thrissur.', 'license_1659406240.', '2022-08-02 07:40:40', 49, 1);

-- --------------------------------------------------------

--
-- Table structure for table `quantityy`
--

CREATE TABLE `quantityy` (
  `qunt_id` int(50) NOT NULL,
  `org_id` int(50) NOT NULL,
  `email_id` varchar(300) NOT NULL,
  `prg_id` int(50) NOT NULL,
  `event_email_id` varchar(150) NOT NULL,
  `veg_quantity` int(50) NOT NULL,
  `non_veg_quantity` int(50) NOT NULL,
  `created_by` int(50) NOT NULL,
  `status` int(50) NOT NULL DEFAULT 1,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quantityy`
--

INSERT INTO `quantityy` (`qunt_id`, `org_id`, `email_id`, `prg_id`, `event_email_id`, `veg_quantity`, `non_veg_quantity`, `created_by`, `status`, `date`) VALUES
(15, 39, 'shabanakm@gmail.com', 0, ' fathimaaa@gmail.com', 20, 20, 45, 1, '2022-08-01'),
(16, 39, 'shabanakm@gmail.com', 0, ' fathimaaa@gmail.com', 10, 20, 45, 1, '2022-08-01'),
(17, 40, 'haque@gmail.com', 0, ' anu@gmail.com', 50, 50, 48, 1, '2022-08-01'),
(18, 39, 'shabanakm@gmail.com', 0, ' fathimaaa@gmail.com', 900, 500, 45, 1, '2022-08-01'),
(19, 39, 'shabanakm@gmail.com', 0, ' fathimaaa@gmail.com', 50, 60, 45, 1, '2022-08-01'),
(20, 41, 'am@gmail.com', 0, ' siv@gmail.com', 400, 400, 49, 1, '2022-08-02'),
(21, 41, 'am@gmail.com', 4, ' siv@gmail.com', 40, 50, 49, 1, '2022-08-02'),
(22, 39, 'shabanakm@gmail.com', 6, ' fathimaaa@gmail.com', 40, 40, 45, 1, '2022-09-14'),
(23, 39, 'shabanakm@gmail.com', 7, ' fathimaaa@gmail.com', 100, 50, 45, 1, '2022-09-15'),
(24, 39, 'shabanakm@gmail.com', 7, ' fathimaaa@gmail.com', 50, 50, 45, 1, '2022-09-15');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `regby_id` int(50) NOT NULL,
  `organization` int(150) NOT NULL,
  `event_management` int(50) NOT NULL,
  `status` int(50) NOT NULL DEFAULT 1,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`regby_id`, `organization`, `event_management`, `status`, `date`) VALUES
(0, 0, 0, 0, '2022-08-01 09:42:22'),
(0, 0, 0, 0, '2022-08-01 09:43:11'),
(0, 0, 0, 0, '2022-08-01 09:43:16'),
(0, 0, 0, 0, '2022-08-01 09:43:58'),
(0, 0, 0, 0, '2022-08-01 09:44:02'),
(0, 0, 0, 0, '2022-08-01 09:44:58'),
(0, 0, 0, 0, '2022-08-01 09:45:14'),
(0, 0, 0, 0, '2022-08-01 09:45:35'),
(0, 0, 0, 0, '2022-08-01 09:46:23'),
(0, 0, 0, 0, '2022-08-01 09:46:49'),
(0, 0, 0, 0, '2022-08-01 09:47:11'),
(0, 0, 0, 0, '2022-08-01 09:47:36'),
(0, 0, 0, 0, '2022-08-01 09:47:54'),
(0, 0, 0, 0, '2022-08-01 09:50:08'),
(0, 0, 0, 0, '2022-08-01 10:04:59'),
(0, 0, 2, 1, '2022-08-01 13:00:00'),
(0, 0, 3, 1, '2022-08-01 13:28:56'),
(0, 0, 1, 1, '2022-08-01 14:33:03'),
(0, 0, 3, 1, '2022-08-01 16:13:54'),
(0, 0, 4, 1, '2022-08-01 16:32:47'),
(0, 0, 3, 1, '2022-08-01 23:49:33'),
(0, 0, 3, 1, '2022-08-02 09:15:30'),
(0, 0, 3, 1, '2022-08-02 09:44:34');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `reg_id` int(50) NOT NULL,
  `name` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `email_id` varchar(150) NOT NULL,
  `phn_number` bigint(10) NOT NULL,
  `license` varchar(150) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `type` enum('event','organization') NOT NULL,
  `status` int(50) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`reg_id`, `name`, `password`, `email_id`, `phn_number`, `license`, `date`, `type`, `status`) VALUES
(21, 'haq', '1234', 'h@gmail.com', 542, 'license_1658835082.pdf', '2022-07-26 17:01:22', 'organization', 1),
(30, 'haq', '1234', 'a@gmail.com', 0, 'license_1658920726.pdf', '2022-07-27 16:48:46', 'organization', 1),
(33, 'nna', '1234', 'na@gmail.com', 0, 'license_1658993997.pdf', '2022-07-28 13:09:57', 'event', 1),
(34, 'Shameemul Haque P', '1234', 'haa@gmail.com', 9867453467, 'license_1659000438.pdf', '2022-07-28 14:57:18', 'event', 1),
(36, 'marriage', '1234', 'aa@gmail.com', 1234, 'license_1659000691.pdf', '2022-07-28 15:01:31', 'organization', 1),
(37, 'ashik', '1234', 'ashik@gmail.com', 7894565698, 'license_1659005592.pdf', '2022-07-28 16:23:12', 'event', 1),
(38, 'ajmal', '1234', 'ajmal@gmail.com', 98456, 'license_1659008070.pdf', '2022-07-28 17:04:30', 'event', 1),
(39, 'hijas', '', 'as@gmail.com', 8999, 'license_1659008816.pdf', '2022-07-28 17:16:56', 'event', 1),
(40, 'hijas', '1234', 'asss@gmail.com', 777777, 'license_1659008985.pdf', '2022-07-28 17:19:45', 'organization', 1),
(41, 'aju', '1234', 'aju@gmail.com', 9867456723, 'license_1659009513.pdf', '2022-07-28 17:28:33', 'event', 1),
(42, 'ashkl', '1234', 'ask@gmail.com', 11223, 'license_1659009657.pdf', '2022-07-28 17:30:57', 'organization', 1),
(43, 'Arden.Koss', 'X85PUEuOOhPk_Mt', 'a@b', 388, 'license_1659071704.pdf', '2022-07-29 10:45:04', 'organization', 1),
(44, 'Shameemul Haque P', '12345', 'haqu@gmail.com', 1234567891, 'license_1659195499.jpg', '2022-07-30 21:08:19', 'organization', 1),
(45, 'Shabana', '7559', 'shabanakm@gmail.com', 7559058938, 'license_1659337867.dll', '2022-08-01 12:41:07', 'organization', 1),
(46, 'Shabana', '1234', 'shabanakm@gmail.com', 7559058938, 'license_1659338414.docx', '2022-08-01 12:50:14', 'event', 1),
(47, 'anu', '1234', 'anu@gmail.com', 7896541131, 'license_1659348192.png', '2022-08-01 15:33:12', 'event', 1),
(48, 'haque', '123', 'haque@gmail.com', 7894565698, 'license_1659348645.png', '2022-08-01 15:40:45', 'organization', 1),
(49, 'AMBILI PRIYA', '1234', 'am@gmail.com', 7894565698, 'license_1659406148.png', '2022-08-02 07:39:08', 'organization', 1),
(50, 'SIVA', '1234', 'siv@gmail.com', 7896541131, 'license_1659406307.png', '2022-08-02 07:41:47', 'event', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eventmanagement`
--
ALTER TABLE `eventmanagement`
  ADD PRIMARY KEY (`mng_id`),
  ADD KEY `event` (`created_by`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`events_id`),
  ADD KEY `dgrh` (`created_by`);

--
-- Indexes for table `organization`
--
ALTER TABLE `organization`
  ADD PRIMARY KEY (`org_id`),
  ADD UNIQUE KEY `created_by` (`created_by`);

--
-- Indexes for table `quantityy`
--
ALTER TABLE `quantityy`
  ADD PRIMARY KEY (`qunt_id`),
  ADD KEY `ordrr` (`created_by`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`reg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eventmanagement`
--
ALTER TABLE `eventmanagement`
  MODIFY `mng_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `events_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `organization`
--
ALTER TABLE `organization`
  MODIFY `org_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `quantityy`
--
ALTER TABLE `quantityy`
  MODIFY `qunt_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `reg_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `eventmanagement`
--
ALTER TABLE `eventmanagement`
  ADD CONSTRAINT `event` FOREIGN KEY (`created_by`) REFERENCES `registration` (`reg_id`);

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `dgrh` FOREIGN KEY (`created_by`) REFERENCES `registration` (`reg_id`);

--
-- Constraints for table `organization`
--
ALTER TABLE `organization`
  ADD CONSTRAINT `orgzation` FOREIGN KEY (`created_by`) REFERENCES `registration` (`reg_id`);

--
-- Constraints for table `quantityy`
--
ALTER TABLE `quantityy`
  ADD CONSTRAINT `ordrr` FOREIGN KEY (`created_by`) REFERENCES `registration` (`reg_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
