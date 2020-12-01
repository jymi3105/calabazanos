-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: calabazanos
-- ------------------------------------------------------
-- Server version	8.0.19

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `compras`
--

DROP TABLE IF EXISTS `compras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `compras` (
  `idcompras` int NOT NULL AUTO_INCREMENT,
  `unidades` int NOT NULL,
  `coste` float NOT NULL,
  `fechaCompra` datetime DEFAULT CURRENT_TIMESTAMP,
  `currelas_DNI` varchar(11) NOT NULL,
  `Material_campo_idMaterial_campo` int DEFAULT NULL,
  `Material_laboratorio_idLab` int DEFAULT NULL,
  PRIMARY KEY (`idcompras`),
  UNIQUE KEY `idcompras_UNIQUE` (`idcompras`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `compras`
--

LOCK TABLES `compras` WRITE;
/*!40000 ALTER TABLE `compras` DISABLE KEYS */;
INSERT INTO `compras` VALUES (10,500,100,'2020-11-29 21:40:21','2131',NULL,4),(11,200,120,'2020-11-29 21:44:39','2131',NULL,5),(12,10,20,'2020-11-29 22:26:01','2131',NULL,1),(13,100,50,'2020-11-30 19:46:34','2131',NULL,4);
/*!40000 ALTER TABLE `compras` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `currelas`
--

DROP TABLE IF EXISTS `currelas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `currelas` (
  `DNI` int NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `contrasenia` varchar(45) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellidos` varchar(45) DEFAULT NULL,
  `contraseniaAd` varchar(45) DEFAULT NULL,
  `puesto` varchar(45) DEFAULT NULL,
  `coche` varchar(3) DEFAULT NULL,
  `fecha_alta` date DEFAULT NULL,
  PRIMARY KEY (`DNI`),
  UNIQUE KEY `id_UNIQUE` (`DNI`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `currelas`
--

LOCK TABLES `currelas` WRITE;
/*!40000 ALTER TABLE `currelas` DISABLE KEYS */;
INSERT INTO `currelas` VALUES (12,'beltran','beltran','ana@ama','beltran','alvarez Clouet','','Campo','SI','2010-10-10'),(2131,'jorge','jorge','correo','Jorge','Miranda Izcara','jorgeAd','Campo','SI','2018-05-01'),(5161,'ana','ana','ana@amatragsa.es','ana','ponce diaz','anaad','Campo','SI','2018-05-31'),(13453,'Guillermo','guillermo','gille@gm.com','Guillermo','Lopez','','Laboratorio','no','2018-05-15'),(32165152,'jandro','jandro','jandor@jandor','Alejandro','Gonzalez','','Laboratorio','NO','2010-03-21'),(71104444,'juan','juan','juanc@juan','Juan Carlos','Domingo Alonso',NULL,'Administrativo','NO','2004-02-06');
/*!40000 ALTER TABLE `currelas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `material_campo`
--

DROP TABLE IF EXISTS `material_campo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `material_campo` (
  `idMaterial_campo` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `unidades` int NOT NULL,
  `dedicacion` varchar(45) NOT NULL,
  `proveedor_Campo` varchar(45) NOT NULL,
  PRIMARY KEY (`idMaterial_campo`),
  UNIQUE KEY `idMaterial_campo_UNIQUE` (`idMaterial_campo`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `material_campo`
--

LOCK TABLES `material_campo` WRITE;
/*!40000 ALTER TABLE `material_campo` DISABLE KEYS */;
INSERT INTO `material_campo` VALUES (1,'Azadas','Para destoconar',14,'Campo','La casa verde'),(2,'Sprays','marcar parcelas',148,'Campo','Inquierdo'),(3,'Estacas','marcar parcelas',200,'campo','izquierdo'),(4,'Alcohol','Para la desinfeccion de herramientas',208,'Muestreo','Vaquero'),(6,'Brocas salomonicas','extraccion de viruta del fuste',20,'Muestreo','La herramienta'),(9,'Eslingas','Para uso en el todoterreno',6,'Campo','Ferreteria Izquierdo');
/*!40000 ALTER TABLE `material_campo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `material_laboratorio`
--

DROP TABLE IF EXISTS `material_laboratorio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `material_laboratorio` (
  `idLab` int NOT NULL AUTO_INCREMENT,
  `nombreLab` varchar(45) NOT NULL,
  `descripcionLab` varchar(45) NOT NULL,
  `unidades` int NOT NULL,
  `proveedor` varchar(45) NOT NULL,
  `tipo` varchar(45) NOT NULL,
  PRIMARY KEY (`idLab`),
  UNIQUE KEY `idLab_UNIQUE` (`idLab`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `material_laboratorio`
--

LOCK TABLES `material_laboratorio` WRITE;
/*!40000 ALTER TABLE `material_laboratorio` DISABLE KEYS */;
INSERT INTO `material_laboratorio` VALUES (1,'Matraces','Hacer medio de cultivo',40,'finsa','Durable'),(2,'Agar agar','bote de 200 gr ',20,'clinix','Consumible'),(3,'Bromuro','Paquetes de 100 gramos',50,'origen','Consumible'),(4,'Placas petri','Diametro de 40 mm',600,'ataulfo.sl','Consumible'),(5,'Placas petri de vidreo','diametros de 50 mm',200,'ataulfo.sl','Durable');
/*!40000 ALTER TABLE `material_laboratorio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedidos`
--

DROP TABLE IF EXISTS `pedidos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pedidos` (
  `idpedidos` int unsigned NOT NULL AUTO_INCREMENT,
  `unidades` int NOT NULL,
  `provinciaDestino` varchar(45) NOT NULL,
  `fechaPedido` datetime DEFAULT CURRENT_TIMESTAMP,
  `currelas_DNI` int NOT NULL,
  `Material_campo_idMaterial_campo` int DEFAULT NULL,
  PRIMARY KEY (`idpedidos`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedidos`
--

LOCK TABLES `pedidos` WRITE;
/*!40000 ALTER TABLE `pedidos` DISABLE KEYS */;
INSERT INTO `pedidos` VALUES (1,2,'Valladolid','2020-11-28 12:20:13',2131,1),(2,2,'ZAMORA','2020-11-28 12:51:59',2134,1),(3,1,'SORIA','2020-11-28 12:54:54',2134,1),(4,1,'SORIA','2020-11-28 12:59:22',2134,1),(5,1,'LEON','2020-11-28 13:00:31',2134,1),(6,1,'SEGOVIA','2020-11-28 13:02:30',2134,1),(7,2,'SORIA','2020-11-28 13:05:19',2134,1),(8,1,'SALAMANCA','2020-11-28 13:07:05',2134,1),(9,2,'SORIA','2020-11-29 08:50:45',2131,2);
/*!40000 ALTER TABLE `pedidos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-12-01  7:41:49
