-- MySQL dump 10.13  Distrib 5.6.20, for osx10.6 (x86_64)
--
-- Host: localhost    Database: speaker
-- ------------------------------------------------------
-- Server version	5.6.20

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(30) NOT NULL,
  `mdp` varchar(30) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'speaker','speaker33','administrateur');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categorie` (
  `id` int(10) unsigned NOT NULL,
  `categorie` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorie`
--

LOCK TABLES `categorie` WRITE;
/*!40000 ALTER TABLE `categorie` DISABLE KEYS */;
/*!40000 ALTER TABLE `categorie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(250) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `tel` varchar(50) DEFAULT NULL,
  `message` text,
  `newsletter` tinyint(4) NOT NULL DEFAULT '0',
  `fromgoldbook` tinyint(4) NOT NULL DEFAULT '0',
  `fromcontact` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3353 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact`
--

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` VALUES (3349,'','Xavier Gonzalez','fjavi.gonzalez@gmail.com',NULL,NULL,0,1,0),(3350,'0','fred lesca','fredericlesca@iconeo.fr',NULL,NULL,1,1,1),(3351,'asso','gonzalez','x@free.Fr',NULL,'sdfsdfsdfsf',1,0,1),(3352,'asso','Xavier Gonzalez','contact@iconeo.fr',NULL,'sdfsdf sdf sdf sdf',0,0,1);
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_categorie`
--

DROP TABLE IF EXISTS `contact_categorie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact_categorie` (
  `id_contact` int(11) unsigned NOT NULL,
  `id_categorie` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_categorie`
--

LOCK TABLES `contact_categorie` WRITE;
/*!40000 ALTER TABLE `contact_categorie` DISABLE KEYS */;
/*!40000 ALTER TABLE `contact_categorie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `goldbook`
--

DROP TABLE IF EXISTS `goldbook`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `goldbook` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `nom` varchar(250) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `message` text,
  `online` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `goldbook`
--

LOCK TABLES `goldbook` WRITE;
/*!40000 ALTER TABLE `goldbook` DISABLE KEYS */;
INSERT INTO `goldbook` VALUES (10,'2015-01-01 00:00:00','Virginie.B (Tresses)','no@no.no','Merci pour cette formation en anglais de 10 heures. J’ai de nouveau confiance en moi et j’ai réussi à me débrouiller en Cornouailles pendant mes vacances.\r\n\r\nJe reviendrai sans hésiter l’été prochain pour rafraîchir de nouveau mes connaissances en anglais.\r\n\r\nMerci été bon été.',1),(11,'2015-01-02 00:00:00','Tiffany.P (Bordeaux Bastide)','no@no.no','Grand merci pour cette année de remise à niveau en anglais. J’ai réussi mon épreuve écrite et orale au BAC avec de super notes et c’est vraiment grâce à ma formatrice.\r\n\r\nJe recommande à tous ceux désireux d’apprendre l’anglais ou de se perfectionner d’aller chez Speakers’ Corner, vous ne serez pas déçus!',1),(12,'2015-01-03 00:00:00','Patricia, maman d’Alexandre 6 ans. (Latresne)','no@no.no','Mon fils a suivi les ateliers d’anglais avec Speakers’ Corner et depuis il adore parler et chanter en anglais à la maison. Il reviendra sans hésiter au mois de septembre pour poursuivre son apprentissage. ',1),(13,'2015-01-04 00:00:00','Xavier Gonzalez (Latresne)','xavier@gonzalez.pm','Depuis 1 an mon fils de 6 ans suit les cours d’anglais après la classe avec Didier tous les jeudis, il est ravi de ce moment ludique et qui le sensibilise énormement à la langue Anglaise.\r\nJe l\'ai réinscrit cette année à sa demande! ',1);
/*!40000 ALTER TABLE `goldbook` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `goldbookpro`
--

DROP TABLE IF EXISTS `goldbookpro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `goldbookpro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `nom` varchar(250) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `message` text,
  `online` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `goldbookpro`
--

LOCK TABLES `goldbookpro` WRITE;
/*!40000 ALTER TABLE `goldbookpro` DISABLE KEYS */;
INSERT INTO `goldbookpro` VALUES (8,'2015-01-01 00:00:00','Pascal.T (Carignan de Bordeaux) ','no@no.no','Merci à Speakers’ Corner pour leur professionnalisme ! Après une formation de 40 heures en anglais des affaires j’ai finalement réussi mes entretiens d’embauche et ai décroché une place que je ne n’aurais pas pu espérer sans cette remise à niveau en anglais qui m’a redonné confiance.',1),(9,'2015-01-08 00:00:00','Elodie Barreau ( Bouliac)',' 	no@no.no','Un grand merci à la formatrice Adele qui a su parfaitement diagnostiquer mes besoins et me faire progresser. Je peux maintenant partir en conférence à l\'étranger et comprendre tout ce qui est dit et ainsi prendre part aux conversations et donner mon opinion sur les décisions collégiales. Bonne continuation et beaucoup de succès!',1);
/*!40000 ALTER TABLE `goldbookpro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `media_news`
--

DROP TABLE IF EXISTS `media_news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `media_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_news` int(11) NOT NULL,
  `url_media` varchar(250) NOT NULL,
  `url_apercu` varchar(250) NOT NULL,
  `type_media` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`,`id_news`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `media_news`
--

LOCK TABLES `media_news` WRITE;
/*!40000 ALTER TABLE `media_news` DISABLE KEYS */;
/*!40000 ALTER TABLE `media_news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `id_news` int(11) NOT NULL AUTO_INCREMENT,
  `type` tinyint(4) NOT NULL DEFAULT '0',
  `date_news` datetime NOT NULL,
  `titre` varchar(250) NOT NULL,
  `accroche` text,
  `contenu` text,
  PRIMARY KEY (`id_news`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (16,0,'2015-01-01 00:00:00','STAGE D’ANGLAIS TOUSSAINT ! Inscrivez vous !','22, 23, 24 octobre 2014 COLLÈGE ET LYCÉE LATRESNE ','<p><span class=\"texte-gris\"><img style=\"float: left;\" src=\"/uploads/drapeautrans.png\" alt=\"\" width=\"192\" height=\"108\" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><span class=\"texte-gris\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 9 heures de stage pour d&eacute;velopper les comp&eacute;tences orales de l&rsquo;anglais et revoir les points essentiels des programmes :</span></p>\r\n<p><span class=\"texte-gris\"><br />Un test de niveau d&eacute;terminera le groupe dans lequel l&rsquo;&eacute;l&egrave;ve travaillera </span></p>\r\n<ul class=\"list1\">\r\n<li class=\"pucePicto\">L&rsquo;EXPRESSION ORALE : jeux de r&ocirc;le, d&eacute;bats, animations.</li>\r\n<li class=\"pucePicto\">LA COMPREHENSION ORALE : podcasts &amp; vid&eacute;os.</li>\r\n<li class=\"pucePicto\">GRAMMAIRE : manipulations des temps&hellip;.en contexte.</li>\r\n</ul>\r\n<p><span class=\"texte-gris\"><strong>HORAIRES :</strong> <br /></span></p>\r\n<ul class=\"list1\">\r\n<li class=\"pucePicto\">Coll&egrave;ge 10h/13h</li>\r\n<li class=\"pucePicto\">Lyc&eacute;e 14h/16h</li>\r\n</ul>\r\n<p><span class=\"texte-gris\"><strong>INSCRIPTIONS ET RENSEIGNEMENTS </strong>: au 06 75 57 72 77<br /><br /> <strong>TARIF </strong>: 13&euro;/h par &eacute;tudiant</span></p>'),(17,0,'2015-01-14 00:00:00','NOUVEAUTÉ !','Cours à Bouliac mardi et jeudi 18h pour les primaires! ','<p>Cours &agrave; Bouliac mardi et jeudi 18h pour les primaires!</p>');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-01-22 10:58:34
