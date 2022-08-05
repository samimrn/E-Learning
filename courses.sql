-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2022 at 08:43 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `courses`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `name`, `username`, `password`) VALUES
(6, 'testadmin', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `active` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `name`, `active`) VALUES
(1, 'Web Development', 'Yes'),
(2, 'Music', 'Yes'),
(3, 'Health', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chapter`
--

CREATE TABLE `tbl_chapter` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `active` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_chapter`
--

INSERT INTO `tbl_chapter` (`id`, `course_id`, `name`, `active`) VALUES
(1, 3, 'Basic of php', 'Yes'),
(3, 4, 'Simple html tag', 'Yes'),
(4, 1, 'HTML Frontend Tags', 'Yes'),
(5, 1, 'Html backend tags', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `fullname`, `email`, `phone`, `message`) VALUES
(1, 'vbkjdv', 'dcbjsbd@jysdchbsdc.com', '98475698457', 'dvuawnbvdkjasd asdbvavba ahvaiuvbav'),
(2, 'vbkjdv', 'dcbjsbd@jysdchbsdc.com', '98475698457', 'dvuawnbvdkjasd asdbvavba ahvaiuvbav'),
(3, 'gcbdvbadf', 'vdbs@gmail.com', '4759837598', 'jnvakbdvkajnv ajbvabvkjf  adbva dvabfvauer'),
(4, 'bdjnvjvndj', 'binu@gmail.com', '87459847683', 'i am a student'),
(5, 'gcbdvbadf', 'syam@123gmail.com', '9866775588', 'nkdvcnadnvsd jabvdjanv'),
(6, 'dfhakjnf', 'ghana@gmail.com', '8947598374', 'kavnajenrvakjnfvjanfdvajnvjkaf'),
(7, 'kadckajn vkj', 'gambhir@gmail.com', '477598739857', 'jbnjkaenb;janbjanrt'),
(8, 'dfhakjnf', 'samimrn75@gmaill.com', '87459847683', 'asdsadasdsada'),
(9, 'ghanashyam', 'ram@123.com', '4759837598', 'askdhjashdjkas'),
(10, 'ghanashyam', 'samimrn75@gmail.com', '87459847683', 'sfdasdasdas'),
(11, 'Final CHeck', 'finalcheck@gmail.com', '8732643834', 'finalcheck@gmail.com'),
(12, 'Aileen Hardin', 'ryzypuhi@mailinator.com', '3124234234', 'Aut quae voluptatem'),
(13, 'Test Contact', 'test123@gmail.com', '91824739423', 'this is the first contact'),
(14, 'bechara', 'bechara@email.com', '987521224', 'this is sweet alert message'),
(15, 'Marvin Moses', 'pakivihubo@mailinator.com', '984522222', 'Unde reprehenderit '),
(16, 'Tanek Cobb', 'modu@mailinator.com', '87455555212', 'Nulla eius ex nostru');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course`
--

CREATE TABLE `tbl_course` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `instructor` varchar(200) NOT NULL,
  `active` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_course`
--

INSERT INTO `tbl_course` (`id`, `category_id`, `image`, `title`, `instructor`, `active`) VALUES
(1, 1, 'Course-Name-3425.jpg', 'Html For Beginners', 'Salam Khan', 'Yes'),
(2, 1, 'Course-Name-504.jpg', 'CSS for beginners', 'Ramesh ', 'Yes'),
(3, 1, 'Course-Name-8875.jpg', 'JavaScript for Begineers', 'Suresh', 'Yes'),
(4, 2, 'Course-Name-4809.jpg', 'Become a Music', 'Hari', 'Yes'),
(5, 2, 'Course-Name-8001.jpg', 'Become a Drum', 'Krishna', 'Yes'),
(6, 2, 'Course-Name-3641.jpg', 'Demonstration Couse', 'Demonstrator', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_enroll`
--

CREATE TABLE `tbl_enroll` (
  `id` int(11) NOT NULL,
  `first_name` varchar(200) DEFAULT NULL,
  `last_name` varchar(200) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `phone` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `course` varchar(200) NOT NULL,
  `course_id` int(11) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_enroll`
--

INSERT INTO `tbl_enroll` (`id`, `first_name`, `last_name`, `address`, `phone`, `gender`, `email`, `course`, `course_id`, `status`) VALUES
(2, 'Samikshya', 'Maharjan', 'lazimpat', '9875412582', 'Female', 'samikshya@gmail.com', 'Become a Music', 0, ''),
(3, 'Anush', 'Bajracharaya', 'Belle Stanton', '9813180542', 'Male', 'tomsaw@gmail.com', '3', 0, ''),
(4, 'Adam', 'Keller', 'bagbazar', '7894561230', 'Male', 'quravocidy@mailinator.com', '1', 0, ''),
(6, 'SAM', 'BAM', 'BAMZIMPAT', '9878945456', 'Male', 'tomsaw@gmail.com', '5', 0, ''),
(7, 'sadsad', 'sadsadsa', 'sadsadsad', '4845645645', 'Male', '', '4', 0, ''),
(8, 'asdsadas', 'dsadsadsa', 'sdasadsads', '7855566433', 'Female', '', '4', 0, ''),
(9, 'Baker', 'Mcguire', 'dsadasdsa', '7575275272', 'Female', 'bynupu@mailinator.com', '5', 0, ''),
(10, 'eden', 'hazard', 'london', '8778747445', 'Female', 'hazard@hazard.com', '5', 0, ''),
(11, 'Anush', 'Bajracharya', 'Nayabazar', '9813150574', 'Male', 'anushbajra@gmail.com', 'Html For Beginners', 0, ''),
(12, 'Anush', 'Bajracharya', 'nayabazar', '9813150574', 'Male', 'anushbajra@gmail.com', 'CSS for beginners', 0, 'Accepted'),
(13, 'test', 'last', 'asldasjkhd', '5456456465', 'Female', 'admin@admin.com', 'Become a Drum', 0, 'Pending'),
(14, 'Benjamin', 'Chambers', 'asdsadsadas', '7845545445', 'Female', 'anushbajra@gmail.com', '3', 3, 'Rejected');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_instructor_enroll`
--

CREATE TABLE `tbl_instructor_enroll` (
  `id` int(11) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `course` varchar(200) NOT NULL,
  `course_id` int(11) DEFAULT NULL,
  `cv` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_instructor_enroll`
--

INSERT INTO `tbl_instructor_enroll` (`id`, `first_name`, `last_name`, `address`, `phone`, `email`, `course`, `course_id`, `cv`, `status`) VALUES
(1, 'juan', 'mata', 'manchester', '4563217774', 'mata@mazar.com', '3', 0, 'Anush_Bajracharya_CV.pdf', ''),
(2, 'Anush', 'Bajracharaya', 'Nayabazar', '1237812678', 'tomsaw@gmail.com', '4', 4, 'spm (1).docx', ''),
(3, 'Test', 'Last', 'Julie Ryan', '9813150574', 'test@test.com', '6', 6, 'New BIM Internship (Final Version) 2022 (2).pdf', ''),
(4, 'CHeck', 'Mercado', 'Julie Ryan', '3124234234', 'test@test.com', 'JavaScript for Begineers', 0, 'WBS.docx', ''),
(5, 'Anush', 'Bajra', 'nayabazar', '9811505417', 'anushbajra@gmail.com', 'Become a Music', 0, 'T.U Evaluation Form.pdf', 'Accepted'),
(6, 'anushz', 'bajraz', 'nabsahbdasb', '9845454565', 'anushbajra@gmail.com', 'Become a Drum', 0, 'New BIM Internship (Final Version) 2022 (2).pdf', 'Rejected');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lesson`
--

CREATE TABLE `tbl_lesson` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `chapter_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `pdf` varchar(200) NOT NULL,
  `active` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_lesson`
--

INSERT INTO `tbl_lesson` (`id`, `course_id`, `chapter_id`, `name`, `pdf`, `active`) VALUES
(1, 3, 1, 'tags and colors', '', 'Yes'),
(2, 3, 1, 'Functions', '', 'Yes'),
(3, 1, 4, 'Head tag', '', 'Yes'),
(4, 1, 4, 'Body tag', '', 'Yes'),
(5, 1, 5, 'first backend program', '', 'Yes'),
(6, 1, 5, 'Pdf Demo', 'Summer-Project-Report-Sample.pdf', 'Yes'),
(7, 1, 5, 'Next Demo', 'Framework Agreement July 2022 to June 2023.docx (New).pdf', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `email`, `password`, `code`) VALUES
(1, 'Test User', 'anushbajra@gmail.com', 'e50e379a06990a84578348176326ce98', ''),
(2, 'Anush', 'anushbuzz@gmail.com', '7a4fa9e55adf17a53ca233e6a4b9e31c', 'aafff0edc200958f71036fe13ad5c9a6'),
(3, 'BajraSir', 'testkripapharmacy@gmail.com', '7a4fa9e55adf17a53ca233e6a4b9e31c', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_chapter`
--
ALTER TABLE `tbl_chapter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_course`
--
ALTER TABLE `tbl_course`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `tbl_enroll`
--
ALTER TABLE `tbl_enroll`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_instructor_enroll`
--
ALTER TABLE `tbl_instructor_enroll`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_lesson`
--
ALTER TABLE `tbl_lesson`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_chapter`
--
ALTER TABLE `tbl_chapter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tbl_course`
--
ALTER TABLE `tbl_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_enroll`
--
ALTER TABLE `tbl_enroll`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tbl_instructor_enroll`
--
ALTER TABLE `tbl_instructor_enroll`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_lesson`
--
ALTER TABLE `tbl_lesson`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_course`
--
ALTER TABLE `tbl_course`
  ADD CONSTRAINT `tbl_course_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `tbl_category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
