-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2023 at 04:41 PM
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
-- Database: `online_exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `asd`
--

CREATE TABLE `asd` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `asmt` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `asd`
--

INSERT INTO `asd` (`id`, `name`, `email`, `contact`, `course`, `asmt`) VALUES
(1, ' aa', 'a@gmail.com', '9874512630', 'BSc Computer Science', 'backgd.png'),
(2, ' z', 'z@gmail.com', '9584516231', 'BSc Computer Science', 'backgd.png');

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `attandance`
--

CREATE TABLE `attandance` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attandance`
--

INSERT INTO `attandance` (`id`, `name`, `email`, `contact`, `course`, `date`, `status`) VALUES
(1, 'z', 'z@gmail.com', '9584516231', 'BSc Computer Science', 'Wed-Jul-2022', 'Nil'),
(2, 'z', 'z@gmail.com', '9584516231', 'BSc Computer Science', 'Wed-Jul-2022', 'Nil'),
(3, 'aa', 'a@gmail.com', '9874512630', 'BSc Computer Science', 'Fri-Sep-2022', 'Present'),
(4, 'q', 'q@gmail.com', '4561479165', 'MSc Computer Science', 'Fri-Sep-2022', 'Absent'),
(5, 'z', 'z@gmail.com', '9584516231', 'BSc Computer Science', 'Fri-Sep-2022', 'Absent');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `link` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `course`, `time`, `link`, `date`) VALUES
(1, 'BCA', '10:30 PM', 'https://meet.google.com/wiz-rkdd-gsx', '2022-07-30'),
(2, 'BSc Computer Science', '3:30 PM', 'https://meet.google.com/cio-eexy-jbk', '2022-07-20');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `usertype` varchar(25) NOT NULL,
  `message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `contact`, `usertype`, `message`) VALUES
(1, 'aa', 'mr@gmail.com', '8514896512', 'public', 'hhhai'),
(2, 'aasdsa', 'mrs@gmail.com', '845461548577777', 'public', 'gfnb fg haaai'),
(3, 'stud', 'stu@gmail.com', '4768', 'student', 'tttttt'),
(4, 'teac', 'teac@gmail.com', '8514896512', 'teacher', 'stuuuu'),
(5, 'z', 'z@gmail.com', '9584516231', 'teacher', ''),
(6, ' teachee', 'teacher@gmail.com', '4768545420', 'teacher', '52'),
(7, ' teachee', 'teacher@gmail.com', '4768545420', 'teacher', 'gg');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `eid` int(50) NOT NULL,
  `date` date NOT NULL,
  `board` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `ldate` date NOT NULL,
  `fee` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`eid`, `date`, `board`, `course`, `ldate`, `fee`) VALUES
(1, '2022-07-08', 'IGNOU', 'MCA', '2022-08-13', '500');

-- --------------------------------------------------------

--
-- Table structure for table `exam1`
--

CREATE TABLE `exam1` (
  `id` int(11) NOT NULL,
  `date` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `link` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam1`
--

INSERT INTO `exam1` (`id`, `date`, `subject`, `link`, `course`) VALUES
(1, '2022-09-22', 'DBMS', 'https://docs.google.com/forms/d/e/1FAIpQLSfhx6vjpD', 'bca');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `fee` varchar(50) NOT NULL,
  `cardno` varchar(50) NOT NULL,
  `cvv` varchar(50) NOT NULL,
  `month` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `board` varchar(50) NOT NULL,
  `pid` int(50) NOT NULL,
  `bid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `name`, `email`, `contact`, `status`, `fee`, `cardno`, `cvv`, `month`, `year`, `course`, `board`, `pid`, `bid`) VALUES
(1, 'z', 'z@gmail.com', '9584516231', 'Paid', '500', '8456148651485614', '651', '65', '6152', 'MCA', 'IGNOU', 6, 1),
(2, 'z', 'z@gmail.com', '9584516231', 'Paid', '500', '9845624986514896', '561', '51', '1523', 'MCA', 'IGNOU', 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `password`, `usertype`, `course`, `gender`, `contact`, `status`) VALUES
(1, '', 'admin@gmail.com', '000', 'admin', '', '', '', ''),
(2, '   amal', 'a@gmail.com', '000', 'student', 'BSc Computer Science', 'Male', '9874512630', 'Nil'),
(3, 'bb', 'b@gmail.com', '000', 'teacher', 'MSc Computer Science', 'Female', '8454615485', 'Rejected'),
(4, ' teachee', 'teacher@gmail.com', '000', 'teacher', 'BCA', 'Female', '4768545420', 'Confirmed'),
(5, 'q', 'q@gmail.com', '000', 'student', 'MSc Computer Science', 'Female', '4561479165', 'Nil'),
(6, 'z', 'z@gmail.com', '000', 'student', 'BSc Computer Science', 'Male', '9584516231', 'Nil'),
(7, 'qaqqa', '2@gmail.com', '000', 'teacher', 'MSc Computer Science', 'Female', '9856231478', 'Confirmed');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `marks` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `name`, `email`, `contact`, `course`, `marks`, `status`) VALUES
(1, 'aa', 'a@gmail.com', '9874512630', 'BCA', '85', 'Rejected'),
(2, 'raju', 'ra@gm', '9685744', 'MCA', '93', 'Confirmed'),
(3, 'g', 'g@gm', '498651326', 'BCA', '9', 'Confirmed'),
(4, 'z', 'z@gmail.com', '87465128745', 'BSc Computer Science', '79', 'Confirmed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asd`
--
ALTER TABLE `asd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attandance`
--
ALTER TABLE `attandance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `exam1`
--
ALTER TABLE `exam1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asd`
--
ALTER TABLE `asd`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attandance`
--
ALTER TABLE `attandance`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `eid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `exam1`
--
ALTER TABLE `exam1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
