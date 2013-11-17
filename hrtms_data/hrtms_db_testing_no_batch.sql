-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 06, 2013 at 08:50 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hrtms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `batch_no`
--

CREATE TABLE IF NOT EXISTS `batch_no` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `batch_control_no` varchar(25) NOT NULL,
  `client` varchar(25) NOT NULL,
  `date_start` date NOT NULL,
  `training_days` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `batch_no`
--

INSERT INTO `batch_no` (`id`, `batch_control_no`, `client`, `date_start`, `training_days`, `date_created`) VALUES
(1, 'TS13-ASB-001', 'TOSHIBA', '2013-09-06', 3, '2013-09-06 15:33:41');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('34598f4aa5e131d57d8444fbe8f5d47c', '192.168.0.222', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1378457267, 'a:23:{s:9:"user_data";s:0:"";s:2:"id";s:1:"2";s:7:"user_id";s:14:"AMI-ADMIN-0001";s:8:"username";s:5:"admin";s:8:"password";s:32:"81dc9bdb52d04dc20036dbd8313ed055";s:9:"last_name";s:5:"Stark";s:11:"middle_name";s:0:"";s:10:"first_name";s:4:"Tony";s:10:"birth_date";s:10:"1992-10-19";s:7:"address";s:0:"";s:4:"city";s:0:"";s:8:"province";s:0:"";s:7:"country";s:2:"ph";s:8:"zip_code";s:4:"4023";s:5:"phone";s:0:"";s:17:"security_question";s:1:"0";s:15:"security_answer";s:0:"";s:5:"email";s:25:"admin@alliancemansols.com";s:10:"permission";s:13:"Administrator";s:12:"is_logged_in";b:1;s:7:"company";s:0:"";s:9:"is_active";s:1:"1";s:9:"sender_id";s:1:"0";}');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `client_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(25) NOT NULL,
  `client_name` varchar(255) DEFAULT NULL,
  `client_location` varchar(255) DEFAULT NULL,
  `client_username` varchar(25) NOT NULL,
  `client_email` varchar(25) NOT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `user_id`, `client_name`, `client_location`, `client_username`, `client_email`) VALUES
(1, 'AMI-CLIENT-0001', 'TOSHIBA', 'Laguna Technopark, Binan, Laguna, Philippines', '', ''),
(2, 'AMI-CLIENT-0002', 'TOTOKU', 'Carmelray Industrial Park II, Calamba, Laguna', '', ''),
(3, 'AMI-CLIENT-0003', 'SHINETSU', ' Laguna Technopark, SEPZ, Biñan, Laguna, Philippines', '', ''),
(4, 'AMI-CLIENT-0004', 'AMI', 'Laguna Technopark, Binan, Laguna, Philippines', '', ''),
(9, 'AMI-CLIENT-0005', 'HP', 'Makati City', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `examination`
--

CREATE TABLE IF NOT EXISTS `examination` (
  `examination_id` int(11) NOT NULL AUTO_INCREMENT,
  `examination_name` varchar(45) DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`examination_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `examination`
--

INSERT INTO `examination` (`examination_id`, `examination_name`, `date_modified`, `is_active`) VALUES
(4, 'TESTING', '2013-09-06 00:45:05', 1);

-- --------------------------------------------------------

--
-- Table structure for table `gradesheet`
--

CREATE TABLE IF NOT EXISTS `gradesheet` (
  `training_id` varchar(255) DEFAULT NULL,
  `scores` int(3) DEFAULT NULL,
  `over` int(255) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gradesheet`
--

INSERT INTO `gradesheet` (`training_id`, `scores`, `over`, `status`) VALUES
('AMI1309-TRAINEE-0002', 60, 100, 'FAILED'),
('AMI1309-TRAINEE-0003', 61, 100, 'FAILED'),
('AMI1309-TRAINEE-0004', 62, 100, 'FAILED'),
('AMI1309-TRAINEE-0005', 63, 100, 'FAILED'),
('AMI1309-TRAINEE-0006', 64, 100, 'FAILED'),
('AMI1309-TRAINEE-0007', 85, 100, 'PASSED'),
('AMI1309-TRAINEE-0008', 86, 100, 'PASSED'),
('AMI1309-TRAINEE-0009', 87, 100, 'PASSED'),
('AMI1309-TRAINEE-0010', 88, 100, 'PASSED'),
('AMI1309-TRAINEE-0011', 89, 100, 'PASSED'),
('AMI1309-TRAINEE-0012', 90, 100, 'PASSED'),
('AMI1309-TRAINEE-0013', 91, 100, 'PASSED'),
('AMI1309-TRAINEE-0014', 92, 100, 'PASSED'),
('AMI1309-TRAINEE-0015', 93, 100, 'PASSED'),
('AMI1309-TRAINEE-0016', 94, 100, 'PASSED'),
('AMI1309-TRAINEE-0017', 95, 100, 'PASSED'),
('AMI1309-TRAINEE-0018', 96, 100, 'PASSED'),
('AMI1309-TRAINEE-0019', 97, 100, 'PASSED'),
('AMI1309-TRAINEE-0020', 98, 100, 'PASSED'),
('AMI1309-TRAINEE-0021', 99, 100, 'PASSED'),
('AMI1309-TRAINEE-0022', 100, 100, 'PASSED'),
('AMI1309-TRAINEE-0023', 100, 100, 'PASSED'),
('AMI1309-TRAINEE-0024', 100, 100, 'PASSED'),
('AMI1309-TRAINEE-0025', 100, 100, 'PASSED'),
('AMI1309-TRAINEE-0026', 100, 100, 'PASSED'),
('AMI1309-TRAINEE-0027', 100, 100, 'PASSED'),
('AMI1309-TRAINEE-0028', 100, 100, 'PASSED'),
('AMI1309-TRAINEE-0029', 100, 100, 'PASSED'),
('AMI1309-TRAINEE-0030', 100, 100, 'PASSED'),
('AMI1309-TRAINEE-0031', 100, 100, 'PASSED'),
('AMI1309-TRAINEE-0032', 100, 100, 'PASSED'),
('AMI1309-TRAINEE-0033', 100, 100, 'PASSED'),
('AMI1309-TRAINEE-0034', 100, 100, 'PASSED'),
('AMI1309-TRAINEE-0035', 100, 100, 'PASSED'),
('AMI1309-TRAINEE-0036', 100, 100, 'PASSED'),
('AMI1309-TRAINEE-0037', 100, 100, 'PASSED'),
('AMI1309-TRAINEE-0038', 100, 100, 'PASSED'),
('AMI1309-TRAINEE-0039', 100, 100, 'PASSED'),
('AMI1309-TRAINEE-0040', 100, 100, 'PASSED'),
('AMI1309-TRAINEE-0041', 100, 100, 'PASSED');

-- --------------------------------------------------------

--
-- Table structure for table `hris`
--

CREATE TABLE IF NOT EXISTS `hris` (
  `register_id` varchar(17) NOT NULL,
  `trainee_id` varchar(45) NOT NULL,
  `batch_control_no` varchar(45) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `nickname` varchar(45) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `place_of_birth` varchar(45) DEFAULT NULL,
  `citizenship` varchar(45) DEFAULT NULL,
  `present_address` varchar(255) DEFAULT NULL,
  `present_city` varchar(35) DEFAULT NULL,
  `present_province` varchar(35) DEFAULT NULL,
  `provincial_address` varchar(255) DEFAULT NULL,
  `provincial_city` varchar(35) DEFAULT NULL,
  `provincial_province` varchar(35) DEFAULT NULL,
  `mailing_address` varchar(255) DEFAULT NULL,
  `mailing_city` varchar(35) DEFAULT NULL,
  `mailing_province` varchar(35) DEFAULT NULL,
  `civil_status` varchar(15) DEFAULT NULL,
  `marriage_date` date DEFAULT NULL,
  `marriage_place` varchar(255) DEFAULT NULL,
  `height` varchar(45) DEFAULT NULL,
  `weight` varchar(45) DEFAULT NULL,
  `blood_type` varchar(2) DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `religion` varchar(45) DEFAULT NULL,
  `home_no` varchar(20) DEFAULT NULL,
  `mobile_no` varchar(20) DEFAULT NULL,
  `alternative_no` varchar(45) DEFAULT NULL,
  `sss_no` varchar(15) DEFAULT NULL,
  `tin_no` varchar(12) DEFAULT NULL,
  `philhealth_no` varchar(45) DEFAULT NULL,
  `pagibig_no` varchar(45) DEFAULT NULL,
  `allergy` varchar(45) DEFAULT NULL,
  `tax_status` varchar(20) DEFAULT NULL,
  `passport_no` varchar(45) DEFAULT NULL,
  `passport_issue_date` date DEFAULT NULL,
  `passport_issue_place` varchar(255) DEFAULT NULL,
  `passport_issue_country` varchar(45) DEFAULT NULL,
  `passport_expiration_date` date DEFAULT NULL,
  `license_type` varchar(45) DEFAULT NULL,
  `license_issue_date` date DEFAULT NULL,
  `license_issue_place` varchar(255) DEFAULT NULL,
  `license_expiration_date` date DEFAULT NULL,
  `spouse_first_name` varchar(255) DEFAULT NULL,
  `spouse_last_name` varchar(255) DEFAULT NULL,
  `spouse_middle_name` varchar(255) DEFAULT NULL,
  `spouse_birthdate` date DEFAULT NULL,
  `spouse_occupation` varchar(255) DEFAULT NULL,
  `spouse_contact_no` varchar(45) DEFAULT NULL,
  `employer_name` varchar(255) DEFAULT NULL,
  `employer_business` varchar(255) DEFAULT NULL,
  `employer_location` varchar(255) DEFAULT NULL,
  `employer_contact_no` varchar(45) DEFAULT NULL,
  `children_name` varchar(255) DEFAULT NULL,
  `children_birthdate` varchar(255) DEFAULT NULL,
  `children_school_or_work` varchar(255) DEFAULT NULL,
  `dependent_name` varchar(255) DEFAULT NULL,
  `dependent_birthdate` varchar(255) DEFAULT NULL,
  `dependent_relationship` varchar(45) DEFAULT NULL,
  `beneficiary_name` varchar(255) DEFAULT NULL,
  `beneficiary_birthdate` varchar(255) DEFAULT NULL,
  `beneficiary_relationship` varchar(45) DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `father_occupation` varchar(45) DEFAULT NULL,
  `father_occupation_address` varchar(255) DEFAULT NULL,
  `father_age` int(3) DEFAULT NULL,
  `father_address` varchar(255) DEFAULT NULL,
  `father_contact_no` varchar(20) DEFAULT NULL,
  `mother_name` varchar(255) DEFAULT NULL,
  `mother_occupation` varchar(45) DEFAULT NULL,
  `mother_occupation_address` varchar(255) DEFAULT NULL,
  `mother_age` int(3) DEFAULT NULL,
  `mother_address` varchar(255) DEFAULT NULL,
  `mother_contact_no` varchar(20) DEFAULT NULL,
  `skills` varchar(45) DEFAULT NULL,
  `hobbies` varchar(45) DEFAULT NULL,
  `interests` varchar(45) DEFAULT NULL,
  `educational_level` varchar(45) DEFAULT NULL,
  `school_name` varchar(255) DEFAULT NULL,
  `education_from` varchar(255) DEFAULT NULL,
  `education_to` varchar(255) DEFAULT NULL,
  `education_course` varchar(45) DEFAULT NULL,
  `honors` varchar(255) DEFAULT NULL,
  `vacancy` varchar(255) NOT NULL,
  `employment_company_name` varchar(255) DEFAULT NULL,
  `employment_location` varchar(255) DEFAULT NULL,
  `employment_position` varchar(45) DEFAULT NULL,
  `employment_from` varchar(45) DEFAULT NULL,
  `employment_to` varchar(45) DEFAULT NULL,
  `employment_reason_leave` varchar(255) DEFAULT NULL,
  `character_name` varchar(255) DEFAULT NULL,
  `character_company` varchar(255) DEFAULT NULL,
  `character_contact_no` varchar(15) DEFAULT NULL,
  `date_accomplished` date DEFAULT NULL,
  `deployment_status` varchar(45) DEFAULT NULL,
  `payment_status` varchar(45) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `date_edit` date NOT NULL,
  PRIMARY KEY (`trainee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hris`
--

INSERT INTO `hris` (`register_id`, `trainee_id`, `batch_control_no`, `first_name`, `last_name`, `middle_name`, `nickname`, `birthdate`, `place_of_birth`, `citizenship`, `present_address`, `present_city`, `present_province`, `provincial_address`, `provincial_city`, `provincial_province`, `mailing_address`, `mailing_city`, `mailing_province`, `civil_status`, `marriage_date`, `marriage_place`, `height`, `weight`, `blood_type`, `gender`, `religion`, `home_no`, `mobile_no`, `alternative_no`, `sss_no`, `tin_no`, `philhealth_no`, `pagibig_no`, `allergy`, `tax_status`, `passport_no`, `passport_issue_date`, `passport_issue_place`, `passport_issue_country`, `passport_expiration_date`, `license_type`, `license_issue_date`, `license_issue_place`, `license_expiration_date`, `spouse_first_name`, `spouse_last_name`, `spouse_middle_name`, `spouse_birthdate`, `spouse_occupation`, `spouse_contact_no`, `employer_name`, `employer_business`, `employer_location`, `employer_contact_no`, `children_name`, `children_birthdate`, `children_school_or_work`, `dependent_name`, `dependent_birthdate`, `dependent_relationship`, `beneficiary_name`, `beneficiary_birthdate`, `beneficiary_relationship`, `father_name`, `father_occupation`, `father_occupation_address`, `father_age`, `father_address`, `father_contact_no`, `mother_name`, `mother_occupation`, `mother_occupation_address`, `mother_age`, `mother_address`, `mother_contact_no`, `skills`, `hobbies`, `interests`, `educational_level`, `school_name`, `education_from`, `education_to`, `education_course`, `honors`, `vacancy`, `employment_company_name`, `employment_location`, `employment_position`, `employment_from`, `employment_to`, `employment_reason_leave`, `character_name`, `character_company`, `character_contact_no`, `date_accomplished`, `deployment_status`, `payment_status`, `email`, `date_edit`) VALUES
('AMI1309-REG-0002', 'AMI1309-TRAINEE-0002', NULL, 'Paul John', 'Marabe', '', 'Paul John', '0000-00-00', 'SANTA CRUZ, MANILA', 'Filipino', ' 1111 PUROK 5', 'Santa Rosa City', 'Laguna', ' 1111 PUROK 5', 'Santa Rosa City', 'Laguna', ' 1111 PUROK 5', 'Santa Rosa City', 'Laguna', 'Single', '0000-00-00', 'NULL', '100', '45', 'AB', 'Male', 'Catholic', 'NULL', '9053530285', 'NULL', '555-5555-555', '123-3232123', '253-3493-23', '968-3422', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'ELENA M. RAYMUNDO', 'NULL', 'NULL', 30, 'BLK. 9 LOT 17 PHASE 1E SAN LORENZO SOUTH', ' 0905-785-4316', 'NULL', 'SANTIAGO MONTORIO', 'NULL', 0, 'NULL', 'BLK. 9 LOT 17 PHASE ', 'NULL', 'NULL', 'NULL', 'College Level', 'PUP', '2010', '2014', 'BSIT', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'shir_belms@yahoo.com', '0000-00-00'),
('AMI1309-REG-0003', 'AMI1309-TRAINEE-0003', NULL, 'Faustino', 'Cabalo Jr. I', '', 'Faustino', '0000-00-00', 'SANTA ROSA, LAGUNA', 'Filipino', ' 169 HERNANDEZ ST. PUROK 4', 'San Pedro', 'Laguna', ' 169 HERNANDEZ ST. PUROK 4', 'San Pedro', 'Laguna', ' 169 HERNANDEZ ST. PUROK 4', 'San Pedro', 'Laguna', 'Single', '0000-00-00', '', '101', '46', 'AB', 'Male', 'Catholic', 'NULL', '9057712247', 'NULL', '555-5555-556', '123-3232124', '253-3493-24', '968-3423', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'LILIA S. CASTILLO', 'NULL', 'NULL', 31, 'BLK 32, LOT 6 PH 1A ACACIA', ' 0923-480-7847', '', 'REGOLYN F. PERRA', 'NULL', 0, 'NULL', 'BLK 32, LOT 6 PH 1A ', 'NULL', 'NULL', 'NULL', 'College Level', 'PUP', '2010', '2014', 'BSIT', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'secnirp_selasor@yahoo.com', '0000-00-00'),
('AMI1309-REG-0004', 'AMI1309-TRAINEE-0004', NULL, 'Paul Joseph', 'Bawan', '', 'Paul Joseph', '0000-00-00', 'PARA?AQUE CITY, MANILA', 'Filipino', ' 1737 PUROK 1', 'Santa Rosa City', 'Laguna', ' 1737 PUROK 1', 'Santa Rosa City', 'Laguna', ' 1737 PUROK 1', 'Santa Rosa City', 'Laguna', 'Single', '0000-00-00', '', '102', '47', 'AB', 'Male', 'Catholic', 'NULL', '9059130225', 'NULL', '555-5555-557', '123-3232125', '253-3493-25', '968-3424', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'LUDY GARCIA', 'NULL', 'NULL', 32, 'FORD ST. BLK 20 LOT 16 GARDEN VILLAS', ' 0915-308-5506', '', 'ELENA M. RAYMUNDO', 'NULL', 0, 'NULL', 'FORD ST. BLK 20 LOT ', 'NULL', 'NULL', 'NULL', 'College Level', 'PUP', '2010', '2014', 'BSIT', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'perravincent@yahoo.com', '0000-00-00'),
('AMI1309-REG-0005', 'AMI1309-TRAINEE-0005', NULL, 'Reuel John', 'Lacanienta', '', 'Reuel John', '0000-00-00', 'SANTA ROSA, LAGUNA', 'Filipino', ' 1868 PUROK 4', 'Santa Rosa City', 'Laguna', ' 1868 PUROK 4', 'Santa Rosa City', 'Laguna', ' 1868 PUROK 4', 'Santa Rosa City', 'Laguna', 'Single', '0000-00-00', '', '103', '48', 'AB', 'Male', 'Catholic', 'NULL', '9061625174', 'NULL', '555-5555-558', '123-3232126', '253-3493-26', '968-3425', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'JOSE M. PAREJA', 'NULL', 'NULL', 33, 'BLK 5 LOT 38, SAINT JOHN', ' 0906-582-9873', '', 'LILIA S. CASTILLO', 'NULL', 0, 'NULL', 'BLK 5 LOT 38, SAINT ', 'NULL', 'NULL', 'NULL', 'College Level', 'PUP', '2010', '2014', 'BSIT', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'musync_27_online@yahoo.com', '0000-00-00'),
('AMI1309-REG-0006', 'AMI1309-TRAINEE-0006', NULL, 'John Simon', 'Laforteza', '', 'John Simon', '0000-00-00', 'PASAY CITY', 'Filipino', ' 199 ILANG-ILANG ST. HANGYA PUROK 2', 'Santa Rosa City', 'Laguna', ' 199 ILANG-ILANG ST. HANGYA PUROK 2', 'Santa Rosa City', 'Laguna', ' 199 ILANG-ILANG ST. HANGYA PUROK 2', 'Santa Rosa City', 'Laguna', 'Single', '0000-00-00', '', '104', '49', 'AB', 'Male', 'Catholic', 'NULL', '9064907804', 'NULL', '555-5555-559', '123-3232127', '253-3493-27', '968-3426', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'TERESITA LABRADOR', 'NULL', 'NULL', 34, 'BLK 5 LOT 23 JB VILLAGE II', ' 0906-963-9925', '', 'MARINA PAREJA', 'NULL', 0, 'NULL', 'BLK 5 LOT 23 JB VILL', 'NULL', 'NULL', 'NULL', 'College Level', 'PUP', '2010', '2014', 'BSIT', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'xyndrax_45@yahoo.com', '0000-00-00'),
('AMI1309-REG-0007', 'AMI1309-TRAINEE-0007', NULL, 'Allen', 'Requina', '', 'Allen', '0000-00-00', 'PILA, LAGUNA', 'Filipino', ' 266 PUROK 4', 'Cabuyao', 'Laguna', ' 266 PUROK 4', 'Cabuyao', 'Laguna', ' 266 PUROK 4', 'Cabuyao', 'Laguna', 'Single', '0000-00-00', '', '105', '50', 'AB', 'Male', 'Catholic', 'NULL', '9073254557', 'NULL', '555-5555-560', '123-3232128', '253-3493-28', '968-3427', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'MARINA PAREJA', 'NULL', 'NULL', 35, 'BLK 13 LOT 17, GOLDEN CITY SUBD.', ' 0910-292-8276', '', 'JEANNE ALFARO', 'NULL', 0, 'NULL', 'BLK 13 LOT 17, GOLDE', 'NULL', 'NULL', 'NULL', 'College Level', 'PUP', '2010', '2014', 'BSIT', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'blak1327@yahoo.com', '0000-00-00'),
('AMI1309-REG-0008', 'AMI1309-TRAINEE-0008', NULL, 'Dominique', 'Syluancia', '', 'Dominique', '0000-00-00', 'SANTA ROSA, LAGUNA', 'Filipino', ' 351 PUROK 5', 'Cabuyao', 'Laguna', ' 351 PUROK 5', 'Cabuyao', 'Laguna', ' 351 PUROK 5', 'Cabuyao', 'Laguna', 'Single', '0000-00-00', '', '106', '51', 'AB', 'Male', 'Catholic', 'NULL', '9073694325', 'NULL', '555-5555-561', '123-3232129', '253-3493-29', '968-3428', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'JEANNE ALFARO', 'NULL', 'NULL', 36, 'BLK 11 LOT 7 BUKLOD BAHAYAN', ' 0905-310-0030', '', 'MARY ANN ATIENZA', 'NULL', 0, 'NULL', 'BLK 11 LOT 7 BUKLOD ', 'NULL', 'NULL', 'NULL', 'College Level', 'PUP', '2010', '2014', 'BSIT', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'dnlrmrez@yahoo.com', '0000-00-00'),
('AMI1309-REG-0009', 'AMI1309-TRAINEE-0009', NULL, 'Daisy', 'Barcenal', '', 'Daisy', '0000-00-00', 'BI?AN, LAGUNA', 'Filipino', ' 473 PUROK 1', 'Santa Rosa City', 'Laguna', ' 473 PUROK 1', 'Santa Rosa City', 'Laguna', ' 473 PUROK 1', 'Santa Rosa City', 'Laguna', 'Single', '0000-00-00', '', '107', '52', 'AB', 'Male', 'Catholic', 'NULL', '9084322389', 'NULL', '555-5555-562', '123-3232130', '253-3493-30', '968-3429', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'MARGARITA DJ. FLORES', 'NULL', 'NULL', 37, 'BLK 1 LOT 53, SOUTHFAIRWAY HOMES,', ' 0917-905-9192', '', 'MARIMAR SANTILLAN', 'NULL', 0, 'NULL', 'BLK 1 LOT 53, SOUTHF', 'NULL', 'NULL', 'NULL', 'College Level', 'PUP', '2010', '2014', 'BSIT', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'gojunmin@yahoo.com', '0000-00-00'),
('AMI1309-REG-0010', 'AMI1309-TRAINEE-0010', NULL, 'Mark', 'Baylon', '', 'Mark', '0000-00-00', 'BI?AN, LAGUNA', 'Filipino', '# 23 ARGANA COMPOUND', 'San Pedro', 'Laguna', '# 23 ARGANA COMPOUND', 'San Pedro', 'Laguna', '# 23 ARGANA COMPOUND', 'San Pedro', 'Laguna', 'Single', '0000-00-00', '', '108', '53', 'AB', 'Male', 'Catholic', 'NULL', '9084896960', 'NULL', '555-5555-563', '123-3232131', '253-3493-31', '968-3430', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'MARY ANN ATIENZA', 'NULL', 'NULL', 38, 'BLK 2 LOT 24, PH 4 GOLDEN CITY SUBD.', ' 091544383591 / 0906', '', 'MARIFE CASIBUA', 'NULL', 0, 'NULL', 'BLK 2 LOT 24, PH 4 G', 'NULL', 'NULL', 'NULL', 'College Level', 'PUP', '2010', '2014', 'BSIT', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'kenneth_pising@yahoo.com', '0000-00-00'),
('AMI1309-REG-0011', 'AMI1309-TRAINEE-0011', NULL, 'Jessa', 'De Castro', '', 'Jessa', '0000-00-00', 'BI?AN, LAGUNA', 'Filipino', '# 3 2ND ST. PACITA COMPLEX 1', 'San Pedro', 'Laguna', '# 3 2ND ST. PACITA COMPLEX 1', 'San Pedro', 'Laguna', '# 3 2ND ST. PACITA COMPLEX 1', 'San Pedro', 'Laguna', 'Single', '0000-00-00', '', '109', '54', 'AB', 'Male', 'Catholic', 'NULL', '9092628482', 'NULL', '555-5555-564', '123-3232132', '253-3493-32', '968-3431', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'MARIMAR SANTILLAN', 'NULL', 'NULL', 39, 'BLK 2 LOT 24, PH 4 GOLDEN CITY SUBD.', ' 0935-319-5169', '', 'AQUILINO A. BOONGALING', 'NULL', 0, 'NULL', 'BLK 2 LOT 24, PH 4 G', 'NULL', 'NULL', 'NULL', 'College Level', 'PUP', '2010', '2014', 'BSIT', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'raymundosheena08@yahoo.com', '0000-00-00'),
('AMI1309-REG-0012', 'AMI1309-TRAINEE-0012', NULL, 'Paulo', 'Gaviola', '', 'Paulo', '0000-00-00', 'SANTA CRUZ, LAGUNA', 'Filipino', '# 42 PUROK 6', 'Santa Rosa City', 'Laguna', '# 42 PUROK 6', 'Santa Rosa City', 'Laguna', '# 42 PUROK 6', 'Santa Rosa City', 'Laguna', 'Single', '0000-00-00', '', '110', '55', 'AB', 'Male', 'Catholic', 'NULL', '9103246377', 'NULL', '555-5555-565', '123-3232133', '253-3493-33', '968-3432', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'MARILYN RICO', 'NULL', 'NULL', 40, 'BLK 6 LOT 6 PHASE 6', ' 0921-204-4053', '', 'ELVIRA LAZAGA', 'NULL', 0, 'NULL', 'BLK 6 LOT 6 PHASE 6', 'NULL', 'NULL', 'NULL', 'College Level', 'PUP', '2010', '2014', 'BSIT', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'kim_makalintal@yahoo.com', '0000-00-00'),
('AMI1309-REG-0013', 'AMI1309-TRAINEE-0013', NULL, 'Darvin John', 'Paran', '', 'Darvin John', '0000-00-00', 'SANTA ROSA, LAGUNA', 'Filipino', '#18 SAMPAGUITA STREET IRENEVILLE 4', 'Bi?an City', 'Laguna', '#18 SAMPAGUITA STREET IRENEVILLE 4', 'Bi?an City', 'Laguna', '#18 SAMPAGUITA STREET IRENEVILLE 4', 'Bi?an City', 'Laguna', 'Single', '0000-00-00', '', '111', '56', 'AB', 'Male', 'Catholic', 'NULL', '9122256074', 'NULL', '555-5555-566', '123-3232134', '253-3493-34', '968-3433', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'MARIFE CASIBUA', 'NULL', 'NULL', 41, 'BLK. 19 LOT 43 PHASE 3 GOLDEN CITY', ' 0917-906-3116', '', 'MELBA BEGONIA', 'NULL', 0, 'NULL', 'BLK. 19 LOT 43 PHASE', 'NULL', 'NULL', 'NULL', 'College Level', 'PUP', '2010', '2014', 'BSIT', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'juliusdave_07rko@yahoo.com', '0000-00-00'),
('AMI1309-REG-0014', 'AMI1309-TRAINEE-0014', NULL, 'Jerica', 'Rebong', '', 'Jerica', '0000-00-00', 'CARMONA, CAVITE', 'Filipino', '#3 TOPAZ ST. FRANCIS HOME 3', 'San Pedro', 'Laguna', '#3 TOPAZ ST. FRANCIS HOME 3', 'San Pedro', 'Laguna', '#3 TOPAZ ST. FRANCIS HOME 3', 'San Pedro', 'Laguna', 'Single', '0000-00-00', '', '112', '57', 'AB', 'Male', 'Catholic', 'NULL', '9124987653', 'NULL', '555-5555-567', '123-3232135', '253-3493-35', '968-3434', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'AQUILINO A. BOONGALING', 'NULL', 'NULL', 42, 'BLK 4 LOT 4 PILI ST. PROGRESSIVE VILLAGE', ' 0906-207-5878', '', 'WILMA B. CASILLO', 'NULL', 0, 'NULL', 'BLK 4 LOT 4 PILI ST.', 'NULL', 'NULL', 'NULL', 'College Level', 'PUP', '2010', '2014', 'BSIT', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'sarte.camille@yahoo.com', '0000-00-00'),
('AMI1309-REG-0015', 'AMI1309-TRAINEE-0015', NULL, 'Ulyses', 'Rico', '', 'Ulyses', '0000-00-00', 'QUEZON CITY, MANILA', 'Filipino', '#4 STA. BARBARA ST. B-3 L-14 PH 1-B PACITA COMPLEX 1', 'San Pedro', 'Laguna', '#4 STA. BARBARA ST. B-3 L-14 PH 1-B PACITA COMPLEX 1', 'San Pedro', 'Laguna', '#4 STA. BARBARA ST. B-3 L-14 PH 1-B PACITA COMPLEX 1', 'San Pedro', 'Laguna', 'Single', '0000-00-00', '', '113', '58', 'AB', 'Male', 'Catholic', 'NULL', '9128335589', 'NULL', '555-5555-568', '123-3232136', '253-3493-36', '968-3435', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'ELVIRA LAZAGA', 'NULL', 'NULL', 43, 'BLK 16 LOT 30 ST. JOSEPH 4', ' 0917-824-8803', '', 'RICHARD CHAVEZ', 'NULL', 0, 'NULL', 'BLK 16 LOT 30 ST. JO', 'NULL', 'NULL', 'NULL', 'College Level', 'PUP', '2010', '2014', 'BSIT', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'manesadelduarte@ymail.com', '0000-00-00'),
('AMI1309-REG-0016', 'AMI1309-TRAINEE-0016', NULL, 'Rosanne', 'Gomez', '', 'Rosanne', '0000-00-00', 'QUEZON CITY, MANILA', 'Filipino', '#55 CATAQUIZ 1 SUBD.', 'San Pedro', 'Laguna', '#55 CATAQUIZ 1 SUBD.', 'San Pedro', 'Laguna', '#55 CATAQUIZ 1 SUBD.', 'San Pedro', 'Laguna', 'Single', '0000-00-00', '', '114', '59', 'AB', 'Male', 'Catholic', 'NULL', '9153879134', 'NULL', '555-5555-569', '123-3232137', '253-3493-37', '968-3436', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'MELBA BEGONIA', 'NULL', 'NULL', 44, 'BLK 1 LOT 56, PH 1 GARDEN VILLAS 3', ' 0918-671-9658', '', 'ZOSIMA EBORDA', 'NULL', 0, 'NULL', 'BLK 1 LOT 56, PH 1 G', 'NULL', 'NULL', 'NULL', 'College Level', 'PUP', '2010', '2014', 'BSIT', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'joanna_delacerna@yahoo.com', '0000-00-00'),
('AMI1309-REG-0017', 'AMI1309-TRAINEE-0017', NULL, 'Arvin', 'Jaylo', '', 'Arvin', '0000-00-00', 'BI?AN, LAGUNA', 'Filipino', '#616 PH 3, OLYMPIA PARK SUBD.', 'Santa Rosa City', 'Laguna', '#616 PH 3, OLYMPIA PARK SUBD.', 'Santa Rosa City', 'Laguna', '#616 PH 3, OLYMPIA PARK SUBD.', 'Santa Rosa City', 'Laguna', 'Single', '0000-00-00', '', '115', '60', 'AB', 'Male', 'Catholic', 'NULL', '9154534120', 'NULL', '555-5555-570', '123-3232138', '253-3493-38', '968-3437', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'WILMA B. CASILLO', 'NULL', 'NULL', 45, 'BLK 9A LOT 33,', ' 0928-653-4985', '', 'WILSON DICHOSO', 'NULL', 0, 'NULL', 'BLK 9A LOT 33,', 'NULL', 'NULL', 'NULL', 'College Level', 'PUP', '2010', '2014', 'BSIT', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'christianjohnrubio@yahoo.com', '0000-00-00'),
('AMI1309-REG-0018', 'AMI1309-TRAINEE-0018', NULL, 'Arlene', 'Taliente', '', 'Arlene', '0000-00-00', 'PASAY CITY, MANILA', 'Filipino', '#618 OLYMPIA SUBD. PH 3', 'Santa Rosa City', 'Laguna', '#618 OLYMPIA SUBD. PH 3', 'Santa Rosa City', 'Laguna', '#618 OLYMPIA SUBD. PH 3', 'Santa Rosa City', 'Laguna', 'Single', '0000-00-00', '', '116', '61', 'AB', 'Male', 'Catholic', 'NULL', '9155333726', 'NULL', '555-5555-571', '123-3232139', '253-3493-39', '968-3438', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'FERDINAND A. LOPEZ', 'NULL', 'NULL', 46, 'BLK 3 LOT 8 TERRY TOWN SUBD', ' 0917-970-0223', '', 'CONSUELO FAUSTINO', 'NULL', 0, 'NULL', 'BLK 3 LOT 8 TERRY TO', 'NULL', 'NULL', 'NULL', 'College Level', 'PUP', '2010', '2014', 'BSIT', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'tomoyo_tachibana@yahoo.com', '0000-00-00'),
('AMI1309-REG-0019', 'AMI1309-TRAINEE-0019', NULL, 'Mary Ailyn', 'Punongbayan', '', 'Mary Ailyn', '0000-00-00', 'MANILA', 'Filipino', '1042 LUCERO ST.', 'Bi?an City', 'Laguna', '1042 LUCERO ST.', 'Bi?an City', 'Laguna', '1042 LUCERO ST.', 'Bi?an City', 'Laguna', 'Single', '0000-00-00', '', '117', '62', 'AB', 'Male', 'Catholic', 'NULL', '9161369968', 'NULL', '555-5555-572', '123-3232140', '253-3493-40', '968-3439', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'RICHARD CHAVEZ', 'NULL', 'NULL', 47, 'BLK 3 LOT 27, JAVA VILLAGE', ' 0908-461-6342', '', 'CARMELO DELOS ANGELES', 'NULL', 0, 'NULL', 'BLK 3 LOT 27, JAVA V', 'NULL', 'NULL', 'NULL', 'College Level', 'PUP', '2010', '2014', 'BSIT', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'sai_ochua@yahoo.com', '0000-00-00'),
('AMI1309-REG-0020', 'AMI1309-TRAINEE-0020', NULL, 'Francis Lorrenz', 'Regalado', '', 'Francis Lorrenz', '0000-00-00', 'SAMBOANGA DEL SUR', 'Filipino', '10483 SAN PEDRO ST.', 'Santa Rosa City', 'Laguna', '10483 SAN PEDRO ST.', 'Santa Rosa City', 'Laguna', '10483 SAN PEDRO ST.', 'Santa Rosa City', 'Laguna', 'Single', '0000-00-00', '', '118', '63', 'AB', 'Male', 'Catholic', 'NULL', '9162302035', 'NULL', '555-5555-573', '123-3232141', '253-3493-41', '968-3440', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'ZOSIMA EBORDA', 'NULL', 'NULL', 48, 'BLK 15 LOT 14, PH 4E, GOLDEN CITY SUBD.', ' 0943-395-3622', '', 'GENIEL MONZON', 'NULL', 0, 'NULL', 'BLK 15 LOT 14, PH 4E', 'NULL', 'NULL', 'NULL', 'College Level', 'PUP', '2010', '2014', 'BSIT', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'jhetz_zapata@yahoo.com', '0000-00-00'),
('AMI1309-REG-0021', 'AMI1309-TRAINEE-0021', NULL, 'Joy', 'Caro', '', 'Joy', '0000-00-00', 'BLUMENTRITT, MANILA', 'Filipino', '104-A', 'Carmona', 'Laguna', '104-A', 'Carmona', 'Laguna', '104-A', 'Carmona', 'Laguna', 'Single', '0000-00-00', '', '119', '64', 'AB', 'Male', 'Catholic', 'NULL', '9162348111', 'NULL', '555-5555-574', '123-3232142', '253-3493-42', '968-3441', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'LUIS ABORDO', 'NULL', 'NULL', 49, 'BLK 10 LOT 2, PH 4', ' 0920-238-3813', '', 'NECITA RAMIREZ', 'NULL', 0, 'NULL', 'BLK 10 LOT 2, PH 4', 'NULL', 'NULL', 'NULL', 'College Level', 'PUP', '2010', '2014', 'BSIT', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'klarizzapampang@yahoo.com', '0000-00-00'),
('AMI1309-REG-0022', 'AMI1309-TRAINEE-0022', NULL, 'Janine', 'Satsatin', '', 'Janine', '0000-00-00', 'QUEZON CITY', 'Filipino', '106 LIMACO ST.', 'Santa Rosa City', 'Laguna', '106 LIMACO ST.', 'Santa Rosa City', 'Laguna', '106 LIMACO ST.', 'Santa Rosa City', 'Laguna', 'Single', '0000-00-00', '', '120', '65', 'AB', 'Male', 'Catholic', 'NULL', '9164324066', 'NULL', '555-5555-575', '123-3232143', '253-3493-43', '968-3442', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'WILSON DICHOSO', 'NULL', 'NULL', 50, 'BLK 21 LOT 57 SOUTHFAIRWAY HOMES', ' 0918-361-0381', '', 'ROMMEL P. RETITA', 'NULL', 0, 'NULL', 'BLK 21 LOT 57 SOUTHF', 'NULL', 'NULL', 'NULL', 'College Level', 'PUP', '2010', '2014', 'BSIT', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'leonard.ladrera@yahoo.com', '0000-00-00'),
('AMI1309-REG-0023', 'AMI1309-TRAINEE-0023', NULL, 'Geneva Joy', 'Cruz', '', 'Geneva Joy', '0000-00-00', 'TAGUIG CITY, MANILA', 'Filipino', '1072 LUCERO ST.', 'Bi?an City', 'Laguna', '1072 LUCERO ST.', 'Bi?an City', 'Laguna', '1072 LUCERO ST.', 'Bi?an City', 'Laguna', 'Single', '0000-00-00', '', '121', '66', 'AB', 'Male', 'Catholic', 'NULL', '9165243120', 'NULL', '555-5555-576', '123-3232144', '253-3493-44', '968-3443', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'FELIX B. CABAG JR.', 'NULL', 'NULL', 51, 'BLK 18 LOT 12, SOUTH FAIRWAY HOMES', ' 0926-633-3419', '', 'WILLY S. TORRES', 'NULL', 0, 'NULL', 'BLK 18 LOT 12, SOUTH', 'NULL', 'NULL', 'NULL', 'College Level', 'PUP', '2010', '2014', 'BSIT', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'christianjuarz@yahoo.com', '0000-00-00'),
('AMI1309-REG-0024', 'AMI1309-TRAINEE-0024', NULL, 'Christian', 'Chavez', '', 'Christian', '0000-00-00', 'SANTA ROSA, LAGUNA', 'Filipino', '121 P. PATERNO ST.', 'Santa Rosa City', 'Laguna', '121 P. PATERNO ST.', 'Santa Rosa City', 'Laguna', '121 P. PATERNO ST.', 'Santa Rosa City', 'Laguna', 'Single', '0000-00-00', '', '122', '67', 'AB', 'Male', 'Catholic', 'NULL', '9165411039', 'NULL', '555-5555-577', '123-3232145', '253-3493-45', '968-3444', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'PRECY CALVEZ', 'NULL', 'NULL', 52, 'BLK 11 LOT 39, PH 4E GOLDEN CITY', ' 0915-469-4949', '', 'LINA P. SY', 'NULL', 0, 'NULL', 'BLK 11 LOT 39, PH 4E', 'NULL', 'NULL', 'NULL', 'College Level', 'PUP', '2010', '2014', 'BSIT', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'kheizeel5@yahoo.com', '0000-00-00'),
('AMI1309-REG-0025', 'AMI1309-TRAINEE-0025', NULL, 'Elvin Marie', 'Lazaga', '', 'Elvin Marie', '0000-00-00', 'CAINTA, RIZAL', 'Filipino', '1329 P. GOMEZ ST.', 'Bi?an City', 'Laguna', '1329 P. GOMEZ ST.', 'Bi?an City', 'Laguna', '1329 P. GOMEZ ST.', 'Bi?an City', 'Laguna', 'Single', '0000-00-00', '', '123', '68', 'AB', 'FEMALE', 'Catholic', 'NULL', '9165902491', 'NULL', '555-5555-578', '123-3232146', '253-3493-46', '968-3445', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'ROWENA CORCORO', 'NULL', 'NULL', 53, 'BLK 3 LOT 11, PH 1 GARDEN VILLAS', ' 0908-946-7150', '', 'SHIELA RAYMUNDO', 'NULL', 0, 'NULL', 'BLK 3 LOT 11, PH 1 G', 'NULL', 'NULL', 'NULL', 'College Level', 'PUP', '2010', '2014', 'BSIT', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'danger_brief@yahoo.com', '0000-00-00'),
('AMI1309-REG-0026', 'AMI1309-TRAINEE-0026', NULL, 'Angelica', 'Galvez', '', 'Angelica', '0000-00-00', 'BI?AN, LAGUNA', 'Filipino', '1349 RIZAL BLVD.,', 'Santa Rosa City', 'Laguna', '1349 RIZAL BLVD.,', 'Santa Rosa City', 'Laguna', '1349 RIZAL BLVD.,', 'Santa Rosa City', 'Laguna', 'Single', '0000-00-00', '', '124', '69', 'AB', 'FEMALE', 'Catholic', 'NULL', '9169066381', 'NULL', '555-5555-579', '123-3232147', '253-3493-47', '968-3446', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'CONSUELO FAUSTINO', 'NULL', 'NULL', 54, 'BLK 2 LOT 6, VILLA LASERNA', ' 0906-270-3613', '', 'LEAH G. MAKALINTAL', 'NULL', 0, 'NULL', 'BLK 2 LOT 6, VILLA L', 'NULL', 'NULL', 'NULL', 'College Level', 'PUP', '2010', '2014', 'BSIT', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'shem1six@yahoo.com', '0000-00-00'),
('AMI1309-REG-0027', 'AMI1309-TRAINEE-0027', NULL, 'Fate Jane', 'Cabag', '', 'Fate Jane', '0000-00-00', 'SAMPALOC, MANILA', 'Filipino', '135F. GOMEZ ST.', 'Santa Rosa City', 'Laguna', '135F. GOMEZ ST.', 'Santa Rosa City', 'Laguna', '135F. GOMEZ ST.', 'Santa Rosa City', 'Laguna', 'Single', '0000-00-00', '', '125', '70', 'AB', 'FEMALE', 'Catholic', 'NULL', '9169116293', 'NULL', '555-5555-580', '123-3232148', '253-3493-48', '968-3447', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'GEMMA REBONG', 'NULL', 'NULL', 55, 'BLK. 5 LOT 4 PHASE 2 GARDEN VILLAS', ' 0929-532-9675', '', 'EVANGELINE MOLINA', 'NULL', 0, 'NULL', 'BLK. 5 LOT 4 PHASE 2', 'NULL', 'NULL', 'NULL', 'College Level', 'PUP', '2010', '2014', 'BSIT', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'bananadaplengss@yahoo.com', '0000-00-00'),
('AMI1309-REG-0028', 'AMI1309-TRAINEE-0028', NULL, 'Glou Arghin Joy', 'Gemal', '', 'Glou Arghin Joy', '0000-00-00', 'SANTA ROSA, LAGUNA', 'Filipino', '1536 DALANDAN ST.', 'Santa Rosa City', 'Laguna', '1536 DALANDAN ST.', 'Santa Rosa City', 'Laguna', '1536 DALANDAN ST.', 'Santa Rosa City', 'Laguna', 'Single', '0000-00-00', '', '126', '71', 'AB', 'FEMALE', 'Catholic', 'NULL', '9172515898', 'NULL', '555-5555-581', '123-3232149', '253-3493-49', '968-3448', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'CARMELO DELOS ANGELES', 'NULL', 'NULL', 56, 'BLK 26 LOT 25 GOLDEN CITY SUBD.', ' 0928-377-0443', '', 'WENNIE N. MANIPIS', 'NULL', 0, 'NULL', 'BLK 26 LOT 25 GOLDEN', 'NULL', 'NULL', 'NULL', 'College Level', 'PUP', '2010', '2014', 'BSIT', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'patricknasanto09@gmail.com', '0000-00-00'),
('AMI1309-REG-0029', 'AMI1309-TRAINEE-0029', NULL, 'Marvin Bryan', 'Cinco', '', 'Marvin Bryan', '0000-00-00', 'SAN PEDRO, LAGUNA', 'Filipino', '155 PUROK 3,', 'Bi?an City', 'Laguna', '155 PUROK 3,', 'Bi?an City', 'Laguna', '155 PUROK 3,', 'Bi?an City', 'Laguna', 'Single', '0000-00-00', '', '127', '72', 'AB', 'FEMALE', 'Catholic', 'NULL', '9184503176', 'NULL', '555-5555-582', '123-3232150', '253-3493-50', '968-3449', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'GENIEL MONZON', 'NULL', 'NULL', 57, 'BLK 9 LOT 14, BSRV 1', ' 0917-498-4454', '', 'EDUADRO F. FAJARDO', 'NULL', 0, 'NULL', 'BLK 9 LOT 14, BSRV 1', 'NULL', 'NULL', 'NULL', 'College Level', 'PUP', '2010', '2014', 'BSIT', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'miguelamariepasamba@yahoo.com', '0000-00-00'),
('AMI1309-REG-0030', 'AMI1309-TRAINEE-0030', NULL, 'Chris Aries', 'Gonzales', '', 'Chris Aries', '0000-00-00', 'SAN PEDRO, LAGUNA', 'Filipino', '222 MANABAT ST.', 'Santa Rosa City', 'Laguna', '222 MANABAT ST.', 'Santa Rosa City', 'Laguna', '222 MANABAT ST.', 'Santa Rosa City', 'Laguna', 'Single', '0000-00-00', '', '128', '73', 'AB', 'FEMALE', 'Catholic', 'NULL', '9184937756', 'NULL', '555-5555-583', '123-3232151', '253-3493-51', '968-3450', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'WENIFREDO SAMARITA', 'NULL', 'NULL', 58, 'BLK 18 LOT 7 PHASE 4E GOLDEN CITY', ' 0917-724-6887', '', 'DELIA Y. DUARTE', 'NULL', 0, 'NULL', 'BLK 18 LOT 7 PHASE 4', 'NULL', 'NULL', 'NULL', 'College Level', 'PUP', '2010', '2014', 'BSIT', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'lorieloupadilla@yahoo.com', '0000-00-00'),
('AMI1309-REG-0031', 'AMI1309-TRAINEE-0031', NULL, 'Marvin', 'Buraga', '', 'Marvin', '0000-00-00', 'CARCAR, CEBU', 'Filipino', '227 DICTADO APARTMENT ZAVALLA ST.', 'Bi?an City', 'Laguna', '227 DICTADO APARTMENT ZAVALLA ST.', 'Bi?an City', 'Laguna', '227 DICTADO APARTMENT ZAVALLA ST.', 'Bi?an City', 'Laguna', 'Single', '0000-00-00', '', '129', '74', 'AB', 'FEMALE', 'Catholic', 'NULL', '9184937756', 'NULL', '555-5555-584', '123-3232152', '253-3493-52', '968-3451', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'YOLANDA GOMEZ', 'NULL', 'NULL', 59, 'BLK 16 LOT 12, BUKLOD BAHAYAN', ' 0912-780-2781', '', 'FELICITAS P. DELOS SANTOS', 'NULL', 0, 'NULL', 'BLK 16 LOT 12, BUKLO', 'NULL', 'NULL', 'NULL', 'College Level', 'PUP', '2010', '2014', 'BSIT', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'shannen_shyre@ymail.com', '0000-00-00'),
('AMI1309-REG-0032', 'AMI1309-TRAINEE-0032', NULL, 'Wendy', 'Aguilar', '', 'Wendy', '0000-00-00', 'NAGCARLAN, LAGUNA', 'Filipino', '233 NIERO ST.', 'Santa Rosa City', 'Laguna', '233 NIERO ST.', 'Santa Rosa City', 'Laguna', '233 NIERO ST.', 'Santa Rosa City', 'Laguna', 'Single', '0000-00-00', '', '130', '75', 'AB', 'FEMALE', 'Catholic', 'NULL', '9185870889', 'NULL', '555-5555-585', '123-3232153', '253-3493-53', '968-3452', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'MARILYN TENEDERO', 'NULL', 'NULL', 60, 'BLK 7 LOT 9 VILLA PALAO SUBD', ' 0916-572-0943', '', 'DANTE C. DELA CERNA', 'NULL', 0, 'NULL', 'BLK 7 LOT 9 VILLA PA', 'NULL', 'NULL', 'NULL', 'College Level', 'PUP', '2010', '2014', 'BSIT', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'rigorcarlos@yahoo.com', '0000-00-00'),
('AMI1309-REG-0033', 'AMI1309-TRAINEE-0033', NULL, 'Jerryco', 'Apolinar', '', 'Jerryco', '0000-00-00', 'CALAMBA, LAGUNA', 'Filipino', '264 OLIVER ST.', 'Bi?an City', 'Laguna', '264 OLIVER ST.', 'Bi?an City', 'Laguna', '264 OLIVER ST.', 'Bi?an City', 'Laguna', 'Single', '0000-00-00', '', '131', '76', 'AB', 'FEMALE', 'Catholic', 'NULL', '9187557446', 'NULL', '555-5555-586', '123-3232154', '253-3493-54', '968-3453', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NECITA RAMIREZ', 'NULL', 'NULL', 61, 'ESTRADA ST. BLK 11 LOT 7 PHASE 2, OLIVAREZ HOMES SOUTH', ' 09351136724/0916416', '', 'AMELITA E. CINCO', 'NULL', 0, 'NULL', 'ESTRADA ST. BLK 11 L', 'NULL', 'NULL', 'NULL', 'College Level', 'PUP', '2010', '2014', 'BSIT', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'mac01218@yahoo.com', '0000-00-00'),
('AMI1309-REG-0034', 'AMI1309-TRAINEE-0034', NULL, 'Paul John', 'Marucot', '', 'Paul John', '0000-00-00', 'MANILA', 'Filipino', '2740 DIA LEYCO', 'San Pedro', 'Laguna', '2740 DIA LEYCO', 'San Pedro', 'Laguna', '2740 DIA LEYCO', 'San Pedro', 'Laguna', 'Single', '0000-00-00', '', '132', '77', 'AB', 'FEMALE', 'Catholic', 'NULL', '9192047384', 'NULL', '555-5555-587', '123-3232155', '253-3493-55', '968-3454', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'CYNTHIA L. GOLONDRINA', 'NULL', 'NULL', 62, 'BLK 1 LOT 6 PHASE 3 MACARIA VILLAGE', ' 0919-364-4495', '', 'MA. HAZEL S. ROSALES', 'NULL', 0, 'NULL', 'BLK 1 LOT 6 PHASE 3 ', 'NULL', 'NULL', 'NULL', 'College Level', 'PUP', '2010', '2014', 'BSIT', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'kalbox11@yahoo.com', '0000-00-00'),
('AMI1309-REG-0035', 'AMI1309-TRAINEE-0035', NULL, 'Gerald', 'Sarol', '', 'Gerald', '0000-00-00', 'SAN PEDRO, LAGUNA', 'Filipino', '30 A. MABINI ST.', 'Santa Rosa City', 'Laguna', '30 A. MABINI ST.', 'Santa Rosa City', 'Laguna', '30 A. MABINI ST.', 'Santa Rosa City', 'Laguna', 'Single', '0000-00-00', '', '133', '78', 'AB', 'FEMALE', 'Catholic', 'NULL', '9192688337', 'NULL', '555-5555-588', '123-3232156', '253-3493-56', '968-3455', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'ROMMEL P. RETITA', 'NULL', 'NULL', 63, 'BLK 2 LOT 2, DO?A MARCELA SUBD.', ' 0930-306-3395', '', 'MA. THERESE B. RUBIO', 'NULL', 0, 'NULL', 'BLK 2 LOT 2, DO?A MA', 'NULL', 'NULL', 'NULL', 'College Level', 'PUP', '2010', '2014', 'BSIT', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'nadvincula@ymail.com', '0000-00-00'),
('AMI1309-REG-0036', 'AMI1309-TRAINEE-0036', NULL, 'April Lourraine', 'Dollente', '', 'April Lourraine', '0000-00-00', 'BI?AN, LAGUNA', 'Filipino', '340 MENDOZA ST.', 'Bi?an City', 'Laguna', '340 MENDOZA ST.', 'Bi?an City', 'Laguna', '340 MENDOZA ST.', 'Bi?an City', 'Laguna', 'Single', '0000-00-00', '', '134', '79', 'AB', 'FEMALE', 'Catholic', 'NULL', '9192951918', 'NULL', '555-5555-589', '123-3232157', '253-3493-57', '968-3456', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'ANDRELITA P. NICASIO', 'NULL', 'NULL', 64, 'BLK 1 LOT 29 PH 1, SAN LORENZO SOUTH', ' 090-872-8923', '', 'ROWENA J. BIAG', 'NULL', 0, 'NULL', 'BLK 1 LOT 29 PH 1, S', 'NULL', 'NULL', 'NULL', 'College Level', 'PUP', '2010', '2014', 'BSIT', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'pj_purpz01@yahoo.com', '0000-00-00'),
('AMI1309-REG-0037', 'AMI1309-TRAINEE-0037', NULL, 'Purple Jane', 'Adlaon', '', 'Purple Jane', '0000-00-00', 'CARMONA, CAVITE', 'Filipino', '3557 STRA CATALINA STREET', 'San Pedro', 'Laguna', '3557 STRA CATALINA STREET', 'San Pedro', 'Laguna', '3557 STRA CATALINA STREET', 'San Pedro', 'Laguna', 'Single', '0000-00-00', '', '135', '80', 'AB', 'FEMALE', 'Catholic', 'NULL', '9193294984', 'NULL', '555-5555-590', '123-3232158', '253-3493-58', '968-3457', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'RANDY MONTEVERDE', 'NULL', 'NULL', 65, 'BLK 66 LOT 33, PH 1-C SAN LOREZO SOUTH', ' 0907-960-5880', '', 'LILIBETH S. OCHUA', 'NULL', 0, 'NULL', 'BLK 66 LOT 33, PH 1-', 'NULL', 'NULL', 'NULL', 'College Level', 'PUP', '2010', '2014', 'BSIT', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'onealoneal15@yahoo.com', '0000-00-00'),
('AMI1309-REG-0038', 'AMI1309-TRAINEE-0038', NULL, 'Vern', 'Montorio', '', 'Vern', '0000-00-00', 'MANILA', 'Filipino', '3624 STA. CATALINA ST.', 'Bi?an City', 'Laguna', '3624 STA. CATALINA ST.', 'Bi?an City', 'Laguna', '3624 STA. CATALINA ST.', 'Bi?an City', 'Laguna', 'Single', '0000-00-00', '', '136', '81', 'AB', 'FEMALE', 'Catholic', 'NULL', '9194265702', 'NULL', '555-5555-591', '123-3232159', '253-3493-59', '968-3458', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'WILLY S. TORRES', 'NULL', 'NULL', 66, 'BLK 2 LOT 4 MERCEDES HOMES IV', ' 0999-533-9038', '', 'VICTOR CASTRO', 'NULL', 0, 'NULL', 'BLK 2 LOT 4 MERCEDES', 'NULL', 'NULL', 'NULL', 'College Level', 'PUP', '2010', '2014', 'BSIT', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'junimeshel@yahoo.com', '0000-00-00'),
('AMI1309-REG-0039', 'AMI1309-TRAINEE-0039', NULL, 'Bryan', 'Montorio', '', 'Bryan', '0000-00-00', 'QUEZON, QUEZON', 'Filipino', '376 TIONCO SUBD.', 'Bi?an City', 'Laguna', '376 TIONCO SUBD.', 'Bi?an City', 'Laguna', '376 TIONCO SUBD.', 'Bi?an City', 'Laguna', 'Single', '0000-00-00', '', '137', '82', 'AB', 'FEMALE', 'Catholic', 'NULL', '9195201199', 'NULL', '555-5555-592', '123-3232160', '253-3493-60', '968-3459', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'LINA P. SY', 'NULL', 'NULL', 67, 'BLK 13 LOT 3 WEST DRIVE VILL.', ' 0910-828-3211', '', 'CORAZON ZAPATA', 'NULL', 0, 'NULL', 'BLK 13 LOT 3 WEST DR', 'NULL', 'NULL', 'NULL', 'College Level', 'PUP', '2010', '2014', 'BSIT', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'kenneth_ishizaki@yahoo.com', '0000-00-00'),
('AMI1309-REG-0040', 'AMI1309-TRAINEE-0040', NULL, 'Cynthia', 'Mamaril', '', 'Cynthia', '0000-00-00', 'CARMONA, CAVITE', 'Filipino', '3558 STRA CATALINA STREET', 'San Pedro', 'Laguna', '377 TIONCO SUBD.', 'Bi?an City', 'Laguna', '3557 STRA CATALINA STREET', 'Bi?an City', 'Laguna', 'Single', '0000-00-00', '', '137', '82', 'AB', 'FEMALE', 'Catholic', 'NULL', '9195201200', 'NULL', '555-5555-593', '123-3232161', '253-3493-61', '968-3460', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'LINA P. SY', 'NULL', 'NULL', 67, 'BLK 168 LOT 5 PHASE 2B GOLDEN CITY', ' 0907-666-7839', '', 'ANTONIA C. PAMPANG', 'NULL', 0, 'NULL', 'BLK 168 LOT 5 PHASE ', 'NULL', 'NULL', 'NULL', 'College Level', 'PUP', '2010', '2014', 'BSIT', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'joshuacatamora022yahoo.com', '0000-00-00'),
('AMI1309-REG-0041', 'AMI1309-TRAINEE-0041', NULL, 'Judy Ann', 'Laplana', '', 'Judy Ann', '0000-00-00', 'MANILA', 'Filipino', '3625 STA. CATALINA ST.', 'Bi?an City', 'Laguna', '378 TIONCO SUBD.', 'Bi?an City', 'Laguna', '3624 STA. CATALINA ST.', 'Bi?an City', 'Laguna', 'Single', '0000-00-00', '', '137', '82', 'AB', 'FEMALE', 'Catholic', 'NULL', '9195201201', 'NULL', '555-5555-594', '123-3232162', '253-3493-62', '968-3461', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'LINA P. SY', 'NULL', 'NULL', 67, 'BLK 4 LOT 12 PHASE 2-C PACITA 2', ' 0923-306-3498', '', 'GINA LADRERA', 'NULL', 0, 'NULL', 'BLK 4 LOT 12 PHASE 2', 'NULL', 'NULL', 'NULL', 'College Level', 'PUP', '2010', '2014', 'BSIT', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', 'NULL', 'sora_loki15@yahoo.com', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `hris_beneficiary`
--

CREATE TABLE IF NOT EXISTS `hris_beneficiary` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `trainee_id` varchar(20) NOT NULL,
  `beneficiary_name` varchar(255) NOT NULL,
  `beneficiary_birthdate` date NOT NULL,
  `beneficiary_relationship` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `hris_beneficiary`
--

INSERT INTO `hris_beneficiary` (`id`, `trainee_id`, `beneficiary_name`, `beneficiary_birthdate`, `beneficiary_relationship`) VALUES
(5, 'AMI1304-TRAINEE-0001', 'Dannah Abat', '1992-07-29', 'Classmate');

-- --------------------------------------------------------

--
-- Table structure for table `hris_character_reference`
--

CREATE TABLE IF NOT EXISTS `hris_character_reference` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `trainee_id` varchar(20) NOT NULL,
  `character_name` varchar(255) NOT NULL,
  `character_company` varchar(255) NOT NULL,
  `character_contact_no` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `hris_character_reference`
--

INSERT INTO `hris_character_reference` (`id`, `trainee_id`, `character_name`, `character_company`, `character_contact_no`) VALUES
(1, 'AMI1304-TRAINEE-0001', 'Rawr', 'Dinonsaur', '9999999'),
(2, 'AMI1304-TRAINEE-0001', 'Rawr', 'd', '111111'),
(5, 'AMI1304-TRAINEE-0001', 'Rarararara', 'arararara', '0912309131234');

-- --------------------------------------------------------

--
-- Table structure for table `hris_children`
--

CREATE TABLE IF NOT EXISTS `hris_children` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `trainee_id` varchar(20) NOT NULL,
  `children_name` varchar(255) NOT NULL,
  `children_birthdate` date NOT NULL,
  `children_school_or_work` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `hris_children`
--

INSERT INTO `hris_children` (`id`, `trainee_id`, `children_name`, `children_birthdate`, `children_school_or_work`) VALUES
(1, 'AMI1304-TRAINEE-0001', 'Anna marie Lozano', '1997-10-14', 'PCNHS'),
(2, 'AMI1304-TRAINEE-0001', 'Elline Felise Lozano', '1995-12-15', 'PUP-SRC'),
(18, 'AMI1304-TRAINEE-0001', 'Sample', '2013-08-27', 'Sample School'),
(19, 'AMI1304-TRAINEE-0001', 'Sample', '2013-08-27', 'Sample University'),
(20, 'AMI1304-TRAINEE-0001', 'Sample 3', '2013-08-27', 'Sample 3'),
(21, 'AMI1304-TRAINEE-0001', 'Sample2', '2013-08-30', 'awwwww'),
(22, 'AMI1304-TRAINEE-0001', '', '0000-00-00', ''),
(23, 'AMI1304-TRAINEE-0001', '', '0000-00-00', ''),
(24, '0', '0', '0000-00-00', '0');

-- --------------------------------------------------------

--
-- Table structure for table `hris_dependent`
--

CREATE TABLE IF NOT EXISTS `hris_dependent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `trainee_id` varchar(20) NOT NULL,
  `dependent_name` varchar(255) NOT NULL,
  `dependent_birthdate` date NOT NULL,
  `dependent_relationship` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `hris_dependent`
--

INSERT INTO `hris_dependent` (`id`, `trainee_id`, `dependent_name`, `dependent_birthdate`, `dependent_relationship`) VALUES
(3, 'AMI1304-TRAINEE-0001', 'Sample', '2013-08-26', 'Sample'),
(7, 'AMI1304-TRAINEE-0001', 'Sample 2', '2013-08-27', 'Sample 2');

-- --------------------------------------------------------

--
-- Table structure for table `hris_employment_history`
--

CREATE TABLE IF NOT EXISTS `hris_employment_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `trainee_id` varchar(20) NOT NULL,
  `employment_company_name` varchar(255) NOT NULL,
  `employment_location` varchar(255) NOT NULL,
  `employment_position` varchar(255) NOT NULL,
  `employment_from` year(4) NOT NULL,
  `employment_to` year(4) NOT NULL,
  `employment_reason_leave` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `hris_employment_history`
--

INSERT INTO `hris_employment_history` (`id`, `trainee_id`, `employment_company_name`, `employment_location`, `employment_position`, `employment_from`, `employment_to`, `employment_reason_leave`) VALUES
(6, 'AMI1304-TRAINEE-0001', 'Sample Company', 'Sample Location', 'Sample Position', 2000, 2008, 'No Reason'),
(7, 'AMI1309-TRAINEE-0002', 'SPES', 'PHILIPPINES', 'TAMBAY', 2010, 2010, '');

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE IF NOT EXISTS `inbox` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `message` varchar(10000) NOT NULL,
  `time_sent` datetime NOT NULL,
  `is_read` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=132 ;

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`message_id`, `sender_id`, `receiver_id`, `message`, `time_sent`, `is_read`) VALUES
(1, 0, 0, '0', '2013-08-19 00:00:00', 0),
(130, 4, 2, 'hey', '2013-09-02 00:38:39', 0),
(131, 2, 5, 'hey tony', '2013-09-02 00:41:21', 0);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE IF NOT EXISTS `modules` (
  `module_id` int(11) NOT NULL AUTO_INCREMENT,
  `module_name` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  PRIMARY KEY (`module_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`module_id`, `module_name`, `company_name`, `file_name`) VALUES
(2, 'TOSHIBA Demo Presentation', 'TOSHIBA', 'TOSHIBA-DEMO.pptx'),
(4, 'SHINETSU Demo Presentation', 'SHINETSU', 'SHINETSU-DEMO.pptx'),
(11, 'AMI Demo', 'AMI', 'AMI-DEMO.pptx');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `question_id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(1000) DEFAULT NULL,
  `answers` varchar(1000) DEFAULT NULL,
  `key_answer` varchar(1000) DEFAULT NULL,
  `question_type` varchar(255) DEFAULT NULL,
  `exam_id` int(11) DEFAULT NULL,
  `no_of_choices` int(2) DEFAULT NULL,
  PRIMARY KEY (`question_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_id`, `question`, `answers`, `key_answer`, `question_type`, `exam_id`, `no_of_choices`) VALUES
(13, 'Sample Multiple Choice', 'A~/&^%-B~/&^%-C~/&^%-', '1', '1', 4, 3),
(14, 'Sample True or False', 'true~/&^%-false', 'true', '2', 4, 2),
(15, 'Sample Identification', '', 'Answer', '3', 4, 0),
(16, 'Select Multiple', 'a~/&^%-b~/&^%-c~/&^%-', '2~/&^%-3~/&^%-', '4', 4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `register_id` varchar(17) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `height` double NOT NULL,
  `civil_status` varchar(15) NOT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(35) DEFAULT NULL,
  `province` varchar(35) DEFAULT NULL,
  `country` varchar(2) DEFAULT NULL,
  `phone` varchar(32) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `ip_address` varbinary(16) DEFAULT NULL,
  `last_logged_ip` varchar(15) DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `security_question` int(1) DEFAULT NULL,
  `security_answer` varchar(255) DEFAULT NULL,
  `date_change` date NOT NULL,
  PRIMARY KEY (`register_id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `username` (`username`),
  KEY `b_country` (`country`),
  KEY `status` (`active`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=80 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `register_id`, `first_name`, `last_name`, `middle_name`, `birth_date`, `height`, `civil_status`, `gender`, `address`, `city`, `province`, `country`, `phone`, `email`, `image_url`, `username`, `password`, `date_created`, `ip_address`, `last_logged_ip`, `active`, `security_question`, `security_answer`, `date_change`) VALUES
(7, 'AMI1304-REG-0007', ' JANICE', 'ALPUERTO', ' MARQUESES', '1995-03-12', 0, '', 'Female', '', 'Santa Rosa', 'Laguna', 'PH', '', 'dannah_taba@yahoo.com', '', 'ALPUERTO', '81dc9bdb52d04dc20036dbd8313ed055', '2013-04-19 12:00:00', '', '', 1, 0, '', '0000-00-00'),
(8, 'AMI1304-REG-0008', ' JOCILYN', 'ANDAYA', ' SALANDANAN', '1995-05-23', 0, '', 'Female', '', 'Santa Rosa', 'Laguna', 'PH', '', 'dannah_taba@yahoo.com', '', 'ANDAYA', '81dc9bdb52d04dc20036dbd8313ed055', '2013-04-20 12:00:00', '', '', 0, 0, '', '0000-00-00'),
(9, 'AMI1304-REG-0009', ' MARIA ANGELICA', 'ASAYTONO', ' ESPELETA', '1995-06-22', 0, '', 'Female', '', 'Santa Rosa', 'Laguna', 'PH', '', 'dannah_taba@yahoo.com', '', 'ASAYTONO', '81dc9bdb52d04dc20036dbd8313ed055', '2013-04-21 12:00:00', '', '', 0, 0, '', '0000-00-00'),
(10, 'AMI1304-REG-0010', ' FLORENCE VIDA', 'BAJUM', ' ASIS', '1986-09-03', 0, '', 'Female', '', 'Santa Rosa', 'Laguna', 'PH', '', 'dannah_taba@yahoo.com', '', 'BAJUM', '81dc9bdb52d04dc20036dbd8313ed055', '2013-04-22 12:00:00', '', '', 0, 0, '', '0000-00-00'),
(11, 'AMI1304-REG-0011', ' LOUMAR', 'BALUARTE', ' ALITAGTAG', '1980-02-06', 0, '', 'Male', '', 'Santa Rosa', 'Laguna', 'PH', '', 'dannah_taba@yahoo.com', '', 'BALUARTE', '81dc9bdb52d04dc20036dbd8313ed055', '2013-04-23 12:00:00', '', '', 0, 0, '', '0000-00-00'),
(12, 'AMI1304-REG-0012', ' FRANCHESCA', 'BARRINUEVO', ' UBAS', '1943-10-02', 0, '', 'Female', '', 'Santa Rosa', 'Laguna', 'PH', '', 'dannah_taba@yahoo.com', '', 'BARRINUEVO', '81dc9bdb52d04dc20036dbd8313ed055', '2013-04-24 12:00:00', '', '', 0, 0, '', '0000-00-00'),
(13, 'AMI1304-REG-0013', ' MARIE DAISY', 'BAUTISTA', ' REJUSO', '1992-10-21', 0, '', 'Female', '', 'Santa Rosa', 'Laguna', 'PH', '', 'dannah_taba@yahoo.com', '', 'BAUTISTA', '81dc9bdb52d04dc20036dbd8313ed055', '2013-04-25 12:00:00', '', '', 0, 0, '', '0000-00-00'),
(14, 'AMI1304-REG-0014', ' HANNAH MAE', 'BEJASA', ' VIRAY', '1940-03-05', 0, '', 'Female', '', 'Santa Rosa', 'Laguna', 'PH', '', 'dannah_taba@yahoo.com', '', 'BEJASA', '81dc9bdb52d04dc20036dbd8313ed055', '2013-04-26 12:00:00', '', '', 0, 0, '', '0000-00-00'),
(15, 'AMI1304-REG-0015', ' CRISDEL BRIAN', 'BERNARDO', ' GARCIA', '2005-06-07', 0, '', 'Male', '', 'Santa Rosa', 'Laguna', 'PH', '', 'dannah_taba@yahoo.com', '', 'BERNARDO', '81dc9bdb52d04dc20036dbd8313ed055', '2013-04-27 12:00:00', '', '', 0, 0, '', '0000-00-00'),
(16, 'AMI1304-REG-0016', ' MELANIE', 'BERO', ' VERZO', '1965-08-04', 0, '', 'Female', '', 'Santa Rosa', 'Laguna', 'PH', '', 'dannah_taba@yahoo.com', '', 'BERO', '81dc9bdb52d04dc20036dbd8313ed055', '2013-04-28 12:00:00', '', '', 0, 0, '', '0000-00-00'),
(17, 'AMI1304-REG-0017', ' MA. BIANCA ISABEL', 'BESO', ' BASCON', '2008-12-05', 0, '', 'Female', '', 'Santa Rosa', 'Laguna', 'PH', '', 'dannah_taba@yahoo.com', '', 'BESO', '81dc9bdb52d04dc20036dbd8313ed055', '2013-04-29 12:00:00', '', '', 0, 0, '', '0000-00-00'),
(18, 'AMI1304-REG-0018', ' UNICE JOY', 'BLANCO', ' CUETO', '1978-12-05', 0, '', 'Female', '', 'Santa Rosa', 'Laguna', 'PH', '', 'dannah_taba@yahoo.com', '', 'BLANCO', '81dc9bdb52d04dc20036dbd8313ed055', '2013-04-30 12:00:00', '', '', 0, 0, '', '0000-00-00'),
(57, 'AMI1304-REG-0020', ' MELVIN', 'CABACABA', ' MARFIL', '1970-06-04', 0, '', 'Male', '', 'Santa Rosa', 'Laguna', 'PH', '', 'dannah_taba@yahoo.com', '', 'CABACABA', '81dc9bdb52d04dc20036dbd8313ed055', '2013-05-02 12:00:00', '', '', 0, 0, '', '0000-00-00'),
(21, 'AMI1304-REG-0021', ' CHRISTINE HAZEL', 'CANILANG', ' CLAVE', '1970-11-05', 0, '', 'Female', '', 'Santa Rosa', 'Laguna', 'PH', '', 'dannah_taba@yahoo.com', '', 'CANILANG', '81dc9bdb52d04dc20036dbd8313ed055', '2013-05-03 12:00:00', '', '', 0, 0, '', '0000-00-00'),
(22, 'AMI1304-REG-0022', ' CZUSHANE', 'CAPUSO', ' ARAPAN', '1980-10-16', 0, '', 'Female', '', 'Santa Rosa', 'Laguna', 'PH', '', 'dannah_taba@yahoo.com', '', 'CAPUSO', '81dc9bdb52d04dc20036dbd8313ed055', '2013-05-04 12:00:00', '', '', 0, 0, '', '0000-00-00'),
(23, 'AMI1304-REG-0023', ' RAQUEL', 'COSE', ' ANORE', '1999-08-07', 0, '', 'Female', '', 'Santa Rosa', 'Laguna', 'PH', '', 'dannah_taba@yahoo.com', '', 'COSE', '81dc9bdb52d04dc20036dbd8313ed055', '2013-05-05 12:00:00', '', '', 0, 0, '', '0000-00-00'),
(24, 'AMI1304-REG-0024', ' SAM', 'DACOCO', ' FORTUNO', '1995-03-23', 0, '', 'Male', '', 'Santa Rosa', 'Laguna', 'PH', '', 'dannah_taba@yahoo.com', '', 'DACOCO', '81dc9bdb52d04dc20036dbd8313ed055', '2013-05-06 12:00:00', '', '', 0, 0, '', '0000-00-00'),
(25, 'AMI1304-REG-0025', ' MERRY ANNE', 'DATILIS', ' OBEJAS', '1995-05-09', 0, '', 'Female', '', 'Santa Rosa', 'Laguna', 'PH', '', 'dannah_taba@yahoo.com', '', 'DATILIS', '81dc9bdb52d04dc20036dbd8313ed055', '2013-05-07 12:00:00', '', '', 0, 0, '', '0000-00-00'),
(26, 'AMI1304-REG-0026', ' ZARLYN JOY', 'DELMO', ' TEJADA', '1995-06-25', 0, '', 'Female', '', 'Santa Rosa', 'Laguna', 'PH', '', 'dannah_taba@yahoo.com', '', 'DELMO', '81dc9bdb52d04dc20036dbd8313ed055', '2013-05-08 12:00:00', '', '', 0, 0, '', '0000-00-00'),
(27, 'AMI1304-REG-0027', ' GUILLER IANMUEL', 'DIMAS', ' LETADA', '1986-09-13', 0, '', 'Male', '', 'Santa Rosa', 'Laguna', 'PH', '', 'dannah_taba@yahoo.com', '', 'DIMAS', '81dc9bdb52d04dc20036dbd8313ed055', '2013-05-09 12:00:00', '', '', 0, 0, '', '0000-00-00'),
(28, 'AMI1304-REG-0028', ' ZOREN IAN', 'DUARTE', ' NICOLAS', '1980-02-16', 0, '', 'Male', '', 'Santa Rosa', 'Laguna', 'PH', '', 'dannah_taba@yahoo.com', '', 'DUARTE', '81dc9bdb52d04dc20036dbd8313ed055', '2013-05-10 12:00:00', '', '', 0, 0, '', '0000-00-00'),
(29, 'AMI1304-REG-0029', ' ARON CHRISTOPHER', 'DURO', ' GURAY', '1943-10-12', 0, '', 'Male', '', 'Santa Rosa', 'Laguna', 'PH', '', 'dannah_taba@yahoo.com', '', 'DURO', '81dc9bdb52d04dc20036dbd8313ed055', '2013-05-11 12:00:00', '', '', 0, 0, '', '0000-00-00'),
(30, 'AMI1304-REG-0030', ' ABDUL RASHID', 'FEDELIN', ' ILAO', '1992-10-21', 0, '', 'Male', '', 'Santa Rosa', 'Laguna', 'PH', '', 'dannah_taba@yahoo.com', '', 'FEDELIN', '81dc9bdb52d04dc20036dbd8313ed055', '2013-08-12 12:00:00', '', '', 0, 0, '', '0000-00-00'),
(6, 'AMI1304-REG-0006', ' JHOANNA MARIE', 'ALORRO', ' ABARY', '1993-02-23', 0, '', 'Female', '', 'Santa Rosa', 'Laguna', 'PH', '', 'dannah_taba@yahoo.com', '', 'ALORRO', '81dc9bdb52d04dc20036dbd8313ed055', '2013-04-18 12:00:00', '', '', 1, 0, '', '0000-00-00'),
(5, 'AMI1304-REG-0005', 'Dannah', 'Abat', '', '1993-07-29', 0, '', 'Female', 'Celina Plains Olympia', 'Santa Rosa', 'Laguna', 'PH', '6.39E+11', 'dannah_taba@yahoo.com', '', 'dannah', '81dc9bdb52d04dc20036dbd8313ed055', '2013-04-17 12:00:00', '', '', 1, 0, '', '0000-00-00'),
(4, 'AMI1304-REG-0004', 'Neri', 'Lozano', 'Quinalayo', '1937-01-12', 0, '', 'Male', '123', '123', '123', 'PH', '123', 'neri@yahoo.com', '', 'neri', '81dc9bdb52d04dc20036dbd8313ed055', '2013-04-16 09:21:00', '', '', 1, 0, '', '0000-00-00'),
(3, 'AMI1304-REG-0003', 'Lei', 'Vicente', '', '2000-10-19', 0, '', 'Male', 'Rosario', 'San Pedro', 'Laguna', 'PH', '6.39E+11', 'jemnuineuron@rocketmail.com', '', 'lei', '81dc9bdb52d04dc20036dbd8313ed055', '2013-04-16 09:20:00', '', '', 1, 0, '', '0000-00-00'),
(2, 'AMI1304-REG-0002', 'Mae', 'Lampa', '', '1998-09-27', 0, '', 'Female', 'Yakal St.', 'Sta. Cruz', 'Manila', 'PH', '6.39E+11', 'mae_tot@hotmail.com', '', 'maetot', '81dc9bdb52d04dc20036dbd8313ed055', '2013-04-16 06:09:00', '', '', 1, 0, '', '0000-00-00'),
(1, 'AMI1304-REG-0001', 'Pio', 'Lozano', 'Quinalayo', '1994-03-22', 170.68, 'Single', 'Male', 'B5 Lot 11 Ph4 Villa Olympia Subd.', 'San Pedro', 'Laguna', 'PH', '09268358872', 'niel_pio@hotmail.com', '', 'awdee', '81dc9bdb52d04dc20036dbd8313ed055', '2013-08-20 07:06:03', '', '', 1, 1, 'awdee', '2013-09-02'),
(74, 'AMI1308-REG-0030', 'Jaylord', 'Minay', 'Sotta', '1933-01-01', 0, '', 'male', 'Sample', 'Sample', 'Sample', 'PH', '12312541253', 'sample@yahoo.com', NULL, 'jaylord', '81dc9bdb52d04dc20036dbd8313ed055', '2013-08-27 04:39:29', NULL, NULL, 0, NULL, NULL, '2013-08-27'),
(77, 'AMI1309-REG-0001', 'Sample', 'Sample', 'Sample', '1988-02-14', 170.68, 'Single', 'Male', 'Sample', 'sample', 'Sample', 'PH', '639268358872', 'sample@yahoo.com', NULL, 'sample', 'e10adc3949ba59abbe56e057f20f883e', '2013-09-02 11:03:16', NULL, NULL, 0, NULL, NULL, '2013-09-04'),
(78, 'AMI1309-REG-0002', 'Paul John', 'Marabe', '', '1992-10-21', 100, 'Single', 'Male', 'Dia Leyco', 'Santa Rosa', 'Laguna', 'PH', '09067323007', 'pjong_2011@yahoo.com', NULL, 'pjongski', 'ba6886b7cf03105540df265b6ddba901', '2013-09-02 18:25:27', NULL, NULL, 1, NULL, NULL, '0000-00-00'),
(79, 'AMI1309-REG-0003', 'Sample2', 'sample2', '', '1972-01-15', 170.68, 'Married', 'Male', 'Sample', 'sample', 'Sample', 'PH', '639268358872', 'sample@yahoo.com', NULL, 'sample2', 'e10adc3949ba59abbe56e057f20f883e', '2013-09-04 02:44:28', NULL, NULL, 0, NULL, NULL, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `request_id` int(5) NOT NULL AUTO_INCREMENT,
  `no_of_manpower` int(5) NOT NULL,
  `date_requested` date NOT NULL,
  `to` date NOT NULL,
  `remarks` varchar(1000) NOT NULL,
  `confirmed` tinyint(4) NOT NULL DEFAULT '0',
  `company` varchar(255) NOT NULL,
  `is_read` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`request_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`request_id`, `no_of_manpower`, `date_requested`, `to`, `remarks`, `confirmed`, `company`, `is_read`) VALUES
(41, 100, '2013-09-01', '2013-09-05', 'high school graduates', 1, 'TOSHIBA', 1),
(42, 123, '2013-09-01', '2013-09-12', 'asdf', 1, 'TOSHIBA', 1),
(43, 100, '2013-09-01', '2013-09-04', 'college graduates only', 1, 'TOSHIBA', 0);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `rno` int(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `rno`, `address`) VALUES
(1, 'awdee', 2, 'Sa puso mo');

-- --------------------------------------------------------

--
-- Table structure for table `trainee_attendance`
--

CREATE TABLE IF NOT EXISTS `trainee_attendance` (
  `training_id` varchar(255) DEFAULT NULL,
  `training_days` tinyint(2) DEFAULT NULL,
  `present_days` tinyint(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainee_attendance`
--

INSERT INTO `trainee_attendance` (`training_id`, `training_days`, `present_days`) VALUES
('AMI1309-TRAINEE-0002', 2, 2),
('AMI1309-TRAINEE-0003', 2, 2),
('AMI1309-TRAINEE-0004', 2, 1),
('AMI1309-TRAINEE-0005', 2, 1),
('AMI1309-TRAINEE-0006', 2, 2),
('AMI1309-TRAINEE-0007', 2, 2),
('AMI1309-TRAINEE-0008', 2, 1),
('AMI1309-TRAINEE-0009', 2, 1),
('AMI1309-TRAINEE-0010', 2, 2),
('AMI1309-TRAINEE-0011', 2, 2),
('AMI1309-TRAINEE-0012', 2, 1),
('AMI1309-TRAINEE-0013', 2, 1),
('AMI1309-TRAINEE-0014', 2, 2),
('AMI1309-TRAINEE-0015', 2, 2),
('AMI1309-TRAINEE-0016', 2, 1),
('AMI1309-TRAINEE-0017', 2, 1),
('AMI1309-TRAINEE-0018', 2, 2),
('AMI1309-TRAINEE-0019', 2, 2),
('AMI1309-TRAINEE-0020', 2, 1),
('AMI1309-TRAINEE-0021', 2, 1),
('AMI1309-TRAINEE-0022', 2, 2),
('AMI1309-TRAINEE-0023', 2, 2),
('AMI1309-TRAINEE-0024', 2, 1),
('AMI1309-TRAINEE-0025', 2, 1),
('AMI1309-TRAINEE-0026', 2, 2),
('AMI1309-TRAINEE-0027', 2, 2),
('AMI1309-TRAINEE-0028', 2, 1),
('AMI1309-TRAINEE-0029', 2, 1),
('AMI1309-TRAINEE-0030', 2, 2),
('AMI1309-TRAINEE-0031', 2, 2),
('AMI1309-TRAINEE-0032', 2, 1),
('AMI1309-TRAINEE-0033', 2, 1),
('AMI1309-TRAINEE-0034', 2, 2),
('AMI1309-TRAINEE-0035', 2, 2),
('AMI1309-TRAINEE-0036', 2, 1),
('AMI1309-TRAINEE-0037', 2, 1),
('AMI1309-TRAINEE-0038', 2, 2),
('AMI1309-TRAINEE-0039', 2, 2),
('AMI1309-TRAINEE-0040', 2, 1),
('AMI1309-TRAINEE-0041', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_count`
--

CREATE TABLE IF NOT EXISTS `user_count` (
  `count_id` int(11) NOT NULL AUTO_INCREMENT,
  `hr_count` int(11) NOT NULL,
  `trainer_count` int(11) NOT NULL,
  `client_count` int(11) NOT NULL,
  PRIMARY KEY (`count_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user_count`
--

INSERT INTO `user_count` (`count_id`, `hr_count`, `trainer_count`, `client_count`) VALUES
(1, 4, 4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `user_logs`
--

CREATE TABLE IF NOT EXISTS `user_logs` (
  `user_id` int(11) DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `last_logout` datetime DEFAULT NULL,
  `last_activity` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE IF NOT EXISTS `user_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(20) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `permission` varchar(13) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(35) DEFAULT NULL,
  `province` varchar(35) DEFAULT NULL,
  `country` varchar(2) DEFAULT NULL,
  `zip_code` int(6) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `image_file` varchar(255) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `is_active` char(1) DEFAULT NULL,
  `security_question` int(2) DEFAULT NULL,
  `security_answer` varchar(100) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`),
  UNIQUE KEY `username` (`username`),
  KEY `user_id_2` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`id`, `user_id`, `username`, `password`, `permission`, `first_name`, `last_name`, `middle_name`, `birth_date`, `address`, `city`, `province`, `country`, `zip_code`, `phone`, `email`, `image_file`, `date_created`, `is_active`, `security_question`, `security_answer`, `company`) VALUES
(1, 'AMI-HR-0001', 'hrstaff2', 'e10adc3949ba59abbe56e057f20f883e', 'HR', 'Bruno', 'Mars', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jdc@mail.com', NULL, '2013-08-26 22:03:07', NULL, NULL, NULL, ''),
(2, 'AMI-ADMIN-0001', 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'Administrator', 'Tony', 'Stark', '', '1992-10-19', '', '', '', 'ph', 4023, '', 'admin@alliancemansols.com', '', '2013-07-22 16:30:06', '1', 0, '', ''),
(3, 'AMI-TRAINER-0001', 'testing1', '81dc9bdb52d04dc20036dbd8313ed055', 'Trainer', 'Luo', 'Feichi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(4, 'AMI-HR-0002', 'hrstaff', '81dc9bdb52d04dc20036dbd8313ed055', 'HR', 'Bruce', 'Wayne', '', '1983-05-03', '', '', '', 'ph', 4023, '', 'hr@alliancemansols.com', '', '2013-07-22 16:31:06', '1', 0, '', ''),
(5, 'AMI-TRAINER-0002', 'trainer', '81dc9bdb52d04dc20036dbd8313ed055', 'Trainer', 'Steve', 'Rogers', '', '1988-09-11', '', '', '', 'ph', 4023, '', 'trainer@alliancemansols.com', '', '2013-07-22 16:32:06', '1', 0, '', ''),
(6, 'AMI-TRAINER-0003', 'oscar.velasco', 'e10adc3949ba59abbe56e057f20f883e', 'Trainer', 'Oscar', 'Velasco', '', '0000-00-00', '', '', '', '', 0, '', 'oscar.velasco@yahoo.com', '', '2013-07-23 02:04:57', '', 0, '', ''),
(7, 'AMI-CLIENT-0001', 'client', '81dc9bdb52d04dc20036dbd8313ed055', 'Client', 'Bruce', 'Lee', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TOSHIBA'),
(8, 'AMI1304-SAMPLE-0001', 'user', '81dc9bdb52d04dc20036dbd8313ed055', 'Applicant', 'Sample', 'Sample', 'Sample', '2013-08-01', 'Sample', 'Sample', 'Sample', 'Ph', NULL, NULL, NULL, NULL, '2013-08-26 02:11:26', NULL, NULL, NULL, ''),
(9, 'AMI1304-TRAINEE-0001', 'awdee', '81dc9bdb52d04dc20036dbd8313ed055', 'Trainee', 'Pio', 'Lozano', 'Quinalayo', '0000-00-00', '', '', '', '', 0, '', 'niel_pio@hotmail.com', '', '2013-08-24 22:01:30', '', 0, '', ''),
(10, 'AMI1304-TRAINEE-0007', 'alpuerto', '81dc9bdb52d04dc20036dbd8313ed055', 'Trainee', ' JANICE', 'ALPUERTO', ' MARQUESES', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dannah_taba@yahoo.com', NULL, '2013-08-24 21:55:08', NULL, NULL, NULL, ''),
(11, 'AMI1309-REG-0001', 'sample', 'e10adc3949ba59abbe56e057f20f883e', 'Applicant', 'Sample', 'Sample', 'Sample', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sample@yahoo.com', NULL, '2013-09-02 11:05:27', NULL, NULL, NULL, NULL),
(12, 'AMI1309-TRAINEE-0002', 'pjongski', 'ba6886b7cf03105540df265b6ddba901', 'Trainee', 'Paul John', 'Marabe', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pjong_2011@yahoo.com', NULL, '2013-09-02 18:27:32', NULL, NULL, NULL, NULL),
(13, 'AMI1309-REG-0003', 'sample2', 'e10adc3949ba59abbe56e057f20f883e', 'Applicant', 'Sample2', 'sample2', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sample@yahoo.com', NULL, '2013-09-04 02:44:28', NULL, NULL, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
