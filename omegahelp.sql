-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Ago-2021 às 04:11
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `omegahelp`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `anexos`
--

CREATE TABLE `anexos` (
  `ANE_id` int(11) NOT NULL,
  `ANE_arquivo` varchar(200) NOT NULL,
  `CHA_id` int(11) NOT NULL,
  `PRO_id` bigint(20) NOT NULL,
  `RES_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `departamentos`
--

CREATE TABLE `departamentos` (
  `DEP_id` int(11) NOT NULL,
  `DEP_titulo` varchar(100) NOT NULL,
  `DEP_descricao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `departamentos`
--

INSERT INTO `departamentos` (`DEP_id`, `DEP_titulo`, `DEP_descricao`) VALUES
(1, 'Técnico', 'Departamento destinado a atendimentos relacionados a intervenções no software ou análises de ocorrências'),
(2, 'Comercial', 'Departamento destinado ao relacionamento comercial com o cliente'),
(3, 'Suporte', 'Departamento destinado a dúvidas gerais em relação ao software.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresas`
--

CREATE TABLE `empresas` (
  `EMP_id` int(11) NOT NULL,
  `EMP_razao` varchar(200) NOT NULL,
  `EMP_fantasia` varchar(100) NOT NULL,
  `EMP_cnpj` varchar(50) NOT NULL,
  `EMP_ie` varchar(50) NOT NULL,
  `EMP_email` varchar(100) NOT NULL,
  `EMP_tel` varchar(30) NOT NULL,
  `EMP_cep` varchar(20) NOT NULL,
  `EMP_cidade` varchar(50) NOT NULL,
  `EMP_uf` varchar(2) NOT NULL,
  `EMP_bairro` varchar(100) NOT NULL,
  `EMP_endereco` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `empresas`
--

INSERT INTO `empresas` (`EMP_id`, `EMP_razao`, `EMP_fantasia`, `EMP_cnpj`, `EMP_ie`, `EMP_email`, `EMP_tel`, `EMP_cep`, `EMP_cidade`, `EMP_uf`, `EMP_bairro`, `EMP_endereco`) VALUES
(1, 'ARO CONTABILIDADE EIRELI', 'ARO CONTABILIDADE', '11.747.215/0001-97', '', 'societario@arocontabilidade.com.br', '(19) 3621-4042', '13468-160', 'Americana', 'SP', 'Jardim São Paulo', 'Rua das Figueiras, 422');

-- --------------------------------------------------------

--
-- Estrutura da tabela `protocolos`
--

CREATE TABLE `protocolos` (
  `PRO_id` bigint(20) NOT NULL,
  `PRO_assunto` varchar(200) NOT NULL,
  `PRO_texto` text NOT NULL,
  `TIP_id` int(10) NOT NULL,
  `PRO_status` int(2) NOT NULL DEFAULT 0,
  `PRO_prioridade` int(2) NOT NULL DEFAULT 0,
  `PRO_aberto` datetime NOT NULL DEFAULT current_timestamp(),
  `PRO_alterado` datetime DEFAULT NULL,
  `PRO_fechado` datetime DEFAULT NULL,
  `USU_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `respostas`
--

CREATE TABLE `respostas` (
  `RES_id` int(11) NOT NULL,
  `RES_texto` text NOT NULL,
  `RES_data` int(11) NOT NULL DEFAULT current_timestamp(),
  `RES_visivel` int(2) NOT NULL DEFAULT 1,
  `CHA_id` int(11) NOT NULL,
  `USU_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipochamados`
--

CREATE TABLE `tipochamados` (
  `TIP_id` int(11) NOT NULL,
  `TIP_tipo` varchar(200) NOT NULL,
  `TIP_prioridade` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tipochamados`
--

INSERT INTO `tipochamados` (`TIP_id`, `TIP_tipo`, `TIP_prioridade`) VALUES
(1, 'Atualização', ''),
(2, 'Cadastro Produto', ''),
(3, 'Compras', ''),
(4, 'CRM', ''),
(5, 'Cte', ''),
(6, 'Estoque', ''),
(7, 'Expedição', ''),
(8, 'Faturamento', ''),
(9, 'Financeiro', ''),
(10, 'Fornecedor', ''),
(11, 'Geral', ''),
(12, 'License', ''),
(13, 'Nota fiscal', ''),
(14, 'Orçamento', ''),
(15, 'Ordem de Carregamento', ''),
(16, 'PCP', ''),
(17, 'Pedido de Compra', ''),
(18, 'Pedido venda', ''),
(19, 'Protocolo', ''),
(20, 'Qualidade', ''),
(21, 'Recebimento', ''),
(22, 'Solicitação de Compras', ''),
(23, 'SPED', ''),
(24, 'Contas a Pagar', ''),
(25, 'Engenharia', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `USU_id` int(11) NOT NULL,
  `USU_nome` varchar(100) NOT NULL,
  `USU_email` varchar(100) NOT NULL,
  `USU_senha` varchar(50) NOT NULL,
  `USU_imagem` varchar(100) NOT NULL,
  `USU_tel` varchar(20) NOT NULL,
  `USU_nivel` int(3) NOT NULL,
  `EMP_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`USU_id`, `USU_nome`, `USU_email`, `USU_senha`, `USU_imagem`, `USU_tel`, `USU_nivel`, `EMP_id`) VALUES
(1, 'Jonatas Miler de Oliveira', 'jonatas@aroerp.com.br', 'e7a3d94707400e3992cccbb6b41065f5', 'jhony-miler_1626571882.png', '(14) 99707-6506', 3, 1),
(2, 'Teste Usuário', 'teste@teste.com', 'e8d95a51f3af4a3b134bf6bb680a213a', 'teste-usuario_1627101149.png', '(99) 99999-9999', 0, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `anexos`
--
ALTER TABLE `anexos`
  ADD PRIMARY KEY (`ANE_id`);

--
-- Índices para tabela `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`DEP_id`);

--
-- Índices para tabela `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`EMP_id`);

--
-- Índices para tabela `protocolos`
--
ALTER TABLE `protocolos`
  ADD PRIMARY KEY (`PRO_id`);
ALTER TABLE `protocolos` ADD FULLTEXT KEY `PRO_texto` (`PRO_texto`);

--
-- Índices para tabela `respostas`
--
ALTER TABLE `respostas`
  ADD PRIMARY KEY (`RES_id`);

--
-- Índices para tabela `tipochamados`
--
ALTER TABLE `tipochamados`
  ADD PRIMARY KEY (`TIP_id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`USU_id`),
  ADD UNIQUE KEY `USU_email` (`USU_email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `anexos`
--
ALTER TABLE `anexos`
  MODIFY `ANE_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `DEP_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `empresas`
--
ALTER TABLE `empresas`
  MODIFY `EMP_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `protocolos`
--
ALTER TABLE `protocolos`
  MODIFY `PRO_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `respostas`
--
ALTER TABLE `respostas`
  MODIFY `RES_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tipochamados`
--
ALTER TABLE `tipochamados`
  MODIFY `TIP_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `USU_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
