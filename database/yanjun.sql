-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2015-01-12 08:22:46
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `yanjun`
--

-- --------------------------------------------------------

--
-- 表的结构 `yj_about_us`
--

CREATE TABLE IF NOT EXISTS `yj_about_us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `yj_big_image`
--

CREATE TABLE IF NOT EXISTS `yj_big_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(11) NOT NULL,
  `path` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='大图管理' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `yj_case`
--

CREATE TABLE IF NOT EXISTS `yj_case` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` int(11) NOT NULL COMMENT '案例名称',
  `project` int(11) NOT NULL COMMENT '工程名称',
  `time` int(11) NOT NULL COMMENT '完成时间',
  `Logo` varchar(100) NOT NULL COMMENT '案列小图片',
  `content` text NOT NULL COMMENT '案列介绍',
  `images` varchar(500) NOT NULL COMMENT '案例大图',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `yj_department_type`
--

CREATE TABLE IF NOT EXISTS `yj_department_type` (
  `did` int(11) NOT NULL AUTO_INCREMENT,
  `name` int(11) NOT NULL COMMENT '部门名称',
  `content` int(11) NOT NULL COMMENT '部门介绍',
  PRIMARY KEY (`did`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='部门管理表格' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `yj_employee`
--

CREATE TABLE IF NOT EXISTS `yj_employee` (
  `id` int(11) NOT NULL,
  `did` int(11) NOT NULL COMMENT '关联到相关部门',
  `pic` varchar(100) NOT NULL COMMENT '照片',
  `signature` varchar(100) NOT NULL COMMENT '签名照',
  `motto` text NOT NULL COMMENT '座右铭'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='人员管理表格';

-- --------------------------------------------------------

--
-- 表的结构 `yj_image_type`
--

CREATE TABLE IF NOT EXISTS `yj_image_type` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `tid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `yj_job`
--

CREATE TABLE IF NOT EXISTS `yj_job` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `did` int(11) NOT NULL COMMENT '关联到相关部门',
  `job_name` int(11) NOT NULL COMMENT '职位名称',
  `content` text NOT NULL COMMENT '职位介绍',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='招聘信息表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `yj_news`
--

CREATE TABLE IF NOT EXISTS `yj_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` int(11) NOT NULL COMMENT '新闻标题',
  `content` text NOT NULL COMMENT '新闻内容',
  `images` varchar(500) NOT NULL COMMENT '新闻图片',
  `date` varchar(50) NOT NULL COMMENT '新闻时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='新闻管理表格' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `yj_questions`
--

CREATE TABLE IF NOT EXISTS `yj_questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL COMMENT '问题标题',
  `content` text NOT NULL COMMENT '内容',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='常见问题表格' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `yj_service`
--

CREATE TABLE IF NOT EXISTS `yj_service` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `service_area` int(11) NOT NULL COMMENT '服务范围',
  `content` text NOT NULL COMMENT '服务内容',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `yj_service_channel`
--

CREATE TABLE IF NOT EXISTS `yj_service_channel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company` varchar(100) NOT NULL COMMENT '公司/机构',
  `phone` int(11) NOT NULL COMMENT '电话',
  `client_name` varchar(100) NOT NULL COMMENT '姓名/职务',
  `email` varchar(50) NOT NULL COMMENT '邮箱',
  `address` varchar(200) NOT NULL COMMENT '工作地址',
  `message` text NOT NULL COMMENT '留言',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='业务通道管理' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `yj_share`
--

CREATE TABLE IF NOT EXISTS `yj_share` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL COMMENT '分享中心大标题下的一句话简介',
  `content` text NOT NULL COMMENT '分享内容'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='分享中心';

-- --------------------------------------------------------

--
-- 表的结构 `yj_user`
--

CREATE TABLE IF NOT EXISTS `yj_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `salt` varchar(50) NOT NULL,
  `token` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `yj_user`
--

INSERT INTO `yj_user` (`id`, `name`, `password`, `email`, `salt`, `token`) VALUES
(1, 'aa', 'd00eaf3b925458e794780b106d39a7d4', 'lizzy.999@qq.com', '295674', ''),
(2, 'bb', '726cf09a73546cfd365474b9e4ae1344', 'lizzyphy@163.com', '289890', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
