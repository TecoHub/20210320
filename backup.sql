-- MySQL dump 10.14  Distrib 5.5.56-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: MenuNagisa
-- ------------------------------------------------------
-- Server version	5.5.56-MariaDB

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
-- Table structure for table `confirmedorders`
--

DROP TABLE IF EXISTS `confirmedorders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `confirmedorders` (
  `productname` varchar(50) NOT NULL DEFAULT '',
  `productprice` int(11) DEFAULT NULL,
  `productquantity` int(11) DEFAULT NULL,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `or_userid` varchar(20) NOT NULL,
  `order_notes` varchar(200) NOT NULL DEFAULT '',
  `or_stat` varchar(12) NOT NULL DEFAULT 'A',
  `or_order_id` int(20) NOT NULL,
  `or_ref_id` int(11) NOT NULL AUTO_INCREMENT,
  `tableno` int(11) DEFAULT NULL,
  `roomno` int(11) DEFAULT NULL,
  `guestname` varchar(25) DEFAULT NULL,
  `cd1` int(11) DEFAULT NULL,
  `cd2` int(11) DEFAULT NULL,
  `or_drinktype` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`or_ref_id`)
) ENGINE=InnoDB AUTO_INCREMENT=787 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `confirmedorders`
--

LOCK TABLES `confirmedorders` WRITE;
/*!40000 ALTER TABLE `confirmedorders` DISABLE KEYS */;
INSERT INTO `confirmedorders` VALUES ('熱燗(普通酒) 2合徳利',1080,1,'2020-12-19 00:23:26','','','A',432,708,101,301,'MADIH EL MEHDI',12422,30,NULL),('ｱｲｽｺｰﾋｰ',540,1,'2020-12-19 00:23:26','','','A',432,709,101,301,'MADIH EL MEHDI',12127,30,NULL),('[北海道]北の節純米酒(+4)グラス',630,1,'2020-12-19 00:23:26','','','A',432,710,101,301,'MADIH EL MEHDI',12050,30,NULL),('生ビール(サッポロクラシック)',630,1,'2020-12-19 00:23:26','','','A',432,711,101,301,'MADIH EL MEHDI',12970,30,NULL),('渚の雫　(+4)　グラス',540,2,'2020-12-19 00:55:29','','','A',433,712,115,472,'㈱ホットハウス',12057,30,NULL),('渚の雫　(+4)　ボトル　900ｍｌ',2250,1,'2020-12-19 00:55:29','','','A',433,713,115,472,'㈱ホットハウス',12340,30,NULL),('[北海道]北の節純米酒(+4)グラス',630,1,'2020-12-22 05:09:52','','','A',434,714,102,402,'川内　孝二',12050,30,NULL),('[新潟県]久保田千寿吟酸(+6)グラス',630,1,'2020-12-22 05:09:52','','','A',434,715,102,402,'川内　孝二',12056,30,NULL),('[北海道]北の節純米酒(+4)グラス',630,1,'2020-12-23 05:12:28','','','A',435,716,102,405,'鈴木　康広',12050,30,NULL),('[新潟県]久保田千寿吟酸(+6)グラス',630,1,'2020-12-23 05:12:28','','','A',435,717,102,405,'鈴木　康広',12056,30,NULL),('[北海道]北の節純米酒(+4)グラス',630,1,'2020-12-25 04:58:26','','','A',436,720,102,405,'川内　孝二',12050,30,NULL),('[新潟県]久保田千寿吟酸(+6)グラス',630,1,'2020-12-25 04:58:26','','','A',436,721,102,405,'川内　孝二',12056,30,NULL),('鮨 かんぱち',198,2,'2020-12-25 07:27:02','','','A',437,722,102,403,'湯淺　佐和子',12210,30,NULL),('ｱｲｽｺｰﾋｰ',540,2,'2020-12-25 07:27:02','','','A',437,723,102,403,'湯淺　佐和子',12127,30,NULL),('鮨 かんぱち',198,1,'2020-12-29 05:11:45','','','A',438,724,102,403,'鈴木　康広',12210,30,NULL),('ｱｲｽｺｰﾋｰ',540,1,'2020-12-29 05:11:45','','','A',438,725,102,403,'鈴木　康広',12127,30,NULL),('[北海道]北の節純米酒(+4)グラス',560,1,'2020-12-31 00:45:38','','','A',439,726,101,301,'MADIH EL MEHDI',12050,30,NULL),('生ビール(サッポロクラシック)',630,2,'2020-12-31 02:22:06','','','A',440,727,101,301,'MADIH EL MEHDI',12970,30,NULL),('サントリーオールド(ダブル)',1080,1,'2020-12-31 04:23:04','','','A',441,728,101,301,'MADIH EL MEHDI',12549,30,NULL),('スパークリングワイン　750ｍｌ(赤.白)',2700,1,'2020-12-31 08:39:54','','','A',442,729,115,472,'㈱ホットハウス',12286,30,NULL),('[北海道]北の節純米酒(+4)グラス',630,1,'2021-01-06 04:34:06','','','A',443,730,115,473,'㈱ホットハウス',12050,30,NULL),('[新潟県]久保田千寿吟酸(+6)グラス',630,1,'2021-01-06 04:34:06','','','A',443,731,115,473,'㈱ホットハウス',12056,30,NULL),('鮨 かんぱち',198,2,'2021-01-06 04:35:40','','','A',444,732,115,472,'㈱ホットハウス',12210,30,NULL),('[青森県]豊盃純米吟酒(土0)グラス',720,1,'2021-01-06 04:56:22','','','A',445,733,101,301,'MADIH EL MEHDI',12966,30,NULL),('熱燗(普通酒)1合徳利',594,2,'2021-01-06 04:56:22','','','A',445,734,101,301,'MADIH EL MEHDI',12377,30,NULL),('熱燗(普通酒) 2合徳利',1080,1,'2021-01-06 04:56:22','','','A',445,735,101,301,'MADIH EL MEHDI',12422,30,NULL),('[北海道]北の節純米酒(+4)グラス',630,1,'2021-01-06 05:29:42','','','A',446,736,115,472,'㈱ホットハウス',12050,30,NULL),('[北海道]北の節純米酒(+4)グラス',630,2,'2021-01-06 06:31:55','','','A',447,737,102,403,'湯淺　佐和子',12050,30,NULL),('[北海道]北の節純米酒(+4)グラス',630,1,'2021-01-07 00:52:17','','','A',448,738,101,301,'MADIH EL MEHDI',12050,30,NULL),('トライアングル　60ｍｌ',450,1,'2021-01-07 01:38:59','','','A',449,739,102,405,'鈴木　康広',12524,30,NULL),('鮨 かんぱち',198,1,'2021-01-07 08:06:26','','','A',450,740,115,471,'㈱ホットハウス',12210,30,NULL),('ｱｲｽｺｰﾋｰ',540,1,'2021-01-07 08:06:26','','','A',450,741,115,471,'㈱ホットハウス',12127,30,NULL),('サントリーオールド(ダブル)',1080,2,'2021-01-07 08:06:26','','','A',450,742,115,471,'㈱ホットハウス',12549,30,NULL),('ハイボール',540,3,'2021-01-07 08:06:26','','','A',450,743,115,471,'㈱ホットハウス',12678,30,NULL),('サントリーオールド(シングル)',540,1,'2021-01-07 08:06:26','','','A',450,744,115,471,'㈱ホットハウス',12548,30,NULL),('熱燗(普通酒) 2合徳利',1080,1,'2021-01-07 08:06:26','','','A',450,745,115,471,'㈱ホットハウス',12422,30,NULL),('生ビール(サッポロクラシック)',630,2,'2021-01-07 08:18:14','','','A',451,746,101,301,'MADIH EL MEHDI',12970,30,NULL),('[北海道]北の節純米酒(+4)グラス',630,1,'2021-01-20 05:18:25','','','A',452,747,102,405,'川内　孝二',12050,30,NULL),('[北海道]北の節純米酒(+4)グラス',630,1,'2021-02-06 02:46:08','','','A',453,748,102,405,'川内　孝二',12050,30,NULL),('熱燗(普通酒)1合徳利',594,1,'2021-02-06 02:46:08','','','A',453,749,102,405,'川内　孝二',12377,30,NULL),('ノンアルコールビール',450,1,'2021-02-19 04:51:47','','','A',454,750,102,402,'鈴木　康広',12954,30,NULL),('[北海道]北の節純米酒(+4)グラス',630,1,'2021-02-19 04:55:01','','','A',455,751,102,402,'湯淺　佐和子',12050,30,NULL),('ノンアルコールビール',450,2,'2021-02-19 04:57:51','','','A',456,752,102,402,'鈴木　康広',12954,30,NULL),('熱燗(普通酒) 2合徳利',1080,1,'2021-03-05 01:53:48','','','A',457,753,102,405,'鈴木　康広',12422,30,NULL),('[青森県]豊盃純米吟酒(土0)グラス',720,1,'2021-03-05 01:53:48','','','A',457,754,102,405,'鈴木　康広',12966,30,NULL),('生ビール(サッポロクラシック)',630,2,'2021-03-12 07:22:37','','','A',458,755,101,301,'MADIH EL MEHDI',12970,30,NULL),('ノンアルコールビール',450,2,'2021-03-12 07:22:37','','','A',458,756,101,301,'MADIH EL MEHDI',12954,30,NULL),('[北海道]北の節純米酒(+4)グラス',630,2,'2021-03-12 07:23:20','','','A',459,757,101,301,'MADIH EL MEHDI',12050,30,NULL),('[新潟県]久保田千寿吟酸(+6)グラス',630,2,'2021-03-12 07:23:20','','','A',459,758,101,301,'MADIH EL MEHDI',12056,30,NULL),('[北海道]北の節純米酒(+4)グラス',630,2,'2021-03-12 07:37:33','','','A',460,759,101,301,'MADIH EL MEHDI',12050,30,NULL),('[新潟県]久保田千寿吟酸(+6)グラス',630,2,'2021-03-12 07:37:33','','','A',460,760,101,301,'MADIH EL MEHDI',12056,30,NULL),('[北海道]北の節純米酒(+4)グラス',630,2,'2021-03-12 07:39:40','','','A',461,761,101,301,'MADIH EL MEHDI',12050,30,NULL),('[新潟県]久保田千寿吟酸(+6)グラス',630,2,'2021-03-12 07:39:40','','','A',461,762,101,301,'MADIH EL MEHDI',12056,30,NULL),('ｱｲｽｺｰﾋｰ',540,2,'2021-03-12 07:42:45','','','A',462,763,101,301,'MADIH EL MEHDI',12127,30,NULL),('donuts',600,1,'2021-03-19 05:46:49','','','A',463,764,102,405,'川内　孝二',7777,99999,NULL),('donuts',1800,2,'2021-03-19 05:48:28','','','A',464,765,102,405,'川内　孝二',90009,30,NULL),('donuts',600,1,'2021-03-19 05:51:17','','','A',465,766,102,402,'鈴木　康広',70007,NULL,NULL),('cake',400,1,'2021-03-19 06:07:23','','','A',466,767,102,402,'鈴木　康広',50057,NULL,NULL),('[北海道]北の節純米酒(+4)グラス',630,2,'2021-03-19 08:56:03','','','A',467,768,102,405,'川内　孝二',12050,30,NULL),('test',660,1,'2021-03-20 01:17:59','','','A',468,769,102,405,'川内　孝二',2222,NULL,NULL),('test',2750,1,'2021-03-23 01:53:20','633300','','A',469,770,102,402,'鈴木　康広',30,1111,NULL),('test2',800,2,'2021-03-23 01:54:08','633300','','A',470,771,102,405,'川内　孝二',NULL,4444,NULL),('test',2750,1,'2021-03-23 01:55:51','633300','','A',471,772,102,403,'湯淺　佐和子',30,1111,NULL),('test',2750,1,'2021-03-23 01:57:11','633300','','A',472,773,102,403,'湯淺　佐和子',30,1111,NULL),('test2',800,5,'2021-03-23 01:57:30','633300','','A',473,774,102,403,'湯淺　佐和子',NULL,4444,NULL),('test2',3500,1,'2021-03-23 01:58:31','633300','','A',474,775,102,403,'湯淺　佐和子',30,3333,NULL),('test',2750,1,'2021-03-23 02:04:34','735300','','A',475,776,115,472,'㈱ホットハウス',30,1111,NULL),('test',660,2,'2021-03-25 00:30:54','633300','','A',476,777,102,405,'川内　孝二',NULL,2222,NULL),('test2',800,1,'2021-03-25 00:31:59','633300','','A',477,778,102,405,'川内　孝二',NULL,4444,NULL),('test2',3500,1,'2021-03-25 00:32:29','633300','','A',478,779,102,405,'川内　孝二',30,3333,NULL),('test',660,1,'2021-03-25 00:40:44','633300','','A',479,780,102,403,'湯淺　佐和子',NULL,2222,NULL),('test',2750,1,'2021-03-25 01:32:47','633300','','A',480,781,102,403,'湯淺　佐和子',30,1111,NULL),('test',660,1,'2021-03-25 01:44:02','633300','','A',481,782,102,403,'湯淺　佐和子',NULL,2222,NULL),('渚の雫　(+4)',2750,1,'2021-03-25 07:43:20','633300','','A',482,783,102,405,'川内　孝二',30,1111,NULL),('渚の雫　(+4)',2750,1,'2021-03-25 08:11:31','633300','','A',483,784,101,301,'MADIH EL MEHDI',30,1111,NULL),('サワー(レモン.グレープフルーツ .巨峰.ウーロン.緑茶)',660,1,'2021-03-25 08:16:18','633300','','A',484,785,102,403,'湯淺　佐和子',30,3457,NULL),('渚の夢　(+10)',880,1,'2021-03-25 08:28:24','633300','','A',485,786,102,403,'湯淺　佐和子',NULL,4444,NULL);
/*!40000 ALTER TABLE `confirmedorders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `discount`
--

DROP TABLE IF EXISTS `discount`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `discount` (
  `refid` int(20) NOT NULL AUTO_INCREMENT,
  `discount_name` varchar(100) NOT NULL,
  `disc_per` int(11) NOT NULL,
  `active` int(1) NOT NULL,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`refid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `discount`
--

LOCK TABLES `discount` WRITE;
/*!40000 ALTER TABLE `discount` DISABLE KEYS */;
INSERT INTO `discount` VALUES (1,'10% セルフオーダー割引',10,1,'2020-12-31 01:29:07'),(2,'15％ ホリデーセール',15,0,'2020-12-31 01:29:38');
/*!40000 ALTER TABLE `discount` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `drinks`
--

DROP TABLE IF EXISTS `drinks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `drinks` (
  `d_refid` int(20) NOT NULL AUTO_INCREMENT,
  `CD1` int(11) NOT NULL,
  `CD2` int(11) NOT NULL,
  `product` varchar(150) NOT NULL,
  `price` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `drinkinfo` varchar(150) DEFAULT NULL,
  `productimage` varchar(200) DEFAULT NULL,
  `stock` varchar(10) NOT NULL DEFAULT '可用',
  `drinktype` varchar(20) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `drinkFlg` tinyint(4) DEFAULT '1',
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `glass_CID` int(11) DEFAULT NULL,
  `glass_CID2` int(11) DEFAULT NULL,
  `glass_price` int(11) DEFAULT NULL,
  `menus` varchar(10) NOT NULL DEFAULT '1',
  `drink_type` varchar(20) DEFAULT NULL,
  `groups` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`d_refid`)
) ENGINE=InnoDB AUTO_INCREMENT=95 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `drinks`
--

LOCK TABLES `drinks` WRITE;
/*!40000 ALTER TABLE `drinks` DISABLE KEYS */;
INSERT INTO `drinks` VALUES (85,30,1111,'渚の雫　(+4)',2750,'オリジナルボトル','喉が渇いたら素敵な飲み物','554836267_test.png','可用',NULL,1,1,'2021-03-20 00:25:01',0,2222,660,'1',NULL,'30-1111'),(86,30,3333,'渚の夢　(+10)',3850,'オリジナルボトル','喉が渇いたら素敵な飲み物','1824185144_test2.png','可用',NULL,1,1,'2021-03-20 00:29:24',0,4444,880,'1',NULL,'30-3333'),(88,30,56457,'[北海道]北 の節純米酒 (+4)',770,'日本酒','here','1227784038_test1.png','可用',NULL,1,1,'2021-03-25 04:39:57',0,0,0,'2',NULL,'30-56457'),(89,30,12455,'[新潟県]久保田 千寿吟酸 (+6)',770,'日本酒','here','1079993530_test2.png','可用',NULL,1,1,'2021-03-25 04:40:50',0,0,0,'2',NULL,'30-12455'),(90,30,7845,'[青森県]豊盃純 米吟酒(土0)',880,'日本酒','here','2086837698_test3.png','可用',NULL,1,1,'2021-03-25 04:47:03',0,0,0,'2',NULL,'30-7845'),(91,30,13245,'生ビール (サッポロクラシック)',770,'ビール','here','739336846_test1.png','可用',NULL,1,1,'2021-03-25 05:10:25',0,0,0,'3',NULL,'30-13245'),(92,30,3457,'サワー(レモン.グレープフルーツ .巨峰.ウーロン.緑茶)',660,'サワー','here','59170426_test1.png','可用',NULL,1,1,'2021-03-25 05:11:53',0,0,0,'4',NULL,'30-3457'),(93,30,1542,'[南フランス]　 カンプジイ ',1320,'ワイン','here','102432042_test1.png','可用',NULL,1,1,'2021-03-25 05:13:55',0,1324,770,'5',NULL,'30-1542'),(94,30,1575,'コーラ',440,'ソフトドリンク','here','1944780534_test1.png','可用',NULL,1,1,'2021-03-25 05:19:58',0,0,0,'6',NULL,'30-1575');
/*!40000 ALTER TABLE `drinks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `staff` (
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `s_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_empid` int(11) NOT NULL DEFAULT '10',
  `s_mobile` bigint(20) DEFAULT NULL,
  `stat` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `password` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`s_empid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `staff`
--

LOCK TABLES `staff` WRITE;
/*!40000 ALTER TABLE `staff` DISABLE KEYS */;
INSERT INTO `staff` VALUES ('2020-12-09 07:00:43','Admin',1111,1111,'A','0000','admin'),('2020-12-18 02:59:03','歩夢 ',1115,8417,'A','1234','staff'),('2020-12-05 16:23:18','MADIH ELMEHDI',1116,4512,'A','1234','admin');
/*!40000 ALTER TABLE `staff` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subdrinks`
--

DROP TABLE IF EXISTS `subdrinks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subdrinks` (
  `sub_refid` bigint(100) NOT NULL AUTO_INCREMENT,
  `sub_name` varchar(100) DEFAULT NULL,
  `sub_category` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`sub_refid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subdrinks`
--

LOCK TABLES `subdrinks` WRITE;
/*!40000 ALTER TABLE `subdrinks` DISABLE KEYS */;
/*!40000 ALTER TABLE `subdrinks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `url`
--

DROP TABLE IF EXISTS `url`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `url` (
  `refid` int(11) NOT NULL AUTO_INCREMENT,
  `url_name` varchar(300) NOT NULL,
  `active` int(1) NOT NULL,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`refid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `url`
--

LOCK TABLES `url` WRITE;
/*!40000 ALTER TABLE `url` DISABLE KEYS */;
INSERT INTO `url` VALUES (2,'172.20.1.73:8800/order?',0,'0000-00-00 00:00:00'),(3,'172.20.100.125/MenuNagisa/test12.php?',1,'0000-00-00 00:00:00'),(4,'172.20.100.7/res_t/t.pl?',0,'0000-00-00 00:00:00');
/*!40000 ALTER TABLE `url` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'MenuNagisa'
--

--
-- Dumping routines for database 'MenuNagisa'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-03-25 17:37:00
