-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21-Jun-2018 às 19:41
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio_academico`
--

--
-- Estrutura da tabela `monitoria`
--

CREATE TABLE `monitoria` (
  `id_monitoria` int(11) NOT NULL,
  `descricao` varchar(90) NOT NULL,
  `feedback` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `monitoria`
--

INSERT INTO `monitoria` (`id_monitoria`, `descricao`, `feedback`) VALUES
(3, 'fsfrfrgtg', 'wwwwwwwwwwwxxxxxxxscdsvfvd'),
(4, 'oiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii', 'tChaaaaaaaayuuuuuuuuuuuuuuuuuuuuuuuuuu'),
(5, 'oiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii', 'tChaaaaaaaayuuuuuuuuuuuuuuuuuuuuuuuuuu'),
(6, 'O dia foi bastante produtivo no dia do evento', 'O dia foi bastante produtivo no dia do evento mais algumas coisa nao gostei');

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil`
--

CREATE TABLE `perfil` (
  `id_perfil` int(11) NOT NULL,
  `curso` varchar(20) NOT NULL,
  `contato` varchar(15) NOT NULL,
  `facebook` varchar(20) NOT NULL,
  `github` varchar(20) NOT NULL,
  `linkedin` varchar(20) NOT NULL,
  `periodo` int(2) NOT NULL,
  `descricao_pessoal` varchar(200) NOT NULL,
  `arquivo` varchar(40) NOT NULL,
  `data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `perfil`
--

INSERT INTO `perfil` (`id_perfil`, `curso`, `contato`, `facebook`, `github`, `linkedin`, `periodo`, `descricao_pessoal`, `arquivo`, `data`) VALUES
(1, '1', '1', '1', '1', '1', 1, '1', '', '2018-05-31 16:30:23'),
(2, '1', '1', '1', '1', '1', 1, '1', '', '2018-05-31 16:31:44'),
(3, 'ciencia', '1', '1', '1', '1', 1, '1', '', '2018-05-31 16:39:08'),
(4, 'ciencia da computaca', '99999999', 'facebooksjfijidsjfis', 'guthubdsjdojsodjo', 'linkedinikdhishdihsi', 0, 'dskodkosjodjeijdiehifheu', '', '2018-05-31 16:41:06'),
(5, 'engenharia', '993992790', 'facebookdsjdjsid', 'github hsidhishdi', 'smjdjsisidhishduhuh', 4, 'dsnjdbjsbhdyuesvfyevy bduasdyegyfdgeyfgysegfye dgydyeugfyuegsyuf fyegbfybesyfgesy', '64fbb11ddfecaff5d4e84eab9c46f07f.jpg', '2018-05-31 16:46:02'),
(6, 'engenharia', '099998989', 'dbaugeygyfgesyg', 'dbhsbjgsdyfgs', 'bfsyryfsy', 5, 'dfndgbudr dhueshfuheufhe hfueufguegf hseugfusegf', '51d9a501d5bb94ee987b8067bb8204c6.jpg', '2018-05-31 17:03:59'),
(7, 'rgrgr', '5656565', 'hfhthyjyj', 'dfgdrrgr', 'grgrgr', 0, 'fsefefefsefsefe', '05a07876ad9cb125efcdfe7bd3ddf7f6.jpg', '2018-05-31 17:20:28'),
(8, 'rgrgr', '5656565', 'hfhthyjyj', 'dfgdrrgr', 'grgrgr', 0, 'fsefefefsefsefe', '3ba5dd1fbb6aa34dda9a47e61f99760c.jpg', '2018-05-31 17:26:32'),
(9, 'rgrgrttyy', '5656565232', 'hfhthyjyj', 'dfgdrrgr', 'grgrgr', 0, 'fsefefefsefsefeewewe', '6fb22c8ba5e7d20eab7850851e14f34d.jpg', '2018-05-31 17:56:05'),
(10, 'rgrgrttyy', '5656565232', 'hfhthyjyj', 'dfgdrrgr', 'grgrgr', 0, 'fsefefefsefsefeewewe', '06dcd5262c746e6d63d6f2d2cd548228.jpg', '2018-05-31 18:00:12'),
(11, 'engenharia', '099998989', 'dbaugeygyfgesyg', 'dbhsbjgsdyfgs', 'bfsyryfsy', 5, 'dfndgbudr dhueshfuheufhe hfueufguegf hseugfusegf', '6ac30bcbbf5917e83f3b382746b2020a.jpg', '2018-05-31 18:05:24'),
(12, '', '5646464', 'gfgdff', 'gdffgfg', 'gfgf', 0, 'jytjyjyjtyj', 'a6b5ab1ebd14b5c1d4050565364e6197.pdf', '2018-05-31 18:52:29'),
(13, '', '', '', '', '', 0, '', 'd4095c2a6b32d737e7d042489892f792', '2018-06-17 23:36:16'),
(14, '', '', '', '', '', 0, '', 'c7652f8bc471b136447be48c793637ea', '2018-06-17 23:36:42'),
(15, '', '', '', '', '', 0, '', 'b504766805d7ed2c540fab74ed08cfdb', '2018-06-17 23:37:02'),
(16, '', '', '', '', '', 0, '', '5bc7e1946032e243b1e31cb0a59593d6', '2018-06-17 23:39:19'),
(17, '', '', '', '', '', 0, '', 'd5f489bb4ff706453cd7ce55c08a98b2', '2018-06-17 23:39:30'),
(18, '', '', '', '', '', 0, '', 'df59c15eb1ed1a7939a842a4afa7aaa4', '2018-06-17 23:39:36'),
(19, '', '', '', '', '', 0, '', '2fbaa6e58c323ebd13e76925f75d24d3.png', '2018-06-17 23:40:34'),
(20, 'TESTE5', '4567889', 'TESTE', 'TESTE', 'TESTE', 7, 'TESTETSETESESTSET TESTETSETESESTSET TESTETSETESESTSET TESTETSETESESTSET TESTETSETESESTSET TESTETSETESESTTESTETSETESES TESTETSETESESTTESTETSETESEST strtTESTETSETESESTTESTETSETESEST', '575f2667c3f273f73444ff2fa0838b14.png', '2018-06-17 23:43:22'),
(21, 'TESTE5', '4567889', 'TESTE', 'TESTE', 'TESTE', 7, 'TESTETSETESESTSET', '7ee6e7de22ddfeb1f2ccacca5b13be1d.png', '2018-06-17 23:44:55'),
(22, 'TESTE5', '4567889', 'TESTE', 'TESTE', 'TESTE', 7, 'TESTETSETESESTSET', '8466d18a4e28527c37e6c22f47762329.png', '2018-06-17 23:45:53'),
(23, 'TESTE5', '4567889', 'TESTE', 'TESTE', 'TESTE', 7, 'TESTETSETESESTSET', 'fe86517db4f4a32402cb8bc2221ce149.png', '2018-06-17 23:46:00'),
(24, '', '', '', '', '', 0, '', '5c05df1a553af2bf529029430e31ce41', '2018-06-17 23:46:27'),
(25, '', '', '', '', '', 0, '', '', '2018-06-17 23:47:18'),
(26, '', '', '', '', '', 0, '', 'e381457b0aa75a196fa1f8fc0893390b', '2018-06-17 23:47:41'),
(27, '', '', '', '', '', 0, '', '32822e1c3844e9f1d2dba6e8e8c91c78', '2018-06-17 23:47:53'),
(28, '', '', '', '', '', 0, '', '6f85b9f6141d953928b0bf0f9787b6fd', '2018-06-17 23:48:34'),
(29, '', '', '', '', '', 0, '', 'a168f9dee4cf1a92a3bb0e2fffeefb1a', '2018-06-17 23:48:51'),
(30, 'TERTERT', '56567', 'VGERGR', 'GSVDFVDFV', 'WERETER', 0, 'HGYJUGJU', 'c11083dcab521b1761e8afc7a36f0c57', '2018-06-17 23:49:58'),
(31, 'engenharia', '3456789', 'facebook', 'guthub', 'linkedin', 8, 'TESTEFINAL', '1e38871d96bd1b49c55bf44ea74c44fa.png', '2018-06-17 23:52:27'),
(32, 'rede', '9999999', 'facebook|fjisfji ', 'github|fjisjifjsdjf', 'linkedin|maneifnoesn', 3, 'blanlblablsbnslfbalbsfl lorem itsnfbsdf', 'f7acf595a40826551cd0e59df4b6db06', '2018-06-19 17:19:20'),
(33, 'rede', '9999999', 'facebook|fjisfji ', 'github|fjisjifjsdjf', 'linkedin|maneifnoesn', 3, 'blanlblablsbnslfbalbsfl lorem itsnfbsdf', '20c235cd2f890bfef263296ba7ae0e1a', '2018-06-19 17:20:11'),
(34, 'ciencia da computaca', '98765438', 'facebook', 'github ', 'linkedin', 7, 'Um bom profissional acadêmico', '9cbde50392949b3a8f6ba7a7d31db93a', '2018-06-21 00:03:24'),
(35, 'ciencia da computaca', '98765438', 'facebook', 'github ', 'linkedin', 7, 'Um bom profissional acadêmico', '9a1b979b307d58009c3746d06a09fa26', '2018-06-21 00:05:30'),
(36, 'ciencia da computaca', '98765438', 'facebook', 'github ', 'linkedin', 7, 'Um bom profissional acadêmico', '93742b36a867d54ad9079744ee1a7312', '2018-06-21 00:05:40'),
(37, 'ciencia da computaca', '98765438', 'facebook', 'github ', 'linkedin', 7, 'Um bom profissional acadêmico', '507c2f9eb323ebbb8767110d59a02f67.jpg', '2018-06-21 00:08:46');

-- --------------------------------------------------------

--
-- Estrutura da tabela `projeto`
--

CREATE TABLE `projeto` (
  `id_projeto` int(1) NOT NULL,
  `arquivo1` varchar(200) NOT NULL,
  `desc_projeto` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `telaconhecimento`
--

CREATE TABLE `telaconhecimento` (
  `id_conhecimento` int(11) NOT NULL,
  `programacao` varchar(4) NOT NULL,
  `framework` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `telaconhecimento`
--

INSERT INTO `telaconhecimento` (`id_conhecimento`, `programacao`, `framework`) VALUES
(1, 'C', '1'),
(2, 'f#', '1'),
(3, 'F#', 'bootstrap'),
(4, 'F#', 'bootstrap'),
(5, 'F#', 'bootstrap'),
(6, 'F#', 'bootstrap'),
(7, 'F#', 'bootstrap'),
(8, 'F#', 'bootstrap'),
(9, 'F#', 'bootstrap'),
(10, 'F#', 'bootstrap'),
(11, 'F#', 'bootstrap'),
(12, 'F#', 'bootstrap'),
(13, 'rail', 'ionic'),
(14, 'rail', 'ionic'),
(15, 'rail', 'ionic'),
(16, 'rail', 'ionic');

-- --------------------------------------------------------

--
-- Estrutura da tabela `trabalho`
--

CREATE TABLE `trabalho` (
  `id_trabalho` int(11) NOT NULL,
  `arquivo_codigo` varchar(40) NOT NULL,
  `arquivo_modelagem` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `trabalho`
--

INSERT INTO `trabalho` (`id_trabalho`, `arquivo_codigo`, `arquivo_modelagem`) VALUES
(1, '', ''),
(2, '', ''),
(3, '', ''),
(4, '', ''),
(5, '', ''),
(6, '', ''),
(7, '', ''),
(8, '', ''),
(9, '', ''),
(10, '', ''),
(11, '', ''),
(12, '', ''),
(13, '', ''),
(14, '', ''),
(15, '', ''),
(16, '', ''),
(17, 'aacfdc8d1fa6ddd61a1f562d268ea9fd.jpg', 'aacfdc8d1fa6ddd61a1f562d268ea9fd.jpg'),
(18, '', ''),
(19, 'c81cc790bf5611000ec6b23d36443f63.png', 'c81cc790bf5611000ec6b23d36443f63.png'),
(20, 'c0a8b48facb04361f8b586012f4dfa3a.pdf', 'c0a8b48facb04361f8b586012f4dfa3a.pdf'),
(21, 'e2495d4c0a3d2416d9cb52f76326a3f5.pdf', 'e2495d4c0a3d2416d9cb52f76326a3f5.pdf'),
(22, '2bee931cae769b2d23862a2313dc2614.png', '2bee931cae769b2d23862a2313dc2614.png'),
(23, 'e6cb7424dd6bf09dbc146e5267800d4b.txt', 'e6cb7424dd6bf09dbc146e5267800d4b.pdf');

--
-- Acionadores `trabalho`
--
DELIMITER $$
CREATE TRIGGER `Tgr_trabalho_Insert` AFTER INSERT ON `trabalho` FOR EACH ROW BEGIN
    UPDATE trabalho SET arquivo_codigo = arquivo_codigo - NEW.arquivo_codigo
WHERE arquivo_codigo = NEW.id_trabalho;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `matricula` int(8) NOT NULL,
  `senha` varchar(40) NOT NULL,
  `usuario` varchar(10) DEFAULT NULL,
  `professor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `matricula`, `senha`, `usuario`, `professor`) VALUES
(1, 15122310, 'teste543', 'yuri', ''),
(2, 15256650, 'teste123!', 'teste', ''),
(3, 15122310, '7c4a8d09ca3762af61e59520943dc26494f8941b', 'kjkj', ''),
(4, 15122310, '123456', 'teste3', ''),
(5, 98765, 'yuri', 'bgbg', ''),
(6, 987654, 'teste', 'yurihallan', ''),
(7, 987654, 'teste', 'yurihallan', ''),
(8, 987654, 'teste', 'yurihallan', ''),
(9, 987654, 'teste', 'yurihallan', ''),
(10, 987654, 'teste', 'yurihallan', ''),
(11, 987654, 'teste', 'yurihallan', ''),
(12, 987654, 'teste', 'yurihallan', ''),
(13, 987654, 'teste', 'yurihallan', ''),
(14, 987654, 'teste', 'yurihallan', ''),
(15, 987654, 'teste', 'yurihallan', ''),
(16, 987654, 'teste', 'yurihallan', ''),
(17, 987654, 'teste', 'yurihallan', ''),
(18, 987654, 'teste', 'yurihallan', ''),
(19, 987654, 'teste', 'yurihallan', ''),
(20, 55555, 'teste', 'teste', ''),
(21, 55555, 'teste', 'teste', ''),
(22, 4545, 'teste', 'teste3', ''),
(23, 4545, 'teste', 'teste3', ''),
(24, 4545, 'teste', 'teste3', ''),
(25, 4545, 'teste', 'teste3', ''),
(26, 4545, 'teste', 'teste3', ''),
(27, 4545, 'teste', 'teste3', ''),
(28, 4545, 'teste', 'teste3', ''),
(29, 4545, 'teste', 'teste3', ''),
(30, 567, 'valor', 'fafa', ''),
(31, 567, 'valor', 'fafa', ''),
(32, 567, 'valor', 'fafa', 'chato'),
(33, 567, 'valor', 'fafa', ''),
(34, 576786, 'hygjyg', 'tryt', ''),
(35, 576786, 'hygjyg', 'tryt', ''),
(36, 576786, 'hygjyg', 'tryt', ''),
(37, 576786, 'hygjyg', 'tryt', '');

-- --------------------------------------------------------

--
-- Stand-in structure for view `usuarioview`
-- (See below for the actual view)
--
CREATE TABLE `usuarioview` (
`usuario` varchar(10)
,`matricula` int(8)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `usuarioview2`
-- (See below for the actual view)
--
CREATE TABLE `usuarioview2` (
`professor` varchar(50)
,`senha` varchar(40)
,`matricula` int(8)
);

-- --------------------------------------------------------

--
-- Estrutura da tabela `voluntariado`
--

CREATE TABLE `voluntariado` (
  `id_voluntariado` int(11) NOT NULL,
  `descricao` varchar(40) NOT NULL,
  `feedback` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `voluntariado`
--

INSERT INTO `voluntariado` (`id_voluntariado`, `descricao`, `feedback`) VALUES
(1, 'teste', 'bkablad'),
(2, 'Ajudei na elaboração de aulas e palestra', 'foi uma experiencia muito legal!'),
(3, 'teerete', 'bdsdfbdf'),
(4, 'teerete', 'bdsdfbdf'),
(5, 'teerete', 'bdsdfbdf'),
(6, 'teerete', 'bdsdfbdf'),
(7, 'teerete', 'bdsdfbdf'),
(8, '', ''),
(9, '', ''),
(10, 'O dia foi bastante produtivo no dia do e', 'O dia foi bastante produtivo no dia do e'),
(11, 'O dia foi bastante produtivo no dia do e', 'O dia foi bastante produtivo no dia do e'),
(12, 'O dia foi bastante produtivo no dia do e', 'O dia foi bastante produtivo no dia do e'),
(13, 'O dia foi bastante produtivo no dia do e', 'O dia foi bastante produtivo no dia do e'),
(14, 'O dia foi bastante produtivo no dia do e', 'O dia foi bastante produtivo no dia do e'),
(15, 'O dia foi bastante produtivo no dia do e', 'O dia foi bastante produtivo no dia do e'),
(16, 'O dia foi bastante produtivo no dia do e', 'O dia foi bastante produtivo no dia do e'),
(17, 'O dia foi bastante produtivo no dia do e', 'O dia foi bastante produtivo no dia do e');

-- --------------------------------------------------------

--
-- Structure for view `usuarioview`
--
DROP TABLE IF EXISTS `usuarioview`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `usuarioview`  AS  select `u`.`usuario` AS `usuario`,`u`.`matricula` AS `matricula` from `usuario` `u` ;

-- --------------------------------------------------------

--
-- Structure for view `usuarioview2`
--
DROP TABLE IF EXISTS `usuarioview2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `usuarioview2`  AS  select `us`.`professor` AS `professor`,`us`.`senha` AS `senha`,`us`.`matricula` AS `matricula` from `usuario` `us` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `monitoria`
--
ALTER TABLE `monitoria`
  ADD PRIMARY KEY (`id_monitoria`);

--
-- Indexes for table `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id_perfil`);

--
-- Indexes for table `projeto`
--
ALTER TABLE `projeto`
  ADD PRIMARY KEY (`id_projeto`);

--
-- Indexes for table `telaconhecimento`
--
ALTER TABLE `telaconhecimento`
  ADD PRIMARY KEY (`id_conhecimento`);

--
-- Indexes for table `trabalho`
--
ALTER TABLE `trabalho`
  ADD PRIMARY KEY (`id_trabalho`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indexes for table `voluntariado`
--
ALTER TABLE `voluntariado`
  ADD PRIMARY KEY (`id_voluntariado`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `monitoria`
--
ALTER TABLE `monitoria`
  MODIFY `id_monitoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id_perfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `projeto`
--
ALTER TABLE `projeto`
  MODIFY `id_projeto` int(1) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `telaconhecimento`
--
ALTER TABLE `telaconhecimento`
  MODIFY `id_conhecimento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `trabalho`
--
ALTER TABLE `trabalho`
  MODIFY `id_trabalho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `voluntariado`
--
ALTER TABLE `voluntariado`
  MODIFY `id_voluntariado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
