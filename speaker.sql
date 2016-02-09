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
) ENGINE=InnoDB AUTO_INCREMENT=3384 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact`
--

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` VALUES (3353,'asso','Xavier Gonzalez','admin@iconeo.fr',NULL,'texte du test de mail',0,0,1),(3354,'asso','Gonzalez','xavier@gonzalez.pm',NULL,'Bonjour\r\navez vous reçu la validation de la société F-Secure pour les 60 heures de cours que nous devons commencer.\r\nJe serais dispo tous les jours en fin de matinée sauf le mercredi.\r\n\r\nMerci de tenir au courant\r\n\r\nXavier Gonzalez\r\n06 81 73 18 70',0,0,1),(3355,'asso','Arnaud','syndelle.arnaud@gmail.com',NULL,'Bonjour, \r\nJe suis étudiante en deuxième année de biologie et j\'aimerais avoir quelques renseignements sur les cours que vous dispensez. \r\nEn effet, en fac de biologie nous avons 2h d\'anglais par semaine mais je trouve cela insuffisant. J\'ai une assez bonne facilité de compréhension orale, je peux suivre une conversation mais en revanche j\'aimerais beaucoup amélioré mon expression orale que je trouve assez limité meme en ayant de bonnes bases ; je suis en niveau intermédiaire ce qui correspond à un niveau A2/B1 je pense. Je trouve qu\'on ne nous enseigne pàs assez l\'oral or j\'ai l\'intention d\'intègrer un master dont la deuxième année est en anglais, c\'est pour cette raison que je me tourne vers vous pour avoir quelques renseignement sur les cours que vous proposez. \r\n\r\nCordialement, \r\nMlle ARNAUD Syndelle ',0,0,1),(3356,'asso','DANG','dang.justine@gmail.com',NULL,'Bonjour,\r\n\r\nJe souhaiterais prendre des cours particuliers d\'anglais dans le cadre personnel. J\'ai 26 ans et suis actuellement à la recherche d\'un emploi qui nécessite une pratique quotidienne de l\'anglais.\r\n\r\nJ\'ai un bon niveau à l\'écrit mais je suis beaucoup moins à l\'aise à l\'oral. \r\n\r\nPourriez-vous m\'indiquer si vous êtes en mesure de satisfaire ma demande et si oui quels sont vos tarifs.\r\n\r\nDans l\'attente de votre retour.\r\n\r\nBien cordialement,\r\n\r\nJustine DANG',0,0,1),(3357,'asso','Caille','mireille.caille@orange.fr',NULL,'Bonjour adele,je voulais savoir si pendant la première semaine des vacances de Pâques  il y avait un stage de prévu pour ma petite fille qui est en cm1 et a 10 ans. Merci de ta reponse',0,0,1),(3358,'asso','CAID','f.cd@netcourrier.com',NULL,'Je suis le père d\'un lycéen en 2nde Julien né le 18/10/1999 qui doit partir cet été en Australie. Je souhaiterais savoir s\'il reste des places pour les stages de la semaine du 20 au 24 avril et connaître les modalités d\'inscription et de l\'évaluation pour le niveau du participant ?\r\nPourriez vous me renvoyer les éléments par mail ?\r\nCordialement.\r\nM. Caïd\r\n',0,0,1),(3359,'asso','gateau','aureliasautereau@free.fr',NULL,'Bonjour Adèle \r\npour confirmer l\'inscription de victoire je vous renvoi un chèque de quel montant et à quelle adresse ?\r\ncdlt\r\nA Gateau',0,0,1),(3360,'asso','Bonjour,','',NULL,'',0,0,1),(3361,'asso','','',NULL,'Bonjour,\r\n\r\nAvez-vous prévu une date d\'inscription pour la rentrée de septembre (informations, tarifs, adhésion,..) ?\r\n\r\nJe serai intéressée et souhaiterai avoir des informations complémentaires.\r\n\r\nMerci par avance.\r\n\r\nMarjorie Massiasse\r\n06.24.31.04.55',0,0,1),(3362,'asso','Taudin','chevaillec@gmail.com',NULL,'Bonjour,\r\n\r\nJ\'aimerais que ma fille Maiya née en Janvier 2012 puisse apprendre l\'anglais. J\'ai vu que vous proposez des cours pour les enfants dès 4 ans et je suis intéressée. Je voudrais savoir de quel date à quelle date sont les sessions ? c\'est à dire, est ce que ça fonctionne comme pour les écoles : cours de septembre à septembre avec un arrêt pour chaque vacances scolaires ou est-ce que l\'on peut commencer quand on veut ou est-ce de Janvier à Décembre? Aussi, vu qu\'elle est née en Janvier 2012 pourriez vous m\'indiquer à quel moment je pourrais la faire commencer. Merci aussi, de bien vouloir m\'indiquer le tarif on me précisant si il s\'agit d\'un tarif à l\'année, par cours ou autre. Autrement dit, est-ce qu\'il n\'y a que la formule à l\'année ou est-il possible de faire autrement? Enfin, y a t-il des cours d\'essais pour voir si cela convient ou pas à l\'enfant avant de s\'inscrire définitivement?, et est-ce que les parents peuvent assister au cours (tout du moins aux premiers cours) pour voir comment cela se passe?\r\nDans l\'attente de vos réponses à mes questions, je vous souhaite une bonne journée.\r\nCordialement,\r\nMme taudin',0,0,1),(3363,'asso','abbas','marinaabbas@yahoo.fr',NULL,'Bonjour,\r\n\r\nJe suis interessée par l\'inscription de mes 2 enfants qui ont 9 ans et 6 ans (2006 et 2009) le mercredi.\r\n\r\nMes enfants fréquentant une école privée, ils n\'ont pas cours le mercredi matin aussi je me demandais si vous aviez des cours à ce moment là.\r\n\r\nSinon, quels sont les cours de disponibles le mercredi après midi.\r\n\r\nQuel est le prix ? Et comment s\'inscrire (la fiche d\'inscription sur votre site indique 2014/2015) ?\r\n\r\nVous pouvez me joindre au 0618284140\r\n\r\nBien cordialement',0,0,1),(3364,'asso','moreau','seznec1@orange.fr',NULL,'bonjour\r\npouvez- vous me renseigner sur les formules que vous proposez  à un enfant de 10 ans à partir de la rentrée ?\r\ncordialement\r\n',0,0,1),(3365,'asso','Ortiz','eugenieortiz@hotmail.com',NULL,'Bonjour\r\n\r\nJe souhaiterais avoir des renseignements sur les cours d\'anglais pour un enfant en CP et un en CE1 a l\'école de Latresne. Prix? Horaire ? Durée ?\r\n\r\nDans l\'attente de vous lire\r\n\r\nEugenie ortiz',0,0,1),(3366,'asso','Paulmier','paulmier.marie@gmail.com',NULL,'Bonjour,\r\nMa fille commence tout juste sa première année de maternelle (petite section donc). Elle aura 3 ans au mois de novembre.\r\nPeut-elle bénéficier d\'un de vos ateliers étant donné qu\'elle n\'a pas encore trois ans ?\r\nDe plus, peux-on décider de l\'inscrire une semaine sur deux ou occasionnellement ou bien une fois inscrit c\'est hebdomadaire?\r\nBien cordialement',0,0,1),(3367,'asso','Stafford','simonericg@hotmail.com',NULL,'Hello, I am 54 years old , I was born in Lincolnshire, studied English lit. and History in Liverpool  before spending 20 years in London where I met my Partner Anne Beatrice . We have a house in Madirac and two small children here. I regularly fly to the UK to visit my oldest daughter in London and also to help with the care of my parents in Lincs. \r\nI am looking for other stimulation to complement  working on the land around our house and I wonder if you would have any opportunities for a person like me! I did manage to scrape a Preparatory Certificate In TEFEL at International House in London during the 80\'s and did small amounts of teaching for cash .\r\nI am afraid my CV is on my Macbook which has crashed ,awaiting repairs! \r\nI confess my French language skills are very poor,but my children here are going to be bilingual partly due to my shortcomings. \r\nThanks for reading this and I hope to hear from you soon,\r\n\r\nSimon Stafford \r\n\r\n\r\n\r\n',0,0,1),(3368,'asso','THANAS','val.thanas@orange.fr',NULL,'Bonjour,\r\n\r\nje souhaiterai inscrire ma fille Lou  qui vient de rentrer en CE1 le mercredi après midi;y-a-t\'il encore de la place pour cet horaire?\r\nMerci pour votre réponse,\r\nValérie THANAS.',0,0,1),(3369,'asso','THOMERET','nathalie.garcia.33@orange.fr',NULL,'bonjour\r\n\r\nJe dois vous faire un chèque pour l\'inscription au cours de mon fils MORGAN THOMERET ce2, je ne sais pas quel montant je dois faire ??\r\n25 euros +396 euros ?\r\nou seulement 396 euros ?\r\nje vous remercie pour votre réponse je déposerai le chèque dans la boite aux lettres\r\ncordialement, Nathalie thomeret',0,0,1),(3370,'asso','Laffon','ec.laffon@orange.fr',NULL,'',0,0,1),(3371,'asso','Laffon','ec.laffon@orange.fr',NULL,'Bonjour,\r\n\r\nje vous contacte pour avoir des renseignements sur les cours pour ma fille Maeva, actuellement en CM2. \r\nEst-il possible de faire un cours d\'essai avant de procéder a l\'inscription ?\r\nElle n\'a jamais pris de cours d\'anglais, est-ce que vous réalisez les groupes en fonction du niveau ou de l\'âge ?\r\nOù se passe les cours ? Elle est à l\'école élémentaire de latresne, je crois que vous les récupérez apres l\'école mais où doit-on les récupérer ?\r\nMerci de votre réponse.\r\n\r\nCordialement, \r\nEmilie LAFFON \r\n',0,0,1),(3372,'asso','GUEGAN ','fguegan53@gmail.com',NULL,'Bonjour,\r\nJ\'aimerais prendre des cours d\'anglais en cours individuel. Quelles sont les disponibilités? Cordialement. F. Guégan',0,0,1),(3373,'asso','chassagne','delphgreil@yahoo.fr',NULL,'Bonjour, \r\nMaman de Marius 6 ans qui est scolarisé au Jardin des enfants de Latresne, \r\nje souhaiterai savoir s\'il est encore possible de l\'inscrire pour le cours du lundi 16h qui correspond à priori à son âge.\r\nDans l\'attente de votre retour \r\nBien cordialement\r\nDelphine Chassagne',0,0,1),(3374,'asso','GUEGAN ','fguegan53@gmail.com',NULL,'Bonjour,\r\nJ\'aimerais prendre des cours d\'anglais en cours individuel. Quelles sont les disponibilités? Cordialement. F. Guégan',0,0,1),(3375,'asso','Van Notsel','fanny.vannotsel@free.fr',NULL,'Bonjour,\r\n\r\nFaites-vous des cours à domicile ? J\'ai 2 filles de 3 et 5 ans, dont celles de 5 ans qui souhaiterait \"parler\" anglais, mais les cours collectifs du mercredi après-midi ne sont pas possible dans notre emploi du temps familial.\r\nCordialement.\r\nStéphanie Van Notsel',0,0,1),(3376,'asso','Wolff','mailcarolinewolff@gmail.com',NULL,'Bonjour \r\n\r\nJ ai vu que vous proposiez une initiation a l anglais \r\nJ ai un petit garçon de 3 ans et demi \r\nJe souhaiterais savoir si vous avez encore de la place le samedi matin et les tarifs \r\nMerci d avance \r\n\r\nBien cdt ',0,0,1),(3377,'asso','Renseignements','',NULL,'',0,0,1),(3378,'asso','percereau','melou_37@hotmail.fr',NULL,'Bonjour\r\n\r\nje souhaiterais suivre une formation en anglais  (général/commercial) dans le cadre du CPF. je possède un niveau faux débutant . j\'aimerais faire la formation en petit groupe, travailler la grammaire, le vocabulaire, l\'expression écrite et orale.\r\nMerci de me contacter pour me présenter la formation la mieux adaptée .\r\n\r\ncordialement,\r\n\r\nMélanie',0,0,1),(3379,'asso','TEISSIER','teissierandco@yahoo.fr',NULL,'Bonjour,\r\n\r\nJe souhaiterai trouver quelques heures d\'anglais pour remise à niveau pour ma fille de 12 ans scolarisée en 5e. Sur deux jours voire trois maxi. Et dans un groupe très restreint. Qu\'avez vous à me proposer ? Merci d\'avance.\r\nBien cordialement,\r\n\r\nCarole Teissier',0,0,1),(3380,'asso','Dubon','',NULL,'',0,0,1),(3381,'asso','Dubon','daniel.dubon@bbox.fr',NULL,'Bonjour  pouvez vous m\'indiquer si des stages sont organisés pendant les vacances de février ? En vous remerciant Mme Dubon\r\n',0,0,1),(3382,'asso','MARQUIS SEBIE','nmarquissebie@midas-europe.com',NULL,'Bonjour,\r\nJ\'ai besoin de progresser en anglais pour des raisons professionnelles. Je recherche des cours individuels à des horaires variables compte tenu d\'un emploi du temps un peu compliqué. Auriez vous une formule à me proposer?\r\nMon, niveau actuel est en théorie intermédiate..',0,0,1),(3383,'asso','LAURENT','nathalie.laurent4@wanadoo.fr',NULL,'Bonjour\r\nje souhaiterai prendre des cours particuliers pour mon fils (actuellement en troisième) pour améliorer sa compréhension orale en Anglais.\r\nPuis je savoir s\'il vous reste de  la disponibilité ?  Sur quels créneaux horaires ? Donnez vous les cours à domicile ?\r\nCes cours sont ils déductibles des impôts ?\r\nJe vous remercie par avance.\r\nCordialement,\r\nNathalie Laurent',0,0,1);
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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `goldbook`
--

LOCK TABLES `goldbook` WRITE;
/*!40000 ALTER TABLE `goldbook` DISABLE KEYS */;
INSERT INTO `goldbook` VALUES (10,'2015-01-01 00:00:00','Virginie.B (Tresses)','no@no.no','Merci pour cette formation en anglais de 10 heures. J’ai de nouveau confiance en moi et j’ai réussi à me débrouiller en Cornouailles pendant mes vacances.\r\n\r\nJe reviendrai sans hésiter l’été prochain pour rafraîchir de nouveau mes connaissances en anglais.\r\n\r\nMerci été bon été.',1),(11,'2015-01-02 00:00:00','Tiffany.P (Bordeaux Bastide)','no@no.no','Grand merci pour cette année de remise à niveau en anglais. J’ai réussi mon épreuve écrite et orale au BAC avec de super notes et c’est vraiment grâce à ma formatrice.\r\n\r\nJe recommande à tous ceux désireux d’apprendre l’anglais ou de se perfectionner d’aller chez Speakers’ Corner, vous ne serez pas déçus!',1),(12,'2015-01-03 00:00:00','Patricia, maman d’Alexandre 6 ans. (Latresne)','no@no.no','Mon fils a suivi les ateliers d’anglais avec Speakers’ Corner et depuis il adore parler et chanter en anglais à la maison. Il reviendra sans hésiter au mois de septembre pour poursuivre son apprentissage. ',1),(13,'2015-01-04 00:00:00','Xavier Gonzalez (Latresne)','xavier@gonzalez.pm','Depuis 1 an mon fils de 6 ans suit les cours d’anglais après la classe avec Didier tous les jeudis, il est ravi de ce moment ludique et qui le sensibilise énormement à la langue Anglaise.\r\nJe l\'ai réinscrit cette année à sa demande! ',1),(14,'2015-07-01 00:00:00','Pichon Emilie','apichon@hotmail.com','formidable année d\'apprentissage! Les ateliers de conversation adultes avec Adele et Paul sont vraiment bien pensés et animés de mains de maîtres! Vraiment hâte de faire ma rentrée avec eux!',1);
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
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (20,0,'2015-09-01 00:00:00','Rentrée septembre 2015 ','Coup d\'envoi de la nouvelle saison lundi 14 Septembre!','<h3><span style=\"color: #ff0000;\">Reprise&nbsp;des ateliers adultes, enfants et professionels (DIF et CPF) &nbsp;le lundi 14 septembre &agrave; Latresne. </span></h3>\r\n<h3><span style=\"color: #ff0000;\">Inscriptions au forum du 5/09 &agrave; la salle des f&ecirc;tes de Latresne de 9h &agrave; 13h ou au 06 75 57 72 77. </span></h3>\r\n<h3><span style=\"color: #ff0000;\">Fiches d\'inscriptions t&eacute;l&eacute;chargeables sur le site. See you soon!</span></h3>'),(21,1,'2015-09-01 00:00:00','Validez vos formations en anglais par le CPF ( Compte Personnel de Formation)','Tous nos formations professionnelles en anglais sont éligibles dans le cadre du CPF anciennement DIF! Venez vous perfectionner et valider vos connaissances par une certification internationale!','');
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

-- Dump completed on 2016-02-09 22:45:51
