-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2015 at 04:31 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `brandstof`
--

-- --------------------------------------------------------

--
-- Table structure for table `aanbiedingen`
--

CREATE TABLE IF NOT EXISTS `aanbiedingen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `productnaam` varchar(255) NOT NULL,
  `post_thumbnail` varchar(255) NOT NULL,
  `beschrijving` varchar(255) NOT NULL,
  `prijs` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `aanbiedingen`
--

INSERT INTO `aanbiedingen` (`id`, `productnaam`, `post_thumbnail`, `beschrijving`, `prijs`) VALUES
(2, 'texaco eigendomspapier', 'assets/uploaded_images', 'patenten erbij', '2,00'),
(3, 'banner', 'assets/uploaded_images', 'banner', '123,10'),
(4, 'dasds', 'assets/uploaded_images', 'dsdsa', '1000,00'),
(5, 'pinquens', 'assets/uploaded_images', 'weds', '10,00'),
(6, 'dsda', 'assets/uploaded_images', 'dsasd', 'dsaasd'),
(7, 'kanker hoer', '../assets/uploaded_ima', 'halloooo', '100,00'),
(8, '3 Pinguins ', 'assets/uploaded_images/Penguins.jpg', 'voor maarliefst ', '10,00'),
(9, '1 Kilo waterstruik', 'assets/uploaded_images/Hydrangeas.jpg', 'vol vocht lekker man', '12,95');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE IF NOT EXISTS `banners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `content` varchar(50) NOT NULL,
  `post_thumbnail` varchar(255) NOT NULL,
  `locatie_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `content`, `post_thumbnail`, `locatie_id`) VALUES
(1, '', '', 'assets/uploaded_images/logo-brandstof.png', 0),
(2, '', '', 'assets/uploaded_images/banner.jpg', 0),
(3, '', '', 'assets/uploaded_images/banner2.jpg', 0),
(4, '', '', 'assets/uploaded_images/logo-brandstof.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `fuel`
--

CREATE TABLE IF NOT EXISTS `fuel` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `locatie_id` int(5) NOT NULL,
  `brandstof` varchar(50) NOT NULL,
  `prijzen` varchar(100) NOT NULL,
  `datum` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=77 ;

--
-- Dumping data for table `fuel`
--

INSERT INTO `fuel` (`id`, `locatie_id`, `brandstof`, `prijzen`, `datum`) VALUES
(23, 2, 'euro95', '3,25', '2015-04-01 08:13:20'),
(24, 2, 'diesel', '2,95', '2015-04-01 09:31:02'),
(25, 2, 'diesel', '3,00', '2015-04-02 09:31:15'),
(27, 2, 'diesel', '1,50', '2015-04-01 09:39:28'),
(28, 2, 'diesel', '5,00', '2015-04-03 09:43:26'),
(29, 2, 'diesel', '2,00', '2015-04-01 09:53:17'),
(30, 2, 'diesel', '1,24', '2015-04-08 07:45:54'),
(31, 2, 'diesel', '1,24', '2015-04-08 07:45:58'),
(32, 2, 'diesel', '1,24', '2015-04-08 07:46:52'),
(33, 2, 'diesel', '1,24', '2015-04-10 07:12:39'),
(34, 2, 'diesel', '1,24', '2015-04-10 07:12:42'),
(35, 2, 'diesel', '1,24', '2015-04-10 07:12:53'),
(36, 2, 'diesel', '1,24', '2015-04-10 07:13:07'),
(37, 2, 'euro95', '1,53', '2015-04-10 07:16:20'),
(38, 2, 'euro95', '1,53', '2015-04-10 07:16:24'),
(39, 2, 'euro95', '1,53', '2015-04-10 07:16:50'),
(40, 2, 'lpg', '0,83', '2015-04-10 07:17:03'),
(41, 2, 'lpg', '0,83', '2015-04-10 07:17:07'),
(42, 2, 'lpg', '0,83', '2015-04-10 07:20:47'),
(43, 2, 'lpg', '0,83', '2015-04-10 07:20:50'),
(44, 2, 'lpg', '0,83', '2015-04-10 07:22:50'),
(45, 2, 'lpg', '0,83', '2015-04-10 07:27:35'),
(46, 2, 'lpg', '0,83', '2015-04-10 07:27:48'),
(47, 2, 'lpg', '0,83', '2015-04-10 07:29:19'),
(48, 2, 'lpg', '0,83', '2015-04-10 07:29:38'),
(49, 2, 'lpg', '0,83', '2015-04-10 07:30:00'),
(50, 2, 'lpg', '0,83', '2015-04-10 07:30:44'),
(51, 2, 'lpg', '0,93', '2015-04-14 10:14:33'),
(52, 2, 'lpg', '0,93', '2015-04-14 10:14:41'),
(53, 2, 'euro95', '1,60', '2015-04-14 10:15:07'),
(54, 2, 'euro95', '1,60', '2015-04-14 10:15:11'),
(55, 2, 'euro95', '1,60', '2015-04-14 10:17:19'),
(56, 2, 'diesel', '1,35', '2015-04-14 10:17:26'),
(57, 2, 'diesel', '1,35', '2015-04-14 10:19:48'),
(58, 2, 'euro95', '1,60', '2015-04-14 10:20:27'),
(59, 2, 'euro95', '1,60', '2015-04-14 10:20:28'),
(60, 2, 'euro95', '1,60', '2015-04-14 10:20:29'),
(61, 2, '', '', '2015-04-14 20:41:35'),
(62, 2, '', '', '2015-04-14 20:42:09'),
(63, 2, 'euro95', '', '2015-04-14 20:42:14'),
(64, 2, 'euro95', '0,82', '2015-04-14 20:42:25'),
(65, 2, 'euro95', '1,50', '2015-04-22 23:34:50'),
(66, 2, 'euro95', '1,50', '2015-04-22 23:34:53'),
(67, 2, 'diesel', '2,40', '2015-04-22 23:35:03'),
(68, 2, 'diesel', '2,40', '2015-04-22 23:35:06'),
(69, 2, 'diesel', '2,40', '2015-04-22 23:35:50'),
(70, 2, 'diesel', '2,40', '2015-04-22 23:36:24'),
(71, 2, 'euro95', '1,40', '2015-04-22 23:37:05'),
(72, 2, 'euro95', '1,40', '2015-04-22 23:37:07'),
(73, 2, 'euro95', '1,40', '2015-04-22 23:37:38'),
(74, 2, 'lpg', '10,20', '2015-04-22 23:37:48'),
(75, 2, 'euro95', '10,25', '2015-04-22 23:38:58'),
(76, 2, 'lpg', '1,20', '2015-04-22 23:41:17');

-- --------------------------------------------------------

--
-- Table structure for table `gebruikers`
--

CREATE TABLE IF NOT EXISTS `gebruikers` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `gebruikersnaam` varchar(50) NOT NULL,
  `wachtwoord` varchar(200) NOT NULL,
  `naam` varchar(100) NOT NULL,
  `achternaam` varchar(100) NOT NULL,
  `rol` varchar(10) NOT NULL,
  `functie` varchar(10) NOT NULL,
  `locatie` int(5) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `gebruikersnaam` (`gebruikersnaam`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `gebruikers`
--

INSERT INTO `gebruikers` (`id`, `gebruikersnaam`, `wachtwoord`, `naam`, `achternaam`, `rol`, `functie`, `locatie`) VALUES
(7, 'beheerder', '$2y$10$ekNJE/wLYnJVjuDMQOmCmODT8v6SyrhKBeqYJ9GWWmD', 'admin', 'developer', '', '1', 0),
(10, 'jesse123', '$2y$10$etxVkKyYg1QJRmdsOBN/Zex6hdgzuQ1iKa.z63Lwx7wdwSIthQDuu', 'jesse', 'koolhaas', 'designer', '1', 0),
(11, 'tim', '$2y$10$RciGva5lGgDp5HxG/NTrue8Aob/LuFE7X2gkorWpnZ7LSfIbD8CBq', 'tim', 'de heer', 'Medewerker', '', 0),
(12, 'Yolanda1965', '$2y$10$GH9xJlAasZ4rDc8KsuC5VeLkFpjA08xlQP32sbEaNfqFl9XHx3cUW', 'Yolanda ', 'Koolhaas', '1', '', 2),
(13, 'jesse', '$2y$10$GH9xJlAasZ4rDc8KsuC5VeLkFpjA08xlQP32sbEaNfqFl9XHx3cUW', 'Yolanda ', 'Koolhaas', '1', '', 1),
(22, 'hummer', '$2y$10$G0mcoYhIoDE1vJsOOBI9Nuo0V2Ifiv9LBx1XcyT0TDkJX2HnqHXtC', 'hummer', 'koolhaas', '1', '', 1),
(24, 'beheerderjesse', '$2y$10$sIetn2Df2.i0/qjr.2yOOOM0liVsrd5l0hzwNEZUETv0TCF2.BF1i', '123', '123', '', '1', 2);

-- --------------------------------------------------------

--
-- Table structure for table `locaties`
--

CREATE TABLE IF NOT EXISTS `locaties` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `naam` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `naam` (`naam`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `locaties`
--

INSERT INTO `locaties` (`id`, `naam`) VALUES
(5, 'Amsterdam'),
(1, 'Gouda'),
(3, 'Leiden'),
(2, 'Nieuwerkerk aan den IJssel'),
(4, 'Schollenvaar');

-- --------------------------------------------------------

--
-- Table structure for table `locatietext`
--

CREATE TABLE IF NOT EXISTS `locatietext` (
  `id` int(10) NOT NULL DEFAULT '0',
  `logo` varchar(50) NOT NULL,
  `tekst` varchar(1000) NOT NULL,
  `locatie` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locatietext`
--

INSERT INTO `locatietext` (`id`, `logo`, `tekst`, `locatie`) VALUES
(0, '', 'Jaja het is zo veer we gaan het toch maar weer is proberen', 1),
(1, '', 'Jaja het is zo veer we gaan het toch maar weer is proberenJaja het is zo veer we gaan het toch maar weer is proberenJaja het is zo veer we gaan het toch maar weer is proberenJaja het is zo veer we gaan het toch maar weer is proberenJaja het is zo veer we gaan het toch maar weer is proberenJaja het is zo veer we gaan het toch maar weer is proberenJaja het is zo veer we gaan het toch maar weer is proberenJaja het is zo veer we gaan het toch maar weer is proberenJaja het is zo veer we gaan het toch maar weer is proberenJaja het is zo veer we gaan het toch maar weer is proberenJaja het is zo veer we gaan het toch maar weer is proberenJaja het is zo veer we gaan het toch maar weer is proberenJaja het is zo veer we gaan het toch maar weer is proberenJaja het is zo veer we gaan het toch maar weer is proberenJaja het is zo veer we gaan het toch maar weer is proberen', 2),
(2, '', 'Jaja het is zo veer we gaan het toch maar weer is proberen', 3),
(3, '', 'Jaja het is zo veer we gaan het toch maar weer is proberen', 4),
(4, '', 'Jaja het is zo veer we gaan het toch maar weer is proberen', 5);

-- --------------------------------------------------------

--
-- Table structure for table `openingstijden`
--

CREATE TABLE IF NOT EXISTS `openingstijden` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `locatieid` int(5) NOT NULL,
  `dag` varchar(50) NOT NULL,
  `vantijd` varchar(20) NOT NULL,
  `tottijd` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `openingstijden`
--

INSERT INTO `openingstijden` (`id`, `locatieid`, `dag`, `vantijd`, `tottijd`) VALUES
(7, 2, 'Maandag', '00:00', '00:00'),
(8, 2, 'Dinsdag', '00:00', '00:00'),
(9, 2, 'Woensdag', '00:00', '00:00'),
(10, 2, 'Donderdag', '00:00', '00:00'),
(11, 2, 'Vrijdag', '00:00', '00:00'),
(12, 2, 'Zaterdag', '00:00', '00:00'),
(13, 2, 'Zondag', '12:00', '13:00'),
(14, 1, 'Maandag', '00:00', '00:00'),
(15, 1, 'Dinsdag', '00:00', '00:00'),
(16, 1, 'Woensdag', '00:00', '00:00'),
(17, 1, 'Donderdag', '00:00', '00:00'),
(18, 1, 'Vrijdag', '00:00', '00:00'),
(19, 1, 'Zaterdag', '00:00', '00:00'),
(20, 1, 'Zondag', '00:00', '00:00'),
(21, 3, 'Maandag', '00:00', '00:00'),
(22, 3, 'Dinsdag', '00:00', '00:00'),
(23, 3, 'Woensdag', '00:00', '00:00'),
(24, 3, 'Donderdag', '00:00', '00:00'),
(25, 3, 'Vrijdag', '00:00', '00:00'),
(26, 3, 'Zaterdag', '00:00', '00:00'),
(27, 3, 'Zondag', '00:00', '00:00'),
(28, 4, 'Maandag', '00:00', '00:00'),
(29, 4, 'Dinsdag', '00:00', '00:00'),
(30, 4, 'Woensdag', '00:00', '00:00'),
(31, 4, 'Donderdag', '00:00', '00:00'),
(32, 4, 'Vrijdag', '00:00', '00:00'),
(33, 4, 'Zaterdag', '00:00', '00:00'),
(34, 4, 'Zondag', '00:00', '00:00'),
(35, 5, 'Maandag', '00:00', '00:00'),
(36, 5, 'Dinsdag', '00:00', '00:00'),
(37, 5, 'Woensdag', '00:00', '00:00'),
(38, 5, 'Donderdag', '00:00', '00:00'),
(39, 5, 'Vrijdag', '00:00', '00:00'),
(40, 5, 'Zaterdag', '00:00', '00:00'),
(41, 5, 'Zondag', '00:00', '00:00');

-- --------------------------------------------------------

--
-- Table structure for table `producten`
--

CREATE TABLE IF NOT EXISTS `producten` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `productnaam` varchar(255) NOT NULL,
  `post_thumbnail` varchar(255) NOT NULL,
  `beschrijving` varchar(255) NOT NULL,
  `prijs` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `producten`
--

INSERT INTO `producten` (`id`, `productnaam`, `post_thumbnail`, `beschrijving`, `prijs`) VALUES
(2, 'Logo Product', 'assets/uploaded_images/logo-brandstof.png', 'test product', '20,10'),
(3, 'logo 2', 'assets/uploaded_images/logo-brandstof.png', 'logo2', '300,00');

-- --------------------------------------------------------

--
-- Table structure for table `rolmedewerker`
--

CREATE TABLE IF NOT EXISTS `rolmedewerker` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naam` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `naam` (`naam`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `rolmedewerker`
--

INSERT INTO `rolmedewerker` (`id`, `naam`) VALUES
(1, 'Filiaal-manager'),
(2, 'mederwerker');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
