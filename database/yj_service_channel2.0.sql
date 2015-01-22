-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 01 月 21 日 13:41
-- 服务器版本: 5.5.20
-- PHP 版本: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `yanjun`
--

-- --------------------------------------------------------

--
-- 表的结构 `yj_service_channel`
--

CREATE TABLE IF NOT EXISTS `yj_service_channel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company` varchar(100) NOT NULL COMMENT '公司/机构',
  `phone` varchar(11) NOT NULL COMMENT '电话',
  `client_name` varchar(100) NOT NULL COMMENT '姓名/职务',
  `email` varchar(50) NOT NULL COMMENT '邮箱',
  `address` varchar(200) NOT NULL COMMENT '工作地址',
  `message` text NOT NULL COMMENT '留言',
  `date` int(50) NOT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='业务通道管理' AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `yj_service_channel`
--

INSERT INTO `yj_service_channel` (`id`, `company`, `phone`, `client_name`, `email`, `address`, `message`, `date`) VALUES
(2, 'gfshjte差点给我', '11111111111', 'few太热问题', 'fqe@mhjbkl', '东方宾馆的风', '<p>过去ear工业区额</p>', 0),
(3, '联通', '12222222222', '红红/充话费', '444123@4444', '萨法饿死', '第三个傻瓜', 0),
(4, 'ghjte', '11222111111', '热问题', 'fqe@mhjl', '东方的风', '过去ear工业区额', 0),
(5, '发恶搞', '12222222222', '但法国人企鹅通过', 'gearg@h', '但法国华人', '港航业', 0),
(6, 'ghjte', '11222111111', '热问题', 'fqe@mhjl', '东方的风', '过去ear工业区额', 0),
(7, '发恶搞', '12222222222', '但法国人企鹅通过', 'gearg@h', '但法国华人', '港航业', 0),
(8, 'ghjte', '11222111111', '热问题', 'fqe@mhjl', '东方的风', '过去ear工业区额', 0),
(9, '发恶搞', '12222222222', '但法国人企鹅通过', 'gearg@h', '但法国华人', '港航业', 0),
(10, 'ghjte', '11222111111', '热问题', 'fqe@mhjl', '东方的风', '过去ear工业区额', 0),
(11, '发恶搞', '12222222222', '但法国人企鹅通过', 'gearg@h', '但法国华人', '港航业', 0),
(12, 'ghjte', '11222111111', '热问题', 'fqe@mhjl', '东方的风', '过去ear工业区额', 0),
(13, '发恶搞', '12222222222', '但法国人企鹅通过', 'gearg@h', '但法国华人', '港航业', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
