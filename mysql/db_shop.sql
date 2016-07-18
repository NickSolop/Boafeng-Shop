-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 22 2016 г., 15:43
-- Версия сервера: 5.5.45
-- Версия PHP: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `db_shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `cart_id_products` int(11) NOT NULL,
  `cart_price` int(11) NOT NULL,
  `cart_count` int(11) NOT NULL,
  `cart_datetime` datetime NOT NULL,
  `cart_ip` varchar(100) NOT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL,
  `brand` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `reg_user`
--

CREATE TABLE IF NOT EXISTS `reg_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `datetime` datetime NOT NULL,
  `ip` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Дамп данных таблицы `reg_user`
--

INSERT INTO `reg_user` (`id`, `login`, `pass`, `name`, `surname`, `email`, `phone`, `datetime`, `ip`) VALUES
(11, 'admin', 'bdf234ntykq2feaf8f3f952bdd4eac9f65f185a9d000d5brn52t235z', 'Nick', 'Solop', 'nicksoloponine@gmail.com', '+380987239182', '2015-12-22 00:17:48', '127.0.0.1'),
(12, 'fffff', 'bdf234ntykq213fd6789341bb09d0611a4314e693f17d5brn52t235z', 'fffff', 'fffff', 'ffff@ggggg.ffff', 'fffff', '2015-12-23 12:57:20', '127.0.0.1'),
(13, 'aaabbb', '9nm2rv8qfeaf8f3f952bdd4eac9f65f185a9d0002yo6z', 'fffffff', 'ffffffff', 'fffffff@ff.hht', 'e423423423432', '2016-04-27 18:17:40', '127.0.0.1');

-- --------------------------------------------------------

--
-- Структура таблицы `table_products`
--

CREATE TABLE IF NOT EXISTS `table_products` (
  `products_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `seo_words` text NOT NULL,
  `seo_description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `features` text NOT NULL,
  `datetime` datetime NOT NULL,
  `visible` int(11) NOT NULL DEFAULT '0',
  `count` int(11) NOT NULL DEFAULT '0',
  `sale` int(11) NOT NULL DEFAULT '0',
  `new` int(11) NOT NULL DEFAULT '0',
  `leader` int(11) NOT NULL DEFAULT '0',
  `type_tovara` varchar(255) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `tovar` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`products_id`),
  UNIQUE KEY `products_id` (`products_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=50 ;

--
-- Дамп данных таблицы `table_products`
--

INSERT INTO `table_products` (`products_id`, `title`, `price`, `brand`, `seo_words`, `seo_description`, `image`, `description`, `features`, `datetime`, `visible`, `count`, `sale`, `new`, `leader`, `type_tovara`, `brand_id`, `tovar`) VALUES
(1, 'Baofeng UV-5R', 800, 'Baofeng', '', '', 'img1.jpg', '', '', '2015-11-09 17:21:00', 0, 0, 0, 0, 0, 'radio', 0, 1),
(2, 'Baofeng BF-888S', 599, 'Baofeng', '', '', 'img3.jpg', '', '', '2015-11-09 18:00:00', 0, 0, 0, 0, 0, 'radio', 0, 0),
(3, 'Baofeng GT-3 mark II', 1490, 'Baofeng', '', '', 'img2.jpg', '', '', '2015-11-09 18:00:00', 0, 0, 0, 0, 0, 'radio', 0, 0),
(4, 'Baofeng UV-82', 1050, 'Baofeng ', '', '', 'img4.jpg', '', '', '2015-11-09 18:00:00', 0, 0, 0, 0, 0, 'radio', 0, 1),
(5, 'Baofeng UV-B2', 1950, 'Baofeng', '', '', 'img5.jpg', '', '', '2015-11-09 18:00:00', 0, 0, 0, 0, 0, 'radio', 0, 0),
(6, 'Baofeng BF-A52', 950, 'Baofeng', '', '', 'img21.jpg', '', '', '2015-11-09 18:00:00', 0, 0, 0, 0, 0, 'radio', 0, 0),
(7, 'Baofeng UF-82', 950, 'Baofeng', '', '', 'img22.jpg', '', '', '2015-11-09 18:00:00', 0, 0, 0, 0, 0, 'radio', 0, 0),
(8, 'Baofeng UV-5RE', 830, 'Baofeng', '', '', 'img23.jpg', '', '', '2015-11-09 18:00:00', 0, 0, 0, 0, 0, 'radio', 0, 0),
(9, 'Baofeng UV-5X', 1100, 'Baofeng', '', '', 'img33.jpg', '', '', '2015-11-12 12:00:00', 0, 0, 0, 0, 0, 'radio', 0, 1),
(10, 'Baofeng UV-6', 1610, 'Baofeng', '', '', 'img34.jpg', '', '', '2015-11-12 12:00:00', 0, 0, 0, 0, 0, 'radio', 0, 0),
(11, 'Антенна (110mm)', 90, 'Baofeng', '', '', 'img6.jpg', '', '', '2015-11-13 13:00:00', 0, 0, 0, 0, 0, 'antenna', 0, 1),
(12, 'Motorolla антенна', 145, 'Motorolla', '', '', 'img39.jpg', '', '', '2015-11-13 14:00:00', 0, 0, 0, 0, 0, 'antenna', 0, 1),
(13, 'Baofeng антенна (216 мм)гнущ.', 95, 'Baofeng ', '', '', 'img14.jpg', '', '', '2015-11-13 14:00:00', 0, 0, 0, 0, 0, 'antenna', 0, 1),
(14, 'BAOFENG антенна (50mm)', 95, 'Baofeng', '', '', 'img9.jpg', '', '', '2015-11-13 14:00:00', 0, 0, 0, 0, 0, 'antenna', 0, 1),
(15, 'BAOFENG антенна SF-20  (72 mm)гнущ.', 150, 'Baofeng', '', '', 'img10.jpg', '', '', '2015-11-13 14:00:00', 0, 0, 0, 0, 0, 'antenna', 0, 1),
(16, 'NAGOYA антенна NA-773 (13-42 cm)телеск.', 150, 'Nagoya', '', '', 'img11.jpg', '', '', '2015-11-13 13:00:00', 0, 0, 0, 0, 0, 'antenna', 0, 1),
(17, 'NAGOYA антенна NA-666 (230 mm) гнущ.', 140, 'Nagoya', '', '', 'img16.jpg', '', '', '2015-11-13 14:00:00', 0, 0, 0, 0, 0, 'antenna', 0, 1),
(18, 'Dreamfly антенна, освещение белый (107 mm)', 175, 'Dreamfly', '', '', 'img12.jpg', '', '', '2015-11-13 14:00:00', 0, 0, 0, 0, 0, 'antenna', 0, 0),
(19, 'NAGOYA антенна RH-701 (215 mm)', 120, 'Diamond', '', '', 'img13.jpg', '', '', '2015-11-13 14:00:00', 0, 0, 0, 0, 0, 'antenna', 0, 1),
(20, 'NAGOYA антенна RH-771 (400 mm )', 160, 'Nagoya ', '', '', 'img8.jpg', '', '', '2015-11-13 14:00:00', 0, 0, 0, 0, 0, 'antenna', 0, 1),
(21, 'HKYRD антенна VC211 (150 mm)', 85, 'Hkyrd', '', '', 'img15.jpg', '', '', '2015-11-13 14:00:00', 0, 0, 0, 0, 0, 'antenna', 0, 1),
(22, 'HKYRD антенна автомоб.T1489(390 mm)', 180, 'Hkyrd', '', '', 'img17.jpg', '', '', '2015-11-13 14:00:00', 0, 0, 0, 0, 0, 'antenna', 0, 0),
(23, 'HKYRD антенна  t1488(360 mm) двойная', 250, 'Hkyrd', '', '', 'img18.jpg', '', '', '2015-11-13 14:00:00', 0, 0, 0, 0, 0, 'antenna', 0, 0),
(24, 'Diamond  антенна T1632 (470 mm)', 195, 'Hkyrd', '', '', 'img19.jpg', '', '', '2015-11-13 14:00:00', 0, 0, 0, 0, 0, 'antenna', 0, 1),
(25, 'HKYRD антенна VC383 (20 - 60 см) желез. Усил.', 215, 'Hkyrd', '', '', 'img20.jpg', '', '', '2015-11-13 14:00:00', 0, 0, 0, 0, 0, 'antenna', 0, 0),
(26, 'Baofeng литий-ионная батарея для UV5R (1800 мАч)', 290, 'Baofeng', '', '', 'img24.jpg', '', '', '2015-11-13 15:00:00', 0, 0, 0, 0, 0, 'battery', 0, 1),
(27, 'Baofeng расширенный  литий-ионная батарея для UV5R (3800 мАч)', 470, 'Baofeng', '', '', 'img25.jpg', '', '', '2015-11-13 15:00:00', 0, 0, 0, 0, 0, 'battery', 0, 1),
(28, 'Baofeng расширенной батареей чехол коробка для Baofeng UV-5R', 110, 'Baofeng', '', '', 'img38.jpg', '', '', '2015-11-13 15:00:00', 0, 0, 0, 0, 0, 'battery', 0, 1),
(29, 'Микрофон гарнитуры ( стандарт )', 80, 'n/n', '', '', 'img26.jpg', '', '', '2015-11-13 15:00:00', 0, 0, 0, 0, 0, 'headset', 0, 1),
(30, 'Микрофон гарнитуры T-east123e ( шнурок )', 80, 'n/n', '', '', 'img27.jpg', '', '', '2015-11-13 15:00:00', 0, 0, 0, 0, 0, 'headset', 0, 1),
(31, 'Микрофон гарнитуры белый( охрана )', 90, 'n/n', '', '', 'img28.jpg', '', '', '2015-11-13 15:00:00', 0, 0, 0, 0, 0, 'headset', 0, 1),
(32, 'Микрофон гарнитуры ( ларингофон )', 190, 'n/n', '', '', 'img29.jpg', '', '', '2015-11-13 15:00:00', 0, 0, 0, 0, 0, 'headset', 0, 1),
(33, 'Микрофон гарнитуры EB08-K1 ', 185, 'n/n', '', '', 'img30.jpg', '', '', '2015-11-13 15:00:00', 0, 0, 0, 0, 0, 'headset', 0, 0),
(34, 'Тангента микрофон D9127', 150, 'n/n', '', '', 'img31.jpg', '', '', '2015-11-13 15:00:00', 0, 0, 0, 0, 0, 'headset', 0, 1),
(35, 'Baofeng тангента микрофон Q14774', 150, 'Baofeng', '', '', 'img32.jpg', '', '', '2015-11-13 15:00:00', 0, 0, 0, 0, 0, 'headset', 0, 1),
(36, 'Микрофон гарнитуры (d-образная)', 150, 'n/n', '', '', 'img40.jpg', '', '', '2015-11-13 15:00:00', 0, 0, 0, 0, 0, 'headset', 0, 1),
(37, 'Клипса крепления к поясу Baofeng', 65, 'Baofeng', '', '', 'img35.jpg', '', '', '2015-11-13 15:00:00', 0, 0, 0, 0, 0, 'accessories', 0, 1),
(38, 'Резиновый чехол Baofeng UV-5R (black) ', 75, 'Baofeng', '', '', 'img36.jpg', '', '', '2015-11-13 16:00:00', 0, 0, 0, 0, 0, 'accessories', 0, 1),
(39, 'Крепления для кабеля микрофона (1 шт)', 4, 'n/n', '', '', 'img37.jpg', '', '', '2015-11-13 16:00:00', 0, 0, 0, 0, 0, 'accessories', 0, 1),
(40, 'Гарнитура микрофон Ухо (короткая)', 290, 'n/n', '', '', 'img41.jpg', '', '', '2016-02-02 14:00:00', 0, 0, 0, 0, 0, 'headset', 0, 1),
(41, 'Гарнитура микрофон Ухо (длинная)', 318, 'n/n', '', '', 'img42.jpg', '', '', '2016-02-02 15:00:00', 0, 0, 0, 0, 0, 'headset', 0, 1),
(42, 'Гарнитура микрофон Ухо(Витая)', 265, 'n/n', '', '', 'img43.jpg', '', '', '2016-02-02 13:00:00', 0, 0, 0, 0, 0, 'headset', 0, 1),
(43, 'Резиновый чехол Baofeng (Камуфляж)', 75, 'n/n', '', '', 'img44.jpg', '', '', '2016-02-02 13:00:00', 0, 0, 0, 0, 0, 'accessories', 0, 1),
(44, 'Водонепроницаемый чехол мешок ', 317, 'n/n', '', '', 'img45.jpg', '', '', '2016-02-02 14:00:00', 0, 0, 0, 0, 0, 'accessories', 0, 1),
(45, 'Автомобильное зарядное устройство BaoFeng', 80, 'n/n', '', '', 'img47.jpg', '', '', '2016-02-02 14:00:00', 0, 0, 0, 0, 0, 'accessories', 0, 1),
(46, ' Портативный диск USB для программирования ', 150, 'n/n', '', '', 'img46.jpg', '', '', '2016-02-02 13:00:00', 0, 0, 0, 0, 0, 'accessories', 0, 1),
(47, 'Переходник SMA женский ', 60, 'n/n', '', '', 'img48.jpg', '', '', '2016-02-02 13:00:00', 0, 0, 0, 0, 0, 'accessories', 0, 1),
(48, 'PTT MIC  спикер', 285, 'n/n', '', '', 'img49.jpg', '', '', '2016-04-04 08:00:00', 0, 0, 0, 0, 0, 'headset', 0, 1),
(49, 'Переходник SMA мужской', 35, 'n/n', '', '', 'img50.jpg', '', '', '2016-04-04 10:00:00', 0, 0, 0, 0, 0, 'accessories', 0, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
