-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2015-01-26 02:58:32
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
-- 表的结构 `yj_topic`
--

CREATE TABLE IF NOT EXISTS `yj_topic` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `type` varchar(100) NOT NULL,
  `content` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `yj_topic`
--

INSERT INTO `yj_topic` (`id`, `type`, `content`) VALUES
(2, '服务', '<p>梦想与忠诚，团结与自由， <br/>恰当的诠释了晏钧团队的风格和状态。</p>'),
(3, '分享中心', '<p>梦想与忠诚，团结与自由， <br/>恰当的诠释了晏钧团队的风格和状态。</p>'),
(4, '如何与团队一起工作', '<p>梦想与忠诚，团结与自由， <br/>恰当的诠释了晏钧团队的风格和状态。</p>');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
