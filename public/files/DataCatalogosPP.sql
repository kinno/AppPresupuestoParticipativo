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
-- Dumping data for table `cat_municipios`
--

LOCK TABLES `cat_municipios` WRITE;
/*!40000 ALTER TABLE `cat_municipios` DISABLE KEYS */;
INSERT INTO `cat_municipios` VALUES (1,'ACAMBAY DE RUIZ CASTAÑEDA',NULL,NULL,2),(2,'ACOLMAN',NULL,NULL,11),(3,'ACULCO',NULL,NULL,2),(4,'ALMOLOYA DE ALQUISIRAS',NULL,NULL,12),(5,'ALMOLOYA DE JUÁREZ',NULL,NULL,6),(6,'ALMOLOYA DEL RÍO',NULL,NULL,13),(7,'AMANALCO',NULL,NULL,19),(8,'AMATEPEC',NULL,NULL,12),(9,'AMECAMECA',NULL,NULL,1),(10,'APAXCO',NULL,NULL,20),(11,'ATENCO',NULL,NULL,15),(12,'ATIZAPÁN',NULL,NULL,7),(13,'ATIZAPÁN DE ZARAGOZA',NULL,NULL,4),(14,'ATLACOMULCO',NULL,NULL,2),(15,'ATLAUTLA',NULL,NULL,1),(16,'AXAPUSCO',NULL,NULL,11),(17,'AYAPANGO',NULL,NULL,1),(18,'CALIMAYA',NULL,NULL,13),(19,'CAPULHUAC',NULL,NULL,7),(20,'CHALCO',NULL,NULL,1),(21,'CHAPA DE MOTA',NULL,NULL,2),(22,'CHAPULTEPEC',NULL,NULL,8),(23,'CHIAUTLA',NULL,NULL,11),(24,'CHICOLOAPAN',NULL,NULL,3),(25,'CHICONCUAC',NULL,NULL,15),(26,'CHIMALHUACÁN',NULL,NULL,3),(27,'COACALCO DE BERRIOZÁBAL',NULL,NULL,18),(28,'COATEPEC HARINAS',NULL,NULL,12),(29,'COCOTITLÁN',NULL,NULL,1),(30,'COYOTEPEC',NULL,NULL,14),(31,'CUAUTITLÁN',NULL,NULL,18),(32,'CUAUTITLÁN IZCALLI',NULL,NULL,4),(33,'DONATO GUERRA',NULL,NULL,19),(34,'ECATEPEC DE MORELOS',NULL,NULL,5),(35,'ECATZINGO',NULL,NULL,1),(36,'EL ORO',NULL,NULL,2),(37,'HUEHUETOCA',NULL,NULL,20),(38,'HUEYPOXTLA',NULL,NULL,20),(39,'HUIXQUILUCAN',NULL,NULL,9),(40,'ISIDRO FABELA',NULL,NULL,9),(41,'IXTAPALUCA',NULL,NULL,3),(42,'IXTAPAN DE LA SAL',NULL,NULL,12),(43,'IXTAPAN DEL ORO',NULL,NULL,19),(44,'IXTLAHUACA',NULL,NULL,6),(45,'JALTENCO',NULL,NULL,14),(46,'JILOTEPEC',NULL,NULL,2),(47,'JILOTZINGO',NULL,NULL,9),(48,'JIQUIPILCO',NULL,NULL,6),(49,'JOCOTITLÁN',NULL,NULL,2),(50,'JOQUICINGO',NULL,NULL,13),(51,'JUCHITEPEC',NULL,NULL,1),(52,'LA PAZ',NULL,NULL,3),(53,'LERMA',NULL,NULL,7),(54,'LUVIANOS',NULL,NULL,12),(55,'MALINALCO',NULL,NULL,13),(56,'MELCHOR OCAMPO',NULL,NULL,14),(57,'METEPEC',NULL,NULL,8),(58,'MEXICALTZINGO',NULL,NULL,8),(59,'MORELOS',NULL,NULL,2),(60,'NAUCALPAN',NULL,NULL,9),(61,'NEXTLALPAN',NULL,NULL,14),(62,'NEZAHUALCÓYOTL',NULL,NULL,10),(63,'NICOLÁS ROMERO',NULL,NULL,4),(64,'NOPALTEPEC',NULL,NULL,11),(65,'OCOYOACAC',NULL,NULL,7),(66,'OCUILAN',NULL,NULL,13),(67,'OTUMBA',NULL,NULL,11),(68,'OTZOLOAPAN',NULL,NULL,19),(69,'OTZOLOTEPEC',NULL,NULL,6),(70,'OZUMBA',NULL,NULL,1),(71,'PAPALOTLA',NULL,NULL,11),(72,'POLOTITLÁN',NULL,NULL,2),(73,'RAYÓN',NULL,NULL,13),(74,'SAN ANTONIO LA ISLA',NULL,NULL,13),(75,'SAN FELIPE DEL PROGRESO',NULL,NULL,6),(76,'SAN JOSÉ DEL RINCÓN',NULL,NULL,2),(77,'SAN MARTÍN DE LAS PIRÁMIDES',NULL,NULL,11),(78,'SAN MATEO ATENCO',NULL,NULL,8),(79,'SAN SIMÓN DE GUERRERO',NULL,NULL,19),(80,'SANTO TOMÁS',NULL,NULL,19),(81,'SOYANIQUILPAN DE JUÁREZ',NULL,NULL,2),(82,'SULTEPEC',NULL,NULL,12),(83,'TECÁMAC',NULL,NULL,5),(84,'TEJUPILCO',NULL,NULL,12),(85,'TEMAMATLA',NULL,NULL,1),(86,'TEMASCALAPA',NULL,NULL,11),(87,'TEMASCALCINGO',NULL,NULL,2),(88,'TEMASCALTEPEC',NULL,NULL,19),(89,'TEMOAYA',NULL,NULL,6),(90,'TENANCINGO',NULL,NULL,13),(91,'TENANGO DEL AIRE',NULL,NULL,1),(92,'TENANGO DEL VALLE',NULL,NULL,13),(93,'TEOLOYUCAN',NULL,NULL,14),(94,'TEOTIHUACÁN',NULL,NULL,11),(95,'TEPETLAOXTOC',NULL,NULL,11),(96,'TEPETLIXPA',NULL,NULL,1),(97,'TEPOTZOTLÁN',NULL,NULL,14),(98,'TEQUIXQUIAC',NULL,NULL,20),(99,'TEXCALTITLÁN',NULL,NULL,19),(100,'TEXCALYACAC',NULL,NULL,7),(101,'TEXCOCO',NULL,NULL,15),(102,'TEZOYUCA',NULL,NULL,15),(103,'TIANGUISTENCO',NULL,NULL,7),(104,'TIMILPAN',NULL,NULL,2),(105,'TLALMANALCO',NULL,NULL,1),(106,'TLALNEPANTLA DE BAZ',NULL,NULL,16),(107,'TLATLAYA',NULL,NULL,12),(108,'TOLUCA',NULL,NULL,17),(109,'TONANITLA',NULL,NULL,14),(110,'TONATICO',NULL,NULL,12),(111,'TULTEPEC',NULL,NULL,18),(112,'TULTITLÁN',NULL,NULL,18),(113,'VALLE DE BRAVO',NULL,NULL,19),(114,'VALLE DE CHALCO SOLIDARIDAD',NULL,NULL,1),(115,'VILLA DE ALLENDE',NULL,NULL,19),(116,'VILLA DEL CARBÓN',NULL,NULL,2),(117,'VILLA GUERRERO',NULL,NULL,12),(118,'VILLA VICTORIA',NULL,NULL,19),(119,'XALATLACO',NULL,NULL,7),(120,'XONACATLÁN',NULL,NULL,9),(121,'ZACAZONAPAN',NULL,NULL,19),(122,'ZACUALPAN',NULL,NULL,12),(123,'ZINACANTEPEC',NULL,NULL,17),(124,'ZUMPAHUACÁN',NULL,NULL,13),(125,'ZUMPANGO',NULL,NULL,20);
/*!40000 ALTER TABLE `cat_municipios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `cat_regiones`
--

LOCK TABLES `cat_regiones` WRITE;
/*!40000 ALTER TABLE `cat_regiones` DISABLE KEYS */;
INSERT INTO `cat_regiones` VALUES (1,'AMECAMECA','I',NULL,NULL,NULL),(2,'ATLACOMULCO','II',NULL,NULL,NULL),(3,'CHIMALHUACÁN','III',NULL,NULL,NULL),(4,'CUAUTITLÁN IZCALLI','IV',NULL,NULL,NULL),(5,'ECATEPEC','V',NULL,NULL,NULL),(6,'IXTLAHUACA','VI',NULL,NULL,NULL),(7,'LERMA','VII',NULL,NULL,NULL),(8,'METEPEC','VIII',NULL,NULL,NULL),(9,'NAUCALPAN','IX',NULL,NULL,NULL),(10,'NEZAHUALCÓYOTL','X',NULL,NULL,NULL),(11,'OTUMBA','XII',NULL,NULL,NULL),(12,'TEJUPILCO','XII',NULL,NULL,NULL),(13,'TENANCINGO','XIII',NULL,NULL,NULL),(14,'TEPOTZOTLÁN','XIV',NULL,NULL,NULL),(15,'TEXCOCO','XV',NULL,NULL,NULL),(16,'TLALNEPANTLA','XVI',NULL,NULL,NULL),(17,'TOLUCA','XVII',NULL,NULL,NULL),(18,'TULTITLÁN','XVIII',NULL,NULL,NULL),(19,'VALLE DE BRAVO','XIX',NULL,NULL,NULL),(20,'ZUMPANGO','XX','[{\"analisis\": \"SUPERFICIE: \", \"descripcion\": \"829.10  Km2\"}, {\"analisis\": \"POBLACION TOTAL 2017: \", \"descripcion\": \"223,376   Habitantes\"}, {\"analisis\": \"EDUCACIÓN: \", \"descripcion\": \"620 planteles educativos, 7,114 maestros y 148,193   alumnos\"}, {\"analisis\": \"POBLACION HABLANTE DE LENGUA INDIGENA: \", \"descripcion\": \"3 mil 707  personas\"}, {\"analisis\": \"INFRAESTRUCTURA CARRETERA: \", \"descripcion\": \"168.90  kilómetros\"}, {\"analisis\": \"USUARIOS DEL SERVICIO ELECTRICO: \", \"descripcion\": \"158,408  Usuarios\"}, {\"analisis\": \"SALUD\", \"descripcion\": \"48 unidades médicas y 537  médicos\"}]',NULL,NULL);
/*!40000 ALTER TABLE `cat_regiones` ENABLE KEYS */;
UNLOCK TABLES;

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

-- Dump completed on 2021-11-02 16:48:13
