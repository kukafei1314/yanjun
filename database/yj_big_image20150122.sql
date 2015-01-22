-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2015-01-21 03:07:07
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
-- 表的结构 `yj_big_image`
--

CREATE TABLE IF NOT EXISTS `yj_big_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(11) NOT NULL,
  `path` varchar(100) NOT NULL,
  `order` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='大图管理' AUTO_INCREMENT=25 ;

--
-- 转存表中的数据 `yj_big_image`
--

INSERT INTO `yj_big_image` (`id`, `type`, `path`, `order`) VALUES
(1, 1, 'upload/20150120/142175815919.jpg', 7),
(2, 1, 'upload/20150119/142165491030.jpg', 2),
(3, 1, 'upload/20150119/142165491030.jpg', 3),
(4, 2, 'upload/20150119/142165491030.jpg', 1),
(5, 2, 'upload/20150119/142165491030.jpg', 2),
(6, 2, 'upload/20150119/142165491030.jpg', 3),
(7, 3, 'upload/20150119/142165491030.jpg', 1),
(8, 3, 'upload/20150119/142165491030.jpg', 2),
(9, 3, 'upload/20150119/142165491030.jpg', 3),
(10, 4, 'upload/20150119/142165491030.jpg', 1),
(11, 4, 'upload/20150119/142165491030.jpg', 2),
(12, 4, 'upload/20150119/142165491030.jpg', 3),
(13, 5, 'upload/20150119/142165491030.jpg', 1),
(14, 5, 'upload/20150119/142165491030.jpg', 2),
(15, 5, 'upload/20150119/142165491030.jpg', 3),
(16, 6, 'upload/20150119/142165491030.jpg', 1),
(17, 6, 'upload/20150120/142175953212.jpg', 3),
(18, 6, 'upload/20150119/142165491030.jpg', 3),
(19, 7, 'upload/20150119/142165491030.jpg', 1),
(20, 7, 'upload/20150119/142165491030.jpg', 2),
(21, 7, 'upload/20150119/142165491030.jpg', 3),
(22, 8, 'upload/20150119/142165491030.jpg', 1),
(23, 8, 'upload/20150119/142165491030.jpg', 2),
(24, 8, 'upload/20150119/142165491030.jpg', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
