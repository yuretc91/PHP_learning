-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 19 2019 г., 17:52
-- Версия сервера: 5.7.23
-- Версия PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `diplom`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cathegories`
--

CREATE TABLE `cathegories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `cathegories`
--

INSERT INTO `cathegories` (`id`, `name`, `description`, `picture`, `created_at`, `updated_at`) VALUES
(1, 'Виртуальная реальность', 'С появлением очков виртуальной реальности захватывающие дух приключения станут доступны буквально, не выходя из дома. Конечно, просмотр в таких очках не заменит реальных ощущений, но подарит чувство полного погружения в виртуальный мир, создаст зрительный и акустический эффект присутствия в заданном пространстве.', '', '2019-09-01 21:00:00', '2019-09-15 08:30:15'),
(2, 'Моноподы для селфи', 'Высококачественные моноподы для селфи', 'img.jpg', '2019-09-19 05:19:17', '2019-09-19 05:19:17'),
(3, 'Экшн-камеры', 'Экшн-камеры с лучшими характеристиками', 'img.jpg', '2019-09-19 05:53:01', '2019-09-19 05:53:01'),
(4, 'Фитнес-браслеты', 'Фитнес-браслеты для Вашего здоровья', 'img.jpg', '2019-09-19 05:58:36', '2019-09-19 05:58:36');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_31_081030_create_cathegories_table', 1),
(4, '2019_08_31_081140_create_products_table', 1),
(5, '2019_09_07_140054_create_cathegories__properties_table', 2),
(6, '2019_09_07_140054_create_catproperties_table', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cathegory_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `info` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `availability` tinyint(1) NOT NULL,
  `options` json NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `cathegory_id`, `title`, `info`, `image`, `price`, `availability`, `options`, `created_at`, `updated_at`) VALUES
(1, 1, 'Sony PlayStation VR', 'layStation VR - очки виртуальной реальности от компании Sony, подключаемые с помощью специального процессора к игровой консоли PlayStation 4 (любой версии) и телевизору. PlayStation VR оснащены дисплеем с диагональю 5.7\", с плавной визуализацией и необычайно низким временем задержки, что обеспечит комфортное и зрелищное погружение в мир трехмерной гиперреальности.', '1/Sony-PlayStation-VR.jpeg', 657.67, 1, '{\"type\": \"with integrated screen\", \"color\": \"white\", \"gyroscope\": true, \"microphone\": null, \"accelerometer\": true}', '2019-09-01 21:00:00', '2019-09-17 12:32:35'),
(2, 1, 'HTC Vive', 'HTC Vive — разрабатываемый компаниями HTC и Valve шлем виртуальной реальности. Является частью линейки продуктов HTC RE и проекта Valve SteamVR', '1/HTC-Vive.jpeg', 642.15, 1, '{\"type\": \"with integrated screen\", \"color\": \"black\", \"gyroscope\": true, \"microphone\": false, \"accelerometer\": true}', '2019-09-01 21:00:00', NULL),
(3, 1, 'Lenovo Explorer', 'Lenovo Explorer –шлем виртуальной реальности на платформе Windows Mixed Reality.', '1/Lenovo-Explorer.jpeg', 703.13, 1, '{\"type\": \"with integrated screen\", \"color\": \"black\", \"gyroscope\": true, \"microphone\": false, \"accelerometer\": true}', '2019-09-01 21:00:00', NULL),
(4, 1, 'Samsung Gear VR', 'В очках Gear VR Вы забудете о том, что находитесь в мире виртуальной реальности, ведь они такие лёгкие и удобные!', '1/Samsung-Gear-VR.jpeg', 598.54, 1, '{\"type\": \"with integrated screen\", \"color\": \"white\", \"gyroscope\": true, \"microphone\": false, \"accelerometer\": true}', '2019-09-02 21:00:00', NULL),
(5, 1, 'Sony-PlayStation-VR-v2', 'PlayStation VR v.2 – обновленная версия шлема виртуальной реальности от компании Sony, подключаемая с помощью специального процессора к игровой консоли PlayStation 4 (любой версии) и телевизору. PlayStation VR оснащен дисплеем с диагональю 5.7\", с плавной визуализацией и низким временем задержки, что обеспечивает комфортное и зрелищное погружение в мир трехмерной гиперреальности. ', '1/Sony-PlayStation-VR-v2.jpeg', 738.51, 1, '{\"type\": \"with integrated screen\", \"color\": \"white\", \"gyroscope\": true, \"microphone\": true, \"accelerometer\": true}', '2019-09-02 21:00:00', NULL),
(6, 1, 'Esperanza EGV300', 'Из основных параметров можно выделить: устройство подходит - для смартфонов, вывод изображения - экран смартфона, совместимость с ос - android, ios, регулировка межзрачкового расстояния - есть (диапазон регулировки от 55 до 72), регулировка фокуса - есть\r\nПри этом среди всех качеств модели обратите внимание на Технические характеристики: диагональ экрана смартфона - 3.5 – 6\", диаметр линз - 40 мм. ', '1/Esperanza-EGV300.jpeg', 783.43, 1, '{\"type\": \"for smartphone\", \"color\": \"green\", \"gyroscope\": false, \"microphone\": true, \"accelerometer\": false}', '2019-09-02 21:24:17', NULL),
(7, 1, 'XuMei VR Box', 'VR Box – творение китайских инженеров и дизайнеров,  которое прочно закрепилось на рынке отступных по цене VR-устройств а также обрело обширную пользовательскую базу.', '1/XuMei-VR-Box.jpeg', 834.13, 1, '{\"type\": \"for smartphone\", \"color\": \"white\", \"gyroscope\": false, \"microphone\": true, \"accelerometer\": true}', '2019-09-02 21:00:00', NULL),
(8, 1, 'Новый продукт', 'Описание нового продукта', '1/newproduct.jpg', 563.89, 1, '{\"type\": \"for smartphone\", \"color\": \"green\", \"gyroscope\": true, \"microphone\": true, \"accelerometer\": false}', '2019-09-17 13:57:52', '2019-09-17 13:57:52'),
(9, 2, 'Huawei-GF33', 'Очень хороший продукт', '2/Huawei-CF33.jpeg', 45.76, 1, '{\"color\": \"black\", \"material\": \"plastic\", \"bluetooth\": true}', '2019-09-19 07:20:16', '2019-09-19 07:20:16'),
(10, 2, 'Ritmix-RMH-150', 'С блютузом, из пластика, оранжевый', '2/Ritmix-RMH-150.jpeg', 65.34, 1, '{\"color\": \"blue\", \"material\": \"plastic\", \"bluetooth\": true}', '2019-09-19 07:22:07', '2019-09-19 07:22:07'),
(11, 2, 'Yuntend-YT-2288', 'Из пластика, без блютуза, синий', '2/Yunteng-YT-2288.jpeg', 54.23, 1, '{\"color\": \"blue\", \"material\": \"plastic\", \"bluetooth\": false}', '2019-09-19 07:24:00', '2019-09-19 07:24:00'),
(12, 2, 'Buro-SS-65BTR-BK', 'из стали, с блютузом, черный', '2/Buro-SS-65BTR-BK.jpeg', 76.23, 1, '{\"color\": \"black\", \"material\": \"steel\", \"bluetooth\": true}', '2019-09-19 07:25:30', '2019-09-19 07:25:30'),
(13, 2, 'Liberty-Project-MPD-2', 'из стали, с блютузом, синий', '2/Liberty-Project-MPD-2.jpeg', 72.16, 1, '{\"color\": \"blue\", \"material\": \"steel\", \"bluetooth\": true}', '2019-09-19 07:26:22', '2019-09-19 07:26:22'),
(14, 2, 'Jewel-Z18-2', 'из стали, без блютуза, зеленый', '2/Jewel-Z18-2.jpg', 59.26, 1, '{\"color\": \"black\", \"material\": \"steel\", \"bluetooth\": false}', '2019-09-19 07:27:24', '2019-09-19 07:27:24'),
(15, 2, 'Xiaomy-Selfie-Stick-Tripad', 'алюминиевый чёрный без блютуза', '2/Xiaomy-Selfie-Stick-Tripad.jpeg', 73.73, 1, '{\"color\": \"black\", \"material\": \"steel\", \"bluetooth\": false}', '2019-09-19 07:28:35', '2019-09-19 07:28:35'),
(16, 2, 'Huawei-AF15', 'алюминиевый синий с блютузом', '2/Huawei-AF15.jpeg', 93.52, 1, '{\"color\": \"blue\", \"material\": \"plastic\", \"bluetooth\": true}', '2019-09-19 07:29:39', '2019-09-19 07:29:39'),
(17, 2, 'Xiaomy-Mi-Bluetoth-Selfie-Stick', 'алюминиевый с блютузом чёрный', '2/Xiaomy-Mi-Bluetoth-Selfie-Stick.jpeg', 68.45, 1, '{\"color\": \"black\", \"material\": \"steel\", \"bluetooth\": true}', '2019-09-19 07:32:01', '2019-09-19 07:32:01'),
(18, 3, 'Inst-360-One-X', 'Суперкрутая экшн-камера', '3/1568898732.jpeg', 273.92, 1, '{\"color\": \"black\", \"night\": false, \"construction\": \"standart\"}', '2019-09-19 10:12:12', '2019-09-19 10:12:12'),
(19, 3, 'GoPro-HERO7-Black', 'Ещё одна крутая экшн-камера', '3/1568900465.jpeg', 321.02, 1, '{\"color\": \"black\", \"night\": true, \"construction\": \"standart\"}', '2019-09-19 10:41:05', '2019-09-19 10:41:05'),
(20, 3, 'Sony-FDR-X3000', 'экшн-камера', '3/1568900627.jpeg', 217.89, 1, '{\"color\": \"white\", \"night\": false, \"construction\": \"standart\"}', '2019-09-19 10:43:47', '2019-09-19 10:43:47');

-- --------------------------------------------------------

--
-- Структура таблицы `properties`
--

CREATE TABLE `properties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cathegory_id` int(11) NOT NULL,
  `properties` json NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `properties`
--

INSERT INTO `properties` (`id`, `cathegory_id`, `properties`, `created_at`, `updated_at`) VALUES
(1, 1, '{\"type\": {\"type\": \"select\", \"title\": \"Тип\", \"values\": {\"for smartphone\": \"для смартфона\", \"with integrated screen\": \"со встроенным экраном\"}}, \"color\": {\"type\": \"radio\", \"title\": \"Цвет\", \"values\": {\"black\": \"чёрный\", \"green\": \"зелёный\", \"white\": \"белый\"}}, \"gyroscope\": {\"type\": \"radio\", \"title\": \"Гироскоп\", \"values\": {\"\": \"Нет\", \"true\": \"Есть\"}}, \"microphone\": {\"type\": \"radio\", \"title\": \"Микрофон\", \"values\": {\"\": \"Нет\", \"true\": \"Есть\"}}, \"accelerometer\": {\"type\": \"radio\", \"title\": \"Акселерометр\", \"values\": {\"\": \"Нет\", \"true\": \"Есть\"}}}', '2019-09-07 21:00:00', '2019-09-16 16:57:17'),
(2, 2, '{\"color\": {\"type\": \"select\", \"title\": \"Цвет\", \"values\": {\"blue\": \"Синий\", \"black\": \"Чёрный\"}}, \"material\": {\"type\": \"radio\", \"title\": \"Материал\", \"values\": {\"steel\": \"Сталь\", \"plastic\": \"Пластик\"}}, \"bluetooth\": {\"type\": \"radio\", \"title\": \"Блютуз\", \"values\": {\"\": \"Нет\", \"true\": \"Есть\"}}}', '2019-09-19 05:22:38', '2019-09-19 05:45:13'),
(3, 3, '{\"color\": {\"type\": \"select\", \"title\": \"Цвет\", \"values\": {\"black\": \"Черный\", \"white\": \"Белый\"}}, \"night\": {\"type\": \"radio\", \"title\": \"Ночная съёмка\", \"values\": {\"\": \"Нет\", \"true\": \"Есть\"}}, \"construction\": {\"type\": \"radio\", \"title\": \"Конструкция\", \"values\": {\"mask\": \"Маска-камера\", \"standart\": \"Стандартная\"}}}', '2019-09-19 05:55:12', '2019-09-19 05:57:55'),
(4, 4, '{\"gps\": {\"type\": \"radio\", \"title\": \"Gps\", \"values\": {\"\": \"Нет\", \"true\": \"Есть\"}}}', '2019-09-19 06:08:40', '2019-09-19 06:08:40');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'yuretc91@mail.ru', NULL, '$2y$10$B9/Muu7J4Dd9r69asVUl3.aES5ekDNCBmwTqUTVgKnJy4NQslXjYW', 'la6YHhALhbpBQpGztmsKOB2FlwlITk9N2ing0ZUFDqnx7iSYO9Pgj18AMjhu', '2019-09-13 17:48:49', '2019-09-13 17:48:49');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cathegories`
--
ALTER TABLE `cathegories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cathegories`
--
ALTER TABLE `cathegories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `properties`
--
ALTER TABLE `properties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
