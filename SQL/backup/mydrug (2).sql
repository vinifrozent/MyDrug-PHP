-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09-Nov-2017 às 22:25
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
(1, 'Cliente 1', '(12) 3088-8888', '12245000', 'Avenida Engenheiro Francisco JosÃ© Longo', '4000', 'SP', 'Jardim SÃ£o Dimas', 'SÃ£o JosÃ© dos Campos', 'cliente1', 'd5a8d8c7ab0514e2b8a2f98769281585', 'cliente@gmail.com', '2017-11-04 11:55:08', 'Cliente');

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `id_categoria` int(10) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `valor` varchar(50) NOT NULL,
  `foto_principal` varchar(255) NOT NULL,
  `quantidade` int(15) NOT NULL,
  `quantidade_minima` int(15) NOT NULL,
  `descricao` text NOT NULL,
  `data_cadastro` datetime DEFAULT NULL,
  `disponivel` enum('Sim','Nao') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(3, 'Vitor Rodrigues', '(12) 998712-5588', 'Rua indianopolis', '145', 'EugÃªnio de melo', 'SÃ£o JosÃ© dos campos', 'vitorrodrigues123@gmail.com', 'vitor', '202cb962ac59075b964b07152d234b70', '2017-08-26 11:19:15', 'Farmacia', '/img/foto02112017101112.jpg'),
(30, 'Farma Conde', '1230218668', 'Avenida Andromeda', '2051', 'Bosque dos eucaliptos', 'SÃ£o JosÃ© dos campos', 'farmaconde@gmail.com', 'farmaconde', '7fa9e2525df83263b53a986f4f5a08c1', '2017-10-30 19:39:11', 'Farmacia', '/img/foto30102017091011.png'),
(32, 'Cliente da silva', '12 3021-8346', 'Rua do Cliente', '123', 'Bairro do Cliente', 'Cidade do Cliente', 'cliente@gmail.com', 'cliente', '4983a0ab83ed86e0e7213c8783940193', '2017-11-01 20:15:30', 'Cliente', '/img/foto01112017101130.jpg'),
(33, 'Administrador', '99 9999-9999', 'Rua do Administrador', '99', 'Bairro do administrador', 'Cidade do Administrador', 'admin@admin.com', 'admin', '202cb962ac59075b964b07152d234b70', '2017-11-02 20:37:14', 'Admin', '/img/foto02112017101114.jpg');

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_categoria` (`id_categoria`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id_empresa` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `fk_id_categoria` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
