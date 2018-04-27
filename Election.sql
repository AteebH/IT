-- MySQL dump 10.13  Distrib 5.7.21, for Linux (x86_64)
--
-- Host: localhost    Database: 2015cse077
-- ------------------------------------------------------
-- Server version	5.7.21-0ubuntu0.16.04.1

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
-- Table structure for table `cr`
--

DROP TABLE IF EXISTS `cr`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cr` (
  `id` varchar(10) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `vote_count` int(10) DEFAULT '0',
  `section` int(3) DEFAULT NULL,
  `win` int(3) DEFAULT '0',
  `cgpa` decimal(5,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cr`
--

LOCK TABLES `cr` WRITE;
/*!40000 ALTER TABLE `cr` DISABLE KEYS */;
INSERT INTO `cr` VALUES ('2015cse031','Arjun',0,1,0,8.99),('2015cse046','Harshitha',0,1,0,8.21),('2015cse077','Ateeb',0,2,0,8.54),('2015cse091','Nidhisha',0,2,0,9.01),('2015cse122','Solo',0,3,0,8.92),('2015cse154','Vinay',0,3,0,7.66);
/*!40000 ALTER TABLE `cr` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `election`
--

DROP TABLE IF EXISTS `election`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `election` (
  `vote` int(2) DEFAULT NULL,
  `reg` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `election`
--

LOCK TABLES `election` WRITE;
/*!40000 ALTER TABLE `election` DISABLE KEYS */;
INSERT INTO `election` VALUES (0,1);
/*!40000 ALTER TABLE `election` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student` (
  `id` varchar(10) NOT NULL,
  `name` varchar(10) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL,
  `section` int(3) DEFAULT NULL,
  `voted` int(2) DEFAULT NULL,
  `type` int(2) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` VALUES ('2015cse000','Admin','helloA',0,0,1),('2015cse077','Ateeb','hello',2,0,0),('2015cse083','James','hello',1,0,0),('2015cse123','Thejus','hello',3,0,0);
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-04-21 11:57:58
