-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Jul-2022 às 18:33
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sanjafeet_bd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `banco_cliente`
--

CREATE TABLE `banco_cliente` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cpf` int(11) NOT NULL,
  `email` text NOT NULL,
  `celular` bigint(11) NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `banco_cliente`
--

INSERT INTO `banco_cliente` (`codigo`, `nome`, `cpf`, `email`, `celular`, `senha`) VALUES
(12, 'Igor Martins', 12574, 'iguinho@email.com', 888, 'c4ca4238a0b923820dcc509a6f75849b'),
(29, 'Mark', 5555, 'marl@email.com', 52525225, 'eccbc87e4b5ce2fe28308fd9f2a7baf3');

-- --------------------------------------------------------

--
-- Estrutura da tabela `gerenciador_pedidos`
--

CREATE TABLE `gerenciador_pedidos` (
  `sequencia_id` int(100) NOT NULL,
  `Nome_destinatario` text NOT NULL,
  `CEP` bigint(100) NOT NULL,
  `Endereco` varchar(100) NOT NULL,
  `Pay_Mode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `gerenciador_pedidos`
--

INSERT INTO `gerenciador_pedidos` (`sequencia_id`, `Nome_destinatario`, `CEP`, `Endereco`, `Pay_Mode`) VALUES
(4, 'Igor', 1223, 'Colegio Joseense', 'COD'),
(5, 'Felipe', 34, 'Local', 'PIX'),
(14, 'Lucas', 523, 'bob esponja', 'Boleto'),
(16, 'Rutra', 523, 'baahi', 'PIX');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos_usuarios`
--

CREATE TABLE `pedidos_usuarios` (
  `codigo_pedido` int(100) NOT NULL,
  `Nome_Produto` varchar(100) NOT NULL,
  `Preco` int(100) NOT NULL,
  `Quantidade` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pedidos_usuarios`
--

INSERT INTO `pedidos_usuarios` (`codigo_pedido`, `Nome_Produto`, `Preco`, `Quantidade`) VALUES
(2, 'Nike Lebron 10 Elite Peach Jam', 1490, 1),
(3, 'Air Jordan 11', 1400, 3),
(3, ' Jordan 12 xvll ovo ', 1200, 2),
(3, 'Nike Mag', 9900, 1),
(4, 'Air Yeezy 1 Blink', 9000, 1),
(5, ' Jordan 12 xvll ovo ', 1200, 1),
(14, 'Nike Lebron 10 Elite Peach Jam', 1490, 1),
(16, 'Jordan Nike Air 6 Electric Green', 3999, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `banco_cliente`
--
ALTER TABLE `banco_cliente`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices para tabela `gerenciador_pedidos`
--
ALTER TABLE `gerenciador_pedidos`
  ADD PRIMARY KEY (`sequencia_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `banco_cliente`
--
ALTER TABLE `banco_cliente`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de tabela `gerenciador_pedidos`
--
ALTER TABLE `gerenciador_pedidos`
  MODIFY `sequencia_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
