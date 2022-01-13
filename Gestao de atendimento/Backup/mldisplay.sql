-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 13-Jan-2020 às 20:34
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mldisplay`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acesso`
--

CREATE TABLE `acesso` (
  `id` int(11) NOT NULL,
  `n_chamado` varchar(250) NOT NULL,
  `razao` varchar(50) DEFAULT NULL,
  `nome_contato` varchar(250) DEFAULT NULL,
  `fone` varchar(30) DEFAULT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `endereco` longtext,
  `fk_tecnico` int(11) DEFAULT NULL,
  `ocorrencia` longtext,
  `data` varchar(250) DEFAULT NULL,
  `hora_inicial` varchar(20) DEFAULT NULL,
  `hora_final` varchar(20) DEFAULT NULL,
  `passado` varchar(50) DEFAULT NULL,
  `nivel` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `acesso`
--

INSERT INTO `acesso` (`id`, `n_chamado`, `razao`, `nome_contato`, `fone`, `mail`, `endereco`, `fk_tecnico`, `ocorrencia`, `data`, `hora_inicial`, `hora_final`, `passado`, `nivel`) VALUES
(1, '080120201', 'MR BERNARDO', 'GUILHERME SALAZAR', '24741432  celular1 ', 'gabriell-lima23@hotmail.com', '', 45, 'tec', '08/01/2020', '09:44', '12:20', 'bruno', 2),
(3, '080120203', '', 'JOSE BRUNO PEREIRA VELEIS ', '021-2474-1431  92253770 ', 'bruno.pereira.veleis@hotmail.com', '', 45, 'AJUDA PARA EMITIR DANF ', '08/01/2020', '12:23', '12:34', 'nora', 2),
(4, '080120204', 'MR BERNARDO', 'GUILHERME SALAZAR', '24741432  celular1 ', 'gabriell-lima23@hotmail.com', '', 45, '1234', '08/01/2020', '12:24', '12:34', 'nora', 2),
(6, '080120206', '', 'JOSE BRUNO PEREIRA VELEIS ', '021-2474-1431  92253770 ', 'bruno.pereira.veleis@hotmail.com', '', 45, '014564567', '08/01/2020', '12:28', '12:35', 'nora', 2),
(7, '0', 'LION COMERCIO IMPORTACAO EXPORTACAO EM GERAL EIREL', 'Thiago', '(21) 2135-5667  celular1 ', 'thiagolion@hotmail.com', '', 45, '2', '08/01/2020', '12:28', '12:35', 'nora', 2),
(8, '080120208', 'PRONTO SOLUÃ‡Ã•E', 'Leandro alves8', '247414312  celular1 ', 'contato@mldisplay.com', '', 45, 'FR', '08/01/2020', '12:28', '12:35', 'nora', 2),
(9, '100120209', 'MR BERNARDO', 'GUILHERME SALAZAR', '24741432  celular1 ', 'gabriell-lima23@hotmail.com', '', 45, 'caixa travou ', '10/01/2020', '15:44', '15:46', 'bruno', 2),
(10, '1001202010', 'MR BERNARDO', 'GUILHERME SALAZAR', '24741432  celular1 ', 'gabriell-lima23@hotmail.com', '', 45, 'tee', '10/01/2020', '15:57', '14:28', 'bruno', 2),
(11, '1001202011', 'PRONTO SOLUÃ‡Ã•E', 'Leandro alves8', '247414312  celular1 ', 'contato@mldisplay.com', 'AV NILO PEÃ‡ANHA  660 LOJA CENTRO DUQUE DE CAXIAS RJ4', 47, 'rfwe', '10/01/2020', '15:58', '', 'bruno', 1),
(12, '0', 'PRONTO SOLUÃ‡Ã•E', 'Leandro alves8', '247414312  celular1 ', 'contato@mldisplay.com', '', 45, 'rf2 rc', '10/01/2020', '15:58', '14:27', 'bruno', 2),
(13, '0', 'LION COMERCIO IMPORTACAO EXPORTACAO EM GERAL EIREL', 'Thiago', '(21) 2135-5667  celular1 ', 'thiagolion@hotmail.com', '', 45, 'rnb', '10/01/2020', '15:58', '13:44', 'bruno', 2),
(14, '1001202014', 'PRONTO SOLUÃ‡Ã•E', 'Marcela Jesus dos Santos', '24741431  222222 ', 'bruno.pereira.veleis@hotmail.com', '', 45, '123456', '10/01/2020', '15:59', '13:44', 'bruno', 2),
(15, '1001202015', 'MR BERNARDO', 'GUILHERME SALAZAR', '24741432  celular1 ', 'gabriell-lima23@hotmail.com', '', 45, 'erro no caixa 4', '10/01/2020', '16:34', '14:28', 'bruno', 2),
(16, '0', 'LION COMERCIO IMPORTACAO EXPORTACAO EM GERAL EIREL', 'Thiago', '(21) 2135-5667  celular1 ', 'thiagolion@hotmail.com', '', 45, 'defeito', '10/01/2020', '16:38', '14:28', 'nora', 2),
(17, '1301202017', 'MR BERNARDO', 'GUILHERME SALAZAR', '24741432  celular1 ', 'gabriell-lima23@hotmail.com', '', 45, 'lojprko', '13/01/2020', '14:16', '14:28', 'bruno', 2),
(18, '1301202018', 'MR BERNARDO', 'GUILHERME SALAZAR', '24741432  celular1 ', 'gabriell-lima23@hotmail.com', '', 45, 'eg ', '13/01/2020', '14:21', '14:28', 'bruno', 2),
(19, '1301202019', 'MR BERNARDO', 'GUILHERME SALAZAR', '24741432  celular1 ', 'gabriell-lima23@hotmail.com', '', 45, 'erro no caixa ', '13/01/2020', '15:41', '15:59', 'bruno', 2),
(20, '1301202020', 'MR BERNARDO', 'GUILHERME SALAZAR', '24741432  celular1 ', 'gabriell-lima23@hotmail.com', 'RUA ESPERIDIÃƒO  12  AO LADO DA  SEGURANÃ‡A CAJU  RIO DE JANEIRO RJ', 47, 'rf', '13/01/2020', '15:42', '', 'bruno', 1),
(21, '1301202021', '', 'JOSE BRUNO PEREIRA VELEIS ', '021-2474-1431  92253770 ', 'bruno.pereira.veleis@hotmail.com', '', 45, '1034', '13/01/2020', '15:42', '15:59', 'bruno', 2),
(22, '1301202022', 'MR BERNARDO', 'GUILHERME SALAZAR', '24741432  celular1 ', 'gabriell-lima23@hotmail.com', '', 45, 'rny', '13/01/2020', '15:43', '15:59', 'bruno', 2),
(23, '1301202023', 'PRONTO SOLUÃ‡Ã•E', 'Marcela Jesus dos Santos', '24741431  222222 ', 'bruno.pereira.veleis@hotmail.com', '', 45, 'treg', '13/01/2020', '15:43', '15:59', 'bruno', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `agenda`
--

CREATE TABLE `agenda` (
  `id` int(11) NOT NULL,
  `descricao` longtext,
  `dia` date DEFAULT NULL,
  `hora` varchar(20) DEFAULT NULL,
  `id_quem` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `agenda`
--

INSERT INTO `agenda` (`id`, `descricao`, `dia`, `hora`, `id_quem`) VALUES
(1, 'ligar para lugs ', '2019-12-10', '15:30', 45),
(2, 'medico ', '2019-12-11', '08:00', 45);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cargo`
--

CREATE TABLE `cargo` (
  `id` int(11) NOT NULL,
  `cargo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cargo`
--

INSERT INTO `cargo` (`id`, `cargo`) VALUES
(1, 'Atendente'),
(2, 'Suporte'),
(3, 'Tenico'),
(4, 'Administrador'),
(5, 'Vendendor'),
(6, 'Comercial '),
(7, 'Financeiro');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id`, `nome`) VALUES
(1, 'Computador'),
(2, 'Nobreak'),
(3, 'Gaveta'),
(4, 'Leitor'),
(5, 'Consulta PreÃ§o'),
(6, 'Micro'),
(7, 'Impressora '),
(8, 'Outros');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `razao` varchar(250) NOT NULL,
  `fantasia` varchar(100) NOT NULL,
  `telefone1` varchar(50) DEFAULT NULL,
  `telefone2` varchar(50) DEFAULT NULL,
  `celular1` varchar(50) DEFAULT NULL,
  `celular2` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `cnpj_cpf` varchar(150) DEFAULT NULL,
  `rg_inscri` varchar(150) DEFAULT NULL,
  `obs` longtext,
  `cep` varchar(255) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `numero` varchar(255) DEFAULT NULL,
  `complemento` longtext,
  `bairro` varchar(150) DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `uf` varchar(50) DEFAULT NULL,
  `contratos` longtext,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `razao`, `fantasia`, `telefone1`, `telefone2`, `celular1`, `celular2`, `email`, `cnpj_cpf`, `rg_inscri`, `obs`, `cep`, `endereco`, `numero`, `complemento`, `bairro`, `cidade`, `uf`, `contratos`, `status`) VALUES
(1, 'Leandro alves8', 'PRONTO SOLUÃ‡Ã•E', 'Ty5', '247414312', '', 'celular1', '', 'contato@mldisplay.com', '00.000.000/0001-00', '000000', 'Cliente estar bloqueado por falta de pagamento no periodo de 2 anos&nbsp; &nbsp;&nbsp;', '25040030', 'AV NILO PEÃ‡ANHA ', '660', 'LOJA', 'CENTRO', 'DUQUE DE CAXIAS', 'RJ4', 'NENHUM', '1'),
(2, 'Marcela Jesus dos Santos', 'PRONTO SOLUÃ‡Ã•E', '', '24741431', '', '222222', '', 'bruno.pereira.veleis@hotmail.com', '2154pkgo', '7', 'cliente cancelado pois deixou de usar o sistema e cancelou o contrato', '22.775-002', 'Avenida Ayrton Senna, 15', '66055', '2', '12', 'RIO DE JANEIRO', 'Rio de Janeiro', 'NENHUM', '1'),
(3, 'JOSE BRUNO PEREIRA VELEIS ', '', '', '021-2474-1431', '', '92253770', '', 'bruno.pereira.veleis@hotmail.com', '130.495.967-83', '001002003', 'Cliente cancelou pois fechou a loja&nbsp; 12/09/2019,                    13/09/2019,                   SAIU COM MOZAO  14/09/2019,                   baba 26/09/2019,&nbsp; 02/10/2019,                   1213 11/10/2019,                    02/12/2019,                    02/12/2019,                    02/12/2019,                   ', '25040030', 'RUA CARAGUATATUBA ', '39t', 'FUNDOS ', 'VILA ROSÃRIO', 'DUQUE DE CAXIAS ', 'RJ ', 'NENHUM', '2'),
(4, 'GUILHERME SALAZAR', 'MR BERNARDO', '3', '24741432', '', 'celular1', '', 'gabriell-lima23@hotmail.com', '00.000.000/0001-00', '000000', 'Esse cliente entrou na data de 12/08/2019&nbsp; 12/09/2019,                   caloteiro 13/09/2019, Perdeu o contrato&nbsp; 11/10/2019,   ', '10204050', 'RUA ESPERIDIÃƒO ', '12', ' AO LADO DA  SEGURANÃ‡A', 'CAJU ', 'RIO DE JANEIRO', 'RJ', 'NENHUM', '1'),
(14, 'Thiago', 'LION COMERCIO IMPORTACAO EXPORTACAO EM GERAL EIRELI', 'LION IMPORTS', '(21) 2135-5667', '', 'celular1', '', 'thiagolion@hotmail.com', '33748201000120', '12', '1234567894564879 13/09/2019,                  cancelou  26/09/2019,                   falta de paga 26/09/2019,                   f 26/09/2019,                   fr', '21.510-105', 'AVENIDA DOS ITALIANOS', '01434', 'F', 'COELHO NETO', 'RIO DE JANEIRO', 'RJ', 'NENHUM', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente_sys`
--

CREATE TABLE `cliente_sys` (
  `id` int(11) NOT NULL,
  `fk_sistema` int(11) DEFAULT NULL,
  `fk_cliente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cliente_sys`
--

INSERT INTO `cliente_sys` (`id`, `fk_sistema`, `fk_cliente`) VALUES
(32, 5, 3),
(33, 5, 3),
(34, 5, 3),
(35, 5, 3),
(36, 5, 3),
(37, 5, 3),
(38, 5, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `contrato`
--

CREATE TABLE `contrato` (
  `id` int(11) NOT NULL,
  `d_abertura` varchar(100) DEFAULT NULL,
  `m_pagamento` varchar(50) DEFAULT NULL,
  `fk_cliente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `contrato`
--

INSERT INTO `contrato` (`id`, `d_abertura`, `m_pagamento`, `fk_cliente`) VALUES
(6, '2019-09-30', 'Bolerto ', 3),
(7, '2019-12-02', 'boleto', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados`
--

CREATE TABLE `dados` (
  `id_quem` int(11) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `telefone` varchar(150) NOT NULL,
  `endereco` text NOT NULL,
  `municipio` varchar(100) NOT NULL,
  `cpf` varchar(50) NOT NULL,
  `rg` varchar(50) NOT NULL,
  `nasc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `dados`
--

INSERT INTO `dados` (`id_quem`, `mail`, `telefone`, `endereco`, `municipio`, `cpf`, `rg`, `nasc`) VALUES
(2, 'bruno.veleis@gmail.com', '24741431', 'AV', 'duque', '22222222222222222222', '00000', '1993-01-16'),
(4, 'roberto@prontosolucoes.com', '21988331101', 'Av.', 'Belford Roxo', '81389833704', '0000', '0000-00-00'),
(6, 'contato@mldisplay.com.br', '21994432341', 'Av Nilo PeÃ§anha, 660', 'Duque de Caxias', '000', '0000', '1983-11-28'),
(38, 'contato@mldisplay.com', '24741431', 'AV', 'DUQUE', '123456', '123456', '2019-09-18');

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE `empresa` (
  `id` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `razao` varchar(250) NOT NULL,
  `cnpj` varchar(250) NOT NULL,
  `inscri` varchar(250) NOT NULL,
  `telefone` varchar(250) NOT NULL,
  `cep` varchar(250) NOT NULL,
  `endereco` text NOT NULL,
  `numero` varchar(250) NOT NULL,
  `complemento` varchar(250) NOT NULL,
  `bairro` varchar(250) NOT NULL,
  `cidade` varchar(250) NOT NULL,
  `estado` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`id`, `nome`, `razao`, `cnpj`, `inscri`, `telefone`, `cep`, `endereco`, `numero`, `complemento`, `bairro`, `cidade`, `estado`) VALUES
(12, 'PRONTO SOLUCOES', 'PRONTO', '01.869.562/0001-39', '86.030.918', '(21) 2474-1431', '25010-144', 'AV NILO PEÃ‡ANHA', '660', 'LOJA ', 'CENTRO', 'DUQUE DE CAXIAS', 'RJ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipamento`
--

CREATE TABLE `equipamento` (
  `id` int(11) NOT NULL,
  `cliente` varchar(200) DEFAULT NULL,
  `equipamento` varchar(100) DEFAULT NULL,
  `marca` varchar(50) DEFAULT NULL,
  `modelo` varchar(100) DEFAULT NULL,
  `n_serie` varchar(50) DEFAULT NULL,
  `garantia_contrato` varchar(200) DEFAULT NULL,
  `data_garantia` varchar(100) DEFAULT NULL,
  `data_compra` date DEFAULT NULL,
  `valor` decimal(6,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `equipamento`
--

INSERT INTO `equipamento` (`id`, `cliente`, `equipamento`, `marca`, `modelo`, `n_serie`, `garantia_contrato`, `data_garantia`, `data_compra`, `valor`) VALUES
(17, '3', 'Micro', 'Positivo', 'Notebook', '25', 'Cont: BalcÃ£o', '2019-12-02ate2020-12-02', '2019-09-30', '1.20'),
(18, '4', 'Nobreak', 'NHS', 'HS214', '12', 'Ga: BalcÃ£o', '2019-09-30 ate 2020-09-30', '2019-09-30', '600.00'),
(19, '14', 'Leitor', 'Sweda', 't15', '0505', 'Ga: BalcÃ£o', '2019-09-30 ate 2020-09-30', '2019-09-30', '150.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque`
--

CREATE TABLE `estoque` (
  `id` int(11) NOT NULL,
  `lugar` varchar(100) DEFAULT NULL,
  `corredor_armario` varchar(100) DEFAULT NULL,
  `pratileira` varchar(100) DEFAULT NULL,
  `gaveta` varchar(100) DEFAULT NULL,
  `fk_produto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `estoque`
--

INSERT INTO `estoque` (`id`, `lugar`, `corredor_armario`, `pratileira`, `gaveta`, `fk_produto`) VALUES
(1, 'estoque', 'armario', 'Gaveteiro', 'Gaveta01', 1),
(3, 'ALMOXERIFADO', 'ESTANTE 3', 'PLATILEIRA 4', 'SEM GAVETA ', 1),
(6, 'ALMOXERIFADO ', 'ARMARIO PORTA 3', 'PLATILEIRA 5', 'AO LADO DA CAIXA', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

CREATE TABLE `fornecedor` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `razao` varchar(250) NOT NULL,
  `fantasia` varchar(200) NOT NULL,
  `cnpj_cpf` varchar(200) NOT NULL,
  `inscri_rg` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone1` varchar(100) NOT NULL,
  `telefone2` varchar(100) NOT NULL,
  `celular1` varchar(100) NOT NULL,
  `celular2` varchar(100) NOT NULL,
  `cep` varchar(100) NOT NULL,
  `endereco` text NOT NULL,
  `numero` varchar(20) NOT NULL,
  `complemento` varchar(100) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `uf` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fornecedor`
--

INSERT INTO `fornecedor` (`id`, `nome`, `razao`, `fantasia`, `cnpj_cpf`, `inscri_rg`, `email`, `telefone1`, `telefone2`, `celular1`, `celular2`, `cep`, `endereco`, `numero`, `complemento`, `bairro`, `cidade`, `uf`, `status`) VALUES
(1, 'PAUTA DISTRIBUICAo', 'PAUTA DISTRIBUICAO E LOGISTICA S.A.', '1', '83064741000597', '', 'pauta@pauta.com.br', '(48) 3063-76392', '', '', '', '88.104-765', 'R JUDITE MELO DOS SANTOS', '251', 'GALPAO 10', 'DISTRITO INDUSTRIAL', 'SAO JOSE', 'SC', 1),
(2, '83', 'BRUNo', '', '83064741000597', '', 'pauta@pauta.com.br', '(48) 3063-7639', '', '', '', '88.104-765', 'R JUDITE MELO DOS SANTOS', '251', 'GALPAO 10', 'DISTRITO INDUSTRIAL', 'SAO JOSE', 'SC', 1),
(3, 'PADRAO1', '', '', 'ghy', '12', '1', '2', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `garantia_contrato`
--

CREATE TABLE `garantia_contrato` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `Equipamento` varchar(250) NOT NULL,
  `data_inicial` date DEFAULT NULL,
  `data_final` date DEFAULT NULL,
  `valor` varchar(50) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `n_contrato` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `garantia_contrato`
--

INSERT INTO `garantia_contrato` (`id`, `nome`, `Equipamento`, `data_inicial`, `data_final`, `valor`, `status`, `n_contrato`) VALUES
(26, 'PlantÃ£o', '  NS: ', '2018-09-30', '2019-09-30', '150.00', 1, 6),
(27, 'PlantÃ£o', '  NS: ', '2019-12-02', '2020-12-02', '150.00', 1, 7),
(28, 'BalcÃ£o', 'Positivo Notebook NS: 25', '2019-12-02', '2020-12-02', '300.00', 1, 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `hepdesk`
--

CREATE TABLE `hepdesk` (
  `id` int(11) NOT NULL,
  `conta_fk` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `hepdesk`
--

INSERT INTO `hepdesk` (`id`, `conta_fk`, `status`) VALUES
(1, 45, 1),
(2, 48, 0),
(7, 55, 0),
(8, 39, 0),
(9, 54, 0),
(10, 58, 0),
(11, 41, 0),
(12, 49, 0),
(13, 44, 0),
(14, 57, 0),
(15, 42, 0),
(16, 47, 2),
(17, 56, 0),
(18, 46, 0),
(19, 43, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens_contrato`
--

CREATE TABLE `itens_contrato` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `obs` longtext,
  `tipo` int(11) NOT NULL,
  `valor` decimal(6,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `itens_contrato`
--

INSERT INTO `itens_contrato` (`id`, `nome`, `obs`, `tipo`, `valor`) VALUES
(3, 'Master', 'Cobre qualquer problema com troca de peÃ§a ', 2, '150.00'),
(4, 'Onsite ', 'Cliente levara o equipamento ', 2, '200.00'),
(5, 'PlantÃ£o', 'Atendimento no horÃ¡rio comercial ate 22:00 de Segunda a Domingo', 2, '150.00'),
(6, 'BalcÃ£o', 'Atendimento no Laboratorio ', 2, '300.00'),
(7, 'BalcÃ£o', 'Equipamento Sera levado para reparo no laboratorio', 1, '0.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `laudo`
--

CREATE TABLE `laudo` (
  `id` int(11) NOT NULL,
  `id_cha` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `hora` varchar(30) DEFAULT NULL,
  `laudo` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `laudo`
--

INSERT INTO `laudo` (`id`, `id_cha`, `nome`, `hora`, `laudo`) VALUES
(1, 4, 'bruno', '16:40', 'OI '),
(2, 3, 'bruno', '16:40', ''),
(3, 5, 'bruno', '16:41', ''),
(4, 6, 'bruno', '16:47', ''),
(5, 7, 'bruno', '16:47', ''),
(6, 2, 'bruno', '16:52', ''),
(7, 8, 'bruno', '16:52', ''),
(8, 9, 'bruno', '16:52', 'caixa estava com serviÃ§o parado '),
(9, 12, 'bruno', '17:04', 'erro '),
(10, 10, 'bruno', '14:16', ''),
(11, 1, 'bruno', '12:20', 'resolvido '),
(12, 14, 'bruno', '13:44', ''),
(13, 13, 'bruno', '13:44', ''),
(14, 15, 'bruno', '14:28', 'rfw'),
(15, 16, 'bruno', '14:28', ''),
(16, 17, 'bruno', '14:28', ''),
(17, 18, 'bruno', '14:28', ''),
(18, 19, 'bruno', '15:59', ''),
(19, 21, 'bruno', '15:59', ''),
(20, 22, 'bruno', '15:59', ''),
(21, 23, 'bruno', '15:59', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `marca`
--

CREATE TABLE `marca` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `marca`
--

INSERT INTO `marca` (`id`, `nome`) VALUES
(1, 'Elgin'),
(2, 'Bematech'),
(3, 'Positivo'),
(5, 'Dell'),
(6, 'Sweda'),
(7, 'Elgin'),
(8, 'NHS'),
(11, 'Daruma'),
(12, 'Outros');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagens`
--

CREATE TABLE `mensagens` (
  `id` int(11) NOT NULL,
  `d_quem` varchar(250) NOT NULL,
  `p_quem` varchar(250) NOT NULL,
  `mensagem` longtext NOT NULL,
  `anexo` varchar(200) NOT NULL,
  `date` varchar(250) NOT NULL,
  `hora` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `mensagens`
--

INSERT INTO `mensagens` (`id`, `d_quem`, `p_quem`, `mensagem`, `anexo`, `date`, `hora`, `status`) VALUES
(14, 'Fabiano', 'ML', 'oi', '', 'September 23, 2019 MON', '12:22', '1'),
(15, 'ML', 'Fabiano', 'eae cara ', '', 'September 23, 2019 MON', '12:22', '1'),
(16, 'ML', 'Fabiano', ' belezsa ', '', 'September 23, 2019 MON', '12:22', '1'),
(17, 'ML', 'POST GERAL', 'vamos grupo ', '', 'September 23, 2019 MON', '12:23', '0'),
(18, 'Fabiano', 'ML', 'oi', '', 'September 23, 2019 MON', '12:29', '1'),
(19, 'ML', 'Fabiano', 'tudo bem ain ', '', 'September 23, 2019 MON', '12:30', '1'),
(20, 'ML', 'Fabiano', '      cara me ajuda ai', '', 'September 23, 2019 MON', '12:30', '1'),
(21, 'ML', 'Fabiano', '     to com uma duvida ', '', 'September 23, 2019 MON', '12:30', '1'),
(22, 'ML', 'Fabiano', '', 'CorelDRAW Graphics Suite X7.txt', 'September 23, 2019 MON', '12:31', '1'),
(23, 'ML', 'Fabiano', 'fabiano', '', 'September 23, 2019 MON', '12:34', '1'),
(24, 'Fabiano', 'ML', 'oi ', '', 'September 23, 2019 MON', '12:35', '1'),
(25, 'bruno', 'POST GERAL', 'bom dia grupo', '', 'September 25, 2019 WED', '15:44', '1'),
(26, 'bruno', 'gabriel', '   Gabriel ', '', 'September 25, 2019 WED', '15:44', '1'),
(27, 'bruno', 'gabriel', ' cara me ajuda \n tenho um problema ', '', 'September 25, 2019 WED', '15:45', '1'),
(28, 'bruno', 'gabriel', 'tenho <br> t', '', 'September 25, 2019 WED', '15:45', '0'),
(29, 'bruno', 'ML', 'oi ', '', 'October 02, 2019 WED', '09:15', '1'),
(30, 'bruno', 'ML', 'oi ', '', 'October 02, 2019 WED', '13:03', '1'),
(31, 'bruno', 'ML', ' tudo bem ', '', 'October 02, 2019 WED', '13:03', '1'),
(32, 'bruno', 'ML', 'ðŸ˜ƒðŸ˜ƒðŸ˜ƒðŸ˜ƒðŸ˜ƒðŸ˜ƒ', '', 'October 02, 2019 WED', '13:04', '1'),
(33, 'bruno', 'ML', 'bhni', '', 'October 02, 2019 WED', '13:04', '1'),
(34, 'ML', 'bruno', 'oi ', '', 'October 02, 2019 WED', '14:27', '1'),
(35, 'ML', 'bruno', ' fala ', '', 'October 02, 2019 WED', '14:27', '1'),
(36, 'bruno', 'ML', 'oi', '', 'October 04, 2019 FRI', '16:48', '1'),
(37, 'bruno', 'ML', 'tudo bem ', '', 'October 04, 2019 FRI', '16:48', '0'),
(38, 'bruno', 'elcenira', 'Poderia fazer um vale ?', '', 'October 09, 2019 WED', '15:18', '0'),
(39, 'bruno', 'isabela', 'isabela ', '', 'November 01, 2019 FRI', '11:15', '0'),
(40, 'beatriz', 'POST GERAL', 'FALA PESSSOAL', '', 'November 06, 2019 WED', '16:34', '0'),
(41, 'beatriz', 'bruno', 'BRUNO ME AJUDA ', '', 'November 06, 2019 WED', '16:34', '1'),
(42, 'bruno', 'beatriz', 'oi bia ', '', 'November 06, 2019 WED', '16:35', '1'),
(43, 'bruno', 'beatriz', '    o que ouve ', '', 'November 06, 2019 WED', '16:35', '1'),
(44, 'nora', 'POST GERAL', 'oi povo ', '', 'November 11, 2019 MON', '11:12', '1'),
(45, 'nora', 'POST GERAL', '  como vai galera ', '', 'November 11, 2019 MON', '11:12', '1'),
(46, 'nora', 'POST GERAL', 'ðŸ˜ƒ', '', 'November 11, 2019 MON', '11:12', '0'),
(47, 'beatriz', 'bruno', 'bruno', '', 'November 14, 2019 THU', '09:42', '1'),
(48, 'beatriz', 'bruno', 'me ajuda ai ', '', 'November 14, 2019 THU', '09:42', '1'),
(49, 'bruno', 'beatriz', 'oi bia fala ai ', '', 'November 14, 2019 THU', '10:43', '1'),
(50, 'beatriz', 'bruno', 'cara to com problema no cliente aqui ', '', 'November 14, 2019 THU', '09:43', '1'),
(51, 'bruno', 'beatriz', ' sim  o que ouve  la ', '', 'November 14, 2019 THU', '10:44', '0'),
(52, 'beatriz', 'bruno', 'oi', '', 'November 14, 2019 THU', '09:44', '1'),
(53, 'bruno', 'POST GERAL', 'oi galera ', '', 'November 19, 2019 TUE', '08:54', '1'),
(54, 'bruno', 'nora', 'nota', '', 'December 17, 2019 TUE', '13:51', '1'),
(55, 'bruno', 'nora', 'me ajuda ai ', '', 'December 17, 2019 TUE', '13:51', '1'),
(56, 'bruno', 'nora', '', 'NCR.png', 'December 17, 2019 TUE', '13:51', '1'),
(57, 'bruno', 'POST GERAL', 'galera da pronto ', '', 'December 17, 2019 TUE', '13:51', '0');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mochila`
--

CREATE TABLE `mochila` (
  `id` int(11) NOT NULL,
  `fk_tecnico` int(11) DEFAULT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `marca` varchar(150) DEFAULT NULL,
  `modelo` varchar(100) DEFAULT NULL,
  `quantidade` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `modelo`
--

CREATE TABLE `modelo` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `modelo`
--

INSERT INTO `modelo` (`id`, `nome`) VALUES
(1, 'Notebook'),
(2, 'I9'),
(3, 'RC8400'),
(4, 'HS214'),
(5, '2257'),
(6, 'Mini'),
(7, 'simbol'),
(8, 'EET'),
(9, 'Powerget'),
(10, 'hp1200'),
(11, '124'),
(12, 't15');

-- --------------------------------------------------------

--
-- Estrutura da tabela `modelo_sis`
--

CREATE TABLE `modelo_sis` (
  `id` int(11) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `valor` decimal(6,2) NOT NULL,
  `fk_sistema` int(11) NOT NULL,
  `descricao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `modelo_sis`
--

INSERT INTO `modelo_sis` (`id`, `modelo`, `valor`, `fk_sistema`, `descricao`) VALUES
(16, 'Hiper GestÃ£o', '200.00', 5, 'Caixa com Servidor '),
(17, 'Hiper Mini', '100.00', 5, 'Caixa com Cadastro sem  controle de estoque'),
(18, 'Master', '420.00', 6, 'Terminal de venda com ponto de lanÃ§amento + cadastro'),
(19, 'Backoffice', '300.00', 6, 'Cadastro controle de estoque relatorios '),
(20, 'Caixa add', '20.00', 5, 'Conta de usuario '),
(21, 'MARKET', '200.00', 7, 'Cadastro com ponto de venda '),
(22, 'Mobile ', '100.00', 7, 'LanÃ§amento de orÃ§amento ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `modulo`
--

CREATE TABLE `modulo` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `descricao` varchar(250) DEFAULT NULL,
  `vencimento` date NOT NULL,
  `valor` decimal(6,2) DEFAULT NULL,
  `fk_sys` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `modulo`
--

INSERT INTO `modulo` (`id`, `nome`, `descricao`, `vencimento`, `valor`, `fk_sys`, `status`) VALUES
(23, 'Hiper GestÃ£o', 'Caixa com Servidor ', '2021-09-30', '200.00', 32, 1),
(24, 'Master', 'Terminal de venda com ponto de lanÃ§amento + cadastro', '2019-09-30', '420.00', 32, 1),
(25, 'Hiper GestÃ£o', 'Caixa com Servidor ', '0000-00-00', '200.00', 32, 1),
(26, 'Master', 'Terminal de venda com ponto de lanÃ§amento + cadastro', '0000-00-00', '420.00', 32, 1),
(27, 'Mobile ', 'LanÃ§amento de orÃ§amento ', '0000-00-00', '100.00', 32, 1),
(28, 'Hiper GestÃ£o', 'Caixa com Servidor ', '2019-10-04', '200.00', 32, 0),
(29, 'Hiper GestÃ£o', 'Caixa com Servidor ', '2019-10-17', '200.00', 38, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `msg`
--

CREATE TABLE `msg` (
  `id` int(11) NOT NULL,
  `de` int(11) DEFAULT NULL,
  `para` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `hora` varchar(50) DEFAULT NULL,
  `mensagem` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `msg`
--

INSERT INTO `msg` (`id`, `de`, `para`, `status`, `data`, `hora`, `mensagem`) VALUES
(419, 45, 39, 1, '2019-12-09', '10:43', '      oi'),
(420, 45, 39, 1, '2019-12-09', '10:43', 'oi'),
(421, 45, 39, 1, '2019-12-09', '10:43', 'io'),
(422, 45, 39, 1, '2019-12-09', '10:43', 'io'),
(423, 45, 39, 1, '2019-12-09', '10:43', 'vc'),
(424, 45, 39, 1, '2019-12-09', '11:05', '      fala galera '),
(425, 45, 39, 1, '2019-12-09', '11:06', 'jio'),
(426, 45, 39, 1, '2019-12-09', '11:06', 'ðŸ˜„ðŸ˜„ðŸ˜„ðŸ˜„'),
(427, 48, 45, 1, '2019-12-09', '11:09', '     me ajuda ai'),
(428, 45, 48, 1, '2019-12-09', '11:09', '      oi bia '),
(429, 45, 48, 1, '2019-12-09', '11:09', ' fala comigo '),
(430, 48, 45, 1, '2019-12-09', '11:09', 'cara to com erro aqui'),
(431, 45, 48, 1, '2019-12-09', '11:11', '      bia  o que e '),
(432, 48, 45, 1, '2019-12-09', '11:13', '      bom  nÃ£o sei ao certo mas o servidor da loja travou e nÃ£o voltou a funcionar como deveria bem assim nÃ£o sei o que ouve mais deu ruim acho que o HD travou '),
(433, 45, 48, 1, '2019-12-09', '11:14', 'cara pega esse acesso ai '),
(434, 45, 48, 1, '2019-12-09', '11:14', '  pra mim vou te passar pode '),
(435, 48, 45, 1, '2019-12-09', '11:15', 'vou te ajudar mas vou sai tbm pq minha farofa vai acabar '),
(436, 45, 48, 1, '2019-12-09', '11:15', 'bia da farofa '),
(437, 45, 48, 1, '2019-12-09', '11:15', 'kkkkk '),
(438, 45, 48, 1, '2019-12-09', '11:15', 'ðŸ˜‚ðŸ˜‚ðŸ˜‚ðŸ˜‚ðŸ˜‚'),
(439, 39, 45, 1, '2019-12-09', '12:14', '      fala chato pra casete '),
(440, 39, 45, 1, '2019-12-09', '12:14', '   tu em cara '),
(441, 39, 45, 1, '2019-12-09', '12:14', 'fala ai '),
(442, 45, 39, 1, '2019-12-09', '12:15', '      ta ruim aqui '),
(443, 45, 39, 1, '2019-12-09', '12:15', 'chef '),
(444, 39, 45, 1, '2019-12-09', '12:15', 'o que ta ruim velho '),
(445, 39, 45, 1, '2019-12-09', '12:16', 'cara responde '),
(446, 45, 39, 1, '2019-12-09', '12:16', ' deu ruim aqui no chat'),
(447, 39, 45, 1, '2019-12-09', '12:16', 'como assim me manda a mensagem '),
(448, 39, 45, 1, '2019-12-09', '12:16', '  ai '),
(449, 45, 39, 1, '2019-12-09', '12:16', 'ta calma ai '),
(450, 45, 39, 1, '2019-12-09', '12:17', ' vou manda um print '),
(451, 39, 45, 1, '2019-12-09', '12:17', 'ta mais tem que ser rÃ¡pido to ocupado tem muito acesso aqui to sozinho no laboratorio'),
(452, 45, 39, 1, '2019-12-09', '12:21', ' cara entÃ£o ta brabo aqui as coisas nÃ£o estÃ£o funcionando os caixas nÃ£o imprimi nada e o certificado nÃ£o funciona '),
(453, 45, 51, 1, '2019-12-12', '10:39', '      nora '),
(454, 45, 51, 1, '2019-12-12', '10:39', 'ðŸ˜…ðŸ˜…ðŸ˜…ðŸ˜…ðŸ˜…ðŸ˜…'),
(455, 45, 51, 1, '2019-12-17', '10:27', '      '),
(456, 45, 51, 1, '2019-12-17', '10:49', '      nora '),
(457, 45, 51, 1, '2019-12-17', '10:49', '   me ajuda ai ['),
(458, 45, 51, 1, '2019-12-17', '10:49', ''),
(459, 45, 51, 1, '2019-12-17', '10:49', 'ðŸ˜…ðŸ˜…ðŸ˜…ðŸ˜…ðŸ˜…'),
(460, 45, 51, 1, '2019-12-17', '12:33', '      nora '),
(461, 45, 51, 1, '2019-12-17', '12:33', '  me ajuda ai '),
(462, 45, 51, 1, '2019-12-17', '12:33', ' norinha '),
(463, 45, 51, 1, '2019-12-17', '13:50', '      noraaa '),
(464, 51, 45, 1, '2019-12-17', '17:16', '      cara chato '),
(465, 51, 45, 1, '2019-12-17', '17:16', ' aff '),
(466, 51, 45, 1, '2019-12-17', '17:16', ' fala cara '),
(467, 45, 39, 1, '2019-12-19', '10:06', '      oi '),
(468, 45, 40, 0, '2019-12-19', '11:01', '      ðŸ˜…ðŸ˜…ðŸ˜…'),
(469, 51, 45, 1, '2019-12-20', '', '      '),
(470, 45, 38, 0, '2019-12-20', '', '      oi '),
(471, 45, 39, 1, '2019-12-20', '', 'chef'),
(472, 39, 45, 1, '2019-12-20', '', '  fala comigo cara '),
(473, 39, 45, 1, '2019-12-20', '', '      bruno'),
(474, 45, 39, 1, '2019-12-20', '', '      oi fala ai '),
(475, 39, 45, 1, '2019-12-20', '', 'terminou no majorica '),
(476, 39, 51, 1, '2019-12-20', '', 'nora'),
(477, 51, 39, 1, '2019-12-20', '', '      '),
(478, 45, 39, 1, '2019-12-20', '', '      sim terminei agora '),
(479, 39, 45, 1, '2019-12-20', '', 'cara da um pulo pra mim no copavicula  ta  atrasando hora la no micro acho que e a rede ou como o computador fica sobre uma surperfice de ferro deve ser o aterramento'),
(480, 45, 39, 1, '2019-12-20', '', 'ok deixa comigo chef '),
(481, 39, 45, 1, '2019-12-20', '', '      bruno '),
(482, 45, 39, 1, '2019-12-20', '', '      oi fala ai '),
(483, 39, 45, 1, '2019-12-20', '', 'ta aonde cara '),
(484, 39, 45, 1, '2019-12-20', '', 'ta aonde cara \n'),
(485, 39, 45, 1, '2019-12-20', '', 'ta aonde cara \n\n'),
(486, 39, 45, 1, '2019-12-20', '', 'ta aonde cara \n\n\n'),
(487, 39, 45, 1, '2019-12-20', '', 'ta aonde cara \n\n\n\n'),
(488, 39, 45, 1, '2019-12-20', '', ''),
(489, 39, 45, 1, '2019-12-20', '', '\n'),
(490, 39, 45, 1, '2019-12-20', '', 'oi'),
(491, 45, 39, 1, '2019-12-20', '', 'fala comigo '),
(492, 39, 45, 1, '2019-12-20', '', 'tem como ver esse acesso pra mim'),
(493, 39, 45, 1, '2019-12-26', '', '      bruno me ajuda ai '),
(494, 51, 43, 0, '2019-12-26', '', '      ðŸ˜ƒðŸ˜ƒðŸ˜ƒðŸ˜ƒ'),
(495, 51, 45, 1, '2019-12-26', '', '      vai a merda'),
(496, 45, 51, 1, '2019-12-26', '', '      oi'),
(497, 45, 51, 1, '2019-12-26', '', '  careca '),
(498, 51, 45, 1, '2019-12-26', '', 'ðŸ˜„ðŸ˜„ðŸ˜„ðŸ˜„ðŸ˜„ðŸ˜„'),
(499, 51, 38, 0, '2019-12-27', '', '      ðŸ˜ƒðŸ˜ƒðŸ˜ƒ'),
(500, 38, 45, 1, '2019-12-27', '', '      '),
(501, 45, 51, 1, '2019-12-27', '', '      nora '),
(502, 45, 51, 1, '2019-12-27', '', '      '),
(503, 45, 51, 1, '2019-12-27', '', ''),
(504, 55, 45, 1, '2020-01-02', '', '      '),
(505, 45, 55, 0, '2020-01-03', '', '      '),
(506, 45, 38, 1, '2020-01-04', '', '      '),
(507, 45, 38, 1, '2020-01-04', '', ''),
(508, 47, 45, 1, '2020-01-06', '', '      me ajuda ai cara '),
(509, 45, 47, 1, '2020-01-06', '', '      fala ai adriano beleza '),
(510, 45, 47, 1, '2020-01-06', '', ' o que tu manda '),
(511, 47, 45, 1, '2020-01-06', '', 'cara o hiper nÃ£o abre  aqui '),
(512, 47, 45, 1, '2020-01-06', '', '  nÃ£o sei o que ouve nisso '),
(513, 47, 45, 1, '2020-01-06', '', '    tenho que resolver as situaÃ§Ãµes que estÃ£o apertando aqui '),
(514, 45, 47, 1, '2020-01-06', '', ' sim entendo ve ai cara qualquer coisa me liga  beleza '),
(515, 47, 45, 1, '2020-01-06', '', 'vlw '),
(516, 45, 51, 1, '2020-01-08', '', '      '),
(517, 51, 45, 1, '2020-01-08', '', '      bruno'),
(518, 45, 47, 1, '2020-01-09', '', '      adriano '),
(519, 45, 47, 1, '2020-01-09', '', ' me ajuda tenho um, cliente que estar com duvidas vou transferir o acesso pra vc pode ?'),
(520, 45, 47, 1, '2020-01-09', '', ''),
(521, 45, 51, 1, '2020-01-13', '', '      nora me ajuda ai '),
(522, 51, 45, 1, '2020-01-13', '', '      '),
(523, 38, 45, 1, '2020-01-13', '', '      boiola');

-- --------------------------------------------------------

--
-- Estrutura da tabela `msg_grav`
--

CREATE TABLE `msg_grav` (
  `id` int(11) NOT NULL,
  `fk_user` int(11) DEFAULT NULL,
  `fk_conver` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `msg_grav`
--

INSERT INTO `msg_grav` (`id`, `fk_user`, `fk_conver`) VALUES
(1, 45, 50),
(2, 45, 48),
(12, 45, 39),
(15, 51, 38),
(16, 38, 45),
(17, 38, 45),
(18, 38, 45),
(23, 45, 40),
(25, 45, 39),
(26, 45, 47),
(29, 38, 45),
(34, 45, 38);

-- --------------------------------------------------------

--
-- Estrutura da tabela `notifica`
--

CREATE TABLE `notifica` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `texto` longtext,
  `dia` date DEFAULT NULL,
  `responsavel` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `notifica`
--

INSERT INTO `notifica` (`id`, `titulo`, `texto`, `dia`, `responsavel`) VALUES
(1, 'REUNIÃƒO GERAL', 'RELATORIOS ', '2019-12-27', '08:30');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `categoria` varchar(100) DEFAULT NULL,
  `modelo` varchar(100) DEFAULT NULL,
  `marca` varchar(100) DEFAULT NULL,
  `descri` longtext,
  `p_custo` decimal(6,2) DEFAULT NULL,
  `p_venda` decimal(6,2) DEFAULT NULL,
  `lug_estoque` int(11) NOT NULL,
  `quant_estoque` int(11) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `nome`, `categoria`, `modelo`, `marca`, `descri`, `p_custo`, `p_venda`, `lug_estoque`, `quant_estoque`, `img`) VALUES
(1, 'Memoria 4GB DDR3', 'notebooks', ' 1600 PC3-12800', 'Adata', '', '150.00', '300.00', 1, 10, 'adata.jpg'),
(2, 'Computador ', 'Equipamento', 'RS2100', 'Bematech', 'NOTA  REFERENTE AO LOTE 21258', '1000.00', '2000.00', 3, 30, 'RS2100.jpg'),
(4, 'CABEÃ‡A', 'PeÃ§as', 'HP1200', 'BEMATECH', 'LOTE REMEÃ‡A PARA CONCERTO ', '100.00', '150.00', 6, 50, 'mecanismo-impressora-bematech-mp4200-th-D_NQ_NP_682410-MLB31716164048_082019-Q.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `relatar_bugs`
--

CREATE TABLE `relatar_bugs` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) DEFAULT NULL,
  `descricao` longtext,
  `nivel` varchar(10) DEFAULT NULL,
  `data_ocorrencia` date DEFAULT NULL,
  `usuario` varchar(20) DEFAULT NULL,
  `setor` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `relatar_suges`
--

CREATE TABLE `relatar_suges` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) DEFAULT NULL,
  `descricao` longtext,
  `nivel` varchar(10) DEFAULT NULL,
  `data_solicitada` date DEFAULT NULL,
  `usuario` varchar(20) DEFAULT NULL,
  `setor` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico`
--

CREATE TABLE `servico` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `servico` varchar(250) DEFAULT NULL,
  `valor` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `servico`
--

INSERT INTO `servico` (`id`, `nome`, `servico`, `valor`) VALUES
(1, 'FormataÃ§Ã£o  ', 'InstalaÃ§Ã£o do sistema Operacional e o hiper', '190,50'),
(2, 'ManutenÃ§Ã£o', 'GERAL', '240,00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sistema`
--

CREATE TABLE `sistema` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `venda` varchar(200) NOT NULL,
  `instalados` varchar(200) NOT NULL,
  `valor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `sistema`
--

INSERT INTO `sistema` (`id`, `nome`, `logo`, `venda`, `instalados`, `valor`) VALUES
(5, 'Hiper ', 'img/software/hiper.png', '0', '0', '0'),
(6, 'NCR', 'img/sistema/COLLIBRI.png', '0', '0', '0'),
(7, 'FDC', 'img/sistema/fdc.jpg', '0', '0', '0');

-- --------------------------------------------------------

--
-- Estrutura da tabela `transf_chamado`
--

CREATE TABLE `transf_chamado` (
  `id` int(11) NOT NULL,
  `origem` int(11) DEFAULT NULL,
  `destino` int(11) DEFAULT NULL,
  `n_chamado` int(11) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `hora` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `transf_chamado`
--

INSERT INTO `transf_chamado` (`id`, `origem`, `destino`, `n_chamado`, `data`, `hora`) VALUES
(1, 45, 47, 1, '2020-01-06', ''),
(2, 45, 47, 4, '2020-01-06', ''),
(3, 45, 47, 12, '2020-01-06', ''),
(4, 45, 47, 12, '2020-01-06', ''),
(5, 45, 47, 10, '2020-01-06', '21:10:04'),
(6, 45, 47, 11, '2020-01-06', '1'),
(7, 47, 45, 1, '2020-01-06', '1'),
(8, 47, 45, 12, '2020-01-06', '1'),
(9, 47, 45, 4, '2020-01-06', '1'),
(10, 47, 45, 10, '2020-01-06', '1'),
(11, 47, 45, 11, '2020-01-06', '1'),
(12, 45, 47, 1, '2020-01-07', '1'),
(13, 45, 47, 12, '2020-01-07', '1'),
(14, 45, 47, 11, '2020-01-07', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `usuario` varchar(250) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `senha` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `perfil` varchar(250) NOT NULL,
  `cargo` varchar(250) NOT NULL,
  `estatus` varchar(250) NOT NULL,
  `rg_cnh` varchar(100) NOT NULL,
  `cpf` varchar(100) NOT NULL,
  `data_nasc` date NOT NULL,
  `telefone` varchar(50) NOT NULL,
  `endereco` text NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `uf` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `nome`, `senha`, `email`, `perfil`, `cargo`, `estatus`, `rg_cnh`, `cpf`, `data_nasc`, `telefone`, `endereco`, `bairro`, `cidade`, `uf`) VALUES
(38, 'ML', 'ML DISPLAY ', '24741431', 'contato@mldisplay.com', 'NCR.png', '4', '0', '123456', '123456', '2019-09-18', '21-2474-1431', 'AV NILO PEÃ‡ANHA 660         ', 'DUQUE DE CAXIAS ', 'RIO DE JANEIRO ', 'RJ'),
(39, 'Fabiano', 'Fabiano de Oliveira Machado ', '1234', 'fabiano@mldisplay.com.brr', 'NCR.png', '4', '0', '20014872-4', '096.187.307-86', '2011-09-18', '21-2474-1431', 'RUA J, 367', 'Fragoso', 'Magé ', 'RJ '),
(40, 'wesley', 'Marcio Wesley ', 'cbwesley', 'contato@mldisplay.com.br', 'default.jpg', '4', '0', '13223930-2', '10879762780', '1983-11-28', '21-994432341', 'AV Nilo PeÃ§anha 633', 'Centro', 'Duque de Caxias', 'RJ'),
(41, 'isabela', 'Isabela Alves Consta', '1708', 'isabelaalvesc17@gmail.com', 'default.jpg', '2', '0', '290025220', '17010813779', '1996-08-17', '21-981193306', 'Rua Cota III, 4', 'Parada de Lucas', 'Rio de Janeiro', 'RJ'),
(42, 'diegosantos', 'Diego Santos ', '1234', 'diegosantos.dsps@gmail.com', 'default.jpg', '3', '0', '21363448-8', '16078367773', '1992-07-06', '21-973477390', 'Rua Laborne do Vale SN Casa13', 'Vila Andorinhas', 'SÃ£o JoÃ£o de Meriti', 'RJ'),
(43, 'bira', 'Leandro Alves Gomes ', '000000', 'Nenhum ', 'default.jpg', '3', '0', '4430215', '09989036713', '1979-08-16', '21-975852719', 'Travessa do Carmo lote D casa 4', 'Vila dos Teles ', 'SÃ£o JoÃ£o de Meriti', 'RJ'),
(44, 'joyce', 'Joyce Santos ', '090498', 'joyce@prontosolucoes.com', 'default.jpg', '2', '0', '258053354', '138153217-94', '1998-04-09', '21-99085-1750', 'Rua Rio das Ostras SN', 'Parque Araruama', 'SÃ£o JoÃ£o de Meriti', 'RJ'),
(45, 'bruno', 'JOSE BRUNO PEREIRA VELEIS ', '24741431', 'bruno.pereira.veleis@hotmail.com', 'NCR.png', '3', '1', '24889908-0', '130.495.967-83', '1993-01-16', '21-99143-5423', 'Rua CARAGUATATUBA 39', 'VILA ROSÃRIO', 'DUQUE DE CAXIAS', 'RJ'),
(46, 'gabriel', 'Gabriel Fernandes Arnaldo de Lima ', 'gustavo4', 'gabriell-lima23@hotmail.com', 'default.jpg', '3', '0', '0000000', '00000', '1994-02-23', '21-96349-2459', 'Rua GastÃ£o Reis 537 ', 'Pauliceia', 'CAXIAS ', 'RJ'),
(47, 'adriano', 'Adriano Malagutte Cardoso', '1234', 'adriano@mldisplay.com.br', 'default.jpg', '3', '0', '26.554.624-2', '158.528.727-09', '0000-00-00', '21-97368-4610', 'RUA IGUACU LT16 QD.56A', 'VILA SAO JOAO', 'SAO JOAO DE MERITI', 'RJ'),
(48, 'beatriz', 'Beatriz de Souza Souto', '1234', 'beatriz.prontosolucoes@gmail.com', 'default.jpg', '3', '0', '28352308-2', '188.966.487-18', '1999-06-09', '21-97196-4897', 'Rua Heraclito GraÃ§a 347', 'Lins ', 'Rio de Janeiro ', 'RJ '),
(49, 'brendon', 'Brendon Santos Bezearra ', '1234', 'brendon@prontosolucoes.com', 'default.jpg', '2', '0', '28240500-0', '174.839.737-06', '1995-11-19', '21-99408-4895', 'Rua Parati, 43  ', 'Covanca ', 'Duque de Caxias ', 'RJ'),
(50, 'janaina', 'Janaina Martins de Aguiar Arruda', '1234', 'vendas@mldisplay.com.br', 'default.jpg', '6', '0', '20559324-7', '105.879.127-31', '1985-07-08', '21-98265-2993', 'Rua Montesquiel lote 24 QD 101', 'Olavo Bilac ', 'Duque de Caxias ', 'RJ'),
(51, 'nora', 'Nora Maria de Amaral ', '1234', 'sac@prontosolucoes.com', 'default.jpg', '1', '0', '08944102-6', '996.441.347-53', '1968-08-02', '21-98365-2037', 'Rua Santarem LOTE 21 QD F ', 'Jardim Santa Rosa ', 'SÃ£o Joao de Meriti', 'RJ '),
(52, 'elcenira', 'Elcenira da Silva Quintanilha Pinto ', '2006831', 'elceniraquintanilha@gmail.com', 'default.jpg', '7', '0', '10471536-2', '075.124.137-77', '1977-08-25', '21-99835-6087', 'Av Joaquim da Costa Lima Lt10 Qd03', 'Parque SÃ£o Vicente', 'Belford Roxo', 'RJ'),
(53, 'davyson', 'Davyson Douglas do  Patrocinio Brito', '2014', 'davysonbrito@gmail.com', 'default.jpg', '5', '0', '26812628-1', '115.484.177-42', '1990-05-14', '21-99466-1662', 'Rua Conde de Bonfim 67', 'Tijuca ', 'Rio de Janeiro ', 'RJ '),
(54, 'Marcus', 'Marcus Vinicius da Silva Vadadares', '1234', 'marcus@mldisplay.com.br', 'default.jpg', '3', '0', '12380811-5', '093.843.377-97', '1982-01-11', 'nenhum ', 'Av Manuel Duarte 1386', 'Parque Lafaiete', 'Duque de Caxias', 'rj '),
(55, 'Roberto', 'Roberto Carlos Teixeira ', '1234', 'roberto@mldisplay.com.br', 'default.jpg', '4', '0', '06.891.928-1', '813.898.337-04', '1964-03-30', '3452-0677', 'Rua Frei Vicente 30', 'Pavuna ', 'Rio de Janeiro ', 'RJ'),
(56, 'cesario', 'Cesario Rodrigues Moreira', '1234', 'cesario@prontosolucoes.com', 'default.jpg', '3', '0', '20.902.768-9', '117.149.117-48', '1987-09-29', '02474-1431', '', '', '', ''),
(57, 'lucas', 'Lucas Ferraz Dolavale ', '1234', 'Lucas@mldisplay.com.br', 'default.jpg', '3', '0', '21.322.745-7', '144.851.037-65', '1991-11-19', '21-98001-8050', 'Rua Luisiana  s/n ', 'Parque dos Califas ', 'Belford', 'rj '),
(58, 'guilherme', 'Guilherme Salazar ', '1234', 'guilherme@mldisplay.com.br', 'default.jpg', '3', '0', '22454445', '0020112001101', '1988-09-05', '21-968717844', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acesso`
--
ALTER TABLE `acesso`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cliente_sys`
--
ALTER TABLE `cliente_sys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contrato`
--
ALTER TABLE `contrato`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equipamento`
--
ALTER TABLE `equipamento`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `estoque`
--
ALTER TABLE `estoque`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fornecedor`
--
ALTER TABLE `fornecedor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `garantia_contrato`
--
ALTER TABLE `garantia_contrato`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hepdesk`
--
ALTER TABLE `hepdesk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `itens_contrato`
--
ALTER TABLE `itens_contrato`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laudo`
--
ALTER TABLE `laudo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mensagens`
--
ALTER TABLE `mensagens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mochila`
--
ALTER TABLE `mochila`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modelo`
--
ALTER TABLE `modelo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modelo_sis`
--
ALTER TABLE `modelo_sis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modulo`
--
ALTER TABLE `modulo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `msg`
--
ALTER TABLE `msg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `msg_grav`
--
ALTER TABLE `msg_grav`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifica`
--
ALTER TABLE `notifica`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `relatar_bugs`
--
ALTER TABLE `relatar_bugs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `relatar_suges`
--
ALTER TABLE `relatar_suges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servico`
--
ALTER TABLE `servico`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sistema`
--
ALTER TABLE `sistema`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transf_chamado`
--
ALTER TABLE `transf_chamado`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acesso`
--
ALTER TABLE `acesso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `cliente_sys`
--
ALTER TABLE `cliente_sys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `contrato`
--
ALTER TABLE `contrato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `equipamento`
--
ALTER TABLE `equipamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `estoque`
--
ALTER TABLE `estoque`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `fornecedor`
--
ALTER TABLE `fornecedor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `garantia_contrato`
--
ALTER TABLE `garantia_contrato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `hepdesk`
--
ALTER TABLE `hepdesk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `itens_contrato`
--
ALTER TABLE `itens_contrato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `laudo`
--
ALTER TABLE `laudo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `marca`
--
ALTER TABLE `marca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `mensagens`
--
ALTER TABLE `mensagens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `mochila`
--
ALTER TABLE `mochila`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `modelo`
--
ALTER TABLE `modelo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `modelo_sis`
--
ALTER TABLE `modelo_sis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `modulo`
--
ALTER TABLE `modulo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `msg`
--
ALTER TABLE `msg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=524;

--
-- AUTO_INCREMENT for table `msg_grav`
--
ALTER TABLE `msg_grav`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `notifica`
--
ALTER TABLE `notifica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `relatar_bugs`
--
ALTER TABLE `relatar_bugs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `relatar_suges`
--
ALTER TABLE `relatar_suges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `servico`
--
ALTER TABLE `servico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sistema`
--
ALTER TABLE `sistema`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `transf_chamado`
--
ALTER TABLE `transf_chamado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
