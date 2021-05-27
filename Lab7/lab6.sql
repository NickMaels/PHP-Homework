-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 04 2021 г., 20:57
-- Версия сервера: 10.4.17-MariaDB
-- Версия PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `lab6`
--

-- --------------------------------------------------------

--
-- Структура таблицы `weather`
--

CREATE TABLE `weather` (
  `id` tinyint(4) NOT NULL,
  `m_date` date DEFAULT NULL,
  `temperature` varchar(255) DEFAULT NULL,
  `wind` varchar(255) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `weather`
--

INSERT INTO `weather` (`id`, `m_date`, `temperature`, `wind`, `picture`) VALUES
(1, '2021-02-26', '11°С', '8 км/ч', 'https://i.ibb.co/M13xP3h/1.png'),
(2, '2021-02-27', '12°С', '5 км/ч', 'https://i.ibb.co/mR1LTqx/overcast.png'),
(4, '2021-02-28', '9°С', '6 км/ч', 'https://i.ibb.co/gZsYggV/sleet.png'),
(5, '2021-03-01', '7°С', '18 км/ч', 'https://i.ibb.co/gZsYggV/sleet.png'),
(6, '2021-03-02', '9°С', '19 км/ч', 'https://i.ibb.co/Rvjrww9/occasional.png'),
(7, '2021-03-03', '11°С', '19 км/ч', 'https://i.ibb.co/N9kDphK/heavy.png'),
(8, '2021-03-04', '13°С', '13 км/ч', 'https://i.ibb.co/Rvjrww9/occasional.png'),
(9, '2021-03-05', '12°С', '14 км/ч', 'https://i.ibb.co/mR1LTqx/overcast.png'),
(10, '2021-03-06', '18°С', '4 км/ч', 'https://i.ibb.co/M13xP3h/1.png'),
(11, '2021-03-07', '19°С', '6 км/ч', 'https://i.ibb.co/M13xP3h/1.png');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `weather`
--
ALTER TABLE `weather`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `m_date` (`m_date`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `weather`
--
ALTER TABLE `weather`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
