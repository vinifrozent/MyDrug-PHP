-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23-Nov-2017 às 11:12
-- Versão do servidor: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mydrug`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_pendente`
--

CREATE TABLE IF NOT EXISTS `cadastro_pendente` (
  `id_empresa` int(11) NOT NULL AUTO_INCREMENT,
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
  `data_cadastro` datetime DEFAULT NULL,
  PRIMARY KEY (`id_empresa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `id_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `nome_categoria` varchar(50) NOT NULL,
  `data_cadastro` datetime DEFAULT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

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

CREATE TABLE IF NOT EXISTS `clientes` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
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
  `nivel` enum('Cliente','Outro') NOT NULL DEFAULT 'Cliente',
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nome`, `telefone`, `cep`, `endereco`, `num`, `uf`, `bairro`, `cidade`, `login`, `senha`, `email`, `data_cadastro`, `nivel`) VALUES
(1, 'Paulo Henrique', '(12) 99719-9047', '12233680', 'Rua Jales', '47', 'SP', 'Bosque dos Eucaliptos', 'SÃ£o JosÃ© dos Campos', 'paulo', 'dd41cb18c930753cbecf993f828603dc', 'ph.peugout406@gmail.com', '2017-11-14 10:16:52', 'Cliente'),
(2, 'Glaucio Lucena', '(12) 8787-4455', '12233001', 'Avenida AndrÃ´meda', '8000', 'SP', 'Bosque dos Eucaliptos', 'SÃ£o JosÃ© dos Campos', 'glaucio', '82379430f758dc4cda7601904b918c8e', 'glaucio@glaucio', '2017-11-22 21:31:47', 'Cliente');

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE IF NOT EXISTS `empresa` (
  `id_empresa` int(11) NOT NULL AUTO_INCREMENT,
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
  `data_cadastro` datetime DEFAULT NULL,
  PRIMARY KEY (`id_empresa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`id_empresa`, `nome_empresa`, `telefone_empresa`, `cep`, `num`, `uf`, `bairro`, `cidade`, `rua`, `nome_responsavel`, `email_responsavel`, `telefone_responsavel`, `nivel`, `login`, `senha`, `data_cadastro`) VALUES
(1, 'Farma Conde', '12 3021-8856', '12233-002', '4000', 'SP', 'Bosque dos Eucaliptos', 'SÃ£o JosÃ© dos Campos', 'Avenida Cidade Jardim', 'FÃ¡bio freitas', 'fabio.freitas@gmail.com', '12 3021-8646', 'Farmacia', 'fabio', '6ff5613f2b767d6f4c02f4b0ae17e727', '2017-11-10 16:56:29'),
(2, 'FarmÃ¡cia1', '12 9999-9999', '12233-690', '87', 'SP', 'Bosque dos Eucaliptos', 'SÃ£o JosÃ© dos Campos', 'Rua Manoel Fiel Filho', 'Nome do responsÃ¡vel', 'email@responsave.com', '12 1111-1111', 'Farmacia', 'login', 'fe42e08d42d6a4659d87930edf416264', '2017-11-10 17:25:58'),
(3, 'Farmacia 2 ', '12 9977-8754', '12247-340', '121', 'SP', 'Jardim ItapoÃ£', 'SÃ£o JosÃ© dos Campos', 'Rua JosÃ© de Paula da Silva', 'N responsavel', 'e@responsavel.com', '12 1111-1115', 'Farmacia', 'senha', 'f67e209e9b8164dcb6812b9ac4357ed1', '2017-11-10 17:27:10'),
(4, 'Home Care', '12 3934-9742', '12245-450', '175', 'SP', 'Jardim SÃ£o Dimas', 'SÃ£o JosÃ© dos Campos', 'Rua JosÃ© Mattar', 'Talhes Lucas', 'talheslucas@hotmail.com', '12 3874-1258', 'HomeCare', 'talhes', '178cb9ee4bc88ab02f58d38d61f429cc', '2017-11-14 10:23:10'),
(5, 'Home care', '12 5554-4444', '12233-002', '1000', 'SP', 'Bosque dos Eucaliptos', 'SÃ£o JosÃ© dos Campos', 'Avenida Cidade Jardim', 'Bruno', 'bruno@gmail.com', '12 3333-3555', 'HomeCare', 'bruno', '1e0de1db409cb1a9c5a7b743af28f300', '2017-11-14 10:32:15'),
(6, 'Perilo Junior', '12 3025-8478', '12213-810', '660', 'SP', 'Buquirinha', 'SÃ£o JosÃ© dos Campos', 'Rua Ana AngÃ©lica de Oliveira', 'Perilo', 'perilo@hotmail.c', '65 4165', 'Farmacia', 'perilo', 'd9b1d7db4cd6e70935368a1efb10e377', '2017-11-18 14:14:11');

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens_venda`
--

CREATE TABLE IF NOT EXISTS `itens_venda` (
  `id_itens` int(11) NOT NULL AUTO_INCREMENT,
  `id_venda` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `preco` varchar(100) NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_itens`),
  KEY `id_venda` (`id_venda`),
  KEY `id_produto` (`id_produto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `itens_venda`
--

INSERT INTO `itens_venda` (`id_itens`, `id_venda`, `id_produto`, `preco`, `data_cadastro`) VALUES
(1, 3, 10, '100,00', '2017-11-23 09:12:59'),
(2, 3, 4, '25,00', '2017-11-23 09:13:13'),
(3, 4, 10, '1,20', '2017-11-23 09:57:32'),
(4, 4, 4, '45,62', '2017-11-23 09:57:32'),
(5, 5, 4, '45,62', '2017-11-23 10:05:07'),
(6, 5, 1, '12,65', '2017-11-23 10:05:07'),
(7, 6, 4, '45,62', '2017-11-23 10:11:27'),
(8, 6, 10, '1,20', '2017-11-23 10:11:27'),
(9, 6, 1, '12,65', '2017-11-23 10:11:27');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `id_produto` int(11) NOT NULL AUTO_INCREMENT,
  `id_categoria` int(10) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `valor` varchar(50) NOT NULL,
  `foto_principal` varchar(255) NOT NULL,
  `quantidade` int(15) NOT NULL,
  `quantidade_minima` int(15) NOT NULL,
  `descricao` text NOT NULL,
  `data_cadastro` datetime DEFAULT NULL,
  `disponivel` enum('S','N') DEFAULT 'N',
  PRIMARY KEY (`id_produto`),
  KEY `fk_id_categoria` (`id_categoria`),
  KEY `fk_empresa` (`id_empresa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id_produto`, `id_categoria`, `id_empresa`, `nome`, `valor`, `foto_principal`, `quantidade`, `quantidade_minima`, `descricao`, `data_cadastro`, `disponivel`) VALUES
(1, 6, 2, 'Descongex', '12,65', './fotosCadastradas/foto13112017101148.jpg', 8, 1, '<p>Descongest&atilde;o nasal</p>\r\n', '2017-11-13 20:28:48', 'S'),
(4, 6, 5, 'Luva de Latex', '45,62', './fotosCadastradas/foto14112017121142.jpg', 9986, 1, '<p>Luva para atendimento</p>\r\n', '2017-11-14 10:42:42', 'S'),
(7, 6, 5, 'Colete para Escoliose', '150,00', './fotosCadastradas/foto21112017111109.jpg', -8, 1, '<p>Para que &eacute; igual a sadia, tortinho</p>\r\n', '2017-11-21 21:00:09', 'S'),
(10, 3, 6, 'Produto', '1,20', './fotosCadastradas/foto22112017111109.jpg', 1, 1, '<p>asd</p>\r\n', '2017-11-22 21:28:09', 'S');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `foto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

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

CREATE TABLE IF NOT EXISTS `venda` (
  `id_venda` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) DEFAULT '0',
  `data_venda` datetime DEFAULT NULL,
  `subtotal` varchar(255) NOT NULL,
  `imposto` varchar(5) NOT NULL,
  `total` varchar(6) NOT NULL,
  `finalizado` enum('S','N') NOT NULL DEFAULT 'N',
  PRIMARY KEY (`id_venda`),
  KEY `fk_venda_idcliente` (`id_cliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `venda`
--

INSERT INTO `venda` (`id_venda`, `id_cliente`, `data_venda`, `subtotal`, `imposto`, `total`, `finalizado`) VALUES
(1, 1, '2017-11-22 21:30:19', '0,00', '', '', 'N'),
(2, 2, '2017-11-22 21:32:44', '0,00', '', '', 'N'),
(3, 2, '2017-11-22 21:32:44', '125,00', '', '', 'N'),
(4, 1, '2017-11-23 07:57:32', '46,00', '', '', 'S'),
(5, 1, '2017-11-23 08:05:07', '58,27', '', '', 'N'),
(6, 1, '2017-11-23 08:11:27', '59,47', '2.95', '62,42', 'S');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `itens_venda`
--
ALTER TABLE `itens_venda`
  ADD CONSTRAINT `itens_venda_ibfk_1` FOREIGN KEY (`id_venda`) REFERENCES `venda` (`id_venda`),
  ADD CONSTRAINT `itens_venda_ibfk_2` FOREIGN KEY (`id_produto`) REFERENCES `produtos` (`id_produto`);

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
  ADD CONSTRAINT `fk_venda_idcliente` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
