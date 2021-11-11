-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 11-Nov-2021 às 13:31
-- Versão do servidor: 5.7.21
-- PHP Version: 7.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jogoperguntas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `perguntas`
--

DROP TABLE IF EXISTS `perguntas`;
CREATE TABLE IF NOT EXISTS `perguntas` (
  `idPergunta` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `texto` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `pontos` int(100) NOT NULL,
  `dificuldade` varchar(20) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`idPergunta`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `perguntas`
--

INSERT INTO `perguntas` (`idPergunta`, `texto`, `pontos`, `dificuldade`) VALUES
('5', ' zzzzz ', 1, 'facil'),
('2', ' ertghhgfhfghf ', 45345, 'difÃ­cil'),
('3', '4', 4, '4'),
('eqwe', 'perguntapergunta', 65, 'difÃ­cil'),
('342', 'rwerty', 3, 'facil');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
