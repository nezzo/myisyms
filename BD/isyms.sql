-- phpMyAdmin SQL Dump
-- version 4.6.3
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Окт 17 2016 г., 03:19
-- Версия сервера: 5.7.15-0ubuntu0.16.04.1
-- Версия PHP: 7.0.8-0ubuntu0.16.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `isyms`
--

-- --------------------------------------------------------

--
-- Структура таблицы `news_blogpost`
--

CREATE TABLE `news_blogpost` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `decription` longtext NOT NULL,
  `data` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news_blogpost`
--

INSERT INTO `news_blogpost` (`id`, `name`, `decription`, `data`) VALUES
(1, 'Test1', 'Lorem ipsum adipiscing sit ligula urna adipiscing, pellentesque lorem adipiscing, non in ornare molestie eros sem, sodales. Mattis sed, auctor donec, proin nec odio quam rutrum cursus donec lectus maecenas lectus urna curabitur eget cursus, et morbi proin ut. Amet lorem sed morbi, non sit nibh, sagittis cursus rutrum vitae sit non arcu sem, ornare. Ultricies sagittis amet molestie, malesuada porta ultricies in fusce in, vitae nulla sapien sem. Duis in leo quisque fusce sodales orci ipsum risus sapien metus orci porttitor, sem integer malesuada auctor metus, sed quam massa. Nam nulla gravida sagittis odio commodo ultricies ornare tellus, bibendum tempus: sapien elementum vivamus maecenas enim duis, donec sapien curabitur, et magna mauris sed. Vulputate: porttitor fusce quisque pellentesque at elementum bibendum urna diam at.', '2016-10-16 00:00:00.000000'),
(2, 'Test2', 'Lorem ipsum adipiscing sit ligula urna adipiscing, pellentesque lorem adipiscing, non in ornare molestie eros sem, sodales. Mattis sed, auctor donec, proin nec odio quam rutrum cursus donec lectus maecenas lectus urna curabitur eget cursus, et morbi proin ut. Amet lorem sed morbi, non sit nibh, sagittis cursus rutrum vitae sit non arcu sem, ornare. Ultricies sagittis amet molestie, malesuada porta ultricies in fusce in, vitae nulla sapien sem. Duis in leo quisque fusce sodales orci ipsum risus sapien metus orci porttitor, sem integer malesuada auctor metus, sed quam massa. Nam nulla gravida sagittis odio commodo ultricies ornare tellus, bibendum tempus: sapien elementum vivamus maecenas enim duis, donec sapien curabitur, et magna mauris sed. Vulputate: porttitor fusce quisque pellentesque at elementum bibendum urna diam at.', '2016-10-16 00:00:00.000000'),
(3, 'Test3', 'Lorem ipsum adipiscing sit ligula urna adipiscing, pellentesque lorem adipiscing, non in ornare molestie eros sem, sodales. Mattis sed, auctor donec, proin nec odio quam rutrum cursus donec lectus maecenas lectus urna curabitur eget cursus, et morbi proin ut. Amet lorem sed morbi, non sit nibh, sagittis cursus rutrum vitae sit non arcu sem, ornare. Ultricies sagittis amet molestie, malesuada porta ultricies in fusce in, vitae nulla sapien sem. Duis in leo quisque fusce sodales orci ipsum risus sapien metus orci porttitor, sem integer malesuada auctor metus, sed quam massa. Nam nulla gravida sagittis odio commodo ultricies ornare tellus, bibendum tempus: sapien elementum vivamus maecenas enim duis, donec sapien curabitur, et magna mauris sed. Vulputate: porttitor fusce quisque pellentesque at elementum bibendum urna diam at.', '2016-10-16 00:00:00.000000'),
(4, 'Test4', 'Lorem ipsum adipiscing sit ligula urna adipiscing, pellentesque lorem adipiscing, non in ornare molestie eros sem, sodales. Mattis sed, auctor donec, proin nec odio quam rutrum cursus donec lectus maecenas lectus urna curabitur eget cursus, et morbi proin ut. Amet lorem sed morbi, non sit nibh, sagittis cursus rutrum vitae sit non arcu sem, ornare. Ultricies sagittis amet molestie, malesuada porta ultricies in fusce in, vitae nulla sapien sem. Duis in leo quisque fusce sodales orci ipsum risus sapien metus orci porttitor, sem integer malesuada auctor metus, sed quam massa. Nam nulla gravida sagittis odio commodo ultricies ornare tellus, bibendum tempus: sapien elementum vivamus maecenas enim duis, donec sapien curabitur, et magna mauris sed. Vulputate: porttitor fusce quisque pellentesque at elementum bibendum urna diam at.', '2016-10-16 00:00:00.000000'),
(5, 'Test5', 'Lorem ipsum adipiscing sit ligula urna adipiscing, pellentesque lorem adipiscing, non in ornare molestie eros sem, sodales. Mattis sed, auctor donec, proin nec odio quam rutrum cursus donec lectus maecenas lectus urna curabitur eget cursus, et morbi proin ut. Amet lorem sed morbi, non sit nibh, sagittis cursus rutrum vitae sit non arcu sem, ornare. Ultricies sagittis amet molestie, malesuada porta ultricies in fusce in, vitae nulla sapien sem. Duis in leo quisque fusce sodales orci ipsum risus sapien metus orci porttitor, sem integer malesuada auctor metus, sed quam massa. Nam nulla gravida sagittis odio commodo ultricies ornare tellus, bibendum tempus: sapien elementum vivamus maecenas enim duis, donec sapien curabitur, et magna mauris sed. Vulputate: porttitor fusce quisque pellentesque at elementum bibendum urna diam at.', '2016-10-16 00:00:00.000000'),
(6, 'Test6', 'Lorem ipsum adipiscing sit ligula urna adipiscing, pellentesque lorem adipiscing, non in ornare molestie eros sem, sodales. Mattis sed, auctor donec, proin nec odio quam rutrum cursus donec lectus maecenas lectus urna curabitur eget cursus, et morbi proin ut. Amet lorem sed morbi, non sit nibh, sagittis cursus rutrum vitae sit non arcu sem, ornare. Ultricies sagittis amet molestie, malesuada porta ultricies in fusce in, vitae nulla sapien sem. Duis in leo quisque fusce sodales orci ipsum risus sapien metus orci porttitor, sem integer malesuada auctor metus, sed quam massa. Nam nulla gravida sagittis odio commodo ultricies ornare tellus, bibendum tempus: sapien elementum vivamus maecenas enim duis, donec sapien curabitur, et magna mauris sed. Vulputate: porttitor fusce quisque pellentesque at elementum bibendum urna diam at.', '2016-10-16 00:00:00.000000'),
(7, 'Test7', 'Lorem ipsum adipiscing sit ligula urna adipiscing, pellentesque lorem adipiscing, non in ornare molestie eros sem, sodales. Mattis sed, auctor donec, proin nec odio quam rutrum cursus donec lectus maecenas lectus urna curabitur eget cursus, et morbi proin ut. Amet lorem sed morbi, non sit nibh, sagittis cursus rutrum vitae sit non arcu sem, ornare. Ultricies sagittis amet molestie, malesuada porta ultricies in fusce in, vitae nulla sapien sem. Duis in leo quisque fusce sodales orci ipsum risus sapien metus orci porttitor, sem integer malesuada auctor metus, sed quam massa. Nam nulla gravida sagittis odio commodo ultricies ornare tellus, bibendum tempus: sapien elementum vivamus maecenas enim duis, donec sapien curabitur, et magna mauris sed. Vulputate: porttitor fusce quisque pellentesque at elementum bibendum urna diam at.', '2016-10-16 00:00:00.000000');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `news_blogpost`
--
ALTER TABLE `news_blogpost`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `news_blogpost`
--
ALTER TABLE `news_blogpost`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
