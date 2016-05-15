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
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacts` (
  `contactID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `number` varchar(45) DEFAULT NULL,
  `message` varchar(100) DEFAULT NULL,
  `propertyID` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`contactID`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` VALUES (1,'144',NULL,NULL,NULL,NULL),(2,'muhammed bilal','bilal@bmail.com','46e5656fdgrtddfb','fgd','144'),(3,'c','muhammed.pk@hotmail.com','kjhvv','khgv','147'),(4,'ikram','muhammed.pk@hotmail.com','ffg','hello','142'),(5,'ik','ik@GMAIL.CIOM','TY','TYTTYTYTYTYTY','144'),(6,'ik','ik@GMAIL.CIOM','TY','TYTTYTYTYTYTY','144'),(7,'mmmmm','ik@GMAIL.CIOM','saerterq4t4r','4334qt65543265y','144'),(8,'mmmmm','ik@GMAIL.CIOM','saerterq4t4r','4334qt65543265y','144'),(9,'ik','ik@GMAIL.CIOM','saerterq4t4r','eRTYUIUYTR','144'),(10,'mmmmm','ik@GMAIL.CIOM','rtret','etertretre','144'),(11,'SE','ik@GMAIL.CIOM','RERTERERT','ERTERTERT',NULL),(12,'SE','ik@GMAIL.CIOM','RERTERERT','ERTERTERT',NULL),(13,'mmmmm','ik@GMAIL.CIOM','4543t536','56546543646',NULL),(14,'mmmmm','ik@GMAIL.CIOM','TY','eWRAEGHJKJYTRE',NULL),(15,'ik','ik@GMAIL.CIOM','ere','er','144'),(16,'f','f@GMAIL.CIOMf','f','f','144'),(17,'f','f@GMAIL.CIOMf','f','f','144'),(18,'f','f@GMAIL.CIOMf','f','f','144'),(19,'ik','f@GMAIL.CIOMf','saerterq4t4r','3','151'),(20,'mmmmm','wqewrw@thjtyh','werwe','terwt','144'),(21,'3r','f@GMAIL.CIOMf','ew','erwr','144'),(22,'3r','f@GMAIL.CIOMf','ew','erwr','144'),(23,'mmmmm','f@GMAIL.CIOMf','sqh','jrewhy','144'),(24,'mmmmm','f@GMAIL.CIOMf','dfgsddsf','df','144'),(25,'mmmmm','f@GMAIL.CIOMf','dfgsddsf','df','144'),(26,'mmmmm','f@GMAIL.CIOMf','dfgsddsf','df','144'),(27,'df','rtrrtte@gmail.com','ds','got it working','144'),(28,'df','rtrrtte@gmail.com','ds','got it working','144'),(29,'df','rtrrtte@gmail.com','ds','got it working','144'),(30,'df','rtrrtte@gmail.com','ds','got it working','144'),(31,'mmmmm','f@GMAIL.CIOMf','TY','e','144'),(32,'mmmmm','f@GMAIL.CIOMf','TY','e','144'),(33,'ik','wqewrw@thjtyh','RERTERERT','efr','170'),(34,'ik','wqewrw@thjtyh','RERTERERT','efr','170'),(35,'ik','wqewrw@thjtyh','RERTERERT','efr','170'),(36,'ik','wqewrw@thjtyh','RERTERERT','efr','170'),(37,'ik','omg@gmail.com','e','e','170'),(38,'mmmmm','ik@GMAIL.CIOM','saerterq4t4r','rent','171'),(39,'kjho','rtrrtte@gmail.com','kjbjihiuy','eQWE','143'),(40,'choudrie','ererwe@hotmail.com','er','bookig ??????????','114');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-05-15 22:04:24
