-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 11 2021 г., 20:20
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
-- База данных: `library`
--

-- --------------------------------------------------------

--
-- Структура таблицы `elib`
--

CREATE TABLE `elib` (
  `id` tinyint(4) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `publishing` varchar(255) DEFAULT NULL,
  `subjects` text DEFAULT NULL,
  `prise` int(11) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `elib`
--

INSERT INTO `elib` (`id`, `title`, `author`, `year`, `publishing`, `subjects`, `prise`, `photo`) VALUES
(1, 'The Picture of Dorian Gray', 'Oscar Wilde', 1891, 'АСТ', 'The Picture of Dorian Gray is a Gothic and philosophical novel by Oscar Wilde, first published complete in the July 1890 issue of Lippincotts Monthly Magazine.Fearing the story was indecent, prior to publication the magazines editor deleted roughly five hundred words without Wildes knowledge.', 150, '1.jpg'),
(2, 'Martin Eden', 'Jack London', 1909, 'АРБТ', 'Martin Eden is a 1909 novel by American author Jack London about a young proletarian autodidact struggling to become a writer.', 130, '2.jpg'),
(3, 'The Godfather', 'Mario Puzo', 1969, 'АСТ', 'The Godfather is a crime novel by American author Mario Puzo. Originally published in 1969 by G. P. Putnams Sons, the novel details the story of a fictional Mafia family in New York City (and Long Beach, New York), headed by Vito Corleone.', 130, '3.jpg'),
(4, 'The Master and Margarita', 'Mikhail Bulgakov', 1969, 'АРБТ', 'The story concerns a visit by the devil to the officially atheistic Soviet Union. The Master and Margarita combines supernatural elements with satirical dark comedy and Christian philosophy, defying categorization within a single genre. Many critics consider it to be one of the best novels of the 20th century, as well as the foremost of Soviet satires.', 100, '4.jpg'),
(5, '1984', 'George Orwell', 1984, 'АСТ', 'The story takes place in an imagined future, the year 1984, when much of the world has fallen victim to perpetual war, omnipresent government surveillance, historical negationism, and propaganda. Great Britain, known as Airstrip One, has become a province of a totalitarian superstate named Oceania that is ruled by the Party who employ the Thought Police to persecute individuality and independent thinking.', 110, '5.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `elib`
--
ALTER TABLE `elib`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `elib`
--
ALTER TABLE `elib`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
