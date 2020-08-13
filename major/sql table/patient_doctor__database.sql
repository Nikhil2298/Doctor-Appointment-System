-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 14, 2019 at 04:21 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `patient_doctor _database`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

DROP TABLE IF EXISTS `appointment`;
CREATE TABLE IF NOT EXISTS `appointment` (
  `appointment_id` bigint(255) NOT NULL AUTO_INCREMENT,
  `patient_id` bigint(255) NOT NULL,
  `doctor_id` bigint(255) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(8) NOT NULL,
  `status` smallint(1) NOT NULL,
  PRIMARY KEY (`appointment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appointment_id`, `patient_id`, `doctor_id`, `date`, `time`, `status`) VALUES
(6, 3, 1, '2019-05-28', '9:00 AM', 0),
(5, 3, 1, '2019-05-30', '10:00 AM', 0),
(7, 3, 4, '2019-05-15', '9:30 AM', 0),
(8, 6, 4, '2019-05-15', '10:00 AM', 0),
(9, 3, 5, '2019-05-22', '10:00 AM', 1),
(10, 3, 4, '2019-05-28', '3:30 PM', 0),
(11, 3, 5, '2019-05-22', '9:00 AM', 1),
(12, 3, 4, '2019-05-22', '5:00 PM', 0);

-- --------------------------------------------------------

--
-- Table structure for table `doctor_detail`
--

DROP TABLE IF EXISTS `doctor_detail`;
CREATE TABLE IF NOT EXISTS `doctor_detail` (
  `doctor_id` int(255) NOT NULL AUTO_INCREMENT,
  `doctor_name` varchar(255) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact_no` bigint(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`doctor_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_detail`
--

INSERT INTO `doctor_detail` (`doctor_id`, `doctor_name`, `age`, `gender`, `qualification`, `category`, `city`, `address`, `contact_no`, `email`, `user_id`, `password`) VALUES
(1, 'Rohit Kaushal', 23, 'Male', 'MBBS,', 'Cardiologists', 'Andhra Pradesh', 'vill.choru', 9459338956, 'kaushalr727@gmail.com', 'rohit007', 'rohit1234'),
(4, 'Nikhil Dogra', 33, 'Male', 'MBBS,MD,', 'Cardiologists', 'Andra Pradesh-Other', 'hamirpur', 9557799742, 'nikhil@gamil.com', 'nikhil', 'nikhil007'),
(5, 'gaurav', 30, 'Male', 'MBBS,MS,', 'Neurologists', 'Himachal Pradesh-Other', 'hamirpur', 9232344349, 'gaurav@gmail.com', 'gaurav', 'gaurav123');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

DROP TABLE IF EXISTS `donor`;
CREATE TABLE IF NOT EXISTS `donor` (
  `donor_id` int(255) NOT NULL AUTO_INCREMENT,
  `donor_name` varchar(255) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact_no` bigint(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`donor_id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`donor_id`, `donor_name`, `age`, `gender`, `blood_group`, `city`, `address`, `contact_no`, `email`) VALUES
(1, 'rohit', 20, 'Male', 'B+', 'Hamirpur', '', 994356438, 'ofgir@knf'),
(9, 'ermkf', 42, 'Male', 'A+', 'Chandighar', '', 324234345, 'rjffn@meck'),
(10, 'ermkf', 42, 'Male', 'A+', 'Chandighar', '', 324234345, 'rjffn@meck'),
(11, 'nikhil', 23, 'Male', 'O+', 'Hamirpur', '', 941293636, 'nikhil@gmail.com'),
(12, 'nitin', 23, 'Male', 'A+', 'Delhi', '', 9557799742, 'nitin@gmail.com'),
(14, 'gaurav', 18, 'Male', 'B+', 'Himachal Pradesh-Other', '', 9443399223, 'abc@gamil.com'),
(15, 'nikhil', 20, 'Male', 'B+', 'Himachal Pradesh-Other', '', 9557799742, 'nnikhil@gmail.com'),
(17, 'rahul', 20, 'Male', 'AB+', 'Himachal Pradesh-Other', 'hamirpur', 9557799742, 'rahul@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

DROP TABLE IF EXISTS `history`;
CREATE TABLE IF NOT EXISTS `history` (
  `history_id` int(255) NOT NULL AUTO_INCREMENT,
  `patient_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `doctor_id` int(255) NOT NULL,
  `date` varchar(10) NOT NULL,
  `treatment` varchar(255) NOT NULL,
  `medicine` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`history_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`history_id`, `patient_id`, `name`, `doctor_id`, `date`, `treatment`, `medicine`, `description`) VALUES
(10, 3, 'nikhil', 5, '13-05-2019', 'cough', 'corex', '3 teaspoon a day'),
(9, 3, 'nikhil', 5, '13-05-2019', 'fever', 'paracetamol', '3 times a day'),
(8, 3, 'nikhil', 5, '13-05-2019', 'Fever', 'paracetamol', '3 times a day\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `patient_detail`
--

DROP TABLE IF EXISTS `patient_detail`;
CREATE TABLE IF NOT EXISTS `patient_detail` (
  `patient_id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_name` varchar(255) NOT NULL,
  `age` varchar(3) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `blood_group` varchar(3) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact_no` bigint(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`patient_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_detail`
--

INSERT INTO `patient_detail` (`patient_id`, `patient_name`, `age`, `gender`, `blood_group`, `city`, `address`, `contact_no`, `email`, `user_id`, `password`) VALUES
(1, 'niihil', '23', 'Male', 'B+', 'Himachal Pradesh', 'hamoijef', 6458764385, 'ef@nfcdsn.com', 'fisndfn', 'fer123'),
(3, 'Nikhil Dogra', '20', 'Male', 'B+', 'Himachal Pradesh', 'Hamirpur', 9557799742, 'nikhildogra22@gamil.com', 'nikhil', 'nikhil123'),
(4, 'rohit', '20', 'Male', 'B+', 'Himachal Pradesh', 'hamirpur', 9459338956, 'kaushalr727@gmail.com', 'rohit', 'rohit'),
(5, 'rohit', '20', 'Male', 'B+', 'Himachal Pradesh', 'hamirpur', 9557799742, 'nikhil@gamil.com', 'nikhil', 'bikhil'),
(6, 'gaurav', '20', 'Male', 'A+', 'Himachal Pradesh', 'HAMIRPUR', 9664488742, 'gaurav@gamil.com', 'gaurav', 'gaurav'),
(7, 'jknIDW', '32', 'Male', 'B+', 'Jammu & Kashmir', 'JNLIUJ', 868768758, 'YUVUY@IUII.NOI', 'nikhil', 'rohit'),
(8, 'gaurav', '19', 'Male', 'B+', 'Himachal Pradesh-Other', 'Naduan', 9888344234, 'avva@gmail.com', '1234', 'abc1234');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
