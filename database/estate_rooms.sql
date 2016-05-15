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
-- Table structure for table `rooms`
--

DROP TABLE IF EXISTS `rooms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rooms` (
  `propertyID` int(11) NOT NULL AUTO_INCREMENT,
  `street` varchar(45) DEFAULT NULL,
  `town` varchar(45) DEFAULT NULL,
  `postcode` varchar(45) DEFAULT NULL,
  `county` varchar(45) DEFAULT NULL,
  `parking` varchar(45) DEFAULT NULL,
  `ready` varchar(45) DEFAULT NULL,
  `space` varchar(45) DEFAULT NULL,
  `roomavailable` varchar(45) DEFAULT NULL,
  `roomsize` varchar(45) DEFAULT NULL,
  `price` varchar(45) DEFAULT NULL,
  `deposit` varchar(45) DEFAULT NULL,
  `petsallowed` varchar(45) DEFAULT NULL,
  `minimumcontract` varchar(45) DEFAULT NULL,
  `smoaking` varchar(45) DEFAULT NULL,
  `couple` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  `image1` varchar(45) DEFAULT NULL,
  `enabled` varchar(45) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `created` varchar(45) DEFAULT NULL,
  `userID` int(45) DEFAULT NULL,
  PRIMARY KEY (`propertyID`),
  UNIQUE KEY `propertyID_UNIQUE` (`propertyID`)
) ENGINE=InnoDB AUTO_INCREMENT=194 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rooms`
--

LOCK TABLES `rooms` WRITE;
/*!40000 ALTER TABLE `rooms` DISABLE KEYS */;
INSERT INTO `rooms` VALUES (193,'76 clarket cresent','Normanton','wf133ps',NULL,'Street parking','Furnished','Please select...','1','single','300',NULL,'Please select','Please select','Yes','Yes','','','','Please select...','2016-03-10',35);
/*!40000 ALTER TABLE `rooms` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-05-15 22:04:16
