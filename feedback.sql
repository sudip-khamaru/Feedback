-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 12, 2016 at 04:23 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `feedback`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumni_feedback`
--

CREATE TABLE IF NOT EXISTS `alumni_feedback` (
  `course` varchar(100) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `opt1` varchar(100) NOT NULL,
  `opt2` varchar(100) NOT NULL,
  `opt3` varchar(100) NOT NULL,
  `cmnt1` varchar(100) NOT NULL,
  `opt4` varchar(100) NOT NULL,
  `cmnt2` varchar(100) NOT NULL,
  `opt5` varchar(100) NOT NULL,
  `cmnt3` varchar(100) NOT NULL,
  `opt6` varchar(100) NOT NULL,
  `cmnt4` varchar(100) NOT NULL,
  `opt7` varchar(100) NOT NULL,
  `cmnt5` varchar(100) NOT NULL,
  `opt8` varchar(100) NOT NULL,
  `cmnt6` varchar(100) NOT NULL,
  `submit_on` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumni_feedback`
--


-- --------------------------------------------------------

--
-- Table structure for table `alumni_mca`
--

CREATE TABLE IF NOT EXISTS `alumni_mca` (
  `student_name` varchar(100) NOT NULL,
  `parent_name` varchar(100) NOT NULL,
  `contact_no` varchar(100) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `year_passing` varchar(100) NOT NULL,
  `job_in` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumni_mca`
--


-- --------------------------------------------------------

--
-- Table structure for table `alumni_mtech`
--

CREATE TABLE IF NOT EXISTS `alumni_mtech` (
  `student_name` varchar(100) NOT NULL,
  `parent_name` varchar(100) NOT NULL,
  `contact_no` varchar(100) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `year_passing` varchar(100) NOT NULL,
  `job_in` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumni_mtech`
--


-- --------------------------------------------------------

--
-- Table structure for table `alumni_unique_id`
--

CREATE TABLE IF NOT EXISTS `alumni_unique_id` (
  `course` varchar(100) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `parent_name` varchar(100) NOT NULL,
  `contact_no` varchar(100) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `year_passing` varchar(100) NOT NULL,
  `job_in` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `unique_id` varchar(100) NOT NULL,
  `reg_on` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumni_unique_id`
--


-- --------------------------------------------------------

--
-- Table structure for table `mca`
--

CREATE TABLE IF NOT EXISTS `mca` (
  `student_name` varchar(100) NOT NULL,
  `parent_name` varchar(100) NOT NULL,
  `roll_no` varchar(100) NOT NULL,
  `contact_no` varchar(100) NOT NULL,
  `email_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mca`
--


-- --------------------------------------------------------

--
-- Table structure for table `mca_part1_1st_sem`
--

CREATE TABLE IF NOT EXISTS `mca_part1_1st_sem` (
  `student_name` varchar(100) NOT NULL,
  `student_roll` varchar(100) NOT NULL,
  `course_value` varchar(100) NOT NULL,
  `course_nature` varchar(100) NOT NULL,
  `syllabus_cover` varchar(100) NOT NULL,
  `teacher_help` varchar(100) NOT NULL,
  `subject_interest` varchar(100) NOT NULL,
  `study_materials` varchar(100) NOT NULL,
  `teacher_interaction` varchar(100) NOT NULL,
  `lab_performance` varchar(100) NOT NULL,
  `submit_on` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mca_part1_1st_sem`
--


-- --------------------------------------------------------

--
-- Table structure for table `mca_part1_2nd_sem`
--

CREATE TABLE IF NOT EXISTS `mca_part1_2nd_sem` (
  `student_name` varchar(100) NOT NULL,
  `student_roll` varchar(100) NOT NULL,
  `course_value` varchar(100) NOT NULL,
  `course_nature` varchar(100) NOT NULL,
  `syllabus_cover` varchar(100) NOT NULL,
  `teacher_help` varchar(100) NOT NULL,
  `subject_interest` varchar(100) NOT NULL,
  `study_materials` varchar(100) NOT NULL,
  `teacher_interaction` varchar(100) NOT NULL,
  `lab_performance` varchar(100) NOT NULL,
  `submit_on` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mca_part1_2nd_sem`
--


-- --------------------------------------------------------

--
-- Table structure for table `mca_part2_1st_sem`
--

CREATE TABLE IF NOT EXISTS `mca_part2_1st_sem` (
  `student_name` varchar(100) NOT NULL,
  `student_roll` varchar(100) NOT NULL,
  `course_value` varchar(100) NOT NULL,
  `course_nature` varchar(100) NOT NULL,
  `syllabus_cover` varchar(100) NOT NULL,
  `teacher_help` varchar(100) NOT NULL,
  `subject_interest` varchar(100) NOT NULL,
  `study_materials` varchar(100) NOT NULL,
  `teacher_interaction` varchar(100) NOT NULL,
  `lab_performance` varchar(100) NOT NULL,
  `submit_on` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mca_part2_1st_sem`
--


-- --------------------------------------------------------

--
-- Table structure for table `mca_part2_2nd_sem`
--

CREATE TABLE IF NOT EXISTS `mca_part2_2nd_sem` (
  `student_name` varchar(100) NOT NULL,
  `student_roll` varchar(100) NOT NULL,
  `course_value` varchar(100) NOT NULL,
  `course_nature` varchar(100) NOT NULL,
  `syllabus_cover` varchar(100) NOT NULL,
  `teacher_help` varchar(100) NOT NULL,
  `subject_interest` varchar(100) NOT NULL,
  `study_materials` varchar(100) NOT NULL,
  `teacher_interaction` varchar(100) NOT NULL,
  `lab_performance` varchar(100) NOT NULL,
  `submit_on` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mca_part2_2nd_sem`
--


-- --------------------------------------------------------

--
-- Table structure for table `mca_part3_1st_sem`
--

CREATE TABLE IF NOT EXISTS `mca_part3_1st_sem` (
  `student_name` varchar(100) NOT NULL,
  `student_roll` varchar(100) NOT NULL,
  `course_value` varchar(100) NOT NULL,
  `course_nature` varchar(100) NOT NULL,
  `syllabus_cover` varchar(100) NOT NULL,
  `teacher_help` varchar(100) NOT NULL,
  `subject_interest` varchar(100) NOT NULL,
  `study_materials` varchar(100) NOT NULL,
  `teacher_interaction` varchar(100) NOT NULL,
  `lab_performance` varchar(100) NOT NULL,
  `submit_on` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mca_part3_1st_sem`
--


-- --------------------------------------------------------

--
-- Table structure for table `mca_part3_2nd_sem`
--

CREATE TABLE IF NOT EXISTS `mca_part3_2nd_sem` (
  `student_name` varchar(100) NOT NULL,
  `student_roll` varchar(100) NOT NULL,
  `course_value` varchar(100) NOT NULL,
  `course_nature` varchar(100) NOT NULL,
  `syllabus_cover` varchar(100) NOT NULL,
  `teacher_help` varchar(100) NOT NULL,
  `subject_interest` varchar(100) NOT NULL,
  `study_materials` varchar(100) NOT NULL,
  `teacher_interaction` varchar(100) NOT NULL,
  `lab_performance` varchar(100) NOT NULL,
  `submit_on` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mca_part3_2nd_sem`
--


-- --------------------------------------------------------

--
-- Table structure for table `mtech`
--

CREATE TABLE IF NOT EXISTS `mtech` (
  `student_name` varchar(100) NOT NULL,
  `parent_name` varchar(100) NOT NULL,
  `roll_no` varchar(100) NOT NULL,
  `contact_no` varchar(100) NOT NULL,
  `email_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mtech`
--


-- --------------------------------------------------------

--
-- Table structure for table `mtech_part1_1st_sem`
--

CREATE TABLE IF NOT EXISTS `mtech_part1_1st_sem` (
  `student_name` varchar(100) NOT NULL,
  `student_roll` varchar(100) NOT NULL,
  `course_value` varchar(100) NOT NULL,
  `course_nature` varchar(100) NOT NULL,
  `syllabus_cover` varchar(100) NOT NULL,
  `teacher_help` varchar(100) NOT NULL,
  `subject_interest` varchar(100) NOT NULL,
  `study_materials` varchar(100) NOT NULL,
  `teacher_interaction` varchar(100) NOT NULL,
  `lab_performance` varchar(100) NOT NULL,
  `submit_on` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mtech_part1_1st_sem`
--


-- --------------------------------------------------------

--
-- Table structure for table `mtech_part1_2nd_sem`
--

CREATE TABLE IF NOT EXISTS `mtech_part1_2nd_sem` (
  `student_name` varchar(100) NOT NULL,
  `student_roll` varchar(100) NOT NULL,
  `course_value` varchar(100) NOT NULL,
  `course_nature` varchar(100) NOT NULL,
  `syllabus_cover` varchar(100) NOT NULL,
  `teacher_help` varchar(100) NOT NULL,
  `subject_interest` varchar(100) NOT NULL,
  `study_materials` varchar(100) NOT NULL,
  `teacher_interaction` varchar(100) NOT NULL,
  `lab_performance` varchar(100) NOT NULL,
  `submit_on` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mtech_part1_2nd_sem`
--


-- --------------------------------------------------------

--
-- Table structure for table `mtech_part2_1st_sem`
--

CREATE TABLE IF NOT EXISTS `mtech_part2_1st_sem` (
  `student_name` varchar(100) NOT NULL,
  `student_roll` varchar(100) NOT NULL,
  `course_value` varchar(100) NOT NULL,
  `course_nature` varchar(100) NOT NULL,
  `syllabus_cover` varchar(100) NOT NULL,
  `teacher_help` varchar(100) NOT NULL,
  `subject_interest` varchar(100) NOT NULL,
  `study_materials` varchar(100) NOT NULL,
  `teacher_interaction` varchar(100) NOT NULL,
  `lab_performance` varchar(100) NOT NULL,
  `submit_on` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mtech_part2_1st_sem`
--


-- --------------------------------------------------------

--
-- Table structure for table `mtech_part2_2nd_sem`
--

CREATE TABLE IF NOT EXISTS `mtech_part2_2nd_sem` (
  `student_name` varchar(100) NOT NULL,
  `student_roll` varchar(100) NOT NULL,
  `course_value` varchar(100) NOT NULL,
  `course_nature` varchar(100) NOT NULL,
  `syllabus_cover` varchar(100) NOT NULL,
  `teacher_help` varchar(100) NOT NULL,
  `subject_interest` varchar(100) NOT NULL,
  `study_materials` varchar(100) NOT NULL,
  `teacher_interaction` varchar(100) NOT NULL,
  `lab_performance` varchar(100) NOT NULL,
  `submit_on` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mtech_part2_2nd_sem`
--


-- --------------------------------------------------------

--
-- Table structure for table `parent_feedback`
--

CREATE TABLE IF NOT EXISTS `parent_feedback` (
  `parent_name` varchar(100) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `student_course` varchar(100) NOT NULL,
  `course_value` varchar(100) NOT NULL,
  `course_nature` varchar(100) NOT NULL,
  `syllabus_cover` varchar(100) NOT NULL,
  `teacher_help` varchar(100) NOT NULL,
  `subject_interest` varchar(100) NOT NULL,
  `study_materials` varchar(100) NOT NULL,
  `teacher_interaction` varchar(100) NOT NULL,
  `lab_performance` varchar(100) NOT NULL,
  `comment` varchar(10000) NOT NULL,
  `submit_on` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parent_feedback`
--


-- --------------------------------------------------------

--
-- Table structure for table `peer_feedback`
--

CREATE TABLE IF NOT EXISTS `peer_feedback` (
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `visit_purpose` varchar(100) NOT NULL,
  `course_value` varchar(100) NOT NULL,
  `course_nature` varchar(100) NOT NULL,
  `syllabus_cover` varchar(100) NOT NULL,
  `teacher_help` varchar(100) NOT NULL,
  `subject_interest` varchar(100) NOT NULL,
  `study_materials` varchar(100) NOT NULL,
  `teacher_interaction` varchar(100) NOT NULL,
  `lab_performance` varchar(100) NOT NULL,
  `comment` varchar(10000) NOT NULL,
  `submit_on` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peer_feedback`
--


-- --------------------------------------------------------

--
-- Table structure for table `student_feedback`
--

CREATE TABLE IF NOT EXISTS `student_feedback` (
  `student_name` varchar(100) NOT NULL,
  `student_course` varchar(100) NOT NULL,
  `student_roll` varchar(100) NOT NULL,
  `course_value` varchar(100) NOT NULL,
  `course_nature` varchar(100) NOT NULL,
  `syllabus_cover` varchar(100) NOT NULL,
  `teacher_help` varchar(100) NOT NULL,
  `subject_interest` varchar(100) NOT NULL,
  `study_materials` varchar(100) NOT NULL,
  `teacher_interaction` varchar(100) NOT NULL,
  `lab_performance` varchar(100) NOT NULL,
  `submit_on` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_feedback`
--


-- --------------------------------------------------------

--
-- Table structure for table `unique_id`
--

CREATE TABLE IF NOT EXISTS `unique_id` (
  `course` varchar(100) NOT NULL,
  `new_course` varchar(100) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `parent_name` varchar(100) NOT NULL,
  `roll_no` varchar(100) NOT NULL,
  `contact_no` varchar(100) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `unique_id` varchar(100) NOT NULL,
  `reg_on` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unique_id`
--

