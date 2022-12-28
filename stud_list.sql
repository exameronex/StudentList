-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3307
-- Время создания: Дек 28 2022 г., 23:30
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `stud_list`
--

-- --------------------------------------------------------

--
-- Структура таблицы `students`
--

CREATE TABLE `students` (
  `id_student` int NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `group_number` varchar(5) NOT NULL,
  `email` varchar(20) NOT NULL,
  `ege_points` int NOT NULL,
  `year_birth` int NOT NULL,
  `is_local` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `students`
--

INSERT INTO `students` (`id_student`, `first_name`, `last_name`, `gender`, `group_number`, `email`, `ege_points`, `year_birth`, `is_local`) VALUES
(1, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(2, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(3, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(4, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(5, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(6, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(7, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(8, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(9, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(10, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(11, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(12, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(13, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(14, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(15, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(16, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(17, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(18, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(19, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(20, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(21, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(22, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(23, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(24, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(25, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(26, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(27, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(28, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(29, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(30, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(31, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(32, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(33, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(34, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(35, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(36, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(37, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(38, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(39, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(40, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(41, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(42, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(43, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(44, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(45, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(46, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(47, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(48, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(49, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(50, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(51, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(52, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(53, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(54, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(55, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(56, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(57, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(58, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(59, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(60, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(61, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(62, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(63, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(64, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(65, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(66, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(67, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(68, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(69, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(70, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(71, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(72, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(73, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(74, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(75, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(76, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(77, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(78, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(79, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(80, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(81, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(82, 'Test', 'Test2', 0, 'H1234', 'test@mail.ru', 100, 1995, 0),
(83, 'Мага', 'Магомедов', 0, 'Ме123', 'na@qew.ru', 213, 1999, 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id_student`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `students`
--
ALTER TABLE `students`
  MODIFY `id_student` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
