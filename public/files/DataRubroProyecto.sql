-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: presupuesto_participativo_db
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
-- Dumping data for table `cat_rubro_inversion`
--

LOCK TABLES `cat_rubro_inversion` WRITE;
/*!40000 ALTER TABLE `cat_rubro_inversion` DISABLE KEYS */;
INSERT INTO `cat_rubro_inversion` VALUES (1,'Agua',NULL,NULL),(2,'Comunicaciones y Transportes',NULL,NULL),(3,'Electricidad',NULL,NULL),(4,'Turismo',NULL,NULL),(5,'Educación',NULL,NULL),(6,'Ciencia y Tecnología',NULL,NULL),(7,'Cultura',NULL,NULL),(8,'Deporte',NULL,NULL),(9,'Salud y Asistencia Social',NULL,NULL);
/*!40000 ALTER TABLE `cat_rubro_inversion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `cat_tipo_proyecto`
--

LOCK TABLES `cat_tipo_proyecto` WRITE;
/*!40000 ALTER TABLE `cat_tipo_proyecto` DISABLE KEYS */;
INSERT INTO `cat_tipo_proyecto` VALUES (1,'Construcción de Pozos y cárcamos de bombeo',1,NULL,NULL),(2,'Estaciones públicas de agua potable',1,NULL,NULL),(3,'Embalses naturales o artificiales',1,NULL,NULL),(4,'Construcción y rehabilitación de Sistemas de Riego',1,NULL,NULL),(5,'Modelos para la captación de aguas pluviales para campo o ciudad',1,NULL,NULL),(6,'Pavimentación de calles',2,NULL,NULL),(7,'Habilitación urbana de vías y tramos',2,NULL,NULL),(8,'Conectividad a zonas de difícil acceso',2,NULL,NULL),(9,'Infraestructura de movilidad sustentable',2,NULL,NULL),(10,'Estaciones de espera para transporte público',2,NULL,NULL),(11,'Bancas públicas con puertos USB y conexiones eléctricas',3,NULL,NULL),(12,'Modelos híbridos de alumbrado público',3,NULL,NULL),(13,'Cableado Subterráneo',3,NULL,NULL),(14,'Granjas solares para electrificación rural',3,NULL,NULL),(15,'Creación de talleres, cooperativas y mercados artesanales',4,NULL,NULL),(16,'Corredores Gastronómicos y mercados',4,NULL,NULL),(17,'Construcción, habilitación y rehabilitación de parques temáticos',4,NULL,NULL),(18,'Equipamiento, servicios y accesos para practicar turismo de naturaleza',4,NULL,NULL),(19,'Remodelación y modernización de escuelas',5,NULL,NULL),(20,'Construcción, modernización de bibliotecas',5,NULL,NULL),(21,'Construcción de cabinas del conocimiento',5,NULL,NULL),(22,'Casas sostenibles',5,NULL,NULL),(23,'Desarrollo de tecnología para actividades productivas y servicios',6,NULL,NULL),(24,'Desarrollo de aplicaciones para el desarrollo social (educación, equidad de género, desarrollo urbano, etc)',6,NULL,NULL),(25,'Remodelación, mejoramiento y habilitación de casas de cultura',7,NULL,NULL),(26,'Construcción y mejoramiento de museos',7,NULL,NULL),(27,'Cines y teatros',7,NULL,NULL),(28,'Foros y anfiteatros al aire libre',7,NULL,NULL),(29,'Construcción y remodelación de canchas y espacios deportivos',8,NULL,NULL),(30,'Gimnasios al aire libre',8,NULL,NULL),(31,'Andadores de atletismo, carriles para bicicletas',8,NULL,NULL),(32,'Remodelación y mejoramiento de los centros de salud',9,NULL,NULL),(33,'Construcción o habilitación de centros de medicina alternativa y consulta virtual',9,NULL,NULL),(34,'Construcción o habilitación de residencias dignas para personal medico',9,NULL,NULL),(35,'Centros de nutrición comunitaria',9,NULL,NULL);
/*!40000 ALTER TABLE `cat_tipo_proyecto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'presupuesto_participativo_db'
--

--
-- Dumping routines for database 'presupuesto_participativo_db'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-11-02 14:59:11
