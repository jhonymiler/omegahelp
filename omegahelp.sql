-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Out-2021 às 01:45
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
  `CHA_id` bigint(11) DEFAULT NULL,
  `PRO_id` bigint(20) DEFAULT NULL,
  `RES_id` bigint(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `anexos`
--

INSERT INTO `anexos` (`ANE_id`, `ANE_arquivo`, `CHA_id`, `PRO_id`, `RES_id`) VALUES
(113, 'escopo-documentacao-fiscal_086679.docx', NULL, NULL, 14),
(114, 'ncm-faturamento-2021_096606.xlsx', NULL, NULL, 14),
(115, 'o-livro-que-nao-tinha-fim_106580.pdf', NULL, NULL, 14),
(116, '1e06e107f0ca520aed316957b685ef5c_549625.jpg', NULL, NULL, 15),
(117, 'depositphotos-2491833-stock-photo-haliaeetus-leucocephalus_555479.jpg', NULL, NULL, 15),
(118, '1e06e107f0ca520aed316957b685ef5c_738309.jpg', NULL, 25, NULL),
(119, 'cadastro-usuarios_747120.png', NULL, 25, NULL),
(120, 'depositphotos-2491833-stock-photo-haliaeetus-leucocephalus_752836.jpg', NULL, 25, NULL),
(121, 'escopo-documentacao-fiscal_763952.docx', NULL, 25, NULL),
(122, 'login_770703.png', NULL, 25, NULL),
(123, 'ncm-faturamento-2021_777914.xlsx', NULL, 25, NULL),
(124, 'o-livro-que-nao-tinha-fim_786650.pdf', NULL, 25, NULL),
(125, 'teste_827413.xml', NULL, 25, NULL),
(126, 'image_766251.png', NULL, 26, NULL),
(127, 'escopo-documentacao-fiscal_735696.docx', NULL, NULL, 17),
(128, 'ncm-faturamento-2021_742087.xlsx', NULL, NULL, 17),
(129, '1e06e107f0ca520aed316957b685ef5c_921224.jpg', NULL, NULL, 19),
(130, 'cadastro-usuarios_931285.png', NULL, NULL, 19),
(131, 'depositphotos-2491833-stock-photo-haliaeetus-leucocephalus_936982.jpg', NULL, NULL, 19),
(132, 'escopo-documentacao-fiscal_983649.docx', NULL, NULL, 19),
(133, 'home_995906.png', NULL, NULL, 19),
(134, 'home2_003535.png', NULL, NULL, 19),
(135, 'login_010021.png', NULL, NULL, 19),
(136, 'ncm-faturamento-2021_018810.xlsx', NULL, NULL, 19),
(137, 'o-livro-que-nao-tinha-fim_028739.pdf', NULL, NULL, 19),
(138, 'teste_109961.xml', NULL, NULL, 19),
(139, 'depositphotos-2491833-stock-photo-haliaeetus-leucocephalus_149607.jpg', NULL, 27, NULL),
(140, 'escopo-documentacao-fiscal_211681.docx', NULL, 27, NULL),
(141, 'login_218148.png', NULL, 27, NULL),
(142, 'ncm-faturamento-2021_222793.xlsx', NULL, 27, NULL),
(143, 'cadastro-usuarios_362306.png', NULL, 28, NULL),
(144, 'home_366593.png', NULL, 28, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `config`
--

CREATE TABLE `config` (
  `CON_id` int(11) NOT NULL,
  `CON_email` varchar(200) NOT NULL,
  `CON_host` varchar(200) NOT NULL,
  `CON_auth` tinyint(1) NOT NULL DEFAULT 1,
  `CON_secure` varchar(200) NOT NULL,
  `CON_port` varchar(200) NOT NULL,
  `CON_user` varchar(200) NOT NULL,
  `CON_pass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `config`
--

INSERT INTO `config` (`CON_id`, `CON_email`, `CON_host`, `CON_auth`, `CON_secure`, `CON_port`, `CON_user`, `CON_pass`) VALUES
(1, 'jonatas@aroerp.com.br', 'mail.aroerp.com.br', 1, 'tls', '465', 'jonatas@aroerp.com.br', 'commaster');

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
(1, 'ARO CONTABILIDADE EIRELI', 'ARO CONTABILIDADE', '11.747.215/0001-97', '', 'societario@arocontabilidade.com.br', '(19) 3621-4042', '13468-160', 'Americana', 'SP', 'Jardim São Paulo', 'Rua das Figueiras, 422'),
(2, 'Microsoft', 'Microsoft', '99.999.999/9999-99', '', 'jonatas@aroerp.com.br', '(14) 9986-8830', '18708-040', 'Avaré', 'SP', 'Vila Três Marias', 'Avenida Três Marias, 99'),
(3, 'Spacex', 'Spacex', '99.999.999/9999-99', '', 'jonatasmiler@gmail.com', '(14) 9986-8830', '18708-040', 'Avaré', 'SP', 'Vila Três Marias', 'Avenida Três Marias, 99');

-- --------------------------------------------------------

--
-- Estrutura da tabela `protocolos`
--

CREATE TABLE `protocolos` (
  `PRO_id` bigint(20) NOT NULL,
  `PRO_assunto` varchar(200) NOT NULL,
  `PRO_texto` text NOT NULL,
  `TIP_id` int(10) NOT NULL,
  `PRO_status` int(2) NOT NULL DEFAULT 1,
  `PRO_prioridade` int(2) NOT NULL DEFAULT 1,
  `PRO_aberto` datetime NOT NULL DEFAULT current_timestamp(),
  `PRO_alterado` datetime DEFAULT NULL,
  `PRO_fechado` datetime DEFAULT NULL,
  `USU_id` int(11) NOT NULL,
  `DEP_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `protocolos`
--

INSERT INTO `protocolos` (`PRO_id`, `PRO_assunto`, `PRO_texto`, `TIP_id`, `PRO_status`, `PRO_prioridade`, `PRO_aberto`, `PRO_alterado`, `PRO_fechado`, `USU_id`, `DEP_id`) VALUES
(24, 'Testando Protocolo', 'Teste&nbsp;Teste&nbsp;Teste&nbsp;Teste&nbsp;Teste&nbsp;Teste&nbsp;Teste&nbsp;Teste&nbsp;Teste&nbsp;Teste&nbsp;Teste&nbsp;Teste&nbsp;Teste&nbsp;Teste&nbsp;Teste&nbsp;Teste&nbsp;', 2, 1, 1, '2021-08-28 18:04:04', NULL, NULL, 2, 0),
(25, 'Testando outro Ticket', 'Testando outro tiquetTestando outro tiquetTestando outro tiquetTestando outro tiquetTestando outro tiquetTestando outro tiquet', 4, 1, 1, '2021-08-28 18:18:42', NULL, NULL, 2, 0),
(26, 'Não consigo tirar a nota', 'Está dando uma mesagem de erro, e não consigo faturar a nota.&nbsp;', 8, 1, 1, '2021-08-28 19:04:06', NULL, NULL, 2, 0),
(27, 'Comé que eu tiro nota?', 'Em linguística, a noção de texto é ampla e ainda aberta a uma definição mais precisa. Grosso modo, pode ser entendido como manifestação linguística das ideias de um autor, que serão interpretadas pelo leitor de acordo com seus conhecimentos linguísticos e culturais. Seu tamanho é variável. Wikipédia', 8, 1, 1, '2021-09-12 00:47:34', NULL, NULL, 9, 0),
(28, 'Não está dando baixa nas parcelas', '&nbsp;&nbsp;&nbsp;&nbsp;Texto é uma produção, verbal ou não verbal, que se constitui com algum código, no intuito de comunicar algo a alguém, em determinado tempo e espaço. Sua definição ampla se deve ao fato de também abranger diversos formatos.Pode-se compreender o texto verbal, oral e escrito, como uma prática social que utiliza estruturas verbais, organizadas e caracterizadas por suas estruturas linguísticas e sua função social, com vistas a cumprir um papel pessoal ou coletivo na vida humana. O mesmo se aplica aos textos não verbais, também compreendidos como uma ação social, diferenciando-se somente em função das estruturas e códigos utilizados.', 9, 1, 1, '2021-09-12 00:48:30', NULL, NULL, 9, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `respostas`
--

CREATE TABLE `respostas` (
  `RES_id` int(11) NOT NULL,
  `RES_texto` text NOT NULL,
  `RES_data` datetime NOT NULL DEFAULT current_timestamp(),
  `RES_visivel` int(2) NOT NULL DEFAULT 1,
  `PRO_id` int(11) NOT NULL,
  `USU_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `respostas`
--

INSERT INTO `respostas` (`RES_id`, `RES_texto`, `RES_data`, `RES_visivel`, `PRO_id`, `USU_id`) VALUES
(14, 'sdafa sdfa dfasd asdf asd asd f', '2021-08-28 18:11:39', 1, 24, 2),
(15, 'ssssssssssssssssssssssssssssssssssssss', '2021-08-28 18:12:07', 1, 24, 2),
(16, 'xaaxaxaxaxaxaxaxaxaxaax', '2021-08-28 18:12:34', 1, 24, 2),
(17, 'Não to conseguindooooo', '2021-08-28 19:04:46', 1, 26, 2),
(18, 'Já conseguiu ver pra mim? O caminhão ta aki esperandooo', '2021-08-28 19:05:17', 1, 26, 2),
(19, 'Este método fornece uma alternativa útil ao order()método, permitindo que você selecione as colunas que deseja ordenar usando o columns()seletor flexível e ordená-las na direção especificada.A ordenação de várias colunas é obtida garantindo que o seletor de coluna corresponda a várias colunas (a ordenação de uma única coluna é realizada se apenas uma coluna for correspondida ou usando o column().order()método). A ordem das colunas correspondentes define a sequência de prioridade na qual a ordem da tabela é aplicada.', '2021-09-04 13:35:44', 1, 24, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `statusprotocolos`
--

CREATE TABLE `statusprotocolos` (
  `STA_id` int(11) NOT NULL,
  `STA_status` varchar(200) NOT NULL,
  `STA_corHtml` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `statusprotocolos`
--

INSERT INTO `statusprotocolos` (`STA_id`, `STA_status`, `STA_corHtml`) VALUES
(1, 'Aguardando', 'warning'),
(2, 'Respondido', 'success'),
(3, 'Em Avaliação', 'info'),
(4, 'Aguardando Retorno do Cliente', 'error'),
(5, 'Aguardando Retorno Interna', 'info'),
(6, 'Finalizado', 'success');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipoprotocolos`
--

CREATE TABLE `tipoprotocolos` (
  `TIP_id` int(11) NOT NULL,
  `TIP_tipo` varchar(200) NOT NULL,
  `TIP_prioridade` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tipoprotocolos`
--

INSERT INTO `tipoprotocolos` (`TIP_id`, `TIP_tipo`, `TIP_prioridade`) VALUES
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
  `EMP_id` int(11) NOT NULL,
  `DEP_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`USU_id`, `USU_nome`, `USU_email`, `USU_senha`, `USU_imagem`, `USU_tel`, `USU_nivel`, `EMP_id`, `DEP_id`) VALUES
(1, 'Jonatas Miler', 'jonatas@aroerp.com.br', 'e7a3d94707400e3992cccbb6b41065f5', 'jonatas-miler_1630194557.png', '(14) 99707-6506', 3, 1, NULL),
(2, 'Teste Usuário', 'usuario@teste.com.br', '76bb1ff3699e0af3750e9fa119dea44e', 'teste-usuario_1630763776.png', '(99) 99999-9999', 0, 1, 0),
(7, 'Usuário Teste 2', 'teste@teste.com.br', '76bb1ff3699e0af3750e9fa119dea44e', 'usuario-teste-2_1630794461.png', '(99) 99999-9999', 1, 1, 3),
(9, 'Jhon Snow', 'jhonsnow@teste.com.br', '76bb1ff3699e0af3750e9fa119dea44e', 'jhon-snow_1631418350.png', '(99) 99999-9999', 0, 3, 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `anexos`
--
ALTER TABLE `anexos`
  ADD PRIMARY KEY (`ANE_id`);

--
-- Índices para tabela `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`CON_id`);

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
-- Índices para tabela `statusprotocolos`
--
ALTER TABLE `statusprotocolos`
  ADD PRIMARY KEY (`STA_id`);

--
-- Índices para tabela `tipoprotocolos`
--
ALTER TABLE `tipoprotocolos`
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
  MODIFY `ANE_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT de tabela `config`
--
ALTER TABLE `config`
  MODIFY `CON_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `DEP_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `empresas`
--
ALTER TABLE `empresas`
  MODIFY `EMP_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `protocolos`
--
ALTER TABLE `protocolos`
  MODIFY `PRO_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de tabela `respostas`
--
ALTER TABLE `respostas`
  MODIFY `RES_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `statusprotocolos`
--
ALTER TABLE `statusprotocolos`
  MODIFY `STA_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tipoprotocolos`
--
ALTER TABLE `tipoprotocolos`
  MODIFY `TIP_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `USU_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
