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
-- Table structure for table `viewings`
--

DROP TABLE IF EXISTS `viewings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `viewings` (
  `viewingID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `propertyID` int(11) DEFAULT NULL,
  `customerID` int(11) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `message` varchar(45) DEFAULT NULL,
  `time` time DEFAULT NULL,
  `telephone` varchar(45) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `enabled` varchar(45) DEFAULT NULL,
  `userID` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`viewingID`),
  KEY `fsdg_idx` (`propertyID`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `viewings`
--

LOCK TABLES `viewings` WRITE;
/*!40000 ALTER TABLE `viewings` DISABLE KEYS */;
INSERT INTO `viewings` VALUES (1,120,NULL,'Muhammed Ikram','ikimuhammed@hotmail.com','I would like to view this property ','10:30:00','01924 430639','2016-12-01','1','35'),(2,144,NULL,'saf','','yes i love thi sproperty','00:00:00','','2011-12-24','1','35'),(4,188,NULL,'sdfgdgfdhrgtey','','reteh','00:00:00','','2013-11-10','1','33'),(5,143,NULL,'khkj','ikimuhammed@hotmail.com','hgg','00:00:00',',m','2014-06-21','1','35'),(6,144,NULL,'bbb','hgjfg@gmail.com','vhkhgfkjhfjyf','45:44:53','45435','0000-00-00','0','35'),(7,120,NULL,'','','','00:00:00','','0000-00-00','0','35'),(8,120,NULL,'','','','00:00:00','','0000-00-00','0','35'),(9,114,NULL,'ikram','dfdfgvf@hotmail.com','ewfeget4b','00:00:12','232352145142','0000-00-00','1','46'),(10,129,NULL,'simon wilson','simon@gmail.com','Hello there, I would like to view this proper','10:30:00','01924 430639','0000-00-00','0','35'),(11,129,NULL,'','','','00:00:00','','0000-00-00','0','35'),(12,151,NULL,'ikram','sfhwkj@gmail.com','edfretqry53t45y','01:00:00','765434566543','2016-01-01','0','33'),(13,136,NULL,'','','','00:00:00','','0000-00-00','0','33');
/*!40000 ALTER TABLE `viewings` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-05-15 22:04:19
