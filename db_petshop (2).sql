-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Jun-2023 às 16:20
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_petshop`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cpf` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `func` varchar(255) NOT NULL,
  `dinheiro` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `usuario`, `senha`, `nome`, `cpf`, `email`, `telefone`, `func`, `dinheiro`) VALUES
(4, 'alana', '123', 'alana 3', '213 21312312', 'alison@gmail.com', '123213123', 'cliente', 399825),
(5, 'caio', '123', 'caio', '231243245234', '@email.com', '4325345634', 'adiministrador', 39975),
(6, 'pedro', '123', 'pedro', '21321321', 'alana@gmail.com', '123213123', 'secretaria', 4000),
(8, '', '', 'petshop', '', '', '', '', 400),
(9, '', '', 'joas', '', 'ae', '', 'cliente', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pet`
--

CREATE TABLE `pet` (
  `id` int(11) NOT NULL,
  `raca` varchar(255) NOT NULL,
  `tamanho` varchar(255) NOT NULL,
  `dono` varchar(255) NOT NULL,
  `peso` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `pet`
--

INSERT INTO `pet` (`id`, `raca`, `tamanho`, `dono`, `peso`) VALUES
(1, 'golden', '150', 'caio', 0),
(2, 'golden', '150', 'alana 3', 0),
(3, 'pinsher', '40', 'alana 3', 50),
(4, 'pit bull', '100', 'alana 3', 30);

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico`
--

CREATE TABLE `servico` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `descrição` varchar(255) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `valor` float NOT NULL,
  `desconto` double NOT NULL,
  `para` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `servico`
--

INSERT INTO `servico` (`id`, `nome`, `descrição`, `tipo`, `valor`, `desconto`, `para`) VALUES
(1, 'banho', 'banho leve e bom', 'limpeza', 50, 0.5, 'golden'),
(2, 'tosa', 'tasagem braba', 'estilo', 20, 0, 'pit bull'),
(3, 'banho rapido', '', 'limpeza', 50, 0.5, 'pinsher'),
(4, 'banho demorado', '', 'limpeza', 50, 0.5, 'golden'),
(5, 'banho com perfume', '', 'limpeza', 50, 0.5, 'golden');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pet`
--
ALTER TABLE `pet`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `servico`
--
ALTER TABLE `servico`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `pet`
--
ALTER TABLE `pet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `servico`
--
ALTER TABLE `servico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
