-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 13-Mar-2019 às 21:38
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
-- Database: `escola`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastrando`
--

CREATE TABLE `cadastrando` (
  `id` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `telefone` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `sexo` varchar(250) NOT NULL,
  `dataNascimento` date NOT NULL,
  `modalidade` varchar(250) NOT NULL,
  `cadastrarComo` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cadastrando`
--

INSERT INTO `cadastrando` (`id`, `nome`, `telefone`, `email`, `sexo`, `dataNascimento`, `modalidade`, `cadastrarComo`) VALUES
(3, 'bianca martins', '232133232', 'bianca@gmail.com', 'Feminino', '0000-00-00', 'Danca Contemporanea', 'Professor'),
(4, 'bianca martins', '', 'bianca@gmail.com', '', '0000-00-00', '', ''),
(5, '', '', '', 'Masculino', '0000-00-00', 'Hip Hop', 'Professor'),
(6, '', '', '', 'Masculino', '0000-00-00', 'Hip Hop', 'Professor'),
(7, '', '', '', 'Masculino', '0000-00-00', 'Hip Hop', 'Professor'),
(8, '', '', '', 'Masculino', '0000-00-00', 'Hip Hop', 'Professor'),
(9, '', '', '', 'Masculino', '0000-00-00', 'Hip Hop', 'Professor'),
(10, '', '', '', 'Masculino', '0000-00-00', 'Hip Hop', 'Professor'),
(11, '', '', '', 'Masculino', '0000-00-00', 'Hip Hop', 'Professor'),
(12, '', '', '', 'Masculino', '0000-00-00', 'Hip Hop', 'Professor'),
(13, '', '', '', 'Masculino', '0000-00-00', 'Hip Hop', 'Professor');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `senha` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'bianca martins', 'bianca@gmail.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadastrando`
--
ALTER TABLE `cadastrando`
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
-- AUTO_INCREMENT for table `cadastrando`
--
ALTER TABLE `cadastrando`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
