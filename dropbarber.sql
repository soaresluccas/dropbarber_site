-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29/01/2024 às 14:10
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dropbarber`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `adm`
--

CREATE TABLE `adm` (
  `idAdm` int(11) NOT NULL,
  `adm` varchar(80) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `adm`
--

INSERT INTO `adm` (`idAdm`, `adm`, `senha`) VALUES
(1, 'Lucas', '123456');

-- --------------------------------------------------------

--
-- Estrutura para tabela `horarios`
--

CREATE TABLE `horarios` (
  `idHora` int(11) NOT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `data` date NOT NULL,
  `horarioBarbeiro` time NOT NULL,
  `servico` varchar(100) NOT NULL,
  `mensagem` text DEFAULT NULL,
  `codigo` int(11) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `horarios`
--

INSERT INTO `horarios` (`idHora`, `telefone`, `data`, `horarioBarbeiro`, `servico`, `mensagem`, `codigo`, `nome`, `email`) VALUES
(2, '53991189117', '2024-01-16', '13:00:00', 'corte', '', 2, 'Matheus Gonçalves', 'matheusgolçalves2@gmail.com'),
(4, '53991013325', '2024-01-17', '18:20:00', 'corte', 'bbbb', 3, 'Lucas Robert', 'lucasrobert@gmail.com'),
(6, '53991239225', '2024-01-26', '15:00:00', 'corte-barba', 'dalhe', 14, 'bah', 'bah@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`codigo`, `nome`, `email`, `senha`) VALUES
(2, 'Matheus Gonçalves', 'matheusgolçalves2@gmail.com', 'e9b26036c776f1d86b1050e71fe803fa'),
(3, 'Lucas Robert', 'lucasrobert@gmail.com', '202cb962ac59075b964b07152d234b70'),
(5, 'Fabiane de Souza', 'fabiane@gmail.com', '01cfcd4f6b8770febfb40cb906715822'),
(9, 'souza', 'souza@gmail.com', 'ae2fb229c7a0f13c0b8f455c08f11e1d'),
(10, 'alana', 'alana@gmail.com', '1f5effac11b9c902a7dd7518eb708806'),
(11, 'ricardo', 'ricardomedeiros@gmail.com', '75c79ed68d5fb3a0bd4eee2833cd492f'),
(12, 'larri', 'larri@gmail.com', '4cf87afb7115e24d21923be1150b4dbe'),
(13, 'omaga', 'omaga@gmail.com', '7944acb8497280d490d6bec5b69239ec'),
(14, 'bah', 'bah@gmail.com', '08a3dfb33198b027fc58dbc6d4ef595f');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`idAdm`);

--
-- Índices de tabela `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`idHora`),
  ADD KEY `fk_horarios_usuarios` (`codigo`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`codigo`),
  ADD UNIQUE KEY `uk_usuarios_nome` (`nome`),
  ADD UNIQUE KEY `uk_usuarios_email` (`email`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `adm`
--
ALTER TABLE `adm`
  MODIFY `idAdm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `horarios`
--
ALTER TABLE `horarios`
  MODIFY `idHora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `horarios`
--
ALTER TABLE `horarios`
  ADD CONSTRAINT `fk_horarios_usuarios` FOREIGN KEY (`codigo`) REFERENCES `usuarios` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
