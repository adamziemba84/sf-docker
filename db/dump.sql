-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25 Paź 2015, 19:06
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `symfonyproject`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_57698A6A57698A6A` (`role`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Zrzut danych tabeli `role`
--

INSERT INTO `role` (`id`, `name`, `role`) VALUES
(1, 'admin', 'ROLE_ADMIN'),
(2, 'manager', 'ROLE_MANAGER');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D649F85E0677` (`username`),
  UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=28 ;

--
-- Zrzut danych tabeli `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `is_active`, `name`, `surname`) VALUES
(1, 'admin', '89e495e7941cf9e40e6980d14a16bf023ccd4c91', 'admin@example.com', 1, 'Adam', 'Ziemba'),
(2, 'manager', '89e495e7941cf9e40e6980d14a16bf023ccd4c91', 'manager@example.com', 1, 'Manager', 'Managerski'),
(6, 'tomcio', 'c4033bff94b567a190e33faa551f411caef444f2', 'tom@exampe.com', 1, 'Tomasz', 'Kowalski'),
(11, 'many1', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'test1@o2.pl', 1, '', ''),
(12, 'many2', '89e495e7941cf9e40e6980d14a16bf023ccd4c91', 'test2@o2.pl', 1, '', ''),
(15, 'tomek', 'f9b971501473b69081e726fe4510953948988721', 'tomek@22.pl', 1, '', ''),
(16, 'grzesiek', '4beb1d3d120de2c6d3ee0fbff94b80230c2a2d25', 'grzesiek@test.pl', 1, '', ''),
(17, 'manager2', '54b1897ab7033c3d0406c65f31f1dd8f638da7ad', 'manager@test.pl', 1, 'Marian', 'Kowalski'),
(18, 'jabol', '8d36bb7229bd18422ec7e5b246068ffccd7499a8', 'jabol@test.pl', 1, '', ''),
(19, 'pati', '069629308f6a986db5471e2c74e200e964cc93aa', 'pati@test.pl', 1, 'Patrycja', 'Ziemba'),
(20, 'janusz', '89e495e7941cf9e40e6980d14a16bf023ccd4c91', 'janusz@example.com', 1, 'Janek', 'Palikot'),
(23, 'jajca', 'cc61a0f386a2877e3e27587fa086d2945b97c811', 'jaja@example.com', 1, 'jaja', 'jajejejej'),
(24, 'kris', '89e495e7941cf9e40e6980d14a16bf023ccd4c91', 'kris@example.com', 1, 'Kistofer', 'dsdsdsds'),
(25, 'kwachu', '89e495e7941cf9e40e6980d14a16bf023ccd4c91', 'kwachu@example.com', 1, 'Kwach', 'safdsf'),
(26, 'lolek', '89e495e7941cf9e40e6980d14a16bf023ccd4c91', 'lolek@example.com', 1, 'Lolek', 'lolekekel'),
(27, 'sadsa', '89e495e7941cf9e40e6980d14a16bf023ccd4c91', 'sads@exa.pl', 1, 'dsads', 'dsad');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_role`
--

CREATE TABLE IF NOT EXISTS `user_role` (
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `IDX_2DE8C6A3A76ED395` (`user_id`),
  KEY `IDX_2DE8C6A3D60322AC` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `user_role`
--

INSERT INTO `user_role` (`user_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 2),
(6, 2),
(12, 1),
(15, 1),
(16, 1),
(17, 2),
(18, 1),
(18, 2),
(19, 2),
(20, 2),
(23, 2),
(24, 2),
(25, 2),
(26, 2),
(27, 2);

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `user_role`
--
ALTER TABLE `user_role`
  ADD CONSTRAINT `FK_2DE8C6A3A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_2DE8C6A3D60322AC` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
