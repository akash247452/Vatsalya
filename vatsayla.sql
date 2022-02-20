-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 20, 2022 at 03:53 PM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vatsayla`
--

-- --------------------------------------------------------

--
-- Table structure for table `cashDonation`
--

CREATE TABLE `cashDonation` (
  `cashDonationId` int(11) NOT NULL,
  `ngoName` text NOT NULL,
  `donorName` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cashDonation`
--

INSERT INTO `cashDonation` (`cashDonationId`, `ngoName`, `donorName`, `email`, `phone`, `amount`) VALUES
(1, 'daf', 'faa', 'aka@gmail.com', 333, 3333);

-- --------------------------------------------------------

--
-- Table structure for table `cashRequirement`
--

CREATE TABLE `cashRequirement` (
  `cashRequirementId` int(11) NOT NULL,
  `fristName` text NOT NULL,
  `lastName` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `describeAmount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cashRequirement`
--

INSERT INTO `cashRequirement` (`cashRequirementId`, `fristName`, `lastName`, `email`, `phone`, `describeAmount`) VALUES
(1, 'hhh', 'hhhhh', 'fffff@gmail.com', 77777, 777777),
(2, 'vdanv', 'ncadkn', 'asncad@gmail.com', 33333, 3333),
(3, 'vdanv', 'ncadkn', 'asncad@gmail.com', 33333, 3333),
(4, 'vdanv', 'ncadkn', 'asncad@gmail.com', 33333, 3333),
(5, 'hkhnk', 'hnjkn', 'jknkn@gmal.com', 3453, 3534),
(6, 'hkhnk', 'hnjkn', 'jknkn@gmal.com', 3453, 3534),
(7, 'hkhnk', 'hnjkn', 'jknkn@gmal.com', 3453, 3534),
(8, 'hkhnk', 'hnjkn', 'jknkn@gmal.com', 3453, 3534),
(9, 'hkhnk', 'hnjkn', 'jknkn@gmal.com', 3453, 3534),
(10, 'hkhnk', 'hnjkn', 'jknkn@gmal.com', 3453, 3534),
(11, 'hkhnk', 'hnjkn', 'jknkn@gmal.com', 3453, 3534);

-- --------------------------------------------------------

--
-- Table structure for table `donorProfiles`
--

CREATE TABLE `donorProfiles` (
  `donorId` int(11) NOT NULL,
  `fristName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address1` varchar(255) DEFAULT NULL,
  `address2` varchar(255) DEFAULT NULL,
  `city` text NOT NULL,
  `stat` text NOT NULL,
  `country` text NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `donorProfiles`
--

INSERT INTO `donorProfiles` (`donorId`, `fristName`, `lastName`, `gender`, `address1`, `address2`, `city`, `stat`, `country`, `pincode`, `email`, `password`, `mobile`) VALUES
(1, 'Akas', '', '', 'Akas', 'reo', '0', '0', '0', '', 'Akas', '1234', 'reo'),
(2, 'yyy', 'uuuu', 'male', '  ccc', 'cccccc', 'cccc', 'cvvv', 'bbbb', 'vvvv', 'vvvv', 'vvvv', 'bbbbbb'),
(3, 'ggg', 'hh', 'Male', 'hhh', 'hhhh', 'hhhh', 'hhh', 'United States', '567890', 'hhhhhh@gmail.com', '1234', '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedbackId` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` int(11) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedbackId`, `name`, `email`, `mobile`, `message`) VALUES
(1, 'gss', 'gdaga@sbmdag.hgd', 4535, 'sfhs'),
(2, 'gss', 'gdaga@sbmdag.hgd', 4535, 'sfhs'),
(3, 'gss', 'gdaga@sbmdag.hgd', 4535, 'sfhs');

-- --------------------------------------------------------

--
-- Table structure for table `getInTouch`
--

CREATE TABLE `getInTouch` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `getInTouchId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `getInTouch`
--

INSERT INTO `getInTouch` (`name`, `email`, `subject`, `getInTouchId`) VALUES
('etwtw', 'twtw@gmaial.com', 'dwefrwt', 1),
('dgd', 'gdfd@gmail.com', 'gddg', 2),
('jjjjj', 'akash@gmail.com', 'afdfa', 3);

-- --------------------------------------------------------

--
-- Table structure for table `goodsDonation`
--

CREATE TABLE `goodsDonation` (
  `goodsDonationId` int(11) NOT NULL,
  `ngoName` text NOT NULL,
  `donorName` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `goodsDonation`
--

INSERT INTO `goodsDonation` (`goodsDonationId`, `ngoName`, `donorName`, `email`, `phone`, `description`) VALUES
(1, 'gcghc', 'vjghv', 'sdggdfs@gmail.com', 3535, 'rtyu');

-- --------------------------------------------------------

--
-- Table structure for table `goodsRequirement`
--

CREATE TABLE `goodsRequirement` (
  `goodsRequirementId` int(11) NOT NULL,
  `fristName` text NOT NULL,
  `lastName` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `desribution` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ngoProfiles`
--

CREATE TABLE `ngoProfiles` (
  `ngoId` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` varchar(255) DEFAULT NULL,
  `regDate` varchar(255) DEFAULT NULL,
  `admin` varchar(255) DEFAULT NULL,
  `address1` varchar(255) DEFAULT NULL,
  `address2` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `ngoType` varchar(255) DEFAULT NULL,
  `document` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ngoProfiles`
--

INSERT INTO `ngoProfiles` (`ngoId`, `name`, `number`, `regDate`, `admin`, `address1`, `address2`, `email`, `password`, `phone`, `ngoType`, `document`) VALUES
(1, 'Akas', 'reo', 'Akas', 'reo', 'Akas', 'reo', 'Akas', '', 'reo', 'Akas', 'reo'),
(2, 'Akash Rana', '8888', '00000', '', '88888', '8888', 'pundirvijayrana@gmail.com', '1234', '88888', 'governmentNgo', ''),
(3, 'rohit', '4444', '6666', '', 'jjjjj', 'nnnnn', 'akaash@gmail.com', '', '6789005', 'governmentNgo', '1638787426.93.PNG'),
(4, 'tttt', 'tttt', 'tttt', '', 'tttt', 'tttt', 'tttt', '', 'tttt', 'privateNgo', 'sanjay.png'),
(5, 'ttyui', 'ttyui', 'ttyui', '', 'ttyui', 'ttyui', 'ttyui', '', 'ttyui', 'governmentNgo', 'IMG_000.png'),
(6, 'ttyuiuuu', 'ttyuiuuu', 'ttyuiuuu', '', 'ttyuiuuu', 'ttyuiuuu', 'ttyuiuuu', '', 'ttyuiuuu', 'privateNgo', 'IMG_0001.png');

-- --------------------------------------------------------

--
-- Table structure for table `ngoReq`
--

CREATE TABLE `ngoReq` (
  `ngoReqId` int(11) NOT NULL,
  `ngoName` text NOT NULL,
  `adminName` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ngoReq`
--

INSERT INTO `ngoReq` (`ngoReqId`, `ngoName`, `adminName`, `email`, `phone`, `quantity`) VALUES
(1, 'rwrtw', 'wtwt', 'wtw@gmsil.com', 4444, 4444);

-- --------------------------------------------------------

--
-- Table structure for table `ngoReq1`
--

CREATE TABLE `ngoReq1` (
  `ngoReq1Id` int(11) NOT NULL,
  `ngoName` text NOT NULL,
  `adminName` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `reason` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ngoReq1`
--

INSERT INTO `ngoReq1` (`ngoReq1Id`, `ngoName`, `adminName`, `email`, `phone`, `reason`) VALUES
(1, 'dfksg', 'gssgs', 'dfajal@gaaj.com', 1123, '1344');

-- --------------------------------------------------------

--
-- Table structure for table `volunteerForm`
--

CREATE TABLE `volunteerForm` (
  `volunteerFormId` int(11) NOT NULL,
  `fristName` text NOT NULL,
  `lastName` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` int(11) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `stat` varchar(255) NOT NULL,
  `pincode` int(11) NOT NULL,
  `country` text NOT NULL,
  `skillsets` varchar(255) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `monday` varchar(255) NOT NULL DEFAULT '0',
  `tuesday` varchar(255) NOT NULL DEFAULT '0',
  `wednesday` varchar(255) NOT NULL DEFAULT '0',
  `thursday` varchar(255) NOT NULL DEFAULT '0',
  `friday` varchar(255) NOT NULL DEFAULT '0',
  `saturday` varchar(255) NOT NULL DEFAULT '0',
  `sunday` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `volunteerForm`
--

INSERT INTO `volunteerForm` (`volunteerFormId`, `fristName`, `lastName`, `email`, `mobile`, `address1`, `address2`, `city`, `stat`, `pincode`, `country`, `skillsets`, `comments`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`, `saturday`, `sunday`) VALUES
(1, 'vadsgv', 'aadga', 'afaf@sgs.sgs', 3462, 'ssdgs', 'sgss', 'sgsg', 'sgsgs', 14131, 'india', 'sgsfsg', 'sgsgsf', '1', '0', '0', '0', '0', '0', '1'),
(2, 'sgfa', 'gfsg', 'sfgsg@gmail.com', 524542, 'sdfdf', 'sgsg', 'sgsf', 'sgsg', 23424, 'United States', 'fdfs', 'sgsgs', '0', '0', '0', '0', '0', '0', '0'),
(3, 'sga', 'agad', 'afg@hdsf.cc', 25252, 'sfdf', 'gdag', 'aga', 'aga', 2525, 'Albania', 'afada', 'aga', '1', '', '1', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cashDonation`
--
ALTER TABLE `cashDonation`
  ADD PRIMARY KEY (`cashDonationId`);

--
-- Indexes for table `cashRequirement`
--
ALTER TABLE `cashRequirement`
  ADD PRIMARY KEY (`cashRequirementId`);

--
-- Indexes for table `donorProfiles`
--
ALTER TABLE `donorProfiles`
  ADD PRIMARY KEY (`donorId`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedbackId`);

--
-- Indexes for table `getInTouch`
--
ALTER TABLE `getInTouch`
  ADD PRIMARY KEY (`getInTouchId`);

--
-- Indexes for table `goodsDonation`
--
ALTER TABLE `goodsDonation`
  ADD PRIMARY KEY (`goodsDonationId`);

--
-- Indexes for table `goodsRequirement`
--
ALTER TABLE `goodsRequirement`
  ADD PRIMARY KEY (`goodsRequirementId`);

--
-- Indexes for table `ngoProfiles`
--
ALTER TABLE `ngoProfiles`
  ADD PRIMARY KEY (`ngoId`);

--
-- Indexes for table `ngoReq`
--
ALTER TABLE `ngoReq`
  ADD PRIMARY KEY (`ngoReqId`);

--
-- Indexes for table `ngoReq1`
--
ALTER TABLE `ngoReq1`
  ADD PRIMARY KEY (`ngoReq1Id`);

--
-- Indexes for table `volunteerForm`
--
ALTER TABLE `volunteerForm`
  ADD PRIMARY KEY (`volunteerFormId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cashDonation`
--
ALTER TABLE `cashDonation`
  MODIFY `cashDonationId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cashRequirement`
--
ALTER TABLE `cashRequirement`
  MODIFY `cashRequirementId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `donorProfiles`
--
ALTER TABLE `donorProfiles`
  MODIFY `donorId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedbackId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `getInTouch`
--
ALTER TABLE `getInTouch`
  MODIFY `getInTouchId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `goodsDonation`
--
ALTER TABLE `goodsDonation`
  MODIFY `goodsDonationId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `goodsRequirement`
--
ALTER TABLE `goodsRequirement`
  MODIFY `goodsRequirementId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ngoProfiles`
--
ALTER TABLE `ngoProfiles`
  MODIFY `ngoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ngoReq`
--
ALTER TABLE `ngoReq`
  MODIFY `ngoReqId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ngoReq1`
--
ALTER TABLE `ngoReq1`
  MODIFY `ngoReq1Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `volunteerForm`
--
ALTER TABLE `volunteerForm`
  MODIFY `volunteerFormId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
