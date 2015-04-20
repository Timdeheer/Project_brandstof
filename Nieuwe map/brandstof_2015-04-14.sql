# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.6.24)
# Database: brandstof
# Generation Time: 2015-04-14 23:13:36 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table fuel
# ------------------------------------------------------------

DROP TABLE IF EXISTS `fuel`;

CREATE TABLE `fuel` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `locatie_id` int(5) NOT NULL,
  `brandstof` varchar(50) NOT NULL,
  `prijzen` varchar(100) NOT NULL,
  `datum` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `fuel` WRITE;
/*!40000 ALTER TABLE `fuel` DISABLE KEYS */;

INSERT INTO `fuel` (`id`, `locatie_id`, `brandstof`, `prijzen`, `datum`)
VALUES
	(23,2,'euro95','3,25','2015-04-01 10:13:20'),
	(24,2,'diesel','2,95','2015-04-01 11:31:02'),
	(25,2,'diesel','3,00','2015-04-02 11:31:15'),
	(27,2,'diesel','1,50','2015-04-01 11:39:28'),
	(28,2,'diesel','5,00','2015-04-03 11:43:26'),
	(29,2,'diesel','2,00','2015-04-01 11:53:17'),
	(30,2,'diesel','1,24','2015-04-08 09:45:54'),
	(31,2,'diesel','1,24','2015-04-08 09:45:58'),
	(32,2,'diesel','1,24','2015-04-08 09:46:52'),
	(33,2,'diesel','1,24','2015-04-10 09:12:39'),
	(34,2,'diesel','1,24','2015-04-10 09:12:42'),
	(35,2,'diesel','1,24','2015-04-10 09:12:53'),
	(36,2,'diesel','1,24','2015-04-10 09:13:07'),
	(37,2,'euro95','1,53','2015-04-10 09:16:20'),
	(38,2,'euro95','1,53','2015-04-10 09:16:24'),
	(39,2,'euro95','1,53','2015-04-10 09:16:50'),
	(40,2,'lpg','0,83','2015-04-10 09:17:03'),
	(41,2,'lpg','0,83','2015-04-10 09:17:07'),
	(42,2,'lpg','0,83','2015-04-10 09:20:47'),
	(43,2,'lpg','0,83','2015-04-10 09:20:50'),
	(44,2,'lpg','0,83','2015-04-10 09:22:50'),
	(45,2,'lpg','0,83','2015-04-10 09:27:35'),
	(46,2,'lpg','0,83','2015-04-10 09:27:48'),
	(47,2,'lpg','0,83','2015-04-10 09:29:19'),
	(48,2,'lpg','0,83','2015-04-10 09:29:38'),
	(49,2,'lpg','0,83','2015-04-10 09:30:00'),
	(50,2,'lpg','0,83','2015-04-10 09:30:44'),
	(51,2,'lpg','0,93','2015-04-14 12:14:33'),
	(52,2,'lpg','0,93','2015-04-14 12:14:41'),
	(53,2,'euro95','1,60','2015-04-14 12:15:07'),
	(54,2,'euro95','1,60','2015-04-14 12:15:11'),
	(55,2,'euro95','1,60','2015-04-14 12:17:19'),
	(56,2,'diesel','1,35','2015-04-14 12:17:26'),
	(57,2,'diesel','1,35','2015-04-14 12:19:48'),
	(58,2,'euro95','1,60','2015-04-14 12:20:27'),
	(59,2,'euro95','1,60','2015-04-14 12:20:28'),
	(60,2,'euro95','1,60','2015-04-14 12:20:29'),
	(61,2,'','','2015-04-14 22:41:35'),
	(62,2,'','','2015-04-14 22:42:09'),
	(63,2,'euro95','','2015-04-14 22:42:14'),
	(64,2,'euro95','0,82','2015-04-14 22:42:25');

/*!40000 ALTER TABLE `fuel` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table gebruikers
# ------------------------------------------------------------

DROP TABLE IF EXISTS `gebruikers`;

CREATE TABLE `gebruikers` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `gebruikers` WRITE;
/*!40000 ALTER TABLE `gebruikers` DISABLE KEYS */;

INSERT INTO `gebruikers` (`id`, `gebruikersnaam`, `wachtwoord`, `naam`, `achternaam`, `rol`, `functie`, `locatie`)
VALUES
	(7,'beheerder','$2y$10$ekNJE/wLYnJVjuDMQOmCmODT8v6SyrhKBeqYJ9GWWmD','admin','developer','','1',0),
	(10,'jesse123','$2y$10$etxVkKyYg1QJRmdsOBN/Zex6hdgzuQ1iKa.z63Lwx7wdwSIthQDuu','jesse','koolhaas','designer','1',0),
	(11,'tim','$2y$10$RciGva5lGgDp5HxG/NTrue8Aob/LuFE7X2gkorWpnZ7LSfIbD8CBq','tim','de heer','Medewerker','',0),
	(12,'Yolanda1965','$2y$10$GH9xJlAasZ4rDc8KsuC5VeLkFpjA08xlQP32sbEaNfqFl9XHx3cUW','Yolanda ','Koolhaas','1','',2),
	(13,'jesse','$2y$10$GH9xJlAasZ4rDc8KsuC5VeLkFpjA08xlQP32sbEaNfqFl9XHx3cUW','Yolanda ','Koolhaas','1','',1),
	(22,'hummer','$2y$10$G0mcoYhIoDE1vJsOOBI9Nuo0V2Ifiv9LBx1XcyT0TDkJX2HnqHXtC','hummer','koolhaas','1','',1),
	(24,'beheerderjesse','$2y$10$sIetn2Df2.i0/qjr.2yOOOM0liVsrd5l0hzwNEZUETv0TCF2.BF1i','123','123','','1',2);

/*!40000 ALTER TABLE `gebruikers` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table locaties
# ------------------------------------------------------------

DROP TABLE IF EXISTS `locaties`;

CREATE TABLE `locaties` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `naam` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `naam` (`naam`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `locaties` WRITE;
/*!40000 ALTER TABLE `locaties` DISABLE KEYS */;

INSERT INTO `locaties` (`id`, `naam`)
VALUES
	(5,'Amsterdam'),
	(1,'Gouda'),
	(3,'Leiden'),
	(2,'Nieuwerkerk aan den IJssel'),
	(4,'Schollenvaar');

/*!40000 ALTER TABLE `locaties` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table locatietext
# ------------------------------------------------------------

DROP TABLE IF EXISTS `locatietext`;

CREATE TABLE `locatietext` (
  `id` int(10) NOT NULL DEFAULT '0',
  `logo` varchar(50) NOT NULL,
  `tekst` varchar(1000) NOT NULL,
  `locatie` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `locatietext` WRITE;
/*!40000 ALTER TABLE `locatietext` DISABLE KEYS */;

INSERT INTO `locatietext` (`id`, `logo`, `tekst`, `locatie`)
VALUES
	(0,'','Jaja het is zo veer we gaan het toch maar weer is proberen',1),
	(1,'','Jaja het is zo veer we gaan het toch maar weer is proberen',2),
	(2,'','Jaja het is zo veer we gaan het toch maar weer is proberen',3),
	(3,'','Jaja het is zo veer we gaan het toch maar weer is proberen',4),
	(4,'','Jaja het is zo veer we gaan het toch maar weer is proberen',5);

/*!40000 ALTER TABLE `locatietext` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table openingstijden
# ------------------------------------------------------------

DROP TABLE IF EXISTS `openingstijden`;

CREATE TABLE `openingstijden` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `locatieid` int(5) NOT NULL,
  `dag` varchar(50) NOT NULL,
  `vantijd` varchar(20) NOT NULL,
  `tottijd` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `openingstijden` WRITE;
/*!40000 ALTER TABLE `openingstijden` DISABLE KEYS */;

INSERT INTO `openingstijden` (`id`, `locatieid`, `dag`, `vantijd`, `tottijd`)
VALUES
	(7,2,'Maandag','00:00','00:00'),
	(8,2,'Dinsdag','00:00','00:00'),
	(9,2,'Woensdag','00:00','00:00'),
	(10,2,'Donderdag','00:00','00:00'),
	(11,2,'Vrijdag','00:00','00:00'),
	(12,2,'Zaterdag','00:00','00:00'),
	(13,2,'Zondag','12:00','13:00'),
	(14,1,'Maandag','00:00','00:00'),
	(15,1,'Dinsdag','00:00','00:00'),
	(16,1,'Woensdag','00:00','00:00'),
	(17,1,'Donderdag','00:00','00:00'),
	(18,1,'Vrijdag','00:00','00:00'),
	(19,1,'Zaterdag','00:00','00:00'),
	(20,1,'Zondag','00:00','00:00'),
	(21,3,'Maandag','00:00','00:00'),
	(22,3,'Dinsdag','00:00','00:00'),
	(23,3,'Woensdag','00:00','00:00'),
	(24,3,'Donderdag','00:00','00:00'),
	(25,3,'Vrijdag','00:00','00:00'),
	(26,3,'Zaterdag','00:00','00:00'),
	(27,3,'Zondag','00:00','00:00'),
	(28,4,'Maandag','00:00','00:00'),
	(29,4,'Dinsdag','00:00','00:00'),
	(30,4,'Woensdag','00:00','00:00'),
	(31,4,'Donderdag','00:00','00:00'),
	(32,4,'Vrijdag','00:00','00:00'),
	(33,4,'Zaterdag','00:00','00:00'),
	(34,4,'Zondag','00:00','00:00'),
	(35,5,'Maandag','00:00','00:00'),
	(36,5,'Dinsdag','00:00','00:00'),
	(37,5,'Woensdag','00:00','00:00'),
	(38,5,'Donderdag','00:00','00:00'),
	(39,5,'Vrijdag','00:00','00:00'),
	(40,5,'Zaterdag','00:00','00:00'),
	(41,5,'Zondag','00:00','00:00');

/*!40000 ALTER TABLE `openingstijden` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table rolmedewerker
# ------------------------------------------------------------

DROP TABLE IF EXISTS `rolmedewerker`;

CREATE TABLE `rolmedewerker` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naam` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `naam` (`naam`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `rolmedewerker` WRITE;
/*!40000 ALTER TABLE `rolmedewerker` DISABLE KEYS */;

INSERT INTO `rolmedewerker` (`id`, `naam`)
VALUES
	(1,'Filiaal-manager'),
	(2,'mederwerker');

/*!40000 ALTER TABLE `rolmedewerker` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
