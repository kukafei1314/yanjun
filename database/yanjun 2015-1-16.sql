-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2015-01-16 10:10:51
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
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL COMMENT '部门名称',
  `content` varchar(500) NOT NULL COMMENT '部门介绍',
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='部门管理表格' AUTO_INCREMENT=19 ;

--
-- 转存表中的数据 `yj_department_type`
--

INSERT INTO `yj_department_type` (`tid`, `name`, `content`) VALUES
(14, '设计部', '设计部 品牌咨询与设计领域长久经营，成为依靠专业与服务品质创造价值的公司， 成为引领行业变革的公司，成为值得员工骄傲的公司； '),
(15, '动画部', '设计部 品牌咨询与设计领域长久经营，成为依靠专业与服务品质创造价值的公司， 成为引领行业变革的公司，成为值得员工骄傲的公司； '),
(16, '事业部', '设计部 品牌咨询与设计领域长久经营，成为依靠专业与服务品质创造价值的公司， 成为引领行业变革的公司，成为值得员工骄傲的公司； '),
(17, '人事部', '设计部 品牌咨询与设计领域长久经营，成为依靠专业与服务品质创造价值的公司， 成为引领行业变革的公司，成为值得员工骄傲的公司； '),
(18, '财务行政部', '设计部 品牌咨询与设计领域长久经营，成为依靠专业与服务品质创造价值的公司， 成为引领行业变革的公司，成为值得员工骄傲的公司； ');

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
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- 转存表中的数据 `yj_image_type`
--

INSERT INTO `yj_image_type` (`tid`, `pid`, `name`) VALUES
(1, 0, '首页大图'),
(2, 0, '地图页面大图'),
(3, 0, '分享中心大图'),
(4, 0, '服务页面大图'),
(5, 0, '加入我们大图'),
(6, 0, '我们页面大图'),
(7, 0, '新闻页面大图'),
(8, 0, '业务通道常见问题大图');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- 转存表中的数据 `yj_user`
--

INSERT INTO `yj_user` (`id`, `name`, `password`, `email`, `salt`, `token`) VALUES
(1, 'aa', 'd00eaf3b925458e794780b106d39a7d4', 'lizzy.999@qq.com', '295674', ''),
(27, 'cc', '61ab43b3c68c9859595a5fbe16d1ff7f', '111111@qq.com', '794612', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
