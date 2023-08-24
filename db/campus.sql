-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2023 at 09:52 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `campus`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` bigint(20) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `name`, `email`, `password`) VALUES
(1, 'Placement Officer', 'bgsbu@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(50) DEFAULT NULL,
  `job_id` bigint(50) DEFAULT NULL,
  `applied_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `user_id`, `job_id`, `applied_on`) VALUES
(6, 32, 11, '2023-06-16 05:15:23'),
(7, 32, 11, '2023-06-17 10:40:53'),
(8, 32, 11, '2023-06-25 16:03:27'),
(9, 36, 11, '2023-07-04 05:31:48'),
(10, 32, 12, '2023-08-01 17:59:48'),
(11, 37, 11, '2023-08-01 18:11:43'),
(12, 37, 12, '2023-08-01 18:19:43');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` bigint(20) NOT NULL,
  `name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Accounting / Finance'),
(2, 'Information Technology'),
(3, 'Healthcare / Pharma'),
(4, 'Manufacturing'),
(5, 'Scientist');

-- --------------------------------------------------------

--
-- Table structure for table `company_login`
--

CREATE TABLE `company_login` (
  `id` bigint(20) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `about` varchar(3000) DEFAULT NULL,
  `status` varchar(20) DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_login`
--

INSERT INTO `company_login` (`id`, `name`, `email`, `password`, `phone`, `about`, `status`) VALUES
(9, 'code today', 'codetoday@gmail.com', 'code@123', '9596061005', 'software developement', 'Confirm'),
(10, 'google', 'google@gmail.com', '123456', '8896401911', 'we developemet', 'Confirm'),
(11, 'junaid', 'admin@gmail.com', 'admin', '4939483583', 'scsf', 'Confirm');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) NOT NULL,
  `company_id` bigint(30) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `job_type` varchar(50) DEFAULT NULL,
  `skills` varchar(100) DEFAULT NULL,
  `salary` varchar(50) DEFAULT NULL,
  `industry` varchar(50) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL,
  `qualification` varchar(50) DEFAULT NULL,
  `grd_marks` varchar(20) NOT NULL,
  `experience` varchar(50) DEFAULT NULL,
  `description` varchar(20000) DEFAULT NULL,
  `posts` varchar(20) DEFAULT NULL,
  `dop` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `approved` varchar(20) DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `company_id`, `title`, `location`, `job_type`, `skills`, `salary`, `industry`, `role`, `qualification`, `grd_marks`, `experience`, `description`, `posts`, `dop`, `approved`) VALUES
(11, 9, 'web developer', 'rajouri', 'Permanent Job, Full Time', 'html css js bootstrap node react', '25000', '1', 'junior developer', 'mca', '75', 'Fresher', 'web developer', '15', '2023-08-01 17:54:01', 'Posted'),
(12, 9, 'Accountant', 'Something', 'Permanent Job, Full Time', 'Imba', '50000', '2', 'Accountant', 'IMBA', '55', 'Fresher', 'Hey', '1', '2023-08-01 17:57:44', 'Posted');

-- --------------------------------------------------------

--
-- Table structure for table `my_details`
--

CREATE TABLE `my_details` (
  `id` bigint(20) NOT NULL,
  `userid` bigint(20) DEFAULT NULL,
  `grad` varchar(100) DEFAULT NULL,
  `college` varchar(100) DEFAULT NULL,
  `per_grad` varchar(100) DEFAULT NULL,
  `pg` varchar(100) DEFAULT NULL,
  `un` varchar(100) DEFAULT NULL,
  `per_pg` varchar(100) DEFAULT NULL,
  `other` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `my_details`
--

INSERT INTO `my_details` (`id`, `userid`, `grad`, `college`, `per_grad`, `pg`, `un`, `per_pg`, `other`) VALUES
(11, 32, 'BCA', 'OTHER', '69', 'MCA', 'OTHER', '85', 'c');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) NOT NULL,
  `review` varchar(500) DEFAULT NULL,
  `rating` varchar(20) DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `review`, `rating`, `user_id`) VALUES
(1, ' this is the best app', '5', 36);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `industry` varchar(50) DEFAULT NULL,
  `experience` varchar(100) NOT NULL,
  `address` varchar(200) DEFAULT NULL,
  `about` varchar(500) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `doj` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `resume` varchar(500) NOT NULL,
  `profile` varchar(500) NOT NULL,
  `notification` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `industry`, `experience`, `address`, `about`, `password`, `doj`, `status`, `resume`, `profile`, `notification`) VALUES
(32, 'TAWSEEF BASHIR', 'bhatkt71@gmail.com', '09596061005', 'Information Technology', '1', 'ganderal', 'fresher lookig for web developement', '123456', '2023-06-15 17:24:02', 1, 'resumes/16959191771692808889V-Connect (DCS BGSBU).pdf', 'img/9888737281692808757anees-min.jpg', NULL),
(33, 'naina ', 'naina@gmail.com', '7889640191', 'Information Technology', '2', 'srinagar', 'mern stack', '123456', '2023-06-19 04:44:57', 0, '', 'img/image.png', NULL),
(38, 'Anees', 'anees@gmail.com', '9018267271', '1', '1', 'Safapora Ganderbal', 'Web Developer', '123456', '2023-08-23 17:54:10', 1, '', 'img/10425655621692816119anees-min.jpg', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `job_id` (`job_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_login`
--
ALTER TABLE `company_login`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company_id` (`company_id`);

--
-- Indexes for table `my_details`
--
ALTER TABLE `my_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `company_login`
--
ALTER TABLE `company_login`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `my_details`
--
ALTER TABLE `my_details`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applications`
--
ALTER TABLE `applications`
  ADD CONSTRAINT `applications_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `applications_ibfk_2` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`);

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `company_login` (`id`);

--
-- Constraints for table `my_details`
--
ALTER TABLE `my_details`
  ADD CONSTRAINT `my_details_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
