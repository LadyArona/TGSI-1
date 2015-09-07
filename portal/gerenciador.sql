-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 07-Set-2015 às 01:31
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gerenciador`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `CAT_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `CAT_DESCRICAO` varchar(150) NOT NULL,
  PRIMARY KEY (`CAT_CODIGO`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`CAT_CODIGO`, `CAT_DESCRICAO`) VALUES
(1, 'Coordenador'),
(2, 'Professor (Orientador)'),
(3, 'Professor (Avaliador)'),
(4, 'Aluno');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `USU_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `USU_LOGIN` varchar(100) NOT NULL,
  `USU_SENHA` varchar(150) NOT NULL,
  `USU_NOME` varchar(150) NOT NULL,
  `USU_EMAIL` varchar(150) NOT NULL,
  `USU_MATRICULA` varchar(100) NOT NULL,
  `USU_SITUACAO` tinyint(1) NOT NULL,
  PRIMARY KEY (`USU_CODIGO`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`USU_CODIGO`, `USU_LOGIN`, `USU_SENHA`, `USU_NOME`, `USU_EMAIL`, `USU_MATRICULA`, `USU_SITUACAO`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Administrador do Sistema', 'loja.anima.animus@gmail.com', '201221347', 0),
(35, 'aluno', 'f72eafc539768d2970925fd963a8f3b015a917c6', 'Visão Aluno', 'loja.anima.animus@gmail.com', '0000000', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario_categoria`
--

CREATE TABLE IF NOT EXISTS `usuario_categoria` (
  `USU_CODIGO` int(11) NOT NULL DEFAULT '0',
  `CAT_CODIGO` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`USU_CODIGO`,`CAT_CODIGO`),
  KEY `CAT_CODIGO` (`CAT_CODIGO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario_categoria`
--

INSERT INTO `usuario_categoria` (`USU_CODIGO`, `CAT_CODIGO`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(35, 4);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `usuario_categoria`
--
ALTER TABLE `usuario_categoria`
  ADD CONSTRAINT `usuario_categoria_ibfk_1` FOREIGN KEY (`USU_CODIGO`) REFERENCES `usuario` (`USU_CODIGO`),
  ADD CONSTRAINT `usuario_categoria_ibfk_2` FOREIGN KEY (`CAT_CODIGO`) REFERENCES `categoria` (`CAT_CODIGO`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
