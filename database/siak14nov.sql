-- MySQL dump 10.13  Distrib 8.0.33, for Win64 (x86_64)
--
-- Host: localhost    Database: siaksmp
-- ------------------------------------------------------
-- Server version	8.0.33

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `siaksmp`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `siaksmp` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `siaksmp`;

--
-- Table structure for table `tbl_guru`
--

DROP TABLE IF EXISTS `tbl_guru`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_guru` (
  `no_identitas` varchar(150) NOT NULL,
  `nama_guru` varchar(150) NOT NULL,
  `gender_guru` varchar(150) NOT NULL,
  `alamat_guru` varchar(250) NOT NULL,
  `tgl_lahir_guru` varchar(50) NOT NULL,
  `id_kelas` int DEFAULT NULL,
  PRIMARY KEY (`no_identitas`),
  CONSTRAINT `tbl_guru_ibfk_1` FOREIGN KEY (`no_identitas`) REFERENCES `tbl_user` (`no_identitas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_guru`
--

LOCK TABLES `tbl_guru` WRITE;
/*!40000 ALTER TABLE `tbl_guru` DISABLE KEYS */;
INSERT INTO `tbl_guru` VALUES ('98765432111','Saprudin, S. Kom','L','Yogyakarta','1990-10-27',1),('98765432122','Srikandi, S. Pd','P','Serang','1995-06-07',2),('98765432133','Junaedi, S. Pd','L','Serang','1992-02-05',3),('98765432155','Sulaeman, S. Pd','L','Surabaya','1995-10-05',4),('98765432199','Alinka, S.Pd','P','Lebak','1999-09-04',5);
/*!40000 ALTER TABLE `tbl_guru` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_jadwal`
--

DROP TABLE IF EXISTS `tbl_jadwal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_jadwal` (
  `id_jadwal` int NOT NULL AUTO_INCREMENT,
  `id_kelas` int NOT NULL,
  `kode_mapel` varchar(15) NOT NULL,
  `no_identitas` varchar(150) NOT NULL,
  `jam` varchar(150) NOT NULL,
  `hari` varchar(150) NOT NULL,
  PRIMARY KEY (`id_jadwal`),
  KEY `tbl_jadwal_ibfk_1` (`id_kelas`),
  KEY `tbl_jadwal_ibfk_2` (`kode_mapel`),
  KEY `tbl_jadwal_ibfk_3` (`no_identitas`),
  CONSTRAINT `tbl_jadwal_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `tbl_kelas` (`id_kelas`),
  CONSTRAINT `tbl_jadwal_ibfk_2` FOREIGN KEY (`kode_mapel`) REFERENCES `tbl_mata_pelajaran` (`kode_mapel`),
  CONSTRAINT `tbl_jadwal_ibfk_3` FOREIGN KEY (`no_identitas`) REFERENCES `tbl_guru` (`no_identitas`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_jadwal`
--

LOCK TABLES `tbl_jadwal` WRITE;
/*!40000 ALTER TABLE `tbl_jadwal` DISABLE KEYS */;
INSERT INTO `tbl_jadwal` VALUES (8,1,'Tahfidz','98765432122','09.30 - 10.00','Senin');
/*!40000 ALTER TABLE `tbl_jadwal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_kelas`
--

DROP TABLE IF EXISTS `tbl_kelas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_kelas` (
  `id_kelas` int NOT NULL AUTO_INCREMENT,
  `nama_kelas` varchar(50) NOT NULL,
  PRIMARY KEY (`id_kelas`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_kelas`
--

LOCK TABLES `tbl_kelas` WRITE;
/*!40000 ALTER TABLE `tbl_kelas` DISABLE KEYS */;
INSERT INTO `tbl_kelas` VALUES (1,'VII A'),(2,'VII B'),(3,'VII C'),(4,'VII D'),(5,'VII E');
/*!40000 ALTER TABLE `tbl_kelas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_mata_pelajaran`
--

DROP TABLE IF EXISTS `tbl_mata_pelajaran`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_mata_pelajaran` (
  `kode_mapel` varchar(15) NOT NULL,
  `nama_mapel` varchar(50) NOT NULL,
  PRIMARY KEY (`kode_mapel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_mata_pelajaran`
--

LOCK TABLES `tbl_mata_pelajaran` WRITE;
/*!40000 ALTER TABLE `tbl_mata_pelajaran` DISABLE KEYS */;
INSERT INTO `tbl_mata_pelajaran` VALUES ('Tahfidz','Tahfidz Quran');
/*!40000 ALTER TABLE `tbl_mata_pelajaran` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_nilai`
--

DROP TABLE IF EXISTS `tbl_nilai`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_nilai` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_surat` int NOT NULL,
  `nilai` varchar(100) DEFAULT NULL,
  `no_identitas` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=206 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_nilai`
--

LOCK TABLES `tbl_nilai` WRITE;
/*!40000 ALTER TABLE `tbl_nilai` DISABLE KEYS */;
INSERT INTO `tbl_nilai` VALUES (1,1,'0','1234567800'),(2,2,'0','1234567800'),(3,3,'0','1234567800'),(4,4,'0','1234567800'),(5,5,'0','1234567800'),(6,6,'0','1234567800'),(7,7,'0','1234567800'),(8,8,'0','1234567800'),(9,9,'0','1234567800'),(10,10,'0','1234567800'),(11,11,'0','1234567800'),(12,12,'0','1234567800'),(13,13,'0','1234567800'),(14,14,'0','1234567800'),(15,15,'0','1234567800'),(16,16,'0','1234567800'),(17,17,'0','1234567800'),(18,18,'0','1234567800'),(19,19,'0','1234567800'),(20,20,'0','1234567800'),(21,21,'0','1234567800'),(22,22,'0','1234567800'),(23,23,'0','1234567800'),(24,24,'0','1234567800'),(25,25,'0','1234567800'),(26,26,'0','1234567800'),(27,27,'0','1234567800'),(28,28,'0','1234567800'),(29,29,'0','1234567800'),(30,30,'0','1234567800'),(31,31,'0','1234567800'),(32,32,'0','1234567800'),(33,33,'0','1234567800'),(34,34,'0','1234567800'),(35,35,'0','1234567800'),(36,36,'0','1234567800'),(37,37,'0','1234567800'),(38,38,'0','1234567800'),(39,39,'0','1234567800'),(40,40,'0','1234567800'),(41,41,'0','1234567800'),(42,1,'0','1234567811'),(43,2,'0','1234567811'),(44,3,'0','1234567811'),(45,4,'0','1234567811'),(46,5,'0','1234567811'),(47,6,'0','1234567811'),(48,7,'0','1234567811'),(49,8,'0','1234567811'),(50,9,'0','1234567811'),(51,10,'0','1234567811'),(52,11,'0','1234567811'),(53,12,'0','1234567811'),(54,13,'0','1234567811'),(55,14,'0','1234567811'),(56,15,'0','1234567811'),(57,16,'0','1234567811'),(58,17,'0','1234567811'),(59,18,'0','1234567811'),(60,19,'0','1234567811'),(61,20,'0','1234567811'),(62,21,'0','1234567811'),(63,22,'0','1234567811'),(64,23,'0','1234567811'),(65,24,'0','1234567811'),(66,25,'0','1234567811'),(67,26,'0','1234567811'),(68,27,'0','1234567811'),(69,28,'0','1234567811'),(70,29,'0','1234567811'),(71,30,'0','1234567811'),(72,31,'0','1234567811'),(73,32,'0','1234567811'),(74,33,'0','1234567811'),(75,34,'0','1234567811'),(76,35,'0','1234567811'),(77,36,'0','1234567811'),(78,37,'0','1234567811'),(79,38,'0','1234567811'),(80,39,'0','1234567811'),(81,40,'0','1234567811'),(82,41,'0','1234567811'),(83,1,'0','1234567822'),(84,2,'0','1234567822'),(85,3,'0','1234567822'),(86,4,'0','1234567822'),(87,5,'0','1234567822'),(88,6,'0','1234567822'),(89,7,'0','1234567822'),(90,8,'0','1234567822'),(91,9,'0','1234567822'),(92,10,'0','1234567822'),(93,11,'0','1234567822'),(94,12,'0','1234567822'),(95,13,'0','1234567822'),(96,14,'0','1234567822'),(97,15,'0','1234567822'),(98,16,'0','1234567822'),(99,17,'0','1234567822'),(100,18,'0','1234567822'),(101,19,'0','1234567822'),(102,20,'0','1234567822'),(103,21,'0','1234567822'),(104,22,'0','1234567822'),(105,23,'0','1234567822'),(106,24,'0','1234567822'),(107,25,'0','1234567822'),(108,26,'0','1234567822'),(109,27,'0','1234567822'),(110,28,'0','1234567822'),(111,29,'0','1234567822'),(112,30,'0','1234567822'),(113,31,'0','1234567822'),(114,32,'0','1234567822'),(115,33,'0','1234567822'),(116,34,'0','1234567822'),(117,35,'0','1234567822'),(118,36,'0','1234567822'),(119,37,'0','1234567822'),(120,38,'0','1234567822'),(121,39,'0','1234567822'),(122,40,'0','1234567822'),(123,41,'0','1234567822'),(124,1,'0','1234567833'),(125,2,'0','1234567833'),(126,3,'0','1234567833'),(127,4,'0','1234567833'),(128,5,'0','1234567833'),(129,6,'0','1234567833'),(130,7,'0','1234567833'),(131,8,'0','1234567833'),(132,9,'0','1234567833'),(133,10,'0','1234567833'),(134,11,'0','1234567833'),(135,12,'0','1234567833'),(136,13,'0','1234567833'),(137,14,'0','1234567833'),(138,15,'0','1234567833'),(139,16,'0','1234567833'),(140,17,'0','1234567833'),(141,18,'0','1234567833'),(142,19,'0','1234567833'),(143,20,'0','1234567833'),(144,21,'0','1234567833'),(145,22,'0','1234567833'),(146,23,'0','1234567833'),(147,24,'0','1234567833'),(148,25,'0','1234567833'),(149,26,'0','1234567833'),(150,27,'0','1234567833'),(151,28,'0','1234567833'),(152,29,'0','1234567833'),(153,30,'0','1234567833'),(154,31,'0','1234567833'),(155,32,'0','1234567833'),(156,33,'0','1234567833'),(157,34,'0','1234567833'),(158,35,'0','1234567833'),(159,36,'0','1234567833'),(160,37,'0','1234567833'),(161,38,'0','1234567833'),(162,39,'0','1234567833'),(163,40,'0','1234567833'),(164,41,'0','1234567833'),(165,1,'0','1234567844'),(166,2,'0','1234567844'),(167,3,'0','1234567844'),(168,4,'0','1234567844'),(169,5,'0','1234567844'),(170,6,'0','1234567844'),(171,7,'0','1234567844'),(172,8,'0','1234567844'),(173,9,'0','1234567844'),(174,10,'0','1234567844'),(175,11,'0','1234567844'),(176,12,'0','1234567844'),(177,13,'0','1234567844'),(178,14,'0','1234567844'),(179,15,'0','1234567844'),(180,16,'0','1234567844'),(181,17,'0','1234567844'),(182,18,'0','1234567844'),(183,19,'0','1234567844'),(184,20,'0','1234567844'),(185,21,'0','1234567844'),(186,22,'0','1234567844'),(187,23,'0','1234567844'),(188,24,'0','1234567844'),(189,25,'0','1234567844'),(190,26,'0','1234567844'),(191,27,'0','1234567844'),(192,28,'0','1234567844'),(193,29,'0','1234567844'),(194,30,'0','1234567844'),(195,31,'0','1234567844'),(196,32,'0','1234567844'),(197,33,'0','1234567844'),(198,34,'0','1234567844'),(199,35,'0','1234567844'),(200,36,'0','1234567844'),(201,37,'0','1234567844'),(202,38,'0','1234567844'),(203,39,'0','1234567844'),(204,40,'0','1234567844'),(205,41,'0','1234567844');
/*!40000 ALTER TABLE `tbl_nilai` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_siswa`
--

DROP TABLE IF EXISTS `tbl_siswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_siswa` (
  `no_identitas` varchar(150) NOT NULL,
  `nama_siswa` varchar(150) NOT NULL,
  `gender_siswa` varchar(150) NOT NULL,
  `alamat_siswa` varchar(250) NOT NULL,
  `tgl_lahir_siswa` varchar(50) NOT NULL,
  `id_kelas` int NOT NULL,
  PRIMARY KEY (`no_identitas`),
  KEY `tbl_siswa_ibfk_2` (`id_kelas`),
  CONSTRAINT `tbl_siswa_ibfk_1` FOREIGN KEY (`no_identitas`) REFERENCES `tbl_user` (`no_identitas`),
  CONSTRAINT `tbl_siswa_ibfk_2` FOREIGN KEY (`id_kelas`) REFERENCES `tbl_kelas` (`id_kelas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_siswa`
--

LOCK TABLES `tbl_siswa` WRITE;
/*!40000 ALTER TABLE `tbl_siswa` DISABLE KEYS */;
INSERT INTO `tbl_siswa` VALUES ('1234567800','Anas','L','Lebak','2010-12-01',1),('1234567811','Anis','P','Pandeglang','2010-01-05',2),('1234567822','Saeful','L','Serang','2010-10-28',3),('1234567833','Ruli','L','Jakarta','2010-05-05',4),('1234567844','Ratna','P','Lebak','2010-08-25',5),('1234567855','wahyu','L','Lebak','2023-10-30',2);
/*!40000 ALTER TABLE `tbl_siswa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_surat`
--

DROP TABLE IF EXISTS `tbl_surat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_surat` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_surat` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_surat`
--

LOCK TABLES `tbl_surat` WRITE;
/*!40000 ALTER TABLE `tbl_surat` DISABLE KEYS */;
INSERT INTO `tbl_surat` VALUES (1,'AN NAS'),(2,'AL FALAQ'),(3,'AL IKHLAS'),(4,'AL LAHAB'),(5,'AN NASR'),(6,'AL KAFIRUN'),(7,'AL KAUTSAR'),(8,'AL MA\'UN'),(9,'QURAISY'),(10,'AL FILL'),(11,'AL HUMAZAH'),(12,'AL ASHR'),(13,'AT TAKASUR'),(14,'AL QORIAH'),(15,'AL ADIYAT'),(16,'AL ZAL ZALAH'),(17,'AL BAYYINAH'),(18,'AL QODR'),(19,'AL ALAQ'),(20,'AT TIN'),(21,'AL INSYIRAH'),(22,'AD DUHA'),(23,'AL LAIL'),(24,'AS SYAM'),(25,'AL BALAD'),(26,'AL FAJR'),(27,'AL GHOSIYAH'),(28,'AL A\'LA'),(29,'AT THORIQ'),(30,'AL BURUJ'),(31,'AL INSYIQOQ'),(32,'AL MUTHOFIFIN'),(33,'AL INFITHOR'),(34,'AT TAKWIR'),(35,'A\'BASA'),(36,'AN NAZI\'AT'),(37,'AN NABA'),(38,'YASIN'),(39,'WAQIAH'),(40,'AR RAHMAN'),(41,'AL MULK');
/*!40000 ALTER TABLE `tbl_surat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_tahun_akademik`
--

DROP TABLE IF EXISTS `tbl_tahun_akademik`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_tahun_akademik` (
  `id_tahun_akademik` int NOT NULL AUTO_INCREMENT,
  `tahun_akademik` varchar(50) NOT NULL,
  `is_aktif` enum('y','n') NOT NULL,
  `semester_aktif` int NOT NULL,
  PRIMARY KEY (`id_tahun_akademik`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_tahun_akademik`
--

LOCK TABLES `tbl_tahun_akademik` WRITE;
/*!40000 ALTER TABLE `tbl_tahun_akademik` DISABLE KEYS */;
INSERT INTO `tbl_tahun_akademik` VALUES (2,'2017/2018','y',0),(3,'2018/2019','y',0);
/*!40000 ALTER TABLE `tbl_tahun_akademik` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_user` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `no_identitas` varchar(150) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `id_kelas` varchar(100) DEFAULT '0',
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `no_identitas` (`no_identitas`)
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_user`
--

LOCK TABLES `tbl_user` WRITE;
/*!40000 ALTER TABLE `tbl_user` DISABLE KEYS */;
INSERT INTO `tbl_user` VALUES (52,'000000','admin','e3afed0047b08059d0fada10f400c1e5','admin','0'),(73,'1234567800','anas-siswa','202cb962ac59075b964b07152d234b70','siswa','1'),(74,'1234567811','anis-siswa','202cb962ac59075b964b07152d234b70','siswa','2'),(75,'1234567822','saeful-siswa','202cb962ac59075b964b07152d234b70','siswa','3'),(76,'1234567833','ruli-siswa','202cb962ac59075b964b07152d234b70','siswa','4'),(77,'1234567844','ratna-siswa','202cb962ac59075b964b07152d234b70','siswa','5'),(78,'98765432111','saprudin-guru','202cb962ac59075b964b07152d234b70','guru','1'),(79,'98765432122','srikandi-guru','202cb962ac59075b964b07152d234b70','guru','2'),(80,'98765432133','junaedi-guru','202cb962ac59075b964b07152d234b70','guru','3'),(81,'98765432155','sulaeman-guru','202cb962ac59075b964b07152d234b70','guru','4'),(82,'98765432199','alinka-guru','202cb962ac59075b964b07152d234b70','guru','5'),(86,'1234567855','wahyu-siswa','202cb962ac59075b964b07152d234b70','siswa','2');
/*!40000 ALTER TABLE `tbl_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-11-14 19:02:41
