-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2017 at 02:22 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

INSERT INTO `tbl_appointment` (`appointmentId`, `patientId`, `nsoId`, `date`, `time`, `remarks`) VALUES
(1, 7, 14, '2017-10-18', '08:00:00', 'makan nasi byk sikit'),
(2, 10, 14, '2017-10-21', '11:00:00', 'kuat kan minum air'),
(3, 10, 14, '2017-10-09', '11:00:00', 'kuat kan minum air'),
(4, 10, 14, '2017-09-09', '11:00:00', 'kuat kan minum air'),
(5, 10, 14, '2017-09-02', '11:00:00', 'kuat kan minum air'),
(6, 10, 14, '2017-09-05', '11:00:00', 'kuat kan minum air'),
(7, 10, 14, '2017-09-08', '11:00:00', 'kuat kan minum air'),
(8, 10, 14, '2017-09-09', '11:00:00', 'kuat kan minum air'),
(9, 10, 14, '2017-08-12', '11:00:00', 'kuat kan minum air'),
(10, 10, 14, '2017-08-02', '11:00:00', 'kuat kan minum air'),
(11, 10, 14, '2017-08-07', '11:00:00', 'kuat kan minum air'),
(12, 7, 1, '2017-10-18', '08:00:00', 'Test'),
(13, 10, 2, '2017-10-18', '09:00:00', 'Test'),
(14, 10, 2, '2017-10-19', '10:00:00', 'Test'),
(15, 10, 2, '2017-10-20', '11:00:00', 'Test'),
(16, 10, 2, '2017-10-21', '12:00:00', 'Test'),
(17, 10, 2, '2017-10-22', '13:00:00', 'Test'),
(18, 10, 2, '2017-10-23', '14:00:00', 'Test'),
(19, 10, 2, '2017-10-24', '15:00:00', 'Test'),
(20, 10, 2, '2017-10-25', '16:00:00', 'Test'),
(21, 10, 2, '2017-01-26', '17:00:00', 'Test'),
(22, 10, 2, '2017-10-27', '18:00:00', 'Test'),
(23, 10, 2, '2017-10-28', '19:00:00', 'Test'),
(24, 10, 2, '2017-10-29', '20:00:00', 'Test'),
(25, 10, 2, '2017-10-30', '21:00:00', 'Test'),
(26, 10, 2, '2017-10-31', '22:00:00', 'Test'),
(27, 10, 2, '2017-09-01', '23:00:00', 'Test'),
(28, 7, 2, '2017-08-02', '00:00:00', 'Test'),
(29, 7, 2, '2017-08-03', '01:00:00', 'Test'),
(30, 7, 1, '2017-08-04', '02:00:00', 'Test'),
(31, 7, 1, '2017-08-05', '03:00:00', 'Test'),
(32, 7, 1, '2017-08-06', '04:00:00', 'Test'),
(33, 7, 1, '2017-08-07', '05:00:00', 'Test'),
(34, 7, 1, '2017-08-08', '06:00:00', 'Test'),
(35, 7, 1, '2017-08-09', '07:00:00', 'Test'),
(36, 7, 1, '2017-07-10', '08:00:00', 'Test'),
(37, 7, 1, '2017-07-11', '09:00:00', 'Test'),
(38, 7, 1, '2017-07-12', '10:00:00', 'Test'),
(39, 7, 1, '2017-07-13', '11:00:00', 'Test'),
(40, 7, 1, '2017-07-14', '12:00:00', 'Test'),
(41, 7, 2, '2017-07-15', '13:00:00', 'Test'),
(42, 7, 2, '2017-07-16', '14:00:00', 'Test'),
(43, 7, 2, '2017-07-17', '15:00:00', 'Test'),
(44, 7, 2, '2017-07-18', '16:00:00', 'Test'),
(45, 7, 2, '2017-06-19', '17:00:00', 'Test'),
(46, 7, 2, '2017-06-20', '18:00:00', 'Test'),
(47, 7, 2, '2017-06-21', '19:00:00', 'Test'),
(48, 7, 2, '2017-06-22', '20:00:00', 'Test'),
(49, 7, 2, '2017-06-23', '21:00:00', 'Test'),
(50, 7, 2, '2017-06-24', '22:00:00', 'Test'),
(51, 7, 2, '2017-06-25', '23:00:00', 'Test'),
(52, 7, 2, '2017-06-26', '00:00:00', 'Test'),
(53, 10, 2, '2017-06-27', '01:00:00', 'Test'),
(54, 10, 2, '2017-06-28', '02:00:00', 'Test'),
(55, 10, 2, '2017-06-29', '03:00:00', 'Test'),
(56, 10, 2, '2017-06-30', '04:00:00', 'Test'),
(57, 10, 2, '2017-05-01', '05:00:00', 'Test'),
(58, 10, 2, '2017-05-02', '06:00:00', 'Test'),
(59, 10, 2, '2017-05-03', '07:00:00', 'Test'),
(60, 10, 2, '2017-05-04', '08:00:00', 'Test'),
(61, 10, 2, '2017-05-05', '09:00:00', 'Test'),
(62, 10, 2, '2017-05-06', '10:00:00', 'Test'),
(63, 10, 2, '2017-05-07', '11:00:00', 'Test'),
(64, 10, 2, '2017-05-08', '12:00:00', 'Test'),
(65, 10, 2, '2017-02-09', '13:00:00', 'Test'),
(66, 10, 2, '2017-02-10', '14:00:00', 'Test'),
(67, 10, 2, '2017-02-11', '15:00:00', 'Test'),
(68, 10, 2, '2017-02-12', '16:00:00', 'Test'),
(69, 10, 2, '2017-02-13', '17:00:00', 'Test'),
(70, 10, 2, '2017-02-14', '18:00:00', 'Test'),
(71, 10, 2, '2017-02-15', '19:00:00', 'Test'),
(72, 10, 2, '2017-02-16', '20:00:00', 'Test'),
(73, 10, 2, '2017-01-17', '21:00:00', 'Test'),
(74, 10, 2, '2017-01-18', '22:00:00', 'Test'),
(75, 10, 2, '2017-01-19', '23:00:00', 'Test'),
(76, 10, 2, '2017-01-20', '00:00:00', 'Test'),
(77, 10, 2, '2017-01-21', '01:00:00', 'Test'),
(78, 10, 2, '2017-01-22', '02:00:00', 'Test'),
(79, 10, 1, '2017-01-23', '03:00:00', 'Test'),
(80, 10, 1, '2017-01-24', '04:00:00', 'Test'),
(81, 10, 1, '2017-01-25', '05:00:00', 'Test');