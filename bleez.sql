-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Jun-2020 às 21:00
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bleez`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `crud`
--

CREATE TABLE `crud` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `preco` float NOT NULL,
  `descricao` text NOT NULL,
  `imagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `crud`
--

INSERT INTO `crud` (`id`, `nome`, `preco`, `descricao`, `imagem`) VALUES
(10, 'caneta esferográfica', 2, 'caneta esferográfica marca genérica', 'caneta esferográfica.jpg'),
(11, 'corretivo bic', 2.5, 'corretivo escolar da marca bic', 'corretivo.jpg'),
(12, 'lapis', 1, 'lápis comum de marca genérica', 'lapis.jpg'),
(13, 'resma a4', 5, 'resma de folha a4 de 500 folhas', 'resma a4.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `crud`
--
ALTER TABLE `crud`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `crud`
--
ALTER TABLE `crud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
