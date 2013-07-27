-- MySQL dump 10.13  Distrib 5.5.29, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: emeeting
-- ------------------------------------------------------
-- Server version	5.5.29-0ubuntu0.12.04.2

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
-- Table structure for table `Log`
--

DROP TABLE IF EXISTS `Log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `datetime` datetime NOT NULL,
  `sco_id` int(11) NOT NULL,
  `participants` int(11) NOT NULL,
  `length_minutes` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Log`
--

LOCK TABLES `Log` WRITE;
/*!40000 ALTER TABLE `Log` DISABLE KEYS */;
/*!40000 ALTER TABLE `Log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Log_Total`
--

DROP TABLE IF EXISTS `Log_Total`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Log_Total` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `datetime` datetime NOT NULL,
  `participants` int(11) NOT NULL,
  `active_rooms` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Log_Total`
--

LOCK TABLES `Log_Total` WRITE;
/*!40000 ALTER TABLE `Log_Total` DISABLE KEYS */;
/*!40000 ALTER TABLE `Log_Total` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `meeting`
--

DROP TABLE IF EXISTS `meeting`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `meeting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `owner_id` int(11) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `state` int(11) NOT NULL,
  `salt` varchar(255) NOT NULL,
  `secretsalt` varchar(255) NOT NULL,
  `viewsalt` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext,
  `url` varchar(255) DEFAULT NULL,
  `date` datetime NOT NULL,
  `public` tinyint(1) DEFAULT NULL,
  `magic` tinyint(1) NOT NULL,
  `concurrent` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_F515E1397E3C61F9` (`owner_id`),
  KEY `IDX_F515E139FE54D947` (`group_id`),
  CONSTRAINT `FK_F515E1397E3C61F9` FOREIGN KEY (`owner_id`) REFERENCES `user` (`id`),
  CONSTRAINT `FK_F515E139FE54D947` FOREIGN KEY (`group_id`) REFERENCES `staff` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `meeting`
--

LOCK TABLES `meeting` WRITE;
/*!40000 ALTER TABLE `meeting` DISABLE KEYS */;
INSERT INTO `meeting` VALUES (1,6,NULL,4,'EdueMeeting','95e06d5c0f55e2a04b90b1fa3bee8384','32a1be3fd5e7b4a48061b66a14050388','Edu eMeeting',NULL,'https://ado.campusdomar.es/cmar-95e06d5c0f55e2a04b90b1fa3bee8384','2012-06-15 17:54:46',0,0,0,'2012-06-15 17:54:46','2012-06-15 17:54:46');
/*!40000 ALTER TABLE `meeting` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `meeting_user`
--

DROP TABLE IF EXISTS `meeting_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `meeting_user` (
  `meeting_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`meeting_id`,`user_id`),
  KEY `IDX_61622E9B67433D9C` (`meeting_id`),
  KEY `IDX_61622E9BA76ED395` (`user_id`),
  CONSTRAINT `FK_61622E9B67433D9C` FOREIGN KEY (`meeting_id`) REFERENCES `meeting` (`id`),
  CONSTRAINT `FK_61622E9BA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `meeting_user`
--

LOCK TABLES `meeting_user` WRITE;
/*!40000 ALTER TABLE `meeting_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `meeting_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nickname`
--

DROP TABLE IF EXISTS `nickname`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nickname` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `meeting_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `nickname` varchar(255) NOT NULL,
  `description` longtext,
  `rank` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_A188FE6467433D9C` (`meeting_id`),
  KEY `IDX_A188FE64A76ED395` (`user_id`),
  CONSTRAINT `FK_A188FE6467433D9C` FOREIGN KEY (`meeting_id`) REFERENCES `meeting` (`id`),
  CONSTRAINT `FK_A188FE64A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nickname`
--

LOCK TABLES `nickname` WRITE;
/*!40000 ALTER TABLE `nickname` DISABLE KEYS */;
INSERT INTO `nickname` VALUES (1,1,6,'Eduardo Alonso',NULL,1);
/*!40000 ALTER TABLE `nickname` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recording`
--

DROP TABLE IF EXISTS `recording`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `recording` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `meeting_id` int(11) DEFAULT NULL,
  `state` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `dateCreated` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_BB532B5367433D9C` (`meeting_id`),
  CONSTRAINT `FK_BB532B5367433D9C` FOREIGN KEY (`meeting_id`) REFERENCES `meeting` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recording`
--

LOCK TABLES `recording` WRITE;
/*!40000 ALTER TABLE `recording` DISABLE KEYS */;
/*!40000 ALTER TABLE `recording` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `staff` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key_` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_426EF3928656280F` (`key_`),
  UNIQUE KEY `UNIQ_426EF3925E237E06` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `staff`
--

LOCK TABLES `staff` WRITE;
/*!40000 ALTER TABLE `staff` DISABLE KEYS */;
/*!40000 ALTER TABLE `staff` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D649AA08CB10` (`login`),
  UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'vgoya','kk00','Vicente','Goyanes de Miguel','vgoya@gmail.com'),(2,'isma','kk00','Isma','Guerra Bouzas','isma@teltek.es'),(3,'pnietoiglesias','kk00','Pablo','Nieto Iglesias','pnieto@gmail.com'),(4,'iriadp','kk00ADO','Iria','Díaz Pérez','iriadp@uvigo.es'),(5,'rubenrua','kk00','Ruben','Gonzalez Gonzalez','rubenrua@gmail.com'),(6,'edu','123456','Eduardo','Alonso','edu.edalonso@gmail.com');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_staffs`
--

DROP TABLE IF EXISTS `users_staffs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_staffs` (
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`group_id`),
  KEY `IDX_AAADD00A76ED395` (`user_id`),
  KEY `IDX_AAADD00FE54D947` (`group_id`),
  CONSTRAINT `FK_AAADD00A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_AAADD00FE54D947` FOREIGN KEY (`group_id`) REFERENCES `staff` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_staffs`
--

LOCK TABLES `users_staffs` WRITE;
/*!40000 ALTER TABLE `users_staffs` DISABLE KEYS */;
/*!40000 ALTER TABLE `users_staffs` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-05-14 20:43:25
