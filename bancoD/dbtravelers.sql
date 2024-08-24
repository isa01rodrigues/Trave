-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28/01/2024 às 23:45
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbtravelers`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblaluguel`
--

CREATE TABLE `tblaluguel` (
  `idaluguel` int(11) NOT NULL,
  `tipoAluguel` varchar(12) NOT NULL,
  `quantidadeProdAluguel` double(10,2) NOT NULL,
  `planoAluguel` varchar(12) NOT NULL,
  `perifericoAdc` double(10,2) NOT NULL,
  `precoAluguel` double(10,2) NOT NULL,
  `dataSaida` date NOT NULL,
  `dataRetorno` date NOT NULL,
  `idCliente` int(11) NOT NULL,
  `idFuncionario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tblaluguel`
--

INSERT INTO `tblaluguel` (`idaluguel`, `tipoAluguel`, `quantidadeProdAluguel`, `planoAluguel`, `perifericoAdc`, `precoAluguel`, `dataSaida`, `dataRetorno`, `idCliente`, `idFuncionario`) VALUES
(1, 'SIMPLES/PLAN', 5.00, 'VENUS', 1.00, 6.25, '2024-01-01', '2024-01-05', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblcliente`
--

CREATE TABLE `tblcliente` (
  `idCliente` int(11) NOT NULL,
  `nomeCliente` varchar(50) NOT NULL,
  `cpfCliente` varchar(11) NOT NULL,
  `cnpjCliente` varchar(14) NOT NULL,
  `emailCliente` varchar(100) NOT NULL,
  `telefoneCliente` varchar(14) NOT NULL,
  `pessoaFisica` varchar(5) NOT NULL,
  `pessoaJuridc` varchar(5) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tblcliente`
--

INSERT INTO `tblcliente` (`idCliente`, `nomeCliente`, `cpfCliente`, `cnpjCliente`, `emailCliente`, `telefoneCliente`, `pessoaFisica`, `pessoaJuridc`, `status`) VALUES
(1, 'LUA E MAR COSMETICOS', '000', '12345678912345', 'luaemar@email.com', '(11)956473265', 'NÃO', 'SIM', 'ATIVO');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblconfiguracaoproduto`
--

CREATE TABLE `tblconfiguracaoproduto` (
  `idConfiguracaoProduto` int(11) NOT NULL,
  `nomeConfiProduto` varchar(25) NOT NULL,
  `configPlacaMae` varchar(30) NOT NULL,
  `configPlacaVideo` varchar(30) NOT NULL,
  `configSSD` varchar(20) NOT NULL,
  `configRam` varchar(10) NOT NULL,
  `configRefrigeramento` varchar(20) NOT NULL,
  `configFonte` varchar(20) NOT NULL,
  `configMarcaCpu` varchar(20) NOT NULL,
  `statusConfig` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tblconfiguracaoproduto`
--

INSERT INTO `tblconfiguracaoproduto` (`idConfiguracaoProduto`, `nomeConfiProduto`, `configPlacaMae`, `configPlacaVideo`, `configSSD`, `configRam`, `configRefrigeramento`, `configFonte`, `configMarcaCpu`, `statusConfig`) VALUES
(1, 'CPU VENUS', '1234PL', '10024PV', '200GB', '16RAM', 'ICER GREE', 'PADRÃO', 'VMC', 'ATIVO');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblfuncionario`
--

CREATE TABLE `tblfuncionario` (
  `idFuncionario` int(11) NOT NULL,
  `nomeFuncionario` varchar(40) DEFAULT NULL,
  `cpfFuncionario` varchar(11) NOT NULL,
  `emailFuncionario` varchar(100) NOT NULL,
  `telefoneFuncionario` varchar(14) NOT NULL,
  `dataNascFuncionario` date NOT NULL,
  `funcaoFuncionario` varchar(20) NOT NULL,
  `acessoFuncionario` varchar(10) NOT NULL,
  `dataAdminFuncionario` date NOT NULL,
  `statusFuncionario` varchar(10) DEFAULT NULL,
  `senhaFuncionario` double DEFAULT NULL,
  `fotoFuncionario` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tblfuncionario`
--

INSERT INTO `tblfuncionario` (`idFuncionario`, `nomeFuncionario`, `cpfFuncionario`, `emailFuncionario`, `telefoneFuncionario`, `dataNascFuncionario`, `funcaoFuncionario`, `acessoFuncionario`, `dataAdminFuncionario`, `statusFuncionario`, `senhaFuncionario`, `fotoFuncionario`) VALUES
(1, 'MARIA SILVA', '46582246310', 'mariasilva@email.com', '(11)976243158', '1999-02-01', 'ATENDENTE', 'MEDIO', '2023-01-01', 'ATIVO', 123456, 'funcionario/maria.png'),
(2, '\".$this-> nomeFundionario.\"', '\".$this-> c', '\".$this-> emailFuncionario.\"', '\".$this-> tele', '0000-00-00', '\".$this-> funcaoFunc', '\".$this-> ', '0000-00-00', '\".$this-> ', 0, '\".$this-> fotoFuncionario.\"'),
(3, '\".$this-> nomeFuncionario.\"', '\".$this-> c', '\".$this-> emailFuncionario.\"', '\".$this-> tele', '0000-00-00', '\".$this-> funcaoFunc', '\".$this-> ', '0000-00-00', '\".$this-> ', 0, '\".$this-> fotoFuncionario.\"'),
(4, 'luiza', '12345678912', 'luizasouza@email.com', '(11)985213475', '1999-01-01', 'Gerente', 'ADMIN', '2022-02-02', 'ATIVO', 251234, 'funcionario/luiza.png'),
(5, '', '32165498732', 'mariooliveira@email.com', '(11)932165497', '1998-02-02', 'Dev Front-end', 'SIMPLES', '2022-02-02', 'ATIVO', 25, 'funcionario/mario.png'),
(6, '', '12345698732', 'luizaluz@email.com', '(11)921436541', '1997-05-03', 'Dev Back-end', 'MEDIO', '2023-02-01', 'ATIVO', 11, 'funcionario/luiza.png');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblproduto`
--

CREATE TABLE `tblproduto` (
  `idProduto` int(11) NOT NULL,
  `nomeProduto` varchar(20) NOT NULL,
  `marcaProduto` varchar(20) NOT NULL,
  `geracaoProduto` varchar(20) NOT NULL,
  `statusPeriferico` varchar(10) NOT NULL,
  `idConfiguracaoProduto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tblproduto`
--

INSERT INTO `tblproduto` (`idProduto`, `nomeProduto`, `marcaProduto`, `geracaoProduto`, `statusPeriferico`, `idConfiguracaoProduto`) VALUES
(1, 'PLANO VENUS', 'DELL', '10', 'ATIVO', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tblaluguel`
--
ALTER TABLE `tblaluguel`
  ADD PRIMARY KEY (`idaluguel`),
  ADD KEY `idCliente` (`idCliente`),
  ADD KEY `idFuncionario` (`idFuncionario`);

--
-- Índices de tabela `tblcliente`
--
ALTER TABLE `tblcliente`
  ADD PRIMARY KEY (`idCliente`);

--
-- Índices de tabela `tblconfiguracaoproduto`
--
ALTER TABLE `tblconfiguracaoproduto`
  ADD PRIMARY KEY (`idConfiguracaoProduto`);

--
-- Índices de tabela `tblfuncionario`
--
ALTER TABLE `tblfuncionario`
  ADD PRIMARY KEY (`idFuncionario`);

--
-- Índices de tabela `tblproduto`
--
ALTER TABLE `tblproduto`
  ADD PRIMARY KEY (`idProduto`),
  ADD KEY `idConfiguracaoProduto` (`idConfiguracaoProduto`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tblaluguel`
--
ALTER TABLE `tblaluguel`
  MODIFY `idaluguel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tblcliente`
--
ALTER TABLE `tblcliente`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tblconfiguracaoproduto`
--
ALTER TABLE `tblconfiguracaoproduto`
  MODIFY `idConfiguracaoProduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tblfuncionario`
--
ALTER TABLE `tblfuncionario`
  MODIFY `idFuncionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tblproduto`
--
ALTER TABLE `tblproduto`
  MODIFY `idProduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `tblaluguel`
--
ALTER TABLE `tblaluguel`
  ADD CONSTRAINT `tblaluguel_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `tblcliente` (`idCliente`),
  ADD CONSTRAINT `tblaluguel_ibfk_2` FOREIGN KEY (`idFuncionario`) REFERENCES `tblfuncionario` (`idFuncionario`);

--
-- Restrições para tabelas `tblproduto`
--
ALTER TABLE `tblproduto`
  ADD CONSTRAINT `tblproduto_ibfk_1` FOREIGN KEY (`idConfiguracaoProduto`) REFERENCES `tblconfiguracaoproduto` (`idConfiguracaoProduto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
