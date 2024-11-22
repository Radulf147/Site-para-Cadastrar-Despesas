-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Nov-2022 às 19:10
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `banco_site`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `despesa`
--

CREATE TABLE `despesa` (
  `codigo` int(11) NOT NULL,
  `codigoTipoDespesa` int(11) NOT NULL,
  `dataPagamento` date NOT NULL,
  `valor` int(11) NOT NULL,
  `CPF` varchar(11) NOT NULL,
  `descricao` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `despesa`
--

INSERT INTO `despesa` (`codigo`, `codigoTipoDespesa`, `dataPagamento`, `valor`, `CPF`, `descricao`) VALUES
(1, 3, '2022-11-01', 400, '2147483647', 'Mercado'),
(2, 4, '2022-11-01', 3000, '2147483647', 'tecnico'),
(3, 1, '2022-11-01', 123, '17795703762', 'gustavo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_de_despesa`
--

CREATE TABLE `tipo_de_despesa` (
  `codigo` int(20) NOT NULL,
  `Nome_Da_Despesa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tipo_de_despesa`
--

INSERT INTO `tipo_de_despesa` (`codigo`, `Nome_Da_Despesa`) VALUES
(1, 'Conta de Agua'),
(2, 'Conta de Luz'),
(3, 'Mercado/Compra do Mes'),
(4, 'Cartao de Credito');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `Nome` varchar(11) NOT NULL,
  `CPF` varchar(11) NOT NULL,
  `Senha` varchar(11) NOT NULL,
  `Administrador` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`Nome`, `CPF`, `Senha`, `Administrador`) VALUES
('111111111', '11111111', '11111111', 0),
('11111111111', '11111111111', '11111111111', 0),
('2121212', '122121212', '1212121', 0),
('joao', '1231231e22', '123456', 0),
('Claudio', '12345678912', '1234', 0),
('5151512515', '13212123214', '251521521', 0),
('321123132', '132123', '321123132', 0),
('Raul', '17795703762', '987638009a', 1),
('2121212121\'', '21121212121', '21212121212', 0),
('32123132131', '2w231312321', '23132123123', 0),
('32112321321', '32112321332', '21332132113', 0),
('3213213', '321313123', '1323213', 0),
('3123213', '32132131', '312312312', 0),
('22222', 'ewqqwe22', '2222', 0),
('raulzin', 'raulzin', 'raulzin', 0),
('rwqqrwwrqwq', 'rreqrwqrwq', 'rrqwrqwrwq', 0),
('rwqrwqr', 'rwqrwqr', 'rwqrwqr', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `despesa`
--
ALTER TABLE `despesa`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices para tabela `tipo_de_despesa`
--
ALTER TABLE `tipo_de_despesa`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`CPF`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `despesa`
--
ALTER TABLE `despesa`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tipo_de_despesa`
--
ALTER TABLE `tipo_de_despesa`
  MODIFY `codigo` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `despesa`
--
ALTER TABLE `despesa`
  ADD CONSTRAINT `codigoTipoDespesa` FOREIGN KEY (`codigo`) REFERENCES `tipo_de_despesa` (`codigo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
