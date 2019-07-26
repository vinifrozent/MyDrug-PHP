-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10-Nov-2017 às 19:17
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nome`, `telefone`, `cep`, `endereco`, `num`, `uf`, `bairro`, `cidade`, `login`, `senha`, `email`, `data_cadastro`, `nivel`) VALUES
(1, 'Cliente 1', '(12) 3088-8888', '12245000', 'Avenida Engenheiro Francisco JosÃ© Longo', '4000', 'SP', 'Jardim SÃ£o Dimas', 'SÃ£o JosÃ© dos Campos', 'cliente1', 'd5a8d8c7ab0514e2b8a2f98769281585', 'cliente@gmail.com', '2017-11-04 11:55:08', 'Cliente');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`id_empresa`, `nome_empresa`, `telefone_empresa`, `cep`, `num`, `uf`, `bairro`, `cidade`, `rua`, `nome_responsavel`, `email_responsavel`, `telefone_responsavel`, `nivel`, `login`, `senha`, `data_cadastro`) VALUES
(1, 'Farma Conde', '12 3021-8856', '12233-002', '4000', 'SP', 'Bosque dos Eucaliptos', 'SÃ£o JosÃ© dos Campos', 'Avenida Cidade Jardim', 'FÃ¡bio freitas', 'fabio.freitas@gmail.com', '12 3021-8646', 'Farmacia', 'fabio', '6ff5613f2b767d6f4c02f4b0ae17e727', '2017-11-10 16:56:29'),
(2, 'FarmÃ¡cia1', '12 9999-9999', '12233-690', '87', 'SP', 'Bosque dos Eucaliptos', 'SÃ£o JosÃ© dos Campos', 'Rua Manoel Fiel Filho', 'Nome do responsÃ¡vel', 'email@responsave.com', '12 1111-1111', 'Farmacia', 'login', 'fe42e08d42d6a4659d87930edf416264', '2017-11-10 17:25:58'),
(3, 'Farmacia 2 ', '12 9977-8754', '12247-340', '121', 'SP', 'Jardim ItapoÃ£', 'SÃ£o JosÃ© dos Campos', 'Rua JosÃ© de Paula da Silva', 'N responsavel', 'e@responsavel.com', '12 1111-1115', 'Farmacia', 'senha', 'f67e209e9b8164dcb6812b9ac4357ed1', '2017-11-10 17:27:10');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`id`),
  KEY `fk_id_categoria` (`id_categoria`),
  KEY `fk_empresa` (`id_empresa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `id_categoria`, `id_empresa`, `nome`, `valor`, `foto_principal`, `quantidade`, `quantidade_minima`, `descricao`, `data_cadastro`, `disponivel`) VALUES
(1, 6, 3, 'Dipirona', '48,45', '/images/foto10112017061117.jpg', 87, 2, '<p>Caracteristicas do dipirona</p>\r\n', '2017-11-10 15:57:17', 'S'),
(2, 6, 1, 'Benegrip', '789,78', '/images/foto10112017071109.png', 12, 1, '<p>campo ded texte</p>\r\n', '2017-11-10 16:15:09', 'S'),
(3, 6, 1, 'Benegrip', '789,78', '/images/foto10112017071148.png', 12, 1, '<p>campo ded texte</p>\r\n', '2017-11-10 16:15:48', 'S'),
(4, 6, 1, 'Benegrip', '789,78', '/images/foto10112017071108.png', 12, 1, '<p>campo ded texte</p>\r\n', '2017-11-10 16:16:08', 'S');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `telefone`, `endereco`, `num`, `bairro`, `cidade`, `email`, `login`, `senha`, `data_cadastro`, `nivel`, `foto`) VALUES
(32, 'Cliente da silva', '12 3021-8346', 'Rua do Cliente', '123', 'Bairro do Cliente', 'Cidade do Cliente', 'cliente@gmail.com', 'cliente', '4983a0ab83ed86e0e7213c8783940193', '2017-11-01 20:15:30', 'Cliente', '/img/foto01112017101130.jpg'),
(33, 'Administrador', '99 9999-9999', 'Rua do Administrador', '99', 'Bairro do administrador', 'Cidade do Administrador', 'admin@admin.com', 'admin', '202cb962ac59075b964b07152d234b70', '2017-11-02 20:37:14', 'Admin', '/img/foto02112017101114.jpg'),
(34, 'Vitor Rodrigues', '12 3021-8574', 'Rua do Vitor', '1220', 'Bairro do Vitor', 'Cidade do Vitor', 'vitor@gmail.com', 'vitor', '997d13b90da22b35ce43bebdd332ad11', '2017-11-10 17:02:15', 'Cliente', '/img/foto10112017081115.jpg');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `fk_empresa` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id_empresa`),
  ADD CONSTRAINT `fk_id_categoria` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
