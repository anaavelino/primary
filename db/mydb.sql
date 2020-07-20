-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 16-Jul-2020 às 23:48
-- Versão do servidor: 8.0.18
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `mydb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

DROP TABLE IF EXISTS `cadastro`;
CREATE TABLE IF NOT EXISTS `cadastro` (
  `idCliente` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(200) NOT NULL,
  `Endereco` varchar(200) NOT NULL,
  `email` varchar(150) NOT NULL,
  `Telefone` varchar(50) NOT NULL,
  `Senha` varchar(8) NOT NULL,
  PRIMARY KEY (`idCliente`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`idCliente`, `Nome`, `Endereco`, `email`, `Telefone`, `Senha`) VALUES
(20, 'Ana', 'Rua', 'ana@gmail.com', '85 987564565', '12345678'),
(21, 'Emanuel', 'rua 82', 'emanuel@outlook.com', '85 87945624', '78945632'),
(22, 'Joana', 'Rua 54', 'Joana@gmail.com', '85 89647889', '69385274'),
(31, 'Antonina', 'Rua 87', 'anto@gmail.com', '85 96325878', '25878965'),
(32, 'julia', 'Rua 99', 'ju@gmail.com', '85 98632547', '36974125'),
(52, 'Luisa', 'Rua 56', 'luisa@gmail.com', '85 45632847', '36541298'),
(51, '', '', '', '', ''),
(50, '', '', '', '', ''),
(49, '', '', '', '', ''),
(38, 'Lucas', 'Rua 909', 'lucas@gmail.com', '85 98745632', '74125896'),
(39, 'Maria', 'Rua 157', 'M@gmail.com', '85 69632587', '98765432'),
(48, 'Jorge', 'Rua 789', 'jorge@gmail.com', '85 69632448', '98745632'),
(45, 'David', 'Rua 156', 'David@gmail.com', '85 63987451', '25896314'),
(47, 'Jorge', 'Rua 789', 'jorge@gmail.com', '85 69632448', '98745632'),
(53, 'Luisa', 'Rua 56', 'luisa@gmail.com', '85 45632847', '36541298');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
