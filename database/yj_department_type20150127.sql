-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2015-01-27 15:04:58
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
-- 表的结构 `yj_department_type`
--

CREATE TABLE IF NOT EXISTS `yj_department_type` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL COMMENT '部门名称',
  `e_mail` varchar(50) NOT NULL,
  `content` varchar(500) NOT NULL COMMENT '部门介绍',
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='部门管理表格' AUTO_INCREMENT=28 ;

--
-- 转存表中的数据 `yj_department_type`
--

INSERT INTO `yj_department_type` (`tid`, `name`, `e_mail`, `content`) VALUES
(14, '设计部', '1111@yanjun.com', '设计部 品牌咨询与设计领域长久经营，成为依靠专业与服务品质创造价值的公司， 成为引领行业变革的公司，成为值得员工骄傲的公司； '),
(15, '动画部', '1111@yanjun.com', '设计部 品牌咨询与设计领域长久经营，成为依靠专业与服务品质创造价值的公司， 成为引领行业变革的公司，成为值得员工骄傲的公司； '),
(16, '事业部', '1111@yanjun.com', '设计部 品牌咨询与设计领域长久经营，成为依靠专业与服务品质创造价值的公司， 成为引领行业变革的公司，成为值得员工骄傲的公司； '),
(17, '人事部', '1111@yanjun.com', '设计部 品牌咨询与设计领域长久经营，成为依靠专业与服务品质创造价值的公司， 成为引领行业变革的公司，成为值得员工骄傲的公司； '),
(18, '财务行政部', '1111@yanjun.com', '设计部 品牌咨询与设计领域长久经营，成为依靠专业与服务品质创造价值的公司， 成为引领行业变革的公司，成为值得员工骄傲的公司； ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
