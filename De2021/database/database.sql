-- MySQL dump 10.13  Distrib 8.0.27, for Win64 (x86_64)
--
-- Host: localhost    Database: onthi2
-- ------------------------------------------------------
-- Server version	8.0.27

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
-- Table structure for table `baoduong`
--

DROP TABLE IF EXISTS `baoduong`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `baoduong` (
  `MABD` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `NGAYNHAN` varchar(50) DEFAULT NULL,
  `NGAYTRA` varchar(50) DEFAULT NULL,
  `SOKM` int DEFAULT NULL,
  `NOIDUNG` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `SOXE` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `THANHTIEN` int DEFAULT NULL,
  PRIMARY KEY (`MABD`),
  KEY `FK_SOXE` (`SOXE`),
  CONSTRAINT `FK_SOXE` FOREIGN KEY (`SOXE`) REFERENCES `xe` (`SOXE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `baoduong`
--

LOCK TABLES `baoduong` WRITE;
/*!40000 ALTER TABLE `baoduong` DISABLE KEYS */;
INSERT INTO `baoduong` VALUES ('BD001','2021-12-30',NULL,20000,'gà vl','MNXX001',NULL),('BD002','2021-12-30',NULL,20000,'scam vl','MNXX002',NULL);
/*!40000 ALTER TABLE `baoduong` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `congviec`
--

DROP TABLE IF EXISTS `congviec`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `congviec` (
  `MACV` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `TENCV` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `DONGIA` double DEFAULT NULL,
  PRIMARY KEY (`MACV`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `congviec`
--

LOCK TABLES `congviec` WRITE;
/*!40000 ALTER TABLE `congviec` DISABLE KEYS */;
INSERT INTO `congviec` VALUES ('CV001','Thay nhớt',200000),('CV002','Thay thắng',200000),('CV003','Kiểm tra vỏ',100000);
/*!40000 ALTER TABLE `congviec` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ct_bd`
--

DROP TABLE IF EXISTS `ct_bd`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ct_bd` (
  `MABD` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `MACV` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`MACV`,`MABD`),
  KEY `FK_MABD` (`MABD`),
  CONSTRAINT `FK_MABD` FOREIGN KEY (`MABD`) REFERENCES `baoduong` (`MABD`),
  CONSTRAINT `FK_MACV` FOREIGN KEY (`MACV`) REFERENCES `congviec` (`MACV`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ct_bd`
--

LOCK TABLES `ct_bd` WRITE;
/*!40000 ALTER TABLE `ct_bd` DISABLE KEYS */;
INSERT INTO `ct_bd` VALUES ('BD001','CV001'),('BD001','CV002'),('BD001','CV003');
/*!40000 ALTER TABLE `ct_bd` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `khachhang`
--

DROP TABLE IF EXISTS `khachhang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `khachhang` (
  `MAKHACHHANG` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `HOTENKH` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `DIACHI` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `SDT` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`MAKHACHHANG`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `khachhang`
--

LOCK TABLES `khachhang` WRITE;
/*!40000 ALTER TABLE `khachhang` DISABLE KEYS */;
INSERT INTO `khachhang` VALUES ('KH001','khoa','địa chỉ gì đó ở đây k ','0336773624'),('KH002','long','ko co dia chi','0333777222');
/*!40000 ALTER TABLE `khachhang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `xe`
--

DROP TABLE IF EXISTS `xe`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `xe` (
  `SOXE` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `HANGXE` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `NAMSX` varchar(50) DEFAULT NULL,
  `MAKHACHHANG` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`SOXE`),
  KEY `FK_MAKH` (`MAKHACHHANG`),
  CONSTRAINT `FK_MAKH` FOREIGN KEY (`MAKHACHHANG`) REFERENCES `khachhang` (`MAKHACHHANG`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `xe`
--

LOCK TABLES `xe` WRITE;
/*!40000 ALTER TABLE `xe` DISABLE KEYS */;
INSERT INTO `xe` VALUES ('MNXX001','Toyota','2021','KH001'),('MNXX002','Toyota','2021','KH002');
/*!40000 ALTER TABLE `xe` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-12-31 11:03:22
