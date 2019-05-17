-- Adminer 4.7.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(100) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `health` int(255) NOT NULL,
  `attack` int(255) NOT NULL,
  `xp` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `users` (`id`, `name`, `health`, `attack`, `xp`) VALUES
(1,	'Lucie',	200,	30,	0);

-- 2019-05-17 15:26:07
