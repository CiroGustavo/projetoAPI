-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Tempo de geração: 09/04/2019 às 22:56
-- Versão do servidor: 5.5.42
-- Versão do PHP: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE DATABASE  IF NOT EXISTS `voitto_site` ;
USE `voitto_site`;
-- Banco de dados: `voitto_site`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `pessoa_teste`
--

CREATE TABLE `pessoa_teste` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `pessoa_teste`
--

INSERT INTO `pessoa_teste` (`id`, `nome`, `email`) VALUES
(1, 'Anderson Amorim', 'andersonamorim939@gmail.com'),
(2, 'Yan Agassi', 'yanagassi@gmail.com'),
(3, 'Mateus Carpanez', 'mateus.carpanez@voitto.com.br');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `pessoa_teste`
--
ALTER TABLE `pessoa_teste`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `pessoa_teste`
--
ALTER TABLE `pessoa_teste`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;