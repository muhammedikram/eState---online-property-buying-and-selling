-- MySQL dump 10.13  Distrib 5.7.9, for Win64 (x86_64)
--
-- Host: localhost    Database: estate
-- ------------------------------------------------------
-- Server version	5.5.46-0ubuntu0.12.04.2

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
-- Table structure for table `properties`
--

DROP TABLE IF EXISTS `properties`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `properties` (
  `propertyID` int(20) NOT NULL DEFAULT '0',
  `type` varchar(45) DEFAULT NULL,
  `description` text,
  `street` varchar(45) DEFAULT NULL,
  `county` varchar(45) DEFAULT NULL,
  `postcode` varchar(45) DEFAULT NULL,
  `town` varchar(45) DEFAULT NULL,
  `price` varchar(45) DEFAULT NULL,
  `bedroom` int(11) DEFAULT NULL,
  `idimages` int(11) DEFAULT NULL,
  `created` int(20) DEFAULT NULL,
  `enabled` varchar(45) DEFAULT NULL,
  `image1` varchar(45) DEFAULT NULL,
  `image2` varchar(45) DEFAULT NULL,
  `image3` varchar(45) DEFAULT NULL,
  `kitchen` varchar(45) DEFAULT NULL,
  `reception` varchar(45) DEFAULT NULL,
  `bathroom` varchar(45) DEFAULT NULL,
  `parking` varchar(45) DEFAULT NULL,
  `space` varchar(45) DEFAULT NULL,
  `purpose` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`propertyID`),
  KEY `fk_propertylines_idx` (`type`),
  KEY `hg_idx` (`price`),
  KEY `prices_idx` (`bedroom`),
  KEY `images_idx` (`idimages`),
  CONSTRAINT `images` FOREIGN KEY (`idimages`) REFERENCES `images` (`idimages`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `properties`
--

LOCK TABLES `properties` WRITE;
/*!40000 ALTER TABLE `properties` DISABLE KEYS */;
INSERT INTO `properties` VALUES (114,'Bungalows','heating','76 clarket cresent','','wf133ps','Normanton','50000',3,NULL,2016,'1','download.jpg',NULL,NULL,'Kitchen/Dinner','6','2','Street parking','Patio','Sell'),(129,'house','Super house ','78 clarket cresent',NULL,'wf133ps','Dewsbury','76000',3,NULL,2016,'1','download.jpg',NULL,NULL,'Kitchen/Dinner','1','1','Street parking','Roof Terrace','sell'),(136,'House','2 bed room house, located next to all service','43 Craven Road','','wf133ps','leeds','60000',2,NULL,2016,'1','download.jpg',NULL,NULL,'Kitchen(Seperate)','1','1','Street parking','None','rent'),(151,'House','djfhaofhdjashf;skhs;ofeha\'fheOWh','88 low road','','wf133ps','dewsbury','90000',3,NULL,NULL,'1','arc-wise.png',NULL,NULL,'Kitchen(Seperate)','1','2','Street parking','Patio','sell'),(154,'Please select...','','huvdfbdss street',NULL,'wf133ps','huddesfield','',0,NULL,2016,'0','',NULL,NULL,'Please select...','Please select...','Please select...','Please select...','Please select...',NULL),(184,'Please select...','','mghjg','','th','dgnf','',0,NULL,2016,'1','',NULL,NULL,'Please select...','Please select...','Please select...','Please select...','Please select...',NULL);
/*!40000 ALTER TABLE `properties` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-05-15 22:04:22
