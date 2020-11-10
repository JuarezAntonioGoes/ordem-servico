-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Nov-2020 às 19:16
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `crud`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adicionar_cliente`
--

CREATE TABLE `adicionar_cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cpf` varchar(255) NOT NULL,
  `telefone` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `adicionar_cliente`
--

INSERT INTO `adicionar_cliente` (`id`, `nome`, `cpf`, `telefone`) VALUES
(14, 'Mario', '535.355.555-55', '123'),
(21, 'Alessandra Lima', '111.111.111-11', ''),
(22, 'Jorge', '089.206.876-81', ''),
(23, 'Sérgio Acosta', '089.206.876-8', ''),
(24, 'Felipe costa', '089.206.876-88', ''),
(39, 'Lucas Silva', '031.588.393-93', '323442442'),
(42, 'Joao Faralto', '029.349.242-11', '(35) 9 9828-7328'),
(43, 'Juarez', '033.333.648-48', '(35) 9 9999-9999');

-- --------------------------------------------------------

--
-- Estrutura da tabela `adicionar_servico`
--

CREATE TABLE `adicionar_servico` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cpf` varchar(255) NOT NULL,
  `tecnico` varchar(255) NOT NULL,
  `produto` varchar(255) NOT NULL,
  `serie` varchar(255) NOT NULL,
  `defeito` varchar(255) NOT NULL,
  `observacao` varchar(255) NOT NULL,
  `data` varchar(11) NOT NULL,
  `hora` varchar(11) NOT NULL,
  `situacao_pedido` int(11) NOT NULL,
  `imagem` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `adicionar_servico`
--

INSERT INTO `adicionar_servico` (`id`, `nome`, `cpf`, `tecnico`, `produto`, `serie`, `defeito`, `observacao`, `data`, `hora`, `situacao_pedido`, `imagem`) VALUES
(82, 'Marioas', '535.355.555-55', '', '', '', '', '', '2020-10-14', '19:53:06', 3, '9c65b29c50a8cc66ac0c2d3fc281d624.png'),
(79, 'MarioKb', '535.355.555-55', '', '', '', '', '', '2020-10-22', '19:53:28', 3, ''),
(78, 'Mario', '535.355.555-55', '', '', '', '', '', '2020-11-20', '18:58:16', 1, '62f81570dda732f1e22dd9b7bc4be63ejpeg'),
(77, 'Mario', '535.355.555-55', '', '', '', '', '', '2020-06-23', '22:29:59', 1, '0c6c17fef05d04dc3157be0d40809decdocx'),
(76, 'Mario', '535.355.555-55', '', '', '', 'teste', '', '2020-11-03', '12:24:08', 3, '5d8f2ed50d0d27cd7348e97604244e24'),
(75, 'Romano', '131.298.174-90', '', '', '', '', '', '', '21:42:49', 3, '6e186295052ec0be8a2ead97fcbde63d.png'),
(74, 'Marioaaa', '535.355.555-55', '', '', '', '', '', '2020-06-23', '21:59:54', 0, '0560e1c10d9cc120f5e061a8e3be84b5'),
(73, 'Mario_db', '535.355.555-55', 'Marcelo', '', '', '', 'Produto sem conserto.', '2020-06-23', '21:58:27', 0, ''),
(72, 'Mario_db', '535.355.555-55', '', '', '', '', '', '2020-06-23', '21:58:04', 0, ''),
(71, 'Ronaldo César', '131.298.174-90', '', '', '', '', '', '2020-06-23', '21:57:08', 0, 'f667f27578ab74820222e2527e09e7e5'),
(69, 'Mario', '535.355.555-55', '', '', '', '', '', '2020-06-23', '21:54:28', 0, '94f7ad2fce2a6e8d545b8f3f56e9f2e9'),
(55, 'Coringao', '131.298.174-90', '', '', '', '', '', '2020-05-25', '16:54:55', 1, ''),
(56, 'Coringao', '131.298.174-90', '', '', '', '', '', '2020-05-26', '16:55:18', 1, ''),
(86, 'Jorge', '089.206.876-81', '', '', '1223', 'tela preta', '', '2020-11-05', '21:36:47', 2, '9b13273b1024e2a956578cb5b3de3765'),
(84, 'Juarez', '033.333.648-48', 'Marcelo', 'notebook', '19872', 'tela quebraada', '', '2020-10-14', '20:50:21', 3, 'f3d82e339ceb36f62e86987e1f19010c.jpg'),
(61, 'JuarezzG', '089.206.876-81', '', '', '', '', '', '2020-06-15', '20:29:22', 3, ''),
(62, 'jojoca', '', '', '', '', '', '', '2020-06-29', '17:51:39', 1, ''),
(63, 'Mario', '535.355.555-55', '', '', '', '', '', '2020-06-30', '16:49:46', 3, ''),
(64, 'Mario', '535.355.555-55', '', '', '', '', '', '2020-06-23', '21:40:21', 0, 'dbcd67d585d9c2a1bf648f7f5062f5c8.jpg'),
(65, 'Mario', '535.355.555-55', '', '', '', '', '', '2020-06-23', '21:42:28', 0, '037bb029cd5140a44b42875352e170cc.jpg'),
(66, 'Jorge Igor', '089.206.876-81', '', '', '', '', '', '2020-06-23', '21:48:43', 0, 'ff1373eb0a41f9540c2b7e589b6f6d99.jpg'),
(67, 'Jorge Igor', '089.206.876-81', '', '', '', '', '', '2020-06-23', '21:49:58', 0, 'be8a1f62d79d37de6ce8773e2c871ed9.jpg'),
(68, 'Jorge Igor', '089.206.876-81', '', '', '', '', 'Produto sem conserto.', '2020-06-23', '21:50:31', 0, 'dac46ddca4efebe53b9cb5849fc3cf8b.jpg'),
(85, 'Mario', '535.355.555-55', 'Juarez', 'Notebool', '12222222', '', '', '2020-11-04', '12:58:47', 0, '3d018e4ee47c3ed4b09c27d5182a2f9c');

-- --------------------------------------------------------

--
-- Estrutura da tabela `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(220) DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  `start` datetime DEFAULT NULL,
  `end` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `events`
--

INSERT INTO `events` (`id`, `title`, `color`, `start`, `end`) VALUES
(1, 'Tutorial PagSeguro', '#FFD700', '2019-05-21 15:00:00', '2019-05-21 16:00:00'),
(2, 'Tutorial FullCalendar editar detalhes do evento', '#0071c5', '2019-05-30 15:00:00', '2019-05-30 00:00:00'),
(3, 'Tutorial FullCalendar Visualizar detalhes do evento', '#0071c5', '2019-05-23 15:00:00', '2019-05-23 16:00:00'),
(4, 'Reuniao 3', '#40e0d0', '2019-05-17 17:00:00', '2019-05-17 18:00:00'),
(5, 'Reuniao 4', '#0071c5', '2019-05-17 15:00:00', '2019-05-17 16:00:00'),
(6, 'Reuniao 5', '#FFD700', '2019-05-17 13:00:00', '2019-05-17 14:00:00'),
(7, 'Reuniao 6', '#0071c5', '2019-05-17 11:00:00', '2019-05-17 12:00:00'),
(20, 'Sistema arrombado', '#8B0000', '2020-07-01 00:00:00', '2020-07-31 00:00:00'),
(9, 'Palhaço GOZO', '#0071c5', '2020-07-02 00:00:00', '2020-07-03 00:00:00'),
(21, 'Caçar Comunista', '#8B0000', '2020-08-03 11:00:00', '2020-08-03 07:00:00'),
(11, '', '', '2020-07-04 04:05:00', '2020-07-04 01:00:00'),
(12, 'asss', '', '2020-07-04 03:00:00', '2020-07-04 00:00:00'),
(14, 'Surubão de P.A', '#436EEE', '2020-07-06 00:00:00', '2020-07-23 00:00:00'),
(15, 'MMMM24', '#FFD700', '2020-07-06 00:00:00', '2020-07-07 02:00:00'),
(16, '', '', '2020-07-23 13:00:00', '2020-07-23 16:06:00'),
(18, 'Quaresma do Surubao', '#436EEE', '2020-07-24 13:00:00', '2020-07-30 12:00:00'),
(19, 'jabuticaba', '#228B22', '2020-07-31 00:00:00', '2020-08-01 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `observacao_servico`
--

CREATE TABLE `observacao_servico` (
  `id` int(11) NOT NULL,
  `id_servico` int(11) NOT NULL,
  `observacao` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `observacao_servico`
--

INSERT INTO `observacao_servico` (`id`, `id_servico`, `observacao`) VALUES
(29, 39, 'Olá Mundo!!!'),
(30, 40, 'ola'),
(33, 44, 'Boa Tarde!!'),
(34, 51, 'Boa noite.'),
(36, 33, 'Conserto iniciado'),
(37, 56, 'aas'),
(38, 57, 'Conserto iniciado'),
(39, 58, 'Conserto iniciado'),
(40, 58, 'Produto sem conserto'),
(27, 38, 'Foi notado um aquecimento no Xbox necessitando da troca da fonte'),
(28, 38, 'produto não tem conserto. Favor Buscar!!'),
(41, 44, 'Produto não tem conserto. Favor Buscar!!'),
(42, 62, 'Ola'),
(43, 62, 'dffdsfdfsgd'),
(45, 83, 'Ola bili'),
(46, 82, 'olá'),
(48, 84, 'Equipamento em avaliação'),
(50, 76, 'Teste'),
(51, 86, 'ola'),
(52, 86, 'carro'),
(53, 71, 'teste'),
(54, 76, 'Ola babaca'),
(55, 76, 'Venha buscar seu produto arrombado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tela_login`
--

CREATE TABLE `tela_login` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `login` varchar(250) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `tipo` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tela_login`
--

INSERT INTO `tela_login` (`id`, `nome`, `login`, `senha`, `tipo`) VALUES
(1, 'Admin', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'administrador'),
(6, 'Otavio', 'otavio02', 'e10adc3949ba59abbe56e057f20f883e', 'administrador'),
(7, 'Otaviano', 'Otaviano21', 'e10adc3949ba59abbe56e057f20f883e', 'administrador'),
(8, 'Ronaldo César', 'ronaldo69', 'e10adc3949ba59abbe56e057f20f883e', 'atendente'),
(9, 'Joao Heleno', 'helenojoao', 'e10adc3949ba59abbe56e057f20f883e', 'tecnico');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `adicionar_cliente`
--
ALTER TABLE `adicionar_cliente`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `adicionar_servico`
--
ALTER TABLE `adicionar_servico`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `observacao_servico`
--
ALTER TABLE `observacao_servico`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tela_login`
--
ALTER TABLE `tela_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `adicionar_cliente`
--
ALTER TABLE `adicionar_cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de tabela `adicionar_servico`
--
ALTER TABLE `adicionar_servico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT de tabela `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `observacao_servico`
--
ALTER TABLE `observacao_servico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT de tabela `tela_login`
--
ALTER TABLE `tela_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
