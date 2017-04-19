-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 15 2017 г., 11:55
-- Версия сервера: 10.1.21-MariaDB
-- Версия PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `auto_site_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `age_norm`
--

CREATE TABLE `age_norm` (
  `id` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `age_sign` varchar(2) NOT NULL,
  `exp` int(11) NOT NULL,
  `exp_sign` varchar(2) NOT NULL,
  `rate` decimal(10,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `age_norm`
--

INSERT INTO `age_norm` (`id`, `age`, `age_sign`, `exp`, `exp_sign`, `rate`) VALUES
(1, 22, '<=', 3, '<=', '1.8'),
(2, 22, '>', 3, '<=', '1.7'),
(3, 22, '<=', 3, '>', '1.6'),
(4, 22, '>', 3, '>', '1.0');

-- --------------------------------------------------------

--
-- Структура таблицы `category_norm`
--

CREATE TABLE `category_norm` (
  `id` int(11) NOT NULL,
  `category` varchar(1) NOT NULL,
  `min_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category_norm`
--

INSERT INTO `category_norm` (`id`, `category`, `min_price`) VALUES
(1, 'A', 867),
(2, 'B', 3430);

-- --------------------------------------------------------

--
-- Структура таблицы `city_norm`
--

CREATE TABLE `city_norm` (
  `id` int(11) NOT NULL,
  `city` varchar(50) NOT NULL,
  `rate` decimal(10,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `city_norm`
--

INSERT INTO `city_norm` (`id`, `city`, `rate`) VALUES
(1, 'Москва', '1.0'),
(2, 'Московская область', '1.7');

-- --------------------------------------------------------

--
-- Структура таблицы `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `topic` varchar(20) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `customers`
--

INSERT INTO `customers` (`id`, `name`, `phone`, `email`, `topic`, `timestamp`) VALUES
(10, 'Петр Иванов', '+7-967-123-11-23', 'anton.gorshenin27@gmail.com', 'Каско', '2017-03-15 07:40:02');

-- --------------------------------------------------------

--
-- Структура таблицы `date_rate_norm`
--

CREATE TABLE `date_rate_norm` (
  `id` int(11) NOT NULL,
  `name_rate` varchar(20) NOT NULL,
  `rate` decimal(10,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `date_rate_norm`
--

INSERT INTO `date_rate_norm` (`id`, `name_rate`, `rate`) VALUES
(1, 'min', '0.4'),
(2, 'average', '0.6'),
(3, 'max', '1.0');

-- --------------------------------------------------------

--
-- Структура таблицы `hp_norm`
--

CREATE TABLE `hp_norm` (
  `id` int(11) NOT NULL,
  `min_hp` int(11) NOT NULL,
  `max_hp` int(11) NOT NULL,
  `rate` decimal(10,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `hp_norm`
--

INSERT INTO `hp_norm` (`id`, `min_hp`, `max_hp`, `rate`) VALUES
(1, 30, 50, '0.6'),
(2, 50, 70, '1.0'),
(3, 70, 100, '1.1'),
(4, 100, 120, '1.2'),
(5, 120, 150, '1.4'),
(6, 150, 900, '1.6');

-- --------------------------------------------------------

--
-- Структура таблицы `insurance_norm`
--

CREATE TABLE `insurance_norm` (
  `id` int(11) NOT NULL,
  `ins_type` int(1) NOT NULL,
  `rate` decimal(10,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `insurance_norm`
--

INSERT INTO `insurance_norm` (`id`, `ins_type`, `rate`) VALUES
(1, 1, '1.8'),
(2, 0, '1.0');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `age_norm`
--
ALTER TABLE `age_norm`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `category_norm`
--
ALTER TABLE `category_norm`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `city_norm`
--
ALTER TABLE `city_norm`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `date_rate_norm`
--
ALTER TABLE `date_rate_norm`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `hp_norm`
--
ALTER TABLE `hp_norm`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `insurance_norm`
--
ALTER TABLE `insurance_norm`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `age_norm`
--
ALTER TABLE `age_norm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `category_norm`
--
ALTER TABLE `category_norm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `city_norm`
--
ALTER TABLE `city_norm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблицы `date_rate_norm`
--
ALTER TABLE `date_rate_norm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `hp_norm`
--
ALTER TABLE `hp_norm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `insurance_norm`
--
ALTER TABLE `insurance_norm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
