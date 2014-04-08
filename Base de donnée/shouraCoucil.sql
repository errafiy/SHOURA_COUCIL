-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 10, 2013 at 01:37 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `questionnaire`
--

-- --------------------------------------------------------




-- Table structure for table `professeur`
--

CREATE TABLE IF NOT EXISTS `professeur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
 
  `email` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default.png',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `professeur`
--

INSERT INTO `professeur` (`id`, `nom`, `prenom`, `pseudo`, `password`, `email`, `image`) VALUES
(2, 'taib', 'belghiti', 'taib', '1a1dc91c907325c69271ddf0c944bc72', 'bel@mail.com', 'belghiti.jpg1.jpg'),
(14, 'samir', 'samir', 'samir', '1a1dc91c907325c69271ddf0c944bc72', 'samir.belbel@gmail.com', 'AMAN-logo.jpg'),
(15, 'bourichi', 'adil', 'bourichi', '1a1dc91c907325c69271ddf0c944bc72', 'a.bourichi@gmail.com', 'Delete.png'),
(16, 'sikal', 'nawfal', 'nawfaltio', '1a1dc91c907325c69271ddf0c944bc72', 'nawfal.sikal@gmail.com', 'sikal.jpg'),
(17, 'chougdali', 'khalid', 'chougdali', '794761a765ceca759536a1bf39100142', 'chougdalikhalid@mail.com', '600227_236467183165573_325465325_n.jpg'),
(19, 'ABOUABDELLAH', 'ABDELLAH', 'abouabdellah', 'abouabdellah', 'ABOUABDELLAH@gmail.com', 'DSC_0056.JPG');

-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS `directeur` (
  `idDirecteur` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  
  `email` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default.png',
  PRIMARY KEY (`idDirecteur`)

) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--