-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 06 2022 г., 06:59
-- Версия сервера: 5.6.38
-- Версия PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(5000) DEFAULT NULL,
  `id_author` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `id_author`) VALUES
(1, 'Курс', 'Тестовая статья', 4),
(7, 'Природные рисусры', 'Тестовая статья РК', 4),
(8, 'Статья ASD', 'asdasd asdasdas dasdasdasdasdsdaasd asdasdasdas d a sdasdasda sdsdaasdasdasdasdasd asdasda sdasdsdaasdasdas dasdasdasdasdasdasd sdaasdasdasdasdasdasdasda sdasdsdaas dasdasdasdasdasdasd asdasdsda', 43),
(11, 'Qwertyy', 'Противоположная точка зрения подразумевает, что активно развивающиеся страны третьего мира неоднозначны и будут объективно рассмотрены соответствующими инстанциями. Имеется спорная точка зрения, гласящая примерно следующее: многие известные личности будут разоблачены. Идейные соображения высшего порядка, а также семантический разбор внешних противодействий позволяет выполнить важные задания по разработке своевременного выполнения сверхзадачи.', 43),
(12, 'Рыба текст', 'Наше дело не так однозначно, как может показаться: начало повседневной работы по формированию позиции позволяет оценить значение позиций, занимаемых участниками в отношении поставленных задач. Сложно сказать, почему элементы политического процесса лишь добавляют фракционных разногласий и представлены в исключительно положительном свете. В своём стремлении повысить качество жизни, они забывают, что семантический разбор внешних противодействий прекрасно подходит для реализации направлений прогрессивного развития.', 44);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(350) DEFAULT NULL,
  `login` varchar(100) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `full_name`, `login`, `password`) VALUES
(4, 'Din', 'Din', '202cb962ac59075b964b07152d234b70'),
(5, 'Miha', 'Miha', '123'),
(43, 'asd', 'asd', '202cb962ac59075b964b07152d234b70'),
(44, 'Yuri', 'Doom', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_author` (`id_author`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`id_author`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
