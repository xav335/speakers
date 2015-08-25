-- MySQL dump 10.13  Distrib 5.5.44, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: speaker
-- ------------------------------------------------------
-- Server version	5.5.44-0+deb8u1

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'speaker','speaker33','administrateur'),(2,'admin','admin33','Iconeo');
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
) ENGINE=InnoDB AUTO_INCREMENT=3365 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact`
--

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` VALUES (3353,'asso','Xavier Gonzalez','admin@iconeo.fr',NULL,'texte du test de mail',0,0,1),(3354,'asso','Gonzalez','xavier@gonzalez.pm',NULL,'Bonjour\r\navez vous reçu la validation de la société F-Secure pour les 60 heures de cours que nous devons commencer.\r\nJe serais dispo tous les jours en fin de matinée sauf le mercredi.\r\n\r\nMerci de tenir au courant\r\n\r\nXavier Gonzalez\r\n06 81 73 18 70',0,0,1),(3355,'asso','Arnaud','syndelle.arnaud@gmail.com',NULL,'Bonjour, \r\nJe suis étudiante en deuxième année de biologie et j\'aimerais avoir quelques renseignements sur les cours que vous dispensez. \r\nEn effet, en fac de biologie nous avons 2h d\'anglais par semaine mais je trouve cela insuffisant. J\'ai une assez bonne facilité de compréhension orale, je peux suivre une conversation mais en revanche j\'aimerais beaucoup amélioré mon expression orale que je trouve assez limité meme en ayant de bonnes bases ; je suis en niveau intermédiaire ce qui correspond à un niveau A2/B1 je pense. Je trouve qu\'on ne nous enseigne pàs assez l\'oral or j\'ai l\'intention d\'intègrer un master dont la deuxième année est en anglais, c\'est pour cette raison que je me tourne vers vous pour avoir quelques renseignement sur les cours que vous proposez. \r\n\r\nCordialement, \r\nMlle ARNAUD Syndelle ',0,0,1),(3356,'asso','DANG','dang.justine@gmail.com',NULL,'Bonjour,\r\n\r\nJe souhaiterais prendre des cours particuliers d\'anglais dans le cadre personnel. J\'ai 26 ans et suis actuellement à la recherche d\'un emploi qui nécessite une pratique quotidienne de l\'anglais.\r\n\r\nJ\'ai un bon niveau à l\'écrit mais je suis beaucoup moins à l\'aise à l\'oral. \r\n\r\nPourriez-vous m\'indiquer si vous êtes en mesure de satisfaire ma demande et si oui quels sont vos tarifs.\r\n\r\nDans l\'attente de votre retour.\r\n\r\nBien cordialement,\r\n\r\nJustine DANG',0,0,1),(3357,'asso','Caille','mireille.caille@orange.fr',NULL,'Bonjour adele,je voulais savoir si pendant la première semaine des vacances de Pâques  il y avait un stage de prévu pour ma petite fille qui est en cm1 et a 10 ans. Merci de ta reponse',0,0,1),(3358,'asso','CAID','f.cd@netcourrier.com',NULL,'Je suis le père d\'un lycéen en 2nde Julien né le 18/10/1999 qui doit partir cet été en Australie. Je souhaiterais savoir s\'il reste des places pour les stages de la semaine du 20 au 24 avril et connaître les modalités d\'inscription et de l\'évaluation pour le niveau du participant ?\r\nPourriez vous me renvoyer les éléments par mail ?\r\nCordialement.\r\nM. Caïd\r\n',0,0,1),(3359,'asso','gateau','aureliasautereau@free.fr',NULL,'Bonjour Adèle \r\npour confirmer l\'inscription de victoire je vous renvoi un chèque de quel montant et à quelle adresse ?\r\ncdlt\r\nA Gateau',0,0,1),(3360,'asso','Bonjour,','',NULL,'',0,0,1),(3361,'asso','','',NULL,'Bonjour,\r\n\r\nAvez-vous prévu une date d\'inscription pour la rentrée de septembre (informations, tarifs, adhésion,..) ?\r\n\r\nJe serai intéressée et souhaiterai avoir des informations complémentaires.\r\n\r\nMerci par avance.\r\n\r\nMarjorie Massiasse\r\n06.24.31.04.55',0,0,1),(3362,'asso','Taudin','chevaillec@gmail.com',NULL,'Bonjour,\r\n\r\nJ\'aimerais que ma fille Maiya née en Janvier 2012 puisse apprendre l\'anglais. J\'ai vu que vous proposez des cours pour les enfants dès 4 ans et je suis intéressée. Je voudrais savoir de quel date à quelle date sont les sessions ? c\'est à dire, est ce que ça fonctionne comme pour les écoles : cours de septembre à septembre avec un arrêt pour chaque vacances scolaires ou est-ce que l\'on peut commencer quand on veut ou est-ce de Janvier à Décembre? Aussi, vu qu\'elle est née en Janvier 2012 pourriez vous m\'indiquer à quel moment je pourrais la faire commencer. Merci aussi, de bien vouloir m\'indiquer le tarif on me précisant si il s\'agit d\'un tarif à l\'année, par cours ou autre. Autrement dit, est-ce qu\'il n\'y a que la formule à l\'année ou est-il possible de faire autrement? Enfin, y a t-il des cours d\'essais pour voir si cela convient ou pas à l\'enfant avant de s\'inscrire définitivement?, et est-ce que les parents peuvent assister au cours (tout du moins aux premiers cours) pour voir comment cela se passe?\r\nDans l\'attente de vos réponses à mes questions, je vous souhaite une bonne journée.\r\nCordialement,\r\nMme taudin',0,0,1),(3363,'asso','abbas','marinaabbas@yahoo.fr',NULL,'Bonjour,\r\n\r\nJe suis interessée par l\'inscription de mes 2 enfants qui ont 9 ans et 6 ans (2006 et 2009) le mercredi.\r\n\r\nMes enfants fréquentant une école privée, ils n\'ont pas cours le mercredi matin aussi je me demandais si vous aviez des cours à ce moment là.\r\n\r\nSinon, quels sont les cours de disponibles le mercredi après midi.\r\n\r\nQuel est le prix ? Et comment s\'inscrire (la fiche d\'inscription sur votre site indique 2014/2015) ?\r\n\r\nVous pouvez me joindre au 0618284140\r\n\r\nBien cordialement',0,0,1),(3364,'asso','moreau','seznec1@orange.fr',NULL,'bonjour\r\npouvez- vous me renseigner sur les formules que vous proposez  à un enfant de 10 ans à partir de la rentrée ?\r\ncordialement\r\n',0,0,1);
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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
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
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (16,0,'2015-01-01 00:00:00','STAGE D’ANGLAIS TOUSSAINT ! Inscrivez vous !','22, 23, 24 octobre 2014 COLLÈGE ET LYCÉE LATRESNE ','<p><span class=\"texte-gris\"><img style=\"float: left;\" src=\"/uploads/drapeautrans.png\" alt=\"\" width=\"192\" height=\"108\" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><span class=\"texte-gris\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 9 heures de stage pour d&eacute;velopper les comp&eacute;tences orales de l&rsquo;anglais et revoir les points essentiels des programmes :</span></p>\r\n<p><span class=\"texte-gris\"><br />Un test de niveau d&eacute;terminera le groupe dans lequel l&rsquo;&eacute;l&egrave;ve travaillera </span></p>\r\n<ul class=\"list1\">\r\n<li class=\"pucePicto\">L&rsquo;EXPRESSION ORALE : jeux de r&ocirc;le, d&eacute;bats, animations.</li>\r\n<li class=\"pucePicto\">LA COMPREHENSION ORALE : podcasts &amp; vid&eacute;os.</li>\r\n<li class=\"pucePicto\">GRAMMAIRE : manipulations des temps&hellip;.en contexte.</li>\r\n</ul>\r\n<p><span class=\"texte-gris\"><strong>HORAIRES :</strong> <br /></span></p>\r\n<ul class=\"list1\">\r\n<li class=\"pucePicto\">Coll&egrave;ge 10h/13h</li>\r\n<li class=\"pucePicto\">Lyc&eacute;e 14h/16h</li>\r\n</ul>\r\n<p><span class=\"texte-gris\"><strong>INSCRIPTIONS ET RENSEIGNEMENTS </strong>: au 06 75 57 72 77<br /><br /> <strong>TARIF </strong>: 13&euro;/h par &eacute;tudiant</span></p>'),(17,0,'2015-01-14 00:00:00','NOUVEAUTÉ !','Cours à Bouliac mardi et jeudi 18h pour les primaires! ','<p>Cours &agrave; Bouliac mardi et jeudi 18h pour les primaires!</p>'),(18,0,'2015-07-02 00:00:00','STAGE D’ANGLAIS Collège & lycée Latresne','STAGE D’ANGLAIS les 13,15,16,17 juillet 2015 \r\nCollège & lycée Latresne.','<p>8 heures de stage pour d&eacute;velopper les comp&eacute;tences orales de l&rsquo;anglais et revoir les points essentiels des programmes :</p>\r\n<p><br />- EXPRESSION ORALE : jeux de r&ocirc;le, d&eacute;bats, animations.<br /><br />- COMPREHENSION ORALE : podcasts &amp; vid&eacute;os.<br /><br />- GRAMMAIRE : manipulations des temps....en contexte.<br /><br />Un test de niveau d&eacute;terminera le groupe dans lequel l&rsquo;&eacute;l&egrave;ve <br /><br />travaillera.<br />&nbsp;</p>\r\n<p><strong><span style=\"text-decoration: underline;\">HORAIRES</span></strong><strong> : </strong> &nbsp;&nbsp;&nbsp; -&nbsp;&nbsp; COLLEGE&nbsp;: 9h30/12h30&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -&nbsp;&nbsp; LYCEE&nbsp;: 13h30/ 16h30.</p>\r\n<p>&nbsp;</p>\r\n<p><strong><span style=\"text-decoration: underline;\">TARIFS</span></strong><strong>&nbsp;:&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>13&euro;/h par &eacute;tudiant.</p>\r\n<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong></p>\r\n<p><strong><span style=\"text-decoration: underline;\">INSCRIPTIONS et RENSEIGNEMENTS</span></strong><strong> :&nbsp; 06 75 57 72 77</strong></p>'),(19,0,'2015-04-01 00:00:00','ATELIER DE PAQUES','L’atelier thématique en anglais de Pâques aura lieu le mercredi 1er avril à 15h','<p>L&rsquo;atelier th&eacute;matique en anglais de P&acirc;ques aura lieu le mercredi 1er avril &agrave; 15h &agrave; la maison des associations de Latresne.<br /><strong>R&eacute;ponse des parents indispensable avant le vendredi 27 mars</strong> (achat du mat&eacute;riel le samedi 28 au matin) uniquement par mail &agrave; <a href=\"mailto:aplanteur@gmail.com\">aplanteur@gmail.com</a></p>\r\n<p><img src=\"/uploads/Screen_Shot_2015_03_26_at_21.02.18.png\" alt=\"\" width=\"345\" height=\"258\" /></p>');
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

-- Dump completed on 2015-08-25 11:41:29
