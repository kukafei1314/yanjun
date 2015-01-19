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
-- Table structure for table `yj_about_us`
--

DROP TABLE IF EXISTS `yj_about_us`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `yj_about_us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `yj_about_us`
--

LOCK TABLES `yj_about_us` WRITE;
/*!40000 ALTER TABLE `yj_about_us` DISABLE KEYS */;
/*!40000 ALTER TABLE `yj_about_us` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `yj_big_image`
--

DROP TABLE IF EXISTS `yj_big_image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `yj_big_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(11) NOT NULL,
  `path` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='大图管理';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `yj_big_image`
--

LOCK TABLES `yj_big_image` WRITE;
/*!40000 ALTER TABLE `yj_big_image` DISABLE KEYS */;
/*!40000 ALTER TABLE `yj_big_image` ENABLE KEYS */;
UNLOCK TABLES;

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `yj_cases`
--

LOCK TABLES `yj_cases` WRITE;
/*!40000 ALTER TABLE `yj_cases` DISABLE KEYS */;
INSERT INTO `yj_cases` VALUES (5,'123','','1421654936','upload/20150119/142165493656.jpg','<p>0</p>','upload/20150119/142165493656.jpg');
/*!40000 ALTER TABLE `yj_cases` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `yj_department_type`
--

DROP TABLE IF EXISTS `yj_department_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `yj_department_type` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL COMMENT '部门名称',
  `content` varchar(500) NOT NULL COMMENT '部门介绍',
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COMMENT='部门管理表格';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `yj_department_type`
--

LOCK TABLES `yj_department_type` WRITE;
/*!40000 ALTER TABLE `yj_department_type` DISABLE KEYS */;
INSERT INTO `yj_department_type` VALUES (14,'设计部','设计部 品牌咨询与设计领域长久经营，成为依靠专业与服务品质创造价值的公司， 成为引领行业变革的公司，成为值得员工骄傲的公司； '),(15,'动画部','设计部 品牌咨询与设计领域长久经营，成为依靠专业与服务品质创造价值的公司， 成为引领行业变革的公司，成为值得员工骄傲的公司； '),(16,'事业部','设计部 品牌咨询与设计领域长久经营，成为依靠专业与服务品质创造价值的公司， 成为引领行业变革的公司，成为值得员工骄傲的公司； '),(17,'人事部','设计部 品牌咨询与设计领域长久经营，成为依靠专业与服务品质创造价值的公司， 成为引领行业变革的公司，成为值得员工骄傲的公司； '),(18,'财务行政部','设计部 品牌咨询与设计领域长久经营，成为依靠专业与服务品质创造价值的公司， 成为引领行业变革的公司，成为值得员工骄傲的公司； ');
/*!40000 ALTER TABLE `yj_department_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `yj_employee`
--

DROP TABLE IF EXISTS `yj_employee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `yj_employee` (
  `id` int(11) NOT NULL,
  `did` int(11) NOT NULL COMMENT '关联到相关部门',
  `pic` varchar(100) NOT NULL COMMENT '照片',
  `signature` varchar(100) NOT NULL COMMENT '签名照',
  `motto` text NOT NULL COMMENT '座右铭'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='人员管理表格';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `yj_employee`
--

LOCK TABLES `yj_employee` WRITE;
/*!40000 ALTER TABLE `yj_employee` DISABLE KEYS */;
/*!40000 ALTER TABLE `yj_employee` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `yj_image_type`
--

DROP TABLE IF EXISTS `yj_image_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `yj_image_type` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `yj_image_type`
--

LOCK TABLES `yj_image_type` WRITE;
/*!40000 ALTER TABLE `yj_image_type` DISABLE KEYS */;
INSERT INTO `yj_image_type` VALUES (1,0,'首页大图'),(2,0,'地图页面大图'),(3,0,'分享中心大图'),(4,0,'服务页面大图'),(5,0,'加入我们大图'),(6,0,'我们页面大图'),(7,0,'新闻页面大图'),(8,0,'业务通道常见问题大图');
/*!40000 ALTER TABLE `yj_image_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `yj_job`
--

DROP TABLE IF EXISTS `yj_job`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `yj_job` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `did` int(11) NOT NULL COMMENT '关联到相关部门',
  `job_name` int(11) NOT NULL COMMENT '职位名称',
  `content` text NOT NULL COMMENT '职位介绍',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='招聘信息表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `yj_job`
--

LOCK TABLES `yj_job` WRITE;
/*!40000 ALTER TABLE `yj_job` DISABLE KEYS */;
/*!40000 ALTER TABLE `yj_job` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `yj_news`
--

DROP TABLE IF EXISTS `yj_news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `yj_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL COMMENT '新闻标题',
  `content` text NOT NULL COMMENT '新闻内容',
  `images` varchar(500) NOT NULL COMMENT '新闻图片',
  `date` varchar(50) NOT NULL COMMENT '新闻时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COMMENT='新闻管理表格';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `yj_news`
--

LOCK TABLES `yj_news` WRITE;
/*!40000 ALTER TABLE `yj_news` DISABLE KEYS */;
INSERT INTO `yj_news` VALUES (1,'对方答复','<p>沈大高速</p>','0','1421561450'),(2,'的规范健康咖啡','<p>阿尔塔尔塔粉红哥建行卡</p>','0','1421561443'),(3,'地方尽快进入','<p>双方根据深交所</p>','0','1421561437'),(4,'电热他','','0','1421561431'),(5,'儿童热ur','<p>官方数据和官方数据护发素</p>','0','1421561404'),(6,'的个人空间','<p>啊哈合法化</p>','0','1421561397'),(7,'0','<p class=\"text\" style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; border: 0px; font-family: Simsun; font-size: 14px; font-stretch: inherit; line-height: 24px; vertical-align: baseline; text-indent: 28px; letter-spacing: 0.5px; white-space: normal; background-color: rgb(255, 255, 255);\">屌丝经济其实并不是什么特别现象，而是在中国做商业的必经阶段，除了少数企业之外，很少有人会像苹果一样敢于跨越这一阶段直接定位于高端，并获得成功。这里面的秘诀在于，屌丝们容易哄，容易被兴奋，容易为不知名的冲动掏出钱来，没有什么商业模式比从屌丝开始来得容易。</p><p class=\"text\" style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; border: 0px; font-family: Simsun; font-size: 14px; font-stretch: inherit; line-height: 24px; vertical-align: baseline; text-indent: 28px; letter-spacing: 0.5px; white-space: normal; background-color: rgb(255, 255, 255);\">中国互联网的BAT这几家大公司，无不是从屌丝起家渐入佳境，外加奇虎和小米等这几家大公司，也都是把商业逻辑建立在屌丝这个基础之上的。不过屌丝经济的问题在于，你不能跟他谈恋爱，从中积累起实力之后赶紧升级换代，以免品牌下沉到底，成为永久的屌丝品牌。</p><p class=\"text\" style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; border: 0px; font-family: Simsun; font-size: 14px; font-stretch: inherit; line-height: 24px; vertical-align: baseline; text-indent: 28px; letter-spacing: 0.5px; white-space: normal; background-color: rgb(255, 255, 255);\">小米做了4年，除黄牛抬价外从没卖过高于2000元的手机，以1999为价格天花板将价格不断下沉，直至几百元的产品。在这个价位内转战能让小米获得很多独特优势，在营销上发动人民战争先把人气聚集起来，是在有限资源和条件内唯一可做的事。此外在这个层次晃荡，小米的对手首先就并非成熟的手机厂商如联想与华为，其直接对手是山寨机厂商和新进的实力不济的小厂商，如徐厂长领军顾异帮衬的节操手机。</p><p class=\"text\" style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; border: 0px; font-family: Simsun; font-size: 14px; font-stretch: inherit; line-height: 24px; vertical-align: baseline; text-indent: 28px; letter-spacing: 0.5px; white-space: normal; background-color: rgb(255, 255, 255);\">2014年联想和华为们对小米的警惕和防范，并非因为小米对其利益有直接损害，而是他们发现了潜在的威胁。小米品牌终会向上拓展空间，再往下发布299的手机毫无意义。事实证明，他们的担心很有道理，小米确实在2015年初的时候发布了3000元以上的一款大屏手机。这里面几个意思？意思实在太多了。</p><p class=\"text\" style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; border: 0px; font-family: Simsun; font-size: 14px; font-stretch: inherit; line-height: 24px; vertical-align: baseline; text-indent: 28px; letter-spacing: 0.5px; white-space: normal; background-color: rgb(255, 255, 255);\">发布小米Note不是为了提升毛利率，也不是因为小米的硬件0利润策略有所改变。虽然人们在仔细研究零配件后发现小米Note其实性价比不高，但对于一个新进者而言，能用这个成本做出这样的手机，已实属不易。小米Note的发布目的，宏观大背景是中国的手机市场在下滑，出货量在下挫，微观背景则直接指向小米的品牌提升，小米不可能一辈子陪屌丝玩下去，没那么爱他们，正如阿里的淘宝之后有天猫，百度的在线广告之后有展示广告，腾讯的小游戏之后有端游一样。</p><p class=\"text\" style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; border: 0px; font-family: Simsun; font-size: 14px; font-stretch: inherit; line-height: 24px; vertical-align: baseline; text-indent: 28px; letter-spacing: 0.5px; white-space: normal; background-color: rgb(255, 255, 255);\">10年前我上班的那个地方没食堂，但楼下有个郭林家常菜，每天中午15块饭费，两个人去了要两个菜两碗饭吃得饱饱的。现在再去点同样的菜，30块不行了，应该会翻一倍到两倍了，虽然饭店名字还叫家常菜，但大家知道，这已不是过去的那个家常菜了，已从平民消费向高端挺进。</p><p class=\"text\" style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; border: 0px; font-family: Simsun; font-size: 14px; font-stretch: inherit; line-height: 24px; vertical-align: baseline; text-indent: 28px; letter-spacing: 0.5px; white-space: normal; background-color: rgb(255, 255, 255);\">品牌向上走是所有公司的梦想，当然像iPhone这种一出来就卖800美元的手机是别指望了，上无可上，再上就成Vertu了。低端市场能赚钱，却赚不了大钱，能卖一部手机顶别人卖十部，当然是谁都想的事情。不过向上走的困难也是显而易见的，具体表现就是越往上的消费者越不好忽悠，你确实得拿出有诚意的好产品人们才能买账，越往上人们对价格越不敏感，但对质量、服务和品牌形象却很在意，甚至会介意你手机里是不是有侵犯知识产权的零配件，是不是血汗工厂造出来的。</p><p class=\"text\" style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; border: 0px; font-family: Simsun; font-size: 14px; font-stretch: inherit; line-height: 24px; vertical-align: baseline; text-indent: 28px; letter-spacing: 0.5px; white-space: normal; background-color: rgb(255, 255, 255);\">小米往上走确实是应该的，但却不出意外地打出向iPhone 6 Plus致敬的口号，意味赶超这款手机，最终招来苹果粉的愤怒还击。小米知道自己在可见的未来还不具备超越苹果的能力，但把这种反差极大的口号和旗帜打出来，却能起到扩大宣传效果，引发更多关注的效应。从围观者角度来看，小米超越三星是我们乐见其成的，超越苹果更是求之不得，但对屌丝的戏弄和忽悠应该适可而止，不可对其消费过度。小米能这么干，只能说他们对自己向上走能否获得成功，也没什么把握。</p><p class=\"text\" style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; border: 0px; font-family: Simsun; font-size: 14px; font-stretch: inherit; line-height: 24px; vertical-align: baseline; text-indent: 28px; letter-spacing: 0.5px; white-space: normal; background-color: rgb(255, 255, 255);\">在小米向上挺进的这个阶段，是国产手机的精华所在，有一大批优秀手机潜伏在这里，oppo、Vivo、魅族、联想Vibe、华为P7等。这个市场本来绝对容量就不如下级市场大，而现在又是诸侯割据的状态，各自有自己的势力范围。这批厂商对中端市场的控制力，也不是一两天培养出来的，小米进去的前景，很难乐观。小米要么就当秦始皇，用极度符合商业逻辑却又不为人知的新模式将这个市场统一，然后再继续往上走打败苹果，要么就进去与其他人并驾齐驱，慢慢培养能力。目前看，只能是后者。</p><p class=\"text\" style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; border: 0px; font-family: Simsun; font-size: 14px; font-stretch: inherit; line-height: 24px; vertical-align: baseline; text-indent: 28px; letter-spacing: 0.5px; white-space: normal; background-color: rgb(255, 255, 255);\">小米过去四年走过的路，并不适合这个市场，因为这个阶段的消费者代表了中国消费力量中最活跃和最理性的那一部分，并不以价格为唯一考量条件，对逼格的强调更甚。在价格原教旨主义者眼中，似乎世界都得围绕着他们的价格转，从而会产生很多错觉。小米如果不重新审视发展思路，别提继续向上了，中端市场就会终结小米神话。</p><p class=\"text\" style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; border: 0px; font-family: Simsun; font-size: 14px; font-stretch: inherit; line-height: 24px; vertical-align: baseline; text-indent: 28px; letter-spacing: 0.5px; white-space: normal; background-color: rgb(255, 255, 255);\">当然，一切商业模式都有赌的成分在内，正如雷军试图用未来的软件服务收益cover掉当前的硬件消耗成本一样，小米也完全可以用0利润的整机进去冲击这个中端市场，届时，人们到底是在乎单维度的价格还是在乎更多，自可一目了然。其结果，恰好能一窥中国具备一定消费能力的中产阶级到底在消费行为中居于哪个层次，那也是很好玩的一件事。</p><p><br/></p>','0','1421561089'),(8,'0','<p class=\"text\" style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; border: 0px; font-family: Simsun; font-size: 14px; font-stretch: inherit; line-height: 24px; vertical-align: baseline; text-indent: 28px; letter-spacing: 0.5px; white-space: normal; background-color: rgb(255, 255, 255);\">1月15日，小米在北京举办发布会，正式发布手机新品小米Note，自称“向iPhone6 Plus致敬”。自小米诞生以来，不论是其手机的发布还是饥饿营销模式，都被认为是处处模仿苹果甚至处处拿苹果做比较，尤其是小米手机给市场给出的定位“低价高配”使得消费者愈发相信小米与苹果最直观的差别就是价格的悬殊。是否真正高配，用过小米手机的用户心中自然有数。是否低价，这就有待思考了。苹果每年的巨额广告费用，实体店投资运营以及销售的中间环节所涉及到的成本，是一笔不小的数目，这些成本自然而然是要从售价中赚取。而刻意与苹果处处做比较的小米则不同，没有巨额的广告投资，网上直营的模式大大减少了中间投资、销售的成本，使其手机售价确实低了很多。而实际上，对于小米公司而言，和苹果手机的定价一样，小米手机并未真正做到“低价”。同时，新品推出，前一种商品降价范围极小，这在一定程度上有利于维持产品的较高售价，为小米保持热度。</p><p class=\"text\" style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; border: 0px; font-family: Simsun; font-size: 14px; font-stretch: inherit; line-height: 24px; vertical-align: baseline; text-indent: 28px; letter-spacing: 0.5px; white-space: normal; background-color: rgb(255, 255, 255);\">还记得小米手机的宣传口号“为发烧而生”吗？宣称是为了热爱玩机的发烧友而做。事实上，购买小米手机的消费者中，真正热爱刷机玩机的只是极少数，绝大多数是冲着“低价高配”而来的学生党或者刚工作不久的年轻人，他们自嘲为“屌丝”，而小米在销售中又深谙“屌丝心理”，确实堪称“屌丝品牌”。</p><p class=\"text\" style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; border: 0px; font-family: Simsun; font-size: 14px; font-stretch: inherit; line-height: 24px; vertical-align: baseline; text-indent: 28px; letter-spacing: 0.5px; white-space: normal; background-color: rgb(255, 255, 255);\"><strong>期货模式，你等还是不等？</strong></p><p class=\"text\" style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; border: 0px; font-family: Simsun; font-size: 14px; font-stretch: inherit; line-height: 24px; vertical-align: baseline; text-indent: 28px; letter-spacing: 0.5px; white-space: normal; background-color: rgb(255, 255, 255);\">回顾去年的小米4，先是用大言不惭的字眼公布其“华丽”配置，炒热度，赚足了眼球，再慢慢让米粉们“抢枪抢”，小米Note一出，米4立马开放购买，相信再过一阵儿，米4定会降价。这种当手机里的零部件(主要是处理器)尚未能实现大规模量产，还只是“期货”状态，品牌商便抢先发布产品，目的是争得先手，让消费者“持币待购”，这就是赤裸裸的期货模式。正是这种期货模式，让小米手机一直处于一种买方市场的状态。</p><p class=\"text\" style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; border: 0px; font-family: Simsun; font-size: 14px; font-stretch: inherit; line-height: 24px; vertical-align: baseline; text-indent: 28px; letter-spacing: 0.5px; white-space: normal; background-color: rgb(255, 255, 255);\">值得一提的是，新品Note一出，网络上一致好评，但新品手机确实没有实际到达用户手中，好评来自哪儿呢？这就是小米的高明之处，有第一批货品的购买资格的人都是一些有点儿影响力的大V用户，在一定程度上减少了负面传播带来的不利影响，极力保证口碑的正面效应。但是今年特别好玩的一点是，好多大V用户都是用苹果手机发布赞美小米Note的微博，简直就是高级黑。</p><p class=\"text\" style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; border: 0px; font-family: Simsun; font-size: 14px; font-stretch: inherit; line-height: 24px; vertical-align: baseline; text-indent: 28px; letter-spacing: 0.5px; white-space: normal; background-color: rgb(255, 255, 255);\"><strong>小米的饥饿营销，还能玩多久？</strong></p><p class=\"text\" style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; border: 0px; font-family: Simsun; font-size: 14px; font-stretch: inherit; line-height: 24px; vertical-align: baseline; text-indent: 28px; letter-spacing: 0.5px; white-space: normal; background-color: rgb(255, 255, 255);\">“前期亏损少卖挣人气，中期大卖挣利润，后期甩卖清库存。”小米处处释放出“爱买买，不买滚”这样的信号，这招屡试不爽，欺负米粉“钱多人傻”，让人伤透了心。</p><p class=\"text\" style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; border: 0px; font-family: Simsun; font-size: 14px; font-stretch: inherit; line-height: 24px; vertical-align: baseline; text-indent: 28px; letter-spacing: 0.5px; white-space: normal; background-color: rgb(255, 255, 255);\">在小米上市初期，高配置智能手机市场一直处于一个卖方市场，为小米实施“饥饿营销”策略提供了广阔的空间。如今，手机已经不那么“奇货可居”，各个品牌涌入市场，手机市场的竞争也愈发激烈，这些竞争不断推动着手机科技的发展和营销模式的改进，而借助“期货模式”一步步走到今天的小米又能得意多久？我们拭目以待。</p><p><br/></p>','0','1421561628'),(9,'0','<p class=\"text\" style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; border: 0px; font-family: Simsun; font-size: 14px; font-stretch: inherit; line-height: 24px; vertical-align: baseline; text-indent: 28px; letter-spacing: 0.5px; white-space: normal; background-color: rgb(255, 255, 255);\">以前每年都会收到这样的邀约，但是自认不是所谓全能的专家，更不是万能的谁谁，所以勉为其难。</p><p class=\"text\" style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; border: 0px; font-family: Simsun; font-size: 14px; font-stretch: inherit; line-height: 24px; vertical-align: baseline; text-indent: 28px; letter-spacing: 0.5px; white-space: normal; background-color: rgb(255, 255, 255);\">谨从日常好恶和直观感觉做一个点评式的个人前瞻：</p><p class=\"text\" style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; border: 0px; font-family: Simsun; font-size: 14px; font-stretch: inherit; line-height: 24px; vertical-align: baseline; text-indent: 28px; letter-spacing: 0.5px; white-space: normal; background-color: rgb(255, 255, 255);\">唱多企业：华为、百度、联想</p><p class=\"text\" style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; border: 0px; font-family: Simsun; font-size: 14px; font-stretch: inherit; line-height: 24px; vertical-align: baseline; text-indent: 28px; letter-spacing: 0.5px; white-space: normal; background-color: rgb(255, 255, 255);\">华为因为技术优势持续趋大，百度因为战略思路清晰明了，联想因为顽强的规模优势。</p><p class=\"text\" style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; border: 0px; font-family: Simsun; font-size: 14px; font-stretch: inherit; line-height: 24px; vertical-align: baseline; text-indent: 28px; letter-spacing: 0.5px; white-space: normal; background-color: rgb(255, 255, 255);\">唱衰企业：小米、360</p><p class=\"text\" style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; border: 0px; font-family: Simsun; font-size: 14px; font-stretch: inherit; line-height: 24px; vertical-align: baseline; text-indent: 28px; letter-spacing: 0.5px; white-space: normal; background-color: rgb(255, 255, 255);\">小米因为自大的互联网思维，即使仍有上升空间，也是见顶；</p><p class=\"text\" style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; border: 0px; font-family: Simsun; font-size: 14px; font-stretch: inherit; line-height: 24px; vertical-align: baseline; text-indent: 28px; letter-spacing: 0.5px; white-space: normal; background-color: rgb(255, 255, 255);\">360随着网民素质的提高，流氓策略的边际效应越来越小。</p><p class=\"text\" style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; border: 0px; font-family: Simsun; font-size: 14px; font-stretch: inherit; line-height: 24px; vertical-align: baseline; text-indent: 28px; letter-spacing: 0.5px; white-space: normal; background-color: rgb(255, 255, 255);\">唱多领域：智能机器人</p><p class=\"text\" style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; border: 0px; font-family: Simsun; font-size: 14px; font-stretch: inherit; line-height: 24px; vertical-align: baseline; text-indent: 28px; letter-spacing: 0.5px; white-space: normal; background-color: rgb(255, 255, 255);\">凡是能用算法实现的工作，都将被一一淘汰，所以这一领域注定是未来之星。</p><p class=\"text\" style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; border: 0px; font-family: Simsun; font-size: 14px; font-stretch: inherit; line-height: 24px; vertical-align: baseline; text-indent: 28px; letter-spacing: 0.5px; white-space: normal; background-color: rgb(255, 255, 255);\">唱衰领域：物联网、Google无人车</p><p class=\"text\" style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; border: 0px; font-family: Simsun; font-size: 14px; font-stretch: inherit; line-height: 24px; vertical-align: baseline; text-indent: 28px; letter-spacing: 0.5px; white-space: normal; background-color: rgb(255, 255, 255);\">物联网是个伪命题，新鲜感之后，人的心理需求会逐渐抛弃这一领域，就像当年的三维互联网。</p><p class=\"text\" style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; border: 0px; font-family: Simsun; font-size: 14px; font-stretch: inherit; line-height: 24px; vertical-align: baseline; text-indent: 28px; letter-spacing: 0.5px; white-space: normal; background-color: rgb(255, 255, 255);\">至于Google无人车，你让它去菜市场转一圈！中国的汽车驾驶是驾驶员与行人、非机动车的博弈，不是规则和算法能够搞定的。</p><p><br/></p>','0','1421561623'),(10,'0','<p class=\"text\" style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; border: 0px; font-family: Simsun; font-size: 14px; font-stretch: inherit; line-height: 24px; vertical-align: baseline; text-indent: 28px; letter-spacing: 0.5px; white-space: normal; background-color: rgb(255, 255, 255);\">去年的 WWDC 上《纪念碑谷》获得了苹果设计奖，在苹果公司公布的2014年度iTunes最佳作品名单中，其中《小三传奇》（Three!）被选为iPhone平台年度最佳游戏，而《纪念碑谷》（Monument Valley）则再次被选为iPad平台年度最佳游戏。</p><p class=\"text\" style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; border: 0px; font-family: Simsun; font-size: 14px; font-stretch: inherit; line-height: 24px; vertical-align: baseline; text-indent: 28px; letter-spacing: 0.5px; white-space: normal; background-color: rgb(255, 255, 255);\">游戏和让游戏成功的秘诀一直以来都有点说不清道不明，尤其在移动平台上。《纪念碑谷》的成功离不开游戏本身的品质，但还有其他方面的内容或许值得我们关注。这款游戏的开发商Ustwo今天发布了一幅信息图，公开了它的营收情况。</p><p class=\"text\" style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; border: 0px; font-family: Simsun; font-size: 14px; font-stretch: inherit; line-height: 24px; vertical-align: baseline; text-indent: 28px; letter-spacing: 0.5px; white-space: normal; background-color: rgb(255, 255, 255);\">《纪念碑谷》是一款 3D 积木式的解密游戏，在视觉设计和动画方面都美轮美奂。总共售出了超过 240 万份，利润更是惊人的达到六百万美元。但是《纪念碑谷》的开发成本可能会让你大吃一惊，同样让你没预料到的，可能还有这款流程相对较短的游戏，在付费玩家中的完成率。</p><p class=\"text\" style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; border: 0px; font-family: Simsun; font-size: 14px; font-stretch: inherit; line-height: 24px; vertical-align: baseline; text-indent: 28px; letter-spacing: 0.5px; white-space: normal; background-color: rgb(255, 255, 255);\"><strong>苹果公司对《纪念碑谷》的评价是这样：</strong></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; font-family: inherit; font-size: 12px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: 20px; vertical-align: baseline;\">“以一种迷人的方式将埃舍尔（Escher）无解建筑的谜题与极简抽象派艺术风格混搭在一起，处处都令人拍案叫绝。游戏中巧妙设计的谜题以及所隐含的深意让我们永远都对它深怀敬畏。”</p><p class=\"text\" style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; border: 0px; font-family: Simsun; font-size: 14px; font-stretch: inherit; line-height: 24px; vertical-align: baseline; text-indent: 28px; letter-spacing: 0.5px; white-space: normal; background-color: rgb(255, 255, 255);\">在 iOS、Google Play、Amazon免费和付费应用商店里《纪念碑谷》共计卖出了 2,440,076 份。主要的官方下载来自 iOS 平台（ustwo 之前说到，Android 平台上盗版率达到了 95%），Amazon 平台上的免费发布下载量是付费的四倍。总而言之，这些下载截止到现在共计带来了 5,858,625 美元的利润，而利润最高的一天是在 iOS 平台上首发当日，24 小时内共计营收 145,530 美元。</p><p class=\"text\" style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; border: 0px; font-family: Simsun; font-size: 14px; font-stretch: inherit; line-height: 24px; vertical-align: baseline; text-indent: 28px; letter-spacing: 0.5px; white-space: normal; background-color: rgb(255, 255, 255);\">虽然《纪念碑谷》遭遇到严重的盗版问题，但这款游戏的制作人丹·格雷在接受媒体采访时，盗版也可以被视为对游戏的免费宣传。</p><p class=\"text\" style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; border: 0px; font-family: Simsun; font-size: 14px; font-stretch: inherit; line-height: 24px; vertical-align: baseline; text-indent: 28px; letter-spacing: 0.5px; white-space: normal; background-color: rgb(255, 255, 255);\">ustwo Games 的经历也再次证明了苹果对开发者来说仍然是最受欢迎的平台—— 《纪念碑谷》81.7% 的收入来自苹果的移动平台，但实际上只有 71.1% 的下载来自 iPhone 和 iPad 。有超过一千万的设备安装了《纪念碑谷》，这个数字远超官方销售数据，因为有些用户在多个设备上安装，有些通过家庭共享，还有大量的盗版存在。</p><p class=\"text\" style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; border: 0px; font-family: Simsun; font-size: 14px; font-stretch: inherit; line-height: 24px; vertical-align: baseline; text-indent: 28px; letter-spacing: 0.5px; white-space: normal; background-color: rgb(255, 255, 255);\">Ustwo 将收入数据历史展开，并附上了游戏发布历史以来的重要事件，以解释收入突涨。这里的关键是，任何新闻媒体的报道都能带来大量的收入，虽然新平台发布（也包括 Forgotten Shores）和圣诞节的收入最多。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; font-family: inherit; font-size: 12px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: 20px; vertical-align: baseline;\">这款游戏的制作人丹·格雷在接受媒体采访时，盗版也可以被视为对游戏的免费宣传。“绝大多数玩盗版游戏的用户，压根不会花钱购买游戏。”格雷说。“所以这样看来，我们实际上没有收入损失。但我确信，他们当中很多人会将《纪念碑谷》推荐给朋友，而他们的朋友将有可能付费下载我们的游戏。这相当于给我们免费做了宣传。”</p><p class=\"text\" style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; border: 0px; font-family: Simsun; font-size: 14px; font-stretch: inherit; line-height: 24px; vertical-align: baseline; text-indent: 28px; letter-spacing: 0.5px; white-space: normal; background-color: rgb(255, 255, 255);\">ustwo Games 还分享了其他有趣的细节，关于开发原版游戏和 Forgotten Shores 的开发成本：《纪念碑谷》本身开发用时 55 周，花费 852,000 美元，Forgotten Shores 开发用时 29 周，花费人力和其他成本 549,000 美元。</p><p class=\"text\" style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; border: 0px; font-family: Simsun; font-size: 14px; font-stretch: inherit; line-height: 24px; vertical-align: baseline; text-indent: 28px; letter-spacing: 0.5px; white-space: normal; background-color: rgb(255, 255, 255);\">另外，值得一提的是游戏的完成率：《纪念碑谷》是一款一次性、先付费并且一天以内就能通关的游戏，这很罕见，但是只有约一半的玩家完成了游戏。而对于 Forgotten Shores，只有 24% 的付费玩家通关。尽管总计只有 5% 的完成率，但是这次玩家出乎意料地更愿意玩后面的章节，特别是对于初版《纪念碑谷》而言。</p><p class=\"text\" style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; border: 0px; font-family: Simsun; font-size: 14px; font-stretch: inherit; line-height: 24px; vertical-align: baseline; text-indent: 28px; letter-spacing: 0.5px; white-space: normal; background-color: rgb(255, 255, 255);\">《纪念碑谷》可能是移动游戏平平台的异类，它没有采用现在营收排行榜上前几名常用的免费增值模式。但是，《纪念碑谷》提供的数据还是为想做类似尝试的人提供了宝贵的资源，对于想知道移动游戏行业机制的玩家，也满足了他们的好奇心。</p><p><br/></p>','0','1421560881'),(15,'0','<p>fWGwgew&nbsp;&nbsp;&nbsp;&nbsp;E</p>','0','1421560874'),(16,'0','<p>REGEQAHADGHA</p>','0','1421560863'),(17,'0','<p>ARDGHDAHDFAH</p>','0','1421555653'),(18,'0','<p>SVDF.Ns/fnSDFNKDs/</p>','0','1421555662'),(19,'挂号费和','<p>reqagagagaga</p>','0','1421555657');
/*!40000 ALTER TABLE `yj_news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `yj_questions`
--

DROP TABLE IF EXISTS `yj_questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `yj_questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL COMMENT '问题标题',
  `content` text NOT NULL COMMENT '内容',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='常见问题表格';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `yj_questions`
--

LOCK TABLES `yj_questions` WRITE;
/*!40000 ALTER TABLE `yj_questions` DISABLE KEYS */;
/*!40000 ALTER TABLE `yj_questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `yj_service`
--

DROP TABLE IF EXISTS `yj_service`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `yj_service` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `service_area` int(11) NOT NULL COMMENT '服务范围',
  `content` text NOT NULL COMMENT '服务内容',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `yj_service`
--

LOCK TABLES `yj_service` WRITE;
/*!40000 ALTER TABLE `yj_service` DISABLE KEYS */;
/*!40000 ALTER TABLE `yj_service` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `yj_service_channel`
--

DROP TABLE IF EXISTS `yj_service_channel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `yj_service_channel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company` varchar(100) NOT NULL COMMENT '公司/机构',
  `phone` int(11) NOT NULL COMMENT '电话',
  `client_name` varchar(100) NOT NULL COMMENT '姓名/职务',
  `email` varchar(50) NOT NULL COMMENT '邮箱',
  `address` varchar(200) NOT NULL COMMENT '工作地址',
  `message` text NOT NULL COMMENT '留言',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='业务通道管理';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `yj_service_channel`
--

LOCK TABLES `yj_service_channel` WRITE;
/*!40000 ALTER TABLE `yj_service_channel` DISABLE KEYS */;
/*!40000 ALTER TABLE `yj_service_channel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `yj_share`
--

DROP TABLE IF EXISTS `yj_share`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `yj_share` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL COMMENT '分享中心大标题下的一句话简介',
  `content` text NOT NULL COMMENT '分享内容'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='分享中心';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `yj_share`
--

LOCK TABLES `yj_share` WRITE;
/*!40000 ALTER TABLE `yj_share` DISABLE KEYS */;
/*!40000 ALTER TABLE `yj_share` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `yj_user`
--

DROP TABLE IF EXISTS `yj_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `yj_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `salt` varchar(50) NOT NULL,
  `token` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `yj_user`
--

LOCK TABLES `yj_user` WRITE;
/*!40000 ALTER TABLE `yj_user` DISABLE KEYS */;
INSERT INTO `yj_user` VALUES (1,'aa','d00eaf3b925458e794780b106d39a7d4','lizzy.999@qq.com','295674',''),(27,'cc','61ab43b3c68c9859595a5fbe16d1ff7f','111111@qq.com','794612','');
/*!40000 ALTER TABLE `yj_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-01-19 16:11:50
