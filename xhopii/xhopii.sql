-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Jun-2023 às 20:40
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `xhopii`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `codCliente` int(11) NOT NULL,
  `cpf` int(11) DEFAULT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `sobrenome` varchar(100) DEFAULT NULL,
  `dataNascimento` date DEFAULT NULL,
  `telefone` int(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`codCliente`, `cpf`, `nome`, `sobrenome`, `dataNascimento`, `telefone`, `email`, `senha`) VALUES
(1, 123123, 'Gabriel', 'teste', '2020-02-20', 256, 'gabriel', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `raFuncionario` int(11) NOT NULL,
  `cpf` int(11) DEFAULT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `sobrenome` varchar(100) DEFAULT NULL,
  `dataNascimento` date DEFAULT NULL,
  `telefone` int(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `salario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`raFuncionario`, `cpf`, `nome`, `sobrenome`, `dataNascimento`, `telefone`, `email`, `salario`) VALUES
(5, 157, 'joao', 'tombao', '1515-02-20', 2147483647, 'efdwefe2', 2147483647);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `codProduto` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `fabricante` varchar(100) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `valor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`codProduto`, `nome`, `fabricante`, `descricao`, `valor`) VALUES
(1, 'jarro', 'tio do jarro', 'um jarro', 10);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`codCliente`);

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`raFuncionario`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`codProduto`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `codCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `raFuncionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `codProduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
