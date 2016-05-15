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
-- Table structure for table `rating`
--

DROP TABLE IF EXISTS `rating`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rating` (
  `ratingID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `comments` varchar(400) DEFAULT NULL,
  `rating` varchar(45) DEFAULT NULL,
  `created` varchar(45) DEFAULT NULL,
  `enabled` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ratingID`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rating`
--

LOCK TABLES `rating` WRITE;
/*!40000 ALTER TABLE `rating` DISABLE KEYS */;
INSERT INTO `rating` VALUES (1,'mmmmm','u1263673@unimail.hud.ac.uk','They sold my house very quickly. great price was valued and great custoemr service','5.png','2016-04-06','1'),(8,'ikram','ik@GMAIL.CIOM','hello my nam eis iks fdg dsgsd gsdgsd gsdg sgsdg sdgsd gsd gs g sg sf g sfgf gdfgdfg dfgdfgdf gdfgdfg ','4.png','2016-04-06','1'),(9,'ali','f@GMAIL.CIOMf','mb','4.png','2016-04-06','1'),(10,'','','',NULL,'2016-04-06','1'),(11,'waqas','ikimuhammed@hotmail.com','SF','3','2016-04-06',NULL),(12,'dsfdsg','dhththcy@hotmail.com','ds','3','2016-04-06',NULL),(13,'jack','f@GMAIL.CIOMf','jack@gmaol.com','3png','2016-04-06',NULL),(14,'momo','ikimuhammed@hotmail.com','','4.png','2016-04-06',NULL),(15,'waqas','f@GMAIL.CIOMf','fff','5.png','2016-04-06','1'),(16,'hhhh','f@GMAIL.CIOMf','good','4.png','2016-04-08',NULL),(17,'c',NULL,NULL,'.png','2016-04-08',NULL),(18,NULL,NULL,NULL,'.png','2016-04-08',NULL),(19,NULL,NULL,NULL,'.png','2016-04-08',NULL),(20,NULL,NULL,NULL,'.png','2016-04-08',NULL),(21,NULL,NULL,NULL,'.png','2016-04-08',NULL),(22,'df','','',NULL,'2016-04-08',NULL);
/*!40000 ALTER TABLE `rating` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-05-15 22:04:08
