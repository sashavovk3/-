-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 16 2023 г., 16:54
-- Версия сервера: 5.7.39-log
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данних: `notalex`
--

-- --------------------------------------------------------

--
-- Структура таблиці `affairs`
--

CREATE TABLE `affairs` (
  `id` int(9) NOT NULL,
  `sphere` varchar(100) CHARACTER SET utf8 NOT NULL,
  `theme` int(9) NOT NULL,
  `problem` text CHARACTER SET utf8 NOT NULL,
  `task` text CHARACTER SET utf8 NOT NULL,
  `result` text CHARACTER SET utf8 NOT NULL,
  `time` varchar(100) CHARACTER SET utf8 NOT NULL,
  `cost` int(9) NOT NULL,
  `economy` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Намп даних таблиці `affairs`
--

INSERT INTO `affairs` (`id`, `sphere`, `theme`, `problem`, `task`, `result`, `time`, `cost`, `economy`) VALUES
(1, 'Будівництво', 2, 'Клієнт на підставі рахунку вніс передоплату за партію оптових товарів, але постачальник не виконав своїх зобов\'язань щодо цього.', 'Розірвати договір, стягнути суму передоплати і відсотки за користування чужими грошовими коштами.', 'Повернення сплачених грошових коштів та відсотків за користування чужими грошовими коштами в повному обсязі.', '2 місяці', 20000, 100000),
(2, 'Будівництво', 2, 'Клієнт на підставі рахунку вніс передоплату за партію оптових товарів, але постачальник не виконав своїх зобов\'язань щодо цього.', 'Розірвати договір, стягнути суму передоплати і відсотки за користування чужими грошовими коштами.', 'Повернення сплачених грошових коштів та відсотків за користування чужими грошовими коштами в повному обсязі.', '2 місяці', 20000, 100000);

-- --------------------------------------------------------

--
-- Структура таблиці `kind_of_services`
--

CREATE TABLE `kind_of_services` (
  `id` int(9) NOT NULL,
  `kind_name` varchar(20) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Намп даних таблиці `kind_of_services`
--

INSERT INTO `kind_of_services` (`id`, `kind_name`) VALUES
(1, 'Реєстраційні послуги'),
(2, 'Арбітражні послуги'),
(3, 'Юридичний супровід');

-- --------------------------------------------------------

--
-- Структура таблиці `services`
--

CREATE TABLE `services` (
  `id` int(9) NOT NULL,
  `service_name` varchar(150) CHARACTER SET utf8 NOT NULL,
  `kind_id` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Намп даних таблиці `services`
--

INSERT INTO `services` (`id`, `service_name`, `kind_id`) VALUES
(1, 'Реєстрація юридичних осіб ', 1),
(2, 'Реєстрація товарного знаку', 1),
(4, 'Внесення змін', 1),
(5, 'Юридичні адреси ', 1),
(6, 'Добровільна ліквідація ', 1),
(7, 'Ліквідація фірм з боргами ', 1),
(8, 'Попереднє врегулювання спорів ', 2),
(9, 'Корпоративні спори ', 2),
(10, 'Податкові спори ', 2),
(11, 'Арбітраж, представництво в суді ', 2),
(12, 'Банкрутство компаній ', 2),
(13, 'Стягнення заборгованостей ', 2),
(14, 'Адміністративні спори ', 2),
(15, 'Договірні спори ', 2),
(16, 'Загальне абонентське юридичне обслуговування ', 3),
(17, 'Абонентське юридичне обслуговування ЗМІ та телеканалів ', 3),
(18, 'Абонентське юридичне обслуговування клінік та медцентрів ', 3),
(19, 'Договірна робота: аналіз та складання ', 3),
(20, 'Консультування з юридичних питань ', 3),
(21, 'Кадровий консалтинг ', 3),
(22, 'Міграційний консалтинг ', 3),
(23, 'Супровід угод з нерухомістю ', 3);

-- --------------------------------------------------------

--
-- Структура таблиці `user`
--

CREATE TABLE `user` (
  `id` int(3) NOT NULL,
  `user_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `pass` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Намп даних таблиці `user`
--

INSERT INTO `user` (`id`, `user_name`, `pass`) VALUES
(1, 'admin', 1111);

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `affairs`
--
ALTER TABLE `affairs`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `kind_of_services`
--
ALTER TABLE `kind_of_services`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `affairs`
--
ALTER TABLE `affairs`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `kind_of_services`
--
ALTER TABLE `kind_of_services`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `services`
--
ALTER TABLE `services`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
