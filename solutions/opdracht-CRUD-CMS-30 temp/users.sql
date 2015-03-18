-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 18 mrt 2015 om 00:54
-- Serverversie: 5.6.20
-- PHP-versie: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `opdracht-security-login`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`index` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `salt` varchar(150) NOT NULL,
  `hashed_password` varchar(150) NOT NULL,
  `last_login_time` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`index`, `email`, `salt`, `hashed_password`, `last_login_time`) VALUES
(1, 'mivixof@msn.com', 'H&lf35ykxw(hu1@e4*$\\+7', 'f68eeb17c2c4c236b5d9c1302f1f014a27dabfa10322d77696b7c96467f2ad6b', '2015-03-15'),
(2, 'mivixof@msn.com', '@R7-_rhMa]F94gUK})sC5P', 'c867e2cd7de6a01832ffc08f2ed1df7083bd190929739507fca333bb7b6a8269', '2015-03-15'),
(3, 'mivixof@gmail.com', '!{_zm4EdyU#qc%+u9)eG$7', 'b4f608ffb97bc311d47181da784eaedecd83c79e6edc7950e2bbf8d4498fc798', '2015-03-15'),
(4, 'mivixof@alyl.com', 'Vpc!f*{-y(4LxuvY021\\J6', '0babae127465e50b41380599a65fcb8b4bdf6eec8f37ff37c8b7b1038ed7230f', '2015-03-15'),
(5, 'mivixof@put.com', 'b1L&BSzqTVujJE0D7Yt)vw', 'f717a0c9973e329c564a0bb19e554ca347e262b0127e6f4fe44304c17fcbbb55', '2015-03-15'),
(6, 'mivixof@rav.com', 'e2PahVot^(DL1}lAr934G\\', 'aef2d01e0c4b51b734a41e3603c8874bc7afd09c250021ea8ec2026ff61c6ca7', '2015-03-15'),
(7, 'mivixof@dub.com', 'UwhfeSN%4^i8n0)$[tB-X!', '487db1ec51ef47cb150ad4304d43fb7bb66356c434133d322df2c8ed6eed5763', '2015-03-15'),
(8, 'mivixof@lol.com', '+tQfW%!_J&o\\CIngxOSs}8', '7eac8a6770593267def466e7755cf04df0f2206d490ff38fa3ea281a575046a5', '2015-03-16'),
(9, 'mivixof@dom.com', 'qSusc-VJe\\g!E0]d8mnf6h', '412262a50ba6507c5509eca6fe6b1b83cfdd5d411e3a2bde6dd49bc5e65bb443', '2015-03-16'),
(10, 'mivixof@kod.com', 'Q^{_baz6XoSKYp\\kw51DJ*', 'cc9e0d4e2b841766a05d54438f311682edb86109ac8cd7fd89bced2a922cd7b0', '2015-03-16'),
(11, 'mivixof@abc.com', 'Ck[S$x=20)}ye%WEZQzaDi', '7a44aaa7f58c8173d70cb52c76bfd2a88dce78d555cd8d9be5aa65d424b741a9', '2015-03-16');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`index`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
MODIFY `index` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
