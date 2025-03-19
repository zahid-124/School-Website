-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2022 at 05:06 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sjr_academy`
--

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `class_name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `class_name`, `phone`) VALUES
(1, 'CLASS SIX', '01700000000'),
(2, 'CLASS SEVEN', '01511111111'),
(3, 'CLASS EIGHT', '01822222222'),
(4, 'CLASS NINE', '01933333333'),
(5, 'CLASS TEN', '01644444444'),
(6, 'Not Available', '01845219875');

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` int(11) NOT NULL,
  `designation_name` varchar(100) NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `designation_name`, `value`) VALUES
(1, 'Head Master', 100),
(2, 'Assistant Head Master', 70),
(3, 'Assistant Teachers', 50),
(4, 'No Designation', 0);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `designation` int(11) NOT NULL,
  `class` int(11) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `join_date` date NOT NULL,
  `cv` varchar(50) NOT NULL DEFAULT 'default.pdf',
  `photo` varchar(50) NOT NULL DEFAULT 'default.jpg',
  `category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `phone`, `email`, `designation`, `class`, `subject`, `join_date`, `cv`, `photo`, `category`) VALUES
(3, 'Jahid Hasan', '01521122542', 'jahid.jkkniu.cse@gmail.com', 1, 1, '', '2021-01-02', '3.pdf', '3.png', 1),
(4, 'Jahid', '01521122542', 'jahid.jkkniu.cse@gmail.com', 1, 1, '', '2020-01-04', '4.pdf', '4.png', 1),
(7, 'Zahid Hasan', '01521122542', '0oneto34@gmail.com', 4, 5, '', '2022-02-24', '7.pdf', '7.PNG', 2),
(8, 'Zahid Hasan', '01521122543', 'admin@gmail.com', 3, 3, 'Bangla', '2022-02-16', '8.docx', '8.png', 1),
(9, 'Reduan Islam Rony', '01729782511', 'rony17102026@gmail.com', 2, 4, 'English', '2022-02-11', '9.pdf', '9.jpg', 1),
(10, 'Reduan Islam Rony', '01729782511', 'rony17102026@gmail.com', 2, 5, 'Bangla', '2022-03-01', '10.doc', '10.jpg', 1),
(11, 'Evan Shareef', '01510252525', 'test@any.com', 4, 1, 'English', '2022-02-17', '11.doc', '11.jpg', 3),
(12, 'Moksedul Alam', '01876745400', 'moksedul18102026@gmail.com', 3, 5, 'Math', '2021-12-30', '12.docx', '12.jpg', 1),
(13, 'Arfan Uddin', '01521225566', 'admin@gmail.com', -1, 3, 'Bangla', '2022-01-30', '13.pdf', '13.jpg', 2),
(14, 'Zahid Hasan', '01521122543', 'jhasan576@gmail.com', 4, 4, 'Not Available', '2020-05-12', '14.pdf', '14.jpg', 3),
(15, 'Tamanna Khatun', '01876745400', 'tamanna@gmail.com', -1, 3, 'Physics', '2022-02-18', '15.pdf', '15.png', 1),
(16, 'Marjia Sultana', '01725456555', 'marjia@gmail.com', 4, 6, 'Not Available', '2022-01-31', '16.pdf', '16.png', 3),
(17, 'Sohel Rana', '01401235567', 'rana123@gmail.com', 4, 6, 'Not Available', '2022-02-17', '17.docx', '17.png', 3),
(18, 'Reduan Islam Rony', '01521225566', 'rony17102026@gmail.com', 4, 6, '', '2022-01-31', '18.pdf', '18.jpg', 3),
(19, 'Khadiza Akter', '01510252525', 'khadiza4567@gmail.com', 3, 1, 'Science', '2022-02-16', '19.pdf', '19.png', 1),
(20, 'Md. Palash', '01789023423', 'palash657@gmail.com', 4, 6, 'Not Available', '2022-02-02', '20.docx', '20.jpg', 3),
(21, 'Md. Mamun', '01510252525', 'mamun89399@gmail.com', 3, 4, 'Agriculture', '2022-02-10', '21.pdf', '21.jpg', 1),
(22, 'Zahid Hasan', '01521225566', 'jahid.jkkniu.cse@gmail.com', 4, 6, 'Not Available', '2022-02-22', '22.pdf', '22.jpg', 2),
(23, 'Khadiza Akter', '01876745400', 'admin@gmail.com', -1, 4, 'Not Available', '2022-02-24', '23.pdf', '23.jpg', 2),
(24, 'Khadiza Akter', '01510252525', 'khadiza4567@gmail.com', 4, 6, 'Not Available', '2022-01-30', '24.pdf', '24.jpg', 2),
(25, 'Reduan Islam Rony', '01521122543', 'rony17102026@gmail.com', 4, 6, 'Not Available', '2022-02-11', '25.pdf', '25.jpg', 2),
(26, 'Admin', '01521225566', 'admin@gmail.com', 4, 6, 'Not Available', '2022-02-08', '26.pdf', '26.png', 2),
(27, 'Khadiza Akter', '01521122543', 'khadiza4567@gmail.com', 4, 6, 'Not Available', '2022-01-11', '27.pdf', '27.png', 2);

-- --------------------------------------------------------

--
-- Table structure for table `employee_categories`
--

CREATE TABLE `employee_categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_categories`
--

INSERT INTO `employee_categories` (`id`, `category_name`) VALUES
(1, 'Teachers'),
(2, 'Staff'),
(3, 'Governing Body');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `title` varchar(150) NOT NULL,
  `description` varchar(500) NOT NULL,
  `class` int(11) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `start_date`, `end_date`, `title`, `description`, `class`, `link`) VALUES
(8, '2022-02-25', '2022-02-28', 'Admission notice', '২০২০-২০২১ শিক্ষাবর্ষে ১ম বর্ষ স্নাতক (সম্মান) শ্রেণিতে ভর্তির বিজ্ঞপ্তি', 1, '8.pdf'),
(9, '2022-02-27', '2022-03-11', 'SSC Result 2022', 'SSC 2022 result published ', 2, '9.pdf'),
(11, '2022-02-27', '2022-03-12', 'Winter vacation 2022 ', 'Winter vacation 2022 will be started from 21st December', 3, '11.pdf'),
(12, '2022-02-27', '2022-03-11', 'Admission notice 2', '২০২০-২০২১ শিক্ষাবর্ষে ১ম বর্ষ স্নাতক (সম্মান) শ্রেণিতে ভর্তির বিজ্ঞপ্তি', 1, '12.pdf'),
(13, '2022-02-28', '2022-03-09', 'Summer vacation 2022', 'Summer vacation 2022 will be started from 21st December', 4, '13.pdf'),
(14, '2022-02-22', '2022-03-10', 'HSC Result 2022', 'HSC 2022 result published', 5, '14.pdf'),
(15, '2022-02-09', '2022-02-11', 'Job Circular', 'Job Circular for the post of Assistant Progrmmer', 6, '15.pdf'),
(16, '2022-02-28', '2022-03-03', 'project presentation day', 'project for final year promotions will be held todat', 5, '16.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_categories`
--
ALTER TABLE `employee_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `employee_categories`
--
ALTER TABLE `employee_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
