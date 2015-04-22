-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 22 apr 2015 om 22:54
-- Serverversie: 5.6.20
-- PHP-versie: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `todo_app`
--
CREATE DATABASE IF NOT EXISTS `todo_app` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `todo_app`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tabel leegmaken voor invoegen `migrations`
--

TRUNCATE TABLE `migrations`;
--
-- Gegevens worden geëxporteerd voor tabel `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_04_12_160409_create_todos_table', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tabel leegmaken voor invoegen `password_resets`
--

TRUNCATE TABLE `password_resets`;
-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `todos`
--

DROP TABLE IF EXISTS `todos`;
CREATE TABLE IF NOT EXISTS `todos` (
`id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `done` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Tabel leegmaken voor invoegen `todos`
--

TRUNCATE TABLE `todos`;
--
-- Gegevens worden geëxporteerd voor tabel `todos`
--

INSERT INTO `todos` (`id`, `user_id`, `content`, `done`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'rsthsrthsrt', 1, '2015-04-17 22:41:33', '2015-04-17 22:43:32', '2015-04-17 22:43:32'),
(2, 1, '<a href="#">this</a>', 0, '2015-04-17 22:44:09', '2015-04-17 22:44:13', '2015-04-17 22:44:13'),
(3, 1, 'qergsg', 1, '2015-04-22 18:39:03', '2015-04-22 18:39:41', NULL),
(4, 1, 'qzfdsdef', 0, '2015-04-22 18:39:38', '2015-04-22 18:39:38', NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Tabel leegmaken voor invoegen `users`
--

TRUNCATE TABLE `users`;
--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'carl vanderwegen', 'mivixof@msn.com', '$2y$10$XVuCclNFx2xf3kZOntHjKOlA6XK1MQns0fB/1KUu8UAmjD4h2WDCm', 'CrRttl6szGQHKkWRE5r3AIRHjqPAGCkEMIzoflj36IelS1eFJLFhzwdpADAA', '2015-04-16 22:14:38', '2015-04-17 22:54:25'),
(2, 'carl vanderwegen', 'mivixof@msn.co', '$2y$10$83IVlbwRajNEnV5ELDD7x.51eXC4Y3WfwqpiQOn3zmMNfpaVV7GWS', 'gqMEunRmZTRxnH667aKuB7Ldaul2SQ5mjwVK6JEynzCLBmuPonGEbt5rA86R', '2015-04-16 23:43:29', '2015-04-16 23:45:14');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `password_resets`
--
ALTER TABLE `password_resets`
 ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexen voor tabel `todos`
--
ALTER TABLE `todos`
 ADD PRIMARY KEY (`id`), ADD KEY `todos_user_id_foreign` (`user_id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `todos`
--
ALTER TABLE `todos`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `todos`
--
ALTER TABLE `todos`
ADD CONSTRAINT `todos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
