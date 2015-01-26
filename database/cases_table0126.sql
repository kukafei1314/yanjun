CREATE DATABASE  IF NOT EXISTS `yanjun` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `yanjun`;
-- MySQL dump 10.13  Distrib 5.6.17, for Win64 (x86_64)
--
-- Host: localhost    Database: yanjun
-- ------------------------------------------------------
-- Server version	5.6.21-log

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
-- Table structure for table `yj_cases`
--

DROP TABLE IF EXISTS `yj_cases`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `yj_cases` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL COMMENT '案例名称',
  `project` varchar(100) NOT NULL COMMENT '工程名称',
  `date` varchar(50) NOT NULL COMMENT '完成时间',
  `logo` varchar(500) NOT NULL COMMENT '案列小图片',
  `content` text NOT NULL COMMENT '案列介绍',
  `images` varchar(500) NOT NULL COMMENT '案例大图',
  `abstract` text NOT NULL COMMENT '案列简介',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `yj_cases`
--

LOCK TABLES `yj_cases` WRITE;
/*!40000 ALTER TABLE `yj_cases` DISABLE KEYS */;
INSERT INTO `yj_cases` VALUES (9,'1','1','1422249032','upload/20150126/142224903232.jpg','<p>1</p><p><img src=\"http://picview01.baomihua.com/photos/20120412/m_14_634698468056093750_38293363.jpg\" style=\"\"/></p><p><img src=\"http://picview01.baomihua.com/photos/20120306/m_14_634666437677968750_14775838.jpg\" style=\"\"/></p><p><img src=\"http://www.6188.com/upload_6188s/flashAll/s800/20120822/1345599155IdGWRm.jpg\" style=\"\"/></p><p><br/></p>','upload/20150126/142224903131.jpg','1'),(10,'2','2','1422251477','upload/20150126/142225147717.jpg','<p><img src=\"http://s1.img.766.com/288/120328/1530/278904.jpg\" alt=\"278904.jpg\" width=\"777\" height=\"539\" style=\"width: 777px; height: 539px;\"/></p>','upload/20150126/142225147616.jpg','2'),(11,'3','3','1422251290','upload/20150126/142225128909.png','<p><br/></p><h1 label=\"Title center\" name=\"tc\" style=\"border-bottom-color:#cccccc;border-bottom-width:2px;border-bottom-style:solid;padding:0px 4px 0px 0px;text-align:center;margin:0px 0px 20px;\" class=\"ue_t\">[此处键入文章标题]</h1><p><img src=\"http://img.baidu.com/hi/youa/y_0034.gif\" width=\"300\" height=\"200\" border=\"0\" hspace=\"0\" vspace=\"0\" style=\"width:300px;height:200px;float:left;\"/>图文混排方法</p><p>1. 图片居左，文字围绕图片排版</p><p>方法：在文字前面插入图片，设置居左对齐，然后即可在右边输入多行文本</p><p><br/></p><p>2. 图片居右，文字围绕图片排版</p><p>方法：在文字前面插入图片，设置居右对齐，然后即可在左边输入多行文本</p><p><br/></p><p>3. 图片居中环绕排版</p><p>方法：亲，这个真心没有办法。。。</p><p><br/></p><p><br/></p><p><img src=\"http://img.baidu.com/hi/youa/y_0040.gif\" width=\"300\" height=\"300\" border=\"0\" hspace=\"0\" vspace=\"0\" style=\"width:300px;height:300px;float:right;\"/></p><p>还有没有什么其他的环绕方式呢？这里是居右环绕</p><p><br/></p><p>欢迎大家多多尝试，为UEditor提供更多高质量模板！</p><p><br/></p><p>占位</p><p><br/></p><p>占位</p><p><br/></p><p>占位</p><p><br/></p><p>占位</p><p><br/></p><p>占位</p><p><br/></p><p><br/></p><p><br/></p>','upload/20150126/142225129010.jpg','3');
/*!40000 ALTER TABLE `yj_cases` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-01-26 15:50:30
