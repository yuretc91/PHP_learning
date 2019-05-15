-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 15 2019 г., 15:42
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
-- База данных: `cms`
--

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `text` text NOT NULL,
  `is_it_read` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `text`, `is_it_read`) VALUES
(1, 1, 'comment_1', 'false'),
(2, 2, 'comment_2', 'true'),
(3, 1, 'comment_3', 'false'),
(4, 2, 'comment_4', 'false'),
(5, 1, 'comment_5', 'true'),
(6, 2, 'comment_6', 'false'),
(7, 2, 'comment_7', 'false'),
(8, 2, 'comment_8', 'false'),
(9, 1, 'comment_9', 'false'),
(10, 2, 'comment_10', 'false'),
(11, 1, 'comment_11', 'false'),
(12, 1, 'comment_12', 'false'),
(13, 1, 'comment_13', 'false'),
(14, 2, 'comment_14', 'false'),
(15, 1, 'comment_15', 'false'),
(16, 2, 'comment_16', 'false'),
(17, 1, 'comment_17', 'false'),
(18, 2, 'comment_18', 'false'),
(19, 2, 'comment_19', 'false'),
(20, 2, 'comment_20', 'false'),
(21, 1, 'comment_21', 'false'),
(22, 2, 'comment_22', 'false'),
(23, 1, 'comment_23', 'false'),
(24, 1, 'comment_24', 'false'),
(25, 1, 'comment_25', 'false');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
