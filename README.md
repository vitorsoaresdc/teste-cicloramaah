-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Tempo de geração: 07/06/2021 às 05:18
-- Versão do servidor: 5.7.32
-- Versão do PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Banco de dados: `cicloramaah`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `sobrenome` varchar(80) NOT NULL,
  `apelido` varchar(80) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `sobrenome`, `apelido`, `email`) VALUES
(1, 'Breno   ', 'silva', 'breno', 'breno1223@hotmail.com'),
(2, 'Paulo', 'outro teste', 'teste', 'teste@hmail.com'),
(4, 'vitor ', 'costa', 'vitinho', 'vitor12345@hotmail.com'),
(7, 'dudu ', 'costa', 'dudu', 'dudu@hotmail.com'),
(9, 'camila   ', 'costa', 'mimi', 'camila123@gmail.com'),
(10, 'Vitor', 'costa', 'vitinho', 'vitorteste@gmail.com');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
