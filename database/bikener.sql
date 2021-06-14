-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2020 at 04:14 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bikener`
--

-- --------------------------------------------------------

--
-- Table structure for table `placement`
--

CREATE TABLE `placement` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `placement`
--

INSERT INTO `placement` (`id`, `name`, `company`) VALUES
(3, 'Dr Ram Niwas Mahiya (PhD, IIT Jodhpur)', 'Assistant Professor, National Institute of Technology (NIT) Hamirpur, HP'),
(4, 'Dr Anoop Kumar Sharma (PhD, MNIT, Jaipur)', 'Assistant Professor, National Institute of Technology (NIT) Silcher, Assam'),
(5, 'Raghav Soni (M.Tech IIT haiderabad)', 'PhD, Osaka University, Japan'),
(6, 'Ishwar Kumar', 'Project Engineer, IoT services, Department of Computer Science, IIT Mandi'),
(7, 'Shoaib Khan', 'Software Developer, Pittsburg, Pennsylvania, USA'),
(8, 'Rahul Moriyar (M.Des. IIT Bombay)', 'Design Engineer, Phillips India Ltd, Bengaluru'),
(9, 'Parth Mudgal', 'Software Developer, TCL, Canada'),
(10, 'Nivesh Saxena', 'Parryware Roca'),
(11, 'Sonam Gupta', 'Software Developer, TCS, Canda'),
(12, 'Barinder Dhillon', 'General Motors, Canada'),
(13, 'Shray Sharma', 'Enurals Steel industry, Dubai'),
(14, 'Shaswat Rajouria', 'Gas Arabian services, Saudi Arabia'),
(15, 'Vishal Jain (MS IIT Madras)', 'Samsung, Bengaluru'),
(16, 'Sandeep Kothari (M.Tech BITS Pilani)', 'ARM Processors, Bengaluru'),
(17, 'Rahul Rai', 'Ph.D. at IIT Madras'),
(18, 'Kuldeep Jat', 'CAIRN ENERGY'),
(19, 'Shiv Raj Singh Parihar', 'BYJUS'),
(20, 'Akash Soni', 'CAIRN ENERGY'),
(21, 'Akash Chotia', 'JLW Steel Ltd., Maharasthra'),
(22, 'Deepa Ram', 'Ultra tech Pvt.Ltd. Bikaner'),
(23, 'Harish Choudhary', 'HPL Sokomek, Gurgaon'),
(24, 'Madhav Singh Gaur', 'CAIRNS'),
(25, 'Jitendra kumar', 'IOCL Limited, Bengaluru'),
(26, 'Prashant Sharma', 'VLSI M.Tech IIT Mandi'),
(27, 'Lokesh kumar', 'IOCL Nainital'),
(28, 'Sita Ram yadav', 'HG infra engineering Ltd., Jaipur'),
(29, 'Amit Poonia', 'Amazon India'),
(30, 'Lakhan Sharma', 'M. Tech NIT Kerala'),
(31, 'Neha Kumari', 'JTO BSNL Jharkhand'),
(32, 'Pragya Sharma', 'Mutterfly Web Designing Mumbai'),
(33, 'Rajesh Kumar Kumawat', 'M. Tech Punjab'),
(34, 'Satya Pal singh', 'M. Tech NIT Kerala'),
(35, 'Akshay Kumar Gupta', 'HCL Technology Chennai'),
(36, 'Ankur Sharma', 'HPCL Ahmedabad'),
(37, 'Mausam Dinghia', 'M. Tech NIT Kerala'),
(38, 'Payal Jain', 'IOCL Panipat'),
(39, 'Pushpendra Rajpurohit', 'Ultra tech Pvt.Ltd. Bikaner'),
(40, 'Ritesh Mishra', 'ACC Cement Plant Pune'),
(41, 'Aditya Malpani', 'GAIL'),
(42, 'Garima Prajapat', 'Airport Authority of India'),
(43, 'Jitendra kumar', 'Manager in Corporative Bank'),
(44, 'Kaushal Chauhan', 'NMBC PSU'),
(45, 'Manish kumar', 'Assistant Manager in OBC bank'),
(46, 'Pavan Kumar', 'RAILWAY (SENIOR SECTION ENGINEER)'),
(47, 'Rahul Kumar', 'ONGC'),
(48, 'Sandeep Kumar Saharan', 'PO in PNB'),
(49, 'Sanjay Kumar Suthar', 'RAILWAY (Jen)'),
(50, 'Shasvat Rajauria', 'CAIRN ENERGY'),
(51, 'Abhimanyu', 'BOB- Bank PO'),
(52, 'Aakanksha Gupta', 'CAIRN ENERGY'),
(53, 'Bhanu pratap', 'BOB-Bank PO'),
(54, 'Bhanu Modi', 'CAIRN ENERGY'),
(55, 'Bhoopal singh', 'Bank PO BOB'),
(56, 'Dhanpat Raj Sirvi', 'CAIRN ENERGY'),
(57, 'Deepak kumar Sharma', 'CAIRN ENERGY'),
(58, 'Kirodi lal meena', 'Bank PO SBI'),
(59, 'Kuldeep tox', 'Bank PO'),
(60, 'Manish Kumar', 'Income Tax officer'),
(61, 'Pradyuman Singh', 'CAIRN ENERGY'),
(62, 'Qamar Masood', 'CAIRN ENERGY'),
(63, 'Shakti Singh Shekhawat', 'CAIRN ENERGY'),
(64, 'Sikander Mehra', 'Bank PO'),
(65, 'Sohan Lal Suthar', 'Bhadla Solar Plant Phalodi'),
(66, 'Surendar Kumar', 'Indian Raiway Jen'),
(67, 'Uday Bhatnagar', 'CAIRN ENERGY'),
(68, 'Vikaram  Singh Chauhan', 'CAIRN ENERGY'),
(69, 'Lalit Sirvi', 'GMM Co. Ltd.'),
(70, 'Niraj Ahalawat', 'Godawari Green Solar Power Plant'),
(71, 'Narendra solanki', 'Godawari Green Solar Power Plant'),
(72, 'Suresh Dukiya', 'STPP'),
(73, 'Silpa Benarji', 'L&T'),
(74, 'Ankita Dhaka', 'Bank PO SBI'),
(75, 'Ajay Nehra', 'HPCL'),
(76, 'Oma Ram Choudhary', 'Dubai Construction company, Dubai'),
(77, 'Deendayal Saini', 'HPCL'),
(78, 'Surendra Bhakar', 'IOCL'),
(79, 'Atul Meena', 'IOCL'),
(81, 'Hitesh Batu', 'JEN at jaipur Metro'),
(82, 'Jayant Kalra', 'M-Tech IIT Delhi'),
(83, 'Naveen kumar', 'Airport Authority of india'),
(84, 'Sakshi', 'TCS'),
(85, 'Vishal Luhani', 'Shree Cement'),
(86, 'Swati Rajpurohit', 'Tech Mahindra'),
(87, 'Jagriti Dua', 'Tharmax Ltd.'),
(88, 'Tarun kumar Sharma', 'Indian institute of Astrophysics'),
(89, 'Rahul Chadwani', 'Globle Energy Pvt. Ltd.'),
(90, 'Aastha Dadhich', 'Software Developer, Tech Mahindra'),
(91, 'Nitin Ramchandani', 'Global Energy Pvt. Ltd.'),
(92, 'Deepali Sharma', 'NIIT- IT California, USA'),
(93, 'Pallavi Debnath', 'IBM'),
(94, 'Divyakshi Jain', 'Mercedes Benz'),
(95, 'Anirudh Rawat', 'Cairn Energy'),
(96, 'Rashmi Nawlakha', 'Bhabha Atomic Research Centre'),
(97, 'Rajpal Gill', 'Bhabha Atomic Research Centre'),
(98, 'Aaditya saini', 'CAIRN Energy'),
(99, 'Suvarnalata Xanthate', 'Maastricht University'),
(100, 'Anuj Shrimali', 'Engineering India Limited (EIL) New Delhi'),
(101, 'Bhaskar Sharma', 'Ambuja Cement'),
(102, 'Himanshu Sharma', 'L&T');

-- --------------------------------------------------------

--
-- Table structure for table `rtu`
--

CREATE TABLE `rtu` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `convo` varchar(100) NOT NULL,
  `year` int(4) NOT NULL,
  `list` int(20) NOT NULL,
  `percent` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rtu`
--

INSERT INTO `rtu` (`id`, `name`, `convo`, `year`, `list`, `percent`) VALUES
(3, 'Payal Jain', 'VI Convocation@RTU, Kota', 2015, 1, 80),
(4, 'Vishal Jain', 'VI Convocation@RTU, Kota', 2015, 4, 78),
(5, 'Vishal Kumar', 'VI Convocation@RTU, Kota', 2015, 8, 77),
(6, 'Rahul Kumar Ray', 'VI Convocation@RTU, Kota', 2015, 9, 76),
(7, 'Neha Kumari', 'VII Convocation@RTU, Kota', 2016, 5, 78),
(8, 'Anita Kumari', 'VII Convocation@RTU, Kota', 2016, 10, 76),
(9, 'Divya Panwar', 'VIII Convocation@RTU, Kota', 2017, 5, 76),
(10, 'Monika', 'VIII Convocation@RTU, Kota', 2017, 6, 76),
(11, 'Aakash Soni', 'IX Convocation@RTU, Kota', 2018, 3, 75),
(12, 'Tanuja Swami', 'IX Convocation@RTU, Kota', 2018, 9, 72);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `year` int(4) NOT NULL,
  `score` int(10) NOT NULL,
  `rank` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `year`, `score`, `rank`) VALUES
(1, 'Akash chotia', 2020, 877, 6),
(2, 'Rahul Upadhaya', 2020, 438, 752),
(3, 'Preeti Baseta', 2020, 620, 232);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `placement`
--
ALTER TABLE `placement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rtu`
--
ALTER TABLE `rtu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `placement`
--
ALTER TABLE `placement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `rtu`
--
ALTER TABLE `rtu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
