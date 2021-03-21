-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2021 at 06:18 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boat`
--

-- --------------------------------------------------------

--
-- Table structure for table `boats`
--

CREATE TABLE `boats` (
  `b_id` int(11) NOT NULL,
  `b_name` varchar(35) NOT NULL,
  `b_cpcty` varchar(35) NOT NULL,
  `b_on` varchar(35) NOT NULL,
  `b_img` varchar(255) NOT NULL,
  `b_price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `boats`
--

INSERT INTO `boats` (`b_id`, `b_name`, `b_cpcty`, `b_on`, `b_img`, `b_price`) VALUES
(1, 'A', '500', 'Manju', '../boat_image/image_2020-11-12-07-32-21_5facd6f57e24e.jpg', 4000),
(2, 'B', '20', 'john dough', '../boat_image/image_2020-11-12-07-38-04_5facd84c32e1b.jpg', 1000),
(3, 'C', '5', 'Robert', '../boat_image/image_2016-02-26-11-33-58_56cfc7a61410a.jpg', 500),
(4, 'D', '5', 'James', '../boat_image/image_2020-11-12-08-04-33_5facde8172296.jpg', 500),
(5, 'E', '20', 'Michael', '../boat_image/image_2020-11-12-08-05-04_5facdea0e6e2a.jpg', 1000),
(6, 'F', '5', 'justin ', '../boat_image/image_2020-11-12-08-05-44_5facdec879033.jpg', 500),
(7, 'G', '20', 'luffy', '../boat_image/image_2020-11-12-08-07-00_5facdf1402dc3.jpg', 1000),
(8, 'H', '50', 'brook', '../boat_image/image_2016-02-26-11-36-18_56cfc832eb45f.jpg', 2000),
(9, 'I', '5', 'Thomas', '../boat_image/image_2020-11-12-08-07-44_5facdf402d538.jpg', 500),
(10, 'J', '20', 'Anthony', '../boat_image/image_2020-11-12-08-08-50_5facdf8216d9f.jpg', 1000),
(11, 'K', '50', 'Stevan', '../boat_image/image_2020-11-12-08-12-48_5face0701f119.jpg', 2000),
(12, 'L', '100', 'Andrew', '../boat_image/image_2020-11-12-08-13-52_5face0b02e9a1.jpg', 3500),
(13, 'M', '20', 'Ronald', '../boat_image/image_2020-11-12-08-16-54_5face16639b70.jpg', 1000),
(14, 'N', '500', 'Jason', '../boat_image/image_2020-11-12-08-27-34_5face3e6c36b5.jpg', 4000),
(15, 'O', '500', 'vander decken', '../boat_image/image_2020-11-12-08-28-58_5face43a12357.jpg', 4000),
(16, 'P', '50', 'Scott', '../boat_image/image_2020-11-12-08-29-37_5face461bcf44.jpg', 2000),
(17, 'Q', '500', 'Jerry', '../boat_image/image_2020-11-12-08-30-15_5face4878cd77.jpg', 4000),
(18, 'R', '100', 'Ram', '../boat_image/image_2020-11-12-08-31-55_5face4eb7305d.jpg', 3500),
(19, 'S', '100', 'Shree', '../boat_image/image_2020-11-12-08-36-14_5face5eec2e35.jpg', 3500),
(20, 'T', '20', 'Raj', '../boat_image/image_2020-11-12-08-38-31_5face6771bcd9.jpg', 1000),
(21, 'U', '100', 'Balaji', '../boat_image/image_2020-11-12-08-40-29_5face6ed0e954.jpg', 3500);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `bid` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `feedb` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`bid`, `tid`, `feedb`) VALUES
(1, 5, 'good');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `r_id` int(11) NOT NULL,
  `b_id` int(11) NOT NULL,
  `tour_id` int(11) NOT NULL,
  `r_dstntn` varchar(35) NOT NULL,
  `r_date` varchar(35) NOT NULL,
  `r_hr` varchar(35) NOT NULL,
  `r_ampm` varchar(35) NOT NULL,
  `r_status` varchar(35) DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`r_id`, `b_id`, `tour_id`, `r_dstntn`, `r_date`, `r_hr`, `r_ampm`, `r_status`) VALUES
(20, 1, 5, 'Agatti', '2020-11-27', '1', 'AM', 'Accept'),
(21, 20, 5, 'Agatti', '2021-01-27', '1', 'AM', 'Reject');

-- --------------------------------------------------------

--
-- Table structure for table `tourist`
--

CREATE TABLE `tourist` (
  `tour_id` int(11) NOT NULL,
  `tour_fN` varchar(50) NOT NULL,
  `tour_mN` varchar(50) NOT NULL,
  `tour_lN` varchar(50) NOT NULL,
  `tour_address` varchar(255) NOT NULL,
  `tour_contact` varchar(15) NOT NULL,
  `tour_un` varchar(50) NOT NULL,
  `tour_up` varchar(35) NOT NULL,
  `user_type` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tourist`
--

INSERT INTO `tourist` (`tour_id`, `tour_fN`, `tour_mN`, `tour_lN`, `tour_address`, `tour_contact`, `tour_un`, `tour_up`, `user_type`) VALUES
(2, '', '', '', '', '', 'admin', '21232f297a57a5a743894a0e4a801fc3', '1'),
(3, 'Renushree', '', 'T M', 'Arsikere', '9876543210', 'renu', 'ef88f3f374aa10d1493757bb6a4046a6', '1'),
(4, 'Sharanya', '', 'N', 'Tumkur', '8765432109', 'sharu', 'e45ba47ba80d6ae4144c2e569388afa3', '1'),
(5, 'yuktha', '', 'R I', 'Tumkur', '8989898989', 'yuk', 'a4ff15feff1d5a0df38164f1d17b7372', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `boats`
--
ALTER TABLE `boats`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD KEY `aaaa` (`bid`),
  ADD KEY `bbbb` (`tid`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`r_id`),
  ADD KEY `b_id` (`b_id`),
  ADD KEY `tour_id` (`tour_id`);

--
-- Indexes for table `tourist`
--
ALTER TABLE `tourist`
  ADD PRIMARY KEY (`tour_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `boats`
--
ALTER TABLE `boats`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tourist`
--
ALTER TABLE `tourist`
  MODIFY `tour_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `aaaa` FOREIGN KEY (`bid`) REFERENCES `boats` (`b_id`),
  ADD CONSTRAINT `bbbb` FOREIGN KEY (`tid`) REFERENCES `tourist` (`tour_id`);

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`b_id`) REFERENCES `boats` (`b_id`),
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`tour_id`) REFERENCES `tourist` (`tour_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
