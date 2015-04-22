# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.6.24)
# Database: brandstof
# Generation Time: 2015-04-23 06:41:28 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table banners
# ------------------------------------------------------------

DROP TABLE IF EXISTS `banners`;

CREATE TABLE `banners` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `content` varchar(50) DEFAULT NULL,
  `post_thumbnail` varchar(100) DEFAULT NULL,
  `locatie_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `banners` WRITE;
/*!40000 ALTER TABLE `banners` DISABLE KEYS */;

INSERT INTO `banners` (`id`, `title`, `content`, `post_thumbnail`, `locatie_id`)
VALUES
	(1,NULL,NULL,'http://sites.local/school/brandstof/website/img/logo2.png',NULL);

/*!40000 ALTER TABLE `banners` ENABLE KEYS */;
UNLOCK TABLES;


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
	(23,2,'euro95','3,25','2015-04-01 03:13:20'),
	(24,2,'diesel','2,95','2015-04-01 04:31:02'),
	(25,2,'diesel','3,00','2015-04-02 04:31:15'),
	(27,2,'diesel','1,50','2015-04-01 04:39:28'),
	(28,2,'diesel','5,00','2015-04-03 04:43:26'),
	(29,2,'diesel','2,00','2015-04-01 04:53:17'),
	(30,2,'diesel','1,24','2015-04-08 02:45:54'),
	(31,2,'diesel','1,24','2015-04-08 02:45:58'),
	(32,2,'diesel','1,24','2015-04-08 02:46:52'),
	(33,2,'diesel','1,24','2015-04-10 02:12:39'),
	(34,2,'diesel','1,24','2015-04-10 02:12:42'),
	(35,2,'diesel','1,24','2015-04-10 02:12:53'),
	(36,2,'diesel','1,24','2015-04-10 02:13:07'),
	(37,2,'euro95','1,53','2015-04-10 02:16:20'),
	(38,2,'euro95','1,53','2015-04-10 02:16:24'),
	(39,2,'euro95','1,53','2015-04-10 02:16:50'),
	(40,2,'lpg','0,83','2015-04-10 02:17:03'),
	(41,2,'lpg','0,83','2015-04-10 02:17:07'),
	(42,2,'lpg','0,83','2015-04-10 02:20:47'),
	(43,2,'lpg','0,83','2015-04-10 02:20:50'),
	(44,2,'lpg','0,83','2015-04-10 02:22:50'),
	(45,2,'lpg','0,83','2015-04-10 02:27:35'),
	(46,2,'lpg','0,83','2015-04-10 02:27:48'),
	(47,2,'lpg','0,83','2015-04-10 02:29:19'),
	(48,2,'lpg','0,83','2015-04-10 02:29:38'),
	(49,2,'lpg','0,83','2015-04-10 02:30:00'),
	(50,2,'lpg','0,83','2015-04-10 02:30:44'),
	(51,2,'lpg','0,93','2015-04-14 05:14:33'),
	(52,2,'lpg','0,93','2015-04-14 05:14:41'),
	(53,2,'euro95','1,60','2015-04-14 05:15:07'),
	(54,2,'euro95','1,60','2015-04-14 05:15:11'),
	(55,2,'euro95','1,60','2015-04-14 05:17:19'),
	(56,2,'diesel','1,35','2015-04-14 05:17:26'),
	(57,2,'diesel','1,35','2015-04-14 05:19:48'),
	(58,2,'euro95','1,60','2015-04-14 05:20:27'),
	(59,2,'euro95','1,60','2015-04-14 05:20:28'),
	(60,2,'euro95','1,60','2015-04-14 05:20:29'),
	(61,2,'','','2015-04-14 15:41:35'),
	(62,2,'','','2015-04-14 15:42:09'),
	(63,2,'euro95','','2015-04-14 15:42:14'),
	(64,2,'euro95','0,82','2015-04-14 15:42:25'),
	(65,1,'euro95','0,12','2015-04-15 11:34:36'),
	(66,1,'diesel','0,50','2015-04-15 11:34:46'),
	(67,1,'lpg','1,53','2015-04-15 11:34:54'),
	(68,2,'diesel','','2015-04-21 13:27:14'),
	(69,2,'diesel','0,12','2015-04-21 13:27:25'),
	(70,2,'','','2015-04-21 13:38:37'),
	(71,2,'euro95','','2015-04-21 13:38:40'),
	(72,2,'euro95','0.31','2015-04-21 13:38:46'),
	(73,2,'euro95','2:30','2015-04-21 15:51:35'),
	(74,2,'','2,30','2015-04-21 15:51:40'),
	(75,2,'euro95','2,30','2015-04-21 15:51:47'),
	(76,2,'euro95','0,10','2015-04-22 14:07:10');

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
  `functie` varchar(10) NOT NULL DEFAULT '0',
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
	(22,'hummer','$2y$10$FZshpXKFIdEYrc1bsCKepOCMvrYZIQjGUduFctXbRYefjEzo5AhaG','hummer','koolhaas','1','',1),
	(24,'beheerderjesse','$2y$10$sIetn2Df2.i0/qjr.2yOOOM0liVsrd5l0hzwNEZUETv0TCF2.BF1i','123','123','','1',2);

/*!40000 ALTER TABLE `gebruikers` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table locaties
# ------------------------------------------------------------

DROP TABLE IF EXISTS `locaties`;

CREATE TABLE `locaties` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `naam` varchar(50) NOT NULL,
  `adres` varchar(20) DEFAULT NULL,
  `postcode` varchar(7) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `naam` (`naam`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `locaties` WRITE;
/*!40000 ALTER TABLE `locaties` DISABLE KEYS */;

INSERT INTO `locaties` (`id`, `naam`, `adres`, `postcode`)
VALUES
	(1,'Gouda',NULL,NULL),
	(2,'Nieuwerkerk aan den IJssel','Verbindingsweg 8','2914 LH'),
	(3,'Leiden',NULL,NULL),
	(4,'Schollenvaar',NULL,NULL),
	(5,'Amsterdam',NULL,NULL);

/*!40000 ALTER TABLE `locaties` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table locatietext
# ------------------------------------------------------------

DROP TABLE IF EXISTS `locatietext`;

CREATE TABLE `locatietext` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `tekst` varchar(1000) NOT NULL,
  `locatie` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `locatietext` WRITE;
/*!40000 ALTER TABLE `locatietext` DISABLE KEYS */;

INSERT INTO `locatietext` (`id`, `tekst`, `locatie`)
VALUES
	(1,'jaj',1),
	(2,'jaja',2),
	(3,'jaja',3),
	(4,'jaja',4),
	(5,'jaja',5);

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
	(7,2,'Maandag','12:30','22:00'),
	(8,2,'Dinsdag','09:30','22:30'),
	(9,2,'Woensdag','08:30','21:00'),
	(10,2,'Donderdag','07:00','22:00'),
	(11,2,'Vrijdag','08:00','21:00'),
	(12,2,'Zaterdag','10:00','22:00'),
	(13,2,'Zondag','12:00','22:00'),
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
