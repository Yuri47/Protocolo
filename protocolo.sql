-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08-Maio-2017 às 20:51
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `protocolo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `file`
--

DROP TABLE IF EXISTS `file`;
CREATE TABLE IF NOT EXISTS `file` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `idUser` int(4) NOT NULL,
  `protocolo` varchar(8) NOT NULL,
  `fileName` varchar(256) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `protocolo` (`protocolo`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `file`
--

INSERT INTO `file` (`id`, `idUser`, `protocolo`, `fileName`) VALUES
(1, 15, 'a0db6b3f', 'hqdefault.jpg'),
(3, 16, '123180f6', 'fotos-animais-fofos-4.jpg'),
(4, 16, '5d0c73ea', 'fotos-animais-fofos-4.jpg'),
(5, 16, 'dae9c423', '8e4628d6e7757a0579f299dc6944136d.jpg'),
(6, 16, 'b237b6c4', '4d7ba352bb7e4b88d4f0cfc864b26158.jpg'),
(7, 16, 'f4a34ef2', '821ae45b87.jpg'),
(8, 16, '216403c1', '291e3601a9.jpg'),
(9, 16, 'd15c20aa', 'afb7bf2092.jpg'),
(10, 16, 'a4829b82', '36c5c519c5.jpg'),
(11, 16, '4cac2284', '2058cb53a6.jpg'),
(12, 16, '30fd3253', '25149c06de.jpg'),
(13, 15, 'fed8e6ed', 'aecf76ed58.jpg'),
(14, 15, 'b3b96002', '0b746c0f04.jpg'),
(15, 15, 'b0339787', '30958bd924.jpg'),
(16, 15, 'be14c610', '34eaeb9c1e.jpg'),
(17, 15, '88689923', '3e2dc4270a.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `lastName` varchar(256) NOT NULL,
  `login` varchar(256) DEFAULT NULL,
  `mail` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mail_3` (`mail`),
  UNIQUE KEY `login` (`login`),
  KEY `mail` (`mail`),
  KEY `mail_2` (`mail`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `name`, `lastName`, `login`, `mail`, `password`) VALUES
(1, 'Yuri', 'Alexs', 'log1', 'yuri.alexs@gmail.com', '123456'),
(6, 'Bob', 'dois', 'log2', 'tres', 'quatro'),
(9, 'Teste', 'FFsf', 'log3', 'yuri.alexs2@gmail.com', '1122332'),
(10, 'fgds', 'fsdf', 'log3f', 'fdsfsdf', 'fdsff'),
(12, 'BBBBB', 'BBB', 'bbb', 'bbb@ggg.com', 'fdsfdsfsdf'),
(13, 'fds', 'Fdsf', 'dsfdsf', 'fsdff', 'fdsfdsf'),
(14, 'teste', 'teste', 'teste', 'Yuri47teste', 'teste'),
(15, 'fd', 'fd', 'yy', 'yy', 'yy'),
(16, 'yu', 'yu', 'nn', ' nn@gmail.com', 'nn');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
