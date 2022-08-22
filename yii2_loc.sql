-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 22 2022 г., 15:12
-- Версия сервера: 5.7.33-log
-- Версия PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `yii2_loc`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `parent_id`, `name`, `keywords`, `description`) VALUES
(1, 0, 'Sportswear', NULL, NULL),
(2, 0, 'Mens', NULL, NULL),
(3, 0, 'Womens', NULL, NULL),
(4, 1, 'Nike', '', ''),
(5, 1, 'Under Armour', NULL, NULL),
(6, 1, 'Adidas', NULL, NULL),
(7, 1, 'Puma', NULL, NULL),
(8, 1, 'ASICS', NULL, NULL),
(9, 2, 'Fendi', NULL, NULL),
(10, 2, 'Guess', NULL, NULL),
(11, 2, 'Valentino', NULL, NULL),
(12, 2, 'Dior', NULL, NULL),
(13, 2, 'Versace', NULL, NULL),
(14, 2, 'Armani', NULL, NULL),
(15, 2, 'Prada', NULL, NULL),
(16, 2, 'Dolce and Gabbana', NULL, NULL),
(17, 2, 'Chanel', NULL, NULL),
(18, 2, 'Gucci', NULL, NULL),
(19, 3, 'Fendi', NULL, NULL),
(20, 3, 'Guess', NULL, NULL),
(21, 3, 'Valentino', NULL, NULL),
(22, 3, 'Dior', NULL, NULL),
(23, 3, 'Versace', NULL, NULL),
(24, 0, 'Kids', NULL, NULL),
(25, 0, 'Fashion', NULL, NULL),
(26, 0, 'Households', NULL, NULL),
(27, 0, 'Interiors', NULL, NULL),
(28, 0, 'Clothing', NULL, NULL),
(29, 0, 'Bags', 'сумки ключевики...', 'сумки описание...'),
(30, 0, 'Shoes', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `text`, `date`) VALUES
(1, 'Rus', 'rus@mail.ru', 'About', 'My message', '2022-08-17 19:37:58'),
(2, 'Rus', 'rus@mail.ru', 'About', 'about', '2022-08-17 20:38:56'),
(3, 'Rus', 'rus@mail.ru', 'About', 'dsadsa', '2022-08-17 20:42:30');

-- --------------------------------------------------------

--
-- Структура таблицы `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `filePath` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `itemId` int(11) DEFAULT NULL,
  `isMain` tinyint(1) DEFAULT NULL,
  `modelName` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `urlAlias` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `image`
--

INSERT INTO `image` (`id`, `filePath`, `itemId`, `isMain`, `modelName`, `urlAlias`, `name`) VALUES
(6, 'Products/Product15/ab8a06.jpg', 15, 0, 'Product', 'aa2ccbaefc-2', ''),
(11, 'Products/Product16/678e97.jpg', 16, 1, 'Product', '331135b40a-1', ''),
(12, 'Products/Product16/93df7f.jpg', 16, NULL, 'Product', 'a7ef143609-2', ''),
(13, 'Products/Product16/aed957.jpg', 16, NULL, 'Product', '8e68c0f693-3', ''),
(14, 'Products/Product17/05d81f.jpg', 17, 1, 'Product', '448b6eba64-1', ''),
(15, 'Products/Product18/1528d9.jpg', 18, 1, 'Product', '7dbba2c29a-1', ''),
(16, 'Products/Product1/f6998e.jpg', 1, 0, 'Product', 'a5f082015f-2', ''),
(17, 'Products/Product2/8adedb.jpg', 2, 1, 'Product', '8f0fe2c138-1', ''),
(18, 'Products/Product15/ed15e8.jpg', 15, 0, 'Product', '59ea10632d-3', ''),
(19, 'Products/Product15/e8a881.jpg', 15, 0, 'Product', '52ec10744d-4', ''),
(20, 'Products/Product15/eefd70.jpg', 15, 0, 'Product', '54b45331a2-5', ''),
(21, 'Products/Product15/768d92.jpg', 15, 1, 'Product', '7440adb25c-1', ''),
(22, 'Products/Product1/08b886.jpg', 1, 1, 'Product', '3080f5cea4-1', ''),
(23, 'Products/Product3/b800ee.jpg', 3, 1, 'Product', 'ea01d74fd5-1', ''),
(24, 'Products/Product5/6137db.jpg', 5, 1, 'Product', '7607b4cfc9-1', ''),
(25, 'Products/Product10/def86f.jpg', 10, 1, 'Product', 'e54231b638-1', ''),
(26, 'Products/Product14/1575e7.jpg', 14, 1, 'Product', '941cd43bb6-1', ''),
(27, 'Products/Product7/899340.jpg', 7, 0, 'Product', 'a7307e54b5-2', ''),
(28, 'Products/Product7/000808.jpg', 7, 1, 'Product', '6d7a39368a-1', ''),
(29, 'Products/Product14/9e717e.jpg', 14, NULL, 'Product', '8168422267-2', ''),
(30, 'Products/Product12/bef8b0.jpg', 12, 1, 'Product', '8e7a954028-1', ''),
(31, 'Products/Product12/eb4318.jpg', 12, NULL, 'Product', 'b133534cfb-2', ''),
(32, 'Products/Product12/68afa6.jpg', 12, NULL, 'Product', 'a4700d358a-3', ''),
(33, 'Products/Product12/517c9b.jpg', 12, NULL, 'Product', '1f76f33011-4', '');

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1660401147),
('m140622_111540_create_image_table', 1660401148),
('m140622_111545_add_name_to_image_table', 1660401148);

-- --------------------------------------------------------

--
-- Структура таблицы `order`
--

CREATE TABLE `order` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `qty` int(10) NOT NULL,
  `sum` float NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `order`
--

INSERT INTO `order` (`id`, `created_at`, `updated_at`, `qty`, `sum`, `status`, `name`, `email`, `phone`, `address`) VALUES
(16, '2022-08-08 22:23:32', '2022-08-17 21:41:23', 7, 400, '0', 'Рус', '456465@naul.ru', '321123', 'ST'),
(17, '2022-08-08 22:25:02', '2022-08-08 22:25:02', 11, 480, '0', 'Рус', '456465@naul.ru', '90909', '29 ST'),
(18, '2022-08-09 01:20:12', '2022-08-09 01:20:12', 3, 156, '0', 'Рус', '70@inbox.ru', '9999999', 'NY, 29'),
(19, '2022-08-09 01:21:39', '2022-08-17 21:42:13', 2, 100, '0', 'Рус', 'russ@mail.ru', '90909', 'myaddress'),
(20, '2022-08-09 01:26:48', '2022-08-09 01:26:48', 2, 100, '1', 'Рус', '70@inbox.ru', '90909', 'NY, 29'),
(21, '2022-08-09 01:28:31', '2022-08-09 01:28:31', 2, 100, '0', 'Рус', '70@inbox.ru', '90909', 'NY, 29'),
(22, '2022-08-09 01:30:01', '2022-08-09 01:30:01', 2, 100, '0', 'Рус', '3@inbox.ru', '90909', '29 ST'),
(23, '2022-08-09 01:31:01', '2022-08-09 01:31:01', 2, 100, '0', 'Рус', 'r70@inbox.ru', '90909', '29 ST'),
(24, '2022-08-09 01:32:12', '2022-08-09 01:32:12', 2, 126, '0', 'Рус', '456465@naul.ru', 'dsadas', 'nystreet'),
(25, '2022-08-10 21:19:46', '2022-08-10 21:19:46', 1, 20, '0', 'Рус', 'r4213170@inbox.ru', '9090', '29 ST'),
(26, '2022-08-11 22:34:30', '2022-08-11 22:34:30', 3, 96, '0', 'Рус', '456465@naul.ru', '321321', 'dasdsa'),
(27, '2022-08-20 14:56:51', '2022-08-20 14:56:51', 3, 66, '0', 'dsa', 'dasda@aaa.ru', '321321', '29 Kushbegi ST');

-- --------------------------------------------------------

--
-- Структура таблицы `order_items`
--

CREATE TABLE `order_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `qty_item` int(11) NOT NULL,
  `sum_item` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `name`, `price`, `qty_item`, `sum_item`) VALUES
(1, 16, 2, 'Джинсы MR520 MR 227 20002 0115 29-34 р Синие', 56, 5, 280),
(2, 16, 3, 'Блуза Mango 53005681-05 M Бежевая', 20, 1, 20),
(3, 16, 6, 'Кардиган Levi\'s Icy Grey Heather M', 100, 1, 100),
(4, 17, 2, 'Джинсы MR520 MR 227 20002 0115 29-34 р Синие', 56, 5, 280),
(5, 17, 3, 'Блуза Mango 53005681-05 M Бежевая', 20, 5, 100),
(6, 17, 6, 'Кардиган Levi\'s Icy Grey Heather M', 100, 1, 100),
(7, 18, 2, 'Джинсы MR520 MR 227 20002 0115 29-34 р Синие', 56, 1, 56),
(8, 18, 6, 'Кардиган Levi\'s Icy Grey Heather M', 100, 1, 100),
(9, 18, 7, 'Кардиган ONLY ON 15102048 M Black Tan/Partridg', 0, 1, 0),
(10, 19, 5, 'Блузка Kira Plastinina 17-16-17453-SM-29 S', 0, 1, 0),
(11, 19, 6, 'Кардиган Levi\'s Icy Grey Heather M', 100, 1, 100),
(12, 20, 5, 'Блузка Kira Plastinina 17-16-17453-SM-29 S', 0, 1, 0),
(13, 20, 6, 'Кардиган Levi\'s Icy Grey Heather M', 100, 1, 100),
(14, 21, 5, 'Блузка Kira Plastinina 17-16-17453-SM-29 S', 0, 1, 0),
(15, 21, 6, 'Кардиган Levi\'s Icy Grey Heather M', 100, 1, 100),
(16, 22, 5, 'Блузка Kira Plastinina 17-16-17453-SM-29 S', 0, 1, 0),
(17, 22, 6, 'Кардиган Levi\'s Icy Grey Heather M', 100, 1, 100),
(18, 23, 5, 'Блузка Kira Plastinina 17-16-17453-SM-29 S', 0, 1, 0),
(19, 23, 6, 'Кардиган Levi\'s Icy Grey Heather M', 100, 1, 100),
(20, 24, 2, 'Джинсы MR520 MR 227 20002 0115 29-34 р Синие', 56, 1, 56),
(21, 24, 4, 'Блуза Tom Tailor TT 20312490071 7610 M Зелёная', 70, 1, 70),
(22, 25, 3, 'Блуза Mango 53005681-05 M Бежевая', 20, 1, 20),
(23, 26, 2, 'Джинсы MR520 MR 227 20002 0115 29-34 р Синие', 56, 1, 56),
(24, 26, 3, 'Блуза Mango 53005681-05 M Бежевая', 20, 2, 40),
(25, 27, 1, 'Джинсы Garcia 244/32/856 28-32 р Серо-синие', 10, 1, 10),
(26, 27, 2, 'Джинсы MR520 MR 227 20002 0115 29-34 р Синие', 56, 1, 56),
(27, 27, 5, 'Блузка Kira Plastinina 17-16-17453-SM-29 S', 0, 1, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` text,
  `price` float NOT NULL DEFAULT '0',
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT 'no-image.png',
  `hit` enum('0','1') NOT NULL DEFAULT '0',
  `new` enum('0','1') NOT NULL DEFAULT '0',
  `sale` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `category_id`, `name`, `content`, `price`, `keywords`, `description`, `img`, `hit`, `new`, `sale`) VALUES
(1, 4, 'Джинсы Garcia 244/32/856 28-32 р Серо-синие', '<p>Великолепные джинсы винтажно-голубого цвета. Настоящая находка для любителей качественного денима. Особенности: Зауженные к низу Пять карманов Высококачественный деним Высокая посадка (high fit) Выгодно подчеркивают фигуру</p>\r\n', 10, '', '', 'product1.jpg', '0', '0', '0'),
(2, 4, 'Джинсы MR520 MR 227 20002 0115 29-34 р Синие', '<p>MR520 &ndash; амбициозный восточноевропейский бренд, который предлагает качественную и стильную одежду, сделанную специально для молодых людей, следящих за своим внешним видом. Женские джинсы фасона boyfriend fit (в переводе с англ. &ndash; &quot;джинсы моего парня&quot;). Модель с зауженными штанинами. Застегивается на пуговицы. Изделие с низкой посадкой. Джинсы дополнены прорезными карманами спереди и накладными карманами сзади. Изделие декорировано эффектом потертости, вареным эффектом и необычными швами.</p>\r\n\r\n<p><img alt=\"\" src=\"/web/upload/global/work-3.jpg\" style=\"height:108px; margin-left:40px; margin-right:40px; width:200px\" /></p>\r\n\r\n<h3>Покупайте!</h3>\r\n', 56, '', '', 'product2.jpg', '1', '0', '0'),
(3, 9, 'Блузка Mango 53005681-05 M Бежевая', '<p>Испанский бренд модной одежды &quot;Mango&quot; родился в 1984 году в Барселоне, где и по сей день находится штаб-квартира компании. В том же городе появился и первый магазин &mdash; на улице Пасео де Грасия (Paseo de Gracia). Компания, основанная братьями Исааком и Нахманом Андиком (Isaac &amp; Nahman Andic), очень быстро набрала популярность &mdash; всего лишь годом позднее был открыт магазин в другом городе, на этот раз в Валенсии. Одежда &quot;Mango&quot; отличается высоким качеством, приемлемой ценой, современным дизайном и неповторимым стилем.</p>\r\n', 20, '', '', 'product3.jpg', '1', '1', '0'),
(4, 21, 'Блузка Tom Tailor TT 7610 M Зелёная', '<p>Tom Tailor Group &mdash; один из ведущих и быстро развивающихся Fashion холдингов германии и европы, продукция которого ориентирована на целевую аудиторию в возрасте от 0 до 60 лет. Tom Tailor известен на рынке текстиля с 1962 года и до сих пор сохраняет стандарты немецкого качества. Tom Tailor предлагает повседневную одежду и аксессуары высокого качества для женщин, мужчин и детей. Одежда от Tom Tailor поможет создать активный повседневный образ с нотками элегантности.</p>\r\n', 70, '', '', 'product4.jpg', '1', '0', '1'),
(5, 25, 'Блузка Kira Plastinina 17-16-17453-SM-29 S', '', 0, '', '', 'product5.jpg', '1', '0', '0'),
(6, 28, 'Кардиган Levi\'s Icy Grey Heather M', NULL, 100, NULL, NULL, 'product6.jpg', '1', '0', '0'),
(7, 28, 'Кардиган ONLY ON 1510 M Black', '<p>Casual марка молодежной женской одежды ONLY является частью датской компании Bestseller AS. Изначально Bestseller занимался производством детской одежды, а в 1995 году появилась на свет марка ONLY. Популярность этой марки возрастала быстрыми темпами и теперь ONLY владеет 770 магазинами в более чем 40 странах мира. ONLY &mdash; бренд стильной молодежной одежды. Это бренд для тех, кто любит добиваться успеха и быть не таким, как все. Демократичные цены, модные модели, экологически чистые ткани делают одежду от ONLY сверхпопулярной.</p>\r\n', 0, '', '', 'no-image.png', '1', '1', '0'),
(8, 26, 'Брюки SK House 2211-1972кор L Коричневые', '\r\n\r\nКомпания SK House — это украинский производитель модной женской одежды с безупречной репутацией и тысячами поклонников по всему СНГ. SK House изготавливает качественный и долговечный товар, созданный из высококачественных тканей. Компания использует современные методы пошива и, изучая текущие мировые тенденции и локальные требования покупателей, создает модели, которые не задерживаются на полках длительное время и быстро раскупаются во всех странах.', 99, NULL, NULL, 'no-image.png', '0', '0', '1'),
(9, 26, 'Брюки Kira Plastinina 17-07-17418-FL-58 L', NULL, 0, NULL, NULL, 'product1.jpg', '0', '0', '0'),
(10, 29, 'Сумка GUSSACI TUGUS13A060-3-10', '<p>Простота, инновационный стиль бренда, высококачественные требования к продукции, благодаря этому GUSSACI Italy пользуется высокой репутацией во многих странах Европы. Превосходное качество, отличный дизайн, соответствующие цены делают &quot;Гуссачи&quot; модным и популярным! Особенности: Количество основных отделений: 1. Сумка имеет прорезной карман на молнии, а также два небольших накладных кармана для хранения мобильного телефона, разных портативных гаджетов и мелочей. На лицевой стороне модели есть узкий прорезной карман на &quot;молнии&quot;. На тыльной стороне модели есть прорезной карман на &quot;молнии&quot;. Особенностью данной модели является возможность изменения ее формы при помощи дополнительной внешней застежки-молнии. Сумка имеет 2 ручки для переноса на локте или в руке. Их длина не регулируется и составляет 45 см, а высота от крайней точки ручки до сумки &mdash; 16 см. В комплект к изделию прилагается съемный плечевой ремень. Его длина может регулироваться при помощи металлической пряжки от 78 до 137.5 см. Сумка закрывается при помощи застежки-молнии. Материал подкладки: плотная ткань. Материал сумки: кожезаменитель. Цвет фурнитуры: золото. Размеры сумки: 26 х 25 х 10.5 см</p>\r\n', 15, '', '', 'product3.jpg', '0', '1', '0'),
(11, 29, 'Сумка Michael Kors Jet Set Travel Нежно-розовая', '\r\n\r\nОсобенность стиля Michael Kors заключается в том, что простота его коллекций гармонирует с роскошью. Этому дизайнеру под силу объединить американский утилитаризм в манере одеваться с европейской изысканностью и шармом. Все его работы отличает изящная утонченность, которая рождается из строгих, почти примитивных линий. Все аксессуары поддерживают общий стиль человека с безупречным вкусом.\r\n\r\nМодели Michael Kors могут оставаться оригинальными, стильными и неотразимыми в течение многих лет, что особо важно для покупательниц, не желающих постоянно обновлять свой гардероб.', 200, NULL, NULL, 'no-image.png', '0', '0', '1'),
(12, 29, 'Сумка Michael Kors Selma Золотистая', '<p>Особенность стиля Michael Kors заключается в том, что простота его коллекций гармонирует с роскошью. Этому дизайнеру под силу объединить американский утилитаризм в манере одеваться с европейской изысканностью и шармом. Все его работы отличает изящная утонченность, которая рождается из строгих, почти примитивных линий. Все аксессуары поддерживают общий стиль человека с безупречным вкусом. Модели Michael Kors могут оставаться оригинальными, стильными и неотразимыми в течение многих лет, что особо важно для покупательниц, не желающих постоянно обновлять свой гардероб.</p>\r\n', 205, '', '', 'product5.jpg', '0', '0', '0'),
(13, 29, 'Сумка Michael Kors Bedford Красная', '\r\n\r\nОсобенность стиля Michael Kors заключается в том, что простота его коллекций гармонирует с роскошью. Этому дизайнеру под силу объединить американский утилитаризм в манере одеваться с европейской изысканностью и шармом. Все его работы отличает изящная утонченность, которая рождается из строгих, почти примитивных линий. Все аксессуары поддерживают общий стиль человека с безупречным вкусом.\r\n\r\nМодели Michael Kors могут оставаться оригинальными, стильными и неотразимыми в течение многих лет, что особо важно для покупательниц, не желающих постоянно обновлять свой гардероб.', 0, NULL, NULL, 'no-image.png', '0', '0', '0'),
(14, 29, 'Сумка Michael Kors JS Travel Светло-розовая', '<p>Особенность стиля Michael Kors заключается в том, что простота его коллекций гармонирует с роскошью. Этому дизайнеру под силу объединить американский утилитаризм в манере одеваться с европейской изысканностью и шармом. Все его работы отличает изящная утонченность, которая рождается из строгих, почти примитивных линий. Все аксессуары поддерживают общий стиль человека с безупречным вкусом. Модели Michael Kors могут оставаться оригинальными, стильными и неотразимыми в течение многих лет, что особо важно для покупательниц, не желающих постоянно обновлять свой гардероб.</p>\r\n', 0, '', '', 'no-image.png', '0', '0', '0'),
(15, 4, 'Product', '<p>MyProduct</p>\r\n', 56, 'Keywords', 'Meta-description', 'no-image.png', '0', '0', '0'),
(16, 4, 'Bag', '<p>bag</p>\r\n', 0, 'bag', 'bag', 'no-image.png', '0', '0', '0'),
(17, 4, 'dsadsa', '<p>dsadsa</p>\r\n', 0, 'dsadsa', 'dsadsa', 'no-image.png', '0', '0', '0');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `auth_key` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `auth_key`) VALUES
(1, 'admin', '$2y$13$1Ifeqc32rvW7qvM9D7ycgOa29/hzrqcO5dFAXXnxGe7BeTaCKnMN2', 'z0i4_G06WyWtccQh2xvTZpiJQ3l4qNCb');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT для таблицы `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT для таблицы `order`
--
ALTER TABLE `order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT для таблицы `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
