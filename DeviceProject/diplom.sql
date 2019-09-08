-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 08 2019 г., 16:59
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
(1, 'Virtual Reality', 'С появлением очков виртуальной реальности захватывающие дух приключения станут доступны буквально, не выходя из дома. Конечно, просмотр в таких очках не заменит реальных ощущений, но подарит чувство полного погружения в виртуальный мир, создаст зрительный и акустический эффект присутствия в заданном пространстве.\r\nЧитать полностью:  https://news.tut.by/tehnogid/477199.html', '', '2019-09-01 21:00:00', NULL);

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
(1, 1, 'Sony PlayStation VR', 'layStation VR - очки виртуальной реальности от компании Sony, подключаемые с помощью специального процессора к игровой консоли PlayStation 4 (любой версии) и телевизору. PlayStation VR оснащены дисплеем с диагональю 5.7\", с плавной визуализацией и необычайно низким временем задержки, что обеспечит комфортное и зрелищное погружение в мир трехмерной гиперреальности. ', 'vr/Sony-PlayStation-VR.jpeg', 657.67, 1, '{\"type\": \"with integrated screen\", \"color\": \"white\", \"gyroscope\": true, \"microphone\": false, \"accelerometer\": true}', '2019-09-01 21:00:00', NULL),
(2, 1, 'HTC Vive', 'HTC Vive — разрабатываемый компаниями HTC и Valve шлем виртуальной реальности. Является частью линейки продуктов HTC RE и проекта Valve SteamVR', 'vr/HTC-Vive.jpeg', 642.15, 1, '{\"type\": \"with integrated screen\", \"color\": \"black\", \"gyroscope\": true, \"microphone\": false, \"accelerometer\": true}', '2019-09-01 21:00:00', NULL),
(3, 1, 'Lenovo Explorer', 'Lenovo Explorer –шлем виртуальной реальности на платформе Windows Mixed Reality.', 'vr/Lenovo-Explorer.jpeg', 703.13, 1, '{\"type\": \"with integrated screen\", \"color\": \"black\", \"gyroscope\": true, \"microphone\": false, \"accelerometer\": true}', '2019-09-01 21:00:00', NULL),
(4, 1, 'Samsung Gear VR', 'В очках Gear VR Вы забудете о том, что находитесь в мире виртуальной реальности, ведь они такие лёгкие и удобные!', 'vr/Samsung-Gear-VR.jpeg', 598.54, 1, '{\"type\": \"with integrated screen\", \"color\": \"white\", \"gyroscope\": true, \"microphone\": false, \"accelerometer\": true}', '2019-09-02 21:00:00', NULL),
(5, 1, 'Sony-PlayStation-VR-v2', 'PlayStation VR v.2 – обновленная версия шлема виртуальной реальности от компании Sony, подключаемая с помощью специального процессора к игровой консоли PlayStation 4 (любой версии) и телевизору. PlayStation VR оснащен дисплеем с диагональю 5.7\", с плавной визуализацией и низким временем задержки, что обеспечивает комфортное и зрелищное погружение в мир трехмерной гиперреальности. ', 'vr/Sony-PlayStation-VR-v2.jpeg', 7838.51, 1, '{\"type\": \"with integrated screen\", \"color\": \"white\", \"gyroscope\": true, \"microphone\": true, \"accelerometer\": true}', '2019-09-02 21:00:00', NULL),
(6, 1, 'Esperanza EGV300', 'Из основных параметров можно выделить: устройство подходит - для смартфонов, вывод изображения - экран смартфона, совместимость с ос - android, ios, регулировка межзрачкового расстояния - есть (диапазон регулировки от 55 до 72), регулировка фокуса - есть\r\nПри этом среди всех качеств модели обратите внимание на Технические характеристики: диагональ экрана смартфона - 3.5 – 6\", диаметр линз - 40 мм. ', 'vr/Esperanza-EGV300.jpeg', 783.43, 1, '{\"type\": \"for smartphone\", \"color\": \"green\", \"gyroscope\": false, \"microphone\": true, \"accelerometer\": false}', '2019-09-02 21:24:17', NULL),
(7, 1, 'XuMei VR Box', 'VR Box – творение китайских инженеров и дизайнеров,  которое прочно закрепилось на рынке отступных по цене VR-устройств а также обрело обширную пользовательскую базу.', 'vr/XuMei-VR-Box.jpeg', 834.13, 1, '{\"type\": \"for smartphone\", \"color\": \"white\", \"gyroscope\": false, \"microphone\": true, \"accelerometer\": true}', '2019-09-02 21:00:00', NULL);

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
(1, 1, '{\"type\": \"select\", \"color\": \"checkbox\", \"gyroscope\": \"radio\", \"microphone\": \"radio\", \"accelerometer\": \"radio\"}', '2019-09-07 21:00:00', NULL);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `properties`
--
ALTER TABLE `properties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
