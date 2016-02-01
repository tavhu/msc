-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2016 at 07:56 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `msc`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_address`
--

CREATE TABLE IF NOT EXISTS `tbl_address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `addressCountry` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `addressCity` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `addressDestrict` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `addressCommune` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `addressVillage` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `addressGroup` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `addressHome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `addressStreet` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `addressDetail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=29 ;

--
-- Dumping data for table `tbl_address`
--

INSERT INTO `tbl_address` (`id`, `addressCountry`, `addressCity`, `addressDestrict`, `addressCommune`, `addressVillage`, `addressGroup`, `addressHome`, `addressStreet`, `addressDetail`) VALUES
(1, 'Cambodia', 'Phnom Penh', 'Chomkamorn', 'Tomnub Tek', 'sok san', '04', '25Z', '207', ''),
(2, 'Cambodia', '', '', '', '', '', '', '', ''),
(3, 'Cambodia', '', '', '', '', '', '', '', ''),
(4, 'Cambodia', '', '', '', '', '', '', '', ''),
(5, 'Cambodia', '', '', '', '', '', '', '', ''),
(6, 'Cambodia', '', '', '', '', '', '', '', ''),
(7, 'Cambodia', '', '', '', '', '', '', '', ''),
(8, 'Cambodia', '', '', '', '', '', '', '', ''),
(9, 'Cambodia', '', '', '', '', '', '', '', ''),
(10, 'Cambodia', '', '', '', '', '', '', '', ''),
(11, 'Cambodia', '', '', '', '', '', '', '', ''),
(12, 'Cambodia', '', '', '', '', '', '', '', ''),
(13, 'Cambodia', '', '', '', '', '', '', '', ''),
(14, 'Cambodia', '', '', '', '', '', '', '', ''),
(15, 'Cambodia', '', '', '', '', '', '', '', ''),
(16, 'Cambodia', '', '', '', '', '', '', '', ''),
(17, 'Cambodia', '', '', '', '', '', '', '', ''),
(18, 'Cambodia', '', '', '', '', '', '', '', ''),
(19, 'Cambodia', '', '', '', '', '', '', '', ''),
(20, 'Cambodia', '', '', '', '', '', '', '', ''),
(21, 'Cambodia', '', '', '', '', '', '', '', ''),
(22, 'Cambodia', 'Phnom Penh', 'Chomkamorn', 'Tomnub Tek', 'sok san', '04', '25Z', '207', 'no detail for address '),
(23, 'Cambodia', '', '', '', '', '', '', '', ''),
(24, 'Cambodia', '', '', '', '', '', '', '', ''),
(25, 'Cambodia', '', '', '', '', '', '', '', ''),
(26, 'Cambodia', '', '', '', '', '', '', '', ''),
(27, 'Cambodia', '', '', '', '', '', '', '', ''),
(28, 'Cambodia', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_father_information`
--

CREATE TABLE IF NOT EXISTS `tbl_father_information` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fatherName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fatherStatus` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fatherOccupation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fatherPhone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fatherCountry` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fatherCity` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fatherDestrict` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fatherCommune` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fatherVillage` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fatherGroup` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fatherHome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fatherStreet` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fatherDetail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=29 ;

--
-- Dumping data for table `tbl_father_information`
--

INSERT INTO `tbl_father_information` (`id`, `fatherName`, `fatherStatus`, `fatherOccupation`, `fatherPhone`, `fatherCountry`, `fatherCity`, `fatherDestrict`, `fatherCommune`, `fatherVillage`, `fatherGroup`, `fatherHome`, `fatherStreet`, `fatherDetail`) VALUES
(1, 'Inn Vuthy', '', 'Fist seller', '0708737051', 'Cambodia', 'Phnom Penh', 'Chom Ka Morn', 'Tom Nun Tek', 'Sok San', '04', '25z', '207', ''),
(2, '', '', '', '', 'Cambodia', '', '', '', '', '', '', '', ''),
(3, '', '', '', '', 'Cambodia', '', '', '', '', '', '', '', ''),
(4, '', '', '', '', 'Cambodia', '', '', '', '', '', '', '', ''),
(5, '', '', '', '', 'Cambodia', '', '', '', '', '', '', '', ''),
(6, '', '', '', '', 'Cambodia', '', '', '', '', '', '', '', ''),
(7, '', '', '', '', 'CambodiaCambodia', '', '', '', '', '', '', '', ''),
(8, '', '', '', '', 'Cambodia', '', '', '', '', '', '', '', ''),
(9, '', '', '', '', 'Cambodia', '', '', '', '', '', '', '', ''),
(10, '', 'unknown', '', '', 'Cambodia', '', '', '', '', '', '', '', ''),
(11, '', '', '', '', 'Cambodia', '', '', '', '', '', '', '', ''),
(12, '', '', '', '', 'CambodiaCambodia', '', '', '', '', '', '', '', ''),
(13, '', '', '', '', 'Cambodia', '', '', '', '', '', '', '', ''),
(14, '', '', '', '', 'Cambodia', '', '', '', '', '', '', '', ''),
(15, '', '', '', '', 'Cambodia', '', '', '', '', '', '', '', ''),
(16, '', '', '', '', 'Cambodia', '', '', '', '', '', '', '', ''),
(17, '', '', '', '', 'Cambodia', '', '', '', '', '', '', '', ''),
(18, '', '', '', '', 'Cambodia', '', '', '', '', '', '', '', ''),
(19, '', '', '', '', 'Cambodia', '', '', '', '', '', '', '', ''),
(20, '', 'unknown', '', '', 'Cambodia', '', '', '', '', '', '', '', ''),
(21, '', '', '', '', 'CambodiaCambodia', '', '', '', '', '', '', '', ''),
(22, 'Inn Vuthy', 'dead', 'Fist seller', '45435345', 'Cambodia', 'Phnom Penh', 'Chom Ka Morn', 'Tom Nun Tek', 'Sok San', '04', '25z ', '207', 'no detail for father'),
(23, '', '', '', '', 'Cambodia', '', '', '', '', '', '', '', ''),
(24, '', '', '', '', 'Cambodia', '', '', '', '', '', '', '', ''),
(25, '', '', '', '', 'Cambodia', '', '', '', '', '', '', '', ''),
(26, '', '', '', '', 'Cambodia', '', '', '', '', '', '', '', ''),
(27, '', '', '', '', 'CambodiaCambodia', '', '', '', '', '', '', '', ''),
(28, '', '', '', '', 'CambodiaCambodia', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mother_information`
--

CREATE TABLE IF NOT EXISTS `tbl_mother_information` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `motherName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `motherStatus` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `motherOccupation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `motherPhone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `motherCountry` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `motherCity` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `motherDestrict` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `motherCommune` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `motherVillage` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `motherGroup` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `motherHome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `motherStreet` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `motherDetail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=29 ;

--
-- Dumping data for table `tbl_mother_information`
--

INSERT INTO `tbl_mother_information` (`id`, `motherName`, `motherStatus`, `motherOccupation`, `motherPhone`, `motherCountry`, `motherCity`, `motherDestrict`, `motherCommune`, `motherVillage`, `motherGroup`, `motherHome`, `motherStreet`, `motherDetail`) VALUES
(1, 'bouy putha', '', '???????', '016494921', 'Cambodia', 'Phnom Penh', 'Chom kamorn', 'Tom nubtek', 'Sok San', '04', '25z', '207', ''),
(2, '', '', '', '', 'Cambodia', '', '', '', '', '', '', '', ''),
(3, '', '', '', '', 'Cambodia', '', '', '', '', '', '', '', ''),
(4, '', '', '', '', 'Cambodia', '', '', '', '', '', '', '', ''),
(5, '', '', '', '', 'Cambodia', '', '', '', '', '', '', '', ''),
(6, '', '', '', '', 'Cambodia', '', '', '', '', '', '', '', ''),
(7, '', '', '', '', 'CambodiaCambodia', '', '', '', '', '', '', '', ''),
(8, '', '', '', '', 'Cambodia', '', '', '', '', '', '', '', ''),
(9, '', '', '', '1231', 'Cambodia', '', '', '', '', '', '', '', ''),
(10, '', '', '', '', 'Cambodia', '', '', '', '', '', '', '', ''),
(11, '', '', '', '', 'Cambodia', '', '', '', '', '', '', '', ''),
(12, '', '', '', '', 'CambodiaCambodia', '', '', '', '', '', '', '', ''),
(13, '', '', '', '', 'Cambodia', '', '', '', '', '', '', '', ''),
(14, '', '', '', '', 'Cambodia', '', '', '', '', '', '', '', ''),
(15, '', '', '', '', 'Cambodia', '', '', '', '', '', '', '', ''),
(16, '', '', '', '', 'Cambodia', '', '', '', '', '', '', '', ''),
(17, '', '', '', '', 'Cambodia', '', '', '', '', '', '', '', ''),
(18, '', '', '', '', 'Cambodia', '', '', '', '', '', '', '', ''),
(19, '', '', '', '', 'Cambodia', '', '', '', '', '', '', '', ''),
(20, '', 'dead', '', '', 'Cambodia', '', '', '', '', '', '', '', ''),
(21, '', '', '', '', 'CambodiaCambodia', '', '', '', '', '', '', '', ''),
(22, 'bouy putha', 'unknown', 'fist seller', '060705654', 'Cambodia', 'Phnom Penh', 'Chom kamorn', 'Tom nubtek', 'Sok San', '04', '25z', '207', 'no detail for mother'),
(23, '', '', '', '', 'Cambodia', '', '', '', '', '', '', '', ''),
(24, '', '', '', '', 'Cambodia', '', '', '', '', '', '', '', ''),
(25, '', '', '', '', 'Cambodia', '', '', '', '', '', '', '', ''),
(26, '', '', '', '', 'Cambodia', '', '', '', '', '', '', '', ''),
(27, '', '', '', '', 'CambodiaCambodia', '', '', '', '', '', '', '', ''),
(28, '', '', '', '', 'CambodiaCambodia', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_parent_information`
--

CREATE TABLE IF NOT EXISTS `tbl_parent_information` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parentName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parentOccupation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parentPhone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parentCountry` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parentCity` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parentDestrict` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parentCommune` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parentVillage` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parentGroup` varchar(255) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `parentHome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parentStreet` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parentDetail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=29 ;

--
-- Dumping data for table `tbl_parent_information`
--

INSERT INTO `tbl_parent_information` (`id`, `parentName`, `parentOccupation`, `parentPhone`, `parentCountry`, `parentCity`, `parentDestrict`, `parentCommune`, `parentVillage`, `parentGroup`, `parentHome`, `parentStreet`, `parentDetail`) VALUES
(1, 'Bouy Putha', 'seller', '01649492112', 'Cambodia', 'Phnom Penh', 'ChomKa Morn', 'Tom nub tek', 'Sok san', '04', '25z', '207', ''),
(2, '', '', '', 'Cambodia', '', '', '', '', '', '', '', ''),
(3, '', '', '', 'Cambodia', '', '', '', '', '', '', '', ''),
(4, '', '', '', 'Cambodia', '', '', '', '', '', '', '', ''),
(5, '', '', '', 'Cambodia', '', '', '', '', '', '', '', ''),
(6, '', '', '', 'Cambodia', '', '', '', '', '', '', '', ''),
(7, '', '', '', 'CambodiaCambodia', '', '', '', '', '', '', '', ''),
(8, '', '', '', 'Cambodia', '', '', '', '', '', '', '', ''),
(9, '', '', '', 'Cambodia', '', '', '', '', '', '', '', ''),
(10, '', '', '', 'Cambodia', '', '', '', '', '', '', '', ''),
(11, '', '', '', 'Cambodia', '', '', '', '', '', '', '', ''),
(12, '', '', '', 'CambodiaCambodia', '', '', '', '', '', '', '', ''),
(13, '', '', '', 'Cambodia', '', '', '', '', '', '', '', ''),
(14, '', '', '', 'Cambodia', '', '', '', '', '', '', '', ''),
(15, '', '', '', 'Cambodia', '', '', '', '', '', '', '', ''),
(16, '', '', '', 'Cambodia', '', '', '', '', '', '', '', ''),
(17, '', '', '', 'Cambodia', '', '', '', '', '', '', '', ''),
(18, '', '', '', 'Cambodia', '', '', '', '', '', '', '', ''),
(19, '', '', '', 'Cambodia', '', '', '', '', '', '', '', ''),
(20, '', '', '', 'Cambodia', '', '', '', '', '', '', '', 'qwewe'),
(21, '', '', '', 'CambodiaCambodia', '', '', '', '', '', '', '', ''),
(22, 'Bouy Putha', 'first seller', '0548548548596', 'Cambodia', 'Phnom Penh', 'ChomKa Morn', 'Tom nub tek', 'Sok san', '04', '25z', '207', 'no detail for parent'),
(23, '', '', '', 'Cambodia', '', '', '', '', '', '', '', ''),
(24, '', '', '', 'Cambodia', '', '', '', '', '', '', '', ''),
(25, '', '', '', 'Cambodia', '', '', '', '', '', '', '', ''),
(26, '', '', '', 'Cambodia', '', '', '', '', '', '', '', '123123'),
(27, '', '', '', 'CambodiaCambodia', '', '', '', '', '', '', '', ''),
(28, '', '', '', 'CambodiaCambodia', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_placeofbirth`
--

CREATE TABLE IF NOT EXISTS `tbl_placeofbirth` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `placeofbirthCountry` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `placeofbirthCity` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `placeofbirthDestrict` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `placeofbirthCommune` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `placeofbirthVillage` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `placeofbirthGroup` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `placeofbirthHomeHospital` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `placeofbirthStreet` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `placeofbirthDetail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=29 ;

--
-- Dumping data for table `tbl_placeofbirth`
--

INSERT INTO `tbl_placeofbirth` (`id`, `placeofbirthCountry`, `placeofbirthCity`, `placeofbirthDestrict`, `placeofbirthCommune`, `placeofbirthVillage`, `placeofbirthGroup`, `placeofbirthHomeHospital`, `placeofbirthStreet`, `placeofbirthDetail`) VALUES
(1, 'Cambodia', 'Takeo', 'treang', 'Angknor', 'speu', '', '', '', ''),
(2, 'Cambodia', '??????', '', '', '', '', '', '', ''),
(3, 'Cambodia', 'ឆឹេឆឹេឆឹេ', '', '', '', '', '', '', ''),
(4, 'Cambodia', '123123', '123123', '', '', '', '', '', ''),
(5, 'Cambodia', '12312312312312312312', '', '', '', '', '', '', ''),
(6, 'Cambodia', '123123', '', '', '', '', '', '', ''),
(7, 'Cambodia', '123123', '', '', '', '', '', '', ''),
(8, 'Cambodia', '123123', '', '', '', '', '', '', ''),
(9, 'Cambodia', '123123', '', '', '', '', '', '', ''),
(10, 'Cambodia', '1231231', '', '', '', '', '', '', ''),
(11, 'Cambodia', '123123123', '', '', '', '', '', '', ''),
(12, 'Cambodia', '123123123', '', '', '', '', '', '', ''),
(13, 'Cambodia', '123123', '', '', '', '', '', '', ''),
(14, 'Cambodia', '123123', '', '', '', '', '', '', ''),
(15, 'Cambodia', '123123', '', '', '', '', '', '', ''),
(16, 'Cambodia', '123123', '', '', '', '', '', '', ''),
(17, 'Cambodia', '123123123', '', '', '', '', '', '', ''),
(18, 'Cambodia', '123123', '', '', '', '', '', '', ''),
(19, 'Cambodia', 'qweqwe', '', '', '', '', '', '', ''),
(20, 'Cambodia', 'qwe', '', '', '', '', '', '', ''),
(21, 'Cambodia', 'ertetr', '', '', '', '', '', '', ''),
(22, 'Cambodia', 'Takeo', 'treang', 'Angknor', 'speu', 'no', 'no', 'no', 'no detail for place of birth'),
(23, 'Cambodia', '123', '', '', '', '', '', '', ''),
(24, 'Cambodia', 'ឆឹេឆឹេឆឹេឆឹេឆឹេឆឹេ', '', '', '', '', '', '', ''),
(25, 'Cambodia', 'qweqweqwe', '', '', '', '', '', '', ''),
(26, 'Cambodia', 'qweqwe', '', '', '', '', '', '', ''),
(27, 'Cambodia', 'qweqweqwe', '', '', '', '', '', '', ''),
(28, 'Cambodia', 'qweqwe', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_position`
--

CREATE TABLE IF NOT EXISTS `tbl_position` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `decrition` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_position`
--

INSERT INTO `tbl_position` (`id`, `name`, `decrition`) VALUES
(1, 'Administrator', ''),
(2, 'Editer', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student_information`
--

CREATE TABLE IF NOT EXISTS `tbl_student_information` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `studentID` varchar(240) COLLATE utf8_unicode_ci NOT NULL,
  `studentenrollDate` date NOT NULL,
  `studentNameInEnglish` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `studentNameInKhmer` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `studentDateofbirth` date NOT NULL,
  `studentNationality` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `studentGender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `studentStatus` text COLLATE utf8_unicode_ci NOT NULL,
  `studentFamilyMembers` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `studentIm` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `studentDisability` text COLLATE utf8_unicode_ci NOT NULL,
  `imgPath` text COLLATE utf8_unicode_ci NOT NULL,
  `studentEntryDate` date NOT NULL,
  `studentEntryDateGrade` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `studentLeavingDate` date NOT NULL,
  `studentLeavingDateGrade` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `studentJob` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `studentSchool` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `studentGradeLevel` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `studentAcademyYear` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `studentDetail` text COLLATE utf8_unicode_ci NOT NULL,
  `studentActive` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `placeofbirthID` int(11) NOT NULL,
  `addressID` int(11) NOT NULL,
  `motherID` int(11) NOT NULL,
  `fatherID` int(11) NOT NULL,
  `parentID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=29 ;

--
-- Dumping data for table `tbl_student_information`
--

INSERT INTO `tbl_student_information` (`auto_id`, `studentID`, `studentenrollDate`, `studentNameInEnglish`, `studentNameInKhmer`, `studentDateofbirth`, `studentNationality`, `studentGender`, `studentStatus`, `studentFamilyMembers`, `studentIm`, `studentDisability`, `imgPath`, `studentEntryDate`, `studentEntryDateGrade`, `studentLeavingDate`, `studentLeavingDateGrade`, `studentJob`, `studentSchool`, `studentGradeLevel`, `studentAcademyYear`, `studentDetail`, `studentActive`, `placeofbirthID`, `addressID`, `motherID`, `fatherID`, `parentID`, `userID`) VALUES
(19, 'weqweqw', '2016-01-18', 'qwe', 'qwe', '0000-00-00', 'Khmer-Pnong', 'female', '1', '', '', '', '', '0000-00-00', 'qwe', '0000-00-00', '', 'studying', '', '2', '7', '', '', 19, 19, 19, 19, 19, 2),
(22, '001', '2016-01-27', 'Thona ', 'Thy ថុនា', '2016-05-01', 'Khmer', 'male', '', '5', '3', 'ពិការដៃខាងស្តាំ​ មានសភាពខ្លីនិងខ្សោយ', 'file_edit.jpg', '2005-08-24', '1', '2005-08-05', '6', 'studying', '15', '3', '2015', 'ធ្វើការនៅក្រុមប្រឹក្សាសកម្មភាពជនពិការ ផ្នែក IT ', '', 22, 22, 22, 22, 22, 4),
(23, '123123', '2016-01-01', '123', '123', '0000-00-00', 'Khmer', '', '', '', '', '', '2011sep_day.jpg', '0000-00-00', '', '0000-00-00', '', 'studying', '', '5', '3', '', '', 23, 23, 23, 23, 23, 2),
(24, '0013', '2016-01-26', 'Thy Thona', 'ធី ថុនា', '2016-01-27', 'Khmer', '', '', '', '', '', 'file_edit1.jpg', '0000-00-00', 'ឆឹេឆឹេ', '0000-00-00', '', 'studying', '', '12', '6', '', '', 24, 24, 24, 24, 24, 4),
(25, '3123', '2016-01-29', 'Chandy', 'wejrwkjerkj', '2016-01-29', 'Khmer-Pnong', 'female', '1', '3', 'qweqwe', 'qweqwe', '', '0000-00-00', '', '0000-00-00', '', 'studying', '', '', '', '', '', 25, 25, 25, 25, 25, 5),
(26, '0012', '2016-01-31', 'Thy Thona23123', 'ធី ថុនា', '1993-02-26', 'Khmer', 'male', '1', '5', '22', 'ពិារការដៃ', 'Snapshot_20130226_1.JPG', '2016-08-09', '12', '0000-00-00', '12', 'studying', '23', '', '2012', '', '1', 26, 26, 26, 26, 26, 6),
(27, '3123', '2016-01-29', 'chandy', 'wejrwkjerkj', '2016-01-29', 'Khmer', '', '', '3', 'qweqwe', 'qweqwe', '', '0000-00-00', '', '0000-00-00', '', 'studying', '', '', '', '', '', 27, 27, 27, 27, 27, 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student_servation`
--

CREATE TABLE IF NOT EXISTS `tbl_student_servation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data_entry_id` int(11) NOT NULL,
  `oneofone` text COLLATE utf8_unicode_ci NOT NULL,
  `oneoftwo` text COLLATE utf8_unicode_ci NOT NULL,
  `oneofthree` text COLLATE utf8_unicode_ci NOT NULL,
  `oneoffour` text COLLATE utf8_unicode_ci NOT NULL,
  `oneoffiveYN` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `oneofsixYN` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `oneofseven` text COLLATE utf8_unicode_ci NOT NULL,
  `oneofeightYN` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `oneofnineYN` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `oneoften` text COLLATE utf8_unicode_ci NOT NULL,
  `oneofeleven` text COLLATE utf8_unicode_ci NOT NULL,
  `oneofthirteen` text COLLATE utf8_unicode_ci NOT NULL,
  `oneoffitheenYN` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `oneoftwelve` text COLLATE utf8_unicode_ci NOT NULL,
  `oneofsixteenYN` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `oneofseventeenYN` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `oneofeightteenYN` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `oneofnineteen` text COLLATE utf8_unicode_ci NOT NULL,
  `onedetail` text COLLATE utf8_unicode_ci NOT NULL,
  `oneofthreeYN` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `oneofsevenYN` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `oneofelevenYN` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `oneoftwelveYN` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `oneofthirteenYN` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `oneoffourteenYN` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `oneoffourteen` text COLLATE utf8_unicode_ci NOT NULL,
  `twoofoneYN` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `twoofone` text COLLATE utf8_unicode_ci NOT NULL,
  `twooftwoYN` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `twoofthree` text COLLATE utf8_unicode_ci NOT NULL,
  `twooffour` text COLLATE utf8_unicode_ci NOT NULL,
  `twodetail` text COLLATE utf8_unicode_ci NOT NULL,
  `threeofoneYN` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `threeofone` text COLLATE utf8_unicode_ci NOT NULL,
  `threeoftwoYN` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `threeoftwo` text COLLATE utf8_unicode_ci NOT NULL,
  `threeofthreeYN` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `threeofthree` text COLLATE utf8_unicode_ci NOT NULL,
  `threeoffourYN` int(11) NOT NULL,
  `threeoffour` text COLLATE utf8_unicode_ci NOT NULL,
  `threedetail` text COLLATE utf8_unicode_ci NOT NULL,
  `fourofoneYN` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `fourofone` text COLLATE utf8_unicode_ci NOT NULL,
  `fouroftwoYN` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `fouroftwo` text COLLATE utf8_unicode_ci NOT NULL,
  `fourdetail` text COLLATE utf8_unicode_ci NOT NULL,
  `fiveofoneYN` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `fiveofone` text COLLATE utf8_unicode_ci NOT NULL,
  `fiveoftwoYN` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `fiveoftwo` text COLLATE utf8_unicode_ci NOT NULL,
  `fiveofthreeYN` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `fiveofthree` text COLLATE utf8_unicode_ci NOT NULL,
  `fiveoffourYN` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `fiveoffour` text COLLATE utf8_unicode_ci NOT NULL,
  `fivedetail` text COLLATE utf8_unicode_ci NOT NULL,
  `studentID` int(11) NOT NULL,
  `dateofservation` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `real_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `email_address` text COLLATE utf8_unicode_ci NOT NULL,
  `type_user` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `real_name`, `position`, `username`, `password`, `email_address`, `type_user`) VALUES
(2, 'Thona', 'Administrator', 's0eDKZXjrUkgA35NFhGnDlSW0ajj5cnh8TsmNBTSihc', 'Xfbmnw2kB9Jm2sufR26bRww2x3bcnt72RhPrBZVDrqg', 'thythona168@gmail.com', ''),
(4, 'admin', '', 'EsHNkD_Y3RNZh8Det33c8cQ6uhNfWrzoWvlHF4A4RZU', 'V2vrXzELANgHZ5JTKbr9FCmZMYwqs6MnaXNA93kW0a8', 'thonathy123@gmail.com', 'Editer'),
(5, 'Thona', '', '5gHVQzp3H7hpR7uw-7OdItRNLtOxprwWGG5lE1IlP-A', 'nIaoQtriOlov8OPXWwStzSJyijIMuxveGOkBROFeAFY', 'thonathy@gmail.com', 'Administrator'),
(6, 'thy thona', '', '5gHVQzp3H7hpR7uw-7OdItRNLtOxprwWGG5lE1IlP-A', 'eUjCFxvOyBujgr4mpAZCcnPL-AimWGpoUPdFJb4nQj8', 'thonathy@dac.org.kh', 'Administrator');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
