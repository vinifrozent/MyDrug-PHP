-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22-Nov-2017 às 00:29
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydrug`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_pendente`
--

CREATE TABLE `cadastro_pendente` (
  `id_empresa` int(11) NOT NULL,
  `nome_empresa` varchar(100) NOT NULL,
  `telefone_empresa` varchar(21) NOT NULL,
  `cep` varchar(30) NOT NULL,
  `num` varchar(30) NOT NULL,
  `uf` varchar(5) NOT NULL,
  `bairro` varchar(160) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `rua` varchar(100) NOT NULL,
  `nome_responsavel` varchar(100) NOT NULL,
  `email_responsavel` varchar(100) NOT NULL,
  `telefone_responsavel` varchar(30) NOT NULL,
  `nivel` enum('Farmacia','HomeCare') DEFAULT NULL,
  `login` varchar(32) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `data_cadastro` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nome_categoria` varchar(50) NOT NULL,
  `data_cadastro` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nome_categoria`, `data_cadastro`) VALUES
(1, 'Beleza', '2017-11-09 19:35:34'),
(2, 'Boa Forma', '2017-11-09 19:36:00'),
(3, 'Homem', '2017-11-09 19:36:12'),
(4, 'Mulher', '2017-11-09 19:36:25'),
(5, 'Melhor Idade', '2017-11-09 19:36:39'),
(6, 'Geral', '2017-11-09 19:36:46'),
(7, 'Outro', '2017-11-09 19:36:57');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `telefone` varchar(30) NOT NULL,
  `cep` varchar(30) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `num` varchar(50) NOT NULL,
  `uf` varchar(3) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `login` varchar(30) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `email` varchar(100) NOT NULL,
  `data_cadastro` datetime DEFAULT NULL,
  `nivel` enum('Cliente','Outro') NOT NULL DEFAULT 'Cliente'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nome`, `telefone`, `cep`, `endereco`, `num`, `uf`, `bairro`, `cidade`, `login`, `senha`, `email`, `data_cadastro`, `nivel`) VALUES
(1, 'Paulo Henrique', '(12) 99719-9047', '12233680', 'Rua Jales', '47', 'SP', 'Bosque dos Eucaliptos', 'SÃ£o JosÃ© dos Campos', 'paulo', 'dd41cb18c930753cbecf993f828603dc', 'ph.peugout406@gmail.com', '2017-11-14 10:16:52', 'Cliente');

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE `empresa` (
  `id_empresa` int(11) NOT NULL,
  `nome_empresa` varchar(100) NOT NULL,
  `telefone_empresa` varchar(21) NOT NULL,
  `cep` varchar(30) NOT NULL,
  `num` varchar(30) NOT NULL,
  `uf` varchar(5) NOT NULL,
  `bairro` varchar(160) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `rua` varchar(100) NOT NULL,
  `nome_responsavel` varchar(100) NOT NULL,
  `email_responsavel` varchar(100) NOT NULL,
  `telefone_responsavel` varchar(30) NOT NULL,
  `nivel` enum('Farmacia','HomeCare') DEFAULT NULL,
  `login` varchar(32) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `data_cadastro` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`id_empresa`, `nome_empresa`, `telefone_empresa`, `cep`, `num`, `uf`, `bairro`, `cidade`, `rua`, `nome_responsavel`, `email_responsavel`, `telefone_responsavel`, `nivel`, `login`, `senha`, `data_cadastro`) VALUES
(1, 'Farma Conde', '12 3021-8856', '12233-002', '4000', 'SP', 'Bosque dos Eucaliptos', 'SÃ£o JosÃ© dos Campos', 'Avenida Cidade Jardim', 'FÃ¡bio freitas', 'fabio.freitas@gmail.com', '12 3021-8646', 'Farmacia', 'fabio', '6ff5613f2b767d6f4c02f4b0ae17e727', '2017-11-10 16:56:29'),
(2, 'FarmÃ¡cia1', '12 9999-9999', '12233-690', '87', 'SP', 'Bosque dos Eucaliptos', 'SÃ£o JosÃ© dos Campos', 'Rua Manoel Fiel Filho', 'Nome do responsÃ¡vel', 'email@responsave.com', '12 1111-1111', 'Farmacia', 'login', 'fe42e08d42d6a4659d87930edf416264', '2017-11-10 17:25:58'),
(3, 'Farmacia 2 ', '12 9977-8754', '12247-340', '121', 'SP', 'Jardim ItapoÃ£', 'SÃ£o JosÃ© dos Campos', 'Rua JosÃ© de Paula da Silva', 'N responsavel', 'e@responsavel.com', '12 1111-1115', 'Farmacia', 'senha', 'f67e209e9b8164dcb6812b9ac4357ed1', '2017-11-10 17:27:10'),
(4, 'Home Care', '12 3934-9742', '12245-450', '175', 'SP', 'Jardim SÃ£o Dimas', 'SÃ£o JosÃ© dos Campos', 'Rua JosÃ© Mattar', 'Talhes Lucas', 'talheslucas@hotmail.com', '12 3874-1258', 'HomeCare', 'talhes', '178cb9ee4bc88ab02f58d38d61f429cc', '2017-11-14 10:23:10'),
(5, 'Home care', '12 5554-4444', '12233-002', '1000', 'SP', 'Bosque dos Eucaliptos', 'SÃ£o JosÃ© dos Campos', 'Avenida Cidade Jardim', 'Bruno', 'bruno@gmail.com', '12 3333-3555', 'HomeCare', 'bruno', '1e0de1db409cb1a9c5a7b743af28f300', '2017-11-14 10:32:15'),
(6, 'aaaa', '12 3025-8478', '12213-810', '660', 'SP', 'Buquirinha', 'SÃ£o JosÃ© dos Campos', 'Rua Ana AngÃ©lica de Oliveira', 'Perilo', 'perilo@hotmail.c', '65 4165', 'Farmacia', 'perilo', 'd9b1d7db4cd6e70935368a1efb10e377', '2017-11-18 14:14:11');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id_produto` int(11) NOT NULL,
  `id_categoria` int(10) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `valor` varchar(50) NOT NULL,
  `foto_principal` varchar(255) NOT NULL,
  `quantidade` int(15) NOT NULL,
  `quantidade_minima` int(15) NOT NULL,
  `descricao` text NOT NULL,
  `data_cadastro` datetime DEFAULT NULL,
  `disponivel` enum('S','N') DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id_produto`, `id_categoria`, `id_empresa`, `nome`, `valor`, `foto_principal`, `quantidade`, `quantidade_minima`, `descricao`, `data_cadastro`, `disponivel`) VALUES
(1, 6, 2, 'Descongex', '12,65', './fotosCadastradas/foto13112017101148.jpg', 10, 1, '<p>Descongest&atilde;o nasal</p>\r\n', '2017-11-13 20:28:48', 'S'),
(4, 6, 5, 'Luva de Latex', '45,62', './fotosCadastradas/foto14112017121142.jpg', 9990, 1, '<p>Luva para atendimento</p>\r\n', '2017-11-14 10:42:42', 'S'),
(5, 6, 5, 'Luva de Latex', '45,62', './fotosCadastradas/foto14112017121154.jpg', 10000, 1, '<p>Luva para atendimento</p>\r\n', '2017-11-14 10:42:54', 'S'),
(6, 6, 5, 'Animal', '1,00', './fotosCadastradas/foto18112017041113.jpg', 91, 1, '<p>Sei la</p>\r\n', '2017-11-18 14:10:13', 'S'),
(7, 6, 5, 'Colete para Escoliose', '150,00', './fotosCadastradas/foto21112017111109.jpg', -8, 1, '<p>Para que &eacute; igual a sadia, tortinho</p>\r\n', '2017-11-21 21:00:09', 'S');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `telefone` varchar(30) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `num` varchar(50) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `login` varchar(30) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `data_cadastro` datetime DEFAULT NULL,
  `nivel` enum('Cliente','Farmacia','HomeCare','Admin') NOT NULL DEFAULT 'Cliente',
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `telefone`, `endereco`, `num`, `bairro`, `cidade`, `email`, `login`, `senha`, `data_cadastro`, `nivel`, `foto`) VALUES
(1, 'Administrador', '12 9999-9999', 'Endereço do Admin', '123', 'Bairro do Admin', 'Cidade do admin', 'admin@admin.com', 'admin', '202cb962ac59075b964b07152d234b70', '2017-11-13 20:13:00', 'Admin', '/img/foto02112017101114.jpg'),
(2, 'Cliente', '12 3025-8778', 'Rua do Cliente', '123', 'bairro do Cliente', 'Cidade do Cliente', 'cliente@gmail.com', 'cliente', '4983a0ab83ed86e0e7213c8783940193', '2017-11-13 20:32:30', 'Cliente', '/img/foto13112017101130.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda`
--

CREATE TABLE `venda` (
  `id_venda` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `id_cliente` int(11) DEFAULT '0',
  `data_venda` datetime DEFAULT NULL,
  `finalizado` enum('S','N') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `venda`
--

INSERT INTO `venda` (`id_venda`, `id_produto`, `id_cliente`, `data_venda`, `finalizado`) VALUES
(1, 7, 1, '2017-11-21 21:17:48', 'N'),
(2, 4, 1, '2017-11-21 21:17:48', 'N'),
(3, 6, 1, '2017-11-21 21:57:43', 'N'),
(4, 4, 1, '2017-11-21 21:57:43', 'N'),
(5, 7, 1, '2017-11-21 21:57:43', 'N'),
(6, 6, 1, '2017-11-21 21:58:10', 'N'),
(7, 4, 1, '2017-11-21 21:58:10', 'N'),
(8, 7, 1, '2017-11-21 21:58:11', 'N'),
(9, 6, 1, '2017-11-21 21:59:00', 'N'),
(10, 4, 1, '2017-11-21 21:59:00', 'N'),
(11, 7, 1, '2017-11-21 21:59:00', 'N'),
(12, 6, 1, '2017-11-21 21:59:05', 'N'),
(13, 4, 1, '2017-11-21 21:59:05', 'N'),
(14, 7, 1, '2017-11-21 21:59:05', 'N'),
(15, 6, 1, '2017-11-21 22:00:05', 'N'),
(16, 4, 1, '2017-11-21 22:00:05', 'N'),
(17, 7, 1, '2017-11-21 22:00:05', 'N'),
(18, 6, 1, '2017-11-21 22:00:17', 'N'),
(19, 4, 1, '2017-11-21 22:00:18', 'N'),
(20, 7, 1, '2017-11-21 22:00:18', 'N'),
(21, 6, 1, '2017-11-21 22:01:24', 'N'),
(22, 4, 1, '2017-11-21 22:01:24', 'N'),
(23, 7, 1, '2017-11-21 22:01:24', 'N'),
(24, 6, 1, '2017-11-21 22:02:09', 'N'),
(25, 4, 1, '2017-11-21 22:02:09', 'N'),
(26, 7, 1, '2017-11-21 22:02:09', 'N'),
(27, 6, 1, '2017-11-21 22:02:09', 'N'),
(28, 4, 1, '2017-11-21 22:02:09', 'N'),
(29, 7, 1, '2017-11-21 22:02:09', 'N'),
(30, 7, 1, '2017-11-21 22:03:10', 'N'),
(31, 7, 1, '2017-11-21 22:04:21', 'N'),
(32, 7, 1, '2017-11-21 22:05:13', 'N'),
(33, 1, 1, '2017-11-21 22:06:32', 'N');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadastro_pendente`
--
ALTER TABLE `cadastro_pendente`
  ADD PRIMARY KEY (`id_empresa`);

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indexes for table `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id_empresa`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id_produto`),
  ADD KEY `fk_id_categoria` (`id_categoria`),
  ADD KEY `fk_empresa` (`id_empresa`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `venda`
--
ALTER TABLE `venda`
  ADD PRIMARY KEY (`id_venda`),
  ADD KEY `fk_venda_idproduto` (`id_produto`),
  ADD KEY `fk_venda_idcliente` (`id_cliente`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadastro_pendente`
--
ALTER TABLE `cadastro_pendente`
  MODIFY `id_empresa` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id_empresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `venda`
--
ALTER TABLE `venda`
  MODIFY `id_venda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `fk_empresa` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id_empresa`),
  ADD CONSTRAINT `fk_id_categoria` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`);

--
-- Limitadores para a tabela `venda`
--
ALTER TABLE `venda`
  ADD CONSTRAINT `fk_venda_idcliente` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`),
  ADD CONSTRAINT `fk_venda_idproduto` FOREIGN KEY (`id_produto`) REFERENCES `produtos` (`id_produto`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
