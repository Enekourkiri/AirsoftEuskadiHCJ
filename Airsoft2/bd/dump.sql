-- MySQL dump 10.15  Distrib 10.0.31-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: Airsoft
-- ------------------------------------------------------
-- Server version	10.0.31-MariaDB-0ubuntu0.16.04.2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Armas`
--

DROP TABLE IF EXISTS `Armas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Armas` (
  `Nombre` text NOT NULL,
  `Tipo` text NOT NULL,
  `Precio` tinyint(4) NOT NULL,
  `Disponible` text NOT NULL,
  `Arma_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Armas`
--

LOCK TABLES `Armas` WRITE;
/*!40000 ALTER TABLE `Armas` DISABLE KEYS */;
INSERT INTO `Armas` VALUES ('Jericho 941','Pistola',75,'Si',1),('CZ-75D','Pistola',75,'Si',2),('G1911','Pistola',70,'No',3),('Galaxy','Pistola',13,'Si',4),('Makarov','Pistola',19,'No',5),('G6D','Pistola',23,'Si',6),('Ruger','Pistola',55,'No',7),('P361','Pistola',14,'No',8),('JG068MG','Subfusil',117,'Si',1),('P5 K','Subfusil',127,'Si',2),('R4','Subfusil',78,'Si',3),('JG0452','Subfusil',105,'No',4),('D2811','Subfusil',99,'No',5),('Apache','Subfusil',127,'No',6),('JG0478','Subfusil',120,'Si',7),('R2C Scorpion','Subfusil',79,'Si',8),('MSD','Fusiles de asalto',127,'Si',1),('JG110','Fusiles de asalto',127,'Si',2),('JG513MG','Fusiles de asalto',117,'No',3),('JG1538','Fusiles de asalto',127,'No',4),('CM032C','Fusiles de asalto',127,'Si',5),('GKM','Fusiles de asalto',127,'Si',6),('GR4 FF26','Fusiles de asalto',127,'No',7),('Raider L','Fusiles de asalto',127,'Si',8),('M3 90 ',' Escopetas',50,'Si',1),('M3 90 Largo Double Eagle ',' Escopetas',55,'Si',2),('M3 90 Corto Eagle ',' Escopetas',55,'Si',3),('GFG-25 ',' Escopetas',65,'Si',4),('ZM61 ',' Escopetas',38,'No',5),('CM351',' Escopetas',50,'No',6),('CM350MN',' Escopetas',109,'Si',7),('CM352',' Escopetas',75,'Si',8),('SVD-Dragunov','Francotiradores',127,'Si',1),('SL-9 Ares','Francotiradores',127,'Si',2),('SPR','Francotiradores',127,'Si',3),('M24','Francotiradores',120,'Si',4),('FDG','Pistola',81,'Si',10),('a','a2',2,'a',0);
/*!40000 ALTER TABLE `Armas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-27 11:26:10
