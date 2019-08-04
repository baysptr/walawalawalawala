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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alternative`
--

LOCK TABLES `alternative` WRITE;
/*!40000 ALTER TABLE `alternative` DISABLE KEYS */;
INSERT INTO `alternative` VALUES (1,'Akuntansi dan Keuangan Lembaga','AKL','2019-07-22 21:00:01'),(5,'Otomatisasi dan Tata Kelola Perkantoran','OTKP','2019-07-22 21:00:17'),(6,'Bisnis Daring dan Pemasaran','BDP','2019-07-22 21:00:39'),(7,'Teknik Komputer dan Jaringan','TKJ','2019-07-22 21:00:59'),(8,'Multimedia','MM','2019-07-22 21:01:35');
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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bobot`
--

LOCK TABLES `bobot` WRITE;
/*!40000 ALTER TABLE `bobot` DISABLE KEYS */;
INSERT INTO `bobot` VALUES (3,'K01','Peminatan','0.35','2019-07-22 21:04:56'),(4,'K02','Penghasilan Orang Tua','0.15','2019-07-22 21:05:12'),(5,'K03','Kelulusan','0.15','2019-07-22 21:05:26'),(6,'K04','Penyerapan Dunia Kerja','0.1','2019-07-22 21:05:40'),(7,'K05','Sarana Prasarana','0.1','2019-07-22 21:05:52'),(8,'K06','Nilai Mapel','0.15','2019-07-22 21:06:04');
/*!40000 ALTER TABLE `bobot` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detail_kelompok`
--

DROP TABLE IF EXISTS `detail_kelompok`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detail_kelompok` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_kelompok` int(10) NOT NULL,
  `id_jurusan` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detail_kelompok`
--

LOCK TABLES `detail_kelompok` WRITE;
/*!40000 ALTER TABLE `detail_kelompok` DISABLE KEYS */;
INSERT INTO `detail_kelompok` VALUES (3,4,1),(5,4,5),(6,5,6),(7,4,6),(8,4,7),(9,4,8),(10,5,1),(11,5,5),(12,5,7),(13,5,8),(14,6,1),(15,6,5),(16,6,6),(17,6,7),(18,6,8),(19,7,1),(20,7,5),(21,7,6),(22,7,7),(23,7,8);
/*!40000 ALTER TABLE `detail_kelompok` ENABLE KEYS */;
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
  `tgl_update` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kelompok`
--

LOCK TABLES `kelompok` WRITE;
/*!40000 ALTER TABLE `kelompok` DISABLE KEYS */;
INSERT INTO `kelompok` VALUES (4,'Dasar Bidang Keahlian','2019-07-22 21:12:53'),(5,'Dasar Progam Keahlian','2019-07-22 21:13:32'),(6,'Kompetensi Keahlian','2019-07-22 21:14:17'),(7,'Muatan Lokal','2019-07-22 21:14:25');
/*!40000 ALTER TABLE `kelompok` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kelulusan`
--

DROP TABLE IF EXISTS `kelulusan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kelulusan` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_jurusan` int(10) NOT NULL,
  `bobot` text NOT NULL,
  `persentase` text NOT NULL,
  `tahun` text NOT NULL,
  `tgl_update` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kelulusan`
--

LOCK TABLES `kelulusan` WRITE;
/*!40000 ALTER TABLE `kelulusan` DISABLE KEYS */;
INSERT INTO `kelulusan` VALUES (2,1,'5','98','2019','2019-07-22 21:07:13'),(3,5,'4','95','2019','2019-07-22 21:07:19'),(4,6,'5','98','2019','2019-07-22 21:07:31'),(5,7,'5','96,5','2019','2019-07-22 21:07:51'),(6,8,'5','100','2019','2019-07-22 21:08:28');
/*!40000 ALTER TABLE `kelulusan` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kerja`
--

LOCK TABLES `kerja` WRITE;
/*!40000 ALTER TABLE `kerja` DISABLE KEYS */;
INSERT INTO `kerja` VALUES (2,1,'2018','4',85,13,29,17,115,'2019-07-22 21:32:11'),(3,5,'2018','4',99,12,42,27,118,'2019-07-22 21:34:51'),(5,7,'2018','4',41,9,17,5,38,'2019-07-22 21:38:59'),(6,6,'2018','5',52,14,0,6,72,'2019-07-22 21:39:55'),(7,8,'2018','4',25,8,19,10,24,'2019-07-22 21:41:02');
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `level`
--

LOCK TABLES `level` WRITE;
/*!40000 ALTER TABLE `level` DISABLE KEYS */;
INSERT INTO `level` VALUES (1,'ADMIN','ADMIN'),(2,'WAKAKUR','WAKA KURIKULUM'),(3,'KAKOM','KEPALA KOMPETENSI'),(4,'KABKK','KEPALA BURSA KERJA'),(5,'WAKASARPRAS','WAKA SARANA & PRASARANA'),(6,'GUEST','PESERTA PEMINATAN');
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
  `id_kelompok` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `peminatan`
--

LOCK TABLES `peminatan` WRITE;
/*!40000 ALTER TABLE `peminatan` DISABLE KEYS */;
INSERT INTO `peminatan` VALUES (4,5,'2','Saya sering menghubungi seseorang dengan telepon\r\n','2019-07-23 17:57:35',4),(5,1,'2','Saya sering menghitung dengan kalkulator','2019-07-23 17:58:10',4),(6,6,'2','Saya sering melakukan konfirmasi barang dengan telepon','2019-07-23 17:58:20',4),(7,7,'2','Saya sering mengoperasikan alat komunikasi','2019-07-23 17:58:34',4),(8,8,'2','Saya sering menggunakan komputer untuk menggambar','2019-07-23 17:58:47',4),(9,5,'2','Saya lebih suka mengirim email\r\n','2019-07-23 18:47:19',4),(10,1,'2','Saya lebih suka mencari kurs mata uang terbaru di internet','2019-07-23 18:47:36',4),(11,6,'2','Saya lebih suka menggunakan internet untuk mencari barang','2019-07-23 18:47:50',4),(12,7,'2','Saya lebih suka memainkan laptop','2019-07-23 18:48:05',4),(13,8,'2','Saya lebih suka kamera','2019-07-23 18:48:20',4),(14,5,'2','Saya suka memilih alat kantor','2019-07-23 18:48:34',4),(15,1,'2','Saya suka mencatat keuangan sendiri','2019-07-23 18:48:46',4),(16,6,'2','Saya suka membagi pekerjaan sesuai keahlian','2019-07-23 18:48:59',4),(17,7,'2','Saya suka mengukur jarak dalam penempatan wifi','2019-07-23 18:49:13',4),(18,8,'2','Saya suka jarak ideal dalam pengambilan foto','2019-07-23 18:49:27',4),(19,5,'3','Saya sering mengetik tulisan dikomputer','2019-07-23 18:49:40',5),(20,1,'3','Saya pernah melakukan perhitungan dengan digit banyak','2019-07-23 18:49:53',5),(21,6,'3','Saya pernah membantu orang dalam memilih barang','2019-07-23 18:50:20',5),(22,7,'3','Saya pernah memasang perkabelan','2019-07-23 18:50:32',5),(23,8,'3','Saya pernah membuat gambar jaringan internet','2019-07-23 18:50:46',5),(24,5,'3','Saya tertarik membuat surat resmi antar perusahaan','2019-07-23 18:50:58',5),(25,1,'3','Saya tertarik membuat peraturan pajak di perusahaan sendiri','2019-07-23 18:51:09',5),(26,6,'3','Saya tertarik merintis sebuah toko','2019-07-23 18:51:20',5),(27,7,'3','Saya tertarik membuat simulator pengelolaan wifi','2019-07-23 18:51:31',5),(28,8,'3','Saya tertarik membuat simulator kamera studio','2019-07-23 18:51:53',5),(29,5,'3','Saya ingin mengumpulkan buku yang saya suka','2019-07-23 18:52:13',5),(30,1,'3','Saya ingin menghitung biaya pengeluaran setiap hari','2019-07-23 18:52:27',5),(31,6,'3','Saya ingin mudah berbicara dengan calon pelanggan','2019-07-23 18:53:09',5),(32,7,'3','Saya ingin membuat mikro kontroler','2019-07-23 18:52:59',5),(33,8,'3','Saya ingin belajar software pengolah gambar','2019-07-23 18:53:31',5),(34,5,'4','Saya tertarik memilih karyawan untuk bekerja di perusahaan','2019-07-23 18:53:45',6),(35,1,'4','Saya tertarik menghitung gaji-gaji karyawan di perusahaan','2019-07-23 18:53:58',6),(36,6,'4','Saya tertarik menata barang agar disukai oleh pelanggan','2019-07-23 18:54:15',6),(37,7,'4','Saya tertarik mendirikan layanan wifi masuk desa','2019-07-23 18:54:31',6),(38,8,'4','Saya tertarik membuat iklan masyarakat','2019-07-23 18:54:42',6),(39,5,'4','Saya suka mengelola barang-barang di perusahaan','2019-07-23 18:55:01',6),(40,1,'4','Saya suka membuat biaya pajak bagi perusahaan','2019-07-23 18:55:13',6),(41,6,'4','Saya suka membagikan promosi produk di internet','2019-07-23 18:55:26',6),(42,7,'4','Saya suka memantau jaringan wifi lewat laptop','2019-07-23 18:55:41',6),(43,8,'4','Saya suka melakukan edit video audio','2019-07-23 18:55:51',6),(44,5,'4','Saya ingin bekerja sebagai sekertaris perusahaan','2019-07-23 18:56:05',6),(45,1,'4','Saya ingin bekerja sebagai staff keuangan','2019-07-23 18:56:19',6),(46,6,'4','Saya ingin bekerja sebagai kasir retail','2019-07-23 18:56:32',6),(47,7,'4','Saya ingin bekerja sebagai staff jaringan internet','2019-07-23 18:57:13',6),(48,8,'4','Saya ingin bekerja sebagai animator','2019-07-23 18:56:59',6),(49,5,'1','Saya suka menjadi karyawan terbaik','2019-07-23 18:57:33',7),(50,1,'1','Saya suka menghitung perdagangan','2019-07-23 18:57:44',7),(51,6,'1','Saya suka mendapat untung dari usaha sendiri','2019-07-23 18:57:55',7),(52,7,'1','Saya suka menyimpan file di internet','2019-07-23 18:58:11',7),(53,8,'1','Saya suka mendesain progam baru\r\n','2019-07-23 18:58:28',7),(54,5,'1','Saya tertarik menjadi panutan di perusahaan','2019-07-23 18:58:38',7),(55,1,'1','Saya tertatrik menjadi senior akunting','2019-07-23 18:58:47',7),(56,6,'1','Saya tertatrik menjadi wirausaha muda','2019-07-23 18:58:56',7),(57,7,'1','Saya tertarik menjadi admin data internet','2019-07-23 18:59:05',7),(58,8,'1','Saya tertarik menjadi pendesain progam komputer','2019-07-23 18:59:16',7),(59,5,'1','Saya ingin belajar memiliki sikap yang baik diperusahaan','2019-07-23 18:59:26',7),(60,1,'1','Saya ingin balajar menghitung keuangan dalam perdagangan','2019-07-23 18:59:37',7),(61,6,'1','Saya ingin belajar membuka usaha saya sendiri','2019-07-23 18:59:48',7),(62,7,'1','Saya ingin belajar membuat penyimpanan secara interntet','2019-07-23 19:00:00',7),(63,8,'1','Saya ingin belajar membuat desain progam','2019-07-23 19:00:09',7);
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `penghasilan`
--

LOCK TABLES `penghasilan` WRITE;
/*!40000 ALTER TABLE `penghasilan` DISABLE KEYS */;
INSERT INTO `penghasilan` VALUES (1,'0','1','2019-07-22 21:02:15'),(3,'0 - 900.000','3','2019-07-22 21:02:28'),(4,'1.000.000 - 3.000.000','4','2019-07-22 21:02:46'),(5,'3.000.000 - 5.000.000','5','2019-07-22 21:03:10'),(6,'> 5.000.000','2','2019-07-22 21:03:32');
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sarpras`
--

LOCK TABLES `sarpras` WRITE;
/*!40000 ALTER TABLE `sarpras` DISABLE KEYS */;
INSERT INTO `sarpras` VALUES (2,'Alat Peraga','39','4','2019-07-23 18:01:02'),(3,'Ruang Praktek','8','3','2019-07-23 18:01:22'),(4,'Infrastruktur IT','11','2','2019-07-23 18:01:36'),(5,'Kemudahan Akses','','1','2019-07-23 18:02:12');
/*!40000 ALTER TABLE `sarpras` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `summary`
--

DROP TABLE IF EXISTS `summary`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `summary` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_peserta` int(10) NOT NULL,
  `kode` text NOT NULL,
  `akl` text NOT NULL,
  `otkp` text NOT NULL,
  `bdp` text NOT NULL,
  `tkj` text NOT NULL,
  `mm` text NOT NULL,
  `tgl_update` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `summary`
--

LOCK TABLES `summary` WRITE;
/*!40000 ALTER TABLE `summary` DISABLE KEYS */;
/*!40000 ALTER TABLE `summary` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_log`
--

LOCK TABLES `user_log` WRITE;
/*!40000 ALTER TABLE `user_log` DISABLE KEYS */;
INSERT INTO `user_log` VALUES (1,'ADMIN','00000000000','ADMIN@HOST.COM','admin','0eff44c362b13fa25fc88a412f5512e1','1','2019-07-16 23:48:38'),(4,'fitro firmansyah','089580508080','fitro.firmansyah@gmail.com','fitro','62d64ff2c25b172872dd12d8cb5157c1','2','2019-07-17 00:15:13'),(5,'bayu','0000000000','bay@b.y','bayu','a430e06de5ce438d499c2e4063d60fd6','3','2019-07-20 13:31:47'),(6,'sri','098765743234','jhj@kjkhj.asds','sri','d1565ebd8247bbb01472f80e24ad29b6','4','2019-07-22 21:18:57'),(7,'sari','12345676787','sari@mmm.c','sari','a87bcf310c4fdf2a80f2f3d97f1f9424','5','2019-07-22 21:19:55'),(9,'susi','089580508080','fitro.firmansyah@gmail.com','susi','536931d80decb18c33db9612bdd004d4','6','2019-08-04 19:11:27');
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

-- Dump completed on 2019-08-04 19:16:27
