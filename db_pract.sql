-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Мар 04 2016 г., 23:03
-- Версия сервера: 5.6.17
-- Версия PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `db_pract`
--

-- --------------------------------------------------------

--
-- Структура таблицы `convert_category`
--

CREATE TABLE IF NOT EXISTS `convert_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category` varchar(55) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `convert_category`
--

INSERT INTO `convert_category` (`id`, `category`) VALUES
(1, 'Маса'),
(3, 'Температура'),
(4, 'Час'),
(5, 'Змінити');

-- --------------------------------------------------------

--
-- Структура таблицы `convert_relations`
--

CREATE TABLE IF NOT EXISTS `convert_relations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(55) NOT NULL,
  `category` int(10) unsigned NOT NULL,
  `Ci` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Дамп данных таблицы `convert_relations`
--

INSERT INTO `convert_relations` (`id`, `name`, `category`, `Ci`) VALUES
(3, 'Секунда', 4, 1),
(4, 'Хвилина', 4, 60),
(5, 'Година', 4, 3600),
(6, 'Кілограм', 1, 1),
(7, 'Грам', 1, 0.001),
(8, 'Градус Цельсія', 3, 1),
(9, 'Грн', 5, 25.25);

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(155) NOT NULL,
  `title_url` varchar(155) NOT NULL,
  `description` varchar(255) NOT NULL,
  `keywords` text NOT NULL,
  `lang` varchar(2) NOT NULL DEFAULT 'ua',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `title`, `title_url`, `description`, `keywords`, `lang`) VALUES
(1, 'Головна', 'index', 'description index', 'index, головна, ,,,', 'ua'),
(2, 'Конвертер', 'convert', 'converter', 'конвертер, конвертер величин, ...', 'ua'),
(3, 'Converter', 'convert', 'converter', 'converter', 'en'),
(4, 'Main', 'index', 'description index', 'index, головна, ,,,', 'en'),
(5, 'Контакти', 'tel', 'tel contacts', 'контакти', 'ua'),
(6, 'Contacts', 'tel', 'tel contacts', 'tel contacts, contacts', 'en'),
(7, 'Фото альбом', 'photo_album', 'photo_album', 'фото, зображенняб картинки', 'ua'),
(8, 'Album', 'photo_album', 'photo_album', 'photo, album, image', 'en');

-- --------------------------------------------------------

--
-- Структура таблицы `photo`
--

CREATE TABLE IF NOT EXISTS `photo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `tmp` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `photo`
--

INSERT INTO `photo` (`id`, `name`, `tmp`) VALUES
(2, 'interer-komnata-kvartira-6205.jpg', 'G:wamp	mpphp3402.tmp'),
(3, 'nastol.com.ua-156211.jpg', 'G:wamp	mpphp3403.tmp'),
(4, 'nastol.com.ua-158768.jpg', 'G:wamp	mpphp8C15.tmp'),
(5, 'restoran-predmety-mebel.jpg', 'G:wamp	mpphpE553.tmp');

-- --------------------------------------------------------

--
-- Структура таблицы `photo_auth`
--

CREATE TABLE IF NOT EXISTS `photo_auth` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(55) NOT NULL,
  `login` varchar(55) NOT NULL,
  `password` varchar(155) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `login` (`login`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `photo_auth`
--

INSERT INTO `photo_auth` (`id`, `name`, `login`, `password`) VALUES
(1, 'name', 'login', '55c3b5386c486feb662a0785f340938f518d547f'),
(3, '1', '1', '0937afa17f4dc08f3c0e5dc908158370ce64df86'),
(5, '1', '2', 'b6a9bd1071d37d92d43c22131e0b16c8781d8b82'),
(6, '1', 'log', 'ad11eced9c1212744b7eafafc6b7dff1f8adf45f');

-- --------------------------------------------------------

--
-- Структура таблицы `pract_pages`
--

CREATE TABLE IF NOT EXISTS `pract_pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `title_url` varchar(100) NOT NULL,
  `keywords` text NOT NULL,
  `description` varchar(255) NOT NULL,
  `lang` varchar(2) NOT NULL DEFAULT 'ua',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `tel_table`
--

CREATE TABLE IF NOT EXISTS `tel_table` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(55) NOT NULL,
  `surname` varchar(55) NOT NULL,
  `tel` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tel` (`tel`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `tel_table`
--

INSERT INTO `tel_table` (`id`, `name`, `surname`, `tel`) VALUES
(1, '1', '1', 1),
(2, 'name', 'surname', 5545454);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
