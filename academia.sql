-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Fev-2023 às 20:34
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `academia`
--
CREATE DATABASE IF NOT EXISTS `academia` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `academia`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `matricula` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `emailaluno` varchar(40) NOT NULL,
  `CPF` char(14) NOT NULL,
  `RG` varchar(15) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `sexo` char(1) NOT NULL,
  `datanascimento` date NOT NULL,
  `CEP` char(9) NOT NULL,
  `numerocasa` smallint(6) NOT NULL,
  `complemento` varchar(30) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `status` char(1) DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`matricula`, `nome`, `telefone`, `emailaluno`, `CPF`, `RG`, `senha`, `sexo`, `datanascimento`, `CEP`, `numerocasa`, `complemento`, `foto`, `status`) VALUES
(1, 'Joca da Silva', '(21)99999-9999', 'joca@silva.com', '133.333.333-33', '23.815.589-55', '$2y$10$uAcN4hUFJFAjRUe6O9XlI.1PfUz4ppmI3ML4rnpqtFo6u4FxTWpX.', 'M', '1997-10-20', '23085-610', 55, 'fundos', 'https://randomuser.me/api/portraits/men/14.jpg', 'A'),
(2, 'Linn Dinha', '(21)99999-9997', 'linka@dinn.com', '133.333.333-32', '23.815.589-54', '$2y$10$uAcN4hUFJFAjRUe6O9XlI.1PfUz4ppmI3ML4rnpqtFo6u4FxTWpX.', 'F', '1998-09-15', '26551-090', 55, 'fundos', 'https://randomuser.me/api/portraits/women/72.jpg', 'A'),
(3, 'Edleuza', '(21)98543-1578', 'ed@leuza.com', '156.151.515-61', '12.569.658.5', '$2y$10$ti8sYIpBiAHLY5ZjmIUw5ugMPrAkTTxxVJiWjY6cFfLJyzVvsCsom', 'F', '1988-01-10', '23059020', 55, '1', 'https://randomuser.me/api/portraits/women/70.jpg', 'A'),
(4, 'Rafaela', '(21)98543-2157', 'Rafa@ela.com', '156.151.515-60', '12.569.658.4', '$2y$10$20WXFwINguTB68EsiR78VetWaiWfN24yGP29ETIiD9X9Ce4.BuK0u', 'F', '2001-01-01', '23059060', 20, 'Casa', 'https://randomuser.me/api/portraits/women/60.jpg', 'A'),
(5, 'Pedro Pedrosa', '(21)88888-8888', 'pedro@pedrosa.com', '123.456.123-25', '12.312.312-3', '$2y$10$ZQluUp2R1gY8iZGTc/t2..PZKPoEdYrJdGB3OymSjRl9qgOFzpAue', 'M', '2005-05-05', '23059040', 30, '2', 'https://randomuser.me/api/portraits/men/60.jpg', 'A'),
(6, 'Cristian Silva', '(21)88888-5555', 'cristian@silva.com', '156.151.515-00', '12.569.658.8', '$2y$10$9CUGD9vpnUQsipR9sIOX9ej.KrYtx4zEjo/6Ycx2HwnCtGkIRWdF.', 'M', '2000-06-20', '23059010', 20, 'Casa', 'https://randomuser.me/api/portraits/men/50.jpg', 'A');

-- --------------------------------------------------------

--
-- Estrutura da tabela `atividade`
--

CREATE TABLE `atividade` (
  `idatividade` int(11) NOT NULL,
  `nomeatividade` varchar(60) NOT NULL,
  `descrição` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `atividade`
--

INSERT INTO `atividade` (`idatividade`, `nomeatividade`, `descrição`) VALUES
(1, 'Jump', 'O Jump é uma das aulas mais populares das academias. O Jump consiste em um exercício aeróbico praticado em um mini trampolim ou cama elástica redonda. Nas aulas, os alunos pulam neste mini trampolim fazendo uma série de movimentos diversificados e com int'),
(2, 'Spinning', 'O ciclismo indoor, muitas vezes chamado de spinning, é uma forma de exercício com aulas focadas em resistência, força, intervalos, alta intensidade e recuperação, e envolve o uso de uma bicicleta ergométrica estacionária especial com um volante ponderado ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `aula`
--

CREATE TABLE `aula` (
  `idaula` int(11) NOT NULL,
  `dataaula` date NOT NULL,
  `horario` varchar(30) NOT NULL,
  `idprofessor` int(11) NOT NULL,
  `idatividade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `aula`
--

INSERT INTO `aula` (`idaula`, `dataaula`, `horario`, `idprofessor`, `idatividade`) VALUES
(1, '2022-12-06', '15h as 16:30h', 1, 1),
(2, '2022-12-07', '15h as 16:30h', 1, 1),
(3, '2022-12-08', '14h as 15:30h', 2, 2),
(4, '2022-12-10', '16h as 17:30h', 2, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `aulasaluno`
--

CREATE TABLE `aulasaluno` (
  `idaulasaluno` int(11) NOT NULL,
  `matricula` int(11) NOT NULL,
  `idaula` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `aulasaluno`
--

INSERT INTO `aulasaluno` (`idaulasaluno`, `matricula`, `idaula`) VALUES
(1, 1, 1),
(2, 2, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `idcategoria` int(11) NOT NULL,
  `nomecategoria` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`idcategoria`, `nomecategoria`) VALUES
(1, 'roupas'),
(2, 'acessórios'),
(3, 'suplementos'),
(4, 'diversos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `CPFfuncionario` char(14) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `emailfunc` varchar(40) NOT NULL,
  `RG` char(15) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `sexo` char(1) NOT NULL,
  `CEP` char(9) NOT NULL,
  `numerocasa` smallint(6) NOT NULL,
  `complemento` varchar(30) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `cargo` varchar(40) NOT NULL,
  `status` char(1) DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`CPFfuncionario`, `nome`, `telefone`, `emailfunc`, `RG`, `senha`, `sexo`, `CEP`, `numerocasa`, `complemento`, `foto`, `cargo`, `status`) VALUES
('123.456.789.00', 'Maria das Dores', '(21)99999-9950', 'maria@dores.com', '12.345.678-90', '$2y$10$Absol9xn2R8md5T9ftKXJ.17r2NavLXiORbi6mSN1ny7zz0.DZoZm', 'F', '23085-610', 2, 'Ap101', 'https://randomuser.me/api/portraits/women/1.jpg', 'Professor', 'A'),
('123.456.789.10', 'Zé das Couves', '(21)99999-9920', 'ze@couves.com', '12.345.678-99', '$2y$10$Absol9xn2R8md5T9ftKXJ.17r2NavLXiORbi6mSN1ny7zz0.DZoZm', 'M', '26551-090', 1, 'Quadra 15', 'https://randomuser.me/api/portraits/men/1.jpg', 'Professor', 'A'),
('123.456.789.50', 'Maria dos Amores', '(21)99999-9988', 'maria@amores.com', '12.345.678-00', '$2y$10$Absol9xn2R8md5T9ftKXJ.17r2NavLXiORbi6mSN1ny7zz0.DZoZm', 'F', '23085-610', 2, 'Ap105', 'https://randomuser.me/api/portraits/women/16.jpg', 'Recepcionista', 'A');

-- --------------------------------------------------------

--
-- Estrutura da tabela `habilitaprofessor`
--

CREATE TABLE `habilitaprofessor` (
  `idhabilitacao` int(11) NOT NULL,
  `idatividade` int(11) NOT NULL,
  `idprofessor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `habilitaprofessor`
--

INSERT INTO `habilitaprofessor` (`idhabilitacao`, `idatividade`, `idprofessor`) VALUES
(1, 1, 1),
(2, 2, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `codigoproduto` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `cor` varchar(50) NOT NULL,
  `valor` double NOT NULL,
  `tamanho` char(2) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `idcategoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`codigoproduto`, `nome`, `foto`, `cor`, `valor`, `tamanho`, `quantidade`, `idcategoria`) VALUES
(1, 'Top Red', '../fotosprodutos/63da9b31987b5.webp', 'Vermelho', 25, 'P', 30, 1),
(2, 'Top Grey and Green', '../fotosprodutos/63da9b076b32b.webp', 'Cinza e verde', 20, 'M', 25, 1),
(3, 'Top Branco', '../fotosprodutos/63da9b6280611.webp', 'Branco', 20, 'M', 25, 1),
(5, 'Combo Suplementos', '../fotosprodutos/63da9df578097.webp', '--', 300, '1k', 10, 3),
(6, 'Whey Protein', '../fotosprodutos/63da9e1d8950f.webp', '--', 50, '50', 15, 3),
(7, 'Plastic Jar Mockup', '../fotosprodutos/63dab4bf196b7.webp', '--', 150, 'M', 50, 3),
(8, 'Trio de Suplementos', '../fotosprodutos/63da9ec76a5a6.webp', '--', 150, 'M', 5, 3),
(9, 'Garrafa Inox', '../fotosprodutos/63da9fe38c026.webp', 'Branca', 40, 'P', 20, 4),
(10, 'Garrafa Sport', '../fotosprodutos/63daa00e94497.webp', 'Preta', 35, 'M', 9, 4),
(11, 'Garrafas Mockups', '../fotosprodutos/63daa040bd228.webp', 'Diversas', 30, 'M', 10, 4),
(12, 'Garrafa Clean', '../fotosprodutos/63daa063e6b50.webp', 'Transparente', 40, 'G', 15, 4),
(13, 'Top Rosa', '../fotosprodutos/63daa12a8d216.avif', 'Rosa', 40, 'G', 5, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `idprofessor` int(11) NOT NULL,
  `disponibilidade` varchar(40) NOT NULL,
  `CPFfuncionario` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`idprofessor`, `disponibilidade`, `CPFfuncionario`) VALUES
(1, 'Todos os dias', '123.456.789.00'),
(2, 'Todos os dias', '123.456.789.10');

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda`
--

CREATE TABLE `venda` (
  `idvenda` int(11) NOT NULL,
  `CPFfuncionario` char(14) NOT NULL,
  `valorvenda` double NOT NULL,
  `data` date NOT NULL,
  `codigoproduto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `venda`
--

INSERT INTO `venda` (`idvenda`, `CPFfuncionario`, `valorvenda`, `data`, `codigoproduto`, `quantidade`) VALUES
(1, '123.456.789.50', 40, '2022-12-12', 2, 2),
(2, '123.456.789.50', 50, '2022-12-12', 1, 2);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`matricula`);

--
-- Índices para tabela `atividade`
--
ALTER TABLE `atividade`
  ADD PRIMARY KEY (`idatividade`);

--
-- Índices para tabela `aula`
--
ALTER TABLE `aula`
  ADD PRIMARY KEY (`idaula`),
  ADD KEY `idprofessor` (`idprofessor`),
  ADD KEY `idatividade` (`idatividade`);

--
-- Índices para tabela `aulasaluno`
--
ALTER TABLE `aulasaluno`
  ADD PRIMARY KEY (`idaulasaluno`),
  ADD KEY `matricula` (`matricula`),
  ADD KEY `idaula` (`idaula`);

--
-- Índices para tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idcategoria`);

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`CPFfuncionario`);

--
-- Índices para tabela `habilitaprofessor`
--
ALTER TABLE `habilitaprofessor`
  ADD PRIMARY KEY (`idhabilitacao`),
  ADD KEY `idatividade` (`idatividade`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`codigoproduto`),
  ADD KEY `fk_categoria` (`idcategoria`);

--
-- Índices para tabela `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`idprofessor`),
  ADD KEY `CPFfuncionario` (`CPFfuncionario`);

--
-- Índices para tabela `venda`
--
ALTER TABLE `venda`
  ADD PRIMARY KEY (`idvenda`),
  ADD KEY `CPFfuncionario` (`CPFfuncionario`),
  ADD KEY `codigoproduto` (`codigoproduto`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `aluno`
--
ALTER TABLE `aluno`
  MODIFY `matricula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `atividade`
--
ALTER TABLE `atividade`
  MODIFY `idatividade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `aula`
--
ALTER TABLE `aula`
  MODIFY `idaula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `aulasaluno`
--
ALTER TABLE `aulasaluno`
  MODIFY `idaulasaluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idcategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `habilitaprofessor`
--
ALTER TABLE `habilitaprofessor`
  MODIFY `idhabilitacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `codigoproduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `professor`
--
ALTER TABLE `professor`
  MODIFY `idprofessor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `venda`
--
ALTER TABLE `venda`
  MODIFY `idvenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `aula`
--
ALTER TABLE `aula`
  ADD CONSTRAINT `aula_ibfk_1` FOREIGN KEY (`idprofessor`) REFERENCES `professor` (`idprofessor`),
  ADD CONSTRAINT `aula_ibfk_2` FOREIGN KEY (`idatividade`) REFERENCES `atividade` (`idatividade`);

--
-- Limitadores para a tabela `aulasaluno`
--
ALTER TABLE `aulasaluno`
  ADD CONSTRAINT `aulasaluno_ibfk_1` FOREIGN KEY (`matricula`) REFERENCES `aluno` (`matricula`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `aulasaluno_ibfk_2` FOREIGN KEY (`idaula`) REFERENCES `aula` (`idaula`);

--
-- Limitadores para a tabela `habilitaprofessor`
--
ALTER TABLE `habilitaprofessor`
  ADD CONSTRAINT `habilitaprofessor_ibfk_1` FOREIGN KEY (`idatividade`) REFERENCES `atividade` (`idatividade`);

--
-- Limitadores para a tabela `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `fk_categoria` FOREIGN KEY (`idcategoria`) REFERENCES `categoria` (`idcategoria`);

--
-- Limitadores para a tabela `professor`
--
ALTER TABLE `professor`
  ADD CONSTRAINT `professor_ibfk_1` FOREIGN KEY (`CPFfuncionario`) REFERENCES `funcionario` (`CPFfuncionario`);

--
-- Limitadores para a tabela `venda`
--
ALTER TABLE `venda`
  ADD CONSTRAINT `venda_ibfk_1` FOREIGN KEY (`CPFfuncionario`) REFERENCES `funcionario` (`CPFfuncionario`),
  ADD CONSTRAINT `venda_ibfk_2` FOREIGN KEY (`codigoproduto`) REFERENCES `produto` (`codigoproduto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
