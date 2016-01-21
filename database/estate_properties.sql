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
  `description` varchar(45) DEFAULT NULL,
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
INSERT INTO `properties` VALUES (144,'House','New house for to sell','26 low road','','wf13 3ps','Dewsbury','10000',3,NULL,2016,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(145,'Flat','weqe','7 a lane',NULL,'wf24 rg','Wakefield','20000',2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(146,'Flat','werewr','8 b lane',NULL,'wf35 rd','Wakefield','30000',3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(147,'Flat','erewr','9 c lane',NULL,'3432','Wakefield','25000',3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(162,'Bungalows','This is newely built house. It is an excellen','Door Lane','','WF13 3PS','Leeds','60000',5,NULL,2016,NULL,'',NULL,NULL,'Kitchen(galley)','10','5','Garage','Balcony');
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

-- Dump completed on 2016-01-21 22:41:04
