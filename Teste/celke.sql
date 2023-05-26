-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 26-Maio-2023 às 01:07
-- Versão do servidor: 8.0.31
-- versão do PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `celke`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias_produtos`
--

DROP TABLE IF EXISTS `categorias_produtos`;
CREATE TABLE IF NOT EXISTS `categorias_produtos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome_categoria` varchar(220) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Extraindo dados da tabela `categorias_produtos`
--

INSERT INTO `categorias_produtos` (`id`, `nome_categoria`, `created`, `modified`) VALUES
(1, 'Curso de Informática', '2018-09-02 13:59:15', '2018-09-02 13:59:15'),
(2, 'Curso de Mecatrônica', '2018-09-02 13:59:35', '2018-09-02 14:03:47');

-- --------------------------------------------------------

--
-- Estrutura da tabela `comprador_vendas`
--

DROP TABLE IF EXISTS `comprador_vendas`;
CREATE TABLE IF NOT EXISTS `comprador_vendas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome_do_comprador` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `comprador_vendas`
--

INSERT INTO `comprador_vendas` (`id`, `nome_do_comprador`) VALUES
(2, 'Jeremias Santos Ramos'),
(3, 'Carlos Santos Meira'),
(4, 'Mario Gomes Da Silva'),
(5, 'Fernando Alves Castro'),
(6, 'Oseias Ramos Souza');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome_produto` varchar(220) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `categorias_produto_id` int NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome_produto`, `categorias_produto_id`, `created`, `modified`) VALUES
(1, 'Curso de CakePHP', 1, '2018-09-02 14:12:07', '2018-09-02 14:12:07'),
(2, 'Curso básico de mecatrônica', 2, '2018-09-02 14:15:01', '2018-09-02 14:15:01');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

DROP TABLE IF EXISTS `vendas`;
CREATE TABLE IF NOT EXISTS `vendas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `vendedor_venda_id` int NOT NULL,
  `comprador_venda_id` int NOT NULL,
  `nome_do_item` varchar(50) NOT NULL,
  `unidade_de_medida` double NOT NULL,
  `quantidade` int NOT NULL,
  `preco` double NOT NULL,
  `produto_perecivel` tinyint(1) NOT NULL,
  `data_validade` date NOT NULL,
  `data_fabricacao` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `vendas`
--

INSERT INTO `vendas` (`id`, `vendedor_venda_id`, `comprador_venda_id`, `nome_do_item`, `unidade_de_medida`, `quantidade`, `preco`, `produto_perecivel`, `data_validade`, `data_fabricacao`) VALUES
(1, 1, 2, 'Sapato', 2, 90, 180, 0, '2028-05-25', '2023-05-25'),
(2, 2, 4, 'Fardo de marcarão v1', 90, 67, 900, 0, '2023-05-25', '2022-05-25');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendedor_vendas`
--

DROP TABLE IF EXISTS `vendedor_vendas`;
CREATE TABLE IF NOT EXISTS `vendedor_vendas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome_do_vendedor` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `vendedor_vendas`
--

INSERT INTO `vendedor_vendas` (`id`, `nome_do_vendedor`) VALUES
(1, 'Fernando Alves Santos'),
(2, 'Carlos Ramos Da Silva'),
(3, 'Silva Santos');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
