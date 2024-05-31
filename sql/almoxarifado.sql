-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21/05/2024 às 01:25
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `almoxarifado`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_ferramentas`
--

CREATE TABLE `tb_ferramentas` (
  `cod_FERRAMENTA` int(11) UNSIGNED NOT NULL,
  `nome_ferramenta` varchar(80) DEFAULT NULL,
  `marca_ferramenta` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `cod_usuario` int(11) UNSIGNED NOT NULL,
  `login_usuario` varchar(30) DEFAULT NULL,
  `senha_usuario` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario_ferramenta`
--

CREATE TABLE `usuario_ferramenta` (
  `id_usuario` int(10) UNSIGNED DEFAULT NULL,
  `id_ferramenta` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tb_ferramentas`
--
ALTER TABLE `tb_ferramentas`
  ADD PRIMARY KEY (`cod_FERRAMENTA`);

--
-- Índices de tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`cod_usuario`);

--
-- Índices de tabela `usuario_ferramenta`
--
ALTER TABLE `usuario_ferramenta`
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_ferramenta` (`id_ferramenta`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_ferramentas`
--
ALTER TABLE `tb_ferramentas`
  MODIFY `cod_FERRAMENTA` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `cod_usuario` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `usuario_ferramenta`
--
ALTER TABLE `usuario_ferramenta`
  ADD CONSTRAINT `usuario_ferramenta_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuario` (`cod_usuario`),
  ADD CONSTRAINT `usuario_ferramenta_ibfk_2` FOREIGN KEY (`id_ferramenta`) REFERENCES `tb_ferramentas` (`cod_FERRAMENTA`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
