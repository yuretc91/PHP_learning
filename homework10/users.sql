-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 20 2019 г., 19:58
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
-- База данных: `homework8_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(60) NOT NULL,
  `avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `email`, `avatar`) VALUES
(1, 'Peter', '827ccb0eea8a706c4c34a16891f84e7b', 'peter@gmail.com', 'uploads/Peter.jpg'),
(2, 'David', '01cfcd4f6b8770febfb40cb906715822', 'david@mail.ru', 'uploads/David.jpg'),
(3, 'Pavel', '96e79218965eb72c92a549dd5a330112', 'pavel@gmail.com', 'uploads/Pavel.jpg'),
(4, 'Bob', '3d2172418ce305c7d16d4b05597c6a59', 'bob@mail.ru', 'uploads/Bob.jpg'),
(5, 'John', '827ccb0eea8a706c4c34a16891f84e7b', 'john@mail.ru', 'uploads/John.jpg'),
(6, 'Bill', 'd0970714757783e6cf17b26fb8e2298f', 'bill@gmail.com', 'uploads/Bill.jpg'),
(7, 'Jack', 'f5bb0c8de146c67b44babbf4e6584cc0', 'jack@mail.ru', 'uploads/Jack.jpg'),
(8, 'Alice', '8ce87b8ec346ff4c80635f667d1592ae', 'alice@mail.ru', 'uploads/Alice.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
