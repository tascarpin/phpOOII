-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 30-Ago-2019 às 00:57
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projeto_ooii`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `idpedido` int(11) NOT NULL,
  `codigo` varchar(10) NOT NULL,
  `idoperadorCaixa` int(11) NOT NULL,
  `desconto` float DEFAULT NULL,
  `total` float NOT NULL,
  `idpagamento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `idproduto` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `descricao` varchar(150) DEFAULT NULL,
  `precoCusto` float NOT NULL,
  `precoVenda` float NOT NULL,
  `fornecedor` varchar(50) DEFAULT NULL,
  `tipo` varchar(15) DEFAULT NULL,
  `status` enum('ATIVO','INATIVO') NOT NULL DEFAULT 'ATIVO'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`idproduto`, `nome`, `descricao`, `precoCusto`, `precoVenda`, `fornecedor`, `tipo`, `status`) VALUES
(1, 'coca', 'mata verme', 1.8, 3.5, '', 'Refrigerante', 'ATIVO'),
(2, 'coca', 'mata verme', 1.8, 3.5, '', 'Refrigerante', 'ATIVO'),
(3, 'coca', 'mata verme', 1.8, 3.5, '', 'Refrigerante', 'ATIVO'),
(4, 'coca', 'mata verme', 1.8, 3.5, '', 'Refrigerante', 'ATIVO'),
(5, 'coca', 'mata verme', 1.8, 3.5, '', 'Refrigerante', 'ATIVO'),
(6, 'coca', 'mata verme', 1.8, 3.5, '', 'Refrigerante', 'ATIVO'),
(7, 'coca', 'mata verme', 1.8, 3.5, '', 'Refrigerante', 'ATIVO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`idpedido`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`idproduto`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pedido`
--
ALTER TABLE `pedido`
  MODIFY `idpedido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `idproduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
