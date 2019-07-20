-- MySQL dump 10.17  Distrib 10.3.16-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: shidiq
-- ------------------------------------------------------
-- Server version	10.3.16-MariaDB

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
-- Table structure for table `alternative`
--

DROP TABLE IF EXISTS `alternative`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `alternative` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama` text NOT NULL,
  `kode` text NOT NULL,
  `tgl_update` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alternative`
--

LOCK TABLES `alternative` WRITE;
/*!40000 ALTER TABLE `alternative` DISABLE KEYS */;
INSERT INTO `alternative` VALUES (1,'Rekayasa Perangkat Lunak','RPL','2019-07-17 00:03:30');
/*!40000 ALTER TABLE `alternative` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bobot`
--

DROP TABLE IF EXISTS `bobot`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bobot` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `kode` text NOT NULL,
  `kriteria` text NOT NULL,
  `bobot` text NOT NULL,
  `tgl_update` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bobot`
--

LOCK TABLES `bobot` WRITE;
/*!40000 ALTER TABLE `bobot` DISABLE KEYS */;
INSERT INTO `bobot` VALUES (1,'P1','Coba perbobotan lalalala','0.39','2019-07-20 14:10:39');
/*!40000 ALTER TABLE `bobot` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kelompok`
--

DROP TABLE IF EXISTS `kelompok`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kelompok` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama` text NOT NULL,
  `id_alternative` int(10) NOT NULL,
  `tgl_update` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kelompok`
--

LOCK TABLES `kelompok` WRITE;
/*!40000 ALTER TABLE `kelompok` DISABLE KEYS */;
INSERT INTO `kelompok` VALUES (1,'IT',1,'2019-07-17 00:45:24');
/*!40000 ALTER TABLE `kelompok` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kerja`
--

DROP TABLE IF EXISTS `kerja`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kerja` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_jurusan` int(10) NOT NULL,
  `tahun` text NOT NULL,
  `bobot` text NOT NULL,
  `jml_kerja` int(11) NOT NULL,
  `jml_wirausaha` int(11) NOT NULL,
  `jml_blmkerja` int(11) NOT NULL,
  `jml_kuliah` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `tgl_update` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kerja`
--

LOCK TABLES `kerja` WRITE;
/*!40000 ALTER TABLE `kerja` DISABLE KEYS */;
/*!40000 ALTER TABLE `kerja` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `level`
--

DROP TABLE IF EXISTS `level`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `level` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `kode` text NOT NULL,
  `nama` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `level`
--

LOCK TABLES `level` WRITE;
/*!40000 ALTER TABLE `level` DISABLE KEYS */;
INSERT INTO `level` VALUES (1,'ADMIN','ADMIN'),(2,'WAKAKUR','WAKA KURIKULUM'),(3,'KAKOM','KEPALA KOMPETENSI'),(4,'KABKK','KEPALA BURSA KERJA'),(5,'WAKASARPRAS','WAKA SARANA & PRASARANA');
/*!40000 ALTER TABLE `level` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `peminatan`
--

DROP TABLE IF EXISTS `peminatan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `peminatan` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_jurusan` int(10) NOT NULL,
  `bobot` text NOT NULL,
  `pernyataan` text NOT NULL,
  `tgl_update` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `peminatan`
--

LOCK TABLES `peminatan` WRITE;
/*!40000 ALTER TABLE `peminatan` DISABLE KEYS */;
INSERT INTO `peminatan` VALUES (1,1,'0.12','coba pernyataan','2019-07-20 13:30:19');
/*!40000 ALTER TABLE `peminatan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `penghasilan`
--

DROP TABLE IF EXISTS `penghasilan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `penghasilan` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ranges` text NOT NULL,
  `bobot` text NOT NULL,
  `tgl_update` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `penghasilan`
--

LOCK TABLES `penghasilan` WRITE;
/*!40000 ALTER TABLE `penghasilan` DISABLE KEYS */;
INSERT INTO `penghasilan` VALUES (1,'0 - Rp. 500.000, 00.','0.35','2019-07-17 00:14:52');
/*!40000 ALTER TABLE `penghasilan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sarpras`
--

DROP TABLE IF EXISTS `sarpras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sarpras` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama` text NOT NULL,
  `jumlah` text NOT NULL,
  `bobot` text NOT NULL,
  `tgl_update` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sarpras`
--

LOCK TABLES `sarpras` WRITE;
/*!40000 ALTER TABLE `sarpras` DISABLE KEYS */;
/*!40000 ALTER TABLE `sarpras` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_log`
--

DROP TABLE IF EXISTS `user_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_log` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nama` text NOT NULL,
  `no_telp` text NOT NULL,
  `email` text NOT NULL,
  `user` text NOT NULL,
  `password` text NOT NULL,
  `id_level` text NOT NULL,
  `tgl_update` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_log`
--

LOCK TABLES `user_log` WRITE;
/*!40000 ALTER TABLE `user_log` DISABLE KEYS */;
INSERT INTO `user_log` VALUES (1,'ADMIN','00000000000','ADMIN@HOST.COM','admin','0eff44c362b13fa25fc88a412f5512e1','1','2019-07-16 23:48:38'),(4,'fitro firmansyah','089580508080','fitro.firmansyah@gmail.com','fitro','62d64ff2c25b172872dd12d8cb5157c1','2','2019-07-17 00:15:13'),(5,'bayu','0000000000','bay@b.y','bayu','a430e06de5ce438d499c2e4063d60fd6','3','2019-07-20 13:31:47'),(6,'sri','098765743234','jhj@kjkhj.asds','sri','893ed84f4731dab621ddcea01df86ea7','4','2019-07-20 14:11:40'),(7,'sari','12345676787','sari@mmm.c','sari','a87bcf310c4fdf2a80f2f3d97f1f9424','5','2019-07-20 17:37:31');
/*!40000 ALTER TABLE `user_log` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-07-20 17:51:51
