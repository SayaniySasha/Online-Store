-- Adminer 4.5.0 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `categories` (`id`, `name`, `status`) VALUES
(1,	'Red Cat',	1);

DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `products` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `orders` (`id`, `user_id`, `order_date`, `products`, `status`) VALUES
(2,	1,	'2018-02-05 12:24:17',	'\"[{\\\"Id\\\":\\\"4\\\",\\\"Product\\\":\\\"Blue\\u00a0cat\\\",\\\"Price\\\":\\\"333\\\",\\\"Quantity\\\":\\\"3\\\",\\\"Picture\\\":\\\"4.jpg\\\"}]\"',	1);

DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `posts` (`id`, `title`, `content`, `status`, `created_at`) VALUES
(1,	'Test',	'Test post',	1,	'2018-02-01 11:13:12');

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `category_id` int(11) unsigned DEFAULT NULL,
  `price` float unsigned NOT NULL,
  `brand` varchar(255) NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `is_new` tinyint(1) NOT NULL DEFAULT '1',
  `is_recommended` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `products` (`id`, `name`, `status`, `category_id`, `price`, `brand`, `picture`, `description`, `is_new`, `is_recommended`) VALUES
(1,	'Cat',	1,	1,	123,	'cats',	'1.jpg',	'Cool Red Cat',	1,	0),
(2,	'Black Cat',	1,	1,	222,	'cats',	'2.jpg',	'Black Cat',	1,	0),
(3,	'White cat',	1,	1,	111,	'cat',	'3.jpg',	'White cat',	1,	0),
(4,	'Blue cat',	1,	1,	333,	'cats',	'4.jpg',	'Blue cat',	1,	0),
(5,	'Green Cat',	1,	1,	444,	'cats',	'6.jpg',	'Green cat',	1,	0),
(6,	'Cray cat',	1,	1,	555,	'cats',	'8.jpg',	'gray cat',	1,	0),
(7,	'test pic',	1,	1,	456,	'cats',	'5.jpg',	'test picture',	1,	0);

DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `roles` (`id`, `name`) VALUES
(1,	'admin'),
(2,	'manaher'),
(3,	'customer');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) unsigned NOT NULL DEFAULT '2',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role_id`, `status`) VALUES
(1,	'Janus',	'couchjanus@gmail.com',	'$2y$12$C/UMJOWWyb1S7Sqtcl5pI.X9U12fMfx1jgUZ6UB.crsGGkWxGvXZW',	3,	1);

-- 2018-02-05 14:44:29
