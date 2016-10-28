-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Хост: localhost:3306
-- Время создания: Окт 28 2016 г., 02:59
-- Версия сервера: 5.6.33-cll-lve
-- Версия PHP: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `lagfucow_isyms`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `login` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id`, `login`, `pass`) VALUES
(1, 'admin', 'dG84MjE=');

-- --------------------------------------------------------

--
-- Структура таблицы `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `skype` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `contact`
--

INSERT INTO `contact` (`id`, `email`, `skype`) VALUES
(1, 'admin@isyms.ru', 'xj-613d');

-- --------------------------------------------------------

--
-- Структура таблицы `news_blogpost`
--

CREATE TABLE IF NOT EXISTS `news_blogpost` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `meta-title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `data` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

--
-- Дамп данных таблицы `news_blogpost`
--

INSERT INTO `news_blogpost` (`id`, `name`, `meta-title`, `description`, `keywords`, `data`) VALUES
(39, 'Мгновенная рассрочка  ПриватБанк (opencart 1.5)', 'Мгновенная рассрочка  ПриватБанк (opencart 1.5)', '<p><img style="display: block; margin-left: auto; margin-right: auto;" src="../web/image/posts/module_privat_oplata_mgnovenna/logo-privatbank.jpg" width="320" height="61" /></p>\r\n<p>&nbsp; <span style="color: #000000;"><strong>Описание:</strong></span></p>\r\n<p><span style="color: #000000;">Модуль "Мгновенная рассрочка &nbsp;ПриватБанк", позволяет оплачивать товар интернет-магазина с помощью расчетной функции "Мгновенная рассрочка" от &nbsp;ПриватБанка.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style="color: #000000;"><strong>Скриншоты</strong>:</span></p>\r\n<p><span style="font-family: arial, helvetica, sans-serif; color: #000000;" data-blogger-escaped-style="background-color: white; font-family: &quot;arial&quot; , &quot;helvetica&quot; , sans-serif; font-size: 12px;">ID Shop: вводим id магазина тот что выдал ПриватБанк</span></p>\r\n<p><span style="color: #000000;">Password Shop: вводим пароль тот что выдал ПриватБанк.</span></p>\r\n<p><span style="color: #000000;"><img style="display: block; margin-left: auto; margin-right: auto;" src="../web/image/posts/module_privat_oplata_mgnovenna/privat_admin.jpg" width="400" height="184" />&nbsp;</span></p>\r\n<div class="separator"><span style="color: #000000;">При выборе &nbsp;платежа Privat Bank</span></div>\r\n<div class="separator">&nbsp;</div>\r\n<div class="separator"><span style="color: #000000;"><img style="display: block; margin-left: auto; margin-right: auto;" src="../web/image/posts/module_privat_oplata_mgnovenna/privat_payment.jpg" width="400" height="98" /></span></div>\r\n<div class="separator">&nbsp;</div>\r\n<div class="separator"><span style="color: #000000;">Появится окно с товаром, суммой расчета и сроком выбора кредитования.</span></div>\r\n<div class="separator">&nbsp;</div>\r\n<div class="separator"><span style="color: #000000;"><img style="display: block; margin-left: auto; margin-right: auto;" src="../web/image/posts/module_privat_oplata_mgnovenna/pay.jpg" width="400" height="97" />&nbsp;</span></div>\r\n<div class="separator"><span style="color: #000000;">После нажатия "оплата" &nbsp;будет перенаправлено в ПриватБанк &nbsp;для совершения сделки.</span></div>\r\n<div class="separator">&nbsp;</div>\r\n<div class="separator"><span style="color: #000000;"><img style="display: block; margin-left: auto; margin-right: auto;" src="../web/image/posts/module_privat_oplata_mgnovenna/1.jpg" width="400" height="187" />&nbsp;</span></div>\r\n<div class="separator"><span style="color: #000000;"><strong>Версия opencart</strong> : 1.5<br /><br />Для покупки модуля &nbsp;напишите в скайп &nbsp;xj-613d</span></div>', 'опенкарт, модули, мгновенная рассрочка ПриватБанк,opencart ,приватбанк оплата частями ,opencart premium templates ,шаблоны opencart бесплатно,интернет магазин opencart,бесплатные шаблоны, магазины оплата частями  ', '03:56:40 28-10-2016'),
(40, 'Оплата частями ПриватБанк (opencart 1.5)', 'Оплата частями ПриватБанк (opencart 1.5)', '<p><img style="display: block; margin-left: auto; margin-right: auto;" src="../web/image/posts/module_privat_oplata_4astami/logo-privatbank.jpg" width="320" height="61" /></p>\r\n<p>&nbsp;<span style="color: #000000;"> <strong>Описание:</strong></span><br /><span style="color: #000000;">Модуль "Оплата частями ПриватБанк", позволяет оплачивать товар интернет-магазина с помощью расчетной функции "Оплата частями" от &nbsp;ПриватБанка.</span><br /><br /><span style="color: #000000;"><strong>Скриншоты</strong>:</span><br /><span style="color: #000000;">ID Shop: вводим id магазина тот что выдал ПриватБанк</span><br /><span style="color: #000000;">Password Shop: вводим пароль тот что выдал ПриватБанк.</span></p>\r\n<p><span style="color: #000000;"><img style="display: block; margin-left: auto; margin-right: auto;" src="../web/image/posts/module_privat_oplata_4astami/privat_admin.jpg" width="400" height="184" />&nbsp;</span></p>\r\n<p><span style="color: #000000;">При выборе &nbsp;платежа Privat Bank</span></p>\r\n<p><span style="color: #000000;"><img style="display: block; margin-left: auto; margin-right: auto;" src="../web/image/posts/module_privat_oplata_4astami/privat_payment.jpg" width="400" height="98" />&nbsp;</span></p>\r\n<p><span style="color: #000000;">Появится окно с товаром, суммой расчета и сроком выбора кредитования.</span></p>\r\n<p><span style="color: #000000;"><img style="display: block; margin-left: auto; margin-right: auto;" src="../web/image/posts/module_privat_oplata_4astami/pay.jpg" width="400" height="97" />&nbsp;</span></p>\r\n<p><span style="color: #000000;">После нажатия "оплата" &nbsp;будет перенаправлено в ПриватБанк &nbsp;для совершения сделки.</span></p>\r\n<p><span style="color: #000000;"><img style="display: block; margin-left: auto; margin-right: auto;" src="../web/image/posts/module_privat_oplata_4astami/1.jpg" width="400" height="187" />&nbsp;</span></p>\r\n<p><span style="color: #000000;"><strong>Версия opencart</strong> : 1.5<br /><br />Демонстрация данного модуля по <a href="http://chrono.com.ua/">ссылке</a><br /><br />Для покупки модуля &nbsp;напишите в скайп &nbsp;xj-613d</span></p>', 'опенкарт, модули, оплата частями ПриватБанк,opencart ,приватбанк оплата частями ,opencart premium templates ,шаблоны opencart бесплатно,интернет магазин opencart,бесплатные шаблоны, магазины оплата частями  ', '03:56:07 28-10-2016');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
