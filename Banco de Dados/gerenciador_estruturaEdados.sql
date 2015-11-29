-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 29-Nov-2015 às 19:53
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
-- Estrutura da tabela `arquivo`
--

CREATE TABLE IF NOT EXISTS `arquivo` (
  `arq_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `usu_aluno` int(11) DEFAULT NULL,
  `tur_codigo` int(11) DEFAULT NULL,
  `arq_data` date DEFAULT NULL,
  `arq_hora` time DEFAULT NULL,
  `arq_obs` varchar(5000) DEFAULT NULL,
  `arq_nome` varchar(100) DEFAULT NULL,
  `arq_situacao` char(1) DEFAULT NULL,
  `arq_tipo` char(1) DEFAULT NULL COMMENT 'pro_tipo = 1, 2, 3...Situacao = 1, 2, 3',
  `arq_nome_original` varchar(100) NOT NULL,
  PRIMARY KEY (`arq_codigo`),
  KEY `usu_aluno` (`usu_aluno`),
  KEY `tur_codigo` (`tur_codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `arquivo`
--

INSERT INTO `arquivo` (`arq_codigo`, `usu_aluno`, `tur_codigo`, `arq_data`, `arq_hora`, `arq_obs`, `arq_nome`, `arq_situacao`, `arq_tipo`, `arq_nome_original`) VALUES
(7, 35, 9, '2015-11-23', '21:31:43', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. ', '3687b2c283d369221a610739389d4464.pdf', 'N', '1', '000726075.pdf'),
(8, 35, 9, '2015-11-23', '21:43:25', 'sssvsvsv', '40754337e3614bcab54aef6502dd3797.pdf', 'N', '2', 'Trabalho 1.pdf');

-- --------------------------------------------------------

--
-- Estrutura da tabela `banca`
--

CREATE TABLE IF NOT EXISTS `banca` (
  `ban_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `ban_tipo` int(11) NOT NULL,
  `ban_data` date NOT NULL,
  `ban_descricao` varchar(150) NOT NULL,
  `ban_local` varchar(1000) NOT NULL,
  `usu_codigo` int(11) NOT NULL,
  `tur_codigo` int(11) NOT NULL,
  PRIMARY KEY (`ban_codigo`),
  UNIQUE KEY `usu_codigo` (`usu_codigo`),
  KEY `usu_codigo_2` (`usu_codigo`),
  KEY `tur_codigo` (`tur_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `banca_detalhe`
--

CREATE TABLE IF NOT EXISTS `banca_detalhe` (
  `band_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `ban_codigo` int(11) NOT NULL,
  `usu_codigo` int(11) NOT NULL,
  PRIMARY KEY (`band_codigo`),
  KEY `ban_codigo` (`ban_codigo`),
  KEY `usu_codigo` (`usu_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
-- Estrutura da tabela `turma`
--

CREATE TABLE IF NOT EXISTS `turma` (
  `tur_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `tur_ano` year(4) DEFAULT NULL,
  `tur_semestre` tinyint(1) DEFAULT NULL,
  `tur_descricao` varchar(150) DEFAULT NULL,
  `tur_data_proposta` date DEFAULT NULL,
  PRIMARY KEY (`tur_codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `turma`
--

INSERT INTO `turma` (`tur_codigo`, `tur_ano`, `tur_semestre`, `tur_descricao`, `tur_data_proposta`) VALUES
(9, 2015, 2, '2015/2', '2015-12-31');

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma_detalhe`
--

CREATE TABLE IF NOT EXISTS `turma_detalhe` (
  `tud_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `tur_codigo` int(11) NOT NULL,
  `usu_aluno` int(11) NOT NULL,
  `usu_orientador` int(11) NOT NULL,
  `usu_coorientador` int(11) NOT NULL,
  `tud_titulo` varchar(500) NOT NULL,
  PRIMARY KEY (`tud_codigo`),
  KEY `tur_codigo` (`tur_codigo`),
  KEY `usu_aluno` (`usu_aluno`),
  KEY `usu_coorientador` (`usu_coorientador`),
  KEY `usu_orientador` (`usu_orientador`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Extraindo dados da tabela `turma_detalhe`
--

INSERT INTO `turma_detalhe` (`tud_codigo`, `tur_codigo`, `usu_aluno`, `usu_orientador`, `usu_coorientador`, `tud_titulo`) VALUES
(23, 9, 35, 50, 1, 'Modelo de Aplicabilidade de Sistema RFID para Rastreabilidade na Indústria Alimentícia'),
(24, 9, 47, 50, 1, ' Perfil dos Profissionais e das Empresas de Tecnologia da Informação (TI) da Cidade de Frederico Westphalen - RS');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`USU_CODIGO`, `USU_LOGIN`, `USU_SENHA`, `USU_NOME`, `USU_EMAIL`, `USU_MATRICULA`, `USU_SITUACAO`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Administrador', 'loja.anima.animus@gmail.com', '201221347', 0),
(35, '123456', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Daniel Prediger', 'loja.anima.animus@gmail.com', '123456', 0),
(36, 'loja.anima.animus@gmail.com', 'ebf683ced792b322a7d987ccd5eac90928761ebb', 'loja.anima.animus@gmail.com', 'loja.anima.animus@gmail.com', 'loja.anima.animus@gmail.com', 0),
(37, 'loja.anima.animus@gmail.com', 'ebf683ced792b322a7d987ccd5eac90928761ebb', 'loja.anima.animus@gmail.com', 'loja.anima.animus@gmail.com', 'loja.anima.animus@gmail.com', 0),
(38, 'loja.anima.animus@gmail.com', 'ebf683ced792b322a7d987ccd5eac90928761ebb', 'loja.anima.animus@gmail.com', 'loja.anima.animus@gmail.com', 'loja.anima.animus@gmail.com', 0),
(39, 'teste88', '1905973b7d78abc17b0c6b70fd111e1f92efa451', 'teste88', 'loja.anima.animus@gmail.com', 'teste88', 0),
(40, 'teste88', '1905973b7d78abc17b0c6b70fd111e1f92efa451', 'teste88', 'loja.anima.animus@gmail.com', 'teste88', 0),
(41, 'teste88', '1905973b7d78abc17b0c6b70fd111e1f92efa451', 'teste88', 'loja.anima.animus@gmail.com', 'teste88', 0),
(42, 'teste99', '8f748a9293deeadc84ca2853548c85506ac19912', 'teste99', 'loja.anima.animus@gmail.com', 'teste99', 0),
(43, 'teste99', '8f748a9293deeadc84ca2853548c85506ac19912', 'teste99', 'loja.anima.animus@gmail.com', 'teste99', 0),
(44, 'teste66', '12178c4c05e5a3d7f8aed28fe54e0bbabb418151', 'teste66', 'loja.anima.animus@gmail.com', 'teste66', 0),
(45, '1231', '908ea6e279c5d54d77eebbdab69e3eaa248b2ee4', '1231', 'loja.anima.animus@gmail.com', '1231', 0),
(46, '1232', 'afa3cb9f25141f64938d312b6d5a6f8fd19c26c2', '1232', 'loja.anima.animus@gmail.com', '1232', 0),
(47, '123457', '908f704ccaadfd86a74407d234c7bde30f2744fe', 'Francieli Zanardi', 'loja.anima.animus@gmail.com', '123457', 0),
(48, '5875', '725665a903a8bd39d50450a11bd234f1d7cfd0ac', 'Talliny Dalla Nora', 'loja.anima.animus@gmail.com', '5875', 0),
(49, '89745', '694aa534a8977a55ca80d5b59637a48bc38baba3', 'Talliny Dalla Nora', 'loja.anima.animus@gmail.com', '89745', 0),
(50, 'orientador', 'ca6af3b809551bee80981bfa6d5f4244d7215149', 'Cristiano B.', 'loja.anima.animus@gmail.com', 'orientador', 0);

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
(36, 1),
(39, 1),
(42, 1),
(44, 1),
(1, 2),
(50, 2),
(1, 3),
(36, 3),
(35, 4),
(45, 4),
(46, 4),
(47, 4),
(48, 4),
(49, 4);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `arquivo`
--
ALTER TABLE `arquivo`
  ADD CONSTRAINT `arq_tur_codigo` FOREIGN KEY (`tur_codigo`) REFERENCES `turma` (`tur_codigo`),
  ADD CONSTRAINT `usu_aluno` FOREIGN KEY (`usu_aluno`) REFERENCES `usuario` (`USU_CODIGO`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `banca`
--
ALTER TABLE `banca`
  ADD CONSTRAINT `ban_tur_codigo` FOREIGN KEY (`tur_codigo`) REFERENCES `turma` (`tur_codigo`),
  ADD CONSTRAINT `ban_usu_codigo` FOREIGN KEY (`usu_codigo`) REFERENCES `usuario` (`USU_CODIGO`);

--
-- Limitadores para a tabela `banca_detalhe`
--
ALTER TABLE `banca_detalhe`
  ADD CONSTRAINT `band_ban_codigo` FOREIGN KEY (`ban_codigo`) REFERENCES `banca` (`ban_codigo`),
  ADD CONSTRAINT `band_usu_codigo` FOREIGN KEY (`usu_codigo`) REFERENCES `usuario` (`USU_CODIGO`);

--
-- Limitadores para a tabela `turma_detalhe`
--
ALTER TABLE `turma_detalhe`
  ADD CONSTRAINT `tud_tur_codigo` FOREIGN KEY (`tur_codigo`) REFERENCES `turma` (`tur_codigo`),
  ADD CONSTRAINT `tud_usu_aluno` FOREIGN KEY (`usu_aluno`) REFERENCES `usuario` (`USU_CODIGO`),
  ADD CONSTRAINT `tud_usu_coorientador` FOREIGN KEY (`usu_coorientador`) REFERENCES `usuario` (`USU_CODIGO`),
  ADD CONSTRAINT `tud_usu_orientador` FOREIGN KEY (`usu_orientador`) REFERENCES `usuario` (`USU_CODIGO`);

--
-- Limitadores para a tabela `usuario_categoria`
--
ALTER TABLE `usuario_categoria`
  ADD CONSTRAINT `usuario_categoria_ibfk_1` FOREIGN KEY (`USU_CODIGO`) REFERENCES `usuario` (`USU_CODIGO`),
  ADD CONSTRAINT `usuario_categoria_ibfk_2` FOREIGN KEY (`CAT_CODIGO`) REFERENCES `categoria` (`CAT_CODIGO`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
