-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2015-01-20 13:12:48
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
-- 表的结构 `yj_service`
--

CREATE TABLE IF NOT EXISTS `yj_service` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `service_area` varchar(100) NOT NULL COMMENT '服务范围',
  `content` text NOT NULL COMMENT '服务内容',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- 转存表中的数据 `yj_service`
--

INSERT INTO `yj_service` (`id`, `service_area`, `content`) VALUES
(1, '品牌全案分析与整合', '<p>进过十多年的磨砺，我们培养了一大批专家型的策划和设计人才，我们的组织不断完善、优化，塑造出一直具有专业高度的设计师团队。机构的形象优势不断吸引着来自各个行业领域的优秀人才加盟，诚信待人的品质为我们赢得了更多专业策划组织的合作，更有活跃于国内策划设计界的多位专家学者作为机构的高级顾问团为我们的策划设计服务提供策略支持。</p>'),
(2, '品牌形象建设与推广', '进过十多年的磨砺，我们培养了一大批专家型的策划和设计人才，我们的组织不断完善、优化，塑造出一直具有专业高度的设计师团队。机构的形象优势不断吸引着来自各个行业领域的优秀人才加盟，诚信待人的品质为我们赢得了更多专业策划组织的合作，更有活跃于国内策划设计界的多位专家学者作为机构的高级顾问团为我们的策划设计服务提供策略支持。'),
(3, '环境导示研发与实施', '进过十多年的磨砺，我们培养了一大批专家型的策划和设计人才，我们的组织不断完善、优化，塑造出一直具有专业高度的设计师团队。机构的形象优势不断吸引着来自各个行业领域的优秀人才加盟，诚信待人的品质为我们赢得了更多专业策划组织的合作，更有活跃于国内策划设计界的多位专家学者作为机构的高级顾问团为我们的策划设计服务提供策略支持。'),
(4, '品牌形象店空间制造', '进过十多年的磨砺，我们培养了一大批专家型的策划和设计人才，我们的组织不断完善、优化，塑造出一直具有专业高度的设计师团队。机构的形象优势不断吸引着来自各个行业领域的优秀人才加盟，诚信待人的品质为我们赢得了更多专业策划组织的合作，更有活跃于国内策划设计界的多位专家学者作为机构的高级顾问团为我们的策划设计服务提供策略支持。'),
(10, '我们都是好学生...哈哈哈', '<p>我们都是好学生...哈哈哈我们都是好学生...哈哈哈我们都是好学生...哈哈哈我们都是好学生...哈哈哈我们都是好学生...哈哈哈我们都是好学生...哈哈哈我们都是好学生...哈哈哈我们都是好学生...哈哈哈我们都是好学生...哈哈哈我们都是好学生...哈哈哈我们都是好学生...哈哈哈我们都是好学生...哈哈哈我们都是好学生...哈哈哈我们都是好学生...哈哈哈</p>'),
(18, '品牌全案分析与整合', '<p>品牌全案分析与整合品牌全案分析与整合品牌全案分析与整合品牌全案分析与整合品牌全案分析与整合品牌全案分析与整合品牌全案分析与整合品牌全案分析与整合品牌全案分析与整合品牌全案分析与整合品牌全案分析与整合品牌全案分析与整合品牌全案分析与整合品牌全案分析与整合品牌全案分析与整合品牌全案分析与整合品牌全案分析与整合品牌全案分析与整合品牌全案分析与整合品牌全案分析与整合品牌全案分析与整合品牌全案分析与整合品牌全案分析与整合</p>'),
(20, '从做生意到做品牌，您能分清您是在做生意还是在做品牌么？', '0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
