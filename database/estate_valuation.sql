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
-- Table structure for table `valuation`
--

DROP TABLE IF EXISTS `valuation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `valuation` (
  `valuationID` int(11) NOT NULL AUTO_INCREMENT,
  `propertyID` varchar(45) DEFAULT NULL,
  `date` varchar(45) DEFAULT NULL,
  `enabled` varchar(45) DEFAULT NULL,
  `userID` varchar(45) DEFAULT NULL,
  `street` varchar(45) DEFAULT NULL,
  `postcode` varchar(45) DEFAULT NULL,
  `town` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`valuationID`),
  KEY `d_idx` (`propertyID`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `valuation`
--

LOCK TABLES `valuation` WRITE;
/*!40000 ALTER TABLE `valuation` DISABLE KEYS */;
INSERT INTO `valuation` VALUES (11,'151','30-03-16','1','33','96  LOW ROAD','wf133ps','Dewsbury'),(12,'136','30-03-16','1','33','43 Craven Road','wf133ps','leeds'),(13,'114','30-03-16','1','46','76 clarket cresent','wf133ps','Normanton'),(14,'129','09-04-16','1','35','78 clarket cresent','wf133ps','Dewsbury'),(15,'178','22-04-16','1','35','mghjg','th','dgnf'),(16,'140','29-04-16','0','35','76 clarket cresent','wf133ps','Normanton'),(17,'151','11-05-16','0','48','88 low road','wf133ps','dewsbury');
/*!40000 ALTER TABLE `valuation` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-05-15 22:04:21
