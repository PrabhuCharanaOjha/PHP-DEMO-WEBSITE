-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2021 at 08:36 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sonu`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(255) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `heading`, `description`, `image`) VALUES
(2, 'About', 'We are voluntary groups, created by like-minded people who want to help serve society. ... We have their own set of rules, regulations, and policies, depending on their cause. We are not profit-making or profit-sharing companies. Rather, they help in empowering and bettering our society.  We Help the people by helping us. Come forward for social cause. Our main projects are Digital Education, Skill India, Disability Help, Social Awareness. Donate for Good Cause. Come Help the Society. Donate for NGO.', 'no-image-available.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin_profile`
--

CREATE TABLE `admin_profile` (
  `id` int(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_profile`
--

INSERT INTO `admin_profile` (`id`, `name`, `email`, `pass`) VALUES
(1, 'SONU', 'sonu@admin.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `bankdetails`
--

CREATE TABLE `bankdetails` (
  `id` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `bank` varchar(100) NOT NULL,
  `bankaddress` varchar(100) NOT NULL,
  `accountnumber` varchar(100) NOT NULL,
  `ifsc` varchar(100) NOT NULL,
  `micr` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bankdetails`
--

INSERT INTO `bankdetails` (`id`, `name`, `type`, `bank`, `bankaddress`, `accountnumber`, `ifsc`, `micr`) VALUES
(3, 'unknown', 'unknown', 'bank of baroda', 'cuttack', '98745632145632', '123456ASDF5412', '123456ASDF5412');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(255) NOT NULL,
  `heading` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `heading`, `description`, `image`) VALUES
(2, 'NGO DEMO 1', 'NGO DEMO 1', 'banner.png'),
(3, 'NGO DEMO 1', 'NGO DEMO 1', 'banner.png'),
(4, 'NGO DEMO 1', 'NGO DEMO 1', 'banner.png');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(255) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `causes`
--

CREATE TABLE `causes` (
  `id` int(255) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `mobile`, `message`) VALUES
(2, 'sonu', 'prabhu.ojha.1997@gmail.com', 0, 'sonu message');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(255) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `heading`, `description`, `date`, `image`) VALUES
(1, 'Education of Child', 'We are voluntary groups, created by like-minded people who want to help serve society. ... We have their own set of rules, regulations, and policies, depending on their cause. We are not profit-making or profit-sharing companies. Rather, they help in empowering and bettering our society. We Help the people by helping us. Come forward for social cause. Our main projects are Digital Education, Skill India, Disability Help, Social Awareness. Donate for Good Cause. Come Help the Society. Donate for NGO.	', '2021-04-26', 'no-image-available.jpg'),
(2, 'Education of Child', 'We are voluntary groups, created by like-minded people who want to help serve society. ... We have their own set of rules, regulations, and policies, depending on their cause. We are not profit-making or profit-sharing companies. Rather, they help in empowering and bettering our society. We Help the people by helping us. Come forward for social cause. Our main projects are Digital Education, Skill India, Disability Help, Social Awareness. Donate for Good Cause. Come Help the Society. Donate for NGO.	', '2021-04-26', 'no-image-available.jpg'),
(3, 'Education of Child', 'We are voluntary groups, created by like-minded people who want to help serve society. ... We have their own set of rules, regulations, and policies, depending on their cause. We are not profit-making or profit-sharing companies. Rather, they help in empowering and bettering our society. We Help the people by helping us. Come forward for social cause. Our main projects are Digital Education, Skill India, Disability Help, Social Awareness. Donate for Good Cause. Come Help the Society. Donate for NGO.	', '2021-04-26', 'no-image-available.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(255) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`) VALUES
(2, 'no-image-available.jpg'),
(3, 'no-image-available.jpg'),
(4, 'no-image-available.jpg'),
(5, 'no-image-available.jpg'),
(6, 'no-image-available.jpg'),
(7, 'no-image-available.jpg'),
(8, 'no-image-available.jpg'),
(9, 'no-image-available.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `join_us`
--

CREATE TABLE `join_us` (
  `id` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `blood` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `join_us`
--

INSERT INTO `join_us` (`id`, `name`, `email`, `mobile`, `state`, `city`, `blood`) VALUES
(1, 'sonu', 'prabhu.ojha.1997@gmail.com', 9853192166, 'india', 'cuttack', 'AB+');

-- --------------------------------------------------------

--
-- Table structure for table `mission`
--

CREATE TABLE `mission` (
  `id` int(255) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mission`
--

INSERT INTO `mission` (`id`, `heading`, `description`, `image`) VALUES
(2, 'Mission', 'Mission Image', 'no-image-available.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(255) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `heading`, `description`, `image`) VALUES
(2, 'child Care', 'We Need Your Kind Support. Help Provide Proper Care To children For Their 			Future Growth. Donate Now. Donate Study Material. You can speak with kids.', 'no-image-available.jpg'),
(3, 'Education of Child', 'We Need Your Kind Support. Help Provide Proper Care To children For Their Future Growth. Donate Now. Donate Study Material. You can speak with kids.', 'no-image-available.jpg'),
(4, 'women empowerment', 'We Invest In Rural Women To Create Social & Environmental Change	One Village At A Time. Working To Prevent Gender Inequality, Environmental Damage & Poverty. Support Us Today! Gender Inequality.', 'no-image-available.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `designation`, `message`, `image`) VALUES
(2, 'unknown', 'ceo', 'unknow message', 'profile.png'),
(3, 'unknown', 'ceo', 'unknow message', 'profile.png'),
(4, 'unknown', 'ceo', 'unknow message', 'profile.png'),
(5, 'unknown', 'ceo', 'unknow message', 'profile.png');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(255) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `heading`, `description`, `image`) VALUES
(2, 'unknown', 'unknown message', 'no-image-available.jpg'),
(3, 'unknown', 'unknown message', 'no-image-available.jpg'),
(4, 'unknown', 'unknown message', 'no-image-available.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `vission`
--

CREATE TABLE `vission` (
  `id` int(255) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vission`
--

INSERT INTO `vission` (`id`, `heading`, `description`, `image`) VALUES
(2, 'Vission', 'Vission Message', 'no-image-available.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_profile`
--
ALTER TABLE `admin_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bankdetails`
--
ALTER TABLE `bankdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `causes`
--
ALTER TABLE `causes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `join_us`
--
ALTER TABLE `join_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mission`
--
ALTER TABLE `mission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vission`
--
ALTER TABLE `vission`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin_profile`
--
ALTER TABLE `admin_profile`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bankdetails`
--
ALTER TABLE `bankdetails`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `causes`
--
ALTER TABLE `causes`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `join_us`
--
ALTER TABLE `join_us`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mission`
--
ALTER TABLE `mission`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vission`
--
ALTER TABLE `vission`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
