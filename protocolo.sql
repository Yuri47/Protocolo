-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05-Maio-2017 às 20:15
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
CREATE DATABASE IF NOT EXISTS `protocolo` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `protocolo`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

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
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `name`, `lastName`, `login`, `mail`, `password`) VALUES
(1, 'Yuri', 'Alexs', 'log1', 'yuri.alexs@gmail.com', '123456'),
(6, 'Bob', 'dois', 'log2', 'tres', 'quatro'),
(9, 'Teste', 'FFsf', 'log3', 'yuri.alexs2@gmail.com', '1122332'),
(10, 'fgds', 'fsdf', 'log3f', 'fdsfsdf', 'fdsff'),
(12, 'BBBBB', 'BBB', 'bbb', 'bbb@ggg.com', 'fdsfdsfsdf'),
(13, 'fds', 'Fdsf', 'dsfdsf', 'fsdff', 'fdsfdsf');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
