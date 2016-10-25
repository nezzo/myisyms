-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Хост: localhost:3306
-- Время создания: Окт 25 2016 г., 03:56
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
  `data` datetime(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Дамп данных таблицы `news_blogpost`
--

INSERT INTO `news_blogpost` (`id`, `name`, `meta-title`, `description`, `keywords`, `data`) VALUES
(1, 'Test1', '', 'Lorem ipsum adipiscing sit ligula urna adipiscing, pellentesque lorem adipiscing, non in ornare molestie eros sem, sodales. Mattis sed, auctor donec, proin nec odio quam rutrum cursus donec lectus maecenas lectus urna curabitur eget cursus, et morbi proin ut. Amet lorem sed morbi, non sit nibh, sagittis cursus rutrum vitae sit non arcu sem, ornare. Ultricies sagittis amet molestie, malesuada porta ultricies in fusce in, vitae nulla sapien sem. Duis in leo quisque fusce sodales orci ipsum risus sapien metus orci porttitor, sem integer malesuada auctor metus, sed quam massa. Nam nulla gravida sagittis odio commodo ultricies ornare tellus, bibendum tempus: sapien elementum vivamus maecenas enim duis, donec sapien curabitur, et magna mauris sed. Vulputate: porttitor fusce quisque pellentesque at elementum bibendum urna diam at.', '', '2016-10-16 00:00:00.000000'),
(2, 'Test2', '', 'Lorem ipsum adipiscing sit ligula urna adipiscing, pellentesque lorem adipiscing, non in ornare molestie eros sem, sodales. Mattis sed, auctor donec, proin nec odio quam rutrum cursus donec lectus maecenas lectus urna curabitur eget cursus, et morbi proin ut. Amet lorem sed morbi, non sit nibh, sagittis cursus rutrum vitae sit non arcu sem, ornare. Ultricies sagittis amet molestie, malesuada porta ultricies in fusce in, vitae nulla sapien sem. Duis in leo quisque fusce sodales orci ipsum risus sapien metus orci porttitor, sem integer malesuada auctor metus, sed quam massa. Nam nulla gravida sagittis odio commodo ultricies ornare tellus, bibendum tempus: sapien elementum vivamus maecenas enim duis, donec sapien curabitur, et magna mauris sed. Vulputate: porttitor fusce quisque pellentesque at elementum bibendum urna diam at.', '', '2016-10-16 00:00:00.000000'),
(3, 'Test3', '', 'Lorem ipsum adipiscing sit ligula urna adipiscing, pellentesque lorem adipiscing, non in ornare molestie eros sem, sodales. Mattis sed, auctor donec, proin nec odio quam rutrum cursus donec lectus maecenas lectus urna curabitur eget cursus, et morbi proin ut. Amet lorem sed morbi, non sit nibh, sagittis cursus rutrum vitae sit non arcu sem, ornare. Ultricies sagittis amet molestie, malesuada porta ultricies in fusce in, vitae nulla sapien sem. Duis in leo quisque fusce sodales orci ipsum risus sapien metus orci porttitor, sem integer malesuada auctor metus, sed quam massa. Nam nulla gravida sagittis odio commodo ultricies ornare tellus, bibendum tempus: sapien elementum vivamus maecenas enim duis, donec sapien curabitur, et magna mauris sed. Vulputate: porttitor fusce quisque pellentesque at elementum bibendum urna diam at.', '', '2016-10-16 00:00:00.000000'),
(4, 'Test4', '', 'Lorem ipsum adipiscing sit ligula urna adipiscing, pellentesque lorem adipiscing, non in ornare molestie eros sem, sodales. Mattis sed, auctor donec, proin nec odio quam rutrum cursus donec lectus maecenas lectus urna curabitur eget cursus, et morbi proin ut. Amet lorem sed morbi, non sit nibh, sagittis cursus rutrum vitae sit non arcu sem, ornare. Ultricies sagittis amet molestie, malesuada porta ultricies in fusce in, vitae nulla sapien sem. Duis in leo quisque fusce sodales orci ipsum risus sapien metus orci porttitor, sem integer malesuada auctor metus, sed quam massa. Nam nulla gravida sagittis odio commodo ultricies ornare tellus, bibendum tempus: sapien elementum vivamus maecenas enim duis, donec sapien curabitur, et magna mauris sed. Vulputate: porttitor fusce quisque pellentesque at elementum bibendum urna diam at.', '', '2016-10-16 00:00:00.000000'),
(5, 'Test5', '', 'Lorem ipsum adipiscing sit ligula urna adipiscing, pellentesque lorem adipiscing, non in ornare molestie eros sem, sodales. Mattis sed, auctor donec, proin nec odio quam rutrum cursus donec lectus maecenas lectus urna curabitur eget cursus, et morbi proin ut. Amet lorem sed morbi, non sit nibh, sagittis cursus rutrum vitae sit non arcu sem, ornare. Ultricies sagittis amet molestie, malesuada porta ultricies in fusce in, vitae nulla sapien sem. Duis in leo quisque fusce sodales orci ipsum risus sapien metus orci porttitor, sem integer malesuada auctor metus, sed quam massa. Nam nulla gravida sagittis odio commodo ultricies ornare tellus, bibendum tempus: sapien elementum vivamus maecenas enim duis, donec sapien curabitur, et magna mauris sed. Vulputate: porttitor fusce quisque pellentesque at elementum bibendum urna diam at.', '', '2016-10-16 00:00:00.000000'),
(6, 'Test6', '', 'Lorem ipsum adipiscing sit ligula urna adipiscing, pellentesque lorem adipiscing, non in ornare molestie eros sem, sodales. Mattis sed, auctor donec, proin nec odio quam rutrum cursus donec lectus maecenas lectus urna curabitur eget cursus, et morbi proin ut. Amet lorem sed morbi, non sit nibh, sagittis cursus rutrum vitae sit non arcu sem, ornare. Ultricies sagittis amet molestie, malesuada porta ultricies in fusce in, vitae nulla sapien sem. Duis in leo quisque fusce sodales orci ipsum risus sapien metus orci porttitor, sem integer malesuada auctor metus, sed quam massa. Nam nulla gravida sagittis odio commodo ultricies ornare tellus, bibendum tempus: sapien elementum vivamus maecenas enim duis, donec sapien curabitur, et magna mauris sed. Vulputate: porttitor fusce quisque pellentesque at elementum bibendum urna diam at.', '', '2016-10-16 00:00:00.000000'),
(7, 'Test7', '', 'Lorem ipsum adipiscing sit ligula urna adipiscing, pellentesque lorem adipiscing, non in ornare molestie eros sem, sodales. Mattis sed, auctor donec, proin nec odio quam rutrum cursus donec lectus maecenas lectus urna curabitur eget cursus, et morbi proin ut. Amet lorem sed morbi, non sit nibh, sagittis cursus rutrum vitae sit non arcu sem, ornare. Ultricies sagittis amet molestie, malesuada porta ultricies in fusce in, vitae nulla sapien sem. Duis in leo quisque fusce sodales orci ipsum risus sapien metus orci porttitor, sem integer malesuada auctor metus, sed quam massa. Nam nulla gravida sagittis odio commodo ultricies ornare tellus, bibendum tempus: sapien elementum vivamus maecenas enim duis, donec sapien curabitur, et magna mauris sed. Vulputate: porttitor fusce quisque pellentesque at elementum bibendum urna diam at.', '', '2016-10-16 00:00:00.000000');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
