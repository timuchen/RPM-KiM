-- MySQL dump 10.17  Distrib 10.3.25-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: spadb
-- ------------------------------------------------------
-- Server version	10.3.25-MariaDB-0ubuntu0.20.04.1

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
-- Table structure for table `brands`
--

DROP TABLE IF EXISTS `brands`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `brands` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `manufacturer_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brands`
--

LOCK TABLES `brands` WRITE;
/*!40000 ALTER TABLE `brands` DISABLE KEYS */;
INSERT INTO `brands` VALUES (1,'2020-12-22 05:40:58','2021-02-08 07:43:00','Юбилейное чаепитие',NULL,19),(2,'2020-12-22 05:41:24','2020-12-22 05:41:24','Земляничное',NULL,2),(3,'2020-12-22 05:41:35','2020-12-22 05:41:35','Сливочное',NULL,3),(4,'2020-12-22 05:41:46','2020-12-22 05:41:46','Топленое молоко',NULL,3),(5,'2020-12-22 05:41:55','2020-12-22 05:41:55','Шоколадное',NULL,3),(6,'2020-12-22 05:42:04','2020-12-22 05:42:04','Ювелирное',NULL,3),(7,'2020-12-22 05:43:01','2020-12-22 05:43:01','Кондитерские им. Морозова',NULL,4),(8,'2020-12-22 05:43:42','2020-12-22 05:43:42','Овсяное малое',NULL,4),(9,'2020-12-22 05:44:06','2020-12-22 05:44:06','Ростовское',NULL,4),(10,'2020-12-22 05:44:23','2020-12-22 05:44:23','Сливочное настроение',NULL,4),(11,'2020-12-22 05:44:39','2020-12-22 05:44:39','Топленое молоко',NULL,4),(12,'2020-12-22 05:44:53','2020-12-22 05:44:53','Ювелирное',NULL,4),(13,'2020-12-22 05:45:09','2020-12-22 05:45:09','К кофе',NULL,5),(14,'2020-12-22 05:45:24','2020-12-22 05:45:24','Extra',NULL,6),(15,'2020-12-22 05:45:41','2020-12-22 05:45:41','Любятово',NULL,6),(16,'2020-12-22 05:45:57','2020-12-22 05:45:57','Супер-Контик',NULL,6),(17,'2020-12-22 05:46:36','2020-12-22 05:46:36','Посиделкино',NULL,8),(18,'2020-12-22 05:46:52','2020-12-22 05:46:52','Oreo',NULL,9),(19,'2020-12-22 05:47:05','2020-12-22 05:47:05','Милка',NULL,9),(20,'2020-12-22 05:47:25','2020-12-22 05:47:25','Юбилейное',NULL,9),(21,'2020-12-22 05:48:01','2020-12-22 05:48:01','Коровка',NULL,10),(22,'2020-12-22 05:48:22','2020-12-22 05:48:22','Чоко Пай',NULL,11),(23,'2020-12-22 05:48:36','2020-12-22 05:48:36','Полет',NULL,12),(24,'2020-12-22 05:48:55','2020-12-22 05:48:55','Деревенское',NULL,13),(25,'2020-12-22 05:49:25','2020-12-22 05:49:25','Яшкино',NULL,14),(26,'2020-12-22 05:49:53','2020-12-22 05:49:53','Кочетовы Сласти',NULL,15),(27,'2020-12-22 05:50:18','2020-12-22 05:50:18','Пряничное настроение',NULL,8),(29,'2020-12-22 05:51:36','2020-12-22 05:51:36','Рот Фронт',NULL,10),(30,'2020-12-22 05:52:02','2020-12-22 05:52:02','Праздник сластены',NULL,17),(31,'2020-12-22 05:52:18','2020-12-22 05:52:18','Чудесный край',NULL,17),(32,'2020-12-22 05:52:32','2020-12-22 05:52:32','Красная цена',NULL,18),(33,'2020-12-22 05:52:45','2020-12-22 05:52:45','7 days',NULL,19),(34,'2020-12-22 05:52:57','2020-12-22 05:52:57','Chipicao',NULL,19),(35,'2020-12-22 06:02:33','2020-12-22 06:02:33','Супер-Контик',NULL,7);
/*!40000 ALTER TABLE `brands` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `manufacturers`
--

DROP TABLE IF EXISTS `manufacturers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `manufacturers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `manufacturers`
--

LOCK TABLES `manufacturers` WRITE;
/*!40000 ALTER TABLE `manufacturers` DISABLE KEYS */;
INSERT INTO `manufacturers` VALUES (1,'Белогорье',NULL,'2020-12-22 05:34:09','2020-12-22 05:34:09'),(2,'БрянКонфи',NULL,'2020-12-22 05:34:36','2020-12-22 05:34:36'),(3,'Дом Морозова',NULL,'2020-12-22 05:34:44','2020-12-22 05:34:44'),(4,'Кондитерские им. Морозова',NULL,'2020-12-22 05:35:20','2020-12-22 05:35:20'),(5,'Дымка',NULL,'2020-12-22 05:35:34','2020-12-22 05:35:34'),(6,'Келлог',NULL,'2020-12-22 05:35:42','2020-12-22 05:35:42'),(7,'Конти',NULL,'2020-12-22 05:35:54','2020-12-22 05:35:54'),(8,'Любимый край',NULL,'2020-12-22 05:36:03','2020-12-22 05:36:03'),(9,'Монделис',NULL,'2020-12-22 05:36:11','2020-12-22 05:36:11'),(10,'Объед. Кондитеры',NULL,'2020-12-22 05:36:28','2020-12-22 05:36:28'),(11,'Орион',NULL,'2020-12-22 05:36:40','2020-12-22 05:36:40'),(12,'Полет',NULL,'2020-12-22 05:36:57','2020-12-22 05:36:57'),(13,'Сладкая Слобода',NULL,'2020-12-22 05:37:24','2020-12-22 05:37:24'),(14,'КДВ',NULL,'2020-12-22 05:37:36','2020-12-22 05:37:36'),(15,'Кондитерский комбинат Кубань',NULL,'2020-12-22 05:37:48','2020-12-22 05:37:48'),(17,'СТМ Тандер',NULL,'2020-12-22 05:39:34','2020-12-22 05:39:34'),(18,'СТМ Х5',NULL,'2020-12-22 05:39:47','2020-12-22 05:39:47'),(19,'Чипита',NULL,'2020-12-22 05:39:56','2020-12-22 05:39:56');
/*!40000 ALTER TABLE `manufacturers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (49,'2014_10_12_000000_create_users_table',1),(50,'2014_10_12_100000_create_password_resets_table',1),(51,'2019_08_19_000000_create_failed_jobs_table',1),(52,'2020_12_06_213816_create_manufacturers_table',1),(53,'2020_12_06_213919_create_products_table',1),(54,'2020_12_06_213956_create_prices_table',1),(55,'2020_12_06_214422_create_shops_table',1),(56,'2020_12_07_062446_create_brands_table',1),(57,'2020_12_08_132724_add_brand_to_products_table',1),(58,'2020_12_10_070159_create_shop_monitorings_table',1),(59,'2020_12_10_081406_add_shopmonitoring_to_prices_table',1),(60,'2020_12_22_133200_add_image_to_shopmonitorings_table',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prices`
--

DROP TABLE IF EXISTS `prices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prices` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `shop_id` bigint(20) unsigned NOT NULL,
  `manufacturer_id` bigint(20) unsigned NOT NULL,
  `brand_id` bigint(20) unsigned NOT NULL,
  `product_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `shopmonitoring_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prices`
--

LOCK TABLES `prices` WRITE;
/*!40000 ALTER TABLE `prices` DISABLE KEYS */;
INSERT INTO `prices` VALUES (9,'Пятёрочка',NULL,100,99,'2020-12-24 05:29:26','2020-12-24 05:29:26',1,1,1,1,1,12),(10,'Пятёрочка',NULL,100,99,'2020-12-24 08:37:30','2020-12-24 08:37:30',1,3,3,3,1,12),(11,'Пятёрочка',NULL,100,99,'2020-12-24 08:45:03','2020-12-24 08:45:03',1,2,2,2,1,12),(12,'Пятёрочка',NULL,100,99,'2020-12-24 08:56:56','2020-12-24 08:56:56',1,11,22,36,1,12),(13,'Пятёрочка',NULL,100,99,'2020-12-24 09:06:55','2020-12-24 09:06:55',1,15,26,46,1,12),(14,'Пятёрочка',NULL,110,100,'2020-12-24 09:08:31','2020-12-24 09:08:31',1,3,3,3,1,12),(15,'Пятёрочка',NULL,110,99,'2020-12-24 09:09:58','2020-12-24 09:09:58',1,12,23,37,1,13),(16,'Пятёрочка',NULL,100,100,'2020-12-24 09:10:08','2020-12-24 09:10:08',1,11,22,36,1,13),(17,'Пятёрочка',NULL,100,99,'2020-12-24 09:10:20','2020-12-24 09:10:20',1,19,34,67,1,13),(18,'Пятёрочка',NULL,110,99,'2020-12-24 09:16:35','2020-12-24 09:16:35',1,4,7,7,1,13),(19,'Пятёрочка',NULL,100,99,'2020-12-24 09:16:47','2020-12-24 09:16:47',1,4,8,9,1,13),(20,'Пятёрочка',NULL,110,99,'2020-12-24 09:16:57','2020-12-24 09:16:57',1,4,9,10,1,13);
/*!40000 ALTER TABLE `prices` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `manufacturer_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `brand_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Юбилейное чаепитие 240 г',NULL,1,'2020-12-22 05:54:38','2020-12-22 05:54:38',1),(2,'Земляничное 190 г',NULL,2,'2020-12-22 05:55:02','2020-12-22 05:55:02',2),(3,'Сливочное 280 г.',NULL,3,'2020-12-22 05:55:22','2020-12-22 05:55:22',3),(4,'Топленое молоко 290 г',NULL,3,'2020-12-22 05:55:44','2020-12-22 05:55:44',4),(5,'Шоколадное 290 г',NULL,3,'2020-12-22 05:55:59','2020-12-22 05:55:59',5),(6,'Ювелирное 280 г',NULL,3,'2020-12-22 05:56:14','2020-12-22 05:56:14',6),(7,'Постное 430 г',NULL,4,'2020-12-22 05:56:47','2020-12-22 05:56:47',7),(8,'Овсяное классическое Мини 150 г (пакет)',NULL,4,'2020-12-22 05:57:24','2020-12-22 05:57:24',8),(9,'Овсяное классическое Мини 150 г (стакан)',NULL,4,'2020-12-22 05:57:39','2020-12-22 05:57:39',8),(10,'Ростовское 430 г',NULL,4,'2020-12-22 05:57:54','2020-12-22 05:57:54',9),(11,'Сливочное настроение 430 г',NULL,4,'2020-12-22 05:58:06','2020-12-22 05:58:06',10),(12,'Топленое молоко 430 г',NULL,4,'2020-12-22 05:58:21','2020-12-22 05:58:21',11),(13,'Ювелирное 430 г',NULL,4,'2020-12-22 05:58:43','2020-12-22 05:58:43',12),(14,'Топленое молоко 335 г',NULL,5,'2020-12-22 05:59:07','2020-12-22 05:59:07',13),(15,'Сдобное Гранола с шоколадом и апельсином 150 г',NULL,6,'2020-12-22 05:59:29','2020-12-22 05:59:29',14),(16,'Любимое к чаю 280 г',NULL,6,'2020-12-22 06:00:14','2020-12-22 06:00:14',15),(17,'Сдобное Воздушное шоколадное 200 г',NULL,6,'2020-12-22 06:00:31','2020-12-22 06:00:31',15),(18,'Сдобное Лимон и мята 250 г',NULL,6,'2020-12-22 06:00:48','2020-12-22 06:00:48',15),(19,'Топленое молоко 400 г',NULL,6,'2020-12-22 06:01:06','2020-12-22 06:01:06',15),(20,'Черничное со злаками 114 г',NULL,6,'2020-12-22 06:01:25','2020-12-22 06:01:25',15),(21,'Шоколадное 335 г',NULL,6,'2020-12-22 06:01:42','2020-12-22 06:01:42',15),(22,'Печенье-сэндвич Супер-Контик шоколадный 100 г',NULL,7,'2020-12-22 06:02:49','2020-12-22 06:02:49',35),(23,'Овсяное классическое 320 г',NULL,8,'2020-12-22 06:03:19','2020-12-22 06:03:19',17),(24,'Овсяное с шоколадными кусочками 310 г',NULL,8,'2020-12-22 06:03:32','2020-12-22 06:03:32',17),(25,'Печенье-сэндвич Oreo с ванильной начинкой 95 г',NULL,9,'2020-12-22 06:04:02','2020-12-22 06:04:02',18),(26,'Печенье-сэндвич Milka Choc & Choc Cookies 150 г',NULL,9,'2020-12-22 06:04:16','2020-12-22 06:04:16',19),(27,'Какао с глазурью 116 г',NULL,9,'2020-12-22 06:04:34','2020-12-22 06:04:34',20),(28,'Молочное с глазурью 116 г',NULL,9,'2020-12-22 06:04:51','2020-12-22 06:04:51',20),(29,'Молочное с глазурью 348 г',NULL,9,'2020-12-22 06:05:16','2020-12-22 06:05:16',20),(30,'Постное 430 г',NULL,9,'2020-12-22 06:05:32','2020-12-22 06:05:32',20),(31,'Традиционное 112 г',NULL,9,'2020-12-22 06:05:53','2020-12-22 06:05:53',20),(32,'Традиционное 134 г (бумажная упаковка)',NULL,9,'2020-12-22 06:06:19','2020-12-22 06:06:19',20),(33,'Традиционное 313 г',NULL,9,'2020-12-22 06:36:45','2020-12-22 06:36:45',20),(34,'С молоком 375 г',NULL,10,'2020-12-22 06:37:06','2020-12-22 06:37:06',21),(35,'Топленое молоко 375 г',NULL,10,'2020-12-22 06:38:16','2020-12-22 06:38:16',21),(36,'Печенье-сэндвич Чоко Пай 180 г',NULL,11,'2020-12-22 06:38:33','2020-12-22 06:38:33',22),(37,'Овсяное Классическое СССР 250 г (картон)',NULL,12,'2020-12-22 06:38:48','2020-12-22 06:38:48',23),(38,'Деревенское к кофе 355 г',NULL,13,'2020-12-22 06:39:22','2020-12-22 06:39:22',24),(39,'Пряники в сахарной глазури 350 г',NULL,14,'2020-12-22 06:39:50','2020-12-22 06:39:50',25),(40,'Пряники Классические 200 г',NULL,14,'2020-12-22 06:40:02','2020-12-22 06:40:02',25),(41,'Пряники Мятные 350 г',NULL,14,'2020-12-22 06:40:14','2020-12-22 06:40:14',25),(42,'Пряники с варёной сгущёнкой 350 г',NULL,14,'2020-12-22 06:40:23','2020-12-22 06:40:23',25),(43,'Пряники с вишневой начинкой 350 г',NULL,14,'2020-12-22 06:40:35','2020-12-22 06:40:35',25),(44,'Пряники Шоколадные 350 г',NULL,14,'2020-12-22 06:40:45','2020-12-22 06:40:45',25),(45,'Кочетовы сласти пряники классические в сахарной глазури 300 г',NULL,15,'2020-12-22 06:41:07','2020-12-22 06:41:07',26),(46,'Кочетовы сласти пряники с какао 300 г',NULL,15,'2020-12-22 06:41:20','2020-12-22 06:41:20',26),(47,'Кочетовы сласти пряники с вишневой начинкой в розовой гл. 300 г',NULL,15,'2020-12-22 06:41:31','2020-12-22 06:41:31',26),(48,'Кочетовы сласти пряники с шоколадной начинкой в шоколад.гл. 300 г',NULL,14,'2020-12-22 06:41:44','2020-12-22 06:41:44',25),(49,'Пряники Мятные 300 г',NULL,8,'2020-12-22 06:42:23','2020-12-22 06:42:23',17),(50,'Пряники с варёной сгущёнкой 300 г',NULL,8,'2020-12-22 06:43:31','2020-12-22 06:43:31',17),(51,'Пряники с вишневой начинкой 300 г',NULL,8,'2020-12-22 06:43:44','2020-12-22 06:43:44',17),(52,'Пряники с шоколадом 300 г',NULL,8,'2020-12-22 06:43:58','2020-12-22 06:43:58',17),(53,'Глазированные пряники с имбирем 240 г',NULL,8,'2020-12-22 06:44:25','2020-12-22 06:44:25',27),(54,'Глазированные пряники с шоколадом 240 г',NULL,8,'2020-12-22 06:44:38','2020-12-22 06:44:38',27),(55,'Пряники с кусочками яблок 210 г',NULL,8,'2020-12-22 06:44:54','2020-12-22 06:44:54',27),(56,'Пряники с ягодами черной смородины 210 г',NULL,8,'2020-12-22 06:45:05','2020-12-22 06:45:05',27),(57,'Пряники Коровка с начинкой варёная сгущёнка 300 г',NULL,10,'2020-12-22 06:45:24','2020-12-22 06:45:24',21),(58,'Пряники Коровка с начинкой вкус вишневого йогурта 300 г',NULL,10,'2020-12-22 06:45:35','2020-12-22 06:45:35',21),(59,'Пряники Коровка с начинкой вкус шоколадное молоко 300 г',NULL,10,'2020-12-22 06:45:55','2020-12-22 06:45:55',21),(60,'Любимые пряники вкус шоколад 400 г',NULL,10,'2020-12-22 06:46:10','2020-12-22 06:46:10',29),(61,'Любимые пряники классические 400 г',NULL,10,'2020-12-22 06:46:23','2020-12-22 06:46:23',29),(62,'Пряники Праздник сластены с черной смородиной 400 г',NULL,17,'2020-12-22 06:46:53','2020-12-22 06:46:53',30),(63,'Пряники Праздник сластены с шоколадным вкусом 400 г',NULL,17,'2020-12-22 06:47:20','2020-12-22 06:47:20',30),(64,'Пряники Чудесный край 500 г',NULL,17,'2020-12-22 06:47:38','2020-12-22 06:47:38',31),(65,'Пряники Красная цена Звездные 500 г',NULL,18,'2020-12-22 06:47:50','2020-12-22 06:47:50',32),(66,'Мини-Круассаны с кремом какао 105 г',NULL,19,'2020-12-22 06:48:10','2020-12-22 06:48:10',33),(67,'Мини-Круассаны Chipicao с кремом какао 50 г',NULL,19,'2020-12-22 06:48:23','2020-12-22 06:48:23',34);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shop_monitorings`
--

DROP TABLE IF EXISTS `shop_monitorings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shop_monitorings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `shop_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shop_monitorings`
--

LOCK TABLES `shop_monitorings` WRITE;
/*!40000 ALTER TABLE `shop_monitorings` DISABLE KEYS */;
INSERT INTO `shop_monitorings` VALUES (12,1,1,'2020-12-24 05:18:49','2020-12-24 05:18:49','/public/uploads/20/12/24/02_rostov.jpg'),(13,1,1,'2020-12-24 09:09:47','2020-12-24 09:09:47','/public/uploads/20/12/24/2.jpg'),(15,1,1,'2021-02-05 07:59:13','2021-02-05 07:59:13','/public/uploads/21/02/05/1504182250181621755.jpg');
/*!40000 ALTER TABLE `shop_monitorings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shops`
--

DROP TABLE IF EXISTS `shops`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shops` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shops`
--

LOCK TABLES `shops` WRITE;
/*!40000 ALTER TABLE `shops` DISABLE KEYS */;
INSERT INTO `shops` VALUES (1,'Пятёрочка',NULL,'Ростов-на-Дону','Евдокимова 33','2020-12-22 06:49:26','2020-12-22 06:49:26');
/*!40000 ALTER TABLE `shops` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','ttkacheff@gmail.com',NULL,'$2y$10$M8xNicL/vYCNufnE.CnaC.vbX4GpDV1cYCzWsh0gM7zTACzJxgLte',NULL,'2020-12-22 05:33:50','2020-12-22 05:33:50');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-02-08 17:50:13
