-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 07, 2017 at 06:47 AM
-- Server version: 5.7.17
-- PHP Version: 7.0.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `SRCS2`
--

-- --------------------------------------------------------

--
-- Table structure for table `anuncios`
--

CREATE TABLE `anuncios` (
  `id` int(22) NOT NULL,
  `assunto` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `data` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `anuncios`
--

INSERT INTO `anuncios` (`id`, `assunto`, `descricao`, `data`) VALUES
(1, 'Teste', 'duaaaa', 'Friday 7th  April 2017 02:28:54 AM');

-- --------------------------------------------------------

--
-- Table structure for table `registro`
--

CREATE TABLE `registro` (
  `registroid` varchar(255) NOT NULL,
  `primeironome` varchar(255) NOT NULL,
  `nomedomeio` varchar(255) NOT NULL,
  `ultimonome` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `aniversario` varchar(255) NOT NULL,
  `genero` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `fotografia` varchar(255) NOT NULL,
  `assinatura` varchar(255) NOT NULL,
  `data` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `registro`
--

INSERT INTO `registro` (`registroid`, `primeironome`, `nomedomeio`, `ultimonome`, `endereco`, `aniversario`, `genero`, `telefone`, `fotografia`, `assinatura`, `data`) VALUES
('ID:18267102', 'JosÃ©', 'Manhica', 'Andrades', 'Maputo', '21/07/1993', 'Masculino', '867777770', 'photos/20170310_165237.jpg', 'Admin', '6th  April 2017'),
('ID:23356382', 'Abd', 'Arfe Amade', 'Domingos', 'Inhambane', '11/03/2016', 'Masculino', '869395843', 'photos/13962762_10206816739552462_6993602567471478882_n.jpg', 'abd.domingos', '23 de Fevereiro de 2017');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `usuarioid` int(22) NOT NULL,
  `nomecompleto` varchar(255) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `genero` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL DEFAULT '123456',
  `cargo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`usuarioid`, `nomecompleto`, `email`, `genero`, `endereco`, `usuario`, `senha`, `cargo`) VALUES
(12951, 'Abd Arfe Amade Domingos', 'admin@gmail.com', 'Masculino', 'Inhambane', 'admin', 'arfito', 'Admin'),
(12953, 'Abd Arfe Amade Domingos', 'abdizzoh@gmail.com', 'Masculino', 'Inhambane', 'abd.domingos', '123456', 'Usuario'),
(12954, 'Movitel User', NULL, 'Masculino', 'Casa', 'Movitel', '123456', 'Usuario'),
(12955, 'Teste', NULL, 'Masculino', 'Inhambane', 'teste', '123456', 'Usuario');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anuncios`
--
ALTER TABLE `anuncios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registro`
--
ALTER TABLE `registro`
  ADD UNIQUE KEY `regstrationid` (`registroid`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuarioid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anuncios`
--
ALTER TABLE `anuncios`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuarioid` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12956;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
