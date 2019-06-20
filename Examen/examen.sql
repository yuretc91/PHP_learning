-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 20 2019 г., 17:47
-- Версия сервера: 5.6.41
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `examen`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `author` varchar(60) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `email` varchar(60) NOT NULL,
  `post_id` int(11) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `author`, `date`, `email`, `post_id`, `message`) VALUES
(1, 'Admin', '2019-06-19 23:08:34', 'admin@mail.ru', 1, 'comment_1 comment_1 comment_1 comment_1 comment_1 comment_1 comment_1 comment_1 comment_1 comment_1 comment_1 comment_1 comment_1 comment_1 comment_1 comment_1 comment_1 comment_1 '),
(2, 'Yuretc', '2019-06-19 23:08:34', 'yuretc91@mail.ru', 1, 'comment_2 comment_2 comment_2 comment_2 comment_2 comment_2 comment_2 comment_2 comment_2 comment_2 comment_2 comment_2 comment_2 '),
(3, 'Admin', '2019-06-19 23:09:40', 'admin@mail.ru', 1, 'comment_3 comment_3 comment_3 comment_3 comment_3 comment_3 comment_3 comment_3 comment_3 comment_3 comment_3 comment_3 '),
(4, 'Yuretc', '2019-06-19 23:09:40', 'yuretc91@mail.ru', 1, 'comment_4 comment_4 comment_4 comment_4 comment_4 comment_4 comment_4 comment_4 comment_4 comment_4 comment_4 comment_4 comment_4 comment_4 comment_4 comment_4 ');

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(60) NOT NULL,
  `author` varchar(60) NOT NULL,
  `date` date NOT NULL,
  `tagId` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `title`, `author`, `date`, `tagId`, `image`, `text`) VALUES
(1, 'RETRO GALLERY: FRAGMENTING PERSISTENT FLIGHT AND PATHOLOGY', 'Admin', '2019-06-18', 1, 'images/posts/post1.jpg', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore '),
(2, 'RETRO GALLERY: FRAGMENTING PERSISTENT FLIGHT AND PATHOLOGY', 'Admin', '2019-06-19', 2, 'images/posts/post2.jpg', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore '),
(3, 'post3', 'Yuretc', '2019-06-19', 3, 'images/posts/post3.jpg', 'fwf3 fergeg egreg ever verver vervever ververve vevev evvev fveve vfever ververv ververv everv ervfwf3 fergeg egreg ever verver vervever ververve vevev evvev fveve vfever ververv ververv everv ervfwf3 fergeg egreg ever verver vervever ververve vevev evvev fveve vfever ververv ververv everv ervfwf3 fergeg egreg ever verver vervever ververve vevev evvev fveve vfever ververv ververv everv ervfwf3 fergeg egreg ever verver vervever ververve vevev evvev fveve vfever ververv ververv everv ervfwf3 fergeg egreg ever verver vervever ververve vevev evvev fveve vfever ververv ververv everv ervfwf3 fergeg egreg ever verver vervever ververve vevev evvev fveve vfever ververv ververv everv ervfwf3 fergeg egreg ever verver vervever ververve vevev evvev fveve vfever ververv ververv everv ervfwf3 fergeg egreg ever verver vervever ververve vevev evvev fveve vfever ververv ververv everv erv');

-- --------------------------------------------------------

--
-- Структура таблицы `posts_preview`
--

CREATE TABLE `posts_preview` (
  `id` int(11) NOT NULL,
  `post_name` varchar(60) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `post_id` int(11) NOT NULL,
  `cathegory_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `posts_preview`
--

INSERT INTO `posts_preview` (`id`, `post_name`, `image1`, `image2`, `post_id`, `cathegory_id`) VALUES
(1, 'Lovely Smiles', 'images/11.jpg', 'images/1.jpg', 1, 1),
(2, 'Post Preview 2', 'images/6.jpg', 'images/8.jpg', 2, 2),
(3, 'Post Preview 3', 'images/14.jpg', 'images/3.jpg', 3, 3),
(4, 'Post Preview 4', 'images/5.jpg', 'images/4.jpg', 4, 4),
(5, 'Post Preview 5', 'images/2.jpg', 'images/12.jpg', 5, 5),
(6, 'Post Preview 6', 'images/9.jpg', 'images/7.jpg', 6, 6);

-- --------------------------------------------------------

--
-- Структура таблицы `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `cathegory_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `slider`
--

INSERT INTO `slider` (`id`, `name`, `adress`, `cathegory_id`) VALUES
(1, ' bay', 'images/slider/slide1.jpg', 1),
(2, 'door', 'images/slider/slide2.jpg', 2),
(3, 'building', 'images/slider/slide3.jpg', 3),
(4, 'slide4', 'images/slider/slide4.jpg', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `tagName` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tags`
--

INSERT INTO `tags` (`id`, `tagName`) VALUES
(1, 'animals'),
(2, 'cooking'),
(3, 'countries'),
(4, 'city'),
(5, 'children'),
(6, 'home'),
(7, 'likes'),
(8, 'photo'),
(9, 'link'),
(10, 'law'),
(11, 'shopping'),
(12, 'skate'),
(13, 'school'),
(14, 'video'),
(15, 'travel'),
(16, 'images'),
(17, 'love'),
(18, 'lists'),
(19, 'makeup'),
(20, 'media'),
(21, 'password'),
(22, 'pagination'),
(23, 'wildlife');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `posts_preview`
--
ALTER TABLE `posts_preview`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `posts_preview`
--
ALTER TABLE `posts_preview`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
