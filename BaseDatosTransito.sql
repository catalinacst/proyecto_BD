-- MySQL dump 10.13  Distrib 5.6.30, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: db_transito
-- ------------------------------------------------------
-- Server version	5.6.30-1

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
-- Table structure for table `agentes`
--

DROP TABLE IF EXISTS `agentes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `agentes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `apellidos` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `agentes`
--

LOCK TABLES `agentes` WRITE;
/*!40000 ALTER TABLE `agentes` DISABLE KEYS */;
INSERT INTO `agentes` VALUES (1,'Yeferson','Gaitan',NULL,NULL),(2,'Catalina','Castro',NULL,NULL),(3,'Mr. Mac Mueller V','Jacobson',NULL,NULL),(4,'Cyrus Goodwin','Lehner',NULL,NULL),(5,'Courtney Durgan','Abbott',NULL,NULL),(6,'Will Jones','Hilpert',NULL,NULL),(7,'River Fay','Lowe',NULL,NULL),(8,'Marion O\'Connell','Ruecker',NULL,NULL),(9,'Alycia Roob','Cremin',NULL,NULL),(10,'Kacey Maggio','Bogisich',NULL,NULL),(11,'Hugh Murphy','Wuckert',NULL,NULL),(12,'Gilbert Watsica','Crona',NULL,NULL),(13,'Davon Kling','Fritsch',NULL,NULL),(14,'Margarita Von','O\'Reilly',NULL,NULL),(15,'Elsie Blick','Lowe',NULL,NULL);
/*!40000 ALTER TABLE `agentes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `direcciones`
--

DROP TABLE IF EXISTS `direcciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `direcciones` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `carrera` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `kilometro` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `direcciones`
--

LOCK TABLES `direcciones` WRITE;
/*!40000 ALTER TABLE `direcciones` DISABLE KEYS */;
INSERT INTO `direcciones` VALUES (1,'4637 Neal Plains Apt. 880',29,NULL,NULL),(2,'54810 Purdy Road Suite 519',26,NULL,NULL),(3,'4467 Hayes Manors Apt. 106',31,NULL,NULL),(4,'89749 Rutherford Walk',36,NULL,NULL),(5,'22746 Charley Orchard',37,NULL,NULL),(6,'3269 Van Brook Apt. 129',24,NULL,NULL),(7,'28943 Richie Summit Suite 900',50,NULL,NULL),(8,'913 Evans Circles',43,NULL,NULL),(9,'51300 Kim Inlet Apt. 873',42,NULL,NULL),(10,'10069 Kian Grove Suite 714',39,NULL,NULL),(11,'79935 Lesch Ridges',36,NULL,NULL),(12,'738 Boyer Hill Apt. 371',48,NULL,NULL),(13,'55688 Reed Road Suite 505',38,NULL,NULL),(14,'69677 West Shore',40,NULL,NULL),(15,'66576 Norwood Path',26,NULL,NULL);
/*!40000 ALTER TABLE `direcciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `infracciones`
--

DROP TABLE IF EXISTS `infracciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `infracciones` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `propietario_id` int(10) unsigned NOT NULL DEFAULT '0',
  `agente_id` int(10) unsigned NOT NULL DEFAULT '0',
  `direccion_id` int(10) unsigned NOT NULL DEFAULT '0',
  `articulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `fecha` date NOT NULL,
  `valor_total` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `infracciones_propietario_id_foreign` (`propietario_id`),
  KEY `infracciones_agente_id_foreign` (`agente_id`),
  KEY `infracciones_direccion_id_foreign` (`direccion_id`),
  CONSTRAINT `infracciones_agente_id_foreign` FOREIGN KEY (`agente_id`) REFERENCES `agentes` (`id`) ON DELETE CASCADE,
  CONSTRAINT `infracciones_direccion_id_foreign` FOREIGN KEY (`direccion_id`) REFERENCES `direcciones` (`id`) ON DELETE CASCADE,
  CONSTRAINT `infracciones_propietario_id_foreign` FOREIGN KEY (`propietario_id`) REFERENCES `propietarios` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `infracciones`
--

LOCK TABLES `infracciones` WRITE;
/*!40000 ALTER TABLE `infracciones` DISABLE KEYS */;
INSERT INTO `infracciones` VALUES (3,3,3,3,'Incidunt nostrum enim aliquid.','1983-04-10',293519,NULL,NULL),(4,4,4,4,'Voluptatem at veniam in ducimus.','1992-01-23',882517,NULL,NULL),(5,5,5,5,'Excepturi pariatur quia dolor dicta.','1988-11-02',38539,NULL,NULL),(6,6,6,6,'Illum dicta eum voluptatem fugit fugit eaque.','1974-10-16',75059,NULL,NULL),(7,7,7,7,'Aliquid distinctio sed eum sequi facilis nulla.','1977-08-27',90040,NULL,NULL),(8,8,8,8,'Rerum dignissimos est sequi alias ex sequi quo.','1995-03-08',60659,NULL,NULL),(9,9,9,9,'Iure et dolorem eum optio eligendi consequatur.','1979-04-19',75000,NULL,NULL),(10,10,10,10,'Eos qui perferendis nobis vitae in excepturi.','1979-03-08',6258,NULL,NULL),(11,11,11,11,'Molestiae vel ipsum et iste.','1985-05-19',81322,NULL,NULL),(12,12,12,12,'Accusamus deserunt nam veritatis aperiam at.','1975-09-17',46913,NULL,NULL),(13,13,13,13,'Odit nihil libero et enim.','1999-04-05',6150874,NULL,NULL),(14,14,14,14,'Officia officiis impedit quod dolore.','1989-02-10',10795502,NULL,NULL),(15,15,15,15,'Tempore nesciunt ipsum sint voluptatem velit est.','1977-10-07',6025124,NULL,NULL);
/*!40000 ALTER TABLE `infracciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `marcas`
--

DROP TABLE IF EXISTS `marcas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `marcas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `direccion` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `marcas`
--

LOCK TABLES `marcas` WRITE;
/*!40000 ALTER TABLE `marcas` DISABLE KEYS */;
INSERT INTO `marcas` VALUES (1,'Mazda','95809 Funk Tunnel - 53',NULL,'2016-05-25 19:38:27'),(2,'Suzuki','975 Quitzon Tunnel',NULL,NULL),(3,'Audi','781 Corkery Extensions',NULL,NULL),(4,'BMW','12008 Kaleb Cliff Suite 534',NULL,NULL),(5,'Chevrolet','101 Schoen Plains',NULL,NULL),(6,'Dodge','8838 Jacobi Trail',NULL,NULL),(7,'Ford','6748 Mills Square',NULL,NULL),(8,'Honda','61280 Zack Alley',NULL,NULL),(9,'Hyundai','36688 Tamara Shoal Apt. 506',NULL,NULL),(10,'Kia','7496 Ernser Vista',NULL,NULL),(11,'Mercedes-Benz','3299 Raleigh Shoal Apt. 824',NULL,NULL),(12,'Mitsubishi','605 Goyette Cliff Apt. 243',NULL,NULL),(13,'Nissan','3159 Reichel Villages',NULL,NULL),(14,'Renault','9788 Alejandra Underpass',NULL,NULL),(15,'Toyota','501 Okuneva Lodge Apt. 727',NULL,NULL),(16,'Cualquiera','Centro Cerca','2016-05-25 10:58:00','2016-05-25 11:08:43');
/*!40000 ALTER TABLE `marcas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES ('2016_05_18_174911_create_marcas_table',1),('2016_05_19_020819_create_agentes_table',1),('2016_05_19_020858_create_propietarios_table',1),('2016_05_19_020929_create_direcciones_table',1),('2016_05_19_021429_create_modelos_table',1),('2016_05_19_021532_create_vehiculos_table',1),('2016_05_19_021620_create_infracciones_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modelos`
--

DROP TABLE IF EXISTS `modelos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `modelos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `marca_id` int(10) unsigned NOT NULL DEFAULT '0',
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `potencia` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `modelos_marca_id_foreign` (`marca_id`),
  CONSTRAINT `modelos_marca_id_foreign` FOREIGN KEY (`marca_id`) REFERENCES `marcas` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modelos`
--

LOCK TABLES `modelos` WRITE;
/*!40000 ALTER TABLE `modelos` DISABLE KEYS */;
INSERT INTO `modelos` VALUES (1,1,'O53 I4SJ45A',90621,NULL,NULL),(2,2,'A5 3J4O5S4I',73927,NULL,NULL),(3,3,'I44OSJ A355',47522,NULL,NULL),(4,4,'JIA3S 454O5',71089,NULL,NULL),(5,5,'S35 5AI44OJ',48968,NULL,NULL),(6,6,'54 S34O5IAJ',32798,NULL,NULL),(7,7,'5J5S 344OAI',44503,NULL,NULL),(8,8,'AS35 4JO45I',76449,NULL,NULL),(9,9,'SA4 O3455IJ',37134,NULL,NULL),(10,10,'I34 OJA54S5',45918,NULL,NULL),(11,11,'5J 4OAIS354',51344,NULL,NULL),(12,12,'J4I5A3 4O5S',24296,NULL,NULL),(13,13,'JA4IO5S435 ',80731,NULL,NULL),(14,14,'OS5534 AI4J',37665,NULL,NULL),(15,15,' 4553OJSIA4',83534,NULL,NULL),(16,16,'2345678',1,'2016-05-25 10:58:16','2016-05-25 10:58:16'),(17,1,'ABC1000',200,'2016-05-25 19:51:57','2016-05-25 19:51:57');
/*!40000 ALTER TABLE `modelos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `propietarios`
--

DROP TABLE IF EXISTS `propietarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `propietarios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `apellidos` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `ciudad` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `direccion` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `fecha_nac` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `propietarios`
--

LOCK TABLES `propietarios` WRITE;
/*!40000 ALTER TABLE `propietarios` DISABLE KEYS */;
INSERT INTO `propietarios` VALUES (1,'Una','Ferry','Montana','5305 Hettinger Underpass Apt. 895','1996-03-07',NULL,NULL),(2,'Ted','Jakubowski','South Carolina','44353 Graciela Stream Suite 015','1986-07-18',NULL,NULL),(3,'Domingo','Wolf','West Virginia','35991 Greenholt Dale','1998-11-21',NULL,NULL),(4,'Kelvin','Eichmann','Michigan','42980 Jesus Forges','1990-04-06',NULL,NULL),(5,'Myron','Buckridge','Florida','1622 Ruecker Spring','1994-01-23',NULL,NULL),(6,'Marcia','Kovacek','District of Columbia','50409 Lowe Stravenue Apt. 218','1974-09-09',NULL,NULL),(7,'Santos','Schulist','Kentucky','136 Chanelle Meadows Apt. 594','1976-02-17',NULL,NULL),(8,'Aurelia','O\'Reilly','Kentucky','747 Satterfield Manor','1980-02-05',NULL,NULL),(9,'Genoveva','Schowalter','Oklahoma','6340 Vito Brook Apt. 093','1994-10-25',NULL,NULL),(10,'Joaquin','Crist','New Hampshire','6748 Frami Greens Apt. 996','1999-04-25',NULL,NULL),(11,'Esta','Hauck','Hawaii','97842 Thompson Green','1996-09-22',NULL,NULL),(12,'Armand','King','California','761 Maryjane Avenue','1971-04-13',NULL,NULL),(13,'Keven','Lowe','Montana','5205 Roberts Drives','1991-12-30',NULL,NULL),(14,'Amelie','Ryan','Massachusetts','2030 Arely Fall Apt. 667','1984-09-07',NULL,NULL),(15,'Guillermo','Williamson','Hawaii','47278 Kelton Ranch Apt. 017','1979-09-10',NULL,NULL);
/*!40000 ALTER TABLE `propietarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vehiculos`
--

DROP TABLE IF EXISTS `vehiculos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vehiculos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `propietario_id` int(10) unsigned NOT NULL DEFAULT '0',
  `modelo_id` int(10) unsigned NOT NULL DEFAULT '0',
  `fecha_matricula` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `vehiculos_propietario_id_foreign` (`propietario_id`),
  KEY `vehiculos_modelo_id_foreign` (`modelo_id`),
  CONSTRAINT `vehiculos_modelo_id_foreign` FOREIGN KEY (`modelo_id`) REFERENCES `modelos` (`id`) ON DELETE CASCADE,
  CONSTRAINT `vehiculos_propietario_id_foreign` FOREIGN KEY (`propietario_id`) REFERENCES `propietarios` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vehiculos`
--

LOCK TABLES `vehiculos` WRITE;
/*!40000 ALTER TABLE `vehiculos` DISABLE KEYS */;
INSERT INTO `vehiculos` VALUES (1,2,1,'1976-04-14',NULL,'2016-05-25 19:54:29'),(2,2,2,'1996-09-09',NULL,NULL),(3,3,3,'1971-12-19',NULL,NULL),(4,4,4,'1972-12-13',NULL,NULL),(5,5,5,'1971-12-29',NULL,NULL),(6,6,6,'1994-03-01',NULL,NULL),(7,7,7,'1991-08-10',NULL,NULL),(8,8,8,'1991-06-26',NULL,NULL),(9,9,9,'1995-04-02',NULL,NULL),(10,10,10,'1987-08-06',NULL,NULL),(11,11,11,'1997-01-24',NULL,NULL),(12,12,12,'1997-01-14',NULL,NULL),(13,13,13,'1995-10-02',NULL,NULL),(14,14,14,'1994-01-31',NULL,NULL),(15,15,15,'1970-02-17',NULL,NULL);
/*!40000 ALTER TABLE `vehiculos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-05-25 10:34:44
