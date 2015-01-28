-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2015-01-28 04:05:56
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
-- 表的结构 `yj_brand_intro`
--

CREATE TABLE IF NOT EXISTS `yj_brand_intro` (
  `bid` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `pic` varchar(100) CHARACTER SET utf8 NOT NULL,
  `content` varchar(200) CHARACTER SET utf8 NOT NULL,
  `en_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `yj_brand_intro`
--

INSERT INTO `yj_brand_intro` (`bid`, `name`, `pic`, `content`, `en_name`) VALUES
(1, '品牌策略', 'upload/20150128/142240832121.png', '“0”起步创建品牌，从无到有贴身式为您提供品牌理念；品牌命名；品牌口号语；品牌形象；品牌传播等专业服务。', 'Strategy'),
(2, '品牌创建', 'static/image/main_block_bk.png', '“0”起步创建品牌，从无到有贴身式为您提供品牌理念；品牌命名；品牌口号语；品牌形象；品牌传播等专业服务。', 'Establish'),
(3, '品牌升级', 'static/image/main_block_bk.png', '“0”起步创建品牌，从无到有贴身式为您提供品牌理念；品牌命名；品牌口号语；品牌形象；品牌传播等专业服务。', 'Update'),
(4, '品牌咨询', 'static/image/main_block_bk.png', '“0”起步创建品牌，从无到有贴身式为您提供品牌理念；品牌命名；品牌口号语；品牌形象；品牌传播等专业服务。', 'Consultation'),
(5, '品牌实现', 'static/image/main_block_bk.png', '“0”起步创建品牌，从无到有贴身式为您提供品牌理念；品牌命名；品牌口号语；品牌形象；品牌传播等专业服务。', 'Realizatioin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
